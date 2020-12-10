<div>

<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


<div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/1.jpg') }}" style="height: 1000px">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>ALita: Blatle Angel.</h1>
                    <p>Alita es un cyborg que se despierta en la clínica de un médico sin recordar quién es.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/2.jpg') }}" alt="" style="height: 1000px">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Los increibles 2</h1>
                    <p>Helen debe luchar contra un cibercriminal que planea hipnotizar al mundo a través de 
                        las pantallas de las computadoras. Eso enfrenta a Mr. Increíble con uno de sus 
                        mayores desafíos: quedarse en casa y cuidar de tres niños traviesos.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/25.jpg') }}" style="height: 1000px">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Jumanji "El siguiente nivel"</h1>
                    <p>Spencer regresa al fantástico mundo de Jumanji. Sus amigos, Martha, Fridge y
                         Bethany vuelven a entrar al juego para llevarlo de vuelta a casa, pero todo 
                         sobre Jumanji está a punto de cambiar, ya que descubren más obstáculos y 
                         peligros que superar.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>    
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</div>
<br><br>
