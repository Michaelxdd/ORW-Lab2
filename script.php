<pre><?php
/* Znacznik pre uatrakcyjnia widok strony*/

require('simple_html_dom.php');
/* Biblioteka, która umożliwia nam pobieranie określonych elementów ze strony www. */

/* Tablica, w której mamy wszystkie pobrane wartości.*/
$html = file_get_html("https://www.youtube.com/user/Michaelxdd1/about");
$tabl ['Nazwa kanału'] = $html->find(".branded-page-header-title-link",0)->title; /*Wypisanie nazwy kanału. 0 jest potrzebne
aby pokazać pierwszy element na stronie.*/
$tabl ['Opis kanału'] = $html->find(".about-description p",0)->innertext; /*Wypisanie opisu kanału.*/
$tabl ['Awatar użytkownika'] = $html->find(".channel-header-profile-image",0)->src; /*Pobranie obrazka ze strony.*/
$tabl ['Ilość subskrypcji'] = $html->find(".about-stat b",0)->innertext; /*Wypisanie ilości subskrypcji.*/
$tabl ['Mój G+'] = $html->find(".about-channel-link-icon",0)->alt; /* Pobranie adresu do profilu w G+*/

/* W tym miejscu wypisujemy zmienne tablicy.*/
print_r($tabl);
?>
