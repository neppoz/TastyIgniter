<?php

return [
    'text_this_payment' => 'diese Bezahlart',

    'label_order_fee_type' => 'Zusätzlicher Gebührentyp',
    'label_order_fee' => 'Zusätzliche Gebühr',
    'label_order_total' => 'Minimale Summe',
    'label_order_status' => 'Bestellstatus',

    'alert_min_total' => 'Der Bestellwert liegt unter dem Mindestbestellwert für %s.',
    'alert_min_order_total' => 'Sie müssen %s oder mehr ausgeben, um mit %s zu bezahlen.',
    'alert_order_fee' => 'Es gibt eine zusätzliche Gebühr von %s , wenn Sie mit %s bezahlen.',
    'alert_missing_applicable_fee' => 'Fehlende zusätzliche Gebühr für %s Zahlung.',

    'help_order_total' => 'Der Gesamtbetrag, den die Bestellung erreichen muss, bevor dieses Zahlungs-Gateway aktiv wird',
    'help_order_fee' => 'Zusätzliche Gebühr auf die Bestellsumme, wenn dieses Zahlungs-Gateway aktiv wird',
    'help_order_status' => 'Standard-Bestellstatus, wenn diese Zahlungsart verwendet wird.',

    'cod' => [
        '_text_title' => 'Barzahlung bei Lieferung',
        'text_tab_general' => 'Allgemein',
        'text_payment_title' => 'Barzahlung bei Lieferung',
        'text_payment_desc' => 'Barzahlung bei Lieferung an der Kasse akzeptieren',

        'label_title' => 'Titel',
        'label_status' => 'Status',
        'label_priority' => 'Priorität',
    ],

    'paypal' => [
        '_text_title' => 'PayPal Express',
        'text_tab_general' => 'Allgemein',
        'text_payment_title' => 'PayPal Express',
        'text_payment_desc' => 'Ermöglicht Ihren Kunden die Zahlung über PayPal',

        'text_sandbox' => 'Sandbox',
        'text_go_live' => 'Live gehen',
        'text_sale' => 'SALE',
        'text_authorization' => 'AUTHORIZATION',

        'label_title' => 'Titel',
        'label_api_user' => 'API-Benutzername',
        'label_api_pass' => 'API Passwort',
        'label_api_signature' => 'API-Signatur',
        'label_api_mode' => 'Modus',
        'label_api_action' => 'Zahlungsaktion',
        'label_priority' => 'Priorität',
        'label_status' => 'Status',

        'alert_error_server' => '<p class="alert-danger">Leider ist ein Fehler aufgetreten, bitte versuche es erneut</p>',
    ],

    'authorize_net_aim' => [
        '_text_title' => 'Authorize.Net',
        'text_payment_title' => 'Authorize.Net (AIM)',
        'text_payment_desc' => 'Akzeptieren Sie Kreditkartenzahlungen mit Authorize.Net',
        'text_go_live' => 'Live gehen',
        'text_test' => 'Test',
        'text_test_live' => 'Live testen',
        'text_sale' => 'SALE',
        'text_auth_only' => 'Nur Autorisierung',
        'text_auth_capture' => 'Autorisierung & Erfassung',
        'text_visa' => 'Visa',
        'text_mastercard' => 'MasterCard',
        'text_american_express' => 'American Express',
        'text_jcb' => 'JCB',
        'text_diners_club' => 'Diners Club',

        'label_title' => 'Title',
        'label_api_login_id' => 'API Login ID',
        'label_client_key' => 'Client Key',
        'label_transaction_key' => 'Transaction Key',
        'label_transaction_mode' => 'Transaction Mode',
        'label_transaction_type' => 'Transaction Type',
        'label_accepted_cards' => 'Akzeptierte Karten',
        'label_priority' => 'Priorität',
        'label_status' => 'Status',

        'alert_acceptable_cards' => 'Wir akzeptieren nur %s',
    ],

    'stripe' => [
        '_text_title' => 'Stripe',
        'text_tab_general' => 'Allgemein',
        'text_payment_title' => 'Stripe Payment',
        'text_payment_desc' => 'Akzeptieren Sie Kreditkartenzahlungen mit Stripe',

        'text_description' => 'Mit Kreditkarten mit Stripe bezahlen',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_stripe_charge_description' => '%s Charge for %s',
        'text_payment_status' => 'Payment %s (%s)',

        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Transaction Mode',
        'label_test_secret_key' => 'Test Secret Key',
        'label_test_publishable_key' => 'Test Publishable Key',
        'label_live_secret_key' => 'Live Secret Key',
        'label_live_publishable_key' => 'Live Publishable Key',
        'label_priority' => 'Priority',
        'label_status' => 'Status',
    ],

    'mollie' => [
        '_text_title' => 'Mollie',
        'text_payment_title' => 'Mollie Payment',
        'text_payment_desc' => 'Accept credit card payments using Mollie API',

        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_description' => 'Pay by Credit Card using Mollie',
        'text_payment_status' => 'Payment %s (%s)',

        'label_transaction_mode' => 'Transaction Mode',
        'label_test_api_key' => 'Test API Key',
        'label_live_api_key' => 'Live API Key',
    ],

    'square' => [
        '_text_title' => 'Square',
        'text_payment_title' => 'Square Payment',
        'text_payment_desc' => 'Accept credit card payments using Square',

        'text_description' => 'Pay by Credit Card using Square',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_payment_status' => 'Payment %s (%s)',

        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Transaction Mode',
        'label_test_app_id' => 'Test Application ID',
        'label_test_access_token' => 'Test Access Token',
        'label_test_location_id' => 'Test Location ID',
        'label_live_app_id' => 'Live Application ID',
        'label_live_access_token' => 'Live Access Token',
        'label_live_location_id' => 'Live Location ID',

        'help_square' => 'Erhalten Sie Square API Schlüssel von <a href="https://developer.squareup.com">hier</a>',
    ],
];