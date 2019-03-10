<div class="ui error message">
    @if($errors->any())
        <ul class="list">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>