<?php
/* Smarty version 3.1.36, created on 2021-10-23 20:54:41
  from 'W:\domains\localhost\smarty\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61744c61cf5d45_62026630',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3034d5fdcb7d9c9f4d35a6ce353be68055b5a1d6' => 
    array (
      0 => 'W:\\domains\\localhost\\smarty\\index.tpl',
      1 => 1635011679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61744c61cf5d45_62026630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '49836290761744c61cd1b14_59967867';
?>

<?php echo '/*%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/<?php $_smarty_tpl->_assignInScope(\'start_timestamp\', microtime(true) ,true);?>/*/%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/';?>



<?php echo '/*%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'data\']->value, \'message\');
$_smarty_tpl->tpl_vars[\'message\']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars[\'message\']->value) {
$_smarty_tpl->tpl_vars[\'message\']->do_else = false;
?>/*/%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/';?>

<p><?php echo '/*%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/<?php echo $_smarty_tpl->tpl_vars[\'message\']->value->code;?>
/*/%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/';?>
 : <?php echo '/*%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/<?php echo $_smarty_tpl->tpl_vars[\'message\']->value->message;?>
/*/%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/';?>
</p>
<?php echo '/*%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:49836290761744c61cd1b14_59967867%%*/';?>

<?php }
}
