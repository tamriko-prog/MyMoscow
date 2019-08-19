<?require_once('components/header.php')?>


<?
$result = mysqli_query($link, 'SELECT * FROM slides WHERE id = 3');
while($arr = mysqli_fetch_assoc($result)){?>
    <div class = "banner bg-fix" style="background-image: url('<?=PROJECT_URL.'/'.$arr['way']?>')">
<?}?> 
        <div class="menu box-small">
            <div class="logo bg-fix" style="background-image: url(<?=PROJECT_URL?>/img/icons/spasskaya-tower.png)">
            </div>     
            <div class="MyMoscow yellow">
                MyMoscow
            </div> 
            <div class="menu_list white">
                <ul>
                    <?
                    $result = mysqli_query($link, 'SELECT * FROM pages');
                    while($arr = mysqli_fetch_assoc($result)){?>
                        <li>
                            <a href="<?=$arr['way']?><?=$arr['ref']?>"><?=$arr['name']?></a>
                        </li>  
                    <?}?>  
                </ul>
            </div>
        </div>
        <div class="banner-text white"> 
            <p class="title" style="font-size: 50px"><b>MyMoscow</b></p>
            <p>агенство интересных маршрутов</p>
            <p><b>- Контакты -</b></p>
        </div> 
    </div> 
    
    <div class="block">
        <div class="title blue">
            <b>КОНТАКТЫ</b>
        </div>
        <div>
            <p>Мы команда тех, кто любит историю и любит Москву.</p>
            <p>Москва - это не только место по "заколачиванию" денег, и "взращиванию" карьеры, а ещё и бесконечно красивые памятники природы,
            заказники, парки, заповедники. Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного мегаполиса
            куда-нибудь в "дебри", навтречу приключениям. К счастью, не всё Подмосковье ещё "облагорожено" асфальтными дорожками и высоченными
            коттеджными заборами. Ещё встречаются места, настолько глухие и далекие, что очутившись там, кажется, что ты первый человек, 
            ступивший на эту землю.</p>
            <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист,
            проводящий свой активный отдых в Подмосковье.</p>
        </div>
    </div>    

        <div class="flex-box block">
            <div class="flex-box half">
                <div class="bg-fix boss-foto" style="background-image:url('<?=PROJECT_URL?>/img/man.jpg')">
                </div> 
                <div class="boss-contacts">
                    <p><b>Александр Рыбаков</b><br>
                    директор</p>
                    <br>
                    <p>По всем вопросам пишите на почту:<br>
                    <a href="mailto:rybakov@mymoscow.ru"><span style="color: rgb(106, 106, 179);">rybakov@mymoscow.ru</span></a></p>
                </div>   
            </div>
            <div class="flex-box half">
                <div class="bg-fix boss-foto" style="background-image:url('<?=PROJECT_URL?>/img/woman.jpg')">
                </div>
                <div class="boss-contacts">
                    <p><b>Елена Белкина</b><br>
                    руководитель корпоративного отдела</p>
                    <br>
                    <p>По вопросам корпоративных экскурсий:<br>
                    <a href="mailto:belkina@mymoscow.ru"><span style="color: rgb(106, 106, 179);">belkina@mymoscow.ru</span></a></p>
                </div>
            </div>
        </div>
    

    <div class="flex-box block">
        <div class="half">
            <div class="flex-box interval">
                <div  class="big-icon">
                    <img src="<?=PROJECT_URL?>/img/icons/placeholder.png">
                </div>
                <div>
                    Москва, <br>Большая Спасская 12
                </div>  
            </div>   
            <div class="flex-box">
                <div  class="big-icon interval">
                    <img src="<?=PROJECT_URL?>/img/icons/mail.png">
                </div>
                <div>
                    Email: <br>info@mymoscow.ru
                </div>  
            </div>  
            <div class="flex-box">
                <div  class="big-icon">
                    <img src="<?=PROJECT_URL?>/img/icons/telephone.png">
                </div>
                <div>
                    Телефон: <br>8 (495) 626-46-00
                </div>  
            </div>   
        </div>        

        <div class="half small-form">
            Напишите нам
            <form method="GET" action="form.php">
                <div>
                    <input class="box-small-form" type="text" name="name" placeholder="ФИО">
                </div>
                <div>
                    <input class="box-small-form" required type="e-mail" name="email" placeholder="Email">
                </div>
                <div class="area">
                    <textarea class="box-small-form"  name="text" placeholder="Ваше сообщение"></textarea> 
                </div>
                <div>
                    <button class="box-small-form white">отправить</button>
                </div>
            </form>    
        </div>
    </div>

    <div id="map">

    </div>
   


<?require_once('components/footer.php')?>