<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\includables" secured="False" urlType="Relative" isIncluded="True" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Menu id="2" secured="False" sourceType="Table" returnValueType="Number" name="Menu1" menuType="Horizontal" menuSourceType="Static" PathID="topmenuincludablepageMenu1" wizardTheme="None" wizardThemeVersion="3.0">
			<Components>
				<Link id="6" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ItemLink" PathID="topmenuincludablepageMenu1ItemLink" wizardTheme="None" wizardThemeVersion="3.0">
					<Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
			<Events/>
			<TableParameters/>
			<JoinTables/>
			<JoinLinks/>
			<Fields/>
			<PKFields/>
			<SPParameters/>
			<SQLParameters/>
			<SecurityGroups/>
			<Attributes/>
			<MenuItems>
				<MenuItem id="7" name="MenuItem1" caption="Home" url="../general/index.ccp"/>
				<MenuItem id="8" name="MenuItem2" caption="Admin"/>
				<MenuItem id="9" name="MenuItem2Item3" parent="MenuItem2" caption="Users" url="../admin/users.ccp"/>
			</MenuItems>
			<Features/>
		</Menu>
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="topmenuincludablepage.php" forShow="True" url="topmenuincludablepage.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
