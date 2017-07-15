USE cform_jbs;

DROP TABLE IF EXISTS cform_table;
CREATE TABLE cform_table (
	
	ID				int(9) NOT NULL auto_increment,
	FirstName		varchar(250) NOT NULL,
	LastName		varchar(250) NOT NULL,
	ContactNum		int(11) NOT NULL,
	EmailAddress	varchar(250) NOT NULL,
	Message			varchar(250) NOT NULL,
	
	PRIMARY KEY (ID)	
);