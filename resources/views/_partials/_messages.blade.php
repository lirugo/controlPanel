@if(Session::has('flash_message_success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {!! session('flash_message_success') !!}
    </div>
@endif

@if(Session::has('flash_message_warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <strong>Warning:</strong> {!! session('flash_message_warning') !!}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif
