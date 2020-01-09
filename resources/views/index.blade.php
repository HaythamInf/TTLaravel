@extends('master')

@section('section')
<br/>


<div class="container">
    <div class="row justify-content-center">
        <img src="../../Images/Svg/logo.png" alt="logo" width="200px">
    </div>

    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../Images/Carousel/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Images/Carousel/2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Images/Carousel/3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





</div>

<div class="container">
    <br/>
    <div class="row">

        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

    </div>
    <br/>
    <div class="row">

        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="../../Images/productos/nswitch.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Nintendo Switch</h5>
                <p class="card-text">$19.990</p>
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

    </div>


    </div>
</div>


@endsection
