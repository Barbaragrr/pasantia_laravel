@extends('layouts.app')
@section('content')
    <div class="center">
        <a href="/subir-archivo" class="btn btn-primary">Subir archivo</a>
    </div>
    <br>
    <br>

    <div class="div-table">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Detalles</th>
                <th scope="col">Editar</th>
                <th scope="col">Fecha</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                {{-- primera fila --}}
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">2</td>
                    <td scope="row">3</td>
                    <td scope="row">4</td>
                    <td scope="row">5</td>
                    <td scope="row">6</td>
                </tr>
                {{-- segunda fila --}}
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">2</td>
                    <td scope="row">3</td>
                    <td scope="row">4</td>
                    <td scope="row">5</td>
                    <td scope="row">6</td>
                </tr>
            </tbody>
          </table>
    </div>

@endsection