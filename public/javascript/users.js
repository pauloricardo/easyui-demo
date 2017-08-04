var users = function () {
    return {
        'openDialogSave': openDialogSave,
        'openDialogEdit': openDialogEdit,
        'save': save,
        'delete': deletar
    };
    var _url;
    function openDialogSave() {
        $('#dlg').dialog('open').dialog('setTitle', 'Cadastrar/Editar Usuário');
        $('#fm').form('clear');
        _url = 'actions/users/save.php';
    }
    function openDialogEdit() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg').dialog('open').dialog('setTitle', 'Edit User');
            $('#fm').form('load', row);
            _url = 'actions/users/update.php?id=' + row.id;
        }
    }
    function save() {
        $('#fm').form('submit', {
            url: _url,
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                if (result.errorMsg) {
                    $.messager.show({
                        title: 'Error',
                        msg: result.errorMsg
                    });
                } else {
                    $('#dlg').dialog('close');        // close the dialog
                    $('#dg').datagrid('reload');    // reload the user data
                }
            }
        });
    }
    function deletar() {
        var row = $('#dg').datagrid('getSelected');
        if($row){
            $.messager.confirm('Confirm', 'Tem certeza que deseja deletar?', function(call){
                if(call){
                    $.post('actions/users/delete.php', {id:row.id}, function(result){
                        if (result.success){
                        $('#dg').datagrid('reload');    // reload the user data
                    } else {
                        $.messager.show({    // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                    });
                }
            });
        }
    }
}();