# Huster Store ✨ - Smart E-commerce Platform

Huster Store là một nền tảng thương mại điện tử thông minh chuyên bán giày dép trực tuyến, mang lại trải nghiệm mua sắm nhanh chóng và tiện lợi.

## 🚀 Công nghệ sử dụng
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: Microsoft SQL Server
- **Version Control**: GitHub

## 📌 Các chức năng chính

### 🎯 Người dùng
- Đăng ký, đăng nhập, quản lý tài khoản
- Xem danh mục sản phẩm, tìm kiếm và lọc sản phẩm
- Thêm sản phẩm vào giỏ hàng và đặt hàng
- Thanh toán và theo dõi đơn hàng

### 🔧 Admin
- Quản lý danh mục sản phẩm (thêm/sửa/xóa)
- Quản lý người dùng
- Quản lý đơn hàng và trạng thái giao hàng

## 📂 Cấu trúc thư mục

```bash
📦 HusterStore
 ┣ 📂 backend
 ┃ ┣ 📜 server.php
 ┃ ┣ 📂 routes
 ┃ ┣ 📂 models
 ┃ ┗ 📂 controllers
 ┣ 📂 frontend
 ┃ ┣ 📜 index.html
 ┃ ┣ 📂 css
 ┃ ┣ 📂 js
 ┃ ┗ 📂 assets
 ┣ 📜 README.md
 ┗ 📜 package.json
```

## 🛠️ Cách chạy dự án

### 1️⃣ **Clone repository**
```sh
git clone https://github.com/your-repo/HusterStore.git
cd HusterStore
```

### 2️⃣ **Cài đặt dependencies**
```sh
cd backend
composer install
cd ../frontend
npm install
```

### 3️⃣ **Chạy server backend**
```sh
cd backend
php -S localhost:8000
```

### 4️⃣ **Chạy frontend**
```sh
cd frontend
open index.html
```
