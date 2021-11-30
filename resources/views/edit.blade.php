@extends('templates.main')
@section('title', 'Crud Project - Edit')
@section('edit')
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/register.css">

    <div class="container">
        <div class="content">
            <form action="/update/{{$user->id}}" method="POST" class="form">
                @csrf
                @method('PUT')
                <h3>Cliente</h3>
                <div class="form-row">
                  <div class="col-4 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}" required>
                  </div>
    
                  <div class="col-2 mb-3">
                    <label for="gender">Sexo</label>
                    <input type="text" name="gender" class="form-control" id="gender" value="{{$user->gender}}" required>
                  </div>
    
                  <div class="col-2 mb-3">
                    <label for="birth">Data de Nascimento</label>
                    <input type="date" name="birth" class="form-control" id="birth" value="{{$user->birth->format('Y-m-d')}}" required>
                  </div>

                  <div class="col mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" value="{{$user->cpf}}" required>
                  </div>
                </div>
    
                <div class="form-row">
                    
                </div>
    
                <h3>Endereço</h3>
                <div class="form-row">
                    <div class="col-4 mb-3">
                        <label for="street">Rua</label>
                        <input type="text" name="street" class="form-control" id="street" value="{{$user->street}}" required>
                    </div>
    
                    <div class="col-2 mb-3">
                        <label for="district">Bairro</label>
                        <input type="text" name="district" class="form-control" id="district" value="{{$user->district}}" required>
                    </div>
    
                    <div class="col-2 mb-3">
                        <label for="number">Número</label>
                        <input type="number" name="number" class="form-control" id="number" value="{{$user->number}}" required>
                    </div>

                    <div class="col mb-3">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" class="form-control" id="cep" value="{{$user->cep}}" required>
                    </div>
                </div>
    
                <div class="form-row address">
                    <div class="col-md-2 mb-3 ">
                        <label for="city">Cidade</label>
                        <input type="text" name="city" class="form-control" id="city" value="{{$user->city}}" required>
                    </div>
                </div>
    
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
    {{-- <div class="crud-form">
        <div class="content full-content">
            <form action="/update/{{$user->id}}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="user">
                    <h3>Cliente</h3>
                    <div class="four-inputs">
                        <div class="input">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" value="{{$user->name}}" required>
                        </div>

                        <div class="input">
                            <label for="gender">Sexo</label>
                            <input type="text" name="gender" id="gender" value="{{$user->gender}}">
                        </div>

                        <div class="input">
                            <label for="birth">Data de Nascimento</label>
                            <input type="date" name="birth" id="birth" value="{{$user->birth->format('Y-m-d')}}">
                        </div>

                        <div class="input">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" value="{{$user->cpf}}" required>
                        </div>
                    </div>
                </div>

                <div class="address">
                    <h3>Endereço</h3>
                    <div class="three-inputs">
                        <div class="input">
                            <label for="street">Rua</label>
                            <input type="text" name="street" id="street" value="{{$user->street}}">
                        </div>

                        <div class="input">
                            <label for="district">Bairro</label>
                            <input type="text" name="district" id="district" value="{{$user->district}}">
                        </div>

                        <div class="input">
                            <label for="number">Número</label>
                            <input type="number" name="number" id="number" value="{{$user->number}}">
                        </div>
                    </div>

                    <div class="two-inputs">
                        <div class="input">
                            <label for="cep">CEP</label>
                            <input type="text" name="cep" id="cep" required value="{{$user->cep}}">
                        </div>

                        <div class="input">
                            <label for="city">Cidade</label>
                            <input type="text" name="city" id="city" required value="{{$user->city}}">
                        </div>
                    </div>
                </div>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div> --}}
@endsection