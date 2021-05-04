@extends('layout')

@section('contenido')
      <div class=" main-panel content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Alta de productos</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Producto</label>
                          <input type="number" class="form-control"  value="342">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Proveedor</label>
                          <input type="number" class="form-control"  value="543">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" class="form-control"  value="zapato de vestir caballero">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID Estanteria</label>
                          <input type="number" class="form-control"  value="5">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Precio Unitario</label>
                          <input type="number" class="form-control"  value="899">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Descripcion</label>
                          <div class="form-group">
                            zapato para caballero en color negro tipo gamusa
                            <textarea class="form-control"  rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Alta Producto</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endsection