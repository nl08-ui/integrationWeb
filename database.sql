CREATE DATABASE 'tp_netflixx_lebrand_noemie';

USE tp_netflixx_lebrand_noemie;

CREATE TABLE 'film' (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description VARCHAR(255),
    urlphoto VARCHAR(255),
    urlvideo VARCHAR(300)
);

CREATE TABLE 'user' (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO film (title, description, urlphoto, urlvideo) VALUES 
('Big George Foreman', 'Film Sport et Drame', 'https://www.tvguide.com/a/img/catalog/provider/1/2/1-13032331709.jpg', 'https://youtu.be/DdhyvfgoGhY?si=_igMR5MJAVhyJf8w'),
('Rebel Moon Partie2', 'Film SF et Action', 'https://fr.web.img6.acsta.net/pictures/24/03/18/10/54/5632331.jpg', 'https://youtu.be/T8xgMwi1Ubo?si=zoYmdjpxrBUpa2NZ'),
('Woody Woodpecker', 'Film Comique et Enfants', 'https://media.senscritique.com/media/000022014607/0/woody_woodpecker_alerte_en_colo.jpg', 'https://youtu.be/LEy1q6KBPRs?si=0MPjOSNmg_4jFTEK'),
('L Amour au pied du mur', 'Film Romantique et Comique', 'https://media.senscritique.com/media/000022048042/0/l_amour_au_pied_du_mur.jpg', 'https://youtu.be/-aTckv3cMuo?si=r1pbT4fTsdIeBfW2'),
('Mon meilleur ami', 'Film Comique et Drame', 'https://m.media-amazon.com/images/M/MV5BNTJiMWRhMzYtY2E5OC00ZjJhLTkzMDQtMzg2NzMyY2I2OTE5XkEyXkFqcGdeQXVyNjMxNDE2ODU@._V1_.jpg', 'https://youtu.be/W1pzw7bM63o?si=T0Ybz7BAUR-hioaX');

