

<?php
    $users = [
        [
            'name' => 'John',
            'age' => 25,
            'city' => 'New York'
        ],
        [
            'name' => 'Jane',
            'age' => 22,
            'city' => 'Paris'
        ],
        [
            'name' => 'Peter',
            'age' => 32,
            'city' => 'London'
        ]
    ];  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable de PHP</title>
</head>
<body>
    Holis

<script>
    let users = JSON.parse(' <?= json_encode($users) ?>');
    console.log(users);
</script>

<p>Mostrar Usuarios</p>
<ul>
    <?php foreach($users as $user): ?>
        <li><?= $user['name'] ?>, <?= $user['age'] ?>, <?= $user['city'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>