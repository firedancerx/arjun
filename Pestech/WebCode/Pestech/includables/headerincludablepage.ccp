<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\includables" secured="False" urlType="Relative" isIncluded="True" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Record id="3" sourceType="Table" urlType="Relative" secured="False" allowInsert="True" allowUpdate="True" allowDelete="True" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="NewRecord1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" actionPage="headerincludablepage" errorSummator="Error" wizardFormMethod="post" PathID="headerincludablepageNewRecord1">
			<Components>
				<Link id="15" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Absolute" preserveParameters="GET" name="loginlnk" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="headerincludablepageNewRecord1loginlnk" hrefSource="../secure/login.ccp" wizardUseTemplateBlock="True" linkProperties="{'textSource':'Login','textSourceDB':'','hrefSource':'../secure/login.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<Link id="16" visible="Dynamic" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="logoutlnk" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="headerincludablepageNewRecord1logoutlnk" hrefSource="../secure/logout.ccp" wizardUseTemplateBlock="True" linkProperties="{'textSource':'Logout','textSourceDB':'','hrefSource':'../secure/logout.ccp','hrefSourceDB':'','title':'','target':'','name':'','linkParameters':{'length':0,'objectType':'linkParameters'}}"><Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
				<TextBox id="5" visible="Yes" fieldSourceType="DBColumn" dataType="Text" name="TextBox1" wizardTheme="None" wizardThemeType="File" wizardThemeVersion="3.0" PathID="headerincludablepageNewRecord1TextBox1" defaultValue="abc123">
					<Components/>
					<Events/>
					<Attributes/>
					<Features/>
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
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="headerincludablepage.php" forShow="True" url="headerincludablepage.php" comment="//" codePage="utf-8"/>
		<CodeFile id="Events" language="PHPTemplates" name="headerincludablepage_events.php" forShow="False" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="BeforeShow" type="Server">
			<Actions>
				<Action actionName="Custom Code" actionCategory="General" id="6"/>
			</Actions>
		</Event>
	</Events>
</Page>
