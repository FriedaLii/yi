//1. 获取url中名为name的参数。在URL输入框输入url，点击同行submit按钮后，其中的参数名为name的参数值需要出现在Argument value输入框内。
//如果没有名为name的参数，那么可以在Argument value输入框出现任何值。
//请仅在showWindowHref函数内写代码。

//提示：url指代 （若干字符串）?（参数名1）=（参数1值）&（参数2）=（参数2值）...  这样的字符串。具体可以上网查找。例如：hjsdghgbj?name=666666&group=876。
//url、url_submit、url_result指代对应id的三个对象，其中url和url_result可以通过url.value或者url_result.value获得值。
//字符数组处理可以使用相关函数
let url = document.getElementById("url");
let url_submit = document.getElementById("url_submit");
let url_result = document.getElementById("url-result");
url_submit.addEventListener("click", showWindowHref);
function showWindowHref() {

  url_result.value = ""; //清空result的值
  
  let str = url.value;
  let index_begin = str.indexOf("name=") + 5;

  if (index_begin > 4) {
    let index_end = str.indexOf("&", index_begin);
    url_result.value = str.substring(index_begin, ((index_end === -1) ? str.length : index_end) );
  } else {
    url_result.value = "No Name";
  }
}
//2. 每隔五秒运行一次函数直到某一整分钟停止，比如从20:55:45运行到20:56:00停止；或者运行10次，先到的为准。从1开始每过五秒，输入框内数值翻倍。初始值为1。
//注意：你可以在函数 timeTest内部 和 timeTest外部 写代码使得该功能实现。
//与设置时间相关的函数可以上网查找。

//提示：mul为html中id为"mul"的元素对象，可直接通过mul.value获得其内的输入值。
let mul = document.getElementById("mul");
mul.setAttribute("value", "1");
let min_begin = new Date().getMinutes(); //记录开始时的分钟数 0-59
let clock = self.setInterval(timeTest, 5000); //5秒执行一次函数

let count = 0;
function timeTest() {
  if (timeCheck() && count < 10) { //检查是否仍在同一分钟内,且次数不超过10
    count++;
    mul.value *= 2;
  }
}

function timeCheck() {
  let min_current = new Date().getMinutes(); //0-59
  if (min_current !== min_begin) clearInterval(clock); //若当前分钟数≠开始的分钟数，清空计时器
  
  return (min_current === min_begin); //返回是否仍在同一分钟
}

//3. 判断输入框most里出现最多的字符，并统计出来。统计出是信息在most_result输入框内以"The most character is:" + index + " times:" + max的形式显示。
//如果多个出现数量一样则选择一个即可。
//请仅在arrSameStr函数内写代码。

//提示：most、result、most_submit的解释及其.value与上面类似。
let most = document.getElementById("most");
let result = document.getElementById("most-result");
let most_submit = document.getElementById("most_submit");
most_submit.addEventListener("click", arrSameStr);
function arrSameStr() {
  let str = most.value;

  //创建元素数组
  let array = [];
  for (let i = 0; i < str.length; i++) //遍历字符串
    if (array.indexOf(str[i]) === -1) array.push(str[i]); //若数组中不包含此元素,向数组中添加此元素

  //得到计数数组
  let count_result = new Array(array.length);
  count_result.fill(0);
  for (let j = 0; j < str.length; j++) count_result[array.indexOf(str[j]) ]++;

  //提取计数数组中计数最大的元素下标和次数
  let index = -1;
  let max = 0;
  for (let i = 0; i < count_result.length; i++) {
    if (count_result[i] > max) {
      max = count_result[i];
      index = i;
    }
  }

  //显示结果
  result.value = "The most character is:" + array[index] + " times:" + max;
}


