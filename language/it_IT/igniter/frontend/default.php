<?php

return [

    'banners' => [
        '_text_title' => 'Banner',
        'text_tab_general' => 'Generale',
        'component_title' => 'Componente Banner',
        'component_desc' => 'Mostra banner',
        'text_edit_banner' => 'Modifica Banner',
        'text_title' => 'Banner',
        'text_form_name' => 'Banner',
        'text_filter_search' => 'Cerca per nome, tipo o stato.',
        'text_filter_status' => 'Visualizza tutti gli stati',
        'text_empty' => 'Non ci sono banner disponibili.',
        'text_image' => 'Immagine',
        'text_custom' => 'Personalizzato',

        'column_banner' => 'Banner',
        'column_dimension' => 'Dimensione (W x H)',
        'column_layout_partial' => 'Layout - Area parziale',
        'column_status' => 'Stato',
        'column_id' => 'ID',

        'label_banner' => 'Banner',
        'label_dimension' => 'Dimensione (W x H)',
        'label_width' => 'Larghezza',
        'label_height' => 'Altezza',
        'label_status' => 'Stato',
        'label_layout_partial' => 'Layout - Area parziale',
        'label_type' => 'Scrivi',
        'label_click_url' => 'Fare clic su URL',
        'label_language' => 'Lingua',
        'label_alt_text' => 'Testo alternativo',
        'label_image' => 'Immagine',
        'label_custom_code' => 'Codice personalizzato',

        'button_banners' => 'Aggiungi nuovo banner',

        'help_layouts' => 'Scegli un layout per aggiungere uno o più banner.',
        'help_image' => 'Scegli più immagini per visualizzare il banner come carosello',
        'help_click_url' => 'È possibile utilizzare un URL relativo o assoluto sito',

        'alert_set_banners' => 'È necessario prima aggiungere il modulo banner a uno o più layout',
    ],

    'contact' => [
        'component_title' => 'Componente del contatto',
        'component_desc' => 'Visualizza modulo di contatto',
        'text_heading' => 'Contatti',
        'text_summary' => 'Sentiti libero di inviare un messaggio',
        'text_find_us' => 'Trovaci sulla mappa',
        'text_select_subject' => 'seleziona un oggetto',
        'text_contact_us' => 'Contattaci',
        'text_general_enquiry' => 'Richiesta generale',
        'text_comment' => 'Messaggio',
        'text_technical_issues' => 'Problemi tecnici',

        'label_subject' => 'Tema Richiesta:',
        'label_full_name' => 'Nome e cognome:',
        'label_email' => 'Indirizzo Email:',
        'label_telephone' => 'Telefono:',
        'label_comment' => 'Messaggio',

        'button_send' => 'INVIA',

        'alert_contact_sent' => 'Messaggio inviato con successo, ti risponderemo a breve!',
    ],

    'slider' => [
        'text_title' => 'Sliders',
        'text_tab_general' => 'Generale',
        'component_title' => 'Componente Slider',
        'component_desc' => 'Visualizza il cursore delle immagini sulla homepage',
        'text_form_name' => 'Slider',
        'text_empty' => 'Non ci sono cursori disponibili.',
        'text_side_menu' => 'Cursori',

        'text_tab_slides' => 'Diapositive',

        'column_updated_at' => 'Aggiornato',

        'label_code' => 'Codice',
        'label_slider' => 'Codice slider',
        'label_effect' => 'Effetti',
        'label_interval' => 'Intervallo di ritardo tra le diapositive',
        'label_caption' => 'Didascalia',
        'label_images' => 'Immagini',
        'label_hide_controls' => 'Nascondi controlli',
        'label_hide_indicators' => 'Nascondi indicatori',
        'label_hide_captions' => 'Nascondi didascalie',
    ],

    'newsletter' => [
        '_text_title' => 'Newsletter',
        'text_tab_general' => 'Generale',
        'component_title' => 'Componente Newsletter',
        'component_desc' => 'Visualizza l\'iscrizione al modulo newsletter',

        'text_subscribe' => 'Iscriviti alla nostra newsletter',

        'label_status' => 'Stato:',
        'label_email' => 'Email',

        'alert_success_subscribed' => 'Grazie, la tua email ora sottoscritta per le nostre offerte',
        'alert_success_existing' => 'Grazie, la tua email è già iscritta alle nostre offerte',
    ],

    'featured' => [
        '_text_title' => 'Voce di menu in evidenza',
        'text_tab_general' => 'Generale',
        'component_title' => 'Componente Menu in Evidenza',
        'component_desc' => 'Visualizza la lista dei menu in evidenza sul store front',
        'text_subscribe' => 'Iscriviti alla nostra newsletter',
        'text_featured_menus' => 'Menu in evidenza',

        'column_menu_name' => 'Nome Menu',
        'column_menu_remove' => 'Rimuovi',

        'label_title' => 'Titolo',
        'label_menus' => 'Menù',
        'label_limit' => 'Limite',
        'label_items_per_row' => 'Elementi per Pagina',
        'label_dimension' => 'Dimensione:',
        'label_dimension_w' => 'Larghezza della dimensione',
        'label_dimension_h' => 'Altezza della Dimensione',

        'help_dimension' => '(Larghezza x altezza)',
        'help_items_per_row' => 'Il numero di elementi da visualizzare per riga',
    ],

    'captcha' => [
        'component_title' => 'Componente Captcha',
        'component_desc' => 'Visualizza il widget reCATPCHA.',

        'label_api_site_key' => 'Chiave del sito',
        'label_api_secret_key' => 'Chiave segreta',
        'label_version' => 'Versione',
        'label_version_v2' => 'reCAPTCHA v2',
        'label_version_invisible' => 'reCAPTCHA v2 Invisibile',
        'label_version_v3' => 'reCAPTCHA v3',
        'label_lang' => 'Lingua',

        'error_recaptcha' => 'Conferma di essere umano!',

        'help_lang' => 'Forza il widget a visualizzare in una lingua specifica. Auto - rileva la lingua dell\'utente se non specificata.',
    ],
];