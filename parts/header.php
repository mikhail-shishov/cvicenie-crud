<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php if (isset($page_title)) { ?>
            <?php echo ($page_title) ?>
        <?php } else { ?>
            CRUD operacii
        <?php } ?>
    </title>
</head>

<body>