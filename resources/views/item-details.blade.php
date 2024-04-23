<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Item Menu</title>
</head>
<body>
    <h1>Detail Item Menu</h1>
    <div>
        <h2>{{ $item['makanan'] }}</h2>
        <p>Harga: Rp {{ $item['harga'] }}</p>
    </div>
    <a href="/list-menu">Kembali ke Daftar Menu</a>
</body>
</html>
