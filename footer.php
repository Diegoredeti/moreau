<footer>
    <div class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="textos-footer">
                    <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logofooter.png" alt="Logo do Rodapé">
                    <span class="notranslate"><p>
                        Rua Hungria, 888, 10º andar<br>
                        01455-905 - São Paulo - SP - Brasil<br>
                        Email: moreau@moreau.com.br<br>
                        Phone: +55 11 2858-8011<br>
                        Whatsapp: +55 11 98586-1010
                    </p></span>
                </div>
                <!-- Newslettdiver form area -->
                <section class="newsletter-footer">
                    <h3>Newsletter</h3>
                    <p>Receba nosso boletim infomativo pelo e-mail</p>
                    <form action="URL_DO_SEU_FORM_ACTION_AQUI" method="post" id="newsletter-form">
                        <input type="email" name="EMAIL" placeholder="Digite seu e-mail" required>
                        <input type="submit" value="Inscrever-se">
                    </form>
                </section>

                <!-- Replace with your actual illustration image path -->
                <div class="imagem-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ilustracaofooter.png" alt="Logo do Rodapé">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts de integração com Mailchimp -->
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
    (function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0] = 'EMAIL';
        ftypes[0] = 'email';
    }(jQuery));
    var $mcj = jQuery.noConflict(true);
</script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/jquery.form.js'></script>
<script type='text/javascript'>
    jQuery(document).ready(function($) {
        $('#newsletter-form').ajaxForm({
            url: 'URL_DO_SEU_FORM_ACTION_AQUI', // Substitua pelo seu URL de ação do Mailchimp
            dataType: 'json',
            success: function(response) {
                // Código de sucesso aqui (por exemplo, exibir uma mensagem de sucesso)
            },
            error: function(err) {
                // Código de erro aqui (por exemplo, exibir uma mensagem de erro)
            }
        });
    });
</script>


<?php wp_footer(); ?>




</body>

</html>