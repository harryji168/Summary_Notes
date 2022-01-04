SQLite is a free, cross-platform database management system. It is popular for its efficiency and ability to interface with many different programming languages.

In this tutorial you will install SQLite on Ubuntu 20.04. You will then create a database, read data from it, insert items, delete items, and join items from separate tables.

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-sqlite-on-ubuntu-20-04


Step 1 — Installing SQLite on Ubuntu 20.04
To install the SQLite command-line interface on Ubuntu, first update your package list:

sudo apt update
 
Now install SQLite:

sudo apt install sqlite3
 
To verify the installation, check the software’s version:

sqlite3 --version
 
You will receive an output like this:

Output
3.31.1 2020-01-27 19:55:54 3bfa9cc97da10598521b342961df8f5f68c7388fa117345eeb516eaa837balt1
With SQLite installed, you are now ready to create a new database.

Step 2 — Creating a SQLite Database
In this step you will create a database containing different sharks and their attributes. To create the database, open your terminal and run this sqlite3 command:

sqlite3 sharks.db
 
This will create a new database named sharks. If the file sharks.db already exists, SQLite will open a connection to it; if it does not exist, SQLite will create it.

You will receive an output like this:

Output
SQLite version 3.31.1 2020-01-27 19:55:54
Enter ".help" for usage hints.
Following this, your prompt will change. A new prefix, sqlite>, now appears:


 
If the file sharks.db does not already exist and if you exit the sqlite promote without running any queries the file sharks.db will not be created. To make sure that the file gets created, you could run an empty query by typing ; and then pressing “Enter”. That way you will make sure that the database file was actually created.

With your Shark database created, you will now create a new table and populate it with data.

Step 3 — Creating a SQLite Table
SQLite databases are organized into tables. Tables store information. To better visualize a table, one can imagine rows and columns.

The rest of this tutorial will follow a common convention for entering SQLite commands. SQLite commands are uppercase and user information is lowercase. Lines must end with a semicolon.

Now let’s create a table and some columns for various data:

An ID
The shark’s name
The shark’s type
The shark’s average length (in centimeters)
Use the following command to create the table:

CREATE TABLE sharks(id integer NOT NULL, name text NOT NULL, sharktype text NOT NULL, length integer NOT NULL);
 
Using NOT NULL makes that field required. We will discuss NOT NULL in greater detail in the next section.

After creating the table, an empty prompt will return. Now let’s insert some values into it.

Inserting Values into Tables
In SQLite, the command for inserting values into a table follows this general form:

INSERT INTO tablename VALUES(values go here);
 
Where tablename is the name of your table, and values go inside parentheses.

Now insert three rows of VALUES into your sharks table:

INSERT INTO sharks VALUES (1, "Sammy", "Greenland Shark", 427);
INSERT INTO sharks VALUES (2, "Alyoshka", "Great White Shark", 600);
INSERT INTO sharks VALUES (3, "Himari", "Megaladon", 1800);
 
Because you earlier specified NOT NULL for each of the variables in your table, you must enter a value for each.

For example, try adding another shark without setting its length:

INSERT INTO sharks VALUES (4, "Faiza", "Hammerhead Shark");
 
You will receive this error:

Output
Error: table sharks has 4 columns but 3 values were supplied
In this step you created a table and inserted values into it. In the next step you will read from your database table.

Step 4 — Reading Tables in SQLite
In this step, we will focus on the most basic methods of reading data from a table. Recognize that SQLite provides more specific methods for viewing data in tables.

To view your table with all of the inserted values, use SELECT:

SELECT * FROM sharks;
 
You will see the previously inserted entries:

Output
1|Sammy|Greenland Shark|427
2|Alyoshka|Great White Shark|600
3|Himari|Megaladon|1800
To view an entry based on its id (the values we set manually), add the WHERE command to your query:

SELECT * FROM sharks WHERE id IS 1;
 
This will return the shark whose id equals 1:

Output
1|Sammy|Greenland Shark|427
Let’s take a closer look at this command.

First, we SELECT all (*) values from our database, sharks.
Then we look at all id values.
Then we return all table entries where id is equal to 1.
So far you have created a table, inserted data into it, and queried that saved data. Now you will update the existing table.

Step 5 — Updating Tables in SQLite
In the following two sections you will first add a new column into your existing table and then update existing values in the table.

Adding Columns to SQLite Tables
SQLite allows you to change your table using the ALTER TABLE command. This means that you can create new rows and columns, or modify existing rows and columns.

Use ALTER TABLE to create a new column. This new column will track each shark’s age in years:

ALTER TABLE sharks ADD COLUMN age integer;
 
You now have a fifth column, age.

Updating Values in SQLite Tables
Using the UPDATE command, add new age values for each of your sharks:

UPDATE sharks SET age = 272 WHERE id=1;
UPDATE sharks SET age = 70 WHERE id=2;
UPDATE sharks SET age = 40 WHERE id=3;
 
Output
1|Sammy|Greenland Shark|427|272
2|Alyoshka|Great White Shark|600|70
3|Himari|Megaladon|1800|40
In this step you altered your table’s composition and then updated values inside the table. In the next step you will delete information from a table.

Step 6 — Deleting Information in SQLite
In this step you will delete entries in your table based on the evaluation of an argument.

In the following command you are querying your database and requesting that it delete all sharks in your sharks table whose age is less than 200:

DELETE FROM sharks WHERE age <= 200;
 
Typing SELECT * FROM sharks; will verify that Alyoshka and Himari, who were each less than 200 years old, were deleted. Only Sammy the Greenland Shark remains:

Output
1|Sammy|Greenland Shark|427|272
Step 7 — Joining Information in SQLite
Let’s imagine that we had two tables: our current sharks table and an endangered table. Now what if the endangered table had an id value that mapped to the ids in your sharks table, and it also had a status value that indicated each shark’s conservation status?

If you wanted to query data from both tables, you could use one of SQLite’s four join commands:

INNER JOIN
OUTER JOIN
LEFT JOIN
CROSS JOIN
Let’s create that second table and then use INNER JOIN to join some data.

First, create your endangered table:

CREATE TABLE endangered (id integer NOT NULL, status text NOT NULL);
INSERT INTO endangered VALUES (1,  "near threatened");
 
Now join your tables:

SELECT * FROM sharks INNER JOIN endangered on sharks.id = endangered.id;
 
Your output will look like this:

Output
1|Sammy|Greenland Shark|427|272|1|near threatened
Note that the output also includes the id value from endangered. You can specify desired output with a more explicit command:

SELECT sharks.id, sharks.name, sharks.sharktype, sharks.length, sharks.age, endangered.status FROM sharks INNER JOIN endangered on sharks.id = endangered.id;
 
This time the output excludes the second id value:

Output
1|Sammy|Greenland Shark|427|272|near threatened
You have now successfully joined information from multiple tables.

Conclusion
SQLite is a useful tool for database management. One can quickly create a database and manipulate it with various commands. Following this tutorial, you now have a basic understanding of SQLite and you are prepared dive deeper into this database management system.

For an excellent overview of relational database systems and how they compare, check out our article, SQLite vs MySQL vs PostgreSQL: A Comparison Of Relational Database Management Systems.

Additionally, many languages maintain integrations with SQLite. For instructions on using SQLite inside your Python code, check out our tutorial, How To Use the sqlite3 Module in Python 3.

For specific help with SQLite’s syntax, the official documentation is another excellent resource.