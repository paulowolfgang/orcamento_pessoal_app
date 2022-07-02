@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">
            <div class="col-8">
                <h3>Categorias</h3>
            </div>
            <div class="col-4" style="text-align: right;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saveCategorieModal">
                    <i class="fa-solid fa-circle-plus"></i> Nova categoria
                </button>
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
            @forelse($categories as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td><a href="#"><i class="fa-solid fa-trash-can"></a></td>
                </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Não há categorias cadastradas.</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- ### Modal de cadastro de categoria ### -->
    <div class="modal fade" id="saveCategorieModal" tabindex="-1" aria-labelledby="saveCategorieModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Nova Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nome da categoria</label>
                <input type="text" class="form-control" id="categorieName">
                <div id="categorieHelp" class="form-text">Cadastre o nome da nova categoria, exemplo: Transporte...</div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a class="btn btn-success" href="#" role="button"><i class="fa-solid fa-circle-plus"></i> Cadastrar</a>
            </div>
            </div>
        </div>
    </div>
@endsection
