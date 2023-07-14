{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORM</title>
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="card mb-1">
            <div class="card-body">
                <div class="form-responsive">
                    <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">

                            <label for="name" class="col-sm-2 col-form-label">Description </label>
                            <div class="col-sm-8">
                                <input type="text" name="description" class="form-control" placeholder=""
                                    autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">

                            <label for="" class="col-sm-2 col-form-label">Qty</label>
                            <div class="col-sm-8">
                                <input type="text" name="qty" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-8">
                                <input type="text" name="unit" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-8">
                                <input type="text" name="price" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Simpan</button>
                            <a class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                                href="{{ route('form.index') }}" role="button">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
 --}}

@extends('layout.app')

@section('content')
ping
@endsection
