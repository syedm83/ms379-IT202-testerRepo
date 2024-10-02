-- Active: 1725560574054@@sql1.njit.edu@3306@ms379
CREATE TABLE bowlers
(bowlerid int primary key,
name varchar(100),
address varchar(200),
phone varchar(20));

Query OK, 0 rows affected (0.28 sec))

INSERT INTO bowlers VALUES (100, 'Rich', '123 Main St.', '201-000-0000')

Query OK, 1 row affected (0.08 sec)

INSERT INTO bowlers VALUES (101, 'Barbara', '123 Other St.', "555-000-0000")

Query OK, 1 row affecter (0.10 sec)

INSERT INTO bowlers VALUES (102, 'Kelly', '200 Other St.', "321-000-0000")

Query OK, 1 row affecter (0.30 sec)

INSERT INTO bowlers VALUES (103, 'John', '300 Main St.', "102-000-0000")

Query OK, 1 row affecter (0.10 sec)

select * from bowlers

CREATE TABLE games
(gameid int auto_increment primary key,
bowlerid int,
score int);

Query OK, 0 rows affected (0.22 sec)

INSERT INTO games (bowlerid, score) VALUES (100, 110);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (100, 115);

Query OK, 1 row affected (0.08 sec)

INSERT INTO games (bowlerid, score) VALUES (100, 105);

Query OK, 1 row affected (0.05 sec)

INSERT INTO games (bowlerid, score) VALUES (101, 110);

Query OK, 1 row affected (0.11 sec)

INSERT INTO games (bowlerid, score) VALUES (101, 112);

Query OK, 1 row affected (0.06 sec)

INSERT INTO games (bowlerid, score) VALUES (101, 130);

Query OK, 1 row affected (0.10 sec)
 

select * from games

INSERT INTO games (bowlerid, score) VALUES (102, 150);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (102, 140);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (102, 160);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (103, 100);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (103, 120);

Query OK, 1 row affected (0.10 sec)

INSERT INTO games (bowlerid, score) VALUES (103, 140);

Query OK, 1 row affected (0.10 sec)

 

select * from games

SELECT bowlerid, name FROM bowlers ORDER BY name

SELECT COUNT(score) AS games, AVG(score) AS average FROM games WHERE bowlerid = 102

SELECT COUNT(score) AS games, AVG(score) AS average FROM games WHERE bowlerid = 103

SELECT * FROM games JOIN bowlers ON games.bowlerid = bowlers.bowlerid WHERE games.bowlerid = 100;
SELECT * FROM games JOIN bowlers ON games.bowlerid = bowlers.bowlerid WHERE games.bowlerid = 101;
SELECT * FROM games JOIN bowlers ON games.bowlerid = bowlers.bowlerid WHERE games.bowlerid = 102;
SELECT * FROM games JOIN bowlers ON games.bowlerid = bowlers.bowlerid WHERE games.bowlerid = 103;

