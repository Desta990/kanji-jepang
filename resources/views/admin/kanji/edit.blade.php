<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kanji</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
     
        body {
            font-family: 'Inter', sans-serif;
            background: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

      
        form {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

   
        form h1 {
            font-size: 2.2rem;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 1.5rem;
        }

      
        form label {
            font-weight: 600;
            color: #34495e;
            display: block;
            margin-bottom: 0.5rem;
        }

    
        form input[type="text"],
        form select {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1.2rem;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            background: #ecf0f1;
            font-size: 1rem;
            color: #2c3e50;
            transition: all 0.3s ease;
        }

      
        form input[type="text"]:focus,
        form select:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }

      
        form button[type="submit"],
        form a {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

       
        form button[type="submit"] {
            background: #3498db;
            color: white;
            border: none;
        }

        form button[type="submit"]:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }

       
        form a {
            background: #95a5a6;
            color: white;
            margin-left: 10px;
            border: none;
        }

        form a:hover {
            background: #7f8c8d;
            transform: translateY(-2px);
        }

    
        .alert {
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }

        .alert-success {
            background-color: #2ecc71;
            color: white;
        }

        .alert-error {
            background-color: #e74c3c;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            form {
                padding: 1.5rem;
            }

            form h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    <form action="{{ route('admin.kanji.update', $kanji->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit Kanji</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <!-- Kanji Input -->
        <label for="kanji">Kanji</label>
        <input type="text" id="kanji" name="kanji" value="{{ $kanji->kanji }}" placeholder="Masukkan karakter kanji" required>

        <!-- Kunyomi Input -->
        <label for="kunyomi">Kunyomi</label>
        <input type="text" id="kunyomi" name="kunyomi" value="{{ $kanji->kunyomi }}" placeholder="Contoh: かわ (kawa)">

        <!-- Onyomi Input -->
        <label for="onyomi">Onyomi</label>
        <input type="text" id="onyomi" name="onyomi" value="{{ $kanji->onyomi }}" placeholder="Contoh: セン (sen)">

        <!-- Arti Input -->
        <label for="arti">Arti</label>
        <input type="text" id="arti" name="arti" value="{{ $kanji->arti }}" placeholder="Contoh: sungai" required>

        <!-- Cara Baca Input -->
        <label for="cara_baca">Cara Baca</label>
        <input type="text" id="cara_baca" name="cara_baca" value="{{ $kanji->cara_baca ?? '' }}" placeholder="Masukkan cara baca kanji (contoh: sungai)" required>

        <!-- Level Dropdown -->
        <label for="level">Level</label>
        <select id="level" name="level" required>
            <option value="N1" {{ $kanji->level == 'N1' ? 'selected' : '' }}>N1</option>
            <option value="N2" {{ $kanji->level == 'N2' ? 'selected' : '' }}>N2</option>
            <option value="N3" {{ $kanji->level == 'N3' ? 'selected' : '' }}>N3</option>
            <option value="N4" {{ $kanji->level == 'N4' ? 'selected' : '' }}>N4</option>
            <option value="N5" {{ $kanji->level == 'N5' ? 'selected' : '' }}>N5</option>
        </select>

        <!-- Submit Button -->
        <button type="submit">Update Kanji</button>

        <!-- Back Button -->
        <a href="{{ route('admin.kanji.index') }}">Kembali</a>
    </form>

</body>
</html>

