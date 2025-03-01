# Sutharrsh PHP Router Boilerplate

## Overview
This repository provides a simple PHP router boilerplate for handling basic routing in PHP applications without requiring a framework.

## Directory Structure
```
└── sutharrsh-php-router-boiler-plate/
    ├── LandingPage.php     # Example landing page
    ├── Router.php          # Core router logic
    ├── index.php          # Entry point for the application
    ├── style.css          # Basic styling for the project
    └── .htaccess          # URL rewriting rules
```

## Installation & Setup

### 1. Clone the Repository
```sh
git clone https://github.com/yourusername/sutharrsh-php-router-boiler-plate.git
cd sutharrsh-php-router-boiler-plate
```

### 2. Setup Local Server
Ensure you have a local PHP environment (Apache with mod_rewrite enabled). You can start a PHP built-in server using:
```sh
php -S localhost:8000
```
Then, open `http://localhost:8000` in your browser.

### 3. Configure `.htaccess`
Ensure that the `.htaccess` file is correctly configured for URL rewriting to enable clean URLs.

## Usage
- Define routes in `Router.php`
- Add new pages or logic in `LandingPage.php` or other files
- Style your pages using `style.css`

## Contributing
Feel free to fork this repository and submit pull requests to improve functionality.

## License
This project is licensed under [MIT License](LICENSE).

