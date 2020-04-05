LAB 4 设计文档
==========


## 布局设计

### 主页截图

![sample](./images/prt_sc2.png)

### 布局介绍

#### 导航栏
nav的class属性包括：navbar navbar-inverse navbar-fixed-top
颜色为反色，并保持在顶部；

##### 左侧导航栏
ul的class属性包括：nav navbar-nav nav_menu

##### 右侧导航栏
ul的class属性包括：nav navbar-nav nav-pills navbar-right
胶囊式导航菜单，其li下的a可激活无序下拉式菜单；dropdown-menu；

#### 轮播头图
将div属性设为 `class="carousel slide" data-ride="carousel"`
包括轮播指标无序列表`<ol class="carousel-indicators">`轮播项目`<div class="carousel-inner" role="listbox">`和轮播控制器`<a ... data-slide="prev"//"next">`

#### 图片展示区域
每个图片展示为一个article，使用Grid布局，每行摆放3个展示图片；共六个；
```
<div class="row">
    <div class="col-sm-4">
    <div class="col-sm-4">
    <div class="col-sm-4">
<div class="row">
    <div class="col-sm-4">
    <div class="col-sm-4">
    <div class="col-sm-4">

<!-- </div>省略-->
```

#### 脚注
使用Grid布局，第一行为网站标志；第二行为占2/4网格的脚注内容
```
 <div class="row">
    <!--网站标志-->
 <div class="row">
    <div class="col-sm-4">空
    <div class="col-sm-4">内容1
    <div class="col-sm-4">内容2
    <div class="col-sm-4">空

<!-- </div>省略-->
```

**示意图** 
![sample](./images/prt_sc2.png)

