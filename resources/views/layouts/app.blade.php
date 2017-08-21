<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="content">
      @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">{{$error}}</div>
        @endforeach
      @endif
      <div class="row">
        <div class="col-md-12">
          @yield('main')
        </div>
      </div>
    </div>
  </body>
</html>
