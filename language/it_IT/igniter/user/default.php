<?php

return [
    'text_title' => 'Il mio account',

    'text_heading' => 'Account',
    'text_account' => 'Il mio account',
    'text_edit_details' => 'Modifica i miei dettagli',
    'text_address' => 'Rubrica indirizzi',
    'text_orders' => 'Ordini recenti',
    'text_reservations' => 'Prenotazioni recenti',
    'text_inbox' => 'Posta in arrivo',
    'text_welcome' => 'Ciao, %s!',
    'text_cart_summary' => 'Hai %s elementi: %s',
    'text_change_password' => 'Cambia password',
    'text_order' => 'ORDINA ORA',
    'text_checkout' => 'ACQUISTA ORA',
    'text_edit' => 'MODIFICA',
    'text_default_address' => 'Il mio indirizzo predefinito',
    'text_no_default_address' => 'Non hai un indirizzo predefinito',
    'text_no_orders' => 'Non ci sono ordini da mostrare.',
    'text_no_reservations' => 'Non sono disponibili prenotazioni da mostrare.',
    'text_no_inbox' => 'Non ci sono messaggi da mostrare',
    'text_no_cart_items' => 'Non ci sono menu aggiunti nel tuo carrello.',

    'text_logout' => 'Esci',
    'text_logged_in' => 'Hai già un account? <a href="%s">Accedi qui</a>',
    'text_logged_out' => 'Bentornato <b>%s</b>, non sei tu? <a href="javascript:;" data-request="%s">Esci</a>',

    'label_heading' => 'Intestazione:',
    'label_template' => 'Modello email',
    'label_send_to' => 'Invia a',
    'label_send_to_staff_group' => 'Invia al gruppo del personale',
    'label_send_to_custom' => 'Invia all\'indirizzo email',

    'column_date' => 'Data/Ora',
    'column_subject' => 'Oggetto',

    'alert_logout_success' => 'Sei stato disconnesso con successo.',

    'text_send_to_restaurant' => 'Indirizzo email del ristorante',
    'text_send_to_location' => 'Indirizzo email di posizione (se disponibile)',
    'text_send_to_staff_email' => 'Indirizzo email del personale (se disponibile)',
    'text_send_to_customer_email' => 'Indirizzo email del cliente (se disponibile)',
    'text_send_to_custom' => 'Indirizzo email specifico',
    'text_send_to_staff_group' => 'Gruppo del personale',

    'login' => [
        'label_password' => 'Password',
        'label_password_confirm' => 'Conferma password',
        'label_remember' => 'Ricordami su questo computer',
        'label_activation' => 'Codice di attivazione',
        'label_newsletter' => 'Tienimi aggiornato con le offerte via email.',
        'label_terms' => 'Cliccando su Registrati, accetti i <a target="_blank" href="%s">Termini e Condizioni</a> stabiliti da questo sito, compreso il nostro Uso dei Cookie.',
        'label_i_agree' => 'Accetto',
        'label_subscribe' => 'Iscriviti',

        'button_terms_agree' => 'Accetto',
        'button_subscribe' => 'Iscriviti',
        'button_login' => 'Accedi',
        'button_register' => 'Registrati',

        'error_email_exist' => 'L\'indirizzo di posta elettronica è già associato a un account, effettua il login',

        'alert_logout_success' => 'Sei stato disconnesso con successo.',
        'alert_expired_login' => 'Sessione scaduta, effettua il login',
        'alert_invalid_login' => 'Nome utente e password non trovati!',
        'alert_account_created' => 'Account creato con successo, login qui sotto!',
        'alert_account_activation' => 'Una e-mail di attivazione è stata inviata al tuo indirizzo email.',
        'alert_registration_disabled' => 'La registrazione è attualmente disabilitata dall\'amministratore del sito.',

        'activity_registered_account' => ' <b>ha creato</b> un account.',
    ],

    'session' => [
        'component_title' => 'Componente Sessione',
        'component_desc' => 'Aggiunge una sessione di autorizzazione a una pagina e limita l\'accesso alla pagina.',
    ],

    'account' => [
        'component_title' => 'Componente Account',
        'component_desc' => 'Visualizza la dashboard dell\'account',
        'text_heading' => 'Rubrica degli indirizzi',
        'text_my_account' => 'Il mio account',
        'text_edit_heading' => 'Modifica rubrica indirizzi',
        'text_no_address' => 'Non hai alcun indirizzo memorizzato',
        'text_edit' => 'MODIFICA',
        'text_delete' => 'ELIMINA',

        'button_back' => 'Indietro',
        'button_add' => 'Aggiungi nuovo indirizzo',
        'button_update' => 'Aggiorna indirizzo',

        'label_address_1' => 'Indirizzo 1',
        'label_address_2' => 'Indirizzo 2',
        'label_city' => 'Città',
        'label_state' => 'Stato/Provincia',
        'label_postcode' => 'CAP',
        'label_country' => 'Nazione',

        'alert_updated_success' => 'Indirizzo aggiunto/aggiornato con successo.',
        'alert_deleted_success' => 'Indirizzo eliminato con successo.',
    ],
    'reset' => [
        'component_title' => 'Componente Reimpostazione Password',
        'component_desc' => 'Visualizza modulo di reimpostazione password',

        'text_heading' => 'Reimpostazione della Password',
        'text_summary' => 'Indirizzo email che usi per accedere al tuo account. Ti invieremo un\'email con una nuova password.',

        'label_email' => 'Indirizzo Email',
        'label_password' => 'Password',
        'label_password_confirm' => 'Conferma password',
        'label_code' => 'Codice di ripristino',

        'button_login' => 'Login',
        'button_reset' => 'Resetta password',

        'alert_reset_success' => 'Password reimpostata con successo',
        'alert_reset_request_success' => 'Richiesta di reimpostazione della password riuscita, controlla la tua email su come procedere.',
        'alert_reset_error' => 'Reimpostazione della password non riuscita, e-mail non trovata o dettagli errati.',
        'alert_reset_failed' => 'Reimpostazione della password fallita, il codice di reset non è valido o è scaduto.',
        'alert_activation_failed' => 'Attivazione account fallita, riprova.',
        'alert_no_email_match' => 'Nessun indirizzo email corrispondente',
    ],
    'addressbook' => [
        'component_title' => 'Componente rubrica indirizzi account',
        'component_desc' => 'Visualizza e gestisce la rubrica dell\'account',
    ],
    'settings' => [
        'component_title' => 'Componente Impostazioni Account',
        'component_desc' => 'Gestisci impostazioni account',
        'text_heading' => 'I miei dettagli',
        'text_details' => 'Modifica i tuoi dati',
        'text_password_heading' => 'Cambia Password',

        'button_subscribe' => 'Iscriviti',
        'button_back' => 'Indietro',
        'button_save' => 'Salva dettagli',

        'label_first_name' => 'Nome',
        'label_last_name' => 'Cognome',
        'label_email' => 'Indirizzo Email',
        'label_password' => 'Nuova Password',
        'label_password_confirm' => 'Conferma nuova password',
        'label_old_password' => 'Vecchia Password',
        'label_telephone' => 'Telefono',
        'label_s_question' => 'Domanda di sicurezza',
        'label_s_answer' => 'Risposta di sicurezza',
        'label_newsletter' => 'Tienimi aggiornato con le offerte via email.',

        'error_password' => 'Il %s che hai inserito non corrisponde.',

        'alert_updated_success' => 'Dettagli aggiornati con successo.',
    ],
];