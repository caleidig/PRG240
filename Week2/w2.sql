
- create tables
	+student
	+class
	+instructor
	+enrolled
	+assigned

	create database CANVAS_KO;
		USE CANVAS_KO;

	create table student
	(
	ID INT primary key auto_increment, 
	FIRST_NAME VARCHAR (50) not null,
	LAST_NAME VARCHAR (50) not null
	);


	create table instructor
	(
	ID INT primary key auto_increment, 
	FIRST_NAME VARCHAR (50) not null,
	LAST_NAME VARCHAR (50) not null
	);

	create table enrolled
	(
		student_id INT,
		class_id CHAR(7),
		primary key (student_id, class_id)
		);

	create table assigned
	(
		instructor_id INT,
		class_id CHAR(7),
		primary key (instructor_id, class_id)
		);


	create table class
	(
	CODE CHAR(7) primary key,
	TITLE VARCHAR(60) not null,
	START DATE not null,
	CREDITS DECIMAL (2,1) not null,
	);


	insert into student (FIRST_NAME,LAST_NAME) values ('Chris','Leidig');
	insert into student (FIRST_NAME,LAST_NAME) values ('Bob','Hope');
	insert into student (FIRST_NAME,LAST_NAME) values ('Janet','Jackson');
	insert into student (FIRST_NAME,LAST_NAME) values ('Ceelo','Green');

	insert into class values('PRG_240', 'Database Programming 2', '2018-06-26',3.5);
	insert into class values('OPS_101', 'Operating System I', '2018-06-26',3.5);
	insert into class values('ISS_220', 'Computer Law', '2018-06-26', 3);

	insert into class (FIRST_NAME,LAST_NAME) values('Julien','Esposito');
	insert into class (FIRST_NAME,LAST_NAME) values('Angelo','Martinez');
	insert into class (FIRST_NAME,LAST_NAME) values('Will','Parker');

	insert into enrolled select student.id, class.code from student, class;
