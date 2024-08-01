# BO Webshop

This is my final project for BO Module 4 "Webshop".

## About

For this assignment each student was assigned a well known webshop to copy the design from (for me, https://geurwolkje.nl/).
I copied the design over pretty closely while making some slight design changes I thought looked better.
I made the webshop close to functional. It's missing an admin panel and order processing system, however those weren't required whatsoever, as we didn't even really needed to add a backend.

## Features

- Full mobile support
- Basic backend with no vulnerabilities
- Recently visited section
- Filter and search page
- Shopping cart
- Darkmode

## Technologies Used

- **Frontend**: HTML, SCSS, JavaScript
- **Backend**: PHP, MySQL

## Setup

### Prerequisites

- Git
- Docker

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Spoorloos/bo_webshop.git
   cd bo_webshop
   ```

2. Build and run the Docker containers:
   ```bash
   docker-compose up -d
   ```

4. Create a file called ".env" inside the public/ directory and insert the following:
   ```dotenv
   DB_HOST=mariadb
   DB_USER=admin
   DB_PASSWORD=verysecurepassword
   DB_SCHEMA=webshop_db
   ```

5. Open your browser and navigate to:
   ```
   http://localhost:88
   ```

## Contributing

Contributions are welcome! Please fork the repository and create a pull request for any changes you'd like to make.
