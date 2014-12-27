<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="projects1" connection="localhost" dataSource="projects" pageSizeLimit="100" wizardCaption="List of Projects1 "><Components><Label id="218" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="projectname" fieldSource="projectname"><Components/><Events/><Attributes/><Features/></Label></Components><Events/><TableParameters><TableParameter id="217" conditionType="Parameter" useIsNull="False" field="projectname" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="term"/></TableParameters><JoinTables/><JoinLinks/><Fields><Field id="216" tableName="projects" fieldName="projectname"/></Fields><PKFields/><SPParameters/><SQLParameters/><SecurityGroups/><Attributes/><Features/></Grid></Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="admin_projects_s_projectname_Autocomplete1.php" forShow="True" url="admin_projects_s_projectname_Autocomplete1.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
