@extends('layouts.app')

@section('title', 'Proficiencies & Advisory Disciplines — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 90px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .prof-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
  .prof-card {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.3s ease;
  }
  .prof-card:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 12px 30px rgba(10, 61, 107, 0.12);
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
  .prof-card-header .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.45) 10%, rgba(4,18,30,0.05) 100%); }
  .prof-card-body { padding: 28px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; }
  
  .pill-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
  .pill-tag { font-size: 12px; padding: 6px 14px; background: var(--pale); color: var(--blue-deep); border-radius: 100px; font-weight: 500; }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">OUR PROFICIENCIES</span>
    <h1>Every proficiency, built as a guided buyer journey</h1>
    <p>We frame every advisory discipline as a direct solution to a named institutional problem — combining scholar authority, legal precision, and enterprise technology.</p>
  </div>
</section>

<!-- Main Proficiencies Grid with Image Headers -->
<section class="section-pad">
  <div class="wrap">
    
    <div class="prof-card-grid">
      
      <!-- 1. Sharia Governance & Audit -->
      <div class="prof-card" id="governance">
        <div class="prof-card-header" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span class="eyebrow" style="color:#9AD6FF; margin:0; position:relative; z-index:2; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">PILLAR 01</span>
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
          <span class="eyebrow" style="color:#9AD6FF; margin:0; position:relative; z-index:2; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">PILLAR 02</span>
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
          <span class="eyebrow" style="color:#9AD6FF; margin:0; position:relative; z-index:2; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">PILLAR 03</span>
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
          <span class="eyebrow" style="color:#9AD6FF; margin:0; position:relative; z-index:2; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">PILLAR 04</span>
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

<!-- Blue Highlighted Feature Box with Image Backdrop -->
<section class="section-pad" style="background: var(--pale);">
  <div class="wrap">
    <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80'); background-size: cover;">
      <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">DELOITTE DIGITAL BENCHMARK</span>
      <h3 style="font-size: 28px; margin-bottom: 16px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">How Our Advisory Process Works</h3>
      <p style="font-size: 16px; margin-bottom: 24px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">Every engagement follows a structured 4-step mandate workflow ensuring zero legal ambiguity and 100% Sharia compliance.</p>
      
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; text-align: center;">
        <div style="background: rgba(255,255,255,0.12); padding: 18px; border-radius: var(--radius);">
          <div style="font-size: 20px; font-weight: 700; color: var(--sky);">01</div>
          <div style="font-size: 14px; font-weight: 600; color: #fff; margin-top: 4px;">Discovery &amp; Audit</div>
        </div>
        <div style="background: rgba(255,255,255,0.12); padding: 18px; border-radius: var(--radius);">
          <div style="font-size: 20px; font-weight: 700; color: var(--sky);">02</div>
          <div style="font-size: 14px; font-weight: 600; color: #fff; margin-top: 4px;">Scholar Structuring</div>
        </div>
        <div style="background: rgba(255,255,255,0.12); padding: 18px; border-radius: var(--radius);">
          <div style="font-size: 20px; font-weight: 700; color: var(--sky);">03</div>
          <div style="font-size: 14px; font-weight: 600; color: #fff; margin-top: 4px;">IQMS™ Integration</div>
        </div>
        <div style="background: rgba(255,255,255,0.12); padding: 18px; border-radius: var(--radius);">
          <div style="font-size: 20px; font-weight: 700; color: var(--sky);">04</div>
          <div style="font-size: 14px; font-weight: 600; color: #fff; margin-top: 4px;">Fatwa Certification</div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
