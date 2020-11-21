CREATE DATABASE davidVallsWeb;

CREATE TABLE PicSections(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    sectionName VARCHAR(20),

    PRIMARY KEY(id)
) ENGINE = innodb;

CREATE TABLE Pictures(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(20),
    urlPic VARCHAR(100),
    picSectionID INT UNSIGNED,

    PRIMARY KEY(id),
    FOREIGN KEY(picSectionID) REFERENCES PicSections(id)
) ENGINE = innodb;

CREATE TABLE UserPrivileges(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    privilegeName VARCHAR(20),

    PRIMARY KEY(id)
) ENGINE = innodb;

CREATE TABLE Users(
    email VARCHAR(100),
    userNickName VARCHAR(100),
    userPassword CHAR(32),
    privilegeID INT UNSIGNED,

    PRIMARY KEY(email),
    FOREIGN KEY(privilegeID) REFERENCES UserPrivileges(id)
) ENGINE = innodb;