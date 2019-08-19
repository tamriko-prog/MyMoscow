
<?require_once('components/header.php')?>
<?//require_once('classes/Service.php')?>
<?//require_once('classes/Review.php')?>
<?//require_once('classes/News.php')?>
<?
/*
$classes = ['Service','Review','News',];
foreach($classes as $class){
	require_once("classes/$class.php");
}
*/
/*require_once(PROJECT_ROOT.'/system/classes/autoload.php');  */
?>


<?/* 
$service = new Service(1);
var_dump($service->getLine());
//$result = $service->deleteLine();

//var_dump($service->getLine());

$review = new Review(1);
//var_dump($review->getLine()); 

$news = new News(1);
//var_dump($news->getLine()); 

//(new Service())->showImg();*/
?>
<?	/*			foreach((new Service(0))->getAllUnitsId() as $item){?>
					<?$service = new Service($item)?>
					<div class="block box">
                        <div class="content box-small">
                            <div class="content-icon">
                                <img src="<?=$service->getField('icon')?>"/> 
                            </div>  
                            <div class="content-text">
                                <p><?=$service->title()?></p>
                                <p><?=$service->getField('text')?></p>
                            </div>   
                        </div>
                    </div>
                <?}*/?>
         
         

<?php
    $slides = [
        ['https://ironlinks.ru/nordic/tamara/project1/img/top.jpg','ПОДРОБНЕЕ О НАС','https://ironlinks.ru/nordic/tamara/project1/contacts.php'],
        ['https://ironlinks.ru/nordic/tamara/project1/img/top1.jpg','ПОДРОБНЕЕ О НАС','https://ironlinks.ru/nordic/tamara/project1/contacts.php'],
        ['https://ironlinks.ru/nordic/tamara/project1/img/top2.jpg','ПОДРОБНЕЕ О НАС','https://ironlinks.ru/nordic/tamara/project1/contacts.php'],
    ];
?>

        <div style="width: 100%">
            <div class="slider flex-box horizontal-nav horizontal-arrows">
                <div class="menu box-small">
                    <div class="logo bg-fix" style="background-image: url('<?=PROJECT_URL?>/img/icons/spasskaya-tower.png')">
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
                <ul class="slides">
                    <?foreach($slides as $elem){?>
                        <li>
                            <div  class="bg-fix" style="background-image: url('<?=$elem[0]?>'); height: 600px">
                                <div class="button white">
                                    <a href="<?=$elem[2]?>"><?=$elem[1]?></a>
                                </div>
                                <div class="slider-text white"> 
                                    <div><h1>Необычная Москва</h1></div>
                                    <div>MyMoscow - агенство интересных маршрутов</div>
                                </div> 
                            </div>
                        </li>
                    <?}?>
                </ul>
            </div>
        </div>

    
 


    <div id="offers" class = "offers">
        <div class="title">
            <div class="blue"><h3>ЧТО МЫ ПРЕДЛАГАЕМ?</h3></div>
            <div>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</div>
        </div>
    </div>    
        <div class="offers-container">
            <?
                $result = mysqli_query($link, 'SELECT * FROM services');
                while($arr = mysqli_fetch_assoc($result)){?>
                    <div class="block-offer">
                        <div class="content">
                            <div class="content-icon">
                                <img src="https://ironlinks.ru/nordic/tamara/project1/<?=$arr['icon']?>"/> 
                            </div>  
                            <div class="content-text">
                                <p><b><?=$arr['title']?></b></p>
                                <p><?=$arr['text']?></p>
                            </div>   
                        </div>
                    </div>
                <?}?> 
								
        </div>


    <div id="we" class="who-we-are flex-box">
        <div class="photo one-half bg-fix" style="background-image: url('<?=PROJECT_URL?>/img/group.jpg')">
        </div>
        <div class="about-us white one-half">
            <div>
                <p><h2>КТО МЫ ТАКИЕ</h2></p>
                <p>Мы команда тех, кто любит историю и любит Москву.</p>
                <p>Москва - это не только место по "заколачиванию" денег, и "взращиванию" карьеры, а ещё и бесконечно красивые памятники природы,
                   заказники, парки, заповедники. Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного мегаполиса
                   куда-нибудь в "дебри", навтречу приключениям. К счастью, не всё Подмосковье ещё "облагорожено" асфальтными дорожками и высоченными
                   коттеджными заборами. Ещё встречаются места, настолько глухие и далекие, что очутившись там, кажется, что ты первый человек, 
                   ступивший на эту землю.</p>
                <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист,
                    проводящий свой активный отдых в Подмосковье.</p>
                <div class="reserve">
                    <a href="<?=PROJECT_URL?>/contacts.php">ПОДРОБНЕЕ О НАС</a>
                </div>
            </div>
        </div>
    </div>

    <div class="offers">
        <div class="blue title">
            <h3>МОСКВА В ФОТОГРАФИЯХ</h3>
        </div>
        <div class="line">
        </div>
        <div>
            Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.
        </div>
    </div>
    <div class="flex-container">
        <?
            $result = mysqli_query($link, 'SELECT * FROM photos');
            while($arr = mysqli_fetch_assoc($result)){?>
                <div>
                    <img src="<?=PROJECT_URL.'/'.$arr['way']?>">
                </div>
            <?}?>
    </div>

    <div class="offers">
        <div id="otz" class="blue title">
            <h3>ОТЗЫВЫ</h3>
        </div>
        <div class="line">
        </div>

        <?$arr  = [];
        $result = mysqli_query($link, 'SELECT * from reviews');
        while($pro = mysqli_fetch_assoc($result)){
            $arr[] = $pro;
        }?>

        <div class="slider flex-box horizontal-nav1">
            <ul class="slides">
                <?$num = count ($arr)?>
                    <?for ($i=0; $i < $num; $i=$i+2){?>
                        <li class="reviews flex-box">
                            <div class="review">
                                <div class="review-text">
                                    <i><?=$arr[$i]['text']?></i>
                                </div>  
                                <div class="avatar flex-box">
                                    <div>
                                        <img src="<?=PROJECT_URL.'/'.$arr[$i]['avatar']?>">
                                    </div>
                                    <div>
                                        <b><?=$arr[$i]['author']?></b>
                                    </div>
                                </div> 
                            </div>
                            <div class="review">
                                <div class="review-text">
                                    <i><?=$arr[$i+1]['text']?></i>
                                </div>  
                                <div class="avatar flex-box">
                                    <div>
                                        <img src="<?=PROJECT_URL.'/'.$arr[$i+1]['avatar']?>">
                                    </div>
                                    <div>
                                        <b><?=$arr[$i+1]['author']?></b>
                                    </div>
                                </div> 
                            </div>
                        </li>
                    <?}?>    
            </ul>
        </div>    
    </div>
   

    <div class="window">
        <div class="blue" style="text-align: center">
            <h3>НАПИШИТЕ НАМ</h3>
        </div>
        <div class="line">
        </div>
        <form method="GET" action="form.php">
            <div class="two">
                <div class="inputs">
                   <div>
                        <input class="box-form box-small" type="text" name="name" placeholder="ФИО">
                    </div>
                    <div>
                        <input class="box-form box-small" required type="email" name="email" placeholder="Email">
                    </div>
                    <div>
                        <input class="box-form box-small" type="text" name="tel" placeholder="Телефон">
                    </div>
                    <div>
                        <button class="box-form box-small white">отправить вопрос</button>
                    </div>
                </div>
                <div class="area">
                    <textarea class="box-form"  name="text" placeholder="Ваше сообщение"></textarea> 
                </div>
            </div>
        </form>
    </div>

  

<?require_once('components/footer.php')?>