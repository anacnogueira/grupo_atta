/*Menu Drop Down */
function startList() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
  }
  node.onmouseout=function() {
  this.className=this.className.replace
	(" over", "");
   }
   }
  }
 }
}

function teste(MenuName){
//alert(MenuName);
 document.getElementById(MenuName).style.display = "block";

}

function nada(MenuName){
//alert(MenuName);
 document.getElementById(MenuName).style.display = "none";

}
window.onload= function(){
  startList();
  
  }
