<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 22:02:22
         compiled from "./templates/claimview.html" */ ?>
<?php /*%%SmartyHeaderCode:19970469374fa4b45e9e19f2-96438672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d0cb58275118120d8dba0f9552e759569176ca' => 
    array (
      0 => './templates/claimview.html',
      1 => 1336194068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19970469374fa4b45e9e19f2-96438672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa4b45e9e8ed2_64414911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa4b45e9e8ed2_64414911')) {function content_4fa4b45e9e8ed2_64414911($_smarty_tpl) {?> <link rel='stylesheet' type='text/css' href='./css/layout.css'/>
            "<form method='post' action='create_account.php'>
            <div class='forms'>
            <h3> Please enter your information: </h3>
            <table>
            <tr>
            <td> <span> Username:</span> </td>
            <td> <input type='textbox' name='Username' value=''/> </tr>
            </tr>
            <tr>
            <td> <span> Password:</span> </td>
            <td> <input type='textbox' name='Password' value=''/> </tr>
            </tr>
            <tr> </tr> <br>
            <tr>
            <td> <span> First name: </span> </td> 
            <td> <input type='textbox' name='Firstname' value=''/> </td>
            </tr>
            <tr>
            <td> <span> Last Name:</span> </td>
            <td> <input type='textbox' name='Lastname' value=''/> </td>
            </tr>
              <tr>
            <td> <span> E-mail:</span> </td>
            <td> <input type='textbox' name='Lastname' value=''/> </td>
            </tr>
            <tr>
            <td> <span> Employer:</span> </td>
            <td> <input type='textbox' name='Employer' value=''/> </td>
            </tr>
            <tr>
            <td><span> Phone Number:</span> </td>
            <td><input type='textbox' name='Physician' value=''/> </td>
            </tr>
            <tr>
            <td><span> Address:</span> </td>
            <td><input type='textbox' name='Date' value=''/></td>
            </tr>
            
            <tr> <td>   Role: </td> <td>
            <select name='Type'>
            <option>Worker</option>
            <option>Employer</option>
            <option>Physician</option>

            </select>
            </td>
            </tr>
        </table>
        </div>
        <br>
        <div align='center'>
        <input type='submit' name='submit' name='Start Claim'/>
        
        <input type='hidden' name='DateCreated' value='date'/> <br>
        
        <br>
        </div>

        </form><?php }} ?>