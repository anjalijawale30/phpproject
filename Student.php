<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        hello
        <?php
        $conn= mysqli_connect("localhost:3306","root","root");
        if($conn)
        {
            echo 'success';
        }
        else
        {
            echo 'error';
        }
        ?>
    </body>
</html>
