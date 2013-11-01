<?php

include 'db_queries.php';

//======================== STATIC MENU ==========================

function mainTemplate($mainContent, $pageTitle) {
    global $smarty;
//    $navBar = navBar();
    $smarty->assign(array(
        "MAIN_CONTENT" => $mainContent,
      //  "NAVBAR" => $navBar,
        "PAGE_TITLE" => $pageTitle
    ));
    $template = $smarty->fetch("firstyear.html");
    return $template;
}

//======================== MAIN TEMPLATE ==========================
//======================== HOMEPAGE ===============================
function firstyearpage() {
    global $smarty;
    $template = $smarty->fetch("1yearpage.html");
    $template = mainTemplate($template, "Welcome to the UBC CS Degree Navigator");
    return $template;
}

//========================= HOMEPAGE ==============================
//========================== REVIEW  ==============================
function reviewClaim($_POST) {
    global $smarty;
    $template = $smarty->fetch("reviewClaim.html");
    $template = $template . claimSelect() . viewClaimPost($_POST);
    $template = mainTemplate($template, "Review your New Claim");
    return $template;
}

//=========================== REVIEW =============================
//======================== REGISTER CLAIM ========================
function registerClaim() {
    global $smarty;
    $template = $smarty->fetch("register.html");
    $template = $template . startClaim();
    $template = mainTemplate($template, "Registration Page");
    return $template;
}

//======================== REGISTER CLAIM =========================
//======================== CREATE ACCOUNT =========================
function createAccount() {
    global $smarty;
    $template = $smarty->fetch("create_account.html");
    $template = $template . signup();
    $template = mainTemplate($template, "Create An Account");
    return $template;
}

//========================  CLAIM ACCOUNT =========================
////========================== REVIEW  ==============================
function reviewCreatedClaim($_POST) {
    global $smarty;
    $template = $smarty->fetch("reviewClaim.html");
    $template = $template . setPosty($_POST['claimid']);
    $template = mainTemplate($template, "Review your Claim");
    return $template;
}

//=========================== REVIEW =============================
////======================== HOMEPAGE ===============================
function updateClaim() {
    global $smarty;
    $template = $smarty->fetch("firstyear.html");
    $template = $template . viewClaimPost($_POST);
    $template = mainTemplate($template, "Update A Claim");
    return $template;
}

//========================= HOMEPAGE ==============================
//////======================== HOMEPAGE ===============================
function enterClaim() {
    global $smarty;
    $template = $smarty->fetch("register.html");
    $template = $template . startClaim();
    $template = mainTemplate($template, "Start A New Claim");
    return $template;
}

//========================= HOMEPAGE ==============================
//======================== NAVBAR =================================
function navBar() {
 
    $currPage = basename($_SERVER['PHP_SELF']);
    $navLinks["1st Year Courses"] = "index.php";
    $navLinks["2nd Year Courses"] = "create_account.php";
    $navLinks["3rd and 4th Year Courses"] = "register.php";
    $navLinks["Elective Courses"] = "reviewClaim-new.php";
    $navLinks["All Requirements"] = "updateClaim.php";

    while (list($key, $value) = each($navLinks)) {
        if ($value == $currPage) {
            $NavEls[] = "$key";
        } else {
            $NavEls[] = "<a href='$value'>$key</a>";
        }
    }
    $NavBar = join(' | ', $NavEls);
    return $NavBar;
}

//======================== NAVBAR ================================
//======================== SIGN-UP   ===============================
function signup() {
    $signup = "<link rel='stylesheet' type='text/css' href='./css/layout.css'/>" .
            "<form method='post' action='created_account.php'>
            <div class='forms' align='center'>
            <h3> Please enter your information: </h3>
            <table>
            <tr>
            <td> <span> Username:</span> </td>
            <td> <input type='textbox' name='Username' value=''/> </tr>
            </tr>
            <tr>
            <td> <span> Password:</span> </td>
            <td> <input type='password' name='Password' value=''/> </tr>
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
            <td> <input type='textbox' name='email' value=''/> </td>
            </tr>
            <tr>
            <td> <span> Employer:</span> </td>
            <td> <input type='textbox' name='Employer' value=''/> </td>
            </tr>
            <tr>
            <td><span> Phone Number:</span> </td>
            <td><input type='textbox' name='Phone' value=''/> </td>
            </tr>
            <tr>
            <td><span> Address:</span> </td>
            <td><input type='textbox' name='Address' value=''/></td>
            </tr>
            <tr> 
            <td>   
            Role: 
            </td> 
            <td>
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
            <input type='submit' name='submit' value='Create Account'/>
            <br>
            </div>
            </form>";
    return $signup;
}

//======================== SIGN-UP ===============================     
//========================== CREATED ACCOUNT ===========================
function newAccount($_POST) {
    global $smarty;
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $fname = $_POST['Firstname'];
    $lname = $_POST['Lastname'];
    $email = $_POST['email'];
    $Employer = $_POST['Employer'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $Role = $_POST['Type'];
    $template = $smarty->fetch("created_account.html");
    $template = $template . "<h1>" . $fname . " " . $lname . "! </h1>";
    $template = mainTemplate($template, "Account Creation");
    insertAccount($username, $password, $fname, $lname, $email, $Employer, $Phone, $Address, $Role);
    $submission = "<div align='center'><form action='newClaimpageenter.php'>
        <input type='submit' name='newaccount' value='Click here to submit a claim'></form></div>";
    return $template . $submission;
}

//======================== DB_CREATE_ACCOUNT =======================   
function insertAccount($username, $password, $fname, $lname, $email, $Employer, $Phone, $Address, $Role) {
    connect_to_db();
    $sql = "INSERT INTO `account` (`first_name`, `last_name`, `email`, `company`, `phone`, `account_created`, `address`, `role`, `username`, `password`) VALUES ('$fname', '$lname', '$email', '$Employer', '$Phone', NOW(), '$Address', '$Role', '$username', '$password')";
    Query($sql);
    mysql_close();
}

//======================== DB_CREATE_ACCOUNT =======================   
//======================== DB_VIEW_CLAIM ===========================   
function viewClaims($_POST) {
    connect_to_db();
    $sql = "SELECT * FROM `account` WHERE `claim_number`=  ";
    Query($sql);
    mysql_close();
}

//======================== DB_CREATE_ACCOUNT =======================
//======================== DB_NEW_CLAIM ============================
function insertClaims($_POST) {

    $ClaimId = $_POST['claimid'];
    $Worker = $_POST['worker'];
    $Employer = $_POST['employer'];
    $Physician = $_POST['physician'];
    $Date = $_POST['Date'];
    $Injury = $_POST['InjuryDescription'];
    $Type = $_POST['Type'];
    $Status = $_POST['status'];
    $DateCreated = $_POST['DateCreated'];

    connect_to_db();
    $sql1 = "SELECT `first_name`, `last_name` FROM `account` WHERE `claim_number`= $ClaimId";
    $result = Query($query);
    print_r($result);
    $sql2 = "INSERT INTO `effisafe`.`Claim` (`claim_number`, `worker_id`, `employer_id`, `injury_type`, `injury_date`, `injury_status`, `claimaint_fname`, `claimant_lname`, `physician_id`, `claims_cost`, `benefits`) VALUES ('$ClaimId', '$Worker', '$Employer', '$Type', '$DateCreated', '$Status', 'Ncic$', 'Ross', '$Physician', '1000', 'sdf')";
    Query($sql2);
    mysql_close();
}

//======================== DB_NEW_CLAIM =========================== 
//
//    
//======================== CLAIMVIEW ==============================
function startClaim() {
    $creation_DATE = Date(DATE_RFC822);
    $claimview1 = "<link rel='stylesheet' type='text/css' href='./css/layout.css'/>" .
            "<form method='post' action='reviewClaim-new.php'>
        <div class='forms' align='center'>
        <h3> Please enter your new claim: </h3>
        <table>
        <tr> 
        <td><span> Claim Number: </span> </td> 
        <td><input type='textbox' name='claimid' value=''/> </td>
        </tr>
        <tr>
        <td> <span> Worker: </span> </td> <td>";


    $claimview4 = "</tr>
        <tr>
        <td> <span> Employer:</span> </td> <td>";


    $claimview2 = "</td>
            </tr>
            <tr>
            <td><span>Physician:</span> </td> <td>";


    $claimview3 = "</td> </tr>
        <tr>
        <td> Manager:
        </td> <td> ";



    $claimview5 = " </td> </tr>
        <tr>
        <td><span> Date of Injury:</span> </td>
        <td><input type='textbox' name='Date' value=''/></td>
        </tr>
        <tr>
        <td> <span> Injury Description:</span> </td>
        <td> <input type='textbox' name='InjuryDescription' value=''/> </tr>
        </tr>
        <tr> <td>   Injury Type: </td> <td>
        <select name='Type'>
        <option>Personal Injury</option>
        <option>Occupational Disease</option>
        </select>
        </td>
        </tr>
        <tr>
        <td> <span> Status Update:</span>
        </td>
        <td>
        <select name='status'>
        <option>Started</option>
        <option>Pending</option>
        <option>Allowed</option>
        <option>Disallowed</option>
        <option>Closed</option>
        </select>
        </td>
        </tr>
        </table>
        </div>
        <br>
        <div align='center'>
        <input type='submit' name='submit' name='Start Claim'/>
        <input type='hidden' name='DateCreated' value='$creation_DATE'/> <br>
        <br>
        </div>
        </form>";

    $rollbarEmp = rollBarEmp();
    $rollbarPhys = rollBarPhys();
    $rollbarWork = rollBarWorker();
    $rollbarManager = rollBarManager();
    return $claimview1 . $rollbarWork . $claimview4 . $rollbarEmp . $claimview2 . $rollbarPhys . $claimview3 . $rollbarManager . $claimview5;
}

//======================== CLAIMVIEW ===============================   
//======================== EMPLOYER ROLLBAR ========================
function rollBarEmp() {
    connect_to_db();
    global $beginning;
    $result = fetchEmployerAccount();
    $rownum = mysql_num_rows($result);
    $i = 0;

    $beginning = "<select name='employer'>";
    while ($i <= $rownum) {
        $fetched_row = (mysql_fetch_row($result));
        $row1 = $fetched_row[0];
        $row2 = $fetched_row[1];

        $beginning .= "<option>";
        $beginning .= $row1 . " " . $row2;
        $beginning .= "</option>";

        $i++;
    }
    $beginning .= "</select>";
    return $beginning;
}

//======================== EMPLOYER ROLLBAR ========================
////======================== EMPLOYER ROLLBAR ========================
function rollBarManager() {
    connect_to_db();
    global $beginning;
    $result = fetchManagerAccount();
    $rownum = mysql_num_rows($result);
    $i = 0;

    $beginning = "<select name='manager'>";
    while ($i <= $rownum) {
        $fetched_row = (mysql_fetch_row($result));
        $row1 = $fetched_row[0];
        $row2 = $fetched_row[1];

        $beginning .= "<option>";
        $beginning .= $row1 . " " . $row2;
        $beginning .= "</option>";

        $i++;
    }
    $beginning .= "</select>";
    return $beginning;
}

//======================== EMPLOYER ROLLBAR ========================
//======================== PHYSICIAN ROLLBAR ========================
function rollBarPhys() {
    connect_to_db();
    global $beginning;
    $result = fetchPhysicianAccount();
    $rownum = mysql_num_rows($result);
    $i = 0;

    $beginning = "<select name='physician'>";
    while ($i <= $rownum) {
        $fetched_row = (mysql_fetch_row($result));
        $row1 = $fetched_row[0];
        $row2 = $fetched_row[1];

        $beginning .= "<option>";
        $beginning .= $row1 . " " . $row2;
        $beginning .= "</option>";

        $i++;
    }
    $beginning .= "</select>";
    return $beginning;
}

//======================== PHYSICIAN ROLLBAR ========================
//======================== WORKER ROLLBAR ========================
function rollBarWorker() {
    connect_to_db();
    global $beginning;
    $result = fetchWorkerAccount();
    $rownum = mysql_num_rows($result);
    $i = 0;

    $beginning = "<select name='worker'>";
    while ($i <= $rownum) {
        $fetched_row = (mysql_fetch_row($result));
        $row1 = $fetched_row[0];
        $row2 = $fetched_row[1];

        $beginning .= "<option>";
        $beginning .= $row1 . " " . $row2;
        $beginning .= "</option>";

        $i++;
    }
    $beginning .= "</select>";
    return $beginning;
}

// This function will be used for creating a new claim immediately.
//======================== WORKER ROLLBAR ========================
function viewClaimPost($_POST) {
    $ClaimId = $_POST['claimid'];
    $Worker = $_POST['worker'];
    $Employer = $_POST['employer'];
    $Physician = $_POST['physician'];
    $Date = $_POST['Date'];
    $Injury = $_POST['InjuryDescription'];
    $Type = $_POST['Type'];
    $Status = $_POST['status'];
    $DateCreated = $_POST['DateCreated'];

    return "<p>" . "The claim id number is " . $ClaimId . "<br>" .
            "The worker's name is " . $Worker . "<br>" .
            "The claimant's employer is " . $Employer . "<br>" .
            "The claimant's physician is " . $Physician . "<br>" .
            "The date of injury was " . $Date . "<br>" .
            "The claim diagnosis is " . $Injury . "<br>" .
            "The injury type is " . $Type . "<br>" .
            "The claim status is " . $Status . "<br>" .
            "The claim was created " . $DateCreated . "</p>";
}

function claimSelect() {

    connect_to_db();
    global $claimselect;
    $result = fetchClaimids();
    $rownum = mysql_num_rows($result);

    $claimselect = "<form method='post' action='reviewClaim.php'><div align='center'> <select name='claimid'>";

    $i = 0;
    while ($i <= $rownum) {
        $fetched_row = (mysql_fetch_row($result));
        $row1 = $fetched_row[0];
        $claimselect .= "<option>";
        $claimselect .= "$row1";
        $claimselect .= "</option>";
        $i++;
    }

  
    $claimselect .= "</select>  <br> <br>  
    <input type='submit' name='review' name='Review Claim'/>
        </div>
        </form>";
    return $claimselect;
}

function setPosty($claimid) {
// fetches the claim info and sets the post for reviewClaim and viewClaims
  
    print $claimid;
    print_r(fetchClaim($claimid));
}