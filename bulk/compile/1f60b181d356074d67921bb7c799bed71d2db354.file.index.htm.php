<?php /* Smarty version Smarty-3.1.11, created on 2013-06-14 22:54:43
         compiled from "bulk/templates/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:154097244851b997488b3ff5-40196084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f60b181d356074d67921bb7c799bed71d2db354' => 
    array (
      0 => 'bulk/templates/index.htm',
      1 => 1371243257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154097244851b997488b3ff5-40196084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51b997491d2a86_47234216',
  'variables' => 
  array (
    'menu' => 0,
    'page' => 0,
    'menuitem' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b997491d2a86_47234216')) {function content_51b997491d2a86_47234216($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>MAIV - FOOD by Ines,Tycho &amp; Matthias</title>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<!-- html5 content -->
<div id="wrapper">
    <!-- wrapper -->
    <section id="menu" class="menu-50s">
        <!-- menu -->
        <ul>
            <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['menuitem']->value['page_id']){?>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_text'];?>
</li>
                <?php }else{ ?>
                <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['page_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_text'];?>
</a></li>
                <?php }?>
            <?php } ?>
        </ul>
        <!-- /menu -->
    </section>
    <section id="content-wrapper">
        <!-- content-wrapper -->
        <section id="content">
            <!-- content -->
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <!-- /content -->
        </section>
        <!-- /content-wrapper -->
    </section>
    <!-- /wrapper -->
</div>
<!-- /html5 content -->

<!-- javascript files -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="assets/js/Application.js"></script>
<!-- /javascript files -->

</body>
</html><?php }} ?>