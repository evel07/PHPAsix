CREATE TABLE books ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,    
    author VARCHAR(255) NOT NULL,
    releaseYear INT NOT NULL);

INSERT INTO books (name, author, releaseYear) 
VALUES ('Dune', 'Frank Herbert', 1965),
       ('The Hobbit', 'J. R. R. Tolkien', 1937),
       ('The Lord of the Rings: The Fellowship of the Ring', 'J. R. R. Tolkien', 1954),
       ('Harry Potter: The Philosopher\s' 'Stone', 'J. K. Rowling', 1997),
       ('A Song of Ice and Fire: A Game of Thrones', 'George R. R. Martin', 1996),
       ('Foundation', 'Isaac Asimov', 1951),
       ('Do Androids Dream of Electric Sheep?', 'Philip K. Dick', 1968);


CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    driver VARCHAR(255) NOT NULL,
    max_speed DECIMAL(5,2) NOT NULL
);

INSERT INTO vehicles (model, year, driver, max_speed) 
VALUES ('Toyota Supra', 1994, 'Brian O\"Conner"', 240.50);
       ('Dodge Charger', 1970, 'Dominic Toretto', 220.00);
       ('Nissan Skyline GT-R', 1999, 'Brian O\"Conner"', 250.00);
       ('Ford GT40', 2005, 'Dominic Toretto', 300.00);
       ('Chevrolet Camaro', 1969, 'Roman Pearce', 210.75);
