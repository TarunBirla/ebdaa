@extends('layouts.app')

@section('title', 'Insights Hub & Thought Leadership — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.65) 0%, rgba(10,61,107,0.45) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  /* Research Filter Chips */
  .filter-row {
    display: flex;
    gap: 10px;
    margin-bottom: 36px;
    flex-wrap: wrap;
  }
  .filter-chip {
    padding: 8px 18px;
    background: rgba(6,25,42,0.06);
    border: 1px solid var(--line);
    border-radius: 100px;
    font-size: 12.5px;
    font-family: var(--font-mono);
    color: var(--ink-soft);
    cursor: pointer;
    transition: all 0.25s ease;
  }
  .filter-chip.active, .filter-chip:hover {
    background: var(--blue-deep);
    color: #fff;
    border-color: var(--blue-deep);
  }

  .insights-grid-page {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }
  .insight-card-item {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
    box-shadow: 0 10px 30px rgba(6,25,42,0.05);
  }
  .insight-card-item:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 16px 40px rgba(10, 61, 107, 0.15);
  }
  .insight-card-thumb {
    aspect-ratio: 16/10;
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 20px;
    display: flex;
    align-items: flex-end;
    color: #fff;
  }
  .insight-card-thumb .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.55) 10%, rgba(4,18,30,0.1) 100%); }
  .insight-card-body {
    padding: 24px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  @media(max-width: 980px) {
    .insights-grid-page { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 16px;"><span class="pulse-node"></span> RESEARCH INTELLIGENCE</span>
    <h1>Financial intelligence &amp; scholarly research hub</h1>
    <p>Rigorous research and policy whitepapers on Sharia governance, AI in compliance, Green Sukuk, and digital asset tokenization.</p>
  </div>
</section>

<!-- Insights Grid -->
<section class="section-pad">
  <div class="wrap">
    
    <!-- Filter Chips -->
    <div class="filter-row">
      <span class="filter-chip active">ALL RESEARCH</span>
      <span class="filter-chip">AI &amp; GOVERNANCE</span>
      <span class="filter-chip">SUKUK TOKENIZATION</span>
      <span class="filter-chip">NEOBANK POLICY</span>
      <span class="filter-chip">AAOIFI AUDIT</span>
    </div>

    <div class="insights-grid-page">
      
      <!-- Article 1 -->
      <a href="{{ url('/insights/ai-in-sharia-governance') }}" class="insight-card-item">
        <div class="insight-card-thumb" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span style="position:relative; z-index:2; font-size:11px; font-weight:600; letter-spacing:0.08em; color:#9AD6FF; font-family:var(--font-mono);">AI &amp; GOVERNANCE</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35; font-weight:600;">How AI is reshaping real-time Sharia compliance &amp; governance</h3>
            <p style="font-size: 14px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 16px;">Analyzing the convergence of automated compliance query processing and scholar oversight under AAOIFI standards.</p>
          </div>
          <div style="border-top: 1px solid var(--line); padding-top: 14px; display: flex; justify-content: space-between; font-size: 13px; color: var(--blue); font-weight: 600;">
            <span>Dr. M. Al-Hassani</span>
            <span>Read Details <i class="fa-solid fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- Article 2 -->
      <a href="{{ url('/insights/green-sukuk-tokenization') }}" class="insight-card-item">
        <div class="insight-card-thumb" style="background-image: url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span style="position:relative; z-index:2; font-size:11px; font-weight:600; letter-spacing:0.08em; color:#9AD6FF; font-family:var(--font-mono);">SUKUK &amp; TOKENIZATION</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35; font-weight:600;">Green Sukuk and the tokenization of Islamic capital markets</h3>
            <p style="font-size: 14px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 16px;">Structuring ESG-aligned Islamic capital market instruments across London, DIFC, and ADGM jurisdictions.</p>
          </div>
          <div style="border-top: 1px solid var(--line); padding-top: 14px; display: flex; justify-content: space-between; font-size: 13px; color: var(--blue); font-weight: 600;">
            <span>Mohammed Nasar</span>
            <span>Read Details <i class="fa-solid fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- Article 3 -->
      <a href="{{ url('/insights/digital-banking-sharia-framework') }}" class="insight-card-item">
        <div class="insight-card-thumb" style="background-image: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span style="position:relative; z-index:2; font-size:11px; font-weight:600; letter-spacing:0.08em; color:#9AD6FF; font-family:var(--font-mono);">NEOBANK POLICY</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35; font-weight:600;">Sharia governance frameworks for digital-native neobanks</h3>
            <p style="font-size: 14px; color: var(--ink-soft); line-height: 1.6; margin-bottom: 16px;">Key architectural requirements for core digital banking platforms to maintain continuous Sharia compliance.</p>
          </div>
          <div style="border-top: 1px solid var(--line); padding-top: 14px; display: flex; justify-content: space-between; font-size: 13px; color: var(--blue); font-weight: 600;">
            <span>Zafar Faridi</span>
            <span>Read Details <i class="fa-solid fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- Research Mandate Banner -->
<section class="section-pad" style="background: var(--pale);">
  <div class="wrap">
    <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1200&q=80'); background-size: cover; border: 1px solid rgba(154,214,255,0.2); color:#fff;">
      <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> RESEARCH ADVISORY MANDATE</span>
      <h3 style="font-size: 26px; margin-bottom: 14px; color:#fff;">Commission a Custom Sharia Research Report</h3>
      <p style="font-size: 16px; margin-bottom: 20px; color:rgba(255,255,255,0.88);">Our senior scholars and strategy teams prepare bespoke whitepapers and regulatory impact assessments for central banks and financial institutions.</p>
      <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Commission Research Mandate</a>
    </div>
  </div>
</section>

@endsection
