<HTML>
<HEAD>
<script LANGUAGE="javascript">
function controle() {
document.getElementById('teste').innerHTML = document.form1.campo.value;
}
</SCRIPT>
</HEAD>
<BODY>

<div id="teste"></div>
<FORM NAME="form1">
<INPUT TYPE="text" NAME="campo" VALUE=""><BR>
<INPUT TYPE="button" NAME="botao" VALUE="Controlar" onclick="controle();">
</FORM>
</BODY>
</HTML>
 