CREATE TABLE account(
    accountID INT UNSIGNED AUTO_INCREMENT NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    first VARCHAR(20) NOT NULL,
    last VARCHAR(50) NOT NULL,
    sid INT UNSIGNED NOT NULL,
    degreePath varchar(50) NOT NULL,
    programInterests varchar(100),
    role TINYINT(1) NOT NULL,
    PRIMARY KEY (accountID)
);

CREATE TABLE application (
    applicationID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    applicationStatus CHAR(1),
    degreeAudit VARCHAR(50),
    unofficialTranscript VARCHAR(50),
    personalStatement VARCHAR(50),
    evaluationForm TINYINT,
    submissionTime DATETIME,
    accountID INT UNSIGNED NOT NULL,
    FOREIGN KEY (accountID) REFERENCES account(accountID)
);

Create TABLE admin (
    adminID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    applicantID INT UNSIGNED NOT NULL,
    FOREIGN KEY(applicantID) REFERENCES application(applicantID)
);