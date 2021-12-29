<?
 include "conecta.php"; //Arquivo que conecta com o MySQL

 if(($apelido_login) AND ($senha_login)) { //Ele entra nessa condição se as duas variáveis não estiverem vazia

$sql = mysql_query("SELECT * FROM tb_user WHERE apelido='$apelido_login' AND senha='$senha_login'",$con) or die("ERRO no comando SQL :".mysql_error());

if(mysql_num_rows($sql) > 0) {
 $id_imasters = mysql_result($sql,0,"id_user");
 $apelido_imasters = mysql_result($sql,0,"apelido");
 $senha_imasters = mysql_result($sql,0,"senha");

 session_start("imasters"); //Inicializa uma sessão
 session_register("id_imasters","apelido_imasters","senha_imasters"); //Registra as variáveis na sessão
 header("Location:opcoes.php"); //Redireciona para a página de opções
 }
}
?>
<html>
<head>
 <title>Tutorial iMasters</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">

 <form name="frm_login" method="post" action="<?echo $PHP_SELF;?>">
  <table width="40%" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <td colspan="2"><b><font face="Arial" size="3">IDENTIFICA&Ccedil;&Atilde;O</font></b></td>
   </tr>

   <tr>
    <td width="33%" height="25"><font face="Arial" size="2">Apelido:</font></td>
    <td width="67%" height="25"><font face="Arial" size="2">
    <input type="text" name="apelido_login"></font></td>
   </tr>

   <tr>
    <td width="33%" height="25"><font face="Arial" size="2">Senha:</font></td>
    <td width="67%" height="25"><font face="Arial" size="2"><input type="password" name="senha_login"></font></td>
   </tr>

   <tr>
    <td colspan="2"><input type="submit" name="entrar" value="Entrar &gt;&gt;"></td>
   </tr>
  </table>
 </form>
</body>
</html>

