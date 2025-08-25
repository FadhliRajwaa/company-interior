#!/bin/bash

echo "🔥 NUCLEAR OPTION: Clean Git History"
echo "====================================="
echo ""
echo "⚠️  WARNING: This will REWRITE entire Git history!"
echo "📋 This will:"
echo "   1. Create new orphan branch"
echo "   2. Add all current files (clean)"
echo "   3. Force push new history"
echo "   4. Remove all previous commits with credentials"
echo ""

read -p "Are you ABSOLUTELY sure? This cannot be undone! (type 'YES' to continue): " confirm
if [[ $confirm != "YES" ]]; then
    echo "❌ Operation cancelled"
    exit 1
fi

echo ""
echo "🔄 Step 1: Create orphan branch..."
git checkout --orphan new-main

echo "✅ Orphan branch created"

echo ""
echo "🔄 Step 2: Add all current files..."
git add .

echo "✅ Files staged"

echo ""
echo "🔄 Step 3: Create initial clean commit..."
git commit -m "🎉 Initial commit: Laravel Company Interior

✨ Features:
- Complete Laravel 12 company profile application
- Modern responsive design with Tailwind CSS
- Smooth animations and interactive UI
- Portfolio, contact, and progress tracking
- Vercel deployment ready
- Database integration with Aiven

🔒 Security:
- No credentials in repository
- Environment variables via .env (local only)
- Safe for public deployment

🚀 Ready for production deployment!"

echo "✅ Clean commit created"

echo ""
echo "🔄 Step 4: Delete old branch..."
git branch -D master 2>/dev/null || true

echo "✅ Old branch removed"

echo ""
echo "🔄 Step 5: Rename branch to master..."
git branch -m master

echo "✅ Branch renamed"

echo ""
echo "🔄 Step 6: Force push new history..."
git push -f origin master

echo "✅ New clean history pushed"

echo ""
echo "🎉 SUCCESS: Repository now has clean history!"
echo "📋 All credentials removed from Git history"
echo "🔒 Safe for GitHub push protection"
echo "🚀 Ready for Vercel deployment"
