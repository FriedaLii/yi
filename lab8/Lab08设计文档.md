# Lab8 设计文档

李菲菲 18307110500

有关 JavaScript 和 jQuery 知识点总结

## 任务 1-3

> <br>
> 原生js<br>
> onclick <br>
> `mouseenter` & `mouseout`<br>
> setInterval(handler, time)  & clearInterval(timer) <br>
> for 循环中的函数使用外部循环循环数 i 方法<br>
> <br>

1. onclick 单击事件

```
nodeA.onclick = function(){
    //code
}

```

2. 鼠标进入`mouseenter`事件 & 鼠标退出`mouseout`事件

```
nodeA.onmouseenter = function(){
    //code
}

nodeA.onmouseout = function(){
    //code
}
```

3. setInterval(handler, time) 定时器 & clearInterval(timer) 清空定时器

```
var timer = setInterval(nextPic, 2000);
//-----------
clearInterval(timer);
```

4. for 循环中的函数使用外部循环循环数 i 方法

```
for (var i = 0; i < 5; i++) {
  (function (count) {
      bts[count].onclick = function(){
      console.log(count);   //单击对应button后：0, 1, 2, 3, 4
      }
  })(i);


/*-------错误做法
    for (var i = 0; i < 5; i++) {
        bts[i].onclick = function(){
        console.log(count);
        //理想单击对应button后：0, 1, 2, 3, 4
        //实际：5, 5, 5, 5, 5
        }
*/
```

## 任务 4

> <br>
> jQuery语法：以`$`开头<br>
> text() & html() & parent() & val()<br>
> click & blur<br>
> <br>


1. text()方法
```
//设置元素文本内容:设置所有p的文本
var content = $("p").text("This is a paragraph.");

//获取元素的文本
var content = $(seletor).text();
```

2. html()方法【类似innerHTML】

```
//添加元素内文本
var content = $("test text");
$(".p1").html(content);

//新元素input
var content2 = $("<input type='text' value='"+content+"'>); 
input.focus();
//添加子元素
$(".p2").html(content2);
```

3. 鼠标事件click 
```
$(seletor).click(function{
    //code
});
```
4. 表单事件blur：失去焦点
```
$(input).blur(function(){
    //code
});
```

5. `val()` / `parent()`
```
var inputValue = input1.val(); //input 输入框的值

var tdEle = input1.parent(); //input元素的父节点
```