@extends('layouts.app')

@section('title', 'Industry Journey Details — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, var(--blue-ink) 0%, var(--blue-deep) 60%, var(--blue) 100%);
    color: var(--white);
    padding: 70px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 38px; margin-bottom: 12px; }
  .page-banner p { color: rgba(255,255,255,0.85); font-size: 17px; max-width: 640px; }

  .detail-layout {
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 40px;
    align-items: start;
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky);">INDUSTRY BUYER JOURNEY</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <p>Tailored Sharia advisory, legal structuring, and enterprise technology solutions for institutions in this sector.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="detail-layout">
      
      <div>
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
        <div style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?auto=format&fit=crop&w=800&q=80'); background-size: cover; border-radius: var(--radius); padding: 32px; color: #fff; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end; min-height: 200px;">
          <div style="position: relative; z-index: 2;">
            <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">EXECUTIVE BRIEFING</span>
            <h3 style="color: #fff; font-size: 22px; margin-bottom: 8px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Executive Briefing for {{ ucwords(str_replace('-', ' ', $slug)) }}</h3>
            <p style="font-size: 14px; color: rgba(255,255,255,0.95); margin-bottom: 18px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">Learn how leading firms shorten their trust curve and win mandates using Ebdaa IFC's digital front door.</p>
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Request Sector Briefing <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Blue Box Highlight -->
      <div>
        <div class="blue-box" style="margin-bottom: 24px;">
          <span class="eyebrow" style="color: var(--sky);">CONVERT YOUR INQUIRY</span>
          <h3 style="font-size: 22px; margin-bottom: 14px;">Speak With an Advisor</h3>
          <p style="font-size: 14px; margin-bottom: 20px;">Schedule a 30-minute working session with our London or Toronto partners to align scope and mandate priorities.</p>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width: 100%; justify-content: center;">Submit an RFP / Schedule Call</a>
        </div>

        <div class="blue-box-pale">
          <h4 style="font-size: 16px; margin-bottom: 10px;">Other Industry Journeys</h4>
          <div style="display: flex; flex-direction: column; gap: 8px; font-size: 14px;">
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
