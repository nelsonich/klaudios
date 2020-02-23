@if(\Session::get('status'))
    <div id="messageAlert" class="alert alert-success" role="alert">
        @if(\Session::get('status') == "edit")
            {{ trans('form.successfullyEdited', [], \Session::get('locale')) }}
        @elseif(\Session::get('status') == "add")
            Successfuly Add
        @elseif(\Session::get('status') == "delete")
            Successfuly Delete
        @endif
    </div>
@endif
