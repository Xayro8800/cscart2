<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 17:11:16
         compiled from "C:\OpenServer\domains\cscart2\design\backend\templates\addons\help_center\hooks\index\content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130098882361c33204bae753-27829820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358c4b00638f9ecf01b4ef8da70ff6533f05bf42' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart2\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\content_top.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '130098882361c33204bae753-27829820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c33204bbc907_14477644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c33204bbc907_14477644')) {function content_61c33204bbc907_14477644($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart2/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('help_center.help'));
?>
<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center hidden" data-ca-help-center="main">
        <div class="help-center__header">
            <div class="help-center__title"><?php echo $_smarty_tpl->__("help_center.help");?>
</div>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove help-center__close"),$_smarty_tpl);?>

        </div>

        <div class="help-center__content">
        </div>

        <div class="help-center__footer">
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/template" id="help_center_block" data-no-defer="true" data-no-execute="§">
        <div class="help-center__block ${data.type_block}">
            <div class="help-center__block-container">
                <div class="help-center__block-header">
                    <div class="help-center__block-title">${data.name}</div>
                    
                        ${data.all_items_name
                        ? `
                            <a class="help-center__block-all-items" target="_blank" href="${data.all_items_url}">${data.all_items_name}</a>
                            <a class="help-center__block-all-items help-center__block-all-items--short" target="_blank" href="${data.all_items_url}">${data.all_items_name_short}</a>
                        ` : ``}
                    
                </div>
                <div class="help-center__block-content">
                    <div class="help-center__block-items">

                    </div>
                    
                        ${data.is_lines_more_limit
                            ? `<a class="help-center__block-link help-center__block-link--show-more" href="#">${data.see_all_n_results}</a>`
                            : ``
                        }
                    
                </div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/template" id="help_center_block_link" data-no-defer="true" data-no-execute="§">
        <div class="help-center__block-link ${data.link_limit_class ? data.link_limit_class : ``}">
            <a class="${data.image_url || data.icon ? `help-center__block-link--with-image` : ``}" href="${data.url}" target="_blank">
                <div class="help-center__block-link-image-container">
                    
                        ${data.image_url ? `<img class="help-center__block-link-image" src="${data.image_url}"/>` : ``}
                    

                    <div class="help-center__block-link-image-container--time-indicator">
                        
                            ${data.time ? data.time : ``}
                        
                    </div>
                </div>

                
                    ${data.icon ? `<span class="cs-icon help-center__block-link-icon ${data.icon}"></span>` : ``}
                

                ${data.text}
                <div class="help-center__block-link--label">
                    
                        ${data.data ? data.data : ``}
                    
                </div>
            </a>
        </div>
    <?php echo '</script'; ?>
>
<?php }?>
<?php }} ?>
