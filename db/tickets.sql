create table tickets(
    id integer autoincrement primary key,
    author integer not null references users(id),
    agent integer references users(id),
    title varchar(255),
    description varchar(255),
    datecreated timestamp default current_timestamp
);