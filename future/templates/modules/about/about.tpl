{block name="header"}
    {include file="findInclude:common/header.tpl"}
{/block}

<div class="focal"> 
  {foreach $moduleStrings.ABOUT_HTML as $paragraph}
    <p>{$paragraph}</p>
  {/foreach}
</div> 

{include file="findInclude:common/footer.tpl"}
