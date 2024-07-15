# ContactInfo Laravel Project
![Screenshot (607)](https://github.com/user-attachments/assets/8c2e005b-5652-44f7-a11b-25f674bdf18d)
![Screenshot (608)](https://github.com/user-attachments/assets/adfbff94-f13d-4273-a55d-51c773563021)


---
## Overview

A simple contact information management system built with Laravel.

## Features

- Add, view, edit, and delete contact information

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/shakin-shahria/contactInfo_laravel.git
    cd contactInfo_laravel
    ```

2. **Install dependencies:**
    ```bash
    composer install
    ```

3. **Set up environment variables:**
    ```bash
    cp .env.example .env
    ```
    Update `.env` with your database credentials.

4. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run the migrations:**
    ```bash
    php artisan migrate
    ```

6. **Serve the application:**
    ```bash
    php artisan serve
    ```

    Access the app at `http://localhost:8000`.

## Usage

- **Add Contact:** `http://localhost:8000/contacts/create`
- **View Contacts:** `http://localhost:8000/contacts`
- **Edit Contact:** Click "Edit" next to a contact
- **Delete Contact:** Click "Delete" next to a contact

