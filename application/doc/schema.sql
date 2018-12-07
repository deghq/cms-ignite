create database cms_ignite;
use cms_ignite;

create table pages(
  id integer not null primary key auto_increment,
  title varchar(255),
  content mediumtext
);

create table users(
  id integer not null primary key auto_increment,
  name varchar(255),
  password varchar(255)
);
alter table users add username varchar(255);
alter table users add email varchar(255);

create table posts(
  id integer not null primary key auto_increment,
  title varchar(255),
  content mediumtext
);
