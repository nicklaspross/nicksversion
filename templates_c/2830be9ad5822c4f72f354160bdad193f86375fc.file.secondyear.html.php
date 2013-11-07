<?php /* Smarty version Smarty-3.1.8, created on 2013-11-06 11:01:26
         compiled from "./templates/secondyear.html" */ ?>
<?php /*%%SmartyHeaderCode:1637118189527a9206a66ad3-21119973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2830be9ad5822c4f72f354160bdad193f86375fc' => 
    array (
      0 => './templates/secondyear.html',
      1 => 1383687313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637118189527a9206a66ad3-21119973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_527a9206a7c024_85047362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a9206a7c024_85047362')) {function content_527a9206a7c024_85047362($_smarty_tpl) {?><!DOCTYPE html>
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
    
    
           <hr>


        <table align="center">
            <tr><th>Course Requirement</th><th>Course Taken </th><th>Status</th><th>Credits</th></tr>
            <tr><td> CPSC 110 or 111 </td><td> CPSC 110 </td><td> Completed </td><td> 4.0 </td></tr>
            <tr><td> CPSC 121 </td><td> CPSC 121 </td><td> Completed </td><td>3.0</td></tr>
            <tr><td> CHEM 101 or 103 </td><td> CPSC 101 </td><td>In Progress</td><td>4.0</td></tr>
            <tr><td> MATH 101 or 110</td><td>MATH 101</td><td>Enrolled</td><td>3.0</td></tr>
            <tr><td>BIO 111 or 100</td><td>BIO 111</td><td>Completed</td><td>4.0</td></tr>
        </table>

        <div align="right">  <button onclick="myFunction()">Check if you meet 2nd Year Requirements </button>  </div>

    </div>


</body>
</html><?php }} ?>