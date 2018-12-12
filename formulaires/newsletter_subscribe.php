<?php
/**
 * Plugin mailsubscribers
 * (c) 2012 Cédric Morin
 * Licence GNU/GPL v3
 */

if (!defined('_ECRIRE_INC_VERSION'))
	return;

include_spip('inc/actions');
include_spip('inc/mailsubscribers');

/**
 * Declarer les champs postes et y integrer les valeurs par defaut
 - ajout nom, listes et listes_dispo
 */
function formulaires_newsletter_subscribe_charger_dist() {
	
	if (isset($GLOBALS['visiteur_session']['email']))
		$session_email = $GLOBALS['visiteur_session']['email'];
	elseif (isset($GLOBALS['visiteur_session']['session_email']))
		$session_email = $GLOBALS['visiteur_session']['session_email'];
	
	if($session_email){
		if($valeurs=sql_fetsel('*','spip_mailsubscribers','email='.sql_quote($session_email))){
			$valeurs ['session_email']=$session_email;
		}
		else{
			$valeurs = array(
				'session_email' => '',
				'nom' => '',
				'listes' => ''
				);
		}
	}
	if(!$valeurs){
		$valeurs = array(
		'session_email' => '',
		'nom' => '',
		'listes' => ''
		);
	}
	
	$valeurs['listes'] = explode(',',$valeurs['listes']);
	$valeurs['_listes_dispo'] = mailsubscribers_listes();

	return $valeurs;
}

/**
 * Verifier les champs postes et signaler d'eventuelles erreurs
 */
function formulaires_newsletter_subscribe_verifier_dist() {

	$erreurs = array();
	if (!$email = _request('session_email')) {
		$erreurs['session_email'] = _T('info_obligatoire');
	} else {
		// verifier que l'email est valide
		if (!email_valide($email))
			$erreurs['session_email'] = _T('info_email_invalide');
	}
	
	if (!_request('listes')) {
		$erreurs['listes'] = _T('info_obligatoire');
	} 
	return $erreurs;
}

/**
 * Traiter les champs postes
 - ajout listes et nom
 */
function formulaires_newsletter_subscribe_traiter_dist() {

	// langue par defaut lors de l'inscription : la langue courante dans la page
	$options = array('lang' => $GLOBALS['spip_lang']);
	$email = _request('session_email');
	$options['listes'] = _request('listes');
	$options['nom'] = _request('nom');

	$newsletter_subscribe = charger_fonction("subscribe", "newsletter");
	$newsletter_subscribe($email, $options);

	set_request('email');
	return array(
		'message_ok' => _T('newsletter:subscribe_message_ok', array('email' => $email)),
		'editable' => true
	);
}

