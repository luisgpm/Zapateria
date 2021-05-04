@extends('layout')
@section('contenido')
      <div class="main-panel content">
        <div class="container-fluid" >
          <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header card-header-primary" >
                  <h4 class="card-title ">Estanterias</h4>
                  <p class="card-category">Lista de Estanterias</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID Estanteria
                        </th>
                        <th>
                          ID Producto
                        </th>
                        <th>
                          Cantidad producto
                        </th>
                        <th>
                          pasillo
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            324
                          </td>
                          <td>
                            30 pares
                          </td>
                          <td>
                            Pasillo 5
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection