1.	Nạp file webbangiay.sql vào DATABASE.
2.	Chạy lệnh composer update để tải lại tệp vendor 
    Chạy lệnh composer install để tải lại tệp vendor 
    Chạy lệnh npm install 
3.	Tạo file .env và copy nội dung của file .env.exmaple bỏ vào file .env 
    (hoăc lệnh cp .env.example .env)
4.	Kết nối DATABASE:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    Thay thành
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=webbangiay
    DB_USERNAME=root
    DB_PASSWORD=

6.	Để gửi mail web hoạt động ta sửa nội dụng của file .env như sau:
    MAIL_MAILER=smtp
    MAIL_HOST=mailhog
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    Thay thành 
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=465
    MAIL_USERNAME=all*****@gmail.com    		//[nhập Gmail của bạn]
    MAIL_PASSWORD=*************         		//[nhập mật khẩu của Gmail]
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS= all*****@gmail.com    	//[nhập Gmail của bạn]
    MAIL_FROM_NAME="ALLStore"                	//[nhập tiêu đề của mail]

7.	Chạy lệnh php artisan key:generate
