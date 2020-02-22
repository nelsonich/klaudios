@if(\Session::get('status'))
    <div id="messageAlert" class="alert alert-success" role="alert">
        @if(\Session::get('status') == "edit")
            Successfuly Edit
        @elseif(\Session::get('status') == "add")
            Successfuly Add
        @elseif(\Session::get('status') == "delete")
            Successfuly Delete
        @endif
{{--        <span class="closeAlert">&times;</span>--}}
    </div>
@endif
