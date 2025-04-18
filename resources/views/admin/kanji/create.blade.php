<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kanji</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Inter', sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Form Container Styling */
        form {
            background: linear-gradient(135deg, #ffffff, #f9fafb);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        /* Form Heading */
        form h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1f2937;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        /* Labels */
        form label {
            font-weight: 600;
            color: #374151;
            display: block;
            margin-bottom: 0.5rem;
        }

        /* Input Fields */
        form input[type="text"],
        form select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background: #f9fafb;
            font-size: 1rem;
            color: #111827;
            transition: box-shadow 0.3s, border-color 0.3s;
        }

        form input[type="text"]:focus,
        form select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 4px rgba(59, 130, 246, 0.5);
            outline: none;
        }

        /* Dropdown Styling */
        form select {
            cursor: pointer;
        }

        /* Submit Button */
        form button[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 8px;
            background: #3b82f6;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        form button[type="submit"]:hover {
            background: #2563eb;
            transform: scale(1.02);
        }

        /* Button Press Effect */
        form button[type="submit"]:active {
            transform: scale(0.98);
        }

        /* Responsiveness */
        @media (max-width: 640px) {
            form {
                padding: 1.5rem;
            }

            form h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('admin.kanji.store') }}" method="POST">
        @csrf
        <h1>Tambah Kanji</h1>

        <label for="kanji">Kanji</label>
        <input type="text" id="kanji" name="kanji" placeholder="Masukkan karakter kanji" required>

        <label for="kunyomi">Kunyomi</label>
        <input type="text" id="kunyomi" name="kunyomi" placeholder="Contoh: かわ (kawa)">

        <label for="onyomi">Onyomi</label>
        <input type="text" id="onyomi" name="onyomi" placeholder="Contoh: セン (sen)">

        <label for="arti">Arti</label>
        <input type="text" id="arti" name="arti" placeholder="Contoh: sungai" required>

        <label for="level">Level</label>
        <select id="level" name="level" required>
            <option value="N1">N1</option>
            <option value="N2">N2</option>
            <option value="N3">N3</option>
            <option value="N4">N4</option>
            <option value="N5">N5</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
