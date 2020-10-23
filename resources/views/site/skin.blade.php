<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Pricing example · Bootstrap</title>
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
        html {
  font-size: 14px;
}
        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
        max-width: 960px;
        }

        .pricing-header {
        max-width: 700px;
        }

        .card-deck .card {
        min-width: 220px;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body class="bg-dark text-white" style="background-color:#272b30; ">
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



<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center bg-dark">
  <h1 class="display-4">Skin</h1>
  <p class="lead">{{$skin->descricao}}</p>
</div>
<div class="container">
  <div class="card-deck mb-3 d-flex justify-content-center text-center">
        <div class="col-md-6 text-white">
          <div class="card mb-6 shadow-sm" style="background-color: #1c1e22;">
             <img src="{{$skin->imagem}}"  width="100%" height="250"class="card-img-top p-5" alt="...">
            <div class="card-body" style="background-color: #1c1e22;">
              <h3 class="card-text text-white">{{$skin->nome }}</h3>
                <p class="card-text text-white">{{ $skin->valor}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form action="{{route('cart.add')}}" method="post">
                <input type="hidden" name="id" value="{{"$skin->id"}}">
                @csrf
                  <button type="submit" class="btn btn-sm btn-outline-secondary  bg-dark text-white" data-toggle="modal" data-target="#modalExemplo">Comprar</button>
                  </form>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-dark">GodSkins</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        A Skin foi adicionada ao seu carrinho
      </div>
      <div class="modal-footer">
        <div class="btn-group">
          <a href="{{ route('site.cart-checkout') }}" style="text-decoration: none;" class=" btn btn-success xt-white"> Ver no carrinho</a>
         </div>
      </div>
    </div>
  </div>
</div>

  <footer class="pt-4 my-md-5 pt-md-5  border-top">
    <div class="row text-center">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md text-white">
        <h5>About</h5>
        <ul class="list-unstyled text-small text-white-50">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      
</body>
</html>

</html>
