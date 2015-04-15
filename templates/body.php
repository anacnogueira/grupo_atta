<?
/*-------------------------------------------------------------|*
*|     Sistema: Grupo Atta - Site Principal                    |*
*|   Descrição: Arquivo de funções do corpo                    |*
*|      Criado: 21/01/2006 | Por: Ana Claudia                  |*
*|  Modificado: __/__/___  | Por: Ana Claudia                  |*
*|-------------------------------------------------------------|*/
function abre_html($title)
{

  echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>";
?>
  <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
  <html xmlns='http://www.w3.org/1999/xhtml'>
   <head>
     <meta http-equiv='Content-Type'content='text/html; charset=iso-8859-1' />
     <meta name='revisit-after' content='4' />
     <meta name='title' content='Grupo Atta' />
     <meta name='description' content='Consultoria em talentos Humanos' />
     <meta name='keywords' content='RH, Vagas, Canididato, Consultoria,empresa' />
     <meta name='robots' content='ALL' />
     <meta name='rating' content='General' />
     <meta name='author' content='Ana Claudia Nogueira' />
     <meta name='language' content='pt-br' />
     <link rel='shortcut icon' href='banco_imagens/logo.ico' />
     <link href='templates/interface.css' rel='stylesheet' type='text/css' />
     <!--[if IE]>
       <link href='templates/interfaceie.css' rel='stylesheet' type='text/css' />
       <![endif]-->
     <script src='templates/info_link.js'type='text/javascript'></script>
    <title>Grupo Atta - <?=$title?></title>
    <script type='text/javascript'>
    <!--
    function mmLoadMenus() {
      if (window.mm_menu_1109222137_0) return;
      window.mm_menu_1109222137_0 = new Menu('root',120,18,'Arial, Helvetica, sans-serif',12,'#000000','#FFFFFF','#CCCCCC','#FF9900','left','middle',3,0,1000,-5,7,true,true,true,0,false,true);
      mm_menu_1109222137_0.addMenuItem('Missão',"location='missao.php'");
      mm_menu_1109222137_0.addMenuItem('Valores',"location='valores.php'");
      mm_menu_1109222137_0.addMenuItem('Crença',"location='crenca.php'");
      mm_menu_1109222137_0.hideOnMouseOut=true;
      mm_menu_1109222137_0.bgColor='#555555';
      mm_menu_1109222137_0.menuBorder=1;
      mm_menu_1109222137_0.menuLiteBgColor='#CCCCCC';
      mm_menu_1109222137_0.menuBorderBgColor='#999999';
      window.mm_menu_1109225100_0 = new Menu('root',227,18,'Arial, Helvetica, sans-serif',12,'#000000','#FFFFFF','#CCCCCC','#FF9900','left','middle',3,0,100,-5,7,true,true,true,0,false,true);
      mm_menu_1109225100_0.addMenuItem('MBTI',"location='mbti.php'");
      mm_menu_1109225100_0.addMenuItem('Grafoanálise',"location='grafoanalise.php'");
      mm_menu_1109225100_0.addMenuItem('Instrumentos&nbsp;específicos&nbsp;para&nbsp;avaliação',"location='instrumentos.php'");
      mm_menu_1109225100_0.addMenuItem('Competências',"location='competencias.php'");
      mm_menu_1109225100_0.addMenuItem('Nossos serviços',"location='servicos.php'");
      mm_menu_1109225100_0.hideOnMouseOut=true;
      mm_menu_1109225100_0.bgColor='#555555';
      mm_menu_1109225100_0.menuBorder=1;
      mm_menu_1109225100_0.menuLiteBgColor='#CCCCCC';
      mm_menu_1109225100_0.menuBorderBgColor='#999999';
      mm_menu_1109225100_0.writeMenus();
      } // mmLoadMenus()
      //-->
      </script>
   </head>
   <body>
   <script src="mm_menu.js" language="JavaScript" type="text/javascript"></script>
  <script language="JavaScript1.2" type="text/javascript">mmLoadMenus();</script>
<?
}

function fecha_html(){
?>
      <!--script src='scriptjs/data.js' type='text/javascript'></script-->
    </body>
  </html>
<?  }
?>
