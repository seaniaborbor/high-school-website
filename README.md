# CodeIgniter 4 School Website

Welcome to the CodeIgniter 4 School Website project! This full-stack application is designed to serve as a comprehensive platform for managing a school's online presence. Administrators can log in and perform CRUD (Create, Read, Update, Delete) operations on blog/news posts, manage team members, handle staff (instructors working with the school), and maintain a list of courses offered by the school.

## Features

- **User Authentication:** Administrators can log in securely to access the admin dashboard.

- **Blog/News Management:** Create, edit, view, and delete blog posts to keep the community updated with the latest news and information.

- **Team Management:** Admins can manage the team members who contribute to the website. This could include various roles such as developers, designers, or any other contributors.

- **Staff Management:** Maintain a list of instructors or staff members associated with the school. Update their information as needed.

- **Course Management:** Admins can manage the courses offered by the school. This includes adding new courses, updating existing ones, and removing outdated courses.

## Requirements

- PHP 7.3 or newer
- Composer
- CodeIgniter 4
- Database (e.g., MySQL, PostgreSQL, SQLite)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/seaniaborbor/school-website.git
   ```

2. Navigate to the project directory:
   ```bash
   cd school-website
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Configure your database connection in the `.env` file.

5. Run migrations to set up the database:
   ```bash
   php spark migrate
   ```

6. Serve the application:
   ```bash
   php spark serve
   ```

7. Access the application in your browser at `http://localhost:8080` (or the specified port).

## Usage

- Access the admin dashboard by logging in with your credentials.
- Navigate to the respective sections to perform CRUD operations on blog posts, team members, staff, and courses.

## Contributing

Contributions are welcome! Feel free to fork the repository, create a new branch, and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For any inquiries, please contact Tarnue Pythagoras Borbor  at [https://web.facebook.com/tarnue.borbor/].

Happy coding! 🚀