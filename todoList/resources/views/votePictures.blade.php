<!DOCTYPE html>
VOTE ON PICTURES
<li><a href="{{ url('/home') }}">Home</a></li>

<div>
    <span>
        @if($next ?? '')
            <div>
                <a href="{{route('index', $next)}}">Next</a>
            </div>
        @endif

        @if($previous)
            <div>
                <img src="{{ asset('/storage/product/' .$listItems->file_path ) }}"/>
            </div>
                <a href="{{route('index', $previous)}}">Previous</a>
        @endif
    </span>
</div>

