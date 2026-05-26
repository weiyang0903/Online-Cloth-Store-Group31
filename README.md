# COLIFE - Online Cloth Store

This project (Group 31) is an online clothing e-commerce system built with **PHP and MySQL**. The system is divided into two main parts: a **Customer Interface** and a **Staff/Admin Interface**. It covers the complete shopping process, from browsing products and adding them to the cart, to staff management and calculating total profit.

## 🌟 Features

### Customer Features
- **Account:** User registration, login, and profile management.
- **Browse Categories:** Browse clothing by categories (Men, Women, Kids).
- **Shopping Cart:** Add, edit, or remove items in the cart, and proceed to checkout and payment.
- **Orders:** View order history and leave product ratings.
- **Profile:** Update personal information and a Contact Us page.

### Staff Features
- **Staff Login:** A dedicated login page for staff members.
- **Product Management:** Add, edit, and remove products. Manage stock and categories.
- **Orders & Customers:** View order history records and manage registered user accounts.
- **Staff Management:** View the staff list and manage staff evaluations.
- **Reports:** View total profit data and sales overview.

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP (Native)
- **Database:** MySQL
- **Environment:** Recommended to use **XAMPP**, WAMP, or any similar local server

## 📂 Directory Structure

```text
├── cus_page/           # Customer frontend pages (Home, Categories, Cart, Payment, etc.)
├── staff/              # Staff & Admin pages (Products, Orders, Staff management updates)
├── login_signin/       # Login and sign-up pages (For both users and staff)
├── product_picture/    # Product images (Organized by category)
├── logo/ & photo/      # System logos, background images, and UI assets
├── colife.sql          # Database SQL export file (Used to setup the database)
├── database.php        # Database connection configuration file
├── index.html          # Main landing page for the website
└── README.md           # This project readme file
```

## 🚀 Installation & Setup

1. **Install Server:** Download and install XAMPP. Make sure Apache and MySQL can start properly.
2. **Move Project:** Place this whole project folder (`Online-Cloth-Store-Group31`) inside the `htdocs/` folder of XAMPP.
   - Example path: `C:\xampp\htdocs\Online-Cloth-Store-Group31`
3. **Start Services:** Open the XAMPP Control Panel and click **Start** for both `Apache` and `MySQL`.
4. **Setup Database:**
   - Open your browser and go to `http://localhost/phpmyadmin/`.
   - Create a new database and name it **`colife`**.
   - Select the newly created `colife` database, click on the "Import" tab at the top.
   - Choose the **`colife.sql`** file from the project folder and import it.
5. **Database Connection:**
   - The default database connection is configured in `database.php`:
     ```php
     $connect= mysqli_connect("localhost","root","","colife");
     ```
   - If your local MySQL has a password, please update it in this file.
6. **Open the Website:** 
   - Open your browser and visit: `http://localhost/Online-Cloth-Store-Group31/index.html`

## 👥 About
- **Project Name:** COLIFE Online Cloth Store
- **Created By:** Chin Wei Yang (Leader), Lee Zheng Wei, and Kenneth Liew Kai Lun
- **Group:** Group 31
- **Repo Name:** Online-Cloth-Store-Group31