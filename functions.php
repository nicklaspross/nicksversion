<?php
include 'db_queries.php';

//========================== REVIEW  ==============================
function firstyearSC() {
  global $smarty;
    $template = $smarty->fetch("firstyearscience.html");
    return $template;
}
//=========================== REVIEW =============================
//======================== FIRST YEAR SCIENCE =====================
// fetches html document and inserts dynamic HTML
function firstyearCS() {
    global $smarty;
    $template = $smarty->fetch("firstyear.html");
    return $template;
}
//========================= FIRST YEAR SCIENCE=====================
//========================== electives  ==============================
function electives() {
  global $smarty;
    $template = $smarty->fetch("electives.html");
    return $template;
}
//=========================== elevtices =============================
//======================== thirdfour SCIENCE =====================
// fetches html document and inserts dynamic HTML
function thirdfour() {
    global $smarty;
    $template = $smarty->fetch("thirdfour.html");
    return $template;
}
//========================= FIRST YEAR SCIENCE=====================


//========================== Secondyear  ==============================
function secondyear() {
  global $smarty;
    $template = $smarty->fetch("secondyear.html");
    return $template;
}
//=========================== REVIEW =============================


