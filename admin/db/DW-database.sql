/************** Database creation **************/

CREATE DATABASE davidVallsWeb;

CREATE TABLE PicSections(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    sectionName VARCHAR(20),

    PRIMARY KEY(id)
) ENGINE = innodb;

CREATE TABLE PicSizes(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    sizeName VARCHAR(20),

    PRIMARY KEY(id)
)   ENGINE = innodb;

CREATE TABLE Pictures(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(20),
    urlPic VARCHAR(100),
    picDescription VARCHAR(100),
    picDescriptionEng VARCHAR(100),
    picDescriptionCat VARCHAR(100),
    picSectionID INT UNSIGNED,
    picSizeID INT UNSIGNED,

    PRIMARY KEY(id),
    FOREIGN KEY(picSectionID) REFERENCES PicSections(id) 
        ON DELETE SET NULL
        ON UPDATE CASCADE,
    FOREIGN KEY(picSizeID) REFERENCES PicSizes(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
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
        ON DELETE SET NULL
        ON UPDATE CASCADE
) ENGINE = innodb;
/************** !Database creation **************/

/************* Setting tables values *************/

INSERT INTO PicSections (sectionName) 
    VALUES  ("MainSlider"),
            ("PicturesGrid");

INSERT INTO PicSizes (sizeName) 
    VALUES  ("Small"),
            ("Medium"),
            ("Large");

INSERT INTO Pictures (title, urlPic, picDescription, picDescriptionEng, picDescriptionCat, picSectionID, picSizeID)
    VALUES  ("mainSlide-lar.jpg", "images/pictures/mainSlider/large/mainSlider-lar.jpg", "Foto grande del slider de la página inicial de David Valls Gomez Web", "David Valls Gomez Web homepage's main slider large picture", "Foto gran del slider de la pagina inicial de David Valls Gomez Web", 1, 3),
            ("mainSlide-med.jpg", "images/pictures/mainSlider/large/mainSlider-med.jpg", "Foto mediana del slider de la página inicial de David Valls Gomez Web", "David Valls Gomez Web homepage's main slider medium picture", "Foto mediana del slider de la pagina inicial de David Valls Gomez Web", 1, 2);

INSERT INTO UserPrivileges (privilegeName)
    VALUES  ("Super Admin"),
            ("Admin"),
            ("Editor"),
            ("Author");