# ACTIVITY 1
CREATE DATABASE SUMMER;

CREATE TABLE maranion_malicsi_books (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    TITLE VARCHAR(100) NOT NULL,
    AUTHOR VARCHAR(100) NOT NULL,
    COPYRIGHT_YEAR INT NOT NULL,
    PUBLICATION VARCHAR(100) NOT NULL,
    CALL_NUMBER VARCHAR(50) NOT NULL,
    NO_OF_COPIES INT NOT NULL,
);

INSERT INTO maranion_malicsi_books (BOOK_ID, TITLE, AUTHOR, COPYRIGHT, PUBLICATION, CALL_NUMBER, NO_OF_COPIES)
VALUES (1, 'Game development and simulation with unreal technology', 'Tavakkoli, Alireza', 2019, 'Boca Raton: CRC Press', 'QA76.76.C672 .T38 2019', 9),
(2, 'Programming languages and systems :28 European Symposium on Programming. ESOP 2019 [eBook', 'Luis Caires, editor.', 2019, 'Portugal: Springer Open', 'QA 76.54 2019 (Online Access)',  1), 
(3, 'Discovering computers, essential 2018: digital technology, data, and devices essentials', 'Misty E. Vermaat', 2018, 'Australia: Cengage Learning', 'QA76.5 .D57 2018', 4),
(4, 'New perspectives on HTML5, CSS3, and Javascript', 'Patrick Carey', 2018, 'Australia Cengage Learning', 'QA76.76.H94 .C32 2018', 11),
(5, 'Advanced Programming and Design', 'Kevin McCombs', 2017, 'Australia: Cengage Learning', 'Ref TJ211.495 .M32 2017', 15),
(6, 'Coding All In One for Dummies', 'Nikhil Abraham', 2017, 'Hoboken, NJ: John Wiley & Sons, Inc.', 'QA76.6 .C62 2017', 6),
(7, 'HTML5andCSS3, illustrated introductory', ' Vodnik, Sash', 2017, 'Australia: Cengage Learning', 'QA76.76.H94.V622017', 1),
(8, 'An Introduction to HTML5 Game Development with Phaser.js/ [eBook]', 'Travis Faas', 2017, 'Boca Raton:AK Peters/CRC Press', 'QA76.76.C672.F3220179 OnlineAccess)', 5),
(9, 'New perspectives on HTML5 and CSS3 comprehensive', 'Patrick Carey', 2017, 'Australia: Cengage Learning', 'QA76.76.H94.C372017', 2),
(10, 'Transformations: 7 roles to drive change by design', 'Joyce Yee', 2017, 'Amsterdam: BIS Publishers', 'QA76.9.H85.Y432017', 10);

-- 2. Display the books that has eight (8) copies and above.
SELECT * FROM maranion_malicsi_books
WHERE NO_OF_COPIES >= 8;

-- Display the book that has less than five (5) copies.
SELECT * FROM maranion_malicsi_books
WHERE NO_OF_COPIES < 5;

INSERT INTO maranion_malicsi_books (BOOK_ID, TITLE, AUTHOR, COPYRIGHT, PUBLICATION, CALL_NUMBER, NO_OF_COPIES)
VALUES (11, 'Web design with HTML5 & CSS3: comprehensive', 'Jessica Mennick', 2017, 'Australia : Cengage Learning', 'TK5105.888 .M56 2017', 7),
(12, 'Adventures in coding', 'Eva Holland', 2016, 'Indianapolis, IN : John Wiley and Sons', 'QA76.6 .H64 2016 ', 1),

-- Change the number of copies of the book “HTML 5 and CSS3, illustrated introductory” into 4.
UPDATE maranion_malicsi_books
SET NO_OF_COPIES = 4
WHERE TITLE = 'HTML5andCSS3, illustrated introductory';

--How many books were copyrighted in year 2016?
SELECT COUNT(*) AS TotalBooks2016
FROM maranion_malicsi_books
WHERE COPYRIGHT = 2016;

--How many books were published in Australia?
SELECT COUNT(*) AS TotalBooksAustralia
FROM maranion_malicsi_books
WHERE PUBLICATION LIKE 'Australia%';

--Display distinct publishers.
SELECT DISTINCT PUBLICATION
FROM maranion_malicsi_books;

--change the publisher name of book_id from 3, 4, 7, 9, and 11 to Australia: Cengage Learning
UPDATE maranion_malicsi_books
SET PUBLICATION = 'Australia: Cengage Learning'
WHERE BOOK_ID IN (3, 4, 7, 9, 11);

--Display the book that has “HTML5” on their title.
SELECT * FROM maranion_malicsi_books
WHERE TITLE LIKE '%HTML5%' OR '%HTML 5%';

--UPDATE THE BOOK TITLE OF BOOK_ID 7 TO  HTML 5 and CSS3, illustrated introductory
UPDATE maranion_malicsi_books
SET TITLE = 'HTML5 and CSS3, illustrated introductory'
WHERE BOOK_ID = 7;

--Display the book written by Patrick Carey.
SELECT * FROM maranion_malicsi_books
WHERE AUTHOR = 'Patrick Carey';

--Display the books with copyright year 2018 up to the most recent copyright year. Display the recent first.
SELECT * FROM maranion_malicsi_books
WHERE COPYRIGHT >= 2018 ORDER BY COPYRIGHT DESC;

