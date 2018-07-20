<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('css')
    </head>
    <body>
        <!-- start of the page content -->
        <div class="master-container">
            <div class="row" style="padding: 0; margin: 0;">
                @yield('content')
            </div>
        </div>
        @include('scripts')
    </body>
</html>
