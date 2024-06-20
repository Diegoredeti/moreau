<?php
/*
Template Name: Advogado
*/

get_header();

// Verifica se há um parâmetro 'advogado_id' na URL
if (isset($_GET['advogado_id'])) {
    // Obtém o ID do advogado da URL e garante que seja um número inteiro
    $advogado_id = intval($_GET['advogado_id']);

    // Array simulado de dados dos advogados
    $advogados = array(
        1 => array(
            'nome' => 'Pierre Moreau',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe1N.jpg',
            'especialidades' => 'Direito Penal, Direito Civil',
            'descricao' => 'Advogado com ampla experiência em Direito Penal e Civil.',
        ),
        2 => array(
            'nome' => 'Juliana Zanotto',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe5NN.jpg',
            'especialidades' => 'Direito Tributário, Direito do Trabalho',
            'descricao' => 'Advogada especializada em Direito Tributário e do Trabalho.',
        ),
        3 => array(
            'nome' => 'Renato Xavier da Silveira Rosa',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe20nN.jpg',
            'especialidades' => 'Direito Tributário, Direito Ambiental',
            'descricao' => 'Especialista em Direito Tributário e Ambiental, oferece consultoria para empresas...',
        ),
        4 => array(
            'nome' => 'Jean Pierre Moreau',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe7N.jpg',
            'especialidades' => 'Direito Internacional, Arbitragem',
            'descricao' => 'Experiência em Direito Internacional e Arbitragem, representando clientes em disputas globais...',
        ),
        5 => array(
            'nome' => 'Felipe Henrique Lopes',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe19Nn.jpg',
            'especialidades' => 'Direito de Família, Mediação',
            'descricao' => 'Advogado com foco em Direito de Família e Mediação, ajudando a resolver conflitos de maneira amigável...',
        ),
        6 => array(
            'nome' => 'Arthur Camargo',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe23N.jpg',
            'especialidades' => 'Direito Digital, Proteção de Dados',
            'descricao' => 'Especialista em Direito Digital e Proteção de Dados, assessorando empresas em questões de privacidade...',
        ),
        7 => array(
            'nome' => 'Jairo Saddi',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe16N.jpg',
            'especialidades' => 'Direito Bancário, Direito Econômico',
            'descricao' => 'Experiência em Direito Bancário e Econômico, prestando consultoria para instituições financeiras...',
        ),
        8 => array(
            'nome' => 'Sofia Ribeiro',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe15N.jpg',
            'especialidades' => 'Direito Imobiliário, Contratos',
            'descricao' => 'Advogada especializada em Direito Imobiliário e Contratos, auxiliando clientes em transações imobiliárias...',
        ),
        9 => array(
            'nome' => 'Bianca Longo',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe18N.jpg',
            'especialidades' => 'Direito Administrativo, Licitações',
            'descricao' => 'Descrição: Atuação em Direito Administrativo e Licitações, com experiência em processos licitatórios...',
        ),
        10 => array(
            'nome' => 'Gabriela Cardoso',
            'imagem' => 'http://moreau-local.local/wp-content/uploads/2024/06/equipe6N2.jpg',
            'especialidades' => 'Direito Previdenciário, Aposentadorias',
            'descricao' => 'Focada em Direito Previdenciário e Aposentadorias, ajudando clientes a garantir seus direitos...',
        ),
    );

    // Verifica se o $advogado_id existe no array de $advogados
    if (array_key_exists($advogado_id, $advogados)) {
        $advogado = $advogados[$advogado_id];
?>

<main>
    <section>
        <div class="container">
            <div class="advogado-single">
                <div class="advogado-imagem">
                    <img src="<?php echo $advogado['imagem']; ?>" alt="<?php echo $advogado['nome']; ?>">
                </div>
                <div class="advogado-detalhes">
                    <h2><?php echo $advogado['nome']; ?></h2>
                    <p><strong>Especialidades:</strong> <?php echo $advogado['especialidades']; ?></p>
                    <p><?php echo $advogado['descricao']; ?></p>
                </div>
            </div>
            <div class="miniaturas-advogados">
                <h3>Outros Advogados</h3>
                <?php
                // Exibição das miniaturas dos demais advogados
                foreach ($advogados as $id => $outro_advogado) {
                    if ($id != $advogado_id) { // Exclui o advogado atual da lista de miniaturas
                ?>
                <div class="advogado-item">
                    <a href="<?php echo esc_url(get_permalink()) . '?advogado_id=' . $id; ?>">
                        <img src="<?php echo $outro_advogado['imagem']; ?>" alt="<?php echo $outro_advogado['nome']; ?>">
                        <p><?php echo $outro_advogado['nome']; ?></p>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
    } else {
        // Caso o $advogado_id não exista no array, redireciona para a página inicial ou trata conforme necessário
        wp_redirect(home_url()); // Redireciona para a página inicial
        exit;
    }
} else {
    // Caso não haja parâmetro 'advogado_id' na URL, redireciona para a página inicial ou trata conforme necessário
    wp_redirect(home_url()); // Redireciona para a página inicial
    exit;
}

get_footer();
?>
