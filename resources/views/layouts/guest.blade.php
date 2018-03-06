<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vue Examples | {{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/muldev/cms/muldevcms.css') }}">

</head>
<body>
<section id="norm" class="section">
{{--    @include('partials.nav')--}}
    <nav-bar></nav-bar>
    <div  class="container">
        <h1 class="title is-1">{{$title}}</h1>
        <div class="content">
            @yield('content-body')
        </div>
        @yield('content-footer')
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <a href="https://vuejs.org/">
                    <strong>Vue.js</strong>
                </a>
                Examples
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
            <p>
                <a href="https://github.com/muldev/vue.dev">Github vue.dev project</a>
            </p>
        </div>
    </div>
</footer>

<script src=" {{ asset('js/muldev/cms/normal-site.js') }}"></script>

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
</body>
</html>