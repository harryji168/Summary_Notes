sudo -u postgres psql

# \du  
#list user


# \l 
list databases

# \c Cluckr
change databases

# \dt 
list tables

change knexfile.js

development: {
      client: 'pg',
      connection: {
        database: 'Cluckr',
        // Linux users must include db username and password
        username: 'harry',
        password: '12345678'
      },

to local
