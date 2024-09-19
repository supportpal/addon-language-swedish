<?php

return array(

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

    "accepted"                  => ":attribute måste accepteras.",
    "active_url"                => ":attribute är inte en giltig URL.",
    "after"                     => ":attribute måste vara ett datum efter :date.",
    "alpha"                     => ":attribute får bara innehålla bokstäver.",
    "alpha_dash"                => ":attribute får bara innehålla bokstäver, siffror och streck.",
    "alpha_num"                 => ":attribute får bara innehålla bokstäver och siffror.",
    "array"                     => ":attribute måste vara en array.",
    "before"                    => ":attribute måste vara ett datum före :date.",
    "between"                   => array(
        "numeric" => ":attribute måste vara mellan :min och :max.",
        "file"    => ":attribute måste vara mellan :min och :max kilobyte.",
        "string"  => ":attribute måste vara mellan :min och :max tecken.",
        "array"   => ":attribute måste ha mellan :min och :max objekt.",
    ),
    "boolean"                   => ":attributefältet måste vara sant eller falskt.",
    "confirmed"                 => ":attributebekräftelsen stämmer inte.",
    "date"                      => ":attribute är inte ett giltigt datum.",
    "date_format"               => ":attribute matchar inte formatet :format.",
    "different"                 => ":attribute och :other måste vara olika.",
    "digits"                    => ":attribute måste vara :digits siffror.",
    "digits_between"            => ":attribute måste vara mellan :min och :max siffror.",
    "email"                     => ":attribute måste vara en giltig e-postadress.",
    "exists"                    => "valda :attribute är ogiltig.",
    "image"                     => ":attribute måste vara en bild.",
    "in"                        => "valda :attribute är ogiltig.",
    "integer"                   => ":attribute måste vara ett heltal.",
    "ip"                        => ":attribute måste vara en giltig IP-adress.",
    "max"                       => array(
        "numeric" => ":attribute får inte vara större än :max.",
        "file"    => ":attribute får inte vara större än :max kilobyte.",
        "string"  => ":attribute får inte vara större än :max tecken.",
        "array"   => ":attribute får inte ha fler än :max objekt.",
    ),
    "mimes"                     => ":attribute måste vara av filtypen: :values.",
    "min"                       => array(
        "numeric" => ":attribute måste åtminstone vara :min.",
        "file"    => ":attribute måste åtminstone vara :min kilobyte.",
        "string"  => ":attribute måste åtminstone vara :min tecken.",
        "array"   => ":attribute måste åtminstone ha :min objekt.",
    ),
    "not_in"                    => "Valda :attribute är ogiltig.",
    "numeric"                   => ":attribute måste vara en siffra.",
    "regex"                     => ":attributeformatet är ogiltig.",
    "required"                  => ":attributefältet krävs.",
    "required_if"               => ":attributefältet krävs när :other är :value.",
    "required_with"             => ":attributefältet krävs när :values finns.",
    "required_with_all"         => ":attributefältet krävs när :values finns.",
    "required_without"          => ":attributefältet krävs när :values inte finns.",
    "required_without_all"      => ":attributefältet krävs när inget av :values finns.",
    "same"                      => ":attribute och :other måste matcha.",
    "size"                      => array(
        "numeric" => ":attribute måste vara :size.",
        "file"    => ":attribute måste vara :size kilobyte.",
        "string"  => ":attribute måste vara :size tecken.",
        "array"   => ":attribute måste innehålla :size objekt.",
    ),
    "unique"                    => ":attribute har redan tagits.",
    "url"                       => ":attributeformatet är ogiltigt.",
    "template_exists"           => "det valda :attribute är ogiltig.",
    "is_valid_captcha"          => "den inskrivna captcha-koden är ogiltig, försök igen.",
    "user_password_strength"    => ":attribute måste innehålla: :user_password_strength.",
    "operator_password_strength" => ":attribute måste innehålla: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Loggan måste peka mot en giltig bildfil (URL eller relativ filsökväg utifrån basmappen).",

    /*
     * 2.2.0
     */
    "required_with_translation" => ":translation översättningen av :attribute fältet krävs när :values finns.",
    "max_translation"           => ":translation översättningen av :attribute fältet får inte vara större än :max tecken.",
    "unique_translation"        => ":translation översättningen av :attribute field har redan använts.",

    /*
     * 2.3.0
     */
    "required_translation"      => ":translation översättningen av :attribute fältet krävs.",
    "customfield_not_cyclic"    => "Fältet kan inte bero på sitt eget under fält.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "The slug field can only contain alphanumeric characters, please percent encode any special characters.",
    "article_slug_unique"       => "Slug används redan.",
    "captcha_required"          => "Captcha är obligatoriskt.",
    "ticket_number_format"      => "Ärendets nummerformat är ogiltigt.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => ":attribute måste vara ett datum efter eller lika med :date.",
    "before_or_equal"           => ":attribute måste vara ett datum före eller lika med :date.",
    "dimensions"                => ":attribute har ogiltiga bilddimensioner",
    "distinct"                  => ":attribute fältet har ett duplicerat värde.",
    "file"                      => ":attribute måste vara en fil.",
    "filled"                    => ":attribute fältet måste ha ett värde.",
    "gt"                        => array(
        "numeric" => ":attribute måste vara större än :value.",
        "file"    => ":attribute måste vara större än :value kilobyte.",
        "string"  => ":attribute måste vara längre än :value tecken.",
        "array"   => ":attribute måste ha fler än :value föremål.",
    ),
    "gte"                       => array(
        "numeric" => ":attribute måste vara större än eller lika med :value.",
        "file"    => ":attribute måste vara större än eller lika med :value kilobyte.",
        "string"  => ":attribute måste vara längre än eller lika med :value tecken.",
        "array"   => ":attribute måste ha :value föremål eller fler.",
    ),
    "in_array"                  => ":attribute fältet finns inte i :other.",
    "ipv4"                      => ":attribute måste vara en giltig IPv4-adress.",
    "ipv6"                      => ":attribute måste vara en giltig IPv6-adress.",
    "json"                      => ":attribute måste vara en giltig JSON-sträng.",
    "lt"                        => array(
        "numeric" => ":attribute måste vara mindre än :value.",
        "file"    => ":attribute måste vara mindre än :value kilobyte.",
        "string"  => ":attribute måste vara kortare än :value tecken.",
        "array"   => ":attribute måste ha färre än :value föremål.",
    ),
    "lte"                       => array(
        "numeric" => ":attribute måste vara mindre än eller lika med :value.",
        "file"    => ":attribute måste vara mindre än eller lika med :value kilobyte.",
        "string"  => ":attribute måste vara kortare än eller lika med :value tecken.",
        "array"   => ":attribute måste ha :value föremål eller färre.",
    ),
    "mimetypes"                 => ":attribute måste vara en fil av typen: :values.",
    "not_regex"                 => ":attribute formatet är ogiltigt.",
    "present"                   => ":attribute fältet måste finnas med.",
    "required_unless"           => ":attribute fältet är obligatoriskt om inte :other finns i :values.",
    "string"                    => ":attribute måste vara en sträng.",
    "timezone"                  => ":attribute måste vara en giltig zon.",
    "uploaded"                  => ":attribute misslyckades med uppladdningen.",

    /*
     * 2.5.0
     */
    "domain"                    => "Ett eller flera av domännamnen är ogiltiga.",

    /*
     * 2.5.1
     */
    "valid_twig"                => ":attribute är ogiltigt. Vänligen använd 'Förhandsvisning' för detaljer.",

    /*
     * 3.0.0
     */
    "embed_image"               => ":attribute måste vara en fil av typen: jpeg, png eller gif.",
    "starts_with"               => ":attribute måste börja med något av följande: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "Det angivna telefonnumret är ogiltigt.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "The :attribute is invalid.",

    /*
     * 5.0.0
     */
    "current_password"           => "The password is incorrect.",
    "department_email_per_brand" => "An email account must exist for each brand assigned to this department.",
    "department_has_a_priority"  => "Department(s) :departments are public and must be assigned to at least one priority.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "Den valda rollen är ogiltig.",
        ),
        "category.*.type" => array(
            "required" => "Ett ämne krävs för varje e-post.",
        ),
        "category.*.categories" => array(
            "required" => "Innehållsfältet krävs för varje e-post.",
            "exists"   => "En eller flera av de valda kategorierna är ogiltga.",
        ),
        "brand.*" => array(
            "exists" => "Det valda varumärket är ogiltigt.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
