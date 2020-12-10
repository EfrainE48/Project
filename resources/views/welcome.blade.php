@extends('layouts.app')
  
<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
    @include('layouts.carousel')
    </div>







{{--    <div class="row">--}}
{{--        <div class="col-1 bg-danger">1</div>--}}
{{--        <div class="col-1 bg-dark">2</div>--}}
{{--        <div class="col-1 bg-info">3</div>--}}
{{--        <div class="col-1 bg-primary">4</div>--}}
{{--        <div class="col-1 bg-success">5</div>--}}
{{--        <div class="col-1 bg-secondary">6</div>--}}
{{--        <div class="col-1 bg-success">7</div>--}}
{{--        <div class="col-1 bg-secondary">8</div>--}}
{{--        <div class="col-1 bg-info">9</div>--}}
{{--        <div class="col-1 bg-danger">10</div>--}}
{{--        <div class="col-1 bg-primary">11</div>--}}
{{--        <div class="col-4 bg-info">12</div>--}}
{{--    </div>--}}

<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div

            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3><br><br>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm" href="views/pagos/compras">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Mulán (2020)</h3><br><br>

                <p class="mb-auto">Cuando el emperador de China lanza un decreto de que un hombre por familia debe
                    servir al Ejército Imperial ...</p>
                <a href="{{ url('https://g.co/kgs/rEcqqV') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button> 
                   <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Aves de presa</h3><br><br>

                <p class="mb-auto">Harley Quinn y otras tres heroínas, Canario Negro, Cazadora y 
                    Renée Montoya, unen sus fuerzas para salvar a una niña del malvado rey del crimen Máscara Negra
                    ....</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/9.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Animales Fantasticos y donde encontrarlos</h3><br><br>

                <p class="mb-auto">En 1926, el mago experto en zoología Newt Scamander hace una breve parada en Nueva York 
                    mientras viaja catalogando y capturando criaturas mágicas por el mundo ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/10.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Bob Esponja "La pelicula"</h3><br><br>

                <p class="mb-auto">Bob Esponja y Patrick viajan a ciudad Shell para recuperar la corona de Neptuno y
                     salvar la vida del Sr. Krabs. ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/12.png') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Focus</h3><br><br>

                <p class="mb-auto">Un estafador veterano apoya a una joven y atractiva mujer, 
                    pero las cosas se complican cuando ellos se involucran románticamente. ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/13.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">La leyenda de Tarzan</h3><br><br>

                <p class="mb-auto">Muchos años después de haber dejado África, Tarzán regresa al Congo engañado,
                     pensando que va a servir de emisario; ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/15.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Busqueda implacable 2</h3><br><br>

                <p class="mb-auto">El exagente de las fuerzas especiales de élite Bryan Millis se ve enredado en la 
                    trama de una organización criminal cuando intenta salvar a su hija Kim ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/16.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Bloodshot</h3><br><br>

                <p class="mb-auto">Tras su muerte, Ray Garrison vuelve a la vida gracias a la corporación RST. Ahora, 
                    con un ejército de nanotecnología en sus venas, Ray es invencible ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/17.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Sonic</h3><br><br>

                <p class="mb-auto">Sonic intenta atravesar las complejidades de la vida en la Tierra con su nuevo mejor amigo, un humano llamado Tom Wachowski ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/18.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Choked</h3><br><br>

                <p class="mb-auto">Una empleada de un banco trata de pagar las cuentas y encuentra una fuente secreta
                     de dinero aparentemente ilimitada en su hogar ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>   
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/19.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Bad Boys para siempre</h3><br><br>

                <p class="mb-auto">Los veteranos agentes Mike Lowery y Marcus Burnett vuelven a colaborar para detener a Armando Armas,
                     el violento líder de un cartel de la droga afincado en Miami ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/20.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Parque mágico</h3><br><br>

                <p class="mb-auto">June es una chica imaginativa que se encuentra en el País de las Maravillas, un parque de 
                    diversiones que creó en su mente ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/21.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">DRIVE</h3><br><br>

                <p class="mb-auto">Un doble de cine de Hollywood que trabaja como un conductor para unos ladrones es 
                    amenazado de muerte después de un robo fallido ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/22.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Los juegos del hambre "Sinsajo parte 1"</h3><br><br>

                <p class="mb-auto">Después de destruir los juegos para siempre, Katniss llega al Distrito 13 p
                    ara salvar a Peeta y una nación conmovida por su coraje ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/23.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  border border-secondary">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Blue Story</h3><br><br>

                <p class="mb-auto">La amistad entre Timmy y Marco se pone a prueba cuando Marco es atacado por uno de 
                    los amigos de Timmy, los dos chicos terminan en lados rivales de un ciclo interminable de guerras
                     entre bandas en las que no hay ganadores ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                    <button class="btn btn-info btn-sm">Comprar Boleto</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/24.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    

    <div class="col-1"></div>

</div>



<!-- Agregar JavaScript -->


<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <br><br><br>
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!doctype html>
  <div class="jumbotron bg-success-light">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('img/21.jpg') }}" alt="" width="100" height="100">
    <h1 class="">Compra de boletos</h1><br>
    <p class="lead">Rellene los campos para adquirir sus recibos. <br>
      Al obtener su recibo debera guardarlo y entregarlo en la zona de boletos del cine para adquirir sus boletos.
    </p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted" >Precios</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Individual</h6>
            <small class="text-muted" >1 persona</small>
          </div>
          <span class="text-muted">$80</span>
        <body>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Pareja</h6>
            <small class="text-muted">2 personas</small>
          </div>
          <span class="text-muted">$150</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Triple</h6>
            <small class="text-muted">3 personas</small>
          </div>
          <span class="text-muted">$220</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Familiar</h6>
            <small>5 entradas por el precio de 4</small>
          </div>
          <span class="text-success">$350</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total ($)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3 text-center">Rellene los campos</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellidos</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" id="username" placeholder="Usename" required>
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" placeholder="" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Tipo de entrada<span class="text-muted">(Opctional)</span></label>
          <input type="text" class="form-control" id="address" placeholder="" required>
        </div>

        <div class="mb-3">
          <label for="address2">Numero de telefono <span class="text-muted">(Opctional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Estado</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>Aguascalientes</option>
              <option>Baja california</option>
              <option>Chiapas</option>
              <option>Durango</option>
              <option>Guanajuato</option>
              <option>Ciudad de México</option>
              <option>Puebla</option>
              <option>Oaxaca</option>
              <option>Sinaloa</option>
              <option>Veracruz</option>
            </select>
            <div class="invalid-feedback">
              Por favor seleccione un estado.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Municipio</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>Teziutlan</option>
              <option>Cuetzalan</option>
              <option>Aire Libre</option>
              <option>Atempan</option>
              <option>Teteles</option>
              <option>Tlatlauquitepec</option>
            </select>
            <div class="invalid-feedback">
              Por favor seleccione un municipio.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Numero de entradas</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Inserte el numero de entradas.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Acepto terminos y condiciones</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Recibir notificaciones al correo electronico</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Forma de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Tarjeta de débito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nombre de tarjeta</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Numero de la tarjeta</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiración</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar y aceptar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2010-2025 Company Cine</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Terminos</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
      </div>
</html>

@endsection


