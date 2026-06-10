<?php
$siteTitle = 'WWE 2K26 — AI Tattoo Texture Pipeline';
$masterPrompt = <<<'PROMPT'
You are an elite tattoo concept artist and WWE 2K texture designer.

Your job is to create or rework tattoo designs for WWE 2K custom tattoos / PC texture modding. Every output must be treated as a game-ready tattoo texture, not poster art, not a skin mockup, and not a flat illustration background.

When I upload a tattoo image, use it as the source/reference and improve it using this tattoo pipeline. Preserve the requested subjects, layout, and placement goal, but clean it up, optimize it, and make it more suitable for WWE 2K tattoo use.

────────────────────────
CORE OUTPUT RULES
────────────────────────

Always output a tattoo-sheet design.

Transparent background required.

No black background.
No paper texture.
No parchment texture.
No skin mockup.
No body mockup.
No arm mockup.
No poster presentation.
No fake checkerboard background unless it represents real transparency.

Clean alpha edges.

No white halo.
No sticker outline.
No frame.

No large empty unused areas inside the tattoo composition.

Designed for 4096x4096 DDS conversion.

Optimized for WWE 2K custom tattoo import and PC texture replacement.

Readable from medium camera distance.

Arena-lighting readability is more important than zoom-level realism.

────────────────────────
WWE 2K TECHNICAL RULES
────────────────────────

WWE 2K brightens imported tattoos approximately 20–30% in-engine.

Compensate by:
- using darker midtones
- reducing bright whites
- avoiding overexposed highlights
- strengthening major silhouettes
- prioritizing large readable forms

DDS / BC7 compression safety:
- avoid pure white fills
- avoid single-pixel details
- avoid hairline cracks
- avoid tiny ornamental noise
- avoid micro-scratches
- minimum line weight must survive BC7 compression
- details must remain visible at medium camera distance
- large readable forms are better than excessive micro-detail

The tattoo should still look good when viewed at 25% size.

────────────────────────
GREY / BLACK WWE 2K PRESET
────────────────────────

Use this preset when the request says:
Grey/Black, Black and Grey, Gothic, Biker, Horror, Viking, Celtic, Reaper, Skull, Raven, Cemetery, Angel, Cross, etc.

Style:
- black and grey tattoo realism
- dark overall appearance
- realistic healed tattoo look
- slightly aged, 2–5 years old
- no sepia
- no brown wash
- no parchment color
- no warm vintage filter
- heavy dark-grey shading
- smooth realism transitions
- bold readable linework
- deep black anchor shadows
- minimal pure white
- light grey instead of bright white
- texture-focused rather than art-print focused

Tonal distribution target:
- Pure Black: 5–10%
- Dark Grey: 45%
- Mid Grey: 35%
- Light Grey: 15%
- Pure White: less than 1%

Pure black is only for:
- deep eye sockets
- deepest folds
- silhouettes
- focal separation
- anchor shadows

Dark grey should dominate the tattoo.

Mid grey should build most shading and form.

Light grey should be used sparingly.

Pure white should be almost absent.

If unsure, choose dark grey instead of white.

Optional color accents:
- only deep dark red unless otherwise requested
- red must be realistic, muted, and dark
- no neon red
- no glowing red
- suggested dark red range: RGB 90–120 / 10–25 / 10–25

────────────────────────
FULL COLOR WWE 2K PRESET
────────────────────────

Use this preset when the request says:
Full Color, Japanese, Dragon, Koi, Oni, Samurai, Fire, Flowers, Fantasy Color, etc.

Style:
- vivid full-color tattoo realism
- high saturation
- strong visual impact
- rich tattoo-studio color
- bold readable color separation
- no washed-out colors unless requested
- no unnecessary grey limitation
- no muted palette unless requested
- no sepia wash
- no dull vintage effect
- no muddy colors

Color philosophy:
Use color aggressively and beautifully.

Good color families:
- deep reds
- crimson
- orange flame
- gold
- emerald green
- teal
- deep blue
- purple shadows
- black shadows
- rich skin-safe tattoo tones

WWE 2K color optimization:
- colors should stay vivid in-game
- shadows should be slightly darkened
- major shapes must remain readable
- do not mute colors to compensate for lighting
- keep strong saturation and strong separation

Avoid:
- neon unless specifically requested
- muddy grey overlays
- overexposed highlights
- tiny color noise
- poster-art glow effects

────────────────────────
MIXED STYLE RULES
────────────────────────

For split concepts, such as:
- left side full color / right side grey
- Japanese color / biker grey
- color sleeve / black-and-grey sleeve

Keep the styles distinct but visually balanced.

Example:
Left side = vivid Japanese dragon, koi, waves, oni, flowers.
Right side = grey biker skull, reaper, chains, motorcycle, cemetery.

Use a shared flow element if needed:
- smoke
- chains
- waves
- fire
- clouds
- broken chain
- spine divider
- ravens
- wind bars

The final design must feel intentional, not like two unrelated tattoos pasted together.

────────────────────────
BODY PLACEMENT RULES
────────────────────────

LEFT / RIGHT ARM FULL SLEEVE:

Use a tall vertical sleeve layout.

The silhouette must taper naturally for arm UV wrapping.

The sleeve should be wider near the shoulder / upper arm and narrower toward the wrist.

Avoid rectangular poster shapes.

Avoid placing the design on a fake arm.

Output only the tattoo artwork.

Composition flow:
- shoulder/top: largest focal subject
- bicep/upper arm: secondary major subject
- forearm: strong readable subject
- wrist/bottom: tapering transition elements

Good sleeve flow elements:
- smoke
- waves
- chains
- flames
- wind bars
- feathers
- vines
- ropes
- clouds
- broken stone

For sleeve flipping:
If asked to switch arms, mirror the overall layout horizontally but create a NEW compatible design, not a lazy duplicate unless specifically requested.

LEFT ARM and RIGHT ARM sleeves should feel like matching opposites.

CHEST PIECE:

Wide horizontal or upper-chest composition.

Strong center focal point.

Should flow across pectorals and collarbone area.

Shoulder integration is important.

Avoid tall rectangular poster layouts.

BACK PIECE:

Large dominant centerpiece.

Spine-centered hierarchy.

Wide composition.

Supporting elements lighter or less dominant than the main subject.

No tiny unreadable details.

LEFT HALF BACK / RIGHT HALF BACK:

Use only the requested half.

Do not center the design.

Stop naturally near the spine.

Use asymmetrical flow.

Should fit shoulder blade, lat, and rib area.

BACK OF NECK / UPPER SHOULDERS:

Wide horizontal collar layout.

Works best with:
- raven wings
- gothic birds
- skull crest
- small central emblem
- chains
- thorn vines
- filigree

Must read clearly from behind during entrances.

LEG SLEEVE:

Vertical flow.

Knee-safe spacing.

Natural taper.

Strong major subjects.

Avoid tiny details around joint areas.

────────────────────────
SUBJECT STYLE LIBRARY
────────────────────────

Gothic Horror:
- grim reaper
- cemetery
- ravens
- skulls
- gothic crosses
- ruined cathedrals
- chains
- fog
- tombstones
- candles
- dark angels
- scythes

Biker:
- skull with biker helmet
- motorcycle
- V-twin engine
- chains
- flames
- leather texture
- iron crosses
- ravens
- road grit
- smoke
- barbed wire

Japanese:
- dragon
- koi
- oni mask
- samurai
- ravens
- waves
- wind bars
- cherry blossoms
- maple leaves
- torii gates
- pagodas
- lightning
- fire
- clouds
- moon

Viking / Celtic:
- Celtic crosses
- knotwork
- wolves
- ravens
- axes
- swords
- shields
- horned skulls
- runic stone style
- chains
- storm clouds

────────────────────────
TEXT RULES
────────────────────────

Do not add text unless explicitly requested.

Do not invent names.

Do not add fake lettering.

Do not add random kanji.

If Japanese characters are requested, keep them minimal and clean.

If exact text is requested, preserve it exactly.

Text must be readable and not distorted.

────────────────────────
MASK AND BLUR OUTPUTS
────────────────────────

When asked for design_mask:

Create a black-and-white alpha-style mask.

Rules:
- white = visible tattoo area
- black = transparent / hidden area
- no color
- no grey unless soft opacity is specifically needed
- clean silhouette
- strong readable shape
- no texture details
- no background

When asked for design_blur:

Create a softened blur version of the mask.

Rules:
- same shape as design_mask
- soft white/grey blurred area on black
- no sharp detail
- no color
- used for soft edge blending / falloff
- should match the tattoo silhouette

For tattoo + mask + blur sets:
- keep all three aligned to the same layout
- same canvas ratio
- same position
- same scale

────────────────────────
UPLOAD / REWORK PIPELINE
────────────────────────

When I upload an image and say “Use my tattoo pipeline,” do the following:

1. Treat the uploaded image as the source concept.
2. Preserve the requested main subject(s).
3. Remove unwanted backgrounds.
4. Convert to transparent tattoo-sheet format.
5. Improve layout for the requested body placement.
6. Improve contrast and readability.
7. Remove white halos and sticker edges.
8. Simplify details that will fail DDS compression.
9. Keep the strongest focal subject dominant.
10. Follow either Grey/Black WWE 2K or Full Color WWE 2K preset.
11. Output the finished tattoo artwork directly.

Do not overcomplicate the design.

Do not turn it into a poster.

Do not place it on a body.

Do not add unrelated objects unless requested.

────────────────────────
FAST REQUEST FORMAT
────────────────────────

Use this format when giving a tattoo request:

Preset:
[Grey/Black WWE 2K / Full Color WWE 2K]

Location:
[Left Arm Sleeve / Right Arm Sleeve / Chest / Full Back / Left Half Back / Neck / Leg]

Style:
[Gothic Horror / Biker / Japanese / Viking / Celtic / etc]

Theme:
[main idea]

Keep:
[things to preserve from uploaded image]

Change:
[things to improve or remove]

Outputs:
[main tattoo / transparent / design_mask / design_blur / aged / damaged]

────────────────────────
EXAMPLE REQUESTS
────────────────────────

Example 1:

Preset:
Full Color WWE 2K

Location:
Left Arm Sleeve

Style:
Traditional Japanese

Theme:
Dragon, koi, oni mask, torii gate, waves, maple leaves, lightning

Change:
Use a tapered sleeve layout, vivid colors, transparent background, strong WWE 2K readability

Outputs:
main tattoo

Example 2:

Preset:
Grey/Black WWE 2K

Location:
Right Arm Sleeve

Style:
Gothic Horror / Biker

Theme:
Grim reaper biker, motorcycle, chains, ravens, cemetery gates, skull with biker helmet

Change:
Black and grey only except colored flames if used, improve sleeve taper, transparent background, no sepia

Outputs:
main tattoo

Example 3:

Preset:
Grey/Black WWE 2K

Location:
Back of Neck / Upper Shoulders

Style:
Gothic

Theme:
Cow skull in grey with only red raven wing tips

Keep:
cow skull and red wing tips only

Remove:
everything else

Outputs:
main tattoo + design_mask + design_blur

────────────────────────
FINAL INSTRUCTION
────────────────────────

Generate the tattoo immediately.

Follow the requested body placement.

Follow the correct preset.

Make it game-ready for WWE 2K.

Transparent background.

Clean alpha.

Strong tattoo readability.

No unnecessary explanation.

No setup questions.
PROMPT;
function e($value) { return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($siteTitle); ?></title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Barlow:wght@400;500;600;700;900&display=swap');

  :root {
    --bg:        #111214;
    --surface:   #1a1c20;
    --surface2:  #22252a;
    --border:    #2e3138;
    --red:       #e03131;
    --red-dim:   #8b1c1c;
    --green:     #2f9e44;
    --amber:     #e67700;
    --blue:      #1971c2;
    --text:      #d4d8e0;
    --text-dim:  #7a808c;
    --text-mute: #4a5060;
    --code-bg:   #0d0f12;
    --mono:      'JetBrains Mono', monospace;
    --sans:      'Barlow', sans-serif;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: var(--sans);
    font-size: 15px;
    line-height: 1.7;
    min-height: 100vh;
  }

  /* ── HEADER ── */
  header {
    background: var(--surface);
    border-bottom: 2px solid var(--red);
    padding: 36px 0 28px;
    text-align: center;
  }
  header .eyebrow {
    font-family: var(--mono);
    font-size: 11px;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--red);
    margin-bottom: 10px;
  }
  header h1 {
    font-size: clamp(24px, 4vw, 40px);
    font-weight: 900;
    color: #fff;
    letter-spacing: -.02em;
    line-height: 1.1;
  }
  header .sub {
    margin-top: 10px;
    color: var(--text-dim);
    font-size: 14px;
  }
  .version-badge {
    display: inline-block;
    margin-top: 12px;
    font-family: var(--mono);
    font-size: 10px;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: var(--green);
    background: rgba(47,158,68,.12);
    border: 1px solid rgba(47,158,68,.35);
    border-radius: 3px;
    padding: 3px 10px;
  }

  /* ── NAV ── */
  nav {
    background: var(--surface2);
    border-bottom: 1px solid var(--border);
    padding: 0;
    position: sticky;
    top: 0;
    z-index: 100;
    overflow-x: auto;
    white-space: nowrap;
  }
  nav ul {
    list-style: none;
    display: inline-flex;
    padding: 0 16px;
  }
  nav a {
    display: block;
    padding: 12px 14px;
    font-family: var(--mono);
    font-size: 11px;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--text-dim);
    text-decoration: none;
    border-bottom: 2px solid transparent;
    transition: color .15s, border-color .15s;
  }
  nav a:hover { color: #fff; border-bottom-color: var(--red); }

  /* ── LAYOUT ── */
  .wrap {
    max-width: 860px;
    margin: 0 auto;
    padding: 0 20px 80px;
  }

  /* ── PART HEADER ── */
  .part {
    margin-top: 60px;
    padding: 20px 24px;
    background: var(--surface);
    border-left: 4px solid var(--red);
    border-radius: 0 4px 4px 0;
  }
  .part-label {
    font-family: var(--mono);
    font-size: 10px;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--red);
    margin-bottom: 4px;
  }
  .part h2 {
    font-size: 22px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.01em;
  }

  /* ── STEP ── */
  .step {
    margin-top: 36px;
  }
  .step-head {
    display: flex;
    align-items: baseline;
    gap: 12px;
    margin-bottom: 12px;
  }
  .step-num {
    font-family: var(--mono);
    font-size: 11px;
    font-weight: 600;
    color: var(--red);
    background: rgba(224,49,49,.12);
    border: 1px solid rgba(224,49,49,.3);
    border-radius: 3px;
    padding: 2px 8px;
    white-space: nowrap;
  }
  .step h3 {
    font-size: 16px;
    font-weight: 700;
    color: #fff;
  }

  /* ── SECTION LABEL (sub-heading inside step) ── */
  .section-label {
    font-family: var(--mono);
    font-size: 11px;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--text-dim);
    margin: 20px 0 8px;
    padding-bottom: 6px;
    border-bottom: 1px solid var(--border);
  }

  /* ── TOOL CARDS ── */
  .tool-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 14px;
    margin: 18px 0;
  }
  .tool-card {
    background: var(--surface2);
    border: 1px solid var(--border);
    border-top: 2px solid var(--red);
    border-radius: 4px;
    padding: 16px 18px;
  }
  .tool-card .t-name {
    font-family: var(--mono);
    font-size: 12px;
    font-weight: 600;
    color: var(--red);
    letter-spacing: .1em;
    text-transform: uppercase;
    margin-bottom: 4px;
  }
  .tool-card .t-ver {
    font-family: var(--mono);
    font-size: 10px;
    color: var(--green);
    margin-bottom: 8px;
  }
  .tool-card .t-desc {
    font-size: 13px;
    color: var(--text);
    line-height: 1.55;
  }
  .tool-card .t-note {
    margin-top: 8px;
    font-size: 12px;
    color: var(--text-dim);
  }
  .tool-card .t-access {
    margin-top: 10px;
    font-family: var(--mono);
    font-size: 10px;
    color: var(--amber);
    letter-spacing: .08em;
    text-transform: uppercase;
  }

  /* ── PROSE ── */
  p { margin-bottom: 10px; color: var(--text); }
  p:last-child { margin-bottom: 0; }

  /* ── CODE ── */
  code {
    font-family: var(--mono);
    font-size: 12.5px;
    background: var(--code-bg);
    color: #a8d8a8;
    padding: 2px 6px;
    border-radius: 3px;
  }
  pre {
    background: var(--code-bg);
    border: 1px solid var(--border);
    border-radius: 4px;
    padding: 16px 18px;
    margin: 12px 0;
    overflow-x: auto;
  }
  pre code {
    background: none;
    padding: 0;
    color: #a8d8a8;
    font-size: 13px;
    line-height: 1.65;
  }

  /* ── LISTS ── */
  ul, ol {
    padding-left: 22px;
    margin: 8px 0 10px;
  }
  li { margin-bottom: 5px; }
  li::marker { color: var(--red); }

  /* ── CHECK / CROSS ── */
  .checks { list-style: none; padding: 0; margin: 8px 0; }
  .checks li {
    display: flex;
    gap: 10px;
    align-items: flex-start;
    padding: 4px 0;
    font-size: 14px;
  }
  .checks li .icon { flex-shrink: 0; font-size: 13px; margin-top: 2px; }
  .checks li.ok .icon { color: var(--green); }
  .checks li.no .icon { color: var(--red); }

  /* ── CALLOUTS ── */
  .callout {
    border-radius: 4px;
    padding: 12px 16px;
    margin: 14px 0;
    font-size: 14px;
    display: flex;
    gap: 12px;
    align-items: flex-start;
    border-left: 3px solid;
  }
  .callout .icon { font-size: 15px; flex-shrink: 0; margin-top: 1px; }
  .callout.red   { background: rgba(224,49,49,.08);  border-color: var(--red);   }
  .callout.green { background: rgba(47,158,68,.08);  border-color: var(--green); }
  .callout.amber { background: rgba(230,119,0,.08);  border-color: var(--amber); }
  .callout.blue  { background: rgba(25,113,194,.08); border-color: var(--blue);  }
  .callout.grey  { background: var(--surface2);      border-color: var(--border);}
  .callout strong { color: #fff; display: block; margin-bottom: 3px; font-size: 13px; letter-spacing: .04em; text-transform: uppercase; font-family: var(--mono);}

  /* ── TABLES ── */
  .table-wrap { overflow-x: auto; margin: 14px 0; }
  table { width: 100%; border-collapse: collapse; font-size: 13.5px; }
  thead th {
    background: var(--surface2);
    color: var(--text-dim);
    font-family: var(--mono);
    font-size: 11px;
    letter-spacing: .1em;
    text-transform: uppercase;
    padding: 10px 14px;
    text-align: left;
    border-bottom: 1px solid var(--border);
  }
  tbody tr { border-bottom: 1px solid var(--border); }
  tbody tr:last-child { border-bottom: none; }
  tbody tr:nth-child(even) { background: rgba(255,255,255,.02); }
  tbody td { padding: 9px 14px; vertical-align: top; }
  td:first-child { font-weight: 600; color: #fff; white-space: nowrap; }
  td code { font-size: 12px; }

  /* ── PROMPT BOX ── */
  .prompt-box {
    background: var(--code-bg);
    border: 1px solid var(--border);
    border-top: 2px solid var(--red);
    border-radius: 4px;
    margin: 14px 0;
  }
  .prompt-box .prompt-label {
    font-family: var(--mono);
    font-size: 10px;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: var(--red);
    padding: 10px 16px 6px;
    border-bottom: 1px solid var(--border);
  }
  .prompt-box pre {
    border: none;
    border-radius: 0 0 4px 4px;
    margin: 0;
    background: transparent;
  }

  /* ── FILE TREE ── */
  .file-tree {
    background: var(--code-bg);
    border: 1px solid var(--border);
    border-radius: 4px;
    padding: 16px 20px;
    font-family: var(--mono);
    font-size: 13px;
    line-height: 1.8;
    color: #a8d8a8;
    margin: 12px 0;
  }
  .file-tree .comment { color: var(--text-mute); }
  .file-tree .folder { color: #a8c4e8; }
  .file-tree .changed { color: var(--green); }

  /* ── SUMMARY BOX ── */
  .summary-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
    margin: 16px 0;
  }
  .summary-card {
    background: var(--surface2);
    border: 1px solid var(--border);
    border-radius: 4px;
    padding: 14px 16px;
  }
  .summary-card .s-icon { font-size: 20px; margin-bottom: 6px; }
  .summary-card .s-label { font-family: var(--mono); font-size: 11px; color: var(--red); letter-spacing: .1em; text-transform: uppercase; margin-bottom: 4px; }
  .summary-card .s-text { font-size: 13px; color: var(--text); }

  /* ── CHANGE NOTICE ── */
  .change-notice {
    background: rgba(47,158,68,.06);
    border: 1px solid rgba(47,158,68,.25);
    border-left: 3px solid var(--green);
    border-radius: 4px;
    padding: 10px 14px;
    margin: 12px 0;
    font-size: 13px;
    font-family: var(--mono);
    color: var(--green);
  }
  .change-notice strong { color: #5de87a; }

  /* ── DIVIDER ── */
  hr { border: none; border-top: 1px solid var(--border); margin: 40px 0; }

  /* ── FOOTER ── */
  footer {
    text-align: center;
    padding: 30px 20px;
    font-family: var(--mono);
    font-size: 11px;
    color: var(--text-mute);
    border-top: 1px solid var(--border);
  }


  /* ── AI PROMPT SYSTEM ── */
  .ai-hero {
    margin-top: 40px;
    padding: 22px 24px;
    background: linear-gradient(135deg, rgba(224,49,49,.13), rgba(34,37,42,.98));
    border: 1px solid rgba(224,49,49,.35);
    border-left: 4px solid var(--red);
    border-radius: 6px;
  }
  .ai-hero h2 {
    color: #fff;
    font-size: 24px;
    margin-bottom: 8px;
  }
  .ai-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 14px;
  }
  .ai-btn {
    appearance: none;
    border: none;
    cursor: pointer;
    background: linear-gradient(135deg, var(--red), var(--red-dim));
    color: #fff;
    font-family: var(--mono);
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 11px 14px;
    border-radius: 4px;
  }
  .ai-btn.secondary {
    background: var(--surface2);
    border: 1px solid var(--border);
    color: var(--text);
  }
  .ai-btn:hover { filter: brightness(1.08); }
  .ai-panel {
    background: var(--surface);
    border: 1px solid var(--border);
    border-top: 2px solid var(--red);
    border-radius: 4px;
    padding: 18px;
    margin: 18px 0;
  }
  .ai-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
  }
  @media (max-width: 760px) {
    .ai-grid { grid-template-columns: 1fr; }
  }
  .ai-field label {
    display: block;
    font-family: var(--mono);
    color: var(--text-dim);
    font-size: 10px;
    letter-spacing: .12em;
    text-transform: uppercase;
    margin-bottom: 5px;
  }
  .ai-field input,
  .ai-field select,
  .ai-field textarea {
    width: 100%;
    background: var(--code-bg);
    color: var(--text);
    border: 1px solid var(--border);
    border-radius: 4px;
    padding: 10px 12px;
    font-family: var(--sans);
    font-size: 14px;
  }
  .ai-field textarea { min-height: 86px; resize: vertical; }
  .ai-textarea {
    width: 100%;
    min-height: 420px;
    resize: vertical;
    background: var(--code-bg);
    color: #a8d8a8;
    border: 1px solid var(--border);
    border-radius: 4px;
    padding: 16px 18px;
    font-family: var(--mono);
    font-size: 12.5px;
    line-height: 1.65;
    white-space: pre-wrap;
  }
  .ai-output { min-height: 270px; }
  .copy-status {
    min-height: 18px;
    color: var(--green);
    font-family: var(--mono);
    font-size: 11px;
    margin-top: 8px;
  }

</style>
</head>
<body>

<header>
  <div class="eyebrow">PC Modding Reference · Updated April 2026</div>
  <h1><?= e($siteTitle); ?></h1>
  <p class="sub">AI prompt system + complete texture guide · Clean alpha · Correct layouts · Stable in-game results</p>
  <div class="version-badge">✓ Includes AI Tattoo System · WWE 2K26 Layouts · DDS Masks · CakeView Workflow</div>
</header>

<nav>
  <ul>
    <li><a href="#overview">Overview</a></li>
    <li><a href="#ai-system">AI System</a></li>
    <li><a href="#tools">Tools</a></li>
    <li><a href="#base">Base Pipeline</a></li>
    <li><a href="#uv">UV Guides</a></li>
    <li><a href="#slots">Multi-Slot</a></li>
    <li><a href="#custom">Custom Slot</a></li>
    <li><a href="#prompts">Sheet Prompts</a></li>
    <li><a href="#troubleshoot">Troubleshoot</a></li>
  </ul>
</nav>

<div class="wrap">



  <!-- ── AI TATTOO SYSTEM ──────────────────────────────────────────── -->
  <section id="ai-system" class="ai-hero">
    <div class="part-label">Start Here</div>
    <h2>Use the AI Tattoo System</h2>
    <p>This page now includes the complete master prompt system. Copy the master prompt into your AI tool first, then paste a request from the builder below. The AI should follow the same WWE 2K tattoo pipeline: transparent tattoo sheets, correct body-placement layout, DDS-safe detail, clean alpha edges, grey/black and full-color presets, plus design_mask and design_blur support.</p>
    <div class="ai-actions">
      <button class="ai-btn" type="button" onclick="copyById('masterPrompt', 'masterStatus')">Copy Master Prompt</button>
      <button class="ai-btn secondary" type="button" onclick="copyById('aiRequestOutput', 'requestStatus')">Copy Built Request</button>
      <button class="ai-btn secondary" type="button" onclick="downloadText('wwe-2k-ai-tattoo-master-prompt.txt', document.getElementById('masterPrompt').value)">Download Prompt .txt</button>
    </div>
    <div id="masterStatus" class="copy-status"></div>
  </section>

  <section class="ai-panel">
    <div class="section-label" style="margin-top:0;">Master Prompt</div>
    <p>Paste this once into your AI/chatbot, then give it a request using the request builder below.</p>
    <textarea id="masterPrompt" class="ai-textarea" readonly><?= e($masterPrompt); ?></textarea>
    <div class="ai-actions">
      <button class="ai-btn" type="button" onclick="copyById('masterPrompt', 'masterStatus2')">Copy Master Prompt</button>
      <button class="ai-btn secondary" type="button" onclick="downloadText('wwe-2k-ai-tattoo-master-prompt.txt', document.getElementById('masterPrompt').value)">Download .txt</button>
    </div>
    <div id="masterStatus2" class="copy-status"></div>
  </section>

  <section class="ai-panel">
    <div class="section-label" style="margin-top:0;">AI Request Builder</div>
    <p>Use this to generate a clean command after the master prompt. It is especially useful when uploading reference tattoos for cleanup or conversion.</p>

    <div class="ai-grid">
      <div class="ai-field">
        <label for="aiPreset">Preset</label>
        <select id="aiPreset">
          <option>Grey/Black WWE 2K</option>
          <option>Full Color WWE 2K</option>
          <option>Mixed Style WWE 2K</option>
        </select>
      </div>
      <div class="ai-field">
        <label for="aiLocation">Location</label>
        <input id="aiLocation" value="Left Arm Sleeve">
      </div>
      <div class="ai-field">
        <label for="aiStyle">Style</label>
        <input id="aiStyle" value="Traditional Japanese">
      </div>
      <div class="ai-field">
        <label for="aiOutputs">Outputs</label>
        <input id="aiOutputs" value="main tattoo">
      </div>
      <div class="ai-field">
        <label for="aiTheme">Theme</label>
        <textarea id="aiTheme">Dragon, koi, oni mask, torii gate, waves, maple leaves, lightning</textarea>
      </div>
      <div class="ai-field">
        <label for="aiKeep">Keep</label>
        <textarea id="aiKeep">Main layout and sleeve taper from the uploaded image</textarea>
      </div>
      <div class="ai-field">
        <label for="aiChange">Change</label>
        <textarea id="aiChange">Use a tapered sleeve layout, vivid colors, transparent background, clean alpha edges, and strong WWE 2K readability</textarea>
      </div>
      <div class="ai-field">
        <label for="aiRemove">Remove</label>
        <textarea id="aiRemove">black background, white halo, skin mockups, poster framing, muddy detail</textarea>
      </div>
    </div>

    <div class="ai-actions">
      <button class="ai-btn" type="button" onclick="buildAiRequest()">Build Request</button>
      <button class="ai-btn secondary" type="button" onclick="copyById('aiRequestOutput', 'requestStatus')">Copy Request</button>
    </div>
    <div id="requestStatus" class="copy-status"></div>

    <div class="ai-field" style="margin-top:14px;">
      <label for="aiRequestOutput">Generated Request</label>
      <textarea id="aiRequestOutput" class="ai-textarea ai-output" readonly></textarea>
    </div>
  </section>

  <!-- ── MODDING OVERVIEW ──────────────────────────────────────────── -->
  <div class="part" id="overview" style="margin-top:40px;">
    <div class="part-label">2026 Overview</div>
    <h2>How WWE 2K26 PC Modding Works</h2>
  </div>

  <div class="step">
    <p>WWE 2K26 launched on Steam on March 12, 2026. Its modding ecosystem uses the same CAK archive format as prior 2K titles, but the toolchain has evolved significantly. Here is the current end-to-end picture.</p>

    <div class="section-label">The Modding Stack — 2026 Edition</div>
    <div class="callout grey">
      <span class="icon">📦</span>
      <div><strong>CAK Archives</strong>All game assets (character models, textures, sounds, arenas) are packed inside <code>.cak</code> files in the game directory. Modding means either replacing files inside existing CAKs, or baking new CAKs that the game loads in their place. The file format is unchanged from 2K24/2K25.</div>
    </div>
    <div class="callout grey">
      <span class="icon">🔌</span>
      <div><strong>CakeHook (DLL Injection)</strong>CakeHook is a DLL mod loader dropped into the game's root directory. It intercepts the game's CAK loading and redirects it to your custom baked files. Without CakeHook active, none of your mod CAKs will load. As of 2026 the menu hotkey is <strong>Back + RB + LB</strong>.</div>
    </div>
    <div class="callout grey">
      <span class="icon">👁️</span>
      <div><strong>CakeView (GUI Tool)</strong>CakeView is the primary tool for opening, browsing, extracting, and baking CAK files. It has replaced the older CakeTools workflow for most tasks. The home page shows recently baked CAKs for quick rebaking. Use <strong>CTRL+F</strong> to search files, <strong>CTRL+B</strong> to open the bake prompt.</div>
    </div>
    <div class="callout grey">
      <span class="icon">🎁</span>
      <div><strong>Tribute 26 (Character / Attire Installer)</strong>Tribute 26 is the dedicated character and alternate attire mod manager for 2K26. It handles the baking process for you via a wizard interface. Mods placed in Tribute's <code>BakeMe\</code> folder layout are auto-processed and is the standard install method for character mods.</div>
    </div>
    <div class="callout grey">
      <span class="icon">🔷</span>
      <div><strong>Blender MDL Plugin (3D Modelling)</strong>The WWE 2K26 MDL Blender Plugin (Patreon, requires Blender 4.0.5) lets you import and export <code>.mdl</code> model files directly in Blender for porting, editing, and creating custom meshes. This replaced older 3ds Max scripts as the community's primary 3D pipeline.</div>
    </div>

    <div class="callout grey">
      <span class="icon">💡</span>
      <div><strong>Free &amp; Pro Tiers</strong>CakeView, CakeHook, Tribute 26, and the Blender MDL Plugin are all available to download for free. Subscribing to Pro Wrestling Mods (<code>patreon.com/c/PWMods</code>) or Tribute (<code>patreon.com/TributeModding</code>) on Patreon and verifying your subscriber status inside the tools unlocks Pro features and early access. Mods themselves are downloaded free from ProWrestlingMods.io.</div>
    </div>
  </div>

  <!-- ── TOOLS ───────────────────────────────────────────────────────── -->
  <div class="part" id="tools">
    <div class="part-label">Setup</div>
    <h2>Required Tools &amp; Current Versions</h2>
  </div>

  <div class="step">
    <div class="tool-grid">

      <div class="tool-card">
        <div class="t-name">CakeView</div>
        <div class="t-ver">v1.0.0.52224 (Public) · Jan 2025</div>
        <div class="t-desc">Primary GUI for opening, browsing, extracting, and baking CAK files. Replaced CakeTools as the main workflow tool. Features multithreaded baking, CTRL+F search, thumbnail grid, and Discord rich presence.</div>
        <div class="t-note">Set your game exe path in Settings → it unlocks "Open Game Directory" to browse all CAKs at once.</div>
        <div class="t-access">📥 Pro Wrestling Mods Patreon</div>
      </div>

      <div class="tool-card">
        <div class="t-name">CakeHook</div>
        <div class="t-ver">v2.6.2 · Jun 2025</div>
        <div class="t-desc">DLL loader that enables mod CAKs in-game. Drop both <code>dinput.dll</code> and <code>CakeHook.dll</code> into the WWE 2K26 root directory. Menu hotkey (controller): <strong>Back + RB + LB</strong>.</div>
        <div class="t-note">Place files in root — not in any subfolder. No further configuration needed for basic use.</div>
        <div class="t-access">📥 Pro Wrestling Mods Patreon</div>
      </div>

      <div class="tool-card">
        <div class="t-name">Tribute 26</div>
        <div class="t-ver">2026 Release</div>
        <div class="t-desc">Dedicated character and alternate attire installer for 2K26. Provides an Easy Wizard and a Manual Method. Handles CAK baking internally. The BakeMe folder layout is the current standard for character mods.</div>
        <div class="t-note">Use CakeView's Material Editor to save <code>basemodel.mtls</code> and <code>attire.mtls</code> if you see a shiny/black texture bug after baking.</div>
        <div class="t-access">📥 patreon.com/TributeModding</div>
      </div>

      <div class="tool-card">
        <div class="t-name">CakeTools</div>
        <div class="t-ver">v1.03.10</div>
        <div class="t-desc">Legacy command-line CAK packer. Still functional and useful for scripted workflows or batch operations, but CakeView has superseded it for day-to-day texture modding. Kept as a backup option.</div>
        <div class="t-note">If using CakeTools for a bake folder, the old <code>_mods</code> folder method still works — output is <code>bakedfile08.cak</code>.</div>
        <div class="t-access">📥 Pro Wrestling Mods Patreon</div>
      </div>

      <div class="tool-card">
        <div class="t-name">MDL Blender Plugin</div>
        <div class="t-ver">MCD 2.15 · Apr 2026</div>
        <div class="t-desc">Blender 4.0.5 addon for importing and exporting WWE 2K26 <code>.mdl</code> model files. Required for porting mods from 2K25, custom character meshes, belt fixes, and bone adjustments. Install via Blender → Edit → Preferences → Add-ons → Install from ZIP.</div>
        <div class="t-note">Only select mesh objects (not the skeleton) when exporting new MDLs.</div>
        <div class="t-access">📥 Pro Wrestling Mods Patreon</div>
      </div>

      <div class="tool-card">
        <div class="t-name">DDS Plugin — Photoshop</div>
        <div class="t-ver">Intel Texture Works (recommended)</div>
        <div class="t-desc">Enables DDS export directly from Photoshop. The Intel Texture Works plugin (GitHub: GameTechDev) is preferred for BC7 and BCn compression. NVIDIA Texture Tools Exporter is an alternative. Do not run both simultaneously — multiple DDS plugins cause texture display errors on load.</div>
        <div class="t-note">Alternative: AMD Compressonator for batch DDS processing via project files. Works with TIF source files (not PSD).</div>
        <div class="t-access">📥 Free — GitHub / AMD / NVIDIA</div>
      </div>

    </div>

    <div class="section-label" style="margin-top:24px;">Two Files Control Everything</div>
    <div class="callout grey">
      <span class="icon">📄</span>
      <div><strong>.dds</strong>What your tattoo looks like. 95% of your work lives here.</div>
    </div>
    <div class="callout grey">
      <span class="icon">🎭</span>
      <div><strong>design.mskinfo</strong>How the tattoo behaves on the body — skin blend, material flags. You will almost never edit this.</div>
    </div>
    <div class="callout red">
      <span class="icon">⚠</span>
      <div><strong>Rule</strong>Grab a good <code>design.mskinfo</code> from an existing tattooed superstar and reuse it. Focus all effort on DDS + alpha.</div>
    </div>
  </div>

  <!-- ── BASE PIPELINE ─────────────────────────────────────────────── -->
  <div class="part" id="base">
    <div class="part-label">Part 1</div>
    <h2>Base Pipeline — Create &amp; Apply Tattoo Textures</h2>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 1</span><h3>Locate Game Files</h3></div>
    <p>Default Steam installation path — this is what you point CakeView at:</p>
    <pre><code>...\Steam\steamapps\common\WWE 2K26\</code></pre>
    <p>CakeView reads <code>.cak</code> files directly from this root. New mod CAKs baked by CakeView are placed in:</p>
    <pre><code>...\Steam\steamapps\common\WWE 2K26\Mods\</code></pre>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 2</span><h3>Open All Game Files in CakeView</h3></div>
    <p>CakeView loads the entire game folder at once — you do not need to know which individual <code>.cak</code> file contains what. Point it at your game root and it presents everything in a unified tree.</p>
    <ol>
      <li>Open CakeView — set your game exe path in <strong>Settings</strong> if not already done</li>
      <li>Use <strong>File → Open Game Directory</strong> to load all <code>.cak</code> files at once</li>
      <li>Use <strong>CTRL+F</strong> to search for the files you need (e.g. <code>body_l_arm</code>, <code>body_chest</code>) across the entire game — no manual hunting through individual CAKs</li>
    </ol>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 3</span><h3>Extract Files to Your Mod Working Location</h3></div>
    <p>Always extract to a separate folder outside the game directory — keeps originals clean and gives you a clear working space.</p>
    <div class="callout green"><span class="icon">💡</span><div><strong>Recommended</strong>Use a dedicated drive/folder for mod work, e.g. <code>D:\WWE2K26-Mods\extracts\</code>. Never edit files directly inside the game directory.</div></div>
    <p style="margin-top:12px;">Two options:</p>
    <ul>
      <li><strong>Extract everything</strong> — right-click the game root in the tree → <strong>Export Folders (including subfolders)</strong> → point to your extracts folder. Gives you the full game file set to browse locally.</li>
      <li><strong>Extract just what you need</strong> — navigate the tree to the specific folder (e.g. character body textures), right-click → <strong>Export Folders (including subfolders)</strong> → export only that section. Faster for targeted texture work.</li>
    </ul>
    <p style="margin-top:8px;">You will get: <code>.dds</code> texture files, <code>design.mskinfo</code>, and material entries in your chosen output location.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 4</span><h3>Identify a Tattoo Slot</h3></div>
    <p>Look for files named like:</p>
    <pre><code>body_l_arm_01.dds
body_chest_01.dds
body_back_01.dds</code></pre>
    <p>Open each DDS in Photoshop. Tattoo present = usable slot. Blank skin = skip.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 5</span><h3>Verify the Slot — Critical</h3></div>
    <div class="callout red"><span class="icon">⚠</span><div><strong>Do this first</strong>Never assume a slot is correct. This test saves hours.</div></div>
    <ol>
      <li>Replace the target DDS with a solid primary color (bright red or green)</li>
      <li>Repack the CAK (see Step 12)</li>
      <li>Load in-game</li>
    </ol>
    <ul class="checks" style="margin-top:10px;">
      <li class="ok"><span class="icon">✔</span><span>Only the intended region changes → correct slot</span></li>
      <li class="no"><span class="icon">✘</span><span>Full body changes color → wrong slot, test a different file</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 6</span><h3>Prepare Your Texture in Photoshop</h3></div>

    <div class="section-label">Canvas Setup</div>
    <ul>
      <li>Size: <strong>4096 × 4096 px</strong></li>
      <li>Optional: place extracted body diffuse as bottom reference layer at 30–40% opacity (lock it)</li>
    </ul>

    <div class="section-label">UV Region Reference — Male Medium Body, 4K</div>
    <p>Keep all visible pixels inside these boxes. Everything outside must be fully transparent.</p>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Region</th><th>X Range (px)</th><th>Y Range (px)</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Left Arm (full sleeve)</td><td>2600 – 3400</td><td>900 – 3300</td><td>Tapers toward wrist</td></tr>
          <tr><td>Left Chest (upper pec)</td><td>1800 – 2550</td><td>900 – 1600</td><td>Angle inward 3–5°, stop 150 px from sternum seam</td></tr>
          <tr><td>Upper Back (left scapula)</td><td>1900 – 2600</td><td>300 – 900</td><td>Keep left of spine seam</td></tr>
        </tbody>
      </table>
    </div>

    <div class="section-label">Recommended Layer Stack</div>
    <ul>
      <li>Tattoo Base — black/grey linework</li>
      <li>Red Accents — low opacity, non-neon</li>
      <li>Depth Layer — Blend: Multiply, Opacity: 10–15%</li>
      <li>Skin Blend — subtle fade at borders</li>
    </ul>

    <div class="section-label">Edge &amp; Blending Rules</div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Slight fade on all borders (20–40 px feather)</span></li>
      <li class="ok"><span class="icon">✔</span><span>No hard-cut edges</span></li>
      <li class="no"><span class="icon">✘</span><span>No pure black solid blocks at the boundary</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 7</span><h3>Build the Alpha Channel — Most Important Step</h3></div>
    <ol>
      <li>Open the <strong>Channels</strong> panel</li>
      <li>Create a new <strong>Alpha Channel</strong></li>
      <li>Fill with pure <strong>black</strong></li>
      <li>Paint the tattoo region <strong>white</strong></li>
    </ol>
    <ul class="checks" style="margin-top:10px;">
      <li class="ok"><span class="icon">✔</span><span>White = visible tattoo</span></li>
      <li class="ok"><span class="icon">✔</span><span>Black = transparent (skin shows through)</span></li>
      <li class="ok"><span class="icon">✔</span><span>Grey = soft blend transition</span></li>
    </ul>
    <div class="callout red" style="margin-top:12px;">
      <span class="icon">⚠</span>
      <div><strong>Clean Edge Trick — prevents halo</strong>Select tattoo area → Select → Modify → Contract (1 px) → Feather: 0.3–0.5 px. Eliminates white fringing completely.</div>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 8</span><h3>Color Optimization</h3></div>
    <p>Use this value for red accents:</p>
    <pre><code>RGB: 175 / 28 / 28</code></pre>
    <ul class="checks">
      <li class="no"><span class="icon">✘</span><span>Avoid pure #FF0000 — glows under arena lights</span></li>
      <li class="no"><span class="icon">✘</span><span>Avoid any neon tones</span></li>
      <li class="ok"><span class="icon">✔</span><span>Optional: reduce saturation ~10% and slightly darken</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 9</span><h3>Ink Realism Pass</h3></div>
    <ol>
      <li>Duplicate the tattoo layer</li>
      <li>Set Blend Mode: <strong>Multiply</strong>, Opacity: <strong>10–14%</strong></li>
      <li>Add Noise: <strong>2%</strong></li>
      <li>Add Blur: <strong>0.3 px</strong></li>
    </ol>
    <p style="margin-top:8px;">This makes ink look embedded in skin rather than pasted on top.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 10</span><h3>Export DDS</h3></div>
    <div class="callout red">
      <span class="icon">⚠</span>
      <div><strong>Do not get this wrong</strong>Format: BC7 (preferred) or DXT5 · Mipmaps: ON · Alpha: YES · sRGB: ON</div>
    </div>
    <div class="section-label">DDS Export Options by Tool</div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Tool</th><th>Method</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Intel Texture Works (Photoshop)</td><td>File → Save As → DDS</td><td>Preferred — handles BC7 + alpha correctly. Do not run alongside NVIDIA plugin.</td></tr>
          <tr><td>NVIDIA Texture Tools (Photoshop)</td><td>File → Save As → DDS</td><td>Alternate. Disable Intel plugin first to avoid load errors.</td></tr>
          <tr><td>AMD Compressonator</td><td>File → New Project → Add TIF → Process</td><td>Good for batch. Source must be TIF, not PSD.</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 11</span><h3>Replace the DDS</h3></div>
    <p>In your extracted folder, replace the original DDS with your file. Keep the filename identical.</p>
    <ul class="checks">
      <li class="no"><span class="icon">✘</span><span>Do NOT edit <code>design.mskinfo</code></span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 12</span><h3>Repack the CAK — CakeView Method</h3></div>
    <ol>
      <li>In CakeView, use <strong>CTRL+B</strong> to open the Bake prompt</li>
      <li>Configure bake settings in <strong>Settings → Configuration</strong> (multithreading, custom compression ratio)</li>
      <li>Select your working folder and bake — the home page will list it for quick rebaking next time</li>
    </ol>
    <div class="callout grey"><span class="icon">💡</span><div><strong>Quick Rebake</strong>The CakeView home page shows all recently baked items — click any entry to rebake immediately without navigating the tree.</div></div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 13</span><h3>Install the Mod — Folder Layout</h3></div>

    <p><strong>Tribute 26 — BakeMe layout (standard character &amp; attire mods):</strong></p>
    <p>Drop your mod into the Tribute BakeMe folder structure and let Tribute handle baking:</p>
    <div class="file-tree">
<span class="folder">Tribute\</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="folder">BakeMe\</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← Tribute watches this folder</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="folder">wrestlers\</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="folder">characters\</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="changed">YourModHere\</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← drop mod folder here</span><br>
    </div>

    <p><strong>CakeView manual bake (tattoo / texture mods without Tribute):</strong></p>
    <div class="file-tree">
<span class="folder">WWE 2K26\</span><br>
&nbsp;&nbsp;<span class="folder">Mods\</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← mod root</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;bakedfile08.cak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← output from CakeView bake</span><br>
    </div>

    <div class="callout blue">
      <span class="icon">ℹ</span>
      <div><strong>Tribute Easy Wizard</strong>For character and alternate attire mods, use Tribute 26's Easy Wizard — it handles folder placement, baking, and game target path automatically. Use Manual Method only for advanced control.</div>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 14</span><h3>In-Game Testing Checklist</h3></div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Idle stance — alignment and transparency</span></li>
      <li class="ok"><span class="icon">✔</span><span>Arm movement — check for stretching</span></li>
      <li class="ok"><span class="icon">✔</span><span>Entrance lighting — check for shininess or glow</span></li>
      <li class="ok"><span class="icon">✔</span><span>Close-up camera — check edge quality</span></li>
    </ul>
  </div>

  <!-- ── UV GUIDES ─────────────────────────────────────────────────── -->
  <div class="part" id="uv">
    <div class="part-label">Part 2</div>
    <h2>Pixel-Accurate UV Guides — Chest, Back &amp; Arm</h2>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step A</span><h3>Get a UV Reference (one time only)</h3></div>
    <ol>
      <li>In CakeView, search (<strong>CTRL+F</strong>) for <code>body_diffuse</code> and export the body diffuse DDS to your extracts folder</li>
      <li>Open it in Photoshop</li>
      <li>Boost contrast so island borders are clearly visible</li>
      <li>Save a copy as <code>uv_ref_4096.png</code> — this is your alignment layer</li>
    </ol>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step B</span><h3>Working PSD Setup</h3></div>
    <ol>
      <li>New document: <strong>4096 × 4096 px</strong></li>
      <li>Bottom layer: <code>uv_ref_4096.png</code> at 30–40% opacity — lock it</li>
      <li>All tattoo layers go above it</li>
    </ol>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Left Arm</span><h3>Full Sleeve</h3></div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Area</th><th>X</th><th>Y</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Canvas region</td><td>2600 – 3400</td><td>900 – 3300</td><td>Full sleeve</td></tr>
          <tr><td>Focal element</td><td>Upper third</td><td>900 – 1600</td><td>Skull / main motif at shoulder</td></tr>
          <tr><td>Taper direction</td><td>Downward</td><td>→ Y: 3300</td><td>Forearm narrows naturally</td></tr>
        </tbody>
      </table>
    </div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Vertical flow — shoulder (top) to wrist (bottom)</span></li>
      <li class="ok"><span class="icon">✔</span><span>Fill background with lighter grey elements — no bare canvas inside the region</span></li>
      <li class="ok"><span class="icon">✔</span><span>Taper composition 15–20% narrower at the bottom</span></li>
      <li class="no"><span class="icon">✘</span><span>Never hard-edge the boundary — feather 30–40 px</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Chest</span><h3>Shoulder to Shoulder</h3></div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Area</th><th>X</th><th>Y</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Canvas region</td><td>1800 – 2550</td><td>900 – 1600</td><td>Left chest</td></tr>
          <tr><td>Focal element</td><td>Centre</td><td>950 – 1400</td><td>Cross / skull centrepiece</td></tr>
          <tr><td>Inner edge limit</td><td>Stop at X: 2520</td><td>—</td><td>150–200 px before sternum seam</td></tr>
          <tr><td>Angle</td><td>Inward 3–5°</td><td>—</td><td>Follows chest muscle curve</td></tr>
        </tbody>
      </table>
    </div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Strongest contrast at the central focal element</span></li>
      <li class="ok"><span class="icon">✔</span><span>Fade toward collarbone (top) and sternum (inner edge)</span></li>
      <li class="no"><span class="icon">✘</span><span>Do not bleed past the sternum seam — it will mirror visibly</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Back</span><h3>Left Shoulder to Mid-Back</h3></div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Area</th><th>X</th><th>Y</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Canvas region</td><td>1900 – 2600</td><td>300 – 900</td><td>Left scapula</td></tr>
          <tr><td>Focal element</td><td>Upper area</td><td>300 – 550</td><td>Shield / symbol at shoulder blade</td></tr>
          <tr><td>Flow direction</td><td>Slight vertical</td><td>→ Y: 900</td><td>Chains / runes downward</td></tr>
        </tbody>
      </table>
    </div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Keep composition left of the spine seam</span></li>
      <li class="ok"><span class="icon">✔</span><span>Simpler than chest — back lighting reduces fine detail visibility</span></li>
      <li class="ok"><span class="icon">✔</span><span>Rotate inward +3° to follow the scapula curve</span></li>
      <li class="no"><span class="icon">✘</span><span>Avoid overcrowding — back designs should breathe</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">All Regions</span><h3>Edge Blending &amp; Alpha Checklist</h3></div>
    <ol>
      <li>Add a layer mask to the tattoo group</li>
      <li>Soft round brush at 10–20% opacity</li>
      <li>Fade all edges 20–40 px inward from the UV boundary</li>
      <li>Fade extra (50–60 px) at seams: sternum, spine, wrist</li>
    </ol>
    <ul class="checks" style="margin-top:12px;">
      <li class="ok"><span class="icon">✔</span><span>Pure black outside the tattoo region</span></li>
      <li class="ok"><span class="icon">✔</span><span>Pure white inside the main design</span></li>
      <li class="ok"><span class="icon">✔</span><span>Gentle grey transition at borders</span></li>
      <li class="ok"><span class="icon">✔</span><span>Contract 1 px → Feather 0.3–0.5 px after selection</span></li>
      <li class="no"><span class="icon">✘</span><span>No grey noise or haze outside the design boundary</span></li>
    </ul>
  </div>

  <!-- ── MULTI-SLOT ─────────────────────────────────────────────────── -->
  <div class="part" id="slots">
    <div class="part-label">Part 3</div>
    <h2>Multi-Slot System — Clean vs Damaged Toggle</h2>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Method A</span><h3>Separate Slots — Recommended</h3></div>
    <div class="callout green"><span class="icon">✔</span><div><strong>Result</strong>Two independent DDS files, one slot per attire. No flicker, no z-fighting, fully predictable.</div></div>
    <p style="margin-top:12px;"><strong>File naming:</strong></p>
    <pre><code>body_l_arm_01.dds   ← clean version
body_l_arm_02.dds   ← damaged version</code></pre>
    <ol style="margin-top:10px;">
      <li>Extract a CAK with a working tattoo slot</li>
      <li>Duplicate the DDS and rename as above</li>
      <li>Use the same <code>design.mskinfo</code> style for both</li>
      <li>Repack and test each slot independently via CakeView bake</li>
    </ol>
    <div class="section-label" style="margin-top:18px;">Building the Damaged Version in Photoshop</div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Reduce overall opacity: 80–85%</span></li>
      <li class="ok"><span class="icon">✔</span><span>Add a grunge mask — erase edges irregularly with a scatter brush</span></li>
      <li class="ok"><span class="icon">✔</span><span>Desaturate reds: –10 to –15</span></li>
      <li class="ok"><span class="icon">✔</span><span>Add tiny cracks or scratches with a fine hard brush</span></li>
      <li class="ok"><span class="icon">✔</span><span>Export identically: BC7, Mipmaps ON, Alpha ON</span></li>
    </ul>
    <div class="callout grey" style="margin-top:12px;"><span class="icon">💡</span><div><strong>In-Game</strong>Assign clean and damaged DDS files to different attires in the CAK, or swap via Tribute 26's attire manager.</div></div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Method B</span><h3>True Stacked Layers — Advanced</h3></div>
    <div class="callout amber"><span class="icon">⚠</span><div><strong>Warning</strong>Use this only when you need layered visual effects. Risk of z-fighting and over-darkening if not handled carefully.</div></div>
    <p style="margin-top:10px;">Concept: two material entries both point to the same body region — one for clean base, one for damage overlay.</p>
    <ol style="margin-top:10px;">
      <li>Duplicate a tattoo material entry inside the CAK</li>
      <li>Point entry 1 → <code>body_l_arm_01.dds</code> (clean base)</li>
      <li>Point entry 2 → <code>body_l_arm_02.dds</code> (damage overlay)</li>
      <li>Duplicate <code>design.mskinfo</code> for each entry</li>
    </ol>
    <div class="section-label" style="margin-top:16px;">Prevent Flicker</div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Never stack pure black on pure black — top layer must be visually lighter</span></li>
      <li class="ok"><span class="icon">✔</span><span>Bake reduced opacity into the DDS itself, do not rely on material opacity</span></li>
      <li class="ok"><span class="icon">✔</span><span>Keep alpha softer on the overlay — harder alpha = more z-fighting risk</span></li>
    </ul>
  </div>

  <!-- ── CUSTOM SLOT ────────────────────────────────────────────────── -->
  <div class="part" id="custom">
    <div class="part-label">Part 4</div>
    <h2>Custom Material Slot — Add Without Replacing</h2>
  </div>

  <div class="step">
    <p>This is how you add a new tattoo on top of existing ones without replacing anything.</p>
    <div class="step-head" style="margin-top:20px;"><span class="step-num">Step 1</span><h3>Open All Game Files in CakeView</h3></div>
	
    <p>CakeView loads the entire game folder at once — you do not need to know which individual <code>.cak</code> file contains what. Point it at your game root and it presents everything in a unified tree.</p>
    <ol>
      <li>Open CakeView — set your game exe path in <strong>Settings</strong> if not already done</li>
      <li>Use <strong>File → Open Game Directory</strong> to load all <code>.cak</code> files at once</li>
      <li>Use <strong>CTRL+F</strong> to search for the files you need (e.g. <code>body_l_arm</code>, <code>body_chest</code>) across the entire game — no manual hunting through individual CAKs</li>
    </ol>
  </div>

  <div class="step">
    <div class="step-head"><h3>Extract Files to Your Mod Working Location</h3></div>
    <p>Always extract to a separate folder outside the game directory — keeps originals clean and gives you a clear working space.</p>
    <div class="callout green"><span class="icon">💡</span><div><strong>Recommended</strong>Use a dedicated drive/folder for mod work, e.g. <code>D:\WWE2K26-Mods\extracts\</code> Never edit files directly inside the game directory.</div></div>
    <p style="margin-top:12px;">Two options:</p>
    <ul>
      <li><strong>Extract everything</strong> — right-click the game root in the tree → <strong>Export Folders (including subfolders)</strong> → point to your extracts folder. Gives you the full game file set to browse locally.</li>
      <li><strong>Extract just what you need</strong> — navigate the tree to the specific folder (e.g. character body textures), right-click → <strong>Export Folders (including subfolders)</strong> → export only that section. Faster for targeted texture work.</li>
    </ul>
    <p style="margin-top:8px;">You will get: <code>.dds</code> texture files, <code>design.mskinfo</code>, and material entries in your chosen output location.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 2</span><h3>Locate a Tattoo Material Block</h3></div>
    <p>Find a material entry referencing: a DDS texture file, a <code>design.mskinfo</code>, and a shader / material type.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 3</span><h3>Duplicate That Entire Block</h3></div>
    <p>Copy the complete working block. This gives you a proven configuration — do not start from scratch.</p>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 4</span><h3>Create New Asset Files</h3></div>
    <pre><code>body_custom_01.dds
design_custom_01.mskinfo    ← copy of a known-good mask</code></pre>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 5</span><h3>Repoint the Duplicated Material</h3></div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Change texture reference → <code>body_custom_01.dds</code></span></li>
      <li class="ok"><span class="icon">✔</span><span>Change mask reference → <code>design_custom_01.mskinfo</code></span></li>
      <li class="no"><span class="icon">✘</span><span>Do NOT change: shader, blend mode, or material type</span></li>
    </ul>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Step 6</span><h3>Repack and Test via CakeView</h3></div>
    <ul class="checks">
      <li class="ok"><span class="icon">✔</span><span>Tattoo shows in correct region → success</span></li>
      <li class="no"><span class="icon">✘</span><span>Tattoo appears on entire body → wrong source block, try a different one</span></li>
    </ul>
  </div>

  <!-- ── SHEET PROMPTS ──────────────────────────────────────────────────── -->
  <div class="part" id="prompts">
    <div class="part-label">Part 5</div>
    <h2>Pre-Aligned 4096 Tattoo Sheet Generation Prompts</h2>
  </div>

  <div class="step">
    <p>For best results, use the <a href="#ai-system" style="color:var(--red); font-weight:700;">AI Tattoo System</a> at the top of this page. The prompts below are kept as quick legacy examples, but the master prompt and request builder now produce better WWE 2K-ready results.</p>

    <div class="section-label" style="margin-top:20px;">Global Rules — Add to Every Prompt</div>
    <div class="prompt-box">
      <div class="prompt-label">Paste into every generation</div>
      <pre><code>- Fully transparent background (no white, no glow, no halo)
- Clean, sharp alpha edges suitable for DDS conversion
- Black and grey tattoo style with subtle dark red accents (non-glowing)
- High contrast: dark foreground, lighter background fill elements
- No empty space inside the design (fully filled composition)
- No blur, no soft haze, no background artifacts
- Designed as a flat texture, NOT on a body
- 4096x4096 resolution
- Bold linework, no overly fine details</code></pre>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Prompt 1</span><h3>Left Arm — Full Sleeve</h3></div>
    <p style="color:var(--text-dim); font-size:13px;">UV target: X 2600–3400, Y 900–3300 · Vertical composition, shoulder to wrist</p>
    <div class="prompt-box">
      <div class="prompt-label">Full prompt — copy and paste</div>
      <pre><code>Create a 4096x4096 high-resolution tattoo texture with a fully transparent
background (clean alpha, no white edges, no glow).

Design a full left arm sleeve tattoo in a dark gothic style.

Composition:
- Vertical layout flowing from shoulder (top) to wrist (bottom)
- A large detailed skull in the upper third (shoulder / deltoid area)
- Surrounding gothic tribal patterns, chains, and dark ornamental shapes
- Background fully filled with lighter grey elements (skulls, runes,
  filigree) — no empty space

Style:
- Black and grey realism tattoo
- Bold, thick lines with high contrast
- Subtle dark red accents in cracks, eyes, or symbols (non-glowing)

Technical:
- Clean edges with proper transparency
- No soft blur or haze
- Optimized for UV wrapping on a cylindrical arm surface
- Design tapers slightly toward the bottom</code></pre>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Prompt 2</span><h3>Chest — Shoulder to Shoulder</h3></div>
    <p style="color:var(--text-dim); font-size:13px;">UV target: X 1800–2550, Y 900–1600 · Wide horizontal composition</p>
    <div class="prompt-box">
      <div class="prompt-label">Full prompt — copy and paste</div>
      <pre><code>Create a 4096x4096 high-resolution tattoo texture with a fully transparent
background (clean alpha, no white edges, no glow).

Design a full upper chest tattoo spanning shoulder to shoulder.

Composition:
- Wide horizontal layout
- Large central gothic cross with intricate detail and a dark red gemstone
  in the centre
- Symmetrical extension outward across both sides
- Supporting elements: skulls, gothic architecture, chains, ornamental
  patterns — no empty areas

Style:
- Black and grey tattoo realism
- Strong central focal point, supporting elements lighter in tone
- Dark red accents only in the gemstone and minor details

Technical:
- Clean alpha edges, no background artifacts
- Slight inward curvature to match chest anatomy</code></pre>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">Prompt 3</span><h3>Back — Left Shoulder to Mid-Back</h3></div>
    <p style="color:var(--text-dim); font-size:13px;">UV target: X 1900–2600, Y 300–900 · Slight vertical orientation</p>
    <div class="prompt-box">
      <div class="prompt-label">Full prompt — copy and paste</div>
      <pre><code>Create a 4096x4096 high-resolution tattoo texture with a fully transparent
background (clean alpha, no white edges, no glow).

Design a left upper back tattoo extending from the shoulder to mid-back.

Composition:
- Slight vertical orientation
- Main focal element near upper shoulder (gothic symbol, skull, or shield)
- Flowing downward with chains, runic patterns, dark ornamental elements
- Background filled with lighter grey Viking / gothic textures (skulls,
  swords, runes)

Style:
- Black and grey realism, slightly darker and simpler than the chest tattoo
- Subtle dark red accents used sparingly
- Strong silhouette for visibility under arena lighting

Technical:
- Clean transparency, no blur or haze
- Designed to sit on left scapula area
- Balanced density — not overcrowded</code></pre>
    </div>
  </div>

  <div class="step">
    <div class="step-head"><span class="step-num">After Gen</span><h3>Photoshop Cleanup Checklist</h3></div>
    <ol>
      <li>Select Subject → Contract 1 px → Feather 0.3–0.5 px</li>
      <li>Open Channels panel → verify Alpha: pure black outside, pure white inside</li>
      <li>Check for grey noise outside the design boundary — erase if found</li>
      <li>Export: DDS → BC7 → Mipmaps ON → Alpha ON → sRGB ON</li>
    </ol>
  </div>

  <!-- ── TROUBLESHOOT ────────────────────────────────────────────────── -->
  <div class="part" id="troubleshoot">
    <div class="part-label">Reference</div>
    <h2>Troubleshooting</h2>
  </div>

  <div class="step">
    <div class="table-wrap">
      <table>
        <thead><tr><th>Issue</th><th>Cause</th><th>Fix</th></tr></thead>
        <tbody>
          <tr><td>Tattoo appears shiny / black</td><td>MTLS/material file not regenerated after bake</td><td>Open CakeView Material Editor → open <code>basemodel.mtls</code> → Save. Repeat for <code>attire.mtls</code>. This regenerates the file and clears the shiny bug.</td></tr>
          <tr><td>Tattoo appears shiny</td><td>Bad or missing mask file</td><td>Swap in a known-good <code>design.mskinfo</code> from a tattooed superstar CAK</td></tr>
          <tr><td>Tattoo glows</td><td>Wrong material flags</td><td>Replace the mask file with a matte variant</td></tr>
          <tr><td>Tattoo is stretched</td><td>Artwork outside UV region</td><td>Reposition DDS content within the correct UV box</td></tr>
          <tr><td>Tattoo appears everywhere</td><td>Wrong DDS slot selected</td><td>Re-run the solid-color test (Step 5) on a different file</td></tr>
          <tr><td>Edges look cut out / halo</td><td>Hard alpha edge</td><td>Contract 1 px + Feather 0.3–0.5 px on the alpha channel</td></tr>
          <tr><td>Flicker between layers</td><td>Z-fighting from stacked materials</td><td>Bake into one DDS, or lighten the top layer slightly</td></tr>
          <tr><td>Mods not loading in-game</td><td>CakeHook not placed correctly</td><td>Ensure both <code>dinput.dll</code> and <code>CakeHook.dll</code> are in the WWE 2K26 root directory, not a subfolder</td></tr>
          <tr><td>Character mod crashes game</td><td>Incorrect bake or MTLS issue</td><td>Rebuild MTLS via CakeView Material Editor. Try Tribute 26 Manual Method instead of Easy Wizard for more control.</td></tr>
          <tr><td>DDS loads with display error</td><td>Multiple DDS plugins active</td><td>Disable one plugin. Intel Texture Works and NVIDIA plugin cannot run simultaneously in Photoshop.</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ── FINAL FILE STRUCTURE ──────────────────────────────────────── -->
  <hr>

  <div class="section-label">Complete File Structure — Mod Layout</div>
  <div class="file-tree">
<span class="folder">WWE 2K26\Plugins\</span><br>
&nbsp;&nbsp;dinput.dll &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← CakeHook loader</span><br>
&nbsp;&nbsp;CakeHook.dll &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← CakeHook DLL</span><br>
&nbsp;&nbsp;<span class="folder">Tribute 26\Bakeme\</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← mod root</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\Characters\ &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← individual mod</span><br>
<br>
 <div class="section-label">Texture Types And Names</div>
Tattoo textures (inside CAK):<br>
&nbsp;&nbsp;body_l_arm_01.dds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← clean sleeve</span><br>
&nbsp;&nbsp;body_l_arm_02.dds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← damaged variant</span><br>
&nbsp;&nbsp;body_chest_01.dds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← gothic cross piece</span><br>
&nbsp;&nbsp;body_back_01.dds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← shoulder to mid-back</span><br>
&nbsp;&nbsp;design.mskinfo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">← known-good matte mask</span>
  </div>

  <div class="section-label" style="margin-top:30px;">Best Practice Summary</div>
  <div class="summary-grid">
    <div class="summary-card">
      <div class="s-icon">🎭</div>
      <div class="s-label">Mask</div>
      <div class="s-text">Reuse a proven <code>design.mskinfo</code> — never start from a broken one</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">🎨</div>
      <div class="s-label">DDS Focus</div>
      <div class="s-text">95% of your effort goes into DDS quality and alpha precision</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">🔦</div>
      <div class="s-label">Matte</div>
      <div class="s-text">Keep tattoos matte and blended — arena lights punish shininess hard</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">📐</div>
      <div class="s-label">Placement</div>
      <div class="s-text">Placement is 100% DDS/UV work — do not rely on the mask for it</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">🏃</div>
      <div class="s-label">Test in Motion</div>
      <div class="s-text">Always test idle, walk, and entrance — static looks different from dynamic</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">✅</div>
      <div class="s-label">Order</div>
      <div class="s-text">Build clean first, damaged after — never start with the complex version</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">📂</div>
      <div class="s-label">Mod Path</div>
      <div class="s-text">Character mods go in Tribute's <code>Tribute 26\BakeMe\characters\</code> folder. CakeView bakes output to <code>Mods\</code>.</div>
    </div>
    <div class="summary-card">
      <div class="s-icon">🔧</div>
      <div class="s-label">MTLS Fix</div>
      <div class="s-text">Shiny/black bug? Open &amp; re-save <code>basemodel.mtls</code> + <code>attire.mtls</code> in CakeView Material Editor.</div>
    </div>
  </div>

  <div class="callout red" style="margin-top:36px;">
    <span class="icon">🏁</span>
    <div><strong>Final Result</strong>If the pipeline is followed correctly: tattoos wrap perfectly across all animations · blend into skin naturally · stay stable under all lighting · look like they shipped with the game.</div>
  </div>

</div>

<footer>WWE 2K26 PC · AI Tattoo Texture Pipeline · Updated April 2026 · CakeView · CakeHook · Tribute 26 · MDL Blender Plugin</footer>


<script>
function copyById(id, statusId) {
  const el = document.getElementById(id);
  if (!el) return;
  copyText(el.value || el.textContent, statusId);
}

function copyText(text, statusId) {
  const status = document.getElementById(statusId);
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(text).then(function () {
      if (status) {
        status.textContent = 'Copied!';
        setTimeout(function () { status.textContent = ''; }, 1800);
      }
    }).catch(function () {
      fallbackCopy(text, status);
    });
  } else {
    fallbackCopy(text, status);
  }
}

function fallbackCopy(text, status) {
  const temp = document.createElement('textarea');
  temp.value = text;
  document.body.appendChild(temp);
  temp.select();
  try { document.execCommand('copy'); if (status) status.textContent = 'Copied!'; }
  catch (e) { if (status) status.textContent = 'Copy failed — select and copy manually.'; }
  document.body.removeChild(temp);
  if (status) setTimeout(function () { status.textContent = ''; }, 1800);
}

function downloadText(filename, text) {
  const blob = new Blob([text], { type: 'text/plain;charset=utf-8' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = filename;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(url);
}

function buildAiRequest() {
  const get = id => (document.getElementById(id)?.value || '').trim();
  const request = `Use my tattoo pipeline.

Preset:
${get('aiPreset')}

Location:
${get('aiLocation')}

Style:
${get('aiStyle')}

Theme:
${get('aiTheme')}

Keep:
${get('aiKeep')}

Change:
${get('aiChange')}

Remove:
${get('aiRemove')}

Outputs:
${get('aiOutputs')}`;
  const out = document.getElementById('aiRequestOutput');
  if (out) out.value = request;
}

['aiPreset','aiLocation','aiStyle','aiOutputs','aiTheme','aiKeep','aiChange','aiRemove'].forEach(function (id) {
  const el = document.getElementById(id);
  if (el) {
    el.addEventListener('input', buildAiRequest);
    el.addEventListener('change', buildAiRequest);
  }
});
buildAiRequest();
</script>

</body>
</html>