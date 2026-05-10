# SocialNet Project

## Overview

SocialNet is a simple social networking web application developed using PHP, MySQL, Nginx, and Linux.

The application allows users to:
- Create user accounts
- Sign in to the system
- View profiles
- Edit profile descriptions
- Browse profiles of other users
- Navigate between pages using a shared navigation bar

---

# Setup Instructions

## Requirements

The following software is required:

- Linux
- Nginx
- PHP
- MySQL

---

## Clone Repository

Clone the repository:

```bash
git clone <repository-url>
```

Move into the project directory:

```bash
cd <repository-folder>
```

---

## Database Setup

The repository contains a file named `db.sql`.

Run the following command to create:
- database
- MySQL user
- required tables

```bash
sudo mysql < db.sql
```

---

## Nginx Configuration

Configure Nginx so the application can be accessed from the browser.

Example root directory:

```text
/var/www/socialnet
```

Restart Nginx after configuration:

```bash
sudo systemctl restart nginx
```

---

## Accessing the Application



asdfa




```text
http://localhost/socialnet/signin.php
```

Admin page:
```text
http://localhost/admin/newuser.php
```

---

# Part 2: Application Features

## Admin Page

URL:

```text
/admin/newuser.php
```

Features:
- Create new user accounts
- Store user information into database
- Password hashing before storing passwords

---

## SignIn Page

URL:

```text
/socialnet/signin.php
```

Features:
- User authentication
- Session creation after successful login
- Redirect to Home Page after successful login

---

## Home Page

URL:

```text
/socialnet/index.php
```

Features:
- Display logged in user information
- Display list of other users
- Access profile pages of other users
- Shared navigation bar
- Redirect unauthenticated users to SignIn Page

---

## Setting Page

URL:

```text
/socialnet/setting.php
```

Features:
- Edit profile description
- Save profile description into database
- Shared navigation bar

---

## Profile Page

URL:

```text
/socialnet/profile.php
```

Optional query string:

```text
?owner=username
```

Features:
- Display profile owner information
- Display profile description
- View profiles of other users
- Shared navigation bar

---

## About Page

URL:

```text
/socialnet/about.php
```

Features:
- Display student name
- Display student number
- Shared navigation bar

---

## SignOut Page

URL:

```text
/socialnet/signout.php
```

Features:
- Destroy session data
- Redirect user after sign out

---

## MenuBar

The following pages contain a shared MenuBar:

- Home Page
- Setting Page
- Profile Page
- About Page

Menu items:
- Home
- Setting
- Profile
- About
- SignOut

---

# Database Structure

Database name:

```text
socialnet
```

Table:

```text
account
```

Columns:
- id
- username
- fullname
- password
- description

---

# Additional Notes

- Passwords are stored using PHP password hashing.
- Prepared statements are used for database queries.
- Session validation is implemented for protected pages.
- The application uses PHP sessions for authentication and access control.
