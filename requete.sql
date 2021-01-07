//REQUETE SQL

//Ajout mot cles
    INSERT INTO `motcles` (`id`, `contenu`) VALUES (NULL, 'techno')
    INSERT INTO `motcles` (`id`, `contenu`) VALUES (NULL, 'societe')

//Ajout URL
    INSERT INTO `url` (`id`, `url`, `shortcut`, `datetime`, `description`) VALUES (NULL, 'https://www.udemy.com/course/the-complete-javascript-course/learn/lecture/22649083#overview', 'fzfzfzf', current_timestamp(), 'site apprentissage en ligne')

//LIER id et URL cree
    INSERT INTO `url_motcles` (`url_id`, `id_motcles`) VALUES ('9', '46')