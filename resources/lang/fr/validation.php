<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Traduction francaise des erreur par defaut
    |
    */

    'accepté' => 'L\':attribut doit être accepté.',
    'active_url' => 'L\':attribute n\'est pas une URL valide.',
    'after' => 'L\':attribute doit être une date après le :date.',
    'after_or_equal' => 'L\':attribute doit être une date supperieur ou égale au :date.',
    'alpha' => 'L\':attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'L\':attribute ne doit contenir que des lettres, des nombres, des tirets et des souligner.',
    'alpha_num' => 'L\':attribute ne doit contenir que des lettres, des nombres.',
    'array' => 'L\':attribute doit être un tableau.',
    'before' => 'L\':attribute doit être une date inferieur au :date.',
    'before_or_equal' => 'L\':attribute doit être inferieur ou égale au :date.',
    'between' => [
        'numeric' => 'L\':attribute doit être compris entre :min et :max.',
        'file' => 'L\':attribute doit être compris entre :min et :max kilobytes.',
        'string' => 'L\':attribute doit être compris entre :min et :max caractères.',
        'array' => 'L\':attribute doit contenir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspondes pas.',
    'current_password' => 'Le mot de passe est incorrecte.',
    'date' => 'La date :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date similaire au :date.',
    'date_format' => 'L\':attribute ne corresponde pas au format :format.',
    'different' => 'L\':attribute et :other doivent être diffèrents.',
    'digits' => 'L\':attribute doit être :digits digits.',
    'digits_between' => 'L\':attribute doit être compris entre :min et :max digits.',
    'dimensions' => 'L\':attribute à des dimensions invalides.',
    'distinct' => 'Le champ :attribute à une valeur en double.',
    'email' => ':attribute être une adresse e-mail valide.',
    'ends_with' => ':attribute doit finir par une des valeurs suivantes: :values.',
    'exists' => 'L\'élément selectionné :attribute est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être suppérieur à :value.',
        'file' => ':attribute doit être suppérieur à :value kilobytes.',
        'string' => ':attribute doit être suppérieur à :value caractères.',
        'array' => ':attribute doit contenir :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être suppérieur ou égale à :value.',
        'file' => ':attribute doit être suppérieur ou égale à :value kilobytes.',
        'string' => ':attribute doit être suppérieur ou égale à :value caractères.',
        'array' => ':attribute doit contenir au moins :value éléments ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => 'L\'élément :attribute est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaine de caractère JSON valide',
    'lt' => [
        'numeric' => ':attribute doit être inferieur à :value.',
        'file' => ':attribute doit être inferieur à :value kilobytes.',
        'string' => ':attribute doit être inferieur à :value caractères.',
        'array' => ':attribute doit être inferieur à :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inferieur ou égale à :value.',
        'file' => ':attribute doit être inferieur ou égale à :value kilobytes.',
        'string' => ':attribute doit être inferieur ou égale à :value caractères.',
        'array' => ':attribute ne doit contenir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit être suppérieur à :max.',
        'file' => ':attribute ne doit être suppérieur à :max kilobytes.',
        'string' => ':attribute ne doit être suppérieur à :max caractères.',
        'array' => ':attribute ne doit avoir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier du type: :values.',
    'mimetypes' => ':attribute doit être un fichier du type: :values.',
    'min' => [
        'numeric' => ':attribute doit être d\'au moins :min.',
        'file' => ':attribute doit être d\'au moins :min kilobytes.',
        'string' => ':attribute doit être d\'au moins :min caractères.',
        'array' => ':attribute doit avoir au moins :min éléments.',
    ],
    'multiple_of' => ':attribute doit être un multiple de :value.',
    'not_in' => 'L\'attribut sélectionné :attribute est invalide.',
    'not_regex' => 'Le format de :attribute est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'password' => 'Le mot de passe est invalide.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champ de :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis losrque :other est :value.',
    'required_unless' => 'Le champ :attribute est requis à moins que :other soit dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présent.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsqu\'aucune des valeurs :values ne sont présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit jusqu\'à ce que :other soit dans :values.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être de :size.',
        'file' => ':attribute doit être de :size kilobytes.',
        'string' => ':attribute doit être de :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ':attribute doit commencer par l\'une des valeurs suivantes: :values.',
    'string' => ':attribute doit être une chaine de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute à déjà été pris.',
    'uploaded' => ':attribute a échoué à télécharger.',
    'url' => 'Le format de :attribute est invalide.',
    'uuid' => ':attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Tranduction francaise des validations personnalises
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
