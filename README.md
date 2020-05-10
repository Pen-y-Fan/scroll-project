# Scroll and API Projects

These are some projects, working with Ajax to import data from different sources, based on an infinite scroll.

## Scroll project

Location: public/index.html

This is based on the uDemy.com course [Infinite Scroll Project AJAX MySQL API PHP jQuery](https://www.udemy.com/course/ajax-project/)

Modified to use a Bootstrap card and use the products.json file, from fetch example, containing 6 products, rather than
 a backend database. 
 
As the window is scrolled a product is added at random, from the 6 available, giving the illusion of an infinite scroll.

The total cost of the items is displayed at the top of the page. This is dynamically updated as more items are added.

## Fetch API example

Location: public/fetch-example.html

This is the example for HTML fetch API from [MDN fetch-examples](https://github.com/mdn/fetch-examples/).

## Star Wars

Location: public/starWars.html 

This fetches some characters from the StarWars API <https://swapi.dev/api/> and displays the data in a bootstrap card.
 As the window is scrolled the card is added, upto the maximum allowed.
