<html>
<head>
<link rel="stylesheet" type="text/css" href="{$link}assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="{$link}assets/themes/icon.css">
	<script type="text/javascript" src="{$link}assets/jquery.min.js"></script>
	<script type="text/javascript" src="{$link}assets/jquery.easyui.min.js"></script>

</head>	
	
	
		<div class="ftitle">Setting Organization</div>
		<form action="{$link}orm/update" method="post" novalidate>
		<input type=hidden name="id" value="{$id}">
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Company:</label>
				<input name="company" value="{$kdcp}" data-options="prompt:'Company Code'" class="easyui-textbox">
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Organization:</label>
				<input name="code" value="{$kode}" data-options="prompt:'Code'" class="easyui-textbox" required="true"> - <input data-options="prompt:'Name'" name="name" value="{$name}" class="easyui-textbox" required>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Area:</label>
				<!--<input name="area" class="easyui-textbox" value="{$area}">-->
				<select class="easyui-combobox" name="area" style="width:120px;">
				{if $area == "D"}
				<option value="">Pilih</option>
                <option value="D" selected=selected>Darat</option>
                <option value="L">Laut</option>
				{elseif $area == "L"}
				<option value="">Pilih</option>
                <option value="D" >Darat</option>
                <option value="L" selected=selected>Laut</option>
				{else}
				<option value="">Pilih</option>
                <option value="D">Darat</option>
                <option value="L">Laut</option>
				{/if}
            </select>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Parent Code:</label>
				<input name="parentname" value="{$parentcode} - {$parentname}" class="easyui-textbox" readonly style="width:250px;">
				<input type=hidden name="parentcode" value="{$parentcode}">
				<!--<input id="cc" style="width:320px;" class="easyui-combobox" name="parentcode" data-options="prompt:'Parent Code',valueField:'code',textField:'name',url:'{$link}orm/datacombo'" >-->
				</div>
			</div>
			<div class="fitem" style="font-size:10px;">
				<label style="width:120px;">Periode:</label>
            <input style="width:100px;" name="datestart" value="{$datenow}" class="easyui-datebox" > - 
            <input style="width:100px;" name="dateend" value="{$enddate}" class="easyui-datebox" >
			</div>
			<button type="submit" class="easyui-linkbutton c6" iconCls="icon-ok">Save</button>
		</form>
	
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
	<script>	
$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		return (d<10?('0'+d):d)+'-'+(m<10?('0'+m):m)+'-'+y;
	};
	$.fn.datebox.defaults.parser = function(s){
		if (!s) return new Date();
		var ss = s.split('-');
		var d = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var y = parseInt(ss[2],10);
		if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
			return new Date(y,m-1,d);
		} else {
			return new Date();
		}
	};
</script>			