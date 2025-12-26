Installing Signals — Human Analytics

This guide explains how to install and run Signals on a PHP-based website.

Signals is framework-agnostic and works with:
- Plain PHP sites.
- Concrete5.
- Custom CMS setups.
- Cloudflare Free plan.

✅ Requirements

- PHP 7.4 or higher.
- Web server (Apache, Nginx, OpenLiteSpeed).
- JavaScript enabled in browsers.
- Write access to a logs directory.

No database is required by default.

📁 Folder Placement

Place the `signals` directory anywhere inside your project:

'''
your-site/
├── signals/
│ ├── core/
│ ├── public/
│ ├── config/
│ └── storage/
'''

The `public` directory must be web-accessible.

🌐 Expose Public Files

Map or expose the following paths:
'''
/signals/public/collect.php
/signals/public/assets/js/human-signal.js
/signals/public/human-signal.php
/signals/public/trust.json
'''

Do not expose `core`, `config`, or `storage`.

🧠 Configuration

Default Setup (Recommended)

Signals works out-of-the-box with default configuration:

```php
// config/config.php
return [
  'human_score_threshold' => 70,
  'log_verified_only'     => true,
];

No secrets are required.

📝 Logging

1. By default, Signals logs only verified human visits.

2. Ensure the directory exists and is writable:

signals/storage/logs/

🧩 Concrete5 Notes

1. Place Signals outside /application if possible.

2. Include JS via header or footer block.

3. Ensure collect.php is accessible.

Signals does not interfere with Concrete5 tracking or blocks.

☁️ Cloudflare Compatibility

1. Signals works on Cloudflare Free plan.

2. Does not require disabling Content-Signal.

3. Does not block bots.

4. Works behind proxy IPs.

🔒 Security Notes

1. Do not expose non-public folders.

2. Do not commit logs.

Use HTTPS

✅ Installation Complete

Once installed, Signals begins verifying human traffic automatically.
