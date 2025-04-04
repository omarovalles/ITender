
create table products(
id int primary key auto_increment,
productname varchar(100) not null,
price double not null,
stock int not null,
category varchar(50) not null,
foto text not null

);


select * from products;