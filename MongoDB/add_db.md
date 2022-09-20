https://zellwk.com/blog/local-mongodb/

Installing MongoDB
You need to install MongoDB on your computer before you can connect to it. You can install MongoDB by following these instructions (Mac and Windows).

Once you have completed the installation process, try typing mongo --version into your command line. You should get a response similar to the following:

mongo --version
Terminal showing MongoDB Version
Starting MongoDB
You can start MongoDB on your computer with the mongod command.

mongod

Keep the mongod window running when you want to work with your local MongoDB. MongoDB stops when you close the window.

Brief overview of how MongoDB works
MongoDB lets you store things (called documents) inside databases. Each database contains multiple collections.

To make it easier to understand, you can think of MongoDB as a building. It contains many rooms.

Each room is a database. Each database is responsible for storing information about one application. You can store as much information as you want.

You have an unlimited supply of boxes in each room. Each box is a collection. Each collection can only contain one type of data.

For example, one collection can be used for books, one collection for users, one collection for toys, and so on.

Adding items to a database
One way to add items to a MongoDB database is through the Mongo Shell. To open up the Mongo Shell, you open another command line window and run mongo.

mongo

Note: Make sure you keep the mongod window open! You won’t be able to interact with the Mongo Shell if you close the mongod window.

First, we need a database to work with. You can see the currently selected database with the db command. (By default, you should be on the test database).


https://stackoverflow.com/questions/38543252/how-can-i-create-a-database-with-a-user-name-and-password-in-mongodb-in-mongodb

db.createUser(
   {
     user: "myuser",
     pwd: "mypassword",
     roles: [ "dbOwner" ]
   }
)