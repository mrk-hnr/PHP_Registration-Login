# Registration/Login - PHP

Another basic PHP project. It's a simple registration and login project that utilizes MySQL.

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
