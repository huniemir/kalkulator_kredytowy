<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-07 21:10:07
  from '/opt/lampp/htdocs/kalkulator_2/app/view/LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8cd00fdbe067_18037339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729f381c43e34bc4a3dfec31c240c9cb21af34cd' => 
    array (
      0 => '/opt/lampp/htdocs/kalkulator_2/app/view/LoginView.tpl',
      1 => 1586286604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e8cd00fdbe067_18037339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19937781345e8cd00fda5c28_87550047', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11901076465e8cd00fda9759_69108828', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8062735705e8cd00fdaba90_57362812', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view.tpl");
}
/* {block 'title'} */
class Block_19937781345e8cd00fda5c28_87550047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19937781345e8cd00fda5c28_87550047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11901076465e8cd00fda9759_69108828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11901076465e8cd00fda9759_69108828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_8062735705e8cd00fdaba90_57362812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8062735705e8cd00fdaba90_57362812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
