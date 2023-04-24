<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./assets/fe-library/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fe-library/flickity.min.css">
    <link rel="stylesheet" href="./assets/fe-library/animate.min.css">
    <link rel="stylesheet" href="./assets/fe-library/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./assets/scss/style.css">
    <title>Home</title>
</head>
<body>
<?php
/**
 * Function help call file SVG from assets/svg
 */
function svg($name, $width = false, $height = false)
{
    $dir  = 'assets/svg/';
    $path = $dir . $name . '.svg';
    if ($name && file_exists($path)) {
        $svg = file_get_contents($path);
        if ($width) {
            $size = '<svg';
            $new_size = '<svg width="' . $width . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        if ($height) {
            $size = '<svg';
            $new_size = '<svg height="' . $height . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        return $svg;
    }
    return '';
}
?>