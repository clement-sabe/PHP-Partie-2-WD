<?php
$age = 32;
include 'header.php';
?>

    <p class="text-center h2">Vous êtes <?php
    if ($age >= 18){
        echo 'majeur';
    }
    elseif ($age < 18){
        echo 'mineur';
    }?>
    </p>
<?php include 'footer.php';