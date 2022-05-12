
## What is Node?

Node.js is a server-side, javascript runtime environment. An application which runs on computer operating system in oppose to web browser or phone, it’s an application that looks into javascript and decides which javascript files or commands should be executed and when and then sends that javascript to an embedded javascript engine (V8) for execution on the computer. **_So, in a nutshell, V8 is the car’s engine while Node.js is everything else that makes the car, and as a node.js developer, you are the driver._** So, Node.js is a C++ application that embeds the V8 js engine.

### init project - using Super_Team_Ticker as sample

create and enter director
```shell
mkdir Super_Team_Picker && cd Super_Team_Picker
```

initiate node project, with option -y, then create file directly

```shell
npm init -y  
```
check the folder 
```shell
code .
```
you will get package.json like this

![Screenshot from 2021-10-10 18-22-55](https://user-images.githubusercontent.com/21187699/136720801-aca36ee5-9936-4636-a477-d1d95a663703.png)


### install neccessary modules

```shell  
npm i ejs express knex method-override pg
```
- i : install
- ejs:  html template file
- express:  node simple web sever
- knex: node database connection
- method-override: for edit, delete action
- pg :postgreSQL database

you also can do one by one like 
```shell  
npm i knex
npm i express
npm i pg
npm i method-override
npm i ejs
```
the package.json will like this

![Screenshot from 2021-10-10 18-34-53](https://user-images.githubusercontent.com/21187699/136721423-1cb5b928-8162-4e65-a003-f808495c22ef.png)

### install development modules with option -D

```shell  
npm i -D concurrently faker http-server morgan nodemon 
```
- faker : test date for seed
- morgan: for showing test data
- nodemon: keep runnig server for test  
- optional:  concurrently, http-server for inputing demo image 

the package.json will like this

![Screenshot from 2021-10-10 18-37-19](https://user-images.githubusercontent.com/21187699/136721527-e2469162-c31a-4047-ad4c-91bad2833b8e.png)


Verify install use 

```shell  
knex --version
```
you will get 

![Screenshot from 2021-10-10 18-39-24](https://user-images.githubusercontent.com/21187699/136721629-a794a736-a65b-4758-bff0-d57806260866.png)

### Create a .gitignore file  

```shell  
curl https://www.toptal.com/developers/gitignore/api/node,macos,windows,linux> .gitignore
```
click this file, you will get

![Screenshot from 2021-10-10 18-46-54](https://user-images.githubusercontent.com/21187699/136722044-c065ba7c-daf3-4ee6-ac3f-f12cc9586a23.png)

>.gitignore file just let different system ignore the incompatible files in this project


### create a database for this project

```shell  
createdb --echo Super_Team_Picker
```
> echo just show the create process
you will get in terminal 

![Screenshot from 2021-10-10 18-55-46](https://user-images.githubusercontent.com/21187699/136722693-013c8ad2-14bf-446a-bb39-ac185700a158.png)


### create database connection file knexfile.js
```shell  
knex init
```
you will get in terminal 
![Screenshot from 2021-10-10 19-02-08](https://user-images.githubusercontent.com/21187699/136723077-f6dd3722-cc06-4e8b-abd8-55bd836cbc41.png)


verify database, enter database terminal
```shell  
psql -d Super_Team_Picker
```
in database terminal 

```shell  
knex_db=# \d
```
show Did not find any relations.

exit database terminal
```shell  
knex_db=# \q
```
the process look like this  

![Screenshot from 2021-10-10 19-06-08](https://user-images.githubusercontent.com/21187699/136723332-c317fd0d-63ea-40b2-8204-d868537ebf15.png)


### edit database connection file  knexfile.js

remove staging, producting part, just keep development part

change  "client: 'sqlite3'," to 

```node
client: 'pg'
```

change connect to 
```node
 database: 'Super_Team_Picker',
```

for linux user, need add username and password
```node
username: harry
password:12345678
```

add migrations and seeds part
```node
 migrations: {
      directory: "./db/migrations"
    },
    seeds: {
      directory: "./db/seeds"
    }
```

final result like this: 
```node 
module.exports = {
  development: {
    client: 'pg',
    connection: {
      database: 'Super_Team_Picker',
      username:'harry',
      password:'12345678'
    },
    migrations: {
      directory: "./db/migrations"
    },
    seeds: {
      directory: "./db/seeds"
    }
  },
};
```

![Screenshot from 2021-10-10 19-22-38](https://user-images.githubusercontent.com/21187699/136724461-62d83a3c-2852-4b99-a6c4-b4dec80dde46.png)


### create migrations file for create tables 
``` 
knex migrate:make CreateCohorts
```
it will auto create folder "./db/migrations" and file "20211011023105_CreateCohorts.js"
>filename could different have timestampe_part.

like this 

![Screenshot from 2021-10-10 19-33-10](https://user-images.githubusercontent.com/21187699/136725258-7b07ae87-ff35-445b-b382-3c14dddb1d91.png)


### edit migration file for create tables 
add create table in exports.up ,add drop table in exports.down
final result like this
```node
exports.up = function(knex) {
    return knex.schema.createTable('cohorts', table => {
        table.bigIncrements('id');
        table.string('members');
        table.string('name');
        table.text('logoUrl');
        table.timestamp('createdAt').defaultTo(knex.fn.now());
    });
};  

exports.down = function(knex) {
    return knex.schema.dropTable('cohorts');
};
```
- bigIncrements is auto add integer number
- string include charactor from 0-255
- text include unlimited charactor
- image just store image url instead of file
- timestamp is store time stamp, using defaulf knex function  knex.fn.now()

like this 

![Screenshot from 2021-10-11 07-08-08](https://user-images.githubusercontent.com/21187699/136804632-be99bebd-efa7-4bf9-b300-daf47359385e.png)


### run migration file 
run in terminal, it mean run the latest migration file
```shell
knex migrate:latest
```
it will show  Batch 1 run: 1 migrations

verify database

```shell  
psql -d Super_Team_Picker
```
in database terminal 

```shell  
knex_db=# \d
```
it will show database table files, like this

![Screenshot from 2021-10-10 19-46-45](https://user-images.githubusercontent.com/21187699/136726239-9f0d14b0-96a1-4861-b4e9-e40f1a121356.png)

```shell 
knex_db=# \d knex_migrations  
```
![Screenshot from 2021-10-10 19-52-05](https://user-images.githubusercontent.com/21187699/136726636-64bf4dcf-dd9c-4c7f-90e6-7b199c4c700e.png)

```shell 
knex_db=# \d cohorts
```
![Screenshot from 2021-10-10 19-53-38](https://user-images.githubusercontent.com/21187699/136726753-9af7c014-7fcc-40f5-8307-f27780f06ab6.png)


exit database terminal
```shell  
knex_db=# \q
```

### create client.js under db for connection

```node
const knex = require('knex');
const dbConfig = require('../knexfile');

const client = knex(dbConfig.development);
module.exports = client;
```
> it is in db folder, not in db/migrations folder

like this 

![Screenshot from 2021-10-10 19-58-53](https://user-images.githubusercontent.com/21187699/136727358-a4721ee8-457f-4f36-b703-c314aac8e072.png)






### edit package.json

add "start": "nodemon" under scripts add 
```   
    ,
 "start": "nodemon",
```

look like this 

![Screenshot from 2021-10-10 20-10-07](https://user-images.githubusercontent.com/21187699/136728112-6bce1e43-b90b-4b96-86d3-873e982a3f27.png)

### add routes file under routes folder

create routes folder
```shell
mkdir routes
```
add routes file call `cohorts.js`  
>could use project name as main route

```shell
code routes/cohorts.js
```
input code 

```shell
const express = require('express');
const knex = require('../db/client');
const router = express.Router();



module.exports = router;
```

![Screenshot from 2021-10-10 20-22-49](https://user-images.githubusercontent.com/21187699/136728866-e982d8a3-d5e2-4eee-a781-32341219e286.png)


### add index.js to top 

```node 
const express = require('express');
const logger = require('morgan');
const app = express();
const path = require('path');
const cohortsRouter = require('./routes/cohorts');
const methodOverride = require('method-override');

app.use(express.static(path.join(__dirname, 'public')));
app.use(express.urlencoded({
    extended: true
}));
app.use(methodOverride((req, res) => {
    if (req.body && req.body._method) {
        const method = req.body._method
        return method;
    }
}));

app.use(logger('dev'));
app.set('view engine', 'ejs');
app.use("/cohorts", cohortsRouter);

app.get('/', function (request, response) {   
    response.render('home', { pageTitle: "Super Team Picker Home" } );
});


const PORT = 5000;
const ADDRESS = '127.0.0.1';

app.listen(PORT, ADDRESS, () => {
    console.log(`EXPRESS server listening on ${ADDRESS}:${PORT}`);
});
```
look like this

![Screenshot from 2021-10-10 20-25-20](https://user-images.githubusercontent.com/21187699/136729007-59afdc75-e75d-4d20-a13b-70b966979c4e.png)



## try test project
Now the project construe is setup, you run the server for test 

in terminal
```node 
npm start
```

teminal will show npm start

![Screenshot from 2021-10-10 20-28-45](https://user-images.githubusercontent.com/21187699/136729205-2c0b3e44-a1fe-43c3-8a5d-c64b2e559947.png)

open browser

```sh
http://localhost:5000/
```

it will show "Error: Failed to lookup view "home" in views directory"
like this, so we could add webpage now.

![Screenshot from 2021-10-10 20-31-55](https://user-images.githubusercontent.com/21187699/136729434-3fa0276b-295e-4a20-8c6b-eff5e6e0176a.png)

use Ctrl+C stop server now 

### setup views struction

create views folder
```node 
mkdir views
```

create partials folder
```node 
mkdir views/partials
```

### create header file  `header.ejs`

```node 
code views/partials/header.ejs
```
add code
```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><%= pageTitle%> - [Homework 4]Super Team Picker</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
  </head>
  <body class="mx-4 my-3">
    <div class="d-flex flex-row justify-content-between">
        <h5 class="text-primary align-self-center">Team Picker</h5>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cohorts">Cohorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cohorts/new">New Cohort</a>
            </li>
        </ul>
    </div> 

<div class="container">
```
look like
![Screenshot from 2021-10-10 20-40-37](https://user-images.githubusercontent.com/21187699/136730022-465d1065-3086-4c70-b2d2-f2b413c80f04.png)



### create footer file  `footer.ejs`

```node 
code views/partials/footer.ejs
```

add code
```
</div>
</body>
</html> 
```
like this

![Screenshot from 2021-10-10 20-43-31](https://user-images.githubusercontent.com/21187699/136730226-c9c82a1e-42a4-436a-be1e-acb54d356740.png)

### create home page  `home.ejs`

```node 
code views/home.ejs
```

add code
```
<%- include('./partials/header') %>
<p> 
<h1>Welcome to Super Team Picker</h1>
<p>
<p>Team Picker is old and is in need of a rebuild. Create an Express app with Postgres to store cohorts. Cohorts will have a list of members stored as comma separated names. They'll also have a name and a logo.
<p>
    When visiting a cohort's show page, you will be able to generate teams for that cohort. Below are mockups of every page that you need to build for the application. Use Bootstrap to build it. Try to match the mockups as accurately as possible.</p>

<p>
    <a href="/cohorts/new" class="btn btn-primary text-primary bg-light">Creating New Cohorts</a>

    <a href="/cohorts/" class="btn btn-primary text-primary bg-light">Index to List Cohorts</a>
    
<%- include('./partials/footer') %>
```

like this

![Screenshot from 2021-10-10 20-49-18](https://user-images.githubusercontent.com/21187699/136730650-8185ef45-f9dd-406b-8602-578c0049a9fe.png)



# test project again
Now the project construe is setup, you run the server for test 

in terminal
```node 
npm start
```
teminal will show npm start

open browser

```sh
http://localhost:5000/
```

now it will show  content like this:

![Screenshot from 2021-10-10 20-51-15](https://user-images.githubusercontent.com/21187699/136730803-025debd8-b969-4b6b-97e5-2837759de9a2.png)

use Ctrl+C stop server now 

## add stylesheet to beatiful page 


### setup folder

create public folder
```sh
mkdir public
```

create css folder
```sh
mkdir public/css
```

### get bootstrap css file

```sh
curl https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css > public/css/bootstrap.min.css
``` 
terminal like 

![Screenshot from 2021-10-10 21-02-12](https://user-images.githubusercontent.com/21187699/136731553-0b08068b-2fec-42ab-8940-5003fac75b2c.png)

click file like:

![Screenshot from 2021-10-10 21-03-07](https://user-images.githubusercontent.com/21187699/136731607-edd12be5-f07a-42df-863b-cea1fac9cd3d.png)



# test project again
Now you could run the server again  

in terminal
```node 
npm start
```
teminal will show npm start

open browser

```sh
http://localhost:5000/
```

now it will show  content like this: it much better than before

![Screenshot from 2021-10-10 21-06-34](https://user-images.githubusercontent.com/21187699/136731854-415b37fb-34e0-4a4e-9019-f19e2524a863.png)


use Ctrl+C stop server now 

## Add feathures 

modify `routes/cohorts.js` file 
after const line, add 

```node
function shuffle(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
}

router.get('/', (req, res) => {
    knex("cohorts")
    .select("*")
    .orderBy("id", "asc")
    .then((data) => {
        res.render("cohorts/index", {
            pageTitle: "Team List",
            cohorts: data,
        });
    });
});

router.get('/new', (req, res) => {
    res.render("cohorts/edit", {
        pageTitle: "New Team Picker",
        cohort: null
    });
});

router.post('/', (req, res) => {
    const cohortParmas = {
        members: req.body.members,
        name: req.body.name,
        logoUrl: req.body.logoUrl
    };
    knex("cohorts").insert(cohortParmas).returning("id").then(data => {
        res.redirect(`/cohorts/${data[0]}`);
    })
});
 

router.get('/:id', (req, res) => {
    if(isNaN(parseInt(req.params.id))){
        res.render('cohorts/show',{cohort:false,pageTitle: "Not Found - Super Team Picker"});
    }else{     
        knex("cohorts")
            .select("*")
            .where({
                id: req.params.id
            })
            .then(data => {
                if(data===undefined){
                    res.render('cohorts/show',{cohort:false,pageTitle: "Not Found - Super Team Picker"})
                }else{
                    let memberList = null;
                    let isTeamCount = 'checked';
                    let isMemberCount = null;                
                    let members = data[0].members.split(',');
                    let inputNumb = null;                         
                    if (req.query.method && req.query.quantity) {
                        shuffle(members);
                        memberList = [];                    
                        let teamCout, memberCout;
                        inputNumb = parseInt(req.query.quantity);                    
                        if(isNaN(inputNumb)){inputNumb=1};
                        if(inputNumb<1){inputNumb=1};                    
                        if (req.query.method == 'perTeam') {
                            isTeamCount = null;
                            isMemberCount = 'checked';
                            memberCout = inputNumb;  
                            chunk= inputNumb;                                               
                        } else {
                            teamCout = inputNumb; 
                            chunk= Math.ceil(members.length/inputNumb);                                               
                        }
                        console.log(chunk);
                        var i,j;
                        for(j=0;j<chunk;j++){
                            memberList[j] =[];
                        }
                        for (i=0,j=0; i < members.length; i++) {                                                  
                            memberList[j++].push(members[i]);                                                  
                            if(j>=chunk){      
                                j=0;
                            }                                              
                        }              
                    } 
                    res.render("cohorts/show", {
                        pageTitle: "Team " + data[0].name,
                        cohort: data[0],
                        num_of_member:members.length,
                        memberList: memberList,
                        isTeamCount: isTeamCount,
                        isMemberCount: isMemberCount,
                        quantity: inputNumb
                    });
                }
            });
        
    }
});

router.get('/:id/edit', (req, res) => {
    knex("cohorts")
        .select("*")
        .where({
            id: req.params.id
        })
        .then((data) => {
            res.render('cohorts/edit', {
                pageTitle: "Super Team Picker",
                cohort: data[0]
            });
        });
});

router.patch('/:id', (req, res) => {
    const cohortParmas = {
        members: req.body.members,
        name: req.body.name,
        logoUrl: req.body.logoUrl
    };
    knex("cohorts")
        .where({
            id: req.params.id
        })
        .update(cohortParmas).returning("*")
        .then(data => { 
            res.render("cohorts/show", {
                pageTitle: "Team Picker",
                cohort: data[0],
                num_of_member:data[0].members.split(',').length,
                memberList: null,
                isTeamCount: null,
                isMemberCount: null,
                quantity: null
            });
        });
});

router.delete('/:id', (req, res) => {
    knex("cohorts")
        .where({
            id: req.params.id
        })
        .delete()
        .then((data) => {
            res.redirect("/cohorts");
        });
});

```

look like this 

![Screenshot from 2021-10-10 21-23-00](https://user-images.githubusercontent.com/21187699/136732967-66c839ae-2b29-4c2a-aa77-0176f8ce8c4f.png)


### add webpage file

create `views/cohorts` folder
```sh
mkdir views/cohorts
```

### create edit.ejs under `views/cohorts`

```sh
code views/cohorts/edit.ejs
```

add code 
```ejs
<%- include("../partials/header.ejs")%> 
<% if(cohort){%> 
    <form action="/cohorts/<%= cohort.id%>" method="POST" class="my-3 d-flex flex-column">
        <img src="<%= cohort.logoUrl%>"  loading=lazy class="rounded-circle" width="40px" height="40px" alt="">
        <%- include("../partials/forminput")%>
        <div class="d-flex justify-content-end">
            <input type="hidden" name="_method" value="PATCH">
            <input type="submit" class="btn btn-outline-primary justify-content-end" value="Update">
        </div>        
    </form>
<%} else{%>
    <form action="/cohorts" method="POST" class="my-2 d-flex flex-column">
        <%- include("../partials/forminput")%>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-outline-primary justify-content-end" value="Insert">
        </div>        
    </form>
<%}%>
<%- include("../partials/footer.ejs")%>
```
like this 

![Screenshot from 2021-10-10 21-27-38](https://user-images.githubusercontent.com/21187699/136733305-26532f96-8c29-4c64-94ac-27d127b2b376.png)



### create index.ejs under `views/cohorts`

```sh
code views/cohorts/index.ejs
```

add code 
```ejs
<%- include("../partials/header.ejs")%> 
<% for(let cohort of cohorts){%>
    <div class="card my-3" style="width: 100%;">
        <div class="card-body">
            <div class="d-flex flex-row">
                <img src="<%= cohort.logoUrl%>"  loading=lazy class="rounded-circle" width="60px" height="60px" alt="">
                <h4 class="card-title mx-2 my-2"><%= cohort.name%></h4>
            </div>
            <p class="card-text"><%= cohort.members%></p>
            <a href="/cohorts/<%= cohort.id%>" class="btn btn-primary">Show cohort</a>
        </div>
    </div>
<%}%>
<%- include("../partials/footer.ejs")%>
```
like this 

![Screenshot from 2021-10-10 21-30-03](https://user-images.githubusercontent.com/21187699/136733450-a5a77ba3-f94b-40af-a6c6-9b0d368d5c55.png)


### create show.ejs under `views/cohorts`
```sh
code views/cohorts/show.ejs
```

add code 
```ejs

<%- include("../partials/header.ejs")%> 
<div class="card my-3" style="width: 100%;">
    <%if(!cohort){%>        
        <h4 class="mt-4 text-center">Cohort Not Found. Please create a new cohort</h4>     
        <p>
        <a href="/cohorts/new" class="btn btn-primary text-primary bg-light col-12 mt-4">Creating New Cohorts</a>
    <%} else{%>    
        <div class="card-body">
        <div class="add-items d-flex justify-content-between">
            <h1><%=cohort.name%></h1>
            <div class="align-items-end d-flex align">
                <img src="<%= cohort.logoUrl%>"  loading=lazy class="rounded-circle m-1" width="60px" height="60px" alt="<%= cohort.name%>">
                <a href="/cohorts/<%= cohort.id %>/edit" class="btn btn-outline-success btn-block my-1">Edit</a>
                <form action="/cohorts/<%= cohort.id %>" class="m-1" method="POST">
                    <input type="hidden" value="DELETE" name="_method">
                    <input type="submit" value="Delete" class="btn btn-outline-danger btn-block">
                </form>
            </div>
        </div>        
            <p class="card-text"><%= cohort.members%></p>
            <hr>
            <form action="/cohorts/<%= cohort.id%>" method="GET">
            <div class="mb-3">
                    <h6 class="card-title">Method</h6>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" name="method" value="teamCount" <%=isTeamCount%>>
                        <label class="form-check-label" for="method">
                            Team Count
                        </label>
                        </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="method" value="perTeam" <%=isMemberCount%>>
                        <label class="form-check-label" for="method">
                            Number Per Team
                        </label>
                    </div>
            </div>   
            <div class="form-group mb-3">
                <h5 for="quantity">Quantity</h5>
                <input type="text" class="form-control" autofocus value="<%=quantity%>" name="quantity" min="1" max="<%= num_of_member%>">                         
                <input type="submit" class="btn btn-primary text-primary bg-light col-12 mt-4" value="Assign Teams">
            </form>
            <% if(memberList){%>
                <div class="my-3">
                    <h6>#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members</h6>
                    <hr>
                    <% memberList.forEach((element, index) => {%>
                        <p><strong><%= index+1%></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= element%></p>
                        <hr>
                    <%})%>
                </div>
            <%}%>            
        </div>
    <%}%>
</div>
<%- include("../partials/footer.ejs")%>
```

like this

![Screenshot from 2021-10-10 21-31-52](https://user-images.githubusercontent.com/21187699/136733589-30319383-86de-4713-aaed-2d4974292603.png)


### create a share forminput.ejs under `views/partials`
```sh
code views/partials/forminput.ejs
```

add code 
```ejs
<div class="form-group mb-3">
    <label for="logo" class="form-label">Logo Url</label>
    <input type="url" class="form-control" name="logoUrl" id="logoUrl" placeholder="e.g.https://www.example.com/some.png"
    value='<%=cohort?cohort.logoUrl:""%>'>
  </div>
  <div class="form-group mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Flying Funks" required
      value='<%=cohort?cohort.name:""%>'>
    </div>
  <div class="form-group mb-3">
    <label for="members" class="form-label">Members</label>
    <textarea class="form-control" id="members" name="members" rows="3" placeholder="Jon Snow,Daenerys,Melisandre,Arya Stark" required><%=cohort?cohort.members:""%></textarea>
  </div>
```


# test project again
Now you could run the server again  

in terminal
```node 
npm start
```
teminal will show npm start

open browser

```sh
http://localhost:5000/
```

click new like this 

![Screenshot from 2021-10-10 21-36-34](https://user-images.githubusercontent.com/21187699/136733961-48dad0b1-8ed5-46a2-823c-ab5aa4f62a69.png)

use Ctrl+C stop server now 



## import seed demo data

create seeds file under  `db/seeds`

```sh
code db/seeds/input_demo_data.js
```

add code 

```sh
const { fake } = require("faker");
const faker = require("faker")
exports.seed = function(knex) {
  // Deletes ALL existing entries
  return knex('cohorts').del()
    .then(function () {
      // Inserts seed entries
      const cohorts=[];
        
      for (let i = 0; i < 30; i++) {
        members_string=faker.name.firstName();
        for(let j = 0; j < Math.floor((Math.random() * 60) + 10); j++) {
             members_string = members_string+","+ faker.name.firstName();
         } 
        cohorts.push(
          { 
            name: faker.company.companyName(), 
            members: members_string, 
            logoUrl: faker.image.imageUrl(),
          },
        )
      };
      return knex('cohorts').insert(cohorts);
    });
};
```
### run seed file

```sh
knex seed:run
```
termianl like

![Screenshot from 2021-10-10 21-45-47](https://user-images.githubusercontent.com/21187699/136734555-37aafb54-d15d-4570-b73b-d1ed5506c94e.png)



# test project again
Now you could run the server again  

in terminal
```node 
npm start
```
teminal will show npm start

open browser

```sh
http://localhost:5000/
```

click Cohorts like this 
![Screenshot from 2021-10-10 21-49-19](https://user-images.githubusercontent.com/21187699/136734816-50dc3a6a-f776-4eaf-9809-4d17e17526c8.png)

click show Cohort like this
![Screenshot from 2021-10-10 21-50-54](https://user-images.githubusercontent.com/21187699/136734901-dc136663-4311-4179-84b5-8253ddfec187.png)

input Quanitiy click Assign Teams, like this
![Screenshot from 2021-10-10 21-52-34](https://user-images.githubusercontent.com/21187699/136735008-4ea4c8dc-8641-4350-a587-2fc68539ef55.png)

choose Number Per Team
![Screenshot from 2021-10-10 21-54-34](https://user-images.githubusercontent.com/21187699/136735216-a0c82010-b366-4b16-b0ed-0a4466094081.png)


click Edit button
![Screenshot from 2021-10-10 21-56-03](https://user-images.githubusercontent.com/21187699/136735280-204772e8-8fa4-46c7-9b4c-c73b66fb8d49.png)

click delete button
will delete current Cohort, back to list

![Screenshot from 2021-10-10 21-58-02](https://user-images.githubusercontent.com/21187699/136735434-3fef3298-fd9b-4a3f-9d02-dd637049ad7d.png)

use Ctrl+C stop server now 

## improve image

current problem is that Faker image  is image folder, every time refresh, the image will change, so will use unslpash image insteady of Faker Image

### create demo.ejs under    `db/seeds`


```sh
code db/seeds/demo.ejs
```

add code 

```sh
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
    <title>get demo image url</title>
</head>
<body>
    <h1>get demo image url for id: <%= id%> </h1>
    <form name="myForm" id="myForm" target="_myFrame" action="/cohorts/input_demo_image/<%= id%>" method="POST">
        <input type="hidden" name="_method" value="PATCH">       
        <p>
            <input name="imgurl" id="imgurl" value="loading" />
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </form> 
    <script>        
        let randomURL = 'https://source.unsplash.com/random/400x300';
        axios.get(randomURL).then( data => {
            // the url of the random img
            console.log(data.request.responseURL);   
            document.getElementById("imgurl").value =data.request.responseURL;
            setTimeout(submit,1000);
             
        });
        function submit(){
            document.forms["myForm"].submit();      
        }
    </script>    
</body>
</html>
```
look like
![Screenshot from 2021-10-10 22-05-21](https://user-images.githubusercontent.com/21187699/136736043-38ec0893-4985-4822-82da-ab52dd314143.png)


### modify `routes/cohorts.js`

add before "module.exports = router;" code 

```node 
// replace faker demo image with  unsplash
router.get('/demo/:id', function (req, res) { 
    if(req.params.id==0){        
        knex("cohorts")
        .min('id')     
        .then(data => {
            //console.log(data[0]);
            res.render('../db/seeds/demo',{ id: data[0]['min'] } );
        })
    }else{
          res.render('../db/seeds/demo',{ id:  req.params.id } );
    }     
});

router.patch('/input_demo_image/:id', (req, res) => {   
    //console.log(req.body);
    //console.log(req.params);
    knex("cohorts")
    .where("id", req.params.id)
    .update(      
        {  
            logoUrl: req.body.imgurl
        }    
    ).then(() => {
        knex("cohorts")
        .max('id')     
        .then(data => {
            next_id = parseInt(req.params.id)+1;
            console.log(next_id);
            if(next_id>data[0]['max']){ 
                res.redirect("/cohorts");
            }else{                
                res.redirect(`/cohorts/demo/${next_id}`);                
            }
        })
    })        
});
```
look like 
![Screenshot from 2021-10-10 22-26-05](https://user-images.githubusercontent.com/21187699/136737599-3c39d95e-9276-4616-a4fb-eed7d5efcd21.png)


### run get demo image
in terminal
```node 
npm start
```
teminal will show npm start

open browser
```sh 
http://localhost:5000/cohorts/demo/0
```

now the web will refresh afer loading page until finish, like this 
![Screenshot from 2021-10-10 22-22-14](https://user-images.githubusercontent.com/21187699/136737838-7a9ae3e5-ea7e-49ca-bb90-0a1c8f4e86b7.png)


after iput images,the image will still, and different for each cohort

![Screenshot from 2021-10-10 22-23-50](https://user-images.githubusercontent.com/21187699/136737954-6f9cb7d0-7879-4421-92fe-421ed8650fd8.png)

edit page, logo will keep same, like this

![Screenshot from 2021-10-10 22-31-54](https://user-images.githubusercontent.com/21187699/136738070-4233ecae-718d-4f56-b314-2dbc0381375e.png)


use Ctrl+C stop server now 

## backup database 
```sh 
pg_dump -U harry -F c -b -v -f "db/seeds/demo_data_backup" Super_Team_Picker
```
like this
![Screenshot from 2021-10-10 22-40-06](https://user-images.githubusercontent.com/21187699/136738713-7cb8b98e-8730-40b4-84b8-3a5294163323.png)

## restore database
```sh 
pg_restore -U harry -f Super_Team_Picker -v "db/seeds/demo_data_backup"
```
like this
![Screenshot from 2021-10-10 22-40-58](https://user-images.githubusercontent.com/21187699/136738774-0d2377a3-9f51-4028-bdfb-17501a5e0ebf.png)

## add more parament for npm
modify `package.json`

```node 
    "init":"npm init",
    "install": "npm i ejs express knex method-override pg",
    "install-d": "npm i -D concurrently faker http-server morgan nodemon",
    "dbcreate": "createdb --echo super_team_picker",
    "migrate_create": "knex migrate:make super_team_picker",
    "migrate": "knex migrate:latest",
    "seed_create": "knex seed:make super_team_picker",
    "seed": "knex seed:run",
    "demo_image": "concurrently \"npm start\" \"xdg-open http://localhost:5000/cohorts/demo/0 \"",
    "backup":"pg_dump -U harry -F c -b -v -f \"db/seeds/demo_data_backup\" Super_Team_Picker",
    "restore":"pg_restore -U harry -f Super_Team_Picker -v \"db/seeds/demo_data_backup\""
 ```   

![Screenshot from 2021-10-10 22-43-12](https://user-images.githubusercontent.com/21187699/136738948-95661452-b67d-4f2c-ae62-107ac6125157.png)



about more get demo image, pleach check https://github.com/harryji168/auto_unsplash