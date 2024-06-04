<!DOCTYPE html>
<html lang="en">

  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mundo Melhor</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
  
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('css/templatemo-lugx-gaming.css') }}">
</head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ url('/') }}" class="active">Home</a></li>
                      <li><a href="{{ url('/catalogo') }}">Catálogo </a></li>
                      <li><a href="{{ url('/contato') }}">Contato</a></li>
                      <li><a href="{{ url('/admin') }}">Admin</a></li>
                      <li><a href="#">Login</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Bem Vindo ao mundo melhor</h6>
            <h2>Melhor livraria do Brasil</h2>
            <p>Descubra um mundo de conhecimento na Livraria Mundo Melhor, onde cada página conta uma história que inspira, ensina e transforma. Explore nossa coleção diversificada de livros, desde clássicos atemporais até as últimas novidades, e embarque em uma jornada de autodescoberta e crescimento pessoal. Visite-nos online e mergulhe em um universo de leitura que torna o mundo um lugar melhor.</p>
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Digite um livro" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Pesquisar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="{{ asset('images/capa1.png') }}" alt="" style="height: 500px;" >
            <span class="price">R$202</span>
            
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            
            <h2>Outros Livros</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">Ver Tudo</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">

            
                <a href="product-details.html"><img src="{{ asset('images/capa1.png') }}" alt="" class="outros"></a>
              <span class="price">R$20</span>
            </div>
            <div class="down-content">
              <span class="category">Robson</span>
              <h4>Robson Duarte e Suas Aventuras pelo mundo</h4>
           
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="{{ asset('images/capa2.png') }}" alt="" class="outros"></a>
              <span class="price">R$44</span>
            </div>
            <div class="down-content">
              <span class="category">Robson</span>
              <h4>João e nova</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="{{ asset('images/capa3.png') }}" alt="" class="outros"></a>
              <span class="price">R$44</span>
            </div>
            <div class="down-content">
              <span class="category">Robson</span>
              <h4>Brasil: jornada da evolução</h4>
       
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="{{ asset('images/capa4.png') }}" alt="" class="outros"></a>
              <span class="price">R$32</span>
            </div>
            <div class="down-content">
              <span class="category">Robson</span>
              <h4>Vamos com robson, para um pais melhor</h4>
            
            </div>
          </div>
        </div>
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
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/counter.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>

