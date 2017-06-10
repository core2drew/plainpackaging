<?php 
    include_once('library/base_url.php'); 
    include_once('library/api.php'); 
    if ($menu2 != ''){$menu = $menu2;}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('header.php'); ?>

    <title><?php echo camel_case($menu); ?> | Plain Packaging of Tobacco Products Toolkit</title>

    <!-- og tags -->
    <meta property="og:title" content="<?php echo camel_case($menu) ?> | Plain Packaging of Tobacco Products Toolkit" />
    <meta property="og:image" content="<?php echo $base_url; ?>img/banner/intro-bg.png" />
    <meta property="og:url" content="<?php echo $base_url; ?>/nav/<?php echo $menu; ?>" />
    <meta property="og:description" content="<?php echo nav_content($menu,'og_desc'); ?>" />

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <?php include_once('navigation.php');?>

    <?php nav_content($menu) ?>

    <?php include_once('footer.php'); ?>
    <script src="<?php echo $base_url; ?>js/grayscale-menu.js"></script>
</body>

</html>
