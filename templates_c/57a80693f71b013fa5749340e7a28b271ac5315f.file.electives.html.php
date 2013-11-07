<?php /* Smarty version Smarty-3.1.8, created on 2013-11-06 10:51:46
         compiled from "./templates/electives.html" */ ?>
<?php /*%%SmartyHeaderCode:1856194057527a8fc2114e51-72113294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a80693f71b013fa5749340e7a28b271ac5315f' => 
    array (
      0 => './templates/electives.html',
      1 => 1383687352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856194057527a8fc2114e51-72113294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_527a8fc2191734_74560362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a8fc2191734_74560362')) {function content_527a8fc2191734_74560362($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel='stylesheet' type='text/css' href='./css/bootstrap.css'/>
        <link rel='stylesheet' type='text/css' href='./css/style1.css'/>
        <link rel='stylesheet' type='text/css' href='./css/style2.css'/>


        <title> <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
    </head>
    <body>

        <div align="left">

            <img src="./images/logo1.png">
        </div>





        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="sidebar">
                        <div class="menubar">
                            <ul>
                                <li> <a href="index.php"> First Year CS  </a></li>
                                <li> <a href="firstyearscience.php"> First Year Science </a></li>
                                <li> <a href="secondCS.php">Second Year CS </a></li>
                                <li> <a href="thirdfour.php">Third and Fourth Year  </a></li>
                                <li> <a href="electives.php">Electives </a></li>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div>

 <hr>  <table align="center">
                <tr><th>Course Requirement</th><th>Course Taken </th><th>Status</th><th>Credits</th></tr>
                <tr><td> CPSC 110 or 111 </td><td> CPSC 110 </td><td> Completed </td><td> 4.0 </td></tr>
                <tr><td>Row:2 Cell:1</td><td>Row:2 Cell:2</td><td>Row:2 Cell:3</td><td>Row:2 Cell:4</td></tr>
                <tr><td>Row:3 Cell:1</td><td>Row:3 Cell:2</td><td>Row:3 Cell:3</td><td>Row:3 Cell:4</td></tr>
                <tr><td>Row:4 Cell:1</td><td>Row:4 Cell:2</td><td>Row:4 Cell:3</td><td>Row:4 Cell:4</td></tr>
                <tr><td>Row:5 Cell:1</td><td>Row:5 Cell:2</td><td>Row:5 Cell:3</td><td>Row:5 Cell:4</td></tr>
            </table>

        </div>
       <div align="right">  <button onclick="myFunction()">Check if you meet elective Requirements </button>  </div>

    </body>
</html><?php }} ?>