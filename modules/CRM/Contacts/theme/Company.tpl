{* Get total number of fields to display *}
{foreach key=k item=f from=$fields name=fields}
	{assign var=count value=$smarty.foreach.fields.total}
{/foreach}
{if $count is not even}
	{assign var=rows value=$count+1}
	{assign var=rows value=$rows/2}
{else}
	{assign var=rows value=$count/2}
{/if}
{assign var=x value=0}

<table class="Utils_RecordBrowser__table" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="width:100px;">
				<div class="name">
					<img alt="&nbsp;" class="icon" src="{$icon}" width="32" height="32" border="0">
					<div class="label">{$caption}</div>
				</div>
			</td>
			<td class="required_fav_info">
				&nbsp;*&nbsp;{$required_note}
				{if isset($subscription_tooltip)}
					&nbsp;&nbsp;&nbsp;{$subscription_tooltip}
				{/if}
				{if isset($fav_tooltip)}
					&nbsp;&nbsp;&nbsp;{$fav_tooltip}
				{/if}
				{if isset($info_tooltip)}
					&nbsp;&nbsp;&nbsp;{$info_tooltip}
				{/if}
				{if isset($clipboard_tooltip)}
					&nbsp;&nbsp;&nbsp;{$clipboard_tooltip}
				{/if}
				{if isset($history_tooltip)}
					&nbsp;&nbsp;&nbsp;{$history_tooltip}
				{/if}
				{foreach item=n from=$new}
					&nbsp;&nbsp;&nbsp;{$n}
				{/foreach}
			</td>
		</tr>
	</tbody>
</table>

{if isset($click2fill)}
    {$click2fill}
{/if}


<!-- SHADOW BEGIN -->
	<div class="layer" style="padding: 9px; width: 98%;">
		<div class="css3_content_shadow">
<!-- -->

<div class="Utils_RecordBrowser__container">

{* Outside table *}
<table class="Utils_RecordBrowser__View_entry" cellpadding="0" cellspacing="0" border="0">
	<tbody>
		<tr>
			<td class="left-column">
				{* First column table *}
				<table cellpadding="0" cellspacing="0" border="0" class="{if $action == 'view'}view{else}edit{/if}">
					<tr>
						{assign var=i value=0}
						{assign var=j value=0}
						{foreach key=k item=f from=$fields name=fields}
							{if !isset($focus) && $f.type=="text"}
								{assign var=focus value=$f.element}
							{/if}
							<td class="label" nowrap>{$f.label}{if $f.required}*{/if}</td>
							<td class="data {$f.style}" id="_{$f.element}__data">{if $f.error}{$f.error}{/if}{$f.html}{if $action == 'view'}&nbsp;{/if}</td>
							{assign var=x value=$x+1}
							{* If more than half records displayed start new table - second column table *}
							{if $x >= $rows and $i==0}
						</tr>
					</table>
				</td>
				{* First table closed - start second column*}
				<td class="right-column right-column-{if $action == 'view'}view{else}edit{/if}">
					<table cellpadding="0" cellspacing="0" border="0" class="{if $action == 'view'}view{else}edit{/if}">
						<tr>
							{assign var=i value=1}
							{else}
						</tr>
						<tr>
							{/if}
							{assign var=j value=$j+1}
						{/foreach}
						{* Fill empty row if number of records is not even *}
						{if $j is not even}
							<td class="label">&nbsp;</td>
							<td class="label">&nbsp;</td>
						{/if}
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" class="{if $action == 'view'}view{else}edit{/if}" style="border-top: none;">
				{foreach key=k item=f from=$longfields name=fields}
					<tr>
						<td class="label long_label">{$f.label}{if $f.required}*{/if}</td>
						<td class="data long_data {if $f.type == 'currency'}currency{/if}" id="_{$f.element}__data">{if $f.error}{$f.error}{/if}{$f.html}{if $action == 'view'}&nbsp;{/if}</td>
					</tr>
				{/foreach}
			</table>
			</td>
		</tr>
	</tbody>
</table>

{php}
	eval_js('focus_by_id(\''.$this->_tpl_vars['focus'].'\');');
{/php}

</div>

<!-- SHADOW END -->
 		</div>

	</div>
<!-- -->
