<?php
//Include Common Files @1-92CC4516
define("RelativePath", "..");
define("PathToCurrentPage", "/admin/");
define("FileName", "users.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-90CEED50
include_once(RelativePath . "/Designs/Pestech/MasterPage.php");
//End Master Page implementation

class clsGridusers1 { //users1 class @9-969C7C31

//Variables @9-6BF3F734

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
    public $Sorter_username;
    public $Sorter_firstname;
    public $Sorter_lastname;
//End Variables

//Class_Initialize Event @9-FF40ECFB
    function clsGridusers1($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "users1";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid users1";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsusers1DataSource($this);
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
        $this->SorterName = CCGetParam("users1Order", "");
        $this->SorterDirection = CCGetParam("users1Dir", "");

        $this->username = new clsControl(ccsLink, "username", "username", ccsText, "", CCGetRequestParam("username", ccsGet, NULL), $this);
        $this->username->Page = "";
        $this->firstname = new clsControl(ccsLabel, "firstname", "firstname", ccsText, "", CCGetRequestParam("firstname", ccsGet, NULL), $this);
        $this->lastname = new clsControl(ccsLabel, "lastname", "lastname", ccsText, "", CCGetRequestParam("lastname", ccsGet, NULL), $this);
        $this->users1_Insert = new clsControl(ccsLink, "users1_Insert", "users1_Insert", ccsText, "", CCGetRequestParam("users1_Insert", ccsGet, NULL), $this);
        $this->users1_Insert->Parameters = CCGetQueryString("QueryString", array("Id", "ccsForm"));
        $this->users1_Insert->Page = "users.php";
        $this->users1_TotalRecords = new clsControl(ccsLabel, "users1_TotalRecords", "users1_TotalRecords", ccsText, "", CCGetRequestParam("users1_TotalRecords", ccsGet, NULL), $this);
        $this->Sorter_username = new clsSorter($this->ComponentName, "Sorter_username", $FileName, $this);
        $this->Sorter_firstname = new clsSorter($this->ComponentName, "Sorter_firstname", $FileName, $this);
        $this->Sorter_lastname = new clsSorter($this->ComponentName, "Sorter_lastname", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @9-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @9-F4F6C793
    function Show()
    {
        $Tpl = CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $this->RowNumber = 0;

        $this->DataSource->Parameters["urls_username"] = CCGetFromGet("s_username", NULL);
        $this->DataSource->Parameters["urls_isactive"] = CCGetFromGet("s_isactive", NULL);

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
            $this->ControlsVisible["username"] = $this->username->Visible;
            $this->ControlsVisible["firstname"] = $this->firstname->Visible;
            $this->ControlsVisible["lastname"] = $this->lastname->Visible;
            while ($this->ForceIteration || (($this->RowNumber < $this->PageSize) &&  ($this->HasRecord = $this->DataSource->has_next_record()))) {
                $this->RowNumber++;
                if ($this->HasRecord) {
                    $this->DataSource->next_record();
                    $this->DataSource->SetValues();
                }
                $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/Row";
                $this->username->SetValue($this->DataSource->username->GetValue());
                $this->username->Parameters = CCGetQueryString("QueryString", array("ccsForm"));
                $this->username->Parameters = CCAddParam($this->username->Parameters, "Id", $this->DataSource->f("Id"));
                $this->firstname->SetValue($this->DataSource->firstname->GetValue());
                $this->lastname->SetValue($this->DataSource->lastname->GetValue());
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->username->Show();
                $this->firstname->Show();
                $this->lastname->Show();
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
        $this->users1_Insert->Show();
        $this->users1_TotalRecords->Show();
        $this->Sorter_username->Show();
        $this->Sorter_firstname->Show();
        $this->Sorter_lastname->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @9-B0640F0B
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->username->Errors->ToString());
        $errors = ComposeStrings($errors, $this->firstname->Errors->ToString());
        $errors = ComposeStrings($errors, $this->lastname->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End users1 Class @9-FCB6E20C

class clsusers1DataSource extends clsDBlocalhost {  //users1DataSource Class @9-37A11A72

//DataSource Variables @9-8ED7CAAD
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $username;
    public $firstname;
    public $lastname;
//End DataSource Variables

//DataSourceClass_Initialize Event @9-3BE52771
    function clsusers1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid users1";
        $this->Initialize();
        $this->username = new clsField("username", ccsText, "");
        
        $this->firstname = new clsField("firstname", ccsText, "");
        
        $this->lastname = new clsField("lastname", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @9-A30C6ED0
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "username";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_username" => array("username", ""), 
            "Sorter_firstname" => array("firstname", ""), 
            "Sorter_lastname" => array("lastname", "")));
    }
//End SetOrder Method

//Prepare Method @9-D62FCBAD
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urls_username", ccsText, "", "", $this->Parameters["urls_username"], "", false);
        $this->wp->AddParameter("2", "urls_isactive", ccsInteger, "", "", $this->Parameters["urls_isactive"], "", false);
        $this->wp->Criterion[1] = $this->wp->Operation(opContains, "username", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsText),false);
        $this->wp->Criterion[2] = $this->wp->Operation(opEqual, "isactive", $this->wp->GetDBValue("2"), $this->ToSQL($this->wp->GetDBValue("2"), ccsInteger),false);
        $this->Where = $this->wp->opAND(
             false, 
             $this->wp->Criterion[1], 
             $this->wp->Criterion[2]);
    }
//End Prepare Method

//Open Method @9-ACD53468
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM users";
        $this->SQL = "SELECT Id, username, firstname, lastname, isactive \n\n" .
        "FROM users {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @9-FF1B0659
    function SetValues()
    {
        $this->username->SetDBValue($this->f("username"));
        $this->firstname->SetDBValue($this->f("firstname"));
        $this->lastname->SetDBValue($this->f("lastname"));
    }
//End SetValues Method

} //End users1DataSource Class @9-FCB6E20C

class clsRecordusersSearch { //usersSearch Class @31-C4FF86BD

//Variables @31-9E315808

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

//Class_Initialize Event @31-40F5447D
    function clsRecordusersSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record usersSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "usersSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_username = new clsControl(ccsTextBox, "s_username", "Username", ccsText, "", CCGetRequestParam("s_username", $Method, NULL), $this);
            $this->s_isactive = new clsControl(ccsListBox, "s_isactive", "Isactive", ccsInteger, "", CCGetRequestParam("s_isactive", $Method, NULL), $this);
            $this->s_isactive->DSType = dsTable;
            $this->s_isactive->DataSource = new clsDBlocalhost();
            $this->s_isactive->ds = & $this->s_isactive->DataSource;
            $this->s_isactive->DataSource->SQL = "SELECT * \n" .
"FROM isactive {SQL_Where} {SQL_OrderBy}";
            list($this->s_isactive->BoundColumn, $this->s_isactive->TextColumn, $this->s_isactive->DBFormat) = array("Id", "isactivedescription", "");
        }
    }
//End Class_Initialize Event

//Validate Method @31-5379706D
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_username->Validate() && $Validation);
        $Validation = ($this->s_isactive->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_username->Errors->Count() == 0);
        $Validation =  $Validation && ($this->s_isactive->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @31-281C58E5
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->s_username->Errors->Count());
        $errors = ($errors || $this->s_isactive->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @31-AB46278A
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
        $Redirect = "users.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "users.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @31-88028FFF
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

        $this->s_isactive->Prepare();

        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->s_username->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_isactive->Errors->ToString());
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

        $this->Button_DoSearch->Show();
        $this->s_username->Show();
        $this->s_isactive->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End usersSearch Class @31-FCB6E20C

class clsRecordusers2 { //users2 Class @37-E9F82E13

//Variables @37-9E315808

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

//Class_Initialize Event @37-98780355
    function clsRecordusers2($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record users2/Error";
        $this->DataSource = new clsusers2DataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        $this->UpdateAllowed = true;
        $this->DeleteAllowed = true;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "users2";
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
            $this->username = new clsControl(ccsTextBox, "username", "Username", ccsText, "", CCGetRequestParam("username", $Method, NULL), $this);
            $this->username->Required = true;
            $this->firstname = new clsControl(ccsTextBox, "firstname", "Firstname", ccsText, "", CCGetRequestParam("firstname", $Method, NULL), $this);
            $this->lastname = new clsControl(ccsTextBox, "lastname", "Lastname", ccsText, "", CCGetRequestParam("lastname", $Method, NULL), $this);
            $this->password = new clsControl(ccsTextBox, "password", "Password", ccsText, "", CCGetRequestParam("password", $Method, NULL), $this);
            $this->password->Required = true;
            $this->email = new clsControl(ccsTextBox, "email", "Email", ccsText, "", CCGetRequestParam("email", $Method, NULL), $this);
            $this->email->Required = true;
            $this->telno = new clsControl(ccsTextBox, "telno", "Telno", ccsText, "", CCGetRequestParam("telno", $Method, NULL), $this);
            $this->level = new clsControl(ccsListBox, "level", "Level", ccsInteger, "", CCGetRequestParam("level", $Method, NULL), $this);
            $this->level->DSType = dsTable;
            $this->level->DataSource = new clsDBlocalhost();
            $this->level->ds = & $this->level->DataSource;
            $this->level->DataSource->SQL = "SELECT * \n" .
"FROM levels {SQL_Where} {SQL_OrderBy}";
            list($this->level->BoundColumn, $this->level->TextColumn, $this->level->DBFormat) = array("Id", "levelname", "");
            $this->level->Required = true;
            $this->isactive = new clsControl(ccsCheckBox, "isactive", "isactive", ccsInteger, "", CCGetRequestParam("isactive", $Method, NULL), $this);
            $this->isactive->CheckedValue = $this->isactive->GetParsedValue(1);
            $this->isactive->UncheckedValue = $this->isactive->GetParsedValue(0);
            $this->password_Shadow = new clsControl(ccsHidden, "password_Shadow", "password_Shadow", ccsText, "", CCGetRequestParam("password_Shadow", $Method, NULL), $this);
            if(!$this->FormSubmitted) {
                if(!is_array($this->level->Value) && !strlen($this->level->Value) && $this->level->Value !== false)
                    $this->level->SetText(1);
                if(!is_array($this->isactive->Value) && !strlen($this->isactive->Value) && $this->isactive->Value !== false)
                    $this->isactive->SetValue(true);
            }
        }
    }
//End Class_Initialize Event

//Initialize Method @37-4F76030F
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlId"] = CCGetFromGet("Id", NULL);
    }
//End Initialize Method

//Validate Method @37-1B36C2B9
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->username->Validate() && $Validation);
        $Validation = ($this->firstname->Validate() && $Validation);
        $Validation = ($this->lastname->Validate() && $Validation);
        $Validation = ($this->password->Validate() && $Validation);
        $Validation = ($this->email->Validate() && $Validation);
        $Validation = ($this->telno->Validate() && $Validation);
        $Validation = ($this->level->Validate() && $Validation);
        $Validation = ($this->isactive->Validate() && $Validation);
        $Validation = ($this->password_Shadow->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->username->Errors->Count() == 0);
        $Validation =  $Validation && ($this->firstname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->lastname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->password->Errors->Count() == 0);
        $Validation =  $Validation && ($this->email->Errors->Count() == 0);
        $Validation =  $Validation && ($this->telno->Errors->Count() == 0);
        $Validation =  $Validation && ($this->level->Errors->Count() == 0);
        $Validation =  $Validation && ($this->isactive->Errors->Count() == 0);
        $Validation =  $Validation && ($this->password_Shadow->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @37-CE9841DF
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->username->Errors->Count());
        $errors = ($errors || $this->firstname->Errors->Count());
        $errors = ($errors || $this->lastname->Errors->Count());
        $errors = ($errors || $this->password->Errors->Count());
        $errors = ($errors || $this->email->Errors->Count());
        $errors = ($errors || $this->telno->Errors->Count());
        $errors = ($errors || $this->level->Errors->Count());
        $errors = ($errors || $this->isactive->Errors->Count());
        $errors = ($errors || $this->password_Shadow->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @37-288F0419
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

//InsertRow Method @37-EDDA5A61
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->username->SetValue($this->username->GetValue(true));
        $this->DataSource->firstname->SetValue($this->firstname->GetValue(true));
        $this->DataSource->lastname->SetValue($this->lastname->GetValue(true));
        $this->DataSource->email->SetValue($this->email->GetValue(true));
        $this->DataSource->telno->SetValue($this->telno->GetValue(true));
        $this->DataSource->level->SetValue($this->level->GetValue(true));
        $this->DataSource->isactive->SetValue($this->isactive->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//UpdateRow Method @37-87A86D65
    function UpdateRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeUpdate", $this);
        if(!$this->UpdateAllowed) return false;
        $this->DataSource->username->SetValue($this->username->GetValue(true));
        $this->DataSource->firstname->SetValue($this->firstname->GetValue(true));
        $this->DataSource->lastname->SetValue($this->lastname->GetValue(true));
        $this->DataSource->email->SetValue($this->email->GetValue(true));
        $this->DataSource->telno->SetValue($this->telno->GetValue(true));
        $this->DataSource->level->SetValue($this->level->GetValue(true));
        $this->DataSource->isactive->SetValue($this->isactive->GetValue(true));
        $this->DataSource->Update();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterUpdate", $this);
        return (!$this->CheckErrors());
    }
//End UpdateRow Method

//DeleteRow Method @37-299D98C3
    function DeleteRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeDelete", $this);
        if(!$this->DeleteAllowed) return false;
        $this->DataSource->Delete();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterDelete", $this);
        return (!$this->CheckErrors());
    }
//End DeleteRow Method

//Show Method @37-4FC75901
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

        $this->level->Prepare();

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
                    $this->username->SetValue($this->DataSource->username->GetValue());
                    $this->firstname->SetValue($this->DataSource->firstname->GetValue());
                    $this->lastname->SetValue($this->DataSource->lastname->GetValue());
                    $this->password->SetValue($this->DataSource->password->GetValue());
                    $this->email->SetValue($this->DataSource->email->GetValue());
                    $this->telno->SetValue($this->DataSource->telno->GetValue());
                    $this->level->SetValue($this->DataSource->level->GetValue());
                    $this->isactive->SetValue($this->DataSource->isactive->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }
        if (!$this->FormSubmitted) {
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->username->Errors->ToString());
            $Error = ComposeStrings($Error, $this->firstname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->lastname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->password->Errors->ToString());
            $Error = ComposeStrings($Error, $this->email->Errors->ToString());
            $Error = ComposeStrings($Error, $this->telno->Errors->ToString());
            $Error = ComposeStrings($Error, $this->level->Errors->ToString());
            $Error = ComposeStrings($Error, $this->isactive->Errors->ToString());
            $Error = ComposeStrings($Error, $this->password_Shadow->Errors->ToString());
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
        $this->username->Show();
        $this->firstname->Show();
        $this->lastname->Show();
        $this->password->Show();
        $this->email->Show();
        $this->telno->Show();
        $this->level->Show();
        $this->isactive->Show();
        $this->password_Shadow->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End users2 Class @37-FCB6E20C

class clsusers2DataSource extends clsDBlocalhost {  //users2DataSource Class @37-6CB6AB67

//DataSource Variables @37-7B667ABF
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
    public $username;
    public $firstname;
    public $lastname;
    public $password;
    public $email;
    public $telno;
    public $level;
    public $isactive;
    public $password_Shadow;
//End DataSource Variables

//DataSourceClass_Initialize Event @37-0A708E37
    function clsusers2DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record users2/Error";
        $this->Initialize();
        $this->username = new clsField("username", ccsText, "");
        
        $this->firstname = new clsField("firstname", ccsText, "");
        
        $this->lastname = new clsField("lastname", ccsText, "");
        
        $this->password = new clsField("password", ccsText, "");
        
        $this->email = new clsField("email", ccsText, "");
        
        $this->telno = new clsField("telno", ccsText, "");
        
        $this->level = new clsField("level", ccsInteger, "");
        
        $this->isactive = new clsField("isactive", ccsInteger, "");
        
        $this->password_Shadow = new clsField("password_Shadow", ccsText, "");
        

        $this->InsertFields["username"] = array("Name" => "username", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["firstname"] = array("Name" => "firstname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["lastname"] = array("Name" => "lastname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["password"] = array("Name" => "password", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["email"] = array("Name" => "email", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["telno"] = array("Name" => "telno", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["level"] = array("Name" => "level", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["isactive"] = array("Name" => "isactive", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["username"] = array("Name" => "username", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["firstname"] = array("Name" => "firstname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["lastname"] = array("Name" => "lastname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["password"] = array("Name" => "password", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["email"] = array("Name" => "email", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["telno"] = array("Name" => "telno", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->UpdateFields["level"] = array("Name" => "level", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->UpdateFields["isactive"] = array("Name" => "isactive", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @37-F755E9A7
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

//Open Method @37-B071412E
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM users {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @37-566C2340
    function SetValues()
    {
        $this->username->SetDBValue($this->f("username"));
        $this->firstname->SetDBValue($this->f("firstname"));
        $this->lastname->SetDBValue($this->f("lastname"));
        $this->password->SetDBValue($this->f("password"));
        $this->email->SetDBValue($this->f("email"));
        $this->telno->SetDBValue($this->f("telno"));
        $this->level->SetDBValue(trim($this->f("level")));
        $this->isactive->SetDBValue(trim($this->f("isactive")));
    }
//End SetValues Method

//Insert Method @37-5303CBDC
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->cp["username"] = new clsSQLParameter("ctrlusername", ccsText, "", "", $this->username->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["firstname"] = new clsSQLParameter("ctrlfirstname", ccsText, "", "", $this->firstname->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["lastname"] = new clsSQLParameter("ctrllastname", ccsText, "", "", $this->lastname->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["password"] = new clsSQLParameter("expr62", ccsText, "", "", "{password}", NULL, false, $this->ErrorBlock);
        $this->cp["email"] = new clsSQLParameter("ctrlemail", ccsText, "", "", $this->email->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["telno"] = new clsSQLParameter("ctrltelno", ccsText, "", "", $this->telno->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["level"] = new clsSQLParameter("ctrllevel", ccsInteger, "", "", $this->level->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["isactive"] = new clsSQLParameter("ctrlisactive", ccsInteger, "", "", $this->isactive->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        if (!is_null($this->cp["username"]->GetValue()) and !strlen($this->cp["username"]->GetText()) and !is_bool($this->cp["username"]->GetValue())) 
            $this->cp["username"]->SetValue($this->username->GetValue(true));
        if (!is_null($this->cp["firstname"]->GetValue()) and !strlen($this->cp["firstname"]->GetText()) and !is_bool($this->cp["firstname"]->GetValue())) 
            $this->cp["firstname"]->SetValue($this->firstname->GetValue(true));
        if (!is_null($this->cp["lastname"]->GetValue()) and !strlen($this->cp["lastname"]->GetText()) and !is_bool($this->cp["lastname"]->GetValue())) 
            $this->cp["lastname"]->SetValue($this->lastname->GetValue(true));
        if (!is_null($this->cp["password"]->GetValue()) and !strlen($this->cp["password"]->GetText()) and !is_bool($this->cp["password"]->GetValue())) 
            $this->cp["password"]->SetValue("{password}");
        if (!is_null($this->cp["email"]->GetValue()) and !strlen($this->cp["email"]->GetText()) and !is_bool($this->cp["email"]->GetValue())) 
            $this->cp["email"]->SetValue($this->email->GetValue(true));
        if (!is_null($this->cp["telno"]->GetValue()) and !strlen($this->cp["telno"]->GetText()) and !is_bool($this->cp["telno"]->GetValue())) 
            $this->cp["telno"]->SetValue($this->telno->GetValue(true));
        if (!is_null($this->cp["level"]->GetValue()) and !strlen($this->cp["level"]->GetText()) and !is_bool($this->cp["level"]->GetValue())) 
            $this->cp["level"]->SetValue($this->level->GetValue(true));
        if (!is_null($this->cp["isactive"]->GetValue()) and !strlen($this->cp["isactive"]->GetText()) and !is_bool($this->cp["isactive"]->GetValue())) 
            $this->cp["isactive"]->SetValue($this->isactive->GetValue(true));
        $this->InsertFields["username"]["Value"] = $this->cp["username"]->GetDBValue(true);
        $this->InsertFields["firstname"]["Value"] = $this->cp["firstname"]->GetDBValue(true);
        $this->InsertFields["lastname"]["Value"] = $this->cp["lastname"]->GetDBValue(true);
        $this->InsertFields["password"]["Value"] = $this->cp["password"]->GetDBValue(true);
        $this->InsertFields["email"]["Value"] = $this->cp["email"]->GetDBValue(true);
        $this->InsertFields["telno"]["Value"] = $this->cp["telno"]->GetDBValue(true);
        $this->InsertFields["level"]["Value"] = $this->cp["level"]->GetDBValue(true);
        $this->InsertFields["isactive"]["Value"] = $this->cp["isactive"]->GetDBValue(true);
        $this->SQL = CCBuildInsert("users", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

//Update Method @37-55391639
    function Update()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->cp["username"] = new clsSQLParameter("ctrlusername", ccsText, "", "", $this->username->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["firstname"] = new clsSQLParameter("ctrlfirstname", ccsText, "", "", $this->firstname->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["lastname"] = new clsSQLParameter("ctrllastname", ccsText, "", "", $this->lastname->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["password"] = new clsSQLParameter("expr71", ccsText, "", "", "{password}", NULL, false, $this->ErrorBlock);
        $this->cp["email"] = new clsSQLParameter("ctrlemail", ccsText, "", "", $this->email->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["telno"] = new clsSQLParameter("ctrltelno", ccsText, "", "", $this->telno->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["level"] = new clsSQLParameter("ctrllevel", ccsInteger, "", "", $this->level->GetValue(true), NULL, false, $this->ErrorBlock);
        $this->cp["isactive"] = new clsSQLParameter("ctrlisactive", ccsInteger, "", "", $this->isactive->GetValue(true), NULL, false, $this->ErrorBlock);
        $wp = new clsSQLParameters($this->ErrorBlock);
        $wp->AddParameter("1", "urlId", ccsInteger, "", "", CCGetFromGet("Id", NULL), NULL, false);
        if(!$wp->AllParamsSet()) {
            $this->Errors->addError($CCSLocales->GetText("CCS_CustomOperationError_MissingParameters"));
        }
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildUpdate", $this->Parent);
        if (!is_null($this->cp["username"]->GetValue()) and !strlen($this->cp["username"]->GetText()) and !is_bool($this->cp["username"]->GetValue())) 
            $this->cp["username"]->SetValue($this->username->GetValue(true));
        if (!is_null($this->cp["firstname"]->GetValue()) and !strlen($this->cp["firstname"]->GetText()) and !is_bool($this->cp["firstname"]->GetValue())) 
            $this->cp["firstname"]->SetValue($this->firstname->GetValue(true));
        if (!is_null($this->cp["lastname"]->GetValue()) and !strlen($this->cp["lastname"]->GetText()) and !is_bool($this->cp["lastname"]->GetValue())) 
            $this->cp["lastname"]->SetValue($this->lastname->GetValue(true));
        if (!is_null($this->cp["password"]->GetValue()) and !strlen($this->cp["password"]->GetText()) and !is_bool($this->cp["password"]->GetValue())) 
            $this->cp["password"]->SetValue("{password}");
        if (!is_null($this->cp["email"]->GetValue()) and !strlen($this->cp["email"]->GetText()) and !is_bool($this->cp["email"]->GetValue())) 
            $this->cp["email"]->SetValue($this->email->GetValue(true));
        if (!is_null($this->cp["telno"]->GetValue()) and !strlen($this->cp["telno"]->GetText()) and !is_bool($this->cp["telno"]->GetValue())) 
            $this->cp["telno"]->SetValue($this->telno->GetValue(true));
        if (!is_null($this->cp["level"]->GetValue()) and !strlen($this->cp["level"]->GetText()) and !is_bool($this->cp["level"]->GetValue())) 
            $this->cp["level"]->SetValue($this->level->GetValue(true));
        if (!is_null($this->cp["isactive"]->GetValue()) and !strlen($this->cp["isactive"]->GetText()) and !is_bool($this->cp["isactive"]->GetValue())) 
            $this->cp["isactive"]->SetValue($this->isactive->GetValue(true));
        $wp->Criterion[1] = $wp->Operation(opEqual, "Id", $wp->GetDBValue("1"), $this->ToSQL($wp->GetDBValue("1"), ccsInteger),false);
        $Where = 
             $wp->Criterion[1];
        $this->UpdateFields["username"]["Value"] = $this->cp["username"]->GetDBValue(true);
        $this->UpdateFields["firstname"]["Value"] = $this->cp["firstname"]->GetDBValue(true);
        $this->UpdateFields["lastname"]["Value"] = $this->cp["lastname"]->GetDBValue(true);
        $this->UpdateFields["password"]["Value"] = $this->cp["password"]->GetDBValue(true);
        $this->UpdateFields["email"]["Value"] = $this->cp["email"]->GetDBValue(true);
        $this->UpdateFields["telno"]["Value"] = $this->cp["telno"]->GetDBValue(true);
        $this->UpdateFields["level"]["Value"] = $this->cp["level"]->GetDBValue(true);
        $this->UpdateFields["isactive"]["Value"] = $this->cp["isactive"]->GetDBValue(true);
        $this->SQL = CCBuildUpdate("users", $this->UpdateFields, $this);
        $this->SQL .= strlen($Where) ? " WHERE " . $Where : $Where;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteUpdate", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteUpdate", $this->Parent);
        }
    }
//End Update Method

//Delete Method @37-4AB027F1
    function Delete()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildDelete", $this->Parent);
        $this->SQL = "DELETE FROM users";
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

} //End users2DataSource Class @37-FCB6E20C

//Include Page implementation @7-C10B939B
include_once(RelativePath . "/includables/menuincludablepage.php");
//End Include Page implementation

//Include Page implementation @6-59AEC4EA
include_once(RelativePath . "/includables/headerincludablepage.php");
//End Include Page implementation

//Initialize Page @1-03626612
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
$TemplateFileName = "users.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.position.js|js/jquery/ui/jquery.ui.menu.js|js/jquery/ui/jquery.ui.autocomplete.js|js/jquery/autocomplete/ccs-autocomplete.js|js/jquery/ui/jquery.ui.mouse.js|js/jquery/ui/jquery.ui.draggable.js|js/jquery/ui/jquery.ui.resizable.js|js/jquery/ui/jquery.ui.button.js|js/jquery/ui/jquery.ui.dialog.js|js/jquery/dialog/ccs-dialog.js|js/jquery/updatepanel/ccs-update-panel.js|";
$Charset = $Charset ? $Charset : "utf-8";
//End Initialize Page

//Include events file @1-DBD7705C
include_once("./users_events.php");
//End Include events file

//BeforeInitialize Binding @1-17AC9191
$CCSEvents["BeforeInitialize"] = "Page_BeforeInitialize";
//End BeforeInitialize Binding

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-C04AF57B
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
$users1 = new clsGridusers1("", $MainPage);
$usersSearch = new clsRecordusersSearch("", $MainPage);
$Panel2 = new clsPanel("Panel2", $MainPage);
$Panel2->GenerateDiv = true;
$Panel2->PanelId = "ContentPanel1Panel2";
$users2 = new clsRecordusers2("", $MainPage);
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
$MainPage->users1 = & $users1;
$MainPage->usersSearch = & $usersSearch;
$MainPage->Panel2 = & $Panel2;
$MainPage->users2 = & $users2;
$MainPage->Menu = & $Menu;
$MainPage->menuincludablepage = & $menuincludablepage;
$MainPage->HeaderSidebar = & $HeaderSidebar;
$MainPage->headerincludablepage = & $headerincludablepage;
$Content->AddComponent("Panel1", $Panel1);
$Panel1->AddComponent("users1", $users1);
$Panel1->AddComponent("usersSearch", $usersSearch);
$Panel1->AddComponent("Panel2", $Panel2);
$Panel2->AddComponent("users2", $users2);
$Menu->AddComponent("menuincludablepage", $menuincludablepage);
$HeaderSidebar->AddComponent("headerincludablepage", $headerincludablepage);
$users1->Initialize();
$users2->Initialize();
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

//Execute Components @1-0E466143
$MasterPage->Operations();
$headerincludablepage->Operations();
$menuincludablepage->Operations();
$users2->Operation();
$usersSearch->Operation();
//End Execute Components

//Go to destination page @1-D6757760
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBlocalhost->close();
    header("Location: " . $Redirect);
    unset($users1);
    unset($usersSearch);
    unset($users2);
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

//Unload Page @1-2FFBB143
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBlocalhost->close();
unset($MasterPage);
unset($users1);
unset($usersSearch);
unset($users2);
$menuincludablepage->Class_Terminate();
unset($menuincludablepage);
$headerincludablepage->Class_Terminate();
unset($headerincludablepage);
unset($Tpl);
//End Unload Page


?>
