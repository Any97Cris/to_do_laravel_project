<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input id="{{$name}}" name="{{$name}}" 
    type="{{empty($type) ? 'text' : $type}}" 
    placeholder="{{$placeholder ?? ''}}" 
    value="{{$value ?? ''}}"
    requiered = "{{empty($requiered) ? 'requiered' : ''}}" />
</div>