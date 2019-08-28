<!DOCTYPE html>

<html lang="en-US">

  <head>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145847620-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-145847620-1');
    </script>


    <!-- SEO Title -->
    <title><?php the_field('seo_title'); ?></title>

    <!-- Charset UTF8 -->
    <meta charset="utf-8">

    <!-- responsive tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO description -->
    <meta name="description" content="<?php the_field('meta_description'); ?>">

    <!-- Author -->
    <meta name="author" content="Alex Galhardo">

    <!-- Site Icon -->
    <link rel="icon" href="https://avatars3.githubusercontent.com/u/19540357?s=460&v=4"/>

    <!-- NavBar Emojis -->
    <script src="https://use.fontawesome.com/41c2dcb978.js"></script>

    <!-- Canonical URL -->
    <link rel="canonical" href="https://alexgalhardo.com">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Style CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- HEADER WORDPRESS -->
    <?php wp_head(); ?>
    <!-- FECHA HEADER WORDPRESS -->
  </head>

  
  <body>

  	<!-- Start Scroll Bar -->
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
    <!-- End Scroll Bar -->


    <nav class="navbar navbar-expand-xl navbar-light fixed-top">

      <div class="container col-md-6">

	      <a class="navbar-brand" href="/wordpress/" style="color: blue;"><img src="https://avatars3.githubusercontent.com/u/19540357?s=460&v=4" height="35" width="35">Galhardo Blog</a>
	      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      
	      <div class="collapse navbar-collapse" id="navbarText">
	        
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link btn-outline-primary" data-toggle="modal" data-target="#modalSobre" href="#">Sobre</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link btn-outline-primary" href="/wordpress/tutoriais">Tutoriais</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link btn-outline-primary" href="/wordpress/projetos">Projetos</a>
	          </li>
	        </ul>
	        
	        <div class="form-inline mt-2 mt-md-0">
            <a href="https://github.com/alexgalhardo" title="github.com/AlexGalhardo" style="margin-right: 5px;" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>

            <a href="/wordpress/contato" title="aleexgvieira@gmail.com"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
          </div>

          <div class="form-inline mt-2 mt-md-0">
            <ul class="form-inline navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  🇧🇷 Português
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" title="In development..." href="#">🇺🇸 English</a>
              </li>
            </ul>
          </div>

	      </div>
      </li>
    </nav>


    <!-- Modal Sobre -->
    <div class="modal fade" id="modalSobre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <p>Esse blog é desenvolvido e mantido por um estudante, entusiasta e apaixonado por tecnologia, no qual se proponhe a compartilhar conhecimentos diversos não só sobre a área, mas também sobre diversos outros assuntos e reflexões que considera útil compartilhar.</p>
            <p>Tudo que é compartilhado aqui são tanto para estudos pessoais do autor, assim como um meio de colocar o conhecimento em prática, como a escrita em inglês e o desenvolvimento web. Para resumir, compartilho aqui tudo o que eu gostaria que compartilhassem comigo.</p>
            <p>Espero que o blog seja útil para você.</p>
            <br>
            <p class="text-center"><strong>“Se eu vi mais longe, foi por estar sobre ombros de gigantes.”</strong><br><br>- Isaac Newton</p>
          </div>
        </div>
      </div>
    </div>
    <!-- END Modal Sobre -->
