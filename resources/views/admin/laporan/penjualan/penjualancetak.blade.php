<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Laporan Penjualan</title>
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
            font-size: 10px; /* Ukuran font untuk seluruh tabel */
        }
        th, td {
            padding: 8px; /* Mengurangi padding untuk melebar kolom */
            border-bottom: 1px solid #ddd;
            max-width: 100px; /* Menetapkan lebar maksimum kolom */
            white-space: nowrap; /* Menghindari wrap teks */
            overflow: hidden; /* Menghindari teks yang terpotong */
            text-overflow: ellipsis; /* Menampilkan ... jika teks terpotong */
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

        /* CSS untuk versi cetak */
        @media print {
            table {
                font-size: 10px;
            }
            th, td {
                max-width: none;
                white-space: nowrap;
                overflow: visible;
                text-overflow: unset;
            }
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
        <h2 class="title">Laporan Penjualan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Nama Toko</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga Produk</th>
                    <th>Total Harga</th>

                    <th>Status Pengiriman</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{ $item->transaction->tanggal }}</td>
                        <td>{{ $item->produk->users->nama_toko }}</td>
                        <td>{{ $item->produk->namaproduk }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->produk->hargaproduk }}</td>
                        <td>{{ $item->transaction->total_harga }}</td>
                        <td>{{ $item->status }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" style="text-align: right;">Total Penjualan :</td>
                    <td>{{$data->count() }}</td>

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
