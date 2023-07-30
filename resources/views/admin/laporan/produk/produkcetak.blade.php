<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Laporan Produk</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #f7b045; /* Warna Orange Cerah (#FFD79D) */
            padding: 20px;
            color: #fff;
            display: flex;
            align-items: center;
        }
        .logo img {
            max-width: 100px;
        }
        .company-info {
            margin-left: 20px;
        }
        h1 {
            font-size: 1.5em;
            margin: 0;
        }
        main {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px; /* Ukuran font untuk seluruh tabel */
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f7b045; /* Warna Orange Cerah (#FFD79D) untuk header kolom */
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #ffca98; /* Warna oranye muda untuk baris genap */
        }
        tfoot {
            font-weight: bold;
            background-color: #f7b045; /* Warna Orange Cerah (#FFD79D) untuk footer */
            color: #fff;
        }
        footer {
            text-align: right;
            margin-top: 20px;
            padding: 20px;
            background-color: #FFE5CC; /* Warna oranye muda untuk footer */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <div class="company-info">
            <h1>BUTIK IMUN</h1>
            <p>Jl. Amandit Rt.01 Desa Baroqah, Simpang Empat, Tanah Bumbu, Kalimantan Selatan 72213</p>
            <p>Website : www.inboutique.com | Email : inboutique@gmail.com</p>
        </div>
    </header>

    <main>
        <h2 class="title">Laporan Produk</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Nama Toko</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga Satuan</th>
                    <th>Total Terjual</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($jual as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->produk->kode }}</td>
                        <td>{{ $item->produk->namaproduk }}</td>
                        <td>{{ $item->produk->users->nama_toko }}</td>
                        <td>{{ $item->produk->kategori->kategori }}</td>
                        <td>{{ $item->produk->stokproduk }}</td>
                        <td>{{ $item->produk->hargaproduk }}</td>
                        <td>{{ $item->total_sold }}</td>


                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" style="text-align: right;">Total Produk:</td>
                    <td>{{$jual->count()}}</td>
                </tr>

            </tfoot>
        </table>
    </main>

    <footer>
        <p>Toko Butik Imun, <?php echo date('d F Y'); ?></p>
        <p>Hormat Kami,</p>
        <p>Admin Toko</p>
    </footer>
</body>
</html>
