<?php
if (!defined('WEB_ROOT')) {
    exit;
}
$self = WEB_ROOT . 'index.php';
?>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="<?php echo WEB_ROOT;?>css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEB_ROOT;?>css/menu.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/lab.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/jquery.min.js" ></script>
    <?php
    $n = count($script);
    for ($i = 0; $i < $n; $i++) {
        if ($script[$i] != '') {
            echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'library/' . $script[$i]. '"></script>';
        }
    }
    ?>
</head>
</html>