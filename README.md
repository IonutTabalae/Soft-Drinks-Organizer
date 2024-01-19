# Soft Drinks Organizer (SoDrO)🥤🍵🥛🍹

![SoftDrinkOrganizer](HomePage.png)

**SoftDrinksOrganizer** is a helpful website for soft drink lovers. We are your digital _encyclopedia_ on soft drinks.  You can discover a lot of great drinks sold on the entire globe. You can study their _ingredients_, _nutritional values_ and if you really like them you can add to your _shopping list_. Based on your activity we will try to give you the _best recommendation_.

<details>
  <summary><strong>Table of Contents</strong></summary>

- [Overview](#overview)
- [Features](#features)
- [Tools & Technologies](#tools--technologies)
- [Security](#security)
  - [Cross-Site Scripting (XSS) Prevention](#cross-site-scripting-xss-prevention)
  - [SQL Injection Prevention](#sql-injection-prevention)
  - [Password Hashing](#password-hashing)
  - [File Upload Security](#file-upload-security)
  - [Error Handling](#error-handling)
  - [Hosting Security with HTTPS and SSL Certificate](#hosting-security-with-https-and-ssl-certificate)
- [License](#license)

</details>

# Overview

**SoDrO**  web application that manages the preferences of a person regarding the consumption of non-alcoholic drinks (teas, dairy products, juices, syrups, etc.). The application allows users to view, add, modify and delete drinks from the database, as well as to filter drinks by category, price, ingredients, images and availability according to the geographical region. 

The application also provides support for creating shopping lists, managing users and generating various statistics that can be exported in open formats, CSV and PDF. The application also creates an RSS data feed based on website changes like a new drink was added, a new drink is in top views. Furthermore an RSS news feed is feeded to the main page of the website to provide to the viewer the freshest news about soft drinks. This news articles are updated constantly.

For populating the database, the data available freely at [Open Food Facts](https://world.openfoodfacts.org/) are used.

# Features

Some of the most noticeable features of the **SoDrO** are:

- **MVC Architecture:** The application follows the MVC (Model-View-Controller) architecture, ensuring efficient development and maintenance.
- **Object-Oriented Programming Paradigms:** The application adheres to the principles of object-oriented programming, enhancing code readability and maintainability.
- **Responsive Design:** The design is responsive and compatible with all devices, including desktops, tablets, and mobile phones.
- **Admin Module:** The admin module allows for managing users, drinks, RSS feeds, accessing detailed statistics about website traffic and products, and managing newsletters.
- **Advanced Product Search and Filtering:** Users can search for products and apply advanced filters for a better browsing experience.
- **RSS Feed Integration:** The application integrates an RSS feed for updates and fetches news articles about soft drinks from external sources.
- **Shopping List and Stats:** Logged-in users can manage their shopping list, view product stats, and export details about products and their shopping list.
- **Validated HTML and CSS:** The application uses validated HTML and CSS files to ensure compliance with web standards and best practices.
- **User Authentication and Session Management:** Users can create and manage their accounts, securely log in/out, and have personalized sessions.
- **Administrator Control:** Administrators can modify the database by adding, deleting, and modifying products/users.
- **Ranking System:** The application features a ranking system that showcases the most popular products based on views and user preferences.
- **AJAX Integration:** The application uses AJAX for creating interactive web applications, improving the speed, performance, and usability.



# Tools & Technologies

This project is developed using the following technologies (***no frameworks were used***):




- `HTML`, `CSS` and `JavaScript` for the frontend.

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/130px-HTML5_logo_and_wordmark.svg.png" alt="HTML5" height="100"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/120px-CSS3_logo_and_wordmark.svg.png" alt="CSS"  height="100">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/JavaScript-logo.png/600px-JavaScript-logo.png" alt="JavaScript" height="100">

- **`PHP`** and **`MySQL`** for the backend.

  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="PHP" height="100">
  <img src="https://upload.wikimedia.org/wikipedia/labs/8/8e/Mysql_logo.png" alt="MySQL" height="100">
  
- [**Chart.js**](https://www.chartjs.org/) for generating charts.
  
  <img src="https://avatars.githubusercontent.com/u/10342521?s=280&v=4" alt="Chart.js" height="100">
  
- **`XAMPP`** and **`phpMyAdmin`** for creating a local web server and managing the **MySQL database**.

  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/78/XAMPP_logo.svg/1200px-XAMPP_logo.svg.png" alt="XAMPP" height="100">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/PhpMyAdmin_logo.svg/2560px-PhpMyAdmin_logo.svg.png" alt="phpMyAdmin" height="100">
    
- [**InfinityFree**](https://www.infinityfree.com/) for hosting the web application online.


  <img src="https://www.infinityfree.com/images/logo-purple.png" alt="InfinityFree Logo" width="100">

# Security

## Cross-Site Scripting (XSS) Prevention

1. **Input Validation**
   - Validated and sanitized all user inputs on both the client and server sides.
   - Utilized validation libraries and built-in functions to ensure that user input matched the expected format.

2. **Output Encoding**
   - Before echoing user input back to the browser, used output encoding functions like `htmlspecialchars()` or `htmlentities()` to convert special characters into their respective HTML entities.
   - Exercised caution when using `innerHTML` or similar methods in JavaScript.

3. **HTTP Only Cookies**
   - Set the "HttpOnly" flag on cookies to prevent them from being accessed through JavaScript, reducing the risk of session theft.

## SQL Injection Prevention

1. **Prepared Statements**
   - Implemented parameterized queries or prepared statements with placeholders when interacting with databases, separating SQL code from user input.
     ```php
     $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
     $stmt->bindParam(':username', $username);
     $stmt->execute();
     ```

2. **Escaping Input**
   - If dynamic SQL queries were necessary, properly escaped and sanitized user inputs using functions like `mysqli_real_escape_string()`.
     ```php
     $username = mysqli_real_escape_string($conn, $username);
     $query = "SELECT * FROM users WHERE username = '$username'";
     ```

3. **Least Privilege Principle**
   - Used database accounts with the least privilege necessary, avoiding the use of accounts with administrative privileges for normal application operations.

4. **Database Connection Parameters**
   - Avoided using a database user with excessive permissions, limiting the user's access to only the necessary databases and tables.

5. **Error Handling**
   - Customized error messages for database errors to avoid exposing sensitive information.
   - Logged detailed errors to help developers identify and fix issues without exposing them to attackers.
     
## Password Hashing

   - Stored user passwords securely by hashing them using the `password_hash()` function with the **bcrypt algorithm**.
     ```php
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     ```

   - Verified user passwords using the `password_verify()` function during login.
   
   - Utilized the default hashing algorithm provided by `PASSWORD_DEFAULT`, which includes the **bcrypt algorithm** with a **unique salt** for each password.

## File Upload Security

- Implemented file upload security measures, including validation and sanitization of file types.
- Set file size limits for uploaded files.
- Stored uploaded files outside the web root to prevent direct access.

## Error Handling

- Customized error messages for database errors to avoid exposing sensitive information.
- Logged detailed errors to help developers identify and fix issues without exposing them to attackers.

## Hosting Security with HTTPS and SSL Certificate

- Configured the web server to use HTTPS to encrypt data in transit.
- Obtained and installed an SSL certificate issued by ZeroSSL to authenticate and secure the connection.
- Ensured all pages, including login and sensitive areas, are served over HTTPS.
- Regularly updated SSL certificates to prevent security vulnerabilities.


# License

[Insert license information for your project here]

\
\
Design: https://www.figma.com/file/EPPpcE64S6aG270jEM1J7f/Soft-Drinks-Organizer?node-id=101%3A205 \
\
Documentatie: https://ionuttabalae.github.io/Soft-Drinks-Organizer/
