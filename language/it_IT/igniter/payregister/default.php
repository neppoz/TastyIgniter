<?php

return [
    'text_this_payment' => 'questo metodo di pagamento',

    'label_order_fee_type' => 'Tipo di commissione aggiuntivo',
    'label_order_fee' => 'Commissione aggiuntiva',
    'label_order_total' => 'Totale minimo',
    'label_order_status' => 'Stato ordine',

    'alert_min_total' => 'Il totale dell\'ordine è inferiore al totale minimo dell\'ordine per %s.',
    'alert_min_order_total' => 'Devi spendere almeno %s per pagare con %s.',
    'alert_order_fee' => 'C\'è una commissione aggiuntiva di %s quando paghi con %s.',
    'alert_missing_applicable_fee' => 'Commissione aggiuntiva mancante per il pagamento di %s.',

    'help_order_total' => 'L\'importo totale che l\'ordine deve raggiungere prima che questo gateway di pagamento diventi attivo',
    'help_order_fee' => 'Addebito aggiuntivo sul totale dell\'ordine quando questo gateway di pagamento diventa attivo',
    'help_order_status' => 'Stato predefinito dell\'ordine quando viene utilizzato questo metodo di pagamento.',

    'cod' => [
        '_text_title' => 'Contanti alla consegna',
        'text_tab_general' => 'Generale',
        'text_payment_title' => 'Contanti alla consegna',
        'text_payment_desc' => 'Accetta contanti alla consegna durante il checkout',

        'label_title' => 'Titolo',
        'label_status' => 'Stato',
        'label_priority' => 'Priorità',
    ],

    'paypal' => [
        '_text_title' => 'PayPal Express',
        'text_tab_general' => 'Generale',
        'text_payment_title' => 'PayPal Express',
        'text_payment_desc' => 'Consente ai tuoi clienti di effettuare pagamenti utilizzando PayPal',

        'text_sandbox' => 'Sandbox',
        'text_go_live' => 'Attiva la modalità Live',
        'text_sale' => 'VENDITE',
        'text_authorization' => 'AUTORIZZA',

        'label_title' => 'Titolo',
        'label_api_user' => 'Nome utente API',
        'label_api_pass' => 'Password API',
        'label_api_signature' => 'Firma API',
        'label_api_mode' => 'Modalità',
        'label_api_action' => 'Azione di pagamento',
        'label_priority' => 'Priorità',
        'label_status' => 'Stato',

        'alert_error_server' => '<p class="alert-danger">Siamo spiacenti, si è verificato un errore, si prega di riprovare</p>',
    ],

    'authorize_net_aim' => [
        '_text_title' => 'Authorize.net',
        'text_payment_title' => 'Authorize.Net (AIM)',
        'text_payment_desc' => 'Accetta pagamenti con carta di credito con Authorize.Net',
        'text_go_live' => 'Attiva la modalità Live',
        'text_test' => 'Test',
        'text_test_live' => 'Prova Live',
        'text_sale' => 'VENDITE',
        'text_auth_only' => 'Autorizza solamente',
        'text_auth_capture' => 'Autorizzazione & Riscuoti',
        'text_visa' => 'Visa',
        'text_mastercard' => 'MasterCard',
        'text_american_express' => 'American Express',
        'text_jcb' => 'JCB',
        'text_diners_club' => 'Diners Club',

        'label_title' => 'Titolo',
        'label_api_login_id' => 'API Login ID',
        'label_client_key' => 'Client Key',
        'label_transaction_key' => 'Chiave transazione',
        'label_transaction_mode' => 'Modalità di transazione',
        'label_transaction_type' => 'Tipo di transazione',
        'label_accepted_cards' => 'Carte accettate',
        'label_priority' => 'Priorità',
        'label_status' => 'Stato',

        'alert_acceptable_cards' => 'Accettiamo solo %s',
    ],

    'stripe' => [
        '_text_title' => 'Stripe',
        'text_tab_general' => 'Generale',
        'text_payment_title' => 'Pagamento Stripe',
        'text_payment_desc' => 'Accetta pagamenti con carta di credito utilizzando Stripe',

        'text_description' => 'Paga con carta di credito usando Stripe',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_stripe_charge_description' => '%s Addebito per %s',
        'text_payment_status' => 'Pagamento %s (%s)',

        'label_title' => 'Titolo',
        'label_description' => 'Descrizione',
        'label_transaction_mode' => 'Modalità di transazione',
        'label_test_secret_key' => 'Chiave segreta di prova',
        'label_test_publishable_key' => 'Chiave di prova pubblicabile',
        'label_live_secret_key' => 'Chiave segreta Live',
        'label_live_publishable_key' => 'Chiave pubblicabile live',
        'label_priority' => 'Priorità',
        'label_status' => 'Stato',
    ],

    'mollie' => [
        '_text_title' => 'Mollie',
        'text_payment_title' => 'Pagamento Mollie',
        'text_payment_desc' => 'Accetta pagamenti con carta di credito utilizzando l\'API Mollie',

        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_description' => 'Paga con carta di credito utilizzando Mollie',
        'text_payment_status' => 'Pagamento %s (%s)',

        'label_transaction_mode' => 'Modalità di transazione',
        'label_test_api_key' => 'Chiave API Test',
        'label_live_api_key' => 'Chiave API Live',
    ],

    'square' => [
        '_text_title' => 'Square',
        'text_payment_title' => 'Pagamento Square',
        'text_payment_desc' => 'Accetta pagamenti con carta di credito utilizzando Square',

        'text_description' => 'Paga con carta di credito con Square',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_payment_status' => 'Pagamento %s (%s)',

        'label_title' => 'Titolo',
        'label_description' => 'Descrizione',
        'label_transaction_mode' => 'Modalità di transazione',
        'label_test_app_id' => 'ID applicazione di prova',
        'label_test_access_token' => 'Test Token di Accesso',
        'label_test_location_id' => 'ID Posizione Test',
        'label_live_app_id' => 'ID Applicazione Live',
        'label_live_access_token' => 'Token di accesso Live',
        'label_live_location_id' => 'ID Posizione Live',

        'help_square' => 'Ottieni chiavi API Square da <a href="https://developer.squareup.com">qui</a>',
    ],
];