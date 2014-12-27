<?php
//BindEvents Method @1-C879ED3C
function BindEvents()
{
    global $users1;
    global $users2;
    global $Panel2;
    global $Panel1;
    global $CCSEvents;
    $users1->users1_TotalRecords->CCSEvents["BeforeShow"] = "users1_users1_TotalRecords_BeforeShow";
    $users2->password->CCSEvents["OnValidate"] = "users2_password_OnValidate";
    $users2->CCSEvents["BeforeShow"] = "users2_BeforeShow";
    $users2->ds->CCSEvents["BeforeExecuteInsert"] = "users2_ds_BeforeExecuteInsert";
    $users2->ds->CCSEvents["BeforeExecuteUpdate"] = "users2_ds_BeforeExecuteUpdate";
    $Panel2->CCSEvents["BeforeShow"] = "Panel2_BeforeShow";
    $Panel1->CCSEvents["BeforeShow"] = "Panel1_BeforeShow";
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
    $CCSEvents["BeforeShow"] = "Page_BeforeShow";
    $CCSEvents["BeforeOutput"] = "Page_BeforeOutput";
    $CCSEvents["BeforeUnload"] = "Page_BeforeUnload";
}
//End BindEvents Method

//users1_users1_TotalRecords_BeforeShow @19-B4D91D32
function users1_users1_TotalRecords_BeforeShow(& $sender)
{
    $users1_users1_TotalRecords_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users1; //Compatibility
//End users1_users1_TotalRecords_BeforeShow

//Retrieve number of records @20-ABE656B4
    $Component->SetValue($Container->DataSource->RecordsCount);
//End Retrieve number of records

//Close users1_users1_TotalRecords_BeforeShow @19-B5A4F142
    return $users1_users1_TotalRecords_BeforeShow;
}
//End Close users1_users1_TotalRecords_BeforeShow

//users2_password_OnValidate @51-63CCA3C2
function users2_password_OnValidate(& $sender)
{
    $users2_password_OnValidate = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users2; //Compatibility
//End users2_password_OnValidate

//Reset Password Validation @52-399C7061
    if ($Container->EditMode && ($Container->password->GetValue() == "")) {
        $Component->Errors->Clear();
    }
//End Reset Password Validation

//Close users2_password_OnValidate @51-C3CB686F
    return $users2_password_OnValidate;
}
//End Close users2_password_OnValidate

//users2_BeforeShow @37-10AEECE1
function users2_BeforeShow(& $sender)
{
    $users2_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users2; //Compatibility
//End users2_BeforeShow

//Preserve Password @40-21743877
    if (!$Component->FormSubmitted) {
        $Component->password_Shadow->SetValue(CCEncryptString($Component->password->GetValue(), CCS_ENCRYPTION_KEY_FOR_COOKIE));
        $Component->password->SetValue("");
    }
//End Preserve Password

//Close users2_BeforeShow @37-23B8DDA5
    return $users2_BeforeShow;
}
//End Close users2_BeforeShow

//users2_ds_BeforeExecuteInsert @37-BA912C1B
function users2_ds_BeforeExecuteInsert(& $sender)
{
    $users2_ds_BeforeExecuteInsert = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users2; //Compatibility
//End users2_ds_BeforeExecuteInsert

//Encrypt Password @42-5A4F14C5
    $Component->DataSource->SQL = str_replace("'{password}'", "MD5(" . $Component->DataSource->ToSQL($Component->password->GetValue(), ccsText) . ")", $Component->DataSource->SQL);
//End Encrypt Password

//Close users2_ds_BeforeExecuteInsert @37-48BC6303
    return $users2_ds_BeforeExecuteInsert;
}
//End Close users2_ds_BeforeExecuteInsert

//users2_ds_BeforeExecuteUpdate @37-1C5EFCA2
function users2_ds_BeforeExecuteUpdate(& $sender)
{
    $users2_ds_BeforeExecuteUpdate = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users2; //Compatibility
//End users2_ds_BeforeExecuteUpdate

//Encrypt Password @44-929DA193
    if ("" != $Component->password->GetValue()) {
        $Component->DataSource->SQL = str_replace("'{password}'", "MD5(" . $Component->DataSource->ToSQL($Component->password->GetValue(), ccsText) . ")", $Component->DataSource->SQL);
    } else {
        $Component->DataSource->SQL = str_replace("'{password}'", $Component->DataSource->ToSQL(CCDecryptString($Component->password_Shadow->GetValue(), CCS_ENCRYPTION_KEY_FOR_COOKIE), ccsText), $Component->DataSource->SQL);
    }
//End Encrypt Password

//Close users2_ds_BeforeExecuteUpdate @37-8795A28C
    return $users2_ds_BeforeExecuteUpdate;
}
//End Close users2_ds_BeforeExecuteUpdate

//Panel2_BeforeShow @36-96696C3D
function Panel2_BeforeShow(& $sender)
{
    $Panel2_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel2; //Compatibility
//End Panel2_BeforeShow

//Close Panel2_BeforeShow @36-AE7F9FB3
    return $Panel2_BeforeShow;
}
//End Close Panel2_BeforeShow

//Panel1_BeforeShow @8-AAD8AF72
function Panel1_BeforeShow(& $sender)
{
    $Panel1_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel1; //Compatibility
//End Panel1_BeforeShow

//ContentPanel1UpdatePanel1 Page BeforeShow @77-6EC41673
    global $CCSFormFilter;
    if ($CCSFormFilter == "ContentPanel1") {
        $Component->BlockPrefix = "";
        $Component->BlockSuffix = "";
    } else {
        $Component->BlockPrefix = "<div id=\"ContentPanel1\">";
        $Component->BlockSuffix = "</div>";
    }
//End ContentPanel1UpdatePanel1 Page BeforeShow

//Close Panel1_BeforeShow @8-D21EBA68
    return $Panel1_BeforeShow;
}
//End Close Panel1_BeforeShow

//Page_BeforeInitialize @1-6251D79F
function Page_BeforeInitialize(& $sender)
{
    $Page_BeforeInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users; //Compatibility
//End Page_BeforeInitialize

//ContentPanel1UpdatePanel1 PageBeforeInitialize @77-53A8147E
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

//Page_AfterInitialize @1-95EBEAA1
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users; //Compatibility
//End Page_AfterInitialize

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize

//Page_BeforeShow @1-CB4AAB7A
function Page_BeforeShow(& $sender)
{
    $Page_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users; //Compatibility
//End Page_BeforeShow

//ContentPanel1UpdatePanel1 Page BeforeShow @77-D40DD5AC
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

//Page_BeforeOutput @1-B4DBF396
function Page_BeforeOutput(& $sender)
{
    $Page_BeforeOutput = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users; //Compatibility
//End Page_BeforeOutput

//ContentPanel1UpdatePanel1 PageBeforeOutput @77-7157F368
    global $CCSFormFilter, $Tpl, $main_block;
    if ($CCSFormFilter == "ContentPanel1") {
        $main_block = $_SERVER["REQUEST_URI"] . "|" . $Tpl->getvar("/Panel Content/Panel Panel1");
    }
//End ContentPanel1UpdatePanel1 PageBeforeOutput

//Close Page_BeforeOutput @1-8964C188
    return $Page_BeforeOutput;
}
//End Close Page_BeforeOutput

//Page_BeforeUnload @1-BEFE7010
function Page_BeforeUnload(& $sender)
{
    $Page_BeforeUnload = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $users; //Compatibility
//End Page_BeforeUnload

//ContentPanel1UpdatePanel1 PageBeforeUnload @77-8D13D6DF
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
