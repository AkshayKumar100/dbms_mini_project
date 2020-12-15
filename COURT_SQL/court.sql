SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE advocate(
  `ADV_ID` varchar(20) NOT NULL,
  `ADV_NAME` varchar(20) DEFAULT NULL,
  `EMAIL_ID` varchar(20) DEFAULT NULL,
  `CONTACT_NO` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `WORK_PROFILE` int(3) DEFAULT NULL,
  `STREET` varchar(20) DEFAULT NULL,
  `PINCODE` int(10) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ADV_ID`)
); 



CREATE TABLE junior_adv(
  `ADV_ID` varchar(20) NOT NULL,
  `Jr_name` varchar(20) DEFAULT NULL,
  `Jr_type` varchar(20) DEFAULT NULL,
  `Jr_contact` varchar(20) DEFAULT NULL,
  `Jr_experience` varchar(20) DEFAULT NULL,
  constraint foreign key (ADV_ID) references advocate(ADV_ID)
  on delete cascade on update cascade
); 


CREATE TABLE client(
  `CLIENT_ID` varchar(10) NOT NULL,
  `CLIENT_NAME` varchar(20) DEFAULT NULL,
  `CLIENT_ADDRESS` varchar(20) DEFAULT NULL,
  `CONTACT_NO` int(10) DEFAULT NULL,
  PRIMARY KEY (`CLIENT_ID`)
);



CREATE TABLE caseT(
  `ADV_ID` varchar(20) NOT NULL,
  `CASE_ID` varchar(10) NOT NULL,
  `CASE_TYPE` varchar(20) DEFAULT NULL,
  `CASE_DETAILS` varchar(20) DEFAULT NULL,
  `LAST_HEARING_DATE` date DEFAULT NULL,
  `NEXT_HEARING_DATE` date DEFAULT NULL,
  `CLIENT_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CASE_ID`),
  constraint foreign key (CLIENT_ID) references client(CLIENT_ID)
  on delete cascade on update cascade,
  constraint foreign key (ADV_ID) references advocate(ADV_ID)
on delete cascade on update cascade
);


CREATE TABLE payment(
  `PAYMENT_ID` varchar(10) NOT NULL,
  `CASE_ID` varchar(10) DEFAULT NULL,
  `DATE_OF_PAYMENT` date DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `Amount` int(7) DEFAULT NULL,
  PRIMARY KEY (`PAYMENT_ID`),
  constraint foreign key (CASE_ID) references case_(CASE_ID)
  on delete cascade on update cascade
); 







