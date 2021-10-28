
@if (Session::has('success'))
    <div class="content">
        <div class="alert alert-success" role="alert">
            <strong>Success:</strong> {{ Session::get('success') }}
        </div>

    </div>
@elseif (Session::has('error'))
    <div class="content">
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>

    </div>
@endif



@if (count($errors) > 0)
    <div class="content">
        <div class="alert alert-danger" role="alert">
            <strong>Errors:</strong>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>

    </div>


@endif