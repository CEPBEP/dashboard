<?php?>
<!DOCTYPE html>
<html >
<?php require 'app/parts/head.php';?>

<?php require 'config.php';?>

<style>.container.is-centered {font-weight: 900;text-align: center;
}nav.navbar {background: transparent;}.hdn{display:-webkit-inline-box;color:transparent;}
.imgupload{width:100px;}span.tag.r{float: right;}span.tag.l{float: left;}
.frm{margin: 5px;}.wte{background-color: #fff!important;}.header {background: #000;}


</style>

<body><!--

    ////////////////////////////////////////
   /////////////////////////////////////////
   
   --><?php require 'app/parts/header.php';?>

   <script src="js/title.js"></script>
   
   

<div class="container is-centered column box">
    <div class="columns is-mobile is-centered">
        <div class="column">
            <div class="notification is-black edit" name="title" contenteditable="true"><p class="hdn" contenteditable="false"></p>
                <?php 
                $f_arr = file( "t.txt" );
for($i = 0; $i < count($f_arr);
 $i++  ){echo $f_arr[$i] ;
};
?><?php T_ENDFOR;?>
               <span class="tag r icon" contenteditable="false"><i class="fa fa-edit"></i></span> 
               <!-- <input type="text" name="name" placeholder="Название" value="название" required />-->
            </div>
            
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <div class="column ">
            <p class="notification is-black wte">
                <img class="imgupload" src="css/image-add-button.svg">
            </p>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <div class="column ">
            <p class="notification is-black">
            <span class="tag l">+</span>
                дбавить раздел
                <span class="tag r">?</span>
            </p>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <div class="column ">
            <p class="notification is-black">
                название
            </p>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <div class="column ">
            <div class="notification is-black">
            <span class="tag l icon"><i class="fa fa-check"></i></span>
                товар
  <span class="tag r icon"><i class="fa fa-question"></i></span>
 </div>
        </div>
    </div>
</div>
</div>

    <!-- ///////////////////////////////////// -->

    <div class="container is-centered column box">
            <div class="columns">
                <div class="column">
                    <div class="notification is-black">
                        <strong>название </strong>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-black">
                    <span class="tag l icon"><i class="fa fa-check"></i></span>
                        <strong>btc </strong>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-black">
                    <span class="tag l icon"><i class="fa fa-check"></i></span>
                        <strong>eth </strong>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-black">
                    <span class="tag l icon"><i class="fa fa-check"></i></span>
                        <strong>pmc </strong>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-black">
                        <strong>цена(₽)</strong>
                    </div>
                </div>
                <div class="column">
                    <div class="notification is-black">
                        <strong><span class="tag icon"><i class="fa fa-close"></i></span></strong>
                    </div>
                </div>
            </div>
        </div>
     <div>
</div>
</body>
</html>
