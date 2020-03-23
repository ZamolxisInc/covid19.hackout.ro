# Covid-19 Monitoring & Stats


[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://zamolxis.org)

This is just a simple project, developed during the first night when COVID-19 appeared in Romania by our team of volunteers.
We tried to give the people a live tool to monitor the number of infections and the stats about infected people (age, sex, other disease etc).


# What we used

  - CodeIgniter 3 - because of the fast approach
  - Chart.js for charts (some messy implementation but does the work ~ php arrays to js arrays needs some check)
  - Visual Map of Romania by counties with number of infected ppl [Open Street Map, MapBox, and Romania County.js]
  - Vis-newtork.js = Amazing tool that make the awsome connection between points + some messy implementetion (when the bullet is clicked, it prints the age, sex and other info about the person infected)
  - DataTables for data visualisation as a table (order, search, pagination)
  - It also has a simple API controlled


### Why did we stopped?

Because we had to insert the data manual, in order to be 100% real, that took time for our volunteers and also, the authorities decided not to provide anymore data about infections, only the count. So, the purpose: statistics based on people's parameters, could not be satisfied anymore.

### Config

Basic config of codeigniter is enough: config.php and database.php does the sh&t. Also, try to use httpS only

Inline-style: 
![alt text](https://zzzz.png"Logo Title Text 1")
