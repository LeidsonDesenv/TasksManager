@extends('..layouts.template')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4 bg-primary" style="background-color: #8eb4cb">
        <p style="text-align: center; font-size: 2em"><strong>Logar</strong></p>
        <form class="form-group" method="post" action=" {{ route("user.logar") }} ">
            
            <p>Email: <input class="form-control" type="email" name="email"/></p>
            <p>Senha: <input class="form-control" type="password" name="password"/></p>
            
            <input type="submit" class="form-control btn btn-success" name="Logar" />
            {{csrf_field()}}
        </form>
    </div>
    @if( isset($fail) )
        <div class="alert alert-danger">
            <p>{{ $fail }}</p>
        </div>
    @endif
</div>
@endsection
