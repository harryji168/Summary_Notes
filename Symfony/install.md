 wget https://get.symfony.com/cli/installer -O - | bash

 Use it as a local file:
  /home/harryji/.symfony/bin/symfony

Or add the following line to your shell configuration file:
  export PATH="$HOME/.symfony/bin:$PATH"

Or install it globally on your system:
  mv /home/harryji/.symfony/bin/symfony /usr/local/bin/symfony



  composer require symfony/all-my-sms-notifier