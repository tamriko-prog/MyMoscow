    <div class="footer grey">
        <div class="footer-contacts">
            <div class="three">
                <div class="footer-title flex-box">
                    <div class="logo-footer" style="background-image: url(<?=PROJECT_URL?>/img/icons/spasskaya-tower.png);">
                    </div>
                    <div class="MyMoscow-footer yellow">
                        MyMoscow
                    </div>      
                </div>    
                <div class="footer-text grey">
                    Мы приглашаем тебя на самые разные экскурсии по Москве. Автобусные и пешеходные, на целый день 
                    или на несколько часов, на свежем воздухе или с заходом в здания - у нас в ассортименте более
                    20 авторских экскурсий по Москве, выбирай и узнавай Москву вместе с нами!
                </div> 
            </div>  
            <div class="three">
                <div class="footer-title contacts white">
                    <a href="<?=PROJECT_URL?>/contacts.php">Контакты</a>
                </div>
                <div class="block-contacts">
                    <div class="flex-box">
                        <div  class="icon">
                            <img src="<?=PROJECT_URL?>/img/icons/placeholder.png">
                        </div>
                        <div>
                            Москва, Большая Спасская 12
                        </div>  
                    </div>    
                    <div class="flex-box">
                        <div  class="icon">
                            <img src="<?=PROJECT_URL?>/img/icons/mail.png">
                        </div>
                        <div><a class="grey" href="mailto:moscow@imoscow.ru">moscow@imoscow.ru</a>
                        </div> 
                    </div> 
                    <div class="flex-box">
                        <div  class="icon">
                            <img src="<?=PROJECT_URL?>/img/icons/telephone.png">
                        </div>
                        <div><a class="grey" href="tel:+74956264600">8 (495) 626-46-00</a>    
                        </div> 
                    </div> 
                </div>  
            </div> 
            <div class="three">
                <div class="footer-title white">
                    Последние новости
                </div>
                <div class="footer-text grey">
                    <div>
                        <? 
                            $result = mysqli_query($link, 'SELECT * FROM news');
                            while($arr = mysqli_fetch_assoc($result)){?>
                                <div>
                                    <?=$arr['text']?>
                                </div>
                                <div class="date blue">
                                    <?=$arr['date']?>
                                </div>
                            <?}?>
                    </div> 
                </div>
            </div>   
        </div>
        <div class="footer-copyright">
            <div>
                <? 
                    $result = mysqli_query($link, 'SELECT * FROM global_info WHERE id = 4');
                    while($arr = mysqli_fetch_assoc($result)){?>
                        <p><?=$arr['text']?></p>  
                    <?}?>
            </div>
            <p>
                Designed by Nordic IT School                
            </p>
            <div class="social flexible">
                    <? 
                        $result = mysqli_query($link, 'SELECT * FROM social_networks');
                        while($arr = mysqli_fetch_assoc($result)){?>
                            <div>
                                <a href="<?=$arr['anchor']?>" target="_blanc">
                                    <img src="<?=PROJECT_URL.'/'.$arr['way']?>">
                                </a>
                            </div>
                        <?}?>    
            </div>
        </div>
    </div>    

    <script>
        function initMap() {
            var uluru = {lat: 55.776, lng: 37.648};
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    
    <script src="js/slider.js"></script>  
    
</body>
</html>