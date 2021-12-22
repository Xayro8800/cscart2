<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:16
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83326453461c33204b25e20-90518445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f45e0f1ae029a2479ba8f1a09965bd2993b3b3e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83326453461c33204b25e20-90518445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c33204b2fec7_73043054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c33204b2fec7_73043054')) {function content_61c33204b2fec7_73043054($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart2/app/functions/smarty_plugins\\function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
