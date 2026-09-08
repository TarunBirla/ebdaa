@extends('layouts.app')

@section('title', 'Ebdaa IFC — The Front Door to Global Islamic Finance Mandates')

@push('styles')
<style>
  /* ===== HERO / SLIDER ===== */
  .hero{height:100vh; min-height:640px; position:relative; overflow:hidden; background:var(--blue-deep);}
  .slide{
    position:absolute; inset:0; opacity:0; visibility:hidden;
    transition:opacity 1.1s ease;
  }
  .slide.active{opacity:1; visibility:visible; z-index:2;}
  .slide-bg{position:absolute; inset:0; overflow:hidden;}
  .slide-bg .layer{
    position:absolute; inset:-6%; transition:transform 7s ease-out;
    background-size: cover; background-position: center;
  }
  .slide.active .slide-bg .layer{transform:scale(1.0);}
  .slide-bg .layer{transform:scale(1.08);}

  /* Inline Autoplay Video Background styling for Slide 1 */
  .hero-video-bg {
    position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;
  }

  /* Clear & Light Overlay so images/videos show properly without dark tint */
  .slide-overlay{
    position:absolute; inset:0;
    background: linear-gradient(90deg, rgba(6,25,42,0.3) 0%, rgba(6,25,42,0.1) 50%, rgba(6,25,42,0) 100%);
    z-index: 2;
  }

  .slide-content{
    position:relative; z-index:3; height:100%;
    max-width:1240px; margin:0 auto; padding:0 40px;
    display:flex; flex-direction:column; justify-content:center;
  }
  .slide-content .inner{max-width:680px;}
  .slide-content .eyebrow{color:#9AD6FF; font-weight:700; text-shadow: 0 1px 4px rgba(0,0,0,0.6);}
  .slide-content h1{
    font-size:56px; line-height:1.06; color:#fff; font-weight:600;
    margin-bottom:26px; letter-spacing:-0.015em;
    text-shadow: 0 2px 12px rgba(0,0,0,0.7);
  }
  .slide-content p.lede{
    font-size:17px; color:rgba(255,255,255,0.95); max-width:520px; margin-bottom:34px;
    text-shadow: 0 1px 6px rgba(0,0,0,0.6); font-weight: 400;
  }
  .slide-actions{display:flex; gap:16px; flex-wrap:wrap;}

  .hero-chrome{position:absolute; left:0; right:0; bottom:36px; z-index:6;}
  .hero-chrome .wrap{display:flex; align-items:center; justify-content:flex-end; gap:18px;}
  .hero-dots{display:flex; gap:10px;}
  .hero-dot{width:34px; height:3px; background:rgba(255,255,255,.45); position:relative; overflow:hidden; border-radius:2px; cursor:pointer;}
  .hero-dot i{position:absolute; inset:0; background:#fff; transform:scaleX(0); transform-origin:left; display:block;}
  .hero-dot.active i{animation:fillDot 6s linear forwards;}
  @keyframes fillDot{from{transform:scaleX(0);} to{transform:scaleX(1);}}
  .hero-playpause{width:34px; height:34px; border-radius:50%; border:1px solid rgba(255,255,255,.6); display:flex; align-items:center; justify-content:center; color:#fff;}
  .hero-playpause svg{width:12px; height:12px;}
  .scroll-cue{position:absolute; left:40px; bottom:40px; z-index:6; color:rgba(255,255,255,.85); display:flex; align-items:center; gap:10px; font-size:12.5px; letter-spacing:.08em; text-shadow: 0 1px 4px rgba(0,0,0,0.6);}
  .scroll-cue svg{width:14px; height:14px; animation:bob 1.8s ease-in-out infinite;}
  @keyframes bob{0%,100%{transform:translateY(0);} 50%{transform:translateY(5px);}}

  /* ===== METRICS HIGHLIGHT BAR ===== */
  .metrics-highlight {
    background: var(--blue-deep);
    color: var(--white);
    padding: 32px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }
  .metrics-grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    text-align: center;
  }
  .metric-box {
    padding: 12px;
    border-right: 1px solid rgba(255,255,255,0.15);
  }
  .metric-box:last-child { border-right: none; }
  .metric-val { font-size: 32px; font-weight: 700; color: var(--sky); margin-bottom: 4px; }
  .metric-lbl { font-size: 12.5px; text-transform: uppercase; letter-spacing: 0.1em; color: rgba(255,255,255,0.85); }

  /* ===== TRENDING TOPICS ===== */
  .topics-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:22px;}
  .topic-card{
    aspect-ratio:3/3.6; border-radius:var(--radius); position:relative; overflow:hidden;
    display:flex; align-items:flex-end; padding:24px; transition: transform 0.3s ease;
    background-size: cover; background-position: center;
  }
  .topic-card:hover { transform: translateY(-6px); }
  .topic-card span{position:relative; z-index:2; color:#fff; font-size:19px; font-weight:600; line-height:1.25; text-shadow: 0 1px 6px rgba(0,0,0,0.8);}
  .topic-card .shade{position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,20,34,.55) 0%, rgba(4,20,34,0.1) 60%, rgba(4,20,34,0) 100%);}

  /* ===== IMPACT / HOVER CARDS ===== */
  .impact-bar{display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:44px; gap:24px; flex-wrap:wrap;}
  .impact-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:22px;}
  .impact-card{
    position:relative; border-radius:var(--radius); overflow:hidden; aspect-ratio:4/3.1;
    background:var(--blue-deep); display: block; background-size: cover; background-position: center;
  }
  .impact-card .shade-bg{position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,.6) 15%, rgba(4,18,30,0.15) 60%, rgba(4,18,30,0) 100%);}
  .impact-card .cap{
    position:absolute; left:0; right:0; bottom:0; padding:22px 22px 20px;
    color:#fff; transform:translateY(0); transition:transform .35s ease; z-index: 2;
  }
  .impact-card .cap .tag{font-size:11.5px; letter-spacing:.1em; color:#9AD6FF; font-weight:600; margin-bottom:6px; display:block; text-shadow: 0 1px 3px rgba(0,0,0,0.6);}
  .impact-card .cap h4{color:#fff; font-size:19px; margin-bottom:8px; text-shadow: 0 1px 4px rgba(0,0,0,0.7);}
  .impact-card .cap p{
    font-size:13.8px; color:rgba(255,255,255,.95); max-height:0; opacity:0; overflow:hidden;
    transition:max-height .4s ease, opacity .35s ease .05s; text-shadow: 0 1px 3px rgba(0,0,0,0.6);
  }
  .impact-card:hover .cap p{max-height:100px; opacity:1;}
  .impact-card .cap .more{
    display:inline-flex; align-items:center; gap:6px; font-size:12.5px; font-weight:600; color:#fff;
    margin-top:12px; opacity:0; transform:translateY(6px); transition:all .35s ease .08s;
  }
  .impact-card:hover .cap .more{opacity:1; transform:translateY(0);}
  .impact-card .more svg{width:11px; height:11px;}

  /* ===== WHAT WE DO / TABS ===== */
  .whatwedo{background:var(--pale);}
  .tabs{display:flex; gap:34px; border-bottom:1px solid var(--line); margin-bottom:44px; flex-wrap:wrap;}
  .tab-btn{padding:14px 2px; font-size:14.5px; font-weight:500; color:var(--ink-soft); position:relative;}
  .tab-btn.active{color:var(--blue-deep); font-weight:600;}
  .tab-btn.active::after{content:""; position:absolute; left:0; right:0; bottom:-1px; height:2px; background:var(--blue);}
  .tab-panel{display:none;}
  .tab-panel.active{display:block; animation:fadeIn .4s ease;}
  @keyframes fadeIn{from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:translateY(0);}}
  
  .wwd-grid{display:grid; grid-template-columns:1.15fr 1fr 1fr; grid-template-rows:1fr 1fr; gap:16px; min-height:520px;}
  .wwd-main{grid-row:1/3; border-radius:var(--radius); position:relative; overflow:hidden; display:flex; align-items:flex-end; padding:30px; background-size: cover; background-position: center; transition: transform 0.3s ease;}
  .wwd-main:hover, .wwd-tile:hover { transform: translateY(-3px); }
  .wwd-main span, .wwd-tile span{position:relative; z-index:2; color:#fff; font-weight:600; text-shadow: 0 1px 6px rgba(0,0,0,0.8);}
  .wwd-main span{font-size:24px;}
  .wwd-main .shade, .wwd-tile .shade{position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,.5) 10%, rgba(4,18,30,0.1) 60%, rgba(4,18,30,0) 100%);}
  .wwd-tile{border-radius:var(--radius); position:relative; overflow:hidden; display:flex; align-items:flex-end; padding:22px; background-size: cover; background-position: center; transition: transform 0.3s ease;}
  .wwd-tile span{font-size:16.5px;}

  /* ===== TECH SHOWCASE ===== */
  .tech-showcase{background:var(--blue-deep); color:#fff; padding:100px 0;}
  .tech-grid{display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center;}
  .tech-showcase .eyebrow{color:#9AD6FF;}
  .tech-showcase h2{color:#fff; font-size:32px; margin-bottom:18px;}
  .tech-showcase p{color:rgba(255,255,255,.85); font-size:15.5px; margin-bottom:28px; max-width:480px;}
  .tech-cards{display:flex; flex-direction:column; gap:14px;}
  .tech-card{border:1px solid rgba(255,255,255,.18); border-radius:var(--radius); padding:20px 22px; display:flex; gap:16px; align-items:flex-start; transition:border-color .25s ease, background .25s ease;}
  .tech-card:hover{border-color:rgba(255,255,255,.5); background:rgba(255,255,255,.04);}
  .tech-card .num{font-size:13px; color:#9AD6FF; font-weight:600; padding-top:2px;}
  .tech-card h4{color:#fff; font-size:16px; margin-bottom:6px;}
  .tech-card p{color:rgba(255,255,255,.75); font-size:13.8px; margin:0;}
  .tech-visual{
    position:relative; aspect-ratio:1/1; border-radius:var(--radius); overflow:hidden;
    background-size: cover; background-position: center;
    border: 1px solid rgba(255,255,255,0.2);
  }
  .tech-visual .shade-overlay {
    position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,61,107,0.25), rgba(22,113,196,0.15));
    display: flex; align-items: center; justify-content: center;
  }

  /* ===== INSIGHTS ===== */
  .insights-grid{display:grid; grid-template-columns:repeat(3,1fr); gap:28px;}
  .insight-card .thumb{
    aspect-ratio:16/10.5; border-radius:var(--radius); position:relative; overflow:hidden; margin-bottom:18px;
    background-size: cover; background-position: center;
  }
  .insight-card .thumb .shade-thumb{position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,0.2) 0%, rgba(4,18,30,0) 100%);}
  .insight-card .meta{font-size:12px; letter-spacing:.06em; color:var(--blue); font-weight:600; margin-bottom:10px;}
  .insight-card h4{font-size:18px; line-height:1.35; margin-bottom:0; color:var(--blue-deep);}

  /* ===== ALLIANCES ===== */
  .alliances{padding:70px 0;}
  .alliances-head{display:flex; justify-content:space-between; align-items:baseline; margin-bottom:36px; flex-wrap:wrap; gap:10px;}
  .alliances-head h3{font-size:15px; letter-spacing:.06em; color:var(--ink-soft); font-weight:600;}
  .wordmarks{display:flex; flex-wrap:wrap; gap:46px; align-items:center;}
  .wordmarks span{font-size:19px; font-weight:600; color:var(--blue-deep); opacity:.55; letter-spacing:-0.01em; transition:opacity .2s ease;}
  .wordmarks span:hover{opacity:1;}
  .chip-row{display:flex; flex-wrap:wrap; gap:10px; margin-top:26px;}
  .chip{font-size:12.5px; padding:8px 16px; border:1px solid var(--line); border-radius:100px; color:var(--ink-soft);}

  /* ===== CTA BANNER ===== */
  .cta-banner{padding:110px 0; position:relative; overflow:hidden; background:linear-gradient(120deg,#0a3d6b,#12699f 55%,#1671C4);}
  .cta-banner svg.pattern{position:absolute; inset:0; width:100%; height:100%; opacity:.18;}
  .cta-banner .wrap{position:relative; z-index:2; text-align:center; display:flex; flex-direction:column; align-items:center;}
  .cta-banner .eyebrow{color:#BFE3F8;}
  .cta-banner h2{color:#fff; font-size:34px; max-width:760px; line-height:1.3; font-weight:500; margin-bottom:38px;}

  /* ===== LOCATIONS ===== */
  .loc-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:22px;}
  .loc-card{border:1px solid var(--line); border-radius:var(--radius); overflow:hidden;}
  .loc-photo{aspect-ratio:16/9.5; position:relative; overflow:hidden; background-size: cover; background-position: center;}
  .loc-photo .shade{position:absolute; inset:0; background:linear-gradient(0deg, rgba(10,61,107,0.2) 0%, rgba(10,61,107,0) 100%);}
  .loc-info{padding:24px 26px 28px;}
  .loc-info h4{font-size:19px; margin-bottom:14px;}
  .loc-info .row{display:flex; gap:10px; font-size:13.8px; color:var(--ink-soft); margin-bottom:6px;}
  .loc-info .row b{color:var(--ink); font-weight:600; min-width:64px;}

  @media(max-width:980px){
    .slide-content h1{font-size:38px;}
    .topics-grid, .impact-grid, .wwd-grid, .insights-grid, .loc-grid{grid-template-columns:repeat(2,1fr);}
    .wwd-grid{grid-template-rows:auto;}
    .wwd-main{grid-row:auto; aspect-ratio:16/10;}
    .wwd-tile{aspect-ratio:16/10;}
    .tech-grid{grid-template-columns:1fr;}
    .metrics-grid-4{grid-template-columns:repeat(2,1fr);}
  }
  @media(max-width:640px){
    .topics-grid, .impact-grid, .insights-grid, .loc-grid, .metrics-grid-4{grid-template-columns:1fr;}
    .slide-content h1{font-size:30px;}
    .section-pad{padding:70px 0;}
    .cta-banner h2{font-size:26px;}
  }
</style>
@endpush

@section('content')

<!-- ===== HERO SLIDER ===== -->
<section class="hero" id="hero">

  <!-- Slide 0: INLINE AUTOPLAY VIDEO BACKGROUND HERO -->
  <div class="slide active" data-slide="0">
    <div class="slide-bg">
      <video class="hero-video-bg" autoplay loop muted playsinline poster="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-financial-district-skyscrapers-in-london-42795-large.mp4" type="video/mp4">
      </video>
    </div>
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="inner">
        <span class="eyebrow">CREDIBILITY-FIRST · AI-ACCELERATED</span>
        <h1>The front door to global Islamic finance mandates</h1>
        <p class="lede">Scholar-led Sharia advisory, structuring, and governance — built for the institutions who evaluate a firm before they ever pick up the phone.</p>
        <div class="slide-actions">
          <a href="{{ url('/speak-with-us') }}" class="btn solid">Speak With an Advisor</a>
          <a href="{{ url('/proficiencies') }}" class="btn ghost-light">Our Proficiencies</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 1: IMAGE SLIDER - Sharia Governance -->
  <div class="slide" data-slide="1">
    <div class="slide-bg">
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80');"></div>
    </div>
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="inner">
        <span class="eyebrow">SHARIA GOVERNANCE, PRESENTED PROPERLY</span>
        <h1>Scholarship your institution can verify in seconds</h1>
        <p class="lede">Named Sharia Supervisory Board members, credentials, and track record — presented with the weight a Big Four firm gives its partners.</p>
        <div class="slide-actions">
          <a href="{{ url('/our-firm') }}" class="btn solid">Meet Our Sharia Board</a>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Request a Governance Review</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2: IMAGE SLIDER - IQMS AI Engine -->
  <div class="slide" data-slide="2">
    <div class="slide-bg">
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80');"></div>
    </div>
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="inner">
        <span class="eyebrow">IQMS™ &amp; ILMS™</span>
        <h1>The only boutique Sharia advisory with a live AI compliance engine</h1>
        <p class="lede">Proprietary technology, demo-ready — proof that Ebdaa IFC is a technology-enabled advisory, not just a Sharia opinion desk.</p>
        <div class="slide-actions">
          <a href="{{ url('/technology') }}" class="btn solid">See IQMS in Action</a>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Request a Demo</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3: IMAGE SLIDER - Global Footprint -->
  <div class="slide" data-slide="3">
    <div class="slide-bg">
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80');"></div>
    </div>
    <div class="slide-overlay"></div>
    <div class="slide-content">
      <div class="inner">
        <span class="eyebrow">LONDON · TORONTO · GLOBAL REACH</span>
        <h1>Structuring capital across the GCC, London, and Toronto</h1>
        <p class="lede">Sukuk, Sharia-compliant family foundations, and wealth strategies for institutions and family offices worldwide.</p>
        <div class="slide-actions">
          <a href="{{ url('/our-firm#locations') }}" class="btn solid">Our Locations</a>
          <a href="{{ url('/industries') }}" class="btn ghost-light">Explore Industries We Serve</a>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-chrome">
    <div class="wrap">
      <div class="hero-dots" id="heroDots"></div>
      <button class="hero-playpause" id="playPause" aria-label="Pause Slider">
        <svg id="pauseIcon" viewBox="0 0 12 12" fill="currentColor"><rect x="1" y="1" width="3" height="10"/><rect x="8" y="1" width="3" height="10"/></svg>
      </button>
    </div>
  </div>
  <div class="scroll-cue">
    <svg viewBox="0 0 14 14" fill="none"><path d="M2 4l5 6 5-6" stroke="currentColor" stroke-width="1.4"/></svg>
    SCROLL
  </div>
</section>

<!-- ===== METRICS HIGHLIGHT BAR ===== -->
<div class="metrics-highlight">
  <div class="wrap">
    <div class="metrics-grid-4">
      <div class="metric-box">
        <div class="metric-val">$45B+</div>
        <div class="metric-lbl">Sukuk &amp; Transactions Advised</div>
      </div>
      <div class="metric-box">
        <div class="metric-val">100%</div>
        <div class="metric-lbl">Sharia Compliance Rate</div>
      </div>
      <div class="metric-box">
        <div class="metric-val">20+</div>
        <div class="metric-lbl">Global Regulatory Jurisdictions</div>
      </div>
      <div class="metric-box">
        <div class="metric-val">London · Toronto</div>
        <div class="metric-lbl">Global Operational Footprint</div>
      </div>
    </div>
  </div>
</div>

<!-- ===== TRENDING TOPICS (4 IMAGES CARDS) ===== -->
<section class="section-pad" id="topics">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">TRENDING TOPICS</span>
      <h2>Transforming Sharia complexity into institutional advantage</h2>
    </div>
    <div class="topics-grid">

      <!-- Topic Card 1 -->
      <a href="{{ url('/proficiencies/sharia-governance') }}" class="topic-card" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
        <div class="shade"></div>
        <span>Sharia Governance &amp; Audit <i class="fa-solid fa-arrow-right" style="font-size:14px; margin-left:6px;"></i></span>
      </a>

      <!-- Topic Card 2 -->
      <a href="{{ url('/proficiencies/sukuk-structuring') }}" class="topic-card" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
        <div class="shade"></div>
        <span>Sukuk &amp; Asset Tokenization <i class="fa-solid fa-arrow-right" style="font-size:14px; margin-left:6px;"></i></span>
      </a>

      <!-- Topic Card 3 -->
      <a href="{{ url('/proficiencies/ai-compliance') }}" class="topic-card" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
        <div class="shade"></div>
        <span>AI in Sharia Compliance <i class="fa-solid fa-arrow-right" style="font-size:14px; margin-left:6px;"></i></span>
      </a>

      <!-- Topic Card 4 -->
      <a href="{{ url('/proficiencies/green-sukuk') }}" class="topic-card" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80');">
        <div class="shade"></div>
        <span>Green &amp; ESG-Aligned Sukuk <i class="fa-solid fa-arrow-right" style="font-size:14px; margin-left:6px;"></i></span>
      </a>

    </div>
  </div>
</section>

<!-- ===== WHO WE SERVE (6 IMAGES CARDS) ===== -->
<section class="section-pad" id="impact" style="background:var(--pale);">
  <div class="wrap">
    <div class="impact-bar">
      <div class="section-head" style="margin-bottom:0;">
        <span class="eyebrow">WHO WE SERVE</span>
        <h2>Every institution sees its own journey reflected</h2>
      </div>
      <a href="{{ url('/speak-with-us') }}" class="btn">Speak With Us</a>
    </div>

    <div class="impact-grid">

      <!-- Card 1 -->
      <a href="{{ url('/industries/islamic-banks') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">ISLAMIC BANKS</span>
          <h4>Retail &amp; wholesale Islamic banking</h4>
          <p>Product structuring, governance frameworks, and Sharia audit for banks scaling compliant offerings.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

      <!-- Card 2 -->
      <a href="{{ url('/industries/takaful') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">TAKAFUL OPERATORS</span>
          <h4>Mutual &amp; cooperative insurance</h4>
          <p>Sharia-compliant product design and surplus-distribution governance built for takaful operators.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="{{ url('/industries/sukuk-issuers') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">SUKUK &amp; CAPITAL MARKETS</span>
          <h4>Sukuk issuers &amp; structuring desks</h4>
          <p>End-to-end Sukuk advisory using ADGM SPVs and DIFC-prescribed structures for cross-border issuance.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

      <!-- Card 4 -->
      <a href="{{ url('/industries/regulators') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">REGULATORS &amp; CENTRAL BANKS</span>
          <h4>Policy &amp; regulatory advisory</h4>
          <p>Independent Sharia governance frameworks supporting national and cross-border regulatory bodies.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

      <!-- Card 5 -->
      <a href="{{ url('/industries/fintech') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">FINTECH &amp; DIGITAL BANKS</span>
          <h4>Sharia-native digital finance</h4>
          <p>Digital transformation and compliant product architecture for the next generation of Islamic fintech.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

      <!-- Card 6 -->
      <a href="{{ url('/industries/family-offices') }}" class="impact-card" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-bg"></div>
        <div class="cap">
          <span class="tag">FAMILY OFFICES &amp; HNWIs</span>
          <h4>Wealth &amp; foundation structuring</h4>
          <p>Sharia-compliant family foundations and tailored wealth management for high-net-worth clients.</p>
          <span class="more">Read Details <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.4"/></svg></span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ===== WHAT WE DO / TABS (5 IMAGES CARDS PER PANEL) ===== -->
<section class="section-pad whatwedo" id="whatwedo">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">WHAT WE DO</span>
      <h2>Every proficiency, built as a buyer journey</h2>
    </div>

    <div class="tabs" id="tabs">
      <button class="tab-btn active" data-tab="0">Sharia Governance</button>
      <button class="tab-btn" data-tab="1">Product &amp; Structuring</button>
      <button class="tab-btn" data-tab="2">Digital Transformation</button>
      <button class="tab-btn" data-tab="3">Capacity Building</button>
    </div>

    <!-- TAB 0: Sharia Governance (5 IMAGE CARDS GRID) -->
    <div class="tab-panel active" data-panel="0">
      <div class="wwd-grid">
        <a href="{{ url('/proficiencies/sharia-governance') }}" class="wwd-main" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Sharia Governance &amp; Audit</span>
        </a>
        <a href="{{ url('/technology') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>IQMS™ Compliance Engine</span>
        </a>
        <a href="{{ url('/our-firm') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Scholar Advisory Network</span>
        </a>
        <a href="{{ url('/technology#ilms') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>ILMS™ Learning Platform</span>
        </a>
        <a href="{{ url('/proficiencies/sharia-audit') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Sharia Audit Framework</span>
        </a>
      </div>
    </div>

    <!-- TAB 1: Product & Structuring (5 IMAGE CARDS GRID) -->
    <div class="tab-panel" data-panel="1">
      <div class="wwd-grid">
        <a href="{{ url('/proficiencies/product-structuring') }}" class="wwd-main" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Product &amp; Process Development</span>
        </a>
        <a href="{{ url('/proficiencies/sukuk-structuring') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Sukuk Structuring</span>
        </a>
        <a href="{{ url('/proficiencies/transaction-structuring') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Transaction Structuring</span>
        </a>
        <a href="{{ url('/proficiencies/family-foundations') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Family Foundation Structuring</span>
        </a>
        <a href="{{ url('/proficiencies/sharia-fund-advisory') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Sharia Fund Advisory</span>
        </a>
      </div>
    </div>

    <!-- TAB 2: Digital Transformation (5 IMAGE CARDS GRID) -->
    <div class="tab-panel" data-panel="2">
      <div class="wwd-grid">
        <a href="{{ url('/proficiencies/digital-transformation') }}" class="wwd-main" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Digital Transformation</span>
        </a>
        <a href="{{ url('/technology') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>AI-Enabled Compliance</span>
        </a>
        <a href="{{ url('/client-portal') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Client Portal Modernization</span>
        </a>
        <a href="{{ url('/proficiencies/data-reporting') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Data &amp; Reporting Systems</span>
        </a>
        <a href="{{ url('/proficiencies/legacy-integration') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Legacy System Integration</span>
        </a>
      </div>
    </div>

    <!-- TAB 3: Capacity Building (5 IMAGE CARDS GRID) -->
    <div class="tab-panel" data-panel="3">
      <div class="wwd-grid">
        <a href="{{ url('/proficiencies/capacity-building') }}" class="wwd-main" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Capacity Building</span>
        </a>
        <a href="{{ url('/technology#ilms') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>ILMS™ Training Modules</span>
        </a>
        <a href="{{ url('/proficiencies/executive-workshops') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Board &amp; Executive Workshops</span>
        </a>
        <a href="{{ url('/proficiencies/regulatory-readiness') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Regulatory Readiness Programs</span>
        </a>
        <a href="{{ url('/proficiencies/certification') }}" class="wwd-tile" style="background-image: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span>Certification Pathways</span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- ===== TECH SHOWCASE HIGHLIGHT ===== -->
<section class="tech-showcase" id="tech">
  <div class="wrap">
    <div class="tech-grid">
      <div>
        <span class="eyebrow">THE AI DIFFERENTIATOR</span>
        <h2>IQMS™ and ILMS™ — technology every boutique advisory claims, few can show</h2>
        <p>Almost every Sharia advisory says it understands technology. Ebdaa IFC is one of the few that can put a live, proprietary AI advisory engine and a structured learning platform in front of a client — not a slide, a working system.</p>
        <div class="tech-cards">
          <div class="tech-card">
            <span class="num">01</span>
            <div><h4>IQMS™ — Intelligent Query Management System</h4><p>Real-time, AI-assisted Sharia compliance queries, routed and answered against your governance framework.</p></div>
          </div>
          <div class="tech-card">
            <span class="num">02</span>
            <div><h4>ILMS™ — Islamic Learning Management System</h4><p>A structured platform for scholar and staff capacity building, certification, and ongoing training.</p></div>
          </div>
          <div class="tech-card">
            <span class="num">03</span>
            <div><h4>Built to be AI-legible</h4><p>Clean, structured content so AI research tools accurately surface Ebdaa IFC in vendor shortlists.</p></div>
          </div>
        </div>
        <div style="margin-top:30px; display:flex; gap:16px; flex-wrap:wrap;">
          <a href="{{ url('/technology') }}" class="btn ghost-light">Request an IQMS </a>
        </div>
      </div>

      <!-- Tech Visual Image -->
      <div class="tech-visual" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80');">
        <div class="shade-overlay">
          <a href="{{ url('/technology') }}" class="btn ghost-light" style="padding:16px 28px; font-size:16px;">
            <i class="fa-solid fa-microchip" style="font-size:20px;"></i> Explore Interactive AI Tools
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== LATEST INSIGHTS ===== -->
<section class="section-pad" id="insights">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">LATEST INSIGHTS</span>
      <h2>Thought leadership that earns the second meeting</h2>
    </div>
    <div class="insights-grid">

      <a href="{{ url('/insights/ai-in-sharia-governance') }}" class="insight-card">
        <div class="thumb" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade-thumb"></div>
        </div>
        <div class="meta">AI &amp; SHARIA COMPLIANCE</div>
        <h4>How AI is reshaping real-time Sharia governance</h4>
      </a>

      <a href="{{ url('/insights/green-sukuk-tokenization') }}" class="insight-card">
        <div class="thumb" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade-thumb"></div>
        </div>
        <div class="meta">SUKUK &amp; TOKENIZATION</div>
        <h4>Green Sukuk and the tokenization of Islamic capital markets</h4>
      </a>

      <a href="{{ url('/insights/digital-banking-sharia-framework') }}" class="insight-card">
        <div class="thumb" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
          <div class="shade-thumb"></div>
        </div>
        <div class="meta">GOVERNANCE</div>
        <h4>Sharia governance frameworks for digital-native banks</h4>
      </a>

    </div>
  </div>
</section>

<!-- ===== STRATEGIC ALLIANCES ===== -->
<section class="alliances" style="background:var(--pale);">
  <div class="wrap">
    <div class="alliances-head">
      <h3>STRATEGIC ALLIANCES &amp; REGULATORY STANDARDS</h3>
    </div>
    <div class="wordmarks">
      <span>Ocorian</span>
      <span>IICRA</span>
      <span>AAOIFI</span>
      <span>ADGM</span>
      <span>DIFC</span>
      <span>IFSB</span>
    </div>
    <div class="chip-row">
      <span class="chip">Sharia governance</span>
      <span class="chip">Sukuk &amp; capital markets</span>
      <span class="chip">Family foundations</span>
      <span class="chip">Regulatory advisory</span>
      <span class="chip">Digital transformation</span>
    </div>
  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-banner" id="cta">
  <svg class="pattern" viewBox="0 0 1200 500" fill="none"><g stroke="#fff" stroke-width="1"><circle cx="600" cy="250" r="140"/><circle cx="600" cy="250" r="220"/><circle cx="600" cy="250" r="300"/></g></svg>
  <div class="wrap">
    <span class="eyebrow">WE ARE</span>
    <h2>A boutique Sharia advisory built for institutional mandates — scholars, technologists, and strategists across London and Toronto</h2>
    <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Speak With Us / Submit RFP</a>
  </div>
</section>

<!-- ===== LOCATIONS ===== -->
<section class="section-pad" id="locations">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">LOCATIONS</span>
      <h2>Headquartered in London, present in Toronto</h2>
    </div>
    <div class="loc-grid">

      <div class="loc-card">
        <div class="loc-photo" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
        </div>
        <div class="loc-info">
          <h4>London — Headquarters</h4>
          <div class="row"><b>Region</b> United Kingdom (NEXTECK Limited)</div>
          <div class="row"><b>Founded</b> 2024</div>
          <div class="row"><b>Phone</b> +44 37 7573 136</div>
        </div>
      </div>

      <div class="loc-card">
        <div class="loc-photo" style="background-image: url('https://images.unsplash.com/photo-1507992744068-d421da646840?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
        </div>
        <div class="loc-info">
          <h4>Toronto Office</h4>
          <div class="row"><b>Address</b> 3080 Yonge Street, Suite 6060, Toronto, ON M4N 3N1</div>
          <div class="row"><b>Phone</b> +1 437 601 2101</div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  // Hero Slider Logic
  const slides = document.querySelectorAll('.slide');
  const dotsWrap = document.getElementById('heroDots');
  let current = 0, timer, playing = true;
  const DURATION = 6000;

  slides.forEach((_, i)=>{
    const d = document.createElement('div');
    d.className = 'hero-dot' + (i===0 ? ' active' : '');
    d.innerHTML = '<i></i>';
    d.addEventListener('click', ()=> goTo(i));
    dotsWrap.appendChild(d);
  });
  const dots = dotsWrap.querySelectorAll('.hero-dot');

  function goTo(i){
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = i;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
    restart();
  }
  function next(){ goTo((current + 1) % slides.length); }
  function restart(){
    clearInterval(timer);
    if(playing) timer = setInterval(next, DURATION);
    dots.forEach(d=> d.classList.remove('active'));
    dots[current].classList.add('active');
  }
  restart();

  const playPause = document.getElementById('playPause');
  const pauseIcon = document.getElementById('pauseIcon');
  playPause.addEventListener('click', ()=>{
    playing = !playing;
    if(playing){
      restart();
      pauseIcon.innerHTML = '<rect x="1" y="1" width="3" height="10"/><rect x="8" y="1" width="3" height="10"/>';
    } else {
      clearInterval(timer);
      pauseIcon.innerHTML = '<path d="M2 1l9 5-9 5V1z"/>';
    }
  });

  // Tabs logic
  const tabBtns = document.querySelectorAll('.tab-btn');
  const panels = document.querySelectorAll('.tab-panel');
  tabBtns.forEach(btn=>{
    btn.addEventListener('click', ()=>{
      tabBtns.forEach(b=> b.classList.remove('active'));
      panels.forEach(p=> p.classList.remove('active'));
      btn.classList.add('active');
      document.querySelector('.tab-panel[data-panel="'+btn.dataset.tab+'"]').classList.add('active');
    });
  });
</script>
@endpush