# Social Media Application

This is a social media application built with the Laravel framework. It provides features for user authentication, creating posts, reacting to posts, commenting on posts, and managing friendships.

## About The Project

This project is a social media platform that allows users to connect with each other, share their thoughts, and interact with content. It is built using the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire is not used here, but it is a common part of the stack).

### Built With

*   [Laravel](https://laravel.com/)
*   [PHP](https://www.php.net/)
*   [Tailwind CSS](https://tailwindcss.com/)
*   [Alpine.js](https://alpinejs.dev/)
*   [Vite](https://vitejs.dev/)
*   [MySQL](https://www.mysql.com/)

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

*   PHP >= 8.2
*   Composer
*   Node.js & npm
*   A database (e.g., MySQL)

### Installation

1.  Clone the repo
    ```sh
    git clone https://github.com/ahsan-alam-500/social.git
    ```
2.  Install PHP dependencies
    ```sh
    composer install
    ```
3.  Install NPM packages
    ```sh
    npm install
    ```
4.  Create a copy of your .env file
    ```sh
    cp .env.example .env
    ```
5.  Generate an app encryption key
    ```sh
    php artisan key:generate
    ```
6.  Configure your database in the `.env` file.
7.  Run the database migrations
    ```sh
    php artisan migrate
    ```
8.  Build frontend assets
    ```sh
    npm run build
    ```
9.  Start the development server
    ```sh
    php artisan serve
    ```

## Features

*   **User Authentication:** Register, login, and logout.
*   **Posts:** Create, read, update, and delete posts.
*   **Reactions:** React to posts with different types of reactions.
*   **Comments:** Comment on posts.
*   **Friends:** Send, accept, and decline friend requests.
*   **Notifications:** Receive notifications for friend requests, reactions, and comments.
*   **Violations:** Report and manage content violations.

## Database Schema

The database schema is defined in the migration files located in `database/migrations`. The main tables are:

*   `users`: Stores user information.
*   `posts`: Stores user posts.
*   `reactions`: Stores reactions to posts.
*   `comments`: Stores comments on posts.
*   `friends`: Stores friendship relationships.
*   `notifications`: Stores user notifications.
*   `violations`: Stores content violation reports.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
