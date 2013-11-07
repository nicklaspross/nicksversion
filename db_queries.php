<?php
//=========================== FETCH EMPLOYER NAMES =============================
function fetchManagerAccount() {    
    $sql= "SELECT `first_name`, `last_name` FROM `account` WHERE `role`='Employer'";
    $result = Query($sql);
    return $result;
}
//=========================== FETCH EMPLOYER NAMES =============================
////=========================== FETCH EMPLOYER NAMES =============================
function fetchEmployerAccount() {    
    $sql= "SELECT `company` FROM `account` WHERE `role`='Employer'";
    $result = Query($sql);
    return $result;
}
//=========================== FETCH EMPLOYER NAMES =============================
//=========================== FETCH PROVIDER NAMES =============================
function fetchPhysicianAccount() {    
    $sql= "SELECT `first_name`, `last_name` FROM `account` WHERE `role`='Physician'";
    $result = Query($sql);
    return $result;
}
//=========================== FETCH PROVIDER NAMES =============================
//=========================== FETCH WORKER NAMES =============================
function fetchWorkerACcount() {    
    $sql= "SELECT `first_name`, `last_name` FROM `account` WHERE `role`='Worker'";
    $result = Query($sql);
    return $result;
}
//=========================== FETCH WORKER NAMES =============================
//=========================== FETCH WORKER NAMES =============================
function fetchClaimids() {    
    $sql= "SELECT `claim_number` FROM `Claim`";
    $result = Query($sql);
    return $result;
}
//=========================== FETCH WORKER NAMES =============================
//=========================== FETCH WORKER NAMES =============================
function fetchClaim($claimid) {   
    print $claimid;
    $query= "SELECT * FROM `Claim` WHERE `claim_number`=$claimid";
    $result = Query($query);
    return $result;
}
//=========================== FETCH WORKER NAMES =============================
?>
