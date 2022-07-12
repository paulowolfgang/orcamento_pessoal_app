@extends('layouts.app')

@section('content')
    <div class="container col-lg-12 mt-5 mb-5">
        <div class="row">

            <!-- ### Success message div ### -->
            <div id="successMessage"></div>
            
            <div class="col-8">
                <h3>Categorias</h3>
            </div>
            <div class="col-4" style="text-align: right;">

                <!-- ### Button trigger modal ### -->
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
            </tbody>
        </table>
    </div>

    <!-- ### Category registration modal ### -->
    <div class="modal fade" id="saveCategorieModal" tabindex="-1" aria-labelledby="saveCategorieModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Nova Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <!-- ### Modal error message ### -->
                <ul id="errorMessage"></ul>

                <div class="mb-3">
                    <form action="{{ route('categorie.store') }}" class="formData" id="formData" enctype="multipart/form-data">
                        @csrf
                        <label for="exampleInput" class="form-label">Nome da categoria</label>
                        <input type="text" class="name form-control">
                        <div id="categorieHelp" class="form-text">Cadastre o nome da nova categoria, exemplo: Transporte...</div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success saveCategorie"><i class="fa-solid fa-circle-plus"></i> Cadastrar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Fechar</button>
            </div>
            </div>
        </div>
    </div>
@endsection

<!-- ### jQuery ### -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function (){

        fetchCategories();

        function fetchCategories() {
            $.ajax({
                type: "GET",
                url: "/fetch",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.categories, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>' + item.name + '</td>\
                            <td><td><a href="#"><i class="fa-solid fa-trash-can"></a></td></td>\
                        \</tr>');
                    });
                }
            });
        }
        
        $(document).on('click', '.saveCategorie', function(e){
            e.preventDefault();
            //console.log("Event button Ok..");
            var data  = {
                'name': $('.name').val(),
            }
            //console.log(data);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/categorie",
                data: data,
                dataType: "json",
                success: function(response){
                    //console.log(response.errors.name);
                    if(response.status == 400)
                    {   
                        $('#errorMessage').html("");
                        $('#errorMessage').addClass('alert alert-danger');
                        $.each(response.errors, function(key, errValues){
                            $('#errorMessage').append('<div class="p-2"><li>' + errValues + '</li></div>');
                        });
                    }
                    else
                    {
                        $('#errorMessage').html("");
                        $('#successMessage').addClass('alert alert-success');
                        $('#successMessage').text(response.message);
                        $('#saveCategorieModal').modal('hide');
                        $('#saveCategorieModal').find('input').val("");

                        fetchCategories();
                    }
                }
            });
        });
    });
</script>
