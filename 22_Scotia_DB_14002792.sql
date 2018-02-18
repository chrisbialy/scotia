drop table if exists reserve;
drop table if exists booking_customer;
drop table if exists cruise;
drop table if exists boat;
drop table if exists orderline;
drop table if exists oorder;
drop table if exists stock;
drop table if exists customer;
drop table if exists admin;
drop table if exists publication;
drop table if exists newsletter;
drop table if exists donate;

create table donate
(
id int(11) NOT NULL AUTO_INCREMENT,
product_code varchar(60) NOT NULL,
product_name varchar(60) NOT NULL,
product_desc tinytext NOT NULL,
product_img_name varchar(60) NOT NULL,
price decimal(10,2) NOT NULL,
stockqty int(6), 
PRIMARY KEY (`id`),
UNIQUE KEY `product_code` (`product_code`)
);

CREATE TABLE newsletter (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  email varchar(30) NOT NULL,
  PRIMARY KEY (id)
) ;

CREATE TABLE publication (
  id int(11) NOT NULL AUTO_INCREMENT,
  year date not null,
  type varchar(30) NOT NULL,
  publication varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ;

CREATE TABLE admin (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(30) NOT NULL,
  password varchar(30) NOT NULL,
  PRIMARY KEY (id)
) ;


create table customer (
	userid		int(5) NOT NULL AUTO_INCREMENT,
	username	varchar(20) not null,
	userpass	char(64) not null,
	salt		char(32) not null,
	firstname	varchar(30) DEFAULT NULL,
	surname		varchar(30) DEFAULT NULL,
	dob			date not null,
	emailadd	varchar(60) not null,
	usertype	int(1) not null default 2,
	tnc			int(1) not null,
	sessionid	varchar(64) DEFAULT NULL,
	primary key (userid)
) ;

create table stock
(
product_code varchar(60) NOT NULL,
id int(11) NOT NULL,
product_name varchar(60) NOT NULL,
product_desc tinytext NOT NULL,
product_img_name varchar(60) NOT NULL,
price decimal(10,2) NOT NULL,
stockqty int(6), 
PRIMARY KEY (product_code,id)
);

create table oorder
(
orderno int(10) NOT NULL auto_increment,
userid int(5),
firstname varchar(20) NOT NULL,
surname varchar(20) NOT NULL,
emailadd varchar(20) NOT NULL,
street varchar(20) NOT NULL,
town varchar(20) NOT NULL,
postcode varchar(10) NOT NULL,
primary key (orderno)
);


create table orderline
(
orderno int(10) NOT NULL,
product_code varchar(60) NOT NULL,
qty int(3),
primary key (orderno,product_code),
foreign key (orderno) references oorder(orderno),
foreign key (product_code) references stock(product_code)
);

create table boat
(
boat_id int(10) 	NOT NULL,
boat_name varchar(60) NOT NULL,
boat_type varchar(60) NOT NULL,
boat_desc tinytext NOT NULL,
boat_img_name varchar(60) NOT NULL,
qty int(3),
primary key (boat_id)
);

create table cruise
(
id int(11) 	NOT NULL AUTO_INCREMENT,
cruise varchar(300) NOT NULL,
price varchar(30) NOT NULL,
numseats int(30) NOT NULL,
type varchar(300) NOT NULL,
time varchar(100) NOT NULL,
primary key (id)
);

create table booking_customer
(
id int(11) 	NOT NULL AUTO_INCREMENT,
userid int(5) NOT NULL,
fname varchar(30) NOT NULL,
lname varchar(30) NOT NULL,
contact varchar(20) NOT NULL,
address varchar(300) NOT NULL,
boat varchar(30) NOT NULL,
transactionum varchar(10) NOT NULL,
payable varchar(11) NOT NULL,
status varchar(100) NOT NULL,
setnumber varchar(100) NOT NULL,
primary key (id)
);

CREATE TABLE  reserve (
  id int(11) NOT NULL AUTO_INCREMENT,
  date varchar(11) NOT NULL,
  boat varchar(11) NOT NULL,
  seat_reserve varchar(11) NOT NULL,
  transactionnum varchar(10) NOT NULL,
  seat varchar(100) NOT NULL,
  PRIMARY KEY (id)
);


INSERT INTO donate (id,product_code,product_name,product_desc,product_img_name, price,stockqty) VALUES
(1, 'ph7', 'Donate 1', 'Donate SSTL !', 'donate1.jpg', 1.00,1000),
(2, 'ph8', 'Donate 2', 'Donate SSTL !', 'donate2.jpg', 50.00,1000),
(3, 'ph9', 'Donate 3', 'Donate SSTL !', 'donate3.jpg', 100.00,1000);


INSERT INTO publication (id, year, type,publication) VALUES
(1, '2013-01-01','Jounal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu eleifend leo. Ut pretium nisi sit amet fringilla fermentum. Donec velit orci, faucibus vel tellus nec, vehicula varius neque. Duis ultricies pharetra congue. Cras pretium lobortis nulla non posuere. Nulla scelerisque sodales malesuada. Nunc eu ante vitae mauris euismod suscipit.'),
(2, '2016-10-19','Conference', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu eleifend leo. Ut pretium nisi sit amet fringilla fermentum. Donec velit orci, faucibus vel tellus nec, vehicula varius neque. Duis ultricies pharetra congue. Cras pretium lobortis nulla non posuere. Nulla scelerisque sodales malesuada. Nunc eu ante vitae mauris euismod suscipit.');


INSERT INTO admin (id, username, password) VALUES
(1, 'admin', 'admin');

INSERT INTO booking_customer (id,userid, fname, lname, contact, address, boat, transactionum, payable, status, setnumber) VALUES
(2,1, 'Chris', 'Bialy', '088421', '10 High St, London', '1', 'kd77mzfy', '1500', 'Onboard', '1'),
(3,2, 'Paul', 'Black', '55884', ' 66 Apple Sq, Liverpool', '1', 'nidsyeyg', '7500', 'Not Void', '1,2,3,4,5'),
(4,3, 'Kimberley', 'Morgan', '22222', '11 Long St, Dundee', '1', 'v53zohwk', '6000', 'Confirmed', '1,2,3,4'),
(5,4, 'Anna', 'Mcdonald', '33369555', '74 Atholl Rd, Perth', '1', 's4xf7qkq', '13500', 'Processing', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(6,5, 'Julie', 'Kovalsky', '04445588', '55 Glasgow Road, Edinburgh', '1', 'fhk7qarc', '6000', 'Not Confirmed', '1, 2, 3, 4, '),
(7,1, 'Chris', 'Bialy', '088421', '10 High St, London', '4', 'rrty56', '6000', 'Confirmed', '1,2,3,4'),
(8,1, 'Chris', 'Bialy', '088421', '10 High St, London', '2', '444rrr', '6000', 'Not Confirmed', '1,2');


INSERT INTO stock (product_code,id,product_name,product_desc,product_img_name, price,stockqty) VALUES
('ph1', 1, 'Keyring', 'Di sertakan secara rambang yang  tidak . Jika anda ingin  ', 'kring.jpg', 24.99,10),
('ph2', 2, 'T-shirt', 'Ia menggunakan kamus yang mengandungi   ayat , bersama dan', 'tshirt.jpg', 19.99,8),
('ph3', 3, 'Bell', 'Ada banyak versi dari mukasurat- Lorem Ipsum yang sedia ada,  kebanya', 'bell.jpg', 29.99,4),
('ph4', 4, 'Bag', 'Memalukan akan terselit  di  tengah kandungan texidalam  han', 'bag.jpg', 14.99,10),
('ph5', 5, 'Hat', 'Memalukan akan terselit  di  tengah kandungan texidalam  han', 'hat.jpg', 10.99,15),
('ph6', 6, 'Torch', 'Memalukan akan terselit  di  tengah kandungan texidalam  han', 'torch.jpg', 9.99,18),
('ph7', 7, 'Donate 1', 'Donate SSTL !', 'donate1.jpg', 1.00,1000),
('ph8', 8, 'Donate 2', 'Donate SSTL !', 'donate2.jpg', 50.00,1000),
('ph9', 9, 'Donate 3', 'Donate SSTL !', 'donate3.jpg', 100.00,1000);

INSERT INTO reserve (id, date, boat, seat_reserve, transactionnum, seat) VALUES
(1, '2013-01-01', '1', '1', 'o8ey8p40', '1'),
(2, '2013-01-13', '1', '1', 'kd77mzfy', '1'),
(3, '2013-01-15', '1', '5', 'nidsyeyg', '1'),
(4, '2013-01-17', '1', '4', 'v53zohwk', '1'),
(5, '2013-01-16', '1', '9', 's4xf7qkq', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(6, '2013-01-21', '1', '4', 'fhk7qarc', '1, 2, 3, 4, '),
(7, '2013-01-21', '4', '4', 'rrty56', '1, 2,3,4 '),
(8, '2016-01-12', '3', '2', '444rrr', '1, 2 ');

INSERT INTO boat (boat_id,boat_name,boat_type,boat_desc,boat_img_name,qty) VALUES
(1, 'Morven’s Orca', 'yacht','Di secara rambang yang  tidak . Jika anda ingin ', 'yacht.jpg', 1);

INSERT INTO cruise (id,cruise,price,numseats,type,time) VALUES
(1,'Isle Of Skye',1500,5,'Normal','07:00'),
(2,'The Minch',3000,50,'Deluxe','08:00'),
(3,'Raasay',1500,10,'Deluxe','06:00'),
(4,'Barra',1500,25,'Normal','09:00');