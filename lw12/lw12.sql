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
	('Гриффиндор'),
	('Слизерин'),
	('Когтевран')

INSERT INTO class (name, faculty_id)
VALUES
	('Г-1', 1),
    ('Г-2', 1),
    ('Г-3', 1),
    ('С-1', 2),
    ('С-2', 2),
    ('С-3', 2),
    ('К-1', 3),
    ('К-2', 3),
    ('К-3', 3)

INSERT INTO student (name, surname, age, class_id)
VALUES
    ('Гарри', 'Поттер', 18, 1),
	('Рон', 'Уизли', 18, 1),
	('Гермиона', 'Грейнджер', 18,1),
	('Невилл', 'Долгопупс', 19, 1),
	('Кэти', 'Бэл', 18, 1),
	('Сириус', 'Блэк', 46, 2),
	('Джеймс', 'Поттер', 34, 2),
	('Лили', 'Поттер', 33, 2),
	('Римус', 'Люпин', 43, 2),
	('Питер', 'Педигрю', 45, 2),
	('Альбус', 'Дамблдор', 99, 3),
	('Минерва', 'Макгонагалл', 68, 3),
	('Артур', 'Уизли', 56, 3),
	('Рубеус', 'Хагрид', 60, 3),
	('Молли', 'Уизли', 53, 3),
    ('Драко', 'Малфой', 19, 4),
	('Грегори', 'Гойл', 18, 4),
	('Пэнси', 'Паркинсон', 16, 4),
	('Винсент', 'Крэбб', 18, 4),
	('Маркус', 'Флинт', 19, 4),
	('Северус', 'Снейп', 35, 5),
	('Беллатриса', 'Лестрейндж', 36, 5),
	('Нарцисса', 'Малфой', 34, 5),
	('Люциус', 'Малфой', 37, 5),
	('Орион', 'Блэк', 45, 5),
	('Том', 'Реддл', 50, 6),
	('Гораций', 'Слизнорт', 74, 6),
	('Долорес', 'Амбридж', 66, 6),
	('Ругулус', 'Блэк', 65, 6),
	('Андромеда', 'Блэк', 67, 6),
	('Падма', 'Патил', 18, 7),
	('Полумна', 'Лавгут', 19, 7),
	('Чжоу', 'Шанг', 20, 7),
	('Терри', 'Бут', 18, 7),
	('Майкл', 'Корнер', 19, 7),
	('Златопуст', 'Локонс', 36, 8),
	('Ксенофилиус', 'Лавгут', 43, 8),
	('Сивилла', 'Трелони', 40, 8),
	('Миллисента', 'Багнолд', 48, 8),
	('Пенелопа', 'Кристал', 30, 8),
	('Гаррик', 'Олливандер', 81, 9),
	('Миртл', 'Уоррен', 14, 9),
	('Елена', 'Когтевран', 28, 9),
	('Флитвик', 'Филиус', 68, 9),
	('Кандида', 'Когтевран', 50, 9)

SELECT * FROM faculty
SELECT * FROM class
SELECT * FROM student

SELECT
    student.name AS Имя,
	student.surname AS Фамилия,
    student.age AS Возраст,
    class.name AS Группа
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	student.age = 19;


SELECT
    student.name AS Имя,
	student.surname AS Фамилия,
	class.name AS Группа
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	class.name = 'С-2';


SELECT
    student.name AS Имя,
	student.surname AS Фамилия,
    faculty.name AS Факультет
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
	faculty.name = 'Гриффиндор'


SELECT
	student.id,
	student.name AS Имя,
	student.surname AS Фамилия,
    class.name AS Группа,
    faculty.name AS Факультет
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
    student.name = 'Том' AND student.surname = 'Реддл';