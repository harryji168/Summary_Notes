# brand new version 
```
ruby -v
```

![Screenshot from 2021-10-23 09-19-17](https://user-images.githubusercontent.com/21187699/138564013-47af8f89-5164-4a4e-81df-9f9baa74e0a1.png)

# after install code server 
still no ruby version 


![Screenshot from 2021-10-23 10-10-41](https://user-images.githubusercontent.com/21187699/138565548-570fe21b-c6ef-4b6d-b9eb-cf5d6de3201c.png)

# install ruby
```
sudo snap install ruby
```
error: This revision of snap "ruby" was published using classic confinement and thus may perform
       arbitrary system changes outside of the security sandbox that snaps are usually confined to,
       which may put your system at risk.

       If you understand and want to proceed repeat the command including --classic.
```
sudo snap install ruby --classic
```

```
ruby -v
```

ruby 3.0.2p107 (2021-07-07 revision 0db68f0233) [x86_64-linux]


![Screenshot from 2021-10-23 10-19-10](https://user-images.githubusercontent.com/21187699/138565774-9caaf9d3-257d-40d8-be64-5bdf31e02e2a.png)
