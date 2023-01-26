# Laravel 9 通過 OAuth 進行 Discord 身份驗證

通過 OAuth 可以使用 Discord 帳戶登入網站，如此一來就不必費心記住使用者名稱和密碼。

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
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來，例如：http://127.0.0.1:8000。
- 你可以登入經由 `/login` 來進行登入，點選「使用 Discord 登入」以使用 Discord 帳戶登入網站。

----

## 畫面截圖
![](https://i.imgur.com/DF52mfB.png)
> 透過 Discord 帳戶登入，讓你使用 Discord 帳戶資訊登入或註冊該網站

![](https://i.imgur.com/h7wBA3h.png)
> 將你的 Discord 帳戶連結到網站帳戶