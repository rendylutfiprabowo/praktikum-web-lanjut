# 💻 Assignment 1 - Advanced Web Programming Lab

This repository contains the source code for **Assignment 1** of the **Praktikum Web Lanjut** course.

---

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is lightweight, fast, flexible, and secure.
More information can be found at the [official website](http://codeigniter.com).

This repository contains a composer-installable app starter for CodeIgniter 4.
It has been built from the [development repository](https://github.com/codeigniter4/CodeIgniter4).

Refer to the [user guide](https://codeigniter4.github.io/userguide/) for full documentation.

---

## 🚀 Quick Setup Guide

### 1. Download & Install

- Download the `.zip` file of this repository.
- Extract the contents.
- Open a terminal in the project directory.
- Run the following command (⚠️ use `install`, not `update`):

```bash
composer install
```

---

### 2. Fix Events Constant Conflict (if needed)

If you encounter this error:

```
Constant EVENT_PRIORITY_LOW already defined
```

Do the following steps:

- Open this file:

  ```
  vendor/codeigniter4/framework/system/Events/Events.php
  ```

- Change this:

```php
define('EVENT_PRIORITY_LOW', 200);
define('EVENT_PRIORITY_NORMAL', 100);
define('EVENT_PRIORITY_HIGH', 10);
```

- To this:

```php
defined('EVENT_PRIORITY_LOW')   || define('EVENT_PRIORITY_LOW', 200);
defined('EVENT_PRIORITY_NORMAL')|| define('EVENT_PRIORITY_NORMAL', 100);
defined('EVENT_PRIORITY_HIGH')  || define('EVENT_PRIORITY_HIGH', 10);
```

This ensures the constants are only defined if they haven’t been already.

---

### 3. Set Up Environment Configuration

- Copy the file `.env.example` or `env` to `.env`:

```bash
cp env .env
```

- Edit `.env` and update your base URL and database configuration:

```dotenv
app.baseURL = 'http://localhost:8080'
database.default.database = web-lanjut
```

---

## ⚙️ Important Change with `index.php`

Starting from CodeIgniter 4, `index.php` is now located inside the `/public` folder.
This improves security by keeping your core system and app files outside of the web root.

> ✅ You should configure your web server's document root to point to `/public`, not the root of your project.

---

## 📦 Server Requirements

- PHP version 7.4 or higher
- Enabled PHP extensions:

  - `intl`
  - `curl` (libcurl)
  - `json` (default)
  - `mbstring`
  - `mysqlnd`
  - `xml` (default)

---

## 🧩 Repository Management

- Bug reports and development tasks are tracked in the [main repository](https://github.com/codeigniter4/CodeIgniter4/issues).
- For **support** and **feature discussions**, visit our [official forum](http://forum.codeigniter.com).

---
