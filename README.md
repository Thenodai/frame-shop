# frame-shop

O istorija prasidėjo šitaip - archeologas Viljamas išvažiavo į tartpautinį archaeologijos festivalį Didžiojoje Britanijoje.
Prisipažino, kad iš šio renginio jis daug nesitiki, tačiau šią nuomonę ir visą jo likusį gyvenimą pakeitė vienas slaptingas radinys.
Štai jis ir pardavinėja jį šioje mažoje internetinėje parduotuvėje, tai labai senas ir brangus paveikslo rėmas. 
Mat Viljamas užsakė begalę reprodukcijų, kurias čia ir pardavinėja, tačiau pirkėjai būriuojasi dešimtimis, 
ir kiekvienas slaptai tikisi, kad jam galbūt atiteks originalas.

O šiaip tai panaudojau porą symfony komponentų - pagrinde http-kernel'į ir routing'ą. 
Taip pat twig'ą, kad nebūtų html ir php tag'ų maišalynės.
Palaikiau MVC principa - controller'io actionai - template'ai, entities. 
Repositorijos atsakingos už querius į DB. Connectionui panaudojui PDO preparinant statementus, 
siekiant išvengti SQL injection.
Servisai atsakingi už tam tikrą biznio logiką.
Tiesa, sortingui panaudojau jquery lib'ą.
Užsakymo forma reprezentacinė, tačiau su laiku įmanoma plėsti.

Jei norima pasileisti lokaliai, yra sql dumpas. Reikės ir composer install'o.
Taigi, naudota versijavimo sistema ir psr-4.
