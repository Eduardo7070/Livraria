<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
  <link rel="stylesheet" href="<?php echo e(asset('css/aplicativo.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/templatemo-lugx-gaming.css')); ?>">

</head>

<body>
  <!-- ***** Preloader Start ***** -->
  
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?php echo e(url('/')); ?>" class="logo">
              <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" style="width: 158px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li><a href="<?php echo e(url('/catalogo')); ?>" class="active">Catálogo</a></li>
              <li><a href="<?php echo e(url('/contato')); ?>">Contato</a></li>
              <li><a href="<?php echo e(url('/admin')); ?>">Admin</a></li>
              <li><a href="#">Login</a></li>
            </ul>   
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
      <!-- ***** Search Bar Start ***** -->

      <!-- ***** Search Bar End ***** -->
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>CATÁLOGO</h3>
          <span class="breadcrumb"><a href="#">Home</a> >Catálogo</span>
        </div>
      </div>
    </div>
  </div>

  <main class="main_body" style="display:flex;justify-content: center; align-items:center">
    <section class="main_section">
      <section class="gallery">
        <?php $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('detalhes',$livro->id)); ?>">
        <div class="card">
          <div class="img">
            <img src="<?php echo e(asset($livro->image)); ?>" alt="">
          </div>
          <div class="caption">
            <div class="title"><?php echo e($livro->title); ?></div>
            <div class="price">R$ <?php echo e($livro->valor); ?></div>
          </div>
        </div>
        </a> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </section>        
      <footer style="background-color: #f7f7f7;">
        <ul> 
          <?php if($livros->currentPage() == 1): ?>                   
          <a href="#" style="color: white;"><</a>
          <?php else: ?>
          <a href="<?php echo e($livros->previousPageUrl()); ?>" style="color:white;"><</a>
          <?php endif; ?>
          <?php for($i = 1; $i <= $livros->lastPage(); $i++): ?>
          <li <?php if($i == $livros->currentPage()): ?> class="active" <?php endif; ?>><a href="<?php echo e($livros->url($i)); ?>" style="color: white;"><?php echo e($i); ?></a></li>
          <?php endfor; ?>
          <a href="<?php echo e($livros->nextPageUrl()); ?>" style="color: white;">></a>
        </ul>
      </footer>
    </section>
  </main>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/isotope.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>
  <script src="<?php echo e(asset('js/counter.js')); ?>"></script>
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laravel\Livraria\resources\views/catalogo.blade.php ENDPATH**/ ?>