# PHP Calculator Project 🧮

A simple calculator web app with user authentication built using **PHP + MySQL + Bootstrap**.

## 🚀 Features
- User Registration & Login
- Secure password hashing
- Session-based authentication
- Calculator (Add, Subtract, Multiply, Divide)
- Bootstrap responsive UI

## 📂 Project Structure
- `config.php` → Database connection
- `register.php` → User signup
- `login.php` → User login
- `logout.php` → Logout
- `calculator.php` → Calculator (only logged-in users can access)
- `auth.php` → Authentication check
- `db.sql` → Database schema

## ⚙️ Setup Instructions
1. Import `db.sql` into MySQL
2. Update `config.php` with your DB credentials
3. Start Apache & MySQL (using XAMPP/WAMP)
4. Open in browser:  
   - `http://localhost/calculator-project/register.php`
   - `http://localhost/calculator-project/login.php`

## 🛠️ Tech Used
- PHP (Core)
- MySQL
- Bootstrap 5
