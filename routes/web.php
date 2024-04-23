<?php

use Illuminate\Support\Facades\Route;

Route::get('list-menu', function() {
    $menuItems = [
        ["makanan" => "Soto Mie", "harga" => 8000],
        ["makanan" => "Bakso Malang", "harga" => 13000],
        ["makanan" => "Ketoprak", "harga" => 15000],
    ];

   
    return view('menu', ['menuItems' => $menuItems]);
});

Route::get('list-menu/{itemId}', function($itemId) {
    // Ambil item menu spesifik berdasarkan ID yang diberikan
    // Asumsikan data dimasukkan secara manual
    $menuItems = [
        ["id" => 1, "makanan" => "Soto Mie", "harga" => 8000],
        ["id" => 2, "makanan" => "Bakso Malang", "harga" => 13000],
        ["id" => 3, "makanan" => "Ketoprak", "harga" => 15000],
    ];

    $selectedItem = $menuItems[$itemId - 1];


    return view('item-details', ['item' => $selectedItem]);
});

Route::get('list-menu/{itemId}/confirmation', function($itemId) {
});

