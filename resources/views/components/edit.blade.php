<form
    method="post"
    action="{{ $route }}"
    @if (isset($files) && $files)
        enctype="multipart/form-data"
    @endif
>
    @csrf

    @method('PUT')

    {{ $slot }}
</form>
