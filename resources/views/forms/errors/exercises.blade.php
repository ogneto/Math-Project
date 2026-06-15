@if ($errors->any())
    <div class="alert alert-danger w-50 text-center m-auto">
        {{ $errors->first() }}
    </div>
@endif