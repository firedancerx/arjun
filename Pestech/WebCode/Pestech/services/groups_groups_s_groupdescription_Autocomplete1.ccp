<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="groups3" connection="localhost" dataSource="groups" pageSizeLimit="100" wizardCaption="List of Groups3 ">
<Components>
<Label id="43" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="groupdescription" fieldSource="groupdescription">
<Components/>
<Events/>
<Attributes/>
<Features/>
</Label>
</Components>
<Events/>
<TableParameters>
<TableParameter id="42" conditionType="Parameter" useIsNull="False" field="groupdescription" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="term"/>
</TableParameters>
<JoinTables/>
<JoinLinks/>
<Fields>
<Field id="41" tableName="groups" fieldName="groupdescription"/>
</Fields>
<PKFields/>
<SPParameters/>
<SQLParameters/>
<SecurityGroups/>
<Attributes/>
<Features/>
</Grid>
</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="groups_groups_s_groupdescription_Autocomplete1.php" forShow="True" url="groups_groups_s_groupdescription_Autocomplete1.php" comment="//" codePage="utf-8"/>
</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
