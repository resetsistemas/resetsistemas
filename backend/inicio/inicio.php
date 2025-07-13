<?php
include __DIR__ . "/../head.php";

$texto = 'set';
?>
<script src="https://cdn.tailwindcss.com"></script>
<link
  href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="css/inicio.css?v=<?php echo filemtime('css/inicio.css'); ?>">
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
                    <img src="img/img-sistema/logo-reset-gradiente.svg" class="w-6 h-6" alt="Logo Reset">
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
            <div class="flex flex-col gap-6">
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
                          class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors leading-[1.2]">
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
                          class="font-medium text-lg text-purple-300 group-hover:text-purple-200 transition-colors leading-[1.2]">
                          Desenvolvimento<br>de sistemas
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
                          class="font-medium text-lg text-cyan-300 group-hover:text-cyan-200 transition-colors leading-[1.2]">
                          Integração E-commerce
                        </div>
                      </div>
                      <p class="text-gray-400 mb-4">
                        Unifique operações online e offline com integração completa entre sistema ERP e loja virtual.
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
              <div class="grid md:grid-cols-3 gap-6">
                <!-- Service Card 4 -->
                <div class="relative group">
                  <div
                    class="absolute inset-0 bg-pink-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                  <div
                    class="bg-gradient-to-br from-gray-900 to-gray-950 border border-pink-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-pink-500/40 transition-all duration-300">
                    <div class="flex flex-col h-full">
                      <div class="flex items-center mb-4">
                        <div
                          class="w-10 h-10 rounded bg-pink-900/60 flex items-center justify-center mr-3 group-hover:bg-pink-800/70 transition-colors">
                          <svg class="w-5 h-5 text-pink-300" x="0px" y="0px"
                            stroke="none"
                            fill="currentColor"
                            viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
                            <path class="st0" d="M136.4,783.6c-51.2-52.5-38-124.3,3.3-160.5c41.8-36.6,105.6-35.3,146.1,3.3c39.5,37.6,48.8,107.1-0.8,157.5
	c17.5,10,33.2,22.2,46.5,38.3c20.9-34,48.9-59.8,84.6-77.2c-71.8-62.5-56.9-156.7-6.4-202.4c53.9-48.7,136.1-46.4,186.2,5.8
	c48.9,50.9,53.5,138.9-12.4,196.3c35.6,17.5,63.8,43,84.7,77.4c13.5-15.8,28.9-28.3,46.4-38c-52.4-53.5-37.2-125.1,1.7-160
	c40.6-36.3,103.3-36.7,144.1-0.9c38.7,33.9,56.1,105.5,3,160.7c41.5,24,68.2,58.9,78.6,105.9c2.4,10.8,3.6,21.8,3,32.9
	c-0.6,12.5-9.9,22.2-22.4,22.3c-52.7,0.2-105.4,0.2-158.1,0c-12.9,0-22.4-10.4-22.5-23.2c0-13.3,9.7-23.4,23.2-23.5
	c40.3-0.2,80.7-0.3,121,0.1c7.9,0.1,9.3-1.5,6.7-9.1c-16.1-45.7-48.3-72.2-96.1-76.1c-44.2-3.6-78.1,16.2-102.4,53.4
	c-6.6,10.2-1.7,19.5-0.9,29.1c0.6,7.1,1.5,14.2,1.5,21.4c0.1,19.4-8.3,28-27.5,28c-72.5,0-145.1,0-217.6,0c-39.7,0-79.4,0-119.1,0
	c-17.2,0-26.1-9.1-26.2-26.4c-0.1-11.8,1-23.3,3.7-34.8c1.4-6,0.5-11.3-2.9-16.7c-23.9-37.9-58.3-57.8-102.9-54
	c-47.8,4.1-79.9,30.8-95.8,76.4c-2.4,6.9-1.3,8.8,6.2,8.7c39.7-0.3,79.4-0.2,119.1-0.1c15.9,0,26,9.5,25.8,23.9
	c-0.2,13.8-10.3,23-25.7,23c-50.4,0-100.9,0-151.3,0c-16.8,0-26.3-9.1-26-25.6C56.4,859.1,85.4,815.1,136.4,783.6z M354,897.8
	c97.7,0,194.8,0,292,0c-14.3-73.6-74.2-124.4-146-124.4C428.3,773.4,368,824.5,354,897.8z M500.3,726.4
	c46.6-0.2,85.6-39.3,85.6-85.9c0-46.6-39-85.6-85.6-85.8c-46.9-0.2-86.4,39.5-86.1,86.4C414.5,687.7,453.8,726.6,500.3,726.4z
	 M211.1,644c-33.8,0-60.6,26.6-60.7,60.2c-0.1,33.4,26.9,60.9,60.1,61.3c33.4,0.4,61.2-27.4,61.2-61.2
	C271.6,670.6,244.9,644,211.1,644z M728.3,703.9c-0.1,33.9,27.4,61.7,60.8,61.5c32.8-0.2,60.2-27.4,60.4-60
	c0.2-34.4-26.2-61.4-60.3-61.5C755.4,643.9,728.4,670.4,728.3,703.9z" />
                            <path class="st1" d="M726.5,330.4c0,70.8,0,141.1,0,211.4c0,3.6,0.3,7.3-0.4,10.7c-2.4,11.3-13.6,18.8-25.6,17.8
	c-11.2-1-20.2-10.5-20.7-22.1c-0.2-3.6,0-7.2,0-10.7c0-141.9-0.1-283.7,0.2-425.6c0-8.8-2.4-10.4-10.6-10.3
	c-112.9,0.3-225.8,0.3-338.7,0c-8.8,0-10.4,2.3-10.3,10.6c0.3,144.1,0.2,288.3,0.3,432.4c0,10.5-3.7,18.5-12.8,23.3
	c-8.4,4.4-17,3.6-24.8-2.1c-7-5.2-9.5-12.5-9.5-21.2c0.2-67.7,0.1-135.4,0.1-203c0-3.5,0-7,0-11.3c-45,15.5-89.2,30.7-133.4,46
	c-12.7,4.4-25.4,9.1-38,13.7c-0.1,13.3-0.3,26.7-0.3,40c0,54.3,0,108.7,0,163c0,12.7-8.2,22.5-19.6,24.1
	c-11.6,1.6-22.1-4.8-26.2-15.7c-1.2-3.2-1-6.4-1-9.6c0-72.6,0-145.1,0-217.7c0-13.2,4.9-20.2,17.7-24.7
	c27.8-9.8,55.5-19.5,83.4-28.8c6-2,8.5-4.3,8.4-11.2c-0.5-29.3,0.1-58.6-0.3-87.8c-0.2-12.8,5.5-20.8,16.8-25.6
	c28.6-12.2,57-24.6,85.7-36.5c5.4-2.2,7.1-4.9,7-10.6c-0.3-22.8-0.2-45.6-0.1-68.3c0-16.1,9.2-25.5,25.1-25.5
	c134.4,0,268.7,0,403.1,0c15.3,0,24.6,9.5,24.7,24.9c0.1,22.8,0.3,45.6-0.1,68.3c-0.1,6.2,1.8,9.1,7.4,11.4
	c28.1,11.7,55.8,24,83.9,35.7c12.6,5.2,18.6,13.6,18.3,27.6c-0.5,29.3,0,58.6-0.3,87.8c-0.1,5.6,1.8,7.8,6.8,9.5
	c27.3,9.1,54.4,18.4,81.6,27.7c16.4,5.6,21.1,12,21.1,29.3c0,71.9,0,143.8,0,215.7c0,12.7-8.2,22.5-19.6,24.1
	c-11.6,1.6-22.1-4.9-26.2-15.7c-1.4-3.8-1-7.7-1-11.6c0-63.1-0.2-126.2,0.2-189.4c0.1-8.4-1.9-12.1-10.3-14.9
	c-51.5-17.2-102.7-35.2-154-52.9C731.8,331.8,729.4,331.2,726.5,330.4z M273.5,207.9c-20.7,8.8-40.2,17.1-59.7,25.5
	c-2,0.8-2.8,2.3-2.8,4.6c0.1,20.9,0,41.8,0,63.6c20-6.9,38.6-13.4,57.2-19.8c3-1,5.3-1.7,5.3-5.6
	C273.5,253.9,273.5,231.6,273.5,207.9z M788.9,301.4c0-12.6,0.2-24.2-0.1-35.8c-0.2-10.3,3.9-22.8-1.6-30.3
	c-5.2-7-17.4-8.8-26.6-12.8c-11.1-4.8-22.2-9.5-34.2-14.6c0,23.4,0,45.1,0,66.9c0,3.1,0.4,5.4,4,6.6
	C749.7,287.8,768.8,294.5,788.9,301.4z" />
                            <path class="st0" d="M414.1,179.4c0,8.1,0.2,16.2,0,24.3c-0.4,13.4-10.5,23-23.8,22.9c-12.7-0.1-22.8-9.8-23-22.7
	c-0.3-16.2-0.3-32.5,0-48.7c0.2-12.8,10.4-22.3,23.2-22.4c12.8,0,23,9.4,23.5,22.1C414.3,163.2,414.1,171.3,414.1,179.4z" />
                            <path class="st0" d="M476.6,179.4c0-7.8-0.1-15.6,0-23.4c0.3-13.4,10.3-23.2,23.5-23.1c13.2,0.1,23.1,9.8,23.2,23.4
	c0.2,15.6,0.2,31.2,0,46.7c-0.2,13.7-9.9,23.5-23,23.6c-13.6,0.1-23.5-9.8-23.8-23.9C476.5,195,476.6,187.2,476.6,179.4z" />
                            <path class="st0" d="M585.9,179.3c0-7.8-0.2-15.6,0-23.4c0.3-13.4,10.4-23.1,23.6-23c12.8,0.1,22.9,9.6,23.1,22.5
	c0.3,16.2,0.3,32.5,0,48.7c-0.2,12.9-10.3,22.4-23.1,22.5c-13.2,0.1-23.3-9.6-23.6-23C585.7,195.5,585.9,187.4,585.9,179.3z" />
                            <path class="st0" d="M414.1,304.5c0,8.1,0.2,16.2,0,24.3c-0.4,13.3-10.7,22.9-23.9,22.7c-12.7-0.2-22.7-9.9-22.9-22.8
	c-0.2-16.2-0.3-32.5,0-48.7c0.2-12.8,10.5-22.2,23.4-22.2c12.8,0,22.9,9.5,23.3,22.3C414.3,288.3,414.1,296.4,414.1,304.5z" />
                            <path class="st0" d="M523.4,305.2c0,7.8,0.2,15.6,0,23.4c-0.3,13.4-10.3,23.2-23.6,23.1c-13.2-0.1-23.1-9.9-23.2-23.4
	c-0.2-15.6-0.2-31.2,0-46.7c0.2-13.7,9.9-23.4,23.1-23.5c13.7-0.1,23.5,9.7,23.7,23.9C523.5,289.6,523.4,297.4,523.4,305.2z" />
                            <path class="st0" d="M632.8,304.5c0,8.1,0.2,16.2,0,24.3c-0.4,13.3-10.6,23-23.8,22.8c-12.7-0.2-22.7-9.9-22.9-22.8
	c-0.2-16.2-0.3-32.5,0-48.7c0.2-12.8,10.5-22.3,23.3-22.3c12.8,0,22.9,9.4,23.4,22.2C633,288.2,632.7,296.4,632.8,304.5z" />
                            <path class="st0" d="M414.1,430.5c0,7.8,0.2,15.6,0,23.4c-0.4,13.3-10.7,23-23.9,22.8c-12.7-0.2-22.7-9.9-22.9-22.8
	c-0.2-16.2-0.3-32.5,0-48.7c0.2-12.8,10.5-22.3,23.4-22.2c12.8,0,22.9,9.5,23.3,22.3C414.3,413.6,414.1,422,414.1,430.5z" />
                            <path class="st0" d="M523.4,429.4c0,8.1,0.2,16.2,0,24.3c-0.4,13.4-10.5,23-23.8,22.9c-12.7-0.1-22.8-9.8-23-22.7
	c-0.3-16.2-0.3-32.5,0-48.7c0.2-12.8,10.4-22.3,23.3-22.4c12.8,0,23,9.4,23.4,22.2C523.7,413.1,523.4,421.2,523.4,429.4z" />
                            <path class="st0" d="M585.9,429.1c0-7.8-0.2-15.6,0-23.4c0.3-13.4,10.5-23,23.8-22.9c12.7,0.1,22.8,9.7,23,22.6
	c0.3,16.2,0.3,32.5,0,48.7c-0.2,12.8-10.4,22.4-23.2,22.4c-12.8,0.1-23-9.5-23.5-22.2C585.7,446,585.9,437.5,585.9,429.1z" />
                            <path class="st0" d="M211.1,461.2c0,7.8,0.1,15.6,0,23.4c-0.3,13.5-10.2,23.2-23.4,23.2c-13.2,0-23.2-9.8-23.4-23.3
	c-0.2-15.9-0.2-31.8,0-47.7c0.2-12.9,10.2-22.5,22.9-22.7c13.2-0.2,23.5,9.5,23.8,22.8C211.2,445,211.1,453.1,211.1,461.2z" />
                            <path class="st0" d="M835.8,461.5c0,7.8,0.2,15.6,0,23.4c-0.3,13.4-10.4,23.1-23.7,23c-12.7-0.1-22.8-9.7-23.1-22.6
	c-0.3-16.2-0.3-32.5,0-48.7c0.2-12.9,10.4-22.4,23.2-22.5c12.8-0.1,23.1,9.4,23.5,22.1C836,444.6,835.8,453,835.8,461.5z" />
                          </svg>
                        </div>
                        <div
                          class="font-medium text-lg text-pink-300 group-hover:text-pink-200 transition-colors leading-[1.2]">
                          Banco de dados<br>multi-empresa
                        </div>
                      </div>
                      <p class="text-gray-400 mb-4">
                        Gerencie múlticas empresas em um único sistema, com separação financeira e controle unificado.
                      </p>
                      <a
                        href="#contact"
                        class="mt-auto text-pink-400 hover:text-pink-300 inline-flex items-center">
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

                <!-- Service Card 5 -->
                <div class="relative group">
                  <div
                    class="absolute inset-0 bg-emerald-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                  <div
                    class="bg-gradient-to-br from-gray-900 to-gray-950 border border-emerald-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-emerald-500/40 transition-all duration-300">
                    <div class="flex flex-col h-full">
                      <div class="flex items-center mb-4">
                        <div
                          class="w-10 h-10 rounded bg-emerald-900/60 flex items-center justify-center mr-3 group-hover:bg-emerald-800/70 transition-colors">
                          <svg class="w-5 h-5 text-emerald-300" x="0px" y="0px"
                            stroke="none"
                            fill="currentColor"
                            viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
                            <path d="M26.9,393.5c0.7-1.7,1.8-3.3,2.1-5.1c3.7-20.2,13.2-24.9,33.7-24.6c19.7,0.3,39.5-0.1,59.2,0.1c21.5,0.2,28.7-1.4,37.5,25.6
	c7.8-21.6,15.3-41.9,22.7-62.3c10.9-30.1,21.6-60.4,32.8-90.4c11.8-31.5,35.3-47.5,68.7-47.5c145,0,290.1,0,435.1,0
	c32.9,0,56.7,16.1,68.1,47c18,48.6,35.4,97.4,53.1,146.1c0.7,2,1.5,4,2.4,6.1c3-2,2.7-5.1,3.4-7.6c2.8-10.2,9.6-15.9,19.9-16.3
	c28.4-1.1,56.8-1.1,85.1,0c10.7,0.4,17.1,6.8,20.4,17.2c6.3,19.5,6.2,38.8-0.6,58.1c-3.8,11-9.7,15.5-21.2,15.5
	c-26.8,0.1-53.6,0-80.9,0c0.4,3.7,3.3,3.8,5.1,4.9c15.5,8.9,24,22.5,24.1,40.1c0.3,96.9,0.2,193.8,0.1,290.7
	c0,16.2-9.4,25.2-25.6,25.3c-33.6,0.2-67.3,0.2-100.9,0c-17.1-0.1-26.1-9.2-26.2-26.6c-0.2-29.6-0.3-59.3,0.1-88.9
	c0.1-8.3-2.6-10.4-10.6-10.4c-155.5,0.2-311.1,0.2-466.6,0c-8.6,0-11.1,2.6-11,11c0.4,28.7,0.2,57.4,0.1,86.1
	c-0.1,20.3-8.6,28.8-28.7,28.9c-32.1,0.1-64.2,0.1-96.3,0c-18.9-0.1-27.9-8.9-27.9-27.8c-0.1-95-0.1-190.1,0-285.1
	c0-21.6,10-37,29.9-46c-2.5-3.3-5.5-2-7.9-2c-23.1-0.1-46.3-0.1-69.4-0.1c-17.2,0-22-3.8-26.8-20.6c-0.9-3.3-2-6.5-3-9.7
	C26.9,414.5,26.9,404,26.9,393.5z M500.2,454.3c89.8,0,179.5,0,269.3,0c10.2,0,10.2-0.1,6.8-9.6c-19.8-54.8-39.7-109.5-59.2-164.4
	c-2.7-7.6-6.3-10.3-14.5-10.3c-134.5,0.3-269,0.2-403.5,0c-7.8,0-11.4,2.4-14,9.8c-19.4,54.6-39.3,109-59,163.5
	c-4,11.1-4,11.1,7.7,11.1C322.5,454.3,411.3,454.3,500.2,454.3z M254.6,585.8c15.1,0,30.2,0.2,45.3-0.1c18.7-0.4,32-13.1,33.6-31.5
	c1.4-16.3-10.6-31.9-28.4-34.3c-28.8-3.9-57.8-0.9-86.7-1.6c-4.9-0.1-9.8,0.6-14.6,1.5c-17,3.3-28.9,18-27.7,34.1
	c1.3,18.2,14.8,31.4,33.3,31.8C224.4,586,239.5,585.7,254.6,585.8z M746.5,585.8C746.5,585.8,746.5,585.8,746.5,585.8
	c14.5,0,28.9,0,43.4,0c0.9,0,1.8,0,2.8-0.1c18.4-0.7,32-13.9,33.1-32c1-16.2-10.9-30.5-27.9-34c-5.2-1.1-10.3-1.6-15.6-1.5
	c-28.6,0.9-57.3-2.3-85.7,1.7c-17.7,2.5-29.7,18.2-28.2,34.5c1.7,18.4,15,31,33.8,31.3C717,586,731.7,585.8,746.5,585.8z" />
                          </svg>
                        </div>
                        <div
                          class="font-medium text-lg text-emerald-300 group-hover:text-emerald-200 transition-colors leading-[1.2]">
                          Controle de Frota
                        </div>
                      </div>
                      <p class="text-gray-400 mb-4">
                        Acompanhe custos, rotas e manutenção da frota com controle em tempo real.
                      </p>
                      <a
                        href="#contact"
                        class="mt-auto text-emerald-400 hover:text-emerald-300 inline-flex items-center">
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

                <!-- Service Card 6 -->
                <div class="relative group">
                  <div
                    class="absolute inset-0 bg-blue-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                  <div
                    class="bg-gradient-to-br from-gray-900 to-gray-950 border border-blue-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-blue-500/40 transition-all duration-300">
                    <div class="flex flex-col h-full">
                      <div class="flex items-center mb-4">
                        <div
                          class="w-10 h-10 rounded bg-blue-900/60 flex items-center justify-center mr-3 group-hover:bg-blue-800/70 transition-colors">
                          <svg class="w-5 h-5 text-blue-300" x="0px" y="0px"
                            stroke="none"
                            fill="currentColor"
                            viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
                            <path d="M565.7,976.9c-43.2,0-86.4,0-129.6,0c-12.1-5.4-17.8-15.3-20.7-27.7c-7.3-30.6-15.1-61-22.3-91.6
	c-1.6-6.7-4.5-10.9-11.3-12.9c-14.5-4.4-28.4-10.5-41.7-17.5c-6.3-3.3-11.2-2.6-17.1,1c-22.3,13.7-44.8,27.2-67.4,40.5
	c-17.8,10.5-29.2,9-44-5.6c-23.4-23.3-46.8-46.6-70-70c-15.3-15.5-16.7-26.9-5.5-45.5c13.1-22,26.2-44,39.6-65.8
	c3.8-6.1,4.6-11.4,1-18c-7-13.1-12.9-26.7-17.1-40.9c-2.3-7.5-6.8-10.6-14.2-12.3c-30.3-7.1-60.4-14.9-90.7-22.1
	c-12.4-3-22.4-8.6-27.7-20.7c0-43.2,0-86.4,0-129.6c5.3-12.1,15.3-17.8,27.7-20.7c30.6-7.3,61-15.1,91.6-22.4
	c6.7-1.6,10.9-4.5,12.9-11.3c3.4-11.9,8.2-23.3,13.9-34.2c3.4-6.6,2.8-11.9-1-18c-15.5-25.3-30.6-50.7-45.7-76.2
	c-11-18.6-9.6-29.3,5.6-44.6c23.1-23.2,46.2-46.3,69.4-69.4c15.6-15.6,27.3-17.1,46.2-5.8c24.1,14.4,48.3,28.7,72.2,43.5
	c6.2,3.8,11.3,4.6,17.9,1c13.8-7.6,28.3-13.8,43.4-18.4c7.5-2.3,10.6-6.8,12.3-14.2c7.1-30.6,14.8-61.1,22.4-91.6
	c5.1-20.3,14.1-27.4,34.5-27.5c33,0,66,0,99.1,0c23.5,0,31.7,6.5,37.4,29.7c7.4,30.2,15,60.4,22.2,90.7c1.5,6.3,4.2,10.4,10.7,12.4
	c14.5,4.4,28.4,10.5,41.8,17.5c6,3.1,10.6,2.5,16.2-1c23.1-14.2,46.5-28,69.8-41.9c19-11.3,30.8-9.9,46.3,5.5
	c22.8,22.6,45.5,45.3,68.1,68.1c16.7,16.8,18,27.5,6,47.7c-13.6,22.8-27.1,45.7-41.1,68.2c-4.1,6.6-4.4,12-0.8,18.8
	c6.6,12.5,12.4,25.6,16.4,39.2c2.2,7.5,6.8,10.6,14.2,12.4c30.6,7.1,61.1,14.8,91.6,22.4c20.3,5.1,27.5,14.2,27.5,34.5
	c0,33,0,66,0,99.1c0,23.6-6.7,31.9-29.7,37.4c-30.2,7.3-60.4,15-90.7,22.2c-6.8,1.6-10.7,5-12.7,11.6c-4.1,13.6-9.8,26.6-16.4,39.2
	c-3.2,6.2-3,11.1,0.8,17.1c14.3,23.1,28.1,46.4,42,69.8c10.4,17.6,8.9,29.3-5.7,43.9c-23.3,23.4-46.6,46.8-70,70.1
	c-15.5,15.5-26.6,16.9-45.4,5.6c-23.1-13.8-46.1-27.5-69-41.5c-5-3.1-9.3-3.5-14.6-0.7c-14.2,7.4-28.9,14-44.2,18.8
	c-6.7,2.1-9.7,6.3-11.3,12.9c-7.2,30.6-15,61-22.3,91.6C583.5,961.6,577.8,971.5,565.7,976.9z M694.2,504.1
	c0.1-101-78.2-192.9-192.1-194.4c-100.5-1.3-192.2,77.7-194.1,191.2c-1.7,99,76,193,191.4,194.8
	C599.3,697.4,691.4,618.9,694.2,504.1z" />
                          </svg>
                        </div>
                        <div
                          class="font-medium text-lg text-blue-300 group-hover:text-blue-200 transition-colors leading-[1.2]">
                          Produção industrial
                        </div>
                      </div>
                      <p class="text-gray-400 mb-4">
                        Crie ordens de produção, controle de insumos e rendimento com precisão e automação.
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

            <div class="grid md:grid-cols-1 gap-6">
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-indigo-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-indigo-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-indigo-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div class="w-14 h-14 rounded-full bg-indigo-900/60 flex items-center justify-center mr-3 group-hover:bg-indigo-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Lucas Loureiro</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-indigo-500/20 group-hover:border-indigo-500/40 transition-colors duration-300">
                        "A Reset Sistemas trouxe resultados excepcionais para a empresa. Integrei um sistema ERP que conecta com meu E-commerce e agora posso gerir tudo de um só lugar."
                      </blockquote>
                      <p>- Sócio-proprietário da MotoHub</p>
                    </div>
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
                      <div class="w-14 h-14 rounded-full bg-purple-900/60 flex items-center justify-center mr-3 group-hover:bg-purple-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Marina Ferreira</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-purple-500/20 group-hover:border-purple-500/40 transition-colors duration-300">
                        "Com os relatórios personalizados da Reset, conseguimos extrair exatamente as informações que precisamos para tomar decisões estratégicas com segurança. Agora temos indicadores claros."
                      </blockquote>
                      <p>- Proprietária da Qui Peças</p>
                    </div>
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
                      <div class="w-14 h-14 rounded-full bg-cyan-900/60 flex items-center justify-center mr-3 group-hover:bg-cyan-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Igor Mattos</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-cyan-500/20 group-hover:border-cyan-500/40 transition-colors duration-300">
                        "A Reset desenvolveu uma solução que integra todos os setores da empresa. Agora, vendas, estoque, financeiro e produção trabalham em total sincronia. Isso melhorou muito a produtividade"
                      </blockquote>
                      <p>- Gerente da Atacado de papelaria São Mateus</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Card 4 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-pink-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-pink-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-pink-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div class="w-14 h-14 rounded-full bg-pink-900/60 flex items-center justify-center mr-3 group-hover:bg-pink-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Pedro Coelho</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-pink-500/20 group-hover:border-pink-500/40 transition-colors duration-300">
                        "Precisávamos de um sistema muito específico para controlar processos internos que nenhum software do mercado atendia. O Max entendeu exatamente nossa realidade e entregou um sistema personalizado."
                      </blockquote>
                      <p>- Proprietário da Coelho Ourivesaria</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Card 5 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-emerald-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-emerald-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-emerald-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div class="w-14 h-14 rounded-full bg-emerald-900/60 flex items-center justify-center mr-3 group-hover:bg-emerald-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Gustavo Santos</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-emerald-500/20 group-hover:border-emerald-500/40 transition-colors duration-300">
                        "Gerencio três empresas e tinha muita dificuldade para organizar as informações de forma separada. Com o banco multi-empresa da Reset, consegui centralizar tudo sem misturar os dados, e com relatórios financeiros claros para cada CNPJ."
                      </blockquote>
                      <p>- Sócio do grupo Florestal Aracruz</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Card 5 -->
              <div class="relative group">
                <div
                  class="absolute inset-0 bg-blue-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                <div
                  class="bg-gradient-to-br from-gray-900 to-gray-950 border border-blue-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-blue-500/40 transition-all duration-300">
                  <div class="flex flex-col h-full">
                    <div class="flex items-center mb-4">
                      <div class="w-14 h-14 rounded-full bg-blue-900/60 flex items-center justify-center mr-3 group-hover:bg-blue-800/70 transition-colors">
                        <img src="img/img-sistema/perfil.svg" alt="Perfil" class="p-1 rounded-full w-full h-full object-contain" />
                      </div>

                      <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors group">
                        <div class="nome">
                          <p>Alexandre Piumbini</p>
                          <div class="estrelas">
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                            <i class="fa-solid fa-star space-x-1 text-xl 
                            bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 
                            group-hover:from-yellow-300 group-hover:via-yellow-200 group-hover:to-yellow-400
                            bg-clip-text text-transparent transition-colors duration-500"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content text-gray-400 group-hover:text-gray-300 transition-colors duration-300 mb-4">
                      <blockquote class="border-l-4 pl-4 italic text-gray-400 group-hover:text-gray-300 border-blue-500/20 group-hover:border-blue-500/40 transition-colors duration-300">
                        "Com o controle de frota da Reset Sistemas, conseguimos registrar e acompanhar todos os gastos com abastecimento, manutenção e deslocamento. Isso nos ajudou a identificar desperdícios e tomar decisões mais estratégicas."
                      </blockquote>
                      <p>- Proprietário da AP Motos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6" style="display:none;">
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
                          href="https://wa.link/3gptv3"
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
                  <form id='contatoForm' method='POST' enctype='multipart/form-data'>
                    <div class="grid md:grid-cols-2 gap-4 mb-4">
                      <div>
                        <label
                          for="nome"
                          class="block text-sm text-gray-400 mb-1">Nome</label>
                        <input
                          type="text"
                          id="nome"
                          class="input-nome w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" maxlength="60" />
                      </div>
                      <div>
                        <label
                          for="empresa"
                          class="block text-sm text-gray-400 mb-1">Empresa</label>
                        <input
                          type="text"
                          id="empresa"
                          class="input-nome w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" maxlength="60" />
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
                          class="input-email w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                      <div>
                        <label
                          for="whatsapp"
                          class="block text-sm text-gray-400 mb-1">Whatsapp</label>
                        <input
                          type="text"
                          id="whatsapp"
                          class="whatsapp w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors" />
                      </div>
                    </div>
                    <div class="mb-6">
                      <label
                        for="menssagem"
                        class="block text-sm text-gray-400 mb-1">Mensagem</label>
                      <textarea
                        id="menssagem"
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
                    <img src="img/img-sistema/logo-reset-gradiente.svg" class="w-6 h-6" alt="Logo Reset">
                  </div>
                </div>
              </div>
            </div>
            <div
              class="text-lg font-medium bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent flex items-center">
              Reset Sistemas
            </div>
          </div>

          <div class="links-footer flex flex-wrap justify-center mb-4 md:mb-0">
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
          © 2025 Reset Sistemas. Todos os direitos reservados.<br>FutureNav.
        </div>
      </div>
    </footer>

    <script src="scripts/inicio.js?v=<?php echo filemtime('scripts/inicio.js'); ?>"></script>
    <script src="scripts/maquinadeescrever.js?v=<?php echo filemtime('scripts/maquinadeescrever.js'); ?>"></script>
    <script src="scripts/inputs.js?v=<?php echo filemtime('scripts/inputs.js'); ?>"></script>
  </div>
</body>

</html>