<x-layout page="Editar Tarefa">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>  
    
    <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('tarefa.editar_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$tarefa->id}}" />
            {{-- Título --}}
            <x-form.text_input name="titulo" 
                               label="Título da Tarefa" 
                               required="required" 
                               value="{{$tarefa->titulo}}"
                               placeholder="Digite aqui o título da tarefa" />
            
            {{-- check tarefa --}}
            <x-form.check name="esta_feito" 
                          label="Tarefa Realizada?" 
                          checked="{{$tarefa->esta_feito}}" 
                          required="required"
                          />

            {{-- Data --}}
            <x-form.text_input type="datetime-local" 
                               name="due_data" 
                               label="Data da Tarefa" 
                               value="{{$tarefa->due_data}}"
                               required="required"/>
            
            {{-- Categoria --}}
            <x-form.select_input name="categoria_id" label="Categoria" required="required">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}"
                        @if ($categoria->id == $tarefa->id)
                            selected
                        @endif    
                    >{{$categoria->titulo}}</option>
                @endforeach
                
            </x-form.select_input>

            {{-- Descrição Tarefa --}}
            <x-form.textarea_input name="descricao" 
                                   label="Descrição" 
                                   required="required" 
                                   value="{{$tarefa->descricao}}"
                                   placeholder="Gigite a descrição da tarefa" />

            <x-form.btn_form submitTxt="Atualizar Tarefa" resetTxt="Limpar Campo"/>
            
        </form>
    </section>
   
</x-layout>