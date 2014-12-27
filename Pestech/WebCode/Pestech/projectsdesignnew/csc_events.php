<?php
//BindEvents Method @1-8D5C6737
function BindEvents()
{
    global $conductorsizingcalculatio;
    $conductorsizingcalculatio->projectid->CCSEvents["BeforeShow"] = "conductorsizingcalculatio_projectid_BeforeShow";
}
//End BindEvents Method

//conductorsizingcalculatio_projectid_BeforeShow @16-105C2778
function conductorsizingcalculatio_projectid_BeforeShow(& $sender)
{
    $conductorsizingcalculatio_projectid_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $conductorsizingcalculatio; //Compatibility
//End conductorsizingcalculatio_projectid_BeforeShow

//Retrieve Value for Control @58-291EADBD
    $Container->projectid->SetValue(CCGetFromGet("Id", ""));
//End Retrieve Value for Control

//Close conductorsizingcalculatio_projectid_BeforeShow @16-4209EE9C
    return $conductorsizingcalculatio_projectid_BeforeShow;
}
//End Close conductorsizingcalculatio_projectid_BeforeShow


?>
