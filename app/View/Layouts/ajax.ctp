<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
            // echo $this->fetch('meta');
            // echo $this->fetch('css');
            // echo $this->fetch('script');
            // //    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" >
            // echo $this->Html->css('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900');
            // echo $this->Html->css(array('bootstrap.min','bootstrap-arrow-buttons', 'styles','style', 'core.min', 'components.min', 'colors.min'));
            // echo $this->Html->script(array('pace.min', 'jquery-2.1.1.min', 'bootstrap.min', 'blockui.min','validate.min', 'touchspin.min', 'uniform.min', 'moment.min', 'datatables.min', 'responsive.min', 'bootstrap_multiselect',  'datatables_responsive', 'form_validation', 'app', 'form_multiselect','scripts'));
            ?>
             <?php
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            //    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" >
            echo $this->Html->css('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900');
            echo $this->Html->css(array('bootstrap.min','bootstrap-arrow-buttons', 'styles','style', 'core.min', 'components.min', 'colors.min', 'font-awesome.min'));
            echo $this->Html->script(array('jquery-2.1.1.min', 'select2.min', 'bootstrap.min', 'blockui.min', 'datatables.min', 'interactions.min', 'validate.min', 'touchspin.min', 'switchery.min', 'uniform.min', 'datatables.min', 'responsive.min', 'bootstrap_multiselect', 'app', 'components_navs', 'jquery.hoverIntent.minified', 'datatables_basic'));
            ?>
</head>
<body>
<?php echo $this->fetch('content'); ?>
</body>
</html>

