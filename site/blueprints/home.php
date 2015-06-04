<?php if (!defined('KIRBY')) {
	exit;
}
?>

title: Home
pages: false
files:
    type: image
fields:
  title:
    label: Title2
    type:  text
  text:
    label: Noticias
    type:  textarea
    size:  large
  header:
    label: Mostrar Noticias ?
    type: checkbox
    text: Queres mostrar a caixa das noticias na HOME page?