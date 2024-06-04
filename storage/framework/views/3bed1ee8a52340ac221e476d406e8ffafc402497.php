<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
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
</head>
<body>

<!-- ***** Área do Cabeçalho ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Início ***** -->
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo Fim ***** -->
                    <!-- ***** Menu Início ***** -->
                    <ul class="nav">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/catalogo')); ?>">Catálogo</a></li>
                        <li><a href="<?php echo e(url('/contato')); ?>">Contato</a></li>
                        <li><a href="<?php echo e(url('/admin')); ?>" class="active">Admin</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu Fim ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Fim da Área do Cabeçalho ***** -->

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Alterar Livro</h3>
                <span class="breadcrumb"><a href="#">Home</a>  > Alterar</span>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <form action="/livro/update/<?php echo e($livro->id); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="title" id="title" placeholder="Título" value="<?php echo e($livro->title); ?>" autocomplete="on" required>
                                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input id="valor" type="number" step="0.01" name="valor" placeholder="Valor do livro" value="<?php echo e($livro->valor); ?>" autocomplete="on" required>
                                            <?php $__errorArgs = ['valor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="Autor" id="Autor" placeholder="Autor" value="<?php echo e($livro->Autor); ?>" autocomplete="on" required>
                                            <?php $__errorArgs = ['Autor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="descricao" id="descricao" placeholder="Descrição" required><?php echo e($livro->descricao); ?></textarea>
                                            <?php $__errorArgs = ['descricao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="formFile" class="form-label">Escolha uma imagem:</label>
                                            <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                            <img src="/images/livros/<?php echo e($livro->image); ?>" alt="" class="img-preview" style="max-width: 200px; margin-top: 10px;">
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="orange-button">Editar</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>© 2024 <a rel="nofollow" href="https://templatemo.com" target="_blank">todos direitos reservados há Mundo Melhor</a></p>
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
<?php /**PATH C:\laravel\Livraria\resources\views//editar.blade.php ENDPATH**/ ?>