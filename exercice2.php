<?php
  $age = 122;
$gender = 'Homme';
include 'header.php';
?>

<p class="text-center h2">Vous êtes <?php
    if ($age >= 18 && $age <=120 && $gender == 'Homme'){
        echo ' un homme et vous êtes majeur';
    }
    elseif ($age < 18 && $age<=0 && $gender == 'Homme'){
        echo ' un homme et vous êtes mineur';
    }
    elseif ($age >= 18 && $age <=120 && $gender == 'Femme'){
        echo ' une femme et vous êtes majeure';
    }
    elseif ($age < 18 && $age<=0 && $gender == 'Femme'){
        echo ' une femme et vous êtes mineure';
    }
    else{
        echo ' chelou!';
    }?>
</p>


<?php include 'footer.php';