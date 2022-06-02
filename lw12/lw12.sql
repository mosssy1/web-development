USE UniversityWeb
CREATE TABLE faculty
(
	id INT IDENTITY(1,1),
	name NVARCHAR(100),
	PRIMARY KEY (id)
)

CREATE TABLE class
(
	id INT IDENTITY(1,1),
	name NVARCHAR(100),
	faculty_id		INT,
	PRIMARY KEY (id),
	FOREIGN KEY (faculty_id) REFERENCES faculty(id)
)

CREATE TABLE student
(
	id INT IDENTITY(1,1),
	name NVARCHAR(100),
	surname NVARCHAR(100),
	age INT,
	class_id INT,
	PRIMARY KEY (id),
	FOREIGN KEY (class_id) REFERENCES class(id)
)

INSERT INTO faculty (name)
VALUES 
	('����������'),
	('��������'),
	('���������')

INSERT INTO class (name, faculty_id)
VALUES
	('�-1', 1),
    ('�-2', 1),
    ('�-3', 1),
    ('�-1', 2),
    ('�-2', 2),
    ('�-3', 2),
    ('�-1', 3),
    ('�-2', 3),
    ('�-3', 3)

INSERT INTO student (name, surname, age, class_id)
VALUES
    ('�����', '������', 18, 1),
	('���', '�����', 18, 1),
	('��������', '���������', 18,1),
	('������', '���������', 19, 1),
	('����', '���', 18, 1),
	('������', '����', 46, 2),
	('������', '������', 34, 2),
	('����', '������', 33, 2),
	('�����', '�����', 43, 2),
	('�����', '�������', 45, 2),
	('������', '��������', 99, 3),
	('�������', '�����������', 68, 3),
	('�����', '�����', 56, 3),
	('������', '������', 60, 3),
	('�����', '�����', 53, 3),
    ('�����', '������', 19, 4),
	('�������', '����', 18, 4),
	('�����', '���������', 16, 4),
	('�������', '�����', 18, 4),
	('������', '�����', 19, 4),
	('�������', '�����', 35, 5),
	('����������', '����������', 36, 5),
	('��������', '������', 34, 5),
	('������', '������', 37, 5),
	('�����', '����', 45, 5),
	('���', '�����', 50, 6),
	('�������', '��������', 74, 6),
	('�������', '�������', 66, 6),
	('�������', '����', 65, 6),
	('���������', '����', 67, 6),
	('�����', '�����', 18, 7),
	('�������', '������', 19, 7),
	('����', '����', 20, 7),
	('�����', '���', 18, 7),
	('�����', '������', 19, 7),
	('���������', '������', 36, 8),
	('�����������', '������', 43, 8),
	('�������', '�������', 40, 8),
	('����������', '�������', 48, 8),
	('��������', '�������', 30, 8),
	('������', '����������', 81, 9),
	('�����', '������', 14, 9),
	('�����', '���������', 28, 9),
	('�������', '������', 68, 9),
	('�������', '���������', 50, 9)

SELECT * FROM faculty
SELECT * FROM class
SELECT * FROM student

SELECT
    student.name AS ���,
	student.surname AS �������,
    student.age AS �������,
    class.name AS ������
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	student.age = 19;


SELECT
    student.name AS ���,
	student.surname AS �������,
	class.name AS ������
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	class.name = '�-2';


SELECT
    student.name AS ���,
	student.surname AS �������,
    faculty.name AS ���������
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
	faculty.name = '����������'


SELECT
	student.id,
	student.name AS ���,
	student.surname AS �������,
    class.name AS ������,
    faculty.name AS ���������
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
    student.name = '���' AND student.surname = '�����';