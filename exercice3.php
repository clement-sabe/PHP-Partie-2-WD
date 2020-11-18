<?php
$gender = 'Homme';
include 'header.php';
?>

<p class="text-center h2"><?php
    if($gender == 'Homme'){
        echo 'C\'est un développeur !!!';
    }
    else{
        echo 'C\'est une développeuse !!!';
    }
?>
</p>
<?php include 'footer.php';