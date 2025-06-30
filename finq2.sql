CREATE TABLE malicsi (
    FIRST_NAME VARCHAR(50) NOT NULL,
    LAST_NAME VARCHAR(50) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    CONFIRMATION_EMAIL VARCHAR(50) NOT NULL,
    FIRST_ANSWER VARCHAR(3) NOT NULL,
    SECOND_ANSWER VARCHAR(3) NOT NULL
)

-- create table malicsi_2 just like malicsi but the FIRST_ANSWER and SECOND_ANSWER columns are of type BOOLEAN
-- CREATE TABLE MALICSI_2 (
--     FIRST_NAME VARCHAR(50) NOT NULL,
--     LAST_NAME VARCHAR(50) NOT NULL,
--     EMAIL VARCHAR(50) NOT NULL,
--     FIRST_ANSWER BOOLEAN NOT NULL,
--     SECOND_ANSWER BOOLEAN NOT NULL
-- );

INSERT INTO malicsi (FIRST_NAME, LAST_NAME, EMAIL, CONFIRMATION_EMAIL, FIRST_ANSWER, SECOND_ANSWER)
VALUES ('Allen', 'Ramirez', 'ramirez.allen@ue.edu.ph', 'ramirez.allen@ue.edu.ph', 'YES', 'YES'),
       ('Nicole', 'Pascual', 'pascual.nicole@ue.edu.ph', 'pascual.nicole@ue.edu.ph', 'YES', 'NO'),
       ('Joshua', 'Miralles', 'miralles.joshua@ue.edu.ph', 'miralles.joshua@ue.edu.ph', 'NO', 'NO')

-- changed data types of FIRST_ANSWER and SECOND_ANSWER to VARCHAR(3)

