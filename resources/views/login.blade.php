@extends('master')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Correo Electrónico</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.cl">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label" for="dropdownCheck">
                Recordarme
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">¿Eres nuevo por aquí? Regístrate</a>
          <a class="dropdown-item" href="#">¿Olvidaste la contraseña?</a>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection



