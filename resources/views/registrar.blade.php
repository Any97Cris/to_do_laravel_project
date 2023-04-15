<x-layout page="Registrar">
    <x-slot:btn>
        <a href="{{route('registrar')}}" class="btn btn-primary">
            Já possui conta? Faca conta
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>
        <form method="POST" action="{{route('registrar_action')}}">
            @csrf
            {{-- Título --}}
            <x-form.text_input name="name" 
                               label="Nome" 
                               required="required" 
                               placeholder="Digite o seu nome" />
            
            {{-- Email --}}
            <x-form.text_input type="email" 
                               name="email" 
                               label="E-mail" 
                               placeholder="Digite o seu e-mail" 
                               required="required"/>
            
           {{-- Senha --}}
           <x-form.text_input type="password" 
                              name="password" 
                              label="Senha" 
                              placeholder="Digite uma senha" 
                              required="required"/>
            
            {{-- Senha --}}
           <x-form.text_input type="password" 
                              name="password_confirmation" 
                              label="Confirmar senha" 
                              placeholder="Confirmar senha" 
                              rsequired="required"/>

            <x-form.btn_form submitTxt="Registrar-se" resetTxt="Limpar Campo"/>
            
        </form>
    </section>
</x-layout>