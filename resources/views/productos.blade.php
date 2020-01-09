@extends('master')

@section('section')

<br/>


    <div class="row">
        <div class="col-2">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Filtros</button>
            </p>

                <div class="collapse show" id="collapseExample">
                    <p>
                    <div class="card card-body">
                        Categoría
                        <hr/>
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    TCG
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Juegos de Mesa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Accesorios
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Figuras
                                </label>
                            </div>
                        </form>
                    </div>
                    </p>
                    <p>
                        <div class="card card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Precio
                                </label>
                            </div>
                            <hr/>
                            <label for="rango_precio">Rango Precio</label>
                            <input id="rango_precio" type="range" min="0" max="100" />
                            <span id="slider_precio"></span>




                        </div>
                    </p>

                    <div class="card card-body">
                        <p>TCG
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Magic The Gathering</a>
                            <a href="#" class="list-group-item list-group-item-action">Pokémon</a>
                            <a href="#" class="list-group-item list-group-item-action">Yu-Gi-Oh</a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Mitos y Leyendas</a>
                        </div>
                        </p>

                        <p>Juegos de Mesa
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Cartas</a>
                            <a href="#" class="list-group-item list-group-item-action">Tablero</a>
                            <a href="#" class="list-group-item list-group-item-action">Dados</a>
                        </div>
                        </p>
                        <p>Accesorios
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Cartas TCG</a>
                            <a href="#" class="list-group-item list-group-item-action">Cartas Juegos de mesa</a>
                        </div>
                        </p>
                    </div>
                </div>


        </div>
        <div class="col-10">
            <div class="card card-body">
                <div class="row">
                    <div class="col-10">
                        <h1>Productos X</h1>
                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ordenar por
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item active" href="#">Precio</a>
                            <a class="dropdown-item" href="#">Popularidad</a>
                        </div>
                    </div></div>

                </div>


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

    </div>


@endsection
