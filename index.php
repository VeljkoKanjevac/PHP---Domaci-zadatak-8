<?php

$naslov = "Postani Programer";

$navBar = [
    "Glavna" => "home.php",
    "O nama" => "about_us.php",
    "Kontakt" => "contact.php"
];

$tekucaGodina = date("Y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?= $naslov; ?> </title>
</head>

<body>

    <h1> <?= $naslov; ?> </h1>
    <nav>
        <?php foreach($navBar as $opis=>$link): ?>
            <a href="<?= $link; ?>"> <?= $opis ?> </a>
        <?php endforeach; ?>
    </nav>

    <footer>
        <p>Copyright @ moj sajt <?php echo $tekucaGodina; ?> </p>
    </footer>
</body>
</html>