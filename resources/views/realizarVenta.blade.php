@extends('layout')
@section('contenido')
 <div class=" main-panel content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Venta</h4>
                  <p class="card-category">Realizar una Venta</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Cliente</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Producto</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="number" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Producto</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="number" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Producto</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="number" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Producto</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="number" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="number" class="form-control" disabled>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Pagado</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection