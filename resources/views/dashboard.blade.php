<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Cek Subdomain</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5 text-center">
            <div class="card-header">
                Cek subdomain kamu disini
            </div>
            <div class="card-body">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-2">
                            <label for="inputPassword6" class="col-form-label">Subdomain</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="subdomain" class="form-control" aria-describedby="subdomain">
                        </div>
                        <div class="col-2">
                            <label for="inputPassword6" class="form-control bg-light">.mysch.web.id</label>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-3">Cari</a>
                    <a href="{{ route('tambah-sub') }}" class="btn btn-success mt-3">Tambah Subdomain</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3>Subdomain sudah terdaftar</h3>
        <table class="table table-bordered mt-4">
            <thead>
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Subdomain</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>The Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>