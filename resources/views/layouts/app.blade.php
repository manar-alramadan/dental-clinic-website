<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>{{ $title ?? 'عيادة د. راما الرمضان' }}</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body class="bg-white text-gray-800 antialiased">
  @yield('content')
</body>
</html>
