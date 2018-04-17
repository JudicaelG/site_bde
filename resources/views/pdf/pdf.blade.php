<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pdf</title>

    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Nom de Famille</th>
            <th>Prenom</th>
            <th>Email</th>
        </tr>

        @foreach($participants as $participant)
            <tr>
                <th>{{$participant->nom_de_famille}}</th>
                <th>{{$participant->prenom}}</th>
                <th>{{$participant->email}}</th>
            </tr>
        @endforeach
    </table>

</body>
</html>

