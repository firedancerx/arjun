<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="projecttypes3" connection="localhost" dataSource="projecttypes" pageSizeLimit="100" wizardCaption="List of Projecttypes3 "><Components><Label id="47" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="typename" fieldSource="typename"><Components/><Events/><Attributes/><Features/></Label></Components><Events/><TableParameters><TableParameter id="46" conditionType="Parameter" useIsNull="False" field="typename" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="term"/></TableParameters><JoinTables/><JoinLinks/><Fields><Field id="45" tableName="projecttypes" fieldName="typename"/></Fields><PKFields/><SPParameters/><SQLParameters/><SecurityGroups/><Attributes/><Features/></Grid></Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="admin_projecttypes_s_typename_Autocomplete1.php" forShow="True" url="admin_projecttypes_s_typename_Autocomplete1.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
