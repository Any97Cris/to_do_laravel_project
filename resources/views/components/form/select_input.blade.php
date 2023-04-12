<div class="inputArea">
    <label for="{{$name}}">
        Categoria
    </label>
    <select id="{{$name}}" name="{{$name}}" requiered="{{empty($requiered) ? 'requiered' : ''}}">
        <option selected disabled name="Sele" value="">Categoria</option>
        {{$slot}}
    </select>
</div>