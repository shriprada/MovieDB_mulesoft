<?php

include 'connect.php'

CREATE TABLE MOVIES(Movie_name varchar(40),Actor varchar(40),Actress varchar(40),YOR int(4), Director varchar(40));

INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES ('Oh My God', 'Paresh Rawal', 'Ashvini Yardi', 2012, 'Umesh Shukla');
INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES ('Shaadi Mai Zaroor Aana', 'Rajkumar Rao', 'Kriti Karbandha', 2017, 'Ratnaa Sinha');
INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES ('PK', 'Aamir Khan', 'Anushka Sharma', 2014, 'Rajkumar Hirani');
INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES ('3 Idiots', 'Aamir Khan', 'Kareena Kapoor', 2009, 'Rajkumar Hirani');
INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES (' chhichhore', 'Sushanth Singh Rajput', 'Shraddha Kapoor', 2019, 'Nitesh Tiwari');
INSERT INTO `movies` (`Movie_name`, `Actor`, `Actress`, `YOR`, `Director`) VALUES ('Tum Mile', 'Emraan Hashmi', 'Soha Ali Khan', 2009, 'Kunal Deshmukh');

SELECT * FROM movies;

SELECT * FROM movies WHERE YOR	= 2009;

SELECT Movie_name FROM movies WHERE Actor LIKE 'A___%';

SELECT * FROM movies WHERE YOR IN (2009,2012,2014);

SELECT COUNT(Movie_name) FROM movies WHERE Actor = 'AAMIR KHAN';

SELECT * FROM movies ORDER BY Movie_name DESC;

SELECT Movie_name FROM movies WHERE YOR BETWEEN 2012 AND 2019;

SELECT Movie_name FROM movies WHERE NOT Director = 'Rajkumar Hirani';

?>
