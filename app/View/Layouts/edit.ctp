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
//    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" >
echo $this->Html->css('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900');
echo $this->Html->css(array('styles', 'bootstrap.min', 'core.min', 'components.min', 'colors.min'));
echo $this->Html->script(array('jquery-2.1.1.min', 'pace.min', 'bootstrap.min', 'blockui.min','validate.min', 'touchspin.min', 'select2.min', 'form_layouts', 'switchery.min', 'uniform.min', 'bootstrap_multiselect', 'moment.min', 'datatables.min', 'responsive.min', 'app', 'datatables_responsive', 'form_validation'));
?>
</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
<div class="navbar-header">
    <a class="navbar-brand" href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>img/logo_light.png" alt=""></a>

    <ul class="nav navbar-nav visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav">
        <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
    <p class="navbar-text">
        <span class="label bg-success">Online</span>
    </p>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="<?php echo $this->webroot;?>#">Log out</a>
        </li>
        <li class="dropdown dropdown-user">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo $this->webroot;?>img/placeholder.jpg" alt="">
                <span>Oluwafemi Akinde</span>
                <i class="caret"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-main">
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user">
                <div class="category-content">
                    <div class="media">
                        <a href="#" class="media-left"><img src="<?php echo $this->webroot;?>img/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                        <div class="media-body">
                            <span class="media-heading text-semibold">Oluwafemi Akinde</span>
                            <div class="text-size-mini text-muted">
                                <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                            </div>
                        </div>

                        <div class="media-right media-middle">
                            <ul class="icons-list">
                                <li>
                                    <a href="#"><i class="icon-cog3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">

                        <!-- Main -->
                        <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                        <li class="active"><a href="<?php echo $this->webroot;?>home#"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                        <li class=""><a href="<?php echo $this->webroot;?>home"><i class="icon-office"></i> <span>Industries</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo $this->webroot;?>banking">Banking</a>
                                    <a href="<?php echo $this->webroot;?>fmcg">FMCGs</a>
                                    <a href="<?php echo $this->webroot;?>telecommunication">Telecommunication</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot;?>home/edit">Edit Details</a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot;?>home/banks">See all</a>
                        </li>

                        <!-- /main -->
                    </ul>
                </div>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <!-- /main sidebar -->
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Main div -->
            <div class="row">
                <div class="">
                    <?php echo $this->fetch('content');?>

                </div>
            </div>
            <!-- /main div -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

</body>

</html>
