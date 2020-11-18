<?php
$age = 18;
include 'header.php';
?>

<p class="text-center h2"><?php
    if($age >= 18){
        echo 'Tu es majeur';
    }
    else{
        echo 'Tu n\'es pas majeur';
    }
?>
</p>
<?php include 'footer.php';