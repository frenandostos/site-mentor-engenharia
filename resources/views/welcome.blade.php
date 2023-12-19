<!DOCTYPE html>
<html lang="pt-BR" class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    {{-- CSS --}}
    @vite(['resources/css/app.css'])
    <link rel="preload" fetchpriority="high" as="image" href="/public/images/grupo-mentor-banner-large.webp" type="image/webp">
    {{-- Javascript --}}
    <script src="https://kit.fontawesome.com/3ce2593ff0.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('/images/grupo-mentor-logo-desktop.png') }}" srcset="
                    {{ asset('/images/grupo-mentor-logo-mobile.png') }} 767w,
                    {{ asset('/images/grupo-mentor-logo-desktop.png') }} 768w
                    " sizes="(max-width: 767px) 767w, (min-width: 768px) 768w" alt="Logo Grupo Mentor" />
            </div>

            <div class="menu">
                <a href="#">Home</a>
                <a href="#">Pacotes</a>
                <a href="#">Serviços</a>
                <a href="#">Portfólio</a>
                <a href="#">Depoimentos</a>
                <a href="#">Contato</a>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="header-content">
                <h1>Grupo Mentor</h1>
                <p class="subtitle">Inovação e soluções em medicina & segurança ocupacional</p>
                <p>Mais de 20 anos de experiência e atendimento à nível nacional</p>
                <button class="btn-default-white" type="button">Entre em contato</button>
            </div>
        </div>

    </header>

    <section id="esocial">
        <div class="container">
            <div class="advantages">
                <div class="advantage">
                    <h3>Líder em SST</h3>
                    <p>O SOC é a melhor ferramenta para realizar a gestão de SST e eSocial. Conte conosco e fique em
                        conformidade com as normas trabalhistas</p>
                    <a href="#" class="btn-link" type="button">Contrate <i class="fas fa-chevron-right"></i></a>
                </div>

                <div class="advantage">
                    <h3>Eficiência e agilidade</h3>
                    <p>Ganhe praticidade com um pacote que simplifica as tarefas burocráticas e foque no que importa:
                        bem-estar e segurança dos colaboradores</p>
                    <a href="#" class="btn-link" role="button">Contrate <i class="fas fa-chevron-right"></i></a>
                </div>

                <div class="advantage">
                    <h3>Suporte Especializado</h3>
                    <p>Oferecemos suporte técnico especializado. Estamos aqui para ajudar a sua empresa</p>
                    <a href="#" class="btn-link" type="button">Contrate <i class="fas fa-chevron-right"></i></a>
                </div>

                <img src="{{ asset('/images/malha-grafica-branca.png') }}" alt="eSocial" />
            </div>

            <div class="content">
                <h2>eSocial & SOC - Grupo Mentor</h2>
                <p>Descubra uma maneira eficiente e descomplicada de lidar com as demandas do eSocial. Apresentamos em
                    nossos pacotes de serviços, uma solução completa para otimizar a gestão de Saúde e Segurança do
                    Trabalho (SST) em sua empresa.</p>
                <p>Faça parte do futuro da Saúde Ocupacional. Entre em contato conosco hoje mesmo e descubra como
                    podemos impulsionar o sucesso de sua empresa.</p>
                <h3>Atendemos aos seguintes eventos:</h3>
                <ul>
                    <li> - S-2210: Comunicação de acidente de trabalho</li>
                    <li> - S-2220: Monitoramento da saúde do trabalhador</li>
                    <li> - S-2230: Afastamento temporário</li>
                    <li> - S-2240: Condições ambientais do trabalho</li>
                </ul>
                <button class="btn-default-white" type="button">Entre em contato </button>
            </div>
        </div>
    </section>

    <section id="our-plans">
        <div class="container">
            <div class="plans-container">
                <div class="content">
                    <h2>Conheça Nossos Planos</h2>
                    <p>Os planos de gestão de SST, foram desenvolvidos para oferecer a solução perfeita em segurança e
                        saúde
                        ocupacional.</p>
                    <p>Possuímos um que se adapta às necessidades de sua empresa. Descubra como podemos fazer a
                        diferença em
                        sua organização.</p>
                </div>

                <div class="plans">
                    <div class="plan">
                        <h3>Plano Básico</h3>
                        <ul>
                            <li>- PGR</li>
                            <li>- PCMSO</li>
                        </ul>
                        <a href="#" class="btn-link" type="button">Contrate <i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="plan">
                        <h3>Plano Básico</h3>
                        <ul>
                            <li>- PGR</li>
                            <li>- PCMSO</li>
                            <li>- LTCAT</li>
                            <li>- ESOCIAL</li>
                        </ul>
                        <a href="#" class="btn-link" type="button">Contrate <i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="plan">
                        <h3>Plano Básico</h3>
                        <ul>
                            <li>- PGR</li>
                            <li>- PCMSO</li>
                            <li>- LTCAT</li>
                            <li>- ESOCIAL</li>
                            <li>- AET</li>
                            <li>- Acessoria Técnica</li>
                        </ul>
                        <a href="#" class="btn-link" type="button">Contrate <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="content">
                <h2>Liderança no Mercado de Medicina & Segurança Ocupacional</h2>
                <p>Idealizada por dois profissionais inovadores, com mais de 20 anos de experiência, inconformados com a
                    baixa qualidade oferecida pelas consultorias no mercado. O Grupo Mentor possui vasta experiência e
                    proficiência. Somos comprometidos com os valores, princípios e ética profissional. Contamos com uma
                    equipe completa de profissionais habilitados para ofertar o que há de melhor no mercado.</p>

                <p>Nosso objetivo é promover e garantir um trabalho qualificado e diferenciado em medicina e segurança
                    ocupacional, através de estratégia, competência e transparência, passando por etapas que vão desde a
                    identificação de riscos, análise, até a implementação de medidas corretivas e preventivas em nossos
                    clientes.</p>
                <button class="btn-default-dark" type="button">Saiba Mais</button>
            </div>

            <div class="services-advantages">
                <div class="service-advantage">
                    <h3>Programas & Laudos</h3>
                    <p>Implementamos documentações completas, sem burocracia, seguindo todas as exigências legislativas.
                    </p>
                    <a href="#" class="btn-link" type="button">Saiba Mais <i class="fas fa-chevron-right"></i></a>
                </div>

                <div class="service-advantage">
                    <h3>Treinamentos & Palestras</h3>
                    <p>Todos os cursos obrigatórios voltados às normas regulamentadoras e instruções técnicas
                    </p>
                    <a href="#" class="btn-link" type="button">Saiba Mais <i class="fas fa-chevron-right"></i></a>
                </div>

                <div class="service-advantage">
                    <h3>Assessoria</h3>
                    <p>Atendemos em todo território nacional. Descomplicando licenciamentos, eSocial e SOC e reduções de
                        custos
                    </p>
                    <a href="#" class="btn-link" type="button">Saiba Mais <i class="fas fa-chevron-right"></i></a>
                </div>

                <img src="{{ asset('/images/malha-grafica-escura.png') }}" alt="eSocial" />
            </div>
        </div>
    </section>

    <section id="services">
        <div class="row service-right">
            <div class="container">
            <div class="service">
                <div class="images">

                </div>

                <div class="content">
                    <h2>Programas & Laudos</h2>
                    <p>Implementamos documentações completas, sem burocracia, seguindo todas as exigências legislativas. Oferecendo sempre um serviço ágil e eficiente.</p>

                    <ul>
                        <li><i class="fa-solid fa-check"></i> PGR - Programa de Gerenciamento de Riscos</li>
                        <li><i class="fa-solid fa-check"></i> PCMSO - Programa de Controle Médico de Saúde Ocupacional</li>
                        <li><i class="fa-solid fa-check"></i> LTCAT – Laudo Técnico das Condições do Ambiente de Trabalho</li>
                        <li><i class="fa-solid fa-check"></i> NR 12 – Máquinas e Equipamentos</li>
                        <li><i class="fa-solid fa-check"></i> NR 13 – Vasos de Pressão e Caldeira</li>
                        <li><i class="fa-solid fa-check"></i> PPR – Programa de Prevenção Respiratória</li>
                        <li><i class="fa-solid fa-check"></i> PCA – Programa de Conservação Auditiva</li>
                        <li><i class="fa-solid fa-check"></i> AET – Análise Ergonômica do Trabalho</li>
                        <li><i class="fa-solid fa-check"></i> LIP – Laudo de Insalubridade e Periculosidade</li>
                        <li><i class="fa-solid fa-check"></i> Ensaio de Equipamentos Elétricos</li>
                        <li><i class="fa-solid fa-check"></i> Laudo das Instalações Elétricas</li>
                        <li><i class="fa-solid fa-check"></i> SPDA – Sistema de Proteção Contra Descargas Atmosféricas - Para Raio</li>
                    </ul>
                </div>
            </div>
            <div class="service left"></div>
            <div class="service right"></div>
        </div>
        </div>


    </section>

</body>

</html>
