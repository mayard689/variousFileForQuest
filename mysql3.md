mysql> insert into school (name, country, capacity) values ('Beauxbatons Academy of Magic', 'France', 550), ('Castelobruxo', 'Brazil', 380), ('Durmstrang Institute', 'Norway', 570), ('Hogwartss School of Witchcraft and Wizardry', 'United Kingdom', 450), ('Ilvermorny School of Witchcraft and Wizardry', 'USA',300), ('Koldovstoretz','Russia',125), ('Mahoutokoro School of Magic','Japan',800), ('Uagadou School of Magic', 'Uganda',350);
Query OK, 8 rows affected (0.02 sec)
Records: 8  Duplicates: 0  Warnings: 0

mysql> select * from school;
+----+----------------------------------------------+----------+----------------+
| id | name                                         | capacity | country        |
+----+----------------------------------------------+----------+----------------+
|  1 | Beauxbatons Academy of Magic                 |      550 | France         |
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Norway         |
|  4 | Hogwartss School of Witchcraft and Wizardry  |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
|  7 | Mahoutokoro School of Magic                  |      800 | Japan          |
|  8 | Uagadou School of Magic                      |      350 | Uganda         |
+----+----------------------------------------------+----------+----------------+
8 rows in set (0.00 sec)

mysql> update school set country='Sweden' where id=3;
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> update school set capacity=700 where id=7;
Query OK, 1 row affected (0.05 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> select * from school;
+----+----------------------------------------------+----------+----------------+
| id | name                                         | capacity | country        |
+----+----------------------------------------------+----------+----------------+
|  1 | Beauxbatons Academy of Magic                 |      550 | France         |
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Sweden         |
|  4 | Hogwartss School of Witchcraft and Wizardry  |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
|  7 | Mahoutokoro School of Magic                  |      700 | Japan          |
|  8 | Uagadou School of Magic                      |      350 | Uganda         |
+----+----------------------------------------------+----------+----------------+
8 rows in set (0.00 sec)

mysql> delete from school where name like '%Magic%';
Query OK, 3 rows affected (0.01 sec)

mysql> select * from school;
+----+----------------------------------------------+----------+----------------+
| id | name                                         | capacity | country        |
+----+----------------------------------------------+----------+----------------+
|  2 | Castelobruxo                                 |      380 | Brazil         |
|  3 | Durmstrang Institute                         |      570 | Sweden         |
|  4 | Hogwartss School of Witchcraft and Wizardry  |      450 | United Kingdom |
|  5 | Ilvermorny School of Witchcraft and Wizardry |      300 | USA            |
|  6 | Koldovstoretz                                |      125 | Russia         |
+----+----------------------------------------------+----------+----------------+
5 rows in set (0.00 sec)
