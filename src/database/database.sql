SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE users (
	id varchar(255) UNIQUE NOT NULL,
	name varchar(50) NOT NULL,
	last_name varchar(50) NOT NULL,
	email varchar(100) NOT NULL UNIQUE,
	phone_numbers varchar(50) NOT NULL,
	birth_day datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE users ADD PRIMARY KEY (id);

COMMIT;
