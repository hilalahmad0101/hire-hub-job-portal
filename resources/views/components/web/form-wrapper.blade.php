@props(['action'])

<form method="post" action="{{ $action }}">
    @csrf
    {{ $slot }}
</form>
