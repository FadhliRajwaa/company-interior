# 🔐 Environment Variables for Vercel Dashboard

## ⚡ Required Environment Variables

Copy dan paste environment variables berikut ke Vercel Dashboard:

### **Application Settings**
```
APP_NAME=Company Interior
APP_ENV=production
APP_KEY=base64:m/ABBKuGu9kSi71k37s1HAZiEuqOnUo0WjedIzktFME=
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
```

### **Database Configuration (Aiven Cloud)**
```
DB_CONNECTION=mysql
DB_HOST=your-aiven-host.aivencloud.com
DB_PORT=your-port
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=your-secure-password
```

**🔐 Important:** Replace dengan credentials database Aiven yang sebenarnya:
- Dapatkan dari Aiven Dashboard → Service → Connection Information
- Jangan commit credentials ke Git repository
- Set hanya di Vercel Dashboard sebagai Environment Variables

### **Cache & Session (Vercel Optimized)**
```
CACHE_DRIVER=array
SESSION_DRIVER=cookie
SESSION_LIFETIME=120
QUEUE_CONNECTION=sync
```

### **Logging & Debug**
```
LOG_CHANNEL=stderr
LOG_LEVEL=error
```

### **Vercel Specific**
```
VERCEL_DEMO_MODE=true
APP_CONFIG_CACHE=/tmp/config.php
APP_EVENTS_CACHE=/tmp/events.php
APP_PACKAGES_CACHE=/tmp/packages.php
APP_ROUTES_CACHE=/tmp/routes.php
APP_SERVICES_CACHE=/tmp/services.php
VIEW_COMPILED_PATH=/tmp
```

### **Mail Configuration**
```
MAIL_MAILER=log
MAIL_FROM_ADDRESS=hello@company-interior.com
MAIL_FROM_NAME=Company Interior
```

## 🛠️ Cara Set Environment Variables di Vercel

### **Method 1: Via Vercel Dashboard**
1. Login ke [vercel.com](https://vercel.com)
2. Pilih project Anda
3. Go to Settings → Environment Variables
4. Add each variable satu per satu

### **Method 2: Via Vercel CLI**
```bash
vercel env add APP_NAME
vercel env add APP_ENV
vercel env add APP_KEY
# ... dst untuk semua variables
```

### **Method 3: Bulk Import**
Buat file `.env.vercel` dengan semua variables, lalu:
```bash
vercel env pull .env.vercel
```

## ⚠️ Important Notes

1. **APP_URL**: Ganti dengan domain Vercel yang sebenarnya
2. **Database**: Pastikan Aiven database dapat diakses dari Vercel
3. **APP_KEY**: Gunakan key yang sama dari aplikasi lokal
4. **Cache**: Menggunakan array driver untuk serverless
5. **Storage**: Semua cache disimpan di /tmp (Vercel writable directory)

## 🔒 Security Checklist

- ✅ APP_DEBUG=false untuk production
- ✅ Database credentials secure
- ✅ APP_KEY unik dan strong
- ✅ No sensitive data in git repository
- ✅ Environment variables di Vercel Dashboard only

## 🚀 Deployment Commands

Setelah set environment variables:

```bash
# Test locally
php test-vercel.php

# Deploy to Vercel
vercel --prod

# Check deployment
vercel logs your-domain.vercel.app
```

Happy deploying! 🎉
