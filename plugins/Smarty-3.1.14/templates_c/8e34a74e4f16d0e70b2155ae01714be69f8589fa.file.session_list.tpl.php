<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 21:12:38
         compiled from "view\templates\session_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2365952947a9b2b7b79-19964460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e34a74e4f16d0e70b2155ae01714be69f8589fa' => 
    array (
      0 => 'view\\templates\\session_list.tpl',
      1 => 1385576410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2365952947a9b2b7b79-19964460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52947a9c1ba041_20000043',
  'variables' => 
  array (
    'item' => 0,
    'linked_fields' => 0,
    'linked_item' => 0,
    'item_fields' => 0,
    'droits' => 0,
    'URI_root' => 0,
    'id' => 0,
    'page' => 0,
    'pages' => 0,
    'start' => 0,
    'end' => 0,
    'iterate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52947a9c1ba041_20000043')) {function content_52947a9c1ba041_20000043($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("document_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="menu_left">
				<ul id="buttons">
				</ul>
			</div>
			<div id="main">
				<h1>Liste des Sessions</h1>
<?php if (count($_smarty_tpl->tpl_vars['item']->value)==0){?>
				<p>Aucune Session.</p>
<?php }else{ ?>
				<table class="list">
					<tr>
						<th colspan="2">debut</th><th colspan="2">fin</th><th rowspan="2">login</th><th rowspan="2">ip</th>
					</tr>
					<tr>
						<th>date</th><th>heure</th><th>date</th><th>heure</th>
					</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
					<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['list']['index']%2==0){?>pair<?php }else{ ?>impair<?php }?>">
						<td style="width: <?php echo 10*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_debut'];?>
</td>
						<td style="width: <?php echo 8*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['heure_debut'];?>
</td>
						<td style="width: <?php echo 10*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_fin'];?>
</td>
						<td style="width: <?php echo 8*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['heure_fin'];?>
</td>
						<td style="width: <?php echo $_smarty_tpl->tpl_vars['linked_fields']->value[4]['size']*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['linked_item']->value[$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id_utilisateur']]['login'];?>
</td>
						<td style="width: <?php echo $_smarty_tpl->tpl_vars['item_fields']->value[1]['size']*10;?>
px;"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ip'];?>
</td>
<?php if (in_array('Session::read',$_smarty_tpl->tpl_vars['droits']->value)){?>
						<td>
							<form action="<?php echo $_smarty_tpl->tpl_vars['URI_root']->value;?>
/Session/read/<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" method="post">
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
								<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<button type="submit" name="btn_read" class="read" title="Consulter"></button>
							</form>
						</td>
<?php }?>
					</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['pages']->value>1){?>
					<tr>
						<td colspan="6"> Aller à la page&nbsp;: 
<?php if ($_smarty_tpl->tpl_vars['pages']->value<10){?>
<?php $_smarty_tpl->tpl_vars["start"] = new Smarty_variable("2", null, 0);?>
<?php $_smarty_tpl->tpl_vars["end"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['pages']->value-1), null, 0);?>
<?php }else{ ?>
<?php if (2>($_smarty_tpl->tpl_vars['page']->value-3)){?>
<?php $_smarty_tpl->tpl_vars["start"] = new Smarty_variable("2", null, 0);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars["start"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['page']->value-3), null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['pages']->value<=($_smarty_tpl->tpl_vars['page']->value+3)){?>
<?php $_smarty_tpl->tpl_vars["end"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['pages']->value-1), null, 0);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars["end"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['page']->value+3), null, 0);?>
<?php }?>
<?php }?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['URI_root']->value;?>
/Session/list/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/1">1</a>
<?php if ($_smarty_tpl->tpl_vars['start']->value!=2){?>
							&nbsp;&hellip;
<?php }?>
<?php $_smarty_tpl->tpl_vars['iterate'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['iterate']->step = 1;$_smarty_tpl->tpl_vars['iterate']->total = (int)ceil(($_smarty_tpl->tpl_vars['iterate']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['iterate']->step));
if ($_smarty_tpl->tpl_vars['iterate']->total > 0){
for ($_smarty_tpl->tpl_vars['iterate']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['iterate']->iteration = 1;$_smarty_tpl->tpl_vars['iterate']->iteration <= $_smarty_tpl->tpl_vars['iterate']->total;$_smarty_tpl->tpl_vars['iterate']->value += $_smarty_tpl->tpl_vars['iterate']->step, $_smarty_tpl->tpl_vars['iterate']->iteration++){
$_smarty_tpl->tpl_vars['iterate']->first = $_smarty_tpl->tpl_vars['iterate']->iteration == 1;$_smarty_tpl->tpl_vars['iterate']->last = $_smarty_tpl->tpl_vars['iterate']->iteration == $_smarty_tpl->tpl_vars['iterate']->total;?>
							&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URI_root']->value;?>
/Session/list/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['iterate']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iterate']->value;?>
</a>
<?php }} ?>
<?php if ($_smarty_tpl->tpl_vars['end']->value!=($_smarty_tpl->tpl_vars['pages']->value-1)){?>
							&nbsp;&hellip;
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['pages']->value>1){?>
							&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URI_root']->value;?>
/Session/list/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a>
<?php }?>
						</td>
					</tr>
<?php }?>
				</table>
<?php }?>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("document_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>