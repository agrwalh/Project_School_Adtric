# The Manthan School — News & Events & Admission Enquiry Portal

A full-stack Laravel 11 web application built strictly in accordance with the task instructions and design mockups for **The Manthan School, Noida**.

---

## 📋 Submission Checklist

| # | Item | Details / Value |
|---|---|---|
| 1 | **Live Website URL** | `https://your-domain.com` *(Replace with deployed Hostinger domain)* |
| 2 | **Admin Panel URL** | `https://your-domain.com/admin` |
| 3 | **Admin Login ID** | `admin@manthan.edu.in` *(or `admin@school.com`)* |
| 4 | **Admin Password** | `Admin@123456` |
| 5 | **GitHub Repository** | Complete source code, migrations, seeders, tests, and documentation |
| 6 | **CRM Webhook Config** | Configured in `.env` via `CRM_WEBHOOK_URL` (free webhook.site URL supported) |
| 7 | **Test Suite** | 42 unit & feature tests passing (161 assertions) |

---

## 🛠️ Technology Stack
- **Framework**: Laravel 11.x (PHP 8.2+)
- **Database**: MySQL 8.x
- **Frontend / Templating**: Blade, Tailwind CSS, Vite
- **Client Scripting**: Vanilla JavaScript (`fetch` API — *strictly no Livewire, no Inertia*)
- **Authentication**: Laravel Breeze (Blade stack)
- **Deployment**: Hostinger compatible (root domain access without `/public` in the URL)

---

## ✨ Implemented Features & Requirements

### 1. Website & Blade Frontend
- **Pixel-Accurate Design**: Faithfully styled after the provided school mockup (`Manthan School Noida`), featuring royal navy (`#0c2340`), vibrant brand pink (`#e60067`), curved wave section dividers, and clean typography (`Outfit` + `Plus Jakarta Sans`).
- **"THE EVENT DIARY" (Homepage)**: Displays the **latest 3 published items** with category badges (*News*, *Event*, *Achievement*), formatted event dates, titles, summaries, and links.
- **"View All" Page (`/news-events`)**:
  - Displays all published news, events, and achievements.
  - Interactive **category filter buttons** (*All*, *Events*, *News*, *Achievements*).
  - Responsive pagination.
- **Single Item Detail Page (`/news-events/{slug}`)**:
  - Dynamic SEO `<title>{{ $item->title }} | The Manthan School Noida</title>`.
  - Dynamic `<meta name="description" content="...">`.
  - OpenGraph social sharing meta tags (`og:title`, `og:description`, `og:image`).
  - Related events recommendation sidebar and quick campus visit CTA.
- **Interactive Campus Visit FAQs**: Accordion component with the 8 parent questions from the design mockup.
- **Campus Details & Map Section**: Complete contact info, address (*Sector 78, Noida, UP 201301*), helpline numbers, and office hours.

### 2. Admission Enquiry Form (AJAX & Backend Validation)
- **Fields**: Parent Name, Student / Child Name, Programme of Interest (Toddlers to Grade 2), Mobile Number, Email Address (optional), Message (optional), Consent checkbox.
- **AJAX Submission**: Submitted asynchronously via vanilla JavaScript `fetch()` without full-page reloads.
- **Field-Level Inline Validation Errors**: Form Request (`StoreAdmissionEnquiryRequest`) returns structured JSON errors displayed directly beneath each respective field with red border highlights.
- **Indian Mobile Validation**: Strict regex validation (`/^[6-9]\d{9}$/`) ensuring a 10-digit Indian mobile number starting with 6, 7, 8, or 9.
- **24-Hour Deduplication Rule**: If an enquiry with the same mobile number for the same class has been submitted within the last 24 hours, the record is not re-saved, and the user receives the exact message: `"We have already received your enquiry."`
- **Rate Limiting (Good to have)**: Throttled to 5 requests per minute per IP (`throttle:5,1`).

### 3. CRM Webhook Integration
- **Non-Blocking Fault-Tolerance**: After saving the enquiry, the system sends an HTTP POST JSON payload to `CRM_WEBHOOK_URL` using Laravel's HTTP client with a **5-second timeout**.
- **Resilience**: If the CRM endpoint is slow, unreachable, or returns an error, the form submission **still succeeds** for the user.
- **Audit Logging**: The status is recorded on the enquiry record as `Sent` or `Failed`, along with response details, and failures are logged via `Log::error`.
- **Queued Job Support (Good to have)**: `SyncEnquiryToCrmJob` with 3 retries and 30-second backoff.

### 4. REST API (Mobile App Ready)
- `GET /api/news-events`: Returns published news and events with category filtering (`?category=Event`) and pagination (`?per_page=6`), formatted through `NewsEventResource`.
- `GET /api/news-events/{slug}`: Returns a single published item by its unique slug via `NewsEventResource`.

### 5. Admin Panel (`/admin`)
- **Authentication Guard**: Protected under `auth` middleware; unauthenticated visits to `/admin` redirect to `/login`.
- **Pre-filled Evaluation Login**: Login screen features a one-click auto-fill helper for reviewer convenience (`admin@manthan.edu.in` / `Admin@123456`).
- **Dashboard Overview**: Summary metric cards (Total News/Events, Published count, Total Enquiries, New, Contacted, Closed, CRM Sent, CRM Failed), recent submissions table.
- **News & Events Management**:
  - Full CRUD: List, Add, Edit, Delete.
  - Form fields: Title, Category (*News*, *Event*, *Achievement*), Date, Image upload (JPG, PNG, WebP $\le$ 2MB), Short description, Content, Published toggle (yes/no).
  - Unique SEO slug generated automatically from title.
- **Admission Enquiry Management**:
  - Sorted newest first with pagination.
  - Filter by status (*All*, *New*, *Contacted*, *Closed*).
  - Search by parent name, child name, mobile, or email.
  - **Inline AJAX Status Update**: Dropdown allows instant status changes (*New* $\rightarrow$ *Contacted* $\rightarrow$ *Closed*) without page reload, confirmed with a toast alert.
  - **CRM Delivery Status Badge**: Shows `Sent` (green) or `Failed` (red) with full error message tooltip.
  - **CSV Export (Good to have)**: Single-click export of filtered or all enquiries to a `.csv` file.

---

## 🚀 Local Installation & Setup

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd Proj-School
   ```

2. **Install PHP and Node dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Set your MySQL credentials and CRM webhook URL in `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=school_db
   DB_USERNAME=root
   DB_PASSWORD=your_password

   CRM_WEBHOOK_URL=https://webhook.site/your-unique-token
   ```

4. **Run Migrations & Seeders**:
   ```bash
   php artisan migrate:fresh --seed
   php artisan storage:link
   ```

5. **Build Assets & Start Server**:
   ```bash
   npm run build
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000` to view the website, or `http://127.0.0.1:8000/admin` for the admin panel.

6. **Run Test Suite**:
   ```bash
   php artisan test
   ```

---

## 🌐 Hostinger Deployment Guide (Root Domain without `/public`)

### Method 1: Root `.htaccess` (Recommended for Hostinger hPanel)
This repository includes a root `.htaccess` file that transparently rewrites all incoming requests to the `public/` directory:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

1. Upload the project files to `public_html` on Hostinger.
2. Ensure the root `.htaccess` and `public/.htaccess` are present.
3. In Hostinger hPanel:
   - Create a MySQL database and user.
   - Update `.env` with production DB credentials and `APP_DEBUG=false`, `APP_ENV=production`.
   - Run `php artisan migrate --seed` via Hostinger SSH terminal or import the generated SQL dump.
   - Run `php artisan storage:link` (or create a symlink from `public/storage` to `storage/app/public`).
4. Set permissions:
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```
5. The website opens cleanly from `https://your-domain.com` without `/public` in the URL!

---

## 🔒 Security Best Practices
- **No Credentials in Git**: `.env` is listed in `.gitignore` and omitted from the repository. Only `.env.example` is committed.
- **CSRF Protection**: All form submissions (standard and AJAX) validate `X-CSRF-TOKEN`.
- **Secure File Uploads**: Image uploads strictly validate MIME types (`jpg, jpeg, png, webp`) and maximum file size (2048 KB).
- **SQL Injection Prevention**: Built entirely with Eloquent ORM and parameterized PDO queries.
- **XSS Protection**: Blade templating automatically escapes output.
