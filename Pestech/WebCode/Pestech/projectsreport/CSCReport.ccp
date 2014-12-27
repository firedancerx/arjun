<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\projectsreport" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Report id="8" secured="False" enablePrint="False" showMode="Web" sourceType="Table" returnValueType="Number" linesPerWebPage="40" linesPerPhysicalPage="50" name="conductorsizingcalculatio" connection="localhost" dataSource="conductorsizingcalculations" pageSizeLimit="100" wizardCaption=" List of Conductorsizingcalculations " changedCaptionReport="False" wizardTheme="Basic" wizardLayoutType="Form" wizardGridPaging="Centered" wizardHideDetail="False" wizardPercentForSums="False" wizardEnablePrintMode="False" wizardReportSeparator="False" wizardReportAddTotalRecords="False" wizardReportAddPageNumbers="True" wizardReportAddNbsp="False" wizardReportAddDateTime="True" wizardReportDateTimeAs="CurrentDate" wizardReportAddRowNumber="False" wizardReportRowNumberResetAt="Report" wizardUseSearch="False" wizardNoRecords="No records" wizardUseInterVariables="False" wizardThemeApplyTo="Component" reportAddTemplatePanel="False" wizardThemeVersion="3.0" editableComponentTypeString="Report">
					<Components>
						<Section id="10" visible="True" lines="0" name="Report_Header" wizardSectionType="ReportHeader" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="11" visible="True" lines="0" name="Page_Header" wizardSectionType="PageHeader" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="12" visible="True" lines="36" name="Detail" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="20" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="projectid" fieldSource="projectid" fieldTableSource="conductorsizingcalculations" wizardCaption="Projectid" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailprojectid" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="21" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="rvikvrms" fieldSource="rvikvrms" fieldTableSource="conductorsizingcalculations" wizardCaption="Rvikvrms" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailrvikvrms" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="22" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="scxrratio" fieldSource="scxrratio" fieldTableSource="conductorsizingcalculations" wizardCaption="Scxrratio" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailscxrratio" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="23" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="issccurrt" fieldSource="issccurrt" fieldTableSource="conductorsizingcalculations" wizardCaption="Issccurrt" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailissccurrt" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="24" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="ssssscurrt" fieldSource="ssssscurrt" fieldTableSource="conductorsizingcalculations" wizardCaption="Ssssscurrt" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailssssscurrt" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="25" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="dosccurrt" fieldSource="dosccurrt" fieldTableSource="conductorsizingcalculations" wizardCaption="Dosccurrt" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetaildosccurrt" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="26" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="dorsccurrt" fieldSource="dorsccurrt" fieldTableSource="conductorsizingcalculations" wizardCaption="Dorsccurrt" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetaildorsccurrt" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="27" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="sysfreq" fieldSource="sysfreq" fieldTableSource="conductorsizingcalculations" wizardCaption="Sysfreq" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailsysfreq" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="28" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="rccratg" fieldSource="rccratg" fieldTableSource="conductorsizingcalculations" wizardCaption="Rccratg" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailrccratg" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="29" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="noppwires" fieldSource="noppwires" fieldTableSource="conductorsizingcalculations" wizardCaption="Noppwires" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailnoppwires" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="30" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="spanlgth" fieldSource="spanlgth" fieldTableSource="conductorsizingcalculations" wizardCaption="Spanlgth" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailspanlgth" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="31" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="hocondctr" fieldSource="hocondctr" fieldTableSource="conductorsizingcalculations" wizardCaption="Hocondctr" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailhocondctr" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="32" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="ipspacg" fieldSource="ipspacg" fieldTableSource="conductorsizingcalculations" wizardCaption="Ipspacg" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailipspacg" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="33" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="acsvgradt" fieldSource="acsvgradt" fieldTableSource="conductorsizingcalculations" wizardCaption="Acsvgradt" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailacsvgradt" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="34" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="make" fieldSource="make" fieldTableSource="conductorsizingcalculations" wizardCaption="Make" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailmake" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="35" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="coorigin" fieldSource="coorigin" fieldTableSource="conductorsizingcalculations" wizardCaption="Coorigin" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailcoorigin" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="36" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="toalloy" fieldSource="toalloy" fieldTableSource="conductorsizingcalculations" wizardCaption="Toalloy" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailtoalloy" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="37" fieldSourceType="DBColumn" dataType="Text" html="False" hideDuplicates="False" resetAt="Report" name="ccname" fieldSource="ccname" fieldTableSource="conductorsizingcalculations" wizardCaption="Ccname" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailccname" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="38" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="edcrocond" fieldSource="edcrocond" fieldTableSource="conductorsizingcalculations" wizardCaption="Edcrocond" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailedcrocond" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="39" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="shocmatrl" fieldSource="shocmatrl" fieldTableSource="conductorsizingcalculations" wizardCaption="Shocmatrl" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailshocmatrl" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="40" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="docondmatrl" fieldSource="docondmatrl" fieldTableSource="conductorsizingcalculations" wizardCaption="Docondmatrl" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetaildocondmatrl" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="41" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="comatrl" fieldSource="comatrl" fieldTableSource="conductorsizingcalculations" wizardCaption="Comatrl" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailcomatrl" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="42" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="tcorestnce" fieldSource="tcorestnce" fieldTableSource="conductorsizingcalculations" wizardCaption="Tcorestnce" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailtcorestnce" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="43" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="ccsectn" fieldSource="ccsectn" fieldTableSource="conductorsizingcalculations" wizardCaption="Ccsectn" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailccsectn" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="44" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="overalldiam" fieldSource="overalldiam" fieldTableSource="conductorsizingcalculations" wizardCaption="Overalldiam" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailoveralldiam" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="45" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="dbscctrs" fieldSource="dbscctrs" fieldTableSource="conductorsizingcalculations" wizardCaption="Dbscctrs" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetaildbscctrs" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="46" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="mpulength" fieldSource="mpulength" fieldTableSource="conductorsizingcalculations" wizardCaption="Mpulength" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailmpulength" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="47" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="ambtemp" fieldSource="ambtemp" fieldTableSource="conductorsizingcalculations" wizardCaption="Ambtemp" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailambtemp" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="48" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="fctemp" fieldSource="fctemp" fieldTableSource="conductorsizingcalculations" wizardCaption="Fctemp" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailfctemp" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="49" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="ctabeginosc" fieldSource="ctabeginosc" fieldTableSource="conductorsizingcalculations" wizardCaption="Ctabeginosc" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailctabeginosc" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="50" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="ctaendosc" fieldSource="ctaendosc" fieldTableSource="conductorsizingcalculations" wizardCaption="Ctaendosc" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailctaendosc" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="51" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="cwindspeed" fieldSource="cwindspeed" fieldTableSource="conductorsizingcalculations" wizardCaption="Cwindspeed" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailcwindspeed" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="52" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="sracoeff" fieldSource="sracoeff" fieldTableSource="conductorsizingcalculations" wizardCaption="Sracoeff" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailsracoeff" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="53" fieldSourceType="DBColumn" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="iosradtn" fieldSource="iosradtn" fieldTableSource="conductorsizingcalculations" wizardCaption="Iosradtn" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailiosradtn" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="54" fieldSourceType="DBColumn" dataType="Single" html="False" hideDuplicates="False" resetAt="Report" name="ecoeffirtbb" fieldSource="ecoeffirtbb" fieldTableSource="conductorsizingcalculations" wizardCaption="Ecoeffirtbb" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailecoeffirtbb" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="55" fieldSourceType="DBColumn" dataType="Float" html="False" hideDuplicates="False" resetAt="Report" name="ymoelas" fieldSource="ymoelas" fieldTableSource="conductorsizingcalculations" wizardCaption="Ymoelas" wizardIsPassword="False" visible="Yes" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" PathID="ContentconductorsizingcalculatioDetailymoelas" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="13" visible="True" lines="0" name="Report_Footer" wizardSectionType="ReportFooter" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<Panel id="14" visible="True" generateDiv="False" name="NoRecords" wizardNoRecords="No records" wizardTheme="Basic" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>

									<Features/>
								</Panel>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
						<Section id="15" visible="True" lines="1" name="Page_Footer" wizardSectionType="PageFooter" pageBreakAfter="True" wizardTheme="Basic" wizardThemeVersion="3.0">
							<Components>
								<ReportLabel id="16" fieldSourceType="SpecialValue" dataType="Date" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentDate" fieldSource="CurrentDate" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardInsertToDateTD="True" PathID="ContentconductorsizingcalculatioPage_FooterReport_CurrentDate" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="17" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_CurrentPage" fieldSource="PageNumber" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardPrefix="Page " PathID="ContentconductorsizingcalculatioPage_FooterReport_CurrentPage" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<ReportLabel id="18" fieldSourceType="SpecialValue" dataType="Integer" html="False" hideDuplicates="False" resetAt="Report" name="Report_TotalPages" fieldSource="TotalPages" wizardTheme="Basic" wizardUseTemplateBlock="False" wizardAddNbsp="False" wizardPrefix=" of " PathID="ContentconductorsizingcalculatioPage_FooterReport_TotalPages" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</ReportLabel>
								<Navigator id="19" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Centered" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardTheme="Basic" wizardImagesScheme="Basic" wizardThemeVersion="3.0">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Navigator>
							</Components>
							<Events/>
							<Attributes/>
							<Features/>
						</Section>
					</Components>
					<Events/>
					<TableParameters/>
					<JoinTables>
						<JoinTable id="9" tableName="conductorsizingcalculations"/>
					</JoinTables>
					<JoinLinks/>
					<Fields/>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<ReportGroups/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Report>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="4" visible="True" generateDiv="False" name="Menu" contentPlaceholder="Menu">
			<Components>
				<IncludePage id="7" name="menuincludablepage" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="Menumenuincludablepage" page="../includables/menuincludablepage.ccp">
					<Components/>
					<Events/>
					<Features/>
				</IncludePage>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="5" visible="True" generateDiv="False" name="HeaderSidebar" contentPlaceholder="HeaderSidebar">
			<Components>
				<IncludePage id="6" name="headerincludablepage" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="HeaderSidebarheaderincludablepage" page="../includables/headerincludablepage.ccp">
					<Components/>
					<Events/>
					<Features/>
				</IncludePage>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="CSCReport.php" forShow="True" url="CSCReport.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
