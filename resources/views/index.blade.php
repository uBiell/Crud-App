@extends('templates.main')
@section('title', 'Crud Project')
@section('index')

    <link rel="stylesheet" href="/styles/index.css">
    
    <div class="content">
        <div class="list">
            <ul>
                <div class="list-info">
                    <div class="name">
                        <li><h5>Nome</h5></li>
                        @foreach ($users as $user)
                            <p>{{ $user->name }}</p>
                        @endforeach
                    </div>

                    <div class="birth">
                        <li><h5>Nascimento</h5></li>
                        @foreach ($users as $user)
                            <p>{{ date('d/m/Y', strtotime($user->birth)) }}</p>
                        @endforeach
                    </div>
    
                    <div class="gender">
                        <li><h5>Sexo</h5></li>
                        @foreach ($users as $user)
                            <p>{{ $user->gender }}</p>
                        @endforeach
                    </div>

                    <div class="cpf">
                        <li><h5>CPF</h5></li>
                        @foreach ($users as $user)
                            <p>{{ $user->cpf }}</p>
                        @endforeach
                    </div>

                    <div class="show">
                        <li><h5>Mais Info.</h5></li>
                        @foreach ($users as $user)
                            <p><a href=""><i class="fas fa-plus"></i></a></p>  
                        @endforeach
                    </div>

                    <div class="update">
                        <li><h5>Alterar</h5></li>
                        @foreach ($users as $user)
                            <p><a href=""><i class="fas fa-edit"></i></a></p>
                        @endforeach
                    </div>

                    <div class="show">
                        <li><h5>Excluir</h5></li>
                        @foreach ($users as $user)
                            <p><a href=""><i class="fas fa-user-times"></i></a></p>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endsection