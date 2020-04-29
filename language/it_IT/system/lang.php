<?php

return [
    'system_name' => 'TastyIgniter',
    'system_powered' => '<a target="_blank" href="http://tastyigniter.com">Alimentato da TastyIgniter</a>',
    'copyright' => 'Grazie per aver scelto <a target="_blank" href="http://tastyigniter.com">TastyIgniter</a>',
    'version' => '<b>Versione:</b> %s',

    'no_database' => [
        'label' => 'È stato riscontrato un errore nel database',
        'help' => "È necessaria una connessione al database. Controllare che il database sia configurato correttamente e migrato prima di riprovare.",
    ],
    'required' => [
        'config' => "La configurazione utilizzata in %s deve fornire un valore '%s'.",
    ],
    'not_found' => [
        'model' => "Modello ':name' non trovato.",
        'layout' => "Il layout ':name' non è stato trovato.",
        'partial' => "La parte ':name' non è stata trovata.",
        'config' => 'Impossibile trovare il file di configurazione %s definito per %s.',
        'class' => "Impossibile trovare '%s' in %s",
        'combiner' => "Impossibile trovare asset '%s'",
    ],
    'missing' => [
        'config_key' => 'Chiave necessaria [%s] mancante in %s',
        'carte_key' => 'Nessuna chiave di carta trovata, clicca il pulsante della carta qui sotto per inserirne una.',
    ],
    'error' => [
    ],

    'activities' => [
        'text_title' => 'Attivitá',
        'button_mark_as_read' => 'Segna come già letto',
        'text_empty' => 'Non ci sono Attività disponibili.',
        'activity_self' => 'Tu',
        'activity_master_logged_in' => ' <b>loggato</b> come <b>:subject.first_name :subject.last_name</b>.',
    ],

    'countries' => [
        'text_title' => 'Paesi',
        'text_form_name' => 'Nazione',
        'text_filter_search' => 'Cerca per nome o codice.',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_empty' => 'Non ci sono paesi disponibili.',

        'column_iso_code2' => 'Codice ISO 2',
        'column_iso_code3' => 'Codice ISO 3',
        'column_status' => 'Stato',

        'label_priority' => 'Priorità',
        'label_format' => 'Formato',
        'label_iso_code2' => 'Codice ISO 2',
        'label_iso_code3' => 'Codice ISO 3',

        'help_format' => 'Indirizzo 1 = {address_1}<br />Indirizzo 2 = {address_2}<br />Città = {city}<br />Codice postale = {postcode}<br />Stato = {state}<br />Paese = {country}',
        'help_iso' => 'Ulteriori informazioni su <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-1"> ISO Alpha 2 & 3</a>',
    ],

    'currencies' => [
        'text_title' => 'Valute',
        'text_form_name' => 'Valuta',
        'text_filter_search' => 'Cerca per nome o codice.',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_empty' => 'Non ci sono valute disponibili.',
        'text_right' => 'Destra',
        'text_left' => 'Sinistra',

        'column_code' => 'Codice',
        'column_country' => 'Nazione',
        'column_symbol' => 'Simbolo',
        'column_rate' => 'Valuta',
        'column_status' => 'Stato',

        'label_title' => 'Titolo',
        'label_code' => 'Codice',
        'label_country' => 'Nazione',
        'label_symbol' => 'Simbolo',
        'label_symbol_position' => 'Posizione del simbolo',
        'label_rate' => 'Vota',
        'label_thousand_sign' => 'Separatore di migliaia',
        'label_decimal_sign' => 'Separatore Decimale',
        'label_decimal_position' => 'Cifra decimale',

        'help_iso' => 'Ulteriori informazioni su <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>',
    ],

    'error_logs' => [
        'text_title' => 'Log di sistema',
        'text_clear_logs' => 'Cancella il registro',
    ],

    'extensions' => [
        'text_title' => 'Estensioni',
        'text_add_title' => 'Estensione: Carica',
        'text_delete_title' => 'Estensione: Elimina',
        'text_filter_search' => 'Cerca per nome',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_empty' => 'Non esistono estensioni disponibili.',
        'text_installed' => 'Installata',
        'text_uninstalled' => 'Disinstallato',
        'text_upload_title' => 'Caricare il file con estensione. zip che verrà installato automaticamente.',
        'text_browse_title' => 'Appena sfornato dal forno... prossimamente <i class="fa fa-smile-o"></i>',
        'text_files' => 'file',
        'text_files_data' => 'file e dati',
        'text_settings' => 'Impostazioni',

        'button_new' => '<i class="fa fa-upload"></i>  Carica',
        'button_upload' => 'Carica e Installa',
        'button_choose' => 'Scegli',
        'button_browse' => '<i class="fa fa-globe"></i>  Sfoglia altre estensioni',
        'button_check' => '<i class="fa fa-refresh"></i>  Aggiornamenti',
        'button_change' => 'Modifica',
        'button_delete' => 'Elimina',
        'button_payments' => 'Gestisci i pagamenti',
        'button_settings' => 'Gestisci impostazioni',
        'button_yes_delete' => 'Sì, elimina',
        'button_return_to_list' => 'No, torna alla lista',

        'column_icon' => 'Icona',
        'column_version' => 'Versione',

        'label_delete_data' => 'Eliminare i dati',

        'error_config_no_found' => 'Si è verificato un errore, il file di registrazione estensione non è stato trovato',
        'error_upload_type' => 'Il tipo di file che stai tentando di caricare non è consentito.',
        'error_upload_name' => 'Il nome dell\'estensione non deve contenere spazi vuoti o spaziatura, usa trattini(-) invece..',
        'error_extension_exists' => 'l\'estensione è già presente',
        'error_php_upload' => 'PHP Caricamento File Errore No: %s',

        'alert_info_layouts' => '<b>Layout & Pagina componente(i) registrato(i)</b>',
        'alert_warning_layouts' => 'Per visualizzare il componente di questa estensione in una pagina aggiungilo a un layout <a href="%s" class="alert-link">qui!</a>',
        'alert_delete_warning' => 'Sta tentando di eliminare la %s di estensione <b>%s</b>',
        'alert_delete_confirm' => 'Sei sicuro di voler eliminare il %s associato? L\'operazione non può essere annullata!',
        'alert_is_installed' => '. È necessario disinstallare un\'estensione prima di eliminarla.',
        'alert_setting_missing_id' => 'Il codice di impostazione dell\'estensione non è stato specificato.',
        'alert_setting_not_found' => 'Modello impostazioni estensione [%s] non trovato.',
        'alert_setting_model_missing' => 'Modello impostazioni mancante.',
        'alert_setting_model_not_found' => 'Modello impostazioni estensione [%s] non trovato.',
    ],

    'languages' => [
        'text_title' => 'Lingue',
        'text_form_name' => 'Lingua',
        'text_tab_general' => 'Dettagli',
        'text_tab_files' => 'Traduzioni',
        'text_tab_edit_file' => 'Modifica traduzioni',
        'text_filter_search' => 'Cerca per nome',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_filter_file' => 'Visualizza tutte le traduzioni',
        'text_filter_translations' => 'Filtra traduzioni.',
        'text_empty' => 'Non ci sono lingue disponibili.',
        'text_empty_translations' => 'Non ci sono traduzioni disponibili.',
        'text_files' => 'File',
        'text_locale_strings' => 'Stringhe locali (%s%% tradotte, %s stringhe)',

        'column_code' => 'Codice',
        'column_status' => 'Stato',
        'column_variable' => 'Testo sorgente (inglese)',
        'column_language' => 'Testo della traduzione (%s)',

        'label_code' => 'Codice Locale',
        'label_image' => 'Icona',
        'label_idiom' => 'Idioma',

        'button_new' => 'Nuovo Gruppo',

        'help_language' => 'Usa un codice locale completo (es. “fr_FR”) invece di un solo codice di lingua generica (es. “fr”), deve essere uguale alla cartella delle impostazioni internazionali.',

        'alert_save_changes' => 'Le modifiche andranno perse se non si salva prima di modificare un altro file di lingua.',

        'translations' => [

            'label_file' => 'File Locale',
            'label_search' => 'Cerca',

            'help_no_files' => 'Nessuna traduzione corrispondente trovata per questa lingua. Devi installare un language pack.',
        ],
    ],

    'mail_templates' => [
        'text_title' => 'Layout email',
        'text_form_name' => 'Layout email',
        'text_template_title' => 'Template Email',
        'text_new_template_title' => 'Template Email: Nuovo',
        'text_edit_template_title' => 'Mail Template: Aggiornamento',
        'text_preview_template_title' => 'Modello di Email: Anteprima',
        'text_partial_title' => 'Parti di email',
        'text_new_partial_title' => 'Mail Parziale: Nuovo',
        'text_edit_partial_title' => 'Mail Parziale: Aggiornamento',
        'text_preview_partial_title' => 'Mail Parziale: Anteprima',
        'text_templates' => 'Modelli',
        'text_layouts' => 'Layout',
        'text_partials' => 'Parziali',
        'text_empty' => 'Non ci sono modelli di email disponibili.',
        'text_variables' => 'Variabili',
        'text_registration' => 'Email di registrazione al cliente',
        'text_password_reset_request' => 'Email di reimpostazione password cliente',
        'text_password_reset_request_alert' => 'Email di reimpostazione password per l\'amministratore',
        'text_password_reset' => 'Email di reimpostazione password cliente',
        'text_password_reset_alert' => 'Email di reimpostazione password per l\'amministratore',
        'text_order' => 'E-mail di ordine al cliente',
        'text_reservation' => 'E-mail di prenotazione al cliente',
        'text_internal' => 'Messaggio interno',
        'text_contact' => 'Email di contatto per admin',
        'text_registration_alert' => 'E-mail di avviso di registrazione a admin',
        'text_order_alert' => 'E-mail di avviso ordine per l\'amministratore',
        'text_reservation_alert' => 'Avviso di prenotazione all\'amministratore',
        'text_order_update' => 'E-mail di aggiornamento stato ordine al cliente',
        'text_reservation_update' => 'E-mail di aggiornamento stato di prenotazione per l\'admin',

        'button_test_message' => 'Invia messaggio di prova',

        'column_code' => 'Codice',
        'column_title' => 'Titolo',
        'column_layout' => 'Layout',
        'column_date_added' => 'Data di inserimento',
        'column_date_updated' => 'Data di aggiornamento',
        'column_status' => 'Stato',

        'label_language' => 'Lingua',
        'label_code' => 'Codice',
        'label_subject' => 'Oggetto',
        'label_layout' => 'Layout',
        'label_layout_css' => 'Layout CSS',
        'label_body' => 'HTML',
        'label_plain' => 'Testo semplice',

        'alert_test_message_sent' => 'Messaggio di test inviato con successo a %s',
    ],
    'permissions' => [
        'name' => 'Sistema',
        'activities' => 'Attività di accesso',
        'countries' => 'Crea, modifica ed elimina nazioni',
        'currencies' => 'Crea, modifica ed elimina valute',
        'error_logs' => 'Visualizza log di sistema',
        'extensions' => 'Installa, disinstalla ed elimina estensione',
        'mail_templates' => 'Crea, modifica ed elimina modelli email',
        'languages' => 'Crea, modifica ed elimina le lingue del sito',
        'settings' => 'Gestisci impostazioni di sistema',
        'updates' => 'Possibilità di applicare aggiornamenti quando è disponibile una nuova versione di TastyIgniter',
    ],

    'settings' => [
        'text_title' => 'Impostazioni',
        'text_edit_title' => 'Impostazioni: %s',
        'text_tab_general' => 'Generale',
        'text_tab_user' => 'Utente',
        'text_tab_restaurant' => 'Ristorante',
        'text_tab_setup' => 'Configurazione',
        'text_tab_media_manager' => 'Media',
        'text_tab_mail' => 'Mail',
        'text_tab_server' => 'Avanzato',

        'text_tab_desc_general' => 'Cambia il nome del tuo ristorante, email e url, la lingua predefinita, la valuta e i formati dell\'ora della data, ...',
        'text_tab_desc_setup' => 'Configura le impostazioni relative all\'ordine e alla prenotazione',
        'text_tab_desc_user' => 'Configura la conferma dell\'email di registrazione, gruppo cliente predefinito, ...',
        'text_tab_desc_media_manager' => 'Configura caricamenti multimediali, copia, rinomina impostazioni.',
        'text_tab_desc_mail' => 'Impostazioni per l\'invio di email',
        'text_tab_desc_server' => 'Gestisci le impostazioni di sistema avanzate come attivare/disattivare la manutenzione.',

        'text_tab_site' => 'Sito',
        'text_tab_title_maps' => 'Geolocalizzazione',
        'text_tab_title_date_time' => 'Data/Ora',
        'text_tab_title_currency' => 'Valuta',
        'text_tab_title_language' => 'Lingua',
        'text_tab_title_reviews' => 'Recensioni',
        'text_tab_title_taxation' => 'Tassazione',
        'text_tab_title_invoice' => 'Fatturazione',
        'text_tab_title_order' => 'Ordine',
        'text_tab_title_reservation' => 'Prenotazione',
        'text_tab_title_maintenance' => 'Manutenzione',
        'text_tab_title_permalink' => 'Link permanente',
        'text_tab_title_caching' => 'Cache',
        'text_single' => 'Singolo',
        'text_multiple' => 'Multiplo',
        'text_1_hour' => '1 ora',
        'text_3_hours' => '3 ore',
        'text_6_hours' => '6 ore',
        'text_12_hours' => '12 Ore',
        'text_24_hours' => '24 ore',
        'text_3_days' => '3 giorni',
        'text_5_days' => '5 giorni',
        'text_1_week' => '1 settimana',
        'text_auto' => 'Automaticamente',
        'text_manual' => 'Manualmente',
        'text_miles' => 'Miglia',
        'text_kilometers' => 'Chilometri',
        'text_chain_geocoder' => 'Catena (raccomandato)',
        'text_google_geocoder' => 'Google Geocoding',
        'text_nominatim' => 'OpenStreetMap\'s Nominatim',
        'text_plain' => 'Testo semplice',
        'text_html' => 'HTML',
        'text_sendmail' => 'INVIA',
        'text_smtp' => 'SMTP',
        'text_to_customer' => 'Al cliente',
        'text_to_admin' => 'Al ristorante',
        'text_to_location' => 'Alla posizione',
        'text_send_test_email' => 'Invia email di test',
        'text_internal_sequence_prefix' => 'Prefisso interno sequenza di numerazione',
        'text_menu_price_include_tax' => 'Prezzi Menù già comprensivi di Iva',
        'text_apply_tax_on_menu_price' => 'Applica imposta al prezzo del menu',
        'text_openexchangerates' => 'Tassi di Cambio',
        'text_fixerio' => 'Fixer.io',

        'label_site_name' => 'Nome del ristorante',
        'label_site_email' => 'Email Ristorante',
        'label_site_url' => 'URL del ristorante',
        'label_site_logo' => 'Nome del ristorante',
        'label_timezone' => 'Fuso orario predefinito',
        'label_date_format' => 'Formato Data',
        'label_time_format' => 'Formato ora',
        'label_site_currency' => 'Valuta predefinita',
        'label_currency_converter' => 'Convertitore di valuta predefinito',
        'label_currency_converter_oer_api_key' => 'App ID Convertitore di Valuta (API tasso di cambio aperto)',
        'label_currency_converter_fixer_api_key' => 'Convertitore di valuta (Fixer.io API) App ID',
        'label_currency_refresh_interval' => 'Intervallo aggiornamento tassi di cambio',
        'label_detect_language' => 'Rilevare la lingua del Browser',
        'label_site_language' => 'Lingua predefinita',
        'label_customer_group' => 'Gruppo di clienti',
        'label_site_location_mode' => 'Modalità geolocalizzazione',
        'label_country' => 'Nazione',
        'label_maps_api_key' => 'Google Maps API Key',
        'label_distance_unit' => 'Unità di distanza',
        'label_default_geocoder' => 'Default Geocoder',
        'label_tax_mode' => 'Modalità Tasse',
        'label_tax_title' => 'Titolo imposta',
        'label_tax_percentage' => 'Percentuale di imposta',
        'label_tax_menu_price' => 'Prezzo Tasse Menù',
        'label_tax_delivery_charge' => 'Tasse spese di spedizione',
        'label_allow_reviews' => 'Permetti Recensioni',
        'label_approve_reviews' => 'Approvare recensioni',
        'label_default_order_status' => 'Stato dell\'ordine predefinito',
        'label_processing_order_status' => 'Stato elaborazione dell\'ordine',
        'label_completed_order_status' => 'Stato dell\'ordine completato',
        'label_canceled_order_status' => 'Stato ordine annullato',
        'label_menus_page' => 'Pagina voci di menu',
        'label_guest_order' => 'Consentire l\'ordine degli ospiti',
        'label_location_order' => 'Richiedono la posizione all\'ordine',
        'label_future_order' => 'Accettare gli ordini futuri',
        'label_invoice_prefix' => 'Prefisso fattura',
        'label_default_reservation_status' => 'Stato prenotazione predefinito',
        'label_confirmed_reservation_status' => 'Stato prenotazione confermata',
        'label_canceled_reservation_status' => 'Stato prenotazione annullata',
        'label_media_max_size' => 'Dimensione massima del File',
        'label_media_thumb_height' => 'Altezza miniatura',
        'label_media_thumb_width' => 'Larghezza miniatura',
        'label_media_uploads' => 'Carica File',
        'label_media_new_folder' => 'Nuova Cartella',
        'label_media_copy' => 'Copia',
        'label_media_move' => 'Sposta',
        'label_media_rename' => 'Rinomina',
        'label_media_delete' => 'Elimina',
        'label_media_transliteration' => 'Traslitterazione',
        'label_allow_registration' => 'Consenti registrazione cliente',
        'label_registration_email' => 'Invia e-mail di registrazione',
        'label_order_email' => 'E-mail di avviso/conferma dell\'ordine',
        'label_reservation_email' => 'E-mail di avviso/conferma della prenotazione',
        'label_sender_name' => 'Nome mittente',
        'label_sender_email' => 'Email mittente',
        'label_protocol' => 'Protocollo email',
        'label_smtp_host' => 'Host SMTP',
        'label_smtp_port' => 'Porta SMTP',
        'label_smtp_user' => 'Nome utente SMTP',
        'label_smtp_pass' => 'Password SMTP',
        'label_test_email' => 'Test Email',
        'label_permalink' => 'Link permanente',
        'label_maintenance_mode' => 'Modalità di manutenzione',
        'label_maintenance_message' => 'Messaggio di manutenzione',
        'label_cache_mode' => 'Modalità cache',
        'label_cache_time' => 'Tempo della cache',

        'alert_email_sending' => 'Invio email...',
        'alert_email_sent' => 'Email inviata a %s',
        'alert_settings_missing_model' => 'Manca il modello definito %s.',
        'alert_settings_not_found' => 'Impostazioni %s non trovate.',
        'alert_settings_errors' => 'Fare clic per correggere gli elementi mancanti dell\'impostazione richiesta.',
        'alert_delete_setup_files' => '<b>ATTENZIONE!</b> Elimina i file di configurazione per impedire a qualcun altro di sovrascrivere il tuo sito.',

        'help_timezone' => 'Il fuso orario predefinito. Scegli una città nel fuso orario del tuo ristorante.',
        'help_site_location_mode' => 'Impostare se abilitare il supporto per località di ristorante singole o multiple.',
        'help_detect_language' => 'Abilita o disabilita il rilevamento della lingua del browser utente. Se abilitato il sito verrà tradotto nella lingua del browser.',
        'help_maps_api_key' => 'È necessaria una chiave API per utilizzare Google Maps e/o Geocoding. <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">Dove posso trovare la mia chiave API di Google Map?</a> Abilita le API di Google Maps Geocoding e le API JavaScript di Google Maps nel tuo account Google Developer',
        'help_default_geocoder' => 'Indica al sistema quale servizio geocoder utilizzare quando si effettua la geocodifica. \'Chain\' è uno speciale geocoder che esegue sia google che open street maps e si ferma quando riceve una risposta valida.',
        'help_accepted_currency' => 'Selezionare tutte le valute che si accettano come metodo di pagamento così come valuta predefinita',
        'help_currency_converter_oer_api' => 'Puoi <a target="_blank" href="https://openexchangerates.org/signup/">iscriverti qui</a> per la tua API dei tassi di cambio aperti.',
        'help_currency_converter_fixer_api' => 'Puoi <a target="_blank" href="https://fixer.io/signup/">iscriverti qui</a> per la tua API Fixer.io.',
        'help_special_category' => 'Selezionare quale categoria utilizzare automaticamente per menu speciali',
        'help_tax_mode' => 'Impostata su attiva o disattiva calcolo imposta sul sito',
        'help_tax_title' => 'Inserisci il titolo fiscale come dovrebbe essere visualizzato sulla vetrina del negozio. Per esempio : IVA',
        'help_tax_percentage' => 'Immettere la percentuale per calcolare le tasse. Es. 15',
        'help_tax_menu_price' => 'Impostare il prezzo del menu includono già le tasse o imposte devono essere calcolate sul prezzo del menu',
        'help_tax_delivery_charge' => 'Impostare se la consegna e tassabile',
        'help_allow_reviews' => 'Attivare o disattivare l\'immissione di una recensione da parte di un cliente e la visualizzazione di recensioni sul sito',
        'help_approve_reviews' => 'Approvare la nuova recensione automaticamente o manualmente',
        'help_default_location' => 'Scegli o aggiungere un nuovo percorso per impostare come località ristorante principale/predefinita.',
        'help_default_order_status' => 'Selezionare lo stato dell\'ordine predefinito, quando un nuovo ordine è collocato/ricevuto',
        'help_processing_order_status' => 'Selezionare lo stato dell\'ordine che un ordine deve raggiungere prima che l\'ordine inizia stock redenzione riduzione e coupon',
        'help_completed_order_status' => 'Selezionare lo stato dell\'ordine per contrassegnare un ordine come completato prima che la fattura dell\'ordine viene creata e un cliente può lasciare recensione',
        'help_canceled_order_status' => 'Selezionare lo stato dell\'ordine quando un ordine viene contrassegnato come annullata o sospettati di attività fraudolente',
        'help_menus_page' => 'Seleziona la pagina usata come pagina per le tue voci di menu',
        'help_guest_order' => 'Consenti al cliente di effettuare un ordine senza creare un account.',
        'help_location_order' => 'Impostare se il cliente deve inserire il codice postale/indirizzo prima di poter effettuare un ordine di spedizione. Se disabilitato, il cliente potrà ordinare senza inserire il codice postale/address.',
        'help_future_order' => 'Consentire al cliente di mettere ordine per un secondo momento quando il ristorante è chiuso per la consegna o ritirare l\'ordine negli orari di apertura',
        'help_invoice_prefix' => 'Impostare il prefisso di fattura (ad es. <b>INV-2015-00</b> 1123). Lasciare vuoto per utilizzare alcun prefisso. Le seguenti macro sono disponibili:{year} {month} {day} {hour} {minute} {second}',
        'help_default_reservation_status' => 'Selezionare lo stato di prenotazione di default quando si riceve una nuova prenotazione',
        'help_canceled_reservation_status' => 'Selezionare lo stato di prenotazione quando una prenotazione viene contrassegnata come annullata o sospettati di attività fraudolente',
        'help_confirmed_reservation_status' => 'Selezionare lo stato di prenotazione per contrassegnare una prenotazione confermata prima di riservare il tavolo',
        'help_delete_thumbs' => 'Questo cancellerà tutte le anteprime create. Nota le anteprime vengono create automaticamente.',
        'help_media_max_size' => 'Il limite di dimensione massima (in kilobyte) per file durante il caricamento.',
        'help_media_upload' => 'Abilitare o disabilitare il caricamento di file',
        'help_media_new_folder' => 'Abilitare o disabilitare la creazione di una cartella',
        'help_media_copy' => 'Attivare o disattivare la copia di file/cartella',
        'help_media_move' => 'Attivare o disattivare lo spostamento di file/cartella',
        'help_media_rename' => 'Attivare o disattivare la rinomina di file/cartelle',
        'help_media_delete' => 'Abilitare o disabilitare l\'eliminazione di file/cartelle',
        'help_allow_registration' => 'Se disabilitato, i clienti possono essere creati solo dagli amministratori.',
        'help_registration_email' => 'Invia una mail di conferma al cliente e/o admin email dopo la registrazione di un account con successo',
        'help_order_email' => 'Invia una mail di conferma all\'indirizzo email cliente, admin e/o posizione dopo aver creato un nuovo ordine',
        'help_reservation_email' => 'Invia una mail di conferma all\'indirizzo email cliente, admin e/o posizione quando viene ricevuta una nuova prenotazione',
        'help_maintenance' => 'Attivare per impedire agli utenti di visualizzare il tuo negozio. Verrà visualizzato il messaggio di manutenzione ai clienti tranne admin connesso.',
        'help_permalink' => 'Per utilizzare gli URL SEO, deve essere installato apache modulo mod-rewrite.',
        'help_cache_mode' => 'Abilitare se volete pagine nella cache al fine di ottenere le massime prestazioni.',
        'help_cache_time' => 'Impostare il numero di minuti in cui una pagina rimane memorizzata nella cache.',
    ],

    'themes' => [
        'text_title' => 'Temi',
        'text_edit_title' => 'Tema: Personalizza',
        'text_source_title' => 'Tema: Modifica Modello',
        'text_add_title' => 'Tema: Caricamento',
        'text_delete_title' => 'Tema: Eliminare',
        'text_form_name' => 'Tema',
        'text_tab_customize' => 'Personalizza',
        'text_tab_markup' => 'Markup',
        'text_tab_php_section' => 'Sezione PHP',
        'text_tab_meta' => 'Meta',
        'text_tab_components' => 'Componenti',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_upload_title' => 'Caricare il file. zip del tema.',
        'text_empty' => 'Non ci sono temi disponibili.',
        'text_select_file' => 'Selezionare un [%s] modello da modificare',
        'text_is_default' => 'Attivato',
        'text_set_default' => 'Attivare',
        'text_author' => 'Autore',
        'text_version' => 'Versione',
        'text_theme_is_active' => '. Non è possibile eliminare un tema attivo.',
        'text_files' => 'file',
        'text_files_data' => 'file e dati',

        'label_code' => 'Codice',
        'label_template' => 'Template',
        'label_file' => 'Nome file modello',
        'label_title' => 'Titolo',
        'label_layout' => 'Layout',
        'label_permalink' => 'Link permanente',
        'label_component' => 'Componente',
        'label_component_alias' => 'Component Alias',
        'label_component_status' => 'Stato dei componenti',
        'label_delete_data' => 'Eliminare i dati',
        'label_copy_data' => 'Copiare i dati',
        'label_type_page' => 'Pagine',
        'label_type_partial' => 'Parziali',
        'label_type_layout' => 'Layout',
        'label_type_content' => 'Contenuti',

        'button_new' => '<i class="fa fa-upload"></i>  Carica',
        'button_upload' => 'Carica e Installa',
        'button_browse' => '<i class="fa fa-globe"></i>  Sfoglia altri temi',
        'button_source' => '<i class="fa fa-pencil"></i>  Modifica Modelli',
        'button_check' => '<i class="fa fa-refresh"></i>  Aggiornamenti',
        'button_customize' => '<i class="fa fa-paint-brush"></i>  Personalizza',
        'button_child' => '<i class="fa fa-child"></i>  Crea tema figlio',
        'button_new_source' => 'Nuovo %s',
        'button_rename_source' => 'Rinomina %s',
        'button_delete_source' => 'Elimina %s',
        'button_choose' => 'Scegli',
        'button_change' => 'Modifica',
        'button_delete' => 'Cancellare',
        'button_yes_delete' => 'Sì, elimina',
        'button_yes_copy' => 'Sì, copia',
        'button_return_to_list' => 'No, tornare all\'elenco',

        'help_components' => 'Renderizzare il componente su un layout o pagina aggiungendo [<code>&#x3C;? componente(&#x27;componentAlias&#x27;); ?&#x3E;</code>] al markup',

        'error_config_no_found' => 'Si è verificato un errore, il file di registrazione del tema non è stato trovato',
        'error_file_not_supported' => 'Il file selezionato non è supportato',
        'error_upload_name' => 'Il nome del tema non dovrà contenere spazi vuoti o spaziatura, utilizzare hyphens(-) invece..',
        'error_upload_type' => 'Il tipo di file che si sta tentando di caricare non è consentito.',
        'error_php_upload' => 'PHP Caricamento File Errore No: %s',
        'error_theme_exists' => 'il tema esiste già',

        'alert_delete_warning' => 'Si sta per eliminare il %s del tema <b>%s</b>',
        'alert_delete_confirm' => 'Sei sicuro di voler eliminare il %s associato? L\'operazione non può essere annullata!',
        'alert_theme_locked' => 'Questo è un tema bloccato, le modifiche sono limitate, crea un tema figlio per apportare modifiche.',
        'alert_changes_confirm' => 'Versione in conflitto, il file del modello è stato modificato. Ricarica la pagina per continuare.',
    ],

    'updates' => [
        'text_title' => 'Aggiornamenti',
        'text_browse_title' => 'Sfoglia %s',

        'text_title_carte' => 'Il tuo Carté',

        'text_tab_title_extensions' => 'Estensioni',
        'text_tab_title_themes' => 'Temi',
        'text_ignore' => 'Ignora',
        'text_search' => 'Cerca %s nel marketplace da installare',
        'text_popular_title' => 'Consigliato %s',
        'text_last_checked' => '<b>Ultima verifica:</b> %s',

        'text_no_updates' => 'Nessun aggiornamento disponibile.',

        'text_update_found' => '%s aggiornamento/i disponibili',
        'text_update_ignored' => '%s aggiornamenti(i) ignorato(i)',
        'text_item_update_summary' => 'Aggiornamento dalla versione %s a <b>%s</b>',

        'text_maintenance_mode' => 'Mentre il sito è in fase di aggiornamento, la modalità di manutenzione verrà attivata, quindi disabilitata non appena gli aggiornamenti saranno completati.',

        'progress_download' => '<i class="fa fa-cloud-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Scarico %s&#8230;',
        'progress_extract' => '<i class="fa fa-file-archive-o fa-fw"></i>&nbsp;&nbsp;&nbsp;Estrazione %s&#8230;',
        'progress_complete' => '<i class="fa fa-download fa-fw"></i>&nbsp;&nbsp;&nbsp;Fine installazione&#8230;',

        'label_meta_code' => 'Meta Code',
        'label_meta_type' => 'Meta Type',
        'label_meta_version' => 'Versione Meta',
        'label_meta_hash' => 'Meta Hash',
        'label_meta_description' => 'Meta Descrizione',
        'label_meta_step' => 'Meta Step',
        'label_meta_action' => 'Meta Action',
        'label_meta_items' => 'Meta Items',

        'progress_success' => '<i class="fa fa-check fa-fw"></i>&nbsp;&nbsp;&nbsp;Finito %s %s con successo.&#8230;',
        'progress_update' => '<strong id="progress-updating"> aggiornamento %s &#8230;</strong>',
        'progress_enable_maintenance' => 'Attivazione della modalità manutenzione &#8230;',
        'progress_disable_maintenance' => 'Modalità di ripristino/disabilitazione manutenzione &#8230;',

        'button_browse' => '<i class="fa fa-globe"></i> Sfoglia %s',
        'button_carte' => '<i class="fa fa-key"></i> Carté',
        'button_check' => '<i class="fa fa-refresh"></i> Controlla di nuovo',
        'button_updates' => '<i class="fa fa-refresh"></i> Aggiornamenti',
        'button_update' => '<i class="fa fa-check"></i> Aggiornamento',

        'help_carte_key' => 'Una chiave Carte è necessaria per aggiungere/aggiornare elemento dal Marketplace TastyIgniter. Ottienine uno creando un sito dal tuo <a href="%s" target="_blank">Account TastyIgniter</a>, se non lo hai già fatto.',
    ],
];