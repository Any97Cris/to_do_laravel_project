<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('registrar')}}" class="btn btn-primary">
            Registrar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Autenticação</h1>
        <form method="POST" action="{{route('login_action')}}">
            @csrf
            
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
            

            <x-form.btn_form submitTxt="Entrar" resetTxt="Limpar Campo"/>
            
        </form>
    </section>

</x-layout>