<?php

// //Events @1-F81417CB

//headerincludablepage_BeforeShow @1-E01C526A
function headerincludablepage_BeforeShow(& $sender)
{
    $headerincludablepage_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $headerincludablepage; //Compatibility
//End headerincludablepage_BeforeShow

//Custom Code @6-2A29BDB7
// -------------------------
    // Write your own code here.
// -------------------------
global $headerincludablepage;
if (CCGetUserID())
{
	$DisplayStr = "Welcome " . CCGetUserLogin();
	$headerincludablepage->NewRecord1->loginlnk->Visible=false; //Now working
	$headerincludablepage->NewRecord1->loginbtn->Visible=false; //Work
}
else
{
	$DisplayStr = "Welcome Guest";
	$headerincludablepage->NewRecord1->logoutlnk->Visible=false; //Now working
	$headerincludablepage->NewRecord1->logoutbtn->Visible=false; //Work
}

$headerincludablepage->NewRecord1->TextBox1->SetValue($DisplayStr);

//End Custom Code

//Close headerincludablepage_BeforeShow @1-2CDCE022
    return $headerincludablepage_BeforeShow;
}
//End Close headerincludablepage_BeforeShow


?>
