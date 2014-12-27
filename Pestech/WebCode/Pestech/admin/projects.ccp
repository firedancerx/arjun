<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\admin" secured="True" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0" wizardTheme="None" wizardThemeVersion="3.0">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Panel id="148" visible="True" generateDiv="True" name="Panel1" PathID="ContentPanel1" features="(assigned)">
<Components>
<Grid id="149" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="projects2" connection="localhost" dataSource="projects" orderBy="projectname" pageSizeLimit="100" pageSize="True" wizardCaption=" List of Projects " wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="Simple" wizardAllowInsert="True" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="No records" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="projectname" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" PathID="ContentPanel1projects2" composition="15" isParent="True" useJqueryFeatures="True">
<Components>
<Link id="157" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="projects2_Insert" hrefSource="projects.ccp" removeParameters="Id" wizardThemeItem="FooterA" wizardDefaultValue="Add New" wizardUseTemplateBlock="False" PathID="ContentPanel1projects2projects2_Insert">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Label id="158" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="projects2_TotalRecords" wizardUseTemplateBlock="False" PathID="ContentPanel1projects2projects2_TotalRecords">
<Components/>
<Events>
<Event name="BeforeShow" type="Server">
<Actions>
<Action actionName="Retrieve number of records" actionCategory="Database" id="159"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Label>
<Sorter id="162" visible="True" name="Sorter_projectname" column="projectname" wizardCaption="Projectname" wizardSortingType="Simple" wizardControl="projectname" wizardAddNbsp="False" PathID="ContentPanel1projects2Sorter_projectname">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="163" visible="True" name="Sorter_substation" column="substation" wizardCaption="Substation" wizardSortingType="Simple" wizardControl="substation" wizardAddNbsp="False" PathID="ContentPanel1projects2Sorter_substation">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Sorter id="164" visible="True" name="Sorter_projectyear" column="projectyear" wizardCaption="Projectyear" wizardSortingType="Simple" wizardControl="projectyear" wizardAddNbsp="False" PathID="ContentPanel1projects2Sorter_projectyear">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Sorter>
<Link id="165" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" preserveParameters="GET" name="projectname" fieldSource="projectname" wizardCaption="Projectname" wizardIsPassword="False" wizardUseTemplateBlock="False" linkProperties="''" wizardAddNbsp="True" wizardThemeItem="GridA" PathID="ContentPanel1projects2projectname">
<Components/>
<Events/>
<LinkParameters>
<LinkParameter id="166" sourceType="DataField" format="yyyy-mm-dd" name="Id" source="Id"/>
</LinkParameters>
<Attributes/>
<Features/>
</Link>
<Label id="167" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="substation" fieldSource="substation" wizardCaption="Substation" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentPanel1projects2substation">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<Label id="168" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="projectyear" fieldSource="projectyear" wizardCaption="Projectyear" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="ContentPanel1projects2projectyear">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
<Navigator id="169" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardPageSize="True" wizardImagesScheme="None">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Navigator>
</Components>
<Events/>
<TableParameters>
<TableParameter id="160" conditionType="Parameter" useIsNull="False" field="projectname" parameterSource="s_projectname" dataType="Text" logicOperator="And" searchConditionType="Contains" parameterType="URL" orderNumber="1" searchFormParameter="True"/>
<TableParameter id="161" conditionType="Parameter" useIsNull="False" field="substation" parameterSource="s_substation" dataType="Text" logicOperator="And" searchConditionType="Contains" parameterType="URL" orderNumber="2" searchFormParameter="True"/>
</TableParameters>
<JoinTables>
<JoinTable id="150" tableName="projects"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="153" tableName="projects" fieldName="Id"/>
<Field id="154" tableName="projects" fieldName="projectname"/>
<Field id="155" tableName="projects" fieldName="substation"/>
<Field id="156" tableName="projects" fieldName="projectyear"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
<Record id="170" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="projectsSearch1" searchIds="170" fictitiousConnection="localhost" wizardCaption="Search  " wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="False" wizardTypeButtons="button" wizardDefaultButton="True" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="projects.ccp" PathID="ContentPanel1projectsSearch1" composition="15">
<Components>
<Link id="171" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="projects.ccp" removeParameters="s_projectname;s_substation" wizardThemeItem="SorterLink" wizardDefaultValue="Clear" PathID="ContentPanel1projectsSearch1ClearParameters">
<Components/>
<Events/>
<LinkParameters/>
<Attributes/>
<Features/>
</Link>
<Button id="172" urlType="Relative" enableValidation="True" isDefault="True" name="Button_DoSearch" operation="Search" wizardCaption="Search" PathID="ContentPanel1projectsSearch1Button_DoSearch">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<TextBox id="173" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" name="s_projectname" fieldSource="projectname" wizardIsPassword="False" wizardCaption="Projectname" caption="Projectname" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1projectsSearch1s_projectname" features="(assigned)">
<Components/>
<Events/>
<Attributes/>
<Features>
<JAutocomplete id="214" enabled="True" istemplate="Text" template="{@text}" advanced="This is parent control, all controls below is children" height="default" width="default" hscrollbar="default" vscrollbar="default" name="Autocomplete1" servicePage="../services/admin_projects_s_projectname_Autocomplete1.ccp" category="jQuery" searchField="projectname" connection="localhost" featureNameChanged="No" dataSource="projects">
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
<TextBox id="174" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" name="s_substation" fieldSource="substation" wizardIsPassword="False" wizardCaption="Substation" caption="Substation" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1projectsSearch1s_substation" features="(assigned)">
<Components/>
<Events/>
<Attributes/>
<Features>
<JAutocomplete id="215" enabled="True" istemplate="Text" template="{@text}" advanced="This is parent control, all controls below is children" height="default" width="default" hscrollbar="default" vscrollbar="default" name="Autocomplete2" servicePage="../services/admin_projects_s_substation_Autocomplete1.ccp" category="jQuery" searchField="substation" connection="localhost" featureNameChanged="No" dataSource="projects">
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
<Panel id="175" visible="True" generateDiv="True" name="Panel2" PathID="ContentPanel1Panel2" features="(assigned)">
<Components>
<Record id="176" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="True" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="projects3" connection="localhost" dataSource="projects" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="True" buttonsType="button" wizardRecordKey="Id" encryptPasswordField="False" wizardUseInterVariables="False" pkIsAutoincrement="True" wizardCaption=" Add/Edit Projects " wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Program Files (x86)/CodeChargeStudio5/Templates/Record/Dialog.ccp|ccsTemplate" recordAddTemplatePanel="False" PathID="ContentPanel1Panel2projects3" composition="15">
<Components>
<Button id="179" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardCaption="Add" PathID="ContentPanel1Panel2projects3Button_Insert">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="180" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardCaption="Submit" PathID="ContentPanel1Panel2projects3Button_Update">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<Button id="181" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Delete" operation="Delete" wizardCaption="Delete" PathID="ContentPanel1Panel2projects3Button_Delete">
<Components/>
<Events>
<Event name="OnClick" type="Client">
<Actions>
<Action actionName="Confirmation Message" actionCategory="General" id="182" message="Delete record?"/>
</Actions>
</Event>
</Events>
<Attributes/>
<Features/>
</Button>
<Button id="183" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardCaption="Cancel" PathID="ContentPanel1Panel2projects3Button_Cancel">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Button>
<ListBox id="184" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="projecttype" fieldSource="projecttype" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Projecttype" caption="Projecttype" required="True" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="projecttypes" boundColumn="Id" textColumn="typename" PathID="ContentPanel1Panel2projects3projecttype">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="185" tableName="projecttypes"/>
</JoinTables>
<JoinLinks/>
<Fields/>
<PKFields/>
<Attributes/>
<Features/>
</ListBox>
<TextBox id="186" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="projectname" fieldSource="projectname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Projectname" caption="Projectname" required="True" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projects3projectname">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="187" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="substation" fieldSource="substation" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Substation" caption="Substation" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projects3substation">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextArea id="188" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="projectdescription" fieldSource="projectdescription" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Projectdescription" caption="Projectdescription" required="False" unique="False" wizardSize="50" wizardRows="3" PathID="ContentPanel1Panel2projects3projectdescription">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextArea>
<TextBox id="189" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="drawingnumber" fieldSource="drawingnumber" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Drawingnumber" caption="Drawingnumber" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projects3drawingnumber">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<TextBox id="190" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="revision" fieldSource="revision" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Revision" caption="Revision" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2projects3revision">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<ListBox id="191" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="designedby" fieldSource="designedby" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Designedby" caption="Designedby" required="False" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="users" boundColumn="Id" textColumn="username" orderBy="username" PathID="ContentPanel1Panel2projects3designedby">
<Components/>
<Events/>
<TableParameters>
<TableParameter id="193" conditionType="Parameter" useIsNull="False" dataType="Integer" field="level" logicOperator="And" parameterSource="2" parameterType="Expression" searchConditionType="Equal"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="192" posHeight="180" posLeft="10" posTop="10" posWidth="115" schemaName="myphytos_pes" tableName="users"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="194" fieldName="Id" tableName="users"/>
<Field id="195" fieldName="username" tableName="users"/>
</Fields>
<PKFields>
<PKField id="196" dataType="Integer" fieldName="Id" tableName="users"/>
</PKFields>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="197" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="checkedby" fieldSource="checkedby" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Checkedby" caption="Checkedby" required="False" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="users" boundColumn="Id" textColumn="username" orderBy="username" PathID="ContentPanel1Panel2projects3checkedby">
<Components/>
<Events/>
<TableParameters>
<TableParameter id="199" conditionType="Parameter" useIsNull="False" dataType="Integer" field="level" logicOperator="And" parameterSource="3" parameterType="Expression" searchConditionType="Equal"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="198" posHeight="180" posLeft="10" posTop="10" posWidth="115" schemaName="myphytos_pes" tableName="users"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="200" fieldName="Id" tableName="users"/>
<Field id="201" fieldName="username" tableName="users"/>
</Fields>
<PKFields>
<PKField id="202" dataType="Integer" fieldName="Id" tableName="users"/>
</PKFields>
<Attributes/>
<Features/>
</ListBox>
<ListBox id="203" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="approvedby" fieldSource="approvedby" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Approvedby" caption="Approvedby" required="False" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="users" boundColumn="Id" orderBy="username" PathID="ContentPanel1Panel2projects3approvedby">
<Components/>
<Events/>
<TableParameters>
<TableParameter id="205" conditionType="Parameter" useIsNull="False" dataType="Integer" field="level" logicOperator="And" parameterSource="4" parameterType="Expression" searchConditionType="Equal"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="204" posHeight="180" posLeft="10" posTop="10" posWidth="115" schemaName="myphytos_pes" tableName="users"/>
</JoinTables>
<JoinLinks/>
<Fields>
<Field id="206" fieldName="Id" tableName="users"/>
<Field id="207" fieldName="username" tableName="users"/>
</Fields>
<PKFields>
<PKField id="208" dataType="Integer" fieldName="Id" tableName="users"/>
</PKFields>
<Attributes/>
<Features/>
</ListBox>
<TextBox id="209" visible="Yes" fieldSourceType="DBColumn" dataType="Date" name="documentdate" fieldSource="documentdate" wizardIsPassword="False" wizardUseTemplateBlock="False" features="(assigned)" wizardCaption="Documentdate" caption="Documentdate" required="False" format="ShortDate" unique="False" wizardSize="8" wizardMaxLength="100" PathID="ContentPanel1Panel2projects3documentdate">
<Components/>
<Events/>
<Attributes/>
<Features>
<JDateTimePicker id="210" show_weekend="True" name="InlineDatePicker1" category="jQuery" enabled="True">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<Features/>
</JDateTimePicker>
</Features>
</TextBox>
<TextBox id="211" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="projectyear" fieldSource="projectyear" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Projectyear" caption="Projectyear" required="False" unique="False" wizardSize="10" wizardMaxLength="10" PathID="ContentPanel1Panel2projects3projectyear">
<Components/>
<Events/>
<Attributes/>
<Features/>
</TextBox>
<ListBox id="212" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="isactive" fieldSource="isactive" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Isactive" caption="Isactive" required="True" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="isactive" boundColumn="Id" textColumn="isactivedescription" PathID="ContentPanel1Panel2projects3isactive">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="213" tableName="isactive"/>
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
<TableParameter id="178" conditionType="Parameter" useIsNull="False" field="Id" parameterSource="Id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
</TableParameters>
<SPParameters/>
<SQLParameters/>
<JoinTables>
<JoinTable id="177" tableName="projects"/>
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
<JDialog id="249" modal="True" visible="False" enabled="True" name="DialogPanel1" category="jQuery" title=" Add/Edit Projects " show="ContentPanel1condition_for_show.ontrue;" hide="ContentPanel1condition_for_hide.ontrue;">
<Components/>
<Events/>
<TableParameters/>
<SPParameters/>
<SQLParameters/>
<JoinTables/>
<JoinLinks/>
<Fields/>
<ControlPoints>
<ControlPoint id="250" name="ContentPanel1condition_for_show.ontrue" relProperty="show">
<Items>
<ControlPointItem id="251" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="252" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="253" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="254" name="condition_for_show" ccpId="217" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_show"/>
</Items>
</ControlPoint>
<ControlPoint id="255" name="ContentPanel1condition_for_hide.ontrue" relProperty="hide">
<Items>
<ControlPointItem id="256" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="257" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="258" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="259" name="condition_for_hide" ccpId="223" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_hide"/>
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
<JUpdatePanel id="216" enabled="True" childrenAsTriggers="True" name="UpdatePanel1" category="jQuery">
<Components/>
<Events/>
<ControlPoints/>
<Features/>
</JUpdatePanel>
<Condition id="217" name="condition_for_show" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="218" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
<Items>
<ControlPointItem id="219" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="220" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="221" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="222" name="UpdatePanel1" ccpId="216" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="223" name="condition_for_hide" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;submit&quot; &amp;&amp; $(&quot;#ErrorBlock&quot;).length == 0)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="224" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
<Items>
<ControlPointItem id="225" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="226" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="227" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="228" name="UpdatePanel1" ccpId="216" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="229" name="ccc_link_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1projects2projects2_Insert.onclick;ContentPanel1projects2projectname.onclick;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="230" name="ContentPanel1projects2projects2_Insert.onclick" relProperty="start">
<Items>
<ControlPointItem id="231" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="232" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="233" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="234" name="projects2" ccpId="149" type="Grid" isFeature="False" PathID="ContentPanel1projects2"/>
<ControlPointItem id="235" name="projects2_Insert" ccpId="157" type="Link" isFeature="False" PathID="ContentPanel1projects2projects2_Insert"/>
</Items>
</ControlPoint>
<ControlPoint id="236" name="ContentPanel1projects2projectname.onclick" relProperty="start">
<Items>
<ControlPointItem id="237" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="238" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="239" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="240" name="projects2" ccpId="149" type="Grid" isFeature="False" PathID="ContentPanel1projects2"/>
<ControlPointItem id="241" name="projectname" ccpId="165" type="Link" isFeature="False" PathID="ContentPanel1projects2projectname"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="242" name="ccc_submit_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;submit&quot;)" sourceType2="Expression" start="ContentPanel1Panel2projects3.onsubmit;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="243" name="ContentPanel1Panel2projects3.onsubmit" relProperty="start">
<Items>
<ControlPointItem id="244" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="245" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="246" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="247" name="Panel2" ccpId="175" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="248" name="projects3" ccpId="176" type="Record" isFeature="False" PathID="ContentPanel1Panel2projects3"/>
</Items>
</ControlPoint>
</ControlPoints>
<Features/>
</Condition>
<Condition id="260" name="ccc_others_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;&quot;)" sourceType2="Expression" start="ContentPanel1Panel2DialogPanel1.onshow;ContentPanel1Panel2DialogPanel1.onhide;">
<Components/>
<Events/>
<ControlPoints>
<ControlPoint id="261" name="ContentPanel1Panel2DialogPanel1.onshow" relProperty="start">
<Items>
<ControlPointItem id="262" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="263" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="264" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="265" name="Panel2" ccpId="175" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="266" name="DialogPanel1" ccpId="249" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
</Items>
</ControlPoint>
<ControlPoint id="267" name="ContentPanel1Panel2DialogPanel1.onhide" relProperty="start">
<Items>
<ControlPointItem id="268" name="projects" ccpId="1" type="Page" isFeature="False"/>
<ControlPointItem id="269" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
<ControlPointItem id="270" name="Panel1" ccpId="148" type="Panel" isFeature="False" PathID="ContentPanel1"/>
<ControlPointItem id="271" name="Panel2" ccpId="175" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
<ControlPointItem id="272" name="DialogPanel1" ccpId="249" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
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
		<CodeFile id="Events" language="PHPTemplates" name="projects_events.php" forShow="False" comment="//" codePage="utf-8"/>
		<CodeFile id="Code" language="PHPTemplates" name="projects.php" forShow="True" url="projects.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups>
		<Group id="147" groupID="5"/>
	</SecurityGroups>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
