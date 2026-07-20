<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mean - Taylor Swift</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f4ff;
            color: #333;
            margin: 40px;
            line-height: 1.8;
        }

        h1 {
            text-align: center;
            color: #7b3fbf;
            border-bottom: 2px solid #7b3fbf;
            padding-bottom: 10px;
        }

        p {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            white-space: pre-line;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
    </nav>

    <main>
        {{ $slot }}
    </main>

</body>
</html>