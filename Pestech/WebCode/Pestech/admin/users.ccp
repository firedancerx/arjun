<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\admin" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" useDesign="True" masterPage="{CCS_PathToMasterPage}/MasterPage.ccp" needGeneration="0" wizardTheme="None" wizardThemeVersion="3.0" accessDeniedPage="../general/accessdenied.ccp">
	<Components>
		<Panel id="2" visible="True" generateDiv="False" name="Head" contentPlaceholder="Head">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="3" visible="True" generateDiv="False" name="Content" contentPlaceholder="Content">
			<Components>
				<Panel id="8" visible="True" generateDiv="True" name="Panel1" PathID="ContentPanel1" features="(assigned)">
					<Components>
						<Grid id="9" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="users1" connection="localhost" dataSource="users" orderBy="username" pageSizeLimit="100" pageSize="True" wizardCaption=" List of Users " wizardThemeApplyTo="Component" wizardGridType="Tabular" wizardSortingType="Simple" wizardAllowInsert="True" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="No records" wizardGridPagingType="Simple" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="True" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="username" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" PathID="ContentPanel1users1" composition="8" isParent="True" useJqueryFeatures="True">
							<Components>
								<Link id="18" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="users1_Insert" hrefSource="users.ccp" removeParameters="Id" wizardThemeItem="FooterA" wizardDefaultValue="Add New" wizardUseTemplateBlock="False" PathID="ContentPanel1users1users1_Insert">
									<Components/>
									<Events/>
									<LinkParameters/>
									<Attributes/>
									<Features/>
								</Link>
								<Label id="19" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="users1_TotalRecords" wizardUseTemplateBlock="False" PathID="ContentPanel1users1users1_TotalRecords">
									<Components/>
									<Events>
										<Event name="BeforeShow" type="Server">
											<Actions>
												<Action actionName="Retrieve number of records" actionCategory="Database" id="20"/>
											</Actions>
										</Event>
									</Events>
									<Attributes/>
									<Features/>
								</Label>
								<Sorter id="23" visible="True" name="Sorter_username" column="username" wizardCaption="Username" wizardSortingType="Simple" wizardControl="username" wizardAddNbsp="False" PathID="ContentPanel1users1Sorter_username">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="24" visible="True" name="Sorter_firstname" column="firstname" wizardCaption="Firstname" wizardSortingType="Simple" wizardControl="firstname" wizardAddNbsp="False" PathID="ContentPanel1users1Sorter_firstname">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Sorter id="25" visible="True" name="Sorter_lastname" column="lastname" wizardCaption="Lastname" wizardSortingType="Simple" wizardControl="lastname" wizardAddNbsp="False" PathID="ContentPanel1users1Sorter_lastname">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Sorter>
								<Link id="26" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" preserveParameters="GET" name="username" fieldSource="username" wizardCaption="Username" wizardIsPassword="False" wizardUseTemplateBlock="False" linkProperties="''" wizardAddNbsp="True" wizardThemeItem="GridA" PathID="ContentPanel1users1username" urlType="Relative">
									<Components/>
									<Events/>
									<LinkParameters>
										<LinkParameter id="27" sourceType="DataField" format="yyyy-mm-dd" name="Id" source="Id"/>
									</LinkParameters>
									<Attributes/>
									<Features/>
								</Link>
								<Label id="28" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="firstname" fieldSource="firstname" wizardCaption="Firstname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentPanel1users1firstname">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="29" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="lastname" fieldSource="lastname" wizardCaption="Lastname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="ContentPanel1users1lastname">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Navigator id="30" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Simple" wizardFirst="True" wizardFirstText="First" wizardPrev="True" wizardPrevText="Prev" wizardNext="True" wizardNextText="Next" wizardLast="True" wizardLastText="Last" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="of" wizardPageSize="True" wizardImagesScheme="None">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Navigator>
							</Components>
							<Events/>
							<TableParameters>
								<TableParameter id="21" conditionType="Parameter" useIsNull="False" field="username" parameterSource="s_username" dataType="Text" logicOperator="And" searchConditionType="Contains" parameterType="URL" orderNumber="1" searchFormParameter="True"/>
								<TableParameter id="22" conditionType="Parameter" useIsNull="False" field="isactive" parameterSource="s_isactive" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="2" searchFormParameter="True"/>
							</TableParameters>
							<JoinTables>
								<JoinTable id="10" tableName="users"/>
							</JoinTables>
							<JoinLinks/>
							<Fields>
								<Field id="13" tableName="users" fieldName="Id"/>
								<Field id="14" tableName="users" fieldName="username"/>
								<Field id="15" tableName="users" fieldName="firstname"/>
								<Field id="16" tableName="users" fieldName="lastname"/>
								<Field id="17" tableName="users" fieldName="isactive"/>
							</Fields>
							<PKFields/>
							<SPParameters/>
							<SQLParameters/>
							<SecurityGroups/>
							<Attributes/>
							<Features/>
						</Grid>
						<Record id="31" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="usersSearch" searchIds="31" fictitiousConnection="localhost" wizardCaption="Search  " wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="False" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="False" wizardTypeButtons="button" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Component" addTemplatePanel="False" wizardType="GridRecord" returnPage="users.ccp" PathID="ContentPanel1usersSearch" composition="8">
							<Components>
								<Button id="32" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardCaption="Search" PathID="ContentPanel1usersSearchButton_DoSearch">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Button>
								<TextBox id="33" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" name="s_username" fieldSource="username" wizardIsPassword="False" wizardCaption="Username" caption="Username" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1usersSearchs_username" features="(assigned)">
									<Components/>
									<Events/>
									<Attributes/>
									<Features>
										<JAutocomplete id="76" enabled="True" istemplate="Text" template="{@text}" advanced="This is parent control, all controls below is children" height="default" width="default" hscrollbar="default" vscrollbar="default" name="Autocomplete1" servicePage="../services/admin_users_s_username_Autocomplete1.ccp" category="jQuery" searchField="username" connection="localhost" featureNameChanged="No" dataSource="users">
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
								<ListBox id="34" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="s_isactive" fieldSource="isactive" wizardIsPassword="False" wizardEmptyCaption="Select Value" wizardCaption="Isactive" caption="Isactive" required="False" unique="False" dataSource="isactive" boundColumn="Id" textColumn="isactivedescription" PathID="ContentPanel1usersSearchs_isactive" connection="localhost">
									<Components/>
									<Events/>
									<TableParameters/>
									<SPParameters/>
									<SQLParameters/>
									<JoinTables>
										<JoinTable id="35" tableName="isactive"/>
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
						<Panel id="36" visible="True" generateDiv="True" name="Panel2" PathID="ContentPanel1Panel2" features="(assigned)">
							<Components>
								<Record id="37" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="True" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="users2" connection="localhost" dataSource="users" errorSummator="Error" allowCancel="True" recordDeleteConfirmation="True" buttonsType="button" wizardRecordKey="Id" encryptPasswordField="True" encryptPasswordFieldName="password" wizardUseInterVariables="False" pkIsAutoincrement="True" wizardCaption="Add/Edit Users " wizardThemeApplyTo="Component" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Program Files (x86)/CodeChargeStudio5/Templates/Record/Dialog.ccp|ccsTemplate" recordAddTemplatePanel="False" PathID="ContentPanel1Panel2users2" customInsertType="Table" customInsert="users" customUpdateType="Table" customUpdate="users" composition="8">
									<Components>
										<Button id="41" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Insert" operation="Insert" wizardCaption="Add" PathID="ContentPanel1Panel2users2Button_Insert">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</Button>
										<Button id="43" urlType="Relative" enableValidation="True" isDefault="False" name="Button_Update" operation="Update" wizardCaption="Submit" PathID="ContentPanel1Panel2users2Button_Update">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</Button>
										<Button id="45" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Delete" operation="Delete" wizardCaption="Delete" PathID="ContentPanel1Panel2users2Button_Delete">
											<Components/>
											<Events>
												<Event name="OnClick" type="Client">
													<Actions>
														<Action actionName="Confirmation Message" actionCategory="General" id="46" message="Delete record?"/>
													</Actions>
												</Event>
											</Events>
											<Attributes/>
											<Features/>
										</Button>
										<Button id="47" urlType="Relative" enableValidation="False" isDefault="False" name="Button_Cancel" operation="Cancel" wizardCaption="Cancel" PathID="ContentPanel1Panel2users2Button_Cancel">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</Button>
										<TextBox id="48" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="username" fieldSource="username" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Username" caption="Username" required="True" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2username">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</TextBox>
										<TextBox id="49" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="firstname" fieldSource="firstname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Firstname" caption="Firstname" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2firstname">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</TextBox>
										<TextBox id="50" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="lastname" fieldSource="lastname" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Lastname" caption="Lastname" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2lastname">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</TextBox>
										<TextBox id="51" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="password" fieldSource="password" wizardIsPassword="True" wizardUseTemplateBlock="False" wizardCaption="Password" caption="Password" required="True" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2password">
											<Components/>
											<Events>
												<Event name="OnValidate" type="Server">
													<Actions>
														<Action actionName="Reset Password Validation" actionCategory="Security" id="52" passwordControlName="password"/>
													</Actions>
												</Event>
											</Events>
											<Attributes/>
											<Features/>
										</TextBox>
										<TextBox id="53" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="email" fieldSource="email" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Email" caption="Email" required="True" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2email">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</TextBox>
										<TextBox id="54" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="telno" fieldSource="telno" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Telno" caption="Telno" required="False" unique="False" wizardSize="50" wizardMaxLength="250" PathID="ContentPanel1Panel2users2telno">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</TextBox>
										<ListBox id="55" visible="Yes" fieldSourceType="DBColumn" sourceType="Table" dataType="Integer" returnValueType="Number" name="level" fieldSource="level" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Level" caption="Level" required="True" unique="False" connection="localhost" wizardEmptyCaption="Select Value" dataSource="levels" boundColumn="Id" textColumn="levelname" PathID="ContentPanel1Panel2users2level" defaultValue="1">
											<Components/>
											<Events/>
											<TableParameters/>
											<SPParameters/>
											<SQLParameters/>
											<JoinTables>
												<JoinTable id="56" tableName="levels"/>
											</JoinTables>
											<JoinLinks/>
											<Fields/>
											<PKFields/>
											<Attributes/>
											<Features/>
										</ListBox>
										<CheckBox id="57" visible="Yes" fieldSourceType="DBColumn" dataType="Integer" name="isactive" fieldSource="isactive" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Isactive" checkedValue="1" uncheckedValue="0" PathID="ContentPanel1Panel2users2isactive" defaultValue="Checked">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</CheckBox>
										<Hidden id="58" fieldSourceType="DBColumn" dataType="Text" name="password_Shadow" PathID="ContentPanel1Panel2users2password_Shadow">
											<Components/>
											<Events/>
											<Attributes/>
											<Features/>
										</Hidden>
									</Components>
									<Events>
										<Event name="BeforeShow" type="Server">
											<Actions>
												<Action actionName="Preserve Password" actionCategory="Security" id="40" passwordControlName="password" shadowControlName="password_Shadow"/>
											</Actions>
										</Event>
										<Event name="BeforeExecuteInsert" type="Server">
											<Actions>
												<Action actionName="Encrypt Password" actionCategory="Security" id="42" passwordControlName="password" shadowControlName="password_Shadow"/>
											</Actions>
										</Event>
										<Event name="BeforeExecuteUpdate" type="Server">
											<Actions>
												<Action actionName="Encrypt Password" actionCategory="Security" id="44" passwordControlName="password" shadowControlName="password_Shadow"/>
											</Actions>
										</Event>
									</Events>
									<TableParameters>
										<TableParameter id="39" conditionType="Parameter" useIsNull="False" field="Id" parameterSource="Id" dataType="Integer" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
									</TableParameters>
									<SPParameters/>
									<SQLParameters/>
									<JoinTables>
										<JoinTable id="38" tableName="users"/>
									</JoinTables>
									<JoinLinks/>
									<Fields/>
									<PKFields/>
									<ISPParameters/>
									<ISQLParameters/>
									<IFormElements>
										<CustomParameter id="59" field="username" dataType="Text" parameterType="Control" parameterSource="username" omitIfEmpty="True"/>
										<CustomParameter id="60" field="firstname" dataType="Text" parameterType="Control" parameterSource="firstname" omitIfEmpty="True"/>
										<CustomParameter id="61" field="lastname" dataType="Text" parameterType="Control" parameterSource="lastname" omitIfEmpty="True"/>
										<CustomParameter id="62" field="password" dataType="Text" parameterType="Expression" parameterSource="&quot;{password}&quot;" omitIfEmpty="True"/>
										<CustomParameter id="63" field="email" dataType="Text" parameterType="Control" parameterSource="email" omitIfEmpty="True"/>
										<CustomParameter id="64" field="telno" dataType="Text" parameterType="Control" parameterSource="telno" omitIfEmpty="True"/>
										<CustomParameter id="65" field="level" dataType="Integer" parameterType="Control" parameterSource="level" omitIfEmpty="True"/>
										<CustomParameter id="66" field="isactive" dataType="Integer" parameterType="Control" parameterSource="isactive" omitIfEmpty="True"/>
									</IFormElements>
									<USPParameters/>
									<USQLParameters/>
									<UConditions>
										<TableParameter id="67" conditionType="Parameter" useIsNull="False" field="Id" dataType="Integer" parameterType="URL" parameterSource="Id" searchConditionType="Equal" logicOperator="And" orderNumber="1" omitIfEmpty="True"/>
									</UConditions>
									<UFormElements>
										<CustomParameter id="68" field="username" dataType="Text" parameterType="Control" parameterSource="username" omitIfEmpty="True"/>
										<CustomParameter id="69" field="firstname" dataType="Text" parameterType="Control" parameterSource="firstname" omitIfEmpty="True"/>
										<CustomParameter id="70" field="lastname" dataType="Text" parameterType="Control" parameterSource="lastname" omitIfEmpty="True"/>
										<CustomParameter id="71" field="password" dataType="Text" parameterType="Expression" parameterSource="&quot;{password}&quot;" omitIfEmpty="True"/>
										<CustomParameter id="72" field="email" dataType="Text" parameterType="Control" parameterSource="email" omitIfEmpty="True"/>
										<CustomParameter id="73" field="telno" dataType="Text" parameterType="Control" parameterSource="telno" omitIfEmpty="True"/>
										<CustomParameter id="74" field="level" dataType="Integer" parameterType="Control" parameterSource="level" omitIfEmpty="True"/>
										<CustomParameter id="75" field="isactive" dataType="Integer" parameterType="Control" parameterSource="isactive" omitIfEmpty="True"/>
									</UFormElements>
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
								<JDialog id="110" modal="True" visible="False" enabled="True" name="DialogPanel1" category="jQuery" title="Add/Edit Users " show="ContentPanel1condition_for_show.ontrue;" hide="ContentPanel1condition_for_hide.ontrue;">
									<Components/>
									<Events/>
									<TableParameters/>
									<SPParameters/>
									<SQLParameters/>
									<JoinTables/>
									<JoinLinks/>
									<Fields/>
									<ControlPoints>
										<ControlPoint id="111" name="ContentPanel1condition_for_show.ontrue" relProperty="show">
											<Items>
												<ControlPointItem id="112" name="users" ccpId="1" type="Page" isFeature="False"/>
												<ControlPointItem id="113" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
												<ControlPointItem id="114" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
												<ControlPointItem id="115" name="condition_for_show" ccpId="78" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_show"/>
											</Items>
										</ControlPoint>
										<ControlPoint id="116" name="ContentPanel1condition_for_hide.ontrue" relProperty="hide">
											<Items>
												<ControlPointItem id="117" name="users" ccpId="1" type="Page" isFeature="False"/>
												<ControlPointItem id="118" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
												<ControlPointItem id="119" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
												<ControlPointItem id="120" name="condition_for_hide" ccpId="84" type="Condition" isFeature="True" PathID="ContentPanel1condition_for_hide"/>
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
						<JUpdatePanel id="77" enabled="True" childrenAsTriggers="True" name="UpdatePanel1" category="jQuery">
							<Components/>
							<Events/>
							<ControlPoints/>
							<Features/>
						</JUpdatePanel>
						<Condition id="78" name="condition_for_show" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
							<Components/>
							<Events/>
							<ControlPoints>
								<ControlPoint id="79" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
									<Items>
										<ControlPointItem id="80" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="81" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="82" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="83" name="UpdatePanel1" ccpId="77" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
									</Items>
								</ControlPoint>
							</ControlPoints>
							<Features/>
						</Condition>
						<Condition id="84" name="condition_for_hide" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;submit&quot; &amp;&amp; $(&quot;#ErrorBlock&quot;).length == 0)" sourceType2="Expression" start="ContentPanel1UpdatePanel1.onafterrefresh;">
							<Components/>
							<Events/>
							<ControlPoints>
								<ControlPoint id="85" name="ContentPanel1UpdatePanel1.onafterrefresh" relProperty="start">
									<Items>
										<ControlPointItem id="86" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="87" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="88" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="89" name="UpdatePanel1" ccpId="77" type="JUpdatePanel" isFeature="True" PathID="ContentPanel1UpdatePanel1"/>
									</Items>
								</ControlPoint>
							</ControlPoints>
							<Features/>
						</Condition>
						<Condition id="90" name="ccc_link_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;link&quot;)" sourceType2="Expression" start="ContentPanel1users1users1_Insert.onclick;ContentPanel1users1username.onclick;">
							<Components/>
							<Events/>
							<ControlPoints>
								<ControlPoint id="91" name="ContentPanel1users1users1_Insert.onclick" relProperty="start">
									<Items>
										<ControlPointItem id="92" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="93" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="94" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="95" name="users1" ccpId="9" type="Grid" isFeature="False" PathID="ContentPanel1users1"/>
										<ControlPointItem id="96" name="users1_Insert" ccpId="18" type="Link" isFeature="False" PathID="ContentPanel1users1users1_Insert"/>
									</Items>
								</ControlPoint>
								<ControlPoint id="97" name="ContentPanel1users1username.onclick" relProperty="start">
									<Items>
										<ControlPointItem id="98" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="99" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="100" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="101" name="users1" ccpId="9" type="Grid" isFeature="False" PathID="ContentPanel1users1"/>
										<ControlPointItem id="102" name="username" ccpId="26" type="Link" isFeature="False" PathID="ContentPanel1users1username"/>
									</Items>
								</ControlPoint>
							</ControlPoints>
							<Features/>
						</Condition>
						<Condition id="103" name="ccc_submit_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;submit&quot;)" sourceType2="Expression" start="ContentPanel1Panel2users2.onsubmit;">
							<Components/>
							<Events/>
							<ControlPoints>
								<ControlPoint id="104" name="ContentPanel1Panel2users2.onsubmit" relProperty="start">
									<Items>
										<ControlPointItem id="105" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="106" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="107" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="108" name="Panel2" ccpId="36" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
										<ControlPointItem id="109" name="users2" ccpId="37" type="Record" isFeature="False" PathID="ContentPanel1Panel2users2"/>
									</Items>
								</ControlPoint>
							</ControlPoints>
							<Features/>
						</Condition>
						<Condition id="121" name="ccc_others_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;&quot;)" sourceType2="Expression" start="ContentPanel1Panel2DialogPanel1.onshow;ContentPanel1Panel2DialogPanel1.onhide;">
							<Components/>
							<Events/>
							<ControlPoints>
								<ControlPoint id="122" name="ContentPanel1Panel2DialogPanel1.onshow" relProperty="start">
									<Items>
										<ControlPointItem id="123" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="124" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="125" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="126" name="Panel2" ccpId="36" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
										<ControlPointItem id="127" name="DialogPanel1" ccpId="110" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
									</Items>
								</ControlPoint>
								<ControlPoint id="128" name="ContentPanel1Panel2DialogPanel1.onhide" relProperty="start">
									<Items>
										<ControlPointItem id="129" name="users" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="130" name="Content" ccpId="3" type="Panel" isFeature="False" PathID="Content"/>
										<ControlPointItem id="131" name="Panel1" ccpId="8" type="Panel" isFeature="False" PathID="ContentPanel1"/>
										<ControlPointItem id="132" name="Panel2" ccpId="36" type="Panel" isFeature="False" PathID="ContentPanel1Panel2"/>
										<ControlPointItem id="133" name="DialogPanel1" ccpId="110" type="JDialog" isFeature="True" PathID="ContentPanel1Panel2DialogPanel1"/>
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
		<CodeFile id="Events" language="PHPTemplates" name="users_events.php" forShow="False" comment="//" codePage="utf-8"/>
		<CodeFile id="Code" language="PHPTemplates" name="users.php" forShow="True" url="users.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups>
		<Group id="134" groupID="5"/>
	</SecurityGroups>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
