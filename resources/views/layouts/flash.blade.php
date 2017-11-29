@if ($flash = session('message'))
    <div class="alert alert-success" id="flash-notification">
        {{ $flash }}
    </div>
@endif