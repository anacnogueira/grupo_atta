<?
  include("templates/body.php");
  abre_html("Mapa do site");
  include("topo.php");
?>
<div id="cols">
 <div id="conteudo">
 <span class="guia">Mapa do site</span>
 <h1 id="linha_degrade">Mapa do site</h1>
 <ul class="tree_mapasite">
 <li><b>Empresa</b>
  <ul class="tree_mapasiteinside">
	 <li><a href="missao.php" onMouseOver="infoLink('Miss�o');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Miss�o</a></li>
	 <li><a href="valores.php" onMouseOver="infoLink('Valores');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Valores</a></li>
	 <li><a href="crenca.php" onMouseOver="infoLink('Cren�a');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Cren�a</a></li>
  </ul>
</li>
<li><b>Ferramentas</b>
  <ul class="tree_mapasiteinside">
	 <li><a href="mbti.php" onMouseOver="infoLink('MBTI');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">MBTI</a></li>
	 <li><a href="grafoanalise.php" onMouseOver="infoLink('Grafoan�lise');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Grafoan�lise</a></li>
   <li><a href="instrumentos.php" onMouseOver="infoLink('Instrumentos Espec�ficos para avalia��o');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Intrumentos espec�ficos para avalia��o</a></li>
   <li><a href="competencias.php" onMouseOver="infoLink('Compet�ncias');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Compet�ncias</a></li>
  <li><a href="servicos.php" onMouseOver="infoLink('Nossos Servi�os');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Nossos servi�os</a></li>
 </ul>
 </li>
<li><b>Talentos Humanos</b>
  <ul class="tree_mapasiteinside">
		 <li><a href="talentos_humanos.php" onMouseOver="infoLink('Talentos Humanos');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Talentos humanos</a></li>
  </ul>
 <li><b>Localiza��o</b>
    <ul class="tree_mapasiteinside">
		 <li><a href="localizacao.php" onMouseOver="infoLink('Localiza��o');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Localiza��o</a></li>
    </ul>
 </li>
<li><b><a href="motivese.php" onMouseOver="infoLink('Motive-se');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Motive-se</a></b></li>
<li><b><a href="reportagens.php" onMouseOver="infoLink('Reportagens');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Reportagens</a></b></li>
<li><b><a href="mailto:selecao@grupoatta.com.br" onMouseOver="infoLink('Cadastre seu curr�culo');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Cadastre seu curr�culo</a></b></li>
<li><b><a href="oportunidades.php" onMouseOver="infoLink('Oportunidades');return document.valourtrue" onMouseOut="vazio()" class="cinzaescuro">Oportunidades</a></b></li>

</ul>
 </div>
 <? include("menu_lateral.php"); ?>

</div>
<? include("rodape.php"); ?>
<? fecha_html(); ?>

