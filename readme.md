# School Classroom Management System

## Project Structure

The project is organized into the following folders:

- **database**
  - `database-connection.php`: Handles the connection to the MySQL database.

- **functions**
  - `classroom-status.php`: Displays the status of classrooms, showing green if vacant and red if occupied.

- **layout**
  - `school-layout.php`: Displays the school layout like a blueprint.
  - `school-layout.css`: Styles for the school layout.


  - `zoom.php`: Displays the school layout with zoom functionality.
  - `zoom.css`: Styles for the zoom layout.
  - `zoom.js`: JavaScript for zoom functionality.

- **sidebar**
  - `sidebar.php`: Displays a sidebar with the names of teachers.
  - `sidebar.css`: Styles for the sidebar.
  - `sidebar.js`: JavaScript for sidebar functionality.


- **mock**
  - Contains practice and mock micro-interactions and systems for development.


![UI Screenshot](images/screenshot.png)

## Usage

1. Ensure a PHP server is set up.
2. Import the database using the SQL file provided in the `database` folder.
3. Configure the database connection in `database/database-connection.php`.
4. Open the application in a web browser.

## Features

- **Classroom Status:** `classroom-status.php` dynamically displays the status of classrooms.
- **School Layout:** `school-layout.php` and `zoom.php` provide visual representations of the school layout.
- **Sidebar:** `sidebar.php` displays a sidebar with teacher names.

## Contributing

Feel free to contribute to the project by submitting issues or pull requests.