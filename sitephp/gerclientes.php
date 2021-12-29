<?
 include "conecta.php"; //Conecta com a nosso banco de dados MySQL
 include "ver_sessao.php"; //Verifica se a sessão está ativa
?>
<html>
<head>
 <title>Tutorial iMasters</title>
</head>

 <body bgcolor="#FFFFFF" text="#000000">
 <?
  $sql_cliente = "SELECT id_user,date_format(inclusao_user,'%d/%m/%Y - %H:%i') as inclusao_user, nome_user,cidade_user,uf FROM tb_clientes,tb_estados WHERE  tb_estados.id_estado = tb_clientes.estado_user";

  if($pesquisar == 'sim')
      $sql_cliente = $sql_cliente." AND nome_user LIKE '%$pesq%'";

  $sql_cliente = $sql_cliente." ORDER BY inclusao_user";
  $sql_cliente = mysql_query($sql_cliente) or die("Erro no SQL: ".mysql_error());

 ?>
 <br>
  <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td height="60">
    <div align="center"><font face="Arial" size="4"><b>Gerenciamento de Clientes</b></font></div></td>
   </tr>
  </table>

  <br>
  <form name="frm_pesq" method="post" action="<?echo $PHP_SELF?>">
   <table width="75%" border="0" cellspacing="1" cellpadding="0" align="center">
    <tr bgcolor="#6699CC">
     <td colspan="2">
     <div align="center"><font face="Arial" size="2"><b>Pesquisa</b></font></div></td>
    </tr>

    <tr bgcolor="ebebeb">
     <td width="32%"><font face="Arial" size="2">Nome a ser procurado:</font></td>
     <td width="68%"> <font face="Arial" size="2"><input type="text" name="pesq" size="25">
     <input type="submit" name="pesq" value="Pesquisar &gt;&gt;">
     <input type="hidden" name="pesquisar" value="sim"></font></td>
    </tr>
   </table>
  </form>

  <br>
  <?if(mysql_num_rows($sql_cliente) > 0) {?>

<table width="95%" border="0" cellspacing="1" cellpadding="0" align="center">
  <tr bgcolor="#6699CC">
    <td colspan="5">
      <div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Clientes
        cadastrados</font></b></font></div>
    </td>
  </tr>
  <tr bgcolor="cccccc">
    <td width="19%">
      <div align="center"><b><font face="Arial" size="2">Data de inclus&atilde;o</font></b></div>
    </td>
    <td width="33%">
      <div align="center"><b><font face="Arial" size="2">Cliente</font></b></div>
    </td>
    <td width="23%">
      <div align="center"><b><font face="Arial" size="2">Cidade/UF</font></b></div>
    </td>
    <td width="13%">
      <div align="center"><b><font face="Arial" size="2">Alterar </font></b></div>
    </td>
    <td width="12%">
      <div align="center"><b><font face="Arial" size="2">Excluir</font></b></div>
    </td>
  </tr>
<?while($array_cliente = mysql_fetch_array($sql_cliente)) {?>
  <tr bgcolor="ebebeb">
    <td width="19%" height="25"><font face="Arial" size="2">
      <?echo $array_cliente['inclusao_user'];?>
      </font></td>
    <td width="33%" height="25"><font face="Arial" size="2">
      <?echo $array_cliente['nome_user'];?>
      </font></td>
    <td width="23%" height="25"><font face="Arial" size="2">
      <?echo $array_cliente['cidade_user'];?>
      /
      <?echo $array_cliente['uf'];?>
      </font></td>
    <td width="13%" height="25">
      <div align="center"><font face="Arial" size="2">[ <a href='altclientes.php?id_cliente=<?echo $array_cliente['id_user'];?>&acao=entrar'>Alterar</a>
        ]</font></div>
    </td>
    <td width="12%" height="25">
      <div align="center"><font face="Arial" size="2">[ <a href='excluirclientes.php?id_cliente=<?echo $array_cliente['id_user'];?>'>Excluir</a>
        ]</font></div>
    </td>
  </tr>
  <?}?>
</table>
  <?}/* fecha mysql_num_rows > 0 */
  else{
   echo "<br><br><div align=center><font face=Arial size=2>
        Desculpe, mais não achei nada<br><br></font></div>";
  }?>
  <br><div align=center><font face=Arial size=2>
  <a href='opcoes.php'>[ Voltar para o menu de opções ]</a></font></div>
 </body>
</html>

