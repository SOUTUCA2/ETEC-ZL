<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ETEC Zona Leste</title>
<script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {}
        }
      }
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-red: #b91c1c;
            --primary-blue: #1e40af;
            --bg-white: #ffffff;
            --text-slate: #334155;
        }

        .dark {
            --primary-red: #dc2626;
            --primary-blue: #3b82f6;
            --bg-white: #1f2937;
            --text-slate: #f1f5f9;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 5px rgba(30, 64, 175, 0.5); }
            50% { box-shadow: 0 0 20px rgba(30, 64, 175, 0.8), 0 0 30px rgba(30, 64, 175, 0.6); }
        }

        .dark .animate-glow {
            animation: glow 2s ease-in-out infinite;
        }

        /* Modern CSS Grid and Flexbox are already used */
        /* Adding CSS Container Queries for responsive design */
        @container (min-width: 768px) {
            .card-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 text-slate-900 dark:text-white min-h-screen">

    <header class="bg-red-700 dark:bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="text-lg font-semibold">ETEC Zona Leste</div>
            <div class="flex items-center gap-6">
                <button id="theme-toggle" class="p-2 bg-white dark:bg-gray-700 text-gray-800 dark:text-white transition rounded-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
                <nav class="flex gap-6">
                    <a href="/" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Início</a>
                    <a href="/noticias" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Notícias</a>
                    <a href="/cursos" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Cursos</a>
                    <a href="/vestibulinho" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Vestibulinho</a>
                    <a href="/sobre" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Sobre</a>
                    <a href="/contato" class="hover:text-slate-200 dark:hover:text-gray-300 transition">Contato</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="bg-red-700 dark:bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-6 text-sm text-center">
            © 2026 ETEC Zona Leste — Rua Exemplo, 123
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        console.log('Script loaded');
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

// Smooth Dark mode toggle - no reload
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Sun and Moon icons
        const sunIcon = `<svg class="w-5 h-5 transition-transform" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.706a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.708zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>`;
        const moonIcon = `<svg class="w-5 h-5 transition-transform" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>`;

        // Load saved theme
const savedTheme = localStorage.getItem('theme') || 'light';
        const isDark = savedTheme === 'dark';
// html.classList.toggle('dark', isDark); light default
themeToggle.innerHTML = sunIcon;

        // Toggle theme smoothly
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const newIsDark = html.classList.contains('dark');
            localStorage.setItem('theme', newIsDark ? 'dark' : 'light');
themeToggle.innerHTML = newIsDark ? sunIcon : moonIcon;
        });

        // Add smooth transitions
        html.classList.add('transition-all', 'duration-300');
        document.body.classList.add('transition-colors', 'duration-300');
    </script>

</body>
</html>
