<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab_3</title>
</head>
<body>
    <h1>Laboratory work 3</h1>
    <h2>IA-301k Shvydenko Dmytro</h2>
    <?php
    //read json file
    $readJson = file_get_contents(filename: 'quest.json');
    echo '<pre>';
    print_r($readJson);
    echo '</pre>';
    ?>
</body>