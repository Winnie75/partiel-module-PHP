# partiel-module-PHP

QUESTION 2.B
la requête a effectuer pour créer un personnage est la suivantes:
CREATE TABLE utilisateur
(
    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255),
    date_naissance DATE,
    pays VARCHAR(255),
    ville VARCHAR(255),
    code_postal VARCHAR(5),
    nombre_achat INT
)

QUESTION 3.B
la requête a effectuée pour afficher le personnage et sa voiture est la suivantes:
;WITH cte AS
(
   SELECT 0 AS CharCode
   UNION ALL
   SELECT CharCode + 1 FROM cte WHERE CharCode <31
)
SELECT
   *
FROM
   mytable T
     cross join cte
WHERE
   EXISTS (SELECT *
        FROM mytable Tx
        WHERE Tx.PKCol = T.PKCol
             AND
              Tx.MyField LIKE '%' + CHAR(cte.CharCode) + '%'
         )
         
QUESTION 3.C
la requête a effectuée pour afficher le personnage est son sport est la suivante :
;WITH cte AS
(
   SELECT 0 AS CharCode
   UNION ALL
   SELECT CharCode + 1 FROM cte WHERE CharCode <31
)
SELECT
   *
FROM
   mytable T
     cross join cte
WHERE
   EXISTS (SELECT *
        FROM mytable Tx
        WHERE Tx.PKCol = T.PKCol
             AND
              Tx.MyField LIKE '%' + CHAR(cte.CharCode) + '%'
         )
         

