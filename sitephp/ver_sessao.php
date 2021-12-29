<?
session_start("imasters");
if(!(session_is_registered("id_imasters") AND    session_is_registered("apelido_imasters") AND   session_is_registered("senha_imasters"))) {
  echo "Essa é uma área restrita";
  exit;
}
?>

