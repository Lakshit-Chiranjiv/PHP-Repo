<?php 
    //echo
    echo "Hi I am Lakshit\n";
    echo 5+7;
    echo(438.97);

    //print
    print "\nHi there";
    print(35);

    //print_r
    print_r('single');
    print_r([3,2,8]);

    //var_dump
    var_dump('Some string');
    var_dump([7,3,2]);

    //var_export
    var_export('Argentina');
    var_export([3,29,9]);
    var_export(42);
?>

<!-- in html render -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Heading 1'; ?></h1>
    <h2><?= 'heading 2' ?></h2>
</body>
</html>