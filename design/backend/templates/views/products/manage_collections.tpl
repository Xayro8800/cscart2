{** collections section **}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" id="collections_form" name="collections_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_collections"}

{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{$rev=$smarty.request.content_id|default:"pagination_contents_collections"}
{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
{$banner_statuses=""|fn_get_default_statuses:true}
{$has_permission = fn_check_permissions("collections", "update_status", "admin", "POST")}

{if $collections}
    {capture name="collections_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="left mobile-hide">
                    {include file="common/check_items.tpl" is_check_disabled=!$has_permission check_statuses=($has_permission) ? $banner_statuses : '' }
                    <th>
                    <a class="cm-ajax" href="{"`$c_url`&sort_by=position&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("position")}{if $search.sort_by === "position"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                    </th>
                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("creation_date")}{if $search.sort_by === "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>

                <th width="6%" class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
            </tr>
            </thead>
            {foreach from=$collections item=collection}
            <tr class="cm-row-status-{$collection.status|lower} cm-longtap-target"
                {if $has_permission}
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$collection.collection_id}"
                {/if}
            >
                {$allow_save=true}

                {if $allow_save}
                    {$no_hide_input="cm-no-hide-input"}
                {else}
                    {$no_hide_input=""}
                {/if}

                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="collections_ids[]" value="{$collection.collection_id}" class="cm-item {$no_hide_input} cm-item-status-{$collection.status|lower} hide" />
                </td>
                <td>
                    <input type="text" name="collections_data[{$collection.collection_id}][position]" value="{$collection.position}" size="3" class="input-micro " />
                </td>
                <td class="{$no_hide_input}" data-th="{__("name")}">
                    <a class="row-status" href="{"products.update_collection?collection_id=`$collection.collection_id`"|fn_url}">{$collection.collection}</a>
                </td>
                <td width="15%" data-th="{__("creation_date")}">
                    {$collection.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
                </td>
                <td width="6%" class="mobile-hide">
                    {capture name="tools_list"}
                        <li>{btn type="list" text=__("edit") href="products.update_collections?banner_id=`$collection.collection_id`"}</li>
                    {if $allow_save}
                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="products.delete_collection?banner_id=`$collection.collection_id`" method="POST"}</li>
                    {/if}
                    {/capture}
                    <div class="hidden-tools">
                        {dropdown content=$smarty.capture.tools_list}
                    </div>
                </td>
                <td width="10%" class="right" data-th="{__("status")}">
                    {include file="common/select_popup.tpl" id=$collection.collection_id status=$collection.status hidden=true object_id_name="banner_id" table="collections" popup_additional_class="`$no_hide_input` dropleft"}
                </td>
            </tr>
            {/foreach}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="collections_form"
        object="collections"
        items=$smarty.capture.collections_table
        has_permissions=$has_permission
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl" div_id="pagination_contents_collections"}

{capture name="adv_buttons"}
    {include file="common/tools.tpl" tool_href="products.add_collection.add" prefix="top" hide_tools="true" title="???????? ?????????" icon="icon-plus"}
{/capture}

</form>

{/capture}


{hook name="collections:manage_mainbox_params"}
    {$page_title = "?????????"}
    {$select_languages = true}
{/hook}

{include
    file="common/mainbox.tpl"
    title=$page_title
    content=$smarty.capture.mainbox
    adv_buttons=$smarty.capture.adv_buttons
    select_languages=$select_languages
}

{** ad section **}
