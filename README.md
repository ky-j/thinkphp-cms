### 课程工具
ThinkPHP3.2.3完整版 + Layer + PhpStorm

### 技能
1. 异步登录

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
8. 前端Ajax刷新点击量

### 数据表设计
1. 后台用户表（对username进行索引）
2. 菜单表
3. 新闻文章主表
4. 新闻文章内容副表（把content放到副表）
5. 推荐位标识表
6. 推荐位内容表

### ThinkPHP3.2.3目录结构和运行原理
![](http://oc6to49ug.bkt.clouddn.com/9188a1c0aa30a2b35b2c0fd9f986f615.png)

![](http://oc6to49ug.bkt.clouddn.com/ce8516f4e6d5f39da95040d7f1878ce1.png)

### dialog 封装

目的：快速调用

### 异步方式实现登录功能
- 前端校验和获取数据
- 服务端对数据进行强校验（封装show函数输出json）
- 用户信息的数据库校验（单独建一个db.php，LOAD_EXT_CONFIG）
- 登录成功记录session
- 退出登录清除session

### 菜单管理
- 用JS将表单数据转换为json格式
提交数据（为什么要序列化数据）
- PHP处理数据交互（使用add方法进行数据写入）
- 菜单列表（列表展示、分页、搜索）
 - volist
 - 判断状态获取文本，写在function.php中
 - 模板中判断实用eq

### 其他
[jQuery API](http://jquery.cuishifeng.cn/)

[TP3.2 手册](http://document.thinkphp.cn/manual_3_2.html)
