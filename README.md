# Laravel 7 使用者戳印

引入 wildside 的 userstamps 套件來擴增使用者戳印，提供了一個 Eloquent 模型的特性來自動使用應用程式登入的使用者填入 `created_by` 和 `updated_by` 欄位，當使用 Laravel 的 `SoftDeletes` 軟刪除特性同時，當刪除時也會填入 `deleted_by` 欄位。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 註冊後可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/hYCPLXp.png)
> 使用註冊的帳號登入

![](https://i.imgur.com/XrbCYEW.png)
> 登入後執行更新姓名以觸發填入使用者戳印