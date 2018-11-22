<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                        <a href="{{ url('edit') }}/{{$row->id}}">Edit</a>
                        <a href="{{ url('softdelete') }}/{{$row->id}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>