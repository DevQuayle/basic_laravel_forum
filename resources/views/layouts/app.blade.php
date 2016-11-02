<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css')  }}" rel="stylesheet">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css')  }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Zaloguj</a></li>
                            <li><a href="{{ url('/register') }}">Zarejestruj</a></li>
                        @else
                            @if(Auth::user()->role == 1)
                                <li><a href="{{ url('/users-list') }}">Lista użytkowników</a></li>

                            @endif
                                <li><a href="{{ url('/forum') }}">Forum</a></li>
                                <li><a  href="#" data-toggle="modal" data-target="#addTopic">Dodaj temat</a></li>

                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->role == 0)
                                        <li><a href="{{ url('/profile-edit') }}">Edytuj konto</a></li>
                                    @endif
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Wyloguj się
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if (Session::has('bad'))
            <div class="alert alert-danger card col-md-6 col-md-offset-3">
                {{ Session::get('bad') }}
            </div>
        @endif
        @if (Session::has('ok'))
            <div class="alert alert-success card col-md-6 col-md-offset-3">
                {{ Session::get('ok') }}
            </div>
        @endif


        @yield('content')
    </div>

    <!-- Scripts -->
    <link href="{{ asset('/js/flora/css/froala_editor.min.css')  }}" rel="stylesheet">
    <link href="{{ asset('/js/flora/css/froala_editor.pkgd.min.css')  }}" rel="stylesheet">
    <link href="{{ asset('/js/flora/css/froala_style.min.css')  }}" rel="stylesheet">

    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/char_counter.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/code_view.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/colors.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/emoticons.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/file.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/fullscreen.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/image.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/image_manager.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/line_breaker.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/quick_insert.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/table.css')}}">
    <link rel="stylesheet" href="{{ asset('/js/flora/css/plugins/video.css')}}">

    <script src="{{ asset('/js/app.js')  }}"></script>
    <script src="{{ asset('/js/flora/js/froala_editor.min.js')  }}"></script>
    <script src="{{ asset('/js/flora/js/froala_editor.pkgd.min.js')  }}"></script>

    <!-- Include Plugins. -->
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/align.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/char_counter.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/code_beautifier.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/code_view.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/colors.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/emoticons.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/entities.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/file.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/font_family.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/font_size.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/fullscreen.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/image.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/image_manager.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/inline_style.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/line_breaker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/link.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/lists.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/paragraph_format.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/paragraph_style.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/quick_insert.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/quote.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/table.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/save.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/url.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/flora/js/plugins/video.min.js')}}"></script>

    <!-- Include Language file if we want to use it. -->
    <script type="text/javascript" src="{{ asset('/js/flora/js/languages/pl.js')}}"></script>

    <script>
        $(function() {
            $('#edit').froalaEditor();
            $('#edit-editor').froalaEditor();

        });

    </script>

@if(!Auth::guest())
<!-- Modal -->
<div class="modal fade " id="addTopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 960px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Dodaj temat</h4>
            </div>
            <form action="{{ url('/add-topic') }}"  method="POST">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <label for=""> Nazwa tematu</label>
                    <input type="text" name="name" style="width: 100%;"> <br>
                    <label for=""> Krótki opis</label>
                    <input type="text" name="desc" style="width: 100%;">

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <div class="modal-footer">
                    <button  type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>
        </div>
    </div>
</div>
    @endif
</body>
</html>
