<?
  include("templates/body.php");
  include("lib/conexao.php");
  abre_html("Motive-se");
  include("topo.php");
?>
<div id="cols">
 <div id="conteudo">
 <span class="guia">Motive-se</span>
 <h1 id="linha_degrade">Motive-se</h1>
 <?
  $SQL = "SELECT TextoConteudo,TextoImagem FROM texto WHERE TextoID='41'";

  $Result = mysql_query($SQL) or die(mysql_error());

  $TextoConteudo = mysql_result($Result,0,"TextoConteudo");
  $TextoImagem = mysql_result($Result,0,"TextoImagem");
  echo html_entity_decode($TextoConteudo)."\r";
  if($TextoImagem != "")
  echo $TextoImagem;

?>
 </div>
 <? include("menu_lateral.php"); ?>

</div>
<? include("rodape.php"); ?>
<? fecha_html(); ?>

