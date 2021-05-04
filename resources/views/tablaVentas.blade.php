@extends('layout')

@section('contenido')

      <div class="main-panel content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Ventas</h4>
                  <p class="card-category">Historial de las ventas realizadas</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID Venta
                        </th>
                        <th>
                          ID Cliente
                        </th>
                        <th>
                          ID Venpro
                        </th>
                        <th>
                          total
                        </th>
                        <th>
                          Fecha Venta
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            203
                          </td>
                          <td>
                            320
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                          <td>
                          	23/02/2021
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
    </div>
  </div>


@endsection