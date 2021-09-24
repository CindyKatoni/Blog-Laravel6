<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles and Abilities</title>
</head>
<body>
    <div>
        <h1>My Site</h1>

        @can('edit_forum')
        <li>
            <a href="">Edit Forum</a>
        </li>
        @endcan
    </div>
</body>
</html>