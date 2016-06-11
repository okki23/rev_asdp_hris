<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
	<link rel="stylesheet" type="text/css" href="../assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../assets/themes/icon.css">
	<script type="text/javascript" src="../assets/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/jquery.easyui.min.js"></script>
</head>
<script>
		function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				progress2()
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
		function progress2(){
            var win = $.messager.progress({
                title:'Please waiting',
                msg:'Loading data...'
            });
            setTimeout(function(){
				//$('#tbl').treegrid('reload');
                $.messager.progress('close');
            },1000)
			
        }
	</script>
<!--
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="http://placehold.it/300">
					<span>{$username}</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href=".."><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>-->
	<!-- /navbar -->