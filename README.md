# Laravel Dentisted Project

## Introduction

Welcome to the Laravel dentisted Project! This project is designed to provide a robust point of sale system built with
Laravel, a popular PHP framework.

## Prerequisites

Before you begin, make sure you have installed all the necessary software on your system:

-   PHP 8.0 or higher
-   Composer (PHP package manager)
-   Node.js and npm (Node package manager)
-   Git (Version control system)

## Setup Instructions

### Step 1: Clone the Repository

Start by cloning the project repository from GitHub to your local machine:

```bash
git clone https://github.com/saing-saroeun/PCU_Web_II.git
cd PCU_Web_II
```

### Step 2: Install Dependencies

Install all required PHP and JavaScript dependencies:

```bash
composer install || composer install --ignore-platform-reqs
npm install
```

### Step 3: Set Up Environment

Copy the sample environment configuration file and edit it to match your local settings:

```bash
cp .env.example .env
```

### Step 4: Launch the Application

Run the Laravel development server along with the npm environment to compile assets:

```bash
npm run dev
php artisan serve
```
