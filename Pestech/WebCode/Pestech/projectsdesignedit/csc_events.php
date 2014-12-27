<?php
//BindEvents Method @1-F5F7CC04
function BindEvents()
{
    global $conductorsizingcalculations;
    $conductorsizingcalculations->CCSEvents["BeforeSelect"] = "conductorsizingcalculations_BeforeSelect";
}
//End BindEvents Method

//conductorsizingcalculations_BeforeSelect @8-6B27092A
function conductorsizingcalculations_BeforeSelect(& $sender)
{
    $conductorsizingcalculations_BeforeSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $conductorsizingcalculations; //Compatibility
//End conductorsizingcalculations_BeforeSelect

//Custom Code @56-2A29BDB7
// -------------------------
    // Write your own code here.
// -------------------------

$conductorsizingcalculations->DataSource->Where = "Id=" . CCGetParam("Id");


//End Custom Code

//Close conductorsizingcalculations_BeforeSelect @8-5EB482FB
    return $conductorsizingcalculations_BeforeSelect;
}
//End Close conductorsizingcalculations_BeforeSelect


?>
