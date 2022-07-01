@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">
            <div class="col-8">
                <h3>Pagamentos</h3>
            </div>
            <div class="col-4" style="text-align: right;">
                <button type="button" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i> Novo pagamento</button>
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
                <tr>
                    <td>Conta de luz</td>
                    <td>R$ 119,90</td>
                    <td>10/07/2022</td>
                    <td>Aberta</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Conta de água</td>
                    <td>R$ 69,90</td>
                    <td>07/07/2022</td>
                    <td>Aberta</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Futebol com os amigos</td>
                    <td>R$ 50,00</td>
                    <td>01/07/2022</td>
                    <td>Fechada</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection