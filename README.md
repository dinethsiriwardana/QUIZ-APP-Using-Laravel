<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Online Quiz Application

This is a web-based application for conducting quizzes online. This application allows users to create courses, add quizzes to each course separately, and attempt quizzes. Users can get marks and correct answers after attempting a quiz.

## Features

-   User authentication (Login and Register)
-   Course management (Add courses)
-   Quiz management (Add quizzes to each course separately)
-   Quiz attempt (Attempt quizzes and get marks and correct answers)

## Technologies Used

This application is built using Laravel Framework and MySQL database.

## Installation

1.  Clone the repository
    
    bashCopy code
    
    ```sh
    git clone https://github.com/your-username/online-quiz-app.git
    ``` 
    
2.  Switch to the project folder
    
    bashCopy code
    
    ```sh
    cd online-quiz-app
    ``` 
    
3.  Install dependencies
    
    Copy code
    
    ```sh
    composer install
    ``` 
    
4.  Create a `.env` file from the example
    
    bashCopy code
    
    ```sh
    cp .env.example .env
    ``` 
    
5.  Generate an application key
    
    vbnetCopy code
    
    ```sh
    php artisan key:generate
    ``` 
    
6.  Configure your database in the `.env` file
    
    makefileCopy code
    
    ```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ``` 
    
7.  Run database migrations
    
    Copy code
    
    ```sh
    php artisan migrate
    ``` 
    
8.  Start the development server
    
    Copy code
    
    ```sh
    php artisan serve
    ``` 
    

## Usage

1.  Register an account and login
2.  Add courses
3.  Add quizzes to each course separately
4.  Attempt quizzes and get marks and correct answers

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).