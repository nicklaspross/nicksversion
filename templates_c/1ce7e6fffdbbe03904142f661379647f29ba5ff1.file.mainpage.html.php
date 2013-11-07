<?php /* Smarty version Smarty-3.1.8, created on 2013-11-01 12:01:34
         compiled from "./templates/mainpage.html" */ ?>
<?php /*%%SmartyHeaderCode:10454275455273fa8e4f9854-04949501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce7e6fffdbbe03904142f661379647f29ba5ff1' => 
    array (
      0 => './templates/mainpage.html',
      1 => 1383332442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10454275455273fa8e4f9854-04949501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5273fa8e50b289_70958280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5273fa8e50b289_70958280')) {function content_5273fa8e50b289_70958280($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel='stylesheet' type='text/css' href='./css/bootstrap.css'/>
        <link rel='stylesheet' type='text/css' href='./css/style.css'/>
        <title> <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
    </head>
    <body>
        <div> 
            <img src="./images/logo1.png">
           
             
            <br> 
        </div>

        <div align="center">
            <table>

                <tr> <td></td><td>

                    </td> <td>            <?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

                    </td></tr>
            </table>
        </div>

    </body>
</html><?php }} ?>