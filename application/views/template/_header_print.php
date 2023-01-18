<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Internal Applications PT PINTEX">
    <meta name="author" content="Yudha">
    <?php foreach ($pengecekan as $u) { ?>
    <title>Print <?= $u->idmuat; ?> | KARTU PENGECEKAN PINTEX</title>
    <?php } ?>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/5.0.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="<?= base_url(); ?>assets/bootstrap/bootstrap.min.css">

</head>