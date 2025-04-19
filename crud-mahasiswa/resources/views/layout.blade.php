<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Mahasiswa</title>
</head>
<body>
    <h1>CRUD Mahasiswa Laravel</h1>
    <hr>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>
