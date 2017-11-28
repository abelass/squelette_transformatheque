<?php
/**
 * Fonctions utiles au plugin Squelette transformathèque
 *
 * @plugin     Squelette transformathèque
 * @copyright  2017
 * @author     Rainer
 * @licence    GNU/GPL
 * @package    SPIP\Transformatheque\Fonctions
 */
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Retourne les langues de l'article
 *
 * @param string $id_article
 * @param mixed $separateur
 *        	Ce qui entoure le résultat
 *
 */
function article_langues($id_article, $separateur = '') {
	if (is_array($separateur)) {
		list($sep, $sep_fin) = $separateur;
		$sep = $separateur[0];
		$sep_fin = $separateur[1];
	}
	else
		$sep = $separateur;

	if (!$sql = sql_select('lang', 'spip_articles', 'id_trad!=0 AND id_trad=' . $id_article))
		$sql = sql_select('lang', 'spip_articles', 'id_trad!=0 AND id_article=' . $id_article);

	$langues = '';
	while ($data = sql_fetch($sql)) {
		$langues = concat($langues, $sep . $data['lang'] . $sep_fin);
	}

	return $langues;
}