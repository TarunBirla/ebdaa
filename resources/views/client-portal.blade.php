@extends('layouts.app')

@section('title', 'Client Portal & Sharia Certificate Lookup — Ebdaa IFC')

@push('styles')
<style>
  .page-banner {
    background: linear-gradient(135deg, rgba(6,25,42,0.7) 0%, rgba(10,61,107,0.5) 100%), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: var(--white);
    padding: 100px 0 80px;
  }
  .page-banner h1 { color: var(--white); font-size: 44px; margin-bottom: 16px; font-weight: 600; letter-spacing: -0.02em; }
  .page-banner p { color: rgba(255,255,255,0.9); font-size: 18px; max-width: 720px; line-height: 1.6; }

  .portal-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
  }
  .portal-card-box {
    background: var(--white);
    border: 1px solid var(--line);
    border-radius: var(--radius-lg);
    padding: 36px;
    box-shadow: 0 10px 30px rgba(6,25,42,0.05);
  }

  .result-box {
    display: none;
    margin-top: 20px;
    padding: 20px;
    background: rgba(22, 113, 196, 0.08);
    border-left: 4px solid var(--blue);
    border-radius: var(--radius-sm);
    font-size: 14px;
    font-family: var(--font-mono);
  }

  @media(max-width: 980px) {
    .portal-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush

@section('content')

<!-- Page Banner -->
<section class="page-banner">
  <div class="wrap">
    <div style="display: flex; align-items: center; justify-content: space-between; gap: 16px; flex-wrap: wrap; margin-bottom: 16px;">
      <span class="ai-chip on-dark"><span class="pulse-node"></span> RETAINED CLIENT ACCESS</span>
      <span class="ai-chip on-dark" style="border-color:#5FE39B; color:#5FE39B;"><span class="pulse-node" style="background:#5FE39B;"></span> ENCRYPTED MANDATE ENVIRONMENT</span>
    </div>
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
        <span class="ai-chip" style="margin-bottom: 12px;"><span class="pulse-node"></span> PUBLIC VERIFICATION ENGINE</span>
        <h2 style="font-size: 24px; color: var(--blue-deep); margin-bottom: 12px;">Sharia Fatwa Authenticity Lookup</h2>
        <p style="font-size: 14px; color: var(--ink-soft); margin-bottom: 20px;">Enter any Ebdaa IFC Fatwa Reference Number to verify its authenticity and scholar signatory list.</p>

        <div style="margin-bottom: 18px;">
          <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">FATWA REF / CERTIFICATE ID:</label>
          <input type="text" id="certInput" value="FATWA-2026-UK-881" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: var(--font-mono);">
        </div>

        <button class="btn solid" style="width: 100%; justify-content:center;" onclick="verifyCert()"><i class="fa-solid fa-shield-halved"></i> Verify Certificate Authenticity</button>

        <div class="result-box" id="resultBox">
          <div style="font-weight: 700; color: var(--blue-deep); margin-bottom: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--blue);"></i> CERTIFICATE VERIFIED AUTHENTIC</div>
          <div><b>ISSUED TO:</b> Global Islamic Banking Corp (London)</div>
          <div><b>MANDATE:</b> Green Sukuk Wakala Structure</div>
          <div><b>SCHOLAR BOARD:</b> Dr. Mohammed Al-Hassani &amp; Panel</div>
          <div><b>STATUS:</b> Active &amp; Valid for 2026</div>
        </div>
      </div>

      <!-- Retained Client Login -->
      <div class="portal-card-box" style="background: var(--pale);">
        <span class="ai-chip" style="margin-bottom: 12px;"><span class="pulse-node"></span> SECURE INSTITUTIONAL LOGIN</span>
        <h2 style="font-size: 24px; color: var(--blue-deep); margin-bottom: 12px;">Institutional Client Sign-In</h2>
        <p style="font-size: 14px; color: var(--ink-soft); margin-bottom: 20px;">Sign in with your institutional credentials to manage active mandates and track IQMS support tickets.</p>

        <form onsubmit="event.preventDefault(); alert('Demo Client Portal: Logged in successfully.');">
          <div style="margin-bottom: 16px;">
            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">INSTITUTIONAL EMAIL / ACCOUNT ID:</label>
            <input type="email" required placeholder="mandate@institution.com" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: var(--font-mono);">
          </div>

          <div style="margin-bottom: 24px;">
            <label style="display: block; font-size: 12px; font-weight: 600; color: var(--ink); margin-bottom: 6px; font-family: var(--font-mono);">SECURITY TOKEN / PASSWORD:</label>
            <input type="password" required value="••••••••••••" style="width: 100%; padding: 12px 16px; border: 1px solid var(--line); border-radius: var(--radius-sm); font-size: 14.5px; font-family: var(--font-mono);">
          </div>

          <button type="submit" class="btn solid" style="width: 100%; justify-content:center;"><i class="fa-solid fa-lock"></i> Access Client Dashboard</button>
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
