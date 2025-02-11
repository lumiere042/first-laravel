<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"> -->
    <title>Document</title>
</head>
<body>
    <main>
    <div class="container">
        
        <div class="row">
    <button class="btn btn-info">Add Inventory</button>
    <table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <button class="btn btn-info btn-sm">Edit</button>
        <button class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>
        <button class="btn btn-info btn-sm">Edit</button>
        <button class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>
        <button class="btn btn-info btn-sm">Edit</button>
        <button class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    


    </main>
</body>
</html>