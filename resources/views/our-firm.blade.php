@extends('layouts.app')

@section('title', 'Our Firm — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 90px 0;
    position: relative;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  @media(max-width: 980px) {
    .team-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">ABOUT EBDAA IFC</span>
    <h1>Scholarly weight meets modern enterprise architecture</h1>
    <p>Ebdaa Islamic Finance Consultancy (Ebdaa IFC) is a boutique Sharia advisory house operating across London and Toronto, delivering governance, Sukuk structuring, and technology-enabled Islamic finance solutions.</p>
  </div>
</section>

<!-- Executive Summary & Blue Highlights -->
<section class="section-pad">
  <div class="wrap">
    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 48px; align-items: center;">
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
          <div class="blue-box-pale" style="padding: 16px 20px; flex: 1;">
            <h4 style="font-size: 18px; color: var(--blue-deep);">London HQ</h4>
            <p style="font-size: 13px; color: var(--ink-soft);">NEXTECK Limited (UK Reg. 2024)</p>
          </div>
          <div class="blue-box-pale" style="padding: 16px 20px; flex: 1;">
            <h4 style="font-size: 18px; color: var(--blue-deep);">Toronto Office</h4>
            <p style="font-size: 13px; color: var(--ink-soft);">North American Advisory Hub</p>
          </div>
        </div>
      </div>

      <!-- Blue Box Highlight Area -->
      <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'); background-size: cover;">
        <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">TOGAF ENTERPRISE METHODOLOGY</span>
        <h3 style="font-size: 24px; margin-bottom: 16px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Structured Enterprise Governance</h3>
        <ul style="display: flex; flex-direction: column; gap: 14px; font-size: 14px; color: rgba(255,255,255,0.95); text-shadow: 0 1px 3px rgba(0,0,0,0.6);">
          <li><i class="fa-solid fa-circle-check" style="color:var(--sky); margin-right: 8px;"></i> <strong>AAOIFI &amp; IFSB Alignment:</strong> Full compliance with international Sharia standards.</li>
          <li><i class="fa-solid fa-circle-check" style="color:var(--sky); margin-right: 8px;"></i> <strong>TOGAF Enterprise Framework:</strong> Repeatable, risk-mitigated transformation roadmaps.</li>
          <li><i class="fa-solid fa-circle-check" style="color:var(--sky); margin-right: 8px;"></i> <strong>UK GDPR Compliant:</strong> Contractual flexibility and data privacy for global mandates.</li>
          <li><i class="fa-solid fa-circle-check" style="color:var(--sky); margin-right: 8px;"></i> <strong>IQMS™ Integration:</strong> Automated audit trails for continuous compliance.</li>
        </ul>
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
          <div style="position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,0.2) 0%, rgba(4,18,30,0) 100%);"></div>
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
          <div style="position:absolute; inset:0; background:linear-gradient(0deg, rgba(4,18,30,0.2) 0%, rgba(4,18,30,0) 100%);"></div>
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
