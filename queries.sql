use db_hms;

drop table if exists user_role;
create table user_role(
	id int(10) primary key auto_increment,
	name varchar(30)
);
insert into user_role(name) values('Admin');
insert into user_role(name) values('Standard');

drop table if exists users;
create table users(
	id int(10) primary key auto_increment,
	name varchar(45),
	email varchar(50) unique,
	password varchar(50),
	role_id int(10)
);
insert into users(name, email, password, role_id) values('Sapayth Hossain', 'safayet.qubee@gmail.com', '12345', 1);
insert into users(name, email, password, role_id) values('Waish Chowdhury', 'waish@gmail.com', '12345', 2);
insert into users(name, email, password, role_id) values('Munna Ahsan', 'munna@gmail.com', '12345', 2);
