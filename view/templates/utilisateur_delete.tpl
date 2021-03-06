{include file="document_header.tpl"}
			<div id="menu_left">
				<ul id="buttons">
{if in_array('Utilisateur::read',$droits)}
					<li><a href="../read/{$item.id}" title="Consulter">Consulter</a></li>
{/if}
{if in_array('Utilisateur::update',$droits)}
					<li><a href="../update/{$item.id}" title="Modifier">Modifier</a></li>
{/if}
					<li><a href="..">Annuler</a></li>
				</ul>
			</div>
			<div id="main">
				<h1>Suppression d'un Utilisateur</h1>
				<form name="utilisateur_delete" action="" method="post">
					<div id="main_items">
						<input type="hidden" name="id" value="{$item.id}">
						<table>
							<tr><td>Êtes-vous sûrs de vouloir supprimer l'utilisateur suivant&nbsp;?</td></tr>
							<tr>
								<td>
									<table>
										<tr>
											<th><label for="nom">nom : </label></th>
											<td id="nom">{$item.nom}</td>
										</tr>
										<tr>
											<th><label for="prenom">prenom : </label></th>
											<td id="prenom">{$item.prenom}</td>
										</tr>
										<tr>
											<th><label for="email">email : </label></th>
											<td id="email">{$item.email}</td>
										</tr>
										<tr>
											<th><label for="login">login : </label></th>
											<td id="login">{$item.login}</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div id="main_buttons">
						<input type="submit" name="btn_valider" value="OK">&nbsp;<input type="submit" name="btn_annuler" value="Annuler">
					</div>
				</form>
			</div>
{include file="document_footer.tpl"}