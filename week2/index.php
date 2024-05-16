<!DOCTYPE html>
<html lang="en">
<head>
    <meta harset="UTF-8">
<body>
    
<?php 
echo '<h1> Welcome to HTTP5225</h1>';
?>
<?php 
echo '<p>Lets learn together:</p>';
?>

<?php 
echo '<ul><li>PHP</li><li>Laravel</li></ul>';
?>
<?php 
echo '<img src="https://placehold.co/600x400" alt="">';
?>
<img src="<?php echo 'https://placehold.co/600x400'; ?>" alt="">

<?php 
$fname = 'Gary';
$lname = 'Bhanot';

$name['fname'] = 'Gary';
$name['lname'] = 'Bhanot';
echo 'Hello ' . $fname . ' ' . $lname;
echo 'Hello ' . $name['fname'] . ' ' . $name['lname'];
?>

</body>
</html>