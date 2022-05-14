


show table 
MySQL Workbench Manual :: 8.2.3 Schema and Table Inspector

https://dev.mysql.com/doc/workbench/en/wb-develop-object-management-inspector.html#:~:text=To%20open%2C%20right%2Dclick%20a,information%20related%20to%20the%20table.


https://stackoverflow.com/questions/5787130/importing-using-mysql-workbench-error-error-1046-3d000

44

Workbench doesn't know the database (schema) you want to use.

In workbench, when using Data Import/Restore, just below where you choose the file to import, it asks "Default Schema to be Imported To"

Just choose the database (schema) you want it to use from the dropdown titled Default Target Schema. If you don't have a database (schema) already, you can create it with the "New" button.

This is confusing because MySQL generally seems to use the term database but Workbench uses schema. They mean the same thing for most purposes. MySQL 'create schema' and 'create database' - Is there any difference