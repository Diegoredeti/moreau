<?php
// Define o template como "Home"
// Template Name: Home
?>

<?php get_header(); ?>

<main>
    <section class="bloco-1">
        <div class="container">
            <div class="conteudo-principal">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ativo1.png" alt="Ilustração Principal">
                <div class="texto-principal">
                    <h1>Fundado em 1991, em São Paulo,</h1>
                    <p>O escritório Moreau advogados atua em diversas áreas, especialmente em Direito Empresarial.
                    <p>Ao longo de nossa trajetória, construímos um excelente portfólio, com a credibilidade e a confiança que nossos clientes e parceiros necessitam. Somos reconhecidos como referência no mercado jurídico e trabalhamos com comprometimento e ética para atender com excelência todos os nossos clientes.</p>
                    <p>Nosso desafio diário é atuar com competência e oferecer serviços em tempo integral com uma equipe de advogados qualificados e aptos a lidar com todas as situações propostas. Nossa missão é defender os interesses de empresas e clientes que nos procuram, além de propor negociações concretas e seguras para todos os trâmites jurídicos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bloco-2">
        <div class="container">
            <div class="carrossel">
                <div class="carrossel-container">
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo1.png" alt="Selo 1">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo2.png" alt="selo 2">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo3.png" alt="Selo 3">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo4.png" alt="Selo 4">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo5.png" alt="Selo 5">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo6.png" alt="Selo 6">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo7.png" alt="Selo 7">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo8.png" alt="Selo 8">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo9.png" alt="Selo 9">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo10.png" alt="Selo 10">
                    </div>
                    <div class="carrossel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/selo11.png" alt="Selo 11">
                    </div>
                    <!-- Adicione mais logos conforme necessário -->
                </div>
                <button class="carrossel-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/setaesquerda.png" alt="Seta Esquerda">
                </button>
                <button class="carrossel-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/setadireita.png" alt="Seta Direita">
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="bloco-3">
            <div class="container">
                <div class="bloco-3-content">
                    <div class="caixas-bloco-3">
                        <!-- Primeira caixa -->
                        <div class="caixa-1">
                            <img class="img-caixa1" src="<?php echo get_template_directory_uri(); ?>/img/home2.png" alt="Imagem da Fachada do escritório">
                            <div class="texto-caixa-1">
                                <h5>Escritório</h5>
                                <p>O escritório Moreau fica localizado próximo a Marginal Pinheiros, em um ponto estratégico da cidade.</p>
                            </div>
                        </div>
                        <!-- Segunda caixa -->
                        <div class="caixa-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home1.png" alt="Imagem da Fachada da vila dos ingleses">
                            <div class="texto-caixa-2">
                                <h5>Vila dos Ingleses</h5>
                                <p>Um patrimônio histórico localizado no coração de São Paulo, A Vila dos Ingleses, faz parte da assistência jurídica Moreau.</p>
                            </div>
                        </div>
                        <!-- Terceira caixa -->
                        <div class="caixa-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home3.png" alt="Imagem de arte">
                            <div class="texto-caixa-3">
                                <h5>Coleção de Obras</h5>
                                <p>O Direito da Arte é um dos segmentos de atendimento da Moreau que consiste, sobretudo, em proteger os direitos de colecionadores, artistas e galerias de obras de arte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="bloco-4">
                <div class="container">
                    <div class="bloco-4-content">
                        <h3>Responsabilidade social:</h3>
                        <div class="logos-bloco-4">
                            <img src="http://moreau-local.local/wp-content/uploads/2024/06/logoParceiro3.png" alt="logo parceiro">
                            <img src="http://moreau-local.local/wp-content/uploads/2024/06/logoParceiro5.png" alt="logo parceiro">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bloco-5">
                <div class="container">
                    <div class="bloco-5-content">
                        <h3>Fale Conosco!</h3>
                        <div class="links-bloco-5">
                            <img src="http://moreau-local.local/wp-content/uploads/2024/06/iconeemail-1.png" alt="Link de email">
                            <img src="http://moreau-local.local/wp-content/uploads/2024/06/iconewhats-1.png" alt="Link Whatsapp">
                        </div>
                    </div>
                    <div class="ilustracao-bloco-5">
                        <img src="http://moreau-local.local/wp-content/uploads/2024/06/Ativo-29rty55vvv-1.png" alt="Ilustração Sr. Moreau">
                    </div>
                </div>
            </div>
        </section>

    </section>

</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>

<?php get_footer(); ?>