<?php

return array(

    "deleted"               => "Borttagen!",
    "success"               => "Framgång",
    "error"                 => "Fel",
    "in_progress"           => "Pågående",

    "save_order"            => "Försöker spara den uppdaterade objektordningen.",

    "show_all_results"      => "Visa alla resultat &raquo;",

    "are_you_sure"          => "Är du säker?",
    "yes_im_sure"           => "Ja, jag är säker",

    "success_created"       => ":item skapad!",
    "error_created"         => "Misslyckades med att skapa :item.",

    "success_deleted"       => ":item borttagen!",
    "error_deleted"         => "Misslyckades med att ta bort :item.",

    "success_updated"       => ":item uppdaterad!",
    "error_updated"         => "Misslyckades med att uppdatera :item.",

    "error_notfound"        => ":item med det angivna ID:t hittades inte.",
    "error_notfound_name"   => ":item med det angivna namnet hittades inte.",
    "report_notfound"       => "Rapporten med den angivna kategorin och namnet hittades inte.",

    "success_ordering"      => "Ordningen uppdaterad!",
    "error_ordering"        => "Misslyckades med att uppdatera ordningen.",

    "error_login"           => "Inloggningsförsök misslyckades.",
    "success_logout"        => "Utloggad.",

    "please_correct"        => "Fixa nedanstående fel och försök igen.",

    "success_settings"      => "Inställningar uppdaterade!",
    "error_settings"        => "Misslyckades med att uppdatera inställningarna.",

    "success_action"        => "Handling utförd!",
    "error_action"          => "Misslyckades med att utföra handlingen.",

    "error_embed_image"     => "Misslyckades med att ladda upp bilden.",

    "unauthorised"          => "Obehörig",
    "not_authorised"        => "Inte behörig att utföra denna handling.",
    "not_permitted"         => "Du har inte tillåtelse att titta på denna sida. Om du anser att du bör kunna se denna sida ska du ta kontakt med applikationsadministratören.",

    "page_not_found"        => "Sidan hittades inte",
    "cant_find_page"        => "Vi kan inte hitta den sida du letar efter.",

    "please_report"         => "Rapportera denna händelse till en administratör om du inte förväntade dig detta.",

    "return_to"             => "Återvänd till :page.",

    "session_expired"       => "Din session har gått ut, logga in igen.",
    "session_refresh"       => "Din session har gått ut, ladda om sidan och försök igen.",

    "general_error"         => "Ett fel uppstod. Försök igen.",

    "no_results"            => "Inga resultat.",

    "assign_incomplete"     => "Handlingen kunde inte utföras fullt ut. :names kunde inte tilldelas ett par ärenden.",

    "maintenance_mode"      => "Underhållsläget är aktivt. Helpdesken är för närvarande oåtkomlig för användare, kom ihåg att stänga av underhållsläget när du är färdig.",

    "invalid_captcha"       => "Captcha-koden var inkorrekt, försök igen.",
    "blocked_as_spam"       => "Din begäran upptäcktes som spam. Kontakta en administratör om du tror att det blivit ett fel.",
    "account_exists"        => "Ett aktivt konto existerar redan med denna e-postadress. Du kan försöka logga in eller använda dig av glömt lösenord-funktionen om du inte kommmer ihåg ditt lösenord.",
    "error_loading_comments" => "Det uppstod ett problem när kommentarerna skulle laddas.",

    "invalid_auth"          => "Ogiltiga Autentiseringsuppgifter.",

    "forbidden"             => "Förbjuden",

    "not_logged_exception"  => "<strong>Whoops! Något gick fel.</strong><br />Kontakta systemadministratören om felet kvarstår.",

    "too_many_ticket_reqs"  => "Too many ticket requests made for :email. The limit is :max in :decay minutes.",

    "not_operator"          => "Något gick fel. The selected operator is not valid, please ensure they belong to an operator group and the group has an associated role.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Whoops! Något gick fel.</strong><br />Ett fel uppstod när tabelldatan skulle laddas. Kontakta systemadministratören om felet kvarstår.",

    "missing_extension"     => "Saknar förlängning",
    "php_ldap_missing"      => "php-ldap-förlängningen krävs för att använda LDAP-utentisering. Aktivera det och ladda om sidan.",
    "php_imap_missing"      => "php-imap-förlängningen krävs för att ladda ner e-post. Om du vill du ladda ner e-post, aktivera det och ladda om sidan.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Endast SSL-anslutningar är tillåtna, du bör uppdatera din begäran till en säker anslutning.",
    "queued_emails"         => "Handlingen lyckades - e-posten kommer att bli köade och skickade inom kort.",
    "error_loading_message" => "Ett fel uppstod när meddelandet skulle laddas. Försök igen.",
    "please_refresh"        => "Ladda om sidan.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Tjänsten är för närvarande otillgänglig.</strong><br />Kunde inte ansluta till databasen.",
    "category_required"     => "Artikeln måste tillhöra minst en kategori.",
    "warning"               => "Varning",
    "note"                  => "Notering",
    "brand_invalid_dept"    => "Handlingen kunde inte slutföras fullt ut. Avdelningen kunde inte bli uppdaterad på ett antal ärenden på grund av deras varumärke.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Misslyckades med att ladda upp bilagan \":filename\", anledning: \":reason\"",
    "upload_max_size"       => "Filen måste vara mindre än :size",
    "upload_wrong_type"     => "Filtypen tillåts inte",

    /*
     * 2.3.0
     */
    "delete_record"         => "Radera :record?",
    "cannot_be_undone"      => "Detta kan inte göras ogjort.",
    "warn_delete"           => "Detta kommer permanent radera <strong>:name</strong> :record från systemet.",
    "delete_confirm"        => "Ja, Radera :record",
    "keep_record"           => "Nej, Behåll :record",
    "delete_relations"      => "Vid radering av <strong>:name</strong> :record kommer även följande data raderas permanent:",
    "please_check"          => "Du måste bocka i fältet ovan för att verifiera att du förstått att denna ändring inte går att ångra",
    "failed_attachments"    => "Misslyckades att lägg till några filer.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Success - the email has been sent.",
    "task_already_running"  => "Scheduled task is running automatically currently, please try again shortly.",
    "linked_account"        => "The social account has successfully been linked with your account.",
    "already_linked"        => "The social account is already linked with another account. Please login to the other account and unlink it.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Does this look correct?",
    "no_revert"             => "No! Revert",
    "attachment_not_found"  => "The attachment was not found.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Your account has been closed. Please contact us if you think this has been done in error.",
    "leave_record"          => "Leave :record?",
    "leave_record_warn"     => "This will permanently remove you from the :record.",
    "success_trashed"       => "Successfully moved the :item to trash!",
    "error_trashed"         => "Failed trying to move the :item to trash.",
    "blocked_by_rule"       => "The request was blocked by spam rule ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Your browser is blocking popup windows. Please enable popups and redirects on this website in order to use the preview feature.",
    "error_editing_message" => "There was an error while trying to edit this message.",

);
