<!DOCTYPE html>
<html lang="uk" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
		<title>My rezume</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content="rezume"/>
		<meta name="description" content="The my Web-site"/>
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- My rezume -->
		<?php
			$menu = array('Особові відомості', 'Мета', 'Освіта', 'Трудова діяльність', 'Професійні навички',
			'Особисті якості',);

		?>
		<h1>Резюме</h1>
		<h2>Лазоренко Світлана Костянтинівна</h2>
		<hr>


		<nav>
			<table class="menu">
				<tr>
					<?php
						for ($i=0; $i<=5; $i++) {
							$menu_n='menu' . $i;
							echo '<td><a href="#' . $menu_n . '">' . $menu[$i] . '</a></td>';
						}
					?>

				</tr>
			</table>
		</nav>
		<hr>
		<div class="side_right">
			<img src="img/foto.jpg" width="110" alt="Фото">
		</div>
		<div class="lichn" id="menu0">
			<?php
				$birthday = '02.02.1968р.';
				$age = date("Y") - substr($birthday,6,4);
			?>
			<table>
				<tr>
					<td class="t_right">Дата народження:  </td>
					<td class="t_left"><?php echo $birthday . ' ( ' . $age . 'p.)';?></td>
				</tr>
				<tr>
					<td class="t_right" >Сімейний стан:</td>
					<td class="t_left">одружена</td>
				</tr>
				<tr>
					<td class="t_right">Адреса:</td>
					<td class="t_left">м.Київ, Дарницький р-н, вул. Бориспільська</td>
				</tr>
				<tr>
					<td rowspan="2" class="t_right">тел.</td>
					<td class="t_left">379-14-24</td>
				</tr>
				<tr>
					<td class="t_left">050-202-26-46</td>
				</tr>
				<tr>
					<td class="t_right">e-mail: </td>
					<td class="t_left">Lazor-svet@ukr.net</td>
				</tr>
			</table>
		</div>
		<hr>
			<section id="menu1">
				<h3>МЕТА</h3>
				<p><i>Заміщення вакантної посади <b>програміста.</b> </i></p>
			</section>
			<section id="menu2">
				<h3>ОСВІТА </h3>
				<table class="robota">
                    <tr>
					    <td class="tab1_right">1985 р.</td>
						<td>закінчила Київську фізико-математичну школу № <b>145 </b></td>
                    </tr>
                    <tr>
					    <td class="tab1_right">1985 - 1991 р.</td>
                        <td>навчалася в <b><i>Київському Політехнічному Інституті</i></b>
                        	<img src="img/kpi_0.png" alt="logo"/> на факультеті<b> ФЕТ</b>	за спеціальністю
                        	<b>“САПР”</b>, який закінчила з червоним дипломом, отримавши кваліфікацію
							<b><i>інженер-системотехнік</i></b>  </td>
                    </tr>
                    <tr>
					    <td class="tab1_right">2016 р.</td>
                        <td>курси <b>WEB</b>-програмування.</td>
                    </tr>
				</table>
			</section>
			<section id="menu3">
			<h3>ТРУДОВА ДІЯЛЬНІСТЬ </h3>
				<table class="robota">
					<?php
						$time_w1 = '1996 – 2016 p.';
						$time_w2 = '1991 - 1996 р.';
					?>
					<tr>
						<td rowspan="2" class="tab2_right"> <?php echo $time_w1 . ' ( ' .
								(substr($time_w1,9,4) - substr($time_w1,0,4)) . 'p.)';?></td>
						<td><b><img src="img/bank.jpg" alt="logo"/> Дарницьке відділення АТ „ Ощадбанк”</b></td>
					</tr>
					<tr>
						<td><i>Заступник начальника відділу інформатики та автоматизації.</i></td>
					</tr>
					<tr>
						<td rowspan="2" class="tab2_right"> <?php echo $time_w2 . ' ( ' .
							(substr($time_w2,7,4) - substr($time_w2,0,4)) . 'p.)';?></td>
						<td> <b>КБ Київського радіозавода</b></td>
					</tr>
					<tr>
						<td><i>Інженер-програміст</i></td>
					</tr>

				</table>
			</section>
			<section id="menu4">
				<?php
					function ul_li($arr){
						echo '<ul>';
						foreach ($arr as $value ) {
							echo '<li>' . $value . '</li>';
						}
						echo '</ul>';
					}
				?>
				<h3>ПРОФЕСІЙНІ НАВИЧКИ </h3>
				<?php
					$attainment = array('Мови програмування: Clipper, FoxPro, Visual Basic для Excel.
						Вивчаю Html, Css, Java-script, Php', 'Робота з БД', 'Встановлення, налаштування та заміна 
						ОС Windows 9х, XP, Seven. Інсталяція та налаштування необхідного програмного забезпечення
						 до них.', 'Адміністрування локальної мережі, серверів (Windows 2003 Server, Free BSD,
						віртуальних серверів, термінальний сервер).', 'Работа в домені зі службою Active Directory
						 – додавання комп’ютерів та користувачів в домен, розблокування, призначення прав .',
						'Інсталяція, тестування і супровід  програм.', 'Підтримка користувачів');

					ul_li($attainment);
				?>
				<!--<ul>
					<li> Мови програмування: Clipper, FoxPro, Visual Basic для Excel.
						Вивчаю Html, Css, Java-script, Php </li>
					<li>Робота з БД</li>
					<li>Встановлення, налаштування та заміна ОС Windows 9х, XP, Seven.
						Інсталяція та налаштування необхідного програмного забезпечення до них.</li>
					<li>Адміністрування локальної мережі, серверів (Windows 2003 Server, Free BSD,
						віртуальних серверів, термінальний сервер).</li>
					<li>Работа в домені зі службою Active Directory – додавання комп’ютерів та користувачів в домен,
						розблокування, призначення прав . </li>
					<li>Інсталяція, тестування і супровід  програм.</li>
					<li>Підтримка користувачів</li>
				</ul>-->
			</section>
			<section id="menu5">
				<h3>ОСОБИСТІ ЯКОСТІ</h3>
				<?php
					$merit = array('Ретельність', 'Стресостійкість', 'Висока працездатність',
						'Легко та із задоволенням навчаюсь', 'Пунктуальність',
						'Відсутність поганих звичок', 'Коммуникативність');

					ul_li($merit);
				?>
				<!-- <ul>
					<li>Ретельність</li>
					<li>Коммуникативність</li>
					<li>Пунктуальність</li>
					<li>Легко та із задоволенням навчаюсь</li>
					<li>Стресостійкість </li>
					<li>Відсутність поганих звичок</li>
					<li>Висока працездатність</li>
				</ul> -->
			</section>
		<hr>
		<footer>
			<table>
				<tr>
					<td><a href="https://www.linkedin.com" target="_blank"><img src="img/linkedin.jpg" alt="LinkedIn">
                        </a></td>
					<td><a href="https://www.skype.com/ru/" target="_blank"><img src="img/skype.jpg" alt="Skype"></a>
                    </td>
				</tr>
			</table>
		</footer>
	</body>
 </html>