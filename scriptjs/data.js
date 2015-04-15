// JavaScript Document
data_hoje=new Date();
	dia=data_hoje.getDate();
	diass=data_hoje.getDay();
	dias=new Array("Domingo","Segunda-Feira","Ter�a-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","S�bado");
	ano=data_hoje.getYear();
	if (ano<1900){
	ano=ano+1900;
	}
	mes=data_hoje.getMonth();
	meses=new Array("Janeiro", "Fevereiro","Mar�o", "Abril", "Maio", "Junho", "Julho", "Agosto","Setembro","Outubro","Novembro","Dezembro");
	DataAtual = dias[diass]+", "+dia+" de "+meses[mes]+" de "+ano+"&nbsp; ";
	document.getElementById("data").innerHTML =  DataAtual;
	
	function wordWrap(){
/******
* wordWrap - Efetua quebra em palavras que n�o cabem na largura
*            de seu elemento pai (at� que chegue o CSS3)
* Use a vontade mas coloque meu nome nos cr�ditos. Tenha �tica.
* D�vidas, me mande um email.
* Vers�o: 1.0 - 26/04/2006
* Autor: Micox - N�iron Jos� C. Guimar�es - micoxjcg@yahoo.com.br
* Uso: chame a fun��o no onload do body.
*      coloque a classe "word-wrap" nos par�grafos que quiser a quebra
*******/
    var larg_total,larg_carac,quant_quebra,pos_quebra;
    var elementos,quem, caracs, texto, display_orig;

    elementos = document.getElementsByTagName("p")

    for(var i=0; i<elementos.length;i++){
        if(elementos[i].className=="word-wrap"){
            quem = elementos[i];

            quem.innerHTML = String(quem.innerHTML).replace(/ /g,"�")
            texto = String(quem.innerHTML)

            quem.innerHTML = " "

            display_orig = quem.style.display;
            quem.style.display="block";
            larg_oficial = quem.offsetWidth;
            //alert("oficial: " + larg_oficial)
            //alert("display " + quem.style.display)
            if(!document.all) quem.style.display="table";
            //alert("display " + quem.style.display)
            quem.innerHTML = texto;
            larg_total = quem.offsetWidth;
            //alert("total: " + larg_total)

            pos_quebra = 0;
            caracs = texto.length;
            texto = texto.replace(/�/g," ")
            larg_carac = larg_total / caracs
            if(larg_total>larg_oficial){
                quant_quebra = parseInt(larg_oficial/larg_carac)
                quant_quebra = quant_quebra - (parseInt(quant_quebra/6)) //quanto menor o num, maior a garantia;
                quem.innerHTML = ""
                while(pos_quebra<=caracs){
                    quem.innerHTML = quem.innerHTML + texto.substring(pos_quebra,pos_quebra + quant_quebra) + " "
                    pos_quebra = pos_quebra + quant_quebra;
                }
            }else{
                quem.innerHTML = texto;
            }//end if do larg_total>larg_oficial
            quem.style.display = display_orig;
        }//end if do word wrap
    }//end for loop dos elementos
}

