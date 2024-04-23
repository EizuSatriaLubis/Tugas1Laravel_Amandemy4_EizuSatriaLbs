<!-- resources/views/menu.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
</head>
<body>
    <h1>Daftar Menu</h1>
    <p>Ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy</p>
    <ul>
        @foreach($menuItems as $menuItem)
        <li>
            <strong>{{ $menuItem['makanan'] }}</strong> - Harga: Rp {{ $menuItem['harga'] }}
        </li>
        @endforeach
    </ul>
</body>
</html>
