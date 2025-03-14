<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>
<body>
<div class="overflow-x-auto">
    Products:
    <table>
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        </thead>
        @foreach ($products as $product)
            <tbody>
                <tr>
                    <td> {{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
</div>
</body>
</html>