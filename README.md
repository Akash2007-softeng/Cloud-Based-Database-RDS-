# Cloud-Based Database (Amazon RDS)

## Overview

Cloud-Based Database (Amazon RDS) is a simple web application developed using PHP and MySQL. The project demonstrates how to connect a web application to a cloud-hosted relational database using Amazon RDS. It allows users to manage student records through basic CRUD (Create, Read, Update, Delete) operations.

---

## Features

* Add Student Records
* View Student Records
* Edit Student Details
* Delete Student Records
* Search Students by Name
* Connect to Amazon RDS MySQL Database
* Simple and Responsive User Interface

---

## Technologies Used

* HTML
* CSS
* JavaScript
* PHP
* MySQL
* Amazon RDS
* XAMPP (for local testing)

---

## Project Structure

```text
Cloud-RDS-Project/
│── index.php
│── add.php
│── edit.php
│── delete.php
│── search.php
│── database.php
│── style.css
│── database.sql
└── README.md
```

---

## Database

**Database Name:** `studentdb`

**Table:** `students`

| Column     | Type                              |
| ---------- | --------------------------------- |
| id         | INT (AUTO_INCREMENT, PRIMARY KEY) |
| name       | VARCHAR(100)                      |
| email      | VARCHAR(100)                      |
| department | VARCHAR(100)                      |
| phone      | VARCHAR(15)                       |

---

## Installation

1. Download or clone this repository.
2. Place the project folder inside the `htdocs` folder of XAMPP.
3. Create a MySQL database named `studentdb`.
4. Import the `database.sql` file.
5. Update the database credentials in `database.php`.
6. Start Apache and MySQL from the XAMPP Control Panel.
7. Open your browser and visit:

```
http://localhost/Cloud-RDS-Project/
```

For Amazon RDS, replace the localhost database credentials in `database.php` with your Amazon RDS endpoint, username, password, and database name.

---

## Project Workflow

1. Open the application.
2. View the list of student records.
3. Add a new student.
4. Edit existing student details.
5. Delete unwanted records.
6. Search for students by name.

---

## Learning Outcomes

* Understand cloud-hosted databases.
* Connect PHP applications with Amazon RDS.
* Perform CRUD operations using MySQL.
* Build a simple database-driven web application.
* Gain practical experience with cloud database management.

---

## Future Enhancements

* User Login Authentication
* Export Records to CSV or PDF
* Student Photo Upload
* Advanced Search and Filters
* Dashboard with Statistics

---

## Author
**name**:Akash Balaji
**internid**:CITS6087
**domain**:cloud computing

Internship Project – Cloud-Based Database (Amazon RDS)
