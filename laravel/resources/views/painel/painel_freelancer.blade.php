<!DOCTYPE html><html class="dark" lang="pt-AO" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Skilla - Dashboard do Freelancer</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error-container": "#93000a",
                        "on-secondary-container": "#556d00",
                        "on-tertiary-container": "#757575",
                        "inverse-surface": "#e2e2e2",
                        "on-secondary-fixed-variant": "#3c4d00",
                        "on-tertiary": "#303030",
                        "on-primary-fixed-variant": "#474747",
                        "on-primary-fixed": "#1b1b1b",
                        "outline": "#988e90",
                        "tertiary-fixed": "#e2e2e2",
                        "primary": "#c6c6c6",
                        "on-error": "#690005",
                        "surface-container-highest": "#353535",
                        "secondary-fixed-dim": "#abd600",
                        "background": "#131313",
                        "on-secondary-fixed": "#161e00",
                        "surface-bright": "#393939",
                        "surface-container": "#1f1f1f",
                        "primary-container": "#000000",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-tint": "#c6c6c6",
                        "inverse-primary": "#5e5e5e",
                        "surface-variant": "#353535",
                        "secondary": "#ffffff",
                        "on-primary": "#303030",
                        "on-surface": "#e2e2e2",
                        "on-surface-variant": "#cfc4c5",
                        "surface-container-high": "#2a2a2a",
                        "on-primary-container": "#757575",
                        "surface-dim": "#131313",
                        "primary-fixed-dim": "#c6c6c6",
                        "on-secondary": "#283500",
                        "on-error-container": "#ffdad6",
                        "secondary-fixed": "#c3f400",
                        "primary-fixed": "#e2e2e2",
                        "tertiary-container": "#000000",
                        "on-background": "#e2e2e2",
                        "surface-container-low": "#1b1b1b",
                        "inverse-on-surface": "#303030",
                        "secondary-container": "#c3f400",
                        "tertiary": "#c6c6c6",
                        "on-tertiary-fixed-variant": "#474747",
                        "surface": "#131313",
                        "on-tertiary-fixed": "#1b1b1b",
                        "outline-variant": "#4c4546",
                        "error": "#ffb4ab",
                        "tertiary-fixed-dim": "#c6c6c6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-mobile": "16px",
                        "gutter": "24px",
                        "base": "8px",
                        "container-padding-desktop": "32px",
                        "sidebar-width": "280px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Space Grotesk"],
                        "label-sm": ["Space Grotesk"],
                        "headline-md": ["Space Grotesk"],
                        "display-lg-mobile": ["Space Grotesk"],
                        "body-md": ["Inter"],
                        "label-md": ["Space Grotesk"]
                    },
                    "fontSize": {
                        "headline-sm": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "headline-md": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
<style>
        body { background-color: #CCFF00; }
        .glass-card {
            background: #FFFFFF;
            border-radius: 24px;
        }
        .neon-accent { color: #CCFF00; }
        .bg-neon-accent { background-color: #CCFF00; }
        .text-black-pure { color: #000000; }
        .bg-black-pure { background-color: #000000; }
        
        .hard-shadow { box-shadow: 8px 8px 0px rgba(0,0,0,0.1); }
        .foto_cliente_postou_vaga{
            
            width: 3rem;
            height: 3rem;

            border-radius: 0.75rem;

            background-color: #ffffff;

            border: 1px solid #d1d5db;

            display: flex;

            align-items: center;
            justify-content: center;
        }
        .card_proposta button:hover{
            color: black;
            background-color: #CCFF00;
            transition: 1s;
        }
        
    </style>
</head>
<body class="font-body-md text-body-md text-on-primary-fixed min-h-screen flex overflow-x-hidden">
<!-- SideNavBar -->
<nav class="hidden md:flex fixed left-0 top-0 h-full w-[280px] flex-col p-6 bg-primary-container dark:bg-primary-container z-50">
<div class="mb-12 flex items-center gap-4">
<span class="material-symbols-outlined text-secondary-container text-4xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">widgets</span>
<div>
<h1 class="font-display-lg text-headline-md font-black text-secondary dark:text-secondary m-0 leading-none">SKILLA</h1>
<p class="font-label-sm text-label-sm text-on-primary-container">Plataforma de Freelance</p>
</div>
</div>
<div class="flex-1 space-y-2"><a class="flex items-center gap-3 bg-[#CCFF00] text-black-pure rounded-lg px-4 py-3 font-bold transition-all" href="#"><span class="material-symbols-outlined">home</span><span class="font-label-md text-label-md">Início</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">work</span><span class="font-label-md text-label-md">Jobs</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">description</span><span class="font-label-md text-label-md">Propostas</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">chat</span><span class="font-label-md text-label-md">Mensagens</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">account_balance_wallet</span><span class="font-label-md text-label-md">Carteira</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">person</span><span class="font-label-md text-label-md">Perfil</span></a><a class="flex items-center gap-3 text-on-primary-container hover:text-secondary px-4 py-3 transition-colors" href="#"><span class="material-symbols-outlined">settings</span><span class="font-label-md text-label-md">Definições</span></a></div>
<div class="mt-auto pt-6"><div class="flex items-center gap-3 mb-6 px-2"><img class="w-10 h-10 rounded-full border border-outline-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACkNeAdgRKTgml0NZtO_4TicTmRkeipk8Rp1WuBgQKe0obDA0KJR9gf_tSu1Tkb1bzAg-Ll1ampHvnu_eTwyE3HkVu53epFGozzLkfVLIBB6qGbss5G0REPQwVSIa9E7yKk4tRpj75lA_putJeiHq0G2pXGo2oeyQWAQX5E731X_LHadiEHgufsMTJDIV3d-xIHLUB5QO2GDYB-yGWMdIdH6bxdSu8EpeP1e8xP05ztxYTRJxduyKjPrNSABJArFWxYtxzgbrG7J4"><div class="flex flex-col"><span class="text-white font-bold text-sm">Rafael Neto</span><span class="text-on-primary-container text-[11px]">⭐ 4.9 (Angola)</span></div></div>
<button class="w-full font-label-md text-label-md py-3 rounded-lg font-bold hover:bg-secondary-fixed-dim transition-colors scale-98 active:scale-95 bg-[#CCFF00] text-black-pure">
                Comprar Créditos
            </button><div class="flex flex-col gap-2 mt-4 px-2"><a class="flex items-center gap-2 text-on-primary-container hover:text-secondary text-sm transition-colors" href="#"><span class="material-symbols-outlined text-[18px]">help_outline</span> Ajuda</a><a class="flex items-center gap-2 text-on-primary-container hover:text-secondary text-sm transition-colors" href="#"><span class="material-symbols-outlined text-[18px]">logout</span> Sair</a></div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-1 w-full ml-0 md:ml-[280px] max-w-[calc(1440px-280px)] mx-auto flex flex-col min-h-screen">
<!-- TopNavBar -->
<header class="w-full h-20 px-container-padding-mobile md:px-container-padding-desktop flex justify-between items-center bg-transparent z-40">
<!-- Mobile Menu Trigger -->
<button class="md:hidden text-black-pure">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
<div class="flex-1 flex justify-center md:justify-start">
<div class="relative w-full max-w-md hidden md:block">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-tertiary-container">search</span>
<input class="w-full pl-12 pr-4 py-3 rounded-full bg-white border border-outline focus:border-black-pure focus:ring-2 focus:ring-black-pure transition-all outline-none font-body-md text-on-primary-fixed" placeholder="Pesquisar projetos, clientes..." type="text">
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative text-black-pure hover:opacity-80 transition-opacity">
<span class="material-symbols-outlined text-2xl">notifications</span>
<span class="absolute top-0 right-0 w-2.5 h-2.5 bg-error rounded-full border-2 border-[#CCFF00]"></span>
</button>
<div class="w-10 h-10 rounded-full bg-white border border-outline overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
<img alt="User Avatar" class="w-full h-full object-cover" data-alt="Close up portrait of a young professional African man with a neat beard, looking directly at camera with a confident smile. Studio lighting, clean white background, high contrast, sharp focus. Modern professional aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuACkNeAdgRKTgml0NZtO_4TicTmRkeipk8Rp1WuBgQKe0obDA0KJR9gf_tSu1Tkb1bzAg-Ll1ampHvnu_eTwyE3HkVu53epFGozzLkfVLIBB6qGbss5G0REPQwVSIa9E7yKk4tRpj75lA_putJeiHq0G2pXGo2oeyQWAQX5E731X_LHadiEHgufsMTJDIV3d-xIHLUB5QO2GDYB-yGWMdIdH6bxdSu8EpeP1e8xP05ztxYTRJxduyKjPrNSABJArFWxYtxzgbrG7J4">
</div>
</div>
</header>
<!-- Dashboard Content -->
<div class="flex-1 p-container-padding-mobile md:p-container-padding-desktop flex flex-col gap-8 pb-20">
<!-- Page Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
<div>
<h2 class="font-headline-md text-headline-md text-black-pure mb-2">Bom dia, Pascoal 👋</h2>
<p class="font-body-lg text-body-lg text-black-pure opacity-80">Aqui está o resumo da sua atividade</p>
</div>
<button class="bg-black-pure text-white px-6 py-3 rounded-full font-label-md text-label-md font-bold flex items-center gap-2 hover:bg-surface-container-highest transition-colors">
                    Explorar Trabalhos <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
<!-- KPI Row -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
    <!-- Card 1: Trabalhos ativos -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">work</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Trabalhos Ativos</span>
            <span class="font-display-lg text-headline-md font-bold text-black-pure leading-none truncate">2</span>
        </div>
    </div>
    
    <!-- Card 2: Propostas enviadas -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px] relative">
        <div class="absolute top-6 right-6 shrink-0">
            <span class="bg-[#CCFF00] text-black-pure font-label-sm text-[10px] px-2 py-1 rounded-full font-bold">3 PENDENTES</span>
        </div>
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">description</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Propostas Enviadas</span>
            <span class="font-display-lg text-headline-md font-bold text-black-pure leading-none truncate">5</span>
        </div>
    </div>
    
    <!-- Card 3: Ganhos totais -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">account_balance_wallet</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Total Ganho</span>
            <span class="font-bold text-black-pure leading-none truncate" style="font-size: 24px;" title="KZS 120.000,00">KZS 120K</span>
        </div>
    </div>
    <!-- Card 4: Créditos totais -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">toll</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Créditos</span>
            <span class="font-bold text-black-pure leading-none truncate" style="font-size: 24px;" title="20">20</span>
        </div>
    </div>
    
    <!-- Card 5: Average Rating -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">star</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Avaliação Média</span>
            <span class="font-display-lg text-headline-md font-bold text-black-pure leading-none truncate">4.9</span>
        </div>
    </div>

    <!-- Card 6: Em Escrow (Cativo) -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">lock</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Em Escrow (Cativo)</span>
            <span class="font-bold text-black-pure leading-none truncate" style="font-size: 24px;" title="KZS 25.000,00">KZS 25K</span>
        </div>
    </div>

    <!-- Card 7: Jobs Concluídos -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">trophy</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Jobs Concluídos</span>
            <span class="font-bold text-black-pure leading-none truncate" style="font-size: 24px;" title="38">38</span>
        </div>
    </div>
    <!-- Card 8: Avaliação Média -->
    <div class="glass-card p-8 hard-shadow flex flex-col gap-4 min-h-[160px]">
        <div class="w-10 h-10 bg-black-pure rounded-lg flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[#CCFF00]">star</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="font-label-sm text-label-sm text-on-tertiary-container uppercase tracking-wider">Avaliação Média</span>
            <span class="font-bold text-black-pure leading-none truncate" style="font-size: 24px;" title="4.9">4.9</span>
        </div>
    </div>

</div>
<!-- Operational Section -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<!-- Left Column (60%) -->
<div class="lg:col-span-7 flex flex-col gap-4">
<h3 class="font-headline-sm text-headline-sm text-black-pure px-2">Jobs Ativos</h3>
<div class="glass-card p-6 hard-shadow border-l-8 border-black-pure">
<div class="flex justify-between items-start mb-6">
<div>
<h4 class="font-headline-sm text-[20px] leading-tight text-black-pure mb-1">Redesenho UI/UX App Mobile</h4><span class="inline-block bg-[#CCFF00] text-black-pure text-[10px] font-bold px-2 py-0.5 rounded-full mt-2">Entrega em 5 dias</span>
<p class="font-body-md text-body-md text-on-tertiary-container flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">domain</span> TechAngola Solutions
                                </p>
</div>
<span class="font-headline-sm text-[20px] text-black-pure whitespace-nowrap">KZS 65.000,00</span>
</div>
<div class="mb-6">
<div class="flex justify-between font-label-sm text-label-sm mb-2 text-black-pure">
<span class="">Progresso</span>
<span class="">60%</span>
</div>
<div class="w-full bg-primary h-2 rounded-full overflow-hidden">
<div class="bg-black-pure h-full w-[60%]"></div>
</div>
</div>
<a class="inline-flex items-center gap-2 font-label-md text-label-md font-bold text-black-pure hover:opacity-70 transition-opacity" href="#">
                            Ver Sala de Trabalho <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Right Column (40%) -->
<div class="lg:col-span-5 flex flex-col gap-4">
<h3 class="font-headline-sm text-headline-sm text-black-pure px-2">Propostas</h3>
<div class="glass-card p-6 hard-shadow h-full flex flex-col">
<div class="flex-1 flex flex-col gap-4 mb-6">
<!-- Item 1 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-lowest transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div>
<p class="font-label-md text-label-md text-black-pure font-bold"><span class="inline-block w-2 h-2 rounded-full bg-orange-500 mr-2"></span>E-commerce Fashion</p>
<p class="font-label-sm text-label-sm text-on-tertiary-container">KZS 45.000,00</p>
</div>
<span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#FFF3E0] text-[#E65100] border border-[#FFCC80]">PENDENTE</span>
</div>
<!-- Item 2 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-lowest transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div>
<p class="font-label-md text-label-md text-black-pure font-bold"><span class="inline-block w-2 h-2 rounded-full bg-green-500 mr-2"></span>Landing Page FinTech</p>
<p class="font-label-sm text-label-sm text-on-tertiary-container">KZS 80.000,00</p>
</div>
<span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#A5D6A7]">ACEITE</span>
</div>
<!-- Item 3 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-lowest transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div>
<p class="font-label-md text-label-md text-black-pure font-bold"><span class="inline-block w-2 h-2 rounded-full bg-red-500 mr-2"></span>Logo Startup</p>
<p class="font-label-sm text-label-sm text-on-tertiary-container">KZS 15.000,00</p>
</div>
<span class="px-3 py-1 rounded-full text-[10px] font-bold bg-[#FFEBEE] text-[#C62828] border border-[#EF9A9A]">RECUSADA</span>
</div>
</div>
<button class="w-full border-2 border-black-pure text-black-pure py-3 rounded-lg font-label-md text-label-md font-bold hover:bg-black-pure hover:text-white transition-colors mt-auto">
                            Ver Todas as Propostas
                        </button>
</div>
</div>
</div>
<!-- Recommendations -->
<div class="flex flex-col gap-6 mt-8">
        <h3 class="font-headline-md text-headline-md text-black-pure">Jobs Recomendados para Si <a class="float-right text-black-pure text-sm font-bold underline" href="#">Ver todos</a></h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Rec Card 1 -->
    <div class="card_proposta glass-card p-6 hard-shadow flex flex-col gap-4 border border-transparent hover:border-black-pure transition-colors">
    <div class="flex justify-between items-start">
    <img class="foto_cliente_postou_vaga" src="/img/foto_perfil_exemplar.png" alt="">
        <span class="font-headline-sm text-[18px] text-black-pure">KZS 90.000,00 /h</span>
    </div>
    <div>
        <h4 class="font-headline-sm text-[20px] leading-tight text-black-pure mb-2">Desenvolvimento Frontend React</h4><p class="text-[12px] text-on-tertiary-container -mt-1 mb-2">FintechLuanda</p>
        <p class="font-body-md text-[14px] text-on-tertiary-container line-clamp-2">Precisamos de um desenvolvedor para criar um dashboard administrativo responsivo usando React e Tailwind.</p>
    </div>
    <div class="flex flex-wrap gap-2 mt-auto pt-4">
        <span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">React</span>
        <span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">TailwindCSS</span>
    </div>
    <button class="w-full border-2 border-black-pure text-black-pure py-2.5 mt-4 rounded-lg font-label-md text-label-md font-bold hover:bg-black-pure hover:text-white transition-colors">
                            Enviar Proposta
                        </button>
</div>
<!-- Rec Card 2 -->
    <div class="card_proposta glass-card p-6 hard-shadow flex flex-col gap-4 border border-transparent hover:border-black-pure transition-colors">
        <div class="flex justify-between items-start">
            <img class="foto_cliente_postou_vaga" src="/img/foto_perfil_exemplar.png" alt="">
            <span class="font-headline-sm text-[18px] text-black-pure">KZS 35.000,00 /h</span>
        </div>
        <div>
            <h4 class="font-headline-sm text-[20px] leading-tight text-black-pure mb-2">Design de Identidade Visual</h4><p class="text-[12px] text-on-tertiary-container -mt-1 mb-2">Agência Criativa LDA</p>
            <p class="font-body-md text-[14px] text-on-tertiary-container line-clamp-2">Criar logótipo, paleta de cores e guia de estilo básico para uma nova pastelaria em Luanda.</p>
        </div>
        <div class="flex flex-wrap gap-2 mt-auto pt-4">
            <span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">Branding</span>
            <span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">Illustrator</span>
        </div>
        <button class="w-full border-2 border-black-pure text-black-pure py-2.5 mt-4 rounded-lg font-label-md text-label-md font-bold hover:bg-black-pure hover:text-white transition-colors">
            Enviar Proposta
        </button>
    </div>
<!-- Rec Card 3 -->
<div class="card_proposta glass-card p-6 hard-shadow flex flex-col gap-4 border border-transparent hover:border-black-pure transition-colors">
<div class="flex justify-between items-start">
<img class="foto_cliente_postou_vaga" src="/img/foto_perfil_exemplar.png" alt="">
<span class="font-headline-sm text-[18px] text-black-pure">KZS 20.000,00 /h</span>
</div>
<div>
<h4 class="font-headline-sm text-[20px] leading-tight text-black-pure mb-2">Redação de Artigos Blog Tech</h4><p class="text-[12px] text-on-tertiary-container -mt-1 mb-2">Consulting Partners</p>
<p class="font-body-md text-[14px] text-on-tertiary-container line-clamp-2">Procuramos redator para 4 artigos mensais sobre tecnologia e inovação no mercado angolano.</p>
</div>
<div class="flex flex-wrap gap-2 mt-auto pt-4">
<span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">Copywriting</span>
<span class="px-3 py-1 bg-surface-container-lowest border border-outline rounded-full font-label-sm text-[11px] text-black-pure" style="background-color: #F0F0F0; border-color: #E0E0E0;">SEO</span>
</div>
<button class="w-full border-2 border-black-pure text-black-pure py-2.5 mt-4 rounded-lg font-label-md text-label-md font-bold hover:bg-black-pure hover:text-white transition-colors">
                            Enviar Proposta
                        </button>
</div>
</div>
</div>
</div>
</main>




</body></html>