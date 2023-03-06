<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>alret</title>
</head>
<body>
    <div class="alret alret-{{ $class }} alret-dismissible fade show">
        <h4 class="alert-heading"><u>{{ $judul }}</u></h4>
        {{ $slot }}
        <button type="button" class="close" data-dismiss="alret">
            <span aria-hidden="true">&times;</span>

        </button>
    </div>
</body>
</html>