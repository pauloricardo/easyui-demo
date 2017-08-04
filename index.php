<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasyUI Teste</title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
</head>
<body>
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:550px;height:250px"
        url="actions/users/list.php"
        toolbar="#toolbar"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="id" width="50">#</th>
            <th field="usuario" width="50">Usuario</th>
            <th field="telefone" width="50">Telefone</th>
        </tr>
    </thead>

</table>
<div id="toolbar">
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="users.openDialogSave()">New User</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="users.openDialogEdit()">Edit User</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="users.destroyUser()">Remove User</a>
</div>
</body>

<?php include_once 'views/users/persist_modal.php'; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
<script src="public/javascript/users.js"></script>
</html>