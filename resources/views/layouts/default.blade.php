<!doctype html>
<html lang="en">

@include('includes.head')
// body in layout
<body>
<div class="container">
    <header>
        @include('includes.menu')
    </header>
    <main role="main">
        @yield('content')
    </main>
    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>