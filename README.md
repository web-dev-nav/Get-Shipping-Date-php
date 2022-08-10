# Get-Shipping-Date-php
Imagine there is a webshop which sells some products. We need the code that calculates the expected shipping date when a user submits an order.  
So let the start screen contain a text box to enter a date(datepicker) and submitting it is like placing an order (the aim is to get the order date). 
The shop owner has decided NOT to ship on certain days of a week.  

We should be able to change the days in which they are not shipping (you can keep these days in an array, no need of database usage).   There is a cut off time for placing an order that will be shipped on the same day, f.e. orders placed before 11 in the morning will be shipped on same day, else it will only be shipped next day/next shipping allowed day. 
Shipping means handling over the package to the courier company.
