@extends('layouts.app')

@section('title', 'Proficiency Details — Ebdaa IFC')

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
    <span class="eyebrow" style="color:var(--sky);">PROFICIENCY DETAILS</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <p>Detailed breakdown of Ebdaa IFC's scholarly framework, regulatory alignment, and technology execution for this advisory discipline.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="detail-layout">
      
      <div>
        <div class="blue-box-pale" style="margin-bottom: 28px;">
          <h3 style="font-size: 20px; margin-bottom: 10px;">Executive Overview</h3>
          <p style="font-size: 15px; color: var(--ink-soft); line-height: 1.6;">
            In today's institutional Islamic finance market, {{ ucwords(str_replace('-', ' ', $slug)) }} requires a dual capability: deep classical Fiqh authority coupled with enterprise-grade system integration under AAOIFI and IFSB governance guidelines.
          </p>
        </div>

        <h2 style="font-size: 26px; margin-bottom: 16px;">Key Deliverables &amp; Methodology</h2>
        <ul style="display: flex; flex-direction: column; gap: 16px; font-size: 15px; color: var(--ink-soft); margin-bottom: 32px; line-height: 1.6;">
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>Supervisory Board Approval:</strong> Formal Fatwa issuance signed by named Sharia scholars.</div></li>
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>Legal &amp; Product Manuals:</strong> Standardized transaction documents (Ijara, Murabaha, Mudaraba, Wakala).</div></li>
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>IQMS™ Automation:</strong> Real-time API rule validation for core banking systems.</div></li>
          <li style="display: flex; gap: 12px;"><i class="fa-solid fa-check" style="color: var(--blue); margin-top: 4px;"></i> <div><strong>Annual Sharia Audit:</strong> Comprehensive third-party audit report suitable for central banks and shareholders.</div></li>
        </ul>

        <!-- Strategic Advisory Mandate Box -->
        <div style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'); background-size: cover; border-radius: var(--radius); padding: 32px; color: #fff; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end; min-height: 200px;">
          <div style="position: relative; z-index: 2;">
            <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">INSTITUTIONAL ENGAGEMENT</span>
            <h3 style="color: #fff; font-size: 22px; margin-bottom: 8px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Execute {{ ucwords(str_replace('-', ' ', $slug)) }} Mandate</h3>
            <p style="font-size: 14px; color: rgba(255,255,255,0.95); margin-bottom: 18px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">Our senior advisors and enterprise architects deliver tailored Sharia governance and advisory frameworks for global mandates.</p>
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Schedule Strategy Session <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Blue Box Highlight Area -->
      <div>
        <div class="blue-box" style="margin-bottom: 24px;">
          <span class="eyebrow" style="color: var(--sky);">INSTITUTIONAL MANDATE</span>
          <h3 style="font-size: 22px; margin-bottom: 14px;">Engage Our Advisory Desk</h3>
          <p style="font-size: 14px; margin-bottom: 20px;">Initiate a confidential alignment call with senior partners in London or Toronto to review your institution's specific requirements.</p>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width: 100%; justify-content: center;">Submit an RFP / Speak With Us</a>
        </div>

        <div class="blue-box-pale">
          <h4 style="font-size: 16px; margin-bottom: 10px;">Related Proficiencies</h4>
          <div style="display: flex; flex-direction: column; gap: 8px; font-size: 14px;">
            <a href="{{ url('/proficiencies/sharia-governance') }}" style="color: var(--blue); font-weight: 600;">• Sharia Governance &amp; Audit</a>
            <a href="{{ url('/proficiencies/sukuk-structuring') }}" style="color: var(--blue); font-weight: 600;">• Sukuk &amp; Asset Tokenization</a>
            <a href="{{ url('/proficiencies/ai-compliance') }}" style="color: var(--blue); font-weight: 600;">• AI in Sharia Compliance</a>
            <a href="{{ url('/proficiencies/capacity-building') }}" style="color: var(--blue); font-weight: 600;">• Executive ILMS™ Workshops</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection
