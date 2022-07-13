<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    @if (session('status'))
                        <h4 class="alert alert-success">{{ session('status') }}</h4>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                ADD NEW STUDENT
                                <a href="{{ url('students') }}" class="btn btn-info float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group md-3">
                                    <label for="name">Student Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div><br>

                                <div class="form-group md-3">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div><br>

                                <div class="form-group md-3">
                                    <label for="phone_no">Phone No.</label>
                                    <input type="text" name="phone_no" class="form-control">
                                </div><br>

                                <div class="form-group md-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div><br>

                                <div class="form-group md-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div><br>

                                <div class="form-group md-3">
                                    <button type="submit" class="btn btn-primary">Save Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
