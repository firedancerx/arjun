<?php
//Include Common Files @1-72D10803
define("RelativePath", "..");
define("PathToCurrentPage", "/projectsreport/");
define("FileName", "CSCReport.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

//Master Page implementation @1-90CEED50
include_once(RelativePath . "/Designs/Pestech/MasterPage.php");
//End Master Page implementation

//conductorsizingcalculatio ReportGroup class @8-953C4B43
class clsReportGroupconductorsizingcalculatio {
    public $GroupType;
    public $mode; //1 - open, 2 - close
    public $projectid, $_projectidAttributes;
    public $rvikvrms, $_rvikvrmsAttributes;
    public $scxrratio, $_scxrratioAttributes;
    public $issccurrt, $_issccurrtAttributes;
    public $ssssscurrt, $_ssssscurrtAttributes;
    public $dosccurrt, $_dosccurrtAttributes;
    public $dorsccurrt, $_dorsccurrtAttributes;
    public $sysfreq, $_sysfreqAttributes;
    public $rccratg, $_rccratgAttributes;
    public $noppwires, $_noppwiresAttributes;
    public $spanlgth, $_spanlgthAttributes;
    public $hocondctr, $_hocondctrAttributes;
    public $ipspacg, $_ipspacgAttributes;
    public $acsvgradt, $_acsvgradtAttributes;
    public $make, $_makeAttributes;
    public $coorigin, $_cooriginAttributes;
    public $toalloy, $_toalloyAttributes;
    public $ccname, $_ccnameAttributes;
    public $edcrocond, $_edcrocondAttributes;
    public $shocmatrl, $_shocmatrlAttributes;
    public $docondmatrl, $_docondmatrlAttributes;
    public $comatrl, $_comatrlAttributes;
    public $tcorestnce, $_tcorestnceAttributes;
    public $ccsectn, $_ccsectnAttributes;
    public $overalldiam, $_overalldiamAttributes;
    public $dbscctrs, $_dbscctrsAttributes;
    public $mpulength, $_mpulengthAttributes;
    public $ambtemp, $_ambtempAttributes;
    public $fctemp, $_fctempAttributes;
    public $ctabeginosc, $_ctabeginoscAttributes;
    public $ctaendosc, $_ctaendoscAttributes;
    public $cwindspeed, $_cwindspeedAttributes;
    public $sracoeff, $_sracoeffAttributes;
    public $iosradtn, $_iosradtnAttributes;
    public $ecoeffirtbb, $_ecoeffirtbbAttributes;
    public $ymoelas, $_ymoelasAttributes;
    public $Report_CurrentDate, $_Report_CurrentDateAttributes;
    public $Report_CurrentPage, $_Report_CurrentPageAttributes;
    public $Report_TotalPages, $_Report_TotalPagesAttributes;
    public $Attributes;
    public $ReportTotalIndex = 0;
    public $PageTotalIndex;
    public $PageNumber;
    public $RowNumber;
    public $Parent;

    function clsReportGroupconductorsizingcalculatio(& $parent) {
        $this->Parent = & $parent;
        $this->Attributes = $this->Parent->Attributes->GetAsArray();
    }
    function SetControls($PrevGroup = "") {
        $this->projectid = $this->Parent->projectid->Value;
        $this->rvikvrms = $this->Parent->rvikvrms->Value;
        $this->scxrratio = $this->Parent->scxrratio->Value;
        $this->issccurrt = $this->Parent->issccurrt->Value;
        $this->ssssscurrt = $this->Parent->ssssscurrt->Value;
        $this->dosccurrt = $this->Parent->dosccurrt->Value;
        $this->dorsccurrt = $this->Parent->dorsccurrt->Value;
        $this->sysfreq = $this->Parent->sysfreq->Value;
        $this->rccratg = $this->Parent->rccratg->Value;
        $this->noppwires = $this->Parent->noppwires->Value;
        $this->spanlgth = $this->Parent->spanlgth->Value;
        $this->hocondctr = $this->Parent->hocondctr->Value;
        $this->ipspacg = $this->Parent->ipspacg->Value;
        $this->acsvgradt = $this->Parent->acsvgradt->Value;
        $this->make = $this->Parent->make->Value;
        $this->coorigin = $this->Parent->coorigin->Value;
        $this->toalloy = $this->Parent->toalloy->Value;
        $this->ccname = $this->Parent->ccname->Value;
        $this->edcrocond = $this->Parent->edcrocond->Value;
        $this->shocmatrl = $this->Parent->shocmatrl->Value;
        $this->docondmatrl = $this->Parent->docondmatrl->Value;
        $this->comatrl = $this->Parent->comatrl->Value;
        $this->tcorestnce = $this->Parent->tcorestnce->Value;
        $this->ccsectn = $this->Parent->ccsectn->Value;
        $this->overalldiam = $this->Parent->overalldiam->Value;
        $this->dbscctrs = $this->Parent->dbscctrs->Value;
        $this->mpulength = $this->Parent->mpulength->Value;
        $this->ambtemp = $this->Parent->ambtemp->Value;
        $this->fctemp = $this->Parent->fctemp->Value;
        $this->ctabeginosc = $this->Parent->ctabeginosc->Value;
        $this->ctaendosc = $this->Parent->ctaendosc->Value;
        $this->cwindspeed = $this->Parent->cwindspeed->Value;
        $this->sracoeff = $this->Parent->sracoeff->Value;
        $this->iosradtn = $this->Parent->iosradtn->Value;
        $this->ecoeffirtbb = $this->Parent->ecoeffirtbb->Value;
        $this->ymoelas = $this->Parent->ymoelas->Value;
    }

    function SetTotalControls($mode = "", $PrevGroup = "") {
        $this->_projectidAttributes = $this->Parent->projectid->Attributes->GetAsArray();
        $this->_rvikvrmsAttributes = $this->Parent->rvikvrms->Attributes->GetAsArray();
        $this->_scxrratioAttributes = $this->Parent->scxrratio->Attributes->GetAsArray();
        $this->_issccurrtAttributes = $this->Parent->issccurrt->Attributes->GetAsArray();
        $this->_ssssscurrtAttributes = $this->Parent->ssssscurrt->Attributes->GetAsArray();
        $this->_dosccurrtAttributes = $this->Parent->dosccurrt->Attributes->GetAsArray();
        $this->_dorsccurrtAttributes = $this->Parent->dorsccurrt->Attributes->GetAsArray();
        $this->_sysfreqAttributes = $this->Parent->sysfreq->Attributes->GetAsArray();
        $this->_rccratgAttributes = $this->Parent->rccratg->Attributes->GetAsArray();
        $this->_noppwiresAttributes = $this->Parent->noppwires->Attributes->GetAsArray();
        $this->_spanlgthAttributes = $this->Parent->spanlgth->Attributes->GetAsArray();
        $this->_hocondctrAttributes = $this->Parent->hocondctr->Attributes->GetAsArray();
        $this->_ipspacgAttributes = $this->Parent->ipspacg->Attributes->GetAsArray();
        $this->_acsvgradtAttributes = $this->Parent->acsvgradt->Attributes->GetAsArray();
        $this->_makeAttributes = $this->Parent->make->Attributes->GetAsArray();
        $this->_cooriginAttributes = $this->Parent->coorigin->Attributes->GetAsArray();
        $this->_toalloyAttributes = $this->Parent->toalloy->Attributes->GetAsArray();
        $this->_ccnameAttributes = $this->Parent->ccname->Attributes->GetAsArray();
        $this->_edcrocondAttributes = $this->Parent->edcrocond->Attributes->GetAsArray();
        $this->_shocmatrlAttributes = $this->Parent->shocmatrl->Attributes->GetAsArray();
        $this->_docondmatrlAttributes = $this->Parent->docondmatrl->Attributes->GetAsArray();
        $this->_comatrlAttributes = $this->Parent->comatrl->Attributes->GetAsArray();
        $this->_tcorestnceAttributes = $this->Parent->tcorestnce->Attributes->GetAsArray();
        $this->_ccsectnAttributes = $this->Parent->ccsectn->Attributes->GetAsArray();
        $this->_overalldiamAttributes = $this->Parent->overalldiam->Attributes->GetAsArray();
        $this->_dbscctrsAttributes = $this->Parent->dbscctrs->Attributes->GetAsArray();
        $this->_mpulengthAttributes = $this->Parent->mpulength->Attributes->GetAsArray();
        $this->_ambtempAttributes = $this->Parent->ambtemp->Attributes->GetAsArray();
        $this->_fctempAttributes = $this->Parent->fctemp->Attributes->GetAsArray();
        $this->_ctabeginoscAttributes = $this->Parent->ctabeginosc->Attributes->GetAsArray();
        $this->_ctaendoscAttributes = $this->Parent->ctaendosc->Attributes->GetAsArray();
        $this->_cwindspeedAttributes = $this->Parent->cwindspeed->Attributes->GetAsArray();
        $this->_sracoeffAttributes = $this->Parent->sracoeff->Attributes->GetAsArray();
        $this->_iosradtnAttributes = $this->Parent->iosradtn->Attributes->GetAsArray();
        $this->_ecoeffirtbbAttributes = $this->Parent->ecoeffirtbb->Attributes->GetAsArray();
        $this->_ymoelasAttributes = $this->Parent->ymoelas->Attributes->GetAsArray();
        $this->_Report_CurrentDateAttributes = $this->Parent->Report_CurrentDate->Attributes->GetAsArray();
        $this->_Report_CurrentPageAttributes = $this->Parent->Report_CurrentPage->Attributes->GetAsArray();
        $this->_Report_TotalPagesAttributes = $this->Parent->Report_TotalPages->Attributes->GetAsArray();
        $this->_NavigatorAttributes = $this->Parent->Navigator->Attributes->GetAsArray();
    }
    function SyncWithHeader(& $Header) {
        $this->projectid = $Header->projectid;
        $Header->_projectidAttributes = $this->_projectidAttributes;
        $this->Parent->projectid->Value = $Header->projectid;
        $this->Parent->projectid->Attributes->RestoreFromArray($Header->_projectidAttributes);
        $this->rvikvrms = $Header->rvikvrms;
        $Header->_rvikvrmsAttributes = $this->_rvikvrmsAttributes;
        $this->Parent->rvikvrms->Value = $Header->rvikvrms;
        $this->Parent->rvikvrms->Attributes->RestoreFromArray($Header->_rvikvrmsAttributes);
        $this->scxrratio = $Header->scxrratio;
        $Header->_scxrratioAttributes = $this->_scxrratioAttributes;
        $this->Parent->scxrratio->Value = $Header->scxrratio;
        $this->Parent->scxrratio->Attributes->RestoreFromArray($Header->_scxrratioAttributes);
        $this->issccurrt = $Header->issccurrt;
        $Header->_issccurrtAttributes = $this->_issccurrtAttributes;
        $this->Parent->issccurrt->Value = $Header->issccurrt;
        $this->Parent->issccurrt->Attributes->RestoreFromArray($Header->_issccurrtAttributes);
        $this->ssssscurrt = $Header->ssssscurrt;
        $Header->_ssssscurrtAttributes = $this->_ssssscurrtAttributes;
        $this->Parent->ssssscurrt->Value = $Header->ssssscurrt;
        $this->Parent->ssssscurrt->Attributes->RestoreFromArray($Header->_ssssscurrtAttributes);
        $this->dosccurrt = $Header->dosccurrt;
        $Header->_dosccurrtAttributes = $this->_dosccurrtAttributes;
        $this->Parent->dosccurrt->Value = $Header->dosccurrt;
        $this->Parent->dosccurrt->Attributes->RestoreFromArray($Header->_dosccurrtAttributes);
        $this->dorsccurrt = $Header->dorsccurrt;
        $Header->_dorsccurrtAttributes = $this->_dorsccurrtAttributes;
        $this->Parent->dorsccurrt->Value = $Header->dorsccurrt;
        $this->Parent->dorsccurrt->Attributes->RestoreFromArray($Header->_dorsccurrtAttributes);
        $this->sysfreq = $Header->sysfreq;
        $Header->_sysfreqAttributes = $this->_sysfreqAttributes;
        $this->Parent->sysfreq->Value = $Header->sysfreq;
        $this->Parent->sysfreq->Attributes->RestoreFromArray($Header->_sysfreqAttributes);
        $this->rccratg = $Header->rccratg;
        $Header->_rccratgAttributes = $this->_rccratgAttributes;
        $this->Parent->rccratg->Value = $Header->rccratg;
        $this->Parent->rccratg->Attributes->RestoreFromArray($Header->_rccratgAttributes);
        $this->noppwires = $Header->noppwires;
        $Header->_noppwiresAttributes = $this->_noppwiresAttributes;
        $this->Parent->noppwires->Value = $Header->noppwires;
        $this->Parent->noppwires->Attributes->RestoreFromArray($Header->_noppwiresAttributes);
        $this->spanlgth = $Header->spanlgth;
        $Header->_spanlgthAttributes = $this->_spanlgthAttributes;
        $this->Parent->spanlgth->Value = $Header->spanlgth;
        $this->Parent->spanlgth->Attributes->RestoreFromArray($Header->_spanlgthAttributes);
        $this->hocondctr = $Header->hocondctr;
        $Header->_hocondctrAttributes = $this->_hocondctrAttributes;
        $this->Parent->hocondctr->Value = $Header->hocondctr;
        $this->Parent->hocondctr->Attributes->RestoreFromArray($Header->_hocondctrAttributes);
        $this->ipspacg = $Header->ipspacg;
        $Header->_ipspacgAttributes = $this->_ipspacgAttributes;
        $this->Parent->ipspacg->Value = $Header->ipspacg;
        $this->Parent->ipspacg->Attributes->RestoreFromArray($Header->_ipspacgAttributes);
        $this->acsvgradt = $Header->acsvgradt;
        $Header->_acsvgradtAttributes = $this->_acsvgradtAttributes;
        $this->Parent->acsvgradt->Value = $Header->acsvgradt;
        $this->Parent->acsvgradt->Attributes->RestoreFromArray($Header->_acsvgradtAttributes);
        $this->make = $Header->make;
        $Header->_makeAttributes = $this->_makeAttributes;
        $this->Parent->make->Value = $Header->make;
        $this->Parent->make->Attributes->RestoreFromArray($Header->_makeAttributes);
        $this->coorigin = $Header->coorigin;
        $Header->_cooriginAttributes = $this->_cooriginAttributes;
        $this->Parent->coorigin->Value = $Header->coorigin;
        $this->Parent->coorigin->Attributes->RestoreFromArray($Header->_cooriginAttributes);
        $this->toalloy = $Header->toalloy;
        $Header->_toalloyAttributes = $this->_toalloyAttributes;
        $this->Parent->toalloy->Value = $Header->toalloy;
        $this->Parent->toalloy->Attributes->RestoreFromArray($Header->_toalloyAttributes);
        $this->ccname = $Header->ccname;
        $Header->_ccnameAttributes = $this->_ccnameAttributes;
        $this->Parent->ccname->Value = $Header->ccname;
        $this->Parent->ccname->Attributes->RestoreFromArray($Header->_ccnameAttributes);
        $this->edcrocond = $Header->edcrocond;
        $Header->_edcrocondAttributes = $this->_edcrocondAttributes;
        $this->Parent->edcrocond->Value = $Header->edcrocond;
        $this->Parent->edcrocond->Attributes->RestoreFromArray($Header->_edcrocondAttributes);
        $this->shocmatrl = $Header->shocmatrl;
        $Header->_shocmatrlAttributes = $this->_shocmatrlAttributes;
        $this->Parent->shocmatrl->Value = $Header->shocmatrl;
        $this->Parent->shocmatrl->Attributes->RestoreFromArray($Header->_shocmatrlAttributes);
        $this->docondmatrl = $Header->docondmatrl;
        $Header->_docondmatrlAttributes = $this->_docondmatrlAttributes;
        $this->Parent->docondmatrl->Value = $Header->docondmatrl;
        $this->Parent->docondmatrl->Attributes->RestoreFromArray($Header->_docondmatrlAttributes);
        $this->comatrl = $Header->comatrl;
        $Header->_comatrlAttributes = $this->_comatrlAttributes;
        $this->Parent->comatrl->Value = $Header->comatrl;
        $this->Parent->comatrl->Attributes->RestoreFromArray($Header->_comatrlAttributes);
        $this->tcorestnce = $Header->tcorestnce;
        $Header->_tcorestnceAttributes = $this->_tcorestnceAttributes;
        $this->Parent->tcorestnce->Value = $Header->tcorestnce;
        $this->Parent->tcorestnce->Attributes->RestoreFromArray($Header->_tcorestnceAttributes);
        $this->ccsectn = $Header->ccsectn;
        $Header->_ccsectnAttributes = $this->_ccsectnAttributes;
        $this->Parent->ccsectn->Value = $Header->ccsectn;
        $this->Parent->ccsectn->Attributes->RestoreFromArray($Header->_ccsectnAttributes);
        $this->overalldiam = $Header->overalldiam;
        $Header->_overalldiamAttributes = $this->_overalldiamAttributes;
        $this->Parent->overalldiam->Value = $Header->overalldiam;
        $this->Parent->overalldiam->Attributes->RestoreFromArray($Header->_overalldiamAttributes);
        $this->dbscctrs = $Header->dbscctrs;
        $Header->_dbscctrsAttributes = $this->_dbscctrsAttributes;
        $this->Parent->dbscctrs->Value = $Header->dbscctrs;
        $this->Parent->dbscctrs->Attributes->RestoreFromArray($Header->_dbscctrsAttributes);
        $this->mpulength = $Header->mpulength;
        $Header->_mpulengthAttributes = $this->_mpulengthAttributes;
        $this->Parent->mpulength->Value = $Header->mpulength;
        $this->Parent->mpulength->Attributes->RestoreFromArray($Header->_mpulengthAttributes);
        $this->ambtemp = $Header->ambtemp;
        $Header->_ambtempAttributes = $this->_ambtempAttributes;
        $this->Parent->ambtemp->Value = $Header->ambtemp;
        $this->Parent->ambtemp->Attributes->RestoreFromArray($Header->_ambtempAttributes);
        $this->fctemp = $Header->fctemp;
        $Header->_fctempAttributes = $this->_fctempAttributes;
        $this->Parent->fctemp->Value = $Header->fctemp;
        $this->Parent->fctemp->Attributes->RestoreFromArray($Header->_fctempAttributes);
        $this->ctabeginosc = $Header->ctabeginosc;
        $Header->_ctabeginoscAttributes = $this->_ctabeginoscAttributes;
        $this->Parent->ctabeginosc->Value = $Header->ctabeginosc;
        $this->Parent->ctabeginosc->Attributes->RestoreFromArray($Header->_ctabeginoscAttributes);
        $this->ctaendosc = $Header->ctaendosc;
        $Header->_ctaendoscAttributes = $this->_ctaendoscAttributes;
        $this->Parent->ctaendosc->Value = $Header->ctaendosc;
        $this->Parent->ctaendosc->Attributes->RestoreFromArray($Header->_ctaendoscAttributes);
        $this->cwindspeed = $Header->cwindspeed;
        $Header->_cwindspeedAttributes = $this->_cwindspeedAttributes;
        $this->Parent->cwindspeed->Value = $Header->cwindspeed;
        $this->Parent->cwindspeed->Attributes->RestoreFromArray($Header->_cwindspeedAttributes);
        $this->sracoeff = $Header->sracoeff;
        $Header->_sracoeffAttributes = $this->_sracoeffAttributes;
        $this->Parent->sracoeff->Value = $Header->sracoeff;
        $this->Parent->sracoeff->Attributes->RestoreFromArray($Header->_sracoeffAttributes);
        $this->iosradtn = $Header->iosradtn;
        $Header->_iosradtnAttributes = $this->_iosradtnAttributes;
        $this->Parent->iosradtn->Value = $Header->iosradtn;
        $this->Parent->iosradtn->Attributes->RestoreFromArray($Header->_iosradtnAttributes);
        $this->ecoeffirtbb = $Header->ecoeffirtbb;
        $Header->_ecoeffirtbbAttributes = $this->_ecoeffirtbbAttributes;
        $this->Parent->ecoeffirtbb->Value = $Header->ecoeffirtbb;
        $this->Parent->ecoeffirtbb->Attributes->RestoreFromArray($Header->_ecoeffirtbbAttributes);
        $this->ymoelas = $Header->ymoelas;
        $Header->_ymoelasAttributes = $this->_ymoelasAttributes;
        $this->Parent->ymoelas->Value = $Header->ymoelas;
        $this->Parent->ymoelas->Attributes->RestoreFromArray($Header->_ymoelasAttributes);
    }
    function ChangeTotalControls() {
    }
}
//End conductorsizingcalculatio ReportGroup class

//conductorsizingcalculatio GroupsCollection class @8-AD569C37
class clsGroupsCollectionconductorsizingcalculatio {
    public $Groups;
    public $mPageCurrentHeaderIndex;
    public $PageSize;
    public $TotalPages = 0;
    public $TotalRows = 0;
    public $CurrentPageSize = 0;
    public $Pages;
    public $Parent;
    public $LastDetailIndex;

    function clsGroupsCollectionconductorsizingcalculatio(& $parent) {
        $this->Parent = & $parent;
        $this->Groups = array();
        $this->Pages  = array();
        $this->mReportTotalIndex = 0;
        $this->mPageTotalIndex = 1;
    }

    function & InitGroup() {
        $group = new clsReportGroupconductorsizingcalculatio($this->Parent);
        $group->RowNumber = $this->TotalRows + 1;
        $group->PageNumber = $this->TotalPages;
        $group->PageTotalIndex = $this->mPageCurrentHeaderIndex;
        return $group;
    }

    function RestoreValues() {
        $this->Parent->projectid->Value = $this->Parent->projectid->initialValue;
        $this->Parent->rvikvrms->Value = $this->Parent->rvikvrms->initialValue;
        $this->Parent->scxrratio->Value = $this->Parent->scxrratio->initialValue;
        $this->Parent->issccurrt->Value = $this->Parent->issccurrt->initialValue;
        $this->Parent->ssssscurrt->Value = $this->Parent->ssssscurrt->initialValue;
        $this->Parent->dosccurrt->Value = $this->Parent->dosccurrt->initialValue;
        $this->Parent->dorsccurrt->Value = $this->Parent->dorsccurrt->initialValue;
        $this->Parent->sysfreq->Value = $this->Parent->sysfreq->initialValue;
        $this->Parent->rccratg->Value = $this->Parent->rccratg->initialValue;
        $this->Parent->noppwires->Value = $this->Parent->noppwires->initialValue;
        $this->Parent->spanlgth->Value = $this->Parent->spanlgth->initialValue;
        $this->Parent->hocondctr->Value = $this->Parent->hocondctr->initialValue;
        $this->Parent->ipspacg->Value = $this->Parent->ipspacg->initialValue;
        $this->Parent->acsvgradt->Value = $this->Parent->acsvgradt->initialValue;
        $this->Parent->make->Value = $this->Parent->make->initialValue;
        $this->Parent->coorigin->Value = $this->Parent->coorigin->initialValue;
        $this->Parent->toalloy->Value = $this->Parent->toalloy->initialValue;
        $this->Parent->ccname->Value = $this->Parent->ccname->initialValue;
        $this->Parent->edcrocond->Value = $this->Parent->edcrocond->initialValue;
        $this->Parent->shocmatrl->Value = $this->Parent->shocmatrl->initialValue;
        $this->Parent->docondmatrl->Value = $this->Parent->docondmatrl->initialValue;
        $this->Parent->comatrl->Value = $this->Parent->comatrl->initialValue;
        $this->Parent->tcorestnce->Value = $this->Parent->tcorestnce->initialValue;
        $this->Parent->ccsectn->Value = $this->Parent->ccsectn->initialValue;
        $this->Parent->overalldiam->Value = $this->Parent->overalldiam->initialValue;
        $this->Parent->dbscctrs->Value = $this->Parent->dbscctrs->initialValue;
        $this->Parent->mpulength->Value = $this->Parent->mpulength->initialValue;
        $this->Parent->ambtemp->Value = $this->Parent->ambtemp->initialValue;
        $this->Parent->fctemp->Value = $this->Parent->fctemp->initialValue;
        $this->Parent->ctabeginosc->Value = $this->Parent->ctabeginosc->initialValue;
        $this->Parent->ctaendosc->Value = $this->Parent->ctaendosc->initialValue;
        $this->Parent->cwindspeed->Value = $this->Parent->cwindspeed->initialValue;
        $this->Parent->sracoeff->Value = $this->Parent->sracoeff->initialValue;
        $this->Parent->iosradtn->Value = $this->Parent->iosradtn->initialValue;
        $this->Parent->ecoeffirtbb->Value = $this->Parent->ecoeffirtbb->initialValue;
        $this->Parent->ymoelas->Value = $this->Parent->ymoelas->initialValue;
    }

    function OpenPage() {
        $this->TotalPages++;
        $Group = & $this->InitGroup();
        $this->Parent->Page_Header->CCSEventResult = CCGetEvent($this->Parent->Page_Header->CCSEvents, "OnInitialize", $this->Parent->Page_Header);
        if ($this->Parent->Page_Header->Visible)
            $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Page_Header->Height;
        $Group->SetTotalControls("GetNextValue");
        $this->Parent->Page_Header->CCSEventResult = CCGetEvent($this->Parent->Page_Header->CCSEvents, "OnCalculate", $this->Parent->Page_Header);
        $Group->SetControls();
        $Group->Mode = 1;
        $Group->GroupType = "Page";
        $Group->PageTotalIndex = count($this->Groups);
        $this->mPageCurrentHeaderIndex = count($this->Groups);
        $this->Groups[] =  & $Group;
        $this->Pages[] =  count($this->Groups) == 2 ? 0 : count($this->Groups) - 1;
    }

    function OpenGroup($groupName) {
        $Group = "";
        $OpenFlag = false;
        if ($groupName == "Report") {
            $Group = & $this->InitGroup(true);
            $this->Parent->Report_Header->CCSEventResult = CCGetEvent($this->Parent->Report_Header->CCSEvents, "OnInitialize", $this->Parent->Report_Header);
            if ($this->Parent->Report_Header->Visible) 
                $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Report_Header->Height;
                $Group->SetTotalControls("GetNextValue");
            $this->Parent->Report_Header->CCSEventResult = CCGetEvent($this->Parent->Report_Header->CCSEvents, "OnCalculate", $this->Parent->Report_Header);
            $Group->SetControls();
            $Group->Mode = 1;
            $Group->GroupType = "Report";
            $this->Groups[] = & $Group;
            $this->OpenPage();
        }
    }

    function ClosePage() {
        $Group = & $this->InitGroup();
        $this->Parent->Page_Footer->CCSEventResult = CCGetEvent($this->Parent->Page_Footer->CCSEvents, "OnInitialize", $this->Parent->Page_Footer);
        $Group->SetTotalControls("GetPrevValue");
        $Group->SyncWithHeader($this->Groups[$this->mPageCurrentHeaderIndex]);
        $this->Parent->Page_Footer->CCSEventResult = CCGetEvent($this->Parent->Page_Footer->CCSEvents, "OnCalculate", $this->Parent->Page_Footer);
        $Group->SetControls();
        $this->RestoreValues();
        $this->CurrentPageSize = 0;
        $Group->Mode = 2;
        $Group->GroupType = "Page";
        $this->Groups[] = & $Group;
    }

    function CloseGroup($groupName)
    {
        $Group = "";
        if ($groupName == "Report") {
            $Group = & $this->InitGroup(true);
            $this->Parent->Report_Footer->CCSEventResult = CCGetEvent($this->Parent->Report_Footer->CCSEvents, "OnInitialize", $this->Parent->Report_Footer);
            if ($this->Parent->Page_Footer->Visible) 
                $OverSize = $this->Parent->Report_Footer->Height + $this->Parent->Page_Footer->Height;
            else
                $OverSize = $this->Parent->Report_Footer->Height;
            if (($this->PageSize > 0) and $this->Parent->Report_Footer->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
                $this->ClosePage();
                $this->OpenPage();
            }
            $Group->SetTotalControls("GetPrevValue");
            $Group->SyncWithHeader($this->Groups[0]);
            if ($this->Parent->Report_Footer->Visible)
                $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Report_Footer->Height;
            $this->Parent->Report_Footer->CCSEventResult = CCGetEvent($this->Parent->Report_Footer->CCSEvents, "OnCalculate", $this->Parent->Report_Footer);
            $Group->SetControls();
            $this->RestoreValues();
            $Group->Mode = 2;
            $Group->GroupType = "Report";
            $this->Groups[] = & $Group;
            $this->ClosePage();
            return;
        }
    }

    function AddItem()
    {
        $Group = & $this->InitGroup(true);
        $this->Parent->Detail->CCSEventResult = CCGetEvent($this->Parent->Detail->CCSEvents, "OnInitialize", $this->Parent->Detail);
        if ($this->Parent->Page_Footer->Visible) 
            $OverSize = $this->Parent->Detail->Height + $this->Parent->Page_Footer->Height;
        else
            $OverSize = $this->Parent->Detail->Height;
        if (($this->PageSize > 0) and $this->Parent->Detail->Visible and ($this->CurrentPageSize + $OverSize > $this->PageSize)) {
            $this->ClosePage();
            $this->OpenPage();
        }
        $this->TotalRows++;
        if ($this->LastDetailIndex)
            $PrevGroup = & $this->Groups[$this->LastDetailIndex];
        else
            $PrevGroup = "";
        $Group->SetTotalControls("", $PrevGroup);
        if ($this->Parent->Detail->Visible)
            $this->CurrentPageSize = $this->CurrentPageSize + $this->Parent->Detail->Height;
        $this->Parent->Detail->CCSEventResult = CCGetEvent($this->Parent->Detail->CCSEvents, "OnCalculate", $this->Parent->Detail);
        $Group->SetControls($PrevGroup);
        $this->LastDetailIndex = count($this->Groups);
        $this->Groups[] = & $Group;
    }
}
//End conductorsizingcalculatio GroupsCollection class

class clsReportconductorsizingcalculatio { //conductorsizingcalculatio Class @8-BAD7FAA1

//conductorsizingcalculatio Variables @8-944D286E

    public $ComponentType = "Report";
    public $PageSize;
    public $ComponentName;
    public $Visible;
    public $Errors;
    public $CCSEvents = array();
    public $CCSEventResult;
    public $RelativePath = "";
    public $ViewMode = "Web";
    public $TemplateBlock;
    public $PageNumber;
    public $RowNumber;
    public $TotalRows;
    public $TotalPages;
    public $ControlsVisible = array();
    public $IsEmpty;
    public $Attributes;
    public $DetailBlock, $Detail;
    public $Report_FooterBlock, $Report_Footer;
    public $Report_HeaderBlock, $Report_Header;
    public $Page_FooterBlock, $Page_Footer;
    public $Page_HeaderBlock, $Page_Header;
    public $SorterName, $SorterDirection;

    public $ds;
    public $DataSource;
    public $UseClientPaging = false;

    //Report Controls
    public $StaticControls, $RowControls, $Report_FooterControls, $Report_HeaderControls;
    public $Page_FooterControls, $Page_HeaderControls;
//End conductorsizingcalculatio Variables

//Class_Initialize Event @8-D95653D9
    function clsReportconductorsizingcalculatio($RelativePath = "", & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "conductorsizingcalculatio";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->Detail = new clsSection($this);
        $MinPageSize = 0;
        $MaxSectionSize = 0;
        $this->Detail->Height = 36;
        $MaxSectionSize = max($MaxSectionSize, $this->Detail->Height);
        $this->Report_Footer = new clsSection($this);
        $this->Report_Header = new clsSection($this);
        $this->Page_Footer = new clsSection($this);
        $this->Page_Footer->Height = 1;
        $MinPageSize += $this->Page_Footer->Height;
        $this->Page_Header = new clsSection($this);
        $this->Errors = new clsErrors();
        $this->DataSource = new clsconductorsizingcalculatioDataSource($this);
        $this->ds = & $this->DataSource;
        $PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(is_numeric($PageSize) && $PageSize > 0) {
            $this->PageSize = $PageSize;
        } else {
            if (!is_numeric($PageSize) || $PageSize < 0)
                $this->PageSize = 40;
             else if ($PageSize == "0")
                $this->PageSize = 100;
             else 
                $this->PageSize = min(100, $PageSize);
        }
        $MinPageSize += $MaxSectionSize;
        if ($this->PageSize && $MinPageSize && $this->PageSize < $MinPageSize)
            $this->PageSize = $MinPageSize;
        $this->PageNumber = $this->ViewMode == "Print" ? 1 : intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0 ) {
            $this->PageNumber = 1;
        }

        $this->projectid = new clsControl(ccsReportLabel, "projectid", "projectid", ccsInteger, "", "", $this);
        $this->rvikvrms = new clsControl(ccsReportLabel, "rvikvrms", "rvikvrms", ccsInteger, "", "", $this);
        $this->scxrratio = new clsControl(ccsReportLabel, "scxrratio", "scxrratio", ccsInteger, "", "", $this);
        $this->issccurrt = new clsControl(ccsReportLabel, "issccurrt", "issccurrt", ccsInteger, "", "", $this);
        $this->ssssscurrt = new clsControl(ccsReportLabel, "ssssscurrt", "ssssscurrt", ccsInteger, "", "", $this);
        $this->dosccurrt = new clsControl(ccsReportLabel, "dosccurrt", "dosccurrt", ccsInteger, "", "", $this);
        $this->dorsccurrt = new clsControl(ccsReportLabel, "dorsccurrt", "dorsccurrt", ccsInteger, "", "", $this);
        $this->sysfreq = new clsControl(ccsReportLabel, "sysfreq", "sysfreq", ccsInteger, "", "", $this);
        $this->rccratg = new clsControl(ccsReportLabel, "rccratg", "rccratg", ccsInteger, "", "", $this);
        $this->noppwires = new clsControl(ccsReportLabel, "noppwires", "noppwires", ccsInteger, "", "", $this);
        $this->spanlgth = new clsControl(ccsReportLabel, "spanlgth", "spanlgth", ccsInteger, "", "", $this);
        $this->hocondctr = new clsControl(ccsReportLabel, "hocondctr", "hocondctr", ccsSingle, "", "", $this);
        $this->ipspacg = new clsControl(ccsReportLabel, "ipspacg", "ipspacg", ccsSingle, "", "", $this);
        $this->acsvgradt = new clsControl(ccsReportLabel, "acsvgradt", "acsvgradt", ccsInteger, "", "", $this);
        $this->make = new clsControl(ccsReportLabel, "make", "make", ccsText, "", "", $this);
        $this->coorigin = new clsControl(ccsReportLabel, "coorigin", "coorigin", ccsText, "", "", $this);
        $this->toalloy = new clsControl(ccsReportLabel, "toalloy", "toalloy", ccsText, "", "", $this);
        $this->ccname = new clsControl(ccsReportLabel, "ccname", "ccname", ccsText, "", "", $this);
        $this->edcrocond = new clsControl(ccsReportLabel, "edcrocond", "edcrocond", ccsSingle, "", "", $this);
        $this->shocmatrl = new clsControl(ccsReportLabel, "shocmatrl", "shocmatrl", ccsInteger, "", "", $this);
        $this->docondmatrl = new clsControl(ccsReportLabel, "docondmatrl", "docondmatrl", ccsInteger, "", "", $this);
        $this->comatrl = new clsControl(ccsReportLabel, "comatrl", "comatrl", ccsSingle, "", "", $this);
        $this->tcorestnce = new clsControl(ccsReportLabel, "tcorestnce", "tcorestnce", ccsSingle, "", "", $this);
        $this->ccsectn = new clsControl(ccsReportLabel, "ccsectn", "ccsectn", ccsInteger, "", "", $this);
        $this->overalldiam = new clsControl(ccsReportLabel, "overalldiam", "overalldiam", ccsSingle, "", "", $this);
        $this->dbscctrs = new clsControl(ccsReportLabel, "dbscctrs", "dbscctrs", ccsInteger, "", "", $this);
        $this->mpulength = new clsControl(ccsReportLabel, "mpulength", "mpulength", ccsSingle, "", "", $this);
        $this->ambtemp = new clsControl(ccsReportLabel, "ambtemp", "ambtemp", ccsInteger, "", "", $this);
        $this->fctemp = new clsControl(ccsReportLabel, "fctemp", "fctemp", ccsInteger, "", "", $this);
        $this->ctabeginosc = new clsControl(ccsReportLabel, "ctabeginosc", "ctabeginosc", ccsInteger, "", "", $this);
        $this->ctaendosc = new clsControl(ccsReportLabel, "ctaendosc", "ctaendosc", ccsInteger, "", "", $this);
        $this->cwindspeed = new clsControl(ccsReportLabel, "cwindspeed", "cwindspeed", ccsSingle, "", "", $this);
        $this->sracoeff = new clsControl(ccsReportLabel, "sracoeff", "sracoeff", ccsSingle, "", "", $this);
        $this->iosradtn = new clsControl(ccsReportLabel, "iosradtn", "iosradtn", ccsInteger, "", "", $this);
        $this->ecoeffirtbb = new clsControl(ccsReportLabel, "ecoeffirtbb", "ecoeffirtbb", ccsSingle, "", "", $this);
        $this->ymoelas = new clsControl(ccsReportLabel, "ymoelas", "ymoelas", ccsFloat, "", "", $this);
        $this->NoRecords = new clsPanel("NoRecords", $this);
        $this->Report_CurrentDate = new clsControl(ccsReportLabel, "Report_CurrentDate", "Report_CurrentDate", ccsText, array('ShortDate'), "", $this);
        $this->Report_CurrentPage = new clsControl(ccsReportLabel, "Report_CurrentPage", "Report_CurrentPage", ccsInteger, "", "", $this);
        $this->Report_TotalPages = new clsControl(ccsReportLabel, "Report_TotalPages", "Report_TotalPages", ccsInteger, "", "", $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @8-6C59EE65
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = $this->PageSize;
        $this->DataSource->AbsolutePage = $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//CheckErrors Method @8-9E6BEA83
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
        $errors = ($errors || $this->Report_CurrentDate->Errors->Count());
        $errors = ($errors || $this->Report_CurrentPage->Errors->Count());
        $errors = ($errors || $this->Report_TotalPages->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//GetErrors Method @8-ECECF1C2
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->projectid->Errors->ToString());
        $errors = ComposeStrings($errors, $this->rvikvrms->Errors->ToString());
        $errors = ComposeStrings($errors, $this->scxrratio->Errors->ToString());
        $errors = ComposeStrings($errors, $this->issccurrt->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ssssscurrt->Errors->ToString());
        $errors = ComposeStrings($errors, $this->dosccurrt->Errors->ToString());
        $errors = ComposeStrings($errors, $this->dorsccurrt->Errors->ToString());
        $errors = ComposeStrings($errors, $this->sysfreq->Errors->ToString());
        $errors = ComposeStrings($errors, $this->rccratg->Errors->ToString());
        $errors = ComposeStrings($errors, $this->noppwires->Errors->ToString());
        $errors = ComposeStrings($errors, $this->spanlgth->Errors->ToString());
        $errors = ComposeStrings($errors, $this->hocondctr->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ipspacg->Errors->ToString());
        $errors = ComposeStrings($errors, $this->acsvgradt->Errors->ToString());
        $errors = ComposeStrings($errors, $this->make->Errors->ToString());
        $errors = ComposeStrings($errors, $this->coorigin->Errors->ToString());
        $errors = ComposeStrings($errors, $this->toalloy->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ccname->Errors->ToString());
        $errors = ComposeStrings($errors, $this->edcrocond->Errors->ToString());
        $errors = ComposeStrings($errors, $this->shocmatrl->Errors->ToString());
        $errors = ComposeStrings($errors, $this->docondmatrl->Errors->ToString());
        $errors = ComposeStrings($errors, $this->comatrl->Errors->ToString());
        $errors = ComposeStrings($errors, $this->tcorestnce->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ccsectn->Errors->ToString());
        $errors = ComposeStrings($errors, $this->overalldiam->Errors->ToString());
        $errors = ComposeStrings($errors, $this->dbscctrs->Errors->ToString());
        $errors = ComposeStrings($errors, $this->mpulength->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ambtemp->Errors->ToString());
        $errors = ComposeStrings($errors, $this->fctemp->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ctabeginosc->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ctaendosc->Errors->ToString());
        $errors = ComposeStrings($errors, $this->cwindspeed->Errors->ToString());
        $errors = ComposeStrings($errors, $this->sracoeff->Errors->ToString());
        $errors = ComposeStrings($errors, $this->iosradtn->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ecoeffirtbb->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ymoelas->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentDate->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_CurrentPage->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Report_TotalPages->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

//Show Method @8-295DADC0
    function Show()
    {
        $Tpl = CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $ShownRecords = 0;


        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();

        $Groups = new clsGroupsCollectionconductorsizingcalculatio($this);
        $Groups->PageSize = $this->PageSize > 0 ? $this->PageSize : 0;

        $is_next_record = $this->DataSource->next_record();
        $this->IsEmpty = ! $is_next_record;
        while($is_next_record) {
            $this->DataSource->SetValues();
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
            if (count($Groups->Groups) == 0) $Groups->OpenGroup("Report");
            $Groups->AddItem();
            $is_next_record = $this->DataSource->next_record();
        }
        if (!count($Groups->Groups)) 
            $Groups->OpenGroup("Report");
        else
            $this->NoRecords->Visible = false;
        $Groups->CloseGroup("Report");
        $this->TotalPages = $Groups->TotalPages;
        $this->TotalRows = $Groups->TotalRows;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) return;

        $this->Attributes->Show();
        $ReportBlock = "Report " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $ReportBlock;

        if($this->CheckErrors()) {
            $Tpl->replaceblock("", $this->GetErrors());
            $Tpl->block_path = $ParentPath;
            return;
        } else {
            $items = & $Groups->Groups;
            $i = $Groups->Pages[min($this->PageNumber, $Groups->TotalPages) - 1];
            $this->ControlsVisible["projectid"] = $this->projectid->Visible;
            $this->ControlsVisible["rvikvrms"] = $this->rvikvrms->Visible;
            $this->ControlsVisible["scxrratio"] = $this->scxrratio->Visible;
            $this->ControlsVisible["issccurrt"] = $this->issccurrt->Visible;
            $this->ControlsVisible["ssssscurrt"] = $this->ssssscurrt->Visible;
            $this->ControlsVisible["dosccurrt"] = $this->dosccurrt->Visible;
            $this->ControlsVisible["dorsccurrt"] = $this->dorsccurrt->Visible;
            $this->ControlsVisible["sysfreq"] = $this->sysfreq->Visible;
            $this->ControlsVisible["rccratg"] = $this->rccratg->Visible;
            $this->ControlsVisible["noppwires"] = $this->noppwires->Visible;
            $this->ControlsVisible["spanlgth"] = $this->spanlgth->Visible;
            $this->ControlsVisible["hocondctr"] = $this->hocondctr->Visible;
            $this->ControlsVisible["ipspacg"] = $this->ipspacg->Visible;
            $this->ControlsVisible["acsvgradt"] = $this->acsvgradt->Visible;
            $this->ControlsVisible["make"] = $this->make->Visible;
            $this->ControlsVisible["coorigin"] = $this->coorigin->Visible;
            $this->ControlsVisible["toalloy"] = $this->toalloy->Visible;
            $this->ControlsVisible["ccname"] = $this->ccname->Visible;
            $this->ControlsVisible["edcrocond"] = $this->edcrocond->Visible;
            $this->ControlsVisible["shocmatrl"] = $this->shocmatrl->Visible;
            $this->ControlsVisible["docondmatrl"] = $this->docondmatrl->Visible;
            $this->ControlsVisible["comatrl"] = $this->comatrl->Visible;
            $this->ControlsVisible["tcorestnce"] = $this->tcorestnce->Visible;
            $this->ControlsVisible["ccsectn"] = $this->ccsectn->Visible;
            $this->ControlsVisible["overalldiam"] = $this->overalldiam->Visible;
            $this->ControlsVisible["dbscctrs"] = $this->dbscctrs->Visible;
            $this->ControlsVisible["mpulength"] = $this->mpulength->Visible;
            $this->ControlsVisible["ambtemp"] = $this->ambtemp->Visible;
            $this->ControlsVisible["fctemp"] = $this->fctemp->Visible;
            $this->ControlsVisible["ctabeginosc"] = $this->ctabeginosc->Visible;
            $this->ControlsVisible["ctaendosc"] = $this->ctaendosc->Visible;
            $this->ControlsVisible["cwindspeed"] = $this->cwindspeed->Visible;
            $this->ControlsVisible["sracoeff"] = $this->sracoeff->Visible;
            $this->ControlsVisible["iosradtn"] = $this->iosradtn->Visible;
            $this->ControlsVisible["ecoeffirtbb"] = $this->ecoeffirtbb->Visible;
            $this->ControlsVisible["ymoelas"] = $this->ymoelas->Visible;
            do {
                $this->Attributes->RestoreFromArray($items[$i]->Attributes);
                $this->RowNumber = $items[$i]->RowNumber;
                switch ($items[$i]->GroupType) {
                    Case "":
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Detail";
                        $this->projectid->SetValue($items[$i]->projectid);
                        $this->projectid->Attributes->RestoreFromArray($items[$i]->_projectidAttributes);
                        $this->rvikvrms->SetValue($items[$i]->rvikvrms);
                        $this->rvikvrms->Attributes->RestoreFromArray($items[$i]->_rvikvrmsAttributes);
                        $this->scxrratio->SetValue($items[$i]->scxrratio);
                        $this->scxrratio->Attributes->RestoreFromArray($items[$i]->_scxrratioAttributes);
                        $this->issccurrt->SetValue($items[$i]->issccurrt);
                        $this->issccurrt->Attributes->RestoreFromArray($items[$i]->_issccurrtAttributes);
                        $this->ssssscurrt->SetValue($items[$i]->ssssscurrt);
                        $this->ssssscurrt->Attributes->RestoreFromArray($items[$i]->_ssssscurrtAttributes);
                        $this->dosccurrt->SetValue($items[$i]->dosccurrt);
                        $this->dosccurrt->Attributes->RestoreFromArray($items[$i]->_dosccurrtAttributes);
                        $this->dorsccurrt->SetValue($items[$i]->dorsccurrt);
                        $this->dorsccurrt->Attributes->RestoreFromArray($items[$i]->_dorsccurrtAttributes);
                        $this->sysfreq->SetValue($items[$i]->sysfreq);
                        $this->sysfreq->Attributes->RestoreFromArray($items[$i]->_sysfreqAttributes);
                        $this->rccratg->SetValue($items[$i]->rccratg);
                        $this->rccratg->Attributes->RestoreFromArray($items[$i]->_rccratgAttributes);
                        $this->noppwires->SetValue($items[$i]->noppwires);
                        $this->noppwires->Attributes->RestoreFromArray($items[$i]->_noppwiresAttributes);
                        $this->spanlgth->SetValue($items[$i]->spanlgth);
                        $this->spanlgth->Attributes->RestoreFromArray($items[$i]->_spanlgthAttributes);
                        $this->hocondctr->SetValue($items[$i]->hocondctr);
                        $this->hocondctr->Attributes->RestoreFromArray($items[$i]->_hocondctrAttributes);
                        $this->ipspacg->SetValue($items[$i]->ipspacg);
                        $this->ipspacg->Attributes->RestoreFromArray($items[$i]->_ipspacgAttributes);
                        $this->acsvgradt->SetValue($items[$i]->acsvgradt);
                        $this->acsvgradt->Attributes->RestoreFromArray($items[$i]->_acsvgradtAttributes);
                        $this->make->SetValue($items[$i]->make);
                        $this->make->Attributes->RestoreFromArray($items[$i]->_makeAttributes);
                        $this->coorigin->SetValue($items[$i]->coorigin);
                        $this->coorigin->Attributes->RestoreFromArray($items[$i]->_cooriginAttributes);
                        $this->toalloy->SetValue($items[$i]->toalloy);
                        $this->toalloy->Attributes->RestoreFromArray($items[$i]->_toalloyAttributes);
                        $this->ccname->SetValue($items[$i]->ccname);
                        $this->ccname->Attributes->RestoreFromArray($items[$i]->_ccnameAttributes);
                        $this->edcrocond->SetValue($items[$i]->edcrocond);
                        $this->edcrocond->Attributes->RestoreFromArray($items[$i]->_edcrocondAttributes);
                        $this->shocmatrl->SetValue($items[$i]->shocmatrl);
                        $this->shocmatrl->Attributes->RestoreFromArray($items[$i]->_shocmatrlAttributes);
                        $this->docondmatrl->SetValue($items[$i]->docondmatrl);
                        $this->docondmatrl->Attributes->RestoreFromArray($items[$i]->_docondmatrlAttributes);
                        $this->comatrl->SetValue($items[$i]->comatrl);
                        $this->comatrl->Attributes->RestoreFromArray($items[$i]->_comatrlAttributes);
                        $this->tcorestnce->SetValue($items[$i]->tcorestnce);
                        $this->tcorestnce->Attributes->RestoreFromArray($items[$i]->_tcorestnceAttributes);
                        $this->ccsectn->SetValue($items[$i]->ccsectn);
                        $this->ccsectn->Attributes->RestoreFromArray($items[$i]->_ccsectnAttributes);
                        $this->overalldiam->SetValue($items[$i]->overalldiam);
                        $this->overalldiam->Attributes->RestoreFromArray($items[$i]->_overalldiamAttributes);
                        $this->dbscctrs->SetValue($items[$i]->dbscctrs);
                        $this->dbscctrs->Attributes->RestoreFromArray($items[$i]->_dbscctrsAttributes);
                        $this->mpulength->SetValue($items[$i]->mpulength);
                        $this->mpulength->Attributes->RestoreFromArray($items[$i]->_mpulengthAttributes);
                        $this->ambtemp->SetValue($items[$i]->ambtemp);
                        $this->ambtemp->Attributes->RestoreFromArray($items[$i]->_ambtempAttributes);
                        $this->fctemp->SetValue($items[$i]->fctemp);
                        $this->fctemp->Attributes->RestoreFromArray($items[$i]->_fctempAttributes);
                        $this->ctabeginosc->SetValue($items[$i]->ctabeginosc);
                        $this->ctabeginosc->Attributes->RestoreFromArray($items[$i]->_ctabeginoscAttributes);
                        $this->ctaendosc->SetValue($items[$i]->ctaendosc);
                        $this->ctaendosc->Attributes->RestoreFromArray($items[$i]->_ctaendoscAttributes);
                        $this->cwindspeed->SetValue($items[$i]->cwindspeed);
                        $this->cwindspeed->Attributes->RestoreFromArray($items[$i]->_cwindspeedAttributes);
                        $this->sracoeff->SetValue($items[$i]->sracoeff);
                        $this->sracoeff->Attributes->RestoreFromArray($items[$i]->_sracoeffAttributes);
                        $this->iosradtn->SetValue($items[$i]->iosradtn);
                        $this->iosradtn->Attributes->RestoreFromArray($items[$i]->_iosradtnAttributes);
                        $this->ecoeffirtbb->SetValue($items[$i]->ecoeffirtbb);
                        $this->ecoeffirtbb->Attributes->RestoreFromArray($items[$i]->_ecoeffirtbbAttributes);
                        $this->ymoelas->SetValue($items[$i]->ymoelas);
                        $this->ymoelas->Attributes->RestoreFromArray($items[$i]->_ymoelasAttributes);
                        $this->Detail->CCSEventResult = CCGetEvent($this->Detail->CCSEvents, "BeforeShow", $this->Detail);
                        $this->Attributes->Show();
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
                        $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                        if ($this->Detail->Visible)
                            $Tpl->parseto("Section Detail", true, "Section Detail");
                        break;
                    case "Report":
                        if ($items[$i]->Mode == 1) {
                            $this->Report_Header->CCSEventResult = CCGetEvent($this->Report_Header->CCSEvents, "BeforeShow", $this->Report_Header);
                            if ($this->Report_Header->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Report_Header";
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Report_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2) {
                            $this->Report_Footer->CCSEventResult = CCGetEvent($this->Report_Footer->CCSEvents, "BeforeShow", $this->Report_Footer);
                            if ($this->Report_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Report_Footer";
                                $this->NoRecords->Show();
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Report_Footer", true, "Section Detail");
                            }
                        }
                        break;
                    case "Page":
                        if ($items[$i]->Mode == 1) {
                            $this->Page_Header->CCSEventResult = CCGetEvent($this->Page_Header->CCSEvents, "BeforeShow", $this->Page_Header);
                            if ($this->Page_Header->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Page_Header";
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Header", true, "Section Detail");
                            }
                        }
                        if ($items[$i]->Mode == 2 && !$this->UseClientPaging || $items[$i]->Mode == 1 && $this->UseClientPaging) {
                            $this->Report_CurrentDate->SetValue(CCFormatDate(CCGetDateArray(), $this->Report_CurrentDate->Format));
                            $this->Report_CurrentDate->Attributes->RestoreFromArray($items[$i]->_Report_CurrentDateAttributes);
                            $this->Report_CurrentPage->SetValue($items[$i]->PageNumber);
                            $this->Report_CurrentPage->Attributes->RestoreFromArray($items[$i]->_Report_CurrentPageAttributes);
                            $this->Report_TotalPages->SetValue($Groups->TotalPages);
                            $this->Report_TotalPages->Attributes->RestoreFromArray($items[$i]->_Report_TotalPagesAttributes);
                            $this->Navigator->PageNumber = $items[$i]->PageNumber;
                            $this->Navigator->TotalPages = $Groups->TotalPages;
                            $this->Navigator->Visible = ("Print" != $this->ViewMode) && ($this->Navigator->TotalPages > 1);
                            $this->Page_Footer->CCSEventResult = CCGetEvent($this->Page_Footer->CCSEvents, "BeforeShow", $this->Page_Footer);
                            if ($this->Page_Footer->Visible) {
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock . "/Section Page_Footer";
                                $this->Report_CurrentDate->Show();
                                $this->Report_CurrentPage->Show();
                                $this->Report_TotalPages->Show();
                                $this->Navigator->Show();
                                $this->Attributes->Show();
                                $Tpl->block_path = $ParentPath . "/" . $ReportBlock;
                                $Tpl->parseto("Section Page_Footer", true, "Section Detail");
                            }
                        }
                        break;
                }
                $i++;
            } while ($i < count($items) && ($this->ViewMode == "Print" ||  !($i > 1 && $items[$i]->GroupType == 'Page' && $items[$i]->Mode == 1)));
            $Tpl->block_path = $ParentPath;
            $Tpl->parse($ReportBlock);
            $this->DataSource->close();
        }

    }
//End Show Method

} //End conductorsizingcalculatio Class @8-FCB6E20C

class clsconductorsizingcalculatioDataSource extends clsDBlocalhost {  //conductorsizingcalculatioDataSource Class @8-38B511EA

//DataSource Variables @8-93AA8AE1
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $wp;


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

//DataSourceClass_Initialize Event @8-98579296
    function clsconductorsizingcalculatioDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Report conductorsizingcalculatio";
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
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @8-9E1383D1
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            "");
    }
//End SetOrder Method

//Prepare Method @8-14D6CD9D
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
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

} //End conductorsizingcalculatioDataSource Class @8-FCB6E20C

//Include Page implementation @7-C10B939B
include_once(RelativePath . "/includables/menuincludablepage.php");
//End Include Page implementation

//Include Page implementation @6-59AEC4EA
include_once(RelativePath . "/includables/headerincludablepage.php");
//End Include Page implementation

//Initialize Page @1-1C2DBAEF
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
$TemplateFileName = "CSCReport.html";
$BlockToParse = "main";
$TemplateEncoding = "UTF-8";
$ContentType = "text/html";
$PathToRoot = "../";
$PathToRootOpt = "../";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|";
$Charset = $Charset ? $Charset : "utf-8";
//End Initialize Page

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-133159A2
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
$conductorsizingcalculatio = new clsReportconductorsizingcalculatio("", $MainPage);
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

//Execute Components @1-64CFB0AB
$MasterPage->Operations();
$headerincludablepage->Operations();
$menuincludablepage->Operations();
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
