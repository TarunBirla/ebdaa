@extends('layouts.app')

@section('title', 'Our Firm — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.65) 0%, rgba(10,61,107,0.45) 100%), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
    position: relative;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  /* Global Network Node Visual */
  .network-map-panel {
    background: rgba(6, 25, 42, 0.95);
    border: 1px solid rgba(154, 214, 255, 0.2);
    border-radius: var(--radius-lg);
    padding: 32px;
    color: #fff;
    margin-top: 40px;
    position: relative;
    overflow: hidden;
  }
  .network-svg {
    width: 100%;
    height: 180px;
  }

  /* TOGAF Layer Card */
  .togaf-card {
    background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95));
    border: 1px solid rgba(154,214,255,0.25);
    border-radius: var(--radius-lg);
    padding: 32px;
    color: #fff;
  }
  .togaf-layer {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 12px 16px;
    background: rgba(255,255,255,0.05);
    border-radius: var(--radius-sm);
    border-left: 3px solid var(--sky);
    margin-bottom: 10px;
    font-size: 13.5px;
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> ABOUT EBDAA IFC</span>
    <h1>Scholarly weight meets modern enterprise architecture</h1>
    <p>Ebdaa Islamic Finance Consultancy (Ebdaa IFC) is a boutique Sharia advisory house operating across London and Toronto, delivering governance, Sukuk structuring, and technology-enabled Islamic finance solutions.</p>
  </div>
</section>

<!-- Executive Summary & Global Network -->
<section class="section-pad">
  <div class="wrap">
    
    <!-- Institutional Credibility Formula Strip -->
    <div style="margin-bottom: 50px; background: var(--grad-deep); border-radius: var(--radius-lg); padding: 30px 36px; border: 1px solid rgba(154,214,255,0.2); color: #fff; box-shadow: 0 20px 50px rgba(0,0,0,0.25);">
      <div style="display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
        <div>
          <span class="ai-chip on-dark" style="margin-bottom: 8px;"><span class="pulse-node"></span> INSTITUTIONAL CREDIBILITY MATRIX</span>
          <h3 style="color: #fff; font-size: 22px; margin: 0; font-weight:600;">Scholarship + Governance + Technology + AI = Modern Islamic Advisory</h3>
        </div>
        <div style="display: flex; gap: 10px; font-family: var(--font-mono); font-size: 12.5px; color: var(--sky);">
          <span style="background: rgba(255,255,255,0.08); padding: 8px 14px; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.12);">AAOIFI Audited</span>
          <span style="background: rgba(255,255,255,0.08); padding: 8px 14px; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.12);">TOGAF Certified</span>
          <span style="background: rgba(255,255,255,0.08); padding: 8px 14px; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.12);">IQMS™ Engine</span>
        </div>
      </div>
    </div>

    <!-- Global Network Visualization Panel -->
    <div class="network-map-panel">
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <div>
          <span class="ai-chip on-dark"><span class="pulse-node"></span> GLOBAL GOVERNANCE NETWORK</span>
          <h4 style="color:#fff; font-size:18px; margin-top:6px;">Cross-Border Sharia Telemetry Hub</h4>
        </div>
        <div style="font-family:var(--font-mono); font-size:12px; color:var(--sky);">ACTIVE NODES: 6 JURISDICTIONS</div>
      </div>
      <svg class="network-svg" viewBox="0 0 900 180">
        <!-- Lines connecting nodes -->
        <line x1="150" y1="90" x2="350" y2="40" stroke="rgba(154,214,255,0.3)" stroke-width="1.5" stroke-dasharray="4,4" />
        <line x1="150" y1="90" x2="350" y2="140" stroke="rgba(154,214,255,0.3)" stroke-width="1.5" />
        <line x1="350" y1="40" x2="550" y2="90" stroke="rgba(154,214,255,0.4)" stroke-width="2" />
        <line x1="350" y1="140" x2="550" y2="90" stroke="rgba(154,214,255,0.4)" stroke-width="2" />
        <line x1="550" y1="90" x2="750" y2="40" stroke="rgba(154,214,255,0.3)" stroke-width="1.5" />
        <line x1="550" y1="90" x2="750" y2="140" stroke="rgba(154,214,255,0.3)" stroke-width="1.5" />

        <!-- Nodes -->
        <g transform="translate(150, 90)">
          <circle r="12" fill="#1671C4" stroke="#9AD6FF" stroke-width="2" />
          <circle r="4" fill="#fff" />
          <text y="28" fill="#fff" font-size="11" font-family="monospace" text-anchor="middle">Toronto Hub (YYZ)</text>
        </g>
        <g transform="translate(350, 40)">
          <circle r="16" fill="#0A3D6B" stroke="#5FE39B" stroke-width="2" />
          <circle r="5" fill="#5FE39B" />
          <text y="-22" fill="#5FE39B" font-size="11" font-weight="bold" font-family="monospace" text-anchor="middle">London HQ (LDN)</text>
        </g>
        <g transform="translate(350, 140)">
          <circle r="10" fill="#1671C4" stroke="#9AD6FF" stroke-width="1.5" />
          <text y="24" fill="rgba(255,255,255,0.7)" font-size="10" font-family="monospace" text-anchor="middle">UK GDPR Data Shield</text>
        </g>
        <g transform="translate(550, 90)">
          <circle r="14" fill="#C5A059" stroke="#fff" stroke-width="2" />
          <circle r="4" fill="#fff" />
          <text y="28" fill="#C5A059" font-size="11" font-weight="bold" font-family="monospace" text-anchor="middle">AAOIFI &amp; IFSB Engine</text>
        </g>
        <g transform="translate(750, 40)">
          <circle r="10" fill="#1671C4" stroke="#9AD6FF" stroke-width="1.5" />
          <text y="-18" fill="rgba(255,255,255,0.7)" font-size="10" font-family="monospace" text-anchor="middle">GCC Central Banks</text>
        </g>
        <g transform="translate(750, 140)">
          <circle r="10" fill="#1671C4" stroke="#9AD6FF" stroke-width="1.5" />
          <text y="24" fill="rgba(255,255,255,0.7)" font-size="10" font-family="monospace" text-anchor="middle">ADGM &amp; DIFC Hubs</text>
        </g>
      </svg>
    </div>

    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 48px; align-items: start; margin-top: 50px;">
      <div>
        <span class="eyebrow">OUR INSTITUTIONAL FOUNDATION</span>
        <h2 style="font-size: 32px; margin-bottom: 20px;">Built for the institutions sourcing global mandates</h2>
        <p style="color: var(--ink-soft); font-size: 16px; margin-bottom: 18px; line-height: 1.6;">
          Traditional advisory desks provide static Fatwas; technology vendors supply software without scholarly weight. Ebdaa IFC was engineered specifically to solve this gap for central banks, sovereign wealth funds, takaful operators, and Islamic financial institutions.
        </p>
        <p style="color: var(--ink-soft); font-size: 16px; margin-bottom: 24px; line-height: 1.6;">
          With a senior team combining over 80 years of collective banking, Sharia governance, and enterprise architecture experience (TOGAF), we deliver Sharia advisory with the rigor and institutional craft of a Big Four firm.
        </p>
        
        <div style="display: flex; gap: 24px;">
          <div class="blue-box-pale" style="padding: 20px; flex: 1;">
            <h4 style="font-size: 18px; color: var(--blue-deep);">London HQ</h4>
            <p style="font-size: 13px; color: var(--ink-soft); margin-top:4px;">NEXTECK Limited (UK Reg. 2024)</p>
          </div>
          <div class="blue-box-pale" style="padding: 20px; flex: 1;">
            <h4 style="font-size: 18px; color: var(--blue-deep);">Toronto Office</h4>
            <p style="font-size: 13px; color: var(--ink-soft); margin-top:4px;">North American Advisory Hub</p>
          </div>
        </div>
      </div>

      <!-- TOGAF Enterprise Governance Card -->
      <div class="togaf-card">
        <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> TOGAF ENTERPRISE METHODOLOGY</span>
        <h3 style="font-size: 22px; margin-bottom: 18px; color:#fff;">Structured Governance Layers</h3>
        
        <div class="togaf-layer">
          <i class="fa-solid fa-layer-group" style="color:var(--sky);"></i>
          <div><strong>Layer 1: Sharia Board Review</strong> — Executive Board consensus</div>
        </div>
        <div class="togaf-layer">
          <i class="fa-solid fa-microchip" style="color:var(--sky);"></i>
          <div><strong>Layer 2: IQMS™ AI Scan</strong> — Automated rule validation</div>
        </div>
        <div class="togaf-layer">
          <i class="fa-solid fa-shield-halved" style="color:var(--sky);"></i>
          <div><strong>Layer 3: UK GDPR Shield</strong> — Sovereign data protection</div>
        </div>
        <div class="togaf-layer">
          <i class="fa-solid fa-file-contract" style="color:var(--sky);"></i>
          <div><strong>Layer 4: AAOIFI Alignment</strong> — Standard #17 &amp; #21 audit</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Locations Section -->
<section class="section-pad" id="locations" style="background: var(--pale);">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">GLOBAL FOOTPRINT</span>
      <h2>Headquartered in London, present in Toronto</h2>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
      <div class="loc-card">
        <div class="loc-photo" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
          <div style="position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,0.3) 0%, rgba(4,18,30,0) 100%);"></div>
          <div class="pin"><i class="fa-solid fa-location-dot"></i> London HQ</div>
        </div>
        <div class="loc-info">
          <h4>London — Headquarters (UK)</h4>
          <div class="row"><b>Entity</b> NEXTECK Limited, United Kingdom (Inc. 2024)</div>
          <div class="row"><b>Phone</b> +44 37 7573 136</div>
          <div class="row"><b>Email</b> advisory@ebdaaifc.com</div>
          <div style="margin-top:16px;">
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 8px 18px; font-size: 13px;">Contact London Office</a>
          </div>
        </div>
      </div>

      <div class="loc-card">
        <div class="loc-photo" style="background-image: url('https://images.unsplash.com/photo-1507992744068-d421da646840?auto=format&fit=crop&w=800&q=80');">
          <div style="position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,0.3) 0%, rgba(4,18,30,0) 100%);"></div>
          <div class="pin"><i class="fa-solid fa-location-dot"></i> Toronto Office</div>
        </div>
        <div class="loc-info">
          <h4>Toronto Office (Canada)</h4>
          <div class="row"><b>Address</b> 3080 Yonge Street, Suite 6060, Toronto, ON M4N 3N1</div>
          <div class="row"><b>Phone</b> +1 437 601 2101</div>
          <div class="row"><b>Focus</b> North American Advisory Hub</div>
          <div style="margin-top:16px;">
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 8px 18px; font-size: 13px;">Contact Toronto Office</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
