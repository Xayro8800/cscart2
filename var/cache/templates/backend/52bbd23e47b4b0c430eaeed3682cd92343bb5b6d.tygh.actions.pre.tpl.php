<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:16
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59717252461c33204a5dfa2-66192289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52bbd23e47b4b0c430eaeed3682cd92343bb5b6d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59717252461c33204a5dfa2-66192289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c33204a68407_00875448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c33204a68407_00875448')) {function content_61c33204a68407_00875448($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart2/app/functions/smarty_plugins\\modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
