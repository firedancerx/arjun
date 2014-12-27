<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\admin" secured="True" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0" accessDeniedPage="../general/accessdenied.ccp" wizardTheme="None" wizardThemeVersion="3.0">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Panel id="9" visible="True" generateDiv="True" name="Panel1" PathID="ContentPanel1" features="(assigned)">
<Components>
<Grid id="10" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="projecttypes1" connection="localhost" dataSource="projecttypes" orderBy="typename" pageSizeLimit="100" pageSize="True" wizardCaption=" List of Project Types " wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="Simple" wizardAllowInsert="True" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="No records" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="typename" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="True" gridExtendedHTML="False" PathID="ContentPanel1projecttypes1" composition="16" isParent="True" useJqueryFeatures="True">
<Components>
<Link id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="projecttypes1_Insert" hrefSource="projecttypes.ccp" removeParameters="Id" wizardThemeItem="FooterA" wizardDefaultValue="Add New" wizardUseTemplateBlock="False" PathID="ContentPanel1projecttypes1projecttypes1_Insert">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Label id="17" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="projecttypes1_TotalRecords" wizardUseTemplateBlock="False" PathID="ContentPanel1projecttypes1projecttypes1_TotalRecords">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="18"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Label>
<Sorter id="20" visible="True" name="Sorter_typename" column="typename" wizardCaption="Typename" wizardSortingType="Simple" wizardControl="typename" wizardAddNbsp="False" PathID="ContentPanel1projecttypes1Sorter_typename">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="21" visible="True" name="Sorter_typedescription" column="typedescription" wizardCaption="Typedescription" wizardSortingType="Simple" wizardControl="typedescription" wizardAddNbsp="False" PathID="ContentPanel1projecttypes1Sorter_typedescription">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Link id="22" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" preserveParameters="GET" name="typename" fieldSource="typename" wizardCaption="Typename" wizardIsPassword="False" wizardUseTemplateBlock="False" linkProperties="{'textSource':'','textSourceDB':'','hrefSource':'','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}" wizardAddNbsp="True" wizardThemeItem="GridA" PathID="ContentPanel1projecttypes1typename">
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="23" sourceType="DataField" format="yyyy-mm-dd" name="Id" source="Id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
<Label id="24" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="typedescription" fieldSource="typedescription" wizardCaption="Typedescription" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentPanel1projecttypes1typedescription">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<Navigator id="25" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardPageSize="True" wizardImagesScheme="None">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
</Components>
<Events/>
<TableParameters>
<TableParameter id="19" conditionType="Parameter" useIsNull="False" field="typename" parameterSource="s_typename" dataType="Text" logicOperator="And" searchConditionType="Contains" parameterType="URL" orderNumber="1" searchFormParameter="True"/>
</TableParameters>
<JoinTables>
<JoinTable id="11" tableName="projecttypes"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="13" tableName="projecttypes" fieldName="Id"/>
<Field id="14" tableName="projecttypes" fieldName="typename"/>
<Field id="15" tableName="projecttypes" fieldName="typedescription"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
<Record id="26" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="projecttypesSearch" searchIds="26" fictitiousConnection="localhost" wizardCaption="Search  " wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="False" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="False" wizardTypeButtons="button" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="projecttypes.ccp" PathID="ContentPanel1projecttypesSearch" composition="16">
<Components>
<Button id="27" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardCaption="Search" PathID="ContentPanel1projecttypesSearchButton_DoSearch">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="28" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" name="s_typename" fieldSource="typename" wizardIsPassword="False" wizardCaption="Typename" caption="Typename" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1projecttypesSearchs_typename" features="(assigned)">
<Components/>
<Events/>
<Attributes/>
<Features>
<JAutocomplete id="43" enabled="True" istemplate="Text" template="{@text}" advanced="This is parent control, all controls below is children" height="default" width="default" hscrollbar="default" vscrollbar="default" name="Autocomplete1" servicePage="../services/admin_projecttypes_s_typename_Autocomplete1.ccp" category="jQuery" searchField="typename" connection="localhost" featureNameChanged="No" dataSource="projecttypes">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<Features/>
</JAutocomplete>
</Features>
</TextBox>
</Components>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<PKFields/>
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
<Panel id="29" visible="True" generateDiv="True" name="Panel2" PathID="ContentPanel1Panel2" features="(assigned)">
<Components>
<Record id="30" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="True" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="projecttypes2" connection="localhost" dataSource="projecttypes" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="True" buttonsType="button" wizardRecordKey="Id" encryptPasswordField="False" wizardUseInterVariables="False" pkIsAutoincrement="True" wizardCaption=" Add/Edit Project Types " wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="True" recordDirection="Vertical" templatePageRecord="C:/Program Files (x86)/CodeChargeStudio5/Templates/Record/Dialog.ccp|ccsTemplate" recordAddTemplatePanel="False" PathID="ContentPanel1Panel2projecttypes2" composition="16">
<Components>
<Button id="33" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardCaption="Add" PathID="ContentPanel1Panel2projecttypes2Button_Insert">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="34" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardCaption="Submit" PathID="ContentPanel1Panel2projecttypes2Button_Update">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="35" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Delete" operation="Delete" wizardCaption="Delete" PathID="ContentPanel1Panel2projecttypes2Button_Delete">
<Components/>
<Events>
<Event name="OnClick" type="Client">
<Actions>
<Action actionName="Confirmation Message" actionCategory="General" id="36" message="Delete record?"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Button>
<Button id="37" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardCaption="Cancel" PathID="ContentPanel1Panel2projecttypes2Button_Cancel">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="38" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="typename" fieldSource="typename" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Typename" caption="Type Name" required="True" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projecttypes2typename">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextArea id="39" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="typedescription" fieldSource="typedescription" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Typedescription" caption="Type Description" required="False" unique="False" wizardSize="50" wizardRows="3" PathID="ContentPanel1Panel2projecttypes2typedescription">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextArea>
<TextBox id="40" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="url" fieldSource="url" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Url" caption="Url" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projecttypes2url">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<ListBox id="41" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="isactive" fieldSource="isactive" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Isactive" caption="Is Active" required="True" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="isactive" boundColumn="Id" textColumn="isactivedescription" PathID="ContentPanel1Panel2projecttypes2isactive">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="42" tableName="isactive"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
</Components>
<Events/>
<TableParameters>
<TableParameter id="32" conditionType="Parameter" useIsNull="False" field="Id" parameterSource="Id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="31" tableName="projecttypes"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
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
<Features>
<JDialog id="77" modal="True" visible="False" enabled="True" name="DialogPanel1" category="jQuery" title=" Add/Edit Project Types " show="ContentPanel1condition_for_show.ontrue;" hide="ContentPanel1condition_for_hide.ontrue;">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<ControlPoints>
<ControlPoint id="78" name="ContentPanel1condition_for_show.ontrue" relProperty="show">
<Items>
<ControlPointItem id="79" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="80" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="81" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="82" name="condition_for_show" ccpId="45" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_show"/>
</Items>
</ControlPoint>
<ControlPoint id="83" name="ContentPanel1condition_for_hide.ontrue" relProperty="hide">
<Items>
<ControlPointItem id="84" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="85" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="86" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="87" name="condition_for_hide" ccpId="51" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_hide"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</JDialog>
</Features>
</Panel>
</Components>
<Events/>
<Attributes/>
<Features>
<JUpdatePanel id="44" enabled="True" childrenAsTriggers="True" name="UpdatePanel1" category="jQuery">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</JUpdatePanel>
<Condition id="45" name="condition_for_show" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="46" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
<Items>
<ControlPointItem id="47" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="48" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="49" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="50" name="UpdatePanel1" ccpId="44" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="51" name="condition_for_hide" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;submit&quot; &amp;&amp; $(&quot;#ErrorBlock&quot;).length == 0)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="52" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
<Items>
<ControlPointItem id="53" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="54" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="55" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="56" name="UpdatePanel1" ccpId="44" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="57" name="ccc_link_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1projecttypes1projecttypes1_Insert.onclick;ContentPanel1projecttypes1typename.onclick;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="58" name="ContentPanel1projecttypes1projecttypes1_Insert.onclick" relProperty="start">
<Items>
<ControlPointItem id="59" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="60" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="61" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="62" name="projecttypes1" ccpId="10" type="Grid" isFeature="False" PathID="ContentPanel1projecttypes1"/>
<ControlPointItem id="63" name="projecttypes1_Insert" ccpId="16" type="Link" isFeature="False" PathID="ContentPanel1projecttypes1projecttypes1_Insert"/>
</Items>
</ControlPoint>
<ControlPoint id="64" name="ContentPanel1projecttypes1typename.onclick" relProperty="start">
<Items>
<ControlPointItem id="65" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="66" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="67" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="68" name="projecttypes1" ccpId="10" type="Grid" isFeature="False" PathID="ContentPanel1projecttypes1"/>
<ControlPointItem id="69" name="typename" ccpId="22" type="Link" isFeature="False" PathID="ContentPanel1projecttypes1typename"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="70" name="ccc_submit_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;submit&quot;)" sourceType2="Expression" start="ContentPanel1Panel2projecttypes2.onsubmit;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="71" name="ContentPanel1Panel2projecttypes2.onsubmit" relProperty="start">
<Items>
<ControlPointItem id="72" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="73" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="74" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="75" name="Panel2" ccpId="29" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="76" name="projecttypes2" ccpId="30" type="Record" isFeature="False" PathID="ContentPanel1Panel2projecttypes2"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="88" name="ccc_others_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;&quot;)" sourceType2="Expression" start="ContentPanel1Panel2DialogPanel1.onshow;ContentPanel1Panel2DialogPanel1.onhide;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="89" name="ContentPanel1Panel2DialogPanel1.onshow" relProperty="start">
<Items>
<ControlPointItem id="90" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="91" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="92" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="93" name="Panel2" ccpId="29" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="94" name="DialogPanel1" ccpId="77" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
</Items>
</ControlPoint>
<ControlPoint id="95" name="ContentPanel1Panel2DialogPanel1.onhide" relProperty="start">
<Items>
<ControlPointItem id="96" name="projecttypes" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="97" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="98" name="Panel1" ccpId="9" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="99" name="Panel2" ccpId="29" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="100" name="DialogPanel1" ccpId="77" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
</Features>
</Panel>
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
		<CodeFile id="Code" language="PHPTemplates" name="projecttypes.php" forShow="True" url="projecttypes.php" comment="//" codePage="utf-8"/>
		<CodeFile id="Events" language="PHPTemplates" name="projecttypes_events.php" forShow="False" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups>
		<Group id="8" groupID="5"/>
	</SecurityGroups>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
