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
    title VARCHAR(40),
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
    VALUES  ("mainSlider-lar.jpg", "images/pictures/mainSlider/large/mainSlider-lar.jpg", "Foto grande del slider de la página inicial de David Valls Gomez Web", "David Valls Gomez Web homepage's main slider large picture", "Foto gran del slider de la pagina inicial de David Valls Gomez Web", 1, 3),
            ("mainSlider-med.jpg", "images/pictures/mainSlider/medium/mainSlider-med.jpg", "Foto mediana del slider de la página inicial de David Valls Gomez Web", "David Valls Gomez Web homepage's main slider medium picture", "Foto mediana del slider de la pagina inicial de David Valls Gomez Web", 1, 2),
            ("mainSlider-sml.jpg", "images/pictures/mainSlider/small/mainSlider-sml.jpg", "Foto pequeña del slider de la página inicial de David Valls Gomez Web", "David Valls Gomez Web homepage's main slider small picture", "Foto pequenya del slider de la pagina inicial de David Valls Gomez Web", 1, 1),
            ("pictureGrid-lar-1.jpg", "images/pictures/picturesGrid/large/pictureGrid-lar-1.jpg", "Foto grande 1 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's large picture 1 ", "Foto gran 1 de la secció de fotos de David Valls Gomez Web", 2, 3),
            ("pictureGrid-lar-2.jpg", "images/pictures/picturesGrid/large/pictureGrid-lar-2.jpg", "Foto grande 2 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's large picture 2 ", "Foto gran 2 de la secció de fotos de David Valls Gomez Web", 2, 3),
            ("pictureGrid-lar-3.jpg", "images/pictures/picturesGrid/large/pictureGrid-lar-3.jpg", "Foto grande 3 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's large picture 3 ", "Foto gran 3 de la secció de fotos de David Valls Gomez Web", 2, 3),
            ("pictureGrid-lar-4.jpg", "images/pictures/picturesGrid/large/pictureGrid-lar-4.jpg", "Foto grande 4 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's large picture 4 ", "Foto gran 4 de la secció de fotos de David Valls Gomez Web", 2, 3),
            ("pictureGrid-lar-5.jpg", "images/pictures/picturesGrid/large/pictureGrid-lar-5.jpg", "Foto grande 5 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's large picture 5 ", "Foto gran 5 de la secció de fotos de David Valls Gomez Web", 2, 3),
            ("pictureGrid-med-1.jpg", "images/pictures/picturesGrid/medium/pictureGrid-med-1.jpg", "Foto mediana 1 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's medium picture 1 ", "Foto mediana 1 secció de fotoscial de David Valls Gomez Web", 2, 2),
            ("pictureGrid-med-2.jpg", "images/pictures/picturesGrid/medium/pictureGrid-med-2.jpg", "Foto mediana 2 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's medium picture 2 ", "Foto mediana 2 secció de fotoscial de David Valls Gomez Web", 2, 2),
            ("pictureGrid-med-3.jpg", "images/pictures/picturesGrid/medium/pictureGrid-med-3.jpg", "Foto mediana 3 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's medium picture 3 ", "Foto mediana 3 secció de fotoscial de David Valls Gomez Web", 2, 2),
            ("pictureGrid-med-4.jpg", "images/pictures/picturesGrid/medium/pictureGrid-med-4.jpg", "Foto mediana 4 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's medium picture 4 ", "Foto mediana 4 secció de fotoscial de David Valls Gomez Web", 2, 2),
            ("pictureGrid-med-5.jpg", "images/pictures/picturesGrid/medium/pictureGrid-med-5.jpg", "Foto mediana 5 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's medium picture 5 ", "Foto mediana 5 secció de fotoscial de David Valls Gomez Web", 2, 2),
            ("pictureGrid-sml-1.jpg", "images/pictures/picturesGrid/small/pictureGrid-sml-1.jpg", "Foto pequeña 1 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's small picture 1 ", "Foto pequenya 1 secció de fotoscial de David Valls Gomez Web", 2, 1),
            ("pictureGrid-sml-2.jpg", "images/pictures/picturesGrid/small/pictureGrid-sml-2.jpg", "Foto pequeña 2 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's small picture 2 ", "Foto pequenya 2 secció de fotoscial de David Valls Gomez Web", 2, 1),
            ("pictureGrid-sml-3.jpg", "images/pictures/picturesGrid/small/pictureGrid-sml-3.jpg", "Foto pequeña 3 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's small picture 3 ", "Foto pequenya 3 secció de fotoscial de David Valls Gomez Web", 2, 1),
            ("pictureGrid-sml-4.jpg", "images/pictures/picturesGrid/small/pictureGrid-sml-4.jpg", "Foto pequeña 4 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's small picture 4 ", "Foto pequenya 4 secció de fotoscial de David Valls Gomez Web", 2, 1),
            ("pictureGrid-sml-5.jpg", "images/pictures/picturesGrid/small/pictureGrid-sml-5.jpg", "Foto pequeña 5 de la sección de fotos David Valls Gomez Web", "David Valls Gomez Web homepage pictures section's small picture 5 ", "Foto pequenya 5 secció de fotoscial de David Valls Gomez Web", 2, 1);

INSERT INTO UserPrivileges (privilegeName)
    VALUES  ("Super Admin"),
            ("Admin"),
            ("Editor"),
            ("Author");