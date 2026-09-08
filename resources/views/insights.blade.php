@extends('layouts.app')

@section('title', 'Insights Hub & Thought Leadership — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 90px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .insights-grid-page {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }
  .insight-card-item {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
  }
  .insight-card-item:hover {
    transform: translateY(-6px);
    border-color: var(--blue);
    box-shadow: 0 12px 30px rgba(10, 61, 107, 0.12);
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
  .insight-card-thumb .shade { position: absolute; inset: 0; background: linear-gradient(0deg, rgba(4,18,30,0.45) 10%, rgba(4,18,30,0.05) 100%); }
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

<!-- Page Banner with Image Overlay -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">THOUGHT LEADERSHIP HUB</span>
    <h1>Insights that earn the second meeting</h1>
    <p>Rigorous research and policy whitepapers on Sharia governance, AI in compliance, Green Sukuk, and digital asset tokenization.</p>
  </div>
</section>

<!-- Insights Grid with Photographic Cards -->
<section class="section-pad">
  <div class="wrap">
    
    <div class="insights-grid-page">
      
      <!-- Article 1 -->
      <a href="{{ url('/insights/ai-in-sharia-governance') }}" class="insight-card-item">
        <div class="insight-card-thumb" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80');">
          <div class="shade"></div>
          <span style="position:relative; z-index:2; font-size:12px; font-weight:600; letter-spacing:0.1em; color:#9AD6FF; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">AI &amp; GOVERNANCE</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35;">How AI is reshaping real-time Sharia compliance &amp; governance</h3>
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
          <span style="position:relative; z-index:2; font-size:12px; font-weight:600; letter-spacing:0.1em; color:#9AD6FF; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">SUKUK &amp; TOKENIZATION</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35;">Green Sukuk and the tokenization of Islamic capital markets</h3>
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
          <span style="position:relative; z-index:2; font-size:12px; font-weight:600; letter-spacing:0.1em; color:#9AD6FF; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">NEOBANK POLICY</span>
        </div>
        <div class="insight-card-body">
          <div>
            <h3 style="font-size: 19px; color: var(--blue-deep); margin-bottom: 10px; line-height: 1.35;">Sharia governance frameworks for digital-native neobanks</h3>
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

<!-- Blue Highlight Section with Background Photo -->
<section class="section-pad" style="background: var(--pale);">
  <div class="wrap">
    <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1200&q=80'); background-size: cover;">
      <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">RESEARCH ADVISORY</span>
      <h3 style="font-size: 26px; margin-bottom: 14px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Commission a Custom Sharia Research Report</h3>
      <p style="font-size: 16px; margin-bottom: 20px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">Our senior scholars and strategy teams prepare bespoke whitepapers and regulatory impact assessments for central banks and financial institutions.</p>
      <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Commission Research Mandate</a>
    </div>
  </div>
</section>

@endsection
