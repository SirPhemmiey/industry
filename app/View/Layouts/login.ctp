<!DOCTYPE html>
<html lang="en">

<head>
<title>
<?php echo $this->fetch('title'); ?>
</title>
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo $this->Html->css('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900');
echo $this->Html->css(array('styles', 'bootstrap.min', 'core.min', 'components.min', 'colors.min'));
 
echo $this->Html->script(array('pace.min', 'jquery-2.1.1.min', 'bootstrap.min', 'blockui.min', 'validate.min', 'touchspin.min', 'uniform.min', 'bootstrap_multiselect', 'app', 'form_multiselect'));
?>
</head>

<body>


<!-- Main navbar -->
<div class="navbar navbar-inverse">
<div class="navbar-header">
    <a class="navbar-brand" href="index.html"><img src="<?php echo $this->webroot;?>img/logo_light.png" alt=""></a>

    <ul class="nav navbar-nav pull-right visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
    </ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#">
                <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
            </a>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-cog3"></i>
                <span class="visible-xs-inline-block position-right"> Options</span>
            </a>
        </li>
    </ul>
</div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

<?php echo $this->fetch('content');?>

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<footer id="footer" style="text-align:center;">
    &copy; 2016. <p>Powered by <a href="http://www.playspread.com">Playspread.</a></p>
</footer>

</body>

</html>
