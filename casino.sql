CREATE database casino;
USE casino;

CREATE table users (
id int unsigned primary key auto_increment,
name varchar (255) not null default '',
email varchar (255) unique not null,
password varchar (255),
time_created timestamp
);

CREATE table lists (
id int unsigned primary key auto_increment,
flag varchar(255),
logo varchar (255),
name varchar (255),
welcome_bonus_1 varchar (255),
welcome_bonus_2 varchar (255),
welcome_bonus_3 varchar (255),
welcome_bonus_4 varchar (255),
user_rating int,
rating float,
time_created timestamp
);

CREATE table info (
id int unsigned primary key auto_increment,
user_ip varchar (255),
date_time timestamp,
button_id int
);

INSERT INTO `users` (`name`, `email`, `password`)
VALUES
('admin', 'admin@gmail.com', 'admin');

INSERT INTO `lists` (`flag`, `logo`, `name`, `welcome_bonus_1`, `welcome_bonus_2`, `welcome_bonus_3`, `welcome_bonus_4`, `user_rating`, `rating`)
VALUES
('PLAYER FAVOURITE', '../images/playzee.png', 'Playzee', '100% Up to', '€1500', '+150 Zee Spins', '+500 Zee Points', '2589', '10.0'),
('TRENDING', '../images/machance.png', 'Machance', '200% Up to', '€500', '+20 FREE SPINS', null, '2063', '9.9'),
('NUMBER 1 IN EUROPE', '../images/intense.png', 'Intense', '200% Up to', '€3000', '+30 FREE SPINS', null, '1975', '9.8'),
('EXCLUSIVE', '../images/leovegas.png', 'Leovegas', '100% Up to', '€200', '+25 Free spins on Book fo Dead', null, '1890', '9.4'),
(null, '../images/casumo.png', 'Castumo', 'Welcome Bonus', '€250', '+20 Free Spins', null, '1816', '9.3');
