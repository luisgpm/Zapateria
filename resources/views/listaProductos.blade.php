@extends('layout')

@section('contenido')

      <div class="main-panel content">
        <div class="container-fluid" >
          <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header card-header-primary" >
                  <h4 class="card-title ">Productos</h4>
                  <p class="card-category">Productos disponibles en tienda</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID Producto
                        </th>
                        <th>
                          ID Proveedor
                        </th>
                        <th>
                          precio
                        </th>
                        <th>
                          nombre
                        </th>
                        <th>
                          Estanteria
                        </th>
                        <th>
                          descripcion
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            342
                          </td>
                          <td class="text-primary">
                            $250
                          </td>
                          <td>
                            tenis de niño Hombre araña
                          </td>
                          <td>
                            a
                          </td>
                          <td>
                            Tenis para niño con estampado de hombre araña
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