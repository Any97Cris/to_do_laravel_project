<div class="task">    
    <div class="title">
        <input type="checkbox" 
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