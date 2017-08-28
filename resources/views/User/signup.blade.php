@extends('..layouts.template')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4 bg-primary" style="background-color: #8eb4cb">
        <p style="text-align: center; font-size: 2em"><strong>Registre-se</strong></p>
        <form class="form-group" method="post" action="{{ route("user.signup") }}">
            <p>Nome: <input class="form-control" type="text" name="name"/></p>
            <p>Email: <input class="form-control" type="email" name="email"/></p>
            <p>Senha: <input class="form-control" type="password" name="password"/></p>
            <p>Repetir Senha: <input class="form-control" type="password" name="confirm"></p>
            <input type="submit" class="form-control btn btn-success" name="Cadastrar" />
            {{csrf_field()}}
        </form>        
        @if( count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach( $errors->all() as $erro )
                <li> {{ $erro }} </li>
            @endforeach
            </ul>
        </div>
        @endif
        @if( isset($fail) )
        <div class="alert alert-danger">
            <p>{{ $fail }}</p>
        </div>
        @endif
        
    </div>    
</div>
@endsection
