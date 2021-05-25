CREATE TABLE account(
    accountID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    first VARCHAR(20) NOT NULL,
    last VARCHAR(50) NOT NULL,
    sid INT UNSIGNED NOT NULL,
    role TINYINT(1) NOT NULL
);

CREATE TABLE applicant (
    applicantID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    studentID INT UNSIGNED NOT NULL,
    accountID INT UNSIGNED NOT NULL,
    FOREIGN KEY (accountID) REFERENCES account(accountID)
);

CREATE TABLE application (
    applicationID INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    degreeAudit VARCHAR(50),
    unofficialTranscript VARCHAR(50),
    personalStatement VARCHAR(50),
    stepFourOption VARCHAR(50),
    applicantID INT UNSIGNED NOT NULL,
    FOREIGN KEY (applicantID) REFERENCES applicant(applicantID)
);