# Specification Core v0.9.35

**Modular Mobile Database System for WordPress**

![Version](https://img.shields.io/badge/version-0.9.35-blue)
![WordPress](https://img.shields.io/badge/wordpress-5.0%2B-green)
![PHP](https://img.shields.io/badge/php-7.4%2B-blue)
![License](https://img.shields.io/badge/license-GPL--2.0-brightgreen)

## 📱 About
Specification Core is a powerful WordPress plugin that provides a modular mobile database system with advanced features for content optimization and management.

## ✨ Key Features

### 🎛️ Module Control
- Enable/disable modules based on your performance needs
- Granular control over plugin features
- Lightweight and customizable

### ✏️ Editor Assist
- **Autocomplete** - Smart content suggestions
- **Quick Paste** - Fast content insertion
- **AnTuTu Validation** - Real-time validation system

### 🔍 SEO Bridge
- **JSON-LD Schema** - Structured data implementation
- **SEOPress Sync** - Seamless SEOPress integration
- **Social Optimization** - OG tags and Twitter/X support

### 💰 Currency & Audit
- **Global Price Conversion** - Multi-currency support
- **Data Audit System** - Track and monitor data changes
- **Compliance Tools** - Ensure data integrity

## 🚀 What's New in v0.9.35

✅ **Fixed SEOPress Social Metabox Spacing**
- Improved spacing between Social Title, Description, and Image URL (16px)
- Better label-to-input field alignment (8px)
- Enhanced UI/UX with consistent padding throughout
- Modern flexbox layout implementation

## 📥 Installation

1. Download the ZIP file: `spesification-core-v0.9.35-performance-seopress.zip`
2. Go to WordPress Admin → Plugins → Add New
3. Click "Upload Plugin" and select the ZIP file
4. Click "Install Now" and activate
5. Configure settings in Specification Core menu

## 🔧 System Requirements

- **WordPress:** 5.0 or higher
- **PHP:** 7.4 or higher
- **SEOPress:** Recommended for full functionality

## 📋 File Structure

```
specification-core/
├── specification-core.php          # Main plugin file
├── includes/
│   ├── module-control.php          # Module management
│   ├── editor-assist.php           # Editor features
│   ├── seopress-bridge.php         # SEO integration
│   └── currency-audit.php          # Currency & audit
├── assets/
│   └── css/
│       └── seopress-social-spacing-fix.css  # UI improvements
├── package.json                    # Package metadata
├── CHANGELOG.md                    # Version history
└── README.md                       # This file
```

## 💡 Usage

### Module Control
Navigate to Settings → Specification Core to enable/disable modules based on your needs.

### SEOPress Integration
The plugin automatically integrates with SEOPress. Open any post/page and look for the "SEOPress" metabox with improved social sharing options.

### Currency Conversion
Use the currency API to convert prices across multiple currencies in real-time.

## 🐛 Troubleshooting

### Issue: SEOPress metabox not showing
**Solution:** Ensure SEOPress is installed and activated before Specification Core.

### Issue: Spacing not applied
**Solution:** Clear browser cache and WordPress cache. Ensure CSS file is loaded properly.

## 📞 Support

For issues or feature requests, please visit:
- GitHub Issues: https://github.com/yunvonks/Specification-Core/issues
- Author: Yunvonks

## 📄 License

GPL 2.0 or later - See LICENSE file for details

## 🙏 Credits

- **SEOPress Integration** by the SEOPress team
- **Mobile Database** architecture
- **Currency API** integration

---

**Last Updated:** 2026-06-10
**Maintained By:** Yunvonks
