--Code for the form_submissions table to store contents of contact form in main.php
create table form_submissions (
    id int(11) primary key auto_increment not null,
    firstName varchar(128) not null,
    lastName varchar(128) not null,
    emailId varchar(128) not null,
    message varchar(500) not null
);