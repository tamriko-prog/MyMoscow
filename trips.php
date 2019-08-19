<?require_once('components/header.php')?>
    
   
<?
$result = mysqli_query($link, 'SELECT * FROM slides WHERE id = 2');
while($arr = mysqli_fetch_assoc($result)){?>
    <div class = "banner bg-fix" style="background-image: url('<?=PROJECT_URL.'/'.$arr['way']?>')">
<?}?> 
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
        <div class="banner-text white"> 
            <p class="title" style="font-size: 50px"><b>MyMoscow</b></p>
            <p>агенство интересных маршрутов</p>
            <p><b>- Туры -</b></p>
        </div> 
         
    </div> 
    
    <div class="title block blue">
            <b>ВЫБЕРИТЕ ТУР</b>
        </div>


    <div class="tours">
        <?
            $result = mysqli_query($link, 'SELECT * FROM tours');
            while($arr = mysqli_fetch_assoc($result)){?>
                <div class="reverse">
                    <div class="photo one-half">
                        <img src="<?=$arr['photo']?>">
                    </div>
                    <div class="tour white one-half">
                        <div class="tour-description">
                            <p><h3><?=$arr['title']?></h3></p>
                            <p><?=$arr['text']?></p>
                            <p><h2><?=$arr['price']?></h2></p>
                            <div class="reserve">
                                ЗАБРОНИРОВАТЬ
                            </div>
                        </div>
                    </div>
                </div>
            <?}?>
    </div>
    

     
<?require_once('components/footer.php')?>