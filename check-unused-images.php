<?php

echo "🔍 Mencari gambar yang tidak terpakai...\n\n";

// Cari semua file gambar
$images = [];
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('public/img', RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if ($file->isFile() && preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $file->getFilename())) {
        $images[] = [
            'path' => $file->getPathname(),
            'name' => $file->getFilename(),
            'size' => $file->getSize()
        ];
    }
}

echo "Total gambar ditemukan: " . count($images) . "\n\n";

// Cari semua file blade
$bladeContent = '';
$bladeIterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('resources/views', RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($bladeIterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $bladeContent .= file_get_contents($file->getPathname()) . "\n";
    }
}

// Cari di CSS files
$cssContent = '';
if (file_exists('public/css')) {
    $cssIterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('public/css', RecursiveDirectoryIterator::SKIP_DOTS)
    );
    foreach ($cssIterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'css') {
            $cssContent .= file_get_contents($file->getPathname()) . "\n";
        }
    }
}

// Cari di JS files
$jsContent = '';
if (file_exists('public/js')) {
    $jsIterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator('public/js', RecursiveDirectoryIterator::SKIP_DOTS)
    );
    foreach ($jsIterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'js') {
            $jsContent .= file_get_contents($file->getPathname()) . "\n";
        }
    }
}

// Gabungkan semua konten
$allContent = $bladeContent . $cssContent . $jsContent;

// Cari gambar yang tidak terpakai
$unusedImages = [];
$usedImages = [];

foreach ($images as $image) {
    $found = false;

    // Cek dengan nama file
    if (strpos($allContent, $image['name']) !== false) {
        $found = true;
    }

    // Cek dengan path relatif
    $relativePath = str_replace('public/', '', $image['path']);
    if (strpos($allContent, $relativePath) !== false) {
        $found = true;
    }

    // Cek tanpa ekstensi (kadang ada yang pakai tanpa ekstensi)
    $nameWithoutExt = pathinfo($image['name'], PATHINFO_FILENAME);
    if (strlen($nameWithoutExt) > 3 && strpos($allContent, $nameWithoutExt) !== false) {
        $found = true;
    }

    if ($found) {
        $usedImages[] = $image;
    } else {
        $unusedImages[] = $image;
    }
}

// Tampilkan hasil
echo "=== GAMBAR YANG TIDAK TERPAKAI ===\n\n";

if (empty($unusedImages)) {
    echo "✅ Tidak ada gambar yang tidak terpakai!\n";
} else {
    $totalSize = 0;
    foreach ($unusedImages as $image) {
        $size = $image['size'];
        $totalSize += $size;
        $sizeFormatted = number_format($size / 1024, 2) . " KB";
        if ($size > 1024 * 1024) {
            $sizeFormatted = number_format($size / 1024 / 1024, 2) . " MB";
        }
        echo "❌ {$image['path']} ({$sizeFormatted})\n";
    }

    echo "\n=== STATISTIK ===\n";
    echo "Total gambar: " . count($images) . "\n";
    echo "Terpakai: " . count($usedImages) . "\n";
    echo "Tidak terpakai: " . count($unusedImages) . "\n";

    $totalSizeFormatted = number_format($totalSize / 1024 / 1024, 2) . " MB";
    echo "Total ukuran yang bisa dihapus: " . $totalSizeFormatted . "\n\n";

    // Simpan daftar file untuk dihapus
    file_put_contents('unused-images.txt', implode("\n", array_column($unusedImages, 'path')));
    echo "📝 Daftar file disimpan di: unused-images.txt\n";
}
