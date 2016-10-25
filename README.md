### 课程工具
ThinkPHP3.2.3 完整版 + Layer + PhpStorm + kindeditor + uploadify

### 思路 & 技巧
1. 封装对话框 Dialog.js
2. 对密码加密最好利用 MD5(密码 + 盐值) 的形式
3. 对于后台 session 判断，抽象出一个公共类
4. 设计新闻数据表时，把新闻内容字段独立成一个副表

### PHP 知识点
- `exit('hi');` 等同于 `echo 'hi'; exit;`
- `exit()` 等同于 `die()`
- json_encode,json_decode

### TP 知识点
1. 模块 m，控制器 c，方法 a；http://localhost/thinkphp-cms/index.php?m=home&c=index&a=index
2. [开发规范](http://document.thinkphp.cn/manual_3_2.html#develop_standard)
3. 一个控制器对应一个文件夹；一个页面对应一个方法
4. 应用公共函数写在 `Application/Common/Common/function.php` 中
5. 使用 I 函数来安全获取变量
6. 使用 C 函数来读取配置变量
7. 使用 M 方法来实例化数据表
8. 使用 D 方法来实例化模型
9. 使用 `getLastSql` 方法来调试 SQL 语句
0. [设置 admin.php 为后台入口文件](http://document.thinkphp.cn/manual_3_2/bind_index.html)

### 后台工作流
1. 新建登录控制器 Application/Admin/Controller/LoginController.class.php
2. 新建登录模板 Application/Admin/View/Login/index.html
3. 把模板的静态资源（css/js）放到 /Public/ 下，然后在模板中的静态资源路径前加 `__PUBLIC__`
4. 利用 layer 封装 dialog.js
5. 封装 login.js 类来异步提交表单数据
6. 新建应用公共函数 Application/Common/Common/function.php
7. 编写 show_message 函数（TP 中有内置两个跳转方法 success 和 error 可以代替 show_message）

### 课程简介知识点

![](http://oc6to49ug.bkt.clouddn.com/8811546e31d9a569f698a940b675ba9f.png)

### 需求分析（功能分析）
1. 登录，退出
2. 菜单管理（排序、增删改查）
3. 文章管理（排序、增删改查、图片异步上传、编辑器、更改状态、预览、推荐）
4. 推荐位管理（排序、增删改查、推荐）
5. 用户管理（增删改查）
6. 系统基本信息
7. 缓存配置
8. 前端 Ajax 刷新点击量

### 数据表设计
1. 后台用户表（对 username 进行索引）
2. 菜单表
3. 新闻文章主表
4. 新闻文章内容副表（把 content 放到副表）
5. 推荐位标识表
6. 推荐位内容表

### ThinkPHP3.2.3 目录结构和运行原理
![](http://oc6to49ug.bkt.clouddn.com/9188a1c0aa30a2b35b2c0fd9f986f615.png)

![](http://oc6to49ug.bkt.clouddn.com/ce8516f4e6d5f39da95040d7f1878ce1.png)

### dialog 封装

目的：快速调用

### 异步方式实现登录功能
- 前端校验和获取数据
- 服务端对数据进行强校验（封装 show 函数输出 json，关键函数 json_encode）
- 用户信息的数据库校验（单独建一个 db.php，LOAD_EXT_CONFIG）
- 登录成功记录 session
- 退出登录清除 session

### 菜单管理
- 用 JS 将表单数据转换为 json 格式
- 提交数据（**为什么要序列化数据**）
- PHP 处理数据交互（使用 add 方法进行数据写入）
- 菜单列表（列表展示、分页、搜索）
 - volist
 - 判断状态获取文本，写在 function.php 中
 - 模板中判断使用 `eq`
- 删除模块（不实际删除，只改变状态，**为什么要抛出异常**）
- 排序模块（**序号为什么要用数组类型**）
- 将配置的数据读取到后台菜单栏中

### 文章管理
- 图片异步上传（uploadify，TP 自带上传类库）
- kindeditor 编辑器内部图片异步上传（[文档](http://kindeditor.net/docs/upload.html)）
- 文章数据表分主表和副表
- 标题颜色和来源可以写在配置文件中
- 入库的数据都要进行过滤 htmlspecialchars 防 xss 攻击
- 列表分页与搜索

### 网站配置
- 使用静态缓存来保存数据
- 使用 F 方法来实现

### 其他
- [jQuery API](http://jquery.cuishifeng.cn/)
- [TP3.2 手册](http://document.thinkphp.cn/manual_3_2.html)
- [Bootstrap 后台模板 SB Admin 2](https://startbootstrap.com/template-overviews/sb-admin-2/)
- [后台管理UI的选择](http://www.suchso.com/UIweb/houtai-ui.html)
