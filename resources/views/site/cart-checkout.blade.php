<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Pricing example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">

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
  <body class="bg-dark text-white">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <span class="badge badge-secondary badge-pill"> 

                </span>
            </li>
          </ul>
        </div>
    </nav>




  <div class="container">
  
      @if (count(Cart::content()))
          <div class="row mb-15 p-5">
              <div class="col-md-12 order-md-12 text-center ">
                  <h4 class="mb-5">
                    <span class="text-muted">Seu Carrinho </span>
                    
                  <span class="badge badge-secondary badge-pill">{{count(Cart::content())}}</span>
                  </h4>
                    
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        
                          <th scope="col">Skin</th>
                          <th scope="col">Valor</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                              @foreach (Cart::content() as $item)
                        <tr>
                      
                          <td>{{$item->name}}</td>
                          <td>R${{$item->price}}</td>
                          <td>                     
                            <form action="{{route('cart.removeitem')}}" method="post">
                              <input type="hidden" name="rowId" value="{{"$item->rowId"}}">
                              @csrf
                              <button type="submit" class="btn btn-sm btn-outline-secondary  bg-dark text-white">Remover</button>
                            </form>
                          </td>   
                        </tr>
                           @endforeach  
                           <tr class="text-center">
                           <td><p> Total </p>
                           </td>
                           <td>
                       <p> R${{Cart::priceTotal()}} </p></td>  
                                                 <td>                     
                            <form action="" method="">
                              <input type="hidden" name="rowId" value="{{"$item->rowId"}}">
                              @csrf
                              <button type="submit" class="btn btn-sm btn-outline-secondary btn-success text-white">Pagar</button>
                            </form>
                          </td>                                           
                        </tr>             
                      </tbody>
                    </table>
              </div>
              </div>
        
                @else 
                <div class="row mb-15 p-5">
              <div class="col-md-12 order-md-12 text-center ">
                  <h4 class="mb-5">
                    <span class="text-muted">O seu Carrinho está vazio! </span>
                    
                  <span class="badge badge-secondary badge-pill">{{count(Cart::content())}} Skin</span>
                  </h4>
              </div>
       
        
      @endif
      
  </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      
</body>
</html>


