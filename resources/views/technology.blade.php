@extends('layouts.app')

@section('title', 'Technology (IQMS & ILMS) — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  .sim-container {
    background: rgba(6, 25, 42, 0.95);
    border: 1px solid rgba(154, 214, 255, 0.25);
    border-radius: var(--radius-lg);
    padding: 40px;
    color: var(--white);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
  }
  .preset-btn {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    color: #fff;
    padding: 10px 18px;
    border-radius: 100px;
    font-size: 13px;
    font-family: var(--font-mono);
    transition: all 0.25s ease;
    cursor: pointer;
  }
  .preset-btn:hover, .preset-btn.active {
    background: var(--blue);
    border-color: var(--sky);
  }

  .sim-output {
    background: #020c16;
    border-radius: var(--radius-sm);
    padding: 24px;
    font-family: var(--font-mono);
    font-size: 13.5px;
    color: #9AD6FF;
    min-height: 220px;
    border: 1px solid rgba(154, 214, 255, 0.2);
    box-shadow: inset 0 2px 10px rgba(0,0,0,0.5);
  }

  .sim-line {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    opacity: 0;
    transform: translateY(4px);
    transition: all 0.3s ease;
  }
  .sim-line.visible { opacity: 1; transform: translateY(0); }

  .course-card {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: transform 0.35s ease;
    box-shadow: 0 10px 30px rgba(6,25,42,0.05);
  }
  .course-card:hover { transform: translateY(-6px); border-color: var(--blue); }
  .course-thumb { height: 140px; background-size: cover; background-position: center; position: relative; }
  .course-thumb .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.45) 0%, rgba(4,18,30,0) 100%); }
  .course-info { padding: 22px; }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> PROPRIETARY AI PLATFORM</span>
    <h1>IQMS™ and ILMS™ Technology Platform</h1>
    <p>Every boutique Sharia advisory claims technology expertise. Ebdaa IFC is one of the few that can put a live, proprietary AI advisory engine and a structured learning platform in front of a client.</p>
  </div>
</section>

<!-- Interactive IQMS Simulator -->
<section class="section-pad">
  <div class="wrap">
    <div class="section-head center">
      <span class="ai-chip"><span class="pulse-node"></span> LIVE INTERACTIVE TERMINAL</span>
      <h2 style="margin-top: 10px;">IQMS™ Intelligent Query Engine Simulator</h2>
      <p style="color: var(--ink-soft); font-size: 16px; margin-top: 8px;">
        Test how our AI engine parses complex Fiqh queries and generates automated compliance audit trails.
      </p>
    </div>

    <div class="sim-container">
      
      <div style="margin-bottom: 20px;">
        <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; color: var(--sky); margin-bottom: 10px; font-family: var(--font-mono);">SELECT QUERY SCENARIO:</label>
        <div style="display: flex; gap: 12px; flex-wrap: wrap;">
          <button class="preset-btn active" onclick="setQuery(0)">1. Green Sukuk Wakala Tokenization</button>
          <button class="preset-btn" onclick="setQuery(1)">2. Automated Commodity Murabaha Rollover</button>
          <button class="preset-btn" onclick="setQuery(2)">3. Neobank Smart Contract Audit</button>
        </div>
      </div>

      <div style="margin-bottom: 20px;">
        <input type="text" id="queryInput" value="Is Wakala-based Green Sukuk asset tokenization compliant under AAOIFI Standard No. 17?" style="width: 100%; padding: 14px 18px; background: rgba(255,255,255,0.06); border: 1px solid rgba(154,214,255,0.25); border-radius: var(--radius-sm); color: #fff; font-size: 14.5px; font-family: var(--font-mono);">
      </div>

      <div style="margin-bottom: 28px;">
        <button class="btn solid" id="runSimBtn" onclick="runSimulation()"><i class="fa-solid fa-play"></i> Run Live IQMS™ Compliance Audit</button>
      </div>

      <div class="sim-output" id="simOutput">
        <div style="color: rgba(255,255,255,0.5);">// Click "Run Live IQMS™ Compliance Audit" to initiate simulation...</div>
      </div>

    </div>
  </div>
</section>

<!-- ILMS Section -->
<section class="section-pad" id="ilms" style="background: var(--pale);">
  <div class="wrap">
    
    <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=80'); background-size: cover; margin-bottom: 40px; border: 1px solid rgba(154,214,255,0.2); color:#fff;">
      <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> ILMS™ CAPACITY BUILDING PLATFORM</span>
      <h3 style="font-size: 28px; margin-bottom: 14px; color:#fff;">Structured Digital Learning for Boards &amp; Staff</h3>
      <p style="font-size: 16px; margin-bottom: 20px; color:rgba(255,255,255,0.88);">A dedicated learning management system providing certified executive modules, board member orientation, and staff regulatory readiness programs under AAOIFI guidelines.</p>
      <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Request ILMS Demo Access</a>
    </div>

    <!-- ILMS Course Cards -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
      <div class="course-card">
        <div class="course-thumb" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
        </div>
        <div class="course-info">
          <h4 style="font-size: 17px; color: var(--blue-deep); margin-bottom: 8px;">Module 01: Board Governance</h4>
          <p style="font-size: 13.5px; color: var(--ink-soft); line-height: 1.6;">Executive orientation for bank directors and C-suite leaders on global Sharia compliance standards.</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-thumb" style="background-image: url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
        </div>
        <div class="course-info">
          <h4 style="font-size: 17px; color: var(--blue-deep); margin-bottom: 8px;">Module 02: Sukuk Masterclass</h4>
          <p style="font-size: 13.5px; color: var(--ink-soft); line-height: 1.6;">Practical guide to structuring Ijara, Murabaha, and Wakala Sukuk for capital desks.</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-thumb" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
        </div>
        <div class="course-info">
          <h4 style="font-size: 17px; color: var(--blue-deep); margin-bottom: 8px;">Module 03: Automated Sharia Audit</h4>
          <p style="font-size: 13.5px; color: var(--ink-soft); line-height: 1.6;">Training IT &amp; compliance teams to configure real-time Sharia rule validation APIs.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Compliance Matrix Visual Section -->
<section class="section-pad">
  <div class="wrap">
    <div class="section-head center">
      <span class="ai-chip"><span class="pulse-node"></span> REAL-TIME COMPLIANCE MATRIX</span>
      <h2 style="margin-top: 10px;">Structured Sharia Evaluation Architecture</h2>
      <p style="color: var(--ink-soft); font-size: 16px; margin-top: 8px;">
        Institutional risk mitigation benchmarked against AAOIFI and IFSB standard frameworks.
      </p>
    </div>

    <div style="background: var(--blue-deep); border-radius: var(--radius-lg); padding: 32px; color: #fff; border: 1px solid rgba(255,255,255,0.14);">
      <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 16px; font-family: var(--font-mono); font-size: 12.5px; color: var(--sky); border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 14px; margin-bottom: 14px;">
        <div>GOVERNANCE LAYER</div>
        <div>METHODOLOGY</div>
        <div>LATENCY</div>
        <div>VERIFICATION STATUS</div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 12px; font-size: 14px;">
        <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 16px; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 12px;">
          <div><b>AAOIFI Sharia Governance Review</b></div>
          <div style="color: rgba(255,255,255,0.85); font-family: var(--font-mono); font-size: 13px;">Standard #17 &amp; #59</div>
          <div style="color: var(--sky); font-family: var(--font-mono); font-size: 13px;">0.4ms API</div>
          <div><span style="background: rgba(74, 222, 128, 0.15); color: #4ADE80; padding: 4px 10px; border-radius: 100px; font-size: 12px; font-family: var(--font-mono); border: 1px solid rgba(74, 222, 128, 0.3);"><i class="fa-solid fa-check"></i> 100% COMPLIANT</span></div>
        </div>

        <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 16px; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 12px;">
          <div><b>Commodity Murabaha Asset Validation</b></div>
          <div style="color: rgba(255,255,255,0.85); font-family: var(--font-mono); font-size: 13px;">LME Warehouse Verification</div>
          <div style="color: var(--sky); font-family: var(--font-mono); font-size: 13px;">Real-time Node</div>
          <div><span style="background: rgba(74, 222, 128, 0.15); color: #4ADE80; padding: 4px 10px; border-radius: 100px; font-size: 12px; font-family: var(--font-mono); border: 1px solid rgba(74, 222, 128, 0.3);"><i class="fa-solid fa-check"></i> VERIFIED</span></div>
        </div>

        <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 16px; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 12px;">
          <div><b>Smart Contract Neobank Logic</b></div>
          <div style="color: rgba(255,255,255,0.85); font-family: var(--font-mono); font-size: 13px;">EVM Bytecode Pre-Audit</div>
          <div style="color: var(--sky); font-family: var(--font-mono); font-size: 13px;">1.2ms Sync</div>
          <div><span style="background: rgba(74, 222, 128, 0.15); color: #4ADE80; padding: 4px 10px; border-radius: 100px; font-size: 12px; font-family: var(--font-mono); border: 1px solid rgba(74, 222, 128, 0.3);"><i class="fa-solid fa-check"></i> PASSED AUDIT</span></div>
        </div>

        <div style="display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 16px; align-items: center;">
          <div><b>Sharia Supervisory Board Audit Trail</b></div>
          <div style="color: rgba(255,255,255,0.85); font-family: var(--font-mono); font-size: 13px;">Immutable Log #EBD-2026</div>
          <div style="color: var(--sky); font-family: var(--font-mono); font-size: 13px;">Instant Log</div>
          <div><span style="background: rgba(74, 222, 128, 0.15); color: #4ADE80; padding: 4px 10px; border-radius: 100px; font-size: 12px; font-family: var(--font-mono); border: 1px solid rgba(74, 222, 128, 0.3);"><i class="fa-solid fa-check"></i> SIGNED FATWA</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  const queries = [
    "Is Wakala-based Green Sukuk asset tokenization compliant under AAOIFI Standard No. 17?",
    "Can automated Commodity Murabaha Tawarruq rollovers be executed without physical delivery?",
    "How does Smart Contract auto-execution of Mudaraba profit ratios adhere to Sharia consent rules?"
  ];

  function setQuery(idx) {
    document.querySelectorAll('.preset-btn').forEach((btn, i) => btn.classList.toggle('active', i === idx));
    document.getElementById('queryInput').value = queries[idx];
  }

  function runSimulation() {
    const simOutput = document.getElementById('simOutput');
    const query = document.getElementById('queryInput').value;

    simOutput.innerHTML = `
      <div style="color: #5EC8FF; font-weight: bold;">[IQMS AI Engine v2.6] Processing Institutional Query...</div>
      <div style="color: rgba(255,255,255,0.7); margin: 4px 0 12px;">> "${query}"</div>
    `;

    const steps = [
      { text: "[1/4] Tokenizing NLP query & mapping to AAOIFI Standards #17, #59...", color: "#BFE3F8" },
      { text: "[2/4] Cross-referencing Fiqh database & Fatwa registry (3,420 precedent entries)...", color: "#9AD6FF" },
      { text: "[3/4] Validating asset ownership transfer requirements & Sharia Board audit trail...", color: "#FFF" },
      { text: "[4/4] RESULT: COMPLIANT (Passes AAOIFI Standard #17 Criteria). Audit ID #EBD-2026-904 verified by Dr. Al-Hassani.", color: "#4ADE80" }
    ];

    steps.forEach((step, i) => {
      setTimeout(() => {
        const line = document.createElement('div');
        line.className = 'sim-line visible';
        line.style.color = step.color;
        line.innerHTML = `<i class="fa-solid fa-chevron-right" style="font-size: 11px;"></i> ${step.text}`;
        simOutput.appendChild(line);
      }, (i + 1) * 650);
    });
  }
</script>
@endpush
