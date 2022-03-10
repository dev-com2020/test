ALTER TABLE AutorzyPseudonimy
ADD CONSTRAINT `AutorzyPseudonimyAutorId1FK`
FOREIGN KEY (`AutorId1`) REFERENCES Autorzy(`Id`);

ALTER TABLE AutorzyPseudonimy
ADD CONSTRAINT `AutorzyPseudonimyAutorId2FK`
FOREIGN KEY (`AutorId2`) REFERENCES Autorzy(`Id`);

ALTER TABLE Opinie
ADD INDEX `OpinieKsiążkaIdInd` (`KsiążkaId`);

ALTER TABLE Opinie
ADD INDEX `OpinieKlientIdInd` (`KlientId`);

ALTER TABLE Opinie
ADD CONSTRAINT `OpinieKsiążkaIdFK`
FOREIGN KEY (`KsiążkaId`) REFERENCES Ksiazki(`Id`);

ALTER TABLE Opinie
ADD CONSTRAINT `OpinieKlientIdFK`
FOREIGN KEY (`KlientId`) REFERENCES Klienci(`Id`);

ALTER TABLE KsiazkiAutorzy
ADD CONSTRAINT `KsiazkiAutorzyKsiążkaIdFK`
FOREIGN KEY (`KsiążkaId`) REFERENCES Ksiazki(`Id`);

ALTER TABLE KsiazkiAutorzy
ADD CONSTRAINT `KsiazkiAutorzyAutorIdFK`
FOREIGN KEY (`AutorId`) REFERENCES Autorzy(`Id`);

ALTER TABLE Recenzje
ADD INDEX `RecenzjeKsiążkaIdInd` (`KsiążkaId`);

ALTER TABLE Recenzje
ADD CONSTRAINT `RecenzjeKsiążkaIdFK`
FOREIGN KEY (`KsiążkaId`) REFERENCES Ksiazki(`Id`);

ALTER TABLE Ksiazki
ADD INDEX `KsiazkiWydawnictwoIdInd` (`WydawnictwoId`);

ALTER TABLE Ksiazki
ADD CONSTRAINT `KsiazkiWydawnictwoIdFK`
FOREIGN KEY (`WydawnictwoId`) REFERENCES Wydawnictwa(`Id`);

ALTER TABLE Zamowienia
ADD INDEX `ZamowieniaKlientIdInd` (`KlientId`);

ALTER TABLE Zamowienia
ADD CONSTRAINT `ZamowieniaKlientIdFK`
FOREIGN KEY (`KlientId`) REFERENCES Klienci(`Id`);

ALTER TABLE KsiazkiZamowienia
ADD CONSTRAINT `KsiazkiZamowieniaZamówienieIdFK`
FOREIGN KEY (`ZamówienieId`) REFERENCES Zamowienia(`Id`);

ALTER TABLE KsiazkiZamowienia
ADD CONSTRAINT `KsiazkiZamowieniaKsiążkaIdFK`
FOREIGN KEY (`KsiążkaId`) REFERENCES Ksiazki(`Id`);
