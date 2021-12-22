<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:14
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125355011261c33202b42079-96514056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52447164ef0f0310cf013e4298532210fa64468' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125355011261c33202b42079-96514056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c33202b4b1f8_61947621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c33202b4b1f8_61947621')) {function content_61c33202b4b1f8_61947621($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/OpenServer/domains/cscart2/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
