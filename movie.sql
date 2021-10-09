CREATE TABLE MOVIE(MNAME varchar(30),MACTOR varchar(30),MACTRESS varchar(30),YOR int(4), DIRNAME varchar(30));

INSERT INTO `movie` (`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES ('Shutter Island','Leonardo DiCaprio','Emily Mortimer','2010','Martin Scorsese');
INSERT INTO `movie` (`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES('Andhadhun','Ayushmann Khurana','Radhika Apte','2018','Sriram Raghavan');
INSERT INTO `movie` (`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES('Article 15','Ayushmann Khurana','Nassar','2019','Anubhav Sinha');
INSERT INTO `movie` (`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES ('Mirage', 'Álvaro Morte', 'Adriana Ugarte', '2018', 'Oriol Paulo');
INSERT INTO `movie`(`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES ('Enola Holmes','Henry Cavill','Millie B Brown','2020','Harry Bradbeer');
INSERT INTO `movie`(`MNAME`, `MACTOR`, `MACTRESS`, `YOR`, `DIRNAME`) VALUES ('U Turn','Nayak','Samantha Akkineni','2018','Pawan Kumar');

SELECT * FROM movie;

SELECT * FROM movie WHERE YOR=2018;

SELECT MNAME,YOR FROM movie WHERE MACTOR LIKE 'Ay__%';

SELECT * FROM movie ORDER BY MNAME;

SELECT MNAME,YOR FROM movie WHERE YOR BETWEEN 2018 AND 2019;



