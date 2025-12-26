# signals-human-analytics
Privacy-first human traffic analytics. Distinguish real humans from bots and AI agents — without cookies or fingerprinting.
Signals — Human Analytics

Human Traffic Signals for the AI Web

Signals is a privacy-first, open-source toolkit that helps websites distinguish real human visitors from bots, scrapers, crawlers, and AI agents — without cookies, fingerprinting, or identity tracking.

Built for the modern web where automated traffic distorts analytics and trust.

✨ Why Signals Exists

Today’s web analytics are broken:

* 🤖 Bots and AI scrapers inflate visitor numbers.
* 📉 Human engagement is buried under automated traffic.
* 🔒 Privacy regulations limit traditional tracking.
* ⚠️ Cookie-based and fingerprinting systems are invasive.

Signals solves this by focusing on behavior, not identity.

🧠 What Signals Does

* ✅ Filters known bots and automated agents server-side.
* ✅ Collects lightweight human interaction signals client-side.
* ✅ Assigns a human confidence score.
* ✅ Logs only verified human visits.
* ✅ Provides human-only analytics.
* ✅ Works on PHP sites (including Concrete5).
* ✅ Runs on Cloudflare Free plan.

🚫 What Signals Does NOT Do

* ❌ No cookies.
* ❌ No fingerprinting.
* ❌ No personal data collection.
* ❌ No cross-site tracking.
* ❌ No user profiling.
* ❌ No blocking search engines.

Signals is designed to be legal-safe, transparent, and respectful.

🧩 How It Works (High Level)

1. Server-Side Bot Filtering
   Known bots and automated agents are filtered using user-agent and request patterns.

2. Client-Side Human Signals
   Lightweight JavaScript detects real interaction (time, focus, movement).

3. Human Trust Scoring
   Signals combines server + client signals into a confidence score.

4. Human-Only Logging
   Only visits that cross the human threshold are logged and counted.

📁 Project Structure

```
signals/
├── core/          # Detection & scoring logic
├── public/        # Required public endpoints
├── config/        # Safe default configuration
├── includes/      # Helpers & security utilities
├── admin/         # Optional human-only dashboard
├── demo/          # Live demo example
├── storage/       # Logs & cache (empty by default)
├── sql/           # Optional database schema
├── docs/          # Documentation
│
├── README.md
├── LICENSE
├── CHANGELOG.md
├── CONTRIBUTING.md
└── CODE_OF_CONDUCT.md
```

🚀 Quick Start

1️⃣ Download or Clone

```bash
git clone https://github.com/lyfmail-official/signals.git
```

2️⃣ Place in Your Project

```
your-site/
├── signals/
```

3️⃣ Include the JavaScript

```html
<script src="/signals/public/assets/js/human-signal.js" defer></script>
```

4️⃣ Done

Signals starts collecting **human-only signals automatically**.

🧪 Live Demo

Try Signals in action:

👉 [https://signals.lyfmail.com/demo/](https://signals.lyfmail.com/demo/)

Interact with the page to see how human verification works in real time.

🤖 Human & Machine Transparency

Signals includes explicit transparency pages:

* Human & Machine Notice
  `/public/human-signal.php`

* Machine-Readable Policy
  `/public/trust.json`

These clearly define how Signals treats humans and machines.

🔐 Privacy & Compliance

Signals is designed to align with:

* GDPR principles.
* Privacy-first analytics standards.
* Ethical AI interaction policies.

See:
📄 `docs/PRIVACY.md`

🛡 Security

Signals focuses on classification, not blocking.

It does not replace:

* Firewalls.
* Rate limiters.
* WAFs.

See:
📄 `docs/SECURITY.md`

🗺 Roadmap

Planned features include:

* Enhanced scoring heuristics.
* Exportable human-only metrics.
* Plugin adapters (CMS friendly).
* Optional edge-signal support.

See:
📄 `docs/ROADMAP.md`

🧑‍💻 Contributing

Signals is open to contributions that respect its principles:

* Privacy-first.
* Lightweight.
* Transparent.
* Human-centric.

Please read:
📄 `CONTRIBUTING.md`

📜 License

Signals is released under the Apache License 2.0.

You are free to use, modify, and distribute it — including commercially.

🏗 Maintained By

LYF Mail
🌐 [https://lyfmail.com](https://lyfmail.com)
📦 Open-source initiatives for a trustworthy web


> Signals is built for humans — and respectful to machines.
