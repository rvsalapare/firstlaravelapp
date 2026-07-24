<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mean - Taylor Swift</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #7b3fbf;
            --primary-hover: #632ea1;
            --primary-light: #f3ebfc;
            --bg-color: #f8f6fc;
            --card-bg: #ffffff;
            --text-main: #2d2a32;
            --text-muted: #666070;
            --shadow: 0 10px 30px -5px rgba(123, 63, 191, 0.08);
            --radius: 16px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            background-color: var(--card-bg);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        nav {
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.5rem 0.85rem;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        nav a:hover {
            color: var(--primary);
            background-color: var(--primary-light);
        }

        main {
            width: 100%;
            max-width: 680px;
            padding: 2.5rem 1.5rem;
            flex: 1;
        }

        main h1 {
            text-align: center;
            color: var(--primary);
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        main p {
            background-color: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid rgba(123, 63, 191, 0.08);
            white-space: pre-line;
            text-align: center;
            font-size: 1.05rem;
            color: var(--text-main);
        }

        footer {
            margin-top: auto;
            padding: 1.5rem;
            text-align: center;
            font-size: 0.875rem;
            color: var(--text-muted);
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

</body>
</html>