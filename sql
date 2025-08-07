CREATE TABLE student (
    Stud_ID INT PRIMARY KEY,
    NAME VARCHAR(100),
    Birth_date DATE,
    Join_date DATE
);

CREATE TABLE Instructors (
    Stud_ID INT PRIMARY KEY,
    Promo_date DATE,
    Comp_stat VARCHAR(50),
    Comp_ammount INT,
    FOREIGN KEY (Stud_ID) REFERENCES student(Stud_ID)
);

CREATE TABLE Classes (
    Class_ID INT PRIMARY KEY AUTO_INCREMENT,
    LEVEL VARCHAR(50),
    DAY VARCHAR(15),
    TIME TIME,
    LOCATION VARCHAR(100),
    Instruct_ID INT,
    FOREIGN KEY (Instruct_ID) REFERENCES Instructors(Stud_ID)
);

CREATE TABLE Class_Meet (
    Meet_ID INT PRIMARY KEY AUTO_INCREMENT,
    Class_ID INT,
    Meet_DATE DATE,
    FOREIGN KEY (Class_ID) REFERENCES Classes(Class_ID)
);

CREATE TABLE ATTENDANCE (
    Meet_ID INT,
    Stud_ID INT,
    PRIMARY KEY (Meet_ID, Stud_ID),
    FOREIGN KEY (Meet_ID) REFERENCES Class_Meet(Meet_ID),
    FOREIGN KEY (Stud_ID) REFERENCES student(Stud_ID)
);

CREATE TABLE Instruct_Meet_Roles (
    Meet_ID INT,
    Instruct_ID INT,
    ROLE VARCHAR(20),
    PRIMARY KEY (Meet_ID, Instruct_ID),
    FOREIGN KEY (Meet_ID) REFERENCES Class_Meet(Meet_ID),
    FOREIGN KEY (Instruct_ID) REFERENCES Instructors(Stud_ID)
);

CREATE TABLE Ranks (
    Rank_ID INT PRIMARY KEY AUTO_INCREMENT,
    Rank_Name VARCHAR(50),
    Belt_Color VARCHAR(30)
);

CREATE TABLE Rank_Req (
    Reg_ID INT PRIMARY KEY AUTO_INCREMENT,
    Rank_ID INT,
    Description TEXT,
    FOREIGN KEY (Rank_ID) REFERENCES Ranks(Rank_ID)
);

CREATE TABLE Stu_Ranks (
    Stud_ID INT,
    Rank_ID INT,
    Date_awarded DATE,
    PRIMARY KEY (Stud_ID, Rank_ID),
    FOREIGN KEY (Stud_ID) REFERENCES student(Stud_ID),
    FOREIGN KEY (Rank_ID) REFERENCES Ranks(Rank_ID)
);
