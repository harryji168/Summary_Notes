https://tecadmin.net/how-to-install-net-core-on-ubuntu-20-04/



Install the SDK
The .NET SDK allows you to develop apps with .NET. If you install the .NET SDK, you don't need to install the corresponding runtime. To install the .NET SDK, run the following commands:

Bash

Copy
<!-- sudo apt-get update; \
  sudo apt-get install -y apt-transport-https && \
  sudo apt-get update && \
  sudo apt-get install -y dotnet-sdk-6.0 -->


  sudo snap install dotnet-sdk --classic