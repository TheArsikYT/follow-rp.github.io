<?
require 'config.php';
//--------Функции-----------//
function CreateMenu($nameproject){
	echo "<section class=\"section-header-line\">
		<div class=\"container-fluid\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-4 col-md-4 col-sm-4\">
						<div class=\"hl-logotype\"><h2>".$nameproject."</h2></div>
					</div>
					<div class=\"col-lg-8 col-md-8 col-sm-8\">
						<div class=\"hl-menu\">
							<ul>
								<li><a href=\"/\">Главная</a></li>
								<li><a href=\"https://followrp.sa-mp-servers.com/forum/\">Форум</a></li>
								<li><a href=\"/page/news/\">Новости</a></li>
								<li><a href=\"/page/donate/\">Донат</a></li>
								<li><a href=\"/page/userpanel/\">Личный Кабинет</a></li>
								<li><a href=\"/page/lottery/\">Кейсы</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>";
}
function PageTitle($nametitle,$text){
	echo "
	<div class=\"page-title-gradient\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-4\">
              <h1>".$nametitle."</h1>
              <p>".$text."</p>
            </div>
          </div>
        </div>
      </div>
	";
}
function CreateAMenu(){
	echo "
	<section class=\"inner-header\">
      <div class=\"header-navbar animated fadeInDown\">
        <nav class=\"navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapse\">
                  <i class=\"fa fa-bars\"></i> Открыть меню
                </button>
              </div>
              <div class=\"collapse navbar-collapse\" id=\"collapse\">
             
                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"../../userpanel/\">Личный кабинет</a></li> 
                </ul> 
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>
	";
}	
function CreateFooter($nameproject,$type){
	if($type == "white")
	{
		echo "<section class=\"section-footer-min\">
		<div class=\"container-fluid\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"footer-wrapper\">
						<div class=\"copyright-min\">
							<div class=\"f-logotype-min\"><h2>".$nameproject."</h2></div>
							<div class=\"copytext-min\"><h3>Все права защищены &copy; 2016 <br> Developed by <a href=\"https://vk.com/andreasmoore\">Andreas Moore</a>  | Design by <a href=\"https://vk.com/s.gromov999\">Sergey Gromov</a> </h3></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>";
	}
	else if($type == "black")
	{	
		echo "<section class=\"section-footer\">
			<div class=\"container-fluid\">
				<div class=\"container\">
					<div class=\"row\">
						<div class=\"footer-wrapper\">
							<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
								<div class=\"copyright\">
									<div class=\"f-logotype\"><h2>".$nameproject."</h2></div>
									<div class=\"copytext\"><h3>Все права защищены &copy; 2017 <br>ФОРУМ</a></h3></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>";
	}
}
function FixName($name){
	$order = array("_");
	$replace = " ";
	$newstr = str_replace($order,$replace,$name);
	$pos = strpos($newstr," ",1);
	$name = substr($newstr,0,$pos);
	$subname = substr($newstr,$pos,24);
	echo "".$name." ".$subname."";
//
}
function ProtectMail($mail){
	$str = $mail;
	$langoldmail = strlen($str);
	$pos = strpos($str,"@",1);
	$namemail = substr($str,0,$pos);
	$langmail = strlen($namemail);
	$protectmail = substr($namemail,5,$langmail);
	$dommen = $namemail = substr($str,$pos,$langoldmail);
	echo "*****".$protectmail."".$dommen."";	
	
}
function ProtectPass($pass){
	$pstr = $pass;
	$langpass = strlen($pstr);
	if($langpass > 8)
	{
		$protectpass = substr($pstr,5,$langpass);
		echo "*****".$protectpass."";
	}
	else
	{
		$protectpass = substr($pstr,3,$langpass);
		echo "***".$protectpass."";
	}	
}
function Sex($sex)
{
	if($sex == 0)
	{
		echo "Мужской";
	}
	else
	{
	echo "Женский";
	}
}
function CreateNews(){
	//Подсчет кол-ва новостей для лимита
	$query = mysql_query("SELECT * FROM `news`");
	$top = mysql_num_rows($query);
	$min = $top-$maxnews;
	//Запрос на получение новостей из базы | Получит последние 10 новостей
	if($top > 10)
	{
		$query = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT ".$min.",".$top."";
	}
	else 
	{ $query = "SELECT * FROM `news` ORDER BY `id` DESC";
	}
	$rs = mysql_query($query);
	$count_news = mysql_num_rows($rs);
	if(mysql_num_rows($rs)>0)
	{
        while($row = mysql_fetch_array($rs)) {
		echo "<div class=\"col-lg-12 col-lg-offset col-md-8 col-md-offset\">
						<div class=\"inner-container news-wrp\">
						  <div class=\"inner-title\"><h2>".$row['title']."</h2></div>
						  <div class=\"inner-body np\">
							<div class=\"news-img\"><img src=\"".$row['img']."\" class=\"img-responsive\"></div>
							<div class=\"news-full-cnt\">
							  <p>".$row['Text']."</p>
							</div>
							<div class=\"news-footer clearfix\">
							  <span class=\"pull-left\">".$row['Date']." &nbsp&nbsp&nbsp<i class=\"fa fa-file\"></i> &nbsp".$row['id']."</span>
							  <a class=\"pull-right\" href=\"#\">".$row['Dev']."</a>
							</div>
						  </div>
						</div>
					  </div>";}
	}
    else echo "<div class=\"col-lg-12 col-lg-offset col-md-8 col-md-offset\"><br><br><center><h1>Новости отсутствуют!</h1></center></div>";
	mysql_close();
}
function CountTable($sql){
	$count = mysql_query($sql);
	echo mysql_num_rows($count);
}
function UserStatus($ban){
	if($ban > 0)
	
		echo "Заблокирован на ".$ban." дня(ей)";
	
	else
		echo "Активен";
}
function CreateANav(){
	echo "
	<div class=\"col-lg-3 col-md-12 col-sm-12\">
            <div class=\"inner-container hidden-xs\">
              <div class=\"inner-title\"><h2>Меню</h2></div>
              <div class=\"inner-body\">
                <ul class=\"admin-nav\">
                  <li><a href=\"index.php\">Главная</a></li>
				  <li><a href=\"admins.php\">Администрация</a></li>
                  <li><a href=\"news.php\">Управление новостями</a></li>
                </ul>
              </div>
            </div>
          </div>
	";
}
function rank($member,$rang)
{
		if($member == 1)
		{
			if($rang == 1) return $rank = "Фельдшер";
			else if($rang == 2) return $rank = "Глав.Врач";
		}
		else if($member == 2)
		{
			if($rang == 1) return $rank = "Секретарь";
			else if($rang == 2) return $rank = "Мэрия LS";
		}			
}
function fracname($frac)
{
		if($frac == 0) return $fracname = "Гражданин"; 
		else if($frac == 1) return $fracname = "Больница LS"; 
        else if($frac == 2) return $fracname = "Мэрия LS"; 
        else if($frac == 3) return $fracname = "Army LS"; 	
}
function GetLic($lic){
    if($lic == 1) echo "Имеется";
    else echo "Отсутствует";
}
function GetCSS(){
    echo "<link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap-grid.min.css\" />
    <link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/font-awesome/css/font-awesome.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/linea/styles.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/magnific-popup/magnific-popup.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/animate/animate.min.css\" />
	<!-- Main CSS -->
	<link rel=\"stylesheet\" href=\"/classes/css/main.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/fonts.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/media.css\" />";
}
?>