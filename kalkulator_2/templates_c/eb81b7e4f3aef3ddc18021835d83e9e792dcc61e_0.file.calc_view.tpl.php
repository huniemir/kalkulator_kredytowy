<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 23:32:52
  from '/opt/lampp/htdocs/kalkulator_2/app/view/calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e83b704a18b66_94339107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb81b7e4f3aef3ddc18021835d83e9e792dcc61e' => 
    array (
      0 => '/opt/lampp/htdocs/kalkulator_2/app/view/calc_view.tpl',
      1 => 1585690368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e83b704a18b66_94339107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15427164095e83b7049faa60_77063357', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_670839175e83b7049fc3a0_44514905', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2334808695e83b7049fd691_05097802', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view.tpl");
}
/* {block 'title'} */
class Block_15427164095e83b7049faa60_77063357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15427164095e83b7049faa60_77063357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_670839175e83b7049fc3a0_44514905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_670839175e83b7049fc3a0_44514905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Zmieni twoje życie na zawsze<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_2334808695e83b7049fd691_05097802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2334808695e83b7049fd691_05097802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calculate" method="post" class="pure-form pure-form-stacked">
		<label for="id_kredyt">Kredyt: </label>
		<input id="id_kredyt" type="text" name="kredyt" /><br  />
		<label for="id_oprocentowanie">Oprocentowanie: </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" /> <br />
		<label for="id_lata">Długość kredytu: (lata) </label>
		<input id="id_lata" type="text" name="lata" /><br />
		
		<label for="id_rodzaj_raty">Rodzaj raty: </label>
		<select name="rodzaj_raty">
			<option value="tygodniowa">tygodniowa</option>
			<option value="miesięczna">miesięczna</option>
			<option value="kwartalna">kwartalna</option>
			<option value="półroczna">półroczna</option>
			<option value="roczna">roczna</option>
		
		</select><br />
		<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
		<input type="submit" value="Wyloguj" name="wyloguj" class="button-secondary pure-button" />

	</form>	
</div>

<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['rata']->value)) {?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #faa; width:300px; color: black;">
            Wysokość raty: <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>

        </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['suma']->value)) {?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #fda; width:300px; color: black;">
            W sumie do spłaty: <?php echo $_smarty_tpl->tpl_vars['suma']->value;?>

        </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['odsetki']->value)) {?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #abc; width:300px; color: black;">
            Odsetki: <?php echo $_smarty_tpl->tpl_vars['odsetki']->value;?>

        </div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
