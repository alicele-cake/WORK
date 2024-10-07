# 商店與總覽介紹首頁描述

**作品名稱:商店與總覽介紹首頁**


## 描述:
上學時模仿蝦皮與其他技術的作品。

### 功能:　　　　
##### 總覽介紹首頁UI:

　總覽介紹

##### 商店UI:

　帳號登入註冊
  
　商店購買功能
    
　評論功能

　顯示評分、評論數量
  
　(使用資料庫)


## 畫面:

  #### 介紹總覽首頁畫面:
  
　https://youtu.be/xDfoztiyEyM

  #### 商店帳號畫面:
  
　https://youtu.be/vAZn2aJcm_o

  #### 商店畫面:
　https://youtu.be/qMLEsleun-8 
  
　https://youtu.be/QfZfmq0M_Cc

## 環境:

## 資料夾說明:

#### 總覽介紹首頁:

html:

Home_screen.html : 總覽介紹與背景特效展現

css:

Home_screen.css : Home_screen.html的樣式控制

picture: 總覽介紹首頁的照片來源

#### 商店:

(以下都在shop下)

shop/shop/datatable_php/datatable.php:資料庫有關的函數(function)，如下:

連線帳號和商店資料庫

getUserName() : 得到帳號名稱

getUserName($....) : 創造商店留言

getAllComments() : 獲取商店某商品所有留言

check_password($,$): 檢查帳號

register_account : 註冊帳號

check_account : 確認帳號是否被註冊

getAllCommoditys : 獲取商店所有商品資訊

getAllCommoditys_MinPrice : 取得某商品販賣的最少金額

getAllCommoditys_MaxPrice : 取得某商品販賣的最多金額

Seach_Id_to_Commoditys : 

calculate_star : 計算某商品平均評分

Seach_Id_to_Commoditys_type : 

calculate_sold : 加入某商品資訊的一部分

updateCommodity : 更新商品數量

getAllCommoditys_sold : 計算某商品販售總數量

getCommoditys_message : 計算某商品留言總數量

create_commodity_information : 加入某商品主要資訊






在shop/login_php/下

php/create_user.php : 辨別帳號是否註冊

screen/login_view.php : PHP登入判斷並連動datatable.php，HTML顯示登入畫面

screen/register_account.php : HTML顯示登入畫面，連動 ../php/create_user.php

screen/register_success.php : 帳號註冊成功畫面





##改善方案 : 

程式不容易修改，需要使用框架

程式有些多餘程式沒有很好的歸類在文件中，例如:CSS。

主鍵、ID等資料庫格式問題待解決。

重複的函數
