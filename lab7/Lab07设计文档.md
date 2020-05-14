# Lab07设计文档

李菲菲 18307110500

## lab完成过程中的困难与解决方案

### 困难

1. 通过class name得到的元素变量无法调用函数<br><br>

2. 如何设置元素的class，display等属性<br><br>

3. 如何为元素添加内容

### 解决方案

1. `var ele = document.getElementsByClassName('justify')`得到的是一组元素（对象），调用函数时应用ele[0]；<br><br>

2. 
    <ul><li>
    
    使用`node.setSttribute(attri, value)`函数：

    ```
    inner2.setAttribute('class','inner-box');
    ```

    <li>直接赋值

    ```
    lifetime.style.marginLeft = "1em";
    lifetime.style.display = "inline";
    ```
    </ul>

3. 
    <ul><li>

    添加子元素：`node1.appendChild(node2);`
    <br>
    <li>
    
    添加文字：`node1.appendChild(document.createTextNode(stirng));`
    <br>

    <li>

    添加内部代码：`node.innerHTML = string;`

    </ul>

