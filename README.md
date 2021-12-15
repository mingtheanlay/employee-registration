# Employee Registration

This project is created by using Laravel, AlphineJS and TailwindCSS following by CRUD functionality.

## Installation

### 1. Clone this project by using Github cli

```bash
git clone https://github.com/mingtheanlay/employee-registration.git
cd employee-registration
```

### 2. Install Composer Dependencies

```bash
composer install
```

### 3. Install NPM Dependencies

```bash
npm install
```


### 5. Create a copy of your .env file, and config your database

Laravel's default .env file contains some common configuration values that may differ based on whether your application is running locally or on a production web server. These values are then retrieved from various Laravel configuration files within the config directory using Laravel's env function. In this case, make sure you create the database and config your database in the **.env** file.

```bash
cp .env.example .env
```

### 6. Generate an app encryption key

```bash
php artisan key:generate
```

### 7. Migrate the database

```bash
php artisan migrate
```

### 8. [Optional]: Seed the database

```bash
php artisan db:seed
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
