<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4">
        <h1 class="text-3xl font-semibold text-center mb-6 bg-gray-200 py-2">Daftar Barang</h1>
        <table class="w-full border-collapse border border-gray-300 bg-white shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border border-gray-300">No.</th>
                    <th class="px-4 py-2 border border-gray-300">Nama Barang</th>
                    <th class="px-4 py-2 border border-gray-300">harga</th>
                    <th class="px-4 py-2 border border-gray-300">stok</th>
                    <th class="px-4 py-2 border border-gray-300">id supplier</th>
                    <th class="px-4 py-2 border border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
    @foreach ($barang as $key => $item)
        <tr>
            <td class="px-4 py-2 border border-gray-300">{{ $key + 1 }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $item->nama_barang }}</td>
            <td class="px-4 py-2 border border-gray-300">@rupiah($item->harga)</td>
            <td class="px-4 py-2 border border-gray-300">{{ $item->stok }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $item->id_supplier }}</td>
            <td class="px-4 py-2 border border-gray-300">
                <!-- Tambahkan tombol aksi di sini -->
            </td>
        </tr>
    @endforeach
</tbody>
            