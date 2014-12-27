<?php
//BindEvents Method @1-98CEBE5D
function BindEvents()
{
    global $projects2;
    global $projects3;
    global $Panel2;
    global $Panel1;
    global $CCSEvents;
    $projects2->projects2_TotalRecords->CCSEvents["BeforeShow"] = "projects2_projects2_TotalRecords_BeforeShow";
    $projects3->documentdate->CCSEvents["BeforeShow"] = "projects3_documentdate_BeforeShow";
    $Panel2->CCSEvents["BeforeShow"] = "Panel2_BeforeShow";
    $Panel1->CCSEvents["BeforeShow"] = "Panel1_BeforeShow";
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
    $CCSEvents["BeforeShow"] = "Page_BeforeShow";
    $CCSEvents["BeforeOutput"] = "Page_BeforeOutput";
    $CCSEvents["BeforeUnload"] = "Page_BeforeUnload";
}
//End BindEvents Method

//projects2_projects2_TotalRecords_BeforeShow @158-2D251833
function projects2_projects2_TotalRecords_BeforeShow(& $sender)
{
    $projects2_projects2_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects2; //Compatibility
//End projects2_projects2_TotalRecords_BeforeShow

//Retrieve number of records @159-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close projects2_projects2_TotalRecords_BeforeShow @158-C3E4A6DD
    return $projects2_projects2_TotalRecords_BeforeShow;
}
//End Close projects2_projects2_TotalRecords_BeforeShow

//projects3_documentdate_BeforeShow @209-37AACA6D
function projects3_documentdate_BeforeShow(& $sender)
{
    $projects3_documentdate_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects3; //Compatibility
//End projects3_documentdate_BeforeShow

//Close projects3_documentdate_BeforeShow @209-1F82E37D
    return $projects3_documentdate_BeforeShow;
}
//End Close projects3_documentdate_BeforeShow

//Panel2_BeforeShow @175-96696C3D
function Panel2_BeforeShow(& $sender)
{
    $Panel2_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel2; //Compatibility
//End Panel2_BeforeShow

//Close Panel2_BeforeShow @175-AE7F9FB3
    return $Panel2_BeforeShow;
}
//End Close Panel2_BeforeShow

//Panel1_BeforeShow @148-AAD8AF72
function Panel1_BeforeShow(& $sender)
{
    $Panel1_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel1; //Compatibility
//End Panel1_BeforeShow

//ContentPanel1UpdatePanel1 Page BeforeShow @216-6EC41673
    global $CCSFormFilter;
    if ($CCSFormFilter == "ContentPanel1") {
        $Component->BlockPrefix = "";
        $Component->BlockSuffix = "";
    } else {
        $Component->BlockPrefix = "<div id=\"ContentPanel1\">";
        $Component->BlockSuffix = "</div>";
    }
//End ContentPanel1UpdatePanel1 Page BeforeShow

//Close Panel1_BeforeShow @148-D21EBA68
    return $Panel1_BeforeShow;
}
//End Close Panel1_BeforeShow

//Page_BeforeInitialize @1-739A16CC
function Page_BeforeInitialize(& $sender)
{
    $Page_BeforeInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects; //Compatibility
//End Page_BeforeInitialize

//ContentPanel1UpdatePanel1 PageBeforeInitialize @216-53A8147E
    if (CCGetFromGet("FormFilter") == "ContentPanel1" && CCGetFromGet("IsParamsEncoded") != "true") {
        global $TemplateEncoding, $CCSIsParamsEncoded;
        CCConvertDataArrays("UTF-8", $TemplateEncoding);
        $CCSIsParamsEncoded = true;
    }
//End ContentPanel1UpdatePanel1 PageBeforeInitialize

//Close Page_BeforeInitialize @1-23E6A029
    return $Page_BeforeInitialize;
}
//End Close Page_BeforeInitialize

//Page_AfterInitialize @1-1C33CC8D
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects; //Compatibility
//End Page_AfterInitialize

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize

//Page_BeforeShow @1-D55CFB38
function Page_BeforeShow(& $sender)
{
    $Page_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects; //Compatibility
//End Page_BeforeShow

//ContentPanel1UpdatePanel1 Page BeforeShow @216-D40DD5AC
    global $CCSFormFilter;
    if (CCGetFromGet("FormFilter") == "ContentPanel1") {
        $CCSFormFilter = CCGetFromGet("FormFilter");
        unset($_GET["FormFilter"]);
        if (isset($_GET["IsParamsEncoded"])) unset($_GET["IsParamsEncoded"]);
    }
//End ContentPanel1UpdatePanel1 Page BeforeShow

//Close Page_BeforeShow @1-4BC230CD
    return $Page_BeforeShow;
}
//End Close Page_BeforeShow

//Page_BeforeOutput @1-80CEA60D
function Page_BeforeOutput(& $sender)
{
    $Page_BeforeOutput = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects; //Compatibility
//End Page_BeforeOutput

//ContentPanel1UpdatePanel1 PageBeforeOutput @216-7157F368
    global $CCSFormFilter, $Tpl, $main_block;
    if ($CCSFormFilter == "ContentPanel1") {
        $main_block = $_SERVER["REQUEST_URI"] . "|" . $Tpl->getvar("/Panel Content/Panel Panel1");
    }
//End ContentPanel1UpdatePanel1 PageBeforeOutput

//Close Page_BeforeOutput @1-8964C188
    return $Page_BeforeOutput;
}
//End Close Page_BeforeOutput

//Page_BeforeUnload @1-3EDCDEFA
function Page_BeforeUnload(& $sender)
{
    $Page_BeforeUnload = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $projects; //Compatibility
//End Page_BeforeUnload

//ContentPanel1UpdatePanel1 PageBeforeUnload @216-8D13D6DF
    global $Redirect, $CCSFormFilter, $CCSIsParamsEncoded;
    if ($Redirect && $CCSFormFilter == "ContentPanel1") {
        if ($CCSIsParamsEncoded) $Redirect = CCAddParam($Redirect, "IsParamsEncoded", "true");
        $Redirect = CCAddParam($Redirect, "FormFilter", $CCSFormFilter);
    }
//End ContentPanel1UpdatePanel1 PageBeforeUnload

//Close Page_BeforeUnload @1-CFAEC742
    return $Page_BeforeUnload;
}
//End Close Page_BeforeUnload
?>
