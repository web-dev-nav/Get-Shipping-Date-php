# Calculate shipping date based on nonworking days
Imagine there is a webshop which sells some products. We need the code that calculates the expected shipping date when a user submits an order.  So let the start screen contain a text box to enter a date(datepicker) and submitting it is like placing an order (the aim is to get the order date).

The shop owner has decided NOT to ship on certain days of a week.  We should be able to change the days in which they are not shipping (you can keep these days in an array, no need of database usage). 

There is a cut off time for placing an order that will be shipped on the same day, f.e. orders placed before 11 in the morning will be shipped on same day, else it will only be shipped next day/next shipping allowed day. Shipping means handling over the package to the courier company.

The main code with logic should be added to getShippingDate in functions.php. Configurations should be added in config.php

# Installation

Its need PHP environment.

To change the number of holidays inside /functions.php 
```PHP
 $allHolidays = array('10-08-2022','11-08-2022', '12-08-2022','13-08-2022');
 ```
To change the Cut off time
```PHP
$cutOffTime = "11:00"; 
```
# View

![image](https://user-images.githubusercontent.com/110724391/183831068-7d22b2b9-a02a-4c41-b765-e202ee41a202.png)

# Video Explained
![GET ECOM SHIPPING DATE](https://user-images.githubusercontent.com/110724391/184474669-269c1870-3296-403a-9a81-a62f66193c5a.png)([Youtube](https://www.youtube.com/watch?v=qM3TNdvqsfM))
