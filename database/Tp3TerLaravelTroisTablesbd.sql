


INSERT INTO `location` (`idLocation`, `dureeLocation`, `idClient`) VALUES
(1, '10', 1),
(2, '20', 2);



INSERT INTO `materiaux` (`idMateriaux`, `libelleMateriaux`) VALUES
(1, 'Mini pelle'),
(2, 'Betonniere'),
(3, 'Girafe'),
(4, 'Echaffaudage'),
(5, 'Perforateur');

INSERT INTO `location_materiaux` (`idLocation`, `idMateriaux`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4);




INSERT INTO `client` (`idClient`, `nomClient`, `villeClient`) VALUES
(1, 'Un', 'Ici'),
(2, 'Deux', 'Là'),
(3, 'Trois', 'Là-bas'),
(4, 'Quatre', 'Ailleurs');

