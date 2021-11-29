@extends('templates.main')
@section('title', 'Crud Project')
@section('index')
    <link rel="stylesheet" href="/styles/list.css">

    <div class="container">
        <div class="content">
            <div class="list">
                <ul>
                    <div class="list-info">
                        <div class="name info">
                            <div class="title">
                                <li><h5>Nome</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <p>{{ $user->name }}</p>
                                @endforeach
                            </div>
                        </div>
    
                        <div class="birth info">
                            <div class="title">
                                <li><h5>Nascimento</h5></li>
                            </div>
                            
                            <div class="content">
                                @foreach ($users as $user)
                                    <p>{{ date('d/m/Y', strtotime($user->birth)) }}</p>
                                @endforeach
                            </div>
                        </div>
        
                        <div class="gender info">
                            <div class="title">
                                <li><h5>Sexo</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <p>{{ $user->gender }}</p>
                                @endforeach
                            </div>
                        </div>
    
                        <div class="cpf info">
                            <div class="title">
                                <li><h5>CPF</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <p>{{ $user->cpf }}</p>
                                @endforeach
                            </div>
                        </div>
    
                        <div class="show info">
                            <div class="title">
                                <li><h5>Mais Info.</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <p><a href="/info/{{$user->id}}"><i class="fas fa-plus"></i></a></p>  
                                @endforeach
                            </div>
                        </div>
    
                        <div class="update info">
                            <div class="title">
                                <li><h5>Alterar</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <p><a href="/edit/{{$user->id}}"><i class="fas fa-edit"></i></a></p>
                                @endforeach
                            </div>
                        </div>
    
                        <div class="delete info">
                            <div class="title">
                                <li><h5>Excluir</h5></li>
                            </div>
    
                            <div class="content">
                                @foreach ($users as $user)
                                    <form action="/{{$user->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fas fa-user-times"></i></button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection