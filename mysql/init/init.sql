CREATE DATABASE IF NOT EXISTS BASE;
# GRANT ALL PRIVILEGES ON BASE.* TO 'root'@'%' IDENTIFIED BY 'itsaBASE';
# GRANT ALL PRIVILEGES ON BASE.* TO 'root'@'localhost' IDENTIFIED BY 'itsaBASE';

create table BASE.storyDays
(
    id             int auto_increment unique,
    storyDayNumber int  not null,
    lastRequestDay date not null,
    constraint storyDays_pk
        primary key (id)
);

create table BASE.tasks
(
    day           date not null,
    chargeCount   int  not null,
    ballKickCount int  not null
);