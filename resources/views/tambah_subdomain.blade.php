<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tambah Sub Domain</title>
</head>

<body>
    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-5" role="alert">
            <strong>Selamat!</strong> Subdomain berhasil ditambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card mt-5">
            <div class="card-header">
                Tambah Subdomain Kamu
            </div>
            <div class="card-body">
                <div class="container overflow-hidden">
                    <div class="row">
                        <form action="{{ route('store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="subdomain" class="form-label">Subdomain</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-10">
                                        <input type="text" id="subdomain" name="subdomain" class="form-control @error('subdomain') is-invalid @enderror" aria-describedby="subdomain" value="{{ old('subdomain') }}">
                                        @error('subdomain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-2">
                                        <span id="label" class="form-text">
                                            .mysch.web.id
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>