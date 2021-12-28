https://github.com/microsoft/TypeScript-Node-Starter


# Clone the repository
git clone --depth=1 https://github.com/Microsoft/TypeScript-Node-Starter.git <project_name>

# Install dependencies
cd <project_name>
npm install


 

Configure your mongoDB server
# create the db directory
sudo mkdir -p /data/db
# give the db correct read/write permissions
sudo chmod 777 /data/db

# starting from macOS 10.15 even the admin cannot create directory at root
# so lets create the db directory under the home directory.
mkdir -p ~/data/db
# user account has automatically read and write permissions for ~/data/db.