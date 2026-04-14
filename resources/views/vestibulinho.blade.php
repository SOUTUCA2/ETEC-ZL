@extends('app')

@section('content')
    <section class="space-y-16 py-20 bg-white dark:bg-gray-900">
        {{-- Hero --}}
        <div class="border-8 border-red-500 dark:border-red-400 bg-red-500 text-white p-20 lg:p-32 shadow-3xl rounded-none text-center max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <h1 class="text-6xl lg:text-8xl font-black mb-8 drop-shadow-4xl uppercase tracking-widest text-center break-all text-white">VESTIBULINHO</h1>
            <p class="text-2xl lg:text-3xl mb-12 font-bold drop-shadow-2xl max-w-4xl mx-auto leading-relaxed text-white">
                Inscreva-se agora para vagas 2º semestre 2026. Processo seletivo gratuito todos cursos técnicos.
            </p>
        </div>

        {{-- Datas Inscrições --}}
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-5xl font-black text-black dark:text-red-400 mb-12 uppercase tracking-widest drop-shadow-xl text-center lg:text-left break-words">PRÓXIMAS INSCRIÇÕES</h2>
                    <div class="space-y-12">
                        <!-- 2º Sem 2026 -->
                        <div class="border-8 border-red-500 bg-white dark:bg-gray-800 p-12 rounded-none shadow-3xl hover:shadow-4xl transition-all">
                            <div class="flex items-center gap-8 mb-8">
                                <div class="w-24 h-24 bg-red-500 rounded-none flex items-center justify-center text-white font-black text-3xl shadow-2xl">2026</div>
                                <div>
                                    <h3 class="text-3xl font-black text-black dark:text-red-400 mb-2 break-all">2º SEMESTRE 2026</h3>
                                    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-300">240 VAGAS</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-8 text-xl font-bold">
                                <div>
                                    <span class="text-red-600 dark:text-red-400 text-2xl block mb-2">INSCRIÇÕES</span>
01/02 - 31/03
                                </div>
                                <div>
                                    <span class="text-red-600 dark:text-red-400 text-2xl block mb-2">PROVAS</span>
05-06/04
                                </div>
                                <div>
                                    <span class="text-red-600 dark:text-red-400 text-2xl block mb-2">RESULTADO</span>
15/04
                                </div>
                                <div>
                                    <span class="text-red-600 dark:text-red-400 text-2xl block mb-2">MATRÍCULAS</span>
20-30/04
                                </div>
                            </div>
                            <a href="#" class="block mt-12 bg-red-500 hover:bg-black text-white font-black text-2xl py-6 px-12 text-center shadow-3xl hover:shadow-4xl transition-all uppercase tracking-widest rounded-none w-max mx-auto">
                                Inscreva-se Agora
                            </a>
                        </div>

                        <!-- 2027 Em Breve -->
                        <div class="border-4 border-gray-500 bg-gray-100 dark:bg-gray-800 p-12 rounded-none shadow-xl hover:shadow-2xl transition-all">
                            <div class="flex items-center gap-8 mb-8">
                                <div class="w-24 h-24 bg-gray-500 rounded-none flex items-center justify-center text-white font-black text-3xl shadow-xl">2027</div>
                                <div>
                                    <h3 class="text-3xl font-black text-black dark:text-gray-400 mb-2 break-all">2º SEMESTRE 2027</h3>
                                    <p class="text-xl font-semibold text-gray-600 dark:text-gray-400">INSCRIÇÕES EM BREVE</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-8 text-xl font-bold mt-8">
                                <div>
                                    <span class="text-gray-600 dark:text-gray-400 text-2xl block mb-2">INSCRIÇÕES</span>
                                    <p class="text-2xl">01/10 - 30/11</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 dark:text-gray-400 text-2xl block mb-2">PROVAS</span>
                                    <p class="text-2xl">05-06/12</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 dark:text-gray-400 text-2xl block mb-2">RESULTADO</span>
                                    <p class="text-2xl">15/12</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 dark:text-gray-400 text-2xl block mb-2">MATRÍCULAS</span>
                                    <p class="text-2xl">20-31/12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-first lg:order-none" data-aos="fade-left">
                    <div class="bg-gray-200 dark:bg-gray-800 w-full h-96 rounded-none border-8 border-black shadow-4xl flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/calendario.jpg') }}" alt="Calendário Vestibulinho 2026 ETEC Zona Leste" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        {{-- Quem Pode Inscrever --}}
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-5xl font-black text-center text-black dark:text-red-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">QUEM PODE</h2>
            <div class="grid md:grid-cols-2 gap-16">
                <div class="border-8 border-red-500 bg-white dark:bg-gray-800 p-16 rounded-none shadow-4xl" data-aos="slide-right">
                    <h3 class="text-4xl font-black text-black dark:text-red-400 mb-12 text-center break-all uppercase">FUNDAMENTAL</h3>
                    <ul class="space-y-6 text-2xl font-bold text-gray-800 dark:text-gray-300">
                        <li class="flex items-start gap-6">
                            <span class="text-red-500 text-3xl flex-shrink-0 mt-1">✓</span>
                            <span>Concluído ou cursando 9º ano</span>
                        </li>
                        <li class="flex items-start gap-6">
                            <span class="text-red-500 text-3xl flex-shrink-0 mt-1">✓</span>
                            <span>14 a 22 anos (Técnico)</span>
                        </li>
                        <li class="flex items-start gap-6">
                            <span class="text-red-500 text-3xl flex-shrink-0 mt-1">✓</span>
                            <span>15 a 23 anos (Integrado)</span>
                        </li>
                    </ul>
                </div>
                <div class="border-8 border-red-500 bg-black text-white p-16 rounded-none shadow-4xl" data-aos="slide-left">
                    <h3 class="text-4xl font-black text-white mb-12 text-center break-all uppercase">DOCUMENTOS</h3>
                    <ul class="space-y-6 text-2xl font-bold">
                        <li class="flex items-start gap-6">
                            <span class="text-red-400 text-3xl flex-shrink-0 mt-1">📄</span>
                            <span>RG e CPF original + cópia</span>
                        </li>
                        <li class="flex items-start gap-6">
                            <span class="text-red-400 text-3xl flex-shrink-0 mt-1">🏠</span>
                            <span>Comprovante residência</span>
                        </li>
                        <li class="flex items-start gap-6">
                            <span class="text-red-400 text-3xl flex-shrink-0 mt-1">📚</span>
                            <span>Histórico escolar 6º ao 9º ano</span>
                        </li>
                        <li class="flex items-start gap-6">
                            <span class="text-red-400 text-3xl flex-shrink-0 mt-1">🖼️</span>
                            <span>2 fotos 3x4 recentes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Como Inscrever --}}
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-5xl font-black text-center text-black dark:text-red-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">COMO SE INSCREVER</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="slide-right">
                    <ol class="space-y-12 text-2xl">
                        <li class="flex items-center gap-8 p-12 bg-gray-100 dark:bg-gray-800 border-l-8 border-red-500 shadow-xl">
                            <span class="text-red-500 font-black text-4xl flex-shrink-0">1</span>
                            <h4 class="text-3xl font-black text-black dark:text-red-400 mb-4 break-all">Site Oficial</h4>
                            <p class="text-xl text-gray-700 dark:text-gray-300 font-semibold">www.vestibulinhoetec.sp.gov.br</p>
                        </li>
                        <li class="flex items-center gap-8 p-12 bg-gray-100 dark:bg-gray-800 border-l-8 border-red-500 shadow-xl">
                            <span class="text-red-500 font-black text-4xl flex-shrink-0">2</span>
                            <h4 class="text-3xl font-black text-black dark:text-red-400 mb-4 break-all">Preencha Inscrição</h4>
                            <p class="text-xl text-gray-700 dark:text-gray-300 font-semibold">Todos dados com atenção. Gratuito.</p>
                        </li>
                        <li class="flex items-center gap-8 p-12 bg-gray-100 dark:bg-gray-800 border-l-8 border-red-500 shadow-xl">
                            <span class="text-red-500 font-black text-4xl flex-shrink-0">3</span>
                            <h4 class="text-3xl font-black text-black dark:text-red-400 mb-4 break-all">Realize Prova</h4>
                            <p class="text-xl text-gray-700 dark:text-gray-300 font-semibold">RG + comprovante inscrição</p>
                        </li>
                        <li class="flex items-center gap-8 p-12 bg-gray-100 dark:bg-gray-800 border-l-8 border-red-500 shadow-xl">
                            <span class="text-red-500 font-black text-4xl flex-shrink-0">4</span>
                            <h4 class="text-3xl font-black text-black dark:text-red-400 mb-4 break-all">Matrícula</h4>
                            <p class="text-xl text-gray-700 dark:text-gray-300 font-semibold">Documentação completa</p>
                        </li>
                    </ol>
                </div>
                <div data-aos="slide-left">
                    <div class="bg-gray-200 dark:bg-gray-800 w-full h-[600px] rounded-none border-8 border-black shadow-4xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/calendario.jpg') }}" alt="Calendário Completo Vestibulinho ETEC Zona Leste" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
