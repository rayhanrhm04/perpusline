<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts-user.head')

<body>
    <header>
       
    </header>
    @include('layouts-user.navbar')
    <div class="section">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('layouts-user.footer')
    @include('layouts-user.script')
</body>

</html>