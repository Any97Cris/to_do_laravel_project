<x-layout page="Criar Tarefa">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>  
    
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            {{-- Título --}}
            <x-form.text_input name="titulo" label="Título da Tarefa" requiered="requiered" placeholder="Digite aqui o título da tarefa" />
            
            {{-- Data --}}
            <x-form.text_input name="due_data" label="Data da Tarefa" requiered="requiered" type="date"/>
            
            {{-- Categoria --}}
            <x-form.select_input name="categoria" label="Categoria" equiered="requiered">
                <option>Valor qualquer</option>
            </x-form.select_input>

            {{-- Descrição Tarefa --}}
            <x-form.textarea_input name="descricao" label="Descrição" equiered="requiered" placeholder="Gigite a descrição da tarefa" />

            <x-form.btn_form submitTxt="Criar Tarefa" resetTxt="Limpar Campo"/>
            
        </form>
    </section>
   
</x-layout>