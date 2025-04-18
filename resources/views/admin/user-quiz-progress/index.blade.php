@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="page-title">Progres Kuis Pengguna</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>ID Kuis</th>
                    <th>Skor</th>
                    <th>Terbaru</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userProgress as $progress)
                    <tr>
                        <td>{{ $progress->user->name }}</td>
                        <td>{{ $progress->quiz_id }}</td>
                        <td>{{ $progress->score }}</td>
                        <td>{{ $progress->updated_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    /* Gaya Global */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 2rem auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    /* Gaya Tabel */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
    }

    .table thead {
        background-color: #3498db;
        color: white;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table tbody tr {
        background-color: #ffffff;
        transition: background-color 0.3s;
    }

    .table tbody tr:hover {
        background-color: #ecf0f1;
    }

    .table th {
        font-weight: 600;
        text-transform: uppercase;
    }

    .table td {
        font-size: 1rem;
        color: #34495e;
    }

    /* Efek Hover */
    .table tbody tr:hover td {
        color: #2980b9;
    }

    /* Desain Responsif */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9rem;
        }

        .table th, .table td {
            padding: 8px 10px;
        }
    }
</style>
