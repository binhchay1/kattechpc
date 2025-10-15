# 🖥️ KattechPC – Website Bán Hàng Gaming Hiện Đại

**KattechPC** là website thương mại điện tử chuyên cung cấp **sản phẩm Gaming & PC Custom**, được xây dựng bằng **Laravel** với **hệ thống quản trị (CMS) mạnh mẽ** và **giao diện bán hàng chuyên nghiệp, hiện đại**.

---

## 🚀 Tổng Quan

KattechPC hướng đến trải nghiệm **mượt mà – linh hoạt – trực quan** cho cả người mua lẫn quản trị viên, với đầy đủ tính năng quản lý sản phẩm, đơn hàng, khuyến mãi và kho hàng chuyên nghiệp.

---

## 👑 Hệ Thống Quản Trị (Admin CMS)

### 🔧 Quản Lý Sản Phẩm & Kho Hàng
- Thêm, sửa, xóa sản phẩm nhanh chóng.
- Quản lý **hình ảnh, thương hiệu, danh mục** (quan hệ cha – con).
- Theo dõi **số lượng tồn kho**, cập nhật tự động khi có đơn hàng.
- Hỗ trợ **nhiều loại sản phẩm** (PC, linh kiện, gaming gear...).
- Tổ chức **thuộc tính sản phẩm** (RAM, CPU, VGA, màu sắc, v.v.).

### 🧭 Quản Lý Danh Mục & Thương Hiệu
- Hỗ trợ **phân cấp danh mục** (cha – con nhiều cấp).
- Quản lý **thương hiệu** gắn với sản phẩm.
- Hệ thống **slug** và **SEO meta** tự động.

### 🛒 Quản Lý Đơn Hàng & Vận Chuyển
- Theo dõi tình trạng đơn hàng (đang xử lý, giao hàng, hoàn thành...).
- Tự động cập nhật tồn kho và doanh thu.
- Quản lý phương thức thanh toán, vận chuyển, báo cáo thống kê.

### 💸 Mã Giảm Giá & Chương Trình Khuyến Mãi
- Tạo và quản lý **coupon giảm giá**, **flash sale**, **combo ưu đãi**.
- Hỗ trợ **gói bảo hành mở rộng**, **chính sách quà tặng**.
- Theo dõi lịch sử sử dụng mã giảm giá.

### 🧾 Quản Lý Bài Viết, Blog & Đánh Giá
- Tạo, chỉnh sửa, phân loại **bài viết / tin tức**.
- Hỗ trợ **SEO**, **tag**, **slug** thân thiện.
- Quản lý **bình luận, đánh giá** của người dùng trên sản phẩm.

### 👥 Quản Lý Người Dùng & Nhân Viên
- Quản lý **tài khoản người dùng, nhân viên, quản trị viên**.
- Tạo **các cấp nhân viên** (Admin, Editor, Seller, Support...).
- **Phân quyền chi tiết** theo vai trò (Role-Based Access Control).
- Quản lý thông tin profile, bảo mật 2 lớp.

### 🎨 Quản Trị Giao Diện
- Tùy chỉnh **Landing Page**, **layout động**.
- Quản lý **Banner, Video Youtube, Social Links**.
- Tích hợp **Social Login** (Facebook, Google, YouTube...).

---

## 🛍️ Tính Năng Cửa Hàng (Frontend)

- **Giao diện Responsive**, tối ưu cho PC, tablet, mobile.
- **Tìm kiếm & lọc sản phẩm** theo nhu cầu gaming.
- **Giỏ hàng động**, **thanh toán nhanh**, chọn gói bảo hành.
- **Build PC**: cấu hình máy tính theo sở thích cá nhân.
- **Đánh giá & bình luận trực tiếp** trên sản phẩm.
- **Flash sale, top sale, hot product** hiển thị tự động.
- **Xác thực mạng xã hội**: đăng nhập bằng Facebook, Google, YouTube.

---

## 🔌 Công Nghệ & Plugin Sử Dụng

**Frontend:**
- Blade Template (Laravel)
- Responsive UI/UX hiện đại

**Plugins & Libraries:**
- `ApexCharts` – biểu đồ thống kê
- `CKEditor` – soạn thảo nội dung
- `DataTables` – bảng dữ liệu động
- `Dropzone` – upload file kéo thả
- `Flatpicker` – chọn ngày/giờ
- `FullCalendar` – lịch sự kiện
- `Lightbox` – hiển thị hình ảnh
- `SweetAlert2` – thông báo đẹp
- `Swiper` – slider sản phẩm
- `Tippy.js` – tooltip nâng cao

**Stack Công Nghệ:**
- Backend: **Laravel (PHP)**
- Frontend: **JavaScript, Blade, CSS**
- Database: **MySQL**
- Auth: **Laravel Breeze / Socialite**

---

## ⚙️ Hướng Dẫn Cài Đặt

```bash
# 1️⃣ Clone source code
git clone https://github.com/binhchay1/kattechpc.git

# 2️⃣ Cài đặt dependencies
composer install
npm install && npm run dev

# 3️⃣ Cấu hình môi trường
cp .env.example .env
php artisan key:generate

# 4️⃣ Tạo và seed database
php artisan migrate --seed

# 5️⃣ Khởi động server
php artisan serve
