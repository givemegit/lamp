<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials._head')
<body>
    <div id="app">
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
