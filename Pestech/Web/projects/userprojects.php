<?php
//Include Common Files @1-9E2B0092
define("RelativePath", "..");
define("PathToCurrentPage", "/projects/");
define("FileName", "userprojects.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-04DB6970
include_once(RelativePath . "/Designs/GTalk1/MasterPage.php");
//End Master Page implementation

class clsGridqryProjects { //qryProjects class @8-64339B6C

//Variables @8-68C749A9

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

//Class_Initialize Event @8-2C9EF29D
    function clsGridqryProjects($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "qryProjects";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid qryProjects";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsqryProjectsDataSource($this);
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
        $this->SorterName = CCGetParam("qryProjectsOrder", "");
        $this->SorterDirection = CCGetParam("qryProjectsDir", "");

        $this->projectname = new clsControl(ccsLink, "projectname", "projectname", ccsText, "", CCGetRequestParam("projectname", ccsGet, NULL), $this);
        $this->substation = new clsControl(ccsLabel, "substation", "substation", ccsText, "", CCGetRequestParam("substation", ccsGet, NULL), $this);
        $this->projectyear = new clsControl(ccsLabel, "projectyear", "projectyear", ccsInteger, "", CCGetRequestParam("projectyear", ccsGet, NULL), $this);
        $this->Sorter_projectname = new clsSorter($this->ComponentName, "Sorter_projectname", $FileName, $this);
        $this->Sorter_substation = new clsSorter($this->ComponentName, "Sorter_substation", $FileName, $this);
        $this->Sorter_projectyear = new clsSorter($this->ComponentName, "Sorter_projectyear", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpSimple, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @8-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @8-9284F3A6
    function Show()
    {
        $Tpl = CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $this->RowNumber = 0;

        $this->DataSource->Parameters["urls_projectname"] = CCGetFromGet("s_projectname", NULL);
        $this->DataSource->Parameters["urls_projecttype"] = CCGetFromGet("s_projecttype", NULL);
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
                $this->projectname->Page = $this->DataSource->f("url");
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
        $this->Sorter_projectname->Show();
        $this->Sorter_substation->Show();
        $this->Sorter_projectyear->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @8-4A869CD7
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

} //End qryProjects Class @8-FCB6E20C

class clsqryProjectsDataSource extends clsDBlocalhost {  //qryProjectsDataSource Class @8-F97B9E7F

//DataSource Variables @8-61F2B5F5
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

//DataSourceClass_Initialize Event @8-A1C553F1
    function clsqryProjectsDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid qryProjects";
        $this->Initialize();
        $this->projectname = new clsField("projectname", ccsText, "");
        
        $this->substation = new clsField("substation", ccsText, "");
        
        $this->projectyear = new clsField("projectyear", ccsInteger, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @8-C3A2C0DF
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_projectname" => array("projectname", ""), 
            "Sorter_substation" => array("substation", ""), 
            "Sorter_projectyear" => array("projectyear", "")));
    }
//End SetOrder Method

//Prepare Method @8-57CD7A26
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urls_projectname", ccsText, "", "", $this->Parameters["urls_projectname"], "", false);
        $this->wp->AddParameter("2", "urls_projecttype", ccsInteger, "", "", $this->Parameters["urls_projecttype"], "", false);
        $this->wp->AddParameter("3", "urls_isactive", ccsInteger, "", "", $this->Parameters["urls_isactive"], "", false);
        $this->wp->Criterion[1] = $this->wp->Operation(opContains, "projects.projectname", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsText),false);
        $this->wp->Criterion[2] = $this->wp->Operation(opEqual, "qryProjects.projecttype", $this->wp->GetDBValue("2"), $this->ToSQL($this->wp->GetDBValue("2"), ccsInteger),false);
        $this->wp->Criterion[3] = $this->wp->Operation(opEqual, "qryProjects.isactive", $this->wp->GetDBValue("3"), $this->ToSQL($this->wp->GetDBValue("3"), ccsInteger),false);
        $this->Where = $this->wp->opAND(
             false, $this->wp->opAND(
             false, 
             $this->wp->Criterion[1], 
             $this->wp->Criterion[2]), 
             $this->wp->Criterion[3]);
    }
//End Prepare Method

//Open Method @8-F4E4E9C2
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*)\n\n" .
        "FROM projects INNER JOIN projecttypes ON\n\n" .
        "projects.projecttype = projecttypes.Id";
        $this->SQL = "SELECT typename, url, projectname, substation, projectdescription, projectyear, projects.isactive AS isactive, projects.Id AS Id,\n\n" .
        "projecttype \n\n" .
        "FROM projects INNER JOIN projecttypes ON\n\n" .
        "projects.projecttype = projecttypes.Id {SQL_Where} {SQL_OrderBy}";
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

//SetValues Method @8-45A21E61
    function SetValues()
    {
        $this->projectname->SetDBValue($this->f("projectname"));
        $this->substation->SetDBValue($this->f("substation"));
        $this->projectyear->SetDBValue(trim($this->f("projectyear")));
    }
//End SetValues Method

} //End qryProjectsDataSource Class @8-FCB6E20C

class clsRecordqryProjectsSearch { //qryProjectsSearch Class @34-8E2BF093

//Variables @34-9E315808

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

//Class_Initialize Event @34-8142D7C1
    function clsRecordqryProjectsSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record qryProjectsSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "qryProjectsSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_projectname = new clsControl(ccsTextBox, "s_projectname", "Projectname", ccsText, "", CCGetRequestParam("s_projectname", $Method, NULL), $this);
            $this->s_projecttype = new clsControl(ccsListBox, "s_projecttype", "Projecttype", ccsInteger, "", CCGetRequestParam("s_projecttype", $Method, NULL), $this);
            $this->s_projecttype->DSType = dsTable;
            $this->s_projecttype->DataSource = new clsDBlocalhost();
            $this->s_projecttype->ds = & $this->s_projecttype->DataSource;
            $this->s_projecttype->DataSource->SQL = "SELECT * \n" .
"FROM projecttypes {SQL_Where} {SQL_OrderBy}";
            list($this->s_projecttype->BoundColumn, $this->s_projecttype->TextColumn, $this->s_projecttype->DBFormat) = array("Id", "typename", "");
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

//Validate Method @34-E0820118
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_projectname->Validate() && $Validation);
        $Validation = ($this->s_projecttype->Validate() && $Validation);
        $Validation = ($this->s_isactive->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_projectname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->s_projecttype->Errors->Count() == 0);
        $Validation =  $Validation && ($this->s_isactive->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @34-5B71747E
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->s_projectname->Errors->Count());
        $errors = ($errors || $this->s_projecttype->Errors->Count());
        $errors = ($errors || $this->s_isactive->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @34-112C8A4E
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
        $Redirect = "userprojects.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "userprojects.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @34-78D92FE1
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

        $this->s_projecttype->Prepare();
        $this->s_isactive->Prepare();

        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->s_projectname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_projecttype->Errors->ToString());
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
        $this->s_projectname->Show();
        $this->s_projecttype->Show();
        $this->s_isactive->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End qryProjectsSearch Class @34-FCB6E20C

//Include Page implementation @7-C10B939B
include_once(RelativePath . "/includables/menuincludablepage.php");
//End Include Page implementation

//Include Page implementation @6-59AEC4EA
include_once(RelativePath . "/includables/headerincludablepage.php");
//End Include Page implementation

//Initialize Page @1-A7A19806
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
$TemplateFileName = "userprojects.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.position.js|js/jquery/ui/jquery.ui.menu.js|js/jquery/ui/jquery.ui.autocomplete.js|js/jquery/autocomplete/ccs-autocomplete.js|";
$Charset = $Charset ? $Charset : "utf-8";
//End Initialize Page

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-5919A052
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
$qryProjects = new clsGridqryProjects("", $MainPage);
$qryProjectsSearch = new clsRecordqryProjectsSearch("", $MainPage);
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
$MainPage->qryProjects = & $qryProjects;
$MainPage->qryProjectsSearch = & $qryProjectsSearch;
$MainPage->Menu = & $Menu;
$MainPage->menuincludablepage = & $menuincludablepage;
$MainPage->HeaderSidebar = & $HeaderSidebar;
$MainPage->headerincludablepage = & $headerincludablepage;
$Content->AddComponent("qryProjects", $qryProjects);
$Content->AddComponent("qryProjectsSearch", $qryProjectsSearch);
$Menu->AddComponent("menuincludablepage", $menuincludablepage);
$HeaderSidebar->AddComponent("headerincludablepage", $headerincludablepage);
$qryProjects->Initialize();
$ScriptIncludes = "";
$SList = explode("|", $Scripts);
foreach ($SList as $Script) {
    if ($Script != "") $ScriptIncludes = $ScriptIncludes . "<script src=\"" . $PathToRoot . $Script . "\" type=\"text/javascript\"></script>\n";
}
$Attributes->SetValue("scriptIncludes", $ScriptIncludes);

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-D449651D
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "UTF-8", "replace");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "UTF-8", "replace");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->SetVar("CCS_PathToMasterPage", RelativePath . $PathToCurrentMasterPage);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "../");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-310EA6F4
$MasterPage->Operations();
$headerincludablepage->Operations();
$menuincludablepage->Operations();
$qryProjectsSearch->Operation();
//End Execute Components

//Go to destination page @1-E2426951
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBlocalhost->close();
    header("Location: " . $Redirect);
    unset($qryProjects);
    unset($qryProjectsSearch);
    $menuincludablepage->Class_Terminate();
    unset($menuincludablepage);
    $headerincludablepage->Class_Terminate();
    unset($headerincludablepage);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-25457559
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
$main_block = CCConvertEncoding($main_block, $FileEncoding, $CCSLocales->GetFormatInfo("Encoding"));
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-3001C1A3
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBlocalhost->close();
unset($MasterPage);
unset($qryProjects);
unset($qryProjectsSearch);
$menuincludablepage->Class_Terminate();
unset($menuincludablepage);
$headerincludablepage->Class_Terminate();
unset($headerincludablepage);
unset($Tpl);
//End Unload Page


?>
