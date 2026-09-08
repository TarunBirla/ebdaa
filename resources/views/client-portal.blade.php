@extends('layouts.app')

@section('title', 'Client Portal & Sharia Certificate Lookup — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.35) 0%, rgba(10,61,107,0.25) 100%), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 80px 0;
  }
  .page-banner h1 { color: var(--white); font-size: 42px; margin-bottom: 16px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); }
  .page-banner p { color: rgba(255,255,255,0.95); font-size: 18px; max-width: 680px; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }

  .portal-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
  }
  .portal-card-box {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: 36px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
  }

  .result-box {
    display: none;
    margin-top: 20px;
    padding: 20px;
    background: var(--pale);
    border-left: 4px solid var(--blue);
    border-radius: var(--radius);
    font-size: 14px;
  }

  @media(max-width: 980px) {
    .portal-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner with Image Overlay -->
<section class="page-banner">
  <div class="wrap">
    <span class="eyebrow" style="color:var(--sky); text-shadow: 0 1px 4px rgba(0,0,0,0.6);">RETAINED CLIENT ACCESS</span>
    <h1>Client Portal &amp; Certificate Verification</h1>
    <p>Access active mandate tracking, download signed Sharia Supervisory Fatwas, and verify public certificate authenticity online.</p>
  </div>
</section>

<!-- Portal Content Grid -->
<section class="section-pad">
  <div class="wrap">
    
    <div class="portal-grid">
      
      <!-- Public Certificate Verification -->
      <div class="portal-card-box">
        <span class="eyebrow">PUBLIC LOOKUP</span>
        <h2 style="font-size: 24px; color: var(--blue-deep); margin-bottom: 12px;">Sharia Fatwa Authenticity Lookup</h2>
        <p style="font-size: 14px; color: var(--ink-soft); margin-bottom: 20px;">Enter any Ebdaa IFC Fatwa Reference Number to verify its authenticity and scholar signatory list.</p>

        <div style="margin-bottom: 18px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Fatwa Ref / Certificate ID:</label>
          <input type="text" id="certInput" value="FATWA-2026-UK-881" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
        </div>

        <button class="btn solid" style="width: 100%;" onclick="verifyCert()"><i class="fa-solid fa-shield-halved"></i> Verify Certificate Authenticity</button>

        <div class="result-box" id="resultBox">
          <div style="font-weight: 700; color: var(--blue-deep); margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: var(--blue);"></i> CERTIFICATE VERIFIED AUTHENTIC</div>
          <div><b>Issued To:</b> Global Islamic Banking Corp (London)</div>
          <div><b>Mandate:</b> Green Sukuk Wakala Structure</div>
          <div><b>Lead Scholar:</b> Dr. Mohammed Al-Hassani</div>
          <div><b>Status:</b> Active &amp; Valid for 2026</div>
        </div>
      </div>

      <!-- Retained Client Login -->
      <div class="portal-card-box" style="background: var(--pale);">
        <span class="eyebrow">SECURE SIGN-IN</span>
        <h2 style="font-size: 24px; color: var(--blue-deep); margin-bottom: 12px;">Institutional Client Sign-In</h2>
        <p style="font-size: 14px; color: var(--ink-soft); margin-bottom: 20px;">Sign in with your institutional credentials to manage active mandates and track IQMS support tickets.</p>

        <form onsubmit="event.preventDefault(); alert('Demo Client Portal: Logged in successfully.');">
          <div style="margin-bottom: 16px;">
            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Institutional Email / Account ID:</label>
            <input type="email" required placeholder="mandate@institution.com" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
          </div>

          <div style="margin-bottom: 24px;">
            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--ink); margin-bottom: 6px;">Security Token / Password:</label>
            <input type="password" required value="••••••••••••" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius); font-size: 14.5px; font-family: inherit;">
          </div>

          <button type="submit" class="btn solid" style="width: 100%;"><i class="fa-solid fa-lock"></i> Access Client Dashboard</button>
        </form>
      </div>

    </div>

  </div>
</section>

@endsection

@push('scripts')
<script>
  function verifyCert() {
    const val = document.getElementById('certInput').value;
    const box = document.getElementById('resultBox');
    if(val.trim() !== '') {
      box.style.display = 'block';
    } else {
      alert('Please enter a valid certificate reference number.');
    }
  }
</script>
@endpush
