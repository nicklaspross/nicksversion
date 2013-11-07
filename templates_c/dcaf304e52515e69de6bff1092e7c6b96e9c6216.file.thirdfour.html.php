<?php /* Smarty version Smarty-3.1.8, created on 2013-11-06 11:01:27
         compiled from "./templates/thirdfour.html" */ ?>
<?php /*%%SmartyHeaderCode:1842357203527a92073c4a91-01202490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcaf304e52515e69de6bff1092e7c6b96e9c6216' => 
    array (
      0 => './templates/thirdfour.html',
      1 => 1383687307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842357203527a92073c4a91-01202490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_527a92073db978_55282271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a92073db978_55282271')) {function content_527a92073db978_55282271($_smarty_tpl) {?><!DOCTYPE html>
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


   <div align="right">
       <a href="index.html">
           
            <img src="./images/ubc.png"> </a>
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
  

    <hr>


        <table align="center">
            <tr><th>Course Requirement</th><th>Course Taken </th><th>Status</th><th>Credits</th></tr>
            <tr><td> CPSC 110 or 111 </td><td> CPSC 110 </td><td> Completed </td><td> 4.0 </td></tr>
            <tr><td> CPSC 121 </td><td> CPSC 121 </td><td> Completed </td><td>3.0</td></tr>
            <tr><td> CHEM 101 or 103 </td><td> CPSC 101 </td><td>In Progress</td><td>4.0</td></tr>
            <tr><td> MATH 101 or 110</td><td>MATH 101</td><td>Enrolled</td><td>3.0</td></tr>
            <tr><td>BIO 111 or 100</td><td>BIO 111</td><td>Completed</td><td>4.0</td></tr>
        </table>

        <div align="right">  <button onclick="myFunction()">Check if you meet 3rd and 4th Year Requirements </button>  </div>

    </div>


</body>
</html><?php }} ?>