<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Hello, <?php echo $name ?></h1>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="/tasks/{{ $task->id }}">
                        Zadanie: {{ $task->body }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
