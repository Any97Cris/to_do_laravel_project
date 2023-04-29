<div class="task {{ $data['esta_feito'] ? 'tarefa_realizada' : 'tarefa_pendente' }}" >    
    <div class="title">
        <input type="checkbox" onchange="tarefaUpdate(this)" data-id="{{$data['id']}}"
        @if ($data && $data['esta_feito'])
            checked
        @endif
        />

        <div class="task_title">{{$data['titulo'] ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['categoria']->titulo ?? ''}}</div>
    </div>    
    <div class="action">
        <a href="{{route('tarefa.editar', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-edit.png" alt="icone_editar">
        </a>
        <a href="{{route('tarefa.excluir', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="icone_excluir">
        </a>
    </div>
</div>