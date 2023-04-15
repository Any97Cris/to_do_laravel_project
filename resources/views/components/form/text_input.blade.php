<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input id="{{$name}}" name="{{$name}}" 
    type="{{empty($type) ? 'text' : $type}}" 
    placeholder="{{$placeholder ?? ''}}" 
    value="{{$value ?? ''}}"
    required = "{{empty($required) ? 'required' : ''}}" />
</div>