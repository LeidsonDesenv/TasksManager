@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-2">
        <div class="thumbnail custom-thumbnail">
            <a href="{{ route("task.showadd") }}">
                <img src="{{url("img/send.png")}}" style="height: 130px"  />
            </a>
            <p class="custom-title">Nova Tarefa</p>
        </div>
    </div>   
    <div class="col-md-4">
        <a href="{{ route("task.show")}}">
        <div class="thumbnail custom-thumbnail" >
            <img src="http://pt.seaicons.com/wp-content/uploads/2015/06/Files-View-File-icon.png" style="height: 130px"/>
        </a>
            <p class="custom-title">Gerenciar Tarefas</p>
        </div>
    </div>    
</div>

@endsection

