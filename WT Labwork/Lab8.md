Starting MySQL

C:\xampp\mysql\bin>mysql -u root -p
Creating Database

MariaDB [(none)]> CREATE database gces;
Changing Active Database

MariaDB [(none)]> USE gces;
Show Database List

MariaDB [gces]> show databases;
Create Table

MariaDB [gces]> CREATE TABLE student(
    -> id int UNIQUE AUTO_INCREMENT,
    -> name varchar(30),
    -> address varchar(30),
    -> phone_number int UNIQUE,
    -> bio text
    -> );
Insert Single Data

MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) 
VALUES ("jwjwja","address",9800000000,"hello");
Insert Multiple Data

MariaDB [gces]> INSERT INTO student 
(`name`,`address`,`phone_number`,`bio`) VALUES 
("sudarshan","hemja",9837822886,"I love birds"),
("Prasanna","masbar",983728272, "I love to see nature"),
("Sandesh","birauta",8483829292,"I love colours"),
;
Rename Table

MariaDB [gces]> ALTER TABLE student
    -> RENAME TO students;
Add Column

MariaDB [gces]> ALTER TABLE students
    -> ADD (user_id int);
Update Record

MariaDB [gces]> UPDATE students
    -> SET user_id = 45
    -> WHERE id = 10;
Select Record

MariaDB [gces]> SELECT * FROM students WHERE name = "Sandesh";
MariaDB [gces]> SELECT * FROM students WHERE name LIKE "G%";
Update Record

MariaDB [gces]> UPDATE students
    -> SET address = "pokhara"
    -> WHERE id = 12
    -> ;
Delete Record

MariaDB [gces]> DELETE FROM students WHERE id = 10;
