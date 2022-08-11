use clientes_db;

create table cliente(
    id int not null auto_increment,
    username varchar(15) not null,
    email varchar(30) not null,
    primary key(id)
);

INSERT INTO cliente (username, email) VALUES ('Joan', 'jrossello@gmail.com');