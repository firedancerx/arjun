<?php
//Include Common Files @1-9045A120
define("RelativePath", "..");
define("PathToCurrentPage", "/admin/");
define("FileName", "projects.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-90CEED50
include_once(RelativePath . "/Designs/Pestech/MasterPage.php");
//End Master Page implementation

class clsGridprojects2 { //projects2 class @149-2757E967

//Variables @149-68C749A9

    // Public variables
    public $ComponentType = "Grid";
    public $ComponentName;
    public $Visible;
    public $Errors;
    public $ErrorBlock;
    public $ds;
    public $DataSource;
    public $PageSize;
    public $IsEmpty;
    public $ForceIteration = false;
    public $HasRecord = false;
    public $SorterName = "";
    public $SorterDirection = "";
    public $PageNumber;
    public $RowNumber;
    public $ControlsVisible = array();

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";
    public $Attributes;

    // Grid Controls
    public $StaticControls;
    public $RowControls;
    public $Sorter_projectname;
    public $Sorter_substation;
    public $Sorter_projectyear;
//End Variables

//Class_Initialize Event @149-533AAB83
    function clsGridprojects2($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "projects2";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid projects2";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsprojects2DataSource($this);
        $this->ds = & $this->DataSource;
        $this->PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(!is_numeric($this->PageSize) || !strlen($this->PageSize))
            $this->PageSize = 10;
        else
            $this->PageSize = intval($this->PageSize);
        if ($this->PageSize > 100)
            $this->PageSize = 100;
        if($this->PageSize == 0)
            $this->Errors->addError("<p>Form: Grid " . $this->ComponentName . "<BR>Error: (CCS06) Invalid page size.</p>");
        $this->PageNumber = intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0) $this->PageNumber = 1;
        $this->SorterName = CCGetParam("projects2Order", "");
        $this->SorterDirection = CCGetParam("projects2Dir", "");

        $this->projectname = new clsControl(ccsLink, "projectname", "projectname", ccsText, "", CCGetRequestParam("projectname", ccsGet, NULL), $this);
        $this->projectname->Page = "";
        $this->substation = new clsControl(ccsLabel, "substation", "substation", ccsText, "", CCGetRequestParam("substation", ccsGet, NULL), $this);
        $this->projectyear = new clsControl(ccsLabel, "projectyear", "projectyear", ccsInteger, "", CCGetRequestParam("projectyear", ccsGet, NULL), $this);
        $this->projects2_Insert = new clsControl(ccsLink, "projects2_Insert", "projects2_Insert", ccsText, "", CCGetRequestParam("projects2_Insert", ccsGet, NULL), $this);
        $this->projects2_Insert->Parameters = CCGetQueryString("QueryString", array("Id", "ccsForm"));
        $this->projects2_Insert->Page = "projects.php";
        $this->projects2_TotalRecords = new clsControl(ccsLabel, "projects2_TotalRecords", "projects2_TotalRecords", ccsText, "", CCGetRequestParam("projects2_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_projectname = new clsSorter($this->ComponentName, "Sorter_projectname", $FileName, $this);
        $this->Sorter_substation = new clsSorter($this->ComponentName, "Sorter_substation", $FileName, $this);
        $this->Sorter_projectyear = new clsSorter($this->ComponentName, "Sorter_projectyear", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @149-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @149-49169A6A
    function Show()
    {
        $Tpl = CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $this->RowNumber = 0;

        $this->DataSource->Parameters["urls_projectname"] = CCGetFromGet("s_projectname", NULL);
        $this->DataSource->Parameters["urls_substation"] = CCGetFromGet("s_substation", NULL);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();
        $this->HasRecord = $this->DataSource->has_next_record();
        $this->IsEmpty = ! $this->HasRecord;
        $this->Attributes->Show();

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) return;

        $GridBlock = "Grid " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $GridBlock;


        if (!$this->IsEmpty) {
            $this->ControlsVisible["projectname"] = $this->projectname->Visible;
            $this->ControlsVisible["substation"] = $this->substation->Visible;
            $this->ControlsVisible["projectyear"] = $this->projectyear->Visible;
            while ($this->ForceIteration || (($this->RowNumber < $this->PageSize) &&  ($this->HasRecord = $this->DataSource->has_next_record()))) {
                $this->RowNumber++;
                if ($this->HasRecord) {
                    $this->DataSource->next_record();
                    $this->DataSource->SetValues();
                }
                $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/Row";
                $this->projectname->SetValue($this->DataSource->projectname->GetValue());
                $this->projectname->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                $this->projectname->Parameters = CCAddParam($this->projectname->Parameters, "Id", $this->DataSource->f("Id"));
                $this->substation->SetValue($this->DataSource->substation->GetValue());
                $this->projectyear->SetValue($this->DataSource->projectyear->GetValue());
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->projectname->Show();
                $this->substation->Show();
                $this->projectyear->Show();
                $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                $Tpl->parse("Row", true);
            }
        }
        else { // Show NoRecords block if no records are found
            $this->Attributes->Show();
            $Tpl->parse("NoRecords", false);
        }

        $errors = $this->GetErrors();
        if(strlen($errors))
        {
            $Tpl->replaceblock("", $errors);
            $Tpl->block_path = $ParentPath;
            return;
        }
        $this->Navigator->PageNumber = $this->DataSource->AbsolutePage;
        $this->Navigator->PageSize = $this->PageSize;
        if ($this->DataSource->RecordsCount == "CCS not counted")
            $this->Navigator->TotalPages = $this->DataSource->AbsolutePage + ($this->DataSource->next_record() ? 1 : 0);
        else
            $this->Navigator->TotalPages = $this->DataSource->PageCount();
        if (($this->Navigator->TotalPages <= 1 && $this->Navigator->PageNumber == 1) || $this->Navigator->PageSize == "") {
            $this->Navigator->Visible = false;
        }
        $this->projects2_Insert->Show();
        $this->projects2_TotalRecords->Show();
        $this->Sorter_projectname->Show();
        $this->Sorter_substation->Show();
        $this->Sorter_projectyear->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @149-4A869CD7
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->projectname->Errors->ToString());
        $errors = ComposeStrings($errors, $this->substation->Errors->ToString());
        $errors = ComposeStrings($errors, $this->projectyear->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End projects2 Class @149-FCB6E20C

class clsprojects2DataSource extends clsDBlocalhost {  //projects2DataSource Class @149-E976AF82

//DataSource Variables @149-61F2B5F5
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $projectname;
    public $substation;
    public $projectyear;
//End DataSource Variables

//DataSourceClass_Initialize Event @149-A896D5B8
    function clsprojects2DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid projects2";
        $this->Initialize();
        $this->projectname = new clsField("projectname", ccsText, "");
        
        $this->substation = new clsField("substation", ccsText, "");
        
        $this->projectyear = new clsField("projectyear", ccsInteger, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @149-64071257
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "projectname";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_projectname" => array("projectname", ""), 
            "Sorter_substation" => array("substation", ""), 
            "Sorter_projectyear" => array("projectyear", "")));
    }
//End SetOrder Method

//Prepare Method @149-A11F9100
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urls_projectname", ccsText, "", "", $this->Parameters["urls_projectname"], "", false);
        $this->wp->AddParameter("2", "urls_substation", ccsText, "", "", $this->Parameters["urls_substation"], "", false);
        $this->wp->Criterion[1] = $this->wp->Operation(opContains, "projectname", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsText),false);
        $this->wp->Criterion[2] = $this->wp->Operation(opContains, "substation", $this->wp->GetDBValue("2"), $this->ToSQL($this->wp->GetDBValue("2"), ccsText),false);
        $this->Where = $this->wp->opAND(
             false, 
             $this->wp->Criterion[1], 
             $this->wp->Criterion[2]);
    }
//End Prepare Method

//Open Method @149-BBBC9955
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM projects";
        $this->SQL = "SELECT Id, projectname, substation, projectyear \n\n" .
        "FROM projects {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        if ($this->CountSQL) 
            $this->RecordsCount = CCGetDBValue(CCBuildSQL($this->CountSQL, $this->Where, ""), $this);
        else
            $this->RecordsCount = "CCS not counted";
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
        $this->MoveToPage($this->AbsolutePage);
    }
//End Open Method

//SetValues Method @149-45A21E61
    function SetValues()
    {
        $this->projectname->SetDBValue($this->f("projectname"));
        $this->substation->SetDBValue($this->f("substation"));
        $this->projectyear->SetDBValue(trim($this->f("projectyear")));
    }
//End SetValues Method

} //End projects2DataSource Class @149-FCB6E20C

class clsRecordprojectsSearch1 { //projectsSearch1 Class @170-4883F679

//Variables @170-9E315808

    // Public variables
    public $ComponentType = "Record";
    public $ComponentName;
    public $Parent;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormEnctype;
    public $Visible;
    public $IsEmpty;

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode      = false;
    public $ds;
    public $DataSource;
    public $ValidatingControls;
    public $Controls;
    public $Attributes;

    // Class variables
//End Variables

//Class_Initialize Event @170-2DD26E8E
    function clsRecordprojectsSearch1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record projectsSearch1/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "projectsSearch1";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->ClearParameters = new clsControl(ccsLink, "ClearParameters", "ClearParameters", ccsText, "", CCGetRequestParam("ClearParameters", $Method, NULL), $this);
            $this->ClearParameters->Parameters = CCGetQueryString("QueryString", array("s_projectname", "s_substation", "ccsForm"));
            $this->ClearParameters->Page = "projects.php";
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_projectname = new clsControl(ccsTextBox, "s_projectname", "Projectname", ccsText, "", CCGetRequestParam("s_projectname", $Method, NULL), $this);
            $this->s_substation = new clsControl(ccsTextBox, "s_substation", "Substation", ccsText, "", CCGetRequestParam("s_substation", $Method, NULL), $this);
        }
    }
//End Class_Initialize Event

//Validate Method @170-D3A9E47E
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_projectname->Validate() && $Validation);
        $Validation = ($this->s_substation->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_projectname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->s_substation->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @170-326DEFBD
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->ClearParameters->Errors->Count());
        $errors = ($errors || $this->s_projectname->Errors->Count());
        $errors = ($errors || $this->s_substation->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @170-20C53348
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        if(!$this->FormSubmitted) {
            return;
        }

        if($this->FormSubmitted) {
            $this->PressedButton = "Button_DoSearch";
            if($this->Button_DoSearch->Pressed) {
                $this->PressedButton = "Button_DoSearch";
            }
        }
        $Redirect = "projects.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "projects.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @170-8C5660AC
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->ClearParameters->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_projectname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_substation->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->ClearParameters->Show();
        $this->Button_DoSearch->Show();
        $this->s_projectname->Show();
        $this->s_substation->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End projectsSearch1 Class @170-FCB6E20C

class clsRecordprojects3 { //projects3 Class @176-8077AA90

//Variables @176-9E315808

    // Public variables
    public $ComponentType = "Record";
    public $ComponentName;
    public $Parent;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormEnctype;
    public $Visible;
    public $IsEmpty;

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode      = false;
    public $ds;
    public $DataSource;
    public $ValidatingControls;
    public $Controls;
    public $Attributes;

    // Class variables
//End Variables

//Class_Initialize Event @176-3865B715
    function clsRecordprojects3($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record projects3/Error";
        $this->DataSource = new clsprojects3DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->DeleteAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "projects3";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->EditMode = ($FormMethod == "Edit");
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Button_Insert = new clsButton("Button_Insert", $Method, $this);
            $this->Button_Update = new clsButton("Button_Update", $Method, $this);
            $this->Button_Delete = new clsButton("Button_Delete", $Method, $this);
            $this->Button_Cancel = new clsButton("Button_Cancel", $Method, $this);
            $this->projecttype = new clsControl(ccsListBox, "projecttype", "Projecttype", ccsInteger, "", CCGetRequestParam("projecttype", $Method, NULL), $this);
            $this->projecttype->DSType = dsTable;
            $this->projecttype->DataSource = new clsDBlocalhost();
            $this->projecttype->ds = & $this->projecttype->DataSource;
            $this->projecttype->DataSource->SQL = "SELECT * \n" .
"FROM projecttypes {SQL_Where} {SQL_OrderBy}";
            list($this->projecttype->BoundColumn, $this->projecttype->TextColumn, $this->projecttype->DBFormat) = array("Id", "typename", "");
            $this->projecttype->Required = true;
            $this->projectname = new clsControl(ccsTextBox, "projectname", "Projectname", ccsText, "", CCGetRequestParam("projectname", $Method, NULL), $this);
            $this->projectname->Required = true;
            $this->substation = new clsControl(ccsTextBox, "substation", "Substation", ccsText, "", CCGetRequestParam("substation", $Method, NULL), $this);
            $this->projectdescription = new clsControl(ccsTextArea, "projectdescription", "Projectdescription", ccsText, "", CCGetRequestParam("projectdescription", $Method, NULL), $this);
            $this->drawingnumber = new clsControl(ccsTextBox, "drawingnumber", "Drawingnumber", ccsText, "", CCGetRequestParam("drawingnumber", $Method, NULL), $this);
            $this->revision = new clsControl(ccsTextBox, "revision", "Revision", ccsText, "", CCGetRequestParam("revision", $Method, NULL), $this);
            $this->designedby = new clsControl(ccsListBox, "designedby", "Designedby", ccsInteger, "", CCGetRequestParam("designedby", $Method, NULL), $this);
            $this->designedby->DSType = dsTable;
            $this->designedby->DataSource = new clsDBlocalhost();
            $this->designedby->ds = & $this->designedby->DataSource;
            $this->designedby->DataSource->SQL = "SELECT Id, username \n" .
"FROM users {SQL_Where} {SQL_OrderBy}";
            $this->designedby->DataSource->Order = "username";
            list($this->designedby->BoundColumn, $this->designedby->TextColumn, $this->designedby->DBFormat) = array("Id", "username", "");
            $this->designedby->DataSource->Parameters["expr193"] = 2;
            $this->designedby->DataSource->wp = new clsSQLParameters();
            $this->designedby->DataSource->wp->AddParameter("1", "expr193", ccsInteger, "", "", $this->designedby->DataSource->Parameters["expr193"], "", false);
            $this->designedby->DataSource->wp->Criterion[1] = $this->designedby->DataSource->wp->Operation(opEqual, "level", $this->designedby->DataSource->wp->GetDBValue("1"), $this->designedby->DataSource->ToSQL($this->designedby->DataSource->wp->GetDBValue("1"), ccsInteger),false);
            $this->designedby->DataSource->Where = 
                 $this->designedby->DataSource->wp->Criterion[1];
            $this->designedby->DataSource->Order = "username";
            $this->checkedby = new clsControl(ccsListBox, "checkedby", "Checkedby", ccsInteger, "", CCGetRequestParam("checkedby", $Method, NULL), $this);
            $this->checkedby->DSType = dsTable;
            $this->checkedby->DataSource = new clsDBlocalhost();
            $this->checkedby->ds = & $this->checkedby->DataSource;
            $this->checkedby->DataSource->SQL = "SELECT Id, username \n" .
"FROM users {SQL_Where} {SQL_OrderBy}";
            $this->checkedby->DataSource->Order = "username";
            list($this->checkedby->BoundColumn, $this->checkedby->TextColumn, $this->checkedby->DBFormat) = array("Id", "username", "");
            $this->checkedby->DataSource->Parameters["expr199"] = 3;
            $this->checkedby->DataSource->wp = new clsSQLParameters();
            $this->checkedby->DataSource->wp->AddParameter("1", "expr199", ccsInteger, "", "", $this->checkedby->DataSource->Parameters["expr199"], "", false);
            $this->checkedby->DataSource->wp->Criterion[1] = $this->checkedby->DataSource->wp->Operation(opEqual, "level", $this->checkedby->DataSource->wp->GetDBValue("1"), $this->checkedby->DataSource->ToSQL($this->checkedby->DataSource->wp->GetDBValue("1"), ccsInteger),false);
            $this->checkedby->DataSource->Where = 
                 $this->checkedby->DataSource->wp->Criterion[1];
            $this->checkedby->DataSource->Order = "username";
            $this->approvedby = new clsControl(ccsListBox, "approvedby", "Approvedby", ccsInteger, "", CCGetRequestParam("approvedby", $Method, NULL), $this);
            $this->approvedby->DSType = dsTable;
            $this->approvedby->DataSource = new clsDBlocalhost();
            $this->approvedby->ds = & $this->approvedby->DataSource;
            $this->approvedby->DataSource->SQL = "SELECT Id, username \n" .
"FROM users {SQL_Where} {SQL_OrderBy}";
            $this->approvedby->DataSource->Order = "username";
            list($this->approvedby->BoundColumn, $this->approvedby->TextColumn, $this->approvedby->DBFormat) = array("Id", "", "");
            $this->approvedby->DataSource->Parameters["expr205"] = 4;
            $this->approvedby->DataSource->wp = new clsSQLParameters();
            $this->approvedby->DataSource->wp->AddParameter("1", "expr205", ccsInteger, "", "", $this->approvedby->DataSource->Parameters["expr205"], "", false);
            $this->approvedby->DataSource->wp->Criterion[1] = $this->approvedby->DataSource->wp->Operation(opEqual, "level", $this->approvedby->DataSource->wp->GetDBValue("1"), $this->approvedby->DataSource->ToSQL($this->approvedby->DataSource->wp->GetDBValue("1"), ccsInteger),false);
            $this->approvedby->DataSource->Where = 
                 $this->approvedby->DataSource->wp->Criterion[1];
            $this->approvedby->DataSource->Order = "username";
            $this->documentdate = new clsControl(ccsTextBox, "documentdate", "Documentdate", ccsDate, array("ShortDate"), CCGetRequestParam("documentdate", $Method, NULL), $this);
            $this->projectyear = new clsControl(ccsTextBox, "projectyear", "Projectyear", ccsInteger, "", CCGetRequestParam("projectyear", $Method, NULL), $this);
            $this->isactive = new clsControl(ccsListBox, "isactive", "Isactive", ccsInteger, "", CCGetRequestParam("isactive", $Method, NULL), $this);
            $this->isactive->DSType = dsTable;
            $this->isactive->DataSource = new clsDBlocalhost();
            $this->isactive->ds = & $this->isactive->DataSource;
            $this->isactive->DataSource->SQL = "SELECT * \n" .
"FROM isactive {SQL_Where} {SQL_OrderBy}";
            list($this->isactive->BoundColumn, $this->isactive->TextColumn, $this->isactive->DBFormat) = array("Id", "isactivedescription", "");
            $this->isactive->Required = true;
        }
    }
//End Class_Initialize Event

//Initialize Method @176-4F76030F
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlId"] = CCGetFromGet("Id", NULL);
    }
//End Initialize Method

//Validate Method @176-6BAB6CDD
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->projecttype->Validate() && $Validation);
        $Validation = ($this->projectname->Validate() && $Validation);
        $Validation = ($this->substation->Validate() && $Validation);
        $Validation = ($this->projectdescription->Validate() && $Validation);
        $Validation = ($this->drawingnumber->Validate() && $Validation);
        $Validation = ($this->revision->Validate() && $Validation);
        $Validation = ($this->designedby->Validate() && $Validation);
        $Validation = ($this->checkedby->Validate() && $Validation);
        $Validation = ($this->approvedby->Validate() && $Validation);
        $Validation = ($this->documentdate->Validate() && $Validation);
        $Validation = ($this->projectyear->Validate() && $Validation);
        $Validation = ($this->isactive->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->projecttype->Errors->Count() == 0);
        $Validation =  $Validation && ($this->projectname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->substation->Errors->Count() == 0);
        $Validation =  $Validation && ($this->projectdescription->Errors->Count() == 0);
        $Validation =  $Validation && ($this->drawingnumber->Errors->Count() == 0);
        $Validation =  $Validation && ($this->revision->Errors->Count() == 0);
        $Validation =  $Validation && ($this->designedby->Errors->Count() == 0);
        $Validation =  $Validation && ($this->checkedby->Errors->Count() == 0);
        $Validation =  $Validation && ($this->approvedby->Errors->Count() == 0);
        $Validation =  $Validation && ($this->documentdate->Errors->Count() == 0);
        $Validation =  $Validation && ($this->projectyear->Errors->Count() == 0);
        $Validation =  $Validation && ($this->isactive->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @176-0A52BF05
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->projecttype->Errors->Count());
        $errors = ($errors || $this->projectname->Errors->Count());
        $errors = ($errors || $this->substation->Errors->Count());
        $errors = ($errors || $this->projectdescription->Errors->Count());
        $errors = ($errors || $this->drawingnumber->Errors->Count());
        $errors = ($errors || $this->revision->Errors->Count());
        $errors = ($errors || $this->designedby->Errors->Count());
        $errors = ($errors || $this->checkedby->Errors->Count());
        $errors = ($errors || $this->approvedby->Errors->Count());
        $errors = ($errors || $this->documentdate->Errors->Count());
        $errors = ($errors || $this->projectyear->Errors->Count());
        $errors = ($errors || $this->isactive->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @176-288F0419
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        $this->DataSource->Prepare();
        if(!$this->FormSubmitted) {
            $this->EditMode = $this->DataSource->AllParametersSet;
            return;
        }

        if($this->FormSubmitted) {
            $this->PressedButton = $this->EditMode ? "Button_Update" : "Button_Insert";
            if($this->Button_Insert->Pressed) {
                $this->PressedButton = "Button_Insert";
            } else if($this->Button_Update->Pressed) {
                $this->PressedButton = "Button_Update";
            } else if($this->Button_Delete->Pressed) {
                $this->PressedButton = "Button_Delete";
            } else if($this->Button_Cancel->Pressed) {
                $this->PressedButton = "Button_Cancel";
            }
        }
        $Redirect = $FileName . "?" . CCGetQueryString("QueryString", array("ccsForm"));
        if($this->PressedButton == "Button_Delete") {
            if(!CCGetEvent($this->Button_Delete->CCSEvents, "OnClick", $this->Button_Delete) || !$this->DeleteRow()) {
                $Redirect = "";
            }
        } else if($this->PressedButton == "Button_Cancel") {
            if(!CCGetEvent($this->Button_Cancel->CCSEvents, "OnClick", $this->Button_Cancel)) {
                $Redirect = "";
            }
        } else if($this->Validate()) {
            if($this->PressedButton == "Button_Insert") {
                if(!CCGetEvent($this->Button_Insert->CCSEvents, "OnClick", $this->Button_Insert) || !$this->InsertRow()) {
                    $Redirect = "";
                }
            } else if($this->PressedButton == "Button_Update") {
                if(!CCGetEvent($this->Button_Update->CCSEvents, "OnClick", $this->Button_Update) || !$this->UpdateRow()) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
        if ($Redirect)
            $this->DataSource->close();
    }
//End Operation Method

//InsertRow Method @176-FD40B69E
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->projecttype->SetValue($this->projecttype->GetValue(true));
        $this->DataSource->projectname->SetValue($this->projectname->GetValue(true));
        $this->DataSource->substation->SetValue($this->substation->GetValue(true));
        $this->DataSource->projectdescription->SetValue($this->projectdescription->GetValue(true));
        $this->DataSource->drawingnumber->SetValue($this->drawingnumber->GetValue(true));
        $this->DataSource->revision->SetValue($this->revision->GetValue(true));
        $this->DataSource->designedby->SetValue($this->designedby->GetValue(true));
        $this->DataSource->checkedby->SetValue($this->checkedby->GetValue(true));
        $this->DataSource->approvedby->SetValue($this->approvedby->GetValue(true));
        $this->DataSource->documentdate->SetValue($this->documentdate->GetValue(true));
        $this->DataSource->projectyear->SetValue($this->projectyear->GetValue(true));
        $this->DataSource->isactive->SetValue($this->isactive->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @176-A1BA70DD
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->projecttype->SetValue($this->projecttype->GetValue(true));
        $this->DataSource->projectname->SetValue($this->projectname->GetValue(true));
        $this->DataSource->substation->SetValue($this->substation->GetValue(true));
        $this->DataSource->projectdescription->SetValue($this->projectdescription->GetValue(true));
        $this->DataSource->drawingnumber->SetValue($this->drawingnumber->GetValue(true));
        $this->DataSource->revision->SetValue($this->revision->GetValue(true));
        $this->DataSource->designedby->SetValue($this->designedby->GetValue(true));
        $this->DataSource->checkedby->SetValue($this->checkedby->GetValue(true));
        $this->DataSource->approvedby->SetValue($this->approvedby->GetValue(true));
        $this->DataSource->documentdate->SetValue($this->documentdate->GetValue(true));
        $this->DataSource->projectyear->SetValue($this->projectyear->GetValue(true));
        $this->DataSource->isactive->SetValue($this->isactive->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//DeleteRow Method @176-299D98C3
    function DeleteRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeDelete", $this);
        if(!$this->DeleteAllowed) return false;
        $this->DataSource->Delete();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterDelete", $this);
        return (!$this->CheckErrors());
    }
//End DeleteRow Method

//Show Method @176-8A49F5EE
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);

        $this->projecttype->Prepare();
        $this->designedby->Prepare();
        $this->checkedby->Prepare();
        $this->approvedby->Prepare();
        $this->isactive->Prepare();

        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;
        if($this->EditMode) {
            if($this->DataSource->Errors->Count()){
                $this->Errors->AddErrors($this->DataSource->Errors);
                $this->DataSource->Errors->clear();
            }
            $this->DataSource->Open();
            if($this->DataSource->Errors->Count() == 0 && $this->DataSource->next_record()) {
                $this->DataSource->SetValues();
                if(!$this->FormSubmitted){
                    $this->projecttype->SetValue($this->DataSource->projecttype->GetValue());
                    $this->projectname->SetValue($this->DataSource->projectname->GetValue());
                    $this->substation->SetValue($this->DataSource->substation->GetValue());
                    $this->projectdescription->SetValue($this->DataSource->projectdescription->GetValue());
                    $this->drawingnumber->SetValue($this->DataSource->drawingnumber->GetValue());
                    $this->revision->SetValue($this->DataSource->revision->GetValue());
                    $this->designedby->SetValue($this->DataSource->designedby->GetValue());
                    $this->checkedby->SetValue($this->DataSource->checkedby->GetValue());
                    $this->approvedby->SetValue($this->DataSource->approvedby->GetValue());
                    $this->documentdate->SetValue($this->DataSource->documentdate->GetValue());
                    $this->projectyear->SetValue($this->DataSource->projectyear->GetValue());
                    $this->isactive->SetValue($this->DataSource->isactive->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->projecttype->Errors->ToString());
            $Error = ComposeStrings($Error, $this->projectname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->substation->Errors->ToString());
            $Error = ComposeStrings($Error, $this->projectdescription->Errors->ToString());
            $Error = ComposeStrings($Error, $this->drawingnumber->Errors->ToString());
            $Error = ComposeStrings($Error, $this->revision->Errors->ToString());
            $Error = ComposeStrings($Error, $this->designedby->Errors->ToString());
            $Error = ComposeStrings($Error, $this->checkedby->Errors->ToString());
            $Error = ComposeStrings($Error, $this->approvedby->Errors->ToString());
            $Error = ComposeStrings($Error, $this->documentdate->Errors->ToString());
            $Error = ComposeStrings($Error, $this->projectyear->Errors->ToString());
            $Error = ComposeStrings($Error, $this->isactive->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Error = ComposeStrings($Error, $this->DataSource->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);
        $this->Button_Insert->Visible = !$this->EditMode && $this->InsertAllowed;
        $this->Button_Update->Visible = $this->EditMode && $this->UpdateAllowed;
        $this->Button_Delete->Visible = $this->EditMode && $this->DeleteAllowed;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->Button_Insert->Show();
        $this->Button_Update->Show();
        $this->Button_Delete->Show();
        $this->Button_Cancel->Show();
        $this->projecttype->Show();
        $this->projectname->Show();
        $this->substation->Show();
        $this->projectdescription->Show();
        $this->drawingnumber->Show();
        $this->revision->Show();
        $this->designedby->Show();
        $this->checkedby->Show();
        $this->approvedby->Show();
        $this->documentdate->Show();
        $this->projectyear->Show();
        $this->isactive->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End projects3 Class @176-FCB6E20C

class clsprojects3DataSource extends clsDBlocalhost {  //projects3DataSource Class @176-DF843F71

//DataSource Variables @176-AC614FD9
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $InsertParameters;
    public $UpdateParameters;
    public $DeleteParameters;
    public $wp;
    public $AllParametersSet;

    public $InsertFields = array();
    public $UpdateFields = array();

    // Datasource fields
    public $projecttype;
    public $projectname;
    public $substation;
    public $projectdescription;
    public $drawingnumber;
    public $revision;
    public $designedby;
    public $checkedby;
    public $approvedby;
    public $documentdate;
    public $projectyear;
    public $isactive;
//End DataSource Variables

//DataSourceClass_Initialize Event @176-83A4DD4F
    function clsprojects3DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record projects3/Error";
        $this->Initialize();
        $this->projecttype = new clsField("projecttype", ccsInteger, "");
        
        $this->projectname = new clsField("projectname", ccsText, "");
        
        $this->substation = new clsField("substation", ccsText, "");
        
        $this->projectdescription = new clsField("projectdescription", ccsText, "");
        
        $this->drawingnumber = new clsField("drawingnumber", ccsText, "");
        
        $this->revision = new clsField("revision", ccsText, "");
        
        $this->designedby = new clsField("designedby", ccsInteger, "");
        
        $this->checkedby = new clsField("checkedby", ccsInteger, "");
        
        $this->approvedby = new clsField("approvedby", ccsInteger, "");
        
        $this->documentdate = new clsField("documentdate", ccsDate, $this->DateFormat);
        
        $this->projectyear = new clsField("projectyear", ccsInteger, "");
        
        $this->isactive = new clsField("isactive", ccsInteger, "");
        

        $this->InsertFields["projecttype"] = array("Name" => "projecttype", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["projectname"] = array("Name" => "projectname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["substation"] = array("Name" => "substation", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["projectdescription"] = array("Name" => "projectdescription", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["drawingnumber"] = array("Name" => "drawingnumber", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["revision"] = array("Name" => "revision", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["designedby"] = array("Name" => "designedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["checkedby"] = array("Name" => "checkedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["approvedby"] = array("Name" => "approvedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["documentdate"] = array("Name" => "documentdate", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->InsertFields["projectyear"] = array("Name" => "projectyear", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["isactive"] = array("Name" => "isactive", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["projecttype"] = array("Name" => "projecttype", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["projectname"] = array("Name" => "projectname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["substation"] = array("Name" => "substation", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["projectdescription"] = array("Name" => "projectdescription", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["drawingnumber"] = array("Name" => "drawingnumber", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["revision"] = array("Name" => "revision", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["designedby"] = array("Name" => "designedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["checkedby"] = array("Name" => "checkedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["approvedby"] = array("Name" => "approvedby", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["documentdate"] = array("Name" => "documentdate", "Value" => "", "DataType" => ccsDate, "OmitIfEmpty" => 1);
        $this->UpdateFields["projectyear"] = array("Name" => "projectyear", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["isactive"] = array("Name" => "isactive", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @176-F755E9A7
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlId", ccsInteger, "", "", $this->Parameters["urlId"], "", false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "Id", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsInteger),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @176-2D5761F6
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM projects {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @176-87485A56
    function SetValues()
    {
        $this->projecttype->SetDBValue(trim($this->f("projecttype")));
        $this->projectname->SetDBValue($this->f("projectname"));
        $this->substation->SetDBValue($this->f("substation"));
        $this->projectdescription->SetDBValue($this->f("projectdescription"));
        $this->drawingnumber->SetDBValue($this->f("drawingnumber"));
        $this->revision->SetDBValue($this->f("revision"));
        $this->designedby->SetDBValue(trim($this->f("designedby")));
        $this->checkedby->SetDBValue(trim($this->f("checkedby")));
        $this->approvedby->SetDBValue(trim($this->f("approvedby")));
        $this->documentdate->SetDBValue(trim($this->f("documentdate")));
        $this->projectyear->SetDBValue(trim($this->f("projectyear")));
        $this->isactive->SetDBValue(trim($this->f("isactive")));
    }
//End SetValues Method

//Insert Method @176-4C3DE48E
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["projecttype"]["Value"] = $this->projecttype->GetDBValue(true);
        $this->InsertFields["projectname"]["Value"] = $this->projectname->GetDBValue(true);
        $this->InsertFields["substation"]["Value"] = $this->substation->GetDBValue(true);
        $this->InsertFields["projectdescription"]["Value"] = $this->projectdescription->GetDBValue(true);
        $this->InsertFields["drawingnumber"]["Value"] = $this->drawingnumber->GetDBValue(true);
        $this->InsertFields["revision"]["Value"] = $this->revision->GetDBValue(true);
        $this->InsertFields["designedby"]["Value"] = $this->designedby->GetDBValue(true);
        $this->InsertFields["checkedby"]["Value"] = $this->checkedby->GetDBValue(true);
        $this->InsertFields["approvedby"]["Value"] = $this->approvedby->GetDBValue(true);
        $this->InsertFields["documentdate"]["Value"] = $this->documentdate->GetDBValue(true);
        $this->InsertFields["projectyear"]["Value"] = $this->projectyear->GetDBValue(true);
        $this->InsertFields["isactive"]["Value"] = $this->isactive->GetDBValue(true);
        $this->SQL = CCBuildInsert("projects", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @176-F7CB8E1F
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        $this->UpdateFields["projecttype"]["Value"] = $this->projecttype->GetDBValue(true);
        $this->UpdateFields["projectname"]["Value"] = $this->projectname->GetDBValue(true);
        $this->UpdateFields["substation"]["Value"] = $this->substation->GetDBValue(true);
        $this->UpdateFields["projectdescription"]["Value"] = $this->projectdescription->GetDBValue(true);
        $this->UpdateFields["drawingnumber"]["Value"] = $this->drawingnumber->GetDBValue(true);
        $this->UpdateFields["revision"]["Value"] = $this->revision->GetDBValue(true);
        $this->UpdateFields["designedby"]["Value"] = $this->designedby->GetDBValue(true);
        $this->UpdateFields["checkedby"]["Value"] = $this->checkedby->GetDBValue(true);
        $this->UpdateFields["approvedby"]["Value"] = $this->approvedby->GetDBValue(true);
        $this->UpdateFields["documentdate"]["Value"] = $this->documentdate->GetDBValue(true);
        $this->UpdateFields["projectyear"]["Value"] = $this->projectyear->GetDBValue(true);
        $this->UpdateFields["isactive"]["Value"] = $this->isactive->GetDBValue(true);
        $this->SQL = CCBuildUpdate("projects", $this->UpdateFields, $this);
        $this->SQL .= strlen($this->Where) ? " WHERE " . $this->Where : $this->Where;
        if (!strlen($this->Where) && $this->Errors->Count() == 0) 
            $this->Errors->addError($CCSLocales->GetText("CCS_CustomOperationError_MissingParameters"));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteUpdate", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteUpdate", $this->Parent);
        }
    }
//End Update Method

//Delete Method @176-935E60AD
    function Delete()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildDelete", $this->Parent);
        $this->SQL = "DELETE FROM projects";
        $this->SQL = CCBuildSQL($this->SQL, $this->Where, "");
        if (!strlen($this->Where) && $this->Errors->Count() == 0) 
            $this->Errors->addError($CCSLocales->GetText("CCS_CustomOperationError_MissingParameters"));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteDelete", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteDelete", $this->Parent);
        }
    }
//End Delete Method

} //End projects3DataSource Class @176-FCB6E20C

//Include Page implementation @7-C10B939B
include_once(RelativePath . "/includables/menuincludablepage.php");
//End Include Page implementation

//Include Page implementation @6-59AEC4EA
include_once(RelativePath . "/includables/headerincludablepage.php");
//End Include Page implementation

//Initialize Page @1-2EAB549C
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";
$PathToCurrentMasterPage = "";
$TemplatePathValue = "";

// Events;
$CCSEvents = "";
$CCSEventResult = "";
$MasterPage = null;
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "projects.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.position.js|js/jquery/ui/jquery.ui.menu.js|js/jquery/ui/jquery.ui.autocomplete.js|js/jquery/autocomplete/ccs-autocomplete.js|js/jquery/ui/jquery.ui.datepicker.js|js/jquery/datepicker/ccs-date-timepicker.js|js/jquery/ui/jquery.ui.mouse.js|js/jquery/ui/jquery.ui.draggable.js|js/jquery/ui/jquery.ui.resizable.js|js/jquery/ui/jquery.ui.button.js|js/jquery/ui/jquery.ui.dialog.js|js/jquery/dialog/ccs-dialog.js|js/jquery/updatepanel/ccs-update-panel.js|";
$Charset = $Charset ? $Charset : "utf-8";
//End Initialize Page

//Authenticate User @1-28DB8C6E
CCSecurityRedirect("5", "");
//End Authenticate User

//Include events file @1-C04E4B64
include_once("./projects_events.php");
//End Include events file

//BeforeInitialize Binding @1-17AC9191
$CCSEvents["BeforeInitialize"] = "Page_BeforeInitialize";
//End BeforeInitialize Binding

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-34779E42
$DBlocalhost = new clsDBlocalhost();
$MainPage->Connections["localhost"] = & $DBlocalhost;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$MasterPage = new clsMasterPage("/Designs/" . $CCProjectDesign . "/", "MasterPage", $MainPage);
$MasterPage->Attributes = $Attributes;
$MasterPage->Initialize();
$Head = new clsPanel("Head", $MainPage);
$Head->PlaceholderName = "Head";
$Content = new clsPanel("Content", $MainPage);
$Content->PlaceholderName = "Content";
$Panel1 = new clsPanel("Panel1", $MainPage);
$Panel1->GenerateDiv = true;
$Panel1->PanelId = "ContentPanel1";
$projects2 = new clsGridprojects2("", $MainPage);
$projectsSearch1 = new clsRecordprojectsSearch1("", $MainPage);
$Panel2 = new clsPanel("Panel2", $MainPage);
$Panel2->GenerateDiv = true;
$Panel2->PanelId = "ContentPanel1Panel2";
$projects3 = new clsRecordprojects3("", $MainPage);
$Menu = new clsPanel("Menu", $MainPage);
$Menu->PlaceholderName = "Menu";
$menuincludablepage = new clsmenuincludablepage("../includables/", "menuincludablepage", $MainPage);
$menuincludablepage->Initialize();
$HeaderSidebar = new clsPanel("HeaderSidebar", $MainPage);
$HeaderSidebar->PlaceholderName = "HeaderSidebar";
$headerincludablepage = new clsheaderincludablepage("../includables/", "headerincludablepage", $MainPage);
$headerincludablepage->Initialize();
$MainPage->Head = & $Head;
$MainPage->Content = & $Content;
$MainPage->Panel1 = & $Panel1;
$MainPage->projects2 = & $projects2;
$MainPage->projectsSearch1 = & $projectsSearch1;
$MainPage->Panel2 = & $Panel2;
$MainPage->projects3 = & $projects3;
$MainPage->Menu = & $Menu;
$MainPage->menuincludablepage = & $menuincludablepage;
$MainPage->HeaderSidebar = & $HeaderSidebar;
$MainPage->headerincludablepage = & $headerincludablepage;
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("projects2", $projects2);
$Panel1->AddComponent("projectsSearch1", $projectsSearch1);
$Panel1->AddComponent("Panel2", $Panel2);
$Panel2->AddComponent("projects3", $projects3);
$Menu->AddComponent("menuincludablepage", $menuincludablepage);
$HeaderSidebar->AddComponent("headerincludablepage", $headerincludablepage);
$projects2->Initialize();
$projects3->Initialize();
$ScriptIncludes = "";
$SList = explode("|", $Scripts);
foreach ($SList as $Script) {
    if ($Script != "") $ScriptIncludes = $ScriptIncludes . "<script src=\"" . $PathToRoot . $Script . "\" type=\"text/javascript\"></script>\n";
}
$Attributes->SetValue("scriptIncludes", $ScriptIncludes);

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-CF872992
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "UTF-8");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "UTF-8");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->SetVar("CCS_PathToMasterPage", RelativePath . $PathToCurrentMasterPage);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "../");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-8494F2FF
$MasterPage->Operations();
$headerincludablepage->Operations();
$menuincludablepage->Operations();
$projects3->Operation();
$projectsSearch1->Operation();
//End Execute Components

//Go to destination page @1-1DE1EAC7
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBlocalhost->close();
    header("Location: " . $Redirect);
    unset($projects2);
    unset($projectsSearch1);
    unset($projects3);
    $menuincludablepage->Class_Terminate();
    unset($menuincludablepage);
    $headerincludablepage->Class_Terminate();
    unset($headerincludablepage);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-A76E75A3
$Head->Show();
$Content->Show();
$Menu->Show();
$HeaderSidebar->Show();
$MasterPage->Tpl->SetVar("Head", $Tpl->GetVar("Panel Head"));
$MasterPage->Tpl->SetVar("Content", $Tpl->GetVar("Panel Content"));
$MasterPage->Tpl->SetVar("Menu", $Tpl->GetVar("Panel Menu"));
$MasterPage->Tpl->SetVar("HeaderSidebar", $Tpl->GetVar("Panel HeaderSidebar"));
$MasterPage->Show();
if (!isset($main_block)) $main_block = $MasterPage->HTML;
$main_block = CCConvertEncoding($main_block, $FileEncoding, $TemplateEncoding);
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-99F7510D
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBlocalhost->close();
unset($MasterPage);
unset($projects2);
unset($projectsSearch1);
unset($projects3);
$menuincludablepage->Class_Terminate();
unset($menuincludablepage);
$headerincludablepage->Class_Terminate();
unset($headerincludablepage);
unset($Tpl);
//End Unload Page


?>
