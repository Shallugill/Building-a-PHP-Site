<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <h1>About Us</h1>
    <p>This is my About Us page</p>
    <img src="Shallu.jpg" alt="My Image" class="profile-pic">

    <?php
        $team = ["Pushti - Developer", "Manoj - Designer", "Maria - Project Manager", "Khushi - Designer", "Suzal - Admin"];
    ?>

    <ul>
        <?php foreach ($team as $member) : ?>
            <li><?php echo $member; ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include 'footer.php'; ?>

</body>
</html>