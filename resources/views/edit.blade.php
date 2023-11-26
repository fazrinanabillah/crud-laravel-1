<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BECamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
               -webkit-appearance: none;
                margin: 0;
        }
 
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>

    <h1 class="text-center mb-5 mt-5">Edit Student</h1>

   <div class="container">
       <div class="row justify-content-center">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }};
              </div>              
        @endif
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="no_registration" class="form-label">No. Registration</label>
                              <input type="text" class="form-control" id="no_registration" name="no_registration" value="{{ $data->no_registration }}">

                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">

                              <label for="gender" class="form-label">Gender</label>
                              <select class="form-select form-select-sm" aria-label="Small select example" id="gender" name="gender">
                                <option selected value="{{ $data->gender }}">Select a gender...</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                              </select>

                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ $data->email }}">

                              <label for="phone" class="form-label">Phone</label>
                              <input type="number" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">

                              <label for="city" class="form-label">City</label>
                              <input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
       </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>