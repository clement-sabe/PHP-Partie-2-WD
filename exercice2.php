<?php
  $age = 32;
$gender = 'Homme';
include 'header.php';
?>

<p class="text-center h2">Vous êtes <?php
    if ($age >= 18 && $gender == 'Homme'){
        echo ' un homme et vous êtes majeur';
    }
    elseif ($age < 18 && $gender == 'Homme'){
        echo ' un homme et vous êtes mineur';
    }
    elseif ($age >= 18 && $gender == 'Femme'){
        echo ' une femme et vous êtes majeure';
    }
    elseif ($age < 18 && $gender == 'Femme'){
        echo ' une femme et vous êtes mineure';
    }
    else{
        echo ' pas humain!';
    }?>
</p>


<?php include 'footer.php';