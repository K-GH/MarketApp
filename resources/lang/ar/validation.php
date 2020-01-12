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

    'accepted' => ':attribute يجب قبول.',
    'active_url' => 'attribute: ليست عنوان URL صالحًا.',
    'after' => 'يجب أن تكون attribute: تاريخًا بعد: date.',
    'after_or_equal' => 'يجب أن تكون attribute: تاريخًا بعد أو تساوي: date.',
    'alpha' => 'قد تحتوي attribute: على أحرف فقط.',
    'alpha_dash' => 'قد تحتوي attribute: على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'attribute: قد تحتوي فقط على أحرف وأرقام.',
    'array' => 'يجب أن تكون attribute: array.',
    'before' => 'يجب أن تكون attribute: تاريخ قبل: date.',
    'before_or_equal' => 'يجب أن تكون attribute: تاريخًا قبل أو تساوي: date.',
    'between' => [
        'numeric' => 'يجب أن تكون attribute: بين: min و: max.',
        'file' => 'يجب أن تكون attribute: بين: min و: max كيلو بايت.',
        'string' => 'يجب أن تكون attribute: بين: min و: max letters.',
        'array' => 'يجب أن تحتوي attribute: على: min و: max items.',
    ],
    'boolean' => 'يجب أن يكون حقل attribute: صواب أو خطأ.',
    'confirmed' => 'تأكيد attribute: غير متطابق.',
    'date' => 'attribute: ليست تاريخًا صالحًا.',
    'date_equals' => 'يجب أن تكون attribute: تاريخًا يساوي: date.',
    'date_format' => 'attribute: لا تتطابق مع التنسيق: التنسيق.',
    'different' => 'attribute: و: يجب أن تكون مختلفة.',
    'digits' => 'يجب أن تكون attribute: digits digits.',
    'digits_between' => 'يجب أن تكون attribute: بين: min و: max digits.',
    'dimensions' => 'تحتوي attribute: على أبعاد صور غير صالحة.',
    'distinct' => 'حقل attribute: له قيمة مكررة.',
    'email' => 'يجب أن تكون attribute: عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن تنتهي attribute: بواحدة مما يلي:: value',
    'exists' => 'attribute المحددة: غير صالحة.',
    'file' => 'يجب أن تكون attribute: ملفًا.',
    'filled' => 'حقل attribute: يجب أن يكون له قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون attribute: أكبر من: value.',
        'file' => 'يجب أن تكون attribute: أكبر من: قيمة كيلو بايت.',
        'string' => 'يجب أن تكون attribute: أكبر من: أحرف القيمة.',
        'array' => 'يجب أن تحتوي attribute: على أكثر من: عناصر القيمة.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون attribute: أكبر من أو تساوي :value.',
        'file' => 'يجب أن تكون attribute: أكبر من أو تساوي :value kilobytes.',
        'string' => 'يجب أن تكون attribute: أكبر من أو تساوي :value characters.',
        'array' => 'يجب أن تحتوي attribute :value items or more.',
    ],
    'image' => 'يجب أن تكون attribute صورة.',
    'in' => 'attribute المحددة: غير صالحة.',
    'in_array' => 'حقل attribute: غير موجود في: other.',
    'integer' => 'يجب أن تكون attribute: عددًا صحيحًا.',
    'ip' => 'يجب أن تكون attribute: عنوان IP صالحًا.',
    'ipv4' => 'يجب أن تكون attribute: عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن تكون attribute: عنوان IPv6 صالحًا.',
    'json' => 'يجب أن تكون attribute: عبارة عن سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن تكون attribute: أقل من: value.',
        'file' => 'يجب أن تكون attribute: أقل من: value كيلو بايت.',
        'string' => 'يجب أن تكون attribute: أقل من: أحرف value.',
        'array' => 'يجب أن تحتوي attribute: على أقل من: عناصر value.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون attribute: أقل من أو تساوي: value.',
        'file' => 'يجب أن تكون attribute: أقل من أو تساوي: قيمة كيلو بايت.',
        'string' => 'يجب أن تكون attribute: أقل من أو تساوي: أحرف value.',
        'array' => 'يجب ألا تحتوي attribute: على أكثر من: value value.',
    ],
    'max' => [
        'numeric' => 'قد لا تكون attribute: أكبر من: max.',
        'file' => 'قد لا تكون attribute: أكبر من: كيلو بايت max.',
        'string' => 'قد لا تكون attribute: أكبر من: أحرف max.',
        'array' => 'قد لا تحتوي attribute: على أكثر من: العناصر max.',
    ],
    'mimes' => 'يجب أن تكون attribute: ملفًا من النوع:: values.',
    'mimetypes' => 'يجب أن تكون attribute: ملفًا من النوع:: values.',
    'min' => [
        'numeric' => 'يجب أن تكون attribute: على الأقل :min.',
        'file' => 'يجب أن تكون attribute: على الأقل :min بالكيلوبايت.',
        'string' => 'يجب أن تكون attribute: على الأقل:min characters.',
        'array' => 'يجب أن تحتوي attribute: على الأقل :min items.',
    ],
    'not_in' => 'attribute المحددة: غير صالحة.',
    'not_regex' => 'تنسيق attribute: غير صالح.',
    'numeric' => 'يجب أن تكون attribute: رقمًا.',
    'present' => 'يجب أن يكون حقل attribute موجودًا.',
    'regex' => 'تنسيق attribute: غير صالح.',
    'required' => 'حقل attribute: مطلوب.',
    'required_if' => 'حقل attribute: مطلوب عندما: الآخر هو: قيمة.',
    'required_unless' => 'حقل attribute: مطلوب ما لم: الآخر موجود في :values.',
    'required_with' => 'حقل attribute: مطلوب عندما :values موجودة.',
    'required_with_all' => 'حقل attribute: مطلوب عندما :values موجودة.',
    'required_without' => 'حقل attribute: مطلوب عندما:values غير موجودة.',
    'required_without_all' => 'حقل attribute: مطلوب عند عدم وجود:values موجودة.',
    'same' => 'لسمة: و: يجب أن تتطابق الأخرى',
    'size' => [
        'numeric' => 'يجب أن تكون attribute :size.',
        'file' => 'يجب أن تكون attribute: size كيلو بايت.',
        'string' => 'يجب أن تكون attribute: أحرف size.',
        'array' => 'يجب أن تحتوي attribute: size size.',
    ],
    'starts_with' => 'يجب أن تبدأ attribute: بأحد الإجراءات التالية:: values',
    'string' => 'يجب أن تكون attribute: string.',
    'timezone' => 'يجب أن تكون attribute: منطقة صالحة.',
    'unique' => ':attribute  تم اتخاذها بالفعل.',
    'uploaded' => 'فشل تحميل attribute:',
    'url' => 'تنسيق attribute: غير صالح.',
    'uuid' => 'يجب أن تكون attribute: UUID صالحة.',

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
