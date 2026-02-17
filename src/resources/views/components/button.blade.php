{{-- style 속성 대신 class를 사용하면 에디터가 조용해집니다 --}}
@php
    $classes = [
        'primary' => 'btn-blue',
        'danger' => 'btn-red',
    ][$type] ?? 'btn-blue';
@endphp

<button class="base-style {{ $classes }}">
    {{ $slot }}
</button>
