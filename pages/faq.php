<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../templates/sidebar_template.php');
    require_once(__DIR__ . '/../templates/faq_template.php');

    draw_head();
    draw_admin_sidebar();
    draw_faq();
?>

<?php function draw_head() { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=100.0">

        <link href="../style/style2.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="faq.js"></script>

  <title>FAQ</title>
</head>

<body>
<?php } ?>