<?
 include "conecta.php" //Conecta com a nosso banco de dados MySQL
 include "ver_sessao.php" //Verifica se a sessão está ativa
?>
<html>
<head>
 <title>Tutorial iMasters</title>
</head>

 <body bgcolor="#FFFFFF" text="#000000">
 <br>
  <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td height="60">
    <div align="center"><font face="Arial" size="4"><b>Cadastro de Clientes</b></font></div></td>
   </tr>
  </table>
  <br>

 <?
 if($acao == 'cadastrar') { /*Cadastra o cliente depois que o formulário for enviado */
  //Verifica os dados enviados
  if($nome_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Nome";
  }

  if($end_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Endereço";
  }

  if($bairro_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Bairro";
}

  if($email_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Email";
  }

  if($tel_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Telefone";
  }

  if($cidade_user == '') {
   $erros++;
   $html_erros = $html_erros."<br>Cidade";
  }

  if($estado_user == 0) {
   $erros++;
   $html_erros = $html_erros."<br>Estado";
  }

  if($erros == 0) { //Se não tiver nenhum erro, faz a inclusão
   $sql = mysql_query("INSERT INTO tb_clientes(inclusao_user,nome_user,end_user,bairro_user,email_user,
          tel_user,cidade_user,estado_user) VALUES(now(),'$nome_user','$end_user','$bairro_user',
          '$email_user','$tel_user','$cidade_user','$estado_user')",$con)
          or die("Erro no comando SQL:".mysql_error());

   echo "<div align=center><font face=Arial size=2>Cliente cadastrado com Sucesso!!
        <br><br><a href='javascript:history.go(-2)'><< Voltar</a></font></div><br><br>";
   } //fecha $erros == 0
   else {
    echo "<div align=center><font face=Arial size=2><b>ATENÇÃO</b><br><br>Foram encontrados <b>$erros</b>
          erro(s) no cadastro do cliente:<br><b>$html_erros</b>
        <br><br><a href='javascript:history.go(-1)'><< Voltar</a></font></div><br><br>";
   }//fecha else
 } /*fecha acao= cadastrar*/ ?>

 <?
 if($acao == 'entrar') { /*Mostra o formulário de cadastro de clientes */

  $sql_estados = mysql_query("SELECT * FROM tb_estados ORDER BY estado",$con)
         or die("ERRO no comando SQL:".mysql_error());
 ?>

<form name="frm_clientes" method="post" action="<?echo $PHP_SELF;?>?acao=cadastrar">
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
     <td width="24%" height="25"><font face="Arial" size="2">Nome:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="nome_user" size="35"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Endere&ccedil;o:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="end_user" size="30"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Bairro:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="bairro_user" size="30"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Email:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="email_user" size="35"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Telefone:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="tel_user" size="20"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Cidade:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="cidade_user" size="35"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Estado:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <select name="estado_user">
      <option value="0"><< Selecione o estado >></option>
      <?while($array = mysql_fetch_array($sql_estados)) {?>
       <option value="<?echo $array['id_estado'];?>"><?echo $array['estado'];?></option>
      <?}?>
     </select></font></td>
    </tr>
<tr>
     <td height="25" colspan="2">
     <div align="center">
     <input type="submit" name="cadastrar" value="Cadastrar cliente &gt;&gt;"></div></td>
    </tr>
   </table>
  </form>
  <?} /*fecha acao=entrar */?>
 </body>
</html>

