<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Панель администратора "Новый сайт"</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }} ">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <p class="animation__shake">Идет загрузка "Студия Своременной Мебели"</p>
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" target="_blank" class="brand-link">
                <span class="brand-text font-weight-light">Новый сайт</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('seting.index') }}" class="nav-link">
                                <i class="fas fa-sliders-h"></i>
                                <p>
                                    Настройки страницы
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mainset.index') }}" class="nav-link">
                                <i class="fas fa-sliders-h"></i>
                                <p>
                                    Настройки сайта
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-photo-video"></i>
                                <p>
                                    Фото в слайдере
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('group.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Группы
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('post.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-window-maximize"></i>
                                <p>
                                    Статьи
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('message.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Заявки
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            @include('Component.errors')
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} <a href="{{ route('home') }}">Студия Совеременной
                    Мебели</a>.</strong>
            Все права защищены.
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        $(function() {
            if ($('.tags')) {
                $('.tags').select2()
            }

            if ($('.colors')) {
                $('.colors').select2()
            }

            bsCustomFileInput.init();
            if ($('.redactor')) {
                $('.redactor').summernote()
            }

            if ($('.redactor2')) {
                $('.redactor2').summernote()
            }
        })

    </script>

</body>

</html>
