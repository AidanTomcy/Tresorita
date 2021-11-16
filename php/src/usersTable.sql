-- Code for the users table used in signing up users.
create table users (
	usersId int(11) primary key auto_increment not null,
	usersName varchar(128) not null,
	usersUid varchar(128) not null,
	usersEmail varchar(128) not null,
	usersPwd varchar(128) not null
);
