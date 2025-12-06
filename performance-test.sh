#!/bin/bash

# Performance Testing Script for PT Putra Wisanggeni Satu Website
# Author: Performance Optimization Team
# Date: December 6, 2025

echo "🚀 Starting Performance Analysis..."
echo "=================================="
echo ""

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Check if server is running
echo "1️⃣  Checking if Laravel server is running..."
if lsof -ti:8000 > /dev/null 2>&1; then
    echo -e "${GREEN}✓ Server is running on port 8000${NC}"
else
    echo -e "${YELLOW}⚠ Server not running. Starting Laravel server...${NC}"
    cd /Users/macbook/Documents/Website/laraptpws/ptpwslara
    php artisan serve --port=8000 &
    sleep 3
    echo -e "${GREEN}✓ Server started${NC}"
fi
echo ""

# Image Analysis
echo "2️⃣  Analyzing Images..."
echo "--------------------------------"
cd /Users/macbook/Documents/Website/laraptpws/ptpwslara

# Total image size
TOTAL_SIZE=$(du -sh public/img | awk '{print $1}')
echo -e "📦 Total image directory size: ${YELLOW}${TOTAL_SIZE}${NC}"

# Count images
TOTAL_IMAGES=$(find public/img -type f \( -name "*.jpg" -o -name "*.png" -o -name "*.jpeg" -o -name "*.gif" -o -name "*.webp" \) | wc -l | tr -d ' ')
echo -e "🖼️  Total images: ${YELLOW}${TOTAL_IMAGES}${NC}"

# Large images (>100KB)
echo ""
echo "📊 Images larger than 100KB:"
find public/img -type f \( -name "*.jpg" -o -name "*.png" -o -name "*.jpeg" \) -size +100k -exec ls -lh {} \; | awk '{print "   -", $9, ":", $5}' | head -10

# Count large images
LARGE_IMAGES=$(find public/img -type f \( -name "*.jpg" -o -name "*.png" -o -name "*.jpeg" \) -size +100k | wc -l | tr -d ' ')
echo -e "⚠️  Number of images > 100KB: ${YELLOW}${LARGE_IMAGES}${NC}"
echo ""

# Lazy Loading Analysis
echo "3️⃣  Checking Lazy Loading Implementation..."
echo "--------------------------------"
LAZY_COUNT=$(grep -r "lazyload" resources/views/home/home.blade.php | wc -l | tr -d ' ')
echo -e "✓ Lazy loading instances found: ${GREEN}${LAZY_COUNT}${NC}"

DATA_SRC_COUNT=$(grep -r "data-src" resources/views/home/home.blade.php | wc -l | tr -d ' ')
echo -e "✓ Images with data-src: ${GREEN}${DATA_SRC_COUNT}${NC}"
echo ""

# ALT Text Analysis
echo "4️⃣  Checking ALT Text..."
echo "--------------------------------"
EMPTY_ALT=$(grep -c 'alt=""' resources/views/home/home.blade.php 2>/dev/null || echo "0")
TOTAL_IMG_TAGS=$(grep -c '<img' resources/views/home/home.blade.php 2>/dev/null || echo "0")

if [ "$EMPTY_ALT" -eq 0 ]; then
    echo -e "${GREEN}✓ No empty alt attributes found${NC}"
else
    echo -e "${RED}⚠ Found ${EMPTY_ALT} empty alt attributes${NC}"
fi
echo -e "📝 Total <img> tags: ${YELLOW}${TOTAL_IMG_TAGS}${NC}"
echo ""

# Schema Markup Analysis
echo "5️⃣  Checking Schema Markup..."
echo "--------------------------------"
SCHEMA_COUNT=$(grep -c '@type' resources/views/template/master.blade.php 2>/dev/null || echo "0")
echo -e "✓ Schema types found: ${GREEN}${SCHEMA_COUNT}${NC}"

FAQ_SCHEMA=$(grep -c 'FAQPage' resources/views/home/home.blade.php 2>/dev/null || echo "0")
if [ "$FAQ_SCHEMA" -gt 0 ]; then
    echo -e "${GREEN}✓ FAQPage schema implemented${NC}"
fi

LOCAL_BUSINESS=$(grep -c 'LocalBusiness' resources/views/template/master.blade.php 2>/dev/null || echo "0")
if [ "$LOCAL_BUSINESS" -gt 0 ]; then
    echo -e "${GREEN}✓ LocalBusiness schema implemented${NC}"
fi
echo ""

# Meta Tags Analysis
echo "6️⃣  Checking Meta Tags..."
echo "--------------------------------"
META_DESC=$(grep -c 'meta_description' resources/views/home/home.blade.php 2>/dev/null || echo "0")
if [ "$META_DESC" -gt 0 ]; then
    echo -e "${GREEN}✓ Meta description set${NC}"
fi

OG_TAGS=$(grep -c 'og_title\|og_description' resources/views/home/home.blade.php 2>/dev/null || echo "0")
if [ "$OG_TAGS" -gt 0 ]; then
    echo -e "${GREEN}✓ Open Graph tags set${NC}"
fi

TWITTER_TAGS=$(grep -c 'twitter_title\|twitter_description' resources/views/home/home.blade.php 2>/dev/null || echo "0")
if [ "$TWITTER_TAGS" -gt 0 ]; then
    echo -e "${GREEN}✓ Twitter Card tags set${NC}"
fi
echo ""

# CSS & JS Analysis
echo "7️⃣  Checking Static Assets..."
echo "--------------------------------"
CSS_SIZE=$(du -sh public/css 2>/dev/null | awk '{print $1}')
JS_SIZE=$(du -sh public/js 2>/dev/null | awk '{print $1}')
echo -e "📄 CSS directory size: ${YELLOW}${CSS_SIZE}${NC}"
echo -e "📄 JS directory size: ${YELLOW}${JS_SIZE}${NC}"
echo ""

# Performance Recommendations
echo "8️⃣  Performance Recommendations..."
echo "--------------------------------"
if [ "$LARGE_IMAGES" -gt 5 ]; then
    echo -e "${YELLOW}⚠ Consider compressing ${LARGE_IMAGES} large images${NC}"
fi

if [ "$LAZY_COUNT" -lt 5 ]; then
    echo -e "${YELLOW}⚠ Consider implementing lazy loading for more images${NC}"
fi

if [ "$EMPTY_ALT" -gt 0 ]; then
    echo -e "${RED}⚠ Fix ${EMPTY_ALT} images with empty alt attributes${NC}"
fi
echo ""

# Summary
echo "=================================="
echo "📊 PERFORMANCE SUMMARY"
echo "=================================="
echo -e "Total Images: ${YELLOW}${TOTAL_IMAGES}${NC}"
echo -e "Large Images (>100KB): ${YELLOW}${LARGE_IMAGES}${NC}"
echo -e "Lazy Loading: ${GREEN}${LAZY_COUNT} instances${NC}"
echo -e "Empty ALT tags: ${EMPTY_ALT}"
echo -e "Schema Markup: ${GREEN}${SCHEMA_COUNT} types${NC}"
echo -e "Total Image Size: ${YELLOW}${TOTAL_SIZE}${NC}"
echo ""

# Testing URLs
echo "🔗 Testing URLs:"
echo "=================================="
echo "1. Google PageSpeed Insights:"
echo "   https://pagespeed.web.dev/?url=http://localhost:8000"
echo ""
echo "2. Schema Validator:"
echo "   https://validator.schema.org/"
echo "   (View source and copy schema JSON)"
echo ""
echo "3. Rich Results Test:"
echo "   https://search.google.com/test/rich-results"
echo ""
echo "4. Meta Tags Checker:"
echo "   https://metatags.io/?url=http://localhost:8000"
echo ""

# Final message
echo "✅ Performance analysis complete!"
echo ""
echo "Next steps:"
echo "1. Compress large images using TinyPNG or ImageMagick"
echo "2. Run Google PageSpeed Insights test"
echo "3. Validate Schema Markup"
echo "4. Test on mobile devices"
echo ""
echo "For detailed results, check: PERFORMANCE_TEST_RESULTS.md"
