<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Home';
$lng['navbar']['login'] = 'Login';
$lng['navbar']['logout'] = 'Logout';
$lng['navbar']['recent_ads'] = 'Aktuelle Inserate';
$lng['navbar']['register'] = 'Registrieren';
$lng['navbar']['submit_ad'] = 'Inserat aufgeben';
$lng['navbar']['editad'] = 'Inserat bearbeiten';
$lng['navbar']['my_account'] = 'Mein Konto';
$lng['navbar']['administrator_panel'] = 'Login Administration';
$lng['navbar']['contact'] = 'Kontakt';
$lng['navbar']['password_recovery'] = 'Passwort vergessen';
$lng['navbar']['feature_listing'] = 'VIP Inserate';
$lng['navbar']['renew_listing'] = 'Liste aktualisieren';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Senden';
$lng['general']['search'] = 'Suchen';
$lng['general']['contact'] = 'Kontakt';
$lng['general']['advanced_search'] = 'Erweiterte Suche';
$lng['general']['activeads'] = 'Aktive Inserate';
$lng['general']['activead'] = 'Aktives Inserat';
$lng['general']['subcats'] = 'Unterkategorien';
$lng['general']['subcat'] = 'Unterkategorie';
$lng['general']['view_ads'] = 'Inserat ansehen';
$lng['general']['back'] = 'zurück';
$lng['general']['goto'] = 'gehe zu';
$lng['general']['page'] = 'Seite';
$lng['general']['of'] = 'von';
$lng['general']['other'] = 'Anderes';
$lng['general']['NA'] = 'nicht erhältlich';
$lng['general']['add'] = 'hinzufügen';
$lng['general']['delete_all'] = 'Gesamte Auswahl löschen';
$lng['general']['action'] = 'Aktion';
$lng['general']['edit'] = 'Bearbeiten';
$lng['general']['delete'] = 'Löschen';
$lng['general']['total'] = 'Gesamtpreis';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = 'Sie besitzen keine ausreichenden Rechte um diese Seite aufzurufen!';
$lng['general']['access_restricted'] = 'Diese Seite wurde eingeschränkt!';
$lng['general']['featured_ads'] = 'VIP Inserate';
$lng['general']['latest_ads'] = 'Neueste Inserate';
$lng['general']['quick_search'] = 'Schnelle Suche';
$lng['general']['go'] = 'Go';
$lng['general']['unlimited'] = 'Unbegrenzt';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Eine Datei mit dem gleichen Namen existiert bereits und kann deshalb nicht überschrieben werden!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Es ist leider nicht möglich, grössere Dateien als :MAX_FILE_UPLOAD_SIZE::K  zu übermitteln!'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'Die Abmessungen des Bildes sind leider zu gross! Die Maximalgrösse beträgt ::MAX_FILE_WIDTH::px in der Breite und ::MAX_FILE_HEIGHT::px in der Höhe !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Die Datei konnte nicht hochgeladen werden!';
$lng['images']['errors']['no_file'] = 'Bitte wählen Sie eine Datei zum hochladen!';
$lng['images']['errors']['no_folder'] = 'Diese Datei existiert nicht!';
$lng['images']['errors']['folder_not_writeable'] = 'Dieser Ordner besitzt keine Schreibrechte!';
$lng['images']['errors']['file_type_not_accepted'] = 'Dieser Dateityp kann leider nicht hochgeladen werden!';
$lng['images']['errors']['error'] = 'Es gab einen Fehler während der Übertragung. Die Fehlermeldung lautet: ::ERROR::'; // svp laisse intacte ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Der Ordner für Thumbnails existiert nicht!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Der Ordner Thumbnail besitzt keine Schreibrechte!';
$lng['images']['errors']['no_jpg_support'] = 'JPG nicht kompatibel!';
$lng['images']['errors']['no_png_support'] = 'PNG nicht kompatibel!';
$lng['images']['errors']['no_gif_support'] = 'GIF nicht kompatibel!';
$lng['images']['errors']['jpg_create_error'] = 'Fehler in der JPG Erstellung!';
$lng['images']['errors']['png_create_error'] = 'Fehler in der PNG Erstellung!';
$lng['images']['errors']['gif_create_error'] = 'Fehler in der GIF Erstellung!';


// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Login';
$lng['login']['logout'] = 'Logout';
$lng['login']['username'] = 'Benutzername';
$lng['login']['password'] = 'Passwort';
$lng['login']['forgot_pass'] = 'Passwort vergessen? ';
$lng['login']['click_here'] = 'Hier klicken';

$lng['login']['errors']['password_missing'] = 'Bitte Passwort eingeben!';
$lng['login']['errors']['username_missing'] = 'Bitte Benutzername eingeben!';
$lng['login']['errors']['username_invalid'] = 'Ihr Benutzername ist ungültig!';
$lng['login']['errors']['invalid_username_pass'] = 'Ihr Benutzername oder Passwort ist ungültig!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Logout';
$lng['logout']['loggedout'] = 'Sie sind ausgeloggt!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrieren';
$lng['users']['webpage'] = 'Webseite';
$lng['users']['repeat_password'] = 'Passwort erneut eingeben';
$lng['users']['image_verification_info'] = 'Bitte die untenstehende Zeichenzeile eingeben.<br> Grossbuchstaben von A-H und Nummern von 0-9.';
$lng['users']['already_logged_in'] = 'Sie sind zurzeit eingeloggt';
$lng['users']['select'] = 'Wählen';


$lng['users']['errors']['username_missing'] = 'Bitte Ihren Benutzernamen eingeben!';
$lng['users']['errors']['invalid_username'] = 'Ungültiger Benutzername!';
$lng['users']['errors']['username_exists'] = 'Dieser Benutzername existiert bereits! Loggen Sie sich ein, falls Sie bereits ein Konto bei uns besitzen!';
$lng['users']['errors']['email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['users']['errors']['invalid_email'] = 'Diese E-Mail Adresse ist ungültig!';
$lng['users']['errors']['passwords_dont_match'] = 'Das Passwort ist nicht korrekt!';
$lng['users']['errors']['email_exists'] = 'Diese E-Mail Adresse existiert bereits! Bitte loggen Sie sich ein, falls Sie bereits ein Konto bei uns besitzen!';
$lng['users']['errors']['password_missing'] = 'Bitte Ihr Passwort eingeben!';
$lng['users']['errors']['password_not_match'] = 'Das Passwort stimmt nicht überein!';
$lng['users']['errors']['invalid_validation_string'] = 'Der Validierungscode ist nicht korrekt!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Konto oder Aktivierungscode ist nicht korrekt! Bitte kontaktieren Sie den Administrator!';
$lng['users']['errors']['account_already_active'] = 'Ihr Konto ist bereits aktiv!';

$lng['users']['info']['activate_account'] = 'Eine E-Mail wurde an Sie versendet. Bitte befolgen Sie die Anweisungen, um Ihr Konto zu aktivieren.';
$lng['users']['info']['welcome_user'] = 'Ihr Konto wurde erstellt. Bitte hier <a href="login.php">Einloggen</a>!';
$lng['users']['info']['account_info_updated'] = 'Die Informationen Ihres Kontos wurde aktualisiert!';
$lng['users']['info']['password_changed'] = 'Ihr Passwort wurde geändert!';
$lng['users']['info']['account_activated'] = 'Ihr Konto wurde aktiviert! Bitte hier <a href="login.php">einloggen</a>.';



// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Inserate';
$lng['listings']['category'] = 'Kategorie';
$lng['listings']['package'] = 'Paket';
$lng['listings']['price'] = 'Preis';
$lng['listings']['country'] = 'Land';
$lng['listings']['state'] = 'Region';
$lng['listings']['city'] = 'Stadt';
$lng['listings']['ad_description'] = 'Inseratbeschreibung';
$lng['listings']['title'] = 'Titel';
$lng['listings']['description'] = 'Beschreibung';
$lng['listings']['image'] = 'Bild';
$lng['listings']['words_left'] = 'verbleibende Worte';
$lng['listings']['enter_photos'] = 'Fotos hochladen';
$lng['listings']['choose_payment_method'] = 'Zahlungsmethode auswählen';
$lng['listings']['ad_information'] = 'Informationen übers Inserat';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['select_package'] = 'Paket auswählen';
$lng['listings']['packages_details'] = 'Details des Paketes';
$lng['listings']['select_country'] = 'Land auswählen';
$lng['listings']['select_state'] = 'Region auswählen';
$lng['listings']['other'] = 'Anderes';
$lng['listings']['details'] = 'Details';
$lng['listings']['stock_no'] = 'Ref. Inserat';
$lng['listings']['location'] = 'Ort';
$lng['listings']['contact_info'] = 'Kontakt Info';
$lng['listings']['email_seller'] = 'Benutzer kontaktieren';
$lng['listings']['no_recent_ads'] = 'Kein aktuelles Inserat';
$lng['listings']['no_ads'] = 'Kein Inserat in dieser Kategorie';
$lng['listings']['added_on'] = 'Erstellt am';
$lng['listings']['send_mail'] = 'E-Mail an Benutzer senden';
$lng['listings']['details'] = 'Details';
$lng['listings']['user'] = 'Benutzer';
$lng['listings']['price'] = 'Preis';
$lng['listings']['confirm_delete'] = 'Sind Sie sicher, dass Sie dieses Inserat löschen wollen?';
$lng['listings']['confirm_delete_all'] = 'Sind Sie sicher, dass Sie alle Inserate löschen wollen?';
$lng['listings']['all'] = 'Alle Inserate';
$lng['listings']['active_listings'] = 'Aktive Inserate';
$lng['listings']['pending_listings'] = 'Inserate in Bearbeitung';
$lng['listings']['featured_listings'] = 'VIP Inserate';
$lng['listings']['pending_featured_listings'] = 'VIP Inserate in Bearbeitung';
$lng['listings']['expired_listings'] = 'abgelaufene Anzeigen';
$lng['listings']['active'] = 'Aktiv';
$lng['listings']['inactive'] = 'Inaktiv';
$lng['listings']['pending'] = 'In Bearbeitung';
$lng['listings']['featured'] = 'VIP';
$lng['listings']['pending_featured'] = 'VIP (P)';
$lng['listings']['expired'] = 'abgelaufen';

$lng['listings']['order_by_date'] = 'nach Datum sortieren';
$lng['listings']['order_by_category'] = 'nach Kategorie sortieren';
$lng['listings']['order_by_price'] = 'nach Preis sortieren';
$lng['listings']['order_by_views'] = 'nach Besuch sortieren';
$lng['listings']['order_asc'] = 'Aufsteigend';
$lng['listings']['order_desc'] = 'Absteigend';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Besucht';
$lng['listings']['date'] = 'Datum';
$lng['listings']['no_listings'] = 'Kein Inserat';
$lng['listings']['NA'] = 'nicht erhältlich';
$lng['listings']['no_such_id'] = 'Kein Inserat unter dieser ID';
$lng['listings']['mark_sold'] = 'als verkauft markieren';
$lng['listings']['mark_unsold'] = 'als nicht verkauft markieren';
$lng['listings']['feature'] = 'VIP';
$lng['listings']['sold'] = 'Verkauft';
$lng['listings']['expired_on'] = 'abgelaufen am';

$lng['listings']['renew'] = 'Neu veröffentlichen';

$lng['listings']['print_page'] = 'Seite drucken';
$lng['listings']['recommend_this'] = 'Weiter Empfehlen';
$lng['listings']['more_listings'] = 'Mehr Inserate von diesem Benutzer';
$lng['listings']['all_listings_for'] = 'Alle Inserate für';
$lng['listings']['free_category'] = 'Kategorie GRATIS';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Sind Sie sicher, dass Sie dieses Bild löschen wollen?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Maximale Anzahl der Worte überschritten! Sie können maximal ::MAX:: Zeichen eingeben'; // please leave intact the tag ::MAX:: 
$lng['listings']['errors']['badwords']='Ihr Inserat enthält nicht erlaubte Begriffe! Wir bitten Sie, diese zu vermeiden!';
$lng['listings']['errors']['title_missing']='Bitte den Titel Ihres Inserats angeben!';
$lng['listings']['errors']['category_missing']='Wählen Sie bitte eine Kategorie!';
$lng['listings']['errors']['invalid_category']='Kategorie ungültig!';
$lng['listings']['errors']['package_missing']='Bitte ein Inserat-Paket auswählen!';
$lng['listings']['errors']['invalid_package']='Package ungültig!';
$lng['listings']['errors']['content_missing']='Bitte die Beschreibung Ihres Inserates eingeben!';
$lng['listings']['errors']['invalid_price']='Preis ungültig!';
$lng['listings']['errors']['invalid_country']='Land ungültig!';
$lng['listings']['errors']['invalid_state']='Region ungültig!';
$lng['listings']['errors']['user_missing']='Bitte Benutzer für das Inserat wählen!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Preis Min.';
$lng['quick_search']['price_high'] = 'Preis Max.';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Neues Inserat erstellen';
$lng['useraccount']['browse_your_listings'] = 'Meine Inserate';
$lng['useraccount']['modify_account_info'] = 'Mein Konto bearbeiten';
$lng['useraccount']['order_history'] = 'Meine Bestellübersicht';
$lng['useraccount']['total_listings'] = 'Alle Inserate';
$lng['useraccount']['total_views'] = 'Alle Aufrufe';
$lng['useraccount']['active_listings'] = 'Aktive Inserate';
$lng['useraccount']['pending_listings'] = 'Inserate in Bearbeitung';
$lng['useraccount']['last_login'] = 'Letzter Login';
$lng['useraccount']['last_login_ip'] = 'Letzte Login IP';
$lng['useraccount']['expired_listings'] = 'Abgelaufene Inserate';
$lng['useraccount']['statistics'] = 'Statistik';
$lng['useraccount']['welcome'] = 'Willkommen';
$lng['useraccount']['contact_name'] = 'Benutzer';
$lng['useraccount']['email'] = 'E-Mail';
$lng['useraccount']['address'] = 'Adresse';
$lng['useraccount']['phone'] = 'Telefon';
$lng['useraccount']['mobile'] = 'Handy';
$lng['useraccount']['webpage'] = 'Persönliche Webseite';
$lng['useraccount']['show_name'] = 'Benutzername anzeigen';
$lng['useraccount']['show_phone'] = 'Telefon anzeigen';
$lng['useraccount']['show_mobile'] = 'Handynummer anzeigen';
$lng['useraccount']['password'] = 'Passwort';
$lng['useraccount']['repeat_password'] = 'Passwort erneut eingeben';
$lng['useraccount']['change_password'] = 'Passwort ändern';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = 'Ihre Paypal Transaktion wurde widerrufen!';
$lng['paypal']['invalid_paypal_transaction'] = 'Ungültige Paypal Transaktion!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Mit 2Checkout bezahlen!';
$lng['to_checkout']['invalid_2co_transaction'] = 'Ungültige 2Checkout Transaktion!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'bis';
$lng['advanced_search']['price_min'] = 'Preis Min';
$lng['advanced_search']['price_max'] = 'Preis Max';
$lng['advanced_search']['word'] = 'Suchen';
$lng['advanced_search']['sort_by'] = 'Sortieren nach';
$lng['advanced_search']['sort_by_price'] = 'nach Preis sortieren';
$lng['advanced_search']['sort_by_date'] = 'nach Datum sortieren';
$lng['advanced_search']['sort_descendant'] = 'Absteigend';
$lng['advanced_search']['sort_Aufsteigend'] = 'Aufsteigend';
$lng['advanced_search']['only_ads_with_pic'] = 'Nur Inserate mit Bild';
$lng['advanced_search']['no_results'] = 'Kein Inserat entspricht Ihrer Suche!';
$lng['advanced_search']['multiple_ads_matching'] = '::NO_ADS:: Inserate entsprechen Ihrer Suche!';
$lng['advanced_search']['single_ad_matching'] = 'Ein Inserat entspricht Ihrer Suche!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Name';
$lng['contact']['subject'] = 'Betreff';
$lng['contact']['email'] = 'E-Mail';
$lng['contact']['webpage'] = 'Webseite';
$lng['contact']['comments'] = 'Bemerkungen';
$lng['contact']['message_sent'] = 'Ihre Nachricht wurde versendet!';
$lng['contact']['sending_message_failed'] = 'Nachricht nicht versendet';
$lng['contact']['mailto'] = 'Versenden an';

$lng['contact']['error']['name_missing'] = 'Bitte Ihren Namen eingeben!';
$lng['contact']['error']['subject_missing'] = 'Bitte Betreff eingeben!';
$lng['contact']['error']['email_missing'] = 'Bitte E-Mail Adresse eingeben!';
$lng['contact']['error']['invalid_email'] = 'E-Mail Adresse ungültig!';
$lng['contact']['error']['comments_missing'] = 'Bitte Ihre Bemerkungen eingeben!';
$lng['contact']['error']['invalid_validation_number'] = 'Validierungsnummer ungültig!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'E-Mail';
$lng['password_recovery']['new_password'] = 'Neues Passwort';
$lng['password_recovery']['repeat_new_password'] = 'Neues Passwort erneut eingeben';
$lng['password_recovery']['invalid_key'] = 'Schlüssel ungültig';

$lng['password_recovery']['email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['password_recovery']['invalid_email'] = 'E-Mail Adresse ungültig';
$lng['password_recovery']['email_inexistent'] = 'Kein Benutzer unter dieser E-Mail Adresse angemeldet';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Betrag';
$lng['packages']['words'] = 'Worte pro Anzeige (Beschreibungstext)';
$lng['packages']['days'] = 'Tage';
$lng['packages']['pictures'] = 'Bilder pro Anzeige';
$lng['packages']['picture'] = 'Bild pro Anzeige';
$lng['packages']['available'] = 'Anzeigenlaufzeit';
$lng['packages']['featured'] = 'VIP Inserate';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Zahlungsart';
$lng['order_history']['amount'] = 'Betrag';
$lng['order_history']['completed'] = 'erledigt';
$lng['order_history']['not_completed'] = 'nicht erledigt';
$lng['order_history']['ad_no'] = 'Inserat ID';
$lng['order_history']['date'] = 'Datum';
$lng['order_history']['no_actions'] = 'Kein Bestellungen vorhanden';
$lng['order_history']['order_by_date'] = 'nach Datum sortieren';
$lng['order_history']['order_by_amount'] = 'nach Betrag sortieren';
$lng['order_history']['order_by_processor'] = 'nach Zahlungsart sortieren';

// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Preis für VIP Inserate';
$lng['featuread']['choose_payment_method'] = 'Zahlungsmethode wählen';
$lng['featuread']['feature_your_ad'] = 'VIP Inserat einfügen';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Preis für das Inserat erneut publizieren';
$lng['renew']['choose_payment_method'] = 'Zahlungsmethode auswählen';
$lng['renew']['renew_your_ad'] = 'Inserat erneut aufgeben';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'nach Datum sortieren';
$lng['order']['price'] = 'nach Preis sortieren';
$lng['order']['title'] = 'nach Titel sortieren';
$lng['order']['desc'] = 'Absteigend';
$lng['order']['asc'] = 'Aufsteigend';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Dieses Inserat weiter empfehlen';
$lng['recommend']['your_name'] = 'Ihr Name';
$lng['recommend']['your_email'] = 'Ihre E-Mail Adresse';
$lng['recommend']['friend_name'] = 'Name des Empfängers';
$lng['recommend']['friend_email'] = 'E-Mail des Empfängers';
$lng['recommend']['message'] = 'Ihre persönliche Nachricht';


$lng['recommend']['error']['your_name_missing'] = 'Bitte Ihren Namen eingeben!';
$lng['recommend']['error']['your_email_missing'] = 'Bitte Ihre E-Mail Adresse eingeben!';
$lng['recommend']['error']['friend_name_missing'] = 'Bitte den Namen des Empfängers eingeben!';
$lng['recommend']['error']['friend_email_missing'] = 'Bitte die E-Mail Adresse des Empfängers eingeben!';
$lng['recommend']['error']['invalid_email'] = 'Ungültige E-Mail Adresse!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Inserate';
$lng['stats']['general'] = 'Übersicht';

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Abonnement';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Status';
$lng['general']['favourites'] = 'Favoriten';
$lng['general']['as'] = 'als';
$lng['general']['view'] = 'aufrufe';
$lng['general']['none'] = 'keine';
$lng['general']['yes'] = 'Ja';
$lng['general']['no'] = 'Nein';
$lng['general']['next'] = 'Nächste';
$lng['general']['finish'] = 'Beenden';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Entfernen';
$lng['general']['previous_page'] = '« Vorige Seite';
$lng['general']['next_page'] = 'Nächste Seite »';
$lng['general']['items'] = 'Artikel';
$lng['general']['active'] = 'Aktive';
$lng['general']['inactive'] = 'Inaktive';
$lng['general']['expires'] = 'Gültig bis';
$lng['general']['available'] = 'Erhältlich';
$lng['general']['cancel'] = 'Abbrechen';
$lng['general']['never'] = 'Nie';
$lng['general']['asc'] = 'aufsteigend';
$lng['general']['desc'] = 'absteigend';
$lng['general']['pending'] = 'auf Freischaltung wartend';
$lng['general']['upload'] = 'Hochladen';
$lng['general']['processing'] = 'In Bearbeitung, bitte warten ... ';
$lng['general']['help'] = 'Hilfe';
$lng['general']['hide'] = 'verstecken';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['check_all'] = 'Alle aktivieren';
$lng['general']['uncheck_all'] = 'Alle deaktivieren';
$lng['general']['all'] = 'Alle';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Händler Seite';
$lng['users']['store_banner'] = 'Banner für Ihre Händler Seite';
$lng['users']['waiting_mail_activation'] = 'Warte auf E-Mail-Aktivierung';
$lng['users']['waiting_admin_activation'] = 'Warte auf Aktivierung des Webmaster';
$lng['users']['no_such_id'] = 'Dieser Benutzer existiert nicht.';

$lng['users']['info']['store_banner'] = '<br>Das Bild/Banner, wird für Ihre Händler Seite verwendet.';

// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Verstoß melden';
$lng['listings']['report_reason'] = 'Verstoß Grund';
$lng['listings']['meta_info'] = 'Meta Information';
$lng['listings']['meta_keywords'] = 'Meta Schlüsselworte';
$lng['listings']['meta_description'] = 'Meta Beschreibung';
$lng['listings']['not_approved'] = 'Abgelaufen';
$lng['listings']['approve'] = 'Erneuern';
$lng['listings']['choose_payment_method'] = 'Wählen Sie eine Zahlungsmethode';

$lng['listings']['choose_category'] = 'Kategorie auswählen';
$lng['listings']['choose_plan'] = 'Paket auswählen';
$lng['listings']['enter_ad_details'] = 'Text und Details';
$lng['listings']['ad_details'] = 'Inserat Details';
$lng['listings']['add_photos'] = 'Fotos';
$lng['listings']['ad_photos'] = 'Fotos hochladen';
$lng['listings']['edit_photos'] = 'Fotos bearbeiten';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['review'] = 'Vorschau';
$lng['listings']['finish'] = 'Beenden';
$lng['listings']['next_step'] = 'Nächster Schritt';
$lng['listings']['included'] = 'Inbegriffen';
$lng['listings']['finalize'] = 'Abschliessen';
$lng['listings']['zip'] = 'PLZ';
$lng['listings']['add_to_favourites'] = 'Zu Favoriten hinzufügen';
$lng['listings']['confirm_add_to_fav'] = 'Warnung! Sie sind nicht angemeldet! Die Favoritenliste kann nicht für Ihren nächsten Besuch gespeichert werden!';
$lng['listings']['add_to_fav_done'] = 'Das Inserat wird in Ihre Favoritenliste aufgenommen!';
$lng['listings']['confirm_delete_favourite'] = 'Sind Sie sicher, dass Sie die Anzeige aus Ihrer Favoritenliste löschen möchten?';
$lng['listings']['no_favourites'] = 'Keine Inserate';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['highlited'] = 'Highlited (farblich hervorgehoben)';
$lng['listings']['priority'] = 'Priorität';
$lng['listings']['video'] = 'Video Inserat';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Das Video ist noch nicht freigeschaltet';
$lng['listings']['video_code'] = 'Video Code';
$lng['listings']['total'] = 'Gesamtpreis';
$lng['listings']['approve_ad'] = 'Abschliessen';
$lng['listings']['finalize_later'] = 'Später Abschliessen';
$lng['listings']['click_to_upload'] = 'Klicken Sie zum Hochladen';
$lng['listings']['files_uploaded'] = ' Foto(s) Hochgeladen ';
$lng['listings']['allowed'] = ' Fotos erlaubt!';
$lng['listings']['limit_reached'] = ' Das Limit der maximal erlaubten Bilder ist erreicht!';
$lng['listings']['edit_options'] = 'Bearbeiten der Optionen';
$lng['listings']['view_store'] = 'Händler Seite aufrufen';
$lng['listings']['edit_ad_options'] = 'Bearbeiten der Anzeigen Optionen';
$lng['listings']['no_extra_options_selected'] = 'Keine zusätzlichen Optionen ausgewählt!';
$lng['listings']['highlited_listings'] = 'Highlitrd (farblich hervorgehobene Anzeige)';
$lng['listings']['for_listing'] = 'für die Aufnahme nicht ';
$lng['listings']['expires_on'] = 'Läuft ab am';
$lng['listings']['expired_on'] = 'abgelaufen';
$lng['listings']['pending_ad'] = 'Warteliste';
$lng['listings']['pending_highlited'] = 'Highlited (farblich hervor gehoben) wartet auf freischaltung';
$lng['listings']['pending_featured'] = 'VIP Inserat wartet auf freischaltung';
$lng['listings']['pending_priority'] = 'Priority wartet auf freischaltung';
$lng['listings']['enter_coupon'] = 'Geben Sie Ihren Rabatt-Code ein';
$lng['listings']['discount'] = 'Rabatt-Code';
$lng['listings']['select_plan'] = 'Paket auswählen';
$lng['listings']['pending_subscription'] = 'Auf freischaltung wartendes Abonnement';
$lng['listings']['remove_favourite'] = 'Anzeige aus Favoriten löschen';

$lng['listings']['order_up'] = 'Aufsteigend';
$lng['listings']['order_down'] = 'Absteigend';


$lng['listings']['errors']['invalid_youtube_video'] = 'Ungültiger youtube video link!';


// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Abonnement';
$lng['useraccount']['no_package'] = 'Kein Paket';
$lng['useraccount']['packages'] = 'Pakete';
$lng['useraccount']['date_start'] = 'Start Datum';
$lng['useraccount']['date_end'] = 'End Datum'; 
$lng['useraccount']['remaining_ads'] = 'Restliche Inserate';
$lng['useraccount']['account_type'] = 'Account-Typ';
$lng['useraccount']['unfinished_listings'] = 'Unvollendete Eingabe';
$lng['useraccount']['confirm_delete_subscription'] = 'Sind Sie sicher, dass Sie dieses Abonnement entfernen möchten?';
$lng['useraccount']['buy_store'] = 'Händler Seite kaufen';
$lng['useraccount']['bulk_uploads'] = 'Inserate Importieren';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abo Laufzeit';
$lng['packages']['ads'] = 'Inserate';
$lng['packages']['name'] = 'Name';
$lng['packages']['details'] = 'Details';
$lng['packages']['no_ads'] = 'Anzahl der Inserate';
$lng['packages']['subscription_time'] = 'Abonnement Zeit';
$lng['packages']['no_pictures'] = 'Anzahl der Bilder';
$lng['packages']['no_words'] = 'Anzahl der Wörter';
$lng['packages']['ads_availability'] = 'Inserat Verfügbarkeit';
$lng['packages']['featured'] = 'VIP Inserat'; 
$lng['packages']['highlited'] = 'Highlited (farblich hervorgehoben)';
$lng['packages']['priority'] = 'Priorität';
$lng['packages']['video'] = 'Video Inserat';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Eintrag erzeugen';
$lng['order_history']['renew_listing'] = 'Eintrag verlängern';
$lng['order_history']['feature_listing'] = 'Eintrag aufwerten';
$lng['order_history']['subscribe_to_package'] = 'Paket Abonnement';
$lng['order_history']['complete_payment'] = 'Bezahlung abschließen';
$lng['order_history']['complete_payment_for'] = 'Bezahlung abschließen für';
$lng['order_history']['details'] = 'Details';
$lng['order_history']['subscription_no'] = 'Kein Abonnement';
$lng['order_history']['highlited'] = 'Farblich hervorgehobene Inserate';
$lng['order_history']['priority'] = 'Priorität';
$lng['order_history']['video'] = 'Video Inserate';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Bitte wählen Sie ein Abonnement aus!';
$lng['buy_package']['error']['choose_processor'] = 'Bitte wählen Sie die Zahlungsart!';
$lng['buy_package']['error']['invalid_processor'] = 'Ungültige Zahlung!';
$lng['buy_package']['error']['invalid_package'] = 'Ungültiges Abonnement!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Ungültige  Paypal Transaktion!';
$lng['2co']['invalid_transaction'] = 'Ungültige  2Checkout Transaktion!';
$lng['moneybookers']['invalid_transaction'] = 'Ungültige  Moneybookers Transaktion!';
$lng['authorize']['invalid_transaction'] = 'Ungültige Authorize.net  Transaktion!';
$lng['manual']['invalid_transaction'] = 'Ungültige Transaktion!';

$lng['paypal']['transaction_canceled'] = 'Paypal Transaktion abgebrochen!';
$lng['2co']['transaction_canceled'] = '2Checkout Transaktion abgebrochen!';
$lng['moneybookers']['transaction_canceled'] = 'Moneybookers Transaktion abgebrochen!';
$lng['authorize']['transaction_canceled'] = 'Authorize.net Transaktion abgebrochen!';
$lng['manual']['transaction_canceled'] = 'Transaktion abgebrochen!';

$lng['payments']['transaction_already_processed'] = 'Die Transaktion wurde bereits verarbeitet!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Abonnement bestellen';
$lng['subscribe']['payment_method'] = 'Zahlungsart';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'E-Mail Kopie: ';
$lng['bcc_mails']['from'] = 'Von: ';
$lng['bcc_mails']['to'] = 'An: ';

// -------------------- bulk uploads ----------------
$lng['ie']['bulk_upload_status'] = 'Import status: ';
$lng['ie']['successfully'] = 'wurde erfolgreich hinzugefügt';
$lng['ie']['failed'] = 'nicht';
$lng['ie']['uploaded_listings'] = 'Hochgeladene Dateien anzeigen:';
$lng['ie']['errors']['upload_import_file'] = 'Bitte wählen Sie die Datei zum importieren aus!';
$lng['ie']['errors']['incorrect_file_type'] = 'Falscher Dateityp! Der Dateityp muss: ';
$lng['ie']['errors']['could_not_open_file'] = 'Kann die Datei nicht öffnen!';
$lng['ie']['errors']['choose_categ'] = 'Bitte wählen Sie eine Kategorie aus!';
$lng['ie']['errors']['could_not_save_file'] = 'Es konnte keine Datei heruntergeladen werden: ';
$lng['ie']['errors']['required_field_missing'] = 'Erforderliches Feld fehlt: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Falscher Zählstand in Reihe Nummer: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Ortssuche';
$lng['areasearch']['all_locations'] = 'Alle Orte';
$lng['areasearch']['exact_location'] = 'Genauer Ort';
$lng['areasearch']['around'] = 'ungefähr';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Händler wählen';


// ------------------- end vers 5.0 -----------------



// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Ja';
$lng['general']['No'] = 'Nein';
$lng['general']['or'] = 'oder';
$lng['general']['in'] = 'in';
$lng['general']['by'] = 'nach';
$lng['general']['close_window'] = 'Fenster schliessen';
$lng['general']['more_options'] = 'Mehr Optionen »';
$lng['general']['less_options'] = '« Weniger Optionen';
$lng['general']['send'] = 'Senden';
$lng['general']['save'] = 'Sichern';
$lng['general']['for'] = 'für';
$lng['general']['to'] = 'in der Kategorie'; 

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Markieren als gemietet';
$lng['listings']['mark_unrented'] = 'Markierung "als gemietet" aufheben';
$lng['listings']['rented'] = 'Gemietet';
$lng['listings']['your_info'] = 'Ihre Informationen';
$lng['listings']['email'] = 'Ihre E-Mail Adresse';
$lng['listings']['name'] = 'Ihr Name';
$lng['listings']['listing_deleted'] = 'Ihr Inserat würde gelöscht!';
$lng['listings']['post_without_login'] = 'Ohne login inserieren';
$lng['listings']['waiting_activation'] = 'Auf Aktivierung warten';
$lng['listings']['waiting_admin_approval'] = 'Auf Freigabe durch Administrator warten';
$lng['listings']['dont_need_account'] = 'Benötigen Sie keinen account? Inserieren Sie ohne sich einzuloggen!';
$lng['listings']['post_your_ad'] = 'Veröffentlichen Sie Ihr Inserat!';
$lng['listings']['posted'] = 'Veröffentlicht';
$lng['listings']['select_subscription'] = 'Abonnement auswählen';
$lng['listings']['choose_subscription'] = 'Abonnement auswählen';
$lng['listings']['inactive_listings'] = 'Inaktive Inserate';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Suche filtern';
$lng['search']['refine_by_keyword'] = 'Nach Schlagwort filtern';
$lng['search']['showing'] = 'zeigend';
$lng['search']['more'] = 'Mehr ...';
$lng['search']['less'] = 'Weniger ...';
$lng['search']['search_for'] = 'Suche nach';
$lng['search']['save_your_search'] = 'Sichern Sie Ihre Suche';
$lng['search']['save'] = 'Sichern';
$lng['search']['search_saved'] = 'Ihre Suche wurde gesichert!';
$lng['search']['must_login_to_save_search'] = 'Sie müssen sich einloggen, um Ihre Suche zu sichern!';
$lng['search']['view_search'] = 'Suche ansehen';
$lng['search']['all_categories'] = 'Alle Kategorien';
$lng['search']['more_than'] = 'mehr als';
$lng['search']['less_than'] = 'weniger als';

$lng['search']['error']['cannot_save_empty_search'] = 'Ihre Suche beinhaltet keine Angaben und kann daher nicht gesichert werden!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Gesicherte Suche';
$lng['useraccount']['view_saved_searches'] = 'Gesicherte Suche ansehen';
$lng['useraccount']['no_saved_searches'] = 'Keine gesicherte Suche';
$lng['useraccount']['recurring'] = 'Wiederkehrend';
$lng['useraccount']['date_renew'] = 'Datum erneuert';
$lng['useraccount']['logged_in_as'] = 'Sie sind eingeloggt als ';
$lng['useraccount']['subscriptions'] = 'Meine Abonnements';

$lng['users']['activate_account'] = 'Account aktivieren';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Abonnement hinzufügen';
$lng['subscriptions']['package'] = 'Paket';
$lng['subscriptions']['remaining_ads'] = 'Verbleibende Inserate';
$lng['subscriptions']['recurring'] = 'Wiederkehrend';
$lng['subscriptions']['date_start'] = 'Start-Datum'; 
$lng['subscriptions']['date_end'] = 'End-Datum'; 
$lng['subscriptions']['date_renew'] = 'Verlängert'; 
$lng['subscriptions']['confirm_delete'] = 'Sind Sie sicher, dass Sie das Abonnement löschen wollen?';
$lng['subscriptions']['no_subscriptions'] = 'Kein Abonnement';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Noch keinen account?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Wiederkehrende Zahlung für dieses Abonnement aktivieren';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Die folgenden Felder müssen ausgefüllt sein: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Händlerseite kaufen';


$lng['images']['errors']['max_photos'] = 'Maximale Anzahl von Fotos erreicht!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-Mail Benachrichtigung';
$lng['alerts']['email_alerts'] = 'E-Mail Benachrichtigungen';
$lng['alerts']['no_alerts'] = 'Keine E-Mail Benachrichtigungen';
$lng['alerts']['view_email_alerts'] = 'E-Mail Benachrichtigungen ansehen';
$lng['alerts']['send_email_alerts'] = 'E-Mail Benachrichtigungen senden';
$lng['alerts']['immediately'] = 'Sofort';
$lng['alerts']['daily'] = 'Täglich';
$lng['alerts']['weekly'] = 'Wöchentlich';
$lng['alerts']['your_email'] = 'Ihre E-Mail Adresse';
$lng['alerts']['create_alert'] = 'E-Mail Benachrichtigung erstellen';
$lng['alerts']['email_alert_info'] = 'E-Mail Benachrichtigungen erhalten, wenn neue Inserate für diese Suche eingestellt werden.';
$lng['alerts']['alert_added'] = 'Ihre E-Mail Benachrichtigung wurde erstellt!';
$lng['alerts']['alert_added_activate'] = 'Sie erhalten in Kürze eine E-Mail an: <b>::EMAIL::</b>. Bitte klicken Sie auf den Link in dieser E-Mail, um Ihre E-Mail Benachrichtigung zu aktivieren!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Suchen in';
$lng['alerts']['keyword'] = 'Schlagwort';
$lng['alerts']['frequency'] = 'Häufigkeit der E-Mail Benachrichtigungen';
$lng['alerts']['alert_activated'] = 'Ihre E-Mail Benachrichtigungen wurden aktiviert! Ab jetzt erhalten Sie die gewünschten E-Mail Benachrichtigungen.';
$lng['alerts']['alert_unsubscribed'] = 'Ihre E-Mail Benachrichtigung wurde gelöscht!';
$lng['alerts']['started_on'] = 'Gestartet am';
$lng['alerts']['no_terms_searched'] = 'Für diese Suche sind keine Inhalte vorhanden!';
$lng['alerts']['no_listings'] = 'Keine Einträge für diese Benachrichtigung!';

$lng['alerts']['error']['email_required'] = 'Bitte geben Sie eine E-Mail Adresse für Ihre E-Mail Benachrichtigung an!';
$lng['alerts']['error']['invalid_email'] = 'Falsche E-Mail Adresse!';
$lng['alerts']['error']['invalid_frequency'] = 'Falsche Häufigkeit für E-Mail Benachrichtigungen!';
$lng['alerts']['error']['login_required'] = 'Bitte <a href="::LINK::">loggen Sie sich ein</a> um eine E-Mail Benachrichtigung anzulegen!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Please choose at least one search key except category!';
$lng['alerts']['error']['invalid_confirmation'] = 'Ungültige E-Mail Benachrichtigungs Bestätigung!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Ungültige Abmeldungsanfrage!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Kreditrechner';
$lng_loancalc['sale_price'] = 'Verkaufspreis';
$lng_loancalc['down_payment'] = 'Anzahlung';
$lng_loancalc['trade_in_value'] = 'Wiederverkaufswert/Restwert';
$lng_loancalc['loan_amount'] = 'Darlehensbetrag';
$lng_loancalc['sales_tax'] = 'Umsatzsteuer';
$lng_loancalc['interest_rate'] = 'Zinssatz';
$lng_loancalc['loan_term'] = 'Laufzeit';
$lng_loancalc['months'] = 'Monate';
$lng_loancalc['years'] = 'Jahre';
$lng_loancalc['or'] = 'oder';
$lng_loancalc['monthly_payment'] = 'Monatliche Zahlung';
$lng_loancalc['calculate'] = 'Berechnen';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Kommentare';
$lng_comments['make_a_comment'] = 'Geben Sie einen Kommentar ab';
$lng_comments['login_to_post'] = 'Bitte <a href="::LOGIN_LINK::">loggen Sie sich ein,</a> um einen Kommentar abzugeben.';

$lng_comments['name'] = 'Name';
$lng_comments['email'] = 'E-Mail';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Kommentar senden';

$lng_comments['error']['name_missing'] = 'Bitte geben Sie Ihren Namen ein!';
$lng_comments['error']['content_missing'] = 'Bitte geben Sie einen Kommentar ab!';
$lng_comments['error']['website_missing'] = 'Bitte geben Sie eine Webseite an!';
$lng_comments['error']['email_missing'] = 'Bitte geben Sie Ihre E-Mail Adresse an!';
$lng_comments['error']['listing_id_missing'] = 'Ungültiger Eintrag!';

$lng_comments['error']['invalid_email'] = 'Ungültige E-Mail Adresse!';
$lng_comments['error']['invalid_website'] = 'Ungültige Webseite!';
$lng_comments['errors']['badwords'] = 'Ihr Kommentar enthält nicht erlaubte Wörter! Bitte ändern Sie Ihren Kommentar!';

$lng_comments['info']['comment_added'] = 'Ihr Kommentar wurde hinzugefügt! Klicken Sie <a id="newad">hier,</a> falls Sie einen weiteren Kommentar hinzufügen möchten.';
$lng_comments['info']['comment_pending'] = 'Ihr Kommentar wartet auf die Freigabe durch den Administrator.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Nächste »';
$lng['tb']['prev'] = '« Zurück';
$lng['tb']['close'] = 'Schliessen';
$lng['tb']['or_esc'] = 'oder ESC-Taste';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Nachrichten'; 
$lng['messages']['confirm_delete_all'] = 'Sind Sie sicher das Sie alle Nachrichten löschen wollen?';
$lng['messages']['listing'] = 'Anzeige'; 
$lng['messages']['no_messages'] = 'Keine Nachrichten';
$lng['general']['reply'] = 'Reply to message';
$lng['messages']['message'] = 'Nachricht'; 
$lng['messages']['from'] = 'Von'; 
$lng['messages']['to'] = 'An'; 
$lng['messages']['on'] = 'On';
$lng['messages']['view_thread'] = 'View thread';
$lng['messages']['started_for_listing'] = 'Started for listing';
$lng['messages']['view_complete_message'] = 'View complete message here';
$lng['messages']['message_history'] = 'Message history';
$lng['messages']['yourself'] = 'You';
$lng['messages']['report_spam'] = 'Report as spam';
$lng['messages']['reported_as_spam'] = 'Reported as spam';
$lng['messages']['confirm_report_spam'] = 'Are you sure you want to report this message as spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Falsche Anzeigen ID'; 
$lng['listings']['show_map'] = 'Karte anzeigen'; 
$lng['listings']['hide_map'] = 'Karte verbergen'; 
$lng['listings']['see_full_listing'] = 'Ganze Anzeige zeigen'; 
$lng['listings']['list'] = 'Liste'; 
$lng['listings']['gallery'] = 'Fotos'; 
$lng['listings']['remove_fav_done'] = 'Die Anzeige wurde aus Ihrer Favoritenliste gelöscht!'; 
$lng['search']['high_no_results'] = 'Die Anzahl der Suchergebnisse für Ihre Suche ist sehr hoch. Die angezeigten Ergebnisse wurden auf die Anzeigen mit den meisten Übereinstimmungen beschränkt. Bitte verfeinern sie Ihre Suche um die Anzahl der ermittelten Anzeigen zu verkleinern und ein genaueres Ergebnis zu erhalten!'; 

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Diese E-Mail Adresse ist nicht erlaubt!'; 

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Sie dürfen diese Abonnement nicht erneut nutzen, die Anzahl der maximal erlaubten Nutzungen für diese Abo ist erreicht!'; 

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Choose location';
$lng['location']['choose'] = 'Choose';
$lng['location']['change'] = 'Change';
$lng['location']['all_locations'] = 'All locations';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Kategorie';
$lng['location']['save_location'] = 'Save location';

$lng['credits']['credits'] = 'Credits';
$lng['credits']['credit'] = 'Credit';
$lng['credits']['pending_credits'] = 'Pending credits';
$lng['credits']['current_credits'] = 'Current credits';
$lng['credits']['one_credit_equals'] = 'One credit equals';
$lng['credits']['credits_amount'] = 'Credits amount';
$lng['credits']['buy_extra_credits'] = 'Buy extra credits';
$lng['credits']['credits_package'] = 'Credits package';
$lng['credits']['select_package'] = 'Select credits package';
$lng['credits']['choose_package'] = 'Choose package';
$lng['credits']['you_currently_have'] = 'You currently have ';
$lng['credits']['you_currently_have_no_credits'] = 'You currently have no credits ';
$lng['credits']['pay_using_credits'] = 'Pay using credits';
$lng['credits']['not_enough_credits'] = 'Not enough credits for this payment!';
$lng['credits']['scredits'] = 'credits';
$lng['credits']['scredit'] = 'credit';



$lng['order_history']['credits_purchase'] = 'Credits purchase';
$lng['order_history']['invalid_order'] = 'Invalid order!';

// ------------------- end version 7.06 ------------------

// ------------------- version 7.07 ------------------
$lng['listings']['wait_while_redirected'] = 'Please wait while you\'re being redirected!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Please <a href="::LOGIN_LINK::">sign in</a> so you can view the contact information!';
$lng['listing']['no_contact_information'] = 'No contact information available.';


$lng['navbar']['register_as'] = 'Register as';
$lng['listings']['all_ads'] = 'All ads';
$lng['listings']['refine'] = 'Refine';
$lng['listings']['results'] = 'results';
$lng['listings']['photos'] = 'photos';
$lng['listings']['user_details'] = 'See user details';
$lng['listings']['back_to_details'] = 'Back to listing details';

$lng['listings']['post_free_ad'] = 'Post a Free Ad';

$lng['users']['username_available'] = 'The username is available!';
$lng['users']['username_not_available'] = 'Username not available!';

$lng['general']['not_found'] = 'The requested page was not found!';
$lng['general']['full_version'] = 'Full version';
$lng['general']['mobile_version'] = 'Mobile version';
$lng['failed'] = 'Failed';
$lng['remember_me'] = 'Remember me';

$lng['less_than_a_minute'] = 'less than a minute ago';
$lng['minute'] = 'minute';
$lng['minutes'] = 'minutes';
$lng['hour'] = 'hour';
$lng['hours'] = 'hours';
$lng['yesterday'] = 'Yesterday';
$lng['day'] = 'day';
$lng['days'] = 'days';
$lng['ago_postfix'] = ' ago';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Today';
$lng['messages']['confirm_delete'] = 'Are you sure you want to delete this message?';
$lng['listings']['change_category'] = 'Change category';
$lng['listings']['change_plan'] = 'Select a different plan';
$lng['listings']['choose_active_subscription'] = 'Choose from your active subscriptions';


$lng['useraccount']['request_removal'] = 'Request account removal';
$lng['useraccount']['request_removal_now'] = 'Request removal now!';
$lng['useraccount']['removal_verification_sent'] = 'You will receive an email containing a verification link. Please click the link in order to confirm the removal request!';

$lng['contact']['message_waits_admin_aproval'] = 'Your message will be delivered once approved by administrator!';

$lng['general']['accept'] = 'Accept';
$lng['general']['decline'] = 'Decline';

$lng['general']['tax'] = 'Tax';
$lng['general']['total_with_tax'] = 'Total with tax';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'In category';

$lng['users']['user_info'] = 'User information';
$lng['users']['store_info'] = 'Store information';
$lng['users']['user_listings'] = 'All listings';

$lng['login']['errors']['invalid_email_pass'] = 'Invalid email or password!';
$lng['general']['or'] = 'or';
$lng['newad']['choose_a_new_plan'] = 'Choose a new plan';

$lng['listings']['no_extra_options_available'] = 'There are no extra options available!';

$lng['listings']['map'] = 'Map';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'result';

$lng['confirm_delete'] = 'Are you sure you want to delete the selected item?';
$lng['confirm_delete_all'] = 'Are you sure you want to delete the selected items?';

$lng['general']['show'] = 'Show';
$lng['general']['on_a_page'] = 'on a page';
$lng['general']['return'] = 'Return';

$lng['login']['register_for_free'] = 'Register for free!';
$lng['general']['sent'] = 'Sent';
$lng['general']['received'] = 'Received';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'You are not logged in!';
$lng['newad']['or_post_without_account'] = 'or continue posting without an account!';

$lng_comments['scomments'] = 'comments';
$lng_comments['scomment'] = 'comment';
$lng['general']['on'] = 'on';

$lng['affiliates']['last_payment'] = 'Last payment';
$lng['affiliates']['last_payment_date'] = 'Last payment date';
$lng['affiliates']['next_payment_date'] = 'Next payment date';
$lng['affiliates']['total_due'] = 'Total due';
$lng['affiliates']['total_payments'] = 'Total payments received';
$lng['affiliates']['revenue_history'] = 'Revenue history';
$lng['affiliates']['payments_history'] = 'Payments history';
$lng['affiliates']['pending_payment'] = 'Pending payment';
$lng['affiliates']['released'] = 'Released';
$lng['affiliates']['not_released'] = 'Not released';
$lng['affiliates']['paid'] = 'Paid';
$lng['affiliates']['not_paid'] = 'Not paid';

$lng['general']['no_items'] = 'No items';
$lng['useraccount']['amount_start'] = 'Amount from';
$lng['useraccount']['amount_end'] = 'Amount to';
$lng['not_allowed_to_post_ads'] = 'You are not allowed to post ads with this account!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'The changes you make will remain pending until being reviewed by an administrator!';

$lng['useraccount']['auction'] = 'Auction';
$lng['useraccount']['add_auction'] = 'Add Auction';
$lng['useraccount']['remove_auction'] = 'Remove Auction';
$lng['useraccount']['auction_start_price'] = 'Start price';
$lng['useraccount']['starts_at'] = 'Starts at';
$lng['useraccount']['no_bids'] = 'No bids';
$lng['useraccount']['max_bid'] = 'Max bid';
$lng['useraccount']['enable'] = 'Enable';
$lng['useraccount']['disable'] = 'Disable';
$lng['useraccount']['error']['auction_start_price'] = 'Please enter auction starting price!';
$lng['useraccount']['info']['auction_added'] = 'The auction was successfully added!';
$lng['useraccount']['confirm_delete'] = 'Confirm delete action?';
$lng['useraccount']['place_bid'] = 'Place your bid!';
$lng['useraccount']['login_to_bid'] = 'Please login to place your bid!';
$lng['useraccount']['bid'] = 'Bid';
$lng['useraccount']['message_to_seller'] = 'Message to seller';
$lng['useraccount']['error']['enter_bid'] = 'Please enter your bid!';
$lng['useraccount']['error']['incorrect_bid'] = 'Invalid bid!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Your bid is smaller than starting price!';
$lng['useraccount']['bid_placed'] = 'Your bid was placed!';
$lng['useraccount']['placed_on'] = 'Placed on';
$lng['useraccount']['no_bids_for_auction'] = 'There are no bids for this auction!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Click to view';
$lng['advanced_search']['clear_search'] = 'Clear search';
$lng['listings']['currency'] = 'Currency';
$lng['listings']['show_phone'] = 'Show phone';
$lng['listings']['make_public'] = 'Make public';

$lng['advanced_search']['only_ads_with_auction'] = 'Only Ads With Auctions';
$lng['security']['failed_login_attempts'] = 'Repeated failed login attempts';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Your account is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your account.';
$lng['users']['verification_code'] = 'Verification code';
$lng['users']['waiting_sms_activation'] = 'Waiting for SMS activation';
$lng['listings']['info']['sms_verification'] = 'Your listing is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your listing.';
$lng['listings']['activate_listing'] = 'Activate listing';
$lng['listings']['errors']['sms_invalid_activation'] = 'Invalid activation key!';
$lng['listings']['info']['listing_pending'] = 'Your listing is pending and waiting for administrator verification.';
$lng['listings']['info']['listing_activated'] = 'Your listing is activated!';
$lng['listings']['errors']['listing_already_active'] = 'Your listing is already active!';
$lng['listings']['errors']['invalid_phone'] = 'Invalid phone number!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Available for';
$lng['newad']['available_until_expires'] = 'Available until the listing expires';
$lng['newad']['view_info'] = 'View info';
$lng['users']['errors']['phone_not_permitted'] = 'This phone number is not permitted!';
$lng['invoice']['invoice'] = 'Invoice';
$lng['invoice']['invoice_no'] = 'Invoice no';
$lng['invoice']['bill_to'] = 'Bill to';
$lng['invoice']['qty'] = 'Qty';
$lng['invoice']['unit_price'] = 'Unit price';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Sale tax';
$lng['invoice']['new_listing'] = 'New listing';
$lng['invoice']['renew_listing'] = 'Listing renewal';
$lng['invoice']['featured_eo'] = 'Featured extra option for listing';
$lng['invoice']['highlited_eo'] = 'Highlited extra option for listing';
$lng['invoice']['priority_eo'] = 'Priority extra option for listing';
$lng['invoice']['video_eo'] = 'Video extra option for listing';
$lng['invoice']['new_credits_pkg'] = 'New credits plan purchase';
$lng['invoice']['store'] = 'Dealer page purchase';
$lng['invoice']['new_subscription'] = 'New subscription purchase';
$lng['invoice']['renew_subscription'] = 'Subscription renewal';
$lng['weeks'] = 'Weeks';
$lng['week'] = 'Week';
$lng['months'] = 'Months';
$lng['month'] = 'Month';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Show WhatsApp';
$lng['general']['to_top'] = 'Go to top';
$lng['quick_search']['location'] = 'Postcode or location';
$lng['listings']['see_all'] = 'See all ads &raquo;';
$lng['listings']['ads'] = 'ads';
$lng['listings']['user_since'] = 'User since';
$lng['listings']['contact_details'] = 'Contact details';
$lng['listings']['favourite'] = 'Favorite';
$lng['listings']['manage_ad'] = 'Manage your ad';
$lng['useraccount']['show_bids'] = 'Show bids';
$lng['listings']['report_abusive'] = 'Report abusive ad';
$lng['listings']['enable_auction'] = 'Enable auction';
$lng['invoice']['download'] = 'Download invoice';


$lng['register']['group'] = 'Account type';
$lng['register']['change_group'] = 'Change account type';
$lng['register']['select_group'] = 'Select group';

$lng['search']['private'] = 'Private owners';
$lng['search']['professional'] = 'Professionals';
$lng['search']['save_your_search2'] = 'Would you like to save your search?';
$lng['search']['save_search'] = 'Save search';
$lng['search']['refine_your_search'] = 'Refine your search';
$lng['search']['hide_refine'] = 'Hide refine';

$lng['listings']['view_all_featured'] = 'View all featured >>';
$lng['listings']['view_all_latest'] = 'View all recent >>';
$lng['listings']['view_all_auctions'] = 'View all auctions >>';
$lng['listings']['auctions'] = 'Auctions';
$lng['listings']['view_ads_from'] = 'View ads from';
$lng['location']['change_location'] = 'Change_location';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Show email';
$lng['listings']['error']['photo_mandatory'] = 'Please upload at least one picture with your ad!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Call';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Phone';
$lng['contact']['error']['phone_or_email_missing'] = 'Please enter your email address or your phone number!';
$lng['general']['at'] = 'at';
$lng['general']['distance_from'] = 'distance from';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'The message contains forbidden language, please review it!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'added';
$lng['users']['repeat'] = 'Repeat';
$lng['users']['errors']['emails_dont_match'] = 'Email addresses don\'t match!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Username or Email';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Click to chat';
$lng['invoice']['price_includes_vat'] = 'The total price includes';
$lng['invoice']['vat'] = 'VAT';
$lng['general']['play'] = 'Play';
$lng['second'] = 'second';
$lng['seconds'] = 'seconds';
$lng['general']['you_must_wait'] = 'You must wait ';
$lng['general']['before_posting'] = ' before posting a new listing!';
$lng['listings']['select_category'] = '-- Select a category --';


$lng['login']['errors']['account_not_activated'] = 'Your account was not activated. Please use the activation URL you received in your email account.';
$lng['login']['errors']['banned_account'] = 'Your account was banned!';
$lng['login']['errors']['suspended_account'] = 'Your account was suspended until ';

$lng['general']['back_to_site'] = 'Back to site';
// --------------- end 9.6 --------------------

// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Make ad Urgent';
$lng['order_history']['url'] = 'Website Link';
$lng['listings']['pending_urgent'] = 'Pending Urgent';
$lng['listings']['pending_url'] = 'Pending Website Link';
$lng['listings']['error']['invalid_url'] = 'Invalid Website Link';
$lng['listings']['urgent'] = 'Urgent';
$lng['listings']['url'] = 'Website Link';
$lng['listings']['site_url'] = 'Enter your Website Link';
$lng['listings']['priorities_listings'] = 'Prioritized Listings';
$lng['listings']['urgent_listings'] = 'Urgent Listings';
$lng['listings']['video_listings'] = 'Video Listings';
$lng['listings']['url_listings'] = 'Website Link Listings';
$lng['listings']['view_example'] = 'View example';
// --------------- end 9.7 --------------------

?>
