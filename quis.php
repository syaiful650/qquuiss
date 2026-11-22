<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Penjelajah Sejarah Indonesia — Ekspedisi Kerajaan Nusantara</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Cinzel, Playfair Display & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind Custom Theme -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            royal: ['Cinzel', 'serif'],
            serifDisplay: ['Playfair Display', 'serif'],
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          },
          colors: {
            nusantara: {
              dark: '#071915',
              emerald: '#0C2B24',
              teal: '#144439',
              gold: '#E5B94C',
              goldLight: '#F9E090',
              goldDark: '#A67C1E',
              parchment: '#FAF5E8',
            }
          },
          animation: {
            'float': 'float 5s ease-in-out infinite',
            'pulse-ring': 'pulseRing 2.2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            'dash-flow': 'dashFlow 26s linear infinite',
            'spin-slow': 'spin 45s linear infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-8px)' },
            },
            pulseRing: {
              '0%, 100%': { transform: 'scale(1)', opacity: '0.95' },
              '50%': { transform: 'scale(1.45)', opacity: '0.35' },
            },
            dashFlow: {
              '0%': { strokeDashoffset: '1000' },
              '100%': { strokeDashoffset: '0' },
            }
          }
        }
      }
    }
  </script>

  <style>
    /* Luxury Nusantara Night Theme */
    body {
      background-color: #071915;
      color: #FAF5E8;
      overflow-x: hidden;
      background-image:
        radial-gradient(circle at 18% 18%, rgba(229, 185, 76, 0.12) 0%, transparent 45%),
        radial-gradient(circle at 82% 82%, rgba(20, 68, 57, 0.6) 0%, transparent 50%),
        linear-gradient(155deg, #05120F 0%, #09221C 50%, #071915 100%);
    }

    .glass-royal {
      background: rgba(12, 43, 36, 0.74);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(229, 185, 76, 0.32);
      box-shadow: 0 22px 55px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(249, 224, 144, 0.18);
    }

    .glass-parchment {
      background: linear-gradient(150deg, rgba(250, 245, 232, 0.98), rgba(238, 227, 200, 0.95));
      color: #162420;
      border: 1.5px solid rgba(229, 185, 76, 0.75);
      box-shadow: 0 20px 45px rgba(0, 0, 0, 0.55);
    }

    .gold-gradient-text {
      background: linear-gradient(135deg, #FFF0B3 0%, #E5B94C 50%, #B38520 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .btn-royal {
      background: linear-gradient(135deg, #F3CE68 0%, #D9A736 55%, #A67C1E 100%);
      color: #071915;
      box-shadow: 0 10px 28px rgba(229, 185, 76, 0.38), inset 0 1px 1px rgba(255, 255, 255, 0.6);
      transition: all 0.25s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .btn-royal:hover {
      transform: translateY(-2px) scale(1.015);
      box-shadow: 0 14px 36px rgba(229, 185, 76, 0.58), inset 0 1px 1px rgba(255, 255, 255, 0.8);
      filter: brightness(1.05);
    }

    .btn-royal:active {
      transform: translateY(1px) scale(0.99);
    }

    /* Interactive SVG Archipelago Styling */
    .island-shape {
      fill: url(#islandGrad);
      stroke: #E5B94C;
      stroke-width: 1.4;
      stroke-opacity: 0.75;
      filter: drop-shadow(0 8px 14px rgba(0, 0, 0, 0.65));
      transition: fill 0.3s ease, stroke 0.3s ease;
    }

    .island-shape:hover {
      fill: url(#islandHoverGrad);
      stroke: #FFF0B3;
    }

    /* Kingdom Markers with High Clickability */
    .kingdom-marker {
      cursor: pointer;
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .kingdom-marker:hover {
      transform: scale(1.16);
    }

    .kingdom-marker.active .marker-core {
      fill: #FFFFFF;
      stroke: #E5B94C;
      stroke-width: 3.5;
    }

    .kingdom-marker.active .marker-pill-bg {
      fill: #E5B94C;
      stroke: #FFFFFF;
    }

    .kingdom-marker.active .marker-pill-text {
      fill: #071915;
    }

    /* Card Flip / Pop Update Animation */
    @keyframes cardPop {
      0% { opacity: 0.35; transform: translateY(10px) scale(0.98); }
      100% { opacity: 1; transform: translateY(0) scale(1); }
    }
    .animate-card-pop {
      animation: cardPop 0.38s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Shake Animation */
    @keyframes shakeX {
      0%, 100% { transform: translateX(0); }
      20%, 60% { transform: translateX(-8px); }
      40%, 80% { transform: translateX(8px); }
    }
    .animate-shake {
      animation: shakeX 0.45s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
    }

    /* Screen Transition */
    .screen-enter {
      animation: fadeSlideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(16px) scale(0.985); }
      to { opacity: 1; transform: translateY(0) scale(1); }
    }
  </style>
</head>
<body class="min-h-screen font-sans antialiased selection:bg-nusantara-gold selection:text-nusantara-dark relative">

  <!-- Background Ambient Gold Dust Canvas (Pointer Events None so NEVER blocks clicks) -->
  <canvas id="ambientCanvas" class="fixed inset-0 pointer-events-none z-0"></canvas>

  <!-- Celebration Confetti Canvas -->
  <canvas id="confettiCanvas" class="fixed inset-0 pointer-events-none z-50"></canvas>

  <!-- FULLSCREEN MAIN CONTAINER (NO TOP HEADER BAR) -->
  <main class="relative z-20 w-full max-w-7xl mx-auto px-4 sm:px-6 py-4 sm:py-7 min-h-screen flex flex-col justify-center">

    <!-- =====================================================================
         TAHAP 1: PETA INTERAKTIF KERAJAAN NUSANTARA (SEBELUM INPUT NAMA)
    ====================================================================== -->
    <section id="screenMap" class="screen-enter w-full">
      <!-- Compact Title Header Inside Main Stage -->
      <div class="text-center max-w-3xl mx-auto mb-4 sm:mb-6">
        <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-nusantara-gold/15 border border-nusantara-gold/40 text-nusantara-goldLight text-[11px] sm:text-xs font-bold tracking-widest uppercase mb-2">
          <span>✦</span> Penjelajah Sejarah Indonesia <span>✦</span>
        </span>
        <h1 class="font-royal text-2xl sm:text-4xl lg:text-[40px] font-extrabold leading-tight text-nusantara-parchment">
          Peta Kejayaan <span class="gold-gradient-text">Kerajaan Nusantara</span>
        </h1>
        <p class="text-xs sm:text-sm text-nusantara-parchment/80 mt-1.5 max-w-2xl mx-auto">
          Klik <strong class="text-nusantara-goldLight">tombol kerajaan</strong> atau <strong class="text-nusantara-goldLight">titik emas pada peta</strong> untuk melihat zoom wilayah &amp; sejarahnya sebelum memulai kuis.
        </p>
      </div>

      <!-- Interactive Map & Detail Panel Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

        <!-- Left Column (8 Cols): Interactive Zoomable SVG Map & Kingdom Tabs -->
        <div class="lg:col-span-8 glass-royal rounded-3xl p-3.5 sm:p-5 relative flex flex-col justify-between z-20">
          
          <!-- Map Controls Bar (Zoom Status + Reset Zoom Button) -->
          <div class="flex flex-wrap items-center justify-between gap-2 pb-2.5 mb-2 border-b border-nusantara-gold/25 relative z-30">
            <div class="flex items-center gap-2 text-xs font-semibold text-nusantara-goldLight">
              <span class="w-2.5 h-2.5 rounded-full bg-amber-400 animate-ping"></span>
              <span id="mapFocusLabel">Tampilan Seluruh Nusantara</span>
            </div>

            <button 
              type="button"
              id="btnResetZoom"
              onclick="resetMapZoom()" 
              class="px-3 py-1.5 rounded-xl bg-nusantara-dark/90 hover:bg-nusantara-gold hover:text-nusantara-dark border border-nusantara-gold/50 text-nusantara-goldLight text-xs font-bold transition flex items-center gap-1.5 cursor-pointer shadow-md">
              <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Reset Zoom Peta</span>
            </button>
          </div>

          <!-- Responsive SVG Archipelago Map Viewport -->
          <div class="relative w-full aspect-[16/9] sm:aspect-[18/9] rounded-2xl overflow-hidden bg-[#04110E]/80 border border-nusantara-gold/20 my-auto select-none z-20">
            <!-- Decorative Rotating Compass Watermark (Pointer-Events None) -->
            <svg class="absolute -right-10 -bottom-10 w-48 h-48 text-nusantara-gold/10 animate-spin-slow pointer-events-none" viewBox="0 0 100 100" fill="none" stroke="currentColor">
              <circle cx="50" cy="50" r="45" stroke-width="0.8" stroke-dasharray="3 3"/>
              <polygon points="50,2 56,44 98,50 56,56 50,98 44,56 2,50 44,44" stroke-width="0.8"/>
            </svg>

            <svg id="nusantaraSvgMap" viewBox="0 0 920 440" class="w-full h-full cursor-grab active:cursor-grabbing">
              <defs>
                <linearGradient id="islandGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#226B5B" />
                  <stop offset="50%" stop-color="#164B40" />
                  <stop offset="100%" stop-color="#0D3129" />
                </linearGradient>
                <linearGradient id="islandHoverGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#2E8774" />
                  <stop offset="100%" stop-color="#1A594B" />
                </linearGradient>
                <radialGradient id="markerGlow">
                  <stop offset="0%" stop-color="#FDE047" stop-opacity="0.95" />
                  <stop offset="55%" stop-color="#E5B94C" stop-opacity="0.45" />
                  <stop offset="100%" stop-color="#E5B94C" stop-opacity="0" />
                </radialGradient>
              </defs>

              <!-- Maritime Coordinate Grid -->
              <g stroke="rgba(229, 185, 76, 0.13)" stroke-width="0.8" stroke-dasharray="4 6">
                <line x1="0" y1="95" x2="920" y2="95" />
                <line x1="0" y1="215" x2="920" y2="215" />
                <line x1="0" y1="335" x2="920" y2="335" />
                <line x1="180" y1="0" x2="180" y2="440" />
                <line x1="380" y1="0" x2="380" y2="440" />
                <line x1="580" y1="0" x2="580" y2="440" />
                <line x1="780" y1="0" x2="780" y2="440" />
              </g>
              <text x="24" y="210" fill="rgba(249, 224, 144, 0.45)" font-size="9" font-family="Plus Jakarta Sans" letter-spacing="2">GARIS KHATULISTIWA (0°)</text>

              <!-- ISLANDS OF INDONESIA -->
              <!-- Sumatra -->
              <path class="island-shape" d="M 55,68 L 88,82 L 130,122 L 178,168 L 218,215 L 235,252 L 216,272 L 182,248 L 142,205 L 98,158 L 62,108 Z" />
              <circle class="island-shape" cx="242" cy="226" r="8" />
              <circle class="island-shape" cx="264" cy="238" r="6" />

              <!-- Jawa -->
              <path class="island-shape" d="M 244,288 L 296,292 L 358,302 L 418,312 L 452,318 L 448,334 L 395,332 L 328,324 L 262,312 L 238,300 Z" />

              <!-- Bali & Nusa Tenggara -->
              <path class="island-shape" d="M 462,322 L 482,324 L 480,335 L 460,333 Z" />
              <path class="island-shape" d="M 492,325 L 522,326 L 520,336 L 490,335 Z" />
              <path class="island-shape" d="M 532,328 L 578,330 L 575,340 L 530,338 Z" />
              <path class="island-shape" d="M 588,344 L 632,334 L 636,348 L 590,356 Z" />

              <!-- Kalimantan -->
              <path class="island-shape" d="M 315,120 L 368,85 L 426,96 L 465,134 L 455,188 L 432,232 L 378,242 L 322,226 L 302,182 Z" />

              <!-- Sulawesi -->
              <path class="island-shape" d="M 505,152 L 568,144 L 585,155 L 542,168 L 544,195 L 584,196 L 576,214 L 542,212 L 548,254 L 530,262 L 516,225 L 498,256 L 482,248 L 496,196 Z" />

              <!-- Maluku & Halmahera -->
              <path class="island-shape" d="M 632,135 L 656,128 L 664,155 L 648,176 L 634,160 Z" />
              <path class="island-shape" d="M 628,218 L 674,215 L 676,230 L 626,232 Z" />

              <!-- Papua -->
              <path class="island-shape" d="M 712,176 L 756,168 L 788,195 L 868,212 L 872,296 L 818,292 L 782,258 L 742,242 L 718,212 Z" />

              <!-- Animated Maritime Spice Routes -->
              <g fill="none" stroke="#F9E090" stroke-width="1.6" stroke-dasharray="6 6" opacity="0.65" class="animate-dash-flow pointer-events-none">
                <path d="M 196,232 Q 250,275 398,316" />
                <path d="M 398,316 Q 465,295 504,248" />
                <path d="M 434,174 Q 478,198 504,248" />
                <path d="M 504,248 Q 575,205 636,152" />
                <path d="M 196,232 Q 305,195 434,174" />
              </g>

              <!-- 5 INTERACTIVE KINGDOM PINS -->
              <!-- 1. SRIWIJAYA -->
              <g class="kingdom-marker active" id="pin-sriwijaya" transform="translate(196, 232)" onclick="selectKingdom('sriwijaya', true)">
                <circle r="26" fill="url(#markerGlow)" class="animate-pulse-ring" />
                <circle r="11" fill="rgba(229, 185, 76, 0.25)" stroke="#F9E090" stroke-width="1.5" />
                <circle class="marker-core" r="5.5" fill="#FDE047" />
                <rect class="marker-pill-bg" x="-44" y="-32" width="88" height="19" rx="9.5" fill="#071915" stroke="#E5B94C" stroke-width="1.2" />
                <text class="marker-pill-text" x="0" y="-19.5" text-anchor="middle" fill="#F9E090" font-size="9.5" font-weight="800" font-family="Plus Jakarta Sans">SRIWIJAYA</text>
              </g>

              <!-- 2. MAJAPAHIT -->
              <g class="kingdom-marker" id="pin-majapahit" transform="translate(398, 316)" onclick="selectKingdom('majapahit', true)">
                <circle r="26" fill="url(#markerGlow)" class="animate-pulse-ring" />
                <circle r="11" fill="rgba(229, 185, 76, 0.25)" stroke="#F9E090" stroke-width="1.5" />
                <circle class="marker-core" r="5.5" fill="#FDE047" />
                <rect class="marker-pill-bg" x="-45" y="15" width="90" height="19" rx="9.5" fill="#071915" stroke="#E5B94C" stroke-width="1.2" />
                <text class="marker-pill-text" x="0" y="27.5" text-anchor="middle" fill="#F9E090" font-size="9.5" font-weight="800" font-family="Plus Jakarta Sans">MAJAPAHIT</text>
              </g>

              <!-- 3. KUTAI -->
              <g class="kingdom-marker" id="pin-kutai" transform="translate(434, 174)" onclick="selectKingdom('kutai', true)">
                <circle r="26" fill="url(#markerGlow)" class="animate-pulse-ring" />
                <circle r="11" fill="rgba(229, 185, 76, 0.25)" stroke="#F9E090" stroke-width="1.5" />
                <circle class="marker-core" r="5.5" fill="#FDE047" />
                <rect class="marker-pill-bg" x="-36" y="-32" width="72" height="19" rx="9.5" fill="#071915" stroke="#E5B94C" stroke-width="1.2" />
                <text class="marker-pill-text" x="0" y="-19.5" text-anchor="middle" fill="#F9E090" font-size="9.5" font-weight="800" font-family="Plus Jakarta Sans">KUTAI</text>
              </g>

              <!-- 4. GOWA-TALLO -->
              <g class="kingdom-marker" id="pin-gowatallo" transform="translate(504, 248)" onclick="selectKingdom('gowatallo', true)">
                <circle r="26" fill="url(#markerGlow)" class="animate-pulse-ring" />
                <circle r="11" fill="rgba(229, 185, 76, 0.25)" stroke="#F9E090" stroke-width="1.5" />
                <circle class="marker-core" r="5.5" fill="#FDE047" />
                <rect class="marker-pill-bg" x="-48" y="15" width="96" height="19" rx="9.5" fill="#071915" stroke="#E5B94C" stroke-width="1.2" />
                <text class="marker-pill-text" x="0" y="27.5" text-anchor="middle" fill="#F9E090" font-size="9.5" font-weight="800" font-family="Plus Jakarta Sans">GOWA-TALLO</text>
              </g>

              <!-- 5. TERNATE-TIDORE -->
              <g class="kingdom-marker" id="pin-ternate" transform="translate(636, 152)" onclick="selectKingdom('ternate', true)">
                <circle r="26" fill="url(#markerGlow)" class="animate-pulse-ring" />
                <circle r="11" fill="rgba(229, 185, 76, 0.25)" stroke="#F9E090" stroke-width="1.5" />
                <circle class="marker-core" r="5.5" fill="#FDE047" />
                <rect class="marker-pill-bg" x="-54" y="-32" width="108" height="19" rx="9.5" fill="#071915" stroke="#E5B94C" stroke-width="1.2" />
                <text class="marker-pill-text" x="0" y="-19.5" text-anchor="middle" fill="#F9E090" font-size="9.5" font-weight="800" font-family="Plus Jakarta Sans">TERNATE-TIDORE</text>
              </g>
            </svg>
          </div>

          <!-- High-Z-Index Interactive Kingdom Selector Buttons -->
          <div class="relative z-30 flex flex-wrap items-center justify-center gap-2 pt-3 mt-2 border-t border-nusantara-gold/25">
            <button type="button" onclick="selectKingdom('sriwijaya', true)" id="pill-sriwijaya" class="kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-gold text-nusantara-dark shadow-md transition-all cursor-pointer">
              1. Sriwijaya
            </button>
            <button type="button" onclick="selectKingdom('majapahit', true)" id="pill-majapahit" class="kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-dark/90 text-nusantara-parchment border border-nusantara-gold/40 hover:border-nusantara-gold transition-all cursor-pointer">
              2. Majapahit
            </button>
            <button type="button" onclick="selectKingdom('kutai', true)" id="pill-kutai" class="kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-dark/90 text-nusantara-parchment border border-nusantara-gold/40 hover:border-nusantara-gold transition-all cursor-pointer">
              3. Kutai
            </button>
            <button type="button" onclick="selectKingdom('gowatallo', true)" id="pill-gowatallo" class="kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-dark/90 text-nusantara-parchment border border-nusantara-gold/40 hover:border-nusantara-gold transition-all cursor-pointer">
              4. Gowa-Tallo
            </button>
            <button type="button" onclick="selectKingdom('ternate', true)" id="pill-ternate" class="kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-dark/90 text-nusantara-parchment border border-nusantara-gold/40 hover:border-nusantara-gold transition-all cursor-pointer">
              5. Ternate-Tidore
            </button>
          </div>
        </div>

        <!-- Right Column (4 Cols): Live Animated Kingdom Lore Card & CTA -->
        <div class="lg:col-span-4 flex flex-col justify-between gap-4 relative z-20">
          <div id="kingdomInfoCard" class="glass-parchment rounded-3xl p-5 sm:p-6 flex-1 flex flex-col justify-between">
            <div>
              <!-- Era & Location Badge -->
              <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                <span id="kdEra" class="px-3 py-1 rounded-full bg-emerald-950 text-amber-300 text-xs font-bold tracking-wide">
                  Abad ke-7 – ke-13 M
                </span>
                <span id="kdRegion" class="text-xs font-bold text-emerald-950/80 flex items-center gap-1">
                  📍 Palembang, Sumatra
                </span>
              </div>

              <!-- Kingdom Name & Tagline -->
              <h2 id="kdTitle" class="font-royal text-2xl sm:text-3xl font-extrabold text-emerald-950 leading-tight">
                Kerajaan Sriwijaya
              </h2>
              <p id="kdSubtitle" class="font-serifDisplay italic text-sm text-amber-800 font-bold mt-0.5 mb-3">
                "Kemaharajaan Maritim &amp; Pusat Pembelajaran Buddha"
              </p>

              <!-- Summary Description -->
              <p id="kdDesc" class="text-xs sm:text-sm text-stone-800 leading-relaxed mb-4">
                Kerajaan bahari raksasa yang menguasai jalur perdagangan Selat Malaka dan Selat Sunda. Armada lautnya yang tangguh menjadikan Sriwijaya pusat perniagaan serta pendidikan agama Buddha bertaraf internasional.
              </p>

              <!-- Famous King & Main Relic -->
              <div class="space-y-2.5 bg-amber-950/10 rounded-2xl p-3.5 border border-amber-900/20">
                <div class="flex items-start gap-2.5">
                  <span class="text-base">👑</span>
                  <div>
                    <span class="text-[10px] uppercase tracking-wider font-extrabold text-emerald-950/65 block">Raja Terkenal</span>
                    <span id="kdFigure" class="text-xs sm:text-sm font-bold text-emerald-950">Raja Balaputradewa</span>
                  </div>
                </div>
                <div class="flex items-start gap-2.5">
                  <span class="text-base">🏛️</span>
                  <div>
                    <span class="text-[10px] uppercase tracking-wider font-extrabold text-emerald-950/65 block">Peninggalan Utama</span>
                    <span id="kdRelic" class="text-xs sm:text-sm font-bold text-emerald-950">Prasasti Kedukan Bukit &amp; Candi Muara Takus</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Explored Progress Indicator -->
            <div class="mt-4 pt-3 border-t border-emerald-950/15">
              <div class="flex items-center justify-between text-xs font-bold text-emerald-950 mb-1.5">
                <span>Progres Eksplorasi Peta:</span>
                <span><span id="exploredCount">1</span> / 5 Kerajaan</span>
              </div>
              <div class="w-full h-2 bg-emerald-950/15 rounded-full overflow-hidden">
                <div id="exploredProgressBar" class="h-full bg-emerald-900 transition-all duration-500" style="width: 20%"></div>
              </div>
            </div>
          </div>

          <!-- Prominent CTA Button to Stage 2 -->
          <button type="button" onclick="goToNameScreen()" class="btn-royal w-full py-4 px-6 rounded-2xl font-royal font-extrabold text-sm sm:text-base tracking-wider flex items-center justify-center gap-2.5 cursor-pointer">
            <span>MULAI TANTANGAN PENJELAJAH</span>
            <span class="text-lg">→</span>
          </button>
        </div>

      </div>
    </section>

    <!-- =====================================================================
         TAHAP 2: LAYAR INPUT NAMA PENJELAJAH
    ====================================================================== -->
    <section id="screenName" class="hidden max-w-xl mx-auto w-full my-auto">
      <div class="glass-royal rounded-3xl p-6 sm:p-10 text-center relative overflow-hidden">
        <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-gradient-to-br from-nusantara-goldLight to-nusantara-goldDark p-[2px] shadow-xl animate-float">
          <div class="w-full h-full bg-nusantara-dark rounded-2xl flex items-center justify-center text-2xl">
            🧭
          </div>
        </div>

        <span class="text-xs uppercase tracking-[0.22em] text-nusantara-goldLight font-bold">
          Registrasi Penjelajah Nusantara
        </span>
        <h2 class="font-royal text-2xl sm:text-3xl font-extrabold text-nusantara-parchment mt-1.5 mb-2">
          Tuliskan Nama Lengkapmu
        </h2>
        <p class="text-xs sm:text-sm text-nusantara-parchment/80 mb-6 leading-relaxed">
          Namamu akan diabadikan pada <strong class="text-nusantara-goldLight">Sertifikat Piagam Kehormatan</strong> setelah menaklukkan 5 tantangan sejarah (20 poin per soal).
        </p>

        <!-- Name Input -->
        <div id="nameInputWrapper" class="text-left mb-6">
          <label for="explorerNameInput" class="block text-xs font-bold uppercase tracking-wider text-nusantara-goldLight mb-2">
            Nama Penjelajah
          </label>
          <input
            type="text"
            id="explorerNameInput"
            maxlength="32"
            placeholder="Masukkan namamu di sini..."
            onkeydown="if(event.key === 'Enter') startQuiz()"
            class="w-full px-4 py-3.5 rounded-2xl bg-nusantara-dark/90 border-2 border-nusantara-gold/45 text-nusantara-parchment placeholder-nusantara-parchment/40 focus:outline-none focus:border-nusantara-goldLight text-base font-semibold transition"
          />
          <p id="nameErrorMsg" class="hidden text-xs text-rose-400 font-bold mt-2 flex items-center gap-1.5">
            <span>⚠️</span> Nama tidak boleh kosong! Silakan isi namamu terlebih dahulu.
          </p>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex flex-col sm:flex-row gap-3">
          <button type="button" onclick="backToMap()" class="px-5 py-3.5 rounded-2xl border border-nusantara-gold/40 text-nusantara-parchment hover:bg-nusantara-gold/15 font-bold text-sm transition cursor-pointer">
            ← Kembali ke Peta
          </button>
          <button type="button" onclick="startQuiz()" class="btn-royal flex-1 py-3.5 px-6 rounded-2xl font-royal font-extrabold text-sm sm:text-base tracking-wider cursor-pointer">
            MASUK ARENA KUIS ⚔️
          </button>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         TAHAP 3: ARENA KUIS SEJARAH (5 SOAL × 20 POIN)
    ====================================================================== -->
    <section id="screenQuiz" class="hidden max-w-3xl mx-auto w-full my-auto">
      <!-- Quiz HUD -->
      <div class="glass-royal rounded-2xl p-4 sm:p-5 mb-5">
        <div class="flex flex-wrap items-center justify-between gap-3 mb-3">
          <div class="flex items-center gap-2.5">
            <div class="w-10 h-10 rounded-xl bg-nusantara-gold/20 border border-nusantara-gold/50 flex items-center justify-center text-lg">
              🧭
            </div>
            <div>
              <span class="text-[10px] uppercase tracking-wider text-nusantara-parchment/65 block">Penjelajah Aktif</span>
              <span id="hudPlayerName" class="font-bold text-sm sm:text-base text-nusantara-goldLight">Penjelajah</span>
            </div>
          </div>

          <div class="px-4 py-1.5 rounded-xl bg-nusantara-dark/90 border border-nusantara-gold/45 flex items-center gap-2">
            <span class="text-xs text-nusantara-parchment/75 font-semibold">Skor:</span>
            <span id="hudScore" class="font-royal text-xl sm:text-2xl font-extrabold text-nusantara-goldLight transition-transform duration-300">0</span>
            <span class="text-xs text-nusantara-parchment/55">/ 100</span>
          </div>
        </div>

        <div class="flex items-center justify-between text-xs font-bold text-nusantara-parchment/85 mb-1.5">
          <span id="hudQuestionCounter">Soal 1 / 5</span>
          <span class="text-nusantara-goldLight">Nilai: 20 Poin</span>
        </div>
        <div class="w-full h-2.5 bg-nusantara-dark rounded-full overflow-hidden border border-nusantara-gold/25">
          <div id="quizProgressBar" class="h-full bg-gradient-to-r from-nusantara-goldDark via-nusantara-gold to-nusantara-goldLight transition-all duration-500 ease-out" style="width: 20%"></div>
        </div>
      </div>

      <!-- Question Card -->
      <div id="questionCard" class="glass-royal rounded-3xl p-5 sm:p-8 relative overflow-hidden">
        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-nusantara-gold/15 border border-nusantara-gold/35 text-nusantara-goldLight text-xs font-bold mb-4">
          <span id="qCategoryIcon">⛵</span>
          <span id="qCategory">Kemaritiman Sriwijaya</span>
        </div>

        <h3 id="qText" class="font-serifDisplay text-xl sm:text-2xl font-bold text-nusantara-parchment leading-snug mb-6">
          Memuat pertanyaan...
        </h3>

        <!-- Multiple Choice Options -->
        <div id="optionsContainer" class="space-y-3"></div>

        <!-- Instant Historical Fact Feedback -->
        <div id="feedbackBox" class="hidden mt-6 p-4 sm:p-5 rounded-2xl border transition-all duration-300">
          <div class="flex items-start gap-3">
            <div id="feedbackBadgeIcon" class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 font-bold text-base mt-0.5">
              ✓
            </div>
            <div class="flex-1">
              <h4 id="feedbackTitle" class="font-bold text-sm sm:text-base mb-1">Jawaban Benar! (+20 Poin)</h4>
              <p id="feedbackExplanation" class="text-xs sm:text-sm leading-relaxed opacity-95"></p>
            </div>
          </div>

          <div class="mt-4 flex justify-end">
            <button type="button" id="nextQuestionBtn" onclick="nextQuestion()" class="btn-royal px-6 py-2.5 rounded-xl font-royal font-extrabold text-xs sm:text-sm tracking-wider cursor-pointer">
              SOAL BERIKUTNYA →
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         TAHAP 4: SERTIFIKAT PIAGAM KEHORMATAN PENJELAJAH
    ====================================================================== -->
    <section id="screenResult" class="hidden max-w-3xl mx-auto w-full my-auto">
      <div class="glass-parchment rounded-3xl p-6 sm:p-10 relative overflow-hidden border-4 border-nusantara-gold shadow-2xl">
        
        <!-- Ornamental Corners -->
        <div class="absolute top-3 left-3 w-8 h-8 border-t-2 border-l-2 border-amber-700/50 rounded-tl-lg"></div>
        <div class="absolute top-3 right-3 w-8 h-8 border-t-2 border-r-2 border-amber-700/50 rounded-tr-lg"></div>
        <div class="absolute bottom-3 left-3 w-8 h-8 border-b-2 border-l-2 border-amber-700/50 rounded-bl-lg"></div>
        <div class="absolute bottom-3 right-3 w-8 h-8 border-b-2 border-r-2 border-amber-700/50 rounded-br-lg"></div>

        <div class="text-center">
          <span class="inline-block px-4 py-1 rounded-full bg-emerald-950 text-amber-300 text-xs font-bold uppercase tracking-[0.2em] mb-3">
            Piagam Kehormatan Nusantara
          </span>

          <h2 class="font-royal text-2xl sm:text-4xl font-extrabold text-emerald-950 tracking-wide">
            SERTIFIKAT PENJELAJAH
          </h2>
          <p class="text-xs sm:text-sm text-stone-600 mt-1">Dianugerahkan secara resmi kepada:</p>

          <div class="my-4 py-2 px-6 inline-block border-b-2 border-amber-700/60">
            <span id="certPlayerName" class="font-serifDisplay italic text-2xl sm:text-4xl font-bold text-amber-900">
              Nama Penjelajah
            </span>
          </div>

          <div class="my-5 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8">
            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-emerald-950 to-emerald-800 border-4 border-amber-400 shadow-xl flex flex-col items-center justify-center text-amber-300">
              <span class="text-[10px] uppercase tracking-widest font-semibold text-amber-200/80">Skor Akhir</span>
              <span id="certFinalScore" class="font-royal text-4xl font-extrabold text-white">100</span>
              <span class="text-[11px] font-medium text-amber-300">dari 100 Poin</span>
            </div>

            <div class="text-center sm:text-left max-w-xs">
              <span class="text-xs uppercase tracking-wider font-extrabold text-amber-800 block">Gelar Kehormatan:</span>
              <h3 id="certRankTitle" class="font-royal text-xl sm:text-2xl font-extrabold text-emerald-950 mt-0.5">
                Mahapatih Agung Nusantara
              </h3>
              <p id="certRankDesc" class="text-xs sm:text-sm text-stone-700 mt-1.5 leading-relaxed">
                Luar biasa! Penguasaanmu atas kejayaan kerajaan-kerajaan Nusantara setara dengan penasihat agung kerajaan.
              </p>
            </div>
          </div>
        </div>

        <!-- Answer Review List -->
        <div class="mt-6 pt-5 border-t border-amber-900/20">
          <h4 class="font-royal text-sm font-extrabold uppercase tracking-wider text-emerald-950 mb-3 text-center">
            Rincian Evaluasi (5 Soal × 20 Poin)
          </h4>
          <div id="resultSummaryList" class="space-y-2 max-h-56 overflow-y-auto pr-1"></div>
        </div>

        <!-- Replay / Return Buttons -->
        <div class="mt-7 flex flex-col sm:flex-row items-center justify-center gap-3">
          <button type="button" onclick="restartQuizSamePlayer()" class="btn-royal w-full sm:w-auto px-6 py-3.5 rounded-2xl font-royal font-extrabold text-xs sm:text-sm tracking-wider cursor-pointer">
            🔄 JELAJAHI ULANG (KUIS)
          </button>
          <button type="button" onclick="resetToMap()" class="w-full sm:w-auto px-6 py-3.5 rounded-2xl bg-emerald-950 text-amber-300 hover:bg-emerald-900 font-bold text-xs sm:text-sm tracking-wider transition cursor-pointer">
            🗺️ KEMBALI KE PETA NUSANTARA
          </button>
        </div>
      </div>
    </section>

  </main>

  <!-- =========================================================================
       JAVASCRIPT: AUDIO SYNTHESIZER, SMOOTH MAP ZOOM ENGINE & QUIZ SYSTEM
  ========================================================================== -->
  <script>
    /* -------------------------------------------------------------------------
       1. WEB AUDIO API SYNTHESIZER (No External Sound Files)
    -------------------------------------------------------------------------- */
    let audioCtx = null;

    function initAudio() {
      if (!audioCtx) {
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        if (AudioContext) audioCtx = new AudioContext();
      }
      if (audioCtx && audioCtx.state === 'suspended') {
        audioCtx.resume();
      }
    }

    function playTone(freq, type = 'sine', duration = 0.2, volume = 0.14, delay = 0) {
      initAudio();
      if (!audioCtx) return;

      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();
      osc.type = type;
      osc.frequency.setValueAtTime(freq, audioCtx.currentTime + delay);

      gain.gain.setValueAtTime(0.001, audioCtx.currentTime + delay);
      gain.gain.exponentialRampToValueAtTime(volume, audioCtx.currentTime + delay + 0.02);
      gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + delay + duration);

      osc.connect(gain);
      gain.connect(audioCtx.destination);

      osc.start(audioCtx.currentTime + delay);
      osc.stop(audioCtx.currentTime + delay + duration + 0.03);
    }

    function playClickSound() {
      playTone(620, 'triangle', 0.11, 0.11, 0);
      playTone(880, 'sine', 0.14, 0.08, 0.04);
    }

    function playCorrectSound() {
      playTone(523.25, 'triangle', 0.18, 0.16, 0);     // C5
      playTone(659.25, 'triangle', 0.18, 0.16, 0.09);  // E5
      playTone(783.99, 'triangle', 0.28, 0.18, 0.18);  // G5
      playTone(1046.50, 'sine', 0.38, 0.15, 0.28);     // C6
    }

    function playWrongSound() {
      playTone(230, 'sawtooth', 0.22, 0.12, 0);
      playTone(175, 'sawtooth', 0.32, 0.12, 0.14);
    }

    function playFanfareSound() {
      const notes = [523.25, 659.25, 783.99, 1046.50, 783.99, 1046.50];
      const times = [0, 0.12, 0.24, 0.36, 0.54, 0.68];
      notes.forEach((n, idx) => {
        playTone(n, 'triangle', 0.32, 0.17, times[idx]);
      });
    }

    /* -------------------------------------------------------------------------
       2. KINGDOM DATA & SMOOTH SVG PAN/ZOOM ENGINE
    -------------------------------------------------------------------------- */
    const kingdomsData = {
      sriwijaya: {
        name: "Kerajaan Sriwijaya",
        era: "Abad ke-7 – ke-13 M",
        region: "📍 Palembang, Sumatra",
        subtitle: "\"Kemaharajaan Maritim & Pusat Pembelajaran Buddha\"",
        desc: "Kerajaan bahari raksasa yang menguasai jalur perdagangan Selat Malaka dan Selat Sunda. Armada lautnya yang tangguh menjadikan Sriwijaya pusat perniagaan serta pendidikan agama Buddha bertaraf internasional.",
        figure: "Raja Balaputradewa",
        relic: "Prasasti Kedukan Bukit & Candi Muara Takus",
        // Target viewBox for smooth zoom-in (x, y, width, height)
        zoomBox: { x: 40, y: 110, w: 340, h: 195 }
      },
      majapahit: {
        name: "Kerajaan Majapahit",
        era: "1293 – 1527 M",
        region: "📍 Trowulan, Jawa Timur",
        subtitle: "\"Pemersatu Nusantara di Bawah Sumpah Palapa\"",
        desc: "Kemaharajaan agraris dan maritim terbesar yang mencapai puncak keemasan di bawah Prabu Hayam Wuruk dan Mahapatih Gajah Mada. Wilayah pengaruhnya membentang luas di seluruh kepulauan Nusantara.",
        figure: "Prabu Hayam Wuruk & Mahapatih Gajah Mada",
        relic: "Kitab Negarakertagama & Gapura Wringin Lawang",
        zoomBox: { x: 225, y: 220, w: 340, h: 185 }
      },
      kutai: {
        name: "Kerajaan Kutai Martadipura",
        era: "Abad ke-4 M (± 400 M)",
        region: "📍 Muara Kaman, Kalimantan Timur",
        subtitle: "\"Kerajaan Hindu Tertua di Tanah Nusantara\"",
        desc: "Berdiri di tepi Sungai Mahakam, Kutai Martadipura menandai berakhirnya zaman prasejarah dan dimulainya era aksara di Indonesia melalui ditemukannya tujuh buah prasasti batu bertulis huruf Pallawa.",
        figure: "Raja Mulawarman & Raja Kudungga",
        relic: "Tujuh Prasasti Yupa (Bahasa Sanskerta)",
        zoomBox: { x: 270, y: 75, w: 340, h: 190 }
      },
      gowatallo: {
        name: "Kesultanan Gowa-Tallo",
        era: "Abad ke-16 – ke-17 M",
        region: "📍 Makassar, Sulawesi Selatan",
        subtitle: "\"Ayam Jantan dari Timur & Penguasa Pelayaran Niaga\"",
        desc: "Kerajaan kembar di Sulawesi Selatan yang membangun armada kapal Pinisi legendaris dan menjadi pusat perdagangan rempah dunia di kawasan timur Nusantara sebelum Perjanjian Bongaya.",
        figure: "Sultan Hasanuddin & Karaeng Pattingalloang",
        relic: "Benteng Somba Opu & Benteng Fort Rotterdam",
        zoomBox: { x: 350, y: 140, w: 340, h: 195 }
      },
      ternate: {
        name: "Kesultanan Ternate & Tidore",
        era: "Abad ke-13 – ke-17 M",
        region: "📍 Kepulauan Maluku Utara",
        subtitle: "\"Negeri Penghasil Cengkih & Pala Terbaik Dunia\"",
        desc: "Dua kesultanan maritim yang menjadi pusat perhatian penjelajah dunia karena kekayaan rempah cengkih dan pala. Kepemimpinan Sultan Baabullah berhasil mengusir penjajah Portugis dari Maluku.",
        figure: "Sultan Baabullah & Sultan Nuku",
        relic: "Istana Kesultanan Ternate & Benteng Tolukko",
        zoomBox: { x: 485, y: 75, w: 340, h: 190 }
      }
    };

    const defaultViewBox = { x: 0, y: 0, w: 920, h: 440 };
    let currentViewBox = { ...defaultViewBox };
    let viewBoxAnimId = null;
    const exploredSet = new Set(['sriwijaya']);

    // Smoothly interpolate SVG viewBox from current to target coordinates
    function animateSvgViewBox(targetBox, duration = 650) {
      const svg = document.getElementById('nusantaraSvgMap');
      if (!svg) return;

      if (viewBoxAnimId) cancelAnimationFrame(viewBoxAnimId);

      const startBox = { ...currentViewBox };
      const startTime = performance.now();

      function step(now) {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        // Ease-out cubic curve
        const ease = 1 - Math.pow(1 - progress, 3);

        currentViewBox.x = startBox.x + (targetBox.x - startBox.x) * ease;
        currentViewBox.y = startBox.y + (targetBox.y - startBox.y) * ease;
        currentViewBox.w = startBox.w + (targetBox.w - startBox.w) * ease;
        currentViewBox.h = startBox.h + (targetBox.h - startBox.h) * ease;

        svg.setAttribute(
          'viewBox',
          `${currentViewBox.x.toFixed(2)} ${currentViewBox.y.toFixed(2)} ${currentViewBox.w.toFixed(2)} ${currentViewBox.h.toFixed(2)}`
        );

        if (progress < 1) {
          viewBoxAnimId = requestAnimationFrame(step);
        }
      }

      viewBoxAnimId = requestAnimationFrame(step);
    }

    function resetMapZoom() {
      playClickSound();
      animateSvgViewBox(defaultViewBox, 600);
      document.getElementById('mapFocusLabel').textContent = 'Tampilan Seluruh Nusantara';
    }

    function selectKingdom(key, shouldZoom = true) {
      const data = kingdomsData[key];
      if (!data) return;

      playClickSound();
      exploredSet.add(key);

      // 1. Update Active Marker on SVG Map
      document.querySelectorAll('.kingdom-marker').forEach(pin => pin.classList.remove('active'));
      const activePin = document.getElementById(`pin-${key}`);
      if (activePin) activePin.classList.add('active');

      // 2. Update Selector Buttons
      document.querySelectorAll('.kingdom-pill').forEach(pill => {
        pill.className = 'kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-dark/90 text-nusantara-parchment border border-nusantara-gold/40 hover:border-nusantara-gold transition-all cursor-pointer';
      });
      const activePill = document.getElementById(`pill-${key}`);
      if (activePill) {
        activePill.className = 'kingdom-pill px-3.5 py-2 rounded-full text-xs font-bold bg-nusantara-gold text-nusantara-dark shadow-lg scale-105 transition-all cursor-pointer';
      }

      // 3. Smooth Pan & Zoom-in to Kingdom Coordinate on Map
      if (shouldZoom && data.zoomBox) {
        animateSvgViewBox(data.zoomBox, 650);
        document.getElementById('mapFocusLabel').textContent = `Fokus Wilayah: ${data.name}`;
      }

      // 4. Animate & Update Detail Card
      const card = document.getElementById('kingdomInfoCard');
      card.classList.remove('animate-card-pop');
      void card.offsetWidth; // trigger reflow
      card.classList.add('animate-card-pop');

      document.getElementById('kdEra').textContent = data.era;
      document.getElementById('kdRegion').textContent = data.region;
      document.getElementById('kdTitle').textContent = data.name;
      document.getElementById('kdSubtitle').textContent = data.subtitle;
      document.getElementById('kdDesc').textContent = data.desc;
      document.getElementById('kdFigure').textContent = data.figure;
      document.getElementById('kdRelic').textContent = data.relic;

      // Update Explored Counter
      const count = exploredSet.size;
      document.getElementById('exploredCount').textContent = count;
      document.getElementById('exploredProgressBar').style.width = `${(count / 5) * 100}%`;
    }

    /* -------------------------------------------------------------------------
       3. QUIZ DATA (5 QUESTIONS × 20 POINTS = 100 POINTS)
    -------------------------------------------------------------------------- */
    const quizQuestions = [
      {
        category: "Kemaritiman Sriwijaya",
        icon: "⛵",
        question: "Kerajaan maritim besar di Palembang yang menguasai jalur perdagangan Selat Malaka pada abad ke-7 hingga ke-13 Masehi adalah...",
        options: [
          "Kerajaan Tarumanegara",
          "Kerajaan Sriwijaya",
          "Kerajaan Singhasari",
          "Kerajaan Mataram Kuno"
        ],
        correctIndex: 1,
        explanation: "Kerajaan Sriwijaya berpusat di Palembang dan memiliki armada laut terkuat di Asia Tenggara sehingga menguasai jalur pelayaran Selat Malaka."
      },
      {
        category: "Kejayaan Majapahit",
        icon: "👑",
        question: "Siapakah Mahapatih Kerajaan Majapahit yang mengucapkan Sumpah Palapa untuk mempersatukan seluruh wilayah Nusantara?",
        options: [
          "Patih Nambi",
          "Raden Wijaya",
          "Mahapatih Gajah Mada",
          "Arya Wiraraja"
        ],
        correctIndex: 2,
        explanation: "Mahapatih Gajah Mada mengucapkan Sumpah Palapa pada masa pemerintahan Ratu Tribhuwana Tunggadewi dan mencapai puncak kejayaan bersama Prabu Hayam Wuruk."
      },
      {
        category: "Kerajaan Tertua Nusantara",
        icon: "🏛️",
        question: "Kerajaan Hindu tertua di Indonesia yang berdiri di tepi Sungai Mahakam, Kalimantan Timur dengan peninggalan 7 Prasasti Yupa adalah...",
        options: [
          "Kerajaan Kutai Martadipura",
          "Kerajaan Kediri",
          "Kerajaan Pajajaran",
          "Kerajaan Kalingga"
        ],
        correctIndex: 0,
        explanation: "Kerajaan Kutai Martadipura (sekitar abad ke-4 M) dipimpin oleh Raja Mulawarman dan meninggalkan tujuh tugu batu Prasasti Yupa berhuruf Pallawa."
      },
      {
        category: "Kesultanan Gowa-Tallo",
        icon: "🦅",
        question: "Sultan dari Kesultanan Gowa-Tallo (Makassar) yang dijuluki 'Ayam Jantan dari Timur' karena kegigihannya melawan monopoli VOC adalah...",
        options: [
          "Sultan Agung",
          "Sultan Baabullah",
          "Sultan Ageng Tirtayasa",
          "Sultan Hasanuddin"
        ],
        correctIndex: 3,
        explanation: "Sultan Hasanuddin memimpin perlawanan heroik Kesultanan Gowa-Tallo di Makassar sehingga Belanda menjulukinya 'De Haantjes van Het Oosten' (Ayam Jantan dari Timur)."
      },
      {
        category: "Rempah Maluku Utara",
        icon: "🌿",
        question: "Kesultanan Ternate dan Tidore di Kepulauan Maluku Utara sangat diperebutkan bangsa Eropa pada masa lampau karena menjadi penghasil utama...",
        options: [
          "Emas dan Perak",
          "Cengkih dan Pala",
          "Kain Sutra dan Keramik",
          "Kopi dan Teh"
        ],
        correctIndex: 1,
        explanation: "Kepulauan Maluku dikenal dunia sebagai 'The Spice Islands' karena menjadi penghasil rempah cengkih dan pala dengan kualitas terbaik di dunia."
      }
    ];

    /* -------------------------------------------------------------------------
       4. APPLICATION STATE & SCREEN NAVIGATION
    -------------------------------------------------------------------------- */
    let playerName = "";
    let currentQIndex = 0;
    let score = 0;
    let hasAnsweredCurrent = false;
    let userAnswersHistory = [];

    function showScreen(screenId) {
      ['screenMap', 'screenName', 'screenQuiz', 'screenResult'].forEach(id => {
        document.getElementById(id).classList.add('hidden');
      });
      const target = document.getElementById(screenId);
      target.classList.remove('hidden');
      target.classList.remove('screen-enter');
      void target.offsetWidth;
      target.classList.add('screen-enter');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function goToNameScreen() {
      playClickSound();
      showScreen('screenName');
      setTimeout(() => {
        document.getElementById('explorerNameInput').focus();
      }, 250);
    }

    function backToMap() {
      playClickSound();
      showScreen('screenMap');
    }

    function startQuiz() {
      const inputEl = document.getElementById('explorerNameInput');
      const errorEl = document.getElementById('nameErrorMsg');
      const wrapperEl = document.getElementById('nameInputWrapper');
      const rawName = inputEl.value.trim();

      if (!rawName) {
        playWrongSound();
        errorEl.classList.remove('hidden');
        wrapperEl.classList.remove('animate-shake');
        void wrapperEl.offsetWidth;
        wrapperEl.classList.add('animate-shake');
        inputEl.focus();
        return;
      }

      errorEl.classList.add('hidden');
      playerName = rawName;
      currentQIndex = 0;
      score = 0;
      userAnswersHistory = [];

      playClickSound();
      document.getElementById('hudPlayerName').textContent = playerName;
      document.getElementById('hudScore').textContent = '0';

      showScreen('screenQuiz');
      renderQuestion();
    }

    /* -------------------------------------------------------------------------
       5. QUIZ ENGINE (5 QUESTIONS × 20 POINTS)
    -------------------------------------------------------------------------- */
    function renderQuestion() {
      hasAnsweredCurrent = false;
      const q = quizQuestions[currentQIndex];

      document.getElementById('hudQuestionCounter').textContent = `Soal ${currentQIndex + 1} / ${quizQuestions.length}`;
      document.getElementById('quizProgressBar').style.width = `${((currentQIndex + 1) / quizQuestions.length) * 100}%`;

      document.getElementById('qCategoryIcon').textContent = q.icon;
      document.getElementById('qCategory').textContent = q.category;
      document.getElementById('qText').textContent = q.question;

      const feedbackBox = document.getElementById('feedbackBox');
      feedbackBox.classList.add('hidden');

      const optionsContainer = document.getElementById('optionsContainer');
      optionsContainer.innerHTML = '';

      const letters = ['A', 'B', 'C', 'D'];

      q.options.forEach((optText, idx) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'option-btn w-full text-left p-4 rounded-2xl bg-nusantara-dark/75 hover:bg-nusantara-teal/75 border border-nusantara-gold/35 hover:border-nusantara-goldLight transition-all duration-200 flex items-center gap-3.5 group cursor-pointer';
        btn.onclick = () => selectAnswer(idx);

        btn.innerHTML = `
          <span class="opt-letter w-9 h-9 rounded-xl bg-nusantara-gold/15 border border-nusantara-gold/45 text-nusantara-goldLight font-royal font-extrabold text-sm flex items-center justify-center shrink-0 group-hover:bg-nusantara-gold group-hover:text-nusantara-dark transition">
            ${letters[idx]}
          </span>
          <span class="text-sm sm:text-base font-medium text-nusantara-parchment leading-snug">
            ${optText}
          </span>
        `;

        optionsContainer.appendChild(btn);
      });

      const qCard = document.getElementById('questionCard');
      qCard.classList.remove('animate-card-pop');
      void qCard.offsetWidth;
      qCard.classList.add('animate-card-pop');
    }

    function animateScoreRoll(fromVal, toVal) {
      const scoreEl = document.getElementById('hudScore');
      scoreEl.classList.add('scale-125', 'text-emerald-300');
      const duration = 450;
      const startTime = performance.now();

      function tick(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        const current = Math.round(fromVal + (toVal - fromVal) * progress);
        scoreEl.textContent = current;
        if (progress < 1) {
          requestAnimationFrame(tick);
        } else {
          setTimeout(() => {
            scoreEl.classList.remove('scale-125', 'text-emerald-300');
          }, 180);
        }
      }
      requestAnimationFrame(tick);
    }

    function selectAnswer(selectedIndex) {
      if (hasAnsweredCurrent) return;
      hasAnsweredCurrent = true;

      const q = quizQuestions[currentQIndex];
      const isCorrect = selectedIndex === q.correctIndex;
      const optionButtons = document.querySelectorAll('.option-btn');

      optionButtons.forEach((btn, idx) => {
        btn.disabled = true;
        btn.classList.remove('cursor-pointer', 'hover:bg-nusantara-teal/75', 'hover:border-nusantara-goldLight');
        const badge = btn.querySelector('.opt-letter');

        if (idx === q.correctIndex) {
          btn.classList.remove('bg-nusantara-dark/75', 'border-nusantara-gold/35');
          btn.classList.add('bg-emerald-900/90', 'border-emerald-400', 'ring-2', 'ring-emerald-400/50');
          badge.className = 'opt-letter w-9 h-9 rounded-xl bg-emerald-400 text-emerald-950 font-royal font-extrabold text-sm flex items-center justify-center shrink-0';
          badge.textContent = '✓';
        } else if (idx === selectedIndex && !isCorrect) {
          btn.classList.remove('bg-nusantara-dark/75', 'border-nusantara-gold/35');
          btn.classList.add('bg-rose-950/90', 'border-rose-400', 'ring-2', 'ring-rose-400/50');
          badge.className = 'opt-letter w-9 h-9 rounded-xl bg-rose-400 text-rose-950 font-royal font-extrabold text-sm flex items-center justify-center shrink-0';
          badge.textContent = '✕';
        } else {
          btn.classList.add('opacity-45');
        }
      });

      const feedbackBox = document.getElementById('feedbackBox');
      const feedbackBadgeIcon = document.getElementById('feedbackBadgeIcon');
      const feedbackTitle = document.getElementById('feedbackTitle');
      const feedbackExplanation = document.getElementById('feedbackExplanation');

      feedbackBox.classList.remove('hidden', 'bg-emerald-950/85', 'border-emerald-400/50', 'text-emerald-100', 'bg-rose-950/85', 'border-rose-400/50', 'text-rose-100');

      if (isCorrect) {
        const oldScore = score;
        score += 20;
        animateScoreRoll(oldScore, score);
        playCorrectSound();

        feedbackBox.classList.add('bg-emerald-950/85', 'border-emerald-400/50', 'text-emerald-100');
        feedbackBadgeIcon.className = 'w-8 h-8 rounded-full bg-emerald-400 text-emerald-950 flex items-center justify-center shrink-0 font-extrabold text-base mt-0.5';
        feedbackBadgeIcon.textContent = '✓';
        feedbackTitle.textContent = 'Tepat Sekali! (+20 Poin)';
      } else {
        playWrongSound();
        const qCard = document.getElementById('questionCard');
        qCard.classList.remove('animate-shake');
        void qCard.offsetWidth;
        qCard.classList.add('animate-shake');

        feedbackBox.classList.add('bg-rose-950/85', 'border-rose-400/50', 'text-rose-100');
        feedbackBadgeIcon.className = 'w-8 h-8 rounded-full bg-rose-400 text-rose-950 flex items-center justify-center shrink-0 font-extrabold text-base mt-0.5';
        feedbackBadgeIcon.textContent = '✕';
        feedbackTitle.textContent = `Kurang Tepat (0 Poin) — Jawaban Benar: ${q.options[q.correctIndex]}`;
      }

      feedbackExplanation.textContent = q.explanation;

      const nextBtn = document.getElementById('nextQuestionBtn');
      nextBtn.textContent = currentQIndex === quizQuestions.length - 1
        ? 'LIHAT SERTIFIKAT HASIL 🏆'
        : 'SOAL BERIKUTNYA →';

      userAnswersHistory.push({
        question: q.question,
        chosen: q.options[selectedIndex],
        correct: q.options[q.correctIndex],
        isCorrect: isCorrect,
        points: isCorrect ? 20 : 0
      });
    }

    function nextQuestion() {
      playClickSound();
      if (currentQIndex < quizQuestions.length - 1) {
        currentQIndex++;
        renderQuestion();
      } else {
        showFinalCertificate();
      }
    }

    /* -------------------------------------------------------------------------
       6. FINAL CERTIFICATE & GOLDEN CONFETTI
    -------------------------------------------------------------------------- */
    function showFinalCertificate() {
      showScreen('screenResult');
      playFanfareSound();
      launchGoldenConfetti();

      document.getElementById('certPlayerName').textContent = playerName;
      document.getElementById('certFinalScore').textContent = score;

      let rankTitle = "";
      let rankDesc = "";

      if (score === 100) {
        rankTitle = "Mahapatih Agung Nusantara";
        rankDesc = "Sempurna! Penguasaanmu atas sejarah kerajaan Nusantara setara dengan penasihat agung kemaharajaan.";
      } else if (score >= 80) {
        rankTitle = "Laksamana Utama Bahari";
        rankDesc = "Hebat! Wawasan sejarahmu sangat luas dan tangguh mengarungi jejak kejayaan Nusantara.";
      } else if (score >= 60) {
        rankTitle = "Ksatria Penjelajah Sejarah";
        rankDesc = "Bagus! Kamu telah memahami banyak tonggak penting sejarah kerajaan-kerajaan besar di Indonesia.";
      } else {
        rankTitle = "Perintis Ekspedisi Nusantara";
        rankDesc = "Langkah awal yang baik! Jelajahi kembali peta kerajaan Nusantara untuk meraih skor sempurna 100.";
      }

      document.getElementById('certRankTitle').textContent = rankTitle;
      document.getElementById('certRankDesc').textContent = rankDesc;

      const summaryList = document.getElementById('resultSummaryList');
      summaryList.innerHTML = '';

      userAnswersHistory.forEach((item, idx) => {
        const row = document.createElement('div');
        row.className = `p-3 rounded-xl border text-xs flex items-start justify-between gap-3 ${
          item.isCorrect
            ? 'bg-emerald-950/10 border-emerald-800/30 text-emerald-950'
            : 'bg-rose-950/10 border-rose-800/30 text-rose-950'
        }`;

        row.innerHTML = `
          <div class="flex-1">
            <span class="font-extrabold">Soal ${idx + 1}:</span> ${item.question}
            <div class="mt-1 text-[11px] opacity-85">
              Jawabanmu: <strong>${item.chosen}</strong>
              ${!item.isCorrect ? ` • Seharusnya: <strong class="text-emerald-900">${item.correct}</strong>` : ''}
            </div>
          </div>
          <span class="px-2.5 py-1 rounded-lg font-royal font-extrabold shrink-0 ${
            item.isCorrect ? 'bg-emerald-900 text-amber-300' : 'bg-rose-900 text-white'
          }">
            +${item.points}
          </span>
        `;
        summaryList.appendChild(row);
      });
    }

    function restartQuizSamePlayer() {
      playClickSound();
      currentQIndex = 0;
      score = 0;
      userAnswersHistory = [];
      document.getElementById('hudScore').textContent = '0';
      showScreen('screenQuiz');
      renderQuestion();
    }

    function resetToMap() {
      playClickSound();
      resetMapZoom();
      showScreen('screenMap');
    }

    /* -------------------------------------------------------------------------
       7. AMBIENT GOLD DUST & CELEBRATION CONFETTI PARTICLE SYSTEM
    -------------------------------------------------------------------------- */
    (function initAmbientParticles() {
      const canvas = document.getElementById('ambientCanvas');
      const ctx = canvas.getContext('2d');
      let w, h, particles = [];

      function resize() {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
      }
      window.addEventListener('resize', resize);
      resize();

      for (let i = 0; i < 42; i++) {
        particles.push({
          x: Math.random() * w,
          y: Math.random() * h,
          r: Math.random() * 2.1 + 0.6,
          vx: (Math.random() - 0.5) * 0.28,
          vy: -Math.random() * 0.35 - 0.1,
          alpha: Math.random() * 0.55 + 0.15
        });
      }

      function animate() {
        ctx.clearRect(0, 0, w, h);
        particles.forEach(p => {
          p.x += p.vx;
          p.y += p.vy;
          if (p.y < -10) p.y = h + 10;
          if (p.x < -10) p.x = w + 10;
          if (p.x > w + 10) p.x = -10;

          ctx.beginPath();
          ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(249, 224, 144, ${p.alpha})`;
          ctx.fill();
        });
        requestAnimationFrame(animate);
      }
      animate();
    })();

    function launchGoldenConfetti() {
      const canvas = document.getElementById('confettiCanvas');
      const ctx = canvas.getContext('2d');
      const w = canvas.width = window.innerWidth;
      const h = canvas.height = window.innerHeight;

      const colors = ['#E5B94C', '#FFF0B3', '#F59E0B', '#10B981', '#FFFFFF'];
      const pieces = [];

      for (let i = 0; i < 110; i++) {
        pieces.push({
          x: w * 0.5 + (Math.random() - 0.5) * 260,
          y: h * 0.45,
          vx: (Math.random() - 0.5) * 14,
          vy: -Math.random() * 13 - 4,
          size: Math.random() * 7 + 4,
          color: colors[Math.floor(Math.random() * colors.length)],
          rot: Math.random() * 360,
          vRot: (Math.random() - 0.5) * 12,
          gravity: 0.35
        });
      }

      let frame = 0;
      function updateConfetti() {
        ctx.clearRect(0, 0, w, h);
        let active = false;

        pieces.forEach(p => {
          p.x += p.vx;
          p.y += p.vy;
          p.vy += p.gravity;
          p.rot += p.vRot;

          if (p.y < h + 30) {
            active = true;
            ctx.save();
            ctx.translate(p.x, p.y);
            ctx.rotate((p.rot * Math.PI) / 180);
            ctx.fillStyle = p.color;
            ctx.fillRect(-p.size / 2, -p.size / 2, p.size, p.size * 0.6);
            ctx.restore();
          }
        });

        frame++;
        if (active && frame < 180) {
          requestAnimationFrame(updateConfetti);
        } else {
          ctx.clearRect(0, 0, w, h);
        }
      }
      requestAnimationFrame(updateConfetti);
    }

    // Initialize default view without forced zoom on first load
    window.addEventListener('DOMContentLoaded', () => {
      selectKingdom('sriwijaya', false);
    });
  </script>
</body>
</html>