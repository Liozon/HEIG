{include file='header.tpl'}
{include file='menu.tpl' userid=$userid username=$username userhasblog=$userhasblog}
	<!-- CONTENT -->
      {include file='search_bar.tpl'}
	  

	  <h1 class="title">Voir les articles</h1>
	  <p>
	    {if empty($blogs)}Aucun article à afficher pour l'instant{/if}
		{foreach item=blog from=$blogs}
		- <a href="blog.php?id={$blog.id}">{$blog.title}</a> by {$blog.author}<br />
		{/foreach}
	  </p>
{* Show links to previous/next pages *}
<p>
{if $prev_offset < 0}
  Première page | Précédent
{else}
  <a href="index.php?offset=0">First</a> | <a href="index.php?offset={$prev_offset}">Précédent</a>
{/if} |

{section name=pages start=0 loop=$num_blogs step=$items_per_page}
  {if $offset == $smarty.section.pages.index}
    {$smarty.section.pages.iteration} | 
  {else}
    <a href="index.php?offset={$smarty.section.pages.index}">{$smarty.section.pages.iteration}</a> |
  {/if}
  
{/section}

{if $next_offset >= $num_blogs}
  Suivant | Dernière page
{else}
  <a href="index.php?offset={$next_offset}">Next</a> | <a href="index.php?offset={$num_blogs-1}">Dernière page</a>
{/if}
	  
      
      
      <!-- END CONTENT -->
{include file='footer.tpl'}
