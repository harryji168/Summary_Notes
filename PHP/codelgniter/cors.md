https://www.stackhawk.com/blog/angular-cors-guide-examples-and-how-to-enable-it/#:~:text=We%20call%20this%20the%20CORS,or%20CORS%20in%20your%20application.

# proxy.config.json

{
    "/api": {
      "target": "http://localhost/index.php/api/owner/owners",
      "secure": false
     }
}

# angular.json

"serve": {
          "builder": "@angular-devkit/build-angular:dev-server",
          "options": {
            "browserTarget": "frontend:build",
            "port":8081,
            "proxyConfig": "proxy.config.json"
          },
          
# services/owner.service.ts

const baseURL = '/api';



