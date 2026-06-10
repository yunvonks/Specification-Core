# Specification Core v0.9.35 - Release Build Instructions

## 📦 Build ZIP File

### Step 1: Prepare Files
Ensure all files are in place:
```
specification-core/
├── specification-core.php
├── includes/
│   ├── module-control.php
│   ├── editor-assist.php
│   ├── seopress-bridge.php
│   └── currency-audit.php
├── assets/
│   └── css/
│       └── seopress-social-spacing-fix.css
├── package.json
├── README.md
├── CHANGELOG.md
└── LICENSE
```

### Step 2: Create ZIP File
Using command line:
```bash
cd ~/your-plugin-directory
zip -r spesification-core-v0.9.35-performance-seopress.zip specification-core/
```

Or using GUI:
1. Right-click the `specification-core/` folder
2. Compress/Create Archive
3. Rename to `spesification-core-v0.9.35-performance-seopress.zip`

### Step 3: Upload to WordPress

1. Go to WordPress Dashboard → Plugins → Add New
2. Click "Upload Plugin"
3. Select `spesification-core-v0.9.35-performance-seopress.zip`
4. Click "Install Now"
5. Click "Activate"

### Step 4: Verify Installation

✅ Check SEOPress metabox spacing improvements
✅ Verify Social Title field has proper spacing
✅ Confirm Social Description alignment
✅ Test Social Image URL display

## 🔍 Changes in v0.9.35

| File | Change |
|------|--------|
| `specification-core.php` | Version bump to 0.9.35 |
| `package.json` | Version update |
| `CHANGELOG.md` | Release notes added |
| `README.md` | Documentation updated |
| `assets/css/seopress-social-spacing-fix.css` | NEW - UI spacing fixes |

## ✨ Features Fixed

- ✅ SEOPress Social metabox spacing (16px between fields)
- ✅ Label-to-input alignment (8px gap)
- ✅ Consistent form padding (10px × 12px)
- ✅ Modern flexbox layout

## 📝 Version History

| Version | Date | Notes |
|---------|------|-------|
| 0.9.35 | 2026-06-10 | SEOPress Social spacing improvements |
| 0.9.34 | 2026-06-10 | Initial release |

---

**Ready to distribute!** 🚀
