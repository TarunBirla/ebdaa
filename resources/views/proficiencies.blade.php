@extends('layouts.app')

@section('title', 'Proficiencies & Advisory Disciplines — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.65) 0%, rgba(10,61,107,0.45) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  .prof-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
  .prof-card {
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
  .prof-card:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 16px 40px rgba(10, 61, 107, 0.15);
  }
  .prof-card-header {
    height: 160px;
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 20px;
    display: flex;
    align-items: flex-end;
    color: #fff;
  }
  .prof-card-header .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.55) 10%, rgba(4,18,30,0.1) 100%); }
  .prof-card-body { padding: 28px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; }
  
  .pill-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
  .pill-tag { font-size: 12px; padding: 6px 14px; background: var(--pale); color: var(--blue-deep); border-radius: 100px; font-weight: 500; font-family: var(--font-mono); }

  /* 4-Step Workflow Bar */
  .workflow-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-top: 24px;
  }
  .wf-card {
    background: rgba(6, 25, 42, 0.7);
    border: 1px solid rgba(154, 214, 255, 0.2);
    border-radius: var(--radius);
    padding: 22px 18px;
    text-align: left;
    backdrop-filter: blur(10px);
  }
  .wf-num {
    font-family: var(--font-mono);
    font-size: 20px;
    font-weight: 700;
    color: var(--sky);
    margin-bottom: 8px;
  }
  .wf-title {
    font-size: 14.5px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 4px;
  }
  .wf-sub {
    font-size: 11.5px;
    color: rgba(255,255,255,0.6);
    font-family: var(--font-mono);
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> CAPABILITY MODULES</span>
    <h1>Every proficiency, built as an intelligent capability module</h1>
    <p>We frame every advisory discipline as a direct solution to a named institutional problem — combining scholar authority, legal precision, and enterprise technology.</p>
  </div>
</section>

<!-- Main Proficiencies Grid -->
<section class="section-pad">
  <div class="wrap">
    
    <div class="prof-card-grid">
      
      <!-- 1. Sharia Governance & Audit -->
      <div class="prof-card" id="governance">
        <div class="prof-card-header" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="eyebrow" style="color:#9AD6FF; margin:0;">PILLAR 01</span>
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> GOVERNANCE LAYER</span>
          </div>
        </div>
        <div class="prof-card-body">
          <div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 12px;">Sharia Governance &amp; Audit</h3>
            <p style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px;">Establishing independent Sharia Supervisory Boards, drafting institutional Sharia governance policies, and conducting annual comprehensive Sharia audits under AAOIFI and IFSB guidelines.</p>
            <div class="pill-tags">
              <span class="pill-tag">Supervisory Board Setup</span>
              <span class="pill-tag">Annual Sharia Audit</span>
              <span class="pill-tag">Governance Policies</span>
              <span class="pill-tag">AAOIFI Compliance</span>
            </div>
          </div>
          <div style="display: flex; gap: 12px; margin-top: 16px;">
            <a href="{{ url('/proficiencies/sharia-governance') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 10px 20px; font-size: 13.5px;">Request Review</a>
          </div>
        </div>
      </div>

      <!-- 2. Product & Transaction Structuring -->
      <div class="prof-card" id="structuring">
        <div class="prof-card-header" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="eyebrow" style="color:#9AD6FF; margin:0;">PILLAR 02</span>
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> CAPITAL FLOW ENGINE</span>
          </div>
        </div>
        <div class="prof-card-body">
          <div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 12px;">Product &amp; Transaction Structuring</h3>
            <p style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px;">Designing innovative, fully compliant financial products for retail banking, corporate finance, private wealth, Sukuk issuance (Ijara, Murabaha, Wakala, Green Sukuk), and Takaful surplus models.</p>
            <div class="pill-tags">
              <span class="pill-tag">Sukuk Structuring</span>
              <span class="pill-tag">Green Sukuk</span>
              <span class="pill-tag">Takaful Surplus</span>
              <span class="pill-tag">Family Foundations</span>
            </div>
          </div>
          <div style="display: flex; gap: 12px; margin-top: 16px;">
            <a href="{{ url('/proficiencies/product-structuring') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 10px 20px; font-size: 13.5px;">Discuss Mandate</a>
          </div>
        </div>
      </div>

      <!-- 3. Digital Transformation & AI -->
      <div class="prof-card" id="digital">
        <div class="prof-card-header" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="eyebrow" style="color:#9AD6FF; margin:0;">PILLAR 03</span>
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> IQMS™ AUDIT AGENT</span>
          </div>
        </div>
        <div class="prof-card-body">
          <div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 12px;">Digital Transformation &amp; AI Integration</h3>
            <p style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px;">Deploying proprietary AI engines (IQMS™) and core banking Sharia logic to ensure real-time compliance in automated digital transactions, smart contracts, and neobanking platforms.</p>
            <div class="pill-tags">
              <span class="pill-tag">IQMS™ AI Compliance</span>
              <span class="pill-tag">Smart Contract Audit</span>
              <span class="pill-tag">Core Banking APIs</span>
              <span class="pill-tag">Neobank Governance</span>
            </div>
          </div>
          <div style="display: flex; gap: 12px; margin-top: 16px;">
            <a href="{{ url('/proficiencies/digital-transformation') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/technology') }}" class="btn" style="padding: 10px 20px; font-size: 13.5px;">Try IQMS Demo</a>
          </div>
        </div>
      </div>

      <!-- 4. Capacity Building & ILMS -->
      <div class="prof-card" id="capacity">
        <div class="prof-card-header" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <div style="position:relative; z-index:2; display:flex; justify-content:space-between; width:100%; align-items:center;">
            <span class="eyebrow" style="color:#9AD6FF; margin:0;">PILLAR 04</span>
            <span class="ai-chip on-dark" style="font-size:10.5px;"><span class="pulse-node"></span> ILMS™ KNOWLEDGE LAYER</span>
          </div>
        </div>
        <div class="prof-card-body">
          <div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 12px;">Capacity Building &amp; Executive Education</h3>
            <p style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 20px;">Empowering executive teams, board members, and compliance officers through ILMS™ learning modules, Board workshops, and regulatory certification pathways.</p>
            <div class="pill-tags">
              <span class="pill-tag">ILMS™ Learning Platform</span>
              <span class="pill-tag">Board Orientation</span>
              <span class="pill-tag">Regulatory Workshops</span>
              <span class="pill-tag">AAOIFI Certification</span>
            </div>
          </div>
          <div style="display: flex; gap: 12px; margin-top: 16px;">
            <a href="{{ url('/proficiencies/capacity-building') }}" class="btn solid" style="padding: 10px 20px; font-size: 13.5px;">Read Details <i class="fa-solid fa-arrow-right"></i></a>
            <a href="{{ url('/speak-with-us') }}" class="btn" style="padding: 10px 20px; font-size: 13.5px;">Book Workshop</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Interactive 4-Phase Advisory Workflow Bar -->
<section class="section-pad" style="background: var(--grad-deep); color: #fff;">
  <div class="wrap">
    <div style="max-width: 640px; margin-bottom: 32px;">
      <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> ADVISORY EXECUTION WORKFLOW</span>
      <h2 style="color:#fff; font-size:32px;">How Our Advisory Engine Operates</h2>
      <p style="color: rgba(255,255,255,0.8); font-size: 16px;">Every mandate undergoes a 4-phase structured advisory pipeline ensuring scholar consensus and zero compliance deviation.</p>
    </div>

    <div class="workflow-grid">
      <div class="wf-card">
        <div class="wf-num">01</div>
        <div class="wf-title">Discovery Scan</div>
        <div class="wf-sub">Data &amp; Fiqh Audit</div>
      </div>
      <div class="wf-card">
        <div class="wf-num">02</div>
        <div class="wf-title">Scholar Structuring</div>
        <div class="wf-sub">Board Consensus</div>
      </div>
      <div class="wf-card">
        <div class="wf-num">03</div>
        <div class="wf-title">IQMS™ Simulation</div>
        <div class="wf-sub">AI Rule Verification</div>
      </div>
      <div class="wf-card">
        <div class="wf-num">04</div>
        <div class="wf-title">Fatwa Certification</div>
        <div class="wf-sub">Immutable Sign-off</div>
      </div>
    </div>
  </div>
</section>

@endsection
