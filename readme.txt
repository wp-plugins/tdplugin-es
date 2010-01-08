=== TradeDoubler ES ===
Contributors: sergio.martinez
Tags: tradedoubler,td,affiliate,afiliados,tdplugin,tdplugin-es
Requires at least: 2.0.2
Tested up to: 2.8
Stable tag: trunk

Facilita la publicaci&oacute;n para afiliados.

== Description ==

El plugin servir&aacute; para la publicaci&oacute;n autom&aacute;tica de posts con anuncios. Funciona realizando una b&uacute;squeda 
mediante unas palabras claves de productos en los cuales el afiliado est&aacute; inscrito y public&aacute;ndolos 
autom&aacute;ticamente con 2 estilos distintos, manteni&eacute;ndose el tracking para el afiliado.

en el campo de texto para postear deberemos introducir:
   [td tdquery="palabra clave aqu&iacute;" tdno="20" tdpg="0" tdmid="12345,234,189" tdcat="68" tdprice="20_200" td_estilo="1 o 2" prodfila="2"]

Donde:
-	Tdquery: palabras clave sobre las que realizaremos la b&uacute;squeda
-	Tdno: n&uacute;mero de resultados que queremos mostrar
-	Tdpg: el n&uacute;mero de resultado sobre el que queremos que se empiece a mostrar
-	Tdmid: el identificador del comerciante, si son varios separados por comas.
-	Tdcat: la categoría sobre la que realizar la b&uacute;squeda (<a href="http://tdblog.es/wp-content/uploads/2010/01/PF-categories-20091029.pdf">Listado</a>)
-	Tdprice: el intervalo del precio sobre el que realizar la b&uacute;squeda
-	Td_estilo: de momento existen 2 estilos de presentaci&oacute;n:
o	1: El primero permite seleccionar al usuario cuantos resultados mostrar por filas mediante la variable el argumento “prodFila”.
o	2: El segundo mostrara un resultado por fila ocupando prácticamente la anchura de la pagina
-	prodFila: permitir&aacute; al usuario seleccionar el n&uacute;mero de resultados a mostrar por cada fila.

== Installation ==

habr&aacute; que ir al men&uacute; “Settings/TradeDoubler XML Wordpress Plugin”, donde deberemos introducir nuestro id de 
afiliado y el tiempo que residir&aacute;n los ficheros XML resultado de nuestras b&uacute;squedas en la memoria cach&eacute; 
del servidor donde tengamos hospedada nuestra pagina web.

== Changelog ==

= 1.0 =
* Primera Version del plugin

= 1.1 =
* Solucionado problema con tdcat y tiempo de cache

== Arbitrary section ==

Se recomienda visitar http://tdblog.es/ para mas informacion

