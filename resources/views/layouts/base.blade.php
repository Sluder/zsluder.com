<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zachary Sluder</title>

        {{-- Styles --}}
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        @yield('styles')
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{ route('view.index') }}"><span class="accent">&#10094;</span> Sluder <span class="accent">/&#10095;</span></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" >Resume</a>
                            </li>
                            <li>
                                <a href="#">Skills</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="{{ route('view.contact') }}" class="{{ Route::is('view.contact') ? 'active' : '' }}">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <footer>
            <div class="container">
                <p>Copyright <span class="accent">&copy;</span> {{ date('Y') }} ZSluder.com</p>
            </div>
        </footer>

        {{-- Scripts --}}
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            if ({{ json_encode(!Route::is('view.index')) }}) {
                $('.navbar').addClass('fade-in');
            }

            $(window).scroll(function() {
                if ($(window).scrollTop() > 150){
                    $('.navbar').addClass('fade-in');
                } else {
                    $('.navbar').removeClass('fade-in');
                }
            });
        </script>

        @yield('scripts')
    </body>
</html>
