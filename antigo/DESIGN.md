---
name: Skilla Vanguard
colors:
  surface: '#121414'
  surface-dim: '#121414'
  surface-bright: '#38393a'
  surface-container-lowest: '#0c0f0f'
  surface-container-low: '#1a1c1c'
  surface-container: '#1e2020'
  surface-container-high: '#282a2b'
  surface-container-highest: '#333535'
  on-surface: '#e2e2e2'
  on-surface-variant: '#c3c6d7'
  inverse-surface: '#e2e2e2'
  inverse-on-surface: '#2f3131'
  outline: '#8d90a0'
  outline-variant: '#434655'
  surface-tint: '#b4c5ff'
  primary: '#b4c5ff'
  on-primary: '#002a78'
  primary-container: '#2563eb'
  on-primary-container: '#eeefff'
  inverse-primary: '#0053db'
  secondary: '#fbffe0'
  on-secondary: '#2a3400'
  secondary-container: '#c7f000'
  on-secondary-container: '#576a00'
  tertiary: '#c9c6c5'
  on-tertiary: '#313030'
  tertiary-container: '#6e6d6d'
  on-tertiary-container: '#f3f0ef'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#dbe1ff'
  primary-fixed-dim: '#b4c5ff'
  on-primary-fixed: '#00174b'
  on-primary-fixed-variant: '#003ea8'
  secondary-fixed: '#c9f308'
  secondary-fixed-dim: '#b0d500'
  on-secondary-fixed: '#171e00'
  on-secondary-fixed-variant: '#3e4c00'
  tertiary-fixed: '#e5e2e1'
  tertiary-fixed-dim: '#c9c6c5'
  on-tertiary-fixed: '#1c1b1b'
  on-tertiary-fixed-variant: '#474646'
  background: '#121414'
  on-background: '#e2e2e2'
  surface-variant: '#333535'
typography:
  display-xl:
    fontFamily: Space Grotesk
    fontSize: 96px
    fontWeight: '700'
    lineHeight: 100%
    letterSpacing: -0.04em
  display-lg:
    fontFamily: Space Grotesk
    fontSize: 64px
    fontWeight: '700'
    lineHeight: 110%
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Space Grotesk
    fontSize: 48px
    fontWeight: '600'
    lineHeight: 120%
  body-lg:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '400'
    lineHeight: 160%
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 160%
  label-caps:
    fontFamily: Space Grotesk
    fontSize: 14px
    fontWeight: '700'
    lineHeight: 100%
rounded:
  sm: 0.5rem
  DEFAULT: 1rem
  md: 1.5rem
  lg: 2rem
  xl: 3rem
  full: 9999px
spacing:
  unit: 8px
  gutter: 24px
  margin-mobile: 20px
  margin-desktop: 64px
  section-gap: 120px
---

## Brand & Style
The design system is built for a bold, forward-thinking creative agency targeting the Angolan digital market. It evokes a sense of high-energy, technical precision, and unapologetic confidence. The aesthetic is **High-Contrast / Bold**, merging editorial layouts with a brutalist digital edge. It prioritizes impact over subtlety, using massive typographic hierarchies and a vibrant, "electric" color palette to command attention. The user experience should feel fast, modern, and culturally resonant, utilizing motion and scale to signal creative authority.

## Colors
The palette is designed for extreme contrast. **Skilla Blue (#2563EB)** is reserved for high-priority CTAs and interactive highlights, cutting through the layout. **Lime (#C7F000)** serves as the primary "disruptor" color, used for section backgrounds that need to pop and for decorative accents. **Dark (#0A0A0A)** provides the grounding foundation for deep-contrast sections and text on Lime backgrounds. For light-themed sections, a crisp **Off-White (#F4F4F4)** is used to maintain a clean, editorial look. Text should always adhere to maximum contrast ratios—typically Dark on Lime or White on Blue.

## Typography
Typography is the core structural element of this design system. **Space Grotesk** is used for all headlines to provide a technical, futuristic edge; at large scales, it should use tight tracking for a "locked-in" feel. Headlines in Portuguese (Angola) often require careful management of diacritics at large sizes to ensure they do not interfere with line heights. **Inter** handles all UI labels and long-form body copy, ensuring legibility against high-contrast backgrounds. Use "display-xl" for hero sections and "label-caps" for eyebrow text and marquee content.

## Layout & Spacing
The design system employs an **Editorial, Asymmetrical Grid**. While based on a 12-column structure, elements should frequently break the grid or span unconventional column counts (e.g., a 7-column image next to a 5-column text block). Sections are separated by large vertical gaps to allow the typography to breathe. Horizontal marquee scrolling should be used to break up vertical flow, containing fast-moving uppercase text or logos. Margins are generous on desktop to create a premium, gallery-like feel.

## Elevation & Depth
This system eschews soft shadows in favor of **Bold Borders** and **Tonal Layering**. Depth is created through the stacking of high-contrast color blocks. When elements need to appear "elevated," use a solid 2px or 3px border (Dark or Blue) rather than a blur. In specific "Dark" sections, subtle tonal shifts (e.g., #1A1A1A on #0A0A0A) can be used for cards, but the primary method of hierarchy is color blocking. Smooth transitions (300ms-500ms) should be applied to hover states and section entries to soften the brutalist edges.

## Shapes
The shape language is dominated by **Pill-shaped** containers for interactive elements and **Sharp** corners for structural blocks. This contrast between the fluid, organic curves of buttons and the rigid, rectangular nature of the sections creates a dynamic visual tension. Pill shapes should be used for all buttons, chips, and search bars, while images and section containers remain strictly rectangular (0px radius) to maintain the editorial grid feel.

## Components
- **Buttons:** Primary CTAs are pill-shaped, using Skilla Blue with white text. They must include a trailing arrow icon (→) that animates horizontally on hover.
- **Marquee:** A full-width component with Lime background and Dark text, scrolling continuously. Used for "Serviços" or "Portfólio" highlights.
- **Cards:** Use sharp edges with a 1px solid border. In Dark mode, use a Lime border for active states.
- **Inputs:** High-contrast fields with 0px radius, using "Inter" for placeholder text. The focus state should trigger a 2px Skilla Blue bottom border.
- **Section Headers:** Oversized Space Grotesk text, often overlapping image containers to reinforce the asymmetrical editorial style.
- **Arrows/Icons:** Use thick, geometric iconography that matches the stroke weight of the typography.