<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
Laravel Framework 8.83.7

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## How to use?
Các bước để bắt đầu dự án:
1. Clone Source Code:
```bash
git clone https://github.com/tobithangem/PlanckProject.git
```

```bash
git checkout develop
```

2. Cài đặt các dependencies và packages cần thiết cho Laravel:

```bash
composer install
```
```bash
npm install
```
3. Duplicate file .env.example, đổi tên thành .env sửa thông tin DB cho phù hợp

4. Chạy lệnh:

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

5. Hoàn tất, khởi chạy laravel:

```bash
php artisan serve
```

Truy cập vào web qua http://127.0.0.1:8000/

Các bước để code và đẩy code:

1. Tại branch develop hoặc branch gốc của phase code tương ứng, lấy code mới nhất từ repository gitlab

```bash
git pull
```

2. Sau khi pull hoàn tất, tạo 1 branch mới với tên branch dễ nhận diện (thường là theo tên task VD: Coding#123456)
```bash
git checkout -b <tên branch>
```

3. Viết code trên branch đã tạo (dùng lệnh git checkout -b sẽ vừa tạo mới, vừa chuyển ngay sang branch mới. Nếu chuyển sang branch đã tạo chỉ cần `git checkout <tên branch>`)

Sau khi viết code xong thực hiện

```bash
git add .
```

```bash
git commit -m "<giải thích nội dung thanh đổi của commit>"
```

4. Sau khi viết và test code ok, thực hiện đẩy code lên.

```bash
git checkout develop
```

```bash
git pull
```

Lệnh trên giúp quay về nhánh dev chính để lấy code mới nhất từ repository về

5. Ghép code từ nhánh chính sang nhánh của bản thân để đồng nhất code:

```bash
git checkout <tên nhánh>
```

```bash
git rebase develop
```

Bước này sẽ kéo toàn bộ log của nhánh develop sang nhánh đang code, commit của nhánh hiện tại sẽ ở trên cùng

6. Đẩy code của nhánh hiện tại lên repository

```bash
git push origin <tên nhánh>
```

Lưu ý: Tên nhánh lúc đẩy phải trùng với tên nhánh đang code và đẩy trong lúc đang checkout ở nhánh đó

- Tuyệt đối không push lên nhánh  hay push khi đang ở nhánh develop

7. Truy cập vào gitlab và thực hiện merge request nhánh vừa đẩy vào nhánh develop, chờ leader review code và merge
