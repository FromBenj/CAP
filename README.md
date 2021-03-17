# CAP - Covid Application Play


CAP is a web application that let you play with your friends and strangers to the famous 'Dare or not' game.
You log in, you choose the person you want to challenge, you define your challenge and then, you just have to wait and validate or not the answer. 
Thanks to your dashboard, you have access to a recap of your past and current challenges, and can see your ranking.

This app was created during an hackaton organised by the [Wild Code School](https://www.wildcodeschool.com/) of Bordeaux and [Ekino](https://www.ekino.com/), in January 2021.
The theme was **'Create a web app that bring people together during the pandemic'** and we had 48 hours.

CAP was designed using a 'mobile first' approach.


# How to run
- clone the repo
- run ```composer install```
- run ```yarn install```
- run ```yarn encore dev```

- create a .env.local file, and add your database information.
- run ```symfony console d:d:c``` to create this database
- run ```symfony console d:m:m``` to execute migrations and create tables
- run ```symfony console d:f:l``` to load the fixtures

- run ```symfony server:start```


## Team Members
- [Aude](https://github.com/AudePl)
- [Benjamin](hhttps://github.com/FromBenj)
- [Claire](https://github.com/Claire812)
- [Victor](https://github.com/victorcdrdm)




**Our web app is online: [CAP](http://capoupascap.ovh/)!**
