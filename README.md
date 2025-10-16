# KattechPC – Modern Gaming E-Commerce Website 🖥️

![PHP](https://img.shields.io/badge/PHP-8.0-blue?logo=php) ![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel) ![MySQL](https://img.shields.io/badge/MySQL-8.x-green?logo=mysql) ![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-blue?logo=tailwind-css) ![License](https://img.shields.io/badge/License-MIT-green)

Welcome to **KattechPC**! 🚀 This is a modern e-commerce website specializing in Gaming PCs, custom builds, and gaming gear, built with Laravel's robust backend and a sleek, responsive frontend. Think of it as a full-stack Shopify alternative for gamers – complete with a powerful CMS for admins to manage inventory, orders, promotions, and users, plus an intuitive shopping experience for customers to browse, customize, and buy.

## 📋 Project Overview
As a web dev, imagine you're building an online store like Newegg but laser-focused on gaming. KattechPC handles everything from product catalogs to flash sales, with a drag-and-drop admin panel that's as easy as WordPress but way more powerful. It answers questions like:
- 🛒 Which gaming rigs are in stock and ready to ship?
- 💸 How's the revenue from today's flash sale looking?
- 🔧 Can I let customers build their dream PC step-by-step?
- ⚠️ Are there any low-stock alerts or order delays?

Powered by **Laravel** for the backend, **Blade templates** with **Tailwind CSS** for the frontend, and a bunch of slick JS plugins (like FullCalendar for events and ApexCharts for analytics), this app is optimized for high-traffic e-commerce with SEO-friendly slugs and social logins.

## 🗃️ Database
The system uses **MySQL** with key tables like:
- **Products**: Stores gaming gear details (like `products` in WooCommerce). Columns: `id`, `name`, `price`, `stock`, `category_id`, `brand_id`, `attributes` (JSON for specs like RAM/CPU).
- **Orders**: Manages customer purchases (like `orders`). Columns: `id`, `user_id`, `total`, `status`, `shipping_method`.
- **Categories**: Hierarchical categories (parent-child). Columns: `id`, `name`, `parent_id`, `slug`.
- **Users**: Customers and staff (like `users`). Columns: `id`, `name`, `email`, `role`, `profile`.
- **Coupons**: Promo codes and discounts. Columns: `id`, `code`, `discount`, `expiry_date`, `usage_limit`.

📂 Migrations and seeders are in `database/migrations/` and `database/seeders/`, with relationships handled via Eloquent ORM for easy querying (e.g., products belonging to categories).

## 🛠️ Environment Requirements
To run KattechPC, you need:
- **PHP**: 8.0 or higher (Laravel 10.x requires it) 🐘
- **Node.js**: 16.x or higher (for frontend assets and plugins) 🌐
- **MySQL**: 8.x or higher (or any Laravel-supported DB) 🗄️
- **Composer**: For PHP dependencies (like npm) 📦
- **System**: Linux, macOS, or Windows (WSL works great) 💻
- **Dependencies** (in `composer.json` and `package.json`):
  - `laravel/framework`: Backend core, like Express.js for PHP.
  - `spatie/laravel-permission`: Role-based access, like middleware for auth.
  - `laravel/socialite`: Social logins (FB, Google), like OAuth in Next.js.
  - Frontend libs: ApexCharts, CKEditor, DataTables, Dropzone, FullCalendar, SweetAlert2, Swiper.

## ⚙️ Setup Instructions
Follow these steps to get KattechPC running, like spinning up a fresh Laravel e-commerce site:

1. **Clone the Repository** 📥:
   ```bash
   git clone https://github.com/binhchay1/kattechpc.git
   cd kattechpc
   ```

2. **Install Backend Dependencies** 📦:
   Ensure [Composer](https://getcomposer.org/) is installed, then run:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies** 🌐:
   Ensure [Node.js](https://nodejs.org/) is installed, then run:
   ```bash
   npm install
   npm run dev
   ```

4. **Configure the Environment** 🛠️:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with database and app details:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=kattechpc
     DB_USERNAME=your_username
     DB_PASSWORD=your_password

     APP_NAME="KattechPC"
     APP_URL=http://localhost:8000
     ```

5. **Generate Application Key** 🔑:
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations and Seeders** 🗄️:
   Set up the database schema and seed sample data (products, categories, users):
   ```bash
   php artisan migrate --seed
   ```

7. **Start the Application** 🚀:
   Run the Laravel dev server:
   ```bash
   php artisan serve
   ```
   Access the app at `http://localhost:8000`.

## 🚀 How to Run
1. **Start the Server** 🌐:
   Use `php artisan serve` for development or configure Apache/Nginx for production.

2. **Test the Application** ▶️:
   - Visit `http://localhost:8000` for the customer storefront (browse products, add to cart).
   - Access the admin CMS at `http://localhost:8000/admin` (login with seeded admin: `admin@kattechpc.com` / `password`).
   - Test features: Build a PC, apply a coupon, view order analytics.

3. **Stop the Server** 🛑:
   Ctrl+C to stop `php artisan serve` or your web server.

## 📁 Project Structure
Like a typical Laravel e-commerce app, here’s the layout:
```
kattechpc/
├── app/                  # Core logic, like src/ in a Node.js app 🛠️
│   ├── Models/          # Eloquent models (Product, Order, User) 📊
│   └── Http/Controllers/
├── database/             # Migrations and seeders 🗄️
│   ├── migrations/
│   └── seeders/
├── resources/            # Frontend assets, like src/ in a React app 🎨
│   ├── views/           # Blade templates for storefront and admin
│   ├── css/             # Tailwind CSS
│   └── js/              # Plugins like ApexCharts, FullCalendar
├── public/               # Public directory 🌐
│   └── index.php
├── routes/               # Web and API routes 🚏
├── .env.example          # Environment config 📋
├── .gitignore            # Excludes storage/, vendor/, etc. 🚫
├── composer.json         # Backend dependencies 📋
├── package.json          # Frontend dependencies 📋
├── README.md             # You're reading it! 📖
└── LICENSE               # MIT License 📜
```

## 📈 Key Features
### 👑 Admin CMS
- **Product & Inventory Management**: CRUD for products with images, brands, nested categories, and attributes (like JSON specs for CPU/RAM) 🔧
- **Category & Brand Management**: Multi-level categories (parent-child) with auto-generated SEO slugs 🧭
- **Order & Shipping Management**: Track orders, auto-update stock, handle payments/shipping, and generate reports 🛒
- **Coupons & Promotions**: Create discounts, flash sales, bundles; track usage 💸
- **Blog & Reviews**: Manage posts, tags, SEO; moderate user reviews 🧾
- **User & Role Management**: RBAC for admins, sellers, support; 2FA support 👥
- **UI Customization**: Dynamic layouts, banners, social links, YouTube embeds 🎨

### 🛍️ Frontend Store
- **Responsive Design**: Mobile-first UI with Tailwind CSS 🖥️
- **Search & Filters**: Advanced product search by gaming specs 📊
- **Dynamic Cart**: AJAX cart updates, quick checkout, warranty add-ons 🛒
- **PC Builder**: Interactive tool to customize rigs (like a config wizard) 🛠️
- **Reviews & Ratings**: User comments and star ratings on products ⭐
- **Social Login**: FB, Google, YouTube auth via Laravel Socialite 🔗
- **Dynamic Sections**: Auto-show flash sales, top sellers, hot deals 🔥

## 💡 Recommendations
Like optimizing a web app based on analytics:
- **Performance**: Cache product queries with Redis for faster loads 🚀
- **SEO**: Use Laravel's built-in meta tags and sitemaps for better Google ranking 🌐
- **Payments**: Integrate VNPay or Stripe for VN/international checkout 💳
- **Analytics**: Hook up Google Analytics or mixpanel for user behavior tracking 📊
- **Scalability**: Deploy on Forge/Vapor for auto-scaling during sales peaks 🛒

## 🛠️ Troubleshooting
- **Error: `Class not found`** ⚠️: Run `composer install` or `composer dump-autoload`.
- **Database Connection Failed** 🚫: Check `.env` credentials and ensure MySQL is running.
- **Frontend Assets Not Loading** 🌐: Run `npm run dev` or `npm run build`.
- **Admin Login Issues** 🔒: Use seeded credentials; check roles in `php artisan tinker`.
- **Plugin Errors** (e.g., FullCalendar): Verify npm installs and JS includes in Blade templates.

## 🤝 Contributing
Feel free to fork, submit PRs, or open issues! Treat it like contributing to an open-source Laravel e-commerce package. 🌟

## 📜 License
MIT License (see `LICENSE`).

## 📞 Contact
Got questions? Reach out via [GitHub Issues](https://github.com/binhchay1/kattechpc/issues) or email (setup in `.env` for admin contact).
