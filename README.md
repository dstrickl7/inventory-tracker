# Inventory Tracker and Shopping List

## Table of contents

- [Overview](#overview)
  - [The challenge](#the-challenge)
  - [Screenshot](#screenshot)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
  - [Challenges](#challenges)
  - [Continued development](#continued-development)
  - [Useful resources](#useful-resources)
- [Author](#author)

## Overview

### The challenge

The project should accomplish:

- User should be able to add and remove items from a list
  - User should be able to specify amount of item
- User should be able to add or remove items from inventory
  - User should be able to add amount of item and can specify units
- The app should keep track and remember what items have been added
- User should be able to search items

Future Additions

- Users can only see and edit their data
- App suggests items that need to be added to shopping list based on current inventory and frequency of use of item
- App suggests meal ideas using items on hand

### Screenshot

**Original mobile design**
![](/styles/images/design.png)
**Finished product**
![](/styles/images/screenshot.png)

### Links

- Solution URL: [Github](https://github.com/dstrickl7/inventory-tracker)
- Live Site URL: [Kitchen Tracker](https://kitchentracker.curlycoder.com)

## My process

This project came about because I wanted a way to keep track of the grocery items I already had whenever I went to the store. I started by making a design in Adobe XD starting with mobile and finishing with desktop. I next set up my database with MySQL and wrote out an HTML skeleton in psuedo code. Once I felt I had all the pieces I needed, I made my HTML skeleton and started some basic SCSS to help me visualize as I code. Next came the logic. I wrote script by script in order to learn and make the logic more compartmentalized. Once the main CRUD was completed, minor scripts used for user experience were written alongside my SCSS. I then added Firebase auth to protect my project. The last week before deployment was spent tidying up my code, checking for bugs, and polishing the finished product.

### Built with

- Semantic HTML5 markup
- SCSS
- Mobile-first workflow
- JavaScript (ES6)
- PHP
- MySQL
- Firebase Auth

### What I learned

- CRUD with PHP and MySQL
- Creating and manipulating MySQL tables
- Inserting JSON data into MySQL tables
- Testing GET and POST requests with Postman
- I've realized that when I feel really lost as I code, my result tends to be very chaotic and unorganized and leads to what I'm dubbing Franken-code. I think doing mini-projects on things that confuse me until I understand it then introducing it to my main project would help clean up my code

### Challenges

- I struggled with how to filter items by category and dynamically print them to the screen.
  - I decided to do this using the JSON I attached to each item. I created an array and checked each item's category. If the category wasn't already in the array, I pushed the category into it. I then used a mysqli query to run through the items in the database and print them if their category matched. It would probably have made more sense to use the MySQL filter queries, but I wanted to figure out how to insert and manipulate JSON that was in a MySQL database with PHP.
- Determining whether and when to use MySQL queries vs using and handling data as JSON
  - I am new to PHP and hadn't used MySQL prior. Trying to learn how to work with three different things that I'm unfamiliar with at the same time may have been trying to do too much at one time.
- I wanted to make the update form display in the same place as the item the update was for, however I was unable to use an inline form because of how I wrote my logic. I decided to use css to style the update form so it would be more user-friendly.
- Sanitizing inputs. I had an array of float values and I could not figure out a way to use the php built in data sanitization on it.
  - I ended up looping through my post array and sanitizing each value individually.
- Learning to use Firebase 9. I was completely unfamiliar with Firebase prior to this project and with the more recent release of version 9, there were few tutorials and guides. Fortunately, I found a great tutorial that helped me breakthrough my confusion.

### Continued development

- Data sanitization and security. My mentor told me the very first app he deployed fell victim to hacker bots and he ended up with an unexpected bill from his database service.
- PHP sessions. I want to be able to have users data be only accessible to the specific user who created it.

### Useful resources

- [MDN Web Docs](https://developer.mozilla.org/en-US/) - My go-to resource for syntax and use examples
- [Traversy Media-Fetch API introduction](https://www.youtube.com/watch?v=Oive66jrwBs) - I used this resource to access my JSON file from within my JS
- [The Net Ninja- Getting Started with Firebase 9](https://www.youtube.com/playlist?list=PL4cUxeGkcC9jERUGvbudErNCeSZHWUVlb) - His tutorial was a massive help getting me started using Firebase

## Author

- Website - [Curly Coder](https://www.curlycoder.com)
- Frontend Mentor - [@dstrickl7](https://www.frontendmentor.io/profile/dstrickl7)
- Github - [dstrickl7](https://github.com/dstrickl7)
