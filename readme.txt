=== TradeDoubler ES ===
Contributors: sergio.martinez
Tags: tradedoubler,td,affiliate,afiliados,tdplugin,tdplugin-es
Requires at least: 2.0.2
Tested up to: 2.8
Stable tag: 4.3

Facilita la publicación para afiliados.

== Description ==

El plugin servirá para la publicación automática de posts con anuncios. Funciona realizando una búsqueda 
mediante unas palabras claves de productos en los cuales el afiliado está inscrito y publicándolos 
automáticamente con 2 estilos distintos, manteniéndose el tracking para el afiliado.

en el campo de texto para postear deberemos introducir:
   [td tdquery="your keywords here" tdno="20" tdpg="0" tdmid="12345,234,189" tdcat="68" tdprice="20_200" td_estilo="1 o 2" prodfila="2"]

Donde:
-	Tdquery: palabras clave sobre las que realizaremos la búsqueda
-	Tdno: numero de resultados que queremos mostrar
-	Tdpg: el numero de resultado sobre el que queremos que se empiece a mostrar
-	Tdmid: el identificador del comerciante, si son varios separados por comas.
-	Tdcat: la categoría sobre la que realizar la búsqueda
-	Tdprice: el intervalo del precio sobre el que realizar la búsqueda
-	Td_estilo: de momento existen 2 estilos de presentación:
o	1: El primero permite seleccionar al usuario cuantos resultados mostrar por filas mediante la variable el argumento “prodFila”.
o	2: El segundo mostrara un resultado por fila ocupando prácticamente la anchura de la pagina
-	prodFila: permitirá al usuario seleccionar el numero de resultados a mostrar por cada fila.

== Installation ==

habrá que ir al menú “Settings/TradeDoubler XML Wordpress Plugin”, donde deberemos introducir nuestro id de 
afiliado y el tiempo que residirán los ficheros XML resultado de nuestras búsquedas en la memoria cache 
del servidor donde tengamos hospedada nuestra pagina web.

== Changelog ==

= 1.0 =
* Primera Version del plugin

== Arbitrary section ==

Se recomienda visitar http://tdblog.es/ para mas informacion

