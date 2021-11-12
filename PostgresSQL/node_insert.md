https://kb.objectrocket.com/postgresql/how-to-use-nodejs-to-insert-into-a-postgresql-table-958

const { Pool, Client } = require("pg");

const pool = new Pool({
  user: "postgres",
  host: "localhost",
  database: "test",
  password: "1234",
  port: "5432"
});

pool.query(
  "INSERT INTO student(firstname, lastname, age, address, email)VALUES('Mary Ann', 'Wilters', 20, '74 S Westgate St', 'mroyster@royster.com')",
  (err, res) => {
    console.log(err, res);
    pool.end();
  }


    create_table "jobs", force: :cascade do |t|
    t.string "linked_id"
    t.string "title"
    t.string "company"
    t.string "Place"
    t.date "date"
    t.text "link"
    t.string "function"
    t.string "employmentType"
    t.string "salary"
    t.text "required_skills"
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
  end


  ## check record exist 

  https://stackoverflow.com/questions/7471625/fastest-check-if-row-exists-in-postgresql


  INSERT INTO target( userid, rightid, count )
  SELECT userid, rightid, count 
  FROM batch
  WHERE NOT EXISTS (
    SELECT * FROM target t2, batch b2
    WHERE t2.userid = b2.userid
    -- ... other keyfields ...
    )       
    ;