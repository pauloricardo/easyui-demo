<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
        closed="true" buttons="#dlg-buttons">
    <div class="ftitle">Informações de usuário</div>
    <form id="fm" method="post" novalidate>
        <div class="fitem">
            <label>Usuário:</label>
            <input name="usuario" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Telefone:</label>
            <input name="telefone" class="easyui-textbox" required="true">
        </div>
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="users.save()" style="width:90px">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>