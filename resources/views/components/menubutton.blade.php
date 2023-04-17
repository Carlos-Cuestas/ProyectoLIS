@props(['href' => null, 'src' => null, 'mesaje' => '', 'styler'=> '', 'classs'=>''])
<div style="{{$styler}}" class="{{$classs}}">
    <a href="{{$href}}">
        <button type="submit" class="btn btn-light">
            <img src="{{ $src }}" height="135px" width="175px"/>
            <p>{{$mesaje}}</p>
        </button>
    </a>
</div>
