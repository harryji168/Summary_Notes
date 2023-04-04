# open browser using terminal? 

```sh
sensible-browser
```



```
google-chrome www.example.com
```

```
sudo update-alternatives --config x-www-browser
```




https://askubuntu.com/questions/682542/is-there-a-way-to-open-browser-using-terminal




# open broswer

## run command line file in rails
https://ruby-doc.org/core-2.0.0/IO.html#method-c-popen

in controller
```
IO.popen(["ls", "./", :err=>[:child, :out]]) {|ls_io|
            @ls_result_with_error = ls_io.read 
 }

  IO.popen(["php", "public/phpinfo.php", :err=>[:child, :out]]) {|ls_io|
            @ls_result_with_error = ls_io.read 
        }


 IO.popen(["sensible-browser", "youtube.com", :err=>[:child, :out]]) {|ls_io|
            @ls_result_with_error = ls_io.read 
        }


 ```

 in erb 
``` 
<%= @ls_result_with_error %> 
```


