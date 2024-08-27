<?php

require "Profile.php";

$profile = new Profile(
    "Bernardo",
    "Jeannie Darci",
    "Tengco"
);

$profile->setEmail('bernardo.jeanniedarci@auf.edu.ph');
$profile->setAddress('Barangay Cuayan, Angeles City, Pampanga');
$profile->setFavoriteQuote('It is very okay to not know yet.')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
</head>
<body>
    <h1><?php echo $profile->getCompleteName(); ?></h1>
    <h2><?php echo $profile->getEmail();?></h2>
    <h2><?php echo $profile->getAddress();?></h2>
    <p>
        <?php echo $profile->getFavoriteQuote(); ?>
    </p>
</body>
</html>