<!DOCTYPE html>
<html class="dark" lang="pt-AO">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login | SKILLA</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#caf216",
                        "background": "#f8fafc",
                        "surface": "#ffffff",
                        "brand-purple": "#8B5CF6",
                        "brand-blue": "#3B82F6",
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "label-caps": ["Space Grotesk"],
                        "h1": ["Space Grotesk"],
                        "h2": ["Space Grotesk"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "h1": ["72px", {"lineHeight": "1.0", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                        "h2": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.03em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0em", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #F1F5F9;
            color: #0F172A;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        #logo_plataforma {
            width: 80px;
            height: 80px;
        }
        .login-card {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
        }
        .input-shadow {
            box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.05);
        }
        .gradient-button {
            background-color: #00008B;
            color: black;
        }
    </style>
</head>
<body class="font-body-md antialiased">

<!-- TopNavBar (Mantida igual ao cadastro para consistência) -->


<main class="min-h-screen pt-32 pb-20 flex items-center justify-center px-4">
    
    <!-- Login Card (Baseado na Imagem 2) -->
    <div class="w-full max-w-md bg-white rounded-[3rem] p-8 md:p-12 login-card relative overflow-hidden">
        
        <!-- Header do Card -->
        <div class="flex flex-col items-center mb-10">
            <img id="logo_plataforma" src="{{ asset('img/logo_skilla8_invertido-removebg-preview.png') }}" alt="SKILLA">
            <!-- Ícone de Perfil Gradiente -->
            <div style="background-color: #00008B" class="w-24 h-24 rounded-full flex items-center justify-center text-white mb-4 shadow-lg">
                <span class="material-symbols-outlined text-5xl">person</span>
            </div>
            <h1 class="font-h1 text-4xl text-slate-800 font-bold">Login</h1>
        </div>

        <form class="space-y-6">
            <!-- Email Field -->
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center px-1">
                    <label class="font-body-md font-semibold text-slate-600">Email</label>
                    <a href="#" class="text-xs text-blue-500 hover:underline font-medium">Esqueceu a senha?</a>
                </div>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                    <input class="w-full bg-slate-50 border border-slate-100 input-shadow rounded-full py-4 pl-12 pr-4 focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all font-body-md text-slate-700" 
                           placeholder="Digite seu e-mail" type="email"/>
                </div>
            </div>

            <!-- Password Field -->
            <div class="flex flex-col gap-2">
                <label class="font-body-md font-semibold text-slate-600 px-1">Senha</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                    <input class="w-full bg-slate-50 border border-slate-100 input-shadow rounded-full py-4 pl-12 pr-4 focus:ring-2 focus:ring-blue-400 focus:border-transparent outline-none transition-all font-body-md text-slate-700" 
                           placeholder="Digite sua senha" type="password"/>
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full gradient-button text-white font-bold py-4 rounded-full text-lg shadow-lg hover:opacity-90 transition-all active:scale-[0.98] mt-4">
                Entrar
            </button>


            <!-- Sign Up Link -->
            <div class="text-center pt-6">
                <p class="text-body-md text-slate-500">
                    Ainda não registrado? <a href="{{ route('pagina_escolher_funcao') }}" class="text-blue-600 font-bold hover:underline ml-1">Cadastrar-se &rsaquo;</a>
                </p>
            </div>
        </form>
    </div>
</main>

</body>
</html>