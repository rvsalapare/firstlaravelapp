@props([
    'title' => 'Default Title'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
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
            --danger: #e53e3e;
            --danger-hover: #c53030;
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

        nav a.active,
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

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            gap: 1rem;
        }

        .page-title {
            text-align: center;
            color: var(--primary);
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .page-header .page-title {
            margin-bottom: 0;
        }

        .card {
            background-color: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid rgba(123, 63, 191, 0.08);
            color: var(--text-main);
            font-size: 1.05rem;
            margin-bottom: 1.5rem;
        }

        .card p {
            white-space: pre-line;
            text-align: left;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            text-align: left;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        label {
            font-weight: 600;
            color: var(--text-main);
            font-size: 0.95rem;
        }

        .required {
            color: var(--danger);
            margin-left: 0.15rem;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid rgba(123, 63, 191, 0.2);
            font-family: inherit;
            font-size: 1rem;
            background-color: #fff;
            color: var(--text-main);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .error-message {
            color: var(--danger);
            font-size: 0.85rem;
            font-weight: 500;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            font-family: inherit;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-primary {
            background-color: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-danger {
            background-color: var(--danger);
            color: #ffffff;
            padding: 0.4rem 0.8rem;
            font-size: 0.875rem;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
        }

        .songs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .song-card {
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .song-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        }

        .song-header {
            margin-bottom: 1rem;
            padding-right: 4rem;
        }

        .song-title {
            color: var(--primary);
            font-size: 1.3rem;
            margin: 0 0 0.5rem 0;
            font-weight: 600;
        }

        .song-artist {
            color: var(--text-muted);
            margin: 0;
            font-size: 0.9rem;
        }

        .song-lyrics-preview {
            flex-grow: 1;
            color: #555;
            margin: 1rem 0;
            font-size: 0.9rem;
            line-height: 1.6;
            overflow: hidden;
        }

        .song-actions {
            margin-top: auto;
            display: flex;
            gap: 0.75rem;
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        .delete-form {
            position: absolute;
            top: 1rem;
            right: 1rem;
            margin: 0;
        }

        .btn-delete {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.4rem 0.8rem;
            border: none;
            border-radius: 6px;
            background-color: transparent;
            color: var(--text-muted);
            font-family: inherit;
            font-weight: 600;
            font-size: 0.8rem;
            cursor: pointer;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .btn-delete:hover {
            background-color: rgba(229, 62, 62, 0.1);
            color: var(--danger);
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 1rem;
        }

        .modal.is-open {
            display: flex;
            animation: fadeIn 0.2s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            width: 100%;
            max-height: 85vh;
            overflow-y: auto;
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 2rem;
            border-bottom: 2px solid #f0f0f0;
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
        }

        .modal-header h2 {
            margin: 0;
            color: var(--primary);
            font-size: 1.6rem;
            flex-grow: 1;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.8rem;
            cursor: pointer;
            color: #999;
            padding: 0.5rem;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            transition: all 0.2s ease;
            margin-left: 1rem;
            flex-shrink: 0;
        }

        .modal-close:hover {
            background: #f0f0f0;
            color: #333;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-lyrics {
            white-space: pre-line;
            line-height: 1.8;
            color: #333;
            margin: 0;
            font-size: 0.95rem;
        }

        footer {
            margin-top: auto;
            padding: 2rem;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    @if (isset($footer))
        <footer>
            {{ $footer }}
        </footer>
    @endif

    <script>
        function openLyricsModal(songId) {
            const modal = document.getElementById('lyrics-modal-' + songId);
            if (!modal) return;
            modal.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeLyricsModal(songId) {
            const modal = document.getElementById('lyrics-modal-' + songId);
            if (!modal) return;
            modal.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.classList.remove('is-open');
                document.body.style.overflow = '';
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal.is-open').forEach(function (modal) {
                    modal.classList.remove('is-open');
                });
                document.body.style.overflow = '';
            }
        });
    </script>

</body>
</html>