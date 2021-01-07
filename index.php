<?php

            $servername = 'localhost';
            $username = 'utilisateur';
            $password = 'utilisateur';
            
            //On essaie de se connecter
            try{
                $pdo = new PDO("mysql:host=$servername;dbname=micro-url", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion reussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

         
            //REQUETE SQL

            //Ajout mot cles
            INSERT INTO `motcles` (`id`, `contenu`) VALUES (NULL, 'technologie')
            INSERT INTO `motcles` (`id`, `contenu`) VALUES (NULL, 'technologie')

            //Ajout URL
            INSERT INTO `url` (`id`, `url`, `shortcut`, `datetime`, `description`) VALUES (NULL, 'https://www.udemy.com/course/the-complete-javascript-course/learn/lecture/22649083#overview', 'fzfzfzf', current_timestamp(), 'site apprentissage en ligne')

            //LIER id et URL cree
            INSERT INTO `url_motcles` (`url_id`, `id_motcles`) VALUES ('9', '46')


            //Ajout mot cles
            $motcles = $pdo->prepare("INSERT INTO motcles(contenu) VALUE(:key)"); 
            $motcles->execute(array('key'=>'sport'));
            //Recuperation id mot cles cree
            $requete = $pdo->query('SELECT id FROM motcles WHERE contenu="loisir"');
            //query() retourne un objet
            $id = $requete->fetch();
            //fetch renvoi une ligne de tableau qui correspond
            echo $id['id']; // on affiche le resultat de l'id
      


            //Ajout Deuxieme mot cles
            $motcles2 = $pdo->prepare("INSERT INTO motcles(contenu) VALUE(:key)"); 
            $motcles2->execute(array('key'=>'eco'));
            //Recuperation id mot cles cree
            $requete = $pdo->query('SELECT id FROM motcles WHERE contenu="eco"');
            //query() retourne un objet
            $id2 = $requete->fetch();
            //fetch renvoi une ligne de tableau qui correspond
            echo $id2['id']; // on affiche le resultat de l'id

            //Ajout URL

            $url = $pdo->prepare("INSERT INTO url(url,shortcut,description) VALUE(:url,:shortcut,:description)"); 
            $url->execute(array('url'=>'https://www.php.net/manual/fr/pdo.query.php',
                                'shortcut'=>'eozfoj',
                                'description'=>'Tutoriel en français'
                                  ));

                                   

            //Lien entre mot cles et url cree
            $requete = $pdo->exec('INSERT INTO url_motcles(url_id,id_motcles) VALUES (5,4)');
            $requete = $pdo->exec('INSERT INTO url_motcles(url_id,id_motcles) VALUES (5,29)');                   










           /*  $id = $pdo->lastInsertId(); // Fonction permet de récuperer le dernier id insere dans la table       
            
            echo $id; */
            
            
            /*  $url = $pdo->exec('INSERT INTO url(url, shortcut,datetime,description) VALUE("https://www.youtube.com/watch?v=AgzD0NOPp9Q","voyage85",NOW(),"site de voyage")'*/

?>