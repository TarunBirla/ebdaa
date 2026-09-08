@extends('layouts.app')

@section('title', 'Target Sectors & Buyer Journeys — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.65) 0%, rgba(10,61,107,0.45) 100%), url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  /* Sector Risk & Readiness Barometer */
  .barometer-panel {
    background: var(--grad-deep);
    border: 1px solid rgba(154,214,255,0.22);
    border-radius: var(--radius-lg);
    padding: 28px 32px;
    color: #fff;
    margin-bottom: 40px;
  }
  .barometer-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 18px;
  }
  .baro-item {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: var(--radius-sm);
    padding: 14px 18px;
  }
  .baro-lbl { font-size: 12px; color: rgba(255,255,255,0.7); font-family: var(--font-mono); }
  .baro-val { font-size: 20px; font-weight: 700; color: #5FE39B; font-family: var(--font-mono); margin-top: 4px; }

  .sector-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .sector-card {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.35s ease;
    box-shadow: 0 10px 30px rgba(6,25,42,0.05);
  }
  .sector-card:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 16px 40px rgba(10, 61, 107, 0.15);
  }
  .sector-card-cover {
    height: 150px;
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 16px;
    display: flex;
    align-items: flex-end;
  }
  .sector-card-cover .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.55) 10%, rgba(4,18,30,0.1) 100%); }
  .sector-card-cover .tag { position: relative; z-index: 2; font-size: 11px; font-weight: 600; letter-spacing: 0.1em; color: #9AD6FF; text-transform: uppercase; margin: 0; font-family: var(--font-mono); }
  
  .sector-card-body { padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; }
  .sector-card h3 { font-size: 20px; color: var(--blue-deep); margin-bottom: 10px; font-weight: 600; }
  .sector-card p { font-size: 14px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px; }

  @media(max-width: 980px) {
    .sector-grid, .barometer-row { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> INDUSTRY DASHBOARDS</span>
    <h1>Tailored Sharia intelligence for global financial sectors</h1>
    <p>Every buyer type evaluates an advisory firm differently. We sequence our Sharia governance, Sukuk advisory, and AI technology to match your sector's exact regulatory demands.</p>
  </div>
</section>

<!-- Sector Intelligence & Barometer -->
<section class="section-pad">
  <div class="wrap">
    
    <!-- Live Sector Risk & Compliance Barometer -->
    <div class="barometer-panel">
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <div>
          <span class="ai-chip on-dark" style="margin-bottom:6px;"><span class="pulse-node"></span> SECTOR COMPLIANCE BAROMETER</span>
          <h3 style="color:#fff; font-size:22px; margin:0;">Real-Time Institutional Readiness Scores</h3>
        </div>
        <div style="font-family:var(--font-mono); font-size:12px; color:var(--sky);">AAOIFI / IFSB AUDITED</div>
      </div>
      <div class="barometer-row">
        <div class="baro-item">
          <div class="baro-lbl">BANKING &amp; SUKUK READINESS</div>
          <div class="baro-val">99.8% COMPLIANT</div>
        </div>
        <div class="baro-item">
          <div class="baro-lbl">TAKAFUL &amp; REINSURANCE POOL</div>
          <div class="baro-val">100.0% VERIFIED</div>
        </div>
        <div class="baro-item">
          <div class="baro-lbl">CENTRAL BANK AUDIT PASS</div>
          <div class="baro-val">GRADE A+ RATED</div>
        </div>
      </div>
    </div>
    
    <div class="sector-grid">
      
      <!-- 1. Islamic Banks -->
      <div class="sector-card" id="banks">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">RETAIL &amp; WHOLESALE</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> BANKING AI</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Islamic Banking Institutions</h3>
            <p>Product structuring, governance frameworks, and Sharia audit for retail and corporate banks scaling compliant offerings under central bank regulations.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/islamic-banks') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Speak With Us</a>
          </div>
        </div>
      </div>

      <!-- 2. Sukuk Issuers -->
      <div class="sector-card" id="sukuk">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">CAPITAL MARKETS</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> SUKUK ENGINE</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Sukuk Issuers &amp; Structuring</h3>
            <p>End-to-end Sukuk advisory using ADGM SPVs, DIFC, and UK structures for sovereign, corporate, and green Sukuk issuance.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/sukuk-issuers') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Speak With Us</a>
          </div>
        </div>
      </div>

      <!-- 3. Takaful Operators -->
      <div class="sector-card" id="takaful">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">MUTUAL &amp; COOPERATIVE</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> TAKAFUL POOL</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Takaful &amp; Retakaful Operators</h3>
            <p>Sharia-compliant product design, hybrid Wakala/Mudaraba models, and surplus-distribution governance for general and family takaful companies.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/takaful') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Speak With Us</a>
          </div>
        </div>
      </div>

      <!-- 4. Regulators & Central Banks -->
      <div class="sector-card" id="regulators">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">GOVERNANCE &amp; POLICY</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> REGULATORY AUDIT</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Regulators &amp; Central Banks</h3>
            <p>Independent Sharia governance frameworks, sovereign policy drafting, and regulatory supervisory toolkits benchmarked against AAOIFI &amp; IFSB.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/regulators') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Speak With Us</a>
          </div>
        </div>
      </div>

      <!-- 5. Fintech & Digital Banks -->
      <div class="sector-card" id="fintech">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">SHARIA-NATIVE DIGITAL</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> IQMS™ API</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Fintech &amp; Neobanks</h3>
            <p>Digital transformation and compliant product architecture for next-generation neobanks, using real-time IQMS™ compliance APIs.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/fintech') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/technology') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Try IQMS API</a>
          </div>
        </div>
      </div>

      <!-- 6. Family Offices & Wealth -->
      <div class="sector-card" id="family-offices">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="tag">PRIVATE WEALTH</span>
            <span class="ai-chip on-dark" style="font-size:10px;"><span class="pulse-node"></span> WEALTH SHIELD</span>
          </div>
        </div>
        <div class="sector-card-body">
          <div>
            <h3>Family Offices &amp; HNWIs</h3>
            <p>Sharia-compliant family foundations, Waqf structuring, estate planning, and wealth preservation strategies across London and the GCC.</p>
          </div>
          <div style="display: flex; gap: 10px; margin-top: 16px;">
            <a href="{{ url('/industries/family-offices') }}" class="btn solid" style="padding: 9px 18px; font-size: 13px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 9px 18px; font-size: 13px;">Speak With Us</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

@endsection
