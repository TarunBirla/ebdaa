<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Ebdaa IFC — The Front Door to Global Islamic Finance Mandates')</title>
  <meta name="description"
    content="@yield('meta_description', 'Boutique Sharia advisory, governance, Sukuk structuring, and technology-enabled Islamic finance consultancy headquartered in London and Toronto.')">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* =========================================================
     DESIGN TOKENS — brand colors untouched, system extended
     ========================================================= */
    :root {
      /* --- original brand palette (unchanged) --- */
      --white: #ffffff;
      --pale: #EEF7FD;
      --pale-2: #E3F1FB;
      --sky: #BFE3F8;
      --blue: #1671C4;
      --blue-deep: #0A3D6B;
      --blue-ink: #0B2A45;
      --ink: #0E2536;
      --ink-soft: #4A6377;
      --line: #D7E9F5;

      /* --- tonal extensions derived FROM the palette above --- */
      --ink-deep: #061B2C;
      /* darker than blue-deep, for true-black surfaces */
      --blue-mid: #0F5794;
      /* midpoint between blue and blue-deep */
      --sky-dim: #8FC6EC;
      /* muted sky for secondary text on dark */
      --gold-accent: #C9A15A;
      /* restrained warm metallic, used as a rare 2nd accent — sparingly */
      --glass-fill: rgba(255, 255, 255, .06);
      --glass-fill-soft: rgba(255, 255, 255, .04);
      --glass-border: rgba(255, 255, 255, .14);
      --line-on-dark: rgba(255, 255, 255, .12);

      --grad-deep: linear-gradient(150deg, var(--ink-deep) 0%, var(--blue-deep) 62%, var(--blue-mid) 100%);
      --grad-accent: linear-gradient(120deg, var(--blue-deep) 0%, var(--blue) 100%);
      --grad-pale: linear-gradient(180deg, var(--white) 0%, var(--pale) 100%);

      --shadow-1: 0 1px 2px rgba(6, 27, 44, .06), 0 8px 24px rgba(6, 27, 44, .06);
      --shadow-2: 0 4px 10px rgba(6, 27, 44, .08), 0 24px 48px rgba(6, 27, 44, .10);
      --shadow-glow: 0 0 0 1px rgba(255, 255, 255, .06), 0 20px 60px rgba(10, 61, 107, .35);

      --font-display: 'Space Grotesk', sans-serif;
      --font-mono: 'IBM Plex Mono', ui-monospace, monospace;
      --radius-sm: 4px;
      --radius: 8px;
      --radius-lg: 16px;
      --container: 1280px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: var(--font-display);
      color: var(--ink);
      background: var(--white);
      line-height: 1.55;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
      font-size: 16px;
    }

    /* Pulse Dot Animation for AI Status Indicators */
    @keyframes pulseDot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.35; transform: scale(0.8); }
    }

    /* Global AI Signal & Status Chips */
    .ai-chip {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 5px 12px;
      border-radius: 100px;
      font-family: var(--font-mono);
      font-size: 11.5px;
      font-weight: 500;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      background: rgba(22, 113, 196, 0.12);
      border: 1px solid rgba(22, 113, 196, 0.3);
      color: var(--blue);
    }

    .ai-chip.on-dark {
      background: rgba(143, 198, 236, 0.1);
      border-color: rgba(143, 198, 236, 0.25);
      color: var(--sky);
    }

    .ai-chip .pulse-node {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #4ADE80;
      box-shadow: 0 0 8px #4ADE80;
      animation: pulseDot 2s ease-in-out infinite;
      flex: none;
    }

    /* Background Data Grid Effect */
    .bg-grid-subtle {
      background-image: linear-gradient(to right, rgba(10,61,107,0.05) 1px, transparent 1px),
                        linear-gradient(to bottom, rgba(10,61,107,0.05) 1px, transparent 1px);
      background-size: 32px 32px;
    }

    .bg-grid-dark {
      background-image: linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
                        linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 32px 32px;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    ul {
      list-style: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      background: none;
    }

    .wrap {
      max-width: var(--container);
      margin: 0 auto;
      padding: 0 40px;
    }

    h1,
    h2,
    h3,
    h4 {
      font-weight: 600;
      letter-spacing: -0.015em;
      color: var(--blue-deep);
      line-height: 1.18;
    }

    section {
      position: relative;
    }

    @media (prefers-reduced-motion: reduce) {
      * {
        animation-duration: .001ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .001ms !important;
        scroll-behavior: auto !important;
      }
    }

    /* focus visibility */
    a:focus-visible,
    button:focus-visible {
      outline: 2px solid var(--blue);
      outline-offset: 3px;
      border-radius: 2px;
    }

    /* =========================================================
     EYEBROW — status-style tag rather than tracked all-caps
     ========================================================= */
    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-mono);
      font-size: 12px;
      font-weight: 500;
      color: var(--blue);
      margin-bottom: 16px;
      letter-spacing: .01em;
    }

    .eyebrow::before {
      content: "";
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--blue);
      box-shadow: 0 0 0 3px rgba(22, 113, 196, .18);
      flex: none;
    }

    .eyebrow.on-dark {
      color: var(--sky);
    }

    .eyebrow.on-dark::before {
      background: var(--sky);
      box-shadow: 0 0 0 3px rgba(191, 227, 248, .18);
    }

    /* =========================================================
     BUTTONS
     ========================================================= */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 14px 24px;
      border: 1.5px solid var(--blue-deep);
      font-size: 14.5px;
      font-weight: 500;
      color: var(--blue-deep);
      border-radius: var(--radius-sm);
      transition: all .25s ease;
      white-space: nowrap;
      position: relative;
    }

    .btn:hover {
      background: var(--blue-deep);
      color: #fff;
    }

    .btn.solid {
      background: var(--grad-accent);
      border-color: transparent;
      color: #fff;
      box-shadow: var(--shadow-1);
    }

    .btn.solid:hover {
      filter: brightness(1.08);
      box-shadow: var(--shadow-2);
    }

    .btn.ghost-light {
      border-color: rgba(255, 255, 255, .4);
      color: #fff;
      background: var(--glass-fill-soft);
      backdrop-filter: blur(6px);
    }

    .btn.ghost-light:hover {
      background: #fff;
      color: var(--blue-deep);
      border-color: #fff;
    }

    .btn svg,
    .btn i {
      transition: transform .25s ease;
      font-size: 13px;
    }

    .btn:hover svg,
    .btn:hover i {
      transform: translateX(3px);
    }

    /* =========================================================
     CARD PRIMITIVES — hairline + tonal fill, restrained radius
     ========================================================= */
    .blue-box {
      background: var(--grad-deep);
      color: var(--white);
      border-radius: var(--radius);
      padding: 32px;
      box-shadow: var(--shadow-glow);
    }

    .blue-box h3,
    .blue-box h4 {
      color: var(--white) !important;
    }

    .blue-box p {
      color: rgba(255, 255, 255, .82);
    }

    .blue-box-pale {
      background: var(--pale);
      border: 1px solid var(--line);
      border-left: 3px solid var(--blue);
      border-radius: var(--radius-sm);
      padding: 28px;
      color: var(--ink);
    }

    .blue-box-pale h3,
    .blue-box-pale h4 {
      color: var(--blue-deep);
    }

    .blue-card {
      background: var(--grad-deep);
      color: var(--white);
      border-radius: var(--radius);
      padding: 28px;
      position: relative;
      overflow: hidden;
      transition: transform .3s ease, box-shadow .3s ease;
    }

    .blue-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-glow);
    }

    .blue-card h3,
    .blue-card h4 {
      color: var(--white) !important;
    }

    /* corner-bracket accent used across dashboard-style media cards */
    .corner-mark {
      position: absolute;
      top: 16px;
      left: 16px;
      width: 20px;
      height: 20px;
      z-index: 3;
      opacity: .85;
      pointer-events: none;
    }

    .corner-mark path {
      stroke: rgba(255, 255, 255, .85);
      stroke-width: 1.4;
      fill: none;
    }

    /* =========================================================
     HEADER
     ========================================================= */
    header.site-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 500;
      background: rgba(6, 27, 44, .72);
      backdrop-filter: blur(14px) saturate(140%);
      border-bottom: 1px solid var(--line-on-dark);
      transition: background .3s ease, box-shadow .3s ease, border-color .3s ease;
    }

    header.site-header.solid {
      background: rgba(255, 255, 255, .9);
      backdrop-filter: blur(14px) saturate(140%);
      border-bottom: 1px solid var(--line);
      box-shadow: 0 1px 0 rgba(10, 61, 107, .04), 0 12px 30px rgba(10, 61, 107, .06);
    }

    .header-inner {
      max-width: var(--container);
      margin: 0 auto;
      padding: 0 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 80px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 11px;
      font-size: 20px;
      font-weight: 600;
      line-height: 1;
      color: var(--white);
      letter-spacing: -0.01em;
    }

    header.site-header.solid .logo {
      color: var(--blue-deep);
    }

    .logo-mark {
      width: 30px;
      height: 30px;
      flex: none;
    }

    .logo-mark circle {
      fill: none;
      stroke: var(--sky);
      stroke-width: 1.3;
    }

    header.site-header.solid .logo-mark circle {
      stroke: var(--blue);
    }

    .logo-mark .node {
      fill: var(--sky);
    }

    header.site-header.solid .logo-mark .node {
      fill: var(--blue);
    }

    .logo small {
      display: block;
      font-weight: 400;
      font-size: 11.5px;
      letter-spacing: .09em;
      margin-top: 2px;
      color: rgba(255, 255, 255, .65);
      font-family: var(--font-mono);
    }

    header.site-header.solid .logo small {
      color: var(--ink-soft);
    }

    nav.main-nav {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    nav.main-nav a {
      font-size: 14px;
      font-weight: 500;
      color: rgba(255, 255, 255, .85);
      display: flex;
      align-items: center;
      gap: 5px;
      transition: color .2s ease;
      padding: 28px 0;
      position: relative;
    }

    header.site-header.solid nav.main-nav a {
      color: var(--ink-soft);
    }

    nav.main-nav a:hover,
    nav.main-nav a.active {
      color: var(--sky);
    }

    header.site-header.solid nav.main-nav a:hover,
    header.site-header.solid nav.main-nav a.active {
      color: var(--blue);
    }

    nav.main-nav a::after {
      content: "";
      position: absolute;
      bottom: 22px;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--blue);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .25s ease;
    }

    nav.main-nav a:hover::after,
    nav.main-nav a.active::after {
      transform: scaleX(1);
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .header-right .btn {
      padding: 11px 22px;
      font-size: 13.5px;
      border-color: rgba(255, 255, 255, .35);
      color: #fff;
      background: var(--glass-fill-soft);
    }

    header.site-header.solid .header-right .btn {
      border-color: var(--blue-deep);
      color: var(--blue-deep);
      background: transparent;
    }

    header.site-header.solid .header-right .btn:hover {
      background: var(--blue-deep);
      color: #fff;
    }

    .header-right .btn:hover {
      background: #fff;
      color: var(--blue-deep);
      border-color: #fff;
    }

    .portal-nav-link {
      font-size: 13px;
      font-weight: 500;
      color: rgba(255, 255, 255, .78);
      display: flex;
      align-items: center;
      gap: 7px;
      padding: 8px 14px;
      border: 1px solid var(--line-on-dark);
      border-radius: 100px;
      background: var(--glass-fill-soft);
    }

    header.site-header.solid .portal-nav-link {
      color: var(--blue-deep);
      border-color: var(--line);
      background: var(--pale);
    }

    .hamburger {
      display: none;
      width: 22px;
      height: 16px;
      position: relative;
    }

    .hamburger span {
      position: absolute;
      left: 0;
      right: 0;
      height: 1.6px;
      background: #fff;
      transition: .25s;
    }

    header.site-header.solid .hamburger span {
      background: var(--blue-deep);
    }

    .hamburger span:nth-child(1) {
      top: 0;
    }

    .hamburger span:nth-child(2) {
      top: 7px;
    }

    .hamburger span:nth-child(3) {
      top: 14px;
    }

    .mobile-panel {
      position: fixed;
      inset: 0;
      background: var(--grad-deep);
      z-index: 600;
      display: flex;
      flex-direction: column;
      padding: 100px 40px 40px;
      transform: translateX(100%);
      transition: transform .4s ease;
      gap: 20px;
      overflow-y: auto;
    }

    .mobile-panel.open {
      transform: translateX(0);
    }

    .mobile-panel a {
      color: #fff;
      font-size: 19px;
      font-weight: 500;
      padding-bottom: 2px;
      border-bottom: 1px solid rgba(255, 255, 255, .08);
    }

    .mobile-panel a.active {
      color: var(--sky);
    }

    .mobile-close {
      position: absolute;
      top: 30px;
      right: 32px;
      width: 26px;
      height: 26px;
      color: #fff;
    }

    main {
      min-height: calc(100vh - 80px - 400px);
      padding-top: 80px;
    }

    /* =========================================================
     SECTION HEADINGS
     ========================================================= */
    .section-pad {
      padding: 100px 0;
    }

    .section-head {
      margin-bottom: 52px;
      max-width: 640px;
    }

    .section-head.center {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    .section-head h2 {
      font-size: clamp(1.9rem, 2.6vw, 2.4rem);
      line-height: 1.24;
    }

    /* =========================================================
     FOOTER
     ========================================================= */
    footer {
      background: var(--grad-deep);
      color: rgba(255, 255, 255, .82);
      padding: 0;
      position: relative;
      overflow: hidden;
    }

    footer .lattice-edge {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--sky), var(--gold-accent), var(--sky), transparent);
      opacity: .7;
    }

    footer .wrap {
      padding-top: 80px;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1.3fr 1fr 1fr 1fr;
      gap: 40px;
      padding-bottom: 56px;
      border-bottom: 1px solid var(--line-on-dark);
    }

    .footer-top .logo {
      color: #fff;
      margin-bottom: 18px;
    }

    .footer-top p {
      font-size: 14px;
      color: rgba(255, 255, 255, .62);
      max-width: 280px;
      line-height: 1.65;
    }

    .footer-col h5 {
      font-family: var(--font-mono);
      font-size: 11.5px;
      letter-spacing: .06em;
      color: var(--sky);
      font-weight: 500;
      margin-bottom: 18px;
    }

    .footer-col a {
      display: block;
      font-size: 14px;
      color: rgba(255, 255, 255, .72);
      margin-bottom: 12px;
      transition: color .2s ease, transform .2s ease;
    }

    .footer-col a:hover {
      color: #fff;
      transform: translateX(2px);
    }

    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 26px 0;
      flex-wrap: wrap;
      gap: 14px;
    }

    .socials {
      display: flex;
      gap: 10px;
    }

    .socials a {
      width: 36px;
      height: 36px;
      border: 1px solid var(--line-on-dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      background: var(--glass-fill-soft);
      transition: .2s ease;
    }

    .socials a:hover {
      background: var(--blue);
      border-color: var(--blue);
    }

    .socials svg {
      width: 14px;
      height: 14px;
    }

    .legal {
      display: flex;
      gap: 22px;
      font-size: 12px;
      color: rgba(255, 255, 255, .48);
      font-family: var(--font-mono);
    }

    @media(max-width:980px) {

      nav.main-nav,
      .header-right .btn,
      .portal-nav-link {
        display: none;
      }

      .hamburger {
        display: block;
      }

      .footer-top {
        grid-template-columns: 1fr 1fr;
      }

      .header-inner {
        padding: 0 24px;
      }

      .wrap {
        padding: 0 24px;
      }

      .section-pad {
        padding: 72px 0;
      }
    }

    @media(max-width:640px) {
      .footer-top {
        grid-template-columns: 1fr;
      }

      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
  @stack('styles')
</head>

<body>

  <!-- ===== HEADER ===== -->
  <header class="site-header" id="siteHeader">
    <div class="header-inner">
      <a href="{{ url('/') }}" class="logo">
        <svg class="logo-mark" viewBox="0 0 32 32" fill="none">
          <circle cx="16" cy="16" r="14" />
          <circle class="node" cx="16" cy="6" r="1.8" />
          <circle class="node" cx="25" cy="21.5" r="1.8" />
          <circle class="node" cx="7" cy="21.5" r="1.8" />
          <path d="M16 6L25 21.5M16 6L7 21.5M7 21.5H25" stroke="currentColor" stroke-width="1" opacity="0.5" />
        </svg>
        <span>Ebdaa<small>ISLAMIC FINANCE CONSULTANCY</small></span>
      </a>

      <nav class="main-nav">
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/our-firm') }}" class="{{ Request::is('our-firm') ? 'active' : '' }}">Our Firm</a>
        <a href="{{ url('/proficiencies') }}"
          class="{{ Request::is('proficiencies*') ? 'active' : '' }}">Proficiencies</a>
        <a href="{{ url('/industries') }}" class="{{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
        <a href="{{ url('/technology') }}" class="{{ Request::is('technology') ? 'active' : '' }}">Technology</a>
        <a href="{{ url('/insights') }}" class="{{ Request::is('insights*') ? 'active' : '' }}">Insights</a>
      </nav>

      <div class="header-right">
        <a href="{{ url('/client-portal') }}" class="portal-nav-link"><i class="fa-solid fa-lock"
            style="font-size:11px;"></i> Client Portal</a>
        <a href="{{ url('/speak-with-us') }}" class="btn">Speak With Us</a>
        <button class="hamburger" id="hamburgerBtn"
          aria-label="Toggle Menu"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>

  <!-- Mobile Navigation Drawer -->
  <div class="mobile-panel" id="mobilePanel">
    <svg class="mobile-close" id="mobileClose" viewBox="0 0 24 24" fill="none">
      <path d="M4 4l16 16M20 4L4 20" stroke="currentColor" stroke-width="1.6" />
    </svg>
    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
    <a href="{{ url('/our-firm') }}" class="{{ Request::is('our-firm') ? 'active' : '' }}">Our Firm</a>
    <a href="{{ url('/proficiencies') }}" class="{{ Request::is('proficiencies*') ? 'active' : '' }}">Proficiencies</a>
    <a href="{{ url('/industries') }}" class="{{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
    <a href="{{ url('/technology') }}" class="{{ Request::is('technology') ? 'active' : '' }}">Technology</a>
    <a href="{{ url('/insights') }}" class="{{ Request::is('insights*') ? 'active' : '' }}">Insights</a>
    <a href="{{ url('/client-portal') }}" class="{{ Request::is('client-portal') ? 'active' : '' }}">Client Portal</a>
    <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width:fit-content; margin-top:10px;">Speak With
      Us</a>
  </div>

  <!-- ===== MAIN CONTENT ===== -->
  <main>
    @yield('content')
  </main>

  <!-- ===== FOOTER ===== -->
  <footer>
    <div class="lattice-edge"></div>
    <div class="wrap">
      <div class="footer-top">
        <div>
          <a href="{{ url('/') }}" class="logo">
            <svg class="logo-mark" viewBox="0 0 32 32" fill="none">
              <circle cx="16" cy="16" r="14" stroke="#8FC6EC" />
              <circle cx="16" cy="6" r="1.8" fill="#8FC6EC" />
              <circle cx="25" cy="21.5" r="1.8" fill="#8FC6EC" />
              <circle cx="7" cy="21.5" r="1.8" fill="#8FC6EC" />
              <path d="M16 6L25 21.5M16 6L7 21.5M7 21.5H25" stroke="#8FC6EC" stroke-width="1" opacity="0.5" />
            </svg>
            <span>Ebdaa</span>
          </a>
          <p>A boutique Sharia advisory and consultancy delivering governance, structuring, and technology-enabled
            Islamic finance solutions across London, Toronto, and the GCC.</p>
        </div>
        <div class="footer-col">
          <h5>PROFICIENCIES</h5>
          <a href="{{ url('/proficiencies#governance') }}">Sharia Governance</a>
          <a href="{{ url('/proficiencies#structuring') }}">Product &amp; Structuring</a>
          <a href="{{ url('/proficiencies#digital') }}">Digital Transformation</a>
          <a href="{{ url('/proficiencies#capacity') }}">Capacity Building</a>
        </div>
        <div class="footer-col">
          <h5>INDUSTRIES</h5>
          <a href="{{ url('/industries#banks') }}">Islamic Banks</a>
          <a href="{{ url('/industries#takaful') }}">Takaful Operators</a>
          <a href="{{ url('/industries#sukuk') }}">Sukuk &amp; Capital Markets</a>
          <a href="{{ url('/industries#regulators') }}">Regulators</a>
        </div>
        <div class="footer-col">
          <h5>GET IN TOUCH</h5>
          <a href="mailto:advisory@ebdaaifc.com">advisory@ebdaaifc.com</a>
          <a href="{{ url('/our-firm#locations') }}">London · Toronto</a>
          <a href="{{ url('/speak-with-us') }}">Speak With Us</a>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="socials">
          <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M4.98 3.5a2.5 2.5 0 11-.02 5.02 2.5 2.5 0 01.02-5.02zM3 9h4v12H3V9zm7 0h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.9-3.1-1.9 0-2.2 1.48-2.2 3v5.8h-4V9z" />
            </svg></a>
          <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M22 5.9c-.7.3-1.5.6-2.3.7.8-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.6 1a4.1 4.1 0 00-7 3.7A11.6 11.6 0 013 4.9a4.1 4.1 0 001.3 5.5c-.6 0-1.3-.2-1.8-.5v.1c0 2 1.4 3.6 3.3 4a4.2 4.2 0 01-1.9.1c.5 1.6 2 2.8 3.8 2.9A8.3 8.3 0 012 18.6a11.6 11.6 0 006.3 1.9c7.5 0 11.7-6.3 11.7-11.7v-.5c.8-.6 1.5-1.3 2-2.4z" />
            </svg></a>
        </div>
        <div class="legal">
          <span>© 2026 Ebdaa Islamic Finance Consultancy. NEXTECK Limited (UK) &amp; Canada.</span>
          <a href="#">Privacy</a>
          <a href="#">Legal</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    const header = document.getElementById('siteHeader');
    window.addEventListener('scroll', () => {
      header.classList.toggle('solid', window.scrollY > 60);
    });

    const hamburger = document.getElementById('hamburgerBtn');
    const mobilePanel = document.getElementById('mobilePanel');
    const mobileClose = document.getElementById('mobileClose');
    hamburger.addEventListener('click', () => mobilePanel.classList.add('open'));
    mobileClose.addEventListener('click', () => mobilePanel.classList.remove('open'));
    mobilePanel.querySelectorAll('a').forEach(a => a.addEventListener('click', () => mobilePanel.classList.remove('open')));
  </script>

  @stack('scripts')
</body>

</html>