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

create table post_comments(
  id integer not null primary key auto_increment,
  post_id integer,
  user_id integer,
  comments mediumtext
);
alter table post_comments add date datetime;

create table links(
  id integer not null primary key auto_increment,
  name varchar(255)
);
alter table links add page_id integer;
alter table links add reference varchar(255);
alter table links add page_reference tinyint;
alter table links change page_reference is_page_reference tinyint;
