@extends('app')

@section('content')
    <section class="space-y-16 py-20 bg-white dark:bg-gray-900">
        {{-- Hero --}}
        <div class="border-8 border-red-500 dark:border-red-400 bg-red-500 text-white p-20 lg:p-32 shadow-3xl rounded-none text-center max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <h1 class="text-6xl lg:text-8xl font-black mb-8 drop-shadow-4xl uppercase tracking-widest text-center break-all">INFRAESTRUTURA</h1>
            <p class="text-2xl lg:text-3xl mb-12 font-bold drop-shadow-2xl max-w-4xl mx-auto leading-relaxed">
                Campus moderno com laboratórios de ponta, salas climatizadas e infraestrutura completa para sua formação.
            </p>
        </div>

        {{-- Campus Overview --}}
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-5xl font-black text-black dark:text-yellow-400 mb-12 uppercase tracking-widest drop-shadow-xl text-center break-words">CAMPUS PRINCIPAL</h2>
                    <div class="space-y-8 text-2xl">
                        <p class="text-gray-800 dark:text-gray-300 font-semibold leading-relaxed">
                            Localizado na Zona Leste de São Paulo, nossa unidade ocupa <strong>uma vasta</strong> área construída.
                        </p>
                        <ul class="grid grid-cols-2 gap-8 text-xl font-bold">
                            <li class="border-l-8 border-red-500 pl-8 py-4">
                                <span class="text-3xl block text-red-600 dark:text-red-400">4</span>
                                <span class="text-black dark:text-gray-200">Prédios Principais</span>
                            </li>
                            <li class="border-l-8 border-yellow-500 pl-8 py-4">
                                <span class="text-3xl block text-yellow-600 dark:text-yellow-400">2.500m²</span>
                                <span class="text-black dark:text-gray-200">Área Verde</span>
                            </li>
                            <li class="border-l-8 border-red-500 pl-8 py-4">
                                <span class="text-3xl block text-red-600 dark:text-red-400">50+</span>
                                <span class="text-black dark:text-gray-200">Vagas Estacionamento</span>
                            </li>
                            <li class="border-l-8 border-yellow-500 pl-8 py-4">
                                <span class="text-3xl block text-yellow-600 dark:text-yellow-400">100+</span>
                                <span class="text-black dark:text-gray-200">Computadores</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="order-first lg:order-none" data-aos="fade-left">
                    <!-- Image Placeholder Campus -->
                    <div class="bg-gray-200 dark:bg-gray-800 w-full h-96 rounded-none border-8 border-black shadow-4xl flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/campus.jpg') }}" alt="Campus ETEC Zona Leste" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        {{-- Laboratories --}}
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-5xl font-black text-center text-black dark:text-yellow-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">LABORATÓRIOS</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-12">
                <!-- Lab 1 -->
                <div class="group cursor-pointer overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white dark:bg-gray-800 border-4 border-yellow-500 hover:border-red-500 p-8 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-500 group-hover:-translate-y-8">
                        <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 mb-8 rounded-none border-4 border-black flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500 overflow-hidden">
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <div class="text-6xl mb-8">💻</div>
                                <h4 class="text-3xl font-black mb-4 break-words">LAB TI</h4>
                                <p>50 PCs • 4K</p>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-black dark:text-yellow-400 mb-4 drop-shadow-xl text-center break-all">LAB TI</h3>
                        <p class="text-lg text-gray-700 dark:text-gray-300 font-semibold leading-tight text-center">
                            50 PCs • 3D Print • VR
                        </p>
                    </div>
                </div>

                <!-- Lab 3: Química simplified -->
                <div class="group cursor-pointer overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white dark:bg-gray-800 border-4 border-yellow-500 hover:border-red-500 p-8 rounded-none shadow-2xl hover:shadow-3xl transition-all duration-500 group-hover:-translate-y-8">
                        <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 mb-8 rounded-none border-4 border-black flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500 overflow-hidden">
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <div class="text-6xl mb-8">⚗️</div>
                                <h4 class="text-3xl font-black mb-4 break-words">LAB QUÍMICA</h4>
                                <p>Bancadas</p>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-black dark:text-yellow-400 mb-4 drop-shadow-xl text-center break-all">LAB QUÍMICA</h3>
                        <p class="text-lg text-gray-700 dark:text-gray-300 font-semibold leading-relaxed text-center">
                            Laboratório completo com bancadas, reagentes e equipamentos de segurança para aulas práticas de química.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Facilities --}}
        <div class="max-w-7xl mx-auto px-4 mt-24">
            <h2 class="text-5xl font-black text-center text-black dark:text-yellow-400 mb-20 uppercase tracking-widest drop-shadow-3xl break-words" data-aos="fade-up">INSTALAÇÕES</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Sala Aula -->
                <div class="group overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white dark:bg-gray-800 border-4 border-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all">
                        <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 mb-8 rounded-none border-4 border-black flex items-center justify-center shadow-xl group-hover:scale-105 overflow-hidden">
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <div class="text-6xl mb-8">🏫</div>
                                <h4 class="text-3xl font-black mb-4 break-words">SALAS AULA</h4>
                                <p>60 Unid • Ar</p>
                            </div>
                        </div>
                        <h3 class="text-3xl font-black text-black dark:text-red-400 mb-6 drop-shadow-xl text-center break-all">20+ SALAS DE AULA</h3>
                        <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold break-words">35-40 alunos/capacidade</p>
                    </div>
                </div>

                <!-- Auditório -->
                <div class="group overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white dark:bg-gray-800 border-4 border-yellow-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all">
                        <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 mb-8 rounded-none border-4 border-black flex items-center justify-center shadow-xl group-hover:scale-105 overflow-hidden">
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <div class="text-6xl mb-8">🎤</div>
                                <h4 class="text-3xl font-black mb-4 break-words">AUDITÓRIO</h4>
                                <p>400 Lugares</p>
                            </div>
                        </div>
                        <h3 class="text-3xl font-black text-black dark:text-yellow-400 mb-6 drop-shadow-xl text-center break-all">AUDITÓRIO 200+ LUGARES</h3>
                        <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold break-words">Som profissional • Projetor • Acústica completa • Iluminação cênica</p>
                    </div>
                </div>

                <!-- Biblioteca -->
                <div class="group overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white dark:bg-gray-800 border-4 border-red-500 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all">
                        <div class="w-full h-64 bg-gray-200 dark:bg-gray-700 mb-8 rounded-none border-4 border-black flex items-center justify-center shadow-xl group-hover:scale-105 overflow-hidden">
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <div class="text-6xl mb-8">📚</div>
                                <h4 class="text-3xl font-black mb-4 break-words">BIBLIOTECA</h4>
                                <p>1000+ Títulos</p>
                            </div>
                        </div>
                        <h3 class="text-3xl font-black text-black dark:text-red-400 mb-6 drop-shadow-xl text-center break-all">BIBLIOTECA TÉCNICA</h3>
                        <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold break-words">1000+ livros • Computadores • Wi-Fi • Ambiente climatizado</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center py-24">
            <h2 class="text-5xl font-black text-black dark:text-yellow-400 mb-12 uppercase tracking-widest drop-shadow-3xl break-words">Agende Visita</h2>
            <a href="/contato" class="bg-black text-yellow-400 border-4 border-yellow-500 hover:bg-yellow-400 hover:text-black px-16 py-8 rounded-none font-black text-2xl shadow-3xl hover:shadow-4xl transition-all duration-500 uppercase tracking-widest inline-block">
                Marcar Visita →
            </a>
        </div>
    </section>
@endsection
