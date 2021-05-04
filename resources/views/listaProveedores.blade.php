@extends('layout')
@section('contenido')
      <div class="main-panel content">
        <div class="container-fluid" >
          <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header card-header-primary" >
                  <h4 class="card-title ">Proveedores</h4>
                  <p class="card-category">Lista de proveedores</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID Proveedor
                        </th>
                        <th>
                          Empresa
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Apellidos
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Nike
                          </td>
                          <td>
                            Arturo
                          </td>
                          <td>
                            Jimenez Martinez
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