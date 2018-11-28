<div class="container">
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

      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
      </tr>

    </tbody>
  </table>

  <p>{{ $message }}</p>

</div>
