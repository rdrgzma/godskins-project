<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>GodSkins</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



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
<br>
<div class="container">
    @forelse($faqs as $faq)
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" style="background-color:#272b30" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white  text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{$faq->pergunta}}
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" style="background-color:#272b30" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                   Resposta:  {{$faq->resposta}}
                </div>
            </div>
        </div>
    </div>
    @empty
        <h5 class="text-white"> Não há perguntas cadastradas</h5>
    @endforelse
</div>

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
</body>
</html>
