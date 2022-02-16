# partiel-module-PHP

module phP et SQL LOUIS ROLLAND DE RENGERVE


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
         

QUESTION 4
la requête a effectuée pour afficher uniqument les utilisateurs participant au sport 'concours de mangeurs de crable" ou qui possede la voiture "sous-marin" est la suivantes:
// RECUPERATION DES INFOS DE TOUS LES UTILISATEURS
function GetAll_Uilisateur()
{
    $LesValeurs=Array();
    $i=0;
 
    // ecriture de la requete
        $RQT='SELECT u.ID_UTILISATEUR, CONCAT(u.PRENOM, " ", u.NOM) as NomPrenom, u.EMAIL,
                s.NOM
                FROM utilisateur u
                 
                INNER JOIN service s
                    ON u.ID_SERVICE= s.ID_SERVICE
                 
                 
                ORDER BY PRENOM ASC
                 
            ';
                 
    $Query = @mysql_query($RQT); // execution de la requete
     
    // si la requète est correctement executée
    if($Query)
    {
        while($Fetch = mysql_fetch_assoc($Query))
        {  
            $LesValeurs[$i] = $Fetch;
            $i++;
             
        }
        return $LesValeurs; // on retorune les valeurs
    }
         
        else { echo 'Erreur lors de l\'execution de la fonction GetAll_Uilisateur veuillez contacter le developpeur'; }
}
