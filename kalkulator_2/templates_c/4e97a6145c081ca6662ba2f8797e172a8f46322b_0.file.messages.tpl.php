<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-07 21:06:51
  from '/opt/lampp/htdocs/kalkulator_2/app/view/messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8ccf4b85aa14_08543795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e97a6145c081ca6662ba2f8797e172a8f46322b' => 
    array (
      0 => '/opt/lampp/htdocs/kalkulator_2/app/view/messages.tpl',
      1 => 1586286410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8ccf4b85aa14_08543795 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<h4>Wystąpiły błędy: </h4>
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
<?php }
}
}
