<?php
include __DIR__ . "/../head.php";

$texto = 'set';
?>
<script src="https://cdn.tailwindcss.com"></script>
<link
  href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
</head>

<body>
  <div class="bg-black text-white font-['Space_Grotesk'] overflow-x-hidden">
    <!-- Background elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-indigo-900/10 rounded-full blur-3xl"></div>
      <div
        class="absolute bottom-10 right-10 w-80 h-80 bg-purple-900/10 rounded-full blur-3xl"></div>
      <div
        class="absolute top-40 right-20 w-64 h-64 bg-cyan-900/10 rounded-full blur-3xl"></div>

      <!-- Decorative grid lines -->
      <div
        class="absolute inset-0 grid grid-cols-12 opacity-5 pointer-events-none">
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
        <div class="border-r border-cyan-500"></div>
      </div>
      <div
        class="absolute inset-0 grid grid-rows-12 opacity-5 pointer-events-none">
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
        <div class="border-b border-cyan-500"></div>
      </div>
    </div>

    <!-- Navigation Bar -->
    <nav
      id="navbar"
      class="fixed top-0 left-0 right-0 bg-gray-900/70 backdrop-blur-lg border-b border-cyan-500/30 z-50 transition-all duration-300">
      <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <div class="flex items-center">
            <div class="relative mr-2">
              <div
                class="absolute inset-0 bg-cyan-400/30 rounded-md blur-sm"></div>
              <div
                class="w-10 h-10 rounded-md bg-gradient-to-br from-indigo-600 to-purple-600 border border-indigo-400/30 flex items-center justify-center relative shadow-lg shadow-indigo-800/20">
                <div
                  class="absolute inset-[3px] bg-gray-900 rounded-[4px] flex items-center justify-center overflow-hidden">
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 to-purple-900/20"></div>
                  <div class="flex items-center justify-center">
                    <img src="../img/img-sistema/logo-reset-gradiente.svg" class="w-6 h-6" alt="Logo Reset">
                  </div>
                </div>
              </div>
            </div>
            <div
              class="text-xl font-medium bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent flex items-center">
              Reset Sistemas
            </div>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex items-center space-x-1">
            <a
              href="#home"
              class="nav-link text-gray-300 hover:text-cyan-400 px-4 py-2 rounded-md transition-colors duration-200">Início</a>
            <a
              href="#about"
              class="nav-link text-gray-300 hover:text-cyan-400 px-4 py-2 rounded-md transition-colors duration-200">Sobre</a>
            <a
              href="#services"
              class="nav-link text-gray-300 hover:text-cyan-400 px-4 py-2 rounded-md transition-colors duration-200">Serviços</a>
            <a
              href="#portfolio"
              class="nav-link text-gray-300 hover:text-cyan-400 px-4 py-2 rounded-md transition-colors duration-200">Depoimentos</a>
            <a
              href="#contact"
              class="nav-link text-gray-300 hover:text-cyan-400 px-4 py-2 rounded-md transition-colors duration-200">Contato</a>
            <div class="relative ml-4 group">
              <div
                class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
              <button
                class="contact-btn px-4 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-sm font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300">
                <span
                  class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Connect</span>
              </button>
            </div>
          </div>

          <!-- Mobile Navigation Button -->
          <div class="flex md:hidden">
            <button
              id="mobile-menu-button"
              class="relative w-10 h-10 focus:outline-none group"
              aria-label="Toggle menu">
              <div
                class="absolute w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <span
                  class="block h-0.5 w-5 bg-cyan-400 mb-1 transform transition duration-300 ease-in-out"
                  id="line1"></span>
                <span
                  class="block h-0.5 w-5 bg-cyan-400 mb-1 transform transition duration-300 ease-in-out"
                  id="line2"></span>
                <span
                  class="block h-0.5 w-5 bg-cyan-400 transform transition duration-300 ease-in-out"
                  id="line3"></span>
              </div>
            </button>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div
          id="mobile-menu"
          class="md:hidden h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="pt-2 pb-4 space-y-1">
            <a
              href="#home"
              class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 px-4 py-2 rounded-md transition-colors duration-200">Início</a>
            <a
              href="#about"
              class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 px-4 py-2 rounded-md transition-colors duration-200">Sobre</a>
            <a
              href="#services"
              class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 px-4 py-2 rounded-md transition-colors duration-200">Serviços</a>
            <a
              href="#portfolio"
              class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 px-4 py-2 rounded-md transition-colors duration-200">Depoimentos</a>
            <a
              href="#contact"
              class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 px-4 py-2 rounded-md transition-colors duration-200">Contato</a>
            <div class="px-4 pt-2">
              <button
                class="contact-btn w-full px-4 py-2 bg-gradient-to-r from-indigo-700 to-purple-700 rounded-lg text-white text-sm font-medium flex items-center justify-center gap-2 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300">
                <span
                  class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Connect</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content Sections -->
    <main>
      <!-- Home Section -->
      <section
        id="home"
        class="min-h-screen flex items-center justify-center relative pt-20">
        <div class="container mx-auto px-6 py-20">
          <div class="flex flex-col items-center text-center">
            <div class="relative mb-4">
              <div
                class="absolute inset-0 bg-cyan-500/20 rounded-full blur-3xl"></div>
              <div
                class="text-6xl md:text-7xl lg:text-8xl font-bold bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent pb-2 relative">
                <div class="maquinadeescrever">
                  <p>Re</p>
                  <div class="palavras">
                    <p><?php echo $texto; ?></p>
                    <p class="animate-[blink_1s_steps(1,end)_infinite] text-cyan-400 font-bold">|</p>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mb-8">
              Combinamos ERP, automação e desenvolvimento sob medida para levar sua empresa a um nível maior de agilidade, controle e escalabilidade.
            </p>
            <div class="flex gap-4 flex-wrap justify-center">
              <div class="relative group">
                <div
                  class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
                <button
                  class="px-6 py-3 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"
                  onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })">
                  <span
                    class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Quero conhecer</span>
                </button>
              </div>
              <button
                class="px-6 py-3 bg-transparent border border-cyan-500/30 rounded-lg text-cyan-400 text-base font-medium flex items-center justify-center gap-2 hover:bg-cyan-900/10 hover:border-cyan-500/50 transition-all duration-300"
                onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' })">
                Sobre
              </button>
            </div>
          </div>
        </div>
        <div
          class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
          <svg
            class="w-6 h-6 text-cyan-400"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
          </svg>
        </div>
      </section>

      <!-- About Section -->
      <section id="about" class="min-h-screen flex items-center relative py-20">
        <div class="container mx-auto px-6">
          <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
              <div class="inline-block mb-3">
                <div
                  class="text-xs text-cyan-400 tracking-widest uppercase mb-1">
                  Sobre nossas soluções
                </div>
                <div
                  class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                  Transformando desafios em resultados
                </div>
              </div>
              <div
                class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center">
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-xl blur-sm group-hover:bg-indigo-500/30 transition-all duration-500"></div>
                <div
                  class="relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                  <div class="flex flex-col">
                    <div class="font-medium text-xl text-white mb-3">
                      ERP sob medida para seu negócio
                    </div>
                    <p class="text-gray-400">
                      Sistemas de gestão desenvolvidos conforme a realidade da sua empresa, centralizando processos, reduzindo erros e trazendo mais controle para todas as áreas.
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 rounded-xl blur-sm group-hover:bg-purple-500/30 transition-all duration-500"></div>
                <div
                  class="relative bg-gray-900/70 backdrop-blur-lg border border-purple-500/20 p-6 rounded-xl shadow-xl group-hover:border-purple-500/40 transition-all duration-300">
                  <div class="flex flex-col">
                    <div class="font-medium text-xl text-white mb-3">
                      Automações que economizam tempo
                    </div>
                    <p class="text-gray-400">
                      Automatize tarefas repetitivas, relatórios e rotinas operacionais. Menos retrabalho, mais agilidade — e sua equipe focada no que realmente importa.
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-xl blur-sm group-hover:bg-indigo-500/30 transition-all duration-500"></div>
                <div
                  class="relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                  <div class="flex flex-col">
                    <div class="font-medium text-xl text-white mb-3">
                      Integração entre setores e sistemas
                    </div>
                    <p class="text-gray-400">
                      Unifique vendas, estoque, financeiro e produção em uma única plataforma. Tudo se comunica em tempo real, evitando falhas e aumentando a produtividade.
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 rounded-xl blur-sm group-hover:bg-purple-500/30 transition-all duration-500"></div>
                <div
                  class="relative bg-gray-900/70 backdrop-blur-lg border border-purple-500/20 p-6 rounded-xl shadow-xl group-hover:border-purple-500/40 transition-all duration-300">
                  <div class="flex flex-col">
                    <div class="font-medium text-xl text-white mb-3">
                      Soluções personalizadas em software
                    </div>
                    <p class="text-gray-400">
                      Desenvolvemos sistemas específicos para sua necessidade, seja controle interno, atendimento ao cliente ou ferramentas exclusivas.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section
        id="services"
        class="min-h-screen flex items-center relative py-20">
        <div class="container mx-auto px-6">
          <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
              <div class="inline-block mb-3">
                <div
                  class="text-xs text-cyan-400 tracking-widest uppercase mb-1">
                  O que oferecemos?
                </div>
                <div
                  class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                  Nossos Serviços
                </div>
              </div>
              <div
                class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
              <!-- Service Card 1 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-indigo-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-indigo-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-indigo-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div
                        class="w-10 h-10 rounded bg-indigo-900/60 flex items-center justify-center mr-3 group-hover:bg-indigo-800/70 transition-colors">
                        <svg
                          class="w-5 h-5 text-indigo-300"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                      </div>
                      <div
                        class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors">
                        ERP de alta confiabilidade
                      </div>
                    </div>
                    <p class="text-gray-400 mb-4">
                      Confiabilidade real para gerenciar dados, processos e resultados com segurança e eficiência.
                    </p>
                    <a
                      href="#contact"
                      class="mt-auto text-indigo-400 hover:text-indigo-300 inline-flex items-center">
                      Eu quero
                      <svg
                        class="w-4 h-4 ml-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Service Card 2 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-purple-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-purple-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div
                        class="w-10 h-10 rounded bg-purple-900/60 flex items-center justify-center mr-3 group-hover:bg-purple-800/70 transition-colors">
                        <svg
                          class="w-5 h-5 text-purple-300"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                      </div>
                      <div
                        class="font-medium text-lg text-purple-300 group-hover:text-purple-200 transition-colors">
                        Desenvolvimento de sistemas
                      </div>
                    </div>
                    <p class="text-gray-400 mb-4">
                      Transformamos suas demandas em sistemas funcionais, inteligentes e totalmente adaptados.
                    </p>
                    <a
                      href="#contact"
                      class="mt-auto text-purple-400 hover:text-purple-300 inline-flex items-center">
                      Eu quero
                      <svg
                        class="w-4 h-4 ml-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Service Card 3 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div
                        class="w-10 h-10 rounded bg-cyan-900/60 flex items-center justify-center mr-3 group-hover:bg-cyan-800/70 transition-colors">
                        <svg
                          class="w-5 h-5 text-cyan-300"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                      </div>
                      <div
                        class="font-medium text-lg text-cyan-300 group-hover:text-cyan-200 transition-colors">
                        Integração E-commerce
                      </div>
                    </div>
                    <p class="text-gray-400 mb-4">
                      Unifique operações online e offline com integração completa entre sistema e loja virtual.
                    </p>
                    <a
                      href="#contact"
                      class="mt-auto text-cyan-400 hover:text-cyan-300 inline-flex items-center">
                      Eu quero
                      <svg
                        class="w-4 h-4 ml-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Portfolio Section -->
      <section
        id="portfolio"
        class="min-h-screen flex items-center relative py-20">
        <div class="container mx-auto px-6">
          <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
              <div class="inline-block mb-3">
                <div
                  class="text-xs text-cyan-400 tracking-widest uppercase mb-1">
                  Depoimentos
                </div>
                <div
                  class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                  Resultados de quem confia na gente
                </div>
              </div>
              <div
                class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <!-- Portfolio Item 1 -->
              <div class="relative group overflow-hidden rounded-xl">
                <div
                  class="absolute inset-0 bg-gradient-to-br from-indigo-600/80 to-purple-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center">
                  <div
                    class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="text-xl font-medium text-white mb-2">
                      AI Dashboard
                    </div>
                    <p class="text-gray-200 mb-4">
                      Futuristic analytics interface with real-time data
                      visualization
                    </p>
                    <button
                      class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">
                      View Details
                    </button>
                  </div>
                </div>
                <div
                  class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                  <div class="text-cyan-400/30 font-medium">
                    Project Image 1
                  </div>
                </div>
              </div>

              <!-- Portfolio Item 2 -->
              <div class="relative group overflow-hidden rounded-xl">
                <div
                  class="absolute inset-0 bg-gradient-to-br from-cyan-600/80 to-indigo-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center">
                  <div
                    class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="text-xl font-medium text-white mb-2">
                      Crypto Platform
                    </div>
                    <p class="text-gray-200 mb-4">
                      Modern cryptocurrency trading platform with advanced
                      charting
                    </p>
                    <button
                      class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">
                      View Details
                    </button>
                  </div>
                </div>
                <div
                  class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                  <div class="text-cyan-400/30 font-medium">
                    Project Image 2
                  </div>
                </div>
              </div>

              <!-- Portfolio Item 3 -->
              <div class="relative group overflow-hidden rounded-xl">
                <div
                  class="absolute inset-0 bg-gradient-to-br from-purple-600/80 to-pink-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center">
                  <div
                    class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="text-xl font-medium text-white mb-2">
                      Smart Home UI
                    </div>
                    <p class="text-gray-200 mb-4">
                      IoT control interface for next generation smart homes
                    </p>
                    <button
                      class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">
                      View Details
                    </button>
                  </div>
                </div>
                <div
                  class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                  <div class="text-cyan-400/30 font-medium">
                    Project Image 3
                  </div>
                </div>
              </div>

              <!-- Portfolio Item 4 -->
              <div class="relative group overflow-hidden rounded-xl">
                <div
                  class="absolute inset-0 bg-gradient-to-br from-cyan-600/80 to-blue-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center">
                  <div
                    class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="text-xl font-medium text-white mb-2">
                      AR Navigation
                    </div>
                    <p class="text-gray-200 mb-4">
                      Augmented reality navigation system for urban environments
                    </p>
                    <button
                      class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">
                      View Details
                    </button>
                  </div>
                </div>
                <div
                  class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                  <div class="text-cyan-400/30 font-medium">
                    Project Image 4
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section
        id="contact"
        class="min-h-screen flex items-center relative py-20">
        <div class="container mx-auto px-6">
          <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
              <div class="inline-block mb-3">
                <div
                  class="text-xs text-cyan-400 tracking-widest uppercase mb-1">
                  Vamos conversar
                </div>
                <div
                  class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                  Queremos te conhecer
                </div>
              </div>
              <div
                class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-5 gap-8">
              <div class="md:col-span-2">
                <div
                  class="bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl">
                  <div class="text-xl font-medium text-white mb-4">
                    Informações de contato
                  </div>
                  <div class="space-y-4">
                    <div class="flex items-start">
                      <svg
                        class="w-5 h-5 text-cyan-400 mt-1 mr-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <div>
                        <div class="text-sm text-gray-400">Endereço</div>
                        <div class="text-white">
                          Centro, Aracruz,
                        </div>
                        <div class="text-white">Espírito Santo, Brasil</div>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <svg
                        class="w-5 h-5 text-cyan-400 mt-1 mr-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                      </svg>
                      <div>
                        <div class="text-sm text-gray-400">Email</div>
                        <a
                          href="mailto:info@futurenav.com"
                          class="text-white hover:text-cyan-400 transition-colors">contato@resetsistemas.com.br</a>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <svg
                        class="w-5 h-5 text-cyan-400 mt-1 mr-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                      </svg>
                      <div>
                        <div class="text-sm text-gray-400">Telefone</div>
                        <a
                          href="tel:+5527981078568"
                          class="text-white hover:text-cyan-400 transition-colors">(27) 98107-8568</a>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <svg
                        class="w-5 h-5 text-cyan-400 mt-1 mr-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
                      </svg>
                      <div>
                        <div class="text-sm text-gray-400">Whatsapp</div>
                        <a
                          href="tel:+5527981078568"
                          class="text-white hover:text-cyan-400 transition-colors">(27) 98107-8568</a>
                      </div>
                    </div>
                  </div>

                  <div class="mt-6">
                    <div class="text-white mb-2">Nossas Redes</div>
                    <div class="flex space-x-3">
                      <a
                        class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
                        <svg
                          class="w-4 h-4"
                          fill="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                        </svg>
                      </a>
                      <a
                        class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
                        <svg
                          class="w-4 h-4"
                          fill="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                        </svg>
                      </a>
                      <a
                        class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
                        <svg
                          class="w-4 h-4"
                          fill="currentColor"
                          viewBox="0 0 24 24">
                          <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="md:col-span-3">
                <div
                  class="bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl">
                  <div class="text-xl font-medium text-white mb-4">
                    Envie uma mensagem
                  </div>
                  <form>
                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                      <div>
                        <label
                          for="nome"
                          class="block text-sm text-gray-400 mb-1">Nome</label>
                        <input
                          type="text"
                          id="nome"
                          class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                      <div>
                        <label
                          for="empresa"
                          class="block text-sm text-gray-400 mb-1">Empresa</label>
                        <input
                          type="text"
                          id="empresa"
                          class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                      <div>
                        <label
                          for="email"
                          class="block text-sm text-gray-400 mb-1">Email</label>
                        <input
                          type="email"
                          id="email"
                          class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                      <div>
                        <label
                          for="whatsapp"
                          class="block text-sm text-gray-400 mb-1">Whatsapp</label>
                        <input
                          type="text"
                          id="whatsapp"
                          class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                    </div>
                    <div class="mb-6">
                      <label
                        for="message"
                        class="block text-sm text-gray-400 mb-1">Mensagem</label>
                      <textarea
                        id="message"
                        rows="4"
                        class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors resize-none"></textarea>
                    </div>
                    <div class="relative group">
                      <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
                      <button
                        type="submit"
                        class="w-full px-6 py-3 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300">
                        <span
                          class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Enviar Mensagem</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900/80 backdrop-blur-lg border-t border-gray-800">
      <div class="container mx-auto px-6 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="flex items-center mb-4 md:mb-0">
            <div class="relative mr-2">
              <div
                class="absolute inset-0 bg-cyan-400/30 rounded-md blur-sm"></div>
              <div
                class="w-8 h-8 rounded-md bg-gradient-to-br from-indigo-600 to-purple-600 border border-indigo-400/30 flex items-center justify-center relative shadow-lg shadow-indigo-800/20">
                <div
                  class="absolute inset-[2px] bg-gray-900 rounded-[3px] flex items-center justify-center overflow-hidden">
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 to-purple-900/20"></div>
                  <div
                    class="font-bold text-xs bg-gradient-to-r from-cyan-400 to-indigo-400 bg-clip-text text-transparent">
                    <img src="../img/img-sistema/logo-reset-gradiente.svg" class="w-6 h-6" alt="Logo Reset">
                  </div>
                </div>
              </div>
            </div>
            <div
              class="text-lg font-medium bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent flex items-center">
              Reset Sistemas
            </div>
          </div>

          <div class="flex justify-center mb-4 md:mb-0">
            <a
              href="#home"
              class="text-gray-400 hover:text-cyan-400 mx-2 transition-colors">Início</a>
            <a
              href="#about"
              class="text-gray-400 hover:text-cyan-400 mx-2 transition-colors">Sobre</a>
            <a
              href="#services"
              class="text-gray-400 hover:text-cyan-400 mx-2 transition-colors">Serviços</a>
            <a
              href="#portfolio"
              class="text-gray-400 hover:text-cyan-400 mx-2 transition-colors">Depoimentos</a>
            <a
              href="#contact"
              class="text-gray-400 hover:text-cyan-400 mx-2 transition-colors">Contato</a>
          </div>

          <div class="flex space-x-3">
            <a
              class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
              </svg>
            </a>
            <a
              class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
              </svg>
            </a>
            <a
              class="w-8 h-8 rounded-full bg-indigo-900/50 flex items-center justify-center text-white hover:bg-indigo-800 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="text-center text-gray-500 text-sm mt-8">
          © 2025 Reset Sistemas. Todos os direitos reservados.<br>Theme FutureNav.
        </div>
      </div>
    </footer>

    <script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script>
    <script src="maquinadeescrever.js?v=<?php echo filemtime('maquinadeescrever.js'); ?>"></script>
  </div>
</body>

</html>