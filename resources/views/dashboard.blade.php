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
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-5" role="alert">
            <strong>{{ $message }}</strong> Silahkan daftarkan subdomain kamu..
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible mt-5" role="alert">
            <strong>{{ $message }}</strong> Silahkan cari subdomain lagi.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card mt-5 text-center">
            <div class="card-header">
                Cek subdomain kamu disini
            </div>
            <div class="card-body">
                <div class="container overflow-hidden">
                    <form action="{{ route('cek') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-2">
                                <label for="subdomain" class="col-form-label">Subdomain</label>
                            </div>
                            <div class="col-8">
                                <input type="text" id="subdomain" class="form-control @error('cek') is-invalid @enderror" aria-describedby="subdomain" name="cek" value="{{ old('subdomain') }}">
                                @error('cek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <label for="label" class="form-control bg-light">.mysch.web.id</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Cek</button>
                        <a href="{{ route('tambah-sub') }}" class="btn btn-success mt-3">Tambah Subdomain</a>
                    </form>
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
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if(count($data) === 0)
                <tr>
                    <th colspan="4" class="text-center">Tidak Ada Data.</th>
                </tr>
                @else
                @php($no = 1)
                @foreach ($data as $sub)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $sub->subdomain }}</td>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->email }}</td>
                    <td><a href="http://{{ $sub->subdomain }}.mysch.web.id" target="_blank">Buka Subdomain</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>