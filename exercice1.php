<?php
$age = 32;
include 'header.php';
?>

    <p class="text-center h2">Vous êtes <?php
    if ($age >= 18 && $age <= 120){
        echo 'majeur';
    }
    elseif ($age >= 0 && $age <= 17  ){
        echo 'mineur';
    }else{
        echo 'chelou!';
    }?>
    </p>
<?php include 'footer.php';