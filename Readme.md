# Unity Care Clinic – PHP 8 OOP CLI

A robust console application for managing clinic data (patients, doctors, departments) using **PHP 8 Object-Oriented Programming** and **MySQL**, developed as an internal tool for the Unity Care Clinic team.

## 📋 Overview

Unity Care Clinic CLI is a refactored Object-Oriented version of the existing procedural web application. It provides a clean, maintainable command-line interface for rapid internal data management without requiring web browser access.

**Key objectives:**
- Refactor business logic into a clean OOP architecture
- Implement full CRUD operations for patients, doctors, and departments
- Provide statistical insights via static methods
- Ensure data persistence with MySQLi (OO approach)
- Create an interactive console menu system

## ✨ Features

- **Patient Management**  
  - Create, list, search, update, delete patients
  - Track medical history and department assignment
  - Calculate average patient age across the clinic

- **Doctor Management**  
  - Create, list, search, update, delete doctors
  - Manage specialties and years of service
  - Calculate average years of service

- **Department Management**  
  - Create, list, update, delete departments
  - Track capacity and assigned staff/patients
  - Identify most populated department

- **Statistics Dashboard**  
  - Average patient age
  - Average years of service (doctors)
  - Most populated department
  - Patient count by department
  - All displayed in formatted ASCII tables

- **Data Validation**  
  - Email format validation
  - Phone number validation
  - Date validation
  - Input sanitization

## 🛠 Tech Stack

- **Language:** PHP 8 (OOP)
- **Database:** MySQL
- **Database Access:** MySQLi (object-oriented, prepared statements)
- **Design:** UML, ERD
- **Version Control:** Git / GitHub

## 📁 Project Structure

unity-care-clinic-cli/
├── app/
│ ├── Models/
│ │ ├── BaseModel.php # Parent class for all entities
│ │ ├── Personne.php # Parent class for Person
│ │ ├── Patient.php # Patient entity
│ │ ├── Doctor.php # Doctor entity
│ │ └── Department.php # Department entity
│ ├── Core/
│ │ ├── Database.php # Singleton DB connection
│ │ ├── Validator.php # Static validation methods
│ │ ├── ConsoleTable.php # ASCII table formatter
│ │ └── Interfaces/
│ │ └── Displayable.php # Data display interface
│ └── Menus/
│ ├── MainMenu.php # Main navigation
│ ├── PatientMenu.php # Patient CRUD menu
│ ├── DoctorMenu.php # Doctor CRUD menu
│ └── DepartmentMenu.php # Department CRUD menu
├── config/
│ └── database.php # Database credentials
├── sql/
│ └── schema.sql # Database setup & sample data
├── docs/
│ ├── ERD.png # Entity Relationship Diagram
│ ├── UML_Classes.png # Class diagram
│ └── UseCases.png # Use case diagram
├── index.php # Application entry point
├── .gitignore
└── README.md


## 🏗 Architecture

### Core Classes

**BaseModel** (Parent)
- `save()` – Insert or update entity
- `delete()` – Remove entity from database
- `findById($id)` – Retrieve single entity
- `getId()` – Get entity ID

**Personne** (Abstract, extends BaseModel)
- Properties: firstName, lastName, email, phone, birthDate
- Methods: `getFullName()`, `__toString()`

**Patient** (extends Personne)
- Properties: departmentId, medicalHistory
- Static methods: `calculateAverageAge()`, `countByDepartment()`

**Doctor** (extends Personne)
- Properties: specialty, yearsOfService, departmentId
- Static methods: `calculateAverageYearsOfService()`

**Department** (extends BaseModel)
- Properties: name, capacity
- Static methods: `getMostPopulated()`

**Validator** (Static utility class)
- `isValidEmail($email): bool`
- `isValidPhone($phone): bool`
- `isValidDate($date): bool`
- `isNotEmpty($input): bool`
- `sanitize($input): string`

**Displayable Interface**
- `toArray(): array` – Convert entity to array
- `getDisplayHeaders(): array` – Get table column headers

## 🚀 Installation

### Prerequisites
- PHP 8.0 or higher
- MySQL 5.7 or higher
- Git

### Steps

1. **Clone the repository:**
git clone https://github.com/khalil-elqaddabi/Unity-Care-CLI.git



3. **Configure database connection:**
Edit `config/database.php` with your credentials:

```php
return [
'host' => 'localhost',
'user' => 'root',
'password' => '',
'database' => 'unity_care_clinic',
'port' => 3306,
];
```


## 💻 Usage

### Main Menu
=== Unity Care CLI ===

- Gérer les patients

- Gérer les médecins

- Gérer les départements

- Statistiques

- Quitter


### Patient Management 
=== Gestion des Patients ===

- Lister tous les patients

- Rechercher un patient

- Ajouter un patient

- Modifier un patient

- Supprimer un patient

- Retour



## ✅ Quality Standards

### OOP Best Practices
- ✓ Encapsulation (private properties, getters/setters)
- ✓ Inheritance via BaseModel and Personne
- ✓ Interface implementation (Displayable)
- ✓ Singleton pattern for Database
- ✓ Static methods for utilities and statistics

### Database Security
- ✓ Prepared statements (prevents SQL injection)
- ✓ Error handling with try/catch
- ✓ Externalized configuration
- ✓ MySQLi OO approach

### Code Quality
- ✓ Clear folder structure
- ✓ PascalCase for classes, camelCase for methods
- ✓ Meaningful comments
- ✓ DRY principle (Don't Repeat Yourself)

## 📊 Database Schema

Tables include:
- `patients` – Patient records
- `doctors` – Doctor records
- `departments` – Department information
- `specialties` – Doctor specialties

See `sql/schema.sql` for complete schema with relationships.

## 📚 Documentation

- **ERD** (`docs/ERD.png`) – Database relationships
- **UML Classes** (`docs/UML_Classes.png`) – Class structure and inheritance
- **Use Cases** (`docs/UseCases.png`) – System interactions

## 🧪 Testing

Run through each CRUD operation for all three entities:
1. Create new records with valid and invalid data
2. List all records with ASCII table formatting
3. Search records by ID and name
4. Update existing records
5. Delete records
6. Verify statistics calculations

## 👤 Author

- **Name:** Soufiane Isam
- **Promotion:** [Your Classroom Name]
- **Duration:** 5 days (22/12/2025 - 26/12/2025)

## 📝 License

This project is developed for internal use at Unity Care Clinic.

## 🔗 Resources

- [PHP OOP – W3Schools](https://www.w3schools.com/php/php_oop_what_is.asp)
- [MySQLi OOP – PHP Manual](https://www.php.net/manual/en/mysqli.quickstart.dual-interface.php)
- [PHP 8 OOP Documentation](https://www.php.net/manual/en/language.oop5.php)

---

**Ready to run:** After installation, simply execute `php index.php` to start managing clinic data!


