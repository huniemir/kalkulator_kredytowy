<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 23:31:36
  from '/opt/lampp/htdocs/kalkulator_2/app/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e83b6b821dc96_06646111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2adc1f90a3ced8a00b8894732475a0422b659d33' => 
    array (
      0 => '/opt/lampp/htdocs/kalkulator_2/app/view/view.tpl',
      1 => 1585690293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e83b6b821dc96_06646111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator Kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Kalkulator Kredytowy</a></h1>
						<nav>
                                                    <a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Strona główna</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php">Kalkulator</a></li>
							</ul>
							<a href="#" class="close">Zamknij</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
                                                                    
                                                                    <h2 class="major"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6808494485e83b6b8215fb9_38163826', 'title');
?>
</h2>
                                                                    <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3297389215e83b6b8216d03_89994767', 'body');
?>
</p>
                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7606202795e83b6b82178c5_04725189', 'content');
?>

									
									

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
                                                <div class="inner">
							<ul class="copyright">
								<li>&copy; Marek Rybczyński Inc. Żadnych praw zastrzeżonych</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
                                                </div>
					</section>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'title'} */
class Block_6808494485e83b6b8215fb9_38163826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6808494485e83b6b8215fb9_38163826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Get in touch<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3297389215e83b6b8216d03_89994767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3297389215e83b6b8216d03_89994767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_7606202795e83b6b82178c5_04725189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7606202795e83b6b82178c5_04725189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <form method="post" action="#">
                                                                            <div class="fields">
                                                                                    <div class="field">
                                                                                            <label for="name">Name</label>
                                                                                            <input type="text" name="name" id="name" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="email">Email</label>
                                                                                            <input type="email" name="email" id="email" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="message">Message</label>
                                                                                            <textarea name="message" id="message" rows="4"></textarea>
                                                                                    </div>
                                                                            </div>
                                                                            <ul class="actions">
                                                                                    <li><input type="submit" value="Send Message" /></li>
                                                                            </ul>
                                                                    </form>
                                                                    <?php
}
}
/* {/block 'content'} */
}
