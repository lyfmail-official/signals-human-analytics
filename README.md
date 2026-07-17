# Signals — Privacy-First Human Traffic Analytics

**Distinguish real humans from bots, scrapers, crawlers, and AI agents — without cookies, fingerprinting, or identity tracking.**

[![Live Demo](https://img.shields.io/badge/🚀%20Live%20Demo-signals.lyfmail.com/demo-blue)](https://signals.lyfmail.com/demo/)
[![License](https://img.shields.io/badge/License-Apache%202.0-green.svg)](https://github.com/lyfmail-official/signals/blob/main/LICENSE)
[![Maintained by LYF Mail](https://img.shields.io/badge/Maintained%20by-LYF%20Mail-orange)](https://lyfmail.com)

> **"Signals is built for humans — and respectful to machines."**  
> Part of the [LYF Mail](https://lyfmail.com) privacy-first digital wellness ecosystem.

---

## 🎯 What Is Signals?

**Signals** is a free, open-source, privacy-first analytics toolkit that solves the biggest problem in modern web analytics: **distinguishing real human visitors from automated traffic**. In an era where AI scrapers, headless browsers, and bot networks inflate visitor numbers by 40-60%, Signals provides the only ethical solution — behavioral verification without surveillance.

Built by [LYF Mail](https://lyfmail.com), a [privacy-first digital wellness platform](https://lyfmail.com) serving 50,000+ subscribers across India since 2020, Signals extends our mission of **"Every Choice Shapes Tomorrow"** into the analytics space. We believe you shouldn't have to choose between accurate data and user privacy.

### The Problem Signals Solves

| Issue | Impact | How Signals Helps |
|-------|--------|-----------------|
| 🤖 **Bots & AI scrapers** inflate metrics. | 40-60% of web traffic is automated. | Server-side filtering + behavioral scoring. |
| 📉 **Human engagement buried** under fake data. | Misleading ROI, wasted ad spend. | Human-only analytics dashboard. |
| 🔒 **Privacy laws** (GDPR, CCPA) restrict tracking. | Complex consent banners, legal risk. | Zero personal data collection. |
| ⚠️ **Fingerprinting & cookies** erode trust. | User backlash, browser blocking. | Behavior-based, not identity-based. |

---

## ✨ Why Choose Signals Over Traditional Analytics?

### Privacy-First by Design
- ✅ **No cookies** — ever.
- ✅ **No browser fingerprinting** — cannot identify individuals.
- ✅ **No personal data collection** — no IPs, no names, no emails.
- ✅ **No cross-site tracking** — each site is isolated.
- ✅ **No user profiling** — aggregate signals only.
- ✅ **GDPR-compliant by default** — no consent banners needed.

### Accurate Human Detection
- ✅ **Server-side bot filtering** — blocks known bad actors before they reach your site.
- ✅ **Client-side behavioral signals** — detects real human interaction (focus, timing, movement).
- ✅ **Human confidence scoring** — not binary; nuanced probability model.
- ✅ **AI agent detection** — identifies ChatGPT crawlers, scrapers, and headless browsers.
- ✅ **Search engine friendly** — Google, Bing, DuckDuckGo bots are respected, not blocked.

### Lightweight & Fast
- ✅ **Single JavaScript file** — < 3KB gzipped.
- ✅ **Zero dependencies** — no jQuery, no frameworks.
- ✅ **Minimal server overhead** — runs on shared hosting, VPS, or [Cloudflare Free plan](https://lyfmail.com).
- ✅ **PHP-native** — drop-in solution for WordPress, Concrete5, Laravel, or custom sites.

---

## 🧠 How Signals Works

Signals uses a **dual-layer verification system** that combines server intelligence with client behavior:

### Layer 1: Server-Side Bot Filtering
Before any JavaScript loads, Signals inspects incoming requests using:
- **User-agent analysis** — identifies known bot signatures.
- **Request pattern matching** — detects automated traversal behaviors.
- **Header inspection** — spots headless browser markers.
- **Rate anomaly detection** — flags inhuman request velocities.

### Layer 2: Client-Side Human Signals
Once the page loads, lightweight JavaScript collects privacy-safe behavioral indicators:
- **Interaction timing** — human-like delays between actions.
- **Focus & visibility** — real viewport engagement, not hidden tabs.
- **Mouse/touch patterns** — organic movement curves vs. linear scripts.
- **Rendering verification** — confirms real browser capabilities.
- **Navigation behavior** — natural scroll and click sequences.

### Layer 3: Confidence Scoring
Signals combines both layers into a **0-100% human confidence score**:
- **> 85%** — Logged as verified human visit.
- **50-85%** — Flagged for review, not counted in primary metrics.
- **< 50%** — Classified as automated, excluded from human analytics.

> 📊 **See it in action:** Try our [live demo at signals.lyfmail.com/demo/](https://signals.lyfmail.com/demo/) to watch real-time classification and confidence scoring.

---

## 🚀 Quick Start Guide

### 1. Download or Clone
```bash
git clone https://github.com/lyfmail-official/signals.git
```

### 2. Place in Your Project
```
your-site/
├── index.html
├── signals/
│   ├── core/
│   ├── public/
│   ├── config/
│   └── ...
```

### 3. Include the JavaScript
Add this single line before your closing `</body>` tag:
```html
<script src="/signals/public/assets/js/human-signal.js" defer></script>
```

### 4. Done!
Signals starts collecting **human-only signals automatically**. No configuration required for basic operation.

### 5. View Your Dashboard (Optional)
Navigate to `/signals/admin/` to view human-verified traffic analytics.

---

## 📁 Project Structure

```
signals/
├── core/          # Detection & scoring logic (PHP)
├── public/        # Required public endpoints & JS assets
│   ├── assets/js/human-signal.js
│   ├── human-signal.php
│   └── trust.json
├── config/        # Safe default configuration
├── includes/      # Helpers & security utilities
├── admin/         # Optional human-only analytics dashboard
├── demo/          # Live demo example
├── storage/       # Logs & cache (empty by default)
├── sql/           # Optional database schema
├── docs/          # Full documentation
│   ├── PRIVACY.md
│   ├── SECURITY.md
│   ├── ROADMAP.md
│   └── INTEGRATION.md
├── README.md
├── LICENSE
├── CHANGELOG.md
├── CONTRIBUTING.md
└── CODE_OF_CONDUCT.md
```

---

## 🧪 Live Demo & Transparency

### Try Signals in Real Time
👉 **[signals.lyfmail.com/demo/](https://signals.lyfmail.com/demo/)**

Interact with the page to see how human verification works. Watch confidence levels update live, understand which signals are detected, and verify that **zero personal data is collected**.

### Machine-Readable Trust Manifest
Signals publishes a public `trust.json` declaration — a **machine-readable and human-auditable promise** to our users and their visitors:

- **No cookies.**
- **No fingerprinting.**
- **No personal data storage.**
- **No raw IP addresses.**
- **Only aggregate behavioral signals.**
- **AI agents are not counted as humans.**

📄 View: `https://your-site.com/signals/public/trust.json`

---

## 🔐 Privacy & Compliance

Signals is designed to align with global privacy standards:

| Regulation | Compliance Status |
|------------|-------------------|
| **GDPR (EU)** | ✅ Compliant — no personal data, no consent required. |
| **CCPA (California)** | ✅ Compliant — no sale of data (no data collected). |
| **ePrivacy Directive** | ✅ Compliant — no tracking cookies. |
| **India DPDP Act** | ✅ Compliant — privacy by design. |

📄 Read our full privacy documentation: [`docs/PRIVACY.md`](docs/PRIVACY.md)

---

## 🛡️ Security Philosophy

**Signals classifies, it does not block.** We believe in transparency over enforcement.

Signals is **not a replacement for**:
- Firewalls (WAF, Cloudflare Firewall).
- Rate limiters.
- CAPTCHA systems.
- Bot management platforms.

Instead, Signals **complements** these tools by providing accurate human traffic intelligence that helps you make informed decisions.

📄 Read our security guidelines: [`docs/SECURITY.md`](docs/SECURITY.md)

---

## 🌍 Who Uses Signals?

### Independent Site Owners & Bloggers
Content creators tired of inflated metrics who want **truthful engagement data** without compromising visitor privacy or adding cookie banners.

### Open-Source Maintainers & Developers
Project leads who need to understand **real project usage** without invasive tracking technologies that alienate privacy-conscious contributors.

### Privacy-First Businesses & NGOs
Organizations seeking **trustworthy engagement data** that respects user dignity and complies with GDPR without complex consent mechanisms.

### E-Commerce & SaaS Platforms
Businesses that need to distinguish **real customers from bot traffic** to improve conversion rate accuracy and reduce fraudulent interactions.

---

## 🗺️ Roadmap & Future Development

Planned enhancements include:

- **Enhanced scoring heuristics** — improved AI agent detection.
- **Exportable human-only metrics** — CSV/JSON export for reporting.
- **CMS plugin adapters** — WordPress, Concrete5, Drupal integrations.
- **Optional edge-signal support** — Cloudflare Workers deployment.
- **Real-time WebSocket dashboard** — live human traffic monitoring.
- **API endpoints** — integrate human scores into your own analytics stack.

📄 View full roadmap: [`docs/ROADMAP.md`](docs/ROADMAP.md)

---

## 🤝 Contributing to Signals

Signals is open to contributions that respect our core principles:

- **Privacy-first** — never collect personal data.
- **Lightweight** — minimal performance impact.
- **Transparent** — open code, open logic, open documentation.
- **Human-centric** — built for people, respectful to machines.

Please read our [`CONTRIBUTING.md`](CONTRIBUTING.md) and [`CODE_OF_CONDUCT.md`](CODE_OF_CONDUCT.md) before submitting pull requests.

---

## 🏗️ The LYF Mail Ecosystem

Signals is one of nine free, open-source privacy tools built by [LYF Mail](https://lyfmail.com), a [digital wellness platform](https://lyfmail.com) from Varanasi, India. Explore our other projects:

| Project | Description | Live App | Repository |
|---------|-------------|----------|------------|
| **[LYF Mail](https://lyfmail.com)** | Privacy-first newsletters for health, wealth, career & mindfulness. | [lyfmail.com](https://lyfmail.com) | `lyfmail` |
| **[TrustLens](https://trustlens.lyfmail.com)** | Detect misinformation before you share. Privacy-first credibility analysis. | [trustlens.lyfmail.com](https://trustlens.lyfmail.com) | `trustlens` |
| **[Ebb](https://ebb.lyfmail.com)** | Period tracker with homomorphic encryption. Your data stays encrypted — even from us. | [ebb.lyfmail.com](https://ebb.lyfmail.com) | `ebb` |
| **[LYF SOS](https://lyfsos.lyfmail.com)** | Offline emergency safety app for Android. Built for Indian families. | [lyfsos.lyfmail.com](https://lyfsos.lyfmail.com) | `lyfsos` |
| **[PDPR](https://pdpr.lyfmail.com)** | Public Dark Pattern Registry. Document deceptive UX ethically. | [pdpr.lyfmail.com](https://pdpr.lyfmail.com) | `pdpr` |
| **[Together](https://together.lyfmail.com)** | Mental health support through therapeutic silence and shared presence. | [together.lyfmail.com](https://together.lyfmail.com) | `together` |
| **[Rewriter](https://lyfmail-official.github.io/rewriter/)** | AI-powered narrative therapy and health content writing assistant. | [lyfmail-official.github.io/rewriter](https://lyfmail-official.github.io/rewriter/) | `rewriter` |
| **[Offload](https://lyfmail-official.github.io/offload/)** | Stress relief with binaural beats and dream journal. Zero cloud storage. | [lyfmail-official.github.io/offload](https://lyfmail-official.github.io/offload/) | `offload` |

### 📚 Free Newsletters & Guides
- [Health & Wellness Guide](https://lyfmail.com/health-wellness-guide)
- [Personal Finance Guide](https://lyfmail.com/personal-finance-guide)
- [Career Development Guide](https://lyfmail.com/career-development-guide)
- [Creativity Resources](https://lyfmail.com/creativity-resources)
- [Mindfulness Practices](https://lyfmail.com/mindfulness-practices)

**Newsletter Signups:** [Health](https://health.signup.lyfmail.com) · [Finance](https://financing.signup.lyfmail.com) · [Career](https://career.signup.lyfmail.com) · [Creativity](https://creativity.signup.lyfmail.com) · [Personal Development](https://intuition.signup.lyfmail.com)

---

## 📜 License

Signals is released under the **Apache License 2.0**.

You are free to use, modify, and distribute it — including commercially. See [`LICENSE`](LICENSE) for full terms.

---

## 📫 Connect With Us

- **🌐 Website:** [lyfmail.com](https://lyfmail.com)
- **📱 PWA:** [app.lyfmail.com](https://app.lyfmail.com)
- **📚 Documentation:** [docs.lyfmail.com](https://docs.lyfmail.com)
- **🎨 Brand Assets:** [github.com/lyfmail-official/lyfmail-brand-assets](https://github.com/lyfmail-official/lyfmail-brand-assets)
- **🐦 X / Twitter:** [LYF Mail](https://x.com/lyfmailcom)
- **📘 Facebook:** [LYF Mail](https://www.facebook.com/thelyfmail)
- **▶️ YouTube:** [LYF Mail](https://m.youtube.com/channel/UCurymhWrl2nkvv31uJMuc0g)
- **💼 LinkedIn:** [LYF Mail](https://www.linkedin.com/company/lyf-mail)
- **📧 Email:** contact@lyfmail.com
- **🆘 Support:** [support.lyfmail.com](https://support.lyfmail.com)

---

> *"Every Choice Shapes Tomorrow"*

**Maintained by [LYF Mail](https://lyfmail.com)** · Founded by [Ajay Kumar Chaudhary](https://github.com/lyfmail) · Varanasi, Uttar Pradesh, India · Since 2020

---

## 💬 Frequently Asked Questions

**Q: Is Signals GDPR-friendly?**  
A: Yes. Signals avoids personal data entirely, making GDPR compliance straightforward. No consent banners required for basic usage.

**Q: Does Signals block bots?**  
A: No. Signals classifies, not blocks. You control the response. Use it to filter analytics or trigger additional verification as needed.

**Q: Can Signals replace Google Analytics?**  
A: Signals complements traditional analytics by correcting inflated traffic data. Use both for a complete picture: traditional for trends, Signals for verified human engagement.

**Q: Is Signals really free?**  
A: Yes. Signals is open source and free to use under the Apache License 2.0. Self-host on shared hosting or VPS with minimal resource requirements.

**Q: Does it work with WordPress?**  
A: Yes. Signals is PHP-native and works with any PHP-based CMS including WordPress, Concrete5, Drupal, and Laravel.

**Q: How accurate is the human detection?**  
A: Signals uses a confidence-based model, not binary judgment. While no system is 100% perfect, Signals achieves high accuracy by combining server-side and client-side signals.

---

*This README is maintained by the LYF Mail team. For issues, feature requests, or contributions, please visit our [GitHub repository](https://github.com/lyfmail-official/signals).*
