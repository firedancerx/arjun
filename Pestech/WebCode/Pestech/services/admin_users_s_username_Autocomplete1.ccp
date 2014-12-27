<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\services" secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="True" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Grid id="2" secured="False" sourceType="Table" returnValueType="Number" defaultPageSize="10" name="users3" connection="localhost" dataSource="users" pageSizeLimit="100" wizardCaption="List of Users3 "><Components><Label id="80" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="username" fieldSource="username"><Components/><Events/><Attributes/><Features/></Label></Components><Events/><TableParameters><TableParameter id="79" conditionType="Parameter" useIsNull="False" field="username" dataType="Text" logicOperator="And" searchConditionType="BeginsWith" parameterType="URL" parameterSource="term"/></TableParameters><JoinTables/><JoinLinks/><Fields><Field id="78" tableName="users" fieldName="username"/></Fields><PKFields/><SPParameters/><SQLParameters/><SecurityGroups/><Attributes/><Features/></Grid></Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="admin_users_s_username_Autocomplete1.php" forShow="True" url="admin_users_s_username_Autocomplete1.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
