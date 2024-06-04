<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor - Detalhes</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.css')); ?>">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/flex-slider.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/owl.css')); ?>">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo e(asset('css/templatemo-lugx-gaming.css')); ?>">
</head>
<body>
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                      <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" style="width: 158px;">
                    </a>
                    <ul class="nav">
                      <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                      <li><a href="<?php echo e(url('/catalogo')); ?>">Catálogo </a></li>
                      <li><a href="<?php echo e(url('/contato')); ?>">Contato</a></li>
                      <li><a href="<?php echo e(url('/admin')); ?>">Admin</a></li>
                      <li><a href="#">Login</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Detalhes da Compra</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Catálogo</a>  >  Detalhes</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="<?php echo e(asset($livro->image)); ?>" alt="<?php echo e($livro->title); ?>">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4><?php echo e($livro->title); ?></h4>
          <span class="price"> $<?php echo e($livro->valor); ?></span>
          <p><?php echo e($livro->descricao); ?></p>
          <div style="margin-bottom: 2%;">
            <form id="pgtLivro" action="#">
              <button type="submit" style="width: 150px;"> COMPRAR</button>
            </form>
          </div>
          
          <div class="col-lg-8">
            <div class="main-button">
              <a href="<?php echo e(url('/catalogo')); ?> " style="width: 150px; text-align: center;">Ver Todos</a>
            </div>
          </div>
          <ul>
            <li><span>Autor:</span> <?php echo e($livro->Autor); ?></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories related-games">
    <div class="container">
      <div class="row">
          
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p> © 2024 <a rel="nofollow" href="https://templatemo.com" target="_blank">todos direitos reservados há Mundo Melhor</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/isotope.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/owl-carousel.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/counter.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laravel\Livraria\resources\views/detalhes.blade.php ENDPATH**/ ?>