<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 22:45:13
  from '/opt/lampp/htdocs/kalkulator_2/app/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e83abd914ba44_59104429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f33e7f0f68ae83dca58d61af0c888a49db503c5f' => 
    array (
      0 => '/opt/lampp/htdocs/kalkulator_2/app/view/view.tpl',
      1 => 1585074652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e83abd914ba44_59104429 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/css/noscript.css" /></noscript>
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
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Strona główna</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Kalkulator</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16522452505e83abd9146090_93188127', 'title');
?>
</h2>
                                                                    <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18705132615e83abd91475a3_29737624', 'body');
?>
</p>
                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14645112735e83abd91488c1_95298735', 'content');
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
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/view/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'title'} */
class Block_16522452505e83abd9146090_93188127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16522452505e83abd9146090_93188127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Get in touch<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18705132615e83abd91475a3_29737624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18705132615e83abd91475a3_29737624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_14645112735e83abd91488c1_95298735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14645112735e83abd91488c1_95298735',
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
