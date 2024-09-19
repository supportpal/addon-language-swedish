<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Operatörspanel",
    "welcome"                   => "Välkommen till SupportPal",
    "welcome_desc"              => "Du har gjort ett smart val. Klicka på start för att börja en snabb rundtur av våra inställningar och funktioner.",

    // Dashboard
    "submit_ticket"             => "Skicka in ärende",
    "submit_ticket_desc"        => "Använd detta formulär för att skicka in ett ärende till oss.",
    "track_ticket"              => "Följ ett ärende",
    "track_ticket_desc"         => "Inte registrerad? Använd din e-postadress och ärendenummer för att följa ärendestatus.",
    "my_tickets"                => "Mina ärenden",
    "my_tickets_desc"           => "Följ dina ärenden. Du kan hitta både aktiva och tidigare inskickade ärenden här.",
    "no_modules"                => "Inga moduler är aktiverade.",
    "search_results"            => "Sökresultat",
    "found_results"             => "Hittade :total poster",

    // Maintenance
    "maintenance"               => "Vi utför underhåll för närvarande",
    "maintenance_desc"          => "Vår helpdesk är temporärt otillgänglig då vi utför underhåll. Tack för ditt tålamod medan vi utför ändringar. Vi är snart tillgängliga igen.",
    "maintenance_active"        => "Underhållsläge är aktivt.",

    // About
    "license_status"            => "Licensstatus",
    "license_code"              => "Licenskod",
    "change_license"            => "Ändra licens",
    "license_info"              => "Licensinformation",
    "license_owner"             => "Licensägare",
    "license_created"           => "Licens skapad",
    "license_type"              => "Licenstyp",
    "branding"                  => "Varumärke",
    "license_expires"           => "Licensen upphör",
    "license_valid_ip"          => "Tillåtna IP-adresser för licens",
    "support_status"            => "Supportstatus",
    "support_expires"           => "Support upphör",
    "version_info"              => "Versioninformation",
    "installed_version"         => "Installerad version",
    "available_version"         => "Tillgänglig version",
    "monthly_product"           => "* Ditt utgångsdatum justeras automatiskt på månadsbasis när alla obetalda fakturor har betalats.",

    // API Tokens
    "api_token"                 => "API-token",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerera token",
    "access_level"              => "Åtkomstnivå",
    "read_write"                => "Läs &amp; skriv",
    "read_only"                 => "Enbart läs",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spamregel|Spamregler",
    "containing_text"           => "Innehåller text",
    "filter_new_message"        => "Nytt ärendemeddelande (från användare)",
    "filter_new_comment"        => "Ny självbetjäningskommentar (från användare)",
    "filter_user_login"         => "Användarlogin",
    "filter_operator_login"     => "Operatörslogin",
    "filter_api_access"         => "API-åtkomst",
    "content"                   => "Innehåll",
    "sender"                    => "Avsändare",
    "content_sender"            => "Innehåll & avsändare",

    // Company
    "company"                   => "Företag",

    // Email
    "default_email_addr"        => "Standarde-postadress",
    "default_email_addr_desc"   => "Den e-post som kommer att användas i avsändarfältet i de flesta e-post som skickas av systemet.",
    "include_operator_name"     => "Inkludera operatörsnamnet",
    "include_operator_name_desc" => "Inkludera operatörsnamnet i e-postens 'Från'-fält för ärendesvarse-post. T.ex.: Från: Joe Bloggs (DittFöretagsnamns support)",
    "include_dept_name"         => "Inkludera avdelningsnamn",
    "include_dept_name_desc"    => "Inkludera avdelningsnamnet i 'Från'-fältet i någon ärenderelaterad e-post. Notera att detta antagligen kommer att skapa en ny e-posttråd om ett givet ärende ändrar avdelning.",
    "global_email_header"       => "Globalt e-posthuvud",
    "global_email_header_desc"  => "Lägg till ett huvud till all e-post som skickas av systemet. HTML accepteras.",
    "global_email_footer"       => "Global e-postfot",
    "global_email_footer_desc"  => "Lägg till en fot till all e-post som skickas av systemet. HTML accepteras.",
    "email_template"            => "E-postmall|E-postmallar",
    "email_log"                 => "E-postlog",
    "email_queue"               => "E-postkö",
    "email_queue_desc"          => "Här nedan finns den e-post i kö som skall skickas ut av systemet med cron.",
    "email_method"              => "E-postmetod",
    "php_mail_function"         => "PHPs mail()-funktion",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP-värd",
    "smtp_port"                 => "SMTP-port",
    "smtp_encryption"           => "SMTP-kryptering",
    "smtp_requires_auth"        => "Kräver autentisering",
    "smtp_username"             => "SMTP-användarnamn",
    "smtp_password"             => "SMTP-lösenord",
    "ssl"                       => "SSL",
    "email_content"             => "E-postinnehåll",
    "email_content_desc"        => "Skriv in ett standardämne och e-postinnehåll för denna mall. Du kan skriva denna mall i andra språk. Om en mall inte har ett annat språk så kommer den att använda standarddatan.",
    "outgoing"                  => "Utgående",
    "incoming"                  => "Inkommande",
    "incoming_spam"             => "Inkommande (avvisad - spam)",
    "incoming_throttled"        => "Inkommande (avvisad - strypt)",
    "email_subject"             => "E-postämne",
    "twig_html_warning"         => "Twig får inte finnas inuti HTML-taggar eller attribut och kommer automatiskt att tas bort vid sparning.",

    // Modules
    "modules"                   => "Modul|Moduler",
    "modules_desc"              => "Här nedanför finns en lista med alla tillgängliga moduler. Klicka på ändra-ikonen för att ändra inställningar för modulen.",
    "module_disable"            => "Avaktiverade moduler kommer att tas bort från framsidan och operatörsinterface.",

    // Scheduled tasks
    "scheduled_task"            => "Schemalagd aktivitet|Schemalagda aktiviteter",
    "interval_desc"             => "Ändra hur ofta denna aktivitet ska köras. Om du sätter t.ex. fem minuter betyder det att aktiviteten kommer att köras var femte minut om cron är aktivt och körs.",
    "cron_settings"             => "Cron-inställningar",
    "cron_running"              => "Körs",
    "cron_not_running"          => "Körs inte",
    "task_ran"                  => "Den schemalagda aktiviteten kördes manuellt.",
    "task_failed"               => "Misslyckades med att köra aktiviteten manuellt.",

    // Plugins
    "plugins"                   => "Insticksmodul|Insticksmoduler",
    "visit_plugin"              => "Besök Insticksmodulsidan",

    // Messages
    "last_activity"             => "Senaste aktivitet",
    "send_to"                   => "Skicka till",
    "inbox"                     => "Inkorg",
    "compose"                   => "Skriva",

    // Utilities
    "utilities"                 => "Verktyg",

    // System Cleanup
    "system_cleanup"            => "Systemrensning",
    "system_cleanup_desc"       => "Använd de tillgängliga inställningar för att ta bort den data som inte längre behövs.",
    "files"                     => "Filer",
    "files_desc"                => "Följande objekt är sparade som filer i filsystemet.",
    "logs"                      => "Loggar",
    "logs_desc"                 => "Följande objekt är sparade som poster i databasen.",
    "empty"                     => "Tom",
    "prune"                     => "Beskär",
    "total_records"             => "Totala poster",
    "system_cache"              => "Systemcache",
    "system_cache_desc"         => "Används för att lagra systemdata som inte ändras med jämna mellanrum för att snabba upp applikationen.",
    "template_cache"            => "Mallcache",
    "template_cache_desc"       => "Förkompilerade versioner av mallvyer lagras för att förbättra laddtider.",
    "attachments_desc"          => "Ärendebilagor sparas i filsystem men kan ta plats. Du kan ta bort bilagor före ett visst datum.",
    "system_activity_log_desc"  => "Lagrar all användar-, operatör- och systemaktivitet. Du kan ta bort poster före ett visst datum.",
    "email_log_desc"            => "Lagrar all inkommande och utgående e-post. Du kan ta bort poster före ett visst datum.",
    "operator_login_log_desc"   => "Lgras varje gång en operatör loggar in med sin IP. Du kan ta bort poster före ett visst datum.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Visa captcha",

    // Widgets
    "dashboard"                 => "Instrumentpanel",
    "add_remove_widget"         => "Lägg till / ta bort widgetar",
    "enable_tour"               => "Aktivera produktrundtur",

    // Product Tour
    "dashboard_desc"            => "Din egna personliga instrumentpanel. Widgetar kan tas bort, minimeras och flyttas runt!",
    "private_messages"          => "Privata meddelanden",
    "messages_desc"             => "Private meddelanden är användbara för 1:1-konversationer med andra helpdeskoperatörer.",
    "configure"                 => "Konfigurera din helpdesk",
    "configure_desc"            => "SupportPal innehåller ett antal inställningar som tillåter dig att konfigurera helpdesken till dina egna preferenser.",
    "default_email"             => "Standarde-postadress",
    "default_email_desc"        => "Standarde-postadress att använda för all utgående korrespondens med användare.",
    "dept_settings_desc"        => "Vi inser att olika avdelningar inom din organisation fungerar olika. Avdelningsinställningarna tillåter dig att skriva över globala inställningar.",
    "department_desc"           => "Avdelningar är som i din organisation. Användbara för att säkerställa att kundfrågor kommer till rätt anställd snabbt.",
    "department_email"          => "Avdelningens e-postadresser",
    "dept_email_desc"           => "Multipla e-postadresser kan ges till varje avdelning. E-postsamling utförs mot de konfigurerade e-postadresserna för att hämta e-post från dina kunder till helpdesken.",
    "dept_tmpl"                 => "Avdelningens e-postmallar",
    "dept_tmpl_desc"            => "Ibland kan det vara så att du vill ändra, eller avaktivera, avdelningens e-postmallar. Du kan definiera avdelningsspecifika e-postmallaroch aktivera dem här.",
    "schedule_task_desc"        => "Schemalagda uppgifter används för att automatisera olika processer inom SupportPal, inklusive e-postbaserad ärendesamling.",
    "schedule_task_2"           => "Schemalagda uppgifter kräver att ett cronjobb skapas för att fungera. Intervallet för varje uppgift utförd av cronjobbet kan justeras via ändringsformuläret.",
    "schedule_task_cron"        => "Cronjobb",
    "schedule_task_3"           => "Skapa ett cronjobb liknande exemplet nedan på din server för att schemalagda aktiviteter ska köras automatiskt.",
    "ticket_channel_desc"       => "Ärendekanaler är metoder för att skapa ärenden. De kan lätt bli utökade att inkludera dina egna kanaler till exempel ärenden öppnade via Instagram.",
    "user_desc"                 => "Användare som interagerar med ditt system visas här.Du kan lägga till, ändra och ta bort användare som du vill.",
    "organisation_desc"         => "Användare kan bli tilldelade organisationer som ger dem tillgång till ärenden öppnade av andra användare inom sin organisation.",
    "operator_desc"             => "Andra personalmedlemmar kan bli tillagda som operatörer här tillsammans med att hantera vilka avdelningar de tillhör.",
    "ticket_desc"               => "Ärenderutnätet innehåller en samling ärenden som är relevanta för dig.",
    "ticket_toolbar"            => "Verktygsfält",
    "ticket_desc3"              => "Satshandlingar kan bli utförda på ärenden genom att använda ärendeverktygsfältet.",
    "tour_complete"             => "Rundvandring slutförd!",
    "tour_complete_desc"        => "Tack för att du använder SupportPal.<br /><br />Vi rekommenderar dig att följa kom igång-guiden nedan för att konfigurera helpdesken.",

    // IP Ban
    "ip_ban_time_desc"          => "Om bannlysningen är permanent eller temporär.",
    "expiry"                    => "Upphörande",
    "expired"                   => "Upphört",
    "expiry_time"               => "Upphörandetid",
    "expiry_time_desc"          => "Tiden då bannlysningen upphör. Om ett datum inte är satt eller är i det förflutna så blir det 24 timmar från och med nu.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Misslyckades med att uppdatera :item. Åtminstone ett språk måste vara aktiverat hela tiden.",

    // General Settings
    "locale"                    => "Plats",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Administratörsmapp",
    "admin_folder_desc"         => "Sätt mappnamnet för att besöka operatörspanelen. Det är rekommenderat att ändra från standarden \"admin\" utifrån ett säkerhetsperspektiv.",
    "enable_ssl"                => "Aktivera SSL",
    "maintenance_mode"          => "Underhållsläge",
    "maintenance_mode_desc"     => "Avaktivera den publika helpdeskfunktionaliteten och visa en underhållsnotifikation. Ändra resources/templates/frontend/[template]/core/maintenance.twig för att ändra meddelandet som visas för användare.",
    "default_user_country"      => "Standardanvändarland",
    "default_user_country_desc" => "Landet som väljs automatiskt när användare registrerar sig.",
    "system_timezone"           => "Systemtidszon",
    "system_timezone_desc"      => "Standardtidszonen som används igenom hela systemet. Operatörer kan ändra sin tidszon i sina personliga inställningar.",
    "date_format"               => "Datumformat",
    "date_format_desc"          => "Datumformatet som används globalt.",
    "time_format"               => "Tidsformat",
    "time_format_desc"          => "Tidsformatet som används globalt.",
    "simpleauth_key"            => "SimpleAuth-nyckel",
    "simpleauth_key_desc"       => "Nyckeln för vår \"single sign on\"-inställning, minst 16 tecken.",
    "simpleauth_operators"      => "Tillåt för operatörer",
    "base_url"                  => "System-URL",
    "base_url_desc"             => "Skriv in den fulla webbadressen för din installation. Används för att generera URL:er som skickas till användare.",
    "debug"                     => "Felsökning",
    "debug_mode"                => "Felsökningsläge",
    "pretty_urls"               => "Fina URL:er",
    "pretty_urls_desc"          => "Aktivering av detta tar bort index.php från URL:er. Aktivera enbart om du kan komma åt operatörspanelen utan index.php. Avaktivera om du inte har mod_rewrite installerat, .htaccess-filer är inte tillåtna eller Apache-.htaccess-omskrivningsregler har inte konverterats för att fungera med din alternativa webbserver.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgetar",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Aktivering av detta tvingar att hela framsidan och operatörsområdet använder säker anslutning, rekommenderas. Säkerställ att HTTPS fungerar korrekt på servern innan detta aktiveras.",
    "unexpected_template_error" => "Ett oväntat fel uppstod medan syntaxkontroll utfördes på mallen. Försök igen.",
    "empty_template_preview"    => "Tillhandahåll en giltig mall för att använda förhandsvisningsfunktionen.",
    "no_department_address"     => "Misslyckades med att hitta en avdelningsadress i mottagarlistan.",
    "email_loop_detected"       => "Loop upptäckt - e-post har skickats från en avdelningsadress.",
    "email_ticket_locked"       => "Ärende låst. Användaren har blivit ombedd att öppna ett nytt ärende via e-post.",
    "email_no_body"             => "Misslyckades med att identifiera e-postmeddelandets kropp.",
    "email_runtime_error"       => "Ett körtidsfel uppstod när ärendet/svaret skulle skapas.",
    "email_reply_disabled"      => "Envändare-postsvar har avaktiverats för denna avdelning.",
    "email_throttled"           => "För mycket inkommand e-post från användaren. Gränsen är :max_requests e-post var :decay_time minut.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Ändra inställningarna som tillämpas över hela SupportPal. Om du vill ändra inställningar för en specifik sektion, t.ex. ärenden, öppna sektionen i sidomenyn för att visa tillgängliga inställningar för den modulen. Inställningar relaterade till ditt/dina varumärke/varumärken kan hittas genom att klicka på varumärken i sidomenyn.",
    "brand"                     => "Varumärke|Varumärken",
    "brand_desc"                => "Ett varumärke är din identitet gentemot kund inom SupportPal, som tillåter olika kommunikationskanaler. Flera olika varumärken kan hanteras sömlöst under en enhetlig operatörspanel.",
    "default_brand"             => "Standardvarumärke",
    "default_brand_desc"        => "Välj det varumärke som kommer användas som standard när besökare besöker framsidan och ett matchande varumärke inte hittas.",
    "brand_enabled_desc"        => "Växla för att aktivera eller inaktivera detta varumärke. Avaktiverade varumärken kan inte användas och räknas inte som en del av de varumärken som ingår i licensen. Avaktivering kan användas till att temporärt gömma ett varumärke och/eller behålla information. Borttagning av ett varumärke tar bort all information inklusive användare och ärenden som tillhör den.",
    "inherit_global_setting"    => "Ärv global inställning",
    "brand_date_format_desc"    => "Datumformatet som används för detta varumärkes framsida.",
    "brand_time_format_desc"    => "Tidsformatet som används för detta varumärkes framsida.",
    "brand_timezone"            => "Varumärkestidszon",
    "brand_timezone_desc"       => "Den tidszon som används som standard på detta varumärkes framsida. Användare kommer att kunna ändra sin egna tidszon.",
    "brand_default_lang_desc"   => "Det språk som används som standard på detta varumärkes framsida.",
    "brand_lang_toggle_desc"    => "Om språkval skall visas på detta varumärkes framsida.",
    "brand_groups_desc"         => "Operatörer i de valda grupperna kommer att kunna skapa, uppdatera och ta bort (beroende på rollåtkomster) ärenden och annat innehåll i detta varumärke.",
    "select_brand"              => "Välj ett varumärke...",
    "add_another_language"      => "Lägg till ett annat språk...",
    "mass_email_brand_desc"     => "Välj vilket varumärke e-post ska skickas från. Det används för att sätta avsändare och adress, ladda den korrekta e-postmallen och sammanslagningsfälten. Om du skickar till en användargrupp får bara de användare som tillhör det valda varumärket e-posten.",
    "brand_limit_exceeded"      => "Din licens är för närvarande tillåten att använda :allowed varumärken samtidigt. För att köpa ytterliggare varumärken kan du besöka vårat kundområde.",
    "additional_brands"         => "Ytterliggare varumärken",
    "purchase_more"             => "Köp fler",
    "brand_limit_allowed"       => "Din licens är för närvarande tillåten att använda :allowed varumärke samtidigt.|Din licens är för närvarande tillåten att använda :allowed varumärken samtidigt.",
    "brand_limit_purchase"      => "Om detta är inkorrekt <strong>återutge</strong> din licens i vårat <a href='http://www.supportpal.com/manage/' target='_blank'>kundområde</a> och besök <a href=':route'>licensinformationsidan</a> för att synkronisera din helpdesk med vår licensserver.<br />För att köpa fler varumärken, <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>uppgradera din licens</a>.",
    "support_expiry"            => "Din support- och uppdateringsprenumeration är giltig till :date.",
    "support_status_desc"       => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>Förnya din supportprenumeration</a> för att fortsätta få den senaste supporten och uppdateringarna från SupportPal.",
    "ip_ban"                    => "IP-bannlysning|IP-bannlysningar",
    "ip_whitelist"              => "IP-vitlista",
    "whitelisted_ip"            => "Vitlistad IP",
    "license_path"              => "Installationsväg",
    "php_info"                  => "PHP-information",
    "log"                       => "logg|Loggar",
    "invalid_department_brand"  => "Avdelningen tillhör inte ett ärendevarumärke.",
    "incoming_rejected"         => "Inkommande (avvisad)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Logfilshantering",
    "file_manager_desc"         => "Här nedan kan du ladda ner eller ta bort loggar som sparas när systemet används, de kan användas i felsökningssyfte. Händelser äldre än fem dagar tas bort automatiskt.",
    "app_logs"                  => "Applikationloggar",
    "app_logs_desc"             => "All warnings and errors from general usage of the help desk are logged here. You may be asked to provide one or more of these logs when requesting support.",
    "email_logs"                => "E-postloggar",
    "email_logs_desc"           => "Detaljer om inkommande e-post sparas i dessa filer när de blir analyserade och importerade som ärende.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Svara till",
    "and_number_others"         => "och :number andra",
    "user_templates"            => "Användarmall",
    "operator_templates"        => "Operatörsmallar",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Begränsning av sammanlagd storlek på bifogade filer",
    "attachment_size_desc"      => "The maximum cumulative size of all attachments that are sent in a single email. Available options are K (for Kilobytes) and M (for Megabytes), anything else assumes bytes. Example value: 5M for 5 Megabytes. Set to 0 to not send any attachments by email and require users to download attachments via the help desk.",
    "attachment_limit_reached"  => "Cumulative file limit reached (:size). Please consider sending files via another medium (such as a download URL).",
    "no_existing_translations"  => "Översättning saknas.",
    "add_translation"           => "Lägg till översättning",
    "todo_list"                 => "Att göra lista",
    "version_check"             => "Kontrollera uppdateringar",
    "system_overview"           => "Systemöversikt",
    "getting_started"           => "Här börjar vi",
    "operator_notes"            => "Operatörsnoteringar",
    "simpleauth_operators_desc" => "Allow operators to log in and out with SimpleAuth, we recommend to keep this disabled unless you are specifically using it for this purpose.",
    "upgrade_and_reactivate"    => "Uppgradera och återaktivera",
    "upgrade_pending"           => "Väntande uppdatering",
    "locale_in_uri"             => "Inkludera språkval i URL",
    "locale_in_uri_desc"        => "Disable to remove the locale from the URI, for example: http://support.mycompany.com/en/announcements becomes http://support.mycompany.com/announcements. Can only be disabled when there's one enabled language in the system.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Detta är standardspråket. Om du avaktiverar detta kommer ett annat aktiverat språl sättas som stanarspråk.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Vänligen aktivera JavaScript för att använda denna sida",
    "go_to_dashboard"           => "Gå till instrumentpanelen",
    "brand_colour_desc"         => "Välj en färg för ditt varumärke, den kommer att användas för färgschemat både på frontend och operatörsmallen. Lämna tomt för att använda standardschemat",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Favicon-bilden visas i adressfältet och används för att identifiera din webbplats. För bästa resultat, se till att ikonen innehåller en rad storlekar från 32x32px till 310x310px, är fyrkantig och i ICO/PNG-format.",
    "view_original"             => "Se original",
    "download_original"         => "Ladda ner original",
    "consume_all"               => "Ange en avdelnings-e-postadress med \"Consume All\" aktiverat (valfritt)",
    "reprocess_email"           => "Ombehandla e-post",
    "reprocess_email_desc"      => "Vi rekommenderar att granska vad som ursprungligen blockerade e-posten och göra nödvändiga ändringar innan du försöker ombehandla.",
    "email_blocked_desc"        => "E-posten misslyckades att skicka flera gånger, den måste nu skickas manuellt.",
    "captcha_type"              => "Captcha-typ",
    "default_captcha"           => "Standard Captcha",
    "recaptcha_site_key"        => "Webbplatsnyckel",
    "recaptcha_secret_key"      => "Hemlig nyckel",
    "recaptcha_desc"            => "Vänligen registrera en ny webbplats på <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, välj rätt typ av reCAPTCHA och se till att lägga till varje varumärkesdomän. Kopiera webbplats- och hemlig nyckel ovan.",
    "enter_code"                => "Ange kod",
    "export_data"               => "Exportera data",
    "export_data_desc"          => "Generera en nedladdningsbar export av data som tillhör denna användare.",
    "export_data_select"        => "Vänligen välj vilken data du vill exportera.",
    "export_data_scheduled"     => "Exporten genereras för närvarande, detta kan ta lite tid. Vi kommer att e-posta dig när den är tillgänglig för nedladdning.",
    "database"                  => "Databas",
    "database_desc"             => "Följande objekt lagras i databasen.",
    "prune_users"               => "Inaktiva användarposter kan automatiskt rensas bort. En användare anses vara inaktiv om de inte har loggat in eller haft någon annan aktivitet under en viss tid.",
    "prune_tickets"             => "Inaktiva ärenden kan automatiskt rensas bort. En biljett anses vara inaktiv om den är löst och inte har haft någon aktivitet under en viss tid.",
    "prune_organisations"       => "Inaktiva organisationer kan automatiskt rensas bort. En organisation anses vara inaktiv om den inte har några användare kopplade till sig och inte har haft någon aktivitet under en viss tid.",
    "prune_export"              => "Användardataexporter lagras på filsystemet men kan ta upp utrymme, du kan beskära exportfiler som genererats före ett visst datum.",
    "automatically_prune"       => "Radera automatiskt",
    "days_after_saved"          => "Poster efter",
    "days_after_last_activity"  => "Inaktiva poster efter",
    "record_permanent_delete"   => "Uppgifterna kommer att raderas permanent. Detta kommer att påverka rapporter.",
    "record_delete_relations"   => "Uppgifterna kommer att raderas permanent tillsammans med följande relaterade data: :relations. Detta kommer att påverka rapporter.",
    "manually_prune"            => "Manuellt radera poster som skapats tidigare",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Om du aktiverar denna inställning när sidan inte laddas korrekt kan du bli utelåst från SupportPal!",
    "verify_frontend_loads"     => "Vänligen verifiera att frontend laddas korrekt nedan.",
    "twig_operator_reply_template"   => "Fältet {{ operator.signature|raw }} kommer att bearbetas under körning, därför kan förhandsgranskningen vara felaktig.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Tillåter att köra andra varumärken på din SupportPal-installation.",
    "no_branding"               => "Ingen branding",
    "no_branding_desc"          => "Tar bort SupportPal-branding från den kundvända delen av helpdesken.",
    "multi_ip"                  => "Multi-IP support",
    "multi_ip_desc"             => "Tillåter att låsa SupportPal till mer än en intern/extern IP.",
    "purchase"                  => "Köp",
    "ticket_number_missing"     => "För e-postmeddelanden som rör ärenden ska fältet {{ ticket.number }} finnas med i e-postmeddelandets ämne och måste omslutas av antingen <em>[#{{ ticket.number }}]</em> eller <em>(#{{ ticket.number }})</em> för att svaren ska styras till rätt ärende. Om du vill ta bort ärendenumret kan du överväga att aktivera  <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Enable debug mode to display errors, only use for debugging or if instructed by support. Errors and other useful logging messages are otherwise stored in the application logs, which can be downloaded by going to Utilities -> Logs -> Log File Manager.",
    "record_trash_relations"    => "The records will be moved to the trash and then permanently deleted after :number days along with the following related data: :relations. This will impact reports.",
    "uninstall_plugable_warning" => "Uninstalling the :plugable will delete all associated files and data. We recommend to deactivate the :plugable instead.",
    "web_settings_desc"         => "The web channel settings apply to the frontend. By default tickets can be accessed by anyone who knows a unique ticket URL. You may wish to disable this and require users to login before they can access ticket information.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Vänligen ange en sträng (specifikt ord att blockera eller e-postadress), alla strängar är skiftlägesokänsliga.",
    "spam_is_regex_desc"        => "Regler kan utnyttja reguljära uttryck; om du tänker göra det ska du aktivera den här inställningen. Du behöver inte inkludera avgränsare.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Filen/filerna kunde inte laddas upp på grund av ett okänt fel.",
    "insert_image"              => "Infoga bild",
    "quote"                     => "Citat",
    "code"                      => "Kod",
    "format"                    => "Format",
    "paragraph"                 => "Paragraf",
    "heading1"                  => "Rubrik 1",
    "heading2"                  => "Rubrik 2",
    "heading3"                  => "Rubrik 3",
    "heading4"                  => "Rubrik 4",
    "heading5"                  => "Rubrik 5",
    "heading6"                  => "Rubrik 6",
    "upload"                    => "Ladda upp",
    "more_formatting"           => "Mer formatering",
    "clearformat"               => "Rensa formatering",
    "bold"                      => "Fet",
    "underline"                 => "Understruken",
    "italic"                    => "Kursiv",
    "strikethrough"             => "Genomstruken",
    "font_color"                => "Textfärg",
    "insert_link"               => "Infoga länk",
    "edit_link"                 => "Redigera länk",
    "unlink"                    => "Ta bort länk",
    "orderedlist"               => "Numrerad lista",
    "unorderedlist"             => "Punktlista",
    "outdent"                   => "Minska indrag",
    "indent"                    => "Öka indrag",
    "lists"                     => "Listor",
    "edit_html"                 => "Redigera HTML",
    "sEmptyTable"               => "Ingen data tillgänglig i tabellen",
    "sInfo"                     => "Showing _START_ to _END_ of _TOTAL_ entries",
    "sInfoEmpty"                => "Showing 0 to 0 of 0 entries",
    "sInfoFiltered"             => "(filtered from _MAX_ total entries)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Show _MENU_ entries",
    "sLoadingRecords"           => "Laddar...",
    "sProcessing"               => "Bearbetar...",
    "sSearchPlaceholder"        => "Sök...",
    "sZeroRecords"              => "Inga matchande poster hittades",
    "sSortAscending"            => ": aktivera för att sortera kolumnen stigande",
    "sSortDescending"           => ": aktivera för att sortera kolumnen fallande",
    "incoming_auto_reply"       => "Inkommande (Automatiskt svar)",
    "logo_dark_mode"            => "Logotyp för mörkt läge",
    "logo_dark_mode_desc"       => "Om din logotyp är utformad för att endast fungera på en ljus bakgrund, ange en annan logotyp för mörkt läge. Fältet kan antingen vara en sökväg i förhållande till baskatalogen (vi rekommenderar att du lagrar din logotyp i mappen resources/assets/) eller en direkt URL till bilden.",
    "template_mode"             => "Mall läge",
    "template_mode_desc"        => "Ställ in ett standardljus eller mörkt tema för gränssnittet. Användare kommer att kunna välja sin egen preferens i sin profil.",
    "light_mode"                => "Ljust läge",
    "dark_mode"                 => "Mörkt läge",
    "logo"                      => "Logotyp",
    "logo_desc"                 => "Ändra standardlogotypen för det här varumärket. Fältet kan antingen vara en sökväg i förhållande till baskatalogen (vi rekommenderar att du lagrar logotypen i mappen resources/assets/) eller en direkt URL till bilden.",
    "website_url"               => "Webbplats-URL",
    "website_url_desc"          => "Add a link back to your main website in the support portal header.",
    "back_to_website"           => "Tillbaka till webbplatsen",
    "template"                  => "Mall",
    "how_can_we_help"           => "Hur kan vi hjälpa dig?",
    "ticket_desc2"              => "Ärenden kan ordnas efter dina preferenser och filtreras efter behov.",
    "zip_extension_required"    => "Zip PHP-tillägget är inte installerat. Vänligen installera det och försök igen.",
    "zip_file_not_downloaded"   => "Zip-filen kunde inte laddas ner. Kontrollera att du kan komma åt: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party Integration|Third-Party Integrations",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Please create authentication credentials via the <a href=\":route\">Third-Party Integration</a> page.",
    "oauth_data_missing"        => "The client ID and/or secret haven't been set and are required. Once you have set it up as per the below instructions, close the pop-up and re-validate.",
    "configure_after_brand_created" => "This may be configured after the brand has been created.",
    "get_access_token"          => "Get Access Token",
    "reset_access_token"        => "Reset Access Token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Varumärkesnamn",
    "brand_name_desc"           => "Ditt varumärkesnamn används för all korrespondens med användare.",
    "supportpal_announcements"  => "SupportPal-meddelanden",
    "add_selectize"             => "Lägg till <strong>:item</strong>...",
    "general_settings"          => "Konfigurera allmänna inställningar",
    "configure_brand"           => "Konfigurera varumärke",
    "configure_department"      => "Konfigurera avdelning",
    "setup_cron"                => "Konfigurera cronjobb",
    "channel_settings"          => "Uppdatera inställningar för ärendekanaler",
    "add_user"                  => "Lägg till en ny användare",
    "open_ticket"               => "Öppna ett nytt ärende",
    "reply_ticket"              => "Svara på ärende",
    "new_version_available"     => "Ny version tillgänglig",
    "new_version_desc"          => "En ny version av SupportPal har släppts, vi rekommenderar alltid att du håller din installation uppdaterad.<div class='description'>Att bekräfta detta meddelande kommer att dölja det tills en nyare version släpps.</div>",
    "acknowledge"               => "Bekräfta",
    "running_latest_version"    => "Du kör den senaste versionen.",
    "running_prerelease"        => "Du kör en förhandsversion.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Resultat per sida",
    "class_name"                => "Class Name",
    "possible_permission_issue" => "Du kör kommandot som \":cli_user\", medan \":path\" ägs av \":path_user\", vilket kan leda till problem med filbehörighet.",
    "system_update"             => "Systemuppdatering",
    "system_update_desc"        => "Uppdatera SupportPal till den senaste tillgängliga versionen.",
    "update_available"          => "Uppdatering tillgänglig",
    "up_to_date"                => "Uppdaterad",
    "release_notes"             => "Versionsanteckningar",
    "about_to_update_to"        => "Du är på väg att uppdatera till version <strong>:version</strong>. En fullständig systembackup kommer att tas automatiskt före uppdateringen.",
    "waiting_for_update_start"  => "Väntar på att uppdateringen ska starta... Detta kan ta några minuter.",
    "binary_paths"              => "Binära sökvägar",
    "binary_paths_desc"         => "The PATH environment variable is used to find required binaries. If one or more binary cannot be found, you can specify the full path for each binary file.",
    "cron_makesure"             => "För vägledning vid registrering av cronjobb, titta på <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>cronjobbhjälpen</a>.",
    "cron_must_run_for_update"  => "Cronjobbet måste köras för att använda denna funktion.",
    "support_expired"           => "Supporten och uppdateringarna på din licens har gått ut.",
    "update_permitted_version"  => "Licensen tillåter endast uppdatering till :version.",
    "update_renew_support"      => "För att uppdatera till den senaste versionen av SupportPal, vänligen förnya din support och uppdateringar.",
    "renew"                     => "Förnya",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Bakgrundsjobb",
    "background_jobs_not_processing" => "Background jobs are not currently being processed, view <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>troubleshooting steps</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Tillägg",
    "addon_already_exists"      => "Ett tillägg finns redan på denna sökväg: :path",
    "addons_marketplace"        => "Marketplace",
    "addons_missing_valid_artifact" => "Tillägget har inte ett giltigt arkiv.",
    "checksum_not_matched"      => "Den nedladdade filen misslyckades med verifiering av kontrollsumma.",
    "invalid_archive_format"    => "Artefakten bör inte inkludera andra kataloger än tillägget.",
    "downloading_version"       => "Downloading add-on version :version to :path...",
    "extracting_addon"          => "Extraherar tilläggsfiler...",
    "activating_addon"          => "Aktiverar tillägg...",
    "addon_install_success"     => "Tillägget installerades framgångsrikt.",
    "addon_install_error"       => "Tillägget misslyckades att installeras, vänligen kontrollera applikationsloggarna för mer information.",
    "addon_latest_version"      => "Tillägget kör redan den senaste versionen.",
    "addon_update_success"      => "Tillägget uppdaterades framgångsrikt.",
    "addon_update_error"        => "Tillägget misslyckades att uppdatera och har återställts, vänligen kontrollera applikationsloggarna för mer information.",
    "addon_basic_info"          => "Vänligen tillhandahåll grundläggande information om tillägget.",
    "addon_author_name"         => "Författarens namn",
    "addon_author_uri"          => "Författarens URI (länk till din webbplats)",
    "addon_author_uri_short"    => "Författarens URI",
    "addon_vendor_name"         => "Leverantörsnamn (namnet på ditt företag, kan vara samma som författarnamn)",
    "addon_vendor_name_short"   => "Leverantörsnamn",
    "addon_name"                => "Tilläggsnamn",
    "addon_description"         => "Tilläggsbeskrivning",
    "addon_creating"            => "Skapar tillägg...",
    "addon_ready"               => "Add-on ready in :directory! Build something amazing.",
    "addon_version_not_supported" => "Den tillgängliga versionen av tillägget stöder inte den installerade SupportPal-versionen.",
    "no_addons_found"           => "Inga tillägg hittades.",
    "price"                     => "Pris",
    "one_time"                  => "Engångs",
    "monthly"                   => "Månadsvis",
    "quarterly"                 => "Kvartalsvis",
    "semiannually"              => "Halvårsvis",
    "annually"                  => "Årligen",
    "biennially"                => "Vartannat år",
    "triennially"               => "Vart tredje år",
    "tag"                       => "Tag|Taggar",
    "login_to_install"          => "<a href=':link'>Login</a> to Install",
    "marketplace_login_error"   => "Login failed. Please <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>logout</a> and then ensure to log in to the account that has your SupportPal license.",
    "payment_required"          => "Betalning krävs",
    "addon_purchase_info"       => "By clicking the above button, your account will be charged the price shown at the selected billing cycle, and you agree to our <a href=':link' target='_blank'>terms of service</a>.",
    "addon_cancel_info"         => "Avbokning kommer omedelbart att inaktivera tillägget och stoppa ytterligare betalningar.",
    "system_health"             => "Systemhälsa",
    "system_health_desc"        => "Hälsokontroller övervakar att systemet fungerar korrekt och meddelar dig när problem uppstår.",
    "system_health_errors"      => "En eller flera <a href=':link'>system health</a> misslyckas.",
    "app_log_check"             => "Antal fel i applikationsloggen",
    "app_log_errors_exist"      => "Application log file for today contains errors, please check the logs by navigating to Utilities -> Logs -> Log File Manager -> :filename",
    "redis_check"               => "Redis Connection",
    "web_server_check"          => "Webbserver",
    "web_server_error"          => "Kan inte ansluta till :url",
    "redirection_rules_check"   => "Redirection Rules",
    "redirection_rule_error"    => "Server redirection rules must remove /index.php from path. Otherwise attackers can potentially access your files.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "Cronjobbet körs inte.",
    "cron_check_warning"        => "The following tasks: (:tasks) has not been ran within their expected interval.",
    "database_check"            => "Databasanslutning",
    "disk_usage_check"          => "Ledigt diskutrymme",
    "email_queue_check"         => "Outbound Email Queue",
    "email_queue_warning"       => "Email queue contains :number emails that require manual attention.",
    "pipe_check"                => "Email Piping",
    "file_not_found"            => "File ':path' not found.",
    "file_not_executable"       => "File ':path' is not executable.",
    "dependency_resolution"     => "Unable to run health check.",
    "debug_mode_warning"        => "Felsökningsläge bör endast användas tillfälligt.",
    "custom_colour"             => "Anpassad färg",
    "remove_colour"             => "Ta bort färg",
    "background_colour"         => "Bakgrundsfärg",
    "open_link"                 => "Öppna länk",
    "open_link_in"              => "Öppna länk i...",
    "new_window"                => "Nytt fönster",
    "current_window"            => "Nuvarande fönster",
    "edit_image"                => "Redigera bild...",
    "alternative_description"   => "Alternativ beskrivning",
    "browse_image"              => "Bläddra efter en bild",
    "drop_image"                => "Släpp en bild här",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Keyboard Shortcuts",
    "enable_keyboard_shortcuts" => "Enable keyboard shortcuts",
    "shortcut_global"           => "Global shortcuts",
    "shortcut_toggle"           => "Toggle the keyboard shortcuts dialog",
    "shortcut_start_search"     => "Start search",
    "shortcut_goto_new_ticket"  => "Go to the open new ticket page",
    "shortcut_ticket_view"      => "Ticket view shortcuts",
    "shortcut_focus_reply"      => "Focus the reply form",
    "shortcut_focus_notes"      => "Focus the notes form",
    "shortcut_focus_forward"    => "Focus the forward form",
    "shortcut_toggle_user_tab"  => "Toggle the user details tab in the sidebar",
    "shortcut_take_ticket"      => "Take ticket",
    "shortcut_close_ticket"     => "Close ticket",
    "shortcut_lock_ticket"      => "Close & lock ticket",
    "shortcut_unlock_ticket"    => "Unlock ticket",
    "shortcut_trash_ticket"     => "Move ticket to trash",
    "shortcut_block_user"       => "Block user and move ticket to trash",
    "shortcut_watch_ticket"     => "Watch ticket",
    "shortcut_unwatch_ticket"   => "Unwatch ticket",
    "shortcut_merge_ticket"     => "Merge ticket",
    "shortcut_unmerge_ticket"   => "Unmerge ticket",
    "shortcut_expand_all"       => "Expand all messages",
    "shortcut_collapse_all"     => "Collapse all messages",
    "shortcut_print_ticket"     => "Print ticket details and messages",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Database connection error, please check :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Dark Mode Favicon",
    "favicon_dark_mode_desc"    => "If your favicon was designed to only work on a light background, set a different favicon for dark mode. This will only be used if your browser and/or operating system is running in dark mode.",
    "template_mode_system_desc" => "Choosing system will synchronise the template mode to light or dark mode depending on your operating system theme settings.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / None",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "The email failed to send. Retrying again :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "Web Sockets Connection",
    "websockets_not_running"    => "Unable to connect to web socket server.",
    "search_driver_check"       => "Search Driver",
    "search_driver_not_working" => "The configured search driver is not working correctly.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Temporary Path",
    "temporary_path_desc"       => "The temporary path is used to store files during the update. The system temporary path is used by default. The path must have at least 3GB of free space.",
    "background_jobs_desc"      => "Below are a list of background jobs that have failed recently.",
    "failed_jobs"               => "Failed Jobs",
    "horizon_dashboard"         => "Horizon Dashboard",
    "job"                       => "Job|Jobs",
    "job_payload"               => "Job Payload",
    "job_exception"             => "Job Exception",
    "failed_at"                 => "Failed At",
    "queue"                     => "Queue",
    "exception"                 => "Exception",
    "data"                      => "Data",
    "failed_background_jobs"    => "One or more <a target='_blank' href=':link'>background jobs</a> have failed and require manual attention.",

    /*
     * 5.3.0
     */
    "ticket_channel_2"          => "Vi tillhandahåller ett antal standardkanaler. Du kan aktivera och konfigurera Facebook- och Twitter-kanalerna att samla ärenden genererade via sociala medier.",
    "incoming_duplicate"        => "Incoming (Duplicate)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "The email method has been overridden in the <a href=':link' target='_blank'>default brand settings</a>.",
    "addon_not_found"           => "Add-on not found.",
    "deactivating_addon"        => "Deactivating add-on...",
    "addon_already_activated"   => "Add-on already activated.",
    "addon_already_deactivated" => "Add-on already deactivated.",
    "addon_cannot_deactivate"   => "Add-on cannot be deactivated.",
    "addon_activation_failed"   => "Add-on activation failed, check the application log for more information.",
    "addon_deactivation_failed" => "Add-on deactivation failed, check the application log for more information.",
    "site_key"                  => "Site Key",
    "secret_key"                => "Secret Key",
    "turnstile_desc"            => "Please register a new Turnstile widget at <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Copy the site and secret key above.",
    "hcaptcha_desc"             => "Please register at <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Copy the site and secret key above.",
    "captcha_type_desc"         => "Select the Captcha to be used throughout the system. We recommend switching to Google reCAPTCHA, which requires additional configuration.",

);
