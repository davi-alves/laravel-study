<!doctype html>
<html lang="pt-br" ng-app>
<head>
  <meta charset="UTF-8">
  <title>Laravel Study</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Davi Alves">

  @section('css')
    <!-- Le styles -->
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
    {{ HTML::style('styles/admin/custom.css')}}
    {{ HTML::style('packages/bootstrap/css/bootstrap-responsive.min.css')}}
  @show

  </head>
  <body>
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">

          <?php print View::make('layouts.admin._partials.menu') ?>

          <h1>{{ isset($title) ? "Admin - $title" : 'Admin'}}</h1>
        </div>

        @include('layouts.admin._partials.errors')

        @yield('content')

      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">By <a href="http://martinbean.co.uk">Davi Alves</a></p>
      </div>
    </div>

    @section('js')
      <!-- Le scripts -->
      <script>
        var Index = {};
      </script>
    @show

</body>
</html>
