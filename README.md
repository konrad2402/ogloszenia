Skplep iternetowt firmy TianDe
==========

#Opis ogólny

Repozytorium zawiera projekt grupowy na labolatorium 'Projekt zespołowy', które prowadzi dr Tomasz Dzido.
[Pod tym adresem](http://ogloszenia.host1.maxnet.org.pl/) co 10min serwer synchronizuje sobie pliki z tym repozytorium.

#Opis funkcjonalności aplikacji
Aplikacja służy jako serwis internetowy dający możliwość zamawiania kosmetyków firmy TianDe przez Internet. Każda osobą będzie mogła zamówić na stronie jakiś przedmiot/ty i przejść do zakupu. Będzie też mogła w każdej chwili sprawdzić zawartość swojego koszyka i jeśli zmieni zdanie coś z niego usunąć. Przed zakupem będzie musiała podać swoje imię, nazwisko, adres, telefon oraz email oraz jeśli będzie chciała, będzie mogła zamieścić krótką informację dla właściciela sklepu. Dopiero wtedy po zatwierdzeniu danych zostanie przesłana wiadomość email do sklepu z danymi klienta, a klient zostanie przekierowany do strony z numerem konta bankowego na który ma dokonać wpłaty pieniędzy. Właściciel sklepu po sprawdzeniu swojego konta czy pieniądze wpłynęły będzie mógł wysłać paczkę z zamówieniem.
Każda osoba będzie mogła zarejestrować się w serwisie, co ułatwi zakupy, ponieważ nie będzie musiała za każdym razem przed zakupem wypełniać formularza ze swoimi danymi. Po kliknięciu ‘KUPUJE’, zostanie od razu przekierowana do strony z numerem rachunku bankowego, a wiadomość zostanie wysłana do sklepu.
Zainteresowane osoby współpracą z firmą TianDe będą mogły wypełnić wniosek na stronie i zająć się dystrybucją kosmetyków TianDe. Wniosek będzie dostępny tylko dla osób które się zarejestrowały w serwisie. Po wypełnieniu wniosku, część danych zostanie automatycznie wypełniona danymi klienta które klient podał podczas rejestracji, wniosek z danymi zainteresowanej osoby zostanie wysłany na adres email sklepu i po potwierdzeniu przez właściciela sklepu klient będzie mógł zająć się dystrybucją kosmetyków. Wniosek będzie możliwy tylko raz do wypełnienia, a po jego potwierdzeniu przez właściciela sklepu, klient po zalogowaniu się na stronie będzie widział cenę normalną produktów, oraz cenę z 10% rabatem dla pracowników, a jego zamówienia będą wyliczane z tą obniżką.
Na serwer będzie mógł zalogować się administrator strony i dodać nowe kosmetyki do oferty, wraz ze zdjęciami kosmetyków, oraz będzie mógł dodać najnowsze aktualności, tzn. poinformować na stronie głównej o nowościach oraz promocjach. Będzie też mógł awansować klientów na dystrybutorów kosmetyków, czyli osoby które będą zamawiać kosmetyki z 10% zniżką.
Dodatkowo stronka będzie w kilku językach (przynajmniej dwóch).

#Technologie:
* PHP 5
* MySQL 5.5
* JavaScript
* HTML 5, CSS 3 i Bootstrap

#Skład grupy
* Konrad Mieszała
* Marek Skiba
* Bartek Winsławski

#Podział pracy w grupie
* Konrad Mieszała:
	* przygotowywanie raportów i reprezentowanie grupy na zajęciach
	* testowanie aplikacji
	* utworzenie bootstrap, css
	* utworzenie wysyłania informacji o zamówieniu do właściciela serwisu
* Bartek Winsławski:
	* utworzenie logowania do serwisu
	* testowanie aplikacji
	* dodanie języków
	* dodanie możliwości konsultanta
		- widzi ceny normalne i z obniżką 10%
		- składa zamówienia z uwzględnieniem obniżki
* Marek Skiba:
	* utworzenie połączenia z bazą danych
	* testowanie aplikacji
	* utworzenie możliwości zostania konsultantem 
		- automatyczne pobranie danych użytkownika i wypełnieni części zgłoszenia
		- wysłanie danych do właściciela serwisu
	* dorobienie możliwości łatwej edycji aktualności przez właściciela serwisu
	* wspólna praca nad funkcjonowaniem aplikacji

#Harmonogram
13.03.2013	- przygotowanie dokumentacji
20,27.03.2013 - wolne
3.04 	- wstępny schemat aplikacji:
		- podłączenie bazy danych
10.04 	- dodanie łatwej edycji dla właściciela serwisu
17.04 	- dodanie rejestracji dla użytkowników
		- utworzenie możliwości konsultanta
		- dodanie CSS-a
		- dodanie języków
24.04 	- zaprezentowanie aplikacji
1.05 	- wolne
8.05 	- ewentualne poprawki
do 29 maja