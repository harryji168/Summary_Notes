https://docs.spring.io/spring-boot/docs/1.2.0.M2/reference/html/getting-started-installing-spring-boot.html

sudo apt-get install maven

https://maven.apache.org/guides/getting-started/maven-in-five-minutes.html
 mvn --version

 mvn archetype:generate -DgroupId=com.mycompany.app -DartifactId=my-app -DarchetypeArtifactId=maven-archetype-quickstart -DarchetypeVersion=1.4 -DinteractiveMode=false

Build the Project
mvn package

java -cp target/my-app-1.0-SNAPSHOT.jar com.mycompany.app.App


mvn site

https://javabeat.net/gvm/

[java]
sudo apt-get install curl
curl -s get.gvmtool.net | bash
[/java]