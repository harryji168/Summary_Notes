 php composer.phar

                                                                                
  [RuntimeException]                                                            
  require-dev.mikey179/vfsStream is invalid, it should not contain uppercase c  
  haracters. Please use mikey179/vfsstream instead.                             
                                                      

                                                      composer.json

                                                      "require-dev": {
		"mikey179/vfsstream": "1.1.*",
		"phpunit/phpunit": "4.* || 5.*"
	}
}