<!DOCTYPE html>
<html lang ="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>URL Shortener</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body class="bg-gray-100">
{{$slot}}

</body>

</html>
