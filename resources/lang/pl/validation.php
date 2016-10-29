<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'             => 'To pole musi zostać zaakceptowany.',
    'active_url'           => 'To pole jest nieprawidłowym adresem URL.',
    'after'                => 'To pole musi być datą późniejszą od :date.',
    'alpha'                => 'To pole może zawierać jedynie litery.',
    'alpha_dash'           => 'To pole może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'            => 'To pole może zawierać jedynie litery i cyfry.',
    'array'                => 'To pole musi być tablicą.',
    'before'               => 'To pole musi być datą wcześniejszą od :date.',
    'between'              => [
        'numeric' => 'To pole musi zawierać się w granicach :min - :max.',
        'file'    => 'To pole musi zawierać się w granicach :min - :max kilobajtów.',
        'string'  => 'To pole musi zawierać się w granicach :min - :max znaków.',
        'array'   => 'To pole musi składać się z :min - :max elementów.',
    ],
    'boolean'              => 'To pole musi mieć wartość prawda albo fałsz',
    'confirmed'            => 'Potwierdzenie To pole nie zgadza się.',
    'date'                 => 'To pole nie jest prawidłową datą.',
    'date_format'          => 'To pole nie jest w formacie :format.',
    'different'            => 'To pole oraz :other muszą się różnić.',
    'digits'               => 'To pole musi składać się z :digits cyfr.',
    'digits_between'       => 'To pole musi mieć od :min do :max cyfr.',
    'dimensions'           => 'To pole ma niepoprawne wymiary.',
    'distinct'             => 'To pole ma zduplikowane wartości.',
    'email'                => 'Format To pole jest nieprawidłowy.',
    'exists'               => 'Zaznaczony To pole jest nieprawidłowy.',
    'file'                 => 'To pole musi być plikiem.',
    'filled'               => 'Pole To pole jest wymagane.',
    'image'                => 'To pole musi być obrazkiem.',
    'in'                   => 'Zaznaczony To pole jest nieprawidłowy.',
    'in_array'             => 'To pole nie znajduje się w :other.',
    'integer'              => 'To pole musi być liczbą całkowitą.',
    'ip'                   => 'To pole musi być prawidłowym adresem IP.',
    'json'                 => 'To pole musi być poprawnym ciągiem znaków JSON.',
    'max'                  => [
        'numeric' => 'To pole nie może być większy niż :max.',
        'file'    => 'To pole nie może być większy niż :max kilobajtów.',
        'string'  => 'To pole nie może być dłuższy niż :max znaków.',
        'array'   => 'To pole nie może mieć więcej niż :max elementów.',
    ],
    'mimes'                => 'To pole musi być plikiem typu :values.',
    'mimetypes'            => 'To pole musi być plikiem typu :values.',
    'min'                  => [
        'numeric' => 'To pole musi być nie mniejszy od :min.',
        'file'    => 'To pole musi mieć przynajmniej :min kilobajtów.',
        'string'  => 'To pole musi mieć przynajmniej :min znaków.',
        'array'   => 'To pole musi mieć przynajmniej :min elementów.',
    ],
    'not_in'               => 'Zaznaczony To pole jest nieprawidłowy.',
    'numeric'              => 'To pole musi być liczbą.',
    'present'              => 'To pole musi być teraźniejszy.',
    'regex'                => 'Format To pole jest nieprawidłowy.',
    'required'             => 'To pole jest wymagane',
    'required_if'          => 'Pole To pole jest wymagane gdy :other jest :value.',
    'required_unless'      => 'To pole jest wymagany jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole To pole jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole To pole jest wymagane gdy :values jest obecny.',
    'required_without'     => 'Pole To pole jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole To pole jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole To pole i :other muszą się zgadzać.',
    'size'                 => [
        'numeric' => 'To pole musi mieć :size.',
        'file'    => 'To pole musi mieć :size kilobajtów.',
        'string'  => 'To pole musi mieć :size znaków.',
        'array'   => 'To pole musi zawierać :size elementów.',
    ],
    'string'               => 'To pole musi być ciągiem znaków.',
    'timezone'             => 'To pole musi być prawidłową strefą czasową.',
    'unique'               => 'Taki użytkownik już istnieje.',
    'uploaded'             => 'The To pole failed to upload.',
    'url'                  => 'Format To pole jest nieprawidłowy.',
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
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes'           => [
        //
    ],
];