<?php

include 'common.php';

// A file will all the database functions that all other php files use.
//================================ CONNECT TO THE DATABASE ==================================
function connect_to_db() {
    global $link, $DBhost, $DBname, $DBusername, $DBpassword;
    $link = mysql_connect($DBhost, $DBusername, $DBpassword);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    $db = mysql_select_db($DBname, $link);

#select the database
    if (!(mysql_select_db($DBname, $link))) {
        $ErrMsg = "Error in selecting $DBName database: "
                . mysql_errno() . " "
                . mysql_error();
        DisplayErrMsg($ErrMsg);
        mysql_close($link);
        exit();
    }
}

#end of database select if*/
//end of ConnectToDatabase
//------------------------------ConnectToDatabase ENDS------------------------
#-----------------------------------DisplayErrMsg BEGINS-----------------------------------

function DisplayErrMsg($ErrMsg) {
    print("<blockquote>
          <blockquote>
	    <blockquote>
	     <H3><font color=\"#cc0000\">$ErrMsg</font></H3>
	    </blockquote>
         </blockquote>
     </blockquote>"
    );
}

#end of DisplayErrMsg
#-----------------------------------DisplayErrMsg ENDS-------------------------------------
#--------------------------------Query BEGINS-----------------

function Query($query) {
    global $link;
    if (!($result = mysql_query($query, $link))) {
        $ErrMsg = "Bad query to 
  database $DBName: Error Number "
                . mysql_errno() . "<br>"
                . mysql_error();
        DisplayErrMsg($ErrMsg);
        exit;
    }//end of query test
    return $result;
}

//end query function
#--------------------------------Query ENDS------------------
//================================ CONNECT TO THE DATABASE ==================================
?>