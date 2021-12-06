@extends('templates.main')
@section('title', 'Crud Project')
@section('index')
    <link rel="stylesheet" href="/styles/list.css">

    <div class="container">
        <table class="table table-striped">
            <thead >
                <tr>
                    <th scope=col>Nome</th>
                    <th scope=col>Data de Nascimento</th>
                    <th scope=col>Sexo</th>
                    <th scope=col>CPF</th>
                    <th scope=col>Mais info.</th>
                    <th scope=col>Alterar</th>
                    <th scope=col>Excluir</th>
                </tr>

                <tbody>
                    @foreach ($users as $user)   
                    <tr>
                        <td>
                            <span>
                                {{ $user->name }}
                            </span>
                        </td>
                        
                        <td>
                            <span>
                                {{ date('d/m/Y', strtotime($user->birth)) }}
                            </span>
                        </td>
                        
                        <td>
                            <span>
                                {{ $user->gender }}
                            </span>
                        </td>
                        
                        <td>
                            <span>
                                {{ $user->cpf }}
                            </span>
                        </td>
                        
                        <td>
                            <span>
                                <a href="/info/{{$user->id}}" class="btn btn-outline-info">Mais info <i class="fas fa-plus icon"></i></a>
                            </span>  
                        </td>
                        
                        <td>
                            <span>
                                <a href="/edit/{{$user->id}}" class="btn btn-outline-warning">Alterar <i class="fas fa-edit icon"></i></a>
                            </span>
                        </td>
                        
                        <td>
                            <form action="/{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-user-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    @endsection