# FW - MBOUtrecht E-commerce Platform

A modern e-commerce web application built with Laravel for selling sneakers and other products. This project is developed as part of the MBOUtrecht curriculum.

## 🚀 Project Overview

This web application provides a complete e-commerce solution featuring:
- Product catalog and browsing
- Shopping cart functionality
- User authentication and profiles
- Order management system
- Admin dashboard for inventory and order management
- Role-based access control

## 📋 Features

### Customer Features
- **Homepage**: Browse featured products and categories
- **Product Pages**: Detailed product information with add-to-cart functionality
- **Shopping Cart**: Manage items and proceed to checkout
- **User Profiles**: Account management and order history
- **Authentication**: Secure login and registration system

### Admin Features
- **Product Dashboard**: Add, edit, and manage products
- **Order Management**: View and process customer orders
- **User Management**: Manage customer accounts and roles
- **Category Management**: Organize products into categories
- **Sales Analytics**: Track sales and performance

### Planned Features
- Order placement and completion
- Wishlist functionality
- Email notifications for orders
- Advanced search and filtering

## 🛠️ Tech Stack

- **Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Frontend**: Bootstrap 5.3.8 with Bootstrap Icons
- **Database**: MySQL/SQLite
- **Authentication**: Laravel built-in auth
- **Permissions**: Spatie Laravel Permission
- **Build Tools**: Vite
- **Testing**: PHPUnit

## 📊 Database Structure

The application uses the following main database tables:
- `users` - User accounts and authentication
- `products` - Product catalog
- `categories` - Product categorization
- `product_categories` - Many-to-many relationship between products and categories
- `cart` - Shopping cart (temporary storage)
- `cart_products` - Cart items
- `orders` - Customer orders
- `shipping_addresses` - Customer shipping information
- `invoices` - Order invoicing

## 🔧 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ddylvianen/FW-MBOUtrecht.git
   cd FW-MBOUtrecht
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   # Configure your database in .env file
   php artisan migrate
   php artisan db:seed
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

## 🚀 Development

### Running the application
```bash
# Start all development services (server, queue, logs, vite)
composer run dev
```

Or run services individually:
```bash
# Start Laravel development server
php artisan serve

# Start Vite development server
npm run dev

# Start queue worker
php artisan queue:work

# Monitor logs
php artisan pail
```

### Testing
```bash
# Run all tests
composer run test

# Or use PHPUnit directly
php artisan test
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint
```

## 📁 Project Structure

```
app/
├── Http/Controllers/    # Application controllers
├── Models/             # Eloquent models
├── Providers/          # Service providers
└── View/Components/    # Blade components

database/
├── migrations/         # Database migrations
├── seeders/           # Database seeders
└── factories/         # Model factories

resources/
├── views/             # Blade templates
├── css/               # Stylesheets
├── js/                # JavaScript files
└── sass/              # Sass files

routes/
├── web.php            # Web routes
└── console.php        # Console commands
```

## 📝 Development Progress

### ✅ Completed
- Database structure design and migrations
- User authentication system
- Role and permission system setup
- Basic project structure

### 🔄 In Progress
- Product catalog implementation
- Shopping cart functionality
- User interface development

### 📋 Todo
- Order placement system
- Wishlist functionality
- Cart implementation
- User registration flow
- Admin dashboard
- Email notifications
- Payment integration

## 🤝 Contributing

This is a student project for MBOUtrecht. For questions or suggestions, please reach out to the development team.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👥 Team

Developed by students at MBOUtrecht as part of the web development curriculum.

---

*Last updated: October 2025*
