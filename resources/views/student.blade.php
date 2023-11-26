<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BECamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

    <h1 class="text-center mb-5 mt-5">List of BECamp Students</h1>

   <div class="container">
        <a href="/add"><button type="button" class="btn btn-success mb-3">Tambah <i class="bi bi-plus-circle ms-2"></i></button></a>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No.Registration</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->no_registration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->city }}</td>
                        <td>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a> 
                            <a href="/{{ $row->id }}" class="btn btn-warning">Edit</a> 
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>