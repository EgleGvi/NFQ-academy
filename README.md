# NFQ testas

Užduotis Nr. 2

Problema: Kirpykloje laisvo laiko rezervavimas vyksta registruojant skambinančius ar užsukusius klientus popierinėje rezervacijų knygoje. Kirpykla neturi atskiros administratorės, o užimtos kirpėjos dažnai nekelia ragelio arba laiku neprieina prie užsukusio kliento, todėl kirpykla praranda daug klientų.
Naudodami HTML, CSS, JavaScript, sukurkite valdymo sistemą/puslapį skirtą:

Kirpėjoms:

- Rezervacijų sąrašas, kur būtų galima ieškoti (šiandien, rytoj, tiksli data);
- Naujos rezervacijos įvedimas, atšaukimas;
- Rezervacijų rikiavimas/filtravimas.

Klientams, kurie nori atlikti rezervaciją internetu:

- Puslapyje matomas laisvų laikų sąrašas (negalima rodyti kitų klientų informacijos) kur galima atlikti rezervaciją;
- Vienu metu, vienas vartotojas gali turėti vieną aktyvią rezervaciją.

# Naudotojo vadovas

### index.php
Tai pagrindinis puslapis. Jis yra skirtas klientams, kad jie galėtų užsiregistruoti į kirpyklą. Klientas mato kalendorių, kuriame gali pasirinkti norimą dieną. Vos tik klientas pažymi norimą datą, iškart pasimato būtent tos dienos laisvi rezervacijų laikai. Pasirinkus laiką, klientas privalo į tam skirtus laukelius įvesti savo duomenis, reikalingus rezervacijai užbaigti. Laukai vardas ir pavardė bei telefono numeris yra privalomi. Į pastabų laukelį klientas gali nerašyti nieko, arba gali pateikti šiek tiek informacijos apie norimas paslaugas. Paspaudus registruotis, jeigu privalomi laukai užpildyti, klientas nukreipiamas į puslapį kur patvirtinama, kad rezervacija buvo sėkminga. Kliento puslapyje taip pat yra meniu juosta, kuria jis gali naudotis.

### register.php
Puslapis, į kurį nukreipiami klientai ir kirpėjos, kai užpildo naują rezervaciją. Šiame puslapyje matomas meniu ir pranešimas apie sėkmingai įvykusią rezervaciją.

### employees.php
Puslapis kirpėjoms labai panašus į klientų puslapį. Kirpėjos taip pat mato kalendorių, parinkus dieną ir laiką jos registruoja klientus. Šiame puslapyje jos turi visų rezervacijų sąrašą ir gali matyti klientų informaciją. Paieškos laukelis yra skirtas filtruoti įrašus pagal datą. Klientų sąraše sukurtas mygtukas "atšaukti", skirtas ištrinti konkrečią rezervaciją. Kirpėjų meniu juostoje yra galimybė atsijungti, taip pat pereiti į meniu "Apie mus".

### about-us.php
Šiame puslapyje pateikiama informacija apie darbo laiką, taip pat kirpyklos kontaktai. Ši informacija prieinama visiems iš bet kurio kito puslapio. 
