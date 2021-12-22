<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:16
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\views\products\update_collection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195368857961c3320431a832-00726813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6871418e39b10c1af78702d041d1a1b633bcb6c5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\views\\products\\update_collection.tpl',
      1 => 1640181844,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195368857961c3320431a832-00726813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'collection_data' => 0,
    'id' => 0,
    'settings' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c3320433f253_05943560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c3320433f253_05943560')) {function content_61c3320433f253_05943560($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','position_short','image','description','creation_date','delete','banners.new_banner'));
?>
<?php if ($_smarty_tpl->tpl_vars['collection_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['collection_data']->value['collection_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="banners_form" enctype="multipart/form-data">
    <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
    <input type="hidden" class="cm-no-hide-input" name="collection_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <div id="content_general">
            <div class="control-group">
                <label for="elm_banner_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                <div class="controls">
                    <input type="text" name="collection_data[collection]" id="elm_banner_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['collection_data']->value['collection'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label for="elm_banner_position" class="control-label"><?php echo $_smarty_tpl->__("position_short");?>
</label>
                <div class="controls">
                    <input type="text" name="collection_data[position]" id="elm_collection_position" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['collection_data']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="3"/>
                </div>
            </div>

            <div class="control-group id="banner_graphic">
                <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"collection",'image_object_type'=>"collection",'image_pair'=>$_smarty_tpl->tpl_vars['collection_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

                </div>
            </div>

            <div class="control-group " id="banner_text">
                <label class="control-label" for="elm_banner_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
                <div class="controls">
                    <textarea id="elm_banner_description" name="collection_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['collection_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_banner_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_banner_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"collection_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['collection_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"collection_data[status]",'id'=>"elm_banner_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['collection_data']->value,'hidden'=>false), 0);?>

        <!--content_general--></div>
    
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete_collection?collection_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"banners_form",'but_name'=>"dispatch[products.update_collection]"), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.update_collection]",'but_role'=>"submit-link",'but_target_form'=>"banners_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Добавить новую коллекцию", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable("Изменить", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['collection_data']->value['collection'], null, 0);?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['collection_data']->value['banner'] : $_smarty_tpl->__("banners.new_banner"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>



<?php }} ?>
