@extends('templates.main')
@section('title', 'Crud Project')
@section('index')
    <link rel="stylesheet" href="/styles/list.css">

    <div class="container">

        <table class="table table-stripped">
            <thead>
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
                    <tr>
                      <td>
                        @foreach ($users as $user)
                            <p>{{ $user->name }}</p>
                        @endforeach
                      </td>

                      <td>
                        @foreach ($users as $user)
                            <p>{{ date('d/m/Y', strtotime($user->birth)) }}</p>
                        @endforeach
                      </td>

                      <td>
                        @foreach ($users as $user)
                            <p>{{ $user->gender }}</p>
                        @endforeach
                      </td>

                      <td>
                            @foreach ($users as $user)
                                <p>{{ $user->cpf }}</p>
                            @endforeach
                      </td>

                      <td>
                            @foreach ($users as $user)
                                <p><a href="/info/{{$user->id}}" class="btn btn-outline-info">Mais info <i class="fas fa-plus icon"></i></a></p>  
                            @endforeach
                      </td>

                      <td>
                        @foreach ($users as $user)
                            <p><a href="/edit/{{$user->id}}" class="btn btn-outline-warning">Alterar <i class="fas fa-edit icon"></i></a></p>
                        @endforeach
                      </td>
                      
                      <td>
                        @foreach ($users as $user)
                            <form action="/{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-user-times"></i></button>
                            </form>
                        @endforeach
                      </td>
                    </tr>
                </tbody>
            </thead>
        </table>
    </div>
@endsection