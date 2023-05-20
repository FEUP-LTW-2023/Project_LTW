drop table if exists Account;
drop table if exists Ticket;


create table Account
(
    id integer primary key not null autoincrement,
    username varchar(255) not null unique,
    email varchar(255) not null unique,
    password nvarchar(255) not null,
    name varchar(255) not null,
    role varchar(255) not null,
);

create table Ticket
(
    id integer primary key not null autoincrement,
    author integer not null references Account(id),
    agent integer references Account(id),
    title varchar(255),
    description varchar(255),
    datecreated timestamp default current_timestamp
);
