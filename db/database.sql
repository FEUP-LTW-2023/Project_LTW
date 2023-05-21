pragma foreign_keys = on;

DROP TABLE IF EXISTS Account;
DROP TABLE IF EXISTS Ticket;
DROP TABLE IF EXISTS Department;
DROP TABLE IF EXISTS Status;
DROP TABLE IF EXISTS Priority;


create table if not exists Account
(
    id integer primary key autoincrement not null,
    username varchar(255) not null unique,
    email varchar(255) not null unique,
    password nvarchar(255) not null,
    name varchar(255),
    role varchar(255) default 'Client'
);

create table if not exists Ticket
(
    id integer primary key autoincrement not null,
    author integer not null references Account(id),
    agent integer references Account(id),
    subject varchar(255),
    description varchar(255),
    department varchar(255),
    priority varchar(255),
    status varchar(255),
    datecreated timestamp default (datetime('now', 'localtime'))
);

create table if not exists Department(
    id integer primary key autoincrement not null,
    name varchar(255) not null
);

create table if not exists Priority(
    id integer primary key autoincrement not null,
    name varchar(255) not null
);

create table if not exists Status(
    id integer primary key autoincrement not null,
    name varchar(255) not null
);

create table if not exists AgentDepartment(
    agentid integer references Account(id),
    departmentid integer references Department(id)
);

insert into Account (username, email, password, name, role) values ('pedroclient', 'pedro1@email.com', 'pedropass', 'Pedro Gomes', 'Client');
insert into Account (username, email, password, name, role) values ('pedroagent', 'pedro2@email.com', 'pedropass', 'Pedro Gomes', 'Agent');
insert into Account (username, email, password, name, role) values ('pedroadmin', 'pedro3@email.com', 'pedropass', 'Pedro Gomes', 'Admin');

insert into Department(name) values ('IT Support');
insert into Department(name) values ('Human Resources');
insert into Department(name) values ('Finance');
insert into Department(name) values ('Marketing');
insert into Department(name) values ('Administration');

insert into AgentDepartment values(2,3);
insert into AgentDepartment values(2,4);

insert into Status(name) values ('Pending Agent');
insert into Status(name) values ('Assigned');
insert into Status(name) values ('In Progress');
insert into Status(name) values ('Closed');

insert into Priority(name) values ('Low');
insert into Priority(name) values ('Medium');
insert into Priority(name) values ('High');
insert into Priority(name) values ('Urgent');
