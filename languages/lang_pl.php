<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../languages/lang_pl.php

//translator(s): Dariusz Kowalski <d.kowalski@dreamnet.waw.pl>, Marcin Kawalerowicz (mkawalerowicz@poczta.onet.pl)
// changes and spell check: Pawel Suwinski (dracono@wp.pl) 2005.06.02
$setCharset = "ISO-8859-2";

$byteUnits = array('Bajty', 'KB', 'MB', 'GB');

$dayNameArray = array(1 =>"Poniedzia�ek", 2 =>"Wtorek", 3 =>"�roda", 4 =>"Czwartek", 5 =>"Pi�tek", 6 =>"Sobota", 7 =>"Niedziela");

$monthNameArray = array(1=> "Stycze�", "Luty", "Marzec", "Kwiecie�", "Maj", "Czerwiec", "Lipiec", "Sierpie�", "Wrzesie�", "Pa�dziernik", "Listopad", "Grudzie�"); 

$status = array(0 => "Oddany Klientowi", 1 => "Sko�czony", 2 => "Nie rozpocz�ty", 3 => "Rozpocz�ty", 4 => "Zawieszony");

$profil = array(0 => "Administrator", 1 => "Mened�er Projektu", 2 => "U�ytkownik", 3 => "Klient", 4 => "Niekatywny", 5 => "Administrator projekt�w");

$priority = array(0 => "Brak", 1 => "Bardzo niski", 2 => "Niski", 3 => "�redni", 4 => "Wysoki", 5 => "Bardzo wysoki");

$statusTopic = array(0 => "Zamkni�te", 1 => "Otwarte");
$statusTopicBis = array(0 => "Tak", 1 => "Nie");

$statusPublish = array(0 => "Tak", 1 => "Nie");

$statusFile = array(0 => "Zatwierdzony", 1 => "Zatwierdzony ze zmianami", 2 => "Potrzebuje zatwierdzenia", 3 => "Nie potrzebuje zatwierdzenia", 4 => "Nie zatwierdzony");

$phaseStatus = array(0 => "Nie rozpocz�tae", 1 => "Rozpocz�ta", 2 => "Zako�czona", 3 => "Zawieszona");

$requestStatus = array(0 => "Nowa", 1 => "Nierozwi�zana", 2 => "Rozwi�zana");

$strings["please_login"] = "Zaloguj si�";
$strings["requirements"] = "Wymagania";
$strings["login"] = "Logowanie";
$strings["no_items"] = "Brak element�w do wy�wietlenia";
$strings["logout"] = "Wyloguj";
$strings["preferences"] = "Ustawienia";
$strings["my_tasks"] = "Moje Zadania";
$strings["edit_task"] = "Edytuj Zadanie";
$strings["copy_task"] = "Skopiuj Zadanie";
$strings["add_task"] = "Dodaj Zadanie";
$strings["delete_tasks"] = "Skasuj Zadanie";
$strings["assignment_history"] = "Historia przypisa�";
$strings["assigned_on"] = "Dnia";
$strings["assigned_by"] = "Przypisany przez";
$strings["to"] = "Do";
$strings["comment"] = "Komentarz";
$strings["task_assigned"] = "Zadanie przypisane do";
$strings["task_unassigned"] = "Zadanie nie jest przypisane do nikogo (Nie przypisane)";
$strings["edit_multiple_tasks"] = "Zmie� wielokrotne zadania";
$strings["tasks_selected"] = "zadania wybrane. Wybierz nowe warto�ci dla tego zadania, Lub wybierz [Brak zmian], aby pozosta� przy dotychczasowych";
$strings["assignment_comment"] = "Komentarz do przypisania";
$strings["no_change"] = "[Brak zmian]";
$strings["my_discussions"] = "Moje Dyskusje";
$strings["discussions"] = "Dyskusje";
$strings["delete_discussions"] = "Skasuj Dyskusje";
$strings["delete_discussions_note"] = "Uwaga: Dyskusja nie mo�e zosta� ponownie otworzona, je�eli zosta�a ju� skasowana.";
$strings["topic"] = "Temat";
$strings["posts"] = "Wiadomo�ci";
$strings["latest_post"] = "Najnowsza wiadomo��";
$strings["my_reports"] = "Moje Raporty";
$strings["reports"] = "Raporty";
$strings["create_report"] = "Stw�rz Raport";
$strings["report_intro"] = "Wybierz parametry swojego raportu i zachowaj je po jego uruchomieniu";
$strings["admin_intro"] = "Konfiguracja projektu.";
$strings["copy_of"] = "Kopia ";
$strings["add"] = "Dodaj";
$strings["delete"] = "Skasuj";
$strings["remove"] = "Usu�";
$strings["copy"] = "Skopiuj";
$strings["view"] = "Poka�";
$strings["edit"] = "Zmie�";
$strings["update"] = "Zmie�";
$strings["details"] = "Szczeg�y";
$strings["none"] = "Brak";
$strings["close"] = "Zamknij";
$strings["new"] = "Nowy";
$strings["select_all"] = "Wybierz wszystkie";
$strings["unassigned"] = "Nie przypisany";
$strings["administrator"] = "Administrator";
$strings["my_projects"] = "Moje Projekty";
$strings["project"] = "Projekt";
$strings["active"] = "Aktywny";
$strings["inactive"] = "Nieaktywny";
$strings["project_id"] = "ID Projektu";
$strings["edit_project"] = "Edytuj Projekt";
$strings["copy_project"] = "Kopiuj Projekt";
$strings["add_project"] = "Dodaj Projekt";
$strings["clients"] = "Klienci";
$strings["organization"] = "Klient";
$strings["client_projects"] = "Projekty Klienta";
$strings["client_users"] = "U�ytkownicy Klienta";
$strings["edit_organization"] = "Zmie� dane klienta";
$strings["add_organization"] = "Dodaj dane klienta";
$strings["organizations"] = "Klienci";
$strings["info"] = "Info";
$strings["status"] = "Status";
$strings["owner"] = "W�a�ciciel";
$strings["home"] = "Strona domowa";
$strings["projects"] = "Projekty";
$strings["files"] = "Pliki";
$strings["search"] = "Szukaj";
$strings["admin"] = "Administracja";
$strings["user"] = "U�ytkownik";
$strings["project_manager"] = "Mened�er Projektu";
$strings["due"] = "Do";
$strings["task"] = "Zadanie";
$strings["tasks"] = "Zadania";
$strings["team"] = "Zesp�";
$strings["add_team"] = "Dodaj cz�onka zespo�u";
$strings["team_members"] = "Cz�onkowie zespo�u";
$strings["full_name"] = "Imi� i Nazwisko";
$strings["title"] = "Stanowisko";
$strings["user_name"] = "Nazwa u�ytkownika";
$strings["work_phone"] = "Tel. do pracy";
$strings["priority"] = "Priorytet";
$strings["name"] = "Nazwa";
$strings["id"] = "ID";
$strings["description"] = "Opis";
$strings["phone"] = "Tel.";
$strings["url"] = "URL";
$strings["address"] = "Adres";
$strings["comments"] = "Komentarze";
$strings["created"] = "Utworzony";
$strings["assigned"] = "Przypisany";
$strings["modified"] = "Zmodyfikowany";
$strings["assigned_to"] = "Przypisany do";
$strings["due_date"] = "Termin";
$strings["estimated_time"] = "Przybli�ony czas";
$strings["actual_time"] = "Aktualny czas";
$strings["delete_following"] = "Skasowa� to co jest poni�ej?";
$strings["cancel"] = "Anuluj";
$strings["and"] = "oraz";
$strings["administration"] = "Administracja";
$strings["user_management"] = "Zarz�dzanie u�ytkownikami";
$strings["system_information"] = "Informacje o systemie";
$strings["product_information"] = "Informacje o produkcie";
$strings["system_properties"] = "Ustawienia systemu";
$strings["create"] = "Stw�rz";
$strings["report_save"] = "Zachowaj to zapytanie na twojej stronie domowej, b�dziesz m�g� je wykorzysta� jeszcze raz.";
$strings["report_name"] = "Nazwa raportu";
$strings["save"] = "Zachowaj";
$strings["matches"] = "Znalezionych";
$strings["match"] = "Pasuj�cy";
$strings["report_results"] = "Wyniki Raportu";
$strings["success"] = "Wynik";
$strings["addition_succeeded"] = "Dodano";
$strings["deletion_succeeded"] = "Skasowano";
$strings["report_created"] = "Raport stworzony";
$strings["deleted_reports"] = "Raporty usuni�te";
$strings["modification_succeeded"] = "Zmodyfikowane";
$strings["errors"] = "B��d!";
$strings["blank_user"] = "U�ytkownik nie zosta� znaleziony";
$strings["blank_organization"] = "Klient nie mo�e by� zlokalizowany.";
$strings["blank_project"] = "Projekt nie mo�e by� zlokalizowany.";
$strings["user_profile"] = "Profil u�ytkownika";
$strings["change_password"] = "Zmie� has�o";
$strings["change_password_user"] = "Zmie� has�o u�ytkownika.";
$strings["old_password_error"] = "Stare has�o jest niepoprawne. Prosz� poda� je jeszcze raz.";
$strings["new_password_error"] = "Dwa podane przez Ciebie has�a nie zgadzaj� si�. Prosz� o ich powt�rne wpisane.";
$strings["notifications"] = "Powiadomienia";
$strings["change_password_intro"] = "Wpisz swoje stare has�o, potem wpisz dwa razy nowe has�o.";
$strings["old_password"] = "Stare has�o";
$strings["password"] = "Has�o";
$strings["new_password"] = "Nowe has�o";
$strings["confirm_password"] = "Potwierd� has�o";
$strings["email"] = "E-Mail";
$strings["home_phone"] = "Tel. do domu";
$strings["mobile_phone"] = "Tel. kom.";
$strings["fax"] = "Fax";
$strings["permissions"] = "Prawa";
$strings["administrator_permissions"] = "Prawa administratora";
$strings["project_manager_permissions"] = "Prawa mened�era projekt�w";
$strings["user_permissions"] = "Prawa u�ytkownika";
$strings["account_created"] = "Konto za�o�one";
$strings["edit_user"] = "Zmie� dane u�ytkownika";
$strings["edit_user_details"] = "Edytuj dane konta u�ytkownika.";
$strings["change_user_password"] = "Zmie� has�o u�ytkownika.";
$strings["select_permissions"] = "Wybierz prawa dla tego u�ytkownika";
$strings["add_user"] = "Dodaj u�ytkownika";
$strings["enter_user_details"] = "Podaj szczeg�y dla nowo tworzonego konta u�ytkownika.";
$strings["enter_password"] = "Podaj has�o u�ytkownik�w.";
$strings["success_logout"] = "Wylogowa�e� si�. Mo�esz si� zalogowa� ponownie, wystarczy, �e wpiszesz sw�j login i has�o.";
$strings["invalid_login"] = "Login lub/i has�o kt�re poda�e� s� nieprawid�owe. Spr�buj jeszcze raz.";
$strings["profile"] = "Profil";
$strings["user_details"] = "Szczeg�y konta u�ytkownika.";
$strings["edit_user_account"] = "Edytuj dane twojego konta.";
$strings["no_permissions"] = "Nie masz wystarczaj�cych praw do wykonania tej akcji.";
$strings["discussion"] = "Dyskusja";
$strings["retired"] = "Zamkni�ty";
$strings["last_post"] = "Ostatnia wiadomo��";
$strings["post_reply"] = "Odpowiedz";
$strings["posted_by"] = "Wys�ane przez";
$strings["when"] = "Kiedy";
$strings["post_to_discussion"] = "Wy�lij do dyskusji";
$strings["message"] = "Wiadomo��";
$strings["delete_reports"] = "Usu� raporty";
$strings["delete_projects"] = "Usu� projekty";
$strings["delete_organizations"] = "Usu� klienta";
$strings["delete_organizations_note"] = "UWAGA: Skasujesz wszystkich u�ytkownik�w dla tego klienta i spowodujesz od��czenie wszystkich projekt�w od tego klienta.";
$strings["delete_messages"] = "Usu� wiadomo�ci";
$strings["attention"] = "Uwaga";
$strings["delete_teamownermix"] = "Usuni�cie zako�czone powodzeniem, ale w�a�ciciel projektu nie mo�e by� usuni�ty z grupy projektowej.";
$strings["delete_teamowner"] = "Nie mo�esz usun�� w�a�ciciela projektu z grupy projektowej.";
$strings["enter_keywords"] = "Podaj szukane s�owa";
$strings["search_options"] = "Szukane s�owa i opcje wyszukiwarki";
$strings["search_note"] = "Musisz poda� jakie� s�owo w formularzu wyszukiwarki";
$strings["search_results"] = "Wyniki wyszukiwania";
$strings["users"] = "U�ytkownicy";
$strings["search_for"] = "Szukaj";
$strings["results_for_keywords"] = "Wyniki wyszukiwania dla s��w:";
$strings["add_discussion"] = "Dodaj dyskusj�";
$strings["delete_users"] = "Skasuj konta u�ytkownika";
$strings["reassignment_user"] = "Zmiana przypisa� do projekt�w i zada�";
$strings["there"] = "Tam jest";
$strings["owned_by"] = "w�a�cicielem s� osoby wypisane poni�ej.";
$strings["reassign_to"] = "Zanim skasujesz u�ytkownik�w, przypisz to do";
$strings["no_files"] = "Nie ma do��czonych �adnych plik�w";
$strings["published"] = "Opublikowany";
$strings["project_site"] = "Strona projektu";
$strings["approval_tracking"] = "Zatwierdzenie";
$strings["size"] = "Wielko��";
$strings["add_project_site"] = "Dodaj do strony projektu";
$strings["remove_project_site"] = "Usu� ze strony projektu";
$strings["more_search"] = "Wi�cej opcji wyszukiwarki";
$strings["results_with"] = "Szukaj wyniki z";
$strings["search_topics"] = "Szukaj tematu";
$strings["search_properties"] = "Szukaj w�a�ciwo�ci";
$strings["date_restrictions"] = "Po dacie";
$strings["case_sensitive"] = "Wra�liwo�� na wielko�� liter";
$strings["yes"] = "Tak";
$strings["no"] = "Nie";
$strings["sort_by"] = "Sortuj po";
$strings["type"] = "Rodzaj";
$strings["date"] = "Data";
$strings["all_words"] = "wszystkie s�owa";
$strings["any_words"] = "kt�rekolwiek ze s��w";
$strings["exact_match"] = "dok�adny wynik";
$strings["all_dates"] = "Oboj�tne";
$strings["between_dates"] = "Pomi�dzy dniami";
$strings["all_content"] = "Ca�a zawarto��";
$strings["all_properties"] = "Wszystkie w�a�ciwo�ci";
$strings["no_results_search"] = "Wyszukiwarka nic nie znalaz�a.";
$strings["no_results_report"] = "Raport nie zwr�ci� �adnych wynik�w.";
$strings["schema_date"] = "RRRR/MM/DD";
$strings["hours"] = "godzin";
$strings["choice"] = "Wybierz";
$strings["missing_file"] = "Brak pliku!";
$strings["project_site_deleted"] = "Strona projektu zosta�a skasowana.";
$strings["add_user_project_site"] = "Prawa dla u�ytkownika zosta�y nadane do dost�pu do strony projektu.";
$strings["remove_user_project_site"] = "Prawa dla u�ytkownika zosta�y usuni�te.";
$strings["add_project_site_success"] = "Dodawanie do strony projektu zako�czone sukcesem.";
$strings["remove_project_site_success"] = "Usuwanie ze strony projektu zako�czone sukcesem.";
$strings["add_file_success"] = "Plik zosta� dodany.";
$strings["delete_file_success"] = "Plik zosta� skasowany.";
$strings["update_comment_file"] = "Komentarz do pliku zosta� zmieniony.";
$strings["session_false"] = "B��d sesji";
$strings["logs"] = "Logi";
$strings["logout_time"] = "Czas automatycznego wylogowania";
$strings["noti_foot1"] = "To powiadomienie zosta�o wygenerowane przez PhpCollab.";
$strings["noti_foot2"] = "Aby wej�� na stron� PhpCollab, wpisz:";
$strings["noti_taskassignment1"] = "Nowe zadanie:";
$strings["noti_taskassignment2"] = "Zadanie zosta�o przypisane tobie:";
$strings["noti_moreinfo"] = "Aby zobaczy� wi�cej informacji wejd� na:";
$strings["noti_prioritytaskchange1"] = "Zmiana priorytetu:";
$strings["noti_prioritytaskchange2"] = "Priorytet poni�szego zadania zosta� zmieniony na:";
$strings["noti_statustaskchange1"] = "Zmiana statusu:";
$strings["noti_statustaskchange2"] = "Status poni�szego zadania zosta� zmieniony:";
$strings["login_username"] = "Musisz poda� nazw� u�ytkownika";
$strings["login_password"] = "Prosz� poda� has�o";
$strings["login_clientuser"] = "To jest konto klienta. Nie masz dost�pu z takim kontem do PhpCollab.";
$strings["user_already_exists"] = "Jest ju� u�ytkownik o takiej nazwie. Prosz� wybra� inn� nazw u�ytkownika";
$strings["noti_duedatetaskchange1"] = "Zmiana terminu zako�czenia zadania:";
$strings["noti_duedatetaskchange2"] = "Termin zako�czenia poni�szego zadania zosta� zmieniony:";
$strings["company"] = "Firma";
$strings["show_all"] = "Poka� wszystko";
$strings["information"] = "Informacje";
$strings["delete_message"] = "Skasuj wiadomo��";
$strings["project_team"] = "Zesp�";
$strings["document_list"] = "Lista dokument�w";
$strings["bulletin_board"] = "Biuletyn";
$strings["bulletin_board_topic"] = "Temat biuletynu";
$strings["create_topic"] = "Stw�rz nowy temat";
$strings["topic_form"] = "Formularz Tematu";
$strings["enter_message"] = "Podaj swoj� wiadomo��";
$strings["upload_file"] = "Zamie�� plik";
$strings["upload_form"] = "Formularz zamieszczania plik�w";
$strings["upload"] = "Zamie�� na serwerze";
$strings["document"] = "Dokument";
$strings["approval_comments"] = "Zatwierd� komentarze";
$strings["client_tasks"] = "Zadania klienta";
$strings["team_tasks"] = "Zadania zespo�u";
$strings["team_member_details"] = "Szczeg�y dotycz�ce cz�onka zespo�u projektowego";
$strings["client_task_details"] = "Szczeg�y dotycz�ce zadania";
$strings["team_task_details"] = "Szczeg�y dotycz�ce zespo�u projektowego";
$strings["language"] = "J�zyk";
$strings["welcome"] = "Witamy";
$strings["your_projectsite"] = "na twojej stronie projektu";
$strings["contact_projectsite"] = "Je�eli masz jakie� pytania dotycz�ce informacji kt�re tutaj znalaz�e�, skontaktuj si� z w�a�cicielem projektu.";
$strings["company_details"] = "Informacje o firmie";
$strings["database"] = "Backup i odtworzenie bazy danych";
$strings["company_info"] = "Zmie� dane twojej firmy";
$strings["create_projectsite"] = "Stw�rz stron� projektu";
$strings["projectsite_url"] = "URL strony projektu";
$strings["design_template"] = "Wzorzec";
$strings["preview_design_template"] = "Zobacz Wzorzec";
$strings["delete_projectsite"] = "Skasuj stron� projektu";
$strings["add_file"] = "Dodaj plik";
$strings["linked_content"] = "Zawarto�� projektu";
$strings["edit_file"] = "Zmie� dane pliku";
$strings["permitted_client"] = "U�ytkownicy klienta maj�cy prawa";
$strings["grant_client"] = "Nadaj prawa aby mo�na by�o ogl�da� stron� projektu.";
$strings["add_client_user"] = "Dodaj u�ytkownika klienta";
$strings["edit_client_user"] = "Zmie� dane u�ytkownika klienta";
$strings["client_user"] = "U�ytkownicy klienta";
$strings["client_change_status"] = "Je�eli sko�czy�e� to zadanie, zmie� jego status (znajduj�cy si� poni�ej)";
$strings["project_status"] = "Status Projektu";
$strings["view_projectsite"] = "Widok strony projektu";
$strings["enter_login"] = "Podaj sw�j login, aby uzyska� nowe has�o";
$strings["send"] = "Wy�lij";
$strings["no_login"] = "Nie ma takiej nazwy u�ytkownika w bazie";
$strings["email_pwd"] = "Has�o wys�ane";
$strings["no_email"] = "U�ytkownik bez adresu e-mail";
$strings["forgot_pwd"] = "Zapomnia�e� has�a?";
$strings["project_owner"] = "Mo�esz wykonywa� zmiany tylko na swoich w�asnych projektach.";
$strings["connected"] = "Po��czony";
$strings["session"] = "Sesja";
$strings["last_visit"] = "Ostatnia wizyta";
$strings["compteur"] = "Ile razy	";
$strings["ip"] = "IP";
$strings["task_owner"] = "Nie jeste� cz�onkiem zespo�u projektowego";
$strings["export"] = "Eksport";
$strings["browse_cvs"] = "Przegl�daj CVS";
$strings["repository"] = "Repozytorium CVS";
$strings["reassignment_clientuser"] = "Ponowne przypisanie do zadania";
$strings["organization_already_exists"] = "Ta nazwa znajduje si� ju� w systemie. Prosz� wybra� inn�.";
$strings["blank_organization_field"] = "Musisz poda� nazw� klienta.";
$strings["blank_fields"] = "pole obowi�zkowe";
$strings["projectsite_login_fails"] = "Nie mo�emy zatwierdzi� takiej kombinacji nazwy u�ytkownika i has�a.";
$strings["start_date"] = "Rozpocz�to";
$strings["completion"] = "Post�p";
$strings["update_available"] = "Jest ju� dost�pne Uaktualnienie!";
$strings["version_current"] = "Obecnie u�ywasz wersji";
$strings["version_latest"] = "Ostatni� wersj� jest";
$strings["sourceforge_link"] = "Zobacz stron� projektu na Sourceforge";
$strings["demo_mode"] = "Tryb Demo. Nie ma mo�liwo�ci wykonywania �adnych akcji";
$strings["setup_erase"] = "Skasuj setup.php!!";
$strings["no_file"] = "Nie wybra�e� �adnego pliku";
$strings["exceed_size"] = "Przekroczono maksymaln� wielko�� pliku";
$strings["no_php"] = "plik Php nie mo�e by� umieszczony";
$strings["approval_date"] = "Data zatwierdzenia";
$strings["approver"] = "Zatwierdzaj�cy";

$strings["error_database"] = "Nie uda�o si� po��czy� z baz� danych";
$strings["error_server"] = "Nie uda�o si� po��czy� z serwerem";
$strings["version_control"] = "Kontrola wersji";
$strings["vc_status"] = "Status";
$strings["vc_last_in"] = "Data ostatniej modyfikacji";
$strings["ifa_comments"] = "Komentarz do zatwierdzenia";
$strings["ifa_command"] = "Zmie� status zatwierdzenia";
$strings["vc_version"] = "Wersja";
$strings["ifc_revisions"] = "Poprawki";
$strings["ifc_revision_of"] = "Uaktualnienie wersji";
$strings["ifc_add_revision"] = "Dodaj poprawk�";
$strings["ifc_update_file"] = "Aktualizuj plik";
$strings["ifc_last_date"] = "Data ostatniej modyfikacji";
$strings["ifc_version_history"] = "Historia wersji";
$strings["ifc_delete_file"] = "Skasuj plik i wszystkie potomne uaktualnienia i wersje";
$strings["ifc_delete_version"] = "Skasuj wybran� wersj�";
$strings["ifc_delete_review"] = "Skasuj wybrane uaktualnienie";
$strings["ifc_no_revisions"] = "W tej chwili nie ma �adnych uaktualnie� tego dokumentu.";
$strings["unlink_files"] = "Usuwanie plik�w";
$strings["remove_team"] = "Skasuj cz�onk�w grupy";
$strings["remove_team_info"] = "Czy usun�� tych u�ytkownik�w z grupy projektowej?";
$strings["remove_team_client"] = "Skasuj uprawnienia by zobaczy� stron� projektu";
$strings["note"] = "Notka";
$strings["notes"] = "Notki";
$strings["subject"] = "Temat";
$strings["delete_note"] = "Skasuj notki";
$strings["add_note"] = "Dodaj notk�";
$strings["edit_note"] = "Edytuj notk�";
$strings["version_increm"] = "Zwi�ksz numer wersji o warto��: ";
$strings["url_dev"] = "URL strony rozwojowej";
$strings["url_prod"] = "URL strony finalnej";
$strings["note_owner"] = "Jeste� uprawniony do wprowadzania zmian jedynie we w�asnych notkach.";
$strings["alpha_only"] = "Dozwolone s� jedynie znaki alfanumeryczne.";
$strings["edit_notifications"] = "Edytuj ustawienia powiadomie�";
$strings["edit_notifications_info"] = "Wybierz zdarzenia, o kt�rych chcesz by� powiadamiany poprzez e-mail.";
$strings["select_deselect"] = "Zaznacz/odznacz wszystkie";
$strings["noti_addprojectteam1"] = "Dodaj do grupy projektowej: ";
$strings["noti_addprojectteam2"] = "Zosta�e� dodany do grupy pracuj�cej nad projektem: ";
$strings["noti_removeprojectteam1"] = "Usuni�ty z grupy projektowej:";
$strings["noti_removeprojectteam2"] = "Zosta�e� usuni�ty z grupy pracuj�cej nad projektem:";
$strings["noti_newpost1"] = "Nowa wiadomo��: ";
$strings["noti_newpost2"] = "Dodano wiadomo�� do dyskusji: ";
$strings["edit_noti_taskassignment"] = "Gdy zostan� przypisany do zadania.";
$strings["edit_noti_statustaskchange"] = "Gdy zmieni si� status jednego z moich zada�.";
$strings["edit_noti_prioritytaskchange"] = "Gdy zmieni si� priorytet jednego z moich zada�.";
$strings["edit_noti_duedatetaskchange"] = "Gdy zmieni si� oczekiwana data uko�czenia mojego zadania.";
$strings["edit_noti_addprojectteam"] = "Gdy zostan� dodany do grupy projektowej.";
$strings["edit_noti_removeprojectteam"] = "Gdy zostan� usuni�ty z grupy projektowej.";
$strings["edit_noti_newpost"] = "Gdy pojawi si� nowy post w dyskusji.";

$strings["add_optional"] = "| Dodaj opcjonalny";
$strings["assignment_comment_info"] = "Dodaj komentarz dotycz�cy przypisania zadania";
$strings["my_notes"] = "Moje notki";

$strings["edit_settings"] = "Ustawienia";
$strings["max_upload"] = "Maksymalna wielko�� pliku";
$strings["project_folder_size"] = "Maksymalna zawarto�� folderu projektu";
$strings["calendar"] = "Kalendarz";
$strings["date_start"] = "Data rozpocz�cia";
$strings["date_end"] = "Data zako�czenia";
$strings["time_start"] = "Czas rozpocz�cia";
$strings["time_end"] = "Czas zako�czenia";
$strings["calendar_reminder"] = "Przypominacz";
$strings["shortname"] = "Skr�cona nazwa";
$strings["calendar_recurring"] = "Zdarzenie powtarza si� co tydzie�.";
$strings["edit_database"] = "Ustawienia bazy danych";
$strings["noti_newtopic1"] = "Nowa dyskusja:";
$strings["noti_newtopic2"] = "W nast�puj�cym projekcie rozpocz�ta zosta�a nowa dyskusja:";
$strings["edit_noti_newtopic"] = "Gdy pojawi si� nowa dyskusja.";
$strings["today"] = "Dzi�";
$strings["previous"] = "Poprzedni";
$strings["next"] = "Nast�pny";
$strings["help"] = "Pomoc";
$strings["complete_date"] = "Zada zako�czenia";
$strings["scope_creep"] = "�ledzenie terminu";
$strings["days"] = "Dni";
$strings["logo"] = "Logo";
$strings["remember_password"] = "Pami�taj has�o";
$strings["client_add_task_note"] = "Uwaga: Wprowadzone zadanie jest dodawane do bazy, ale zostanie zaprezentowane na tej stronie jedynie je�li zostanie przypisane do cz�onka grupy.";
$strings["noti_clientaddtask1"] = "Zadanie dodane przez klienta:";//<---
$strings["noti_clientaddtask2"] = "Nowe zadanie zosta�o dodane przez klienta ze strony projektu do nast�puj�cego projektu:";//<---
$strings["phase"] = "Faza";
$strings["phases"] = "Fazy";
$strings["phase_id"] = "ID fazy";
$strings["current_phase"] = "Aktywna faza/y";
$strings["total_tasks"] = "Zada� w sumie";
$strings["uncomplete_tasks"] = "Nieuko�czonych zada�";
$strings["no_current_phase"] = "Brak aktywnej fazy";
$strings["true"] = "Tak";
$strings["false"] = "Nie";
$strings["enable_phases"] = "Uaktywnij fazy";
$strings["phase_enabled"] = "Fazy uaktywnione";
$strings["order"] = "Sortuj";
$strings["options"] = "Opcje";
$strings["support"] = "Wsparcie";
$strings["support_request"] = "Zapytanie";
$strings["support_requests"] = "Zapytania";
$strings["support_id"] = "ID zapytania";
$strings["my_support_request"] = "Moje zapytania";
$strings["introduction"] = "Wst�p";
$strings["submit"] = "Wy�lij";
$strings["support_management"] = "Zarz�dzanie zapytaniami";
$strings["date_open"] = "Zapytanie dodano";
$strings["date_close"] = "Rozwi�zano";
$strings["add_support_request"] = "Wy�lij zapytanie";
$strings["add_support_response"] = "Dodaj odpowied�";
$strings["respond"] = "Odpowiedz";
$strings["delete_support_request"] = "Zapytanie skasowane";
$strings["delete_request"] = "Skasuj zapytanie";
$strings["delete_support_post"] = "Skasuj zapytanie";
$strings["new_requests"] = "Nowe zapytania";
$strings["open_requests"] = "Otwarte zapytania zapytania";
$strings["closed_requests"] = "Zamkni�te zapytania";
$strings["manage_new_requests"] = "Pracuj nad nowymi zapytaniami";
$strings["manage_open_requests"] = "Pracuj nad otwartymi zapytaniami";
$strings["manage_closed_requests"] = "Pracuj nad zamkni�tymi zapytaniami";
$strings["responses"] = "Odpowiedzi";
$strings["edit_status"] = "Zmie� status";
$strings["noti_support_request_new2"] = "Wprowadzi�e� nowe zapytanie dotycz�ce: ";
$strings["noti_support_post2"] = "Zosta�a dodana nowa odpowiedz na Twoje zapytanie. Szczeg�y poni�ej.";
$strings["noti_support_status2"] = "Twoje zapytanie zosta�o zaktualizowane. Szczeg�y poni�ej.";
$strings["noti_support_team_new2"] = "Wprowadzi�e� nowe zapytanie dotycz�ce: ";
//2.0
$strings["delete_subtasks"] = "Usu� podzadanie";
$strings["add_subtask"] = "Dodaj podzadanie";
$strings["edit_subtask"] = "Edytuj podzadanie";
$strings["subtask"] = "Podzadanie";
$strings["subtasks"] = "Podzadania";
$strings["show_details"] = "Poka� szczeg�y";
$strings["updates_task"] = "Historia uaktualnie� zada�";
$strings["updates_subtask"] = "Historia uaktualnie� podzada�";
//2.1
$strings["go_projects_site"] = "Przejd� do strony projekt�w";
$strings["bookmark"] = "Zak�adka";
$strings["bookmarks"] = "Zak�adki";
$strings["bookmark_category"] = "Kategoria";
$strings["bookmark_category_new"] = "Nowa kategoria";
$strings["bookmarks_all"] = "Wszystkie";
$strings["bookmarks_my"] = "Moje zak�adki";
$strings["my"] = "Moje";
$strings["bookmarks_private"] = "Prywatne";
$strings["shared"] = "Wsp�dzielona";
$strings["private"] = "Prywatne";
$strings["add_bookmark"] = "Dodaj zak�adk�";
$strings["edit_bookmark"] = "Edytuj zak�adk�";
$strings["delete_bookmarks"] = "Skasuj zak�adk�";
$strings["team_subtask_details"] = "Szczeg�y podzada� zespo�u.";
$strings["client_subtask_details"] = "Szczeg�y podzada� klienta";
$strings["client_change_status_subtask"] = "Zmie� sw�j status poni�ej kiedy uko�czysz te podzadanie";//<---
$strings["disabled_permissions"] = "Konto nieaktywne";
$strings["user_timezone"] = "Strefa czasowa (GMT)";
//2.2
$strings["project_manager_administrator_permissions"] = "Prawa administratora projekt�w";
$strings["bug"] = "�ledzenie b��d�w";
//2.3
$strings["report"] = "Raport";
$strings["license"] = "Licencja";
//2.4
$strings["settings_notwritable"] = "Plik settings.php jest zabezpieczony przed zapisem!";
$strings["invoicing"] = "Fakturowanie";
$strings["invoice"] = "Faktura";
$strings["invoices"] = "Faktury";
$strings["date_invoice"] = "Data wystawienia";
$strings["header_note"] = "Nag��wek";
$strings["footer_note"] = "Stopka";
$strings["total_ex_tax"] = "Przych�d brutto";
$strings["total_inc_tax"] = "Przych�d netto";
$strings["tax_rate"] = "Stopa podatku";
$strings["tax_amount"] = "Kwota podatku";
$strings["invoice_items"] = "Cz�ci faktury";
$strings["amount_ex_tax"] = "Kwota bez podatku";
$strings["completed"] = "Uko�czone";
$strings["service"] = "Us�uga";
$strings["name_print"] = "Nazwa na wydruku";
$strings["edit_invoice"] = "Edytuj faktur�";
$strings["edit_invoiceitem"] = "Edytuj faktur�";
$strings["calculation"] = "Koszty";
$strings["items"] = "Sk�adowe";
$strings["position"] = "Pozycja";
$strings["service_management"] = "Zarz�dzanie us�ugami";
$strings["hourly_rate"] = "Wymiar godzinowy";
$strings["add_service"] = "Dodaj us�ug�";
$strings["edit_service"] = "Edytuj us�ug�";
$strings["delete_services"] = "Skasuj us�ug�";
$strings["worked_hours"] = "Przepracowanych godzin";
$strings["rate_type"] = "Typ";
$strings["rate_value"] = "Kwota";
$strings["note_invoice_items_notcompleted"] = "Nie wszystkie elementy faktury s� gotowe";

$rateType = array(0 => "Stawka indywidualna", 1 => "Stawka za projekt", 2 => "Stawka na firm�", 3 => "Stawka za us�ug�");

//HACKS

$strings["newsdesk"] = "Wiadomo�ci";
$strings["newsdesk_list"] = "Lista wiadomo�ci";
$strings["article_newsdesk"] = "Tre�� wiadomo�ci";
$strings["update_newsdesk"] = "Aktualizuj wpis";
$strings["my_newsdesk"] = "Moje wiadomo�ci";
$strings["edit_newsdesk"] = "Edytuj wiadomo��";
$strings["copy_newsdesk"] = "Kopiuj wiadomo��";
$strings["add_newsdesk"] = "Dodaj wiadomo��";
$strings["del_newsdesk"] = "Usu� wiadomo��";
$strings["delete_news_note"] = "Uwaga: to dzia�anie usunie wszystkie komentarze do tej wiadomo�ci!";
$strings["author"] = "Autor";
$strings["blank_newsdesk_title"] = "Znaleziono pusty tytu�.";
$strings["blank_newsdesk"] = "Nie uda�o si� zlokalizowa� wiadomo�ci.";
$strings["blank_newsdesk_comment"] = "Znaleziono pusty komentarz.";
$strings["remove_newsdesk"] = "Usuni�to wiadomo�� wraz ze wszystkimi komentarzami.";
$strings["add_newsdesk_comment"] = "Dodaj komentarz do wiadomo�ci.";
$strings["edit_newsdesk_comment"] = "Edytuj komentarz wiadomo�ci.";
$strings["del_newsdesk_comment"] = "Skasuj komentarz/e do wiadomo�ci.";
$strings["remove_newsdesk_comment"] = "Komentarz/e wiadomo�ci zosta�y skasowane.";
$strings["errorpermission_newsdesk"] = "Brak komentarzy zmiany lub usuni�cia.";
$strings["errorpermission_newsdesk_comment"] = "Brak komentarzy zmiany lub usuni�cia.";
$strings["newsdesk_related"] = "Zwi�zany z projektem";
$strings["newsdesk_related_generic"] = "Wiadomo�� og�lna (nie zwi�zana z projektem)";
$strings["newsdesk_related_links"] = "Link zwi�zany z wiadomo�ci�";
$strings["newsdesk_rss"] = "W��cz RSS dla tej wiadomo�ci";
$strings["newsdesk_rss_enabled"] = "RSS w��czone dla tej wiadomo�ci";
$strings["noti_memberactivation1"] = "Konto zosta�o aktywowane";
$strings["noti_memberactivation2"] = "Zosta�e� dodany do systemu phpCollab. System ten zosta� stworzony i nadal ci�gle jest rozbudowywany by pom�c Ci nadzorowa� Twoje projekty. \n\nBy zalogowa� si� do phpCollab wpisz w przegl�darce ten adres: TUTAJ WPISZ ADRES, po czym zaloguj si� u�ywaj�c nast�puj�cych danych:";
$strings["noti_memberactivation3"] = "nazwa u�ytkownika:";
$strings["noti_memberactivation4"] = "has�o:";
$strings["noti_memberactivation5"] = "Po wpisaniu powy�szych danych i potwierdzeniu enterem zostaniesz przeniesiony do systemu. \n\nDodatkowo na ten adres e-mail b�dziesz otrzymywa� dodatkowe informacje dotycz�ce aktywacji zada� i innych zdarze� zwi�zanych z twoim kontem. Te wiadomo�ci pozwol� ci lepiej nadzorowa� prac� nad projektem.";

//BEGIN email project users mod
$strings["email_users"] = "Wy�lij e-mail"; 
$strings["email_following"] = "Wy�lij e-mail do..."; 
$strings["email_sent"] = "E-mail zosta� wys�any."; 
//END email project users mod

$strings["clients_connected"] = "(Klient na stronie projektu)"; 
// MOD, (dracono)
$strings["edit_message"] = "Edytuj wiadomo��";
$strings["edit_noti_clientaddtask"] = "Gdy nowe zadanie zostanie dodane przez klienta.";
$strings["edit_noti_uploadfile"] = "Gdy pojawi si� nowy dokument w projekcie.";



?>