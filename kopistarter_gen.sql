-- drop database kopistarter;
-- create database kopistarter;

use kopistarter;

create table kopistarter.role
(
	role_id int not null auto_increment primary key,
    name varchar(255) not null
);

create table kopistarter.user
(
	user_id varchar(255) primary key,
    password_hash char(60) not null,
    password_salt char(32) not null,
    name varchar(255) not null,
    role int not null,
    email varchar(255) not null,
    message text,
    foreign key (role) references role (role_id)
);

create table kopistarter.event
(
	event_id int not null auto_increment primary key,
    title varchar(255) not null,
    description text not null,
    user varchar(255) not null,
    create_time date not null,
    foreign key (user) references user (user_id)
);

create table kopistarter.contact
(
	contact_owner varchar(255) not null,
    contact_info varchar(255) not null,
    foreign key (contact_owner) references user (user_id),
    foreign key (contact_info) references user (user_id)
);

create table kopistarter.category
(
	category_id int not null auto_increment primary key,
    name varchar(100) not null
);

create table kopistarter.article
(
	article_id int not null auto_increment primary key,
    user varchar(255) not null,
    title varchar(255) not null,
    category int not null,
    description text not null,
    create_time date not null,
    foreign key (user) references user (user_id),
    foreign key (category) references category (category_id)
);
