<?php
$doctype  = "<!DOCTYPE html>\n";
echo $doctype;
$html  = "<html lang=\"es\">\n";
$html .= "<head>\n";
$html .= "\t<title>Generación de código HTML con PHP</title>\n";
$html .= "\t<meta charset=\"utf-8\">\n";
$html .= "\t<meta name=\"viewport\" content=\"width=device-width,user- scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0\" />\n";
$html .= "\t<link rel=\"stylesheet\" 
href=\"http://fonts.googleapis.com/css?family=Hammersmith+One\" />\n";
$html .= "\t<link rel=\"stylesheet\" 
href=\"http://fonts.googleapis.com/css?family=Hammersmith+One\" />\n";
$html .= "\t<script src=\"js/modernizr.custom.lis.js\"></script>\n"; //Agregando estilo
$html .= "\t<style type=\"text/css\">\n";
$html .= "\t\tbody   {\n";
$html .= "\t\t\tbackground-color: ;\n";
$html .= "\t\t\tbackground-repeat:repeat-y;\n";
$html .= "\t\t\tbackground-color:#DFFCF6;\n";
$html .= "\t\t\tfont-size:16px;\n";
$html .= "\t\t\tmargin-left:175px;\n";
$html .= "\t\t}\n";
$html .= "\t\th1     {\n";
$html .= "\t\t\ttext-align:center;\n";
$html .= "\t\t\tfont-family:\"Hammersmith One\";\n";
$html .= "\t\t\tfont-weight:900;\n";
$html .= "\t\t\tfont-size:2.5em;\n";
$html .= "\t\t\tcolor:#16309a;\n";
$html .= "\t\t}\n";
$html .= "\t\tul {\n";
$html .= "\t\t\tlist-style-type: none;\n";
$html .= "\t\t\tpadding: 0px;\n";
$html .= "\t\t\tmargin: 0px;\n";
$html .= "\t\t}\n";
$html .= "\t\tul li {\n";
$html .= "\t\t\tbackground-image: url();\n";
$html .= "\t\t\tbackground-repeat: no-repeat;\n";
$html .= "\t\t\tbackground-position: 0 center;\n";
$html .= "\t\t\tpadding-left: 20px;\n";
$html .= "\t\t}\n";
$html .= "\t\tp,li    {\n";
$html .= "\t\t\tfont-family:\"Century Gothic\";\n";
$html .= "\t\t\tfont-weight:400;\n";
$html .= "\t\t\tfont-size:1em;\n";
$html .= "\t\t\tcolor:#16309a;\n";
$html .= "\t\t}\n";
$html .= "\t</style>\n";
$html .= "</head>\n";
$html .= "<body>\n";
$html .= "<header>\n";
$html .= "\t<h1>Tecnologías del lado del servidor</h1>\n";
$html .= "</header>\n";
$html .= "<section>\n";
$html .= "<article>\n";
$html .= "\t<p>\n";
$html .=  "\t\tExisten varias  tecnologías,  entre  ellas  lenguajges,  \n";
$html .= "\t\tpara realizar scripts que se \n";
$html .= "\t\tejecutan del lado del servidor. \n";
$html .= "\t\tEntre los más destacados podemos mencionar:\n";
$html .= "\t</p>\n";
$html .= "\t<ul>\n";
$html .= "\t\t<li>PHP (Hypertext PreProcesor)</li>\n";
$html .= "\t\t<li>ASP (Active Server Pages)</li>\n";
$html .= "\t\t<li>JSP (Java Servlet Pages)</li>\n";
$html .= "\t\t<li>CGI (Commom Gateway Interface)</li>\n";
$html .= "\t</ul>\n";
$html .= "</article>\n";
$html .= "</section>\n";
$html .= "</body>\n";
$html .= "</html>\n";
echo $html;
?>