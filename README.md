# Simple SQL Injection Vulnerable Web Application

This is a simple web application written in PHP that is vulnerable to SQL injection. It is intended for educational purposes to demonstrate how SQL injection vulnerabilities can be exploited and how to fix them.

## Deployment

To deploy this application, you will need:

*   An Apache or Nginx web server
*   PHP
*   A MySQL database server

### Steps:

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    ```
2.  **Navigate to the project directory:**
    ```bash
    cd <project_directory>
    ```
3.  **Configure the database:**
    *   Open `database.php` and update the database credentials (`$servername`, `$username`, `$password`, `$dbname`) to match your MySQL server configuration.
4.  **Set up the database and table:**
    *   Open a web browser and navigate to `http://localhost/path/to/your/project/setup.php`. This will create the database `vuln_sqli` and a `users` table with some sample data.
5.  **Run the application:**
    *   Navigate to `http://localhost/path/to/your/project/index.php`. You should see a login form.

## SQL Injection Vulnerability

The login form in `index.php` is vulnerable to SQL injection. To exploit it, you can enter the following in the username field:

```
' OR '1'='1
```

And any password in the password field. This will log you in as the first user in the database (in this case, `admin`).

## Fixing the Vulnerability

The `fix-sqli` branch contains the code with the SQL injection vulnerability fixed. To see the fix, checkout the branch:

```bash
git checkout fix-sqli
```
