@extends('layouts.app')

@section('title', 'Proficiency Details — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80');
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

  /* Decision-Flow Terminal Widget */
  .decision-flow-panel {
    background: rgba(6, 25, 42, 0.95);
    border: 1px solid rgba(154, 214, 255, 0.22);
    border-radius: var(--radius-lg);
    padding: 24px 26px;
    color: #fff;
    margin-bottom: 30px;
  }
  .flow-nodes-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px stroke rgba(255,255,255,0.1);
  }
  .flow-node-box {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: var(--radius-sm);
    padding: 10px 14px;
    font-size: 12px;
    text-align: center;
    flex: 1;
  }
  .flow-node-box.active {
    background: rgba(22, 113, 196, 0.3);
    border-color: var(--sky);
    color: #fff;
  }
  .flow-arrow {
    color: var(--sky);
    font-size: 12px;
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> DISCIPLINE SPECIFICATION</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <p>Detailed breakdown of Ebdaa IFC's scholarly framework, regulatory alignment, and technology execution for this advisory discipline.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="detail-layout">
      
      <div>
        <!-- Executive Decision Flow Interface Widget -->
        <div class="decision-flow-panel">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> ADVISORY DECISION-FLOW TERMINAL</span>
            <span style="font-family:var(--font-mono); font-size:11px; color:var(--sky);">LATENCY: 0.2ms</span>
          </div>
          <h4 style="color:#fff; font-size:16px; margin-top:8px; margin-bottom:4px;">Automated Decision &amp; Audit Pipeline</h4>
          <p style="font-size:12.5px; color:rgba(255,255,255,0.65); margin:0;">Real-time Fiqh rule validation &amp; scholar verification loop</p>

          <div class="flow-nodes-row">
            <div class="flow-node-box">
              <div style="font-family:var(--font-mono); font-size:10px; color:var(--sky);">STEP 01</div>
              <strong>Mandate Data</strong>
            </div>
            <span class="flow-arrow"><i class="fa-solid fa-chevron-right"></i></span>
            <div class="flow-node-box active">
              <div style="font-family:var(--font-mono); font-size:10px; color:#5FE39B;">STEP 02</div>
              <strong>IQMS™ Fiqh Scan</strong>
            </div>
            <span class="flow-arrow"><i class="fa-solid fa-chevron-right"></i></span>
            <div class="flow-node-box">
              <div style="font-family:var(--font-mono); font-size:10px; color:var(--sky);">STEP 03</div>
              <strong>Board Sign-off</strong>
            </div>
            <span class="flow-arrow"><i class="fa-solid fa-chevron-right"></i></span>
            <div class="flow-node-box">
              <div style="font-family:var(--font-mono); font-size:10px; color:var(--sky);">STEP 04</div>
              <strong>Fatwa Issued</strong>
            </div>
          </div>
        </div>

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
        <div style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'); background-size: cover; border-radius: var(--radius-lg); padding: 32px; color: #fff; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-end; min-height: 200px; border:1px solid rgba(154,214,255,0.2);">
          <div style="position: relative; z-index: 2;">
            <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> INSTITUTIONAL ENGAGEMENT</span>
            <h3 style="color: #fff; font-size: 22px; margin-bottom: 8px;">Execute {{ ucwords(str_replace('-', ' ', $slug)) }} Mandate</h3>
            <p style="font-size: 14px; color: rgba(255,255,255,0.9); margin-bottom: 18px;">Our senior advisors and enterprise architects deliver tailored Sharia governance and advisory frameworks for global mandates.</p>
            <a href="{{ url('/speak-with-us') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Schedule Strategy Session <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Column Blue Box Highlight Area -->
      <div>
        <div class="blue-box" style="margin-bottom: 24px; background: var(--grad-deep); color:#fff; border: 1px solid rgba(154,214,255,0.2);">
          <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> ADVISORY INTAKE</span>
          <h3 style="font-size: 22px; margin-bottom: 14px; color:#fff;">Engage Our Advisory Desk</h3>
          <p style="font-size: 14px; margin-bottom: 20px; color:rgba(255,255,255,0.85);">Initiate a confidential alignment call with senior partners in London or Toronto to review your institution's specific requirements.</p>
          <a href="{{ url('/speak-with-us') }}" class="btn ghost-light" style="width: 100%; justify-content: center;">Submit an RFP / Speak With Us</a>
        </div>

        <div class="blue-box-pale">
          <h4 style="font-size: 16px; margin-bottom: 12px; color:var(--blue-deep);">Related Proficiencies</h4>
          <div style="display: flex; flex-direction: column; gap: 10px; font-size: 13.5px;">
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
