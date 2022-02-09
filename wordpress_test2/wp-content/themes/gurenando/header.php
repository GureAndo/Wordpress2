<!DOCTYPE html>

<head <?php language_attributes()?>>
    <!--bloginfo('charset') permet de decider de l'encodage de maniere dynamique (backoffice de wp) au lieu d'avoir  -->
    <meta charset='<?php bloginfo('charset')  ?>'>
    <meta name ='viewport' content='width=device=width, initial=scale=1.0'>
    <meta http-equiv='X-UA-compatible' content='IE=edge'>
    <meta name='author' content='Alix'>
    <title><?php bloginfo('name') ?></title>
    <!-- cdn css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--blockinfo ('template_directory') permet d"e recuperer le chmain vers mon theme(voir le echolingne 18 en dessous) pour acceder a style .css au lieu d'ecrire en dure l'integraliter de ce chamin -->
    <!-- dans l'attribut href de <link> je ne peut pas kuste presiser style.css je doit renseigner la totaliter du chemain en partant de wp-containt syntaxe wp  -->
   <link rel='stylesheet' href='<?php bloginfo('template_directory') ?>/style.css'>
   <?php wp_head()?>
</head>

<body  <?php body_class() ?>> 
    <!-- <?= bloginfo('template_directory') ?> -->

    <header>
        <div class="row">
            <div class="bleu col-6"><?php dynamic_sidebar('haut gauche')?>©2007 SQUARE ENIX CO., LTD. All Rights Reserved.
            CHARACTER DESIGN: TETSUYA NOMURA </div>
            <div class="rouge col-6"><?php dynamic_sidebar('haut droit')?></div>
        </div>
        <img src="<?php bloginfo('template_directory') ?>/screenshot.png" alt="ErrOrR" title='Guren' loading='lazy'>
    </header>

    
   
    