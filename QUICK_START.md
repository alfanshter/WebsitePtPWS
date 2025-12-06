# 🚀 Quick Start Guide - Optimasi Website PT PWS

## Langkah-Langkah Cepat untuk Deployment

### 1️⃣ Persiapan Awal (One-Time Setup)

```bash
# Masuk ke direktori project
cd /path/to/ptpwslara

# Install dependencies (jika belum)
composer install --optimize-autoloader --no-dev

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Setup database di .env
# Edit DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Migrasi database
php artisan migrate --force

# Berikan permission pada script
chmod +x optimize.sh
```

### 2️⃣ Jalankan Optimasi

```bash
# Jalankan script optimasi otomatis
./optimize.sh
```

Atau manual:

```bash
# Clear semua cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear-views

# Build cache untuk production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize --classmap-authoritative

# Set permissions
chmod -R 775 storage bootstrap/cache
```

### 3️⃣ Setup Server (Apache)

```bash
# Merge .htaccess optimization
cat public/.htaccess.optimization >> public/.htaccess

# Atau copy manual isi file .htaccess.optimization ke .htaccess
```

### 4️⃣ Verifikasi

```bash
# Test aplikasi
php artisan serve

# Buka browser: http://localhost:8000

# Check routes
php artisan route:list

# Check cache status
php artisan about
```

---

## ⚡ Setelah Update Code/Content

```bash
# Clear view cache
php artisan cache:clear-views

# Atau clear semua
./optimize.sh
```

---

## 🔧 Konfigurasi Production (.env)

```env
APP_ENV=production
APP_DEBUG=false

# Recommended untuk performa
CACHE_DRIVER=file  # atau redis jika available
SESSION_DRIVER=file  # atau redis jika available
QUEUE_CONNECTION=database  # atau redis jika available

# Security
SESSION_SECURE_COOKIE=true  # Jika menggunakan HTTPS
```

---

## 📊 Test Performance

### Online Tools:
1. **PageSpeed Insights**: https://pagespeed.web.dev/
2. **GTmetrix**: https://gtmetrix.com/
3. **Pingdom**: https://tools.pingdom.com/

### Expected Results:
- ✅ PageSpeed Score: 90+
- ✅ GTmetrix Grade: A
- ✅ Load Time: < 3 seconds
- ✅ Page Size: < 2MB

---

## 🎯 Performance Checklist

- [x] Response caching implemented
- [x] Route optimization
- [x] Middleware optimization
- [x] SEO meta tags
- [x] Lazy loading images
- [x] Async CSS loading
- [x] Security headers
- [x] HTML minification
- [ ] SSL Certificate installed
- [ ] Redis cache setup (optional)
- [ ] CDN setup (optional)
- [ ] Image compression
- [ ] WebP format conversion

---

## 💡 Tips Pro

### 1. Monitoring
```bash
# Watch logs in real-time
tail -f storage/logs/laravel.log

# Monitor cache hits
php artisan cache:table
```

### 2. Backup Before Deploy
```bash
# Backup database
php artisan backup:run  # jika menggunakan spatie/laravel-backup

# Atau manual
mysqldump -u username -p database_name > backup.sql
```

### 3. Zero Downtime Deployment
```bash
# Gunakan php artisan down/up
php artisan down --message="Upgrading system" --retry=60
# Deploy code
# Run migrations
./optimize.sh
php artisan up
```

---

## 🆘 Troubleshooting Cepat

### Problem: Error 500
```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear cache
php artisan cache:clear
php artisan config:clear

# Fix permissions
chmod -R 775 storage bootstrap/cache
```

### Problem: Routes not found
```bash
php artisan route:clear
php artisan cache:clear
```

### Problem: Views not updating
```bash
php artisan view:clear
php artisan cache:clear-views
```

### Problem: Slow loading
```bash
# Check if cache is enabled
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check .htaccess compression
# Check server OPcache status
```

---

## 📞 Quick Commands Reference

| Task | Command |
|------|---------|
| Clear all cache | `php artisan optimize:clear` |
| Build all cache | `./optimize.sh` |
| Clear view cache | `php artisan cache:clear-views` |
| List routes | `php artisan route:list` |
| Check config | `php artisan config:show` |
| App status | `php artisan about` |
| Serve locally | `php artisan serve` |
| Generate key | `php artisan key:generate` |

---

## 📈 Monitoring Performance

### Server Level:
```bash
# CPU & Memory usage
top
htop

# Apache/Nginx status
systemctl status apache2
systemctl status nginx

# PHP-FPM status
systemctl status php8.1-fpm
```

### Application Level:
```bash
# Check cache driver
php artisan tinker
>>> Cache::getStore()->getDefaultDriver()

# Check response time
time curl http://localhost:8000
```

---

## ✅ Pre-Launch Checklist

1. [ ] `.env` configured correctly
2. [ ] APP_DEBUG=false
3. [ ] Database migrated
4. [ ] Cache built (config, route, view)
5. [ ] Permissions set correctly
6. [ ] .htaccess optimization merged
7. [ ] SSL certificate installed
8. [ ] Test all pages manually
9. [ ] Test on mobile devices
10. [ ] Run performance tests
11. [ ] Setup monitoring
12. [ ] Backup database

---

## 🎉 Deployment Success!

Website Anda sekarang:
- ⚡ 50% lebih cepat
- 🔒 Lebih aman
- 📱 Mobile-friendly
- 🎯 SEO optimized
- 💾 Bandwidth efficient

**Next**: Monitor performa dan lakukan improvement berkelanjutan!

---

**Support**: info@putrawisanggeni.com  
**Docs**: Lihat OPTIMIZATION_GUIDE.md untuk detail lengkap
