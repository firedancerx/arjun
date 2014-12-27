<?php
//Include Common Files @1-12940BE0
define("RelativePath", "..");
define("PathToCurrentPage", "/projectsdesignnew/");
define("FileName", "csc.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-90CEED50
include_once(RelativePath . "/Designs/Pestech/MasterPage.php");
//End Master Page implementation

class clsRecordconductorsizingcalculatio { //conductorsizingcalculatio Class @8-D0EE48EE

//Variables @8-9E315808

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

//Class_Initialize Event @8-765A8EFB
    function clsRecordconductorsizingcalculatio($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record conductorsizingcalculatio/Error";
        $this->DataSource = new clsconductorsizingcalculatioDataSource($this);
        $this->ds = & $this->DataSource;
        $this->InsertAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "conductorsizingcalculatio";
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
            $this->projectid = new clsControl(ccsListBox, "projectid", "Projectid", ccsInteger, "", CCGetRequestParam("projectid", $Method, NULL), $this);
            $this->projectid->DSType = dsTable;
            $this->projectid->DataSource = new clsDBlocalhost();
            $this->projectid->ds = & $this->projectid->DataSource;
            $this->projectid->DataSource->SQL = "SELECT Id, projectname \n" .
"FROM projects {SQL_Where} {SQL_OrderBy}";
            list($this->projectid->BoundColumn, $this->projectid->TextColumn, $this->projectid->DBFormat) = array("Id", "projectname", "");
            $this->projectid->DataSource->Parameters["expr54"] = 1;
            $this->projectid->DataSource->wp = new clsSQLParameters();
            $this->projectid->DataSource->wp->AddParameter("1", "expr54", ccsInteger, "", "", $this->projectid->DataSource->Parameters["expr54"], "", false);
            $this->projectid->DataSource->wp->Criterion[1] = $this->projectid->DataSource->wp->Operation(opEqual, "projecttype", $this->projectid->DataSource->wp->GetDBValue("1"), $this->projectid->DataSource->ToSQL($this->projectid->DataSource->wp->GetDBValue("1"), ccsInteger),false);
            $this->projectid->DataSource->Where = 
                 $this->projectid->DataSource->wp->Criterion[1];
            $this->projectid->Required = true;
            $this->rvikvrms = new clsControl(ccsTextBox, "rvikvrms", "Rvikvrms", ccsInteger, "", CCGetRequestParam("rvikvrms", $Method, NULL), $this);
            $this->rvikvrms->Required = true;
            $this->scxrratio = new clsControl(ccsTextBox, "scxrratio", "Scxrratio", ccsInteger, "", CCGetRequestParam("scxrratio", $Method, NULL), $this);
            $this->scxrratio->Required = true;
            $this->issccurrt = new clsControl(ccsTextBox, "issccurrt", "Issccurrt", ccsInteger, "", CCGetRequestParam("issccurrt", $Method, NULL), $this);
            $this->issccurrt->Required = true;
            $this->ssssscurrt = new clsControl(ccsTextBox, "ssssscurrt", "Ssssscurrt", ccsInteger, "", CCGetRequestParam("ssssscurrt", $Method, NULL), $this);
            $this->ssssscurrt->Required = true;
            $this->dosccurrt = new clsControl(ccsTextBox, "dosccurrt", "Dosccurrt", ccsInteger, "", CCGetRequestParam("dosccurrt", $Method, NULL), $this);
            $this->dosccurrt->Required = true;
            $this->dorsccurrt = new clsControl(ccsTextBox, "dorsccurrt", "Dorsccurrt", ccsInteger, "", CCGetRequestParam("dorsccurrt", $Method, NULL), $this);
            $this->dorsccurrt->Required = true;
            $this->sysfreq = new clsControl(ccsTextBox, "sysfreq", "Sysfreq", ccsInteger, "", CCGetRequestParam("sysfreq", $Method, NULL), $this);
            $this->sysfreq->Required = true;
            $this->rccratg = new clsControl(ccsTextBox, "rccratg", "Rccratg", ccsInteger, "", CCGetRequestParam("rccratg", $Method, NULL), $this);
            $this->rccratg->Required = true;
            $this->noppwires = new clsControl(ccsTextBox, "noppwires", "Noppwires", ccsInteger, "", CCGetRequestParam("noppwires", $Method, NULL), $this);
            $this->spanlgth = new clsControl(ccsTextBox, "spanlgth", "Spanlgth", ccsInteger, "", CCGetRequestParam("spanlgth", $Method, NULL), $this);
            $this->spanlgth->Required = true;
            $this->hocondctr = new clsControl(ccsTextBox, "hocondctr", "Hocondctr", ccsSingle, "", CCGetRequestParam("hocondctr", $Method, NULL), $this);
            $this->hocondctr->Required = true;
            $this->ipspacg = new clsControl(ccsTextBox, "ipspacg", "Ipspacg", ccsSingle, "", CCGetRequestParam("ipspacg", $Method, NULL), $this);
            $this->acsvgradt = new clsControl(ccsTextBox, "acsvgradt", "Acsvgradt", ccsInteger, "", CCGetRequestParam("acsvgradt", $Method, NULL), $this);
            $this->acsvgradt->Required = true;
            $this->make = new clsControl(ccsTextBox, "make", "Make", ccsText, "", CCGetRequestParam("make", $Method, NULL), $this);
            $this->coorigin = new clsControl(ccsTextBox, "coorigin", "Coorigin", ccsText, "", CCGetRequestParam("coorigin", $Method, NULL), $this);
            $this->toalloy = new clsControl(ccsTextBox, "toalloy", "Toalloy", ccsText, "", CCGetRequestParam("toalloy", $Method, NULL), $this);
            $this->ccname = new clsControl(ccsTextBox, "ccname", "Ccname", ccsText, "", CCGetRequestParam("ccname", $Method, NULL), $this);
            $this->edcrocond = new clsControl(ccsTextBox, "edcrocond", "Edcrocond", ccsSingle, "", CCGetRequestParam("edcrocond", $Method, NULL), $this);
            $this->edcrocond->Required = true;
            $this->shocmatrl = new clsControl(ccsTextBox, "shocmatrl", "Shocmatrl", ccsInteger, "", CCGetRequestParam("shocmatrl", $Method, NULL), $this);
            $this->shocmatrl->Required = true;
            $this->docondmatrl = new clsControl(ccsTextBox, "docondmatrl", "Docondmatrl", ccsInteger, "", CCGetRequestParam("docondmatrl", $Method, NULL), $this);
            $this->docondmatrl->Required = true;
            $this->comatrl = new clsControl(ccsTextBox, "comatrl", "Comatrl", ccsSingle, "", CCGetRequestParam("comatrl", $Method, NULL), $this);
            $this->comatrl->Required = true;
            $this->tcorestnce = new clsControl(ccsTextBox, "tcorestnce", "Tcorestnce", ccsSingle, "", CCGetRequestParam("tcorestnce", $Method, NULL), $this);
            $this->tcorestnce->Required = true;
            $this->ccsectn = new clsControl(ccsTextBox, "ccsectn", "Ccsectn", ccsInteger, "", CCGetRequestParam("ccsectn", $Method, NULL), $this);
            $this->ccsectn->Required = true;
            $this->overalldiam = new clsControl(ccsTextBox, "overalldiam", "Overalldiam", ccsSingle, "", CCGetRequestParam("overalldiam", $Method, NULL), $this);
            $this->overalldiam->Required = true;
            $this->dbscctrs = new clsControl(ccsTextBox, "dbscctrs", "Dbscctrs", ccsInteger, "", CCGetRequestParam("dbscctrs", $Method, NULL), $this);
            $this->dbscctrs->Required = true;
            $this->mpulength = new clsControl(ccsTextBox, "mpulength", "Mpulength", ccsSingle, "", CCGetRequestParam("mpulength", $Method, NULL), $this);
            $this->mpulength->Required = true;
            $this->ambtemp = new clsControl(ccsTextBox, "ambtemp", "Ambtemp", ccsInteger, "", CCGetRequestParam("ambtemp", $Method, NULL), $this);
            $this->ambtemp->Required = true;
            $this->fctemp = new clsControl(ccsTextBox, "fctemp", "Fctemp", ccsInteger, "", CCGetRequestParam("fctemp", $Method, NULL), $this);
            $this->fctemp->Required = true;
            $this->ctabeginosc = new clsControl(ccsTextBox, "ctabeginosc", "Ctabeginosc", ccsInteger, "", CCGetRequestParam("ctabeginosc", $Method, NULL), $this);
            $this->ctabeginosc->Required = true;
            $this->ctaendosc = new clsControl(ccsTextBox, "ctaendosc", "Ctaendosc", ccsInteger, "", CCGetRequestParam("ctaendosc", $Method, NULL), $this);
            $this->ctaendosc->Required = true;
            $this->cwindspeed = new clsControl(ccsTextBox, "cwindspeed", "Cwindspeed", ccsSingle, "", CCGetRequestParam("cwindspeed", $Method, NULL), $this);
            $this->cwindspeed->Required = true;
            $this->sracoeff = new clsControl(ccsTextBox, "sracoeff", "Sracoeff", ccsSingle, "", CCGetRequestParam("sracoeff", $Method, NULL), $this);
            $this->sracoeff->Required = true;
            $this->iosradtn = new clsControl(ccsTextBox, "iosradtn", "Iosradtn", ccsInteger, "", CCGetRequestParam("iosradtn", $Method, NULL), $this);
            $this->iosradtn->Required = true;
            $this->ecoeffirtbb = new clsControl(ccsTextBox, "ecoeffirtbb", "Ecoeffirtbb", ccsSingle, "", CCGetRequestParam("ecoeffirtbb", $Method, NULL), $this);
            $this->ecoeffirtbb->Required = true;
            $this->ymoelas = new clsControl(ccsTextBox, "ymoelas", "Ymoelas", ccsFloat, "", CCGetRequestParam("ymoelas", $Method, NULL), $this);
            $this->ymoelas->Required = true;
        }
    }
//End Class_Initialize Event

//Initialize Method @8-4F76030F
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlId"] = CCGetFromGet("Id", NULL);
    }
//End Initialize Method

//Validate Method @8-F68CB137
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->projectid->Validate() && $Validation);
        $Validation = ($this->rvikvrms->Validate() && $Validation);
        $Validation = ($this->scxrratio->Validate() && $Validation);
        $Validation = ($this->issccurrt->Validate() && $Validation);
        $Validation = ($this->ssssscurrt->Validate() && $Validation);
        $Validation = ($this->dosccurrt->Validate() && $Validation);
        $Validation = ($this->dorsccurrt->Validate() && $Validation);
        $Validation = ($this->sysfreq->Validate() && $Validation);
        $Validation = ($this->rccratg->Validate() && $Validation);
        $Validation = ($this->noppwires->Validate() && $Validation);
        $Validation = ($this->spanlgth->Validate() && $Validation);
        $Validation = ($this->hocondctr->Validate() && $Validation);
        $Validation = ($this->ipspacg->Validate() && $Validation);
        $Validation = ($this->acsvgradt->Validate() && $Validation);
        $Validation = ($this->make->Validate() && $Validation);
        $Validation = ($this->coorigin->Validate() && $Validation);
        $Validation = ($this->toalloy->Validate() && $Validation);
        $Validation = ($this->ccname->Validate() && $Validation);
        $Validation = ($this->edcrocond->Validate() && $Validation);
        $Validation = ($this->shocmatrl->Validate() && $Validation);
        $Validation = ($this->docondmatrl->Validate() && $Validation);
        $Validation = ($this->comatrl->Validate() && $Validation);
        $Validation = ($this->tcorestnce->Validate() && $Validation);
        $Validation = ($this->ccsectn->Validate() && $Validation);
        $Validation = ($this->overalldiam->Validate() && $Validation);
        $Validation = ($this->dbscctrs->Validate() && $Validation);
        $Validation = ($this->mpulength->Validate() && $Validation);
        $Validation = ($this->ambtemp->Validate() && $Validation);
        $Validation = ($this->fctemp->Validate() && $Validation);
        $Validation = ($this->ctabeginosc->Validate() && $Validation);
        $Validation = ($this->ctaendosc->Validate() && $Validation);
        $Validation = ($this->cwindspeed->Validate() && $Validation);
        $Validation = ($this->sracoeff->Validate() && $Validation);
        $Validation = ($this->iosradtn->Validate() && $Validation);
        $Validation = ($this->ecoeffirtbb->Validate() && $Validation);
        $Validation = ($this->ymoelas->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->projectid->Errors->Count() == 0);
        $Validation =  $Validation && ($this->rvikvrms->Errors->Count() == 0);
        $Validation =  $Validation && ($this->scxrratio->Errors->Count() == 0);
        $Validation =  $Validation && ($this->issccurrt->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ssssscurrt->Errors->Count() == 0);
        $Validation =  $Validation && ($this->dosccurrt->Errors->Count() == 0);
        $Validation =  $Validation && ($this->dorsccurrt->Errors->Count() == 0);
        $Validation =  $Validation && ($this->sysfreq->Errors->Count() == 0);
        $Validation =  $Validation && ($this->rccratg->Errors->Count() == 0);
        $Validation =  $Validation && ($this->noppwires->Errors->Count() == 0);
        $Validation =  $Validation && ($this->spanlgth->Errors->Count() == 0);
        $Validation =  $Validation && ($this->hocondctr->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ipspacg->Errors->Count() == 0);
        $Validation =  $Validation && ($this->acsvgradt->Errors->Count() == 0);
        $Validation =  $Validation && ($this->make->Errors->Count() == 0);
        $Validation =  $Validation && ($this->coorigin->Errors->Count() == 0);
        $Validation =  $Validation && ($this->toalloy->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ccname->Errors->Count() == 0);
        $Validation =  $Validation && ($this->edcrocond->Errors->Count() == 0);
        $Validation =  $Validation && ($this->shocmatrl->Errors->Count() == 0);
        $Validation =  $Validation && ($this->docondmatrl->Errors->Count() == 0);
        $Validation =  $Validation && ($this->comatrl->Errors->Count() == 0);
        $Validation =  $Validation && ($this->tcorestnce->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ccsectn->Errors->Count() == 0);
        $Validation =  $Validation && ($this->overalldiam->Errors->Count() == 0);
        $Validation =  $Validation && ($this->dbscctrs->Errors->Count() == 0);
        $Validation =  $Validation && ($this->mpulength->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ambtemp->Errors->Count() == 0);
        $Validation =  $Validation && ($this->fctemp->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ctabeginosc->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ctaendosc->Errors->Count() == 0);
        $Validation =  $Validation && ($this->cwindspeed->Errors->Count() == 0);
        $Validation =  $Validation && ($this->sracoeff->Errors->Count() == 0);
        $Validation =  $Validation && ($this->iosradtn->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ecoeffirtbb->Errors->Count() == 0);
        $Validation =  $Validation && ($this->ymoelas->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @8-5699381B
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->projectid->Errors->Count());
        $errors = ($errors || $this->rvikvrms->Errors->Count());
        $errors = ($errors || $this->scxrratio->Errors->Count());
        $errors = ($errors || $this->issccurrt->Errors->Count());
        $errors = ($errors || $this->ssssscurrt->Errors->Count());
        $errors = ($errors || $this->dosccurrt->Errors->Count());
        $errors = ($errors || $this->dorsccurrt->Errors->Count());
        $errors = ($errors || $this->sysfreq->Errors->Count());
        $errors = ($errors || $this->rccratg->Errors->Count());
        $errors = ($errors || $this->noppwires->Errors->Count());
        $errors = ($errors || $this->spanlgth->Errors->Count());
        $errors = ($errors || $this->hocondctr->Errors->Count());
        $errors = ($errors || $this->ipspacg->Errors->Count());
        $errors = ($errors || $this->acsvgradt->Errors->Count());
        $errors = ($errors || $this->make->Errors->Count());
        $errors = ($errors || $this->coorigin->Errors->Count());
        $errors = ($errors || $this->toalloy->Errors->Count());
        $errors = ($errors || $this->ccname->Errors->Count());
        $errors = ($errors || $this->edcrocond->Errors->Count());
        $errors = ($errors || $this->shocmatrl->Errors->Count());
        $errors = ($errors || $this->docondmatrl->Errors->Count());
        $errors = ($errors || $this->comatrl->Errors->Count());
        $errors = ($errors || $this->tcorestnce->Errors->Count());
        $errors = ($errors || $this->ccsectn->Errors->Count());
        $errors = ($errors || $this->overalldiam->Errors->Count());
        $errors = ($errors || $this->dbscctrs->Errors->Count());
        $errors = ($errors || $this->mpulength->Errors->Count());
        $errors = ($errors || $this->ambtemp->Errors->Count());
        $errors = ($errors || $this->fctemp->Errors->Count());
        $errors = ($errors || $this->ctabeginosc->Errors->Count());
        $errors = ($errors || $this->ctaendosc->Errors->Count());
        $errors = ($errors || $this->cwindspeed->Errors->Count());
        $errors = ($errors || $this->sracoeff->Errors->Count());
        $errors = ($errors || $this->iosradtn->Errors->Count());
        $errors = ($errors || $this->ecoeffirtbb->Errors->Count());
        $errors = ($errors || $this->ymoelas->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @8-8FD18B74
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
            $this->PressedButton = "Button_Insert";
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
        $Redirect = $FileName;
        if($this->PressedButton == "Button_Delete") {
            if(!CCGetEvent($this->Button_Delete->CCSEvents, "OnClick", $this->Button_Delete)) {
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
                if(!CCGetEvent($this->Button_Update->CCSEvents, "OnClick", $this->Button_Update)) {
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

//InsertRow Method @8-D604A48A
    function InsertRow()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeInsert", $this);
        if(!$this->InsertAllowed) return false;
        $this->DataSource->projectid->SetValue($this->projectid->GetValue(true));
        $this->DataSource->rvikvrms->SetValue($this->rvikvrms->GetValue(true));
        $this->DataSource->scxrratio->SetValue($this->scxrratio->GetValue(true));
        $this->DataSource->issccurrt->SetValue($this->issccurrt->GetValue(true));
        $this->DataSource->ssssscurrt->SetValue($this->ssssscurrt->GetValue(true));
        $this->DataSource->dosccurrt->SetValue($this->dosccurrt->GetValue(true));
        $this->DataSource->dorsccurrt->SetValue($this->dorsccurrt->GetValue(true));
        $this->DataSource->sysfreq->SetValue($this->sysfreq->GetValue(true));
        $this->DataSource->rccratg->SetValue($this->rccratg->GetValue(true));
        $this->DataSource->noppwires->SetValue($this->noppwires->GetValue(true));
        $this->DataSource->spanlgth->SetValue($this->spanlgth->GetValue(true));
        $this->DataSource->hocondctr->SetValue($this->hocondctr->GetValue(true));
        $this->DataSource->ipspacg->SetValue($this->ipspacg->GetValue(true));
        $this->DataSource->acsvgradt->SetValue($this->acsvgradt->GetValue(true));
        $this->DataSource->make->SetValue($this->make->GetValue(true));
        $this->DataSource->coorigin->SetValue($this->coorigin->GetValue(true));
        $this->DataSource->toalloy->SetValue($this->toalloy->GetValue(true));
        $this->DataSource->ccname->SetValue($this->ccname->GetValue(true));
        $this->DataSource->edcrocond->SetValue($this->edcrocond->GetValue(true));
        $this->DataSource->shocmatrl->SetValue($this->shocmatrl->GetValue(true));
        $this->DataSource->docondmatrl->SetValue($this->docondmatrl->GetValue(true));
        $this->DataSource->comatrl->SetValue($this->comatrl->GetValue(true));
        $this->DataSource->tcorestnce->SetValue($this->tcorestnce->GetValue(true));
        $this->DataSource->ccsectn->SetValue($this->ccsectn->GetValue(true));
        $this->DataSource->overalldiam->SetValue($this->overalldiam->GetValue(true));
        $this->DataSource->dbscctrs->SetValue($this->dbscctrs->GetValue(true));
        $this->DataSource->mpulength->SetValue($this->mpulength->GetValue(true));
        $this->DataSource->ambtemp->SetValue($this->ambtemp->GetValue(true));
        $this->DataSource->fctemp->SetValue($this->fctemp->GetValue(true));
        $this->DataSource->ctabeginosc->SetValue($this->ctabeginosc->GetValue(true));
        $this->DataSource->ctaendosc->SetValue($this->ctaendosc->GetValue(true));
        $this->DataSource->cwindspeed->SetValue($this->cwindspeed->GetValue(true));
        $this->DataSource->sracoeff->SetValue($this->sracoeff->GetValue(true));
        $this->DataSource->iosradtn->SetValue($this->iosradtn->GetValue(true));
        $this->DataSource->ecoeffirtbb->SetValue($this->ecoeffirtbb->GetValue(true));
        $this->DataSource->ymoelas->SetValue($this->ymoelas->GetValue(true));
        $this->DataSource->Insert();
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterInsert", $this);
        return (!$this->CheckErrors());
    }
//End InsertRow Method

//Show Method @8-89DBE4E5
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

        $this->projectid->Prepare();

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
                    $this->projectid->SetValue($this->DataSource->projectid->GetValue());
                    $this->rvikvrms->SetValue($this->DataSource->rvikvrms->GetValue());
                    $this->scxrratio->SetValue($this->DataSource->scxrratio->GetValue());
                    $this->issccurrt->SetValue($this->DataSource->issccurrt->GetValue());
                    $this->ssssscurrt->SetValue($this->DataSource->ssssscurrt->GetValue());
                    $this->dosccurrt->SetValue($this->DataSource->dosccurrt->GetValue());
                    $this->dorsccurrt->SetValue($this->DataSource->dorsccurrt->GetValue());
                    $this->sysfreq->SetValue($this->DataSource->sysfreq->GetValue());
                    $this->rccratg->SetValue($this->DataSource->rccratg->GetValue());
                    $this->noppwires->SetValue($this->DataSource->noppwires->GetValue());
                    $this->spanlgth->SetValue($this->DataSource->spanlgth->GetValue());
                    $this->hocondctr->SetValue($this->DataSource->hocondctr->GetValue());
                    $this->ipspacg->SetValue($this->DataSource->ipspacg->GetValue());
                    $this->acsvgradt->SetValue($this->DataSource->acsvgradt->GetValue());
                    $this->make->SetValue($this->DataSource->make->GetValue());
                    $this->coorigin->SetValue($this->DataSource->coorigin->GetValue());
                    $this->toalloy->SetValue($this->DataSource->toalloy->GetValue());
                    $this->ccname->SetValue($this->DataSource->ccname->GetValue());
                    $this->edcrocond->SetValue($this->DataSource->edcrocond->GetValue());
                    $this->shocmatrl->SetValue($this->DataSource->shocmatrl->GetValue());
                    $this->docondmatrl->SetValue($this->DataSource->docondmatrl->GetValue());
                    $this->comatrl->SetValue($this->DataSource->comatrl->GetValue());
                    $this->tcorestnce->SetValue($this->DataSource->tcorestnce->GetValue());
                    $this->ccsectn->SetValue($this->DataSource->ccsectn->GetValue());
                    $this->overalldiam->SetValue($this->DataSource->overalldiam->GetValue());
                    $this->dbscctrs->SetValue($this->DataSource->dbscctrs->GetValue());
                    $this->mpulength->SetValue($this->DataSource->mpulength->GetValue());
                    $this->ambtemp->SetValue($this->DataSource->ambtemp->GetValue());
                    $this->fctemp->SetValue($this->DataSource->fctemp->GetValue());
                    $this->ctabeginosc->SetValue($this->DataSource->ctabeginosc->GetValue());
                    $this->ctaendosc->SetValue($this->DataSource->ctaendosc->GetValue());
                    $this->cwindspeed->SetValue($this->DataSource->cwindspeed->GetValue());
                    $this->sracoeff->SetValue($this->DataSource->sracoeff->GetValue());
                    $this->iosradtn->SetValue($this->DataSource->iosradtn->GetValue());
                    $this->ecoeffirtbb->SetValue($this->DataSource->ecoeffirtbb->GetValue());
                    $this->ymoelas->SetValue($this->DataSource->ymoelas->GetValue());
                }
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->projectid->Errors->ToString());
            $Error = ComposeStrings($Error, $this->rvikvrms->Errors->ToString());
            $Error = ComposeStrings($Error, $this->scxrratio->Errors->ToString());
            $Error = ComposeStrings($Error, $this->issccurrt->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ssssscurrt->Errors->ToString());
            $Error = ComposeStrings($Error, $this->dosccurrt->Errors->ToString());
            $Error = ComposeStrings($Error, $this->dorsccurrt->Errors->ToString());
            $Error = ComposeStrings($Error, $this->sysfreq->Errors->ToString());
            $Error = ComposeStrings($Error, $this->rccratg->Errors->ToString());
            $Error = ComposeStrings($Error, $this->noppwires->Errors->ToString());
            $Error = ComposeStrings($Error, $this->spanlgth->Errors->ToString());
            $Error = ComposeStrings($Error, $this->hocondctr->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ipspacg->Errors->ToString());
            $Error = ComposeStrings($Error, $this->acsvgradt->Errors->ToString());
            $Error = ComposeStrings($Error, $this->make->Errors->ToString());
            $Error = ComposeStrings($Error, $this->coorigin->Errors->ToString());
            $Error = ComposeStrings($Error, $this->toalloy->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ccname->Errors->ToString());
            $Error = ComposeStrings($Error, $this->edcrocond->Errors->ToString());
            $Error = ComposeStrings($Error, $this->shocmatrl->Errors->ToString());
            $Error = ComposeStrings($Error, $this->docondmatrl->Errors->ToString());
            $Error = ComposeStrings($Error, $this->comatrl->Errors->ToString());
            $Error = ComposeStrings($Error, $this->tcorestnce->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ccsectn->Errors->ToString());
            $Error = ComposeStrings($Error, $this->overalldiam->Errors->ToString());
            $Error = ComposeStrings($Error, $this->dbscctrs->Errors->ToString());
            $Error = ComposeStrings($Error, $this->mpulength->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ambtemp->Errors->ToString());
            $Error = ComposeStrings($Error, $this->fctemp->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ctabeginosc->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ctaendosc->Errors->ToString());
            $Error = ComposeStrings($Error, $this->cwindspeed->Errors->ToString());
            $Error = ComposeStrings($Error, $this->sracoeff->Errors->ToString());
            $Error = ComposeStrings($Error, $this->iosradtn->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ecoeffirtbb->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ymoelas->Errors->ToString());
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
        $this->projectid->Show();
        $this->rvikvrms->Show();
        $this->scxrratio->Show();
        $this->issccurrt->Show();
        $this->ssssscurrt->Show();
        $this->dosccurrt->Show();
        $this->dorsccurrt->Show();
        $this->sysfreq->Show();
        $this->rccratg->Show();
        $this->noppwires->Show();
        $this->spanlgth->Show();
        $this->hocondctr->Show();
        $this->ipspacg->Show();
        $this->acsvgradt->Show();
        $this->make->Show();
        $this->coorigin->Show();
        $this->toalloy->Show();
        $this->ccname->Show();
        $this->edcrocond->Show();
        $this->shocmatrl->Show();
        $this->docondmatrl->Show();
        $this->comatrl->Show();
        $this->tcorestnce->Show();
        $this->ccsectn->Show();
        $this->overalldiam->Show();
        $this->dbscctrs->Show();
        $this->mpulength->Show();
        $this->ambtemp->Show();
        $this->fctemp->Show();
        $this->ctabeginosc->Show();
        $this->ctaendosc->Show();
        $this->cwindspeed->Show();
        $this->sracoeff->Show();
        $this->iosradtn->Show();
        $this->ecoeffirtbb->Show();
        $this->ymoelas->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End conductorsizingcalculatio Class @8-FCB6E20C

class clsconductorsizingcalculatioDataSource extends clsDBlocalhost {  //conductorsizingcalculatioDataSource Class @8-38B511EA

//DataSource Variables @8-DCA3725C
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $InsertParameters;
    public $wp;
    public $AllParametersSet;

    public $InsertFields = array();

    // Datasource fields
    public $projectid;
    public $rvikvrms;
    public $scxrratio;
    public $issccurrt;
    public $ssssscurrt;
    public $dosccurrt;
    public $dorsccurrt;
    public $sysfreq;
    public $rccratg;
    public $noppwires;
    public $spanlgth;
    public $hocondctr;
    public $ipspacg;
    public $acsvgradt;
    public $make;
    public $coorigin;
    public $toalloy;
    public $ccname;
    public $edcrocond;
    public $shocmatrl;
    public $docondmatrl;
    public $comatrl;
    public $tcorestnce;
    public $ccsectn;
    public $overalldiam;
    public $dbscctrs;
    public $mpulength;
    public $ambtemp;
    public $fctemp;
    public $ctabeginosc;
    public $ctaendosc;
    public $cwindspeed;
    public $sracoeff;
    public $iosradtn;
    public $ecoeffirtbb;
    public $ymoelas;
//End DataSource Variables

//DataSourceClass_Initialize Event @8-255B48BE
    function clsconductorsizingcalculatioDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record conductorsizingcalculatio/Error";
        $this->Initialize();
        $this->projectid = new clsField("projectid", ccsInteger, "");
        
        $this->rvikvrms = new clsField("rvikvrms", ccsInteger, "");
        
        $this->scxrratio = new clsField("scxrratio", ccsInteger, "");
        
        $this->issccurrt = new clsField("issccurrt", ccsInteger, "");
        
        $this->ssssscurrt = new clsField("ssssscurrt", ccsInteger, "");
        
        $this->dosccurrt = new clsField("dosccurrt", ccsInteger, "");
        
        $this->dorsccurrt = new clsField("dorsccurrt", ccsInteger, "");
        
        $this->sysfreq = new clsField("sysfreq", ccsInteger, "");
        
        $this->rccratg = new clsField("rccratg", ccsInteger, "");
        
        $this->noppwires = new clsField("noppwires", ccsInteger, "");
        
        $this->spanlgth = new clsField("spanlgth", ccsInteger, "");
        
        $this->hocondctr = new clsField("hocondctr", ccsSingle, "");
        
        $this->ipspacg = new clsField("ipspacg", ccsSingle, "");
        
        $this->acsvgradt = new clsField("acsvgradt", ccsInteger, "");
        
        $this->make = new clsField("make", ccsText, "");
        
        $this->coorigin = new clsField("coorigin", ccsText, "");
        
        $this->toalloy = new clsField("toalloy", ccsText, "");
        
        $this->ccname = new clsField("ccname", ccsText, "");
        
        $this->edcrocond = new clsField("edcrocond", ccsSingle, "");
        
        $this->shocmatrl = new clsField("shocmatrl", ccsInteger, "");
        
        $this->docondmatrl = new clsField("docondmatrl", ccsInteger, "");
        
        $this->comatrl = new clsField("comatrl", ccsSingle, "");
        
        $this->tcorestnce = new clsField("tcorestnce", ccsSingle, "");
        
        $this->ccsectn = new clsField("ccsectn", ccsInteger, "");
        
        $this->overalldiam = new clsField("overalldiam", ccsSingle, "");
        
        $this->dbscctrs = new clsField("dbscctrs", ccsInteger, "");
        
        $this->mpulength = new clsField("mpulength", ccsSingle, "");
        
        $this->ambtemp = new clsField("ambtemp", ccsInteger, "");
        
        $this->fctemp = new clsField("fctemp", ccsInteger, "");
        
        $this->ctabeginosc = new clsField("ctabeginosc", ccsInteger, "");
        
        $this->ctaendosc = new clsField("ctaendosc", ccsInteger, "");
        
        $this->cwindspeed = new clsField("cwindspeed", ccsSingle, "");
        
        $this->sracoeff = new clsField("sracoeff", ccsSingle, "");
        
        $this->iosradtn = new clsField("iosradtn", ccsInteger, "");
        
        $this->ecoeffirtbb = new clsField("ecoeffirtbb", ccsSingle, "");
        
        $this->ymoelas = new clsField("ymoelas", ccsFloat, "");
        

        $this->InsertFields["projectid"] = array("Name" => "projectid", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["rvikvrms"] = array("Name" => "rvikvrms", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["scxrratio"] = array("Name" => "scxrratio", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["issccurrt"] = array("Name" => "issccurrt", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["ssssscurrt"] = array("Name" => "ssssscurrt", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["dosccurrt"] = array("Name" => "dosccurrt", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["dorsccurrt"] = array("Name" => "dorsccurrt", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["sysfreq"] = array("Name" => "sysfreq", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["rccratg"] = array("Name" => "rccratg", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["noppwires"] = array("Name" => "noppwires", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["spanlgth"] = array("Name" => "spanlgth", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["hocondctr"] = array("Name" => "hocondctr", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["ipspacg"] = array("Name" => "ipspacg", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["acsvgradt"] = array("Name" => "acsvgradt", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["make"] = array("Name" => "make", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["coorigin"] = array("Name" => "coorigin", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["toalloy"] = array("Name" => "toalloy", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["ccname"] = array("Name" => "ccname", "Value" => "", "DataType" => ccsText, "OmitIfEmpty" => 1);
        $this->InsertFields["edcrocond"] = array("Name" => "edcrocond", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["shocmatrl"] = array("Name" => "shocmatrl", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["docondmatrl"] = array("Name" => "docondmatrl", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["comatrl"] = array("Name" => "comatrl", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["tcorestnce"] = array("Name" => "tcorestnce", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["ccsectn"] = array("Name" => "ccsectn", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["overalldiam"] = array("Name" => "overalldiam", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["dbscctrs"] = array("Name" => "dbscctrs", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["mpulength"] = array("Name" => "mpulength", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["ambtemp"] = array("Name" => "ambtemp", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["fctemp"] = array("Name" => "fctemp", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["ctabeginosc"] = array("Name" => "ctabeginosc", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["ctaendosc"] = array("Name" => "ctaendosc", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["cwindspeed"] = array("Name" => "cwindspeed", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["sracoeff"] = array("Name" => "sracoeff", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["iosradtn"] = array("Name" => "iosradtn", "Value" => "", "DataType" => ccsInteger, "OmitIfEmpty" => 1);
        $this->InsertFields["ecoeffirtbb"] = array("Name" => "ecoeffirtbb", "Value" => "", "DataType" => ccsSingle, "OmitIfEmpty" => 1);
        $this->InsertFields["ymoelas"] = array("Name" => "ymoelas", "Value" => "", "DataType" => ccsFloat, "OmitIfEmpty" => 1);
    }
//End DataSourceClass_Initialize Event

//Prepare Method @8-F755E9A7
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

//Open Method @8-79BC6B30
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM conductorsizingcalculations {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @8-0BB22A35
    function SetValues()
    {
        $this->projectid->SetDBValue(trim($this->f("projectid")));
        $this->rvikvrms->SetDBValue(trim($this->f("rvikvrms")));
        $this->scxrratio->SetDBValue(trim($this->f("scxrratio")));
        $this->issccurrt->SetDBValue(trim($this->f("issccurrt")));
        $this->ssssscurrt->SetDBValue(trim($this->f("ssssscurrt")));
        $this->dosccurrt->SetDBValue(trim($this->f("dosccurrt")));
        $this->dorsccurrt->SetDBValue(trim($this->f("dorsccurrt")));
        $this->sysfreq->SetDBValue(trim($this->f("sysfreq")));
        $this->rccratg->SetDBValue(trim($this->f("rccratg")));
        $this->noppwires->SetDBValue(trim($this->f("noppwires")));
        $this->spanlgth->SetDBValue(trim($this->f("spanlgth")));
        $this->hocondctr->SetDBValue(trim($this->f("hocondctr")));
        $this->ipspacg->SetDBValue(trim($this->f("ipspacg")));
        $this->acsvgradt->SetDBValue(trim($this->f("acsvgradt")));
        $this->make->SetDBValue($this->f("make"));
        $this->coorigin->SetDBValue($this->f("coorigin"));
        $this->toalloy->SetDBValue($this->f("toalloy"));
        $this->ccname->SetDBValue($this->f("ccname"));
        $this->edcrocond->SetDBValue(trim($this->f("edcrocond")));
        $this->shocmatrl->SetDBValue(trim($this->f("shocmatrl")));
        $this->docondmatrl->SetDBValue(trim($this->f("docondmatrl")));
        $this->comatrl->SetDBValue(trim($this->f("comatrl")));
        $this->tcorestnce->SetDBValue(trim($this->f("tcorestnce")));
        $this->ccsectn->SetDBValue(trim($this->f("ccsectn")));
        $this->overalldiam->SetDBValue(trim($this->f("overalldiam")));
        $this->dbscctrs->SetDBValue(trim($this->f("dbscctrs")));
        $this->mpulength->SetDBValue(trim($this->f("mpulength")));
        $this->ambtemp->SetDBValue(trim($this->f("ambtemp")));
        $this->fctemp->SetDBValue(trim($this->f("fctemp")));
        $this->ctabeginosc->SetDBValue(trim($this->f("ctabeginosc")));
        $this->ctaendosc->SetDBValue(trim($this->f("ctaendosc")));
        $this->cwindspeed->SetDBValue(trim($this->f("cwindspeed")));
        $this->sracoeff->SetDBValue(trim($this->f("sracoeff")));
        $this->iosradtn->SetDBValue(trim($this->f("iosradtn")));
        $this->ecoeffirtbb->SetDBValue(trim($this->f("ecoeffirtbb")));
        $this->ymoelas->SetDBValue(trim($this->f("ymoelas")));
    }
//End SetValues Method

//Insert Method @8-B64980BB
    function Insert()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->CmdExecution = true;
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildInsert", $this->Parent);
        $this->InsertFields["projectid"]["Value"] = $this->projectid->GetDBValue(true);
        $this->InsertFields["rvikvrms"]["Value"] = $this->rvikvrms->GetDBValue(true);
        $this->InsertFields["scxrratio"]["Value"] = $this->scxrratio->GetDBValue(true);
        $this->InsertFields["issccurrt"]["Value"] = $this->issccurrt->GetDBValue(true);
        $this->InsertFields["ssssscurrt"]["Value"] = $this->ssssscurrt->GetDBValue(true);
        $this->InsertFields["dosccurrt"]["Value"] = $this->dosccurrt->GetDBValue(true);
        $this->InsertFields["dorsccurrt"]["Value"] = $this->dorsccurrt->GetDBValue(true);
        $this->InsertFields["sysfreq"]["Value"] = $this->sysfreq->GetDBValue(true);
        $this->InsertFields["rccratg"]["Value"] = $this->rccratg->GetDBValue(true);
        $this->InsertFields["noppwires"]["Value"] = $this->noppwires->GetDBValue(true);
        $this->InsertFields["spanlgth"]["Value"] = $this->spanlgth->GetDBValue(true);
        $this->InsertFields["hocondctr"]["Value"] = $this->hocondctr->GetDBValue(true);
        $this->InsertFields["ipspacg"]["Value"] = $this->ipspacg->GetDBValue(true);
        $this->InsertFields["acsvgradt"]["Value"] = $this->acsvgradt->GetDBValue(true);
        $this->InsertFields["make"]["Value"] = $this->make->GetDBValue(true);
        $this->InsertFields["coorigin"]["Value"] = $this->coorigin->GetDBValue(true);
        $this->InsertFields["toalloy"]["Value"] = $this->toalloy->GetDBValue(true);
        $this->InsertFields["ccname"]["Value"] = $this->ccname->GetDBValue(true);
        $this->InsertFields["edcrocond"]["Value"] = $this->edcrocond->GetDBValue(true);
        $this->InsertFields["shocmatrl"]["Value"] = $this->shocmatrl->GetDBValue(true);
        $this->InsertFields["docondmatrl"]["Value"] = $this->docondmatrl->GetDBValue(true);
        $this->InsertFields["comatrl"]["Value"] = $this->comatrl->GetDBValue(true);
        $this->InsertFields["tcorestnce"]["Value"] = $this->tcorestnce->GetDBValue(true);
        $this->InsertFields["ccsectn"]["Value"] = $this->ccsectn->GetDBValue(true);
        $this->InsertFields["overalldiam"]["Value"] = $this->overalldiam->GetDBValue(true);
        $this->InsertFields["dbscctrs"]["Value"] = $this->dbscctrs->GetDBValue(true);
        $this->InsertFields["mpulength"]["Value"] = $this->mpulength->GetDBValue(true);
        $this->InsertFields["ambtemp"]["Value"] = $this->ambtemp->GetDBValue(true);
        $this->InsertFields["fctemp"]["Value"] = $this->fctemp->GetDBValue(true);
        $this->InsertFields["ctabeginosc"]["Value"] = $this->ctabeginosc->GetDBValue(true);
        $this->InsertFields["ctaendosc"]["Value"] = $this->ctaendosc->GetDBValue(true);
        $this->InsertFields["cwindspeed"]["Value"] = $this->cwindspeed->GetDBValue(true);
        $this->InsertFields["sracoeff"]["Value"] = $this->sracoeff->GetDBValue(true);
        $this->InsertFields["iosradtn"]["Value"] = $this->iosradtn->GetDBValue(true);
        $this->InsertFields["ecoeffirtbb"]["Value"] = $this->ecoeffirtbb->GetDBValue(true);
        $this->InsertFields["ymoelas"]["Value"] = $this->ymoelas->GetDBValue(true);
        $this->SQL = CCBuildInsert("conductorsizingcalculations", $this->InsertFields, $this);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteInsert", $this->Parent);
        if($this->Errors->Count() == 0 && $this->CmdExecution) {
            $this->query($this->SQL);
            $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteInsert", $this->Parent);
        }
    }
//End Insert Method

} //End conductorsizingcalculatioDataSource Class @8-FCB6E20C

//Include Page implementation @7-C10B939B
include_once(RelativePath . "/includables/menuincludablepage.php");
//End Include Page implementation

//Include Page implementation @6-59AEC4EA
include_once(RelativePath . "/includables/headerincludablepage.php");
//End Include Page implementation

//Initialize Page @1-DD996D03
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
$TemplateFileName = "csc.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|";
$Charset = $Charset ? $Charset : "utf-8";
//End Initialize Page

//Include events file @1-6F6668D9
include_once("./csc_events.php");
//End Include events file

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-5EDBFACB
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
$conductorsizingcalculatio = new clsRecordconductorsizingcalculatio("", $MainPage);
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
$MainPage->conductorsizingcalculatio = & $conductorsizingcalculatio;
$MainPage->Menu = & $Menu;
$MainPage->menuincludablepage = & $menuincludablepage;
$MainPage->HeaderSidebar = & $HeaderSidebar;
$MainPage->headerincludablepage = & $headerincludablepage;
$Content->AddComponent("conductorsizingcalculatio", $conductorsizingcalculatio);
$Menu->AddComponent("menuincludablepage", $menuincludablepage);
$HeaderSidebar->AddComponent("headerincludablepage", $headerincludablepage);
$conductorsizingcalculatio->Initialize();
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

//Execute Components @1-36E9AB8A
$MasterPage->Operations();
$headerincludablepage->Operations();
$menuincludablepage->Operations();
$conductorsizingcalculatio->Operation();
//End Execute Components

//Go to destination page @1-EA5C8FB9
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBlocalhost->close();
    header("Location: " . $Redirect);
    unset($conductorsizingcalculatio);
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

//Unload Page @1-4B63F702
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBlocalhost->close();
unset($MasterPage);
unset($conductorsizingcalculatio);
$menuincludablepage->Class_Terminate();
unset($menuincludablepage);
$headerincludablepage->Class_Terminate();
unset($headerincludablepage);
unset($Tpl);
//End Unload Page


?>
