<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Cine Pigeons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.css')); ?>">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/flex-slider.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/owl.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/templatemo-lugx-gaming.css')); ?>">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
<style>
    table {
        width: 80%;
        margin: auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>
</head>
<body>
    
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
                        <li><a href="<?php echo e(url('/')); ?>" >Home</a></li>
                        <li><a href="<?php echo e(url('/catalogo')); ?>">Catálogo</a></li>
                        <li><a href="<?php echo e(url('/contato')); ?>" >Contato</a></li>
                        <li><a href="<?php echo e(url('/admin')); ?>" class="active">Admin</a></li>
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
          <h3>Deletar</h3>
          <span class="breadcrumb"><a href="#">Home</a>  > Admin</span>
        </div>
      </div>
    </div>
  </div>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Título</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td scope="row"><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($livro->title); ?></td>
                    <td>R$ <?php echo e($livro->valor); ?></td>
                    <td>
                        
                    <form action="/livro/<?php echo e($livro->id); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="deletar"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        <a href="/livro/editar/<?php echo e($livro->id); ?>" class="btn btn-info edit-btn">Editar</a>
                    </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(session('success')): ?>
                <script>alert("<?php echo e(session('success')); ?>");</script>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
<?php /**PATH C:\laravel\Livraria\resources\views/deletar.blade.php ENDPATH**/ ?>