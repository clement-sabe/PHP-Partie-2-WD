<?php
  $age = 122;
$gender = 'Homme';
include 'header.php';
?>

<p class="text-center h2">Vous êtes <?php
    if ($age >= 18 && $age <=120 && $gender == 'Homme'){// age supérieur ou egale a 18 et un homme
        echo ' un homme et vous êtes majeur';
    }
    elseif ($age < 18 && $age<=0 && $gender == 'Homme'){//age inférieur ou egale a 18 et un homme
        echo ' un homme et vous êtes mineur';
    }
    elseif ($age >= 18 && $age <=120 && $gender == 'Femme'){// age supérieur ou egale a 18 et un femme
        echo ' une femme et vous êtes majeure';
    }
    elseif ($age < 18 && $age<=0 && $gender == 'Femme'){//age inférieur ou egale a 18 et un femme
        echo ' une femme et vous êtes mineure';
    }
    else{
        echo ' chelou !';
    }?>
</p>


<?php include 'footer.php';