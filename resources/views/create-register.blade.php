@extends('templates.main')
@section('title', 'Crud Project')
@section('create-register')
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/register.css">

    <div class="container">
        <div class="content">
            <form action="/" method="POST">
                @csrf
                <h3>Cliente</h3>
                <div class="form-row">
                  <div class="col-4 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
    
                  <div class="col-2 mb-3">
                    <label for="gender">Sexo</label>
                    <input type="text" name="gender" class="form-control" id="gender" required>
                  </div>
    
                  <div class="col-2 mb-3">
                    <label for="birth">Data de Nascimento</label>
                    <input type="date" name="birth" class="form-control" id="birth" required>
                  </div>

                  <div class="col mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" required>
                  </div>
                </div>
    
                <div class="form-row">
                    
                </div>
    
                <h3>Endereço</h3>
                <div class="form-row">
                    <div class="col-4 mb-3">
                        <label for="street">Rua</label>
                        <input type="text" name="street" class="form-control" id="street" required>
                    </div>
    
                    <div class="col-2 mb-3">
                        <label for="district">Bairro</label>
                        <input type="text" name="district" class="form-control" id="district" required>
                    </div>
    
                    <div class="col-2 mb-3">
                        <label for="number">Número</label>
                        <input type="number" name="number" class="form-control" id="number" required>
                    </div>

                    <div class="col mb-3">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" class="form-control" id="cep" required>
                    </div>

                </div>
    
                <div class="form-row address">
                    
    
                    <div class="col-md-2 mb-3 ">
                        <label for="city">Cidade</label>
                        <input type="text" name="city" class="form-control" id="city" required>
                    </div>
                </div>
    
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection