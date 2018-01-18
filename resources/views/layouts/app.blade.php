<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!--Head-->
    @include('_partials._head')

<body>
    <div id="app">

        <!--Menu-->
        @include('_partials._menu')

        <!--Flash messages-->
        @include('_partials._messages')

        <!--Content-->
        @yield('content')

        <!--Footer-->
        @include('_partials._footer')

    </div>

    <!-- Java script -->
    @include('_partials._javascript')

    <!-- Scripts -->
    @yield('scripts')


</body>
</html>
