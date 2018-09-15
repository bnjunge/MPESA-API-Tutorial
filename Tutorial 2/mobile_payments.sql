
-- Copy this code to your SQL query box and run. Ensure you have selected the database on config.php
-- Database not optimised for now.
-- Custom fields can also be added

CREATE table mobile_payments(
	transLoID int AUTO_INCREMENT not null,
	TransactionType varchar(10) not null,
	TransID varchar(10) not null,
	TransTime varchar(14) not null,
	TransAmount varchar(6) not null,
	BusinessShortCode varchar(6) not null,
	BillRefNumber varchar(6) not null,
	InvoiceNumber varchar(6) not null,
	OrgAccountBalance varchar(10) not null,
	ThirdPartyTransID varchar(10) not null,
	MSISDN varchar(14) not null,
	FirstName varchar(10),
	MiddleName varchar(10),
	LastName varchar(10),
	PRIMARY KEY (transLoID),
	UNIQUE(TransID)
) Engine=innoDB;
