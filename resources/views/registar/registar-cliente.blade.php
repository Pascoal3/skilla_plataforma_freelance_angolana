<!DOCTYPE html>
<html class="dark" lang="pt-AO">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Skilla - Criar Conta Cliente</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-variant": "#333628",
                        "inverse-primary": "#536600",
                        "on-tertiary-fixed-variant": "#404758",
                        "tertiary-container": "#dce2f7",
                        "outline": "#8f9379",
                        "inverse-on-surface": "#2f3224",
                        "on-primary": "#2a3400",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed": "#171e00",
                        "tertiary-fixed-dim": "#c0c6db",
                        "on-secondary-fixed-variant": "#003ea8",
                        "primary": "#ffffff",
                        "on-surface-variant": "#c5c9ad",
                        "on-secondary": "#002a78",
                        "outline-variant": "#454933",
                        "secondary-fixed": "#dbe1ff",
                        "on-primary-fixed-variant": "#3e4c00",
                        "on-secondary-fixed": "#00174b",
                        "surface-tint": "#b0d500",
                        "surface-container-lowest": "#0d0f05",
                        "secondary": "#b4c5ff",
                        "secondary-fixed-dim": "#b4c5ff",
                        "surface-container-low": "#1a1d10",
                        "on-primary-container": "#586c00",
                        "on-tertiary-container": "#5d6476",
                        "tertiary": "#ffffff",
                        "inverse-surface": "#e3e4d0",
                        "surface": "#121509",
                        "error": "#ffb4ab",
                        "surface-container": "#1e2114",
                        "surface-bright": "#383b2c",
                        "primary-fixed-dim": "#b0d500",
                        "on-surface": "#e3e4d0",
                        "primary-fixed": "#caf216",
                        "surface-container-high": "#292b1e",
                        "secondary-container": "#0053db",
                        "on-background": "#e3e4d0",
                        "on-tertiary": "#293040",
                        "on-error": "#690005",
                        "tertiary-fixed": "#dce2f7",
                        "surface-dim": "#121509",
                        "surface-container-highest": "#333628",
                        "error-container": "#93000a",
                        "background": "#121509",
                        "on-tertiary-fixed": "#141b2b",
                        "primary-container": "#caf216",
                        "on-secondary-container": "#cdd7ff"
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "section-gap": "120px",
                        "card-padding": "32px",
                        "grid-gutter": "20px",
                        "base": "8px",
                        "container-padding": "24px"
                    },
                    fontFamily: {
                        "h2": ["Space Grotesk"],
                        "body-md": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "h3": ["Space Grotesk"],
                        "h1": ["Space Grotesk"],
                        "body-lg": ["Inter"]
                    },
                    fontSize: {
                        "h2": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "h3": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "h1": ["72px", {"lineHeight": "1.0", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0em", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .border-error {
            border-color: #ffb4ab !important;
        }
        @keyframes custom-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-custom-spin {
            animation: custom-spin 1.2s linear infinite;
        }
        .neon-glow {
            filter: drop-shadow(0 0 8px rgba(214, 255, 42, 0.4));
        }
        @keyframes loading-bar {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(300%); }
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col">

<!-- ============================================ -->
<!-- OVERLAY DE LOADING (Esperando Resposta) -->
<!-- ============================================ -->
<div id="loading-overlay" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/60 backdrop-blur-xl">
    <div class="relative w-full max-w-md mx-4 p-12 bg-[#111111] rounded-xl border border-white/5 shadow-[0_24px_80px_rgba(0,0,0,0.8)] overflow-hidden">
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#D6FF2A]/5 rounded-full blur-[64px]"></div>
        <div class="relative flex flex-col items-center text-center space-y-8">
            <div class="font-['Space_Grotesk'] text-xs font-black tracking-[0.4em] text-white/30 uppercase">SKILLA</div>
            <div class="relative flex items-center justify-center">
                <div class="w-20 h-20 rounded-full border-t-2 border-r-2 border-transparent border-t-[#D6FF2A] border-r-[#D6FF2A]/30 animate-custom-spin neon-glow"></div>
                <div class="absolute inset-0 m-auto w-12 h-12 rounded-full border border-[#D6FF2A]/10 animate-pulse"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[#D6FF2A]/40 text-xl">bolt</span>
                </div>
            </div>
            <div class="space-y-3">
                <h2 class="font-h2 text-h2 text-[#D6FF2A] leading-none">Quase lá</h2>
                <p class="font-body-md text-slate-500 max-w-[240px] mx-auto">Aguarde enquanto verificamos os dados</p>
            </div>
            <div class="w-full max-w-[160px] h-[2px] bg-white/5 rounded-full overflow-hidden">
                <div class="h-full bg-[#D6FF2A] w-1/3 animate-[loading-bar_2s_ease-in-out_infinite]"></div>
            </div>
        </div>
        <div class="mt-12 flex justify-center">
            <span class="text-[10px] uppercase tracking-widest text-slate-600 font-bold">Processamento Seguro</span>
        </div>
    </div>
</div>

<!-- ============================================ -->
<!-- OVERLAY DE SUCESSO (Conta Criada) -->
<!-- ============================================ -->
<div id="success-overlay-container" class="fixed inset-0 z-[100] hidden bg-background">
    <!-- TopAppBar -->
    <header class="bg-background border-b border-outline-variant docked full-width top-0 z-50">
        <div class="flex justify-between items-center w-full px-container-padding py-base max-w-7xl mx-auto">
            <div class="flex items-center gap-4">
                <span class="font-h3 text-h3 font-bold text-primary-fixed">Skilla</span>
            </div>
            <div class="flex items-center gap-6">
                <button class="material-symbols-outlined text-on-background hover:bg-surface-container-high transition-colors p-2 rounded-full opacity-80">account_circle</button>
            </div>
        </div>
    </header>
    
    <!-- Main Success Content -->
    <main class="flex-grow flex items-center justify-center px-container-padding py-section-gap">
        <div class="max-w-4xl w-full text-center flex flex-col items-center">
            <div class="relative mb-12">
                <div class="absolute inset-0 bg-primary-fixed opacity-10 blur-3xl rounded-full"></div>
                <div class="relative w-48 h-64 bg-surface-container-low border border-outline-variant rounded-lg flex flex-col items-center justify-center p-8 neon-glow">
                    <div class="w-24 h-24 rounded-full bg-surface-container-high flex items-center justify-center mb-6 overflow-hidden border-2 border-primary-fixed">
                        <span class="material-symbols-outlined text-primary-fixed" style="font-size: 64px; font-variation-settings: 'FILL' 1, 'wght' 300, 'GRAD' 0, 'opsz' 48;">person</span>
                    </div>
                    <div class="w-16 h-2 bg-primary-fixed rounded-full mb-3 opacity-80"></div>
                    <div class="w-24 h-2 bg-outline-variant rounded-full opacity-40"></div>
                    <div class="absolute -bottom-4 -right-4 bg-primary-fixed text-on-primary-fixed w-12 h-12 rounded-full flex items-center justify-center shadow-lg border-4 border-background">
                        <span class="material-symbols-outlined font-bold" style="font-variation-settings: 'wght' 700;">check</span>
                    </div>
                </div>
            </div>
            
            <h1 class="font-h1 text-h1 text-primary-fixed mb-6 max-w-3xl leading-tight">Parabéns, sua conta foi criada com sucesso!</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">Sua jornada profissional em Angola começa agora. Vamos começar a encontrar os melhores talentos e oportunidades para o seu projeto.</p>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-surface border-t border-outline-variant full-width">
        <div class="flex flex-col md:flex-row justify-between items-center w-full px-container-padding py-card-padding gap-base max-w-7xl mx-auto">
            <span class="font-label-caps text-label-caps text-on-surface">Skilla Angolan Marketplace</span>
            <div class="flex gap-8">
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="#">Privacidade</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="#">Termos de Serviço</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="#">Ajuda</a>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant opacity-60">© 2024 Skilla. Todos os direitos reservados.</p>
        </div>
    </footer>
    
    <!-- Decorative Elements -->
    <div class="fixed top-1/4 -left-12 w-24 h-[1px] bg-primary-fixed opacity-20 rotate-45 pointer-events-none"></div>
    <div class="fixed bottom-1/4 -right-12 w-48 h-[1px] bg-primary-fixed opacity-10 -rotate-12 pointer-events-none"></div>
</div>

<!-- ============================================ -->
<!-- PÁGINA DE CADASTRO PRINCIPAL -->
<!-- ============================================ -->

<!-- TopAppBar -->
<header class="bg-background border-b border-outline-variant docked full-width top-0 z-50">
    <div class="flex justify-between items-center w-full px-container-padding py-base max-w-7xl mx-auto">
        <div class="flex items-center gap-4">
            <a href="/" class="font-h3 text-h3 font-bold text-primary-fixed">Skilla</a>
        </div>
        <div class="flex items-center gap-6">
            <span class="font-body-md text-body-md text-on-surface-variant">Já tem conta?</span>
            <a href="/login" class="font-body-md text-body-md text-primary-fixed hover:opacity-80 transition-opacity">Entrar</a>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center px-container-padding py-section-gap">
    <div class="max-w-2xl w-full">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="font-h2 text-h2 text-primary-fixed mb-4">Criar Conta Cliente</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Encontre os melhores talentos de Angola para o seu projeto</p>
        </div>

        <!-- Form Card -->
        <div class="bg-surface-container rounded-xl border border-outline-variant p-card-padding space-y-6">
            <form action="{{ route('registar') }}" method="POST" id="register-form" class="space-y-6" novalidate>
                @csrf

                <!-- Nome e Sobrenome -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps uppercase text-on-surface-variant">Primeiro Nome</label>
                        <input 
                            type="text" 
                            name="primeiro_nome"
                            placeholder="Ex: Edson" 
                            class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-primary-fixed focus:ring-0 py-4 px-0 transition-all font-body-md text-on-background appearance-none"
                            autocomplete="given-name"
                        />
                        <span id="first-name-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">error</span>
                            <span></span>
                        </span>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps uppercase text-on-surface-variant">Sobrenome</label>
                        <input 
                            type="text" 
                            name="sobrenome"
                            placeholder="Ex: Manuel" 
                            class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-primary-fixed focus:ring-0 py-4 px-0 transition-all font-body-md text-on-background appearance-none"
                            autocomplete="family-name"
                        />
                        <span id="last-name-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">error</span>
                            <span></span>
                        </span>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex flex-col gap-2">
                    <label class="font-label-caps text-label-caps uppercase text-on-surface-variant">E-mail</label>
                    <input 
                        type="email" 
                        name="email"
                        placeholder="Ex: edson@exemplo.com" 
                        class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-primary-fixed focus:ring-0 py-4 px-0 transition-all font-body-md text-on-background appearance-none"
                        autocomplete="email"
                    />
                    <span id="email-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">error</span>
                        <span></span>
                    </span>
                </div>

                <!-- Senha -->
                <div class="flex flex-col gap-2">
                    <label class="font-label-caps text-label-caps uppercase text-on-surface-variant">Senha</label>
                    <div class="relative">
                        <input 
                            type="password" 
                            name="password"
                            id="password-input"
                            placeholder="Senha (8 ou mais caracteres)" 
                            class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-primary-fixed focus:ring-0 py-4 px-0 pr-12 transition-all font-body-md text-on-background appearance-none"
                            autocomplete="new-password"
                        />
                        <button 
                            type="button" 
                            id="toggle-password"
                            class="absolute right-0 top-1/2 -translate-y-1/2 p-2 text-on-surface-variant hover:text-primary-fixed transition-colors"
                        >
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                    <span id="password-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">error</span>
                        <span></span>
                    </span>
                </div>

                <!-- Província -->
                <div class="flex flex-col gap-2">
                    <label class="font-label-caps text-label-caps uppercase text-on-surface-variant">Província</label>
                    <select name="provincia_id" class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-primary-fixed focus:ring-0 py-4 px-0 transition-all font-body-md text-on-background appearance-none cursor-pointer">
                        <option disabled selected value="">Selecione a província</option>
                        <option value="bengo">Bengo</option>
                        <option value="benguela">Benguela</option>
                        <option value="bie">Bié</option>
                        <option value="cabinda">Cabinda</option>
                        <option value="cunene">Cunene</option>
                        <option value="huambo">Huambo</option>
                        <option value="huila">Huíla</option>
                        <option value="kuando-kubango">Kuando Kubango</option>
                        <option value="kwanza-norte">Kwanza Norte</option>
                        <option value="kwanza-sul">Kwanza Sul</option>
                        <option value="luanda">Luanda</option>
                        <option value="lunda-norte">Lunda Norte</option>
                        <option value="lunda-sul">Lunda Sul</option>
                        <option value="malanje">Malanje</option>
                        <option value="moxico">Moxico</option>
                        <option value="namibe">Namibe</option>
                        <option value="uige">Uíge</option>
                        <option value="zaire">Zaire</option>
                    </select>
                    <span id="province-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">error</span>
                        <span></span>
                    </span>
                </div>

                <!-- Termos -->
                <div class="flex items-start gap-4 pt-4">
                    <input 
                        type="checkbox" 
                        id="terms-checkbox" 
                        name="terms"
                        class="mt-1 w-5 h-5 rounded border-outline-variant bg-surface-container-low text-primary-fixed focus:ring-primary-fixed focus:ring-2"
                    />
                    <label for="terms-checkbox" class="font-body-md text-body-md text-on-surface-variant cursor-pointer">
                        Eu concordo com os <a href="/termos" class="text-primary-fixed hover:underline">Termos de Serviço</a> e 
                        <a href="/privacidade" class="text-primary-fixed hover:underline">Política de Privacidade</a>
                    </label>
                </div>
                <span id="terms-error" class="font-body-md text-body-md text-error hidden flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">error</span>
                    <span></span>
                </span>

                <!-- Submit Button -->
                <button 
                    type="button" 
                    id="submit-btn"
                    disabled
                    class="w-full bg-primary-fixed text-on-primary-fixed font-body-lg py-4 px-6 rounded-lg font-bold transition-all opacity-40 cursor-not-allowed hover:opacity-100 disabled:opacity-40 disabled:cursor-not-allowed"
                >
                    Criar Conta Cliente
                </button>
            </form>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-8">
            <p class="font-body-md text-body-md text-on-surface-variant">
                Já tem uma conta? <a href="/login" class="text-primary-fixed hover:underline font-semibold">Faça login</a>
            </p>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-surface border-t border-outline-variant full-width">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-container-padding py-card-padding gap-base max-w-7xl mx-auto">
        <span class="font-label-caps text-label-caps text-on-surface">Skilla Angolan Marketplace</span>
        <div class="flex gap-8">
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="/privacidade">Privacidade</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="/termos">Termos de Serviço</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary-fixed transition-colors" href="/ajuda">Ajuda</a>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant opacity-60">© 2024 Skilla. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- ============================================ -->
<!-- JAVASCRIPT -->
<!-- ============================================ -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // --- Seleção de Elementos ---
  const firstNameInput = document.querySelector('input[placeholder="Ex: Edson"]');
  const lastNameInput = document.querySelector('input[placeholder="Ex: Manuel"]');
  const emailInput = document.querySelector('input[type="email"]');
  const passwordInput = document.getElementById('password-input');
  const provinceSelect = document.querySelector('select');
  const termsCheckbox = document.getElementById('terms-checkbox');
  const submitButton = document.getElementById('submit-btn');

  // Error spans
  const firstNameError = document.getElementById('first-name-error');
  const lastNameError = document.getElementById('last-name-error');
  const emailError = document.getElementById('email-error');
  const passwordError = document.getElementById('password-error');
  const provinceError = document.getElementById('province-error');
  const termsError = document.getElementById('terms-error');

  // Overlays
  const loadingOverlay = document.getElementById('loading-overlay');
  const successOverlay = document.getElementById('success-overlay-container');

  // --- Password Toggle ---
  const togglePasswordBtn = document.getElementById('toggle-password');
  if (togglePasswordBtn) {
    togglePasswordBtn.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      const icon = this.querySelector('span');
      if (icon) {
        icon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
      }
    });
  }

  // --- Funções de Validação ---
  function showError(input, errorSpan, message) {
    if(input) input.classList.add('border-error');
    if(errorSpan) {
      errorSpan.querySelector('span:last-child').textContent = message;
      errorSpan.classList.remove('hidden');
    }
  }

  function hideError(input, errorSpan) {
    if(input) input.classList.remove('border-error');
    if(errorSpan) errorSpan.classList.add('hidden');
  }

  function validateFirstName() {
    const value = firstNameInput?.value.trim() || '';
    if (value === '') {
      showError(firstNameInput, firstNameError, 'Por favor, insira seu primeiro nome');
      return false;
    } else {
      hideError(firstNameInput, firstNameError);
      return true;
    }
  }

  function validateLastName() {
    const value = lastNameInput?.value.trim() || '';
    if (value === '') {
      showError(lastNameInput, lastNameError, 'Por favor, insira seu sobrenome');
      return false;
    } else {
      hideError(lastNameInput, lastNameError);
      return true;
    }
  }

  function validateEmail() {
    const value = emailInput?.value.trim() || '';
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (value === '') {
      showError(emailInput, emailError, 'Por favor, insira um endereço de e-mail');
      return false;
    } else if (!emailPattern.test(value)) {
      showError(emailInput, emailError, 'Por favor, insira um endereço de e-mail válido');
      return false;
    } else {
      hideError(emailInput, emailError);
      return true;
    }
  }

  function validatePassword() {
    const value = passwordInput?.value || '';
    if (value.length < 8) {
      showError(passwordInput, passwordError, 'A senha deve ter pelo menos 8 caracteres');
      return false;
    } else {
      hideError(passwordInput, passwordError);
      return true;
    }
  }

  function validateProvince() {
    const value = provinceSelect?.value || '';
    if (value === '') {
      showError(provinceSelect, provinceError, 'Por favor, selecione uma província');
      return false;
    } else {
      hideError(provinceSelect, provinceError);
      return true;
    }
  }

  function validateTerms() {
    if (!termsCheckbox?.checked) {
      showError(termsCheckbox, termsError, 'Você deve aceitar os Termos de Serviço e Política de Privacidade');
      return false;
    } else {
      hideError(termsCheckbox, termsError);
      return true;
    }
  }

  // --- Atualizar Estado do Botão ---
  function updateSubmitButtonState() {
    const isFirstNameValid = validateFirstName();
    const isLastNameValid = validateLastName();
    const isEmailValid = validateEmail();
    const isPasswordValid = validatePassword();
    const isProvinceValid = validateProvince();
    const isTermsValid = validateTerms();

    const isFormValid = isFirstNameValid && isLastNameValid && isEmailValid && 
                        isPasswordValid && isProvinceValid && isTermsValid;

    if (isFormValid && submitButton) {
      submitButton.removeAttribute('disabled');
      submitButton.classList.remove('opacity-40', 'cursor-not-allowed');
    } else if (submitButton) {
      submitButton.setAttribute('disabled', '');
      submitButton.classList.add('opacity-40', 'cursor-not-allowed');
    }
  }

  // --- Loading Toggle ---
  function toggleLoading(show) {
    if (show) {
      if(loadingOverlay) loadingOverlay.classList.remove('hidden');
      if(submitButton) {
        submitButton.disabled = true;
        submitButton.classList.add('opacity-50', 'cursor-not-allowed');
      }
    } else {
      if(loadingOverlay) loadingOverlay.classList.add('hidden');
      if(submitButton) {
        submitButton.disabled = false;
        submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
      }
    }
  }

  // --- Event Listeners para Validação em Tempo Real ---
  if(firstNameInput) firstNameInput.addEventListener('input', function() { validateFirstName(); updateSubmitButtonState(); });
  if(lastNameInput) lastNameInput.addEventListener('input', function() { validateLastName(); updateSubmitButtonState(); });
  if(emailInput) emailInput.addEventListener('input', function() { validateEmail(); updateSubmitButtonState(); });
  if(passwordInput) passwordInput.addEventListener('input', function() { validatePassword(); updateSubmitButtonState(); });
  if(provinceSelect) provinceSelect.addEventListener('change', function() { validateProvince(); updateSubmitButtonState(); });
  if(termsCheckbox) termsCheckbox.addEventListener('change', function() { validateTerms(); updateSubmitButtonState(); });

  // --- Submit Button Logic ---
  if(submitButton) {
    submitButton.addEventListener('click', async function(e) {
      e.preventDefault();

      // Validação final antes de enviar
      updateSubmitButtonState();

      const isFirstNameValid = validateFirstName();
      const isLastNameValid = validateLastName();
      const isEmailValid = validateEmail();
      const isPasswordValid = validatePassword();
      const isProvinceValid = validateProvince();
      const isTermsValid = validateTerms();

      if (!isFirstNameValid || !isLastNameValid || !isEmailValid || 
          !isPasswordValid || !isProvinceValid || !isTermsValid) {
        return;
      }

      // Preparar Dados
      const formData = new FormData();
      formData.append('primeiro_nome', firstNameInput.value.trim());
      formData.append('sobrenome', lastNameInput.value.trim());
      formData.append('email', emailInput.value.trim());
      formData.append('password', passwordInput.value);
      formData.append('provincia_id', provinceSelect.value);
      formData.append('funcao', 'cliente'); // ← CLIENTE

      // Mostrar loading
      toggleLoading(true);

      try {
        const response = await fetch('/registar', {  // ✅ Correto
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const data = await response.json();

        if (response.ok) {
          // SUCESSO
          toggleLoading(false);
          
          // Mostrar overlay de sucesso
          if(successOverlay) {
            successOverlay.classList.remove('hidden');
          }

          setTimeout(() => {
            // Redirecionamento baseado no role retornado
            if (data.role === 'cliente') {
                window.location.href = '/painel/cliente';
            } else {
                window.location.href = '/painel/freelancer';
            }
          }, 3000);

        } else if (response.status === 422) {
          // ERRO DE VALIDAÇÃO DO SERVIDOR
          toggleLoading(false);
          
          if (data.errors) {
            const errorMap = {
              'primeiro_nome': 'primeiro_nome',
              'sobrenome': 'sobrenome',
              'email': 'email',
              'password': 'password',
              'provincia_id': 'provincia'
            };

            for (const [key, messages] of Object.entries(data.errors)) {
              const frontendKey = errorMap[key];
              if (frontendKey) {
                if (frontendKey === 'primeiro_nome') showError(firstNameInput, firstNameError, messages[0]);
                else if (frontendKey === 'sobrenome') showError(lastNameInput, lastNameError, messages[0]);
                else if (frontendKey === 'email') showError(emailInput, emailError, messages[0]);
                else if (frontendKey === 'password') showError(passwordInput, passwordError, messages[0]);
                else if (frontendKey === 'provincia') showError(provinceSelect, provinceError, messages[0]);
              }
            }
          }
          updateSubmitButtonState();
          
        } else {
          // ERRO DO SERVIDOR
          toggleLoading(false);
          alert('Ocorreu um erro inesperado. Tente novamente.');
        }

      } catch (error) {
        toggleLoading(false);
        console.error('Erro:', error);
        alert('Erro de conexão. Verifique sua internet.');
      }
    });
  }

  // --- Validação Inicial ao Carregar ---
  validateFirstName();
  validateLastName();
  validateEmail();
  validatePassword();
  validateProvince();
  validateTerms();
  updateSubmitButtonState();
});
</script>

</body>
</html>