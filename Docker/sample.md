https://www.youtube.com/watch?v=6dLHcnlPi_U

https://github.com/antonputra/lesson-087


sudo docker build -t lesson-087:latest .
sudo docker run -p 5000:5000 lesson-087:latest




https://dev.to/truthseekers/setup-a-basic-local-php-development-environment-in-docker-kod
https://github.com/truthseekers/php-docker-simple
https://www.youtube.com/watch?v=ThpnqYpvnIM


docker: Error response from daemon: Conflict. The container name "/my-apache-php-app" is already in use by container "7cbafa586e34026db47532683d302d631d318be114dd8a0f8813640d54e1ee7f". You have to remove (or rename) that container to be able to reuse that name.
See 'docker run --help'


docker run -d -p 88:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache # This line for *nix users

docker stop $(docker ps -a -q)


docker-compose up -d