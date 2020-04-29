<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted' => 'il  :attribute è stato accettato.',
    'active_url' => 'Il campo :attribute non contiene un URL valido.',
    'after' => 'Il campo :attribute deve contenere una data successiva a :date.',
    'after_or_equal' => ':attribute deve essere una data successiva o uguale a :date.',
    'alpha' => ':attribute può contenere solo lettere.',
    'alpha_dash' => ':attribute può contenere solo lettere, numeri, trattini e underscore.',
    'alpha_num' => ':attribute può contenere solo lettere e numeri.',
    'array' => ':attribute deve essere una matrice.',
    'before' => ':attribute deve essere una data precedente a :date.',
    'before_or_equal' => ':attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'file' => ':attribute deve essere compreso tra :min e :max kilobyte.',
        'string' => ':attribute deve essere compreso tra :min e :max caratteri.',
        'array' => ':attribute deve avere tra :min e :max elementi.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'Il campo :attribute non corrisponde.',
    'date' => ':attribute non è una data valida.',
    'date_equals' => ':attribute deve essere una data uguale a :date.',
    'date_format' => ':attribute non corrisponde al formato :format.',
    'different' => ':attribute e :other devono essere diversi.',
    'digits' => 'Il campo :attribute deve contenere :digits cifre.',
    'digits_between' => ':attribute deve essere tra :min e :max cifre.',
    'dimensions' => ':attribute ha dimensioni di immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => ':attribute deve essere un indirizzo email valido.',
    'ends_with' => ':attribute deve terminare con uno dei seguenti: :values',
    'exists' => ':attribute selezionato non è valido.',
    'file' => ':attribute deve essere un file.',
    'filled' => ':attribute il campo deve avere un valore.',
    'gt' => [
        'numeric' => ':attribute deve essere maggiore di :value.',
        'file' => ':attribute deve essere maggiore di :value kilobyte.',
        'string' => ':attribute deve essere maggiore di :value caratteri.',
        'array' => ':attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => ':attribute deve essere maggiore o uguale a :value.',
        'file' => ':attribute deve essere maggiore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => ':attribute deve avere almeno :value elementi.',
    ],
    'image' => ':attribute deve essere un\'immagine.',
    'in' => ':attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'Il campo :attribute deve contenere un numero intero.',
    'ip' => ':attribute deve essere un indirizzo IP valido.',
    'ipv4' => ':attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => ':attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il campo :attribute deve contenere meno di :value.',
        'file' => 'Il campo :attribute deve contenere meno di :value kilobyte.',
        'string' => 'Il campo :attribute deve contenere meno di :value caratteri.',
        'array' => ':attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => ':attribute deve essere minore o uguale a :value.',
        'file' => ':attribute deve essere minore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere minore o uguale a :value caratteri.',
        'array' => ':attribute non deve avere più di :value elementi.',
    ],
    'max' => [
        'numeric' => ':attribute non deve essere maggiore di :max.',
        'file' => 'Il campo :attribute deve contenere un file che occupi massimo :max kilobytes.',
        'string' => ':attribute non può essere maggiore di :max caratteri.',
        'array' => ':attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il campo :attribute deve contenere un file del tipo: :values.',
    'mimetypes' => 'Il campo :attribute deve contenere un file del tipo: :values.',
    'min' => [
        'numeric' => 'L\' :attribute deve essere almeno :min.',
        'file' => 'Attributo :attribute deve essere almeno :min kilobyte.',
        'string' => 'Il campo :attribute deve contenere almeno :min elementi.',
        'array' => 'Il campo :attribute deve contenere almeno :min elementi.',
    ],
    'not_in' => ':attribute selezionato non è valido.',
    'not_regex' => 'Il formato dell\' :attribute è invalido.',
    'numeric' => 'Il campo :attribute deve essere un numero.',
    'password' => 'La password è incorretta.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato dell\' :attribute è invalido.',
    'required' => 'Il campo :attribute è obblogatorio.',
    'required_if' => 'Campo di :attribute è richiesto quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other è in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio a meno che :other è in :values.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without' => 'Il campo :attribute è obbligatorio a meno che :other è in :values.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei :values è presente.',
    'same' => 'I campi :attribute e :other devono contenere lo stesso valore.',
    'size' => [
        'numeric' => ':attribute deve essere di :size.',
        'file' => ':attribute deve essere di :size.',
        'string' => 'L\' :attribute deve essere :size characters.',
        'array' => ':attribute deve contenere :size elementi.',
    ],
    'starts_with' => ':attribute deve iniziare con uno dei seguenti: :values',
    'string' => 'Il campo :attribute deve essere una stringa.',
    'timezone' => ':attribute deve essere una zona valida.',
    'unique' => 'L\' :attribute è già stato preso.',
    'uploaded' => ':attribute non è riuscito a caricare.',
    'url' => 'Il formato :attribute non è valido.',
    'uuid' => ':attribute deve essere un UUID valido.',
    'valid_time' => ':attribute deve contenere un formato orario valido di 24 ore.',
    'valid_date' => 'Il campo :attribute deve contenere un formato di data valido.',

    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using the
      | convention "attribute.rule" to name the lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
      */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'messaggio-personalizzato',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
