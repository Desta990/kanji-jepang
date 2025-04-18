<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kanji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #333333;
            font-family: Arial, sans-serif;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .kanji-box {
            font-size: 4rem;
            font-weight: bold;
            background-color: #f8f9fa;
            color: #333333;
            border: 2px solid #dddddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .kanji-box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #000000;
            text-align: center;
            margin-bottom: 30px;
        }

        .list-group-item {
            background-color: #f8f9fa;
            color: #333333;
            border: 1px solid #dddddd;
            padding: 15px;
            margin-bottom: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #e9ecef;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background-color: #000000;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: #000000;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <main class="container mt-5">
       
        <div class="p-5 rounded shadow-sm" style="background-color: #dae0e6;">
            <h2>Detail Kanji</h2>
            <div class="row">
              
                <div class="col-md-6 text-center">
                    <div class="kanji-box">
                        {{ $kanji->kanji }}
                    </div>
                </div>

               
                <div class="col-md-6">
                    <div class="list-group">
                        <div class="list-group-item">
                            <strong>Kanji:</strong> {{ $kanji->kanji }}
                        </div>
                        <div class="list-group-item">
                            <strong>Arti:</strong> {{ $kanji->arti }}
                        </div>
                        <div class="list-group-item">
                            <strong>Onyomi:</strong> {{ $kanji->onyomi }}
                        </div>
                        <div class="list-group-item">
                            <strong>Kunyomi:</strong> {{ $kanji->kunyomi }}
                        </div>
                       
                    </div>
                </div>
            </div>

    
            <div class="text-center mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
