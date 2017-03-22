create table Student(
studentId int(9) unsigned auto_increment primary key,
user_name varchar(50) not null,
user_email varchar(70),
user_pass varchar(128) not null, 
user_status enum('Y','N') not null default 'N',
user_tokenCode varchar(100) not null
unique key user_email (userEmail)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

create table Instructor(
instructorId int(9) unsigned auto_increment primary key,
inst_first_name varchar(50) not null,
inst_last_name varchar(50) not null,
inst_email varchar(70)
);

create table Course(
courseId int(12) unsigned auto_increment primary key,
instructorId int,
course_code varchar(8) not null,
course_name varchar(20) not null,
user_name varchar(50) not null,
course_rating tinyint(1) unsigned not null,
course_rating_cache float(2,1) unsigned not null default '3.0',
course_rating_count int(11) unsigned not null default '0',
course_review_date timestamp not null default current_timestamp,
course_short_description varchar(300) not null,
foreign key (instructorId) references Instructor(instructorId),
foreign key (user_name) references Student(user_name)
);

create table Rating(
ratinId int(12) unsigned auto_increment primary key,
courseId int,
user_name varchar(50) not null,
course_name varchar(20) not null,
course_code varchar(8) not null,
course_short_description varchar(300) not null,
rating int(11) not null,
rating_coment varchar(3000),
rating_date timestamp,
foreign key (user_name) references Student(user_name),
foreign key (course_name) references Course(course_name),
foreign key (course_code) references Course(course_code),
foreign key (course_short_description) references Course(course_short_description)
);

http://dev.cictspace.net/AGRANA5395/