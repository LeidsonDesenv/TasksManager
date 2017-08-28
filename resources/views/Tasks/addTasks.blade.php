@extends('.layouts.template')
@section('title')
   - Nova Tarefa
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"
         @if(isset($update))
            style="background-color: #ffe8c4">
            <form class="form-group" style="padding: 5px" method="post" action="{{ route("task.update") }}">
                <input  type="hidden" name="id" value="{{ $update->id }}"/>
         @else
            style="background-color: #c7ddef">
             <form class="form-group" style="padding: 5px" method="post" action="{{ route("task.addnew") }}">
         @endif
        
            <label >Nome da Tarefa:</label> 
                <input name="task" type="text" class="form-control"
                     value="{{ $update->name or '' }}" />
            <label >Prioridade:</label>
                <input name="priority" type="number" class="form-control" min="1" max="5"
                       value="{{ $update->priority or '' }}" />
                <label >Descrição: </label>
                <textarea name="description" class="form-control">
                        {{ $update->description or '' }}
                </textarea>
            <label >Arquivos: </label>
            
                @if(isset($update))
                    <textarea class="form-control" name="files" readonly>{{$update->archive_names}}</textarea> 
                @else
                <input name="arquivos[]" class="form-control" type="file" multiple />
                @endif
                
            <input class="form-control btn btn-primary" type="submit" style="margin-top: 3px"
                @if(isset($update))
                    value="Atualizar"
                @endif
                   />
            {{csrf_field()}}
                
        </form>
    </div>
</div>

@endsection
