# Yacht Management System ⛵

**Yacht Management System** is a Laravel-based web application developed as part of a laboratory exercise for the course *Implementation of Free and Open Source Systems*. The system provides a complete solution for managing private yachts, allowing users to browse available yachts, book trips, and leave reviews. It includes full CRUD functionality, reservation workflows, and review management with robust data validation and business logic.

## 🎯 Project Purpose
- Demonstrate Laravel capabilities in building real-world management systems.
- Provide hands-on experience with CRUD operations, data validation, and design patterns.
- Emphasize clean architecture with observer patterns and factory support for testing.

## 🌟 Key Features

### 🛥️ Yacht Management
- **List & Search Yachts:** Display all yachts with search and filter options (e.g., by type: *super yacht*, *classic*).
- **Create Yachts:** Add new yachts with validations on type, capacity, and hourly rate.
- **Edit Yachts:** Update yacht details at any time.
- **Delete Yachts:** Automatically remove related reservations and reviews via Laravel observers.

### 📆 Reservation Management
- **Book Trips:** Users can submit reservations with proper validation. All new reservations are set to `pending` by default.
- **Update Status:** Admins or owners can confirm or cancel reservations.
- **Filter & List:** Reservations can be listed and filtered by status, with detailed yacht and user info.

### 📝 Review Management
- **Submit Reviews:** Users can leave reviews only for confirmed reservations.
- **Display Reviews:** Show all reviews with filters by status, including related yacht and reservation info.

### ✅ Validation & Business Logic
- Enforce strong data integrity for all models.
- Automatically handle cascading deletions of dependent data.
- Use of Laravel observers to manage model state and associated cleanup.

### 🧪 Factory Support
- **Sample Data Generation:** Easily generate yachts, reservations, and reviews using Laravel factories for development and testing.

## 🛠️ Technologies Used
- **Backend:** PHP (Laravel Framework)
- **Frontend:** Blade Templates, HTML, CSS (Bootstrap optional)
- **Database:** MySQL
- **Testing:** Laravel Factories, Seeders, Artisan commands

## 🚀 Educational Value
This project is ideal for:
- Learning Laravel’s MVC architecture and Eloquent ORM.
- Practicing the Observer Design Pattern in real applications.
- Understanding cascading deletions and data lifecycle management.
- Exploring CRUD systems with relational integrity and business rules.
