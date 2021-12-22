<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:17
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62390864361c332053ec039-40463217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db60a5c6e574117206919e9f445b0f9d15523ea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '62390864361c332053ec039-40463217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c332053f4444_46050754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c332053f4444_46050754')) {function content_61c332053f4444_46050754($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
