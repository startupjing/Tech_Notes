+ Manage database
  - create databse <database name>
  - drop database <database name>
  - use <database name>

+ User management
  - create user 'username'@'localhost' identified by 'password'
  - grant privileges on DATABASE.TABLE to USERNAME@'localhost'
  - grant all on *.* to USERNAME@'localhost' with GRANT OPTION
  - grant select,insert,update,delete on DATABASE.* to USERNAME@'localhost'
  - flush PRIVILEGES

+ Tables
  - show tables
  - describe tables
  - examples of creating tables

  ```
     CREATE TABLE employees (
		id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		first_name VARCHAR(30) NOT NULL,
		last_name VARCHAR(40) NOT NULL,
		nickname VARCHAR(20),
		department ENUM('CSE','BME','EECE','ESE','MEMS') NOT NULL DEFAULT 'CSE',
		joined TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (id)
     ) engine = INNODB DEFAULT character SET = utf8 COLLATE = utf8_general_ci;
  ```

+ Keys
  - primary key (col1, col2, col3)
  - unique key INDEX_NAME (col1, col2, col3)
  - foreign key (col1, col2) references ANOTHER_TABLE(col1,col2)
  - alter table TABLENAME add unique key INDEX_NAME (col1,col2)
  - alter table TABLENAME add foreign key (col1, col2)

+ State
  - insertion
    + insert into employee (first_name, last_name) values ('Jing','Lu'), ('Alice', 'Wang')
  - update
    + update employee set first_name='jing' where id=2
  - delete
    + delete from employee where id=1

+ Selecting
  - select * from TABLENAME
  - select col1, col2 from TABLENAME
  - select timestampdiff (second, joined, NOW()) as time_with_comp from employee
  - select project_name, employee.first_name from projects join employee on (projects.employee_id=employee.id) group by employee.id
  - select first_name from employee order by first_name asc limit 10
  - select avg(scores) as average from players group by id having average>10
  - select * from players where first_name like "T%"
  


