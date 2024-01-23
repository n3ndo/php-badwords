<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];

$lunghezza_originale = strlen($paragrafo);

$paragrafo_censurato = str_replace($parola, '***', $paragrafo);

echo '<h2>Paragrafo originale</h2>';
echo '<p>' . $paragrafo . '</p>';
echo '<p>Lunghezza: ' . $lunghezza_originale . '</p>';

echo '<h2>Paragrafo censurato</h2>';
echo '<p>' . $paragrafo_censurato . '</p>';
echo '<p>Lunghezza: ' . strlen($paragrafo_censurato) . '</p>';

?>
