{include file="document_header.tpl"}
			<div id="menu_left">
				<ul id="buttons">
				</ul>
			</div>
			<div id="main">
				<h1>Liste des Tentatives d'ouverture de Session</h1>
{if $item|@count == 0}
				<p>Aucune Tentative.</p>
{else}
				<table class="list">
					<tr>
						<th>date</th><th>heure</th><th>ip</th><th>login</th>
					</tr>
{section name=list loop=$item}
					<tr class="{if $smarty.section.list.index %2 == 0}pair{else}impair{/if}">
						<td style="width: {10*10}px;">{$item[list].date}</td>
						<td style="width: {8*10}px;">{$item[list].heure}</td>
						<td style="width: {$item_fields[1].size*10}px;">{$item[list].ip}</td>
						<td style="width: {$linked_fields[4].size*10}px;">{$linked_item[$item[list].id_utilisateur].login}</td>
{if in_array('Tentative::read',$droits)}
						<td>
							<form action="{$URI_root}/Tentative/read/{$item[list].id}" method="post">
								<input type="hidden" name="id" value="{$id}">
								<input type="hidden" name="page" value="{$page}">
								<button type="submit" name="btn_read" class="read" title="Consulter"></button>
							</form>
						</td>
{/if}
					</tr>
{/section}
{if $pages > 1}
					<tr>
						<td colspan="6"> Aller à la page&nbsp;: 
{if $pages < 10}
{assign var="start" value="2"}
{assign var="end" value="`$pages-1`"}
{else}
{if 2 > ($page - 3)}
{assign var="start" value="2"}
{else}
{assign var="start" value="`$page-3`"}
{/if}
{if $pages <= ($page + 3)}
{assign var="end" value="`$pages-1`"}
{else}
{assign var="end" value="`$page+3`"}
{/if}
{/if}
							<a href="{$URI_root}/Tentative/list/{$id}/1">1</a>
{if $start != 2}
							&nbsp;&hellip;
{/if}
{for $iterate = $start to $end}
							&nbsp;<a href="{$URI_root}/Tentative/list/{$id}/{$iterate}">{$iterate}</a>
{/for}
{if $end != ($pages-1)}
							&nbsp;&hellip;
{/if}
{if $pages > 1}
							&nbsp;<a href="{$URI_root}/Tentative/list/{$id}/{$pages}">{$pages}</a>
{/if}
						</td>
					</tr>
{/if}
				</table>
{/if}
			</div>
{include file="document_footer.tpl"}
