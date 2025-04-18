@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="page-title">Aktivitas Login Pengguna</h1>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Alamat IP</th>
                    <th>Waktu Login</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activityLogs as $log)
                    <tr>
                        <td>{{ $log->user->name }}</td>
                        <td>{{ $log->ip_address }}</td>
                        <td>{{ $log->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    /* Gaya Global */
    body {
        font-family: 'Helvetica', sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        width: 95%;
        max-width: 1200px;
        margin: 3rem auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 2rem;
        text-align: center;
    }

    /* Gaya Tabel */
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table thead {
        background-color: #1abc9c;
        color: #ffffff;
    }

    .table th, .table td {
        padding: 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table tbody tr {
        background-color: #ffffff;
        transition: background-color 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: #ecf0f1;
    }

    .table th {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1rem;
    }

    .table td {
        font-size: 1rem;
        color: #34495e;
    }

    /* Efek Hover */
    .table tbody tr:hover td {
        color: #16a085;
    }

    /* Desain Responsif */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9rem;
        }

        .table th, .table td {
            padding: 10px 12px;
        }
    }
</style>
