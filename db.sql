CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(30),
    description VARCHAR (255)
);
CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    username VARCHAR(30),
    paword VARCHAR (30),
    email VARCHAR (50),
    role_id INT,
    Foreign Key (role_id) REFERENCES roles (id),
    phone VARCHAR(30),
    cin VARCHAR (30)
);
CREATE TABLE Articles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(30) NOT NULL,
    contenu VARCHAR(255),
    date_de_creation TIMESTAMP DEFAULT NOW(),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES utilisateurs (id)
);
