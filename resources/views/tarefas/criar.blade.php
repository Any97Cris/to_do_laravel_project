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
            <x-form>
            
            
            <div class="inputArea">
                <label for="descricao">
                    Descrição
                </label>
                <textarea class="inputArea" name="" id="" cols="30" rows="10" placeholder="Digite a descrição da tarefa"></textarea>
            </div>

            <div class="inputArea">
                <button type="submit" class="btn btn-primary">
                    Criar
                </button>
            </div>
        </form>
    </section>
   
</x-layout>