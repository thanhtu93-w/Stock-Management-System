# Stock Management System - Git Management Presentation

This project is a **Stock Management System** built with PHP and MySQL, used as a case study for presenting "Project Management on Git".

## 📋 Project Overview
A web-based application designed to manage inventory, track sales and purchases, handle supplier and customer information, and generate various business reports.

## ✨ Key Features
- **Dashboard**: Quick overview of stock status.
* **Master Management**: Handle Categories, Customers, Suppliers, and Units of Measure (UOM).
- **Stock Operations**: Manage Stock Entries, Purchases, and Sales.
- **Reports**: Detailed reports for Sales, Purchases, and overall stock availability.
- **Payment Tracking**: Record and monitor payments for entries and sales.
- **Authentication**: Secure login and session management.

## 🛠️ Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript, jQuery.
- **Backend**: PHP (Legacy/Modern compatibility).
- **Database**: MySQL.

---

## 🚀 Git Management & Team Roles
This project demonstrates how to organize a team using Git & GitHub. The work is divided among 4 members:

### 1. Git Lead & Initialization (Person 1)
- **Role**: Setting the foundation and security.
- **Tasks**:
  - Initialize the **GitHub Repository**.
  - Configure `.gitignore` and `README.md`.
  - Set **Commit Message** standards (Conventional Commits).

### 2. Workflow & Policy (Person 2)
- **Role**: Defining the project "laws".
- **Tasks**:
  - Choose Branching Strategy (e.g., **GitHub Flow**).
  - Set **Naming Conventions** for branches (`feature/`, `bugfix/`).
  - Manage **Collaborators** & **Branch Protection** on GitHub.

### 3. Daily Workflow (Person 3)
- **Role**: Core feature implementation.
- **Tasks**:
  - Daily loop: `git clone` -> `git checkout -b`.
  - Syncing work: `git add` -> `git commit` -> `git push` to GitHub.

### 4. Maintenance & Quality (Person 4)
- **Role**: Monitoring history and handling fixes.
- **Tasks**:
  - Audit history using `git status`, `git log`, and `git diff`.
  - Use `git stash` for temporary work saving.
  - Quick fixes using `git commit --amend`.

---

## 📦 How to Run Locally
1. Clone the repository:
   ```bash
   git clone <your-repository-url>
   ```
2. Move the project folder to your local server (e.g., `htdocs` for XAMPP).
3. Import the database:
   - Open PHPMyAdmin.
   - Create a database named `stock`.
   - Import the `stock.sql` or `latest db.sql` file from the project directory.
4. Update database configuration in `db.php` if necessary.
5. Open your browser and navigate to `http://localhost/stock-management-system`.

---
*Created for the "Managing Projects on Git" Presentation.*
