@extends('app')

@section('content')
    <section class="space-y-12 py-20 bg-white dark:bg-gray-900">
        {{-- Hero Section --}}
        <div class="border-4 border-red-500 dark:border-yellow-400 bg-white dark:bg-black p-12 lg:p-20 shadow-2xl rounded-none max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <div class="text-center">
                <h1 class="text-5xl lg:text-7xl font-black mb-8 text-black dark:text-yellow-400 drop-shadow-2xl tracking-tight">
                    ETEC ZONA LESTE
                </h1>
                <p class="text-2xl mb-12 text-gray-700 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed font-medium">
                    Seu futuro começa aqui. Cursos técnicos de excelência na Zona Leste de São Paulo.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="/cursos" class="bg-yellow-400 dark:bg-yellow-300 text-black dark:text-gray-900 px-12 py-6 rounded-none font-bold text-xl shadow-2xl hover:shadow-3xl transition-all duration-300 hover:bg-yellow-500 dark:hover:bg-yellow-200 border-4 border-yellow-500 dark:border-yellow-400 uppercase tracking-wider">
                        Cursos →
                    </a>
                    <a href="/vestibulinho" class="border-4 border-red-500 dark:border-yellow-400 text-red-600 dark:text-yellow-400 bg-white dark:bg-black px-12 py-6 rounded-none font-bold text-xl hover:bg-red-500 dark:hover:bg-red-600 hover:text-white dark:hover:text-white transition-all duration-300 shadow-xl hover:shadow-2xl uppercase tracking-wider">
                        Vestibulinho
                    </a>
                </div>
            </div>
        </div>

        {{-- Features Cards 2x2 All Clickable --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto px-4">
            <!-- Cursos Card -->
            <a href="/cursos" class="block border-4 border-yellow-500 dark:border-yellow-400 bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-4 group overflow-hidden no-underline" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-24 h-24 bg-yellow-500 dark:bg-yellow-400 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                    <svg class="w-12 h-12 text-black dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black mb-6 text-center text-black dark:text-yellow-400 drop-shadow-xl break-words">CURSOS TÉCNICOS</h2>
                <p class="text-xl text-gray-800 dark:text-gray-300 text-center font-bold leading-tight">Cursos Variados<br>DS • Admin • RH</p>
            </a>

            <!-- Infraestrutura Card -->
            <a href="/infraestrutura" class="block border-4 border-red-500 dark:border-red-400 bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-4 group overflow-hidden no-underline" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-24 h-24 bg-red-500 dark:bg-red-400 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                    <svg class="w-12 h-12 text-white dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black mb-6 text-center text-black dark:text-red-400 drop-shadow-xl break-words">INFRAESTRUTURA</h2>
                <p class="text-xl text-gray-800 dark:text-gray-300 text-center font-bold leading-tight">Laboratórios<br>Wi-Fi • Ar • Digital</p>
            </a>

            <!-- Vestibulinho Card -->
            <a href="/vestibulinho" class="block border-4 border-yellow-500 dark:border-yellow-400 bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-4 group overflow-hidden no-underline" data-aos="zoom-in" data-aos-delay="400">
                <div class="w-24 h-24 bg-black dark:bg-gray-900 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black mb-6 text-center text-black dark:text-yellow-400 drop-shadow-xl break-words">VESTIBULINHO</h2>
                <p class="text-xl text-gray-800 dark:text-gray-300 text-center font-bold leading-tight">Inscrições 2025<br>Provas e Informações</p>
            </a>

            <!-- Contato Card -->
            <a href="/contato" class="block border-4 border-red-500 dark:border-red-400 bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-4 group overflow-hidden no-underline" data-aos="zoom-in" data-aos-delay="500">
                <div class="w-24 h-24 bg-yellow-500 dark:bg-yellow-400 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                    <svg class="w-12 h-12 text-black dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black mb-6 text-center text-black dark:text-red-400 drop-shadow-xl break-words">CONTATO FÁCIL</h2>
                <p class="text-xl text-gray-800 dark:text-gray-300 text-center font-bold leading-tight">WhatsApp • Telefone<br>Seg-Sex Suporte</p>
            </a>
        </div>

        {{-- Latest News (rest unchanged) --}}
        <div class="border-8 border-red-500 dark:border-yellow-400 bg-white dark:bg-gray-800 p-16 rounded-none shadow-3xl max-w-7xl mx-auto mx-4 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center mb-20">
                <h2 class="text-5xl font-black text-black dark:text-yellow-400 mb-12 drop-shadow-3xl tracking-tight">ÚLTIMAS NOTÍCIAS</h2>
                <a href="/noticias" class="inline-block bg-black dark:bg-yellow-400 text-yellow-400 dark:text-black hover:bg-gray-800 dark:hover:bg-yellow-500 font-black text-2xl px-12 py-6 rounded-none transition-all duration-300 shadow-2xl border-4 border-red-500 dark:border-yellow-400 uppercase tracking-widest">
                    Ver Todas →
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-gray-50 dark:bg-gray-800/70 border-4 border-yellow-500 dark:border-yellow-400 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <h3 class="text-2xl font-black text-black dark:text-yellow-400 mb-8 drop-shadow-xl">Novos Cursos 2025</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 mb-12 font-semibold">Inscrições TI Nuvem • Automação Industrial.</p>
                    <a href="/noticias" class="text-red-600 dark:text-yellow-400 bg-white dark:bg-gray-900 hover:bg-red-500 dark:hover:bg-red-600 hover:text-white dark:hover:text-black font-bold px-8 py-4 rounded-none transition-all border-2 border-red-500 dark:border-yellow-400 uppercase text-lg">
                        Ler Mais →
                    </a>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800/70 border-4 border-black dark:border-red-400 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <h3 class="text-2xl font-black text-black dark:text-red-400 mb-8 drop-shadow-xl">Dia Aberto ETEC</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 mb-12 font-semibold">Infraestrutura 15/12 às 14h.</p>
                    <a href="/noticias" class="text-black dark:text-yellow-400 bg-yellow-400 dark:bg-gray-900 hover:bg-black dark:hover:bg-yellow-500 hover:text-yellow-400 font-bold px-8 py-4 rounded-none transition-all border-2 border-black dark:border-yellow-400 uppercase text-lg">
                        Ler Mais →
                    </a>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800/70 border-4 border-red-500 dark:border-red-400 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <h3 class="text-2xl font-black text-black dark:text-yellow-400 mb-8 drop-shadow-xl">Bolsas Estudo</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 mb-12 font-semibold">50% vagas desconto baixa renda.</p>
                    <a href="/noticias" class="text-red-600 dark:text-yellow-400 bg-white dark:bg-gray-900 hover:bg-red-500 dark:hover:bg-red-600 hover:text-white dark:hover:text-black font-bold px-8 py-4 rounded-none transition-all border-2 border-red-500 dark:border-red-400 uppercase text-lg">
                        Ler Mais →
                    </a>
                </div>
            </div>
        </div>

        {{-- About Section (rest unchanged) --}}
        <div class="border-8 border-yellow-500 dark:border-red-400 bg-gray-50 dark:bg-gray-900 p-20 rounded-none shadow-3xl max-w-7xl mx-auto mx-4 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-5xl lg:text-6xl font-black mb-20 text-center text-black dark:text-yellow-400 drop-shadow-3xl uppercase tracking-widest break-words">POR QUE ETEC ZONA LESTE?</h2>
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div>
                    <ul class="space-y-12 text-2xl">
                        <li class="flex items-start bg-red-500/20 dark:bg-red-900/50 p-12 rounded-none border-l-8 border-yellow-500 dark:border-yellow-400 shadow-xl overflow-hidden">
                            <svg class="w-12 h-12 text-red-600 dark:text-red-400 mt-2 mr-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-black text-black dark:text-gray-200 leading-tight break-words">Professores qualificados com experiência mercado</span>
                        </li>
                        <li class="flex items-start bg-yellow-500/20 dark:bg-yellow-900/50 p-12 rounded-none border-l-8 border-red-500 dark:border-red-400 shadow-xl overflow-hidden">
                            <svg class="w-12 h-12 text-yellow-600 dark:text-yellow-400 mt-2 mr-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-black text-black dark:text-gray-200 leading-tight break-words">Certificação reconhecida todo estado SP</span>
                        </li>
                        <li class="flex items-start bg-red-500/20 dark:bg-red-900/50 p-12 rounded-none border-l-8 border-yellow-500 dark:border-yellow-400 shadow-xl overflow-hidden">
                            <svg class="w-12 h-12 text-red-600 dark:text-red-400 mt-2 mr-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-black text-black dark:text-gray-200 leading-tight break-words">Parcerias empresas estágios remunerados</span>
                        </li>
                        <li class="flex items-start bg-yellow-500/20 dark:bg-yellow-900/50 p-12 rounded-none border-l-8 border-red-500 dark:border-red-400 shadow-xl overflow-hidden">
                            <svg class="w-12 h-12 text-yellow-600 dark:text-yellow-400 mt-2 mr-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-black text-black dark:text-gray-200 leading-tight break-words">Laboratórios equipados aulas práticas</span>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <div class="stats w-full shadow-4xl bg-black dark:bg-gray-800 border-8 border-red-500 dark:border-yellow-400 p-16 rounded-none text-white space-y-12 overflow-hidden">
                        <div class="stat place-items-center">
                            <div class="stat-title text-2xl font-black text-yellow-400 uppercase tracking-wide break-words">Alunos Formados</div>
                            <div class="stat-value text-7xl font-black text-yellow-400">5.000+</div>
                        </div>
                        <div class="stat place-items-center">
                            <div class="stat-title text-2xl font-black text-red-300 uppercase tracking-wide">Cursos</div>
                            <div class="stat-value text-7xl font-black text-red-300">DIVERSOS</div>
                        </div>
                        <div class="stat place-items-center">
                            <div class="stat-title text-2xl font-black text-yellow-400 uppercase tracking-wide">Taxa Emprego</div>
                            <div class="stat-value text-7xl font-black text-yellow-400">92%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
