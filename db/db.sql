create table User(
    id int not null,
    username text not null,
    email text not null,
    password text not null,
    status text
);  

create table Ticket(
    id int not null,
    author int REFERENCES User(id),
    agent int REFERENCES User(id),
    datetimecreated datetime,
    state text,
    title text,
    description text,
    department text,
    priority int
);