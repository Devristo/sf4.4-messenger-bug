Steps to reproduce:

```shell script
git clone https://github.com/Devristo/sf4.4-messenger-bug.git
cd sf4.4-messenger-bug
symfony serve
``` 

Now go to http://127.0.0.1:8000/ and you will be greeted by the following exception:

> No transport supports the given Messenger DSN "sync://".
