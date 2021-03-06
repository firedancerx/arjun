<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\projectsdesignedit" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0" wizardTheme="None" wizardThemeVersion="3.0">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Record id="8" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="True" allowDelete="True" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="conductorsizingcalculations" connection="localhost" dataSource="conductorsizingcalculations" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="True" buttonsType="button" wizardRecordKey="Id" encryptPasswordField="False" wizardUseInterVariables="False" pkIsAutoincrement="True" wizardCaption="Edit Conductor Sizing Calculations " wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="Record" changedCaptionRecord="True" recordDirection="Vertical" templatePageRecord="C:/Program Files (x86)/CodeChargeStudio5/Templates/Record/Dialog.ccp|ccsTemplate" recordAddTemplatePanel="False" PathID="Contentconductorsizingcalculations" editableComponentTypeString="Record">
					<Components>
						<Button id="10" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardCaption="Submit" PathID="ContentconductorsizingcalculationsButton_Update">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="11" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Delete" operation="Delete" wizardCaption="Delete" PathID="ContentconductorsizingcalculationsButton_Delete">
							<Components/>
							<Events>
								<Event name="OnClick" type="Client">
									<Actions>
										<Action actionName="Confirmation Message" actionCategory="General" id="12" message="Delete record?"/>
									</Actions>
								</Event>
							</Events>
							<Attributes/>
							<Features/>
						</Button>
						<Button id="13" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardCaption="Cancel" PathID="ContentconductorsizingcalculationsButton_Cancel">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<ListBox id="15" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="projectid" fieldSource="projectid" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Projectid" caption="Projectid" required="False" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="projects" boundColumn="Id" textColumn="projectname" PathID="Contentconductorsizingcalculationsprojectid">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="16" tableName="projects"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<TextBox id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="rvikvrms" fieldSource="rvikvrms" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Rvikvrms" caption="Rvikvrms" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsrvikvrms">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="19" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="scxrratio" fieldSource="scxrratio" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Scxrratio" caption="Scxrratio" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsscxrratio">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="20" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="issccurrt" fieldSource="issccurrt" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Issccurrt" caption="Issccurrt" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsissccurrt">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="21" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="ssssscurrt" fieldSource="ssssscurrt" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ssssscurrt" caption="Ssssscurrt" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsssssscurrt">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="22" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="dosccurrt" fieldSource="dosccurrt" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Dosccurrt" caption="Dosccurrt" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsdosccurrt">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="23" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="dorsccurrt" fieldSource="dorsccurrt" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Dorsccurrt" caption="Dorsccurrt" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsdorsccurrt">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="24" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="sysfreq" fieldSource="sysfreq" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Sysfreq" caption="Sysfreq" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationssysfreq">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="25" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="rccratg" fieldSource="rccratg" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Rccratg" caption="Rccratg" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsrccratg">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="26" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="noppwires" fieldSource="noppwires" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Noppwires" caption="Noppwires" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsnoppwires">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="27" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="spanlgth" fieldSource="spanlgth" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Spanlgth" caption="Spanlgth" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsspanlgth">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="28" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="hocondctr" fieldSource="hocondctr" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Hocondctr" caption="Hocondctr" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationshocondctr">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="29" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="ipspacg" fieldSource="ipspacg" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ipspacg" caption="Ipspacg" required="False" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsipspacg">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="30" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="acsvgradt" fieldSource="acsvgradt" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Acsvgradt" caption="Acsvgradt" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsacsvgradt">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="31" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="make" fieldSource="make" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Make" caption="Make" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="Contentconductorsizingcalculationsmake">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="32" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="coorigin" fieldSource="coorigin" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Coorigin" caption="Coorigin" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="Contentconductorsizingcalculationscoorigin">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="33" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="toalloy" fieldSource="toalloy" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Toalloy" caption="Toalloy" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="Contentconductorsizingcalculationstoalloy">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="34" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="ccname" fieldSource="ccname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ccname" caption="Ccname" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="Contentconductorsizingcalculationsccname">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="35" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="edcrocond" fieldSource="edcrocond" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Edcrocond" caption="Edcrocond" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsedcrocond">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="36" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="shocmatrl" fieldSource="shocmatrl" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Shocmatrl" caption="Shocmatrl" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsshocmatrl">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="37" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="docondmatrl" fieldSource="docondmatrl" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Docondmatrl" caption="Docondmatrl" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsdocondmatrl">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="38" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="comatrl" fieldSource="comatrl" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Comatrl" caption="Comatrl" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationscomatrl">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="39" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="tcorestnce" fieldSource="tcorestnce" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Tcorestnce" caption="Tcorestnce" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationstcorestnce">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="40" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="ccsectn" fieldSource="ccsectn" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ccsectn" caption="Ccsectn" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsccsectn">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="41" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="overalldiam" fieldSource="overalldiam" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Overalldiam" caption="Overalldiam" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsoveralldiam">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="42" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="dbscctrs" fieldSource="dbscctrs" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Dbscctrs" caption="Dbscctrs" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsdbscctrs">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="43" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="mpulength" fieldSource="mpulength" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Mpulength" caption="Mpulength" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsmpulength">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="44" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="ambtemp" fieldSource="ambtemp" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ambtemp" caption="Ambtemp" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsambtemp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="45" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="fctemp" fieldSource="fctemp" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Fctemp" caption="Fctemp" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsfctemp">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="46" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="ctabeginosc" fieldSource="ctabeginosc" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ctabeginosc" caption="Ctabeginosc" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsctabeginosc">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="47" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="ctaendosc" fieldSource="ctaendosc" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ctaendosc" caption="Ctaendosc" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsctaendosc">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="48" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="cwindspeed" fieldSource="cwindspeed" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Cwindspeed" caption="Cwindspeed" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationscwindspeed">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="49" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="sracoeff" fieldSource="sracoeff" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Sracoeff" caption="Sracoeff" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationssracoeff">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="50" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="iosradtn" fieldSource="iosradtn" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Iosradtn" caption="Iosradtn" required="True" unique="False" wizardSize="10" wizardMaxLength="10" PathID="Contentconductorsizingcalculationsiosradtn">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="51" visible="Yes" fieldSourceType="DBColumn" dataType="Single" name="ecoeffirtbb" fieldSource="ecoeffirtbb" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ecoeffirtbb" caption="Ecoeffirtbb" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsecoeffirtbb">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
						<TextBox id="91" visible="Yes" fieldSourceType="DBColumn" dataType="Float" name="ymoelas" fieldSource="ymoelas" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Ymoelas" caption="Ymoelas" required="True" unique="False" wizardSize="12" wizardMaxLength="12" PathID="Contentconductorsizingcalculationsymoelas">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</TextBox>
					</Components>
					<Events>
						<Event name="BeforeSelect" type="Server">
							<Actions>
								<Action actionName="Custom Code" actionCategory="General" id="56"/>
							</Actions>
						</Event>
					</Events>
					<TableParameters>
						<TableParameter id="53" conditionType="Parameter" useIsNull="False" dataType="Integer" field="Id" logicOperator="And" orderNumber="1" parameterSource="Id" parameterType="URL" searchConditionType="Equal"/>
					</TableParameters>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables>
						<JoinTable id="52" posHeight="180" posLeft="10" posTop="10" posWidth="115" tableName="conductorsizingcalculations"/>
					</JoinTables>
					<JoinLinks/>
					<Fields>
						<Field id="54" fieldName="*"/>
					</Fields>
					<PKFields>
						<PKField id="55" dataType="Integer" fieldName="Id" tableName="conductorsizingcalculations"/>
					</PKFields>
					<ISPParameters/>
					<ISQLParameters/>
					<IFormElements/>
					<USPParameters/>
					<USQLParameters/>
					<UConditions/>
					<UFormElements/>
					<DSPParameters/>
					<DSQLParameters/>
					<DConditions/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Record>
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
		<CodeFile id="Code" language="PHPTemplates" name="csc.php" forShow="True" url="csc.php" comment="//" codePage="utf-8"/>
		<CodeFile id="Events" language="PHPTemplates" name="csc_events.php" forShow="False" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
