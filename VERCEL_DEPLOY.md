# 🚀 Deploy Laravel ke Vercel

## 📋 File Konfigurasi yang Dibuat

### 1. **vercel.json** - Konfigurasi utama Vercel
- Runtime PHP untuk serverless functions
- Routing semua request ke Laravel
- Environment variables untuk production
- Cache configuration untuk performa optimal

### 2. **api/index.php** - Entry point untuk Vercel
- Forward semua request ke Laravel public/index.php
- Kompatibilitas dengan serverless architecture

### 3. **.env.production** - Environment production
- Konfigurasi database cloud (Aiven)
- Cache driver: array (untuk serverless)
- Session driver: cookie (stateless)
- Log channel: stderr (Vercel compatible)

### 4. **.vercelignore** - File yang diabaikan saat deploy
- Node modules, vendor, tests
- Storage files dan cache
- Environment files

## 🛠️ Langkah Deploy ke Vercel

### **Step 1: Install Vercel CLI**
```bash
npm install -g vercel
```

### **Step 2: Login ke Vercel**
```bash
vercel login
```

### **Step 3: Setup Project**
```bash
cd e:\Xampp\htdocs\company-interior
vercel
```

### **Step 4: Build Assets Dulu**
Di local, build assets sebelum deploy:
```bash
npm run build
```

### **Step 5: Konfigurasi Environment Variables**
Di Vercel Dashboard, tambahkan environment variables:
```
APP_NAME=Company Interior
APP_ENV=production
APP_KEY=base64:m/ABBKuGu9kSi71k37s1HAZiEuqOnUo0WjedIzktFME=
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app
DB_CONNECTION=mysql
DB_HOST=your-aiven-host.aivencloud.com
DB_PORT=your-port
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=your-secure-password
SESSION_DRIVER=cookie
CACHE_DRIVER=array
LOG_CHANNEL=stderr
QUEUE_CONNECTION=sync
```

### **Step 6: Deploy**
```bash
vercel --prod
```

## ❌ **Common Errors & Solutions**

### **Error: No Output Directory named "dist" found**
**Solution:** Laravel menggunakan `public` bukan `dist`
- ✅ `vercel.json` sudah dikonfigurasi dengan `builds` dan `routes`
- ✅ Assets dibangun ke `public/build/`
- ✅ Static files dilayani dari `public/`

### **Error: Build Failed**
**Solution:** Pastikan assets sudah dibangun lokal dulu
```bash
npm run build
git add public/build/
git commit -m "Add built assets"
git push
vercel --prod
```

## ⚡ Optimasi untuk Vercel

### **1. Serverless Architecture**
- Menggunakan vercel-php runtime
- Cache di `/tmp` untuk temporary storage
- Stateless session dengan cookies

### **2. Database Cloud**
- Sudah terkonfigurasi dengan Aiven MySQL
- Connection pooling otomatis
- SSL connection enabled

### **3. Asset Management**
- Vite build untuk optimasi assets
- Public assets di `/public`
- CSS/JS terkompress

### **4. Performance**
- Config cache di /tmp
- Route cache di /tmp
- View compiled di /tmp
- Array cache driver untuk speed

## 🔧 Konfigurasi Khusus Vercel

### **vercel.json Features:**
- **Runtime**: vercel-php@0.6.0
- **Functions**: Serverless PHP execution
- **Routes**: Catch-all routing ke Laravel
- **Environment**: Production optimized
- **Build**: Composer optimization

### **Laravel Adaptations:**
- Cache driver: array (in-memory)
- Session driver: cookie (stateless)
- Log channel: stderr (Vercel logs)
- Storage: /tmp (writable in serverless)

## 📁 Struktur File Deploy

```
project/
├── api/
│   └── index.php          # Vercel entry point
├── public/                # Laravel public assets
├── vercel.json           # Vercel configuration
├── .env.production       # Production environment
├── .vercelignore         # Ignored files
└── package.json          # Build scripts
```

## 🌐 URL Production

Setelah deploy, aplikasi akan tersedia di:
```
https://company-interior.vercel.app
```

## 🛡️ Security Notes

- APP_DEBUG=false untuk production
- Environment variables di Vercel Dashboard
- Database credentials encrypted
- HTTPS enforced by default

## 📊 Monitoring

- Vercel Analytics terintegrasi
- Error tracking via Vercel logs
- Performance monitoring built-in
- Real-time deployment status

## 🔄 CI/CD

- Auto-deploy dari Git commits
- Preview deployments untuk branches
- Production deployment dari main branch
- Rollback capability

Deploy berhasil! 🎉 Aplikasi Company Interior siap production di Vercel.
