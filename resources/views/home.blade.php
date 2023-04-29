<x-layout>
    <x-slot:btn>
        <a href="{{route('tarefa.criar')}}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progesso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <a href="{{route('home', ['date' => $data_botao_anterior])}}">
                    <img src="/assets/images/icon-prev.png">
                </a>
               {{  $dataSlide  }}
                <a href="{{route('home', ['date' => $data_botao_proximo])}}">
                    <img src="/assets/images/icon-next.png">
                </a>
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
            <select name="" id="" class="list_header-select" onchange="mudarEstatosTarefa(this)">
                <option value="toda_tarefa">Todas as Tarefas</option>
                <option value="tarefa_pendente">Tarefas Pendentes</option>
                <option value="tarefa_realizada">Tarefas Realizadas</option>
            </select>
        </div>
        <div class="task_list">            
            @foreach ($tarefas as $tarefa)
                <x-tarefa :data=$tarefa />
            @endforeach            
            
        </div>
    </section>

    {{-- JavaScript --}}
    <script>
        function mudarEstatosTarefa(e){
            if(e.value == 'tarefa_pendente'){
                //showTodasTarefas();
                document.querySelectorAll('.tarefa_realizada').forEach(function(element){
                    element.style.display = 'none';
                })
            }else if(e.value == 'tarefa_realizada'){
                showTodasTarefas()
                document.querySelectorAll('.tarefa_pendente').forEach(function(element){
                    element.style.display = 'none';
                })
            }else{
                showTodasTarefas();
            }
        }

        function showTodasTarefas(){
            
            document.querySelectorAll('.task').forEach(function(element){
                element.style.display = 'block';
            });
            
        }
    </script>
    <script>
        async function tarefaUpdate(element){
            let status = element.checked;
            let tarefaId = element.dataset.id;
            let url = '{{route('tarefa.update')}}'
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({status, tarefaId, _token: '{{csrf_token()}}'})
            });
            resultado = await rawResult.json();
            if(resultado.success){
                alert('Tarefa Atualizada com Sucesso!');
            }else{
                element.checked = !status;
            }
        }
    </script>
</x-layout>