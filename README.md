# 💼 Employee Management System (PHP & MySQL)

A modern **Employee Management System** built using **PHP, MySQL, HTML, and CSS** with a beautiful **Pink–Purple Gradient UI**.

This project allows users to **add, view, edit, and delete employee records** through a clean and responsive interface.

---

## 🚀 Features

✅ Add Employee
✅ View Employee Records
✅ Edit Employee Details
✅ Delete Employee with Confirmation Alert
✅ Success Messages via URL
✅ Modern Gradient Admin UI
✅ Responsive Design
✅ MySQL Database Integration

---

## 🛠️ Technologies Used

* PHP (Core PHP)
* MySQL
* HTML5
* CSS3
* XAMPP / Apache Server

---

## 📂 Project Structure

```
employee-management-system/
│
├── add_employee.php        
├── table.php               
├── edit_employee.php       
├── delete_employee.php     
├── db.php                  
├── style.css               
└── README.md
```

---

## 🗄️ Database Setup

### Step 1 — Create Database

```sql
CREATE DATABASE company_db;
USE company_db;
```

### Step 2 — Create Employees Table

```sql
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(100),
    age INT,
    salary DECIMAL(10,2),
    department VARCHAR(100),
    phone VARCHAR(20),
    address VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Video Link:
This video elaborates the functionaliy of the project:
https://drive.google.com/file/d/1_k83LRHqRmQa8QUqO9fpKYvbNXEn2CX_/view?usp=drivesdk

---

## 📸 System Modules

### ➕ Add Employee

Insert employee details into database.

### 📋 View Employees

Displays all employees in table format.

### ✏️ Edit Employee

Update employee information.

### 🗑️ Delete Employee

Delete employee with confirmation popup.

---

## 🎨 UI Design

* Pink & Purple Gradient Theme
* Modern Card Layout
* Smooth Buttons & Hover Effects
* Responsive Table Design

---

## 👨‍💻 Author

**Your Name Here**

GitHub: https://github.com/emanfarooq26

---

## 📄 License

This project is open-source and free to use for learning purposes.


