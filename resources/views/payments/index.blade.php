@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">
            <div class="col-8">
                <h3>Pagamentos</h3>
            </div>
            <div class="col-4" style="text-align: right;">
                <a class="btn btn-success" href="{{route('payment.create')}}" role="button"><i class="fa-solid fa-circle-plus"></i> Novo pagamento</a>
            </div>
        </div>
    </div>
    <div class="container col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Vencimento</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            @forelse($payments as $row)
                <tr>
                    <td>{{$row->description}}</td>
                    <td>{{$row->value}}</td>
                    <td>{{$row->date_vue}}</td>
                    <td>{{$row->status}}</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Não há pagamentos cadastrados.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
