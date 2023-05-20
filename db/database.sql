drop table if exists Account;
drop table if exists Ticket;


create table Account
(
    id integer primary key autoincrement not null,
    username varchar(255) not null unique,
    email varchar(255) not null unique,
    password nvarchar(255) not null,
    name varchar(255),
    role varchar(255)
);

create table Ticket
(
    id integer primary key autoincrement not null,
    author integer not null references Account(id),
    agent integer references Account(id),
    title varchar(255),
    description varchar(255),
    datecreated timestamp default current_timestamp
);
