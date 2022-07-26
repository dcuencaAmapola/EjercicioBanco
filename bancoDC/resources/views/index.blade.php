@extends('layout/header/layout')

@section('content')

    <div class="container">
        <div class="row">
          <div class="col-sm-8"></div>
          <div class="col-sm-4">
            <li id="usuario" class="list-group-item" value="{{$usuario->idUsuario}}">{{$usuario->nombreUsuario}}</li>
          </div>
        </div>
    <h1 style="align: center">Préstamos</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <form class="row">
        @csrf
        <div class="col-auto">
            <label for="tituloMonto" class="visually-hidden">TituloMonto</label>
            <input type="text" readonly class="form-control-plaintext" id="tituloMonto" value="Ingrese el monto: ">
        </div>
        <br/>
        <div class="col-auto">
            <label for="montoPrestamo" class="visually-hidden">CampoMonto</label>
            <input type="number" class="form-control" id="montoPrestamo" placeholder="Monto" required>
            <br/>
        </div>
    <br/>
        <div class="col-auto">
            <br/>
            <label for="TipoCredito" class="visually-hidden">TituloTipoCredito</label>
            <input type="text" readonly class="form-control-plaintext" id="tipoCredito" value="Seleccione un plan: ">
        </div>
        <div class="col-auto">
            <div class="row">
                <div class="col-sm-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Plan 12 meses</h5>
                      <p class="card-text">Plazo de 12 meses a un 26% anual de interés.</p>
                      <a id="plan1" class="btn btn-primary">Elegir</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Plan 18 meses</h5>
                      <p class="card-text">Plazo de 18 meses a un 28% anual de interés.</p>
                      <a id="plan2" class="btn btn-primary">Elegir</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Plan 24 meses</h5>
                        <p class="card-text">Plazo de 24 meses a un 30% anual de interés.</p>
                        <a id="plan3" class="btn btn-primary">Elegir</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Plan 36 meses</h5>
                        <p class="card-text">Plazo de 24 meses a un 32% anual de interés.</p>
                        <a id="plan4" class="btn btn-primary">Elegir</a>
                      </div>
                    </div>
                </div>
              </div>
        </div>
        <div>
            <small>Todos los paquetes incluyen un seguro del 3% deducido de su monto.</small>
        </div>
        <div>
            <br>
            <a type="button" class="btn btn-danger" onclick="mostrarCalculo()">Calcular</a>
            <br>
        </div>
    </form>
    <div class="container">
        <br>
            <h5>Credito: </h5>
            <br>
        <div id="mostrarCalculoPrestaciones">
            <form method="POST" action="{{route('prestaciones.store')}}">
                @csrf
                <input name="montoPrestamo" readonly id="montoPrestamoF" class="form-control-plaintext" type="number" placeholder="Monto Prestamo" value="{{old ('montoPrestamo')}}"><br>
                <input name="montoSeguro" readonly id="montoSeguroF" class="form-control-plaintext" type="number" placeholder="Monto Seguro" value="{{old ('montoSeguro')}}"><br>
                <input name="montoRecibido" readonly id="montoRecibidoF" class="form-control-plaintext" type="number" placeholder="Monto Recibido" value="{{old ('montoRecibido')}}"><br>
                <input name="interesCalculado" readonly id="interesCalculadoF" class="form-control-plaintext" type="number" placeholder="Interes Calculado" value="{{old ('interesCalculado')}}"><br>
                <input name="cuotasPrestamo" readonly id="cuotasPrestamoF" class="form-control-plaintext" type="number" placeholder="Cuotas Prestamo" value="{{old ('cuotasPrestamo')}}"><br>
                <input name="montoCuota" readonly id="montoCuotaF" class="form-control-plaintext" type="dnumberate" placeholder="Monto Cuota" value="{{old ('montoCuota')}}"><br>
                <input name="montoTotalPago" readonly id="montoTotalPagoF" class="form-control-plaintext" type="number" placeholder="Monto Total Pago" value="{{old ('montoTotalPago')}}"><br>
                <input name="idUsuario" readonly id="idUsuarioF" class="form-control-plaintext" type="number" placeholder="Usuario"  value="{{old ('idUsuarioF')}}"><br>
                <button type="submit" class="btn btn-primary">Continuar</button>
            </form>
        </div>
        <br>

    </div>

    <script src="{{ asset('/js/calcularPrestamo.js') }}"></script>
