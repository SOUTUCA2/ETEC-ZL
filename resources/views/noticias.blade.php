@extends('app')

@section('content')
    <section class="space-y-16 py-20 bg-white dark:bg-gray-900">
        {{-- Hero --}}
        <div class="border-8 border-red-500 dark:border-red-400 bg-red-500 text-white p-20 lg:p-32 shadow-3xl rounded-none text-center max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <h1 class="text-6xl lg:text-8xl font-black mb-8 drop-shadow-4xl uppercase tracking-widest text-center break-all text-white">NOTÍCIAS</h1>
            <p class="text-2xl lg:text-3xl mb-12 font-bold drop-shadow-2xl max-w-4xl mx-auto leading-relaxed text-white">
                Fique por dentro das últimas notícias, eventos e conquistas da ETEC Zona Leste.
            </p>
        </div>

        {{-- Notícias Grid --}}
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12" data-aos="fade-up" data-aos-delay="200">
                <!-- Notícia 1 -->
                <article class="group border-4 border-red-500 bg-white dark:bg-gray-800 shadow-2xl hover:shadow-3xl transition-all duration-300 rounded-none overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-full h-64 bg-red-500 flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform overflow-hidden">
                        <div class="text-center text-white">
                            <div class="text-6xl mb-8">📜</div>
                            <h4 class="text-3xl font-black mb-4 break-words">VESTIBULINHO</h4>
                            <p class="text-xl font-semibold">Resultado 2026</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-4 py-2 text-sm font-bold uppercase tracking-wide mb-4 block">
                            15 Janeiro 2026
                        </span>
                        <h2 class="text-2xl font-black text-black dark:text-red-400 mb-6 drop-shadow-xl break-all">Resultado Vestibulinho 1º Semestre 2026</h2>
                        <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 font-semibold leading-relaxed">Lista de aprovados publicada. Matrículas 20-30 janeiro. Vagas remanescentes 05/02.</p>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-black font-bold text-xl underline decoration-4 decoration-red-500 hover:decoration-black transition-all">
                            Leia Mais →
                        </a>
                    </div>
                </article>

                <!-- Notícia 2 -->
                <article class="group border-4 border-red-500 bg-white dark:bg-gray-800 shadow-2xl hover:shadow-3xl transition-all duration-300 rounded-none overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-full h-64 bg-black flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform overflow-hidden">
                        <div class="text-center text-white">
                            <div class="text-6xl mb-8">📝</div>
                            <h4 class="text-3xl font-black mb-4 break-words">INSCRIÇÕES</h4>
                            <p class="text-xl font-semibold">Aberto agora</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 px-4 py-2 text-sm font-bold uppercase tracking-wide mb-4 block">
                            10 Dezembro 2025
                        </span>
                        <h2 class="text-2xl font-black text-black dark:text-red-400 mb-6 drop-shadow-xl break-all">Inscrições 2º Semestre 2026</h2>
                        <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 font-semibold leading-relaxed">240 vagas nos 5 cursos. Inscrições gratuitas online até 15 maio.</p>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-black font-bold text-xl underline decoration-4 decoration-red-500 hover:decoration-black transition-all">
                            Leia Mais →
                        </a>
                    </div>
                </article>

                <!-- Notícia 3 -->
                <article class="group border-4 border-red-500 bg-white dark:bg-gray-800 shadow-2xl hover:shadow-3xl transition-all duration-300 rounded-none overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-full h-64 bg-red-500 flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform overflow-hidden">
                        <div class="text-center text-white">
                            <div class="text-6xl mb-8">🎉</div>
                            <h4 class="text-3xl font-black mb-4 break-words">EVENTO</h4>
                            <p class="text-xl font-semibold">15/12</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-4 py-2 text-sm font-bold uppercase tracking-wide mb-4 block">
                            25 Novembro 2025
                        </span>
                        <h2 class="text-2xl font-black text-black dark:text-red-400 mb-6 drop-shadow-xl break-all">Feira Profissões 15/12</h2>
                        <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 font-semibold leading-relaxed">Laboratórios, professores, alunos. Programação completa.</p>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-black font-bold text-xl underline decoration-4 decoration-red-500 hover:decoration-black transition-all">
                            Leia Mais →
                        </a>
                    </div>
                </article>

                <!-- Notícia 4 Full Width -->
                <article class="md:col-span-2 lg:col-span-3 group border-8 border-red-500 bg-black text-white shadow-4xl hover:shadow-5xl transition-all duration-300 rounded-none overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-full h-80 bg-red-500 flex items-center justify-center shadow-4xl group-hover:scale-105 transition-transform overflow-hidden">
                        <div class="text-center text-white">
                            <div class="text-7xl mb-12">🏆</div>
                            <h4 class="text-4xl font-black mb-8 break-words">HACKATHON REGIONAL</h4>
                            <p class="text-2xl font-semibold">1º Lugar ETEC ZL</p>
                        </div>
                    </div>
                    <div class="p-16">
                        <span class="inline-block bg-gray-700 text-gray-200 px-6 py-3 text-lg font-bold uppercase tracking-wide mb-8 block">
                            01 Novembro 2025
                        </span>
                        <h2 class="text-4xl font-black text-white mb-12 drop-shadow-xl break-all">Alunos Desenvolvimento Sistemas vencem Hackathon Regional</h2>
                        <p class="text-2xl leading-relaxed mb-12 font-semibold">Equipe "CodeZona" 1º lugar com app gestão escolar. Premiação R$5.000. Desenvolvimento durante curso.</p>
                        <a href="#" class="text-red-400 hover:text-white font-bold text-2xl underline decoration-8 decoration-red-400 hover:decoration-white transition-all">
                            Leia Notícia Completa →
                        </a>
                    </div>
                </article>
            </div>
        </div>

        {{-- Newsletter --}}
        <div class="max-w-4xl mx-auto px-4 text-center border-t-8 border-red-500 pt-24" data-aos="fade-up">
            <h2 class="text-5xl font-black text-black dark:text-red-400 mb-12 uppercase tracking-widest drop-shadow-3xl break-words">Fique por Dentro</h2>
            <div class="max-w-2xl mx-auto">
                <p class="text-2xl text-gray-700 dark:text-gray-300 mb-12 leading-relaxed font-semibold">
                    Cadastre-se para atualizações sobre inscrições, resultados e eventos da ETEC Zona Leste.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" class="flex-1 border-4 border-red-500 p-6 bg-gray-100 dark:bg-gray-700 text-xl text-black dark:text-white focus:outline-none focus:border-black rounded-none shadow-xl" placeholder="Seu email">
                    <button class="bg-red-500 hover:bg-black text-white dark:text-black dark:bg-red-400 dark:hover:bg-red-500 border-4 border-red-500 hover:border-black px-20 py-6 font-black text-2xl shadow-3xl hover:shadow-4xl transition-all duration-300 uppercase tracking-widest rounded-none">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
