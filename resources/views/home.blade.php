<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dasboard</h3>
                </div>
                <!-- {{ Auth::user()->name }} -->
                <div class="card-body">
                    <h5>Selamat datang di halaman Utama, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>

                <div class="card-body">
                <label>Master Barang</label>
                <a href="{{ route('master.create') }}" class="btn btn-primary float-right">+</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                        </tr>
                        @foreach($master_barang as $mb)
                        <tr>
                            <td>{{ $mb->kode_barang }}</td>
                            <td>{{ $mb->nama_barang }}</td>
                            <td>{{ $mb->qty }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/master/edit/{{ $mb->kode_barang }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/master/delete/{{ $mb->kode_barang }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    @if(Auth::user()->role != 'admin')
                        <table class="table table-bordered">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                            </tr>
                            @foreach($pembelian_barang as $pb)
                            <tr>
                                <td>{{ $pb->kode_barang }}</td>
                                <td>
                                <!-- {{ $pb->nama_barang }} -->
                                </td>
                                <td>{{ $pb->qty }}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>