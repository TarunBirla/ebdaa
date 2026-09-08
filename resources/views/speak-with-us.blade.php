@extends('layouts.app')

@section('title', 'Speak With Us / Submit RFP — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 80px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .rfp-grid-layout {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 40px;
    align-items: start;
  }

  .rfp-form-box {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: 36px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
  }

  .option-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
    margin-bottom: 20px;
  }
  .option-card {
    border: 1.5px solid var(--line);
    border-radius: var(--radius);
    padding: 16px;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  .option-card.active, .option-card:hover {
    border-color: var(--blue);
    background: var(--pale);
  }
  .option-card input { display: none; }
  .option-card h4 { font-size: 15px; color: var(--blue-deep); margin-bottom: 4px; }
  .option-card p { font-size: 12.5px; color: var(--ink-soft); margin: 0; }

  .office-card-img {
    height: 120px;
    background-size: cover;
    background-position: center;
    position: relative;
    border-radius: var(--radius) var(--radius) 0 0;
  }
  .office-card-img .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.3) 0%, rgba(4,18,30,0) 100%); }

  @media(max-width: 980px) {
    .rfp-grid-layout { grid-template-columns: 1fr; }
    .option-card-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner with Image Overlay -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">CONVERTING INTEREST INTO MANDATES</span>
    <h1>Speak with an advisor / Submit an RFP</h1>
    <p>Initiate a confidential discussion with our senior Sharia advisors and enterprise strategists across London and Toronto.</p>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <div class="rfp-grid-layout">
      
      <!-- Multi-step Form Box -->
      <div class="rfp-form-box">
        
        <form id="rfpForm" onsubmit="submitForm(event)">
          
          <div id="step1">
            <span class="eyebrow">STEP 1 OF 2</span>
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
              <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Geographic Scope / Jurisdiction:</label>
              <select name="jurisdiction" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
                <option value="London_UK">United Kingdom &amp; Europe (London HQ)</option>
                <option value="GCC">GCC &amp; Middle East (UAE / KSA / Qatar)</option>
                <option value="Toronto_CA">North America (Toronto Office)</option>
                <option value="Global">Global Cross-Border</option>
              </select>
            </div>

            <button type="button" class="btn solid" style="width: 100%; justify-content: center;" onclick="toStep2()">Next: Contact Details <i class="fa-solid fa-arrow-right"></i></button>
          </div>

          <div id="step2" style="display: none;">
            <span class="eyebrow">STEP 2 OF 2</span>
            <h3 style="font-size: 22px; color: var(--blue-deep); margin-bottom: 16px;">Institution Contact Details</h3>

            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Institution Name:</label>
              <input type="text" required placeholder="Central Bank / Islamic Bank / Neobank / Fund" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Corporate Email:</label>
              <input type="email" required placeholder="name@institution.com" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 24px;">
              <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Mandate Overview:</label>
              <textarea rows="4" placeholder="Briefly describe your objectives or RFP timeline..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;"></textarea>
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

      <!-- Right Blue Box Highlight & Office Details with Photos -->
      <div>
        
        <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80'); background-size: cover; margin-bottom: 24px;">
          <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">DIRECT CONTACT</span>
          <h3 style="font-size: 22px; margin-bottom: 14px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Office of CEO &amp; COO</h3>
          <p style="margin-bottom: 12px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);"><b>Email:</b> advisory@ebdaaifc.com</p>
          <p style="margin-bottom: 12px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);"><b>London HQ:</b> +44 37 7573 136</p>
          <p style="margin-bottom: 0; text-shadow: 0 1px 3px rgba(0,0,0,0.6);"><b>Toronto Office:</b> +1 437 601 2101</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 16px;">
          <div style="background: var(--white); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden;">
            <div class="office-card-img" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
              <div class="shade"></div>
            </div>
            <div style="padding: 18px 20px;">
              <h4 style="font-size: 16px; color: var(--blue-deep); margin-bottom: 4px;">London Headquarters (UK)</h4>
              <p style="font-size: 13px; color: var(--ink-soft); margin: 0;">NEXTECK Limited, United Kingdom (Reg. 2024)</p>
            </div>
          </div>

          <div style="background: var(--white); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden;">
            <div class="office-card-img" style="background-image: url('https://images.unsplash.com/photo-1507992744068-d421da646840?auto=format&fit=crop&w=800&q=80');">
              <div class="shade"></div>
            </div>
            <div style="padding: 18px 20px;">
              <h4 style="font-size: 16px; color: var(--blue-deep); margin-bottom: 4px;">Toronto Office (Canada)</h4>
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
