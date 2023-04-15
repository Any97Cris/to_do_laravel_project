<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>    
    <input type="checkbox" 
           id="{{$name}}" 
           name="{{$name}}"            
           value="1" 
           {{$checked ? 'checked' : ''}}          
           requiered = "{{empty($requiered) ? 'requiered' : ''}}">
</div>