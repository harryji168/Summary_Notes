https://kb.objectrocket.com/postgresql/how-to-use-nodejs-to-insert-into-a-postgresql-table-958

const { Pool, Client } = require("pg");

const pool = new Pool({
  user: "postgres",
  host: "localhost",
  database: "test",
  password: "1234",
  port: "5432"
});