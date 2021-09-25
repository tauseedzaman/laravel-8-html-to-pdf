<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Laravel 8 DomPDF Test</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto ">
                <h1 class="text-center text-capitalized text-success py-3">Laravel 8 DomPDF Test</h1>
            </div>
            <div class="col mx-auto    ">
                    <table class="table table-light table-full table-hoverable table-bordered">
                        <thead class="bg-info">
                            <th># </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Birth Data</th>
                        </thead>
                        <tbody>
                           @foreach ($employee as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->dob }}</td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>
