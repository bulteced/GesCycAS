<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 15:00:10
         compiled from "view\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21946529477e65a72d2-62855158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215fd94bbd694f4b162ff05b25695055f57b9ab9' => 
    array (
      0 => 'view\\templates\\error.tpl',
      1 => 1385560781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21946529477e65a72d2-62855158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529477e72a5d26_29626890',
  'variables' => 
  array (
    'URI_root' => 0,
    'error_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529477e72a5d26_29626890')) {function content_529477e72a5d26_29626890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("document_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div id="menu_left">
				<ul id="buttons">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['URI_root']->value;?>
" title="Accueil">Accueil</a></li>
				</ul>
			</div>
			<div id="main">
				<h1>Erreur</h1>
				<p class="erreur"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</p>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("document_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>