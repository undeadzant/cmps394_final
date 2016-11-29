<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<!DOCTYPE html>

<html>

<head>

<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="/cmps394_final/resources/stylesheet.css">
<?php if (isset($css)) {
    foreach ($css as $value) {
        echo '<link type="text/css" rel="stylesheet" href="' . $value . '">';
    }    
} ?>

</head>

<body>
<div class="wrapper">
    <div id="header">

        <h3><?php echo $header; ?></h3>

    </div>
