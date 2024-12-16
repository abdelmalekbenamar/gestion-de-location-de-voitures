
create database location;
use location;

create table clients(
id int primary key auto_increment,
name varchar(50),
cin varchar(12)
);

create table cars(
id int primary key auto_increment,
name varchar(50),
rented bool,
image varchar(500),
price int
);

create table contracts(
id int primary key auto_increment,
dateBegin date,
dateEnd date,
clientId int,
carId int,
foreign key(clientId) references clients(id) on delete cascade on update cascade,
foreign key(carId) references cars(id) on delete cascade on update cascade
);

insert into clients (name, cin) values ("abdelmalek", "M125476");
insert into clients (name, cin) values ("Naaim", "M12850");
insert into clients (name, cin) values ("Ahmed", "S102358");



insert into cars (name, rented, image) values ("renault", false, "https://ligierautomotive.com/wp-content/uploads/2017/12/concept-car.jpg");
insert into cars (name, rented, image) values ("chevrolet", false, "https://imageio.forbes.com/specials-images/imageserve/5d35eacaf1176b0008974b54/0x0.jpg");
insert into cars (name, rented, image) values ("toyota", false, "https://www.kbb.com/wp-content/uploads/2022/10/2023-toyota-rav4-prime-frt-3qtr.jpg");
insert into cars (name, rented, image) values ("toyota taisor", false, "https://www.financialexpress.com/auto/images/model-urban-cruiser-taisor-seo-image-1726213978949.jpg");

update clients set name = 'Abdelkhalek' where id = 1;
update clients set cin = 'J564135' where id = 2;

delete from clients where name = 'Naaim';
select * from contracts;
use location;

select * from cars;
update cars set rented = 0;

select * from clients;
select * from contracts;
use location;
UPDATE contracts SET dateBegin = '2023-05-05', dateEnd = '2023-06-06', clientId = 13, carId = 13  WHERE id = 6;

select * from cars;
use location;
select contracts.id as id, dateBegin, dateEnd, clients.name AS clientName, cars.name AS carName FROM contracts JOIN clients ON clients.id = contracts.clientId JOIN cars ON cars.id = contracts.carId;

create table users(
	id int primary key auto_increment,
	email varchar(30) not null,
	pass varchar(30)
);
use location;
insert into users (email, pass) values ('user_one@mail.org', '123654');
insert into users (email, pass) values ('user_two@mail.org', '456987');
select * from users;
use location;
insert into users (email, pass) values ('user_1@mail.org', '123456');
insert into users (email, pass) values ('user_2@mail.org', '456789');
select * from users;
