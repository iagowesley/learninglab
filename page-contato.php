<?php get_header(); ?>

    <section class="container-contato">
        <div class="conteudo">
    <div class="contato">
                <h1>Entre em contato com nossa equipe</h1>
        
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone_email_branco.svg" alt="icone de email">learninglab@ufc.br</a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone_telefone_branco.svg" alt="icone de telefone">(88) 3411-2143</a>
                <div class="midias-sociais">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone_instagram_branco.svg" alt="icone do instagram">@learninglabufc</a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icone_facebook_branco.svg" alt="icone do facebook">@learninglabufc</a>
                </div>
            
        </div>


    <div class="formulario">
            <?php echo do_shortcode( '[contact-form-7 id="32" title="Formulário de contato 1"]');?>
    </div>
    </div>
    </section>         

<?php get_footer(); ?>
