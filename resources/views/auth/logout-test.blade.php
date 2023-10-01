<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>jancok</h1>
  <form method="POST" action="{{ route('test.logout') }}">
    @csrf
    <a href="{{ route('test.logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();" class="nav-link text-body font-weight-bold px-0">
      <i class="fa fa-user me-sm-1"></i>
      <span class="d-sm-inline d-none">Sign Out</span>
    </a>
  </form>
</body>

</html>