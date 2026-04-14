@extends('app')

@section('content')
    <section class="space-y-16 py-20 bg-white dark:bg-gray-900">
        {{-- Hero --}}
        <div class="border-8 border-red-500 dark:border-red-400 bg-red-500 text-white p-20 lg:p-32 shadow-3xl rounded-none text-center max-w-6xl mx-auto mx-4 overflow-hidden" data-aos="fade-down">
            <h1 class="text-6xl lg:text-8xl font-black mb-8 drop-shadow-4xl uppercase tracking-widest text-center break-all text-white">CONTATO</h1>
            <p class="text-2xl lg:text-3xl mb-12 font-bold drop-shadow-2xl max-w-4xl mx-auto leading-relaxed text-white">
                Tem dúvidas sobre nossos cursos ou deseja agendar uma visita? Estamos aqui para ajudar!
            </p>
        </div>

        {{-- Contact Info Grid --}}
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12" data-aos="fade-up" data-aos-delay="200">
                <!-- Telefone -->
                <div class="border-4 border-red-500 bg-white dark:bg-gray-800 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all group overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-24 h-24 bg-red-500 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-black dark:text-red-400 mb-6 text-center drop-shadow-xl break-words">TELEFONE</h2>
                    <p class="text-2xl font-bold text-center mb-4 text-red-600 dark:text-red-400">(11) 3000-0000</p>
                    <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold">Seg-Sex: 8h às 18h</p>
                </div>

                <!-- Email -->
                <div class="border-4 border-red-500 bg-white dark:bg-gray-800 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all group overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                    <div class="w-24 h-24 bg-black rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-black mb-6 text-center drop-shadow-xl break-words">EMAIL</h2>
                    <p class="text-2xl font-bold text-center mb-4 break-all text-red-600 dark:text-red-400">contato@eteczl.edu.br</p>
                    <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold">Resposta em até 24h</p>
                </div>

                <!-- Endereço -->
                <div class="border-4 border-red-500 bg-white dark:bg-gray-800 p-12 rounded-none shadow-2xl hover:shadow-3xl transition-all group overflow-hidden" data-aos="zoom-in" data-aos-delay="500">
                    <div class="w-24 h-24 bg-red-500 rounded-none flex items-center justify-center mb-8 mx-auto shadow-2xl group-hover:scale-110 transition-transform">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-black dark:text-red-400 mb-6 text-center drop-shadow-xl break-words">ENDEREÇO</h2>
                    <p class="text-2xl font-bold text-center mb-2 break-all text-red-600 dark:text-red-400">Rua Exemplo, 123</p>
                    <p class="text-xl text-gray-700 dark:text-gray-300 text-center font-semibold">Zona Leste<br>São Paulo - SP</p>
                </div>
            </div>
        </div>

        {{-- Form --}}
        <div class="max-w-4xl mx-auto px-4">
            <div class="border-8 border-red-500 bg-black text-white p-16 rounded-none shadow-3xl overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-5xl font-black text-white mb-16 uppercase tracking-widest drop-shadow-3xl break-words text-center">FORMULÁRIO</h2>
<form class="space-y-8 max-w-2xl mx-auto" method="POST" action="{{ route('contato') }}" novalidate>@csrf
                    <div data-aos="fade-right">
                        <label class="block text-2xl font-bold text-white mb-4 break-words">NOME COMPLETO</label>
                        <input type="text" name="nome" class="w-full border-4 border-red-500 p-6 bg-gray-100 text-2xl text-black focus:outline-none focus:border-white rounded-none shadow-xl" placeholder="Seu nome completo" required>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="100">
                        <label class="block text-2xl font-bold text-white mb-4 break-words">EMAIL</label>
                        <input type="email" class="w-full border-4 border-red-500 p-6 bg-gray-100 text-2xl text-black focus:outline-none focus:border-white rounded-none shadow-xl" placeholder="seu@email.com">
                    </div>
                    <div data-aos="fade-right" data-aos-delay="200">
                        <label class="block text-2xl font-bold text-white mb-4 break-words">ASSUNTO</label>
                        <input type="text" class="w-full border-4 border-red-500 p-6 bg-gray-100 text-2xl text-black focus:outline-none focus:border-white rounded-none shadow-xl" placeholder="Assunto da mensagem">
                    </div>
                    <div data-aos="fade-right" data-aos-delay="300">
                        <label class="block text-2xl font-bold text-white mb-4 break-words">MENSAGEM</label>
                        <textarea rows="6" class="w-full border-4 border-red-500 p-6 bg-gray-100 text-2xl text-black focus:outline-none focus:border-white rounded-none shadow-xl resize-vertical" placeholder="Conte-nos como podemos ajudar..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-white text-red-500 hover:bg-gray-200 border-4 border-white px-12 py-8 font-black text-3xl shadow-3xl hover:shadow-4xl transition-all duration-300 uppercase tracking-widest rounded-none">
                        ENVIAR MENSAGEM
                    </button>
                </form>
            </div>
        </div>

        {{-- Redes Sociais --}}
        <div class="max-w-4xl mx-auto px-4">
            <div class="border-8 border-red-500 bg-white p-16 rounded-none shadow-3xl text-center overflow-hidden">
                <h2 class="text-5xl font-black text-black mb-12 uppercase tracking-widest drop-shadow-3xl break-words">REDES SOCIAIS</h2>
                <div class="flex flex-wrap gap-12 justify-center text-3xl font-bold">
                    <a href="#" class="border-4 border-red-500 bg-black text-white hover:bg-red-500 px-12 py-8 rounded-none shadow-2xl hover:shadow-3xl transition-all hover:-translate-y-2 break-words">FACEBOOK</a>
                    <a href="#" class="border-4 border-red-500 bg-black text-white hover:bg-red-500 px-12 py-8 rounded-none shadow-2xl hover:shadow-3xl transition-all hover:-translate-y-2 break-words">INSTAGRAM</a>
                    <a href="#" class="border-4 border-red-500 bg-black text-white hover:bg-red-500 px-12 py-8 rounded-none shadow-2xl hover:shadow-3xl transition-all hover:-translate-y-2 break-words">YOUTUBE</a>
                    <a href="#" class="border-4 border-red-500 bg-black text-white hover:bg-red-500 px-12 py-8 rounded-none shadow-2xl hover:shadow-3xl transition-all hover:-translate-y-2 break-words">LINKEDIN</a>
                </div>
            </div>
        </div>
    </section>
@endsection
