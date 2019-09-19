<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Inicio';
$lng['navbar']['login'] = 'Ingresar';
$lng['navbar']['logout'] = 'Salir';
$lng['navbar']['recent_ads'] = 'Avisos Recientes';
$lng['navbar']['register'] = 'Registrarse';
$lng['navbar']['submit_ad'] = 'Publicar un Anuncio';
$lng['navbar']['editad'] = 'Editar';
$lng['navbar']['my_account'] = 'Mi Cuenta';
$lng['navbar']['administrator_panel'] = 'Panel Administrativo';
$lng['navbar']['contact'] = 'Contacto';
$lng['navbar']['password_recovery'] = 'Recuperar Contrase�a';
$lng['navbar']['renew_listing'] = 'Renovar';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Enviar';
$lng['general']['search'] = 'Buscar';
$lng['general']['contact'] = 'Contacto';
$lng['general']['advanced_search'] = 'B�squeda Avanzada';
$lng['general']['activeads'] = 'Activos';
$lng['general']['activead'] = 'Activo';
$lng['general']['subcats'] = 'subcategor�as';
$lng['general']['subcat'] = 'subcategor�a';
$lng['general']['view_ads'] = 'Ver';
$lng['general']['back'] = 'Volver';
$lng['general']['goto'] = 'Ir a';
$lng['general']['page'] = 'P�gina';
$lng['general']['of'] = 'de';
$lng['general']['other'] = 'Otra';
$lng['general']['NA'] = 'No aplicable';
$lng['general']['add'] = 'Agregar';
$lng['general']['delete_all'] = 'Borrar los seleccionados';
$lng['general']['action'] = 'Acci�n';
$lng['general']['edit'] = 'Editar';
$lng['general']['delete'] = 'Borrar';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'M�n';
$lng['general']['max'] = 'M�x';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = '�No est�s autorizado para ver esta p�gina!';
$lng['general']['access_restricted'] = '�Tu acceso a esta p�gina fue restringido!';
$lng['general']['featured_ads'] = 'Avisos Destacados';
$lng['general']['latest_ads'] = 'Avisos Recientes';
$lng['general']['quick_search'] = 'B�squeda R�pida';
$lng['general']['go'] = 'Ir';
$lng['general']['unlimited'] = 'Ilimitado';

// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Ya existe una imagen con el mismo nombre y no puede ser sobreescrita. Debes borrar la anterior si deseas reemplazarla';
$lng['images']['errors']['file_uploaded_too_big'] = 'No puedes publicar una imagen de m�s de ::MAX_FILE_UPLOAD_SIZE:: Kb'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = '�Las dimensiones de la imagen son muy grandes! Edita la imagen para que no tenga m�s de ::MAX_FILE_WIDTH::px de ancho por ::MAX_FILE_HEIGHT::px de alto';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = '�La imagen no pudo ser cargada!';
$lng['images']['errors']['no_file'] = '�Por favor selecciona una imagen para subir!';
$lng['images']['errors']['no_folder'] = '�La carpeta no existe!';
$lng['images']['errors']['folder_not_writeable'] = '�La carpeta seleccionada no tiene permisos de escritura!';
$lng['images']['errors']['file_type_not_accepted'] = 'El archivo que deseas cargar tiene un formato no permitido o no es una imagen';
$lng['images']['errors']['error'] = 'Ocurri� un error cargando la imagen. El error fue: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = '�La carpeta de las miniaturas no existe!';
$lng['images']['errors']['thmb_folder_not_writeable'] = '�La carpeta de las miniaturas no tiene permisos!';
$lng['images']['errors']['no_jpg_support'] = '�No se permiten archivos con extensi�n JPG!';
$lng['images']['errors']['no_png_support'] = '�No se permiten archivos con extensi�n PNG!';
$lng['images']['errors']['no_gif_support'] = '�No se permiten archivos con extensi�n GIF!';
$lng['images']['errors']['jpg_create_error'] = '�Error con la imagen JPG!';
$lng['images']['errors']['png_create_error'] = '�Error con la imagen PNG!';
$lng['images']['errors']['gif_create_error'] = '�Error con la imagen GIF!';


// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Iniciar Sesi�n';
$lng['login']['logout'] = 'Cerrar Sesi�n';
$lng['login']['username'] = 'Nombre de Usuario';
$lng['login']['password'] = 'Contrase�a';
$lng['login']['forgot_pass'] = '&iquest;Olvidaste tu Contrase�a?';
$lng['login']['click_here'] = 'Clic aqu�';

$lng['login']['errors']['password_missing'] = '�Por favor ingresa tu Contrase�a!';
$lng['login']['errors']['username_missing'] = '�Por favor ingresa tu Nombre de Usuario!';
$lng['login']['errors']['username_invalid'] = '�El Nombre de Usuario es incorrecto!';
$lng['login']['errors']['invalid_username_pass'] = '�Combinacion de Usuario y Contrase�a no v�lida!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Cerrar Sesi�n';
$lng['logout']['loggedout'] = 'Sesi�n cerrada correctamente';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrarse';
$lng['users']['repeat_password'] = 'Repetir Contrase�a';
$lng['users']['image_verification_info'] = 'Ingresa los detalles de la imagen que ves abajo.<br> Pueden ser letras y n�meros.';
$lng['users']['already_logged_in'] = '�Has Iniciado Sesi�n!';
$lng['users']['select'] = 'Seleccionar';


$lng['users']['errors']['username_missing'] = '�Ingresa tu Nombre de Usuario!';
$lng['users']['errors']['invalid_username'] = '�Nombre de Usuario incorrecto!';
$lng['users']['errors']['username_exists'] = '�Ese Nombre de Usuario ya existe! Por favor inicia sesi�n si ya tienes una cuenta.';
$lng['users']['errors']['email_missing'] = '�Ingresa tu direcci�n de correo electr�nico!';
$lng['users']['errors']['invalid_email'] = '�Direcci�n de correo electr�nico incorrecta!';
$lng['users']['errors']['passwords_dont_match'] = '�Las contrase�as no coinciden!';
$lng['users']['errors']['email_exists'] = '�La direcci�n de correo electr�nico ingresada ya existe en nuestra base de datos! Si no recuerdas tu contrase�a haz clic en el enlace de recuperar clave.';
$lng['users']['errors']['password_missing'] = 'Ingresa tu Contrase�a!';
$lng['users']['errors']['password_not_match'] = '�Las contrase�as no coinciden!';
$lng['users']['errors']['invalid_validation_string'] = '�Datos de validaci�n incorrectos!';
$lng['users']['errors']['invalid_account_or_activation'] = '�Error! Si no puedes acceder a tu cuenta, por favor revisa si ya la activaste o solicita una revisi�n en nuestro formulario de Contacto.';
$lng['users']['errors']['account_already_active'] = '�Tu cuenta est� activada!';

$lng['users']['info']['activate_account'] = 'Un email ha sido enviado a tu casilla de correo electr�nico. �brelo y revisa la informaci�n para activar tu cuenta.';
$lng['users']['info']['welcome_user'] = 'Tu cuenta ha sido creada. �<a href="login.php">Ingresar</a>!';
$lng['users']['info']['account_info_updated'] = '�La informaci�n ha sido actualizada!';
$lng['users']['info']['password_changed'] = '�Tu contrase�a ha sido cambiada!';
$lng['users']['info']['account_activated'] = 'Tu cuenta ha sido activada. �<a href="login.php">Ingresar</a>!';



// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Anuncio';
$lng['listings']['category'] = 'Categor�a';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Precio';
$lng['listings']['country'] = 'Pa�s';
$lng['listings']['state'] = 'Departamento';
$lng['listings']['city'] = 'Ciudad';
$lng['listings']['ad_description'] = 'Detalles Breves';
$lng['listings']['title'] = 'T�tulo del Anuncio';
$lng['listings']['description'] = 'Detalles';
$lng['listings']['image'] = 'Imagen';
$lng['listings']['words_left'] = 'Caracteres Restantes';
$lng['listings']['enter_photos'] = 'Ingresar Fotos';
$lng['listings']['choose_payment_method'] = 'M�todos de Pago';
$lng['listings']['ad_information'] = 'Informaci�n';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['select_package'] = 'Elige un Plan';
$lng['listings']['packages_details'] = 'Detalles';
$lng['listings']['other'] = 'Otro';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['stock_no'] = 'N� de inventario';
$lng['listings']['location'] = 'Ubicaci�n';
$lng['listings']['contact_info'] = 'Informaci�n de Contacto';
$lng['listings']['email_seller'] = 'Contactar al Anunciante';
$lng['listings']['no_recent_ads'] = 'No hay avisos recientes';
$lng['listings']['no_ads'] = 'Sin anuncios en esta categor�a';
$lng['listings']['added_on'] = 'Publicado el';
$lng['listings']['send_mail'] = 'Email enviado al Usuario';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['user'] = 'Usuario';
$lng['listings']['price'] = 'Precio';
$lng['listings']['confirm_delete'] = '�Est�s seguro de que deseas eliminar el Anuncio?';
$lng['listings']['confirm_delete_all'] = '&iquest;Est�s seguro de que deseas eliminar los Anuncios seleccionados?';
$lng['listings']['all'] = 'Todos los Anuncios';
$lng['listings']['active_listings'] = 'Anuncios Activos';
$lng['listings']['pending_listings'] = 'Anuncios en proceso';
$lng['listings']['featured_listings'] = 'Anuncios Destacados';
$lng['listings']['pending_featured_listings'] = 'Anuncios Destacados en proceso';
$lng['listings']['expired_listings'] = 'Anuncios Expirados';
$lng['listings']['active'] = 'Activo';
$lng['listings']['inactive'] = 'Inactivo';
$lng['listings']['pending'] = 'En proceso';
$lng['listings']['featured'] = 'Destacado';
$lng['listings']['pending_featured'] = 'Caracter�sticas (P)';
$lng['listings']['expired'] = 'Expirados';
$lng['listings']['order_by_date'] = 'Ordenar por Fecha';
$lng['listings']['order_by_category'] = 'Ordenar por Categor�a';
$lng['listings']['order_by_make'] = 'Ordenar por Fabricante';
$lng['listings']['order_by_price'] = 'Ordenar por Precio';
$lng['listings']['order_by_views'] = 'Ordenar por Visitas';
$lng['listings']['order_asc'] = 'De Menor a Mayor';
$lng['listings']['order_desc'] = 'De Mayor a Menor';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visitas';
$lng['listings']['date'] = 'Fecha';
$lng['listings']['no_listings'] = 'Sin registros';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'No hay anuncios con esa ID';
$lng['listings']['mark_sold'] = 'Marcar como Vendido';
$lng['listings']['mark_unsold'] = 'Desmarcar como Vendido';
$lng['listings']['feature'] = 'Caracter�stica';
$lng['listings']['sold'] = 'Vendido';
$lng['listings']['expired_on'] = 'Expirado el';
$lng['listings']['renew'] = 'Renovar';
$lng['listings']['print_page'] = 'Imprimir';
$lng['listings']['recommend_this'] = 'Recomendar';
$lng['listings']['more_listings'] = 'M�s registros de este anunciante';
$lng['listings']['all_listings_for'] = 'Todos los anuncios de';
$lng['listings']['free_category'] = 'Categor�a Gratuita';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = '&iquest;Est�s seguro de que deseas borrar la imagen?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='�Caracteres excedidos! Tienes hasta un m�ximo de ::MAX::.'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='�Tu anuncio contiene palabras no permitidas! Por favor revisa su contenido.';
$lng['listings']['errors']['title_missing']='�Ingresa el T�tulo del anuncio!';
$lng['listings']['errors']['category_missing']='�Ingresa una Categor�a!';
$lng['listings']['errors']['invalid_category']='�Categor�a inv�lida! Revisa las disponibles o escr�benos solicitando su incorporaci�n.';
$lng['listings']['errors']['package_missing']='�Selecciona un Plan!';
$lng['listings']['errors']['invalid_package']='�Plan inv�lido o no disponible!';
$lng['listings']['errors']['content_missing']='�Ingresa informaci�n a tu anuncio!';
$lng['listings']['errors']['invalid_price']='�Precio inv�lido!';
/*$lng['listings']['errors']['make_missing']='�Selecciona un Fabricante!';
$lng['listings']['errors']['invalid_make']='�Fabricante inv�lido! Revisa los disponibles o escr�benos solicitando su incorporaci�n.';
$lng['listings']['errors']['model_missing']='�Selecciona un modelo!';
$lng['listings']['errors']['invalid_model']='�Modelo inv�lido! Revisa los disponibles o escr�benos solicitando su incorporaci�n.';
$lng['listings']['errors']['invalid_country']='�Pa�s inv�lido! Revisa los disponibles o escr�benos solicitando su incorporaci�n.';
$lng['listings']['errors']['invalid_state']='�Departamento inv�lido!';*/
$lng['listings']['errors']['user_missing']='�Ingresa un Nombre de Usuario!';

// ------------------- ADVANCED SEARCH -----------------
$lng['adv_search']['make'] = 'Fabricante';
$lng['adv_search']['model'] = 'Modelo';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'M�nimo';
$lng['quick_search']['price_high'] = 'Maximo';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Publicar un Anuncio';
$lng['useraccount']['browse_your_listings'] = 'Administrar tus Anuncios';
$lng['useraccount']['modify_account_info'] = 'Modificar tu Cuenta';
$lng['useraccount']['order_history'] = 'Historial de Pedidos';
$lng['useraccount']['total_listings'] = 'Anuncios Totales';
$lng['useraccount']['total_views'] = 'Total de Visitas';
$lng['useraccount']['active_listings'] = 'Anuncios Activos';
$lng['useraccount']['pending_listings'] = 'Anuncios en Proceso';
$lng['useraccount']['last_login'] = '�ltimo ingreso a tu cuenta';
$lng['useraccount']['last_login_ip'] = 'La IP desde donde ingresaste por �ltima vez fue';
$lng['useraccount']['expired_listings'] = 'Anuncios Expirados';
$lng['useraccount']['statistics'] = 'Estad�sticas';
$lng['useraccount']['welcome'] = 'Bienvenido';
$lng['useraccount']['contact_name'] = 'Nombre de Contacto';
$lng['useraccount']['email'] = 'Correo Electr�nico';
$lng['useraccount']['address'] = 'Direcci�n';
$lng['useraccount']['phone'] = 'Tel�fono';
$lng['useraccount']['mobile'] = 'Celular';
$lng['useraccount']['webpage'] = 'Sitio Web';
$lng['useraccount']['password'] = 'Contrase�a';
$lng['useraccount']['repeat_password'] = 'Repetir Contrase�a';
$lng['useraccount']['change_password'] = 'Cambiar Contrase�a';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = '�La transacci�n con PayPal ha sido cancelada!';
$lng['paypal']['invalid_paypal_transaction'] = '�Transacci�n con PayPal inv�lida!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Pagar con 2Checkout!';
$lng['to_checkout']['invalid_2co_transaction'] = '�Transacci�n con 2Checkout inv�lida!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'a';
$lng['advanced_search']['price_min'] = 'Precio M�n';
$lng['advanced_search']['price_max'] = 'Precio M�x';
$lng['advanced_search']['word'] = 'Palabra';
$lng['advanced_search']['sort_by'] = 'Ordenar por';
$lng['advanced_search']['sort_by_price'] = 'Ordenar por Precio';
$lng['advanced_search']['sort_by_date'] = 'Ordenar por Fecha';
$lng['advanced_search']['sort_by_make'] = 'Ordenar por Fabricante';
$lng['advanced_search']['sort_descendant'] = 'Ordenar de Mayor a Menor';
$lng['advanced_search']['sort_ascendant'] = 'Ordenar de Menor a Mayor';
$lng['advanced_search']['only_ads_with_pic'] = 'S�lo Anuncios con Im�genes';
$lng['advanced_search']['no_results'] = '�Tu solicitud no gener� resultados!';
$lng['advanced_search']['multiple_ads_matching'] = '�Hay ::NO_ADS:: anuncios que coinciden con tu solicitud!';
$lng['advanced_search']['single_ad_matching'] = '�Hay un anuncio que coincide con tu solicitud!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nombre';
$lng['contact']['subject'] = 'Asunto';
$lng['contact']['email'] = 'Correo Electr�nico';
$lng['contact']['webpage'] = 'Sitio Web';
$lng['contact']['comments'] = 'Comentarios';
$lng['contact']['message_sent'] = '�Tu mensaje ha sido enviado!';
$lng['contact']['sending_message_failed'] = 'Envio fallido, por favor intenta m�s tarde.';
$lng['contact']['mailto'] = 'Enviar Correo Electr�nico a';

$lng['contact']['error']['name_missing'] = '�Ingresa tu Nombre!';
$lng['contact']['error']['subject_missing'] = '�Ingresa el Asunto!';
$lng['contact']['error']['email_missing'] = '�Ingresa tu Email!';
$lng['contact']['error']['invalid_email'] = '�Email incorrecto!';
$lng['contact']['error']['comments_missing'] = '�Ingresa tus Comentarios!';
$lng['contact']['error']['invalid_validation_number'] = '�N�mero de validaci�n incorrecto! Revisa que no existan espacios';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Direcci�n de Correo Electr�nico';
$lng['password_recovery']['new_password'] = 'Nueva Contrase�a';
$lng['password_recovery']['repeat_new_password'] = 'Repetir Nueva Contrase�a';
$lng['password_recovery']['invalid_key'] = 'N�mero de activaci�n inv�lido';

$lng['password_recovery']['email_missing'] = '�Ingresa tu Email!';
$lng['password_recovery']['invalid_email'] = 'Email inv�lido';
$lng['password_recovery']['email_inexistent'] = 'No hay registros que coincidan con la direcci�n de Email ingresada. Por favor revisa el correo de tu inscripci�n.';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Valor';
$lng['packages']['words'] = 'Palabras';
$lng['packages']['days'] = 'D�as';
$lng['packages']['pictures'] = 'Fotos';
$lng['packages']['picture'] = 'Foto';
$lng['packages']['available'] = 'Disponible';
$lng['packages']['featured'] = 'Destacado';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Procesador de pagos';
$lng['order_history']['amount'] = 'Valor';
$lng['order_history']['completed'] = 'Finalizado';
$lng['order_history']['not_completed'] = 'Incompleto';
$lng['order_history']['ad_no'] = 'ID del Anuncio';
$lng['order_history']['date'] = 'Fecha';
$lng['order_history']['no_actions'] = 'Sin Registros';
$lng['order_history']['order_by_date'] = 'Ordenar por Fecha';
$lng['order_history']['order_by_amount'] = 'Ordenar por Valor';
$lng['order_history']['order_by_processor'] = 'Ordenar por Procesador de Pagos';
$lng['order_history']['description'] = 'Detalles';
$lng['order_history']['newad'] = 'Publicar Anuncio'; 
$lng['order_history']['renew'] = 'Renovar Anuncio'; 
$lng['order_history']['featured'] = 'Anuncio Destacado'; 


// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Precio seg�n las caracter�sticas del anuncio';
$lng['featuread']['choose_payment_method'] = 'Escoger el m�todo de pago';
$lng['featuread']['feature_your_ad'] = 'Caracter�sticas de tu anuncio';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Precio';
$lng['renew']['choose_payment_method'] = 'Seleccionar Forma de Pago';
$lng['renew']['renew_your_ad'] = 'Renovar';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ordenar por Fecha';
$lng['order']['price'] = 'Ordenar por Precio';
$lng['order']['title'] = 'Ordenar por T�tulo';
$lng['order']['desc'] = 'De Mayor a Menor';
$lng['order']['asc'] = 'De Menor a Mayor';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Recomendar Anuncio';
$lng['recommend']['your_name'] = 'Tu Nombre';
$lng['recommend']['your_email'] = 'Tu Email';
$lng['recommend']['friend_name'] = 'Nombre de tu amigo';
$lng['recommend']['friend_email'] = 'Email de tu amigo';
$lng['recommend']['message'] = 'Mensaje';


$lng['recommend']['error']['your_name_missing'] = '�Ingresa tu Nombre!';
$lng['recommend']['error']['your_email_missing'] = '�Ingresa tu Email!';
$lng['recommend']['error']['friend_name_missing'] = '�Ingresa el Nombre de tu amigo!';
$lng['recommend']['error']['friend_email_missing'] = '�Ingresa el Email de tu amigo!';
$lng['recommend']['error']['invalid_email'] = '�Email incorrecto!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Anuncios';
$lng['stats']['general'] = 'Principal';

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Suscribirse';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Estado';
$lng['general']['favourites'] = 'Favoritos';
$lng['general']['as'] = 'como';
$lng['general']['view'] = 'Ver';
$lng['general']['none'] = 'Ninguno';
$lng['general']['yes'] = 'si';
$lng['general']['no'] = 'no';
$lng['general']['next'] = 'Pr�ximo';
$lng['general']['finish'] = 'Finalizar';
$lng['general']['download'] = 'Descargar';
$lng['general']['remove'] = 'Remover';
$lng['general']['previous_page'] = '� Anterior';
$lng['general']['next_page'] = 'Siguiente �';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Activo';
$lng['general']['inactive'] = 'Inactivo';
$lng['general']['expires'] = 'Expira el';
$lng['general']['available'] = 'Disponible';
$lng['general']['cancel'] = 'Cancelar';
$lng['general']['never'] = 'Nunca';
$lng['general']['asc'] = 'Ascendente';
$lng['general']['desc'] = 'Descendente';
$lng['general']['pending'] = 'Pendiente';
$lng['general']['upload'] = 'Subir';
$lng['general']['processing'] = 'Procesando, por favor, espere ... ';
$lng['general']['help'] = 'Ayuda';
$lng['general']['hide'] = 'Ocultar';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['check_all'] = 'Marcar Todos';
$lng['general']['uncheck_all'] = 'Desmarcar Todos';
$lng['general']['all'] = 'Todos';


// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'P�gina Comercio';
$lng['users']['store_banner'] = 'Logo del Comercio';
$lng['users']['waiting_mail_activation'] = 'Esperando Email de activaci�n';
$lng['users']['waiting_admin_activation'] = 'Esperando aprobaci�n del administrador';
$lng['users']['no_such_id'] = 'Este usuario no existe.';

$lng['users']['info']['store_banner'] = 'Esta imagen ser� utilizada como logo de su comercio y aparecer� en la parte superior de su p�gina.';

// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Denunciar';
$lng['listings']['report_reason'] = 'Informar Raz�n';
$lng['listings']['meta_info'] = 'Meta Informaci�n';
$lng['listings']['meta_keywords'] = 'Palabras Clave ';
$lng['listings']['meta_description'] = 'Meta Descripci�n';
$lng['listings']['not_approved'] = 'No Aprobado';
$lng['listings']['approve'] = 'Aprobar';
$lng['listings']['choose_payment_method'] = 'Elegir m�todo de pago';

$lng['listings']['choose_category'] = 'Elegir Categor�a';
$lng['listings']['choose_plan'] = 'Elegir Plan';
$lng['listings']['enter_ad_details'] = 'Detalles del Anuncio';
$lng['listings']['ad_details'] = 'Detalles del Anuncio';
$lng['listings']['add_photos'] = 'Im�genes';
$lng['listings']['ad_photos'] = 'Im�genes del Anuncio';
$lng['listings']['edit_photos'] = 'Editar Im�genes';
$lng['listings']['extra_options'] = 'Opciones Adicionales';
$lng['listings']['review'] = 'Revisi�n del Anuncio';
$lng['listings']['finish'] = 'Finalizar';
$lng['listings']['next_step'] = 'Paso Siguiente &raquo;';
$lng['listings']['included'] = 'Incluido';
$lng['listings']['finalize'] = 'Finalizar';
$lng['listings']['zip'] = 'C�digo Postal';
$lng['listings']['add_to_favourites'] = 'A�adir a Favoritos';
$lng['listings']['confirm_add_to_fav'] = 'Advertencia: no haz iniciado sesi�n, por lo que la lista de Favoritos ser� temporal.';
$lng['listings']['add_to_fav_done'] = '�El Anuncio fue a�adido a la lista de Favoritos!';
$lng['listings']['confirm_delete_favourite'] = '&iquest;Est�s seguro de que deseas borrar el Anuncio de los Favoritos?';
$lng['listings']['no_favourites'] = 'No se encontraron Favoritos';
$lng['listings']['extra_options'] = 'Opciones Adicionales';
$lng['listings']['highlited'] = 'Remarcado';
$lng['listings']['priority'] = 'Prioridad';
$lng['listings']['video'] = 'V�deo Clasificados';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'En espera de v�deo';
$lng['listings']['video_code'] = 'C�digo del V�deo';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = '�Aprobar y Publicar Anuncio!';
$lng['listings']['finalize_later'] = 'Finalizar m�s tarde';
$lng['listings']['click_to_upload'] = 'Haz clic en el icono de arriba para cargar tus im�genes';
$lng['listings']['files_uploaded'] = ' foto(s) cargadas de un total de ';
$lng['listings']['allowed'] = ' permitidas';
$lng['listings']['limit_reached'] = ' L�mite m�ximo de im�genes alcanzado';
$lng['listings']['edit_options'] = 'Editar Opciones del Anuncio';
$lng['listings']['view_store'] = 'Ver P�gina del Comercio';
$lng['listings']['edit_ad_options'] = 'Editar Opciones del Anuncio';
$lng['listings']['no_extra_options_selected'] = '�No hay opciones adicionales seleccionadas!';
$lng['listings']['highlited_listings'] = 'Anuncios Remarcados';
$lng['listings']['for_listing'] = 'de inclusi�n en la lista no ';
$lng['listings']['expires_on'] = 'Expira';
$lng['listings']['expired_on'] = 'Expirado';
$lng['listings']['pending_ad'] = 'Anuncios Pendientes';
$lng['listings']['pending_highlited'] = 'Anuncios Remarcados Pendientes';
$lng['listings']['pending_featured'] = 'Anuncios Destacados Pendientes';
$lng['listings']['pending_priority'] = 'En espera de Prioridad';
$lng['listings']['enter_coupon'] = 'Introduzca el c�digo de descuento';
$lng['listings']['discount'] = 'Descuento';
$lng['listings']['select_plan'] = 'Seleccione el Plan';
$lng['listings']['pending_subscription'] = 'Pendientes de suscripci�n';
$lng['listings']['remove_favourite'] = 'Eliminar Favorito';

$lng['listings']['order_up'] = 'Orden subir';
$lng['listings']['order_down'] = 'Orden bajar';

$lng['listings']['errors']['invalid_youtube_video'] = '�Video de YouTube no v�lido!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Suscribirse';
$lng['useraccount']['no_package'] = 'No plan de anuncios';
$lng['useraccount']['packages'] = 'Planes';
$lng['useraccount']['date_start'] = 'Fecha de Inicio';
$lng['useraccount']['date_end'] = 'Fecha de Finalizaci�n';
$lng['useraccount']['remaining_ads'] = 'Anuncios Restantes';
$lng['useraccount']['account_type'] = 'Tipo de cuenta';
$lng['useraccount']['unfinished_listings'] = 'Anuncios Inconclusos';
$lng['useraccount']['confirm_delete_subscription'] = '&iquest;Est�s seguro de que deseas eliminar esta suscripci�n?';
$lng['useraccount']['buy_store'] = 'Comprar P�gina del Comercio';
$lng['useraccount']['bulk_uploads'] = 'Cargas Masivas';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Suscripci�n';
$lng['packages']['ads'] = 'Anuncios';
$lng['packages']['name'] = 'Nombre';
$lng['packages']['details'] = 'Detalles';
$lng['packages']['no_ads'] = 'N�mero de Anuncios';
$lng['packages']['subscription_time'] = 'Tiempo de Suscripci�n';
$lng['packages']['no_pictures'] = 'Im�genes permitidas';
$lng['packages']['no_words'] = 'N�mero de Palabras';
$lng['packages']['ads_availability'] = 'Disponibilidad de Anuncios';
$lng['packages']['featured'] = 'Destacado';
$lng['packages']['highlited'] = 'Remarcado';
$lng['packages']['priority'] = 'Prioridad';
$lng['packages']['video'] = 'V�deo Clasificados';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Suscripci�n';
$lng['order_history']['post_listing'] = 'Publicar Anuncio';
$lng['order_history']['renew_listing'] = 'Renovar Anuncio';
$lng['order_history']['feature_listing'] = 'Anuncio Destacado';
$lng['order_history']['subscribe_to_package'] = 'Suscribirse al Plan';
$lng['order_history']['complete_payment'] = 'Completar el Pago';
$lng['order_history']['complete_payment_for'] = 'Completar el Pago para';
$lng['order_history']['details'] = 'Detalles';
$lng['order_history']['subscription_no'] = 'Suscripci�n N�';
$lng['order_history']['highlited'] = 'Remarcado del Anuncio';
$lng['order_history']['priority'] = 'Prioridad';
$lng['order_history']['video'] = 'Video Clasificados';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Por favor, seleccione un Plan';
$lng['buy_package']['error']['choose_processor'] = 'Por favor, seleccione el m�todo de pago';
$lng['buy_package']['error']['invalid_processor'] = 'Procesador de pago no v�lido';
$lng['buy_package']['error']['invalid_package'] = 'Plan no v�lido';

// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transacci�n con Paypal no v�lida';
$lng['2co']['invalid_transaction'] = 'Transacci�n con 2checkout no v�lida';
$lng['moneybookers']['invalid_transaction'] = 'Transacci�n con Moneybookers no v�lida';
$lng['authorize']['invalid_transaction'] = 'Transacci�n con Authorize.net no v�lida';
$lng['manual']['invalid_transaction'] = 'Transacci�n no v�lida';

$lng['paypal']['transaction_canceled'] = 'Operaci�n con Paypal cancelada';
$lng['2co']['transaction_canceled'] = 'Operaci�n con 2checkout cancelada';
$lng['moneybookers']['transaction_canceled'] = 'Operaci�n con Moneybookers cancelada';
$lng['authorize']['transaction_canceled'] = 'Operaci�n con Authorize.net cancelada';
$lng['manual']['transaction_canceled'] = 'Transacci�n cancelada';

$lng['payments']['transaction_already_processed'] = 'La operaci�n ya ha sido procesada';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Aprobar Suscripci�n';
$lng['subscribe']['payment_method'] = 'M�todo de Pago';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copia de correo electr�nico: ';
$lng['bcc_mails']['from'] = 'De: ';
$lng['bcc_mails']['to'] = 'Para: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Estado de carga masiva: ';
$lng['ie']['successfully'] = 'anuncios agregados exitosamente';
$lng['ie']['failed'] = 'error';
$lng['ie']['uploaded_listings'] = 'Lista de Anuncios cargados:';
$lng['ie']['errors']['upload_import_file'] = 'Por favor, suba el archivo desde donde importar';
$lng['ie']['errors']['incorrect_file_type'] = 'Extensi�n de archivo incorrecta. El tipo de archivo debe ser: ';
$lng['ie']['errors']['could_not_open_file'] = 'No se pudo abrir el archivo';
$lng['ie']['errors']['choose_categ'] = 'Por favor, elija una Categor�a';
$lng['ie']['errors']['could_not_save_file'] = 'No se pudo descargar el archivo: ';
$lng['ie']['errors']['required_field_missing'] = 'Falta el campo obligatorio: ';


// -------------------------------------------------------------
// 
//		THE FOLLOWING PART IS NOT TRANSLATED!!!! 
//
// -------------------------------------------------------------


$lng['ie']['errors']['incorrect_data_count'] = 'Datos incorrectos para: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Buscar por �rea';
$lng['areasearch']['all_locations'] = 'Todas partes';
$lng['areasearch']['exact_location'] = 'Especificar';
$lng['areasearch']['around'] = 'Cerca';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Elegir Anunciante';

// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Si';
$lng['general']['No'] = 'No';
$lng['general']['or'] = 'o';
$lng['general']['in'] = 'en';
$lng['general']['by'] = 'por';
$lng['general']['close_window'] = 'Cerrar';
$lng['general']['more_options'] = 'M�s opciones &raquo;';
$lng['general']['less_options'] = '&laquo; Menos opciones';
$lng['general']['send'] = 'Enviar';
$lng['general']['save'] = 'Guardar';
$lng['general']['for'] = 'para';
$lng['general']['to'] = 'en';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Marcar como Alquilado';
$lng['listings']['mark_unrented'] = 'Desmarcar como Alquilado';
$lng['listings']['rented'] = 'Alquilado';
$lng['listings']['your_info'] = 'Tu informaci�n';
$lng['listings']['email'] = 'Tu Email';
$lng['listings']['name'] = 'Tu Nombre';
$lng['listings']['listing_deleted'] = '�Tu Anuncio fue borrado!';
$lng['listings']['post_without_login'] = 'Publicar sin registrarte';
$lng['listings']['waiting_activation'] = 'Esperando por activaci�n';
$lng['listings']['waiting_admin_approval'] = 'Esperando por aprobaci�n del administrador';
$lng['listings']['dont_need_account'] = '�No necesitas una cuenta? �Publica tu Anuncio GRATIS y sin necesidad de registrarte!';
$lng['listings']['post_your_ad'] = '�Publicar Anuncio!';
$lng['listings']['posted'] = 'Publicado';
$lng['listings']['select_subscription'] = 'Elegir Suscripci�n';
$lng['listings']['choose_subscription'] = 'Elegir Suscripci�n';
$lng['listings']['inactive_listings'] = 'Anuncios Inactivos';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Refinar B�squeda';
$lng['search']['refine_by_keyword'] = 'Refinar por Palabra Clave';
$lng['search']['showing'] = 'Mostrar';
$lng['search']['more'] = 'M�s ...';
$lng['search']['less'] = 'Menos ...';
$lng['search']['search_for'] = 'Buscar';
$lng['search']['save_your_search'] = 'Guardar b�squeda';
$lng['search']['save'] = 'Guardar';
$lng['search']['search_saved'] = '�B�squeda guardada!';
$lng['search']['must_login_to_save_search'] = '�Debes ingresar a tu cuenta para guardar tu b�squeda!';
$lng['search']['view_search'] = 'Ver b�squeda';
$lng['search']['all_categories'] = 'Todas las Categor�as';
$lng['search']['more_than'] = 'm�s de';
$lng['search']['less_than'] = 'menos de';

$lng['search']['error']['cannot_save_empty_search'] = 'Tu b�squeda no contiene resultados, por lo tanto no se puede guardar.';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'B�squedas Guardadas';
$lng['useraccount']['view_saved_searches'] = 'Ver B�squedas Guardadas';
$lng['useraccount']['no_saved_searches'] = 'No hay B�squedas Guardadas';
$lng['useraccount']['recurring'] = 'Recurrente';
$lng['useraccount']['date_renew'] = 'Renovaci�n';
$lng['useraccount']['logged_in_as'] = 'Ingresaste como ';
$lng['useraccount']['subscriptions'] = 'Suscripciones';

$lng['users']['activate_account'] = 'Activar Cuenta';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Agregar Suscripci�n';
$lng['subscriptions']['package'] = 'Suscripci�n';
$lng['subscriptions']['remaining_ads'] = 'Anuncios Restantes';
$lng['subscriptions']['recurring'] = 'Recurrente';
$lng['subscriptions']['date_start'] = 'Fecha de Inicio';
$lng['subscriptions']['date_end'] = 'Fecha de Finalizaci�n';
$lng['subscriptions']['date_renew'] = 'Renovaci�n';
$lng['subscriptions']['confirm_delete'] = '&iquest;Est�s seguro de que deseas borrar la suscripci�n?';
$lng['subscriptions']['no_subscriptions'] = 'Sin Suscripciones';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = '�A�n no te has registrado?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Permitir pagos recurrentes para esta suscripci�n';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Faltan los siguientes campos requeridos: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Comprar P�gina de Comercios';


$lng['images']['errors']['max_photos'] = '�N�mero m�ximo de im�genes!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Alerta por Email';
$lng['alerts']['email_alerts'] = 'Alertas por Email';
$lng['alerts']['no_alerts'] = 'No existen Alertas';
$lng['alerts']['view_email_alerts'] = 'Ver Alertas';
$lng['alerts']['send_email_alerts'] = 'Enviar Alertas';
$lng['alerts']['immediately'] = 'Inmediatas';
$lng['alerts']['daily'] = 'Diarias';
$lng['alerts']['weekly'] = 'Semanales';
$lng['alerts']['your_email'] = ' Ingresar Correo Electr�nico';
$lng['alerts']['create_alert'] = 'Crear Alerta';
$lng['alerts']['email_alert_info'] = 'Recibe Alertas en tu cuenta de Email';
$lng['alerts']['alert_added'] = '�La alerta fue creada!';
$lng['alerts']['alert_added_activate'] = 'Pronto recibir�s un Email en <b>::EMAIL::</b>. Por favor haz clic en el link que recibiras en tu casilla de correo electr�nico para activar tu alerta.'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Buscar en';
$lng['alerts']['keyword'] = 'palabra';
$lng['alerts']['frequency'] = 'Frecuencia';
$lng['alerts']['alert_activated'] = 'Alerta activada, recibir�s notificaciones en tu Email.';
$lng['alerts']['alert_unsubscribed'] = '�La Alerta fue borrada!';
$lng['alerts']['started_on'] = 'Iniciar en';
$lng['alerts']['no_terms_searched'] = '�No se encontr� ning�n resultado!';
$lng['alerts']['no_listings'] = '�No hay anuncios para esta alerta!';

$lng['alerts']['error']['email_required'] = '�Ingresa una direcci�n de Email para la alerta!';
$lng['alerts']['error']['invalid_email'] = '�Cuenta de Email no v�lida!';
$lng['alerts']['error']['invalid_frequency'] = '�Duraci�n no v�lida!';
$lng['alerts']['error']['login_required'] = 'Para activar tu alerta, haz clic <a href="::LINK::">aqu�</a>.'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Por favor, selecciona al menos una palabra de b�squeda';
$lng['alerts']['error']['invalid_confirmation'] = '�Confirmacion de alerta no v�lida!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Solicitud de desuscripci�n no v�lida';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calcular Pr�stamo';
$lng_loancalc['sale_price'] = 'Precio venta';
$lng_loancalc['down_payment'] = 'Pagos por';
$lng_loancalc['trade_in_value'] = 'Valor convenido';
$lng_loancalc['loan_amount'] = 'Cantidad';
$lng_loancalc['sales_tax'] = 'Impuesto';
$lng_loancalc['interest_rate'] = 'Tasa de inter�s';
$lng_loancalc['loan_term'] = 'Duraci�n';
$lng_loancalc['months'] = 'meses';
$lng_loancalc['years'] = 'a�os';
$lng_loancalc['or'] = 'o';
$lng_loancalc['monthly_payment'] = 'Pago mensual';
$lng_loancalc['calculate'] = 'Calcular';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comentarios';
$lng_comments['make_a_comment'] = 'Escribe tu Comentario';
$lng_comments['login_to_post'] = 'Para publicar un Comentario, haz clic <a href="::LOGIN_LINK::">aqu�</a>.';

$lng_comments['name'] = 'Nombre';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Sitio Web';
$lng_comments['submit_comment'] = 'Publicar';

$lng_comments['error']['name_missing'] = '�Ingresa tu nombre!';
$lng_comments['error']['content_missing'] = '�Ingresa tu comentario!';
$lng_comments['error']['website_missing'] = '�Ingresa tu p�gina web!';
$lng_comments['error']['email_missing'] = '�Ingresa tu Email!';
$lng_comments['error']['listing_id_missing'] = '�Comentario no v�lido!';

$lng_comments['error']['invalid_email'] = '�Email no v�lido!';
$lng_comments['error']['invalid_website'] = '�Sitio Web no v�lido!';
$lng_comments['errors']['badwords'] = 'Tu comentario contiene palabras prohibidas. Por favor corr�gelo.';

$lng_comments['info']['comment_added'] = '�Tu comentario fue agregado! Haz clic <a id="newad">aqu�</a> si quieres publicar otro comentario.';
$lng_comments['info']['comment_pending'] = 'Comentario a la espera de aprobaci�n.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Siguiente &raquo;';
$lng['tb']['prev'] = '&laquo; Anterior';
$lng['tb']['close'] = 'Cerrar';
$lng['tb']['or_esc'] = 'o presionar ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mensajes';
$lng['messages']['confirm_delete_all'] = '�Est� seguro de que desea eliminar los mensajes seleccionados?';
$lng['messages']['listing'] = 'Anuncio';
$lng['messages']['no_messages'] = 'No hay mensajes';
$lng['general']['reply'] = 'Responder al mensaje';
$lng['messages']['message'] = 'Mensaje';
$lng['messages']['from'] = 'Desde';
$lng['messages']['to'] = 'A';
$lng['messages']['on'] = 'Fecha';
$lng['messages']['view_thread'] = 'Ver secuencia';
$lng['messages']['started_for_listing'] = 'Iniciado por anuncio';
$lng['messages']['view_complete_message'] = 'Ver mensaje completo aqu�';
$lng['messages']['message_history'] = 'Historial de mensajes';
$lng['messages']['yourself'] = 'Usted';
$lng['messages']['report_spam'] = 'Reportar como Spam';
$lng['messages']['reported_as_spam'] = 'Reportado como Spam';
$lng['messages']['confirm_report_spam'] = '�Est�s seguro de que deseas reportar este mensaje como Spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'ID inv�lido';
$lng['listings']['show_map'] = 'Mostrar mapa';
$lng['listings']['hide_map'] = 'Ocultar mapa';
$lng['listings']['see_full_listing'] = 'Ver anuncio completo';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'El anuncio fue eliminado de la lista de favoritos!';
$lng['search']['high_no_results'] = 'El n�mero de resultados de tu b�squeda es muy alta. Los resultados mencionados se limitan a los m�s relevantes de los resultados. Por favor, refina tu b�squeda a�n m�s con el fin de disminuir el n�mero de resultados y obtener resultados m�s pertinentes!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = '�Este email no est� permitido!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'No tienes permitido el uso de esta suscripci�n nunca m�s, el n�mero m�ximo de uso ha sido alcanzado';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Elige la ubicaci�n';
$lng['location']['choose'] = 'Elige';
$lng['location']['change'] = 'Cambiar';
$lng['location']['all_locations'] = 'All locations';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = '';
$lng ['location'] ['save_location'] = 'Guardar ubicaci�n ';
$lng ['credits'] ['credits'] = 'Cr�ditos';
$lng ['credits'] ['credit'] = 'cr�dito';
$lng ['credits'] ['pending_credits'] = 'cr�ditos pendientes';
$lng ['credits'] ['current_credits'] = 'cr�ditos actual';
$lng ['credits'] ['one_credit_equals'] = 'Un cr�dito equivale a';
$lng ['credits'] ['credits_amount'] = 'cantidad de cr�ditos ';
$lng ['credits'] ['buy_extra_credits'] = 'Compra cr�ditos adicionales';
$lng ['credits'] ['credits_package'] = 'paquete de cr�ditos';
$lng ['credits'] ['select_package'] = 'Elige paquete de cr�ditos';
$lng ['credits'] ['choose_package'] = 'Elija el paquete ';
$lng ['credits'] ['you_currently_have'] = 'Usted tiene actualmente ';
$lng ['credits'] ['you_currently_have_no_credits'] = 'Actualmente no tienes cr�ditos';
$lng ['credits'] ['pay_using_credits'] = 'Pagar con cr�ditos';
$lng ['credits'] ['not_enough_credits'] = 'No suficientes cr�ditos para el pago';
$lng ['credits'] ['scredits'] = 'cr�ditos';
$lng ['credits'] ['scredit'] = 'cr�dito';



$lng ['order_history'] ['credits_purchase'] = 'Compra de cr�ditos ';
$lng ['order_history'] ['invalid_order'] = 'Pedido no v�lido';

// ------------------- end version 7.06 ------------------

$lng['listings']['wait_while_redirected'] = 'Por favor espere, usted est� siendo redirigido!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Por favor, <a href="::LOGIN_LINK::">ingresa</a> para que puedas ver la informaci�n de contacto!';
$lng['listing']['no_contact_information'] = 'No hay informaci�n de contacto disponible.';


$lng['navbar']['register_as'] = 'Registrarse como';
$lng['listings']['all_ads'] = 'Todos los anuncios';
$lng['listings']['refine'] = 'Refinar';
$lng['listings']['results'] = 'resultados';
$lng['listings']['photos'] = 'fotos';
$lng['listings']['user_details'] = 'Ver  detalles de usuario';
$lng['listings']['back_to_details'] = 'Volver a detalles del anuncio';

$lng['listings']['post_free_ad'] = 'Publicar anuncio gratis';

$lng['users']['username_available'] = 'El nombre de usuario est� disponible!';
$lng['users']['username_not_available'] = 'Nombre de usuario no est� disponible!';

$lng['general']['not_found'] = 'La p�gina solicitada no se ha encontrado!';
$lng['general']['full_version'] = 'La versi�n completa';
$lng['general']['mobile_version'] = 'Versi�n m�vil';
$lng['failed'] = 'Fallido';
$lng['remember_me'] = 'Recordarme';

$lng['less_than_a_minute'] = 'un minuto antes';
$lng['minute'] = 'minuto';
$lng['minutes'] = 'minutos';
$lng['hour'] = 'hora';
$lng['hours'] = 'horas';
$lng['yesterday'] = 'Ayer';
$lng['day'] = 'd�a';
$lng['days'] = 'd�as';
$lng['ago_postfix'] = '';
$lng['ago_prefix'] = 'Hace ';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Hoy';
$lng['messages']['confirm_delete'] = '�Seguro que quieres borrar este mensaje?';
$lng['listings']['change_category'] = 'Cambiar categor�a';
$lng['listings']['change_plan'] = 'Seleccione un plan diferente';
$lng['listings']['choose_active_subscription'] = 'Elige desde tus suscripciones activas';


$lng['useraccount']['request_removal'] = 'Solicitar eliminaci�n de la cuenta';
$lng['useraccount']['request_removal_now'] = 'Solicitar eliminaci�n de la cuenta ahora!';
$lng['useraccount']['removal_verification_sent'] = 'Usted recibir� un correo electr�nico con un enlace de verificaci�n. Por favor, haz clic en el enlace para confirmar la solicitud de eliminaci�n!';

$lng['contact']['message_waits_admin_aproval'] = 'Su mensaje ser� entregado una vez aprobado por el administrador!';

$lng['general']['accept'] = 'Aceptar';
$lng['general']['decline'] = 'Declinar';

$lng['general']['tax'] = 'Inpuesto';
$lng['general']['total_with_tax'] = 'Total con el impuesto';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'En categor�a';

$lng['users']['user_info'] = 'Informaci�n del usuario';
$lng['users']['store_info'] = 'Informaci�n de p�gina comercio';
$lng['users']['user_listings'] = 'Todas las anuncios';

$lng['login']['errors']['invalid_email_pass'] = 'Correo electr�nico o contrase�a no v�lidos!';
$lng['general']['or'] = 'o';
$lng['newad']['choose_a_new_plan'] = 'Elegir un nuevo plan';

$lng['listings']['no_extra_options_available'] = 'No hay opciones adicionales disponibles!';

$lng['listings']['map'] = 'Mapa';

$lng['users']['affiliate'] = 'Afiliado';
$lng['users']['affiliate_id'] = 'Id afiliado';
$lng['users']['affiliate_link'] = 'Enlace de afiliado';
$lng['users']['affiliate_paypal_email'] = 'Cuenta PayPal de afiliado';
$lng['users']['info']['affiliate_paypal_email'] = 'Usted recibir� aqu� el dinero ganado con su cuenta de afiliado';
$lng['users']['errors']['affiliate_paypal_email'] = 'Introduzca su cuenta de PayPal! Usted recibir� aqu� el dinero ganado con su cuenta de afiliado';

$lng['listings']['result'] = 'resultado';

$lng['confirm_delete'] = '�Est� seguro que desea eliminar el elemento seleccionado?';
$lng['confirm_delete_all'] = '�Est� seguro que desea eliminar los elementos seleccionados?';

$lng['general']['show'] = 'Mostrar';
$lng['general']['on_a_page'] = 'en una p�gina';
$lng['general']['return'] = 'Retorno';

$lng['login']['register_for_free'] = 'Registrar gratis!';
$lng['general']['sent'] = 'Enviado';
$lng['general']['received'] = 'Recibido';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Usted no ha iniciado sesi�n!';
$lng['newad']['or_post_without_account'] = 'o continuar la publicaci�n sin una cuenta!';

$lng_comments['scomments'] = 'comentarios';
$lng_comments['scomment'] = 'comentarios';
$lng['general']['on'] = 'sobre';

$lng['affiliates']['last_payment'] = '�ltimo pago';
$lng['affiliates']['last_payment_date'] = 'Fecha de �ltimo pago';
$lng['affiliates']['next_payment_date'] = 'Fecha de pr�ximo pago';
$lng['affiliates']['total_due'] = 'Total a pagar';
$lng['affiliates']['total_payments'] = 'Los pagos totales recibidos';
$lng['affiliates']['revenue_history'] = 'Historia de ingresos';
$lng['affiliates']['payments_history'] = 'Historia de pagos';
$lng['affiliates']['pending_payment'] = 'Pagos pendientes';
$lng['affiliates']['released'] = 'Liberado';
$lng['affiliates']['not_released'] = 'No liberado';
$lng['affiliates']['paid'] = 'Pagado';
$lng['affiliates']['not_paid'] = 'No pagado';

$lng['general']['no_items'] = 'No hay elementos';
$lng['useraccount']['amount_start'] = 'Valor a partir de';
$lng['useraccount']['amount_end'] = 'Valor hasta';
$lng['not_allowed_to_post_ads'] = 'No est� permitido publicar anuncios con esta cuenta!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Los cambios que realice se mantendr� pendiente hasta que sean examinados por un administrador!';

$lng['useraccount']['auction'] = 'Subasta';
$lng['useraccount']['add_auction'] = 'A�adir subasta';
$lng['useraccount']['remove_auction'] = 'Eliminar subasta';
$lng['useraccount']['auction_start_price'] = 'Precio de salida';
$lng['useraccount']['starts_at'] = 'Empieza a';
$lng['useraccount']['no_bids'] = 'N�m. ofertas';
$lng['useraccount']['max_bid'] = 'Oferta m�xima';
$lng['useraccount']['enable'] = 'Enable';
$lng['useraccount']['disable'] = 'Inhabilitar';
$lng['useraccount']['error']['auction_start_price'] = 'Por favor, introduzca precio de salida de la subasta!';
$lng['useraccount']['info']['auction_added'] = 'La subasta se ha a�adido correctamente!';
$lng['useraccount']['confirm_delete'] = 'Confirmar acci�n de eliminaci�n?';
$lng['useraccount']['place_bid'] = 'Haga su oferta!';
$lng['useraccount']['login_to_bid'] = 'Ingrese para hacer su oferta!';
$lng['useraccount']['bid'] = 'Oferta';
$lng['useraccount']['message_to_seller'] = 'Mensaje al vendedor';
$lng['useraccount']['error']['enter_bid'] = 'Por favor, introduzca su oferta!';
$lng['useraccount']['error']['incorrect_bid'] = 'Oferta no v�lida!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Su oferta es menor que el precio de partida!';
$lng['useraccount']['bid_placed'] = 'Su oferta fue colocado!';
$lng['useraccount']['placed_on'] = 'A�adido en';
$lng['useraccount']['no_bids_for_auction'] = 'No hay ofertas para esta subasta!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Click para ver';
$lng['advanced_search']['clear_search'] = 'Borrar b�squeda';
$lng['listings']['currency'] = 'Moneda';
$lng['listings']['show_phone'] = 'Mostrar tel�fono';
$lng['listings']['make_public'] = 'Hacer p�blico';

$lng['advanced_search']['only_ads_with_auction'] = 'S�lo anuncios con las subastas';
$lng['security']['failed_login_attempts'] = 'Intentos de acceso fallidos repetidos';

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

?>