CREATE TABLE users (
	id varchar(255) UNIQUE NOT NULL,
	name varchar(50) NOT NULL,
	last_name varchar(50) NOT NULL,
	email varchar(100) NOT NULL UNIQUE,
	phone_numbers varchar(50) NOT NULL,
	birth_day datetime NOT NULL
);
