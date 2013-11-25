<?php

function my_login_logo() { ?>
    <style type="text/css">
    	body.login{color: #95a1c2;background-color: #162834;}
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo-flat.png);
            padding-bottom: 30px;
        }
        body.login #loginform{box-shadow: none;}
        a{text-shadow: none;}
        a{color: #FFF;text-decoration: none;}
a:hover{color: #ffba00;transition:color 0.5s ease;}
a img:hover{opacity: 0.7;transition:opacity 0.3s ease;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Freepod, libère ton podcast';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );