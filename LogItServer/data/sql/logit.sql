 DROP TABLE IF EXISTS logs;
 
 CREATE TABLE logs (
   id int NOT NULL auto_increment,
   content varchar(255) NOT NULL,
   time datetime NOT NULL,
   PRIMARY KEY (id)
 );