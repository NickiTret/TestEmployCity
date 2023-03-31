{{-- @include('site.environment.head', ['setting' => $seting]) --}}
@include('site.environment.head')


<body class="page__body">
    <div class="site-container">
        {{-- @include('site.environment.header', ['mainset' => $mainset]) --}}
        @include('site.environment.header')

        <main class="main">
            <div class='container pt-3'>
                <div class="row">
                    <div class="col-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>

        {{-- @include('site.environment.footer', ['mainset' => $mainset, 'setting' => $seting]) --}}
        @include('site.environment.footer')
    </div>
</body>

</html>
