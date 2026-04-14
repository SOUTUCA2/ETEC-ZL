@extends('app')

@section('content')
    <section class="space-y-16 py-20 bg-white dark:bg-gray-900">
        {{-- Hero --}}
        <div class="border-8 border-red-500 dark:border-red-400 bg-red-500 text-white p-20 lg:p-32 shadow-3xl rounded-none text-center max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <h1 class="text-6xl lg:text-8xl font-black mb-8 drop-shadow-4xl uppercase tracking-widest text-center break-all text-white">SOBRE</h1>
            <p class="text-2xl lg:text-3xl mb-12 font-bold drop-shadow-2xl max-w-4xl mx-auto leading-relaxed text-white">
                A ETEC Zona Leste é uma instituição de ensino técnico dedicada a formar profissionais qualificados nas mais diversas áreas. Desde sua fundação, trabalha com excelência e inovação.
            </p>
        </div>

        {{-- Missão Visão --}}
        <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-5xl font-black text-black dark:text-red-400 mb-12 uppercase tracking-widest drop-shadow-xl text-center lg:text-left break-words">MISSÃO</h2>
                <p class="text-2xl text-gray-800 dark:text-gray-300 font-semibold leading-relaxed">
                    Preparar estudantes para o mercado de trabalho com formação técnica de qualidade, oferecendo oportunidades de crescimento profissional e pessoal através de ensino prático e teórico de excelência.
                </p>
            </div>
            <div class="order-first lg:order-none" data-aos="fade-left">
                <div class="bg-gray-200 dark:bg-gray-800 w-full h-96 rounded-none border-8 border-black shadow-4xl flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/foto-equipe.jpg') }}" alt="Equipe ETEC Zona Leste" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-5xl font-black text-center text-black dark:text-red-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">VISÃO</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-black text-white p-16 rounded-none shadow-3xl border-4 border-red-500" data-aos="slide-right">
                    <p class="text-2xl font-semibold leading-relaxed break-words">
                        Ser reconhecida como uma instituição de excelência em ensino técnico, gerando profissionais competentes e contribuindo para o desenvolvimento local e regional através da educação profissional de qualidade.
                    </p>
                </div>
                <div data-aos="slide-left">
                    <div class="bg-gray-200 dark:bg-gray-800 w-full h-80 rounded-none border-8 border-black shadow-4xl flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/foto-visao.jpeg') }}" alt="Visão ETEC Zona Leste" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        {{-- Valores True 2x2 Grid --}}
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-5xl font-black text-center text-black dark:text-red-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">VALORES</h2>
            <div class="grid grid-cols-2 gap-8">
                <!-- Row 1 Col 1: Excelência -->
                <div class="border-4 border-red-500 hover:border-black bg-white dark:bg-gray-800 hover:bg-black hover:dark:bg-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 group overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 bg-red-500 text-white rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform text-3xl font-black">
                        ⭐
                    </div>
                    <h3 class="text-3xl font-black text-black dark:text-red-400 group-hover:text-white mb-6 drop-shadow-xl text-center break-all transition-colors">EXCELÊNCIA</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 group-hover:text-white text-center font-semibold leading-tight transition-colors">Qualidade máxima em tudo</p>
                </div>

                <!-- Row 1 Col 2: Inclusão -->
                <div class="border-4 border-red-500 hover:border-black bg-white dark:bg-gray-800 hover:bg-black hover:dark:bg-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 group overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-24 h-24 bg-red-500 text-white rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform text-3xl font-black">
                        🤝
                    </div>
                    <h3 class="text-3xl font-black text-black dark:text-red-400 group-hover:text-white mb-6 drop-shadow-xl text-center break-all transition-colors">INCLUSÃO</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 group-hover:text-white text-center font-semibold leading-tight transition-colors">Todos têm lugar na ETEC</p>
                </div>

                <!-- Row 2 Col 1: Inovação -->
                <div class="border-4 border-red-500 hover:border-black bg-white dark:bg-gray-800 hover:bg-black hover:dark:bg-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 group overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-red-500 text-white rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform text-3xl font-black">
                        🚀
                    </div>
                    <h3 class="text-3xl font-black text-black dark:text-red-400 group-hover:text-white mb-6 drop-shadow-xl text-center break-all transition-colors">INOVAÇÃO</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 group-hover:text-white text-center font-semibold leading-tight transition-colors">Vanguarda tecnológica</p>
                </div>

                <!-- Row 2 Col 2: Ética -->
                <div class="border-4 border-red-500 hover:border-black bg-white dark:bg-gray-800 hover:bg-black hover:dark:bg-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-300 group overflow-hidden" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-24 h-24 bg-red-500 text-white rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform text-3xl font-black">
                        ⚖️
                    </div>
                    <h3 class="text-3xl font-black text-black dark:text-red-400 group-hover:text-white mb-6 drop-shadow-xl text-center break-all transition-colors">ÉTICA</h3>
                    <p class="text-xl text-gray-700 dark:text-gray-300 group-hover:text-white text-center font-semibold leading-tight transition-colors">Princípios acima tudo</p>
                </div>
            </div>
        </div>
    </section>
@endsection

