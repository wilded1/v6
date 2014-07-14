<a href="#" data-dropdown="language-switch" class="button white small"><img class="flag flag-{$current_language.code|substr:3:2}" alt="{$current_language.title}" /></a><br>
<ul id="language-switch" data-dropdown-content class="f-dropdown">
  {foreach from=$LANGUAGES item=language}
  {if $current_language.code!==$language.code}
  <li class="text-left"><a href="{$language.url}"><img src="#" class="flag flag-{$language.code|substr:3:2}" alt="{$language.title}" /> {$language.title}</a></li>
  {/if}
  {/foreach}
</ul>