<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            table{
                border-collapse: collapse;
            }
            table th,
            table td{
                border: 1px solid;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <table class="table-auto">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>created_at</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @forelse($users as $item)
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                    @empty
                    @endforelse
                </tr>
                </tbody>
            </table>

        </div>
    </body>
</html>
