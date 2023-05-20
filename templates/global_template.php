<?php function draw_topbar() { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=100.0">

    <link href="/../style/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/../js/faq.js"></script>

    <title>Frequently Asked Questions</title>
</head>
<body>
<div id = "top-bar">
    <nav id="menu">
        <input type="checkbox" id="hamburger">
        <label class="hamburger" for="hamburger"></label>
        <ul>
            <li><a href="agent_dashboard.php">Ticket dashboard</a></li>
            <li><a href="/../pages/faq.php">Frequently asked questions</a></li>
            <li><a href="">Performance metrics</a></li>
            <li><a href="">Options</a></li>
        </ul>
    </nav>
    <span id="username">
        pedrofvgomes
    </span>
    <img class="avatar" src="../images/user.png">
</div>

<?php } ?>


<?php function draw_footer() { ?>

</body>
</html>

<?php } ?>
