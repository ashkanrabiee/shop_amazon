
# 🛒 Advanced Laravel E-commerce Project

A powerful and scalable **E-commerce platform** built with **Laravel**, designed with both **end-user experience** and **admin control** in mind.

This project includes everything a modern online shop needs — from **product management** and **discounts**, to **SMS/email notifications**, and a powerful **admin panel**.

---

## 🚀 Features

### 🎛 Admin Panel `http://127.0.0.1:8000/admin`

- Product & inventory management
- Discount system
- Order & shipping management
- Role-based access control
- Site banners & custom features
- Send SMS or Email announcements directly from admin panel

### 🛠 Technical Highlights

- 📦 Modular and service-based architecture
- 📁 Custom image upload service
- 🔐 OTP-based authentication
- ✉️ Email support (file attachments included)
- 📆 Jalali date support for Persian users
- 🎨 Clean UI with SweetAlert & Toast notifications
- 🗑 Soft deletes for safe data handling

---

## 📦 Used Packages

```bash
slug                # For generating SEO-friendly URLs
intervention/image  # Image manipulation and resizing
softdelete          # Laravel's built-in SoftDeletes
morilog/jalali      # Jalali date support in models & views
realrashid/sweetalert # SweetAlert2 integration for alerts
codersrank/toast    # Toast-style notifications (customizable)


📷 Image Upload Service
All images (products, banners, etc.) are uploaded via a custom service that handles:

Automatic resizing

Storage path management

Default fallback images

Integration with intervention/image

🔐 Authentication
The project supports:

OTP-based login via SMS (custom driver or API)

Email verification

Password reset

Session and token-based auth for API and web

📩 Notifications
Admins can easily send messages to users via:

✅ SMS

✅ Email (supports attachments)

✅ Both — from within the admin panel

📸 Screenshots (Coming Soon)
Include some images or GIFs of your admin panel and product listing for more impact.


➜ git clone https://github.com/your-username/ecommerce-project.git
➜ cd ecommerce-project

# 📦 Install dependencies
➜ composer install
➜ npm install && npm run dev

# ⚙️ Set up environment
➜ cp .env.example .env
➜ php artisan key:generate

# 🛠 Run database migrations with seed data
➜ php artisan migrate --seed

# 🚀 Start the development server
➜ php artisan serve



📝 License
This project is open-source and licensed under the MIT License.

💬 Contribution
Feel free to fork this repo and send pull requests. Ideas and improvements are always welcome!




