@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-normal text-success']) }}>
        {{ $status }}
    </div>
@endif
