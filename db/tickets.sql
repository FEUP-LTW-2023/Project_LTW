create table tickets(
    id integer primary key autoincrement,
    author integer not null references users(id),
    agent integer references users(id),
    title varchar(255),
    description varchar(255),
    datecreated timestamp default current_timestamp
);