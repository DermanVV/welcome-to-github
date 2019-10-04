<meta charset="UTF-8">
<?php
$users=[
    [1=>"данные пользователя1"],
    [2=>"данные пользователя2"],
    [3=>"данные пользователя3"],
    [4=>"данные пользователя4"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

    <title>Comments</title>
     <div class="card-header"><h4>Комментарии пользователей: </h4></div>

<p><!--данные пользователя1-->
<?php
foreach ($users as $user) {
    echo $user[1]  /*.'<br />'*/;
}
?>
</p>

<p><!--данные пользователя2-->
    <?php
    foreach ($users as $user) {
        echo $user[2] . '<br />';
    }
    ?>
</p>

<p><!--данные пользователя3-->
    <?php
    foreach ($users as $user) {
        echo $user[3] . '<br />';
    }
    ?>
</p>


</body>
</html>
