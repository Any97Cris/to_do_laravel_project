<x-layout>
    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progesso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png">
                13 de Dez
                <img src="/assets/images/icon-next.png">
            </div>
        </div>  
        <div class="graph_header-subtitle">Tarefa <b>3/6</b></div>  
        <div class="graph-placeholder" ></div>     
        
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>
        
        
    </section>
    <section class="list">
        <div class="list-header">
            <select name="" id="" class="list_header-select">
                <option value="1">Todas as Tarefas</option>
            </select>
        </div>
        <div class="task_list">
            @php
                $tarefas = [
                    ['id' => 1,'done' => false, 'titulo' => 'Primeira Tarefa', 'categoria' => 'Categoria 1'],
                    ['id' => 2,'done' => false, 'titulo' => 'Segundo Tarefa', 'categoria' => 'Categoria 2'],
                ]
            @endphp

            <x-tarefa :data=$tarefas[0]/>
            <x-tarefa :data=$tarefas[1]/>
            <x-tarefa :data=$tarefas[2]/>
        </div>
    </section>
</x-layout>