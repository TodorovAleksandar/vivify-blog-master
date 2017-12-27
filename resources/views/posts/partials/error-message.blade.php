@if($errors->has($fieldTitle))
    <div class="alert alert-danger">
        @foreach($errors->get($fieldTitle) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif