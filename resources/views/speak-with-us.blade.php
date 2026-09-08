@extends('layouts.app')

@section('title', 'Speak With Us / Submit RFP — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  .rfp-grid-layout {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 40px;
    align-items: start;
  }

  .rfp-form-box {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    padding: 36px;
    box-shadow: 0 10px 30px rgba(6,25,42,0.05);
  }

  .option-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
    margin-bottom: 20px;
  }
  .option-card {
    border: 1.5px solid var(--line);
    border-radius: var(--radius-sm);
    padding: 16px;
    cursor: pointer;
    transition: all 0.25s ease;
  }
  .option-card.active, .option-card:hover {
    border-color: var(--blue);
    background: var(--pale);
  }
  .option-card input { display: none; }
  .option-card h4 { font-size: 15px; color: var(--blue-deep); margin-bottom: 4px; font-weight: 600; }
  .option-card p { font-size: 12.5px; color: var(--ink-soft); margin: 0; }

  .office-card-img {
    height: 120px;
    background-size: cover;
    background-position: center;
    position: relative;
    border-radius: var(--radius-lg) var(--radius-lg) 0 0;
  }
  .office-card-img .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.45) 0%, rgba(4,18,30,0) 100%); }

  @media(max-width: 980px) {
    .rfp-grid-layout { grid-template-columns: 1fr; }
    .option-card-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> MANDATE QUALIFICATION</span>
    <h1>Speak with an advisor / Submit an RFP</h1>
    <p>Initiate a confidential discussion with our senior Sharia advisors and enterprise strategists across London and Toronto.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="rfp-grid-layout">
      
      <!-- Multi-step Qualification Engine Form Box -->
      <div class="rfp-form-box">
        
        <form id="rfpForm" onsubmit="submitForm(event)">
          
          <div id="step1">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
              <span class="eyebrow" style="margin: 0;">STEP 1 OF 2</span>
              <span class="ai-chip"><span class="pulse-node"></span> INTAKE ENGINE</span>
            </div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 16px;">Select Primary Mandate Requirement</h3>

            <div class="option-card-grid">
              <label class="option-card active" onclick="selectOpt(this)">
                <input type="radio" name="mandate_type" value="governance" checked>
                <h4>Sharia Governance Review</h4>
                <p>Supervisory board &amp; audit</p>
              </label>

              <label class="option-card" onclick="selectOpt(this)">
                <input type="radio" name="mandate_type" value="sukuk">
                <h4>Sukuk Structuring</h4>
                <p>Sovereign &amp; corporate issuance</p>
              </label>

              <label class="option-card" onclick="selectOpt(this)">
                <input type="radio" name="mandate_type" value="ai_tech">
                <h4>IQMS™ AI Integration</h4>
                <p>Automated transaction audit</p>
              </label>

              <label class="option-card" onclick="selectOpt(this)">
                <input type="radio" name="mandate_type" value="takaful">
                <h4>Takaful Advisory</h4>
                <p>Surplus &amp; risk pool models</p>
              </label>
            </div>

            <div style="margin-bottom: 24px;">
              <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">GEOGRAPHIC SCOPE / JURISDICTION:</label>
              <select name="jurisdiction" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: inherit;">
                <option value="London_UK">United Kingdom &amp; Europe (London HQ)</option>
                <option value="GCC">GCC &amp; Middle East (UAE / KSA / Qatar)</option>
                <option value="Toronto_CA">North America (Toronto Office)</option>
                <option value="Global">Global Cross-Border</option>
              </select>
            </div>

            <button type="button" class="btn solid" style="width: 100%; justify-content: center;" onclick="toStep2()">Next: Contact Details <i class="fa-solid fa-arrow-right"></i></button>
          </div>

          <div id="step2" style="display: none;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
              <span class="eyebrow" style="margin: 0;">STEP 2 OF 2</span>
              <span class="ai-chip"><span class="pulse-node"></span> CONTACT VERIFICATION</span>
            </div>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 16px;">Institution Contact Details</h3>

            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">INSTITUTION NAME:</label>
              <input type="text" required placeholder="Central Bank / Islamic Bank / Neobank / Fund" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">CORPORATE EMAIL:</label>
              <input type="email" required placeholder="name@institution.com" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 24px;">
              <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">MANDATE OVERVIEW:</label>
              <textarea rows="4" placeholder="Briefly describe your objectives or RFP timeline..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: inherit;"></textarea>
            </div>

            <div style="display: flex; gap: 12px;">
              <button type="button" class="btn" onclick="toStep1()"><i class="fa-solid fa-arrow-left"></i> Back</button>
              <button type="submit" class="btn solid" style="flex-grow: 1; justify-content: center;">Submit Confidential RFP <i class="fa-solid fa-paper-plane"></i></button>
            </div>
          </div>

        </form>

        <div id="confirmMsg" style="display: none; text-align: center; padding: 40px 20px;">
          <div style="font-size: 40px; color: var(--blue); margin-bottom: 12px;"><i class="fa-solid fa-circle-check"></i></div>
          <h3 style="font-size: 24px; color: var(--blue-deep); margin-bottom: 8px;">RFP Received Successfully</h3>
          <p style="font-size: 15px; color: var(--ink-soft); margin-bottom: 24px;">A senior partner from our London or Toronto desk will review your mandate details and contact you within 24 hours.</p>
          <a href="{{ url('/') }}" class="btn solid">Return to Home</a>
        </div>

      </div>

      <!-- Right Column Office Details & Contact Hotline -->
      <div>
        
        <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80'); background-size: cover; margin-bottom: 24px; border:1px solid rgba(154,214,255,0.2); color:#fff;">
          <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> EXECUTIVE PRIORITY HOTLINE</span>
          <h3 style="font-size: 22px; margin-bottom: 14px; color:#fff;">Office of CEO &amp; COO</h3>
          <p style="margin-bottom: 12px; color:rgba(255,255,255,0.9);"><b>EMAIL:</b> advisory@ebdaaifc.com</p>
          <p style="margin-bottom: 12px; color:rgba(255,255,255,0.9);"><b>LONDON HQ:</b> +44 37 7573 136</p>
          <p style="margin-bottom: 0; color:rgba(255,255,255,0.9);"><b>TORONTO OFFICE:</b> +1 437 601 2101</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 16px;">
          <div style="background: var(--white); border: 1px solid var(--line); border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 10px 30px rgba(6,25,42,0.05);">
            <div class="office-card-img" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
              <div class="shade"></div>
            </div>
            <div style="padding: 18px 20px;">
              <h4 style="font-size: 16px; color: var(--blue-deep); margin-bottom: 4px; font-weight:600;">London Headquarters (UK)</h4>
              <p style="font-size: 13px; color: var(--ink-soft); margin: 0;">NEXTECK Limited, United Kingdom (Reg. 2024)</p>
            </div>
          </div>

          <div style="background: var(--white); border: 1px solid var(--line); border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 10px 30px rgba(6,25,42,0.05);">
            <div class="office-card-img" style="background-image: url('https://images.unsplash.com/photo-1507992744068-d421da646840?auto=format&fit=crop&w=800&q=80');">
              <div class="shade"></div>
            </div>
            <div style="padding: 18px 20px;">
              <h4 style="font-size: 16px; color: var(--blue-deep); margin-bottom: 4px; font-weight:600;">Toronto Office (Canada)</h4>
              <p style="font-size: 13px; color: var(--ink-soft); margin: 0;">3080 Yonge Street, Suite 6060, Toronto, ON M4N 3N1</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  function selectOpt(el) {
    document.querySelectorAll('.option-card').forEach(c => c.classList.remove('active'));
    el.classList.add('active');
    el.querySelector('input').checked = true;
  }
  function toStep2() {
    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'block';
  }
  function toStep1() {
    document.getElementById('step2').style.display = 'none';
    document.getElementById('step1').style.display = 'block';
  }
  function submitForm(e) {
    e.preventDefault();
    document.getElementById('rfpForm').style.display = 'none';
    document.getElementById('confirmMsg').style.display = 'block';
  }
</script>
@endpush
