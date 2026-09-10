<?php

return array(

    // Standard messages
    "item_created"                      => "Skapade ny :item :rel.",
    "item_updated"                      => "Uppdaterade :item :rel.",
    "item_deleted"                      => "Tog bort :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Skapade ny bannlysning för IP :rel.",
    "ip_ban_updated"                    => "Uppdaterade bannlysning för IP :rel.",
    "ip_ban_deleted"                    => "Tog bort bannlysning för IP :rel.",
    "banned_ip_on_login"                => "bannlyste IP :rel i 15 minuter.",

    "ip_whitelist_created"              => "La till IP :rel i vitlistan.",
    "ip_whitelist_updated"              => "Uppdaterade IP :rel i vitlistan.",
    "ip_whitelist_deleted"              => "Tog bort IP :rel från vitlistan.",

    "system_cleanup"                    => "Körde systemrensning för :rel.",

    "api_failed_login"                  => "IP :rel misslyckades med API-autentisering.",

    "user_successful_login"             => "Loggade in i helpdesk.",
    "user_failed_login"                 => "Misslyckades med autentisering.",
    "user_successful_logout"            => "Loggade ut ur helpdesk.",

    "user_registered"                   => "Registrerade ett konto.",
    "user_confirmed"                    => "Bekräftade sitt konto.",
    "user_password_set"                 => "Lösenordsskyddade sitt konto.",
    "user_password_reset"               => "Återställde sitt kontolösenord.",

    "user_added_to_organisation"        => "Användare :rel tillagd i organisationen :new_value.",
    "user_removed_from_organisation"    => "Användare :rel borttagen från organisationen :old_value.",
    "user_profile_updated"              => "Uppdaterade sin kontoprofil.",
    "user_left_organisation"            => "Lämnade organisationen :rel.",
    "user_organisation_emptied"         => "Tog bort alla användare från organisationen :rel.",
    "user_organisation_updated"         => ":rels organisation åtkomstnivå ändrades från :old_value till :new_value.",
    "organisation_membership_updated"   => "Uppdaterade användarmedlemskapet för organisationen :rel.",
    "organisation_profile_updated"      => "Uppdaterade profilen för organisationen :rel.",
    "organisation_owner_updated"        => "Flyttade organisationens :rel ägarskap till :new_value.",

    "mass_email_queued"                 => "Köade :new_value e-post för att skicka i satser.",
    "mass_email_sent"                   => "Skickade :new_value e-post i kö.",

    "email_queue_deleted"               => "Tog bort köat e-post till :rel.",

    "scheduled_task_run"                => "Schemalagda uppgiften :rel har körts manuellt.",

    "selfservice_article_upvoted"       => "Betysatte artikeln :rel positivt.",
    "selfservice_article_downvoted"     => "Betygsatte artikeln :rel negativt.",
    "selfservice_comment_posted"        => "Postade en ny :rel.",
    "selfservice_comment_upvoted"       => "Röstade upp :rel betyget från :old_value till :new_value.",
    "selfservice_comment_downvoted"     => "Röstade ner :rel betyget från :old_value till :new_value.",

    "ticket_opened"                     => "Öppnade nytt ärende #:rel.",
    "ticket_opened_on_behalf"           => "Öppnade nytt ärende #:rel på uppdrag av :new_value.",
    "ticket_opened_email"               => "Importade e-post som ett nytt ärende #:rel.",

    "ticket_message_reply"              => "Postade ett nytt svar till ärendet #:rel.",
    "ticket_message_note"               => "Postade en ny notering till ärendet #:rel.",
    "ticket_message_deleted"            => "Tog bort ett meddelande i ärendet #:rel.",

    "ticket_user_updated"               => "Uppdaterade användaren på ärendet #:rel från :old_value till :new_value.",
    "ticket_subject_updated"            => "Uppdaterade ämnet på ärendet #:rel.",
    "ticket_department_updated"         => "Uppdaterade avdelningen på ärendet #:rel från :old_value till :new_value.",
    "ticket_status_updated"             => "Uppdaterade statusen på ärendet #:rel från :old_value till :new_value.",
    "ticket_priority_updated"           => "Uppdaterade prioriteringen på ärendet #:rel från :old_value till :new_value.",
    "ticket_tag_added"                  => "La till etiketten :new_value till ticket #:rel.",
    "ticket_tag_updated"                => "Uppdaterade etiketter på ärendet #:rel.",
    "ticket_tag_removed"                => "Tog bort etiketten :new_value från ticket #:rel.",
    "ticket_slaplan_updated"            => "Uppdaterade SLA-planen på ärendet #:rel från :old_value till :new_value.",
    "ticket_duetime_updated"            => "Uppdaterade sluttiden på ärendet #:rel till :new_value.",
    "ticket_customfield_updated"        => "Uppdaterade skräddarsydda fält på ärendet #:rel.",
    "ticket_converted_user"             => "Konverterade interna ärendet #:rel till användarärende.",
    "ticket_converted_internal"         => "Konverterade användarärendet #:rel till internt ärende.",

    "ticket_assigned_operator"          => "Tilldelade :new_value till ärendet #:rel.",
    "ticket_unassigned_operator"        => "Tog bort :new_value från ärendet #:rel.",
    "ticket_assigned_self"              => "Tilldelade sig själv till ärendet #:rel.",
    "ticket_assigned_updated"           => "Uppdaterade tilldelade operatörer på ärendet #:rel.",

    "ticket_locked"                     => "Låste ärendet #:rel.",
    "ticket_unlocked"                   => "Låste upp ärendet #:rel.",
    "ticket_locked_reply"               => "Svar kunde inte läggas till på låste ärendet #:rel.",

    "ticket_unmerged"                   => "Ärendet :rel har blivit delad.",

    "ticket_user_blocked"               => "Blockerade e-post :new_value (från användare på ärende #:rel).",

    "ticket_closed"                     => "Ärendet #:rel har stängts.",
    "ticket_inactive_closed"            => "Stängt inaktiva ärendet #:rel från status :old_value.",
    "ticket_awaiting_response"          => "Skickat 'väntar på svar'-e-post till användaren på ärendet #:rel.",

    "ticket_split_from"                 => "Meddelande delade från gamla ärendet #:rel till nya ärendet #:new_value.",
    "ticket_split_to"                   => "Meddelande delade från gamla ärendet #:old_value till nya ärendet #:rel.",

    "ticket_attachment_saved"           => "La till bilaga till ärendet #:rel.",
    "ticket_attachment_deleted"         => "Tog bort bilaga från ärendet #:rel.",

    "ticket_throttled"                  => "Avvisade nytt ärende från :rel p.g.a. throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "La till bilagan ':new_value' till artikeln med ID :rel.",
    "selfservice_attachment_deleted"    => "Tog bort bilagan ':new_value' från artikeln med ID :rel.",
    "ticket_unassigned_self"            => "Tog bort sig själv från ärendet #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Svar kunde inte läggas till på ärendet då det tillhör ett avaktiverat varumärke #:rel.",
    "personal_signatures_updated"       => "Uppdaterade personliga signaturer.",
    "check_email_failed"                => "Fel: misslyckades med att ladda ner e-post från kontot :old_value: ':rel'.",
    "invalid_department_brand"          => "Misslyckades med att sätta avdelningen till ':new_value' på ärendet #:rel, avdelningen tillhör inte ärendevarumärket.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Skickade ett e-post med ämnet ':extra_rel1' till :rel.",
    "sent_template_email_to"            => "Skickade ':extra_rel1' e-post till :rel.",
    "sent_ticket_email_to_user"         => "Skickade ':extra_rel1' e-post till användaren för ärendet #:rel.",
    "sent_email_to_operators"           => "Skickade ':extra_rel1' e-post till operatörer.",
    "sent_ticket_email_to_operators"    => "Skickade ':extra_rel1' e-post till operatörerna för ärendet #:rel.",
    "sent_email_to_operator_group"      => "Skickade ':extra_rel1' e-post till operatörgruppen ':new_value' för ärendet #:rel.",
    "ticket_macro_applied"              => "Makrot ':new_value' kördes på ärendet #:rel.",
    "ticket_macro_automatic"            => "Makrot ':new_value' kördes automatiskt på ärendet #:rel.",
    "email_template_not_found"          => "E-postmallen med ID ':new_value' hittades inte, avbröt e-postutskicket.",
    "private_conversation_started"      => "Startade en konversation med :rel.",
    "private_message_sent"              => "Skickade ett meddelande till :rel.",
    "not_imported_replies_disabled"     => "E-post :extra_rel1 togs emot för ärendet #:rel men importerades inte då e-postsvar är avaktiverat.",
    "not_imported_ticket_locked"        => "E-post :extra_rel1 togs emot för ärendet #:rel men importerades inte då ärendet är låst.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ärendetsanvändare lagd till grupp :new_value.",
    "ticket_user_removed_from_group"    => "Ärendetsanvändare bortagen från grupp :old_value.",
    "email_on_behalf"                   => "Vidaresänt :extra_rel2 för ':extra_rel1' räkning, i ärednde #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Skickat ':extra_rel1' epost till :new_value, avdelningen accepterar inte email från ej registrerade användare",
    "deleted_user"                      => "Raderat :item ':rel' med epost ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Länkat ärende #:rel med ärende :extra_rel1.",
    "unlinked_ticket"                   => "Avlänkat ärende #:rel från ärende :extra_rel1.",
    "email_queue_attachment_deleted"    => "Raderat bilaga ':old_value' från köat epost ':rel'.",
    "forward_ticket_email"              => "Vidatebefodrat ärende #:rel till extern part, visa ':extra_rel1' epost.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Uppdaterade :rel av :extra_rel1.",
    "selfservice_comment_status"        => "Ändrade status på :rel av :extra_rel1 från :old_value till :new_value.",
    "selfservice_comment_deleted"       => "Raderade kommentar av :extra_rel1.",
    "ticket_message_posted"             => "Postade en ny :extra_rel1 till ärende #:rel.",
    "ticket_message_edited"             => "Redigerade en :extra_rel1 i ärende #:rel.",
    "email_send_failed"                 => "Misslyckades att skicka e-post.",
    "ticket_brand_updated"              => "Uppdaterade varumärket på ärende #:rel från :old_value till :new_value.",
    "export_scheduled"                  => "En export av användare :rel har schemalagts.",
    "deleted_inactive_records"          => "Raderade automatiskt :old_value inaktiva :rel.",
    "deleted_old_records"               => "Raderade automatiskt gamla :rel-poster.",
    "sent_email_to_user_group"          => "Köade e-post till användargruppen ':new_value' för biljett #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Bevakar ärende #:rel.",
    "ticket_unwatching"                 => "Bevakar inte längre ärende #:rel.",
    "ticket_watch_operator"             => "Ställ in :new_value för att bevaka ärende #:rel.",
    "ticket_unwatch_operator"           => "Ta bort :new_value från att bevaka ärende #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Bekräftade ägarskap av e-postadress för användare :rel.",
    "ticket_department_email_updated"   => "Uppdaterade avdelningens e-post på ärende #:rel från :old_value till :new_value.",
    "ticket_watching_updated"           => "Uppdaterade bevakande operatörer på ärende #:rel.",
    "ticket_deleted"                    => "Raderade permanent ärende ':old_value' (#:rel).",
    "ticket_trashed"                    => "Flyttade ärende #:rel till papperskorgen.",
    "ticket_restored"                   => "Återställde ärende #:rel från papperskorgen.",
    "emptied_ticket_trash"              => "Rensade automatiskt ärendepapperskorgen från ':old_value' poster.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "En ny uppföljning har ställts in på ärende #:rel.",
    "ticket_followup_updated"           => "En uppföljning på ärende #:rel har uppdaterats.",
    "ticket_followup_deleted"           => "En uppföljning på ärende #:rel har raderats.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "User :old_value merged into user :rel.",
    "user_organisation_merged"          => "User organisation :old_value merged into user organisation :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Updated :rel's reply templates.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Activated :item (add-on) :rel.",
    "addon_deactivated"                 => "Deactivated :item (add-on) :rel.",
    "addon_installed"                   => "Installed :item (add-on) :rel.",
    "addon_uninstalled"                 => "Uninstalled :item (add-on) :rel.",
    "addon_cancelled"                   => "Cancelled :item (add-on) :rel.",
    "addon_updated"                     => "Updated :item (add-on) :rel to version :new_value.",
    "ticket_reply_duetime_updated"      => "Updated the reply due time on ticket #:rel to :new_value.",
    "ticket_resolve_duetime_updated"    => "Updated the resolve due time on ticket #:rel to :new_value.",
    "ticket_duetime_unset"              => "Tog bort förfallotiden från ärendet #:rel.",
    "ticket_reply_duetime_unset"        => "Unset the reply due time on ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Unset the resolve due time on ticket #:rel.",
    "ticket_duetime_paused"             => "Pausade sluttiden på ärendet #:rel till nästa användarsvar.",
    "ticket_duetime_unpaused"           => "Unpaused the due times on ticket #:rel.",
    "user_email_verified"               => "Verified their email address.",
    "marked_email_as_verified"          => "Verified ownership of email address on behalf of user :rel.",
    "user_invited_to_organisation"      => "User :rel invited to organisation :extra_rel1.",
    "user_accepted_organisation_invite" => "User :rel accepted invitation to organisation :extra_rel1.",
    "user_additional_email_verified"    => "Verified an additional email address (:new_value).",
    "export_generated"                  => "Export :new_value of user :rel has been generated and stored on the system.",
    "export_deleted"                    => "Export :old_value of user :rel has been deleted from the system.",
    "user_export_generated"             => "Export :new_value of user :rel has been generated and stored on the system.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Updated their reply templates.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Deleted attachment ':old_value' from ticket #:rel.",
    "user_added_to_group"               => "User :rel added to user group :new_value.",
    "user_removed_from_group"           => "User :rel removed from user group :old_value.",
    "operator_added_to_group"           => "Operator :rel added to operator group :new_value.",
    "operator_removed_from_group"       => "Operator :rel removed from operator group :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Deleted background job :rel.",
    "background_job_retried"            => "Retried background job :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Set a password for their account.",
    "password_reset_sent"               => "Reset password link sent to :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Rated ticket #:rel as :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Saved :extra_rel1 on ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Saved :extra_rel1 on article :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => "Pinned :extra_rel1 on ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => "Unpinned :extra_rel1 on ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Updated :rel's notification preferences.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => "Ärende :new_value sammanslaget med ärende #:rel.",
    "ticket_added_cc"                   => "E-posten :new_value tillagd till CC-adresslistan för ärendet #:rel.",
    "ticket_removed_cc"                 => "E-posten :old_value borttagen från CC-adresslistan för ärendet #:rel.",
    "ticket_slaplan_set"  => "Updated the SLA plan on ticket #:rel from None to :new_value.",
    "ticket_slaplan_removed"  => "Updated the SLA plan on ticket #:rel from :old_value to None.",
    "sent_feedback_email_to_operators"  => "Sent feedback received email to operators for ticket #:rel.",
    "ticket_added_cc_multiple"          => "Added :cc_emails to CC address list for ticket #:rel.",
    "timeline_ticket_added_cc_multiple" => ":user_name added CC :cc_emails",
    "ticket_removed_cc_multiple"        => "Removed :cc_emails from CC address list for #:rel.",
    "timeline_ticket_removed_cc_multiple" => ":user_name removed CC :cc_emails",
    "ticket_assigned_operators_multiple" => "Assigned :operators to ticket #:rel.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name assigned :operators",
    "ticket_unassigned_operators_multiple" => "Unassigned :operators from ticket #:rel.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name unassigned :operators",
    "ticket_watch_operator_multiple"    => "Set :operators to watch ticket #:rel.",
    "timeline_ticket_watch_operator_multiple" => ":user_name added :operators to watching",
    "ticket_unwatch_operator_multiple"  => "Unset :operators from watching ticket #:rel.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name stopped :operators from watching",
    "ticket_tag_added_single"           => "Added tag :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_single"  => ":user_name added tag :formatted_items",
    "ticket_tag_removed_single"         => "Removed tag :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_single" => ":user_name removed tag :formatted_items",
    "ticket_tag_added_multiple"         => "Added tags :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_multiple" => ":user_name added :formatted_items tags",
    "ticket_tag_removed_multiple"       => "Removed tags :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_multiple" => ":user_name removed :formatted_items tags",
    "ticket_merged_multiple"            => "Merged :ticket_numbers into ticket #:rel.",
    "timeline_ticket_merged_multiple"   => ":user_name merged :ticket_numbers into this ticket",
    "linked_tickets_multiple"           => "Linked ticket #:rel with tickets :extra_rel*.",
    "timeline_linked_tickets_multiple"  => ":user_name linked with :extra_rel*",
    "unlinked_tickets_multiple"         => "Unlinked ticket #:rel from tickets :extra_rel*.",
    "timeline_unlinked_tickets_multiple" => ":user_name unlinked tickets :extra_rel*",
    "ticket_macro_automatic_multiple"   => "The macros :macros automatically ran on ticket #:rel.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name ran macros :macros",
    "ticket_customfield_updated_individual" => "Updated custom field ':field_name' on ticket #:rel.",
    "timeline_ticket_customfield_updated_individual" => ":user_name updated custom field ':field_name'",
    "timeline_ticket_opened_on_behalf"  => ":user_name opened ticket on behalf of :new_value",
    "timeline_ticket_message_deleted"   => ":user_name deleted message (:message_id) by :message_user_name",
    "timeline_ticket_user_updated"      => ":user_name changed the user from :old_value to :new_value",
    "timeline_ticket_subject_updated"   => ":user_name updated the subject <del>:old_value</del> :new_value",
    "timeline_ticket_department_updated" => ":user_name changed the department from :old_value to :new_value",
    "timeline_ticket_status_updated"    => ":user_name changed the status from :old_value to :new_value",
    "timeline_ticket_priority_updated"  => ":user_name changed the priority from :old_value to :new_value",
    "timeline_ticket_slaplan_updated"   => ":user_name changed the SLA plan from :old_value to :new_value",
    "timeline_ticket_slaplan_set"       => ":user_name set the SLA plan to :new_value.",
    "timeline_ticket_slaplan_removed"   => ":user_name removed the SLA plan (from :old_value).",
    "timeline_ticket_converted_user"    => ":user_name converted from internal ticket to user ticket",
    "timeline_ticket_converted_internal" => ":user_name converted from user ticket to internal ticket",
    "timeline_ticket_assigned_self"     => ":user_name self-assigned",
    "timeline_ticket_locked"            => ":user_name locked the ticket",
    "timeline_ticket_unlocked"          => ":user_name unlocked the ticket",
    "timeline_ticket_unmerged"          => ":user_name unmerged",
    "timeline_ticket_user_blocked"      => ":user_name blocked email :new_value",
    "timeline_ticket_closed"            => ":user_name closed the ticket",
    "timeline_ticket_inactive_closed"   => ":user_name closed due to inactivity",
    "timeline_ticket_awaiting_response" => ":user_name sent waiting for response email to user",
    "timeline_ticket_split_from"        => ":user_name slit messages into new ticket #:new_value",
    "timeline_ticket_split_to"          => ":user_name split messages from #:old_value",
    "timeline_ticket_attachment_deleted" => ":user_name deleted attachment (:attachment_id) :attachment_name from <a href='#:message_id'>message</a>",
    "timeline_ticket_unassigned_self"   => ":user_name removed their assignment",
    "timeline_ticket_macro_applied"     => ":user_name ran macro ':new_value'",
    "timeline_ticket_macro_automatic"   => ":user_name ran macro ':new_value'",
    "timeline_ticket_message_edited"    => ":user_name edited a :extra_rel1",
    "timeline_ticket_brand_updated"     => ":user_name changed the brand from :old_value to :new_value",
    "timeline_ticket_watching"          => ":user_name started watching the ticket",
    "timeline_ticket_unwatching"        => ":user_name stopped watching the ticket",
    "timeline_ticket_department_email_updated" => ":user_name changed the department email from :old_value to :new_value",
    "timeline_ticket_trashed"           => ":user_name moved to the trash",
    "timeline_ticket_restored"          => ":user_name restored from the trash",
    "timeline_ticket_followup_set"      => ":user_name created a follow up",
    "timeline_ticket_followup_updated"  => ":user_name updated a follow up",
    "timeline_ticket_followup_deleted"  => ":user_name deleted a follow up",
    "timeline_ticket_reply_duetime_updated" => ":user_name changed the reply due time to :new_value",
    "timeline_ticket_resolve_duetime_updated" => ":user_name changed the resolve due time to :new_value",
    "timeline_ticket_reply_duetime_unset" => ":user_name cleared the reply due time",
    "timeline_ticket_resolve_duetime_unset" => ":user_name cleared the resolve due time",
    "timeline_ticket_duetime_paused"    => ":user_name paused the due times",
    "timeline_ticket_duetime_unpaused"  => ":user_name unpaused the due times",
    "timeline_ticket_feedback_rating"   => ":user_name set the feedback rating to :extra_rel1", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name saved :extra_rel1", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name pinned a <a href='#:message_id'>message</a>",
    "timeline_ticket_unpinned_message"  => ":user_name unpinned a <a href='#:message_id'>message</a>",
    "ticket_attachment_rejected"        => "Attachment(s) :files blocked from ticket #:rel due to invalid file type.",
    "timeline_ticket_attachment_rejected" => "Attachment(s) :files blocked due to invalid file type",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);
