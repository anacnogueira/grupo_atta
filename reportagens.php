<?
  include("templates/body.php");
  include("lib/conexao.php");
  
  $ReportID = $_POST["ReportID"];
  $dir_imagem="crtcli/banco_imagens/reportagens/";
  $SQLTodas = "SELECT * FROM reportagens WHERE EstagioID = 1 ORDER BY CriacaoData";
  $ResultTodas  = mysql_query($SQLTodas) or die(my_error());

  while($Linha = mysql_fetch_array($ResultTodas))
  {
    if($ReportID == $Linha["ReportID"] or($Linha["ReportDestaque"]==1 and empty($ReportID)))
    {
      $Lista .="<option value='". $Linha["ReportID"]."' selected>".$Linha["ReportTitulo"]."</option>\r";
    }
    else
    {
      $Lista .="<option value='". $Linha["ReportID"]."'>".$Linha["ReportTitulo"]."</option>\r";
    }
}

//Notícia Unica
$SQLUnica = "SELECT * FROM reportagens";
if(!empty($ReportID))
{
 $SQLUnica .= " WHERE  ReportID = ".$ReportID;
}
else
{
 $SQLUnica .= " WHERE ReportDestaque = 1";
}
$ResultUnica = mysql_query($SQLUnica) or die(mysql_error());
$ReportTitulo=mysql_result($ResultUnica,0,'ReportTitulo');
$ReportTexto=mysql_result($ResultUnica,0,'ReportTexto');
$ReportImagem=mysql_result($ResultUnica,0,'ReportImagem');

$ReportagemTexto .= "<tr>\r";
$ReportagemTexto .=  "<td>\r";
$ReportagemTexto .="<h2 style='margin-left: 45px'>".$ReportTitulo."</h2>\r";
if($ReportImagem != "")
{
  $ReportagemTexto .="<img src='".$dir_imagem.$ReportImagem."'  alt='".$ReportTitulo."' />\r";
}
$ReportagemTexto .= html_entity_decode($ReportTexto);
$ReportagemTexto .="</td>\r";
$ReportagemTexto .="</tr>\r";

  abre_html($title);
  include("topo.php");
?>
<div id="cols">
 <div id="conteudo">
 <span class="guia">Reportagens &raquo; <?= $ReportTitulo?></span>
 <h1 id="linha_degrade">Reportagens</h1>
 <form name="frm_reportagem" method="post" action="reportagens.php">
 <span><strong>Escolha a reportagem abaixo:</strong></span>
 <table  border="0" cellpadding="0" cellspacing="0">
<tr>
 <td>
<select name="ReportID" style="width:450px">
<?= $Lista ?>
</select>
<input type="submit" name="btn_ok" value="OK" />
</td>
</tr>

<tr><td height="10"></td></tr>
<?=  $ReportagemTexto ?>

</table>
</form>
 </div>
 <? include("menu_lateral.php"); ?>

</div>
<? include("rodape.php"); ?>
<? fecha_html(); ?>

