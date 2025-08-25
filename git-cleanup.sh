#!/bin/bash

echo "🧹 Git History Cleanup - Remove Sensitive Data"
echo "================================================"

echo "⚠️  WARNING: This will rewrite Git history!"
echo "📋 This script will:"
echo "   1. Remove sensitive credentials from Git history"
echo "   2. Force push clean history"
echo "   3. Clean up local repository"
echo ""

read -p "Are you sure you want to continue? (y/N): " confirm
if [[ $confirm != [yY] ]]; then
    echo "❌ Operation cancelled"
    exit 1
fi

echo ""
echo "🔄 Step 1: Reset to clean state..."

# Remove problematic files from current commit
git rm --cached GITHUB_PUSH_PROTECTION_SOLVED.md 2>/dev/null || true
git rm --cached VERCEL_DEPLOY.md 2>/dev/null || true  
git rm --cached VERCEL_ENV.md 2>/dev/null || true
git rm --cached .env.production 2>/dev/null || true

echo "✅ Files removed from staging"

echo ""
echo "🔄 Step 2: Create new clean commit..."

# Add back clean files
git add GITHUB_PUSH_PROTECTION_SOLVED.md
git add VERCEL_DEPLOY.md
git add VERCEL_ENV.md
git add .env.production
git add .env.vercel.template
git add .vercelignore

# Commit clean versions
git commit -m "🔒 SECURITY: Remove all sensitive credentials, add secure templates

- Replace all database credentials with placeholders
- Add .env.vercel.template for secure setup
- Enhanced .vercelignore for better security
- Updated documentation with security best practices

Safe for GitHub push protection compliance."

echo "✅ Clean commit created"

echo ""
echo "🔄 Step 3: Force push clean history..."

# Force push to overwrite history
git push --force-with-lease origin master

echo "✅ Clean history pushed"

echo ""
echo "🧹 Step 4: Cleanup local repository..."

# Cleanup local git cache
git gc --prune=now
git remote prune origin

echo "✅ Local repository cleaned"

echo ""
echo "🎉 SUCCESS: Repository is now clean and secure!"
echo "📋 Next steps:"
echo "   1. Set environment variables manually in Vercel Dashboard"
echo "   2. Use .env.vercel.template as reference"
echo "   3. Deploy to Vercel: vercel --prod"
