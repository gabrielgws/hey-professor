@props([
    'action',
    'post' => null,
    'put' => null,
    'delete' => null
])

<form action="{{ route('question.store') }}" method="post" class="mt-8">
    @csrf

    @if($put)
        @method('PUT')
    @endif

    @if($delete)
        @method('DELETE')
    @endif

    {{ $slot }}
</form>
