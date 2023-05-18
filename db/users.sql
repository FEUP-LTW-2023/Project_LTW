create table users(
    id integer primary key autoincrement,
    username varchar(255) not null,
    name varchar(255),
    password varchar(255) not null,
    email varchar(255) not null,
    datecreated timestamp default current_timestamp,
    role varchar(255)
);