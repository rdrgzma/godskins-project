<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>GodSkins</title>
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      body{
        background-color: black;
        text-decoration-color: white;

      }

      a{
        text-decoration: none;
      }
      .img-logo{
        width: 150px;
        height: 60px;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body class="text-white " style="background-color:#272b30; ">
  <header>


     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1c1e22;">
    <a class="navbar-brand" href="{{ route('home') }}">
    <img src="http://via.placeholder.com/350x120" alt="LOGO" class="img-fluid img-logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
      <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="{{route('site.cart-checkout')}}"  style="text-decoration: none"> cart</a>
      </li>
    </ul>


  </div>
</nav>
  </header>


      <main role="main" style="background-color:#272b30">

        <section class=" text-center text-dark">

            <img src="http://via.placeholder.com/1500X400" width= "100%" class="img-fluid" alt="HERO">

        </section>


        <div class="album py-5" style="background-color:#272b30">
          <div class="container">

            <div class="row d-flex  justify-content-center text-white" style="background-color:#272b30">
              @foreach ($skins ?? '' as $skin)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card mb-4 sd-4 shadow-sm text-white" style="background-color: #1c1e22;">
                    <img src="{{ $skin->imagem }}"  width="100%" class="card-img-top p-5 img-fluid " alt="...">
                  <div class="card-body  text-white" style="background-color: #1c1e22;">
                    <h3 class="card-text text-white">{{$skin->nome }}</h3>
                    <p class="card-text text-white">{{ $skin->valor}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <a href="{{ route('site.skin',$skin->id) }}" class="btn btn-sm btn-outline-secondary btn-success text-white-50"> Comprar</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Inspesionar</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
               @endforeach


      </main>
 <footer class="pt-4 my-md-5 pt-md-5 border-top" style="background-color:#272b30">
    <div class="row text-center" style="background-color:#272b30">
     <div class="col-6">
        <h6 >Quem somos</h6>
        <ul class="list-unstyled text-small">
          <li><p class="text-muted" >Alguma informação importante aqui</p></li>
          <li><p class="text-muted" >Outra informação importante aqui</p></li>
        </ul>
      </div>
      <div class="col-6">
        <h6>Formas de pagamento</h6>
        <ul class="list-unstyled text-small">
          <li><p class="text-muted" >Transferencia bacária</p></li>
          <li><p class="text-muted" >Pic Pay</p></li>
        </ul>
      </div>

    </div>
  </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

      </html>
