function cambiarColor(municipio) {
 var path=document.getElementById("estado").getSVGDocument().getElementById(municipio);
 path.style.setProperty("fill","#2196f3", "");
}

function cambiarSize(width, height) {
 var path=document.getElementById("estado").getSVGDocument().getElementById("svg2");
 path.setAttribute("width",width, "");
 path.setAttribute("height",height, "");
}
