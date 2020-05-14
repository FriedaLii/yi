const works = [
    { author: "Micheal Jackson",lifetime:"1022-1055",tips: "Human", photos: ["human1.jpg","human2.jpg","human3.jpg"] },
    { author: "Maria JK",lifetime:"1920-2001", tips: "Classical", photos: ["classical1.jpg","classical2.jpg"] },
    { author: "John Herry UY", lifetime:"1894-1928",tips: "Abstract", photos: ["abstract1.jpg","abstract2.jpg","abstract3.jpg","abstract4.jpg","abstract5.jpg"] },
    { author: "Coco",lifetime:"1777-1799", tips: "Beauty",  photos: ["beauty1.jpg","beauty2.jpg"] }
];


var target_node = document.getElementsByClassName('justify');

for (var i  = 0 ; i < works.length; i++){
    //插入item框
    var item = document.createElement('div');
    item.setAttribute('class','item');
    target_node[0].appendChild(item);

    //插入tip标题
    var genre = document.createElement('h4');
    genre.appendChild(document.createTextNode( "Genre : "+ works[i].tips));
    item.appendChild(genre);

    //插入inner-box框+作者名、生活时间
    var inner1 = document.createElement('div');
    inner1.setAttribute('class','inner-box');
    item.appendChild(inner1);
    //作者名
    var author = document.createElement('h3');
    author.style.display = "inline";
    author.appendChild(document.createTextNode(works[i].author));
    inner1.appendChild(author);
    //生活时间
    var lifetime = document.createElement('h5');
    lifetime.appendChild(document.createTextNode("Lifetime:"+works[i].lifetime));
    lifetime.style.marginLeft = "1em";
    lifetime.style.display = "inline";
    inner1.appendChild(lifetime);


    //插入inner-box框+标题+图片
    var inner2 = document.createElement('div');
    inner2.setAttribute('class','inner-box');
    item.appendChild(inner2);
    //标题
    var popular_photo = document.createElement('h3');
    popular_photo.style.display = "inline";
    popular_photo.appendChild(document.createTextNode("Popular Photos"));
    inner2.appendChild(popular_photo);
    //图片
    var photo_div = document.createElement('div');
    inner2.appendChild(photo_div);
    for(var a  =0 ; a < works[i].photos.length;a++){
        var photo = document.createElement('img');
        photo.setAttribute('src', works[i].photos[a]) ;
        photo.setAttribute('class','photo') ;
        photo_div.appendChild(photo);
    }

    //插入button
    var bt_visit = document.createElement('button');
    bt_visit.innerHTML = "Visit";
    item.appendChild(bt_visit);

}
