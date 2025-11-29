@extends('layouts.app')

@section('title', 'GrowFin - BPO Financeiro e Soluções Financeiras para Empresas')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
              <span class="subtitle">Excelência em BPO Financeiro</span>
              <h1>Soluções Financeiras Completas para sua Empresa</h1>
              <p>A <strong>GrowFin</strong> é especialista em Business Process Outsourcing Financeiro, oferecendo
                serviços completos de análise de
                contas, contas a pagar, contas a receber, conciliação bancária e de cartões, DRE, DFC e muito mais.</p>

              <div class="hero-buttons">
                <a href="#call-to-action" class="btn-primary">Solicitar Orçamento</a>
                <a href="#services" class="btn-secondary">Nossos Serviços</a>
              </div>

              <div class="trust-badges">
                <div class="badge-item">
                  <i class="bi bi-shield-check"></i>
                  <div class="badge-text">
                    <span class="count">100%</span>
                    <span class="label">Confiabilidade</span>
                  </div>
                </div>
                <div class="badge-item">
                  <i class="bi bi-graph-up"></i>
                  <div class="badge-text">
                    <span class="count">24/7</span>
                    <span class="label">Suporte</span>
                  </div>
                </div>
                <div class="badge-item">
                  <i class="bi bi-people"></i>
                  <div class="badge-text">
                    <span class="count">20+</span>
                    <span class="label">Empresas Atendidas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-image">
              <img src="{{ asset('assets/img/logo.jpeg') }}" alt="BPO Financeiro" class="img-fluid logo-float">
              <div class="image-badge">
                <span>BPO Financeiro</span>
                <p>Soluções Completas</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-right" data-aos-delay="200">
              <h2>Especialistas em BPO Financeiro</h2>
              <p class="lead">A <strong>GrowFin</strong> é uma empresa especializada em Business Process Outsourcing
                (BPO) Financeiro,
                oferecendo soluções completas para outras empresas. Prestamos serviços de análise de contas, contas a
                pagar, contas a receber e conciliação bancária, de cartões e com IFood.</p>
              <p>Nossa equipe altamente qualificada garante processos financeiros eficientes, precisos e em conformidade
                com as normas vigentes. Trabalhamos com tecnologia de ponta para entregar resultados que fazem a
                diferença no crescimento do seu negócio.</p>

              <div class="achievement-boxes row g-4 mt-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="achievement-box">
                    <h3>20+</h3>
                    <p>Empresas Atendidas</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-box">
                    <h3>12+</h3>
                    <p>Serviços Financeiros</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="500">
                  <div class="achievement-box">
                    <h3>100%</h3>
                    <p>Satisfação do Cliente</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="achievement-box">
                    <h3>24/7</h3>
                    <p>Suporte Disponível</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image position-relative" data-aos="fade-left" data-aos-delay="200">
              <img src="{{ asset('assets/img/paulo-helio-2.jpeg') }}" alt="BPO Financeiro" class="img-fluid main-image rounded">
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span>BPO</span>
                <p>Financeiro Completo</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- CEO Section -->
    <section id="ceo" class="ceo section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="ceo-image position-relative">
              <img src="{{ asset('assets/img/ceo-paulo-helio.jpeg') }}" alt="Paulo Hélio - CEO e Fundador GrowFin"
                class="img-fluid rounded">
              <div class="ceo-badge">
                <i class="bi bi-award"></i>
                <span>CEO & Fundador</span>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="ceo-content">
              <span class="subtitle">Liderança e Visão</span>
              <h2>Paulo Hélio - CEO e Fundador</h2>
              <p class="lead">Com vasta experiência em gestão financeira e business process outsourcing, Paulo Hélio
                lidera a <strong>GrowFin</strong> com foco em excelência, inovação e resultados para nossos clientes.
              </p>
              <p>Nossa empresa foi fundada com a missão de transformar a gestão financeira de empresas, oferecendo
                soluções completas e personalizadas que geram valor real e sustentável para o negócio.</p>

              <div class="ceo-quote mt-4">
                <div class="quote-content">
                  <i class="bi bi-quote"></i>
                  <p>"Acreditamos que toda empresa merece ter processos financeiros eficientes e transparentes. Nossa
                    missão é proporcionar isso através de soluções inteligentes e tecnologia de ponta."</p>
                  <span class="quote-author">— Paulo Hélio, CEO GrowFin</span>
                </div>
              </div>

              <div class="ceo-stats row g-4 mt-4">
                <div class="col-6 col-md-3">
                  <div class="stat-item">
                    <h3>8</h3>
                    <p>Anos de Experiência</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="stat-item">
                    <h3>20+</h3>
                    <p>Empresas Atendidas</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="stat-item">
                    <h3>12+</h3>
                    <p>Serviços Financeiros</p>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="stat-item">
                    <h3>100%</h3>
                    <p>Comprometimento</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /CEO Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Nossos Serviços</h2>
        <p>Soluções completas em BPO Financeiro para otimizar a gestão financeira da sua empresa</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-cash-coin"></i>
              </div>
              <h3>Contas a Pagar</h3>
              <p>Gestão completa do processo de contas a pagar, garantindo pagamentos em dia e controle total das
                despesas da empresa.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Controle de Vencimentos</span>
                <span><i class="bi bi-check-circle"></i> Planejamento Financeiro</span>
                <span><i class="bi bi-check-circle"></i> Emissão de Boletos</span>
              </div>
              <a href="#services" class="service-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card featured">
              <div class="service-badge">Principal</div>
              <div class="service-icon">
                <i class="bi bi-wallet2"></i>
              </div>
              <h3>BPO Financeiro</h3>
              <p>Solução completa que engloba todos os processos financeiros: contas a pagar, contas a receber,
                conciliações, DRE, DFC e muito mais.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Serviços Integrados</span>
                <span><i class="bi bi-check-circle"></i> Análise Completa</span>
                <span><i class="bi bi-check-circle"></i> Gestão Estratégica</span>
              </div>
              <a href="#services" class="service-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-receipt"></i>
              </div>
              <h3>Contas a Receber</h3>
              <p>Administração eficiente das contas a receber, otimizando o fluxo de caixa e garantindo o recebimento em
                dia.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Cobrança Automatizada</span>
                <span><i class="bi bi-check-circle"></i> Emissão de NF</span>
                <span><i class="bi bi-check-circle"></i> Controle de Inadimplência</span>
              </div>
              <a href="#services" class="service-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

        <div class="row mt-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-image-block">
              <img src="{{ asset('assets/img/paulo-helio-2.jpeg') }}" alt="BPO Financeiro" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-list-block">
              <h3>Outros Serviços Especializados</h3>
              <p>Além dos serviços principais, oferecemos soluções complementares para uma gestão financeira completa e
                eficiente.</p>

              <div class="service-list">
                <div class="service-list-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-list-icon">
                    <i class="bi bi-bank"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Conciliação Bancária</h4>
                    <p>Conciliação precisa de extratos bancários, garantindo que todos os lançamentos estejam corretos e
                      atualizados.</p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-list-icon">
                    <i class="bi bi-credit-card"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Conciliação de Cartões</h4>
                    <p>Conciliação completa de transações com cartões de crédito e débito, incluindo máquinas de cartão.
                    </p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-list-icon">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>DRE e DFC</h4>
                    <p>Elaboração de Demonstrativo de Resultado do Exercício (DRE) e Demonstrativo de Fluxo de Caixa
                      (DFC).</p>
                  </div>
                </div><!-- End Service List Item -->
              </div>
            </div>
          </div>
        </div>

        <div class="cta-container text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <h3>Pronto para Otimizar a Gestão Financeira da sua Empresa?</h3>
          <p>Entre em contato conosco e descubra como podemos ajudar sua empresa com soluções completas em BPO
            Financeiro.</p>
          <a href="#call-to-action" class="btn btn-cta">Solicitar Orçamento Gratuito</a>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Details Section -->
    <section id="services-details" class="services-details section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Nossos Serviços em Detalhes</h2>
        <p>Conheça todos os serviços que oferecemos para uma gestão financeira completa</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-bank"></i>
              </div>
              <h3>Conciliação Bancária</h3>
              <p>Conciliação precisa de extratos bancários, garantindo que todos os lançamentos estejam corretos e
                atualizados.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-credit-card"></i>
              </div>
              <h3>Conciliação de Cartões</h3>
              <p>Conciliação completa de transações com cartões de crédito e débito, incluindo máquinas de cartão.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-phone"></i>
              </div>
              <h3>Conciliação com IFood</h3>
              <p>Conciliação especializada com a plataforma IFood, garantindo controle completo das vendas online.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <h3>DRE - Demonstrativo de Resultado do Exercício</h3>
              <p>Elaboração completa do Demonstrativo de Resultado do Exercício para análise de desempenho financeiro.
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-graph-down"></i>
              </div>
              <h3>DFC - Demonstrativo de Fluxo de Caixa</h3>
              <p>Análise e elaboração do Demonstrativo de Fluxo de Caixa para controle financeiro detalhado.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h3>Planejamento e Prospecção Financeira</h3>
              <p>Planejamento estratégico e prospecção financeira para otimização dos resultados da empresa.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-people"></i>
              </div>
              <h3>Reuniões Estratégicas Periódicas</h3>
              <p>Reuniões periódicas para alinhamento estratégico e acompanhamento dos resultados financeiros.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="800">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-receipt-cutoff"></i>
              </div>
              <h3>Emissão de NF e Boletos</h3>
              <p>Emissão de Notas Fiscais e Boletos de cobrança, garantindo conformidade e agilidade nos processos.</p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Details Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-slide" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-header">
                  <div class="stars-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="quote-icon">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>"A qualidade dos serviços e as soluções inovadoras transformaram completamente nossos processos
                    financeiros, resultando em maior produtividade e satisfação excepcional em toda nossa organização."
                  </p>
                </div>
                <div class="testimonial-footer">
                  <div class="author-info">
                    <img src="{{ asset('assets/img/person/person-f-12.webp') }}" alt="Autor" class="author-avatar">
                    <div class="author-details">
                      <h4>Maria Silva</h4>
                      <span class="role">Diretora Financeira</span>
                      <span class="company">Empresa XYZ</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-slide" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-header">
                  <div class="stars-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="quote-icon">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>"A expertise profissional e o suporte dedicado melhoraram significativamente nossos processos
                    financeiros, mantendo padrões excepcionais de qualidade em todas as nossas operações."</p>
                </div>
                <div class="testimonial-footer">
                  <div class="author-info">
                    <img src="{{ asset('assets/img/person/person-m-14.webp') }}" alt="Autor" class="author-avatar">
                    <div class="author-details">
                      <h4>João Santos</h4>
                      <span class="role">Gerente Financeiro</span>
                      <span class="company">Empresa ABC Ltda</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-slide" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-header">
                  <div class="stars-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="quote-icon">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>"A colaboração estratégica e o pensamento inovador permitiram uma transformação financeira notável,
                    levando ao aumento da eficiência e resultados mensuráveis de crescimento do negócio."</p>
                </div>
                <div class="testimonial-footer">
                  <div class="author-info">
                    <img src="{{ asset('assets/img/person/person-f-11.webp') }}" alt="Autor" class="author-avatar">
                    <div class="author-details">
                      <h4>Ana Paula Costa</h4>
                      <span class="role">Diretora Comercial</span>
                      <span class="company">Comércio Digital S.A.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="swiper-navigation-wrapper">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Benefits Section -->
    <section id="benefits" class="benefits section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Por Que Escolher Nossos Serviços</h2>
        <p>Confiança, expertise e resultados comprovados em BPO Financeiro</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5 content">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-center mb-4">Excelência em BPO Financeiro</h2>
            <p class="text-center lead">Oferecemos soluções completas e personalizadas para sua empresa, com tecnologia
              de ponta e equipe altamente qualificada.</p>
          </div>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-4 col-md-6">
            <div class="service-card h-100">
              <div class="service-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Experiência de 8 Anos</h4>
              <p>Com 8 anos de experiência no mercado, nossa equipe possui conhecimento sólido e comprovado em BPO
                Financeiro, garantindo soluções eficientes e resultados de excelência para sua empresa.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-card h-100">
              <div class="service-icon">
                <i class="bi bi-building"></i>
              </div>
              <h4>Mais de 20 Empresas Atendidas</h4>
              <p>Já atendemos mais de 20 empresas de diversos segmentos, demonstrando nossa capacidade de adaptação e
                excelência na prestação de serviços financeiros personalizados.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-card h-100">
              <div class="service-icon">
                <i class="bi bi-stack"></i>
              </div>
              <h4>Mais de 12 Serviços Financeiros</h4>
              <p>Oferecemos mais de 12 serviços financeiros especializados, desde contas a pagar e receber até DRE, DFC
                e conciliações, proporcionando uma solução completa para sua empresa.</p>
            </div>
          </div>
        </div>

        <div class="achievements-banner mt-5" data-aos="zoom-in" data-aos-delay="400">
          <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-trophy"></i>
                <h3>8</h3>
                <p>Anos de Experiência</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-shield-check"></i>
                <h3>20+</h3>
                <p>Empresas Atendidas</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-clock-history"></i>
                <h3>24/7</h3>
                <p>Suporte Disponível</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="achievement-item">
                <i class="bi bi-graph-up"></i>
                <h3>12+</h3>
                <p>Serviços Financeiros</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Benefits Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">

          <div class="col-lg-6">
            <div class="cta-hero-content" data-aos="fade-right" data-aos-delay="200">
              <div class="badge-wrapper">
                <span class="cta-badge">
                  <i class="bi bi-shield-check"></i>
                  Especialistas em BPO Financeiro
                </span>
              </div>

              <h2>Otimize a Gestão Financeira da sua Empresa com Nossos Serviços</h2>
              <p>Nossa equipe especializada oferece soluções completas em BPO Financeiro, garantindo processos
                eficientes, precisos e em conformidade com as normas vigentes. Trabalhamos com tecnologia de ponta para
                entregar resultados que fazem a diferença no crescimento do seu negócio.</p>

              <div class="feature-highlights">
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Consulta gratuita e análise detalhada do seu negócio</span>
                </div>
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Segurança e confidencialidade total dos dados financeiros</span>
                </div>
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Suporte 24/7 e atendimento dedicado à sua empresa</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="cta-form-section" data-aos="fade-left" data-aos-delay="300">
              <div class="form-container">
                <div class="form-header">
                  <h3>Solicite Seu Orçamento Gratuito</h3>
                  <p>Comece a otimizar a gestão financeira da sua empresa hoje mesmo</p>
                </div>

                <form method="post" action="javascript:void(0);" class="php-email-form" id="quote-form" novalidate>
                  @csrf
                  <div class="row g-3">
                    <!-- 1. Nome -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Qual o seu nome? <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Seu Nome" required>
                        <div class="invalid-feedback" id="name-error" style="display: none;">
                          Por favor, informe seu nome.
                        </div>
                      </div>
                    </div>
                    <!-- 2. Sobrenome -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Qual o seu sobrenome? <span class="text-danger">*</span></label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Seu Sobrenome" required>
                        <div class="invalid-feedback" id="lastname-error" style="display: none;">
                          Por favor, informe seu sobrenome.
                        </div>
                      </div>
                    </div>
                    <!-- 3. Telefone -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Qual o seu número de telefone? <span class="text-danger">*</span></label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="(00) 00000-0000" maxlength="15" required>
                        {{-- <small class="text-muted">Formato: (00) 00000-0000 (apenas celular com 11 dígitos)</small> --}}
                        <div class="invalid-feedback" id="phone-error" style="display: none;">
                          Por favor, digite um número de celular válido com 11 dígitos.
                        </div>
                      </div>
                    </div>
                    <!-- 4. Email -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Qual o seu endereço de e-mail? <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="seu@email.com" required>
                        {{-- <small class="text-muted">Digite um email válido (exemplo: nome@dominio.com)</small> --}}
                        <div class="invalid-feedback" id="email-error" style="display: none;">
                          Por favor, digite um endereço de email válido.
                        </div>
                      </div>
                    </div>
                    <!-- 5. Tamanho da Empresa -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Qual o tamanho da sua empresa? <span class="text-danger">*</span></label>
                        <select name="company_size" id="company_size" class="form-control" required>
                          <option value="">Selecione uma opção</option>
                          <option value="micro">Micro</option>
                          <option value="pequena">Pequena</option>
                          <option value="media">Média</option>
                          <option value="grande">Grande</option>
                        </select>
                        <div class="invalid-feedback" id="company_size-error" style="display: none;">
                          Por favor, selecione o tamanho da sua empresa.
                        </div>
                      </div>
                    </div>
                    <!-- 6. Setor de Atuação -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Qual o seu setor de atuação? <span class="text-danger">*</span></label>
                        <select name="sector" id="sector" class="form-control" required>
                          <option value="">Selecione uma opção</option>
                          <option value="servicos">Serviços</option>
                          <option value="comercio">Comércio</option>
                          <option value="industria">Indústria</option>
                          <option value="tecnologia">Tecnologia</option>
                          <option value="outro">Outro</option>
                        </select>
                        <div class="invalid-feedback" id="sector-error" style="display: none;">
                          Por favor, selecione o seu setor de atuação.
                        </div>
                      </div>
                    </div>
                    <!-- 7. Maior Dor no Financeiro (Checklist) -->
                    <div class="col-12">
                      <div class="form-group" id="financial_pain-group">
                        <label class="form-label">Qual é a maior dor hoje no seu financeiro?</label>
                        <div class="invalid-feedback" id="financial_pain-error" style="display: none; margin-bottom: 0.5rem;">
                          Por favor, selecione pelo menos uma opção.
                        </div>
                        <div class="checkbox-group row g-2">
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-controle" id="pain-controle">
                              <label class="form-check-label" for="pain-controle">Falta de controle</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-tempo" id="pain-tempo">
                              <label class="form-check-label" for="pain-tempo">Falta de tempo</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-previsibilidade" id="pain-previsibilidade">
                              <label class="form-check-label" for="pain-previsibilidade">Falta de previsibilidade</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="retrabalho-operacional" id="pain-retrabalho">
                              <label class="form-check-label" for="pain-retrabalho">Retrabalho operacional</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="inadimplencia" id="pain-inadimplencia">
                              <label class="form-check-label" for="pain-inadimplencia">Inadimplência</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="desorganizacao" id="pain-desorganizacao">
                              <label class="form-check-label" for="pain-desorganizacao">Desorganização</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_pain[]" value="multas-juros" id="pain-multas">
                              <label class="form-check-label" for="pain-multas">Pagamento de multas e juros por atraso</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 8. Áreas Financeiras que Precisa de Ajuda (Checklist) -->
                    <div class="col-12">
                      <div class="form-group" id="financial_areas-group">
                        <label class="form-label">Quais áreas financeiras você precisa de ajuda?</label>
                        <div class="invalid-feedback" id="financial_areas-error" style="display: none; margin-bottom: 0.5rem;">
                          Por favor, selecione pelo menos uma opção.
                        </div>
                        <div class="checkbox-group row g-2">
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_areas[]" value="contas-pagar" id="area-pagar">
                              <label class="form-check-label" for="area-pagar">Contas a pagar</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_areas[]" value="contas-receber" id="area-receber">
                              <label class="form-check-label" for="area-receber">Contas a receber</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_areas[]" value="conciliacao-bancaria" id="area-conciliacao">
                              <label class="form-check-label" for="area-conciliacao">Conciliação bancária</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_areas[]" value="fluxo-caixa" id="area-fluxo">
                              <label class="form-check-label" for="area-fluxo">Fluxo de caixa</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-check checkbox-square">
                              <input class="form-check-input" type="checkbox" name="financial_areas[]" value="previsao-financeira" id="area-previsao">
                              <label class="form-check-label" for="area-previsao">Previsão financeira</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 9. Previsibilidade de Fluxo de Caixa -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Você possui previsibilidade de fluxo de caixa dos próximos 30 dias? <span class="text-danger">*</span></label>
                        <select name="cashflow_predictability" id="cashflow_predictability" class="form-control" required>
                          <option value="">Selecione uma opção</option>
                          <option value="sim">Sim</option>
                          <option value="parcial">Parcial</option>
                          <option value="nao">Não</option>
                        </select>
                        <div class="invalid-feedback" id="cashflow_predictability-error" style="display: none;">
                          Por favor, selecione uma opção.
                        </div>
                      </div>
                    </div>
                    <!-- 10. Nível de Urgência -->
                    <div class="col-12">
                      <div class="form-group">
                        <label class="form-label">Em que nível você considera a urgência de organizar seu financeiro? <span class="text-danger">*</span></label>
                        <select name="urgency_level" id="urgency_level" class="form-control" required>
                          <option value="">Selecione uma opção</option>
                          <option value="urgente">Preciso resolver urgente</option>
                          <option value="30-dias">Quero resolver nos próximos 30 dias</option>
                          <option value="avaliando">Estou avaliando opções</option>
                        </select>
                        <div class="invalid-feedback" id="urgency_level-error" style="display: none;">
                          Por favor, selecione uma opção.
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="loading">Enviando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua solicitação de orçamento foi enviada. Obrigado!</div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-send"></i>
                      Enviar Solicitação
                    </button>

                    <div class="contact-alternative">
                      <span>Ou entre em contato diretamente:</span>
                      <a href="#contact" class="phone-link">
                        <i class="bi bi-telephone-fill"></i>
                        Fale Conosco
                      </a>
                    </div>
                  </div>
                </form>
              </div>

              <div class="trust-indicators" data-aos="fade-up" data-aos-delay="400">
                <div class="row g-3">
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-clock"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">24h</span>
                        <span class="trust-label">Tempo de Resposta</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">4.9</span>
                        <span class="trust-label">Avaliação dos Clientes</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="trust-item">
                      <div class="trust-icon">
                        <i class="bi bi-graph-up"></i>
                      </div>
                      <div class="trust-content">
                        <span class="trust-number">20+</span>
                        <span class="trust-label">Empresas Atendidas</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Entre em Contato</h2>
        <p>Estamos prontos para ajudar sua empresa com soluções em BPO Financeiro</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card h-100 text-center">
              <div class="service-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <h4>Email</h4>
              <p><a href="mailto:growfingestao@gmail.com">growfingestao@gmail.com</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card h-100 text-center">
              <div class="service-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <h4>Telefone</h4>
              <p><a href="tel:+5591993010118">(91) 99301-0118</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card h-100 text-center">
              <div class="service-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <h4>WhatsApp</h4>
              <p><a href="https://wa.me/5591993010118" target="_blank">(91) 99301-0118</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card h-100 text-center">
              <div class="service-icon">
                <i class="bi bi-share-fill"></i>
              </div>
              <h4>Redes Sociais</h4>
              <p><a href="https://instagram.com/growfingestao" target="_blank">@growfingestao</a></p>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="600">
            <div class="service-card text-center">
              <div class="service-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <h4>Horário de Atendimento</h4>
              <p class="mb-2"><strong>Segunda a Sexta:</strong> 9:00 às 18:00</p>
              <p class="mb-0"><strong>Sábado:</strong> 9:00 às 13:00</p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection

@section('styles')
<style>
.checkbox-square .form-check {
  display: flex;
  align-items: center;
  min-height: 1.5rem;
}

.checkbox-square .form-check-input {
  width: 20px !important;
  height: 20px !important;
  min-width: 20px !important;
  flex-shrink: 0;
  border-radius: 4px;
  border: 2px solid #dee2e6 !important;
  cursor: pointer;
  margin-top: 0;
  margin-right: 0.5rem;
  display: block !important;
  appearance: auto;
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
  background-color: #fff;
  position: relative;
}

.checkbox-square .form-check-input:checked {
  background-color: #F27920 !important;
  border-color: #F27920 !important;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

.checkbox-square .form-check-input:focus {
  border-color: #F27920 !important;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(242, 121, 32, 0.25);
}

.checkbox-square .form-check-label {
  cursor: pointer;
  margin-left: 0;
  padding-top: 0;
  flex: 1;
  word-wrap: break-word;
  word-break: break-word;
  line-height: 1.5;
  display: block;
}

.checkbox-square .col-md-6 {
  margin-bottom: 0.5rem;
  display: flex;
  align-items: flex-start;
}

.checkbox-group .col-md-6:last-child {
  margin-bottom: 0;
}

.checkbox-group .col-md-6 .form-check {
  width: 100%;
}

/* Estilos para validação de email */
.form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6 .4.4.4-.4m0 4.8-.4-.4-.4.4'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.form-group small.text-muted {
  display: block;
  margin-top: 0.25rem;
  font-size: 0.875rem;
}

.invalid-feedback {
  display: block;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875rem;
  color: #dc3545;
}

.form-control.is-invalid ~ .invalid-feedback,
select.is-invalid ~ .invalid-feedback {
  display: block;
}

.form-group.has-error {
  border-left: 3px solid #dc3545;
  padding-left: 0.5rem;
}

.form-group.has-error .form-label {
  color: #dc3545;
}
</style>
@endsection

@section('scripts')
<script>
// Desabilitar validação da biblioteca php-email-form para este formulário
(function() {
  const form = document.querySelector('form#quote-form');
  if (form) {
    // Remover qualquer listener da biblioteca
    const newForm = form.cloneNode(true);
    form.parentNode.replaceChild(newForm, form);
  }
})();

// Função para aplicar máscara de celular (apenas 11 dígitos)
function maskPhone(value) {
  // Remove tudo que não é dígito
  value = value.replace(/\D/g, '');
  
  // Limita a 11 dígitos (celular brasileiro)
  if (value.length > 11) {
    value = value.substring(0, 11);
  }
  
  // Aplica a máscara de celular: (00) 00000-0000
  if (value.length <= 2) {
    value = value.replace(/^(\d{0,2})/, '($1');
  } else if (value.length <= 7) {
    value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
  } else {
    value = value.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
  }
  
  return value;
}

// Função para validar celular (11 dígitos)
function validatePhone(phone) {
  const digits = phone.replace(/\D/g, '');
  return digits.length === 11 && /^[1-9]\d{10}$/.test(digits);
}

// Função para validar email com regex mais robusta
function validateEmail(email) {
  // Regex mais completa para validação de email
  const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  return re.test(email) && email.length <= 254;
}

document.addEventListener('DOMContentLoaded', function() {
  // Aplicar máscara de celular
  const phoneInput = document.getElementById('phone');
  if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
      const value = e.target.value;
      e.target.value = maskPhone(value);
      
      // Validação em tempo real
      const phoneError = document.getElementById('phone-error');
      if (value.length > 0) {
        const digits = value.replace(/\D/g, '');
        if (digits.length > 0 && digits.length < 11) {
          e.target.classList.add('is-invalid');
          if (phoneError) phoneError.style.display = 'block';
        } else if (digits.length === 11) {
          e.target.classList.remove('is-invalid');
          if (phoneError) phoneError.style.display = 'none';
        }
      } else {
        e.target.classList.remove('is-invalid');
        if (phoneError) phoneError.style.display = 'none';
      }
    });
    
    phoneInput.addEventListener('blur', function(e) {
      const value = e.target.value;
      const phoneError = document.getElementById('phone-error');
      if (!validatePhone(value)) {
        e.target.classList.add('is-invalid');
        if (phoneError) phoneError.style.display = 'block';
        e.target.setCustomValidity('Por favor, digite um número de celular válido com 11 dígitos.');
      } else {
        e.target.classList.remove('is-invalid');
        if (phoneError) phoneError.style.display = 'none';
        e.target.setCustomValidity('');
      }
    });
    
    phoneInput.addEventListener('keydown', function(e) {
      // Permite backspace, delete, tab, escape, enter
      if ([8, 9, 27, 13, 46].indexOf(e.keyCode) !== -1 ||
        // Permite Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X
        (e.keyCode === 65 && e.ctrlKey === true) ||
        (e.keyCode === 67 && e.ctrlKey === true) ||
        (e.keyCode === 86 && e.ctrlKey === true) ||
        (e.keyCode === 88 && e.ctrlKey === true) ||
        // Permite home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
      }
      // Garante que é um número
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    });
    
    phoneInput.addEventListener('paste', function(e) {
      e.preventDefault();
      const paste = (e.clipboardData || window.clipboardData).getData('text');
      const masked = maskPhone(paste);
      e.target.value = masked;
      // Dispara evento input para validação
      e.target.dispatchEvent(new Event('input'));
    });
  }
  
  // Remover erros quando o usuário começar a preencher
  const requiredInputs = ['name', 'lastname', 'company_size', 'sector', 'cashflow_predictability', 'urgency_level'];
  requiredInputs.forEach(inputId => {
    const input = document.getElementById(inputId);
    if (input) {
      input.addEventListener('input', function() {
        if (this.classList.contains('is-invalid')) {
          this.classList.remove('is-invalid');
          const error = document.getElementById(inputId + '-error');
          if (error) error.style.display = 'none';
        }
      });
      input.addEventListener('change', function() {
        if (this.classList.contains('is-invalid')) {
          this.classList.remove('is-invalid');
          const error = document.getElementById(inputId + '-error');
          if (error) error.style.display = 'none';
        }
      });
    }
  });
  
  // Remover erros dos checkboxes quando selecionados
  const financialPainCheckboxes = document.querySelectorAll('input[name="financial_pain[]"]');
  financialPainCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const group = document.getElementById('financial_pain-group');
      const error = document.getElementById('financial_pain-error');
      if (group && group.classList.contains('has-error')) {
        group.classList.remove('has-error');
        if (error) error.style.display = 'none';
      }
    });
  });
  
  const financialAreasCheckboxes = document.querySelectorAll('input[name="financial_areas[]"]');
  financialAreasCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const group = document.getElementById('financial_areas-group');
      const error = document.getElementById('financial_areas-error');
      if (group && group.classList.contains('has-error')) {
        group.classList.remove('has-error');
        if (error) error.style.display = 'none';
      }
    });
  });
  
  // Validação de email em tempo real
  const emailInput = document.getElementById('email');
  if (emailInput) {
    emailInput.addEventListener('blur', function(e) {
      const email = e.target.value.trim();
      const emailError = document.getElementById('email-error');
      if (email && !validateEmail(email)) {
        e.target.classList.add('is-invalid');
        if (emailError) emailError.style.display = 'block';
        e.target.setCustomValidity('Por favor, digite um endereço de email válido.');
      } else {
        e.target.classList.remove('is-invalid');
        if (emailError) emailError.style.display = 'none';
        e.target.setCustomValidity('');
      }
    });
    
    emailInput.addEventListener('input', function(e) {
      const email = e.target.value.trim();
      const emailError = document.getElementById('email-error');
      if (e.target.classList.contains('is-invalid') && validateEmail(email)) {
        e.target.classList.remove('is-invalid');
        if (emailError) emailError.style.display = 'none';
        e.target.setCustomValidity('');
      } else if (email.length > 0 && !validateEmail(email)) {
        e.target.classList.add('is-invalid');
        if (emailError) emailError.style.display = 'block';
      }
    });
  }
  
  const form = document.querySelector('form#quote-form');
  if (form) {
    // Prevenir validação da biblioteca php-email-form
    form.setAttribute('data-php-email-form', 'false');
    form.setAttribute('data-form-type', 'other');
    
    // Função para validar todos os campos obrigatórios
    function validateAllFields() {
      let isValid = true;
      let firstErrorField = null;
      
      // Limpar erros anteriores
      form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
      form.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
      
      // 1. Nome
      const nameInput = document.getElementById('name');
      if (!nameInput || !nameInput.value.trim()) {
        isValid = false;
        nameInput.classList.add('is-invalid');
        const nameError = document.getElementById('name-error');
        if (nameError) nameError.style.display = 'block';
        if (!firstErrorField) firstErrorField = nameInput;
      }
      
      // 2. Sobrenome
      const lastnameInput = document.getElementById('lastname');
      if (!lastnameInput || !lastnameInput.value.trim()) {
        isValid = false;
        lastnameInput.classList.add('is-invalid');
        const lastnameError = document.getElementById('lastname-error');
        if (lastnameError) lastnameError.style.display = 'block';
        if (!firstErrorField) firstErrorField = lastnameInput;
      }
      
      // 3. Telefone
      const phoneInput = document.getElementById('phone');
      if (!phoneInput || !validatePhone(phoneInput.value)) {
        isValid = false;
        phoneInput.classList.add('is-invalid');
        const phoneError = document.getElementById('phone-error');
        if (phoneError) phoneError.style.display = 'block';
        if (!firstErrorField) firstErrorField = phoneInput;
      }
      
      // 4. Email
      const emailInput = document.getElementById('email');
      if (!emailInput || !validateEmail(emailInput.value.trim())) {
        isValid = false;
        emailInput.classList.add('is-invalid');
        const emailError = document.getElementById('email-error');
        if (emailError) emailError.style.display = 'block';
        if (!firstErrorField) firstErrorField = emailInput;
      }
      
      // 5. Tamanho da Empresa
      const companySizeInput = document.getElementById('company_size');
      if (!companySizeInput || !companySizeInput.value) {
        isValid = false;
        companySizeInput.classList.add('is-invalid');
        const companySizeError = document.getElementById('company_size-error');
        if (companySizeError) companySizeError.style.display = 'block';
        if (!firstErrorField) firstErrorField = companySizeInput;
      }
      
      // 6. Setor
      const sectorInput = document.getElementById('sector');
      if (!sectorInput || !sectorInput.value) {
        isValid = false;
        sectorInput.classList.add('is-invalid');
        const sectorError = document.getElementById('sector-error');
        if (sectorError) sectorError.style.display = 'block';
        if (!firstErrorField) firstErrorField = sectorInput;
      }
      
      // 7. Maior Dor no Financeiro (pelo menos uma opção)
      const financialPainCheckboxes = form.querySelectorAll('input[name="financial_pain[]"]:checked');
      if (financialPainCheckboxes.length === 0) {
        isValid = false;
        const financialPainGroup = document.getElementById('financial_pain-group');
        if (financialPainGroup) financialPainGroup.classList.add('has-error');
        const financialPainError = document.getElementById('financial_pain-error');
        if (financialPainError) financialPainError.style.display = 'block';
        if (!firstErrorField) firstErrorField = financialPainGroup;
      }
      
      // 8. Áreas Financeiras (pelo menos uma opção)
      const financialAreasCheckboxes = form.querySelectorAll('input[name="financial_areas[]"]:checked');
      if (financialAreasCheckboxes.length === 0) {
        isValid = false;
        const financialAreasGroup = document.getElementById('financial_areas-group');
        if (financialAreasGroup) financialAreasGroup.classList.add('has-error');
        const financialAreasError = document.getElementById('financial_areas-error');
        if (financialAreasError) financialAreasError.style.display = 'block';
        if (!firstErrorField) firstErrorField = financialAreasGroup;
      }
      
      // 9. Previsibilidade de Fluxo de Caixa
      const cashflowInput = document.getElementById('cashflow_predictability');
      if (!cashflowInput || !cashflowInput.value) {
        isValid = false;
        cashflowInput.classList.add('is-invalid');
        const cashflowError = document.getElementById('cashflow_predictability-error');
        if (cashflowError) cashflowError.style.display = 'block';
        if (!firstErrorField) firstErrorField = cashflowInput;
      }
      
      // 10. Nível de Urgência
      const urgencyInput = document.getElementById('urgency_level');
      if (!urgencyInput || !urgencyInput.value) {
        isValid = false;
        urgencyInput.classList.add('is-invalid');
        const urgencyError = document.getElementById('urgency_level-error');
        if (urgencyError) urgencyError.style.display = 'block';
        if (!firstErrorField) firstErrorField = urgencyInput;
      }
      
      return { isValid, firstErrorField };
    }
    
    // Interceptar antes da biblioteca processar
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      
      const loading = form.querySelector('.loading');
      const errorMessage = form.querySelector('.error-message');
      const sentMessage = form.querySelector('.sent-message');
      
      // Validar todos os campos
      const validation = validateAllFields();
      
      if (!validation.isValid) {
        // Ocultar mensagens de sucesso
        if (loading) loading.style.display = 'none';
        if (sentMessage) sentMessage.style.display = 'none';
        
        // Mostrar mensagem de erro geral
        if (errorMessage) {
          errorMessage.innerHTML = 'Por favor, preencha todos os campos obrigatórios indicados.';
          errorMessage.style.display = 'block';
        }
        
        // Scroll para o primeiro campo com erro
        if (validation.firstErrorField) {
          validation.firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
          // Se for um input/select, focar nele
          if (validation.firstErrorField.tagName === 'INPUT' || validation.firstErrorField.tagName === 'SELECT') {
            setTimeout(() => validation.firstErrorField.focus(), 300);
          }
        }
        
        return;
      }
      
      // Limpar telefone antes de enviar (remover máscara, manter apenas números)
      const phoneInput = document.getElementById('phone');
      if (phoneInput) {
        const phoneValue = phoneInput.value.replace(/\D/g, '');
        phoneInput.value = phoneValue;
      }
      
      const formData = new FormData(form);
      
      // Obter o token CSRF do input hidden do formulário
      const csrfToken = form.querySelector('input[name="_token"]');
      if (!csrfToken) {
        console.error('Token CSRF não encontrado no formulário');
        if (errorMessage) {
          errorMessage.innerHTML = 'Erro: Token de segurança não encontrado. Por favor, recarregue a página.';
          errorMessage.style.display = 'block';
        }
        return;
      }
      
      // Reset messages
      if (loading) loading.style.display = 'block';
      if (errorMessage) {
        errorMessage.style.display = 'none';
        errorMessage.innerHTML = '';
      }
      if (sentMessage) sentMessage.style.display = 'none';
      
      fetch('{{ route("form.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': csrfToken.value,
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        },
        credentials: 'same-origin'
      })
      .then(response => {
        if (!response.ok) {
          return response.json().then(data => {
            // Tratamento específico para erro de CSRF
            if (response.status === 419 || data.message?.includes('CSRF') || data.message?.includes('token')) {
              throw new Error('Sua sessão expirou. Por favor, recarregue a página e tente novamente.');
            }
            throw new Error(data.message || 'Erro ao processar formulário');
          }).catch(err => {
            if (err.message) throw err;
            throw new Error('Erro ao processar formulário');
          });
        }
        return response.json();
      })
      .then(data => {
        if (loading) loading.style.display = 'none';
        if (data.success) {
          if (sentMessage) sentMessage.style.display = 'block';
          form.reset();
          // Scroll para a mensagem de sucesso
          if (sentMessage) {
            sentMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        } else {
          if (errorMessage) {
            errorMessage.innerHTML = data.message || 'Ocorreu um erro ao enviar o formulário.';
            errorMessage.style.display = 'block';
          }
          if (loading) loading.style.display = 'none';
        }
      })
      .catch(error => {
        if (loading) loading.style.display = 'none';
        if (errorMessage) {
          errorMessage.innerHTML = error.message || 'Ocorreu um erro ao enviar o formulário. Tente novamente.';
          errorMessage.style.display = 'block';
        }
        console.error('Erro no formulário:', error);
      });
      
      return false;
    });
  }
});
</script>
@endsection
