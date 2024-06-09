<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'http5225-week5');

        if(!$connect){
            echo 'Error code:' . mysqli_connect_errno();
            echo 'Error code:' . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT Name, Hex FROM colors';

        $result = mysqli_query($connect, $query);  

        if(!$result){
            echo 'Error' . mysqli_error($connect); 
            exit;
        } else{
            foreach($result as $color){
                echo '<div style="height: 20px; width: 150px; background: ' . $color['Hex'] . '">'. $color['Name'] .'</div>';
            }
        }
    ?>
    
</body>
</html>