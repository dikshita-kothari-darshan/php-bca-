-- Create Database and Table
CREATE DATABASE IF NOT EXISTS college;
USE college;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

-- Create Stored Procedures
DELIMITER $$

CREATE PROCEDURE insertStudent(IN sname VARCHAR(100), IN semail VARCHAR(100))
BEGIN
    INSERT INTO students (name, email) VALUES (sname, semail);
END$$

CREATE PROCEDURE updateStudent(IN sid INT, IN sname VARCHAR(100), IN semail VARCHAR(100))
BEGIN
    UPDATE students SET name = sname, email = semail WHERE id = sid;
END$$

CREATE PROCEDURE deleteStudent(IN sid INT)
BEGIN
    DELETE FROM students WHERE id = sid;
END$$

CREATE PROCEDURE getStudents()
BEGIN
    SELECT * FROM students;
END$$

DELIMITER ;
