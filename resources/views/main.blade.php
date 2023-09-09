<!DOCTYPE html>
<html lang="en">

@include('includes/head')

<body>
@include('includes/topbar')
@include('includes/sidebar')

<main id="main" class="main">
@yield('content')
</main><!-- End #main -->


@include('includes/footer')
</body>

</html>
