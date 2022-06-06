<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>




    <div class="container" style="margin-top: 2%;">
        <div class="row align-items-stretch no-gutters contact-wrap">

            <form class="mb-5" method="post" action="{{route('crud.update',$data->id)}}">
                <h2 style="text-align:center ; margin-top: 5%;">Edit Information</h2>
                @csrf
                @method('PUT')
                <div class="row" style="padding-left: 10%; padding-right: 10%; padding-top: 5%;">
                    <div class="col-md-12 form-group ">
                        <input type="hidden" class="form-control" name="id" placeholder="Username" value="{{ $data->id }}" style="border:1px solid; border-radius: 10px;">
                    </div>
                    <div class="col-md-12 form-group ">
                        <input type="text" class="@error('name') is-invalid @enderror form-control" name="name" placeholder="Username" value="{{ $data->name }}" style="border:1px solid; border-radius: 10px;">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="@error('email') is-invalid @enderror form-control" name="email" placeholder="Email address" value="{{ $data->email }}" style="border:1px solid; border-radius: 10px;">
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" class="@error('phone') is-invalid @enderror form-control" name="phone" placeholder="Password" value="{{ $data->phone }}" style="border:1px solid; border-radius: 10px;">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="@error('address') is-invalid @enderror form-control" name="address" placeholder="Confirm password" value="{{ $data->address }}" style="border:1px solid; border-radius: 10px;">
                    </div>

                    <div class="col-md-12 form-group ">
                        <input type="submit" value="Update" class="btn btn-primary btn-lg btn-block rounded-3 py-2 px-4 mb-3 " style="border-radius: 10px;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>