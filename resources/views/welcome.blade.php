<!DOCTYPE html>
<html>
<head>
<title>Search functionality - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}
.title {
    font-size: 84px;
}
.container{
  position: absolute;
  top:50%;
  left:50%;
  margin-top: -200px;
  margin-left: -600px;
}
.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
</head>

<body>
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif
	<div class="container">
    <div class="content">
        <div class="title m-b-md">
            RO Database
        </div>
		<form action="/weapon.blade.php" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search RO"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Sample User details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>

</body>
</html>
