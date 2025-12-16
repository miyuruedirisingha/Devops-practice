# PHP Login System with Docker

A simple login system built with PHP, MySQL, and Docker.

## Features

- User authentication with email and password
- Admin dashboard with statistics and recent activity
- Database connector class with singleton pattern
- Prepared statements to prevent SQL injection
- Responsive design

## Requirements

- Docker
- Docker Compose

## Installation & Setup

1. **Clone or navigate to the project directory**

2. **Update database connection (if needed)**
   Edit `dbcon.php` to change the database host to `db` (the Docker MySQL service name):
   ```php
   private string $host = 'db';
   ```

3. **Start the Docker containers**
   ```bash
   docker-compose up -d
   ```

4. **Access the application**
   - Main Application: http://localhost:8080
   - phpMyAdmin: http://localhost:8081

## Default Login Credentials

- **Email**: admin@gmail.com
- **Password**: 1234

## Docker Services

- **web**: PHP 8.2 with Apache (Port 8080)
- **db**: MySQL 8.0 (Port 3306)
- **phpmyadmin**: phpMyAdmin interface (Port 8081)

## Project Structure

```
.
├── dbcon.php           # Database connector class
├── process.php         # Login authentication handler
├── index.html          # Login page
├── home.php           # Admin dashboard
├── login.css          # Login page styles
├── dashboard.css      # Dashboard styles
├── dockerfile         # Docker configuration
├── docker-compose.yml # Docker Compose configuration
└── init.sql          # Database initialization script
```

## Stopping the Application

```bash
docker-compose down
```

To remove volumes as well:
```bash
docker-compose down -v
```

## Development

The project files are mounted as volumes, so any changes you make will be reflected immediately without rebuilding the container.
