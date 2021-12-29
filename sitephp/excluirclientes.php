<?
 include "conecta.php"; //Conecta com o banco de dados MySQL
 include "ver_sessao.php"; //Verifica se a sessão está ativa

 $sql_del = mysql_query("DELETE FROM tb_clientes WHERE id_user='$id_cliente'")
            or die("Erro no SQL: ".mysql_error());
 echo "<br><br><div align=center><font face=Arial size=2>Cliente EXCLUÍDO com Sucesso!
      <br><br><a href='opcoes.php'>[ Voltar para o menu de opções ]</a> </font></div><br>";
?>
