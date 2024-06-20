<?php
// Define o template como ""
// Template Name: Advogados
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="bloco-8">
            <div class="bloco-8-content">
                <div class="imagem-banner-bloco-8">
                    <img src="http://moreau-local.local/wp-content/uploads/2024/06/escritoriocortada.png" alt="Imagem do Escritório">
                </div>
                <div class="banner-bloco-8">
                    <h2>Advogados</h2>
                </div>
            </div>
            <div class="bloco-9">
                <div class="container">
                    <div class="box-advogados">
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=1'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe1N.jpg" alt="Pierre Moreau">
                                <p>Pierre Moreau</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=2'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe5NN.jpg" alt="Juliana Zanotto">
                                <p>Juliana Zanotto</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=3'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe20nN.jpg" alt="Renato Xavier da Silveira Rosa">
                                <p>Renato Xavier da Silveira</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=4'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe7N.jpg" alt="Jean Pierre Moreau">
                                <p>Jean Pierre Moreau</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=5'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe19Nn.jpg" alt="Felipe Henrique Lopes">
                                <p>Felipe Henrique Lopes</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=6'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe23N.jpg" alt="Arthur Camargo">
                                <p>Arthur Camargo</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=7'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe16N.jpg" alt="Jairo Saddi">
                                <p>Jairo Saddi</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=8'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe15N.jpg" alt="Sofia Ribeiro">
                                <p>Sofia Ribeiro</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=9'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe18N.jpg" alt="Bianca Longo">
                                <p>Bianca Longo</p>
                            </a>
                        </div>
                        <div class="advogado-item">
                            <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=10'; ?>">
                                <img src="http://moreau-local.local/wp-content/uploads/2024/06/equipe6N2.jpg" alt="Gabriela Cardoso">
                                <p>Gabriela Cardoso</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>