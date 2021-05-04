@extends('layout')

@section('contenido')
      <div class=" main-panel content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Perfil de usuario</h4>
                  <p class="card-category">Informacion del usuario</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" class="form-control" disabled value="Luis Gerardo">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Apellido parteno</label>
                          <input type="text" class="form-control" disabled value="Porcayo">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Apellido materno</label>
                          <input type="text" class="form-control" disabled value="Marcos">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ciudad</label>
                          <input type="text" class="form-control" disabled value="Tejupilco de Hidalgo">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Estado</label>
                          <input type="text" class="form-control" disabled value="Estado de Mexico">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Codigo Postal</label>
                          <input type="text" class="form-control" disabled value="51412">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endsection