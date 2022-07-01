@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">
            <div class="col-8">
                <h3>Categorias</h3>
            </div>
            <div class="col-4" style="text-align: right;">
                <button type="button" class="btn btn-success">Nova categoria</button>
            </div>
        </div>
    </div>
    <div class="container col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Casa</td>
                    <td><a href="#">Excluir</a></td>
                </tr>
                <tr>
                    <td>Educação</td>
                    <td><a href="#">Excluir</a></td>
                </tr>
                <tr>
                    <td>Transporte</td>
                    <td><a href="#">Excluir</a></td>
                </tr>
                <tr>
                    <td>Lazer</td>
                    <td><a href="#">Excluir</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection