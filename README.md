Here’s a GitHub-ready `README.md` you can copy directly.

# WWE 2K Tattoo Texture Pipeline

A custom tattoo design and texture workflow for creating WWE 2K-ready tattoo assets, including black-and-grey realism, full-color tattoo sheets, body-location-specific layouts, DDS-safe detailing, and UV/layout-aware placement.

This pipeline is designed for creators making custom wrestlers, modded body textures, tattoo overlays, and high-resolution tattoo sheets for WWE 2K-style games.

> This project is not affiliated with WWE, 2K, Visual Concepts, or Take-Two Interactive. It is a fan-made creative workflow for custom texture and tattoo design.

---

## What This Pipeline Does

This tattoo pipeline helps generate, refine, and prepare tattoo artwork for WWE 2K custom texture use.

It focuses on:

* Creating tattoo designs that look good in-game, not just in previews
* Building tattoo sheets for specific body areas
* Preparing art for DDS conversion
* Avoiding detail loss from BC7 compression
* Compensating for WWE 2K lighting and brightness
* Creating clean alpha/transparent tattoo assets
* Designing tattoos that remain readable from gameplay camera distance
* Supporting both black-and-grey and full-color tattoo styles

The goal is to create tattoos that look like real tattoo work while still surviving game-engine lighting, compression, and body UV distortion.

---

## Main Use Cases

This pipeline can be used for:

* Full back tattoos
* Left/right half-back tattoos
* Chest pieces
* Full sleeves
* Half sleeves
* Neck tattoos
* Shoulder pieces
* Leg sleeves
* Split-style tattoo concepts
* Gothic horror tattoos
* Biker tattoos
* Japanese Irezumi tattoos
* Viking/Celtic tattoo concepts
* Custom wrestler identity tattoos

---

## Core Workflow

The standard workflow is:

1. Choose the tattoo location.
2. Choose the style or genre.
3. Generate the tattoo using the correct style rules.
4. Refine the tattoo for WWE 2K readability.
5. Ensure the background is transparent.
6. Split or mirror the image if required by the game layout.
7. Place the tattoo onto the correct UV/body texture area.
8. Export as PNG for editing.
9. Convert to DDS when ready for game use.
10. Test in-game and adjust brightness, contrast, placement, and scale.

---

## Black-and-Grey Tattoo Rules

Black-and-grey tattoos use a darker, healed tattoo look.

These rules are intended to make tattoos readable under WWE 2K arena lighting.

### Core Style

* Black-and-grey realism
* Dark overall appearance
* Heavy dark-grey shading
* Deep black anchor shadows
* Smooth realism transitions
* Minimal pure white
* Slightly aged/healed tattoo appearance
* No sepia tones
* No brown wash
* No parchment effect
* No poster-style artwork

### Tonal Distribution Target

Recommended value balance:

```text
Pure Black: 5–10%
Dark Grey: 45%
Mid Grey: 35%
Light Grey: 15%
Pure White: <1%
```

### Usage Rules

Pure black should only be used for:

* Eye sockets
* Deep shadows
* Strong silhouettes
* Major focal separation
* Anchor points

Dark grey should dominate the tattoo.

Mid grey should carry most of the shading.

Light grey should only support highlights.

Pure white should almost never be used.

---

## Full-Color Tattoo Rules

Full-color tattoos follow a separate pipeline from black-and-grey tattoos.

The goal is vivid, high-impact tattoo art with strong color separation.

### Core Style

* Full-color tattoo realism
* Vivid saturation
* Strong contrast
* Bold readable shapes
* Rich color transitions
* Professional tattoo studio quality
* No washed-out colors unless specifically requested
* No unnecessary grey overlay
* No sepia tone
* No muted vintage filter

### Recommended Color Use

Full-color designs can use:

* Rich reds
* Deep blues
* Emerald greens
* Gold accents
* Purple shadows
* Orange highlights
* Cyan energy effects
* Bright metallic transitions

Colors should remain clear, bold, and readable in-game.

---

## WWE 2K Lighting Compensation

WWE 2K often makes imported tattoos appear brighter in-game than they look in the image editor.

To compensate:

* Make black-and-grey tattoos slightly darker than expected
* Reduce bright highlights
* Avoid pure white fills
* Use darker midtones
* Increase silhouette strength
* Test under arena lighting when possible

A tattoo that looks slightly too dark in Photoshop or GIMP may look correct once imported into WWE 2K.

---

## DDS Compression Safety

Tattoo textures must survive DDS compression, especially BC7 compression.

Avoid:

* Pure white fills
* Single-pixel details
* Hairline cracks
* Micro-scratches
* Tiny ornamental texture
* Overly thin linework
* Excessive noise
* Detail that only looks good when zoomed in

Prioritize:

* Large readable forms
* Strong silhouettes
* Medium-distance visibility
* Bold linework
* Clear subject separation
* Readable shadows
* Compression-safe detail

Arena-lighting readability is more important than zoom-level realism.

---

## Transparency Rules

Tattoo assets should be created as transparent PNG tattoo sheets whenever possible.

Required:

* Transparent background
* Clean alpha edges
* No white halo
* No black background baked into the tattoo
* No paper texture
* No skin mockup
* No body mockup
* No poster background
* No frame

The final tattoo should be isolated artwork only.

---

## Body Placement Rules

Different body locations require different composition rules.

### Full Sleeves

* Vertical flow
* Tapered layout
* Large focal point near shoulder
* Medium elements through bicep
* Smaller transition elements near wrist
* Seam-safe edges
* Avoid tiny details near wrap seams

### Chest Pieces

* Strong center focal point
* Pectoral-aware flow
* Shoulder compatibility
* Wide readability
* Avoid clutter directly over high-stretch areas

### Back Pieces

* Large dominant centerpiece
* Spine-aware layout
* Wide composition
* Strong left/right balance
* Supporting elements lighter than the main subject
* Avoid important details too close to UV seams

### Half-Back Pieces

* Design only for the required side
* Stop naturally near the spine
* Avoid accidental mirroring
* Use asymmetrical flow
* Keep the main subject readable from the rear camera

### Neck / Upper Shoulder Pieces

* Horizontal collar-style layout
* Strong silhouette
* Minimal tiny details
* Works best with wings, ravens, skulls, chains, or gothic bands
* Should sit above the shoulders and below the hairline

---

## Back Layout Notes

Some WWE 2K back tattoo layouts may appear reversed when applied to the body.

Observed behavior:

```text
Right side of the texture canvas may map to the left side of the character's back.

Left side of the texture canvas may map to the right side of the character's back.
```

Because of this, split-back tattoos may need to be arranged opposite on the canvas.

Example:

```text
Desired in-game result:

Character Left Back:
Full-color Japanese tattoo

Character Right Back:
Black-and-grey biker tattoo
```

Possible texture canvas setup:

```text
Canvas Right Side:
Japanese color tattoo

Canvas Left Side:
Black-and-grey biker tattoo
```

Always test placement in-game before finalizing.

---

## Example Split-Back Concept

A full back tattoo can be split into two different styles:

### Character Left Back

Full-color Japanese Irezumi:

* Dragon
* Waves
* Cherry blossoms
* Maple leaves
* Torii gate
* Storm clouds
* Gold horns
* Emerald scales
* Red accents

### Character Right Back

Black-and-grey gothic biker:

* Grim Reaper biker
* Motorcycle
* Cemetery gates
* Ravens
* Chains
* Skulls
* Tombstones
* Gothic architecture

### Spine Divider

A vertical broken chain can separate the two worlds.

The divider helps make the split look intentional instead of like two unrelated tattoos.

---

## Example Prompt Format

Use this format for consistent results:

```text
Genre:
[Style or theme]

Location:
[Body location]

Topic:
[Main subjects]

Color Rules:
[Black-and-grey or full-color]

Technical Rules:
Transparent background.
WWE 2K optimized.
DDS compression safe.
4096x4096 ready.
Clean alpha edges.
No mockup.
No poster background.
```

---

## Black-and-Grey Prompt Template

```text
Create a WWE 2K optimized tattoo sheet.

Style:
Black-and-grey tattoo realism.

Location:
[Insert body location]

Topic:
[Insert tattoo subject]

Rules:
Dark overall appearance.
Heavy dark-grey shading.
Deep black anchor shadows.
Smooth realism transitions.
Minimal pure white.
No sepia.
No brown tones.
No parchment texture.
No poster styling.

Tonal Distribution:
Pure Black: 5–10%
Dark Grey: 45%
Mid Grey: 35%
Light Grey: 15%
Pure White: <1%

DDS Safety:
Avoid single-pixel details.
Avoid hairline cracks.
Avoid micro-detail.
Use bold readable forms.
Must remain visible at medium camera distance.

Output:
Transparent PNG tattoo sheet.
Clean alpha edges.
No skin mockup.
No body mockup.
No background.
Designed for 4096x4096 DDS conversion.
```

---

## Full-Color Prompt Template

```text
Create a WWE 2K optimized full-color tattoo sheet.

Style:
Full-color tattoo realism.

Location:
[Insert body location]

Topic:
[Insert tattoo subject]

Rules:
Vivid colors.
High saturation.
Strong contrast.
Bold readable shapes.
Professional tattoo studio quality.
No washed-out colors.
No sepia.
No muted vintage effect.
No poster background.

Color:
Use rich, vivid tattoo colors.
Allow reds, blues, greens, golds, purples, oranges, and cyan highlights where appropriate.
Keep colors clean and separated.

DDS Safety:
Avoid single-pixel details.
Avoid hairline cracks.
Avoid micro-detail.
Use large readable forms.
Must remain visible at medium camera distance.

Output:
Transparent PNG tattoo sheet.
Clean alpha edges.
No skin mockup.
No body mockup.
No background.
Designed for 4096x4096 DDS conversion.
```

---

## Recommended Export Settings

For editing:

```text
PNG
Transparent background
High resolution
Preferably 4096x4096
```

For game texture use:

```text
DDS
BC7 compression if supported
Mipmaps enabled
Alpha preserved
sRGB enabled when appropriate
```

Fallback option:

```text
DXT5 / BC3
Use only if BC7 is not supported by the toolchain
```

---

## Editing Tips

Recommended editing tools:

* Photoshop
* GIMP
* Photopea
* Paint.NET
* Krita
* Substance Painter
* Any DDS-capable texture editor

Useful adjustments:

* Darken midtones before import
* Reduce white highlights
* Clean alpha edges
* Remove halos
* Test placement on UV layout
* Split left/right halves if needed
* Mirror only when required by the body layout
* Keep a layered source file before exporting

---

## Common Problems and Fixes

### Tattoo looks too bright in-game

Fix:

* Darken midtones
* Reduce highlights
* Lower light grey usage
* Add more dark grey shading

### Tattoo looks blurry

Fix:

* Use larger forms
* Avoid micro-detail
* Increase line weight
* Reduce tiny cracks and scratches

### Tattoo has a visible box around it

Fix:

* Remove background
* Check alpha transparency
* Clean edge halo
* Export as transparent PNG before DDS conversion

### Tattoo appears on the wrong side

Fix:

* Reverse the canvas layout
* Test left/right mapping in-game
* Split the design into separate halves if needed

### Tattoo loses detail after DDS conversion

Fix:

* Avoid single-pixel details
* Use BC7 compression
* Increase contrast between major forms
* Avoid noisy texture areas

---

## Current Pipeline Goals

This pipeline is built around four main goals:

1. Make tattoos look good in WWE 2K gameplay.
2. Make tattoos survive DDS compression.
3. Make tattoos fit body layouts properly.
4. Make tattoos feel like real tattoo work instead of flat stickers.

---

## Project Status

This workflow is actively evolving.

Current supported styles include:

* Black-and-grey gothic horror
* Black-and-grey biker
* Full-color Japanese
* Split-style back tattoos
* Raven wing neck bands
* Skull and chain motifs
* Reaper biker compositions
* Celtic/gothic ornament designs

Future improvements may include:

* UV placement guides
* Layered PSD templates
* Separate alpha masks
* DDS export presets
* WWE 2K body layout references
* Ready-to-use prompt packs
* Example tattoo sheets

---

## License

Use this workflow freely for personal custom wrestler projects, modding experiments, and tattoo texture design.

Do not claim official affiliation with WWE, 2K, Visual Concepts, or Take-Two Interactive.
