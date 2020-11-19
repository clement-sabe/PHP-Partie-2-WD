<?php
$age = 32;
include 'header.php';
?>

    <p class="text-center h2">Vous êtes <?php
    if ($age >= 18 && $age <= 120){ //age compris entre 18 et 120
        echo 'majeur';
    }
    elseif ($age >= 0 && $age <= 17  ){ //age compris entre 0 et 17
        echo 'mineur';
    }else{// age inferieur a 0 ou supérieur a 120
        echo 'chelou!';
    }?>
    </p>
<?php include 'footer.php';