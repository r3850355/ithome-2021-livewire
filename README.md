## 系統環境

PHP 版本盡可能使用 7.4，不然有些功能的做法會不太一樣哦～

|名稱|版本|
|---|---|
|PHP|^ 7.4|
|Laravel|^ 8|

另外要實作後面的範例還會用到 MySQL 或是 MariaDB 則一即可。

## 安裝

首先在 git pull 下來後進到本資料夾，並透過 Composer 安裝

```
git pull https://github.com/r3850355/ithome-2021-livewire.git
cd ithome-2021-livewire

composer install
```

> 如果還沒安裝 composer 的請先幫我安裝，[官網點我](https://getcomposer.org/)
> 
> 安裝過程如果有少一些套件就用套件名稱去 Google 搜尋安裝補齊就能安裝好了
> 
>  因為 Composer 不會自動安裝相依套件，這邊可能是安裝過程最麻煩的地方

安裝好之後先複製 `.env` 檔，記得去改裡面的資料表名稱及資料庫號密碼

```
cp .env.exmaple .env
```

然後產生金鑰

```
php artisan key:generate
```

## 啟動

透過下面指令就可以把測試環境跑起來啦

```
php artisan serve
```

運行成功的話，在終端機會有下面這些字

```
Starting Laravel development server: http://127.0.0.1:8000
[Thu Sep  2 22:48:14 2021] PHP 7.4.16 Development Server (http://127.0.0.1:8000) started
```
之後打開瀏覽器網址輸入

```
127.0.0.1:8000
```

就能夠進到頁面中了！！
