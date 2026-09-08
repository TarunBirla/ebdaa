<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Ebdaa IFC — The Front Door to Global Islamic Finance Mandates')</title>
<meta name="description" content="@yield('meta_description', 'Boutique Sharia advisory, governance, Sukuk structuring, and technology-enabled Islamic finance consultancy headquartered in London and Toronto.')">

<!-- Fonts & Styling -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  :root{
    --white:#ffffff;
    --pale:#EEF7FD;
    --pale-2:#E3F1FB;
    --sky:#BFE3F8;
    --blue:#1671C4;
    --blue-deep:#0A3D6B;
    --blue-ink:#0B2A45;
    --ink:#0E2536;
    --ink-soft:#4A6377;
    --line:#D7E9F5;
    --radius:2px;
  }
  *{box-sizing:border-box; margin:0; padding:0;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Space Grotesk', sans-serif;
    color:var(--ink);
    background:var(--white);
    line-height:1.5;
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  a{color:inherit; text-decoration:none;}
  ul{list-style:none;}
  img{max-width:100%; display:block;}
  button{font-family:inherit; cursor:pointer; border:none; background:none;}
  .wrap{max-width:1240px; margin:0 auto; padding:0 40px;}
  h1,h2,h3,h4{font-weight:600; letter-spacing:-0.01em; color:var(--blue-deep);}
  
  .eyebrow{
    font-size:12.5px; letter-spacing:.14em; font-weight:600; color:var(--blue);
    display:inline-block; margin-bottom:14px; text-transform:uppercase;
  }
  .btn{
    display:inline-flex; align-items:center; gap:10px;
    padding:14px 26px; border:1.5px solid var(--blue-deep);
    font-size:14.5px; font-weight:500; color:var(--blue-deep);
    border-radius:100px; transition:all .25s ease; white-space:nowrap;
  }
  .btn:hover{background:var(--blue-deep); color:#fff;}
  .btn.solid{background:var(--blue); border-color:var(--blue); color:#fff;}
  .btn.solid:hover{background:var(--blue-deep); border-color:var(--blue-deep);}
  .btn.ghost-light{border-color:rgba(255,255,255,.6); color:#fff;}
  .btn.ghost-light:hover{background:#fff; color:var(--blue-deep); border-color:#fff;}
  .btn svg, .btn i{transition:transform .25s ease;}
  .btn:hover svg, .btn:hover i{transform:translateX(3px);}
  section{position:relative;}

  /* ===== BLUE BOX HIGHLIGHT COMPONENTS ===== */
  .blue-box {
    background: linear-gradient(135deg, var(--blue-deep) 0%, var(--blue) 100%);
    color: var(--white);
    border-radius: var(--radius);
    padding: 32px;
    box-shadow: 0 10px 30px rgba(10, 61, 107, 0.15);
  }
  .blue-box h3, .blue-box h4 { color: var(--white) !important; }
  .blue-box p { color: rgba(255, 255, 255, 0.88); }
  
  .blue-box-pale {
    background: var(--pale);
    border: 1px solid var(--line);
    border-left: 4px solid var(--blue);
    border-radius: var(--radius);
    padding: 28px;
    color: var(--ink);
  }
  .blue-box-pale h3, .blue-box-pale h4 { color: var(--blue-deep); }

  .blue-card {
    background: linear-gradient(160deg, #0a3d6b, #1671C4);
    color: var(--white);
    border-radius: var(--radius);
    padding: 28px;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .blue-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(10, 61, 107, 0.25);
  }
  .blue-card h3, .blue-card h4 { color: var(--white) !important; }

  /* ===== HEADER ===== */
  header.site-header{
    position:fixed; top:0; left:0; right:0; z-index:500;
    background:rgba(10, 61, 107, 0.95); backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(255,255,255,0.12);
    transition:background .3s ease, box-shadow .3s ease, border-color .3s ease;
  }
  header.site-header.solid{
    background:rgba(255,255,255,.96); backdrop-filter:blur(10px);
    border-bottom:1px solid var(--line);
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  }
  .header-inner{
    max-width:1240px; margin:0 auto; padding:0 40px;
    display:flex; align-items:center; justify-content:space-between; height:82px;
  }
  .logo{font-size:21px; font-weight:700; line-height:1; color:var(--white); letter-spacing:-0.01em;}
  header.site-header.solid .logo{color:var(--blue-deep);}
  .logo .dot{color:var(--blue); font-size:22px;}
  .logo small{display:block; font-weight:400; font-size:13px; letter-spacing:.06em; margin-top:1px; color: rgba(255,255,255,0.8);}
  header.site-header.solid .logo small{color: var(--ink-soft);}
  
  nav.main-nav{display:flex; align-items:center; gap:32px;}
  nav.main-nav a{
    font-size:14.5px; font-weight:500; color:rgba(255,255,255,.92);
    display:flex; align-items:center; gap:5px; transition:color .2s ease;
    padding: 6px 0; position: relative;
  }
  header.site-header.solid nav.main-nav a{color:var(--ink);}
  nav.main-nav a:hover, nav.main-nav a.active{color:var(--sky);}
  header.site-header.solid nav.main-nav a:hover, header.site-header.solid nav.main-nav a.active{color:var(--blue);}
  nav.main-nav a.active::after {
    content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 2px; background: var(--blue);
  }

  .header-right{display:flex; align-items:center; gap:18px;}
  .header-right .btn{padding:11px 22px; font-size:13.5px; border-color:rgba(255,255,255,.7); color:#fff;}
  header.site-header.solid .header-right .btn{border-color:var(--blue-deep); color:var(--blue-deep);}
  header.site-header.solid .header-right .btn:hover{background:var(--blue-deep); color:#fff;}
  .header-right .btn:hover{background:#fff; color:var(--blue-deep);}
  
  .portal-nav-link {
    font-size: 13.5px; font-weight: 500; color: rgba(255,255,255,0.85); display: flex; align-items: center; gap: 6px;
  }
  header.site-header.solid .portal-nav-link { color: var(--blue-deep); }

  .hamburger{display:none; width:24px; height:18px; position:relative;}
  .hamburger span{position:absolute; left:0; right:0; height:2px; background:#fff; transition:.25s;}
  header.site-header.solid .hamburger span{background:var(--blue-deep);}
  .hamburger span:nth-child(1){top:0;} .hamburger span:nth-child(2){top:8px;} .hamburger span:nth-child(3){top:16px;}

  /* Mobile Drawer */
  .mobile-panel{
    position:fixed; inset:0; background:var(--blue-deep); z-index:600;
    display:flex; flex-direction:column; padding:100px 40px 40px;
    transform:translateX(100%); transition:transform .4s ease; gap:22px;
    overflow-y: auto;
  }
  .mobile-panel.open{transform:translateX(0);}
  .mobile-panel a{color:#fff; font-size:20px; font-weight:500;}
  .mobile-panel a.active{color:var(--sky);}
  .mobile-close{position:absolute; top:30px; right:32px; width:30px; height:30px; color:#fff;}

  /* Main Wrapper */
  main { min-height: calc(100vh - 82px - 400px); padding-top: 82px; }

  /* ===== SECTION HEADINGS ===== */
  .section-pad{padding:90px 0;}
  .section-head{margin-bottom:48px; max-width:680px;}
  .section-head.center{margin-left:auto; margin-right:auto; text-align:center;}
  .section-head h2{font-size:34px; line-height:1.22;}
  .section-head .eyebrow{color:var(--blue);}

  /* ===== FOOTER ===== */
  footer{background:var(--blue-deep); color:rgba(255,255,255,.85); padding:80px 0 0;}
  .footer-top{display:grid; grid-template-columns:1.3fr 1fr 1fr 1fr; gap:40px; padding-bottom:60px; border-bottom:1px solid rgba(255,255,255,.14);}
  .footer-top .logo{color:#fff; margin-bottom:16px;}
  .footer-top p{font-size:14px; color:rgba(255,255,255,.68); max-width:280px; line-height:1.6;}
  .footer-col h5{font-size:12.5px; letter-spacing:.08em; color:#9AD6FF; font-weight:600; margin-bottom:18px; text-transform:uppercase;}
  .footer-col a{display:block; font-size:14px; color:rgba(255,255,255,.78); margin-bottom:12px; transition:color .2s ease;}
  .footer-col a:hover{color:#fff;}
  .footer-bottom{display:flex; justify-content:space-between; align-items:center; padding:26px 0; flex-wrap:wrap; gap:14px;}
  .socials{display:flex; gap:12px;}
  .socials a{width:34px; height:34px; border:1px solid rgba(255,255,255,.25); border-radius:50%; display:flex; align-items:center; justify-content:center; color:#fff;}
  .socials a:hover{background:var(--blue); border-color:var(--blue);}
  .socials svg{width:14px; height:14px;}
  .legal{display:flex; gap:22px; font-size:12.5px; color:rgba(255,255,255,.55);}

  @media(max-width:980px){
    nav.main-nav, .header-right .btn, .portal-nav-link{display:none;}
    .hamburger{display:block;}
    .footer-top{grid-template-columns:1fr 1fr;}
    .header-inner{padding:0 24px;}
    .wrap{padding:0 24px;}
  }
  @media(max-width:640px){
    .footer-top{grid-template-columns:1fr;}
    .footer-bottom{flex-direction:column; text-align:center;}
  }
</style>
@stack('styles')
</head>
<body>

<!-- ===== HEADER ===== -->
<header class="site-header" id="siteHeader">
  <div class="header-inner">
    <a href="{{ url('/') }}" class="logo">Ebdaa<span class="dot">.</span><small>ISLAMIC FINANCE CONSULTANCY</small></a>
    
    <nav class="main-nav">
      <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
      <a href="{{ url('/our-firm') }}" class="{{ Request::is('our-firm') ? 'active' : '' }}">Our Firm</a>
      <a href="{{ url('/proficiencies') }}" class="{{ Request::is('proficiencies*') ? 'active' : '' }}">Proficiencies</a>
      <a href="{{ url('/industries') }}" class="{{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
      <a href="{{ url('/technology') }}" class="{{ Request::is('technology') ? 'active' : '' }}">Technology</a>
      <a href="{{ url('/insights') }}" class="{{ Request::is('insights*') ? 'active' : '' }}">Insights</a>
    </nav>

    <div class="header-right">
      <a href="{{ url('/client-portal') }}" class="portal-nav-link"><i class="fa-solid fa-lock" style="font-size:12px;"></i> Client Portal</a>
      <a href="{{ url('/speak-with-us') }}" class="btn">Speak With Us</a>
      <button class="hamburger" id="hamburgerBtn" aria-label="Toggle Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-panel" id="mobilePanel">
  <svg class="mobile-close" id="mobileClose" viewBox="0 0 24 24" fill="none"><path d="M4 4l16 16M20 4L4 20" stroke="currentColor" stroke-width="1.6"/></svg>
  <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
  <a href="{{ url('/our-firm') }}" class="{{ Request::is('our-firm') ? 'active' : '' }}">Our Firm</a>
  <a href="{{ url('/proficiencies') }}" class="{{ Request::is('proficiencies*') ? 'active' : '' }}">Proficiencies</a>
  <a href="{{ url('/industries') }}" class="{{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
  <a href="{{ url('/technology') }}" class="{{ Request::is('technology') ? 'active' : '' }}">Technology</a>
  <a href="{{ url('/insights') }}" class="{{ Request::is('insights*') ? 'active' : '' }}">Insights</a>
  <a href="{{ url('/client-portal') }}" class="{{ Request::is('client-portal') ? 'active' : '' }}">Client Portal</a>
  <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width:fit-content; margin-top: 10px;">Speak With Us</a>
</div>

<!-- ===== MAIN CONTENT ===== -->
<main>
  @yield('content')
</main>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="wrap">
    <div class="footer-top">
      <div>
        <a href="{{ url('/') }}" class="logo">Ebdaa<span class="dot" style="color:#9AD6FF;">.</span></a>
        <p>A boutique Sharia advisory and consultancy delivering governance, structuring, and technology-enabled Islamic finance solutions across London, Toronto, and the GCC.</p>
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
        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5.02 2.5 2.5 0 01.02-5.02zM3 9h4v12H3V9zm7 0h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.7c0-1.36-.02-3.1-1.9-3.1-1.9 0-2.2 1.48-2.2 3v5.8h-4V9z"/></svg></a>
        <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 5.9c-.7.3-1.5.6-2.3.7.8-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.6 1a4.1 4.1 0 00-7 3.7A11.6 11.6 0 013 4.9a4.1 4.1 0 001.3 5.5c-.6 0-1.3-.2-1.8-.5v.1c0 2 1.4 3.6 3.3 4a4.2 4.2 0 01-1.9.1c.5 1.6 2 2.8 3.8 2.9A8.3 8.3 0 012 18.6a11.6 11.6 0 006.3 1.9c7.5 0 11.7-6.3 11.7-11.7v-.5c.8-.6 1.5-1.3 2-2.4z"/></svg></a>
      </div>
      <div class="legal">
        <span>© 2026 Ebdaa Islamic Finance Consultancy. All rights reserved. NEXTECK Limited (UK) &amp; Canada.</span>
        <a href="#">Privacy</a>
        <a href="#">Legal</a>
      </div>
    </div>
  </div>
</footer>

<script>
  // Header solid state on scroll
  const header = document.getElementById('siteHeader');
  window.addEventListener('scroll', ()=>{
    header.classList.toggle('solid', window.scrollY > 60);
  });

  // Mobile navigation drawer
  const hamburger = document.getElementById('hamburgerBtn');
  const mobilePanel = document.getElementById('mobilePanel');
  const mobileClose = document.getElementById('mobileClose');
  hamburger.addEventListener('click', ()=> mobilePanel.classList.add('open'));
  mobileClose.addEventListener('click', ()=> mobilePanel.classList.remove('open'));
  mobilePanel.querySelectorAll('a').forEach(a=> a.addEventListener('click', ()=> mobilePanel.classList.remove('open')));
</script>

@stack('scripts')
</body>
</html>
