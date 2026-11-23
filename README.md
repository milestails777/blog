# Blog

A Laravel blog project about database structure and how to work with it.

## What you need

Install these programs:

- [Visual Studio Code](https://code.visualstudio.com/) (Windows 10 or newer)
- [Git](https://git-scm.com/download/win)
- PHP 8.3 or newer
- [Composer](https://getcomposer.org/download/)
- [Bun](https://bun.sh/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) for the MariaDB database (should be docker-compose.yml too)

Open Git Bash and install VS Code, Git, PHP, Composer, and Docker Desktop with WinGet:

```bash
winget install --id Microsoft.VisualStudioCode -e
winget install --id Git.Git -e
winget install --id PHP.PHP.8.5 -e
winget install --id Composer.Composer -e
winget install --id Docker.DockerDesktop -e
```
or you can do it by installing them manually in GUI setups.

Install Bun from Git Bash using its Windows installer:

```bash
powershell.exe -NoProfile -ExecutionPolicy Bypass -Command "irm https://bun.sh/install.ps1 | iex"
```

Close and reopen Git Bash after installation so it picks up the updated PATH. Start Docker Desktop and wait for it to finish starting.

## Clone the project

```bash
git clone https://github.com/milestails777/blog.git
cd blog
```

## Check PHP extensions

Find the `php.ini` file used by your terminal:

```bash
php --ini
```

Open the file shown as **Loaded Configuration File** in a text editor. Make sure these extensions are enabled. If a line starts with `;`, remove the semicolon:

```ini
extension=bcmath
extension=curl
extension=fileinfo
extension=mbstring
extension=openssl
extension=pdo_mysql
```

Save `php.ini`, restart Git Bash, and check the loaded extensions:

```bash
php -m
```

PHP also needs its standard `ctype`, `dom`, `filter`, `hash`, `PDO`, `session`, `tokenizer`, and `xml` features. They are usually enabled by default.

## Install dependencies

From the project folder, install the PHP and frontend packages:

```bash
composer install
bun i
```

## Set up the environment

Create your local environment file and generate the app key:

```bash
cp .env.example .env
php artisan key:generate
```

The example environment is already set up for the MariaDB database in `docker-compose.yml`.

## Start the database and run migrations

Make sure Docker Desktop is running, then start the database by running this command:

```bash
docker compose up -d 
```

Wait for MySQL-MariaDB to finish starting, then create the database tables:

```bash
php artisan migrate
```

## Run the project

Start the Laravel and frontend development server:

```bash
composer run dev
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser. Press `Ctrl+C` in the terminal to stop the development servers.
