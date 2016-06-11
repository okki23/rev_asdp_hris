{include file="header.tpl"}
<script>
$(document).ready(function() {
    var panels = $('#menu').accordion('panels');
    $.each(panels, function() {
        this.panel('collapse');
    });
});

</script>
	<body>
	<div class="easyui-layout" data-options="fit:'true'">
		{include file="topmenu.tpl"}
		{include file="rightmenu.tpl"}
		
		<div data-options="region:'west',split:true,hideCollapsedContent:false" title="Main Menu" style="width:210px;">
			<div id="menu" class="easyui-accordion" data-options="fit:true,border:false">
				<div title="Master" style="padding:10px;" data-options="selected:false" >
				<div class="easyui-panel" style="padding:5px">
			<ul class="easyui-tree" >
                   <!-- <li><a href="#" onclick="addTab('Pegawai','{$link}pegawai')">Pegawai</a></li>-->
			</ul>
			</div>
				</div>
				<div title="Organization Management" style="padding:10px;">
					<ul class="easyui-tree" >
                    <li><a href="#" onclick="addTab('Organization Management','{$link}orm')">Organization Management</a></li>
					</ul>
				</div>
				<div title="Personal Administration" style="padding:10px;">
					<ul class="easyui-tree" >
                    <li><a href="#" onclick="addTab('Employee Management','{$link}pegawai')">Employee Management</a></li>
					</ul>
				</div>
				<div title="Key Performance Indicator (KPI)"  style="padding:10px;">
					<!--<a href="#" class="easyui-linkbutton" onclick="addTab('jquery','http://jquery.com/')">jquery</a>-->
				</div>
				<div title="Competency" style="padding:10px">
					<!--<a href="#" class="easyui-linkbutton" onclick="addTab('easyui','http://jeasyui.com/')">easyui</a>-->
				</div>
			</div>
		</div>
		<div data-options="region:'center',title:'Dashboard',iconCls:'icon-ok'">
			<div id="tt" class="easyui-tabs" data-options="fit:true,border:false,plain:false" >
		<div title="Home">
		</div>
	</div>
		</div>

	       {include file="footer.tpl"}
		   
		   