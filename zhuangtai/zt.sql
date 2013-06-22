
create table user
	(
		username varchar(16) not null primary key,
		passwd char(40) not null,
		email varchar(40) not null
		);

create table action
	(
		username varchar(16) not null,
		writing text not null,
		title varchar(100) not null
		);

create table friend
	(
		username varchar(16) not null,
		friendname varchar(16) not null
		);
