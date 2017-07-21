<?php echo doctype("html5"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
     
     <?php foreach ($results as $row) {
	           	$title = $row->title;
	           	$text1 = $row->text1;
	           	$text2 = $row->text2;
            } ?>

    <title><?php echo $title; ?></title>
    <script type="text/javascript" src="<?php echo base_url() ?>scripts/test.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>styles/style.css">

</head>