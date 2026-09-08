@extends('layouts.app')

@section('title', 'Target Sectors & Buyer Journeys — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 90px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .sector-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .sector-card {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.3s ease;
  }
  .sector-card:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 12px 30px rgba(10, 61, 107, 0.12);
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
  .sector-card-cover .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.45) 10%, rgba(4,18,30,0.05) 100%); }
  .sector-card-cover .tag { position: relative; z-index: 2; font-size: 11px; font-weight: 600; letter-spacing: 0.1em; color: #9AD6FF; text-transform: uppercase; margin: 0; text-shadow: 0 1px 3px rgba(0,0,0,0.6); }
  
  .sector-card-body { padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; }
  .sector-card h3 { font-size: 20px; color: var(--blue-deep); margin-bottom: 10px; }
  .sector-card p { font-size: 14px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px; }

  @media(max-width: 980px) {
    .sector-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner with Image Overlay -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">TARGET SECTORS</span>
    <h1>Tailored Sharia advisory for global institutional buyers</h1>
    <p>Every buyer type evaluates an advisory firm differently. We sequence our Sharia governance, Sukuk advisory, and AI technology to match your sector's exact regulatory demands.</p>
  </div>
</section>

<!-- Main Sectors Grid with Cover Photos -->
<section class="section-pad">
  <div class="wrap">
    
    <div class="sector-grid">
      
      <!-- 1. Islamic Banks -->
      <div class="sector-card" id="banks">
        <div class="sector-card-cover" style="background-image: url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span class="tag">RETAIL &amp; WHOLESALE</span>
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
          <span class="tag">CAPITAL MARKETS</span>
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
          <span class="tag">MUTUAL &amp; COOPERATIVE</span>
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
          <span class="tag">GOVERNANCE &amp; POLICY</span>
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
          <span class="tag">SHARIA-NATIVE DIGITAL</span>
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
          <span class="tag">PRIVATE WEALTH</span>
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

<!-- Blue Box Highlight Section with Image -->
<section class="section-pad" style="background: var(--pale);">
  <div class="wrap">
    <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80'); background-size: cover;">
      <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">GLOBAL MARKET PROOF</span>
      <h3 style="font-size: 26px; margin-bottom: 14px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Advised Across $45B+ in Transactions</h3>
      <p style="font-size: 16px; margin-bottom: 20px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">Whether launching a retail Islamic banking window or issuing a sovereign Green Sukuk, our senior scholars and TOGAF enterprise architects ensure complete compliance and market confidence.</p>
      <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Submit your RFP / Request Industry Briefing</a>
    </div>
  </div>
</section>

@endsection
