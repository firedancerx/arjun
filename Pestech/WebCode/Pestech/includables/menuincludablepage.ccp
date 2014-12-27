<Page id="1" templateExtension="html" relativePath=".." fullRelativePath=".\includables" secured="False" urlType="Relative" isIncluded="True" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" needGeneration="0">
	<Components>
		<Menu id="2" secured="False" sourceType="Table" returnValueType="Number" name="Menu1" menuType="Horizontal" idField="Id" parentIdField="parentId" menuSourceType="Static" PathID="menuincludablepageMenu1" wizardTheme="None" wizardThemeVersion="3.0">
			<Components>
				<Link id="12" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="ItemLink" PathID="menuincludablepageMenu1ItemLink" wizardTheme="None" wizardThemeVersion="3.0">
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
				<MenuItem id="13" name="MenuItem1" caption="Home" url="../general/index.ccp"/>
<MenuItem id="14" name="MenuItem2" caption="Projects"/>
<MenuItem id="15" name="MenuItem2Item1" parent="MenuItem2" caption="New Projects" url="../projects/newprojects.ccp"/>
<MenuItem id="16" name="MenuItem2Item2" parent="MenuItem2" caption="Edit Projects" url="../projects/editprojects.ccp"/>
<MenuItem id="17" name="MenuItem2Item3" parent="MenuItem2" caption="Project Reports"/>
<MenuItem id="18" name="MenuItem3" caption="Admin"/>
<MenuItem id="19" name="MenuItem3Item1" parent="MenuItem3" caption="Users" url="../admin/users.ccp"/>
<MenuItem id="20" name="MenuItem3Item2" parent="MenuItem3" caption="Project Types" url="../admin/projecttypes.ccp"/>
<MenuItem id="21" name="MenuItem3Item3" parent="MenuItem3" caption="Project Control" url="../admin/projects.ccp"/>
</MenuItems>
			<Features/>
		</Menu>
	</Components>
	<CodeFiles>
		<CodeFile id="Code" language="PHPTemplates" name="menuincludablepage.php" forShow="True" url="menuincludablepage.php" comment="//" codePage="utf-8"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events/>
</Page>
