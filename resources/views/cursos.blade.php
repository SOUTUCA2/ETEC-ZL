@extends('app')

@section('content')
    <section class="space-y-12">
        <div class="border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 p-10 shadow-sm" data-aos="fade-up">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-4">Cursos Técnicos</h1>
            <p class="text-slate-700 dark:text-gray-300 leading-relaxed text-lg">
                Conheça nossa grade completa de cursos técnicos. Cada um é pensado para formar profissionais
                competentes e prontos para o mercado de trabalho.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-8" data-aos="fade-up" data-aos-delay="200">
            <!-- Lateral Info Div 1 -->
            <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 shadow-sm lg:col-span-1 order-3 lg:order-1" data-aos="fade-right">
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-4">Informações Gerais</h3>
                <ul class="space-y-2 text-sm text-slate-700 dark:text-gray-300">
                    <li>• Início das aulas: Fevereiro</li>
                    <li>• Período: Normal</li>
                    <li>• Carga horária: 3.200h</li>
                    <li>• Mensalidade: Gratuito</li>
                    <li>• Vagas limitadas</li>
                </ul>
            </div>

            <!-- Cursos Main Grid -->
            <div class="lg:col-span-2 order-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Administração</h2>
                        <ul class="space-y-2 mb-4 text-sm text-slate-700 dark:text-gray-300">
                            <li><strong>Técnico:</strong> 3 anos</li>
                            <li><strong>Ensino Médio + Técnico Integrado:</strong> 3 anos</li>
                        </ul>
                        <p class="text-slate-700 dark:text-gray-300">
                            Gestão empresarial, recursos humanos e planejamento estratégico.
                        </p>
                    </div>
                    <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Desenvolvimento de Sistemas</h2>
                        <ul class="space-y-2 mb-4 text-sm text-slate-700 dark:text-gray-300">
                            <li><strong>Técnico:</strong> 3 anos</li>
                            <li><strong>Ensino Médio + Técnico Integrado:</strong> 3 anos</li>
                        </ul>
                        <p class="text-slate-700 dark:text-gray-300">
                            Desenvolvimento de sistemas, programação e manutenção de computadores.
                        </p>
                    </div>
                    <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm hover:shadow-lg transition-shadow md:col-span-2" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Serviços Jurídicos</h2>
                        <ul class="space-y-2 mb-4 text-sm text-slate-700 dark:text-gray-300">
                            <li><strong>Técnico:</strong> 3 anos</li>
                        </ul>
                        <p class="text-slate-700 dark:text-gray-300">
                            Auxiliar jurídico, direito do trabalho e cidadania empresarial.
                        </p>
                    </div>
                    <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-delay="600">
                        <h2 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Recursos Humanos</h2>
                        <ul class="space-y-2 mb-4 text-sm text-slate-700 dark:text-gray-300">
                            <li><strong>Técnico:</strong> 3 anos</li>
                            <li><strong>Ensino Médio + Técnico Integrado:</strong> 3 anos</li>
                        </ul>
                        <p class="text-slate-700 dark:text-gray-300">
                            Gestão de pessoas, recrutamento, seleção e desenvolvimento organizacional.
                        </p>
                    </div>
                    <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm hover:shadow-lg transition-shadow" data-aos="fade-up" data-aos-delay="700">
                        <h2 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Logística</h2>
                        <ul class="space-y-2 mb-4 text-sm text-slate-700 dark:text-gray-300">
                            <li><strong>Técnico:</strong> 3 anos</li>
                            <li><strong>Ensino Médio + Técnico Integrado:</strong> 3 anos</li>
                        </ul>
                        <p class="text-slate-700 dark:text-gray-300">
                            Gestão de cadeias de suprimentos e armazenagem.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Lateral Info Div 2 -->
            <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-6 shadow-sm lg:col-span-1 order-1 lg:order-4" data-aos="fade-left">
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-4">Próximas Turmas</h3>
                <div class="space-y-3">
                    <div class="p-4 bg-slate-50 dark:bg-gray-700 rounded-none border border-slate-200 dark:border-gray-600">
                        <h4 class="font-semibold text-slate-900 dark:text-white mb-1">2º Semestre 2026</h4>
                        <p class="text-xs text-slate-600 dark:text-gray-400 mb-2">Inscrições: Fev/Mar 2026</p>
                        <span class="inline-block bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 text-xs font-semibold">Vagas abertas</span>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-gray-700 rounded-none border border-slate-200 dark:border-gray-600">
                        <h4 class="font-semibold text-slate-900 dark:text-white mb-1">1º Semestre 2027</h4>
                        <p class="text-xs text-slate-600 dark:text-gray-400 mb-2">Inscrições: Out/Nov 2026</p>
                        <span class="inline-block bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 px-2 py-1 text-xs font-semibold">Em breve</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-2" data-aos="fade-up" data-aos-delay="900">
            <div class="border border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-8 shadow-sm" data-aos="slide-right">
                <h3 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Como se Matricular</h3>
                <ol class="space-y-3 text-slate-700 dark:text-gray-300">
                    <li class="flex gap-3" data-aos="fade-in" data-aos-delay="1000">
                        <span class="text-blue-800 dark:text-blue-300 font-bold w-6 text-lg flex-shrink-0">1.</span>
                        <span>Verificar pré-requisitos do curso desejado</span>
                    </li>
                    <li class="flex gap-3" data-aos="fade-in" data-aos-delay="1100">
                        <span class="text-blue-800 dark:text-blue-300 font-bold w-6 text-lg flex-shrink-0">2.</span>
                        <span>Comparecer na secretaria com documentação</span>
                    </li>
                    <li class="flex gap-3" data-aos="fade-in" data-aos-delay="1200">
                        <span class="text-blue-800 dark:text-blue-300 font-bold w-6 text-lg flex-shrink-0">3.</span>
                        <span>Realizar inscrição e avaliação</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-blue-800 font-bold w-6 text-lg flex-shrink-0">4.</span>
                        <span>Confirmar matrícula e iniciar as aulas</span>
                    </li>
                </ol>
            </div>
            <div class="border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-800 p-8 shadow-sm">
                <h3 class="text-2xl font-semibold text-slate-900 dark:text-white mb-4">Benefícios</h3>
                <ul class="space-y-3 text-slate-700 dark:text-gray-300">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-800 dark:text-blue-300 font-bold mt-1 w-6 flex-shrink-0 text-lg">→</span>
                        <span>Professores qualificados e experientes</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-800 dark:text-blue-300 font-bold mt-1 w-6 flex-shrink-0 text-lg">→</span>
                        <span>Aulas práticas em laboratórios modernos</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-800 dark:text-blue-300 font-bold mt-1 w-6 flex-shrink-0 text-lg">→</span>
                        <span>Estágios em empresas parceiras</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-800 dark:text-blue-300 font-bold mt-1 w-6 flex-shrink-0 text-lg">→</span>
                        <span>Certificado reconhecido no mercado</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
