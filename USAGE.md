📄 docs/USAGE.md

```md
# Using Signals — Human Analytics

This document explains how to use Signals once installed.

📌 Basic Usage

Include the Signals JavaScript file on all pages you want to analyze:

```html
<script src="/signals/public/assets/js/human-signal.js" defer></script>

No additional configuration is required.

🔄 How Data Flows

1. Page loads.

2. JavaScript collects basic interaction signals.

3. Data is sent to collect.php

4. Server evaluates signals.

5. Human confidence score is calculated.

6. Verified humans are logged.

🧠 Human Scoring

Signals assigns points for:

1. Time on page.

2. JS execution.

3. Focus events.

4. Interaction presence.

5. Bots typically fail to accumulate sufficient score.

6. Threshold is configurable:

'human_score_threshold' => 70

📊 Admin Dashboard (Optional)

If enabled, the admin dashboard allows viewing:

1. Human-only visit counts.

2. Daily activity.

3. Verification ratios.

4. Admin files live in:

signals/admin/


Protect the admin directory using authentication or server rules.

🧪 Demo Mode

Signals includes a demo page for testing:

signals/demo/index.php


Use this to:

1. Verify installation.

2. Observe human scoring behavior.

3. Demonstrate functionality.

🤖 Human & Machine Notice

Public transparency pages:

/signals/public/human-signal.php

/signals/public/trust.json

These explain how Signals treats human and machine traffic.

🧯 Troubleshooting

1. JS Loads but No Logs.

2. Check file permissions.

3. Ensure collect.php is reachable.

4. Confirm HTTPS.

5. All Traffic Marked as Bot.

6. Increase threshold temporarily.

7. Test with real interaction.

8. Check user-agent blocking rules.

🧱 What Signals Is Not

Signals is not:

1. A firewall.

2. A bot blocker.

3. A CAPTCHA system.

It is a classification and analytics tool.

🛠 Extending Signals

Developers can:

1. Add new scoring heuristics.

2. Export data.

3. Integrate with analytics platforms.

4. Keep extensions privacy-first.

✅ Usage Complete

Signals will continue to operate automatically once configured.

