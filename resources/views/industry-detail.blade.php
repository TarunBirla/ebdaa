@extends('layouts.app')

@section('title', 'Industry Journey Details — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 85px 0 65px;
  }
  .page-banner h1 { color: var(--white); font-size: 40px; margin-bottom: 12px; font-weight: 600; text-transform: capitalize; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 17px; max-width: 680px; }

  .detail-layout {
    display: grid;
    grid-template-columns: 1.35fr 1fr;
    gap: 40px;
    align-items: start;
  }

  /* Sector Risk Analytics Widget */
  .sector-analytics-card {
    background: rgba(6, 25, 42, 0.95);
    border: 1px solid rgba(154, 214, 255, 0.22);
    border-radius: var(--radius-lg);
    padding: 24px;
    color: #fff;
    margin-bottom: 28px;
  }
  .sector-chart-row {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 16px;
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> SECTOR INTELLIGENCE</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <p>Tailored Sharia advisory, legal structuring, and enterprise technology solutions for institutions in this sector.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="detail-layout">
      
      <div>
        <!-- Sector Analytics & Risk Dashboard Widget -->
        <div class="sector-analytics-card">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> SECTOR RISK &amp; COMPLIANCE MATRIX</span>
            <span style="font-family:var(--font-mono); font-size:11px; color:var(--sky);">AAOIFI #17 CHECK</span>
          </div>
          
          <div class="sector-chart-row">
            <svg width="70" height="70" viewBox="0 0 70 70">
              <circle cx="35" cy="35" r="28" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="6" />
              <circle cx="35" cy="35" r="28" fill="none" stroke="#5FE39B" stroke-width="6" stroke-dasharray="175" stroke-dashoffset="15" transform="rotate(-90 35 35)" />
              <text x="35" y="39" fill="#fff" font-size="12" font-weight="700" font-family="monospace" text-anchor="middle">99%</text>
            </svg>
            <div>
              <div style="font-size:16px; font-weight:600; color:#fff;">Institutional Compliance Rate</div>
              <div style="font-size:12.5px; color:rgba(255,255,255,0.7); font-family:var(--font-mono); margin-top:2px;">AAOIFI, IFSB &amp; UK Financial Authority Aligned</div>
            </div>
          </div>
        </div>

        <div class="blue-box-pale" style="margin-bottom: 28px;">
          <h3 style="font-size: 20px; margin-bottom: 10px;">Institutional Solution Summary</h3>
          <p style="font-size: 15px; color: var(--ink-soft); line-height: 1.6;">
            Institutions in {{ ucwords(str_replace('-', ' ', $slug)) }} face increasing scrutiny from central bank regulators, institutional investors, and AI research platforms. Ebdaa IFC provides an unmissable path to Sharia credibility and compliance.
          </p>
        </div>

        <h2 style="font-size: 26px; margin-bottom: 16px;">Core Framework &amp; Proof Points</h2>
        <ul style="display: flex; flex-direction: column; gap: 16px; font-size: 15px; color: var(--ink-soft); margin-bottom: 32px; line-height: 1.6;">
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>Targeted Governance Model:</strong> Custom-fitted Sharia Supervisory Board oversight tailored to sector rules.</div></li>
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>Standardized Legal Structuring:</strong> Cross-border documentation under AAOIFI, IFSB, DIFC, and ADGM law.</div></li>
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>IQMS™ Integration:</strong> Automated transaction compliance pre-screening and scholar audit logging.</div></li>
        </ul>

        <!-- Sector Briefing Mandate Box -->
        <div style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80'); background-size: cover; border-radius: var(--radius-lg); padding: 32px; color: #fff; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end; min-height: 200px; border:1px solid rgba(154,214,255,0.2);">
          <div style="position: relative; z-index: 2;">
            <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> EXECUTIVE BRIEFING</span>
            <h3 style="color: #fff; font-size: 22px; margin-bottom: 8px;">Executive Briefing for {{ ucwords(str_replace('-', ' ', $slug)) }}</h3>
            <p style="font-size: 14px; color: rgba(255,255,255,0.9); margin-bottom: 18px;">Learn how leading firms shorten their trust curve and win mandates using Ebdaa IFC's digital front door.</p>
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Request Sector Briefing <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Column Blue Box -->
      <div>
        <div class="blue-box" style="margin-bottom: 24px; background: var(--grad-deep); color:#fff; border:1px solid rgba(154,214,255,0.2);">
          <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> CONVERT YOUR INQUIRY</span>
          <h3 style="font-size: 22px; margin-bottom: 14px; color:#fff;">Speak With an Advisor</h3>
          <p style="font-size: 14px; margin-bottom: 20px; color:rgba(255,255,255,0.85);">Schedule a 30-minute working session with our London or Toronto partners to align scope and mandate priorities.</p>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width: 100%; justify-content: center;">Submit an RFP / Schedule Call</a>
        </div>

        <div class="blue-box-pale">
          <h4 style="font-size: 16px; margin-bottom: 12px; color:var(--blue-deep);">Other Industry Journeys</h4>
          <div style="display: flex; flex-direction: column; gap: 10px; font-size: 13.5px;">
            <a href="{{ url('/industries/islamic-banks') }}" style="color: var(--blue); font-weight: 600;">• Islamic Banks</a>
            <a href="{{ url('/industries/sukuk-issuers') }}" style="color: var(--blue); font-weight: 600;">• Sukuk &amp; Capital Markets</a>
            <a href="{{ url('/industries/takaful') }}" style="color: var(--blue); font-weight: 600;">• Takaful Operators</a>
            <a href="{{ url('/industries/regulators') }}" style="color: var(--blue); font-weight: 600;">• Regulators &amp; Central Banks</a>
            <a href="{{ url('/industries/fintech') }}" style="color: var(--blue); font-weight: 600;">• Fintech &amp; Digital Neobanks</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection
