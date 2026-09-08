@extends('layouts.app')

@section('title', 'Research Article Details — Ebdaa IFC Insights')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 80px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 38px; margin-bottom: 12px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 17px; max-width: 640px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .article-body {
    max-width: 820px;
    margin: 0 auto;
    font-size: 16px;
    line-height: 1.8;
    color: var(--ink);
  }
</style>
@endpush

@section('content')

<!-- Page Banner with Image Overlay -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">RESEARCH &amp; THOUGHT LEADERSHIP</span>
    <h1>{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
    <div style="display: flex; gap: 20px; font-size: 14px; color: rgba(255,255,255,0.95); margin-top: 10px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">
      <span><strong>Author:</strong> Dr. M. Al-Hassani &amp; Zafar Faridi</span>
      <span><strong>Published:</strong> September 2026</span>
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

      <!-- Blue Highlight Box with Background Image -->
      <div class="blue-box" style="background: linear-gradient(135deg, rgba(10,61,107,0.45), rgba(22,113,196,0.35)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80'); background-size: cover; margin: 36px 0;">
        <span class="eyebrow" style="color: var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">RESEARCH CONCLUSION</span>
        <h3 style="font-size: 22px; margin-bottom: 10px; text-shadow: 0 1px 4px rgba(0,0,0,0.6);">Scholar Oversight Augmented by AI</h3>
        <p style="margin-bottom: 16px; text-shadow: 0 1px 3px rgba(0,0,0,0.6);">AI systems do not replace Sharia scholars; rather, they augment scholarly productivity by filtering routine queries, allowing senior scholars to focus on complex structuring challenges such as Green Sukuk tokenization.</p>
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
