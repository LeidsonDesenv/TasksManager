@extends('.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
        
        @if(isset($tasks))
            @foreach($tasks as $task)
            <div style="background-color: #FFFFFF ; margin-top: 5px; padding:10px; border : 1px solid #ccc ">
            <h2> {{ $task->name }}</h2>
            <p>Descrição: {{ $task->description }}</p>
            <p>Arquivos: {{ $task->archive_names }}</p>
            <p><strong>Autor:  {{ $task->author->name  }} </strong></p>            
            
            @can('update', $task)
                <form class="form-inline" action="{{ route("task.delete", ['id' => $task->id]) }}" method="post">


                    <input type="submit" value="Deletar" class="btn btn-danger" />
                    <a href="{{ route("task.showUpdate", ['id' => $task->id ]) }}" class="btn btn-primary">Editar</a>
                    {{ csrf_field() }}
                </form>
            @endcan
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
