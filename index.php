<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php
// !  Aqui pode passar uma chamada CSS para o HEAD 
// $css[] = '<link rel="icon" type="image/png" href="assets/img/favicon2.png">';
// $css[] = '<link rel="icon" type="image/png" href="assets/img/favicon3.png">';
?>
<?php include_once 'includes/head.php'; ?>

<body>

    <?php include_once 'includes/loading.php'; ?>
    <?php include_once 'includes/nav-mobile.php'; ?>
    <?php include_once 'includes/header.php'; ?>
    <?php include_once 'includes/banner.php'; ?>
    <?php include 'includes/separador.php'; ?>

    <section id="about" class="uk-about about-area uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-1@s">
                <div class="item">
                    <div class="about-image-two uk-text-center">
                        <img src="assets/img/about-us.png" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="about-content">
                        <div class="uk-section-title section-title">
                            <span>Quem somos</span>
                            <h2>O que é um gestor de tráfego pago?</h2>
                            <div class="bar"></div>
                        </div>
                        <div class="about-text">
                            <div class="icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <h3>Gestor de tráfego pago é o profissional especializado em criar e otimizar campanhas</h3>
                            <p>
                                O objetivo é direcionar as pessoas da internet para páginas de vendas, sites e redes sociais ou até mesmo entrar em contato via Whatsapp, encontrando assim novos clientes, seguidores e aumentando a visibilidade da sua marca.</p>
                            <p>
                                Hoje praticamente todo mundo está com um celular na mão conectado nessas plataformas e prontos para ver seus anúncios.
                            </p>
                            <p>
                                Esses anúncios são veiculados na rede de pesquisa do Google, Facebook, Instagram, Youtube, Portais de notícias etc.
                            </p>
                            <p>
                                Essas plataformas de tráfego mudam constantemente e é necessário que o Gestor de tráfego esteja sempre atualizado com novas funcionalidades e otimizações para retirar o máximo proveito do investimento em anúncios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/separador.php'; ?>

    <section id="team" class="team-area uk-team uk-section">
        <div class="uk-container">
            <div class="uk-section-title uk-text-center section-title">
                <span>Nossas expertises</span>
                <h2>Alavanque suas vendas através de um método de vendas através da internet</h2>
                <div class="bar"></div>
            </div>
            <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s">
                <div class="item">
                    <div class="single-team-box">
                        <img src="assets/img/metodos.jpg" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="single-team-box">
                        <img src="assets/img/anuncios.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/separador.php'; ?>

    <section class="why-choose-us-section uk-why-choose-us uk-section">
        <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s">
            <div class="item">
                <div class="why-choose-us-content">
                    <div class="uk-section-title section-title">
                        <span>Porque escolher-nos</span>
                        <h2>Trabalhamos com transparência</h2>
                        <div class="bar"></div>
                    </div>
                    <ul class="why-choose-us-text">
                        <li>
                            <div class="icon">
                                <i class="flaticon-shout"></i>
                            </div>
                            <h3>O que isso significa?</h3>
                            <p>
                                Significa que todos os dados, tais como: pixels, históricos, campanhas, criativos ou seja tudo tudo o que é feito para você é seu, fica para você, independente de estar conosco ou não!
                            </p>
                            <br>
                            <p>
                                Significa que trabalhamos dentro do seu gerenciador de negócios e que todos os dados, todas as informações ficam neles.
                                Não trabalhamos como a maioria trabalha, segurando todas as informações e vantagens para eles.

                            </p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="why-choose-us-image uk-text-center">
                    <img src="assets/img/business-people.png" alt="image">
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/separador.php'; ?>

    <section id="services" class="uk-services services-section bg-image uk-section">
        <div class="uk-container">
            <div class="uk-section-title section-title uk-text-center">
                <span>O que nós fazemos</span>
                <h2>O que sua empresa pode ganhar com um marketing que funciona?</h2>
                <div class="bar"></div>
            </div>
            <div class="services-slides owl-carousel owl-theme">
                <div class="services-box">
                    <img src="assets/img/services-img1.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-plan"></i>
                        </div>
                        <h3>Planejamento</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-plan"></i>
                                    </div>
                                    <h3>Planejamento</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-box">
                    <img src="assets/img/services-img2.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-think"></i>
                        </div>
                        <h3>Transparência</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-think"></i>
                                    </div>
                                    <h3>Transparência</h3>
                                    <p>Saber para onde seu dinheiro está indo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-box">
                    <img src="assets/img/services-img3.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-shout"></i>
                        </div>
                        <h3>Alinhamento</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-shout"></i>
                                    </div>
                                    <h3>Alinhamento</h3>
                                    <p>
                                        Alinhar os objetivos do cliente e criação de metas (Vendas, Leads, Faturamento, ROI).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-box">
                    <img src="assets/img/services-img2.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-think"></i>
                        </div>
                        <h3>Estratégia</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-think"></i>
                                    </div>
                                    <h3>Alinhamento</h3>
                                    <p>
                                        Criação de Estratégias de divulgação, focadas no objetivo do cliente e tirando o máximo proveito das funcionalidades das ferramentas de tráfego.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-box">
                    <img src="assets/img/services-img2.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-think"></i>
                        </div>
                        <h3>Previsão</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-think"></i>
                                    </div>
                                    <h3>Previsão</h3>
                                    <p>
                                        Previsibilidade das sua vendas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-box">
                    <img src="assets/img/services-img2.jpg" alt="image">
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-think"></i>
                        </div>
                        <h3>Acompanhamento</h3>
                    </div>
                    <div class="hover-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="flaticon-think"></i>
                                    </div>
                                    <h3>Acompanhamento</h3>
                                    <p>
                                        Reunião quinzenal para Realinhamento com o cliente sobre os resultados e estratégias utilizados para tomadas de decisão e próximos passos a seguir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/separador.php'; ?>

    <section class="process-section bg-image uk-process uk-section">
        <div class="uk-container">
            <div class="uk-section-title section-title uk-text-center">
                <span>Processo</span>
                <h2>Maneiras fáceis de preparar seu trabalho</h2>
                <div class="bar"></div>
            </div>
            <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s">
                <div class="item">
                    <div class="single-process-box">
                        <div class="icon">
                            <i uk-icon="receiver"></i>
                        </div>
                        <h3>Contate-nos</h3>
                        <p>
                            Temos vários meios para contatos. <a href="#">Clique aqui</a> e mande um Zap.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-process-box">
                        <div class="icon">
                            <i uk-icon="cog"></i>
                        </div>
                        <h3>Auditoria</h3>
                        <p>
                            Faremos uma análise em todos os seus serviços webs
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-process-box">
                        <div class="icon">
                            <i uk-icon="cart"></i>
                        </div>
                        <h3>Pagamento</h3>
                        <p>
                            O pagamento poderá ser realizado através de PIX, Cartão ou Boleto.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-process-box">
                        <div class="icon">
                            <i uk-icon="home"></i>
                        </div>
                        <h3>Aguarde</h3>
                        <p>
                            Agora nossa equipe irá trabalhar para que suas vendas melhorem e lhe daremos relatórios mensais.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="process-arrow-icon">
                        <img src="assets/img/arrow.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/separador.php'; ?>

    <section class="funfacts-area uk-section uk-funfacts">
        <div class="uk-container">
            <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s">
                <div class="item">
                    <div class="single-funfacts">
                        <div class="icon">
                            <i uk-icon="users"></i>
                        </div>
                        <h3 class="odometer" data-count="1800">00</h3>
                        <p>Clientes Satisfeitos</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-funfacts">
                        <div class="icon">
                            <i uk-icon="heart"></i>
                        </div>
                        <h3 class="odometer" data-count="2500">00</h3>
                        <p>Projetos completos</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-funfacts">
                        <div class="icon">
                            <i uk-icon="user"></i>
                        </div>
                        <h3 class="odometer" data-count="250">00</h3>
                        <p>Membros do time</p>
                    </div>
                </div>
                <div class="item">
                    <div class="single-funfacts">
                        <div class="icon">
                            <i uk-icon="unlock"></i>
                        </div>
                        <h3 class="odometer" data-count="150">00</h3>
                        <p>Vencedores do prêmio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonials" class="feedback-section uk-section">
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-section-title section-title">
                        <span>TESTEMUNHOS</span>
                        <h2>O que os clientes dizem sobre nós</h2>
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="feedback-slides-two owl-carousel owl-theme">
                        <div class="single-feedback-item">
                            <i class="flaticon-quote"></i>
                            <p>
                                Eu havia trabalhado com uma agência de marketing, e todos os dados ficaram com a agência.
                                Eu não tive o direito de pegar meu públicos, meus pixel e não via aonde meu dinheiro estava indo.
                                Mas agora com a SCOP tudo o que eles fazem eu tenho o acesso a tudo e além disso eles me passam um relatório de tudo.

                            </p>
                            <div class="client-info">
                                <!-- <img src="assets/img/client1.png" alt="image"> -->
                                <h3>Suzete Almeida</h3>
                                <span>Empresária</span>
                            </div>
                        </div>
                        <div class="single-feedback-item">
                            <i class="flaticon-quote"></i>
                            <p>
                                Tenho uma loja de tintas e achei que isso não era para mim, mas me enganei quando contratei a assessoria e obtive os resultados.
                                Claro que não é no outro dia que a coisa funciona, mas pode ter certeza que funciona e muito bem.
                                Eles são muito transparentes.

                            </p>
                            <div class="client-info">

                                <h3>Paulo Franciquinho</h3>
                                <span>Empresário</span>
                            </div>
                        </div>
                        <div class="single-feedback-item">
                            <i class="flaticon-quote"></i>
                            <p>
                                O pessoal da Scop Assessoria são super atenciosos, prestativos, sempre prontos a tirar todas as nossas dúvidas e acima de tudo nossas vendas triplicaram depois que começamos a trabalhar com eles.
                                Já estamos com eles a quase dois anos.

                            </p>
                            <div class="client-info">

                                <h3>Mirelle Costa</h3>
                                <span>Cirurgiã Dentista</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area uk-footer">
        <div class="uk-container">
            <div class="copyright-area">
                <div class="uk-grid uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s">
                    <div class="item">
                        <p>© SCOP. Todos os direitos reservados, <?= date('Y') ?></p>
                    </div>
                    <div class="item">
                        <ul>
                            <li>Desenvolvedor</li>
                            <li><a target="_blank" href="https://github.com/wanderson-r-marques/">Wanderson R Marques</a></li>
                        </ul>
                    </div>
                </div>
                <div class="go-top"><i class="flaticon-chevron"></i></div>
            </div>
        </div>

    </footer>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/lax.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>





</body>

</html>