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
  - User should be able to specify amounts
- User should be able to add or remove items from inventory 
  - User should be able to add amount of item and can specify units 
- The app should keep track of and remember what items have been added 
- User should be able to search and filter through items 

Future Additions

- App suggests items that need to be added to shopping list based on current inventory and frequency of use of item
- App suggests meal ideas using items on hand 

### Screenshot

**Original mobile design**
![](/styles/images/design.png)
**Finished product**
![](/styles/images/screenshot.png)


### Links

- Solution URL: [Github](https://github.com/dstrickl7/inventory-tracker)
- Live Site URL: [title](address)

## My process
This project came about because I wanted a way to keep track of the grocery items I already had whenever I went to the store. I started by making a design in VS Code starting with mobile and finishing with desktop. I next set up my database with MySQL and wrote out an HTML skeleton in psuedo code. Once I felt I had all the pieces I needed, I made my HTML skeleton and started some basic SCSS to help me visualize as I code. Next came the logic. I wrote script by script in order to learn and make the logic more compartmentalized. Once the main CRUD was completed, minor scripts used for user experience were written alongside my SCSS.

### Built with

- Semantic HTML5 markup
- SCSS
- Mobile-first workflow
- JavaScript (ES6)
- PHP

### What I learned
- CRUD with PHP and MySQL
- Creating and manipulating MySQL tables
- Inserting JSON data into MySQL tables


```js
{ Insert code here }
```

### Challenges

- I struggled with how to filter items by category and dynamically print them to the screen.
  - I decided to do this using the JSON I attached to each item. I created an array and checked each item's category. If the category wasn't already in the array, I pushed the category into it. I then used a mysqli query to run through the items in the database and print them if their category matched. It would probably have made more sense to use the MySQL filter queries, but I wanted to figure out how to insert and manipulate JSON that was in a MySQL database with PHP.
- Determining whether and when to use MySQL queries vs using and handling data as JSON
  - I am new to PHP and hadn't used MySQL prior. Trying to learn how to work with three different things that I'm unfamiliar with at the same time may have been trying to do too much at one time.
- I am currently trying to figure out if there is a way to make the update form display in the same place the item the update is happening on instead of appearing at the very top of the inventory container. My current concern is that the foreach loop I'm using to display the categories will make this impossible and I may have to rewrite that logic.
- Sanitizing inputs. I am currently looking into prepared statements.

### Continued development

- 

### Useful resources

- [MDN Web Docs](https://developer.mozilla.org/en-US/) - My go-to resource for syntax and use examples

## Author

- Website - [Curly Coder](https://www.curlycoder.com)
- Frontend Mentor - [@dstrickl7](https://www.frontendmentor.io/profile/dstrickl7)
- Github - [dstrickl7](https://github.com/dstrickl7)
