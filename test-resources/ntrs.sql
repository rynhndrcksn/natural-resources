CREATE TABLE account(
    accountID INT UNSIGNED AUTO_INCREMENT NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    first VARCHAR(20) NOT NULL,
    last VARCHAR(50) NOT NULL,
    sid INT UNSIGNED NOT NULL,
    program varchar(50) NOT NULL,
    role TINYINT(1) NOT NULL,
    PRIMARY KEY (accountID)
);

CREATE TABLE applicant (
    applicantID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    studentID INT UNSIGNED NOT NULL,
    accountID INT UNSIGNED NOT NULL,
    FOREIGN KEY (accountID) REFERENCES account(accountID)
);

CREATE TABLE application (
     applicationID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
     applicationStatus CHAR(1),
     degreeAudit VARCHAR(50),
     unofficialTranscript VARCHAR(50),
     personalStatement VARCHAR(50),
     stepFourOption VARCHAR(50),
     applicantID INT UNSIGNED NOT NULL,
     FOREIGN KEY (applicantID) REFERENCES applicant(applicantID)
);

Create TABLE admin (
    adminID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    applicantID INT UNSIGNED NOT NULL,
    FOREIGN KEY(applicantID) REFERENCES application(applicantID)
);