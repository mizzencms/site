#MizzenCMS Lite

This is a "work in progress" repo of MizzenCMS Lite (aka MizzenLite) website.

###Installation
----

For info check our [website](http://mizzencms.net) or 
[GitHub repos](https://github.com/mizzencms)  

If you insist on installing this locally, clone the repo and do:

```bash
$ cd <folder_name>
$ composer install
# following line is optional as submodules come and go
$ git submodule init && git submodule update
$ cp config/config.json.sample config/config.json
$ sudo chmod 0777 var
```

This should provide you with a working copy of a glasgowphp website