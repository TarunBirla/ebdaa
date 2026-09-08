@extends('layouts.app')

@section('title', 'Research Article Details — Ebdaa IFC Insights')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 85px 0 65px;
  }
  .page-banner h1 { color: var(--white); font-size: 40px; margin-bottom: 12px; font-weight: 600; text-transform: capitalize; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 17px; max-width: 680px; }

  .article-body {
    max-width: 820px;
    margin: 0 auto;
    font-size: 16px;
    line-height: 1.8;
    color: var(--ink);
  }
  
  .takeaway-card {
    background: var(--pale);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    padding: 30px;
    margin: 36px 0;
  }
  .takeaway-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--line);
  }
  .takeaway-item:last-child {
    padding-bottom: 0;
    border-bottom: none;
  }
  .takeaway-num {
    font-family: var(--font-mono);
    font-size: 20px;
    font-weight: 700;
    color: var(--blue-deep);
    min-width: 30px;
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <span class="ai-chip on-dark" style="margin-bottom: 12px;"><span class="pulse-node"></span> RESEARCH REPORT</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <div style="display: flex; gap: 20px; font-size: 13.5px; color: rgba(255,255,255,0.9); margin-top: 12px; font-family: var(--font-mono);">
      <span><strong>AUTHOR:</strong> Dr. M. Al-Hassani &amp; Zafar Faridi</span>
      <span><strong>PUBLISHED:</strong> September 2026</span>
      <span><strong>REF:</strong> DOI-10.2026/EBD-881</span>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="wrap">
    <article class="article-body">
      
      <div class="blue-box-pale" style="margin-bottom: 32px;">
        <p style="font-size: 17px; font-weight: 500; color: var(--blue-deep); margin: 0; font-style: italic;">
          "The website and digital advisory infrastructure of an Islamic financial institution is no longer a brochure. It is the first Sharia scholar your prospect meets."
        </p>
      </div>

      <h2 style="font-size: 26px; color: var(--blue-deep); margin-bottom: 16px;">1. The Evolution of Sharia Governance in Digital Finance</h2>
      <p style="margin-bottom: 24px;">
        As Islamic banking institutions accelerate digital transformation across London, Toronto, and the GCC, traditional quarterly Sharia audits are proving insufficient for continuous, automated financial products. Real-time transaction validation is no longer optional.
      </p>

      <h2 style="font-size: 26px; color: var(--blue-deep); margin-bottom: 16px;">2. Leveraging IQMS™ for Automated Pre-Screening</h2>
      <p style="margin-bottom: 24px;">
        By indexing thousands of vetted Fatwas and AAOIFI standards, Intelligent Query Management Systems (IQMS™) allow compliance teams to pre-screen structured Wakala and Murabaha contracts in milliseconds, generating verified audit trails prior to final Supervisory Board signature.
      </p>

      <!-- Key Takeaways Box -->
      <div class="takeaway-card">
        <span class="ai-chip" style="margin-bottom: 16px;"><span class="pulse-node"></span> EXECUTIVE KEY TAKEAWAYS</span>
        <h3 style="font-size: 20px; color: var(--blue-deep); margin-bottom: 20px; font-weight:600;">Strategic Insights Summary</h3>
        
        <div style="display: flex; flex-direction: column; gap: 16px;">
          <div class="takeaway-item">
            <div class="takeaway-num">01</div>
            <div style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6;"><strong>Continuous Audit vs Quarterly Review:</strong> Digital Islamic financial products require real-time rule validation rather than retrospective quarterly audits.</div>
          </div>
          
          <div class="takeaway-item">
            <div class="takeaway-num">02</div>
            <div style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6;"><strong>Augmented Scholar Oversight:</strong> Intelligent Query Management (IQMS™) accelerates routine compliance, freeing scholars for complex structuring.</div>
          </div>

          <div class="takeaway-item">
            <div class="takeaway-num">03</div>
            <div style="font-size: 14.5px; color: var(--ink-soft); line-height: 1.6;"><strong>AAOIFI &amp; IFSB Interoperability:</strong> API-first Sharia rule engines ensure multi-jurisdictional compliance across London, DIFC, and ADGM.</div>
          </div>
        </div>
      </div>

      <!-- Blue Highlight Box -->
      <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.85), rgba(6,25,42,0.95)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80'); background-size: cover; margin: 36px 0; border: 1px solid rgba(154,214,255,0.2); color:#fff;">
        <span class="ai-chip on-dark" style="margin-bottom: 10px;"><span class="pulse-node"></span> RESEARCH CONCLUSION</span>
        <h3 style="font-size: 22px; margin-bottom: 10px; color:#fff;">Scholar Oversight Augmented by AI</h3>
        <p style="margin-bottom: 16px; color:rgba(255,255,255,0.9);">AI systems do not replace Sharia scholars; rather, they augment scholarly productivity by filtering routine queries, allowing senior scholars to focus on complex structuring challenges such as Green Sukuk tokenization.</p>
        <a href="{{ url('/speak-with-us') }}" class="btn ghost-light">Discuss Research Paper with Authors</a>
      </div>

      <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--line); padding-top: 24px; margin-top: 40px;">
        <a href="{{ url('/insights') }}" class="btn"><i class="fa-solid fa-arrow-left"></i> Back to Insights Hub</a>
        <a href="{{ url('/speak-with-us') }}" class="btn solid">Submit RFP Mandate</a>
      </div>

    </article>
  </div>
</section>

@endsection
