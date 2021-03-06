<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\projects" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0" wizardTheme="None" wizardThemeVersion="3.0">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Grid id="8" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="projectsmenu" connection="localhost" dataSource="projectsmenu" orderBy="projectname" pageSizeLimit="100" pageSize="True" wizardCaption=" List of Projects " wizardThemeApplyTo="Page" wizardGridType="Tabular" wizardSortingType="Simple" wizardAllowInsert="False" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="No records" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="False" wizardAddPanels="False" wizardType="Grid" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" PathID="Contentprojectsmenu" composition="34" isParent="True" editableComponentTypeString="Search">
					<Components>
						<Sorter id="13" visible="True" name="Sorter_projectname" column="projectname" wizardCaption="Projectname" wizardSortingType="Simple" wizardControl="projectname" wizardAddNbsp="False" PathID="ContentprojectsmenuSorter_projectname">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="14" visible="True" name="Sorter_substation" column="substation" wizardCaption="Substation" wizardSortingType="Simple" wizardControl="substation" wizardAddNbsp="False" PathID="ContentprojectsmenuSorter_substation">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="15" visible="True" name="Sorter_projectyear" column="projectyear" wizardCaption="Projectyear" wizardSortingType="Simple" wizardControl="projectyear" wizardAddNbsp="False" PathID="ContentprojectsmenuSorter_projectyear">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Link id="16" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Database" preserveParameters="None" name="projectname" fieldSource="projectname" wizardCaption="Projectname" wizardIsPassword="False" wizardUseTemplateBlock="False" hrefSource="urledit" linkProperties="{'textSource':'','textSourceDB':'projectname','hrefSource':'','hrefSourceDB':'urledit','title':'','target':'','name':'','linkParameters':{'0':{'sourceType':'DataField','parameterSource':'Id','parameterName':'Id'},'length':1,'objectType':'linkParameters'}}" wizardAddNbsp="True" PathID="Contentprojectsmenuprojectname" urlType="Relative">
							<Components/>
							<Events/>
							<LinkParameters>
								<LinkParameter id="17" sourceType="DataField" format="yyyy-mm-dd" name="Id" source="Id"/>
							</LinkParameters>
							<Attributes/>
							<Features/>
						</Link>
						<Label id="18" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="substation" fieldSource="substation" wizardCaption="Substation" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Contentprojectsmenusubstation">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="19" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="projectyear" fieldSource="projectyear" wizardCaption="Projectyear" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAlign="right" wizardAddNbsp="True" PathID="Contentprojectsmenuprojectyear">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Navigator id="20" size="10" type="Simple" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardImages="Images" wizardPageNumbers="Simple" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardPageSize="True" wizardImagesScheme="None">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
					</Components>
					<Events/>
					<TableParameters>
						<TableParameter id="10" conditionType="Parameter" useIsNull="False" field="projectname" parameterSource="s_projectname" dataType="Text" logicOperator="And" searchConditionType="Contains" parameterType="URL" orderNumber="1" searchFormParameter="True"/>
						<TableParameter id="11" conditionType="Parameter" useIsNull="False" field="projecttype" parameterSource="s_projecttype" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="2" searchFormParameter="True"/>
						<TableParameter id="12" conditionType="Parameter" useIsNull="False" field="projects_isactive" parameterSource="s_projects_isactive" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="3" searchFormParameter="True"/>
					</TableParameters>
					<JoinTables>
						<JoinTable id="9" tableName="projectsmenu"/>
					</JoinTables>
					<JoinLinks/>
					<Fields/>
					<PKFields/>
					<SPParameters/>
					<SQLParameters/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="21" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="projectsmenuSearch" searchIds="21" fictitiousConnection="localhost" wizardCaption="Search  " wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="True" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="False" wizardTypeButtons="button" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Page" addTemplatePanel="False" wizardType="Grid" returnPage="editprojects.ccp" PathID="ContentprojectsmenuSearch" composition="34">
					<Components>
						<Link id="22" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ClearParameters" hrefSource="editprojects.ccp" removeParameters="s_projectname;s_projecttype;s_projects_isactive" wizardThemeItem="SorterLink" wizardDefaultValue="Clear" PathID="ContentprojectsmenuSearchClearParameters">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Button id="23" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardCaption="Search" PathID="ContentprojectsmenuSearchButton_DoSearch">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<TextBox id="24" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" name="s_projectname" fieldSource="projectname" wizardIsPassword="False" wizardCaption="Projectname" caption="Projectname" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentprojectsmenuSearchs_projectname" features="(assigned)">
							<Components/>
							<Events/>
							<Attributes/>
							<Features>
								<JAutocomplete id="29" enabled="True" istemplate="Text" template="{@text}" advanced="This is parent control, all controls below is children" height="default" width="default" hscrollbar="default" vscrollbar="default" name="Autocomplete1" servicePage="../services/projects_editprojects_s_projectname_Autocomplete1.ccp" category="jQuery" searchField="projectname" connection="localhost" featureNameChanged="No" dataSource="projectsmenu">
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
						<ListBox id="25" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="s_projecttype" fieldSource="projecttype" wizardIsPassword="False" wizardEmptyCaption="Select Value" wizardCaption="Projecttype" caption="Projecttype" required="False" unique="False" connection="localhost" dataSource="projecttypes" boundColumn="Id" textColumn="typename" PathID="ContentprojectsmenuSearchs_projecttype">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="26" tableName="projecttypes"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<ListBox id="27" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="s_projects_isactive" fieldSource="projects_isactive" wizardIsPassword="False" wizardEmptyCaption="Select Value" wizardCaption="Projects Isactive" caption="Projects Isactive" required="False" unique="False" connection="localhost" dataSource="isactive" boundColumn="Id" textColumn="isactivedescription" PathID="ContentprojectsmenuSearchs_projects_isactive">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="28" tableName="isactive"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
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
		<CodeFile id="Code" language="PHPTemplates" name="editprojects.php" forShow="True" url="editprojects.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
