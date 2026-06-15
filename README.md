# Math Exercises Generator

A simple Laravel web application designed to generate random math exercises (addition, subtraction, multiplication, and division) within configurable number ranges.

## About the Project

I know this project is simple, but it was created to keep my Laravel practices up to date and to practice web development concepts. 

Through this project, I practice and reinforce concepts like:
- **MVC Architecture**: Using Laravel Controllers, Views (Blade templates), and Routing.
- **Form Validation**: Handling required inputs, numeric ranges, and displaying user-friendly error messages.
- **Blade Templating**: Using layouts, extending templates, and passing variables to views.
- **PHP Logic**: Handling array functions, loops, conditions, and random number generation.

## Features

- **Select Operations**: Addition (`+`), Subtraction (`-`), Multiplication (`x`), and Division (`÷`).
- **Configurable Ranges**: Define the minimum and maximum values for the numbers in the exercises.
- **Quantity Control**: Generate up to 50 exercises at a time.
- **Answers Key**: Check the solutions right below the list of generated exercises.

## How to Run the Project Locally

1. Clone or download the repository.
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy the environment file and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Start the Laravel development server:
   ```bash
   php artisan serve
   ```
5. Open your browser and navigate to `http://localhost:8000`.
