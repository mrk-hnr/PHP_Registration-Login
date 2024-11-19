# Registration/Login - PHP

Another basic PHP CRUD project. It's a simple registration and login project that utilizes MySQL.

<hr>

### How It's Made:

**PHP**

- Manually created table in MySQL
- Connected PHP with MySQL via PDO method (db.php).
- Registration (Saving Data)
  - Created PHP that when the input box are filled, it is saved into MySQL when submit is clicked.
  - validator file makes sure all fields are filled with respective error messages.
  - Password is hashed.
- Logging In (Verifying Data(?))
  - validator validates that username and password are exist in MySQL, with respective error messages.
  - Prevents access to index page.
- Index (Displaying Data)
  - Displays username and email upon login.
  - Prevents access to Registration and Login page.
- Update
  - Allows users to change their username, email, and password

**CSS/SASS**

- Implemented SASS styling the login-registration page.

**JavaScript**

- Created script that enables toggling of class in order to implement an animation.
- Created script that allows a "panel" to be visible and hide all other panel.
- Added an alert on deactivation of account (deletion of data)

<hr>

Quickstart MySQL Query:

```
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);
```

<hr>

## Tech used:

![HTML5](https://img.shields.io/badge/-HTML5-1d1f21?style=flat&logo=HTML5)
![CSS3](https://img.shields.io/badge/-CSS3-1d1f21?style=flat&logo=CSS3)
![SASS](https://img.shields.io/badge/-Sass-1d1f21?style=flat&logo=Sass&logoColor=CC6699)
![JavaScript](https://img.shields.io/badge/-JavaScript-1d1f21?style=flat&logo=javascript)
![PHP](https://img.shields.io/badge/PHP-1d1f21?&logo=php)
![MySQL](https://img.shields.io/badge/-MySQL-1d1f21?style=flat&logo=MySQL)
