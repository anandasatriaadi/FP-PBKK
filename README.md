# Final Project PBKK-B 2022

| Nama | NRP | Github |
| :--------- | :--------- | :--------- |
| Aiffah Kiysa Waafi | 5025201202 | https://github.com/AiffahKiysa |
| Dias Tri Kurniasari | 05111940000035 | https://github.com/DisDias |
| Putu Ananda Satria Adi | 05111940000113 | https://github.com/anandasatriaadi |
| Mohammad Thoriq Huda | 05111940000207 | https://github.com/ThoriqHuda |

# POIN-POIN IMPLEMENTASI

## Laravel route, controller and middleware
Pada poin ini implementasi `route` terbagi menjadi dua bagian yaitu untuk `Staff and Admin` dan untuk `user` biasa. Pada `route` sendiri juga terdapat gabungan dalam implementasi `middleware` yang umumnya digunakan untuk menuju suatu page yang membutuhkan login. Dalam setiap route terdapat penggunaan `controller`. Terdapat enam `controller` yang diimplementasikan dalam project ini. Untuk lokasi dari setiap implementasi yaitu `route` dapat diakses pada folder `routes/web.php`. Sedangkan untuk `controller dan middleware` dapat diakses pada folder `app/http`.

## Laravel request, validation and response
Pada poin ini, implementasi dari `request, validation, and response` dapat dilihat pada `controller` terutama dalam menu yang menggunakan CRUD. `Request` dilakukan untuk mendapatkan data yang dibutuhkan atau diinputkan. `Validation` digunakan untuk memvalidasi data yang diinputkan apakah sesuai dengan ketentuan masukan. Sedangkan `response` digunakan untuk memberikan aksi apa yang akan dilakukan setelah melakukan suatu kegiatan. Pada project ini `response` yang digunakan kebanyakan adalah `redirect`. Untuk lokasi dari implementasi poin ini adalah pada folder `app/http/Controllers` file `AdminMenu dan Reservation`.

## Laravel model, eloquent and query builder
Pada poin ini, implementasi dari `model and eloquent` untuk mendapatkan tabel yang telah dibuat dan saling mengubungkan atau relasi dari beberapa tabel yang saling berhubungan. Terdapat tujuh model yang dibuat pada project ini. Sedangkan untuk implementasi `query builder` dilakukan untuk melakukan query tertentu dalam database. Untuk lokasi dari setiap implementasi yaitu `model and eloquent` dapat diakses pada folder `rapp/Models`. Sedangkan untuk `query bulder` dapat diakses pada folder `app/http/Controllers`.

## Laravel authentication and authorization
Implementasi pada poin ini adalah adanya login dan autentikasi. Pada project ini, implementasinya dilakukan menggunakan starter kit `breeze`. Untuk implementasi dari poin ini dapat diakses pada folder `app/Http/Controllers/Auth/`.

## Laravel localization and file storage
Pada poin ini, implementasi dari `localization` adalah user dapat memilih penggunaan bahasa, yaitu `Indonesia dan Inggris`. Sedangkan untuk implementasi `file storage` adalah penyimpanan foto menu yang diupload dan disimpan dalam folder `public/images`. Untuk lokasi dari setiap implementasi yaitu `localization` dapat diakses pada file `app/Http/Controllers/LocalizationController.php`. Sedangkan untuk `file storage` dapat diakses pada file `app/Http/Controllers/AdminMenuController.php`.

## Laravel view and blade component
Pada implementasi `view and blade` dilakukan untuk membuat tampilan dari setiap page dan form yang ada pada project ini. Untuk lokasi dari implementasi `view and blade` dapat diakses pada folder `resources/views/`.

## Laravel session and caching
Implementasi pada poin ini terdapat pada setiap `flash message` pada menu yang menggunakan CRUD yaitu reservasi dan penambahan menu. Untuk lokasi dari implementasi `session and caching` dapat diakses pada file `app/Http/Controllers/AdminMenuController.php`.

## Laravel feature testing and unit testing
Pada poin ini dilakukan impementasi `unit testing` pada `store data` pengajuan reservasi dan penambahan menu. Sedangkan untuk `feature testing` dilakukan dengan pengujian akses `route` pada setiap fitur dan `store data` pengajuan reservasi dan penambahan menu. Pengujian dilakukan menggunakan perintah `php artisan test`. Untuk lokasi dari implementasi `unit testing` berada pada folder `tests/Unit`. Sedangkan untuk `feature testing` berada pada folder `tests/Feature/HTTP/Controllers`.

## Laravel command and scheduling
Implementasi `command and scheduling` pada poin saling berhubungan yang bertujuan untuk memberikan pengingat kepada user yang melakukan reservasi dengan mengirimkan email setiap jam `18.17`. Untuk lokasi dari implementasi `command` berada pada folder `app/Console/Commands`. Sedangkan untuk `scheduling` berada pada folder `app/Console/Kernel.php`.

## Laravel event and listener
Implementasi `event and listener` bertujuan untuk memberikan informasi mengenai reservasi yang dilakukan oleh user. Untuk lokasi dari implementasi `event` berada pada folder `app/Events`. Sedangkan untuk `listener` berada pada folder `app/Listeners`.
