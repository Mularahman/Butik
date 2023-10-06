<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Laporan</title>
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
        <h2 class="title">Laporan Review</h2>
        <table class="table">
            <thead>
                <tr>

                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ulasan as $produk)
                @foreach ( $produk->ulasan as $ulasan)

               <tr>

                <td>{{$ulasan->ulasan}}</td>
                <td>{{$ulasan->tanggal}}</td>
                <td>{{$produk->namaproduk}}</td>
                </tr>
                @endforeach
                @endforeach

            </tbody>
            <tfoot>
            {{--  <tr>
                <td colspan="2" style="text-align: right;">Total Ulasan</td>
                <td>{{ $ulasan->count() }}</td>
            </tr>  --}}
            </tfoot>
        </table>
    </main>

    <footer>
        <p>{{Auth::user()->kota->kota}}, <?php echo date('d F Y'); ?></p>
        <p>Hormat Kami,</p>
        <p>{{Auth::user()->name}}</p>
    </footer>
</body>
</html>
