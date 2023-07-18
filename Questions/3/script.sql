

CREATE TABLE Teacher (
	id INT PRIMARY KEY,
	name VARCHAR(255),
	headOfGrade boolean,
	salary DECIMAL(10, 2),
	 createdAt TIMESTAMP,
    updatedAt TIMESTAMP

);

CREATE TABLE Student (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    grade INT NOT NULL,
    classTeacherID INT,
    FOREIGN KEY (classTeacherID) REFERENCES Teacher(id)
);

CREATE TABLE Subject (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    createdAt TIMESTAMP,
    updatedAt TIMESTAMP
);

CREATE TABLE Subjectable (
	id INT PRIMARY KEY,
	subjectID INT,
	subjectableID INT,
	subjectableType VARCHAR(255),
	FOREIGN KEY (subjectID) REFERENCES Subject(id)
);
