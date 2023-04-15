<div class="inputArea">
    <label for="{{$name}}">
        Categoria
    </label>
    <select id="{{$name}}" name="{{$name}}" required="{{empty($required) ? 'required' : ''}}">
        <option selected disabled name="Sele" value="">Categoria</option>
        {{$slot}}
    </select>
</div>