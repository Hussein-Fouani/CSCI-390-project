# Bookly – Online Bookstore (CSCI 390 Project)

A small online bookstore built with PHP and MySQL for the CSCI 390 course at LIU. Registered users can browse books, add them to a cart, place orders and send messages to the store.

## Tech Stack

- PHP 8.2+ (procedural `mysqli`)
- MySQL / MariaDB
- HTML and CSS

## Features

- User registration and login (session based)
- Home page with the latest 6 products and a shop page listing all products
- Product search by name
- Shopping cart: add products with a quantity, update quantities, remove one item or clear the cart, running sub-totals and grand total
- Checkout form (name, phone, email, payment method, address) that saves the order and empties the cart
- Orders page showing the user's placed orders and their payment status
- Contact form that stores messages in the database

## Project Structure

| File | Purpose |
|------|---------|
| `configuration.php` | Database connection |
| `registration.php`, `login.php` | Account creation and login |
| `home.php`, `shop.php`, `search_page.php` | Browsing products and adding them to the cart |
| `cart.php`, `checkout.php`, `orders.php` | Cart, placing orders, order history |
| `contact.php` | Contact form |
| `header.php`, `footer.php` | Shared layout |
| `shop_db.sql` | Database schema (`users`, `products`, `cart`, `orders`, `message`) |
| `images/` | Book cover images |

## How to Run

1. Install [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP 8.2+ + MySQL setup).
2. Copy the project folder into `htdocs`, e.g. `C:\xampp\htdocs\CSCI-390-project`.
3. Start Apache and MySQL from the XAMPP control panel.
4. In phpMyAdmin, create a database named `shop_db` and import `shop_db.sql`.
5. The SQL file only creates the tables, so add some books to the `products` table (`name`, `price`, `image`), using file names from the `images/` folder for `image`, e.g.:

   ```sql
   INSERT INTO products (name, price, image) VALUES ('Python Crash Course', 30, 'pythoncrashcourse.jpg');
   ```

6. Open `http://localhost/CSCI-390-project/registration.php`, create an account, then log in.

### Database configuration

`configuration.php` reads the connection settings from environment variables and falls back to the XAMPP defaults:

| Variable | Default |
|----------|---------|
| `DB_HOST` | `localhost` |
| `DB_USER` | `root` |
| `DB_PASSWORD` | *(empty)* |
| `DB_NAME` | `shop_db` |
