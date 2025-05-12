<?php
/* Smarty version 5.4.5, created on 2025-05-12 06:23:22
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_682177ba2370d8_04817911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864646e6ee363fbcc7c30fb4575049fbbaf685c1' => 
    array (
      0 => 'index.tpl',
      1 => 1747023281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_682177ba2370d8_04817911 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\shop.local\\views\\default';
?><html>
    <head>
        <title><?php echo $_smarty_tpl->getValue('pageTitle');?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('templateWebPath');?>
css/main.css" type="text/css">
    </head>
<body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>

    <div id="leftColumn">

        <div id="leftMenu">
            <div class="menuCaption">Меню:</div>
                 пункт1<br />
                 пункт2<br />
                 пункт3<br />
        </div>

    </div>

    <div id="centerColumn">
        centerColumn
    </div>

    <div id="footer">
        Footer
    </div>

</body>

</html><?php }
}
