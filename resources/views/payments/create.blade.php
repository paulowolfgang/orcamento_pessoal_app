@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">
            <div class="col-8">
                <h3>Novo Pagamento</h3>
            </div>
            <div class="col-4" style="text-align: right;">
            <a class="btn btn-primary" href="{{route('payment.index')}}" role="button"><i class="fa-solid fa-circle-left"></i> Voltar</a>
            </div>
        </div>
    </div>
    <div class="container col-lg-12">
        <form>
            <div class="row mb-3">
                <div class="col-lg-8">
                    <label for="exampleInputEmail1" class="form-label">Descrição</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-lg-4">
                    <label for="exampleInputPassword1" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione a Categoria</option>
                        <option value="1">Casa</option>
                        <option value="2">Educação</option>
                        <option value="3">Transporte</option>
                        <option value="4">Lazer</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="exampleInputPassword1" class="form-label">Valor</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-lg-3">
                    <label for="exampleInputPassword1" class="form-label">Data de vencimento</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-lg-3">
                    <label for="exampleInputPassword1" class="form-label">Data de pagamento</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-lg-3">
                    <label for="exampleInputPassword1" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione o status</option>
                        <option value="1">Em aberto</option>
                        <option value="2">Paga</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i> Cadastrar</button>
        </form>
    </div>
@endsection