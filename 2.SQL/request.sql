--1. All data from tables
SELECT * FROM students
SELECT * FROM school;

--2. Only firstnames
SELECT prenom FROM students;

--3. Firstname, school and birthday
SELECT prenom, school, datenaissance FROM students;

--4. Only female students data
SELECT * FROM students

WHERE 
genre ="F"
;

--5. Charleroi school students
SELECT * FROM students

WHERE 
school = 2
;

--6.1. Firstnames by DESC order
SELECT prenom FROM students

ORDER BY 
prenom DESC
;

--6.2. 2 first students 
SELECT prenom FROM students

ORDER BY 
prenom DESC LIMIT 0.2;

--7. CREATE new row
INSERT INTO students
(nom, prenom, datenaissance, genre, school)

VALUES ('Dalor', 'Ginette', '1930-01-01', 'F', 1);

--8. Ginette gender and firstname UPDATE
-- This my belgian family name lil' cunt
UPDATE students
SET prenom = 'Omer',
    genre = 'M'
WHERE idStudent = 31
;

--9. Delete idStudent = 3
DELETE FROM students
WHERE idStudent = 3;

--10. Column changes
ALTER TABLE students
MODIFY school VARCHAR(20);

UPDATE students
SET school = "Central"
WHERE school = 1;

UPDATE students
SET school = "Anderlecht"
WHERE school = 2;