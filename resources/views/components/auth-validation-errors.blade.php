@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="fw-normal text-danger">
            {{ __('Whoops! Something went wrong.') }}
        </div>
        <br />
        <ul class="text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
