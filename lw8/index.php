<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='ulf-8'>
  <title>Don`t do it</title>
  <link rel='stylesheet' type='text/css' href='./css/style.css'>
  <link rel='stylesheet' type='text/css' href='./css/formstyle.css'>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body style="margin: 0px; width:auto; overflow-x:hidden;"> 
  <header class="header">
    <div class="header__logo">
        <img src="illustrations/logo.svg" alt="Не делай это">
    </div>
    <div class="header__tabs">
        <div class="header__tabs__item">
            <p>Что будет на курсе?</p>
        </div>
        <div class="header__tabs__item">
            <p>Вопросы</p>
        </div> 
        <div class="header__tabs__item">
            <p>Автор</p> 
        </div>  
    </div>            
    <div class="header_enroll">
        <p>Записаться на курс</p>
    </div>
    
  </header>
  <main>
      <div class="enroll">
        <div class="enroll__block">
            <div class="enroll__block__logoru">
                <p class="logoru__text">Не <span class="colortext">делай</span> это</p>
            </div>  
            <div class="enroll__block__description">
                <p class="description__text">Онлайн-курс для творческих людей, о том, как управлять своим временем</p>
            </div>
            <div class="enroll__block__button">
                <p class="button__text">Записаться на курс</p>
             </div>   
         </div>
         <div class="enroll__ill">
            <img src="illustrations/ill.png" alt="illustration"/>
         </div>   
      </div>   
        
    <div class="insert">
        <div class="insert__row">
                <div class="row__block-time">
                    <img class="block-time__icon" src="illustrations/Time.svg"/>
                    <p class="block-time__text">Для тех, у кого слишком много идей и слишком мало времени</p>
                </div>
                <div class="row__block-benefits">
                    <img class="block-benefits__icon" src="illustrations/notebook.svg"/>
                    <p class="block-benefits__text">Метод «списка не дел», который позволит успевать и реализовывать</p>
                </div>
                <div class="row__block-goal">
                    <img class="block-goal__icon" src="illustrations/target.svg"/>
                    <p class="block-goal__text">Курс научит творческих людей сосредоточиваться</p>
                </div>
        </div>
    </div>
    <div class="not_be_in_time">
        <div class="not_be_in_time__ill">
            <img src="illustrations/Finances.png"/>
        </div>    
        <div class="not_be_in_time__box">
            <div class="box__block">
                <p class="block_text">Ты не успеешь</p>
            </div>
            <div class="box__block__problem">
                <p class="block__problem_text"> Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
            </div>
        </div>    
    </div> 
    <div class="deadline">
        <div class="deadline__box">  
            <div class="deadline__block">
                <p class="block_text">Опять дедлайн</p>
            </div>
            <div class="deadline__block__problem">
                <p class="block__problem_text">В мире, где столько всего интересного, когда же успевать жить?</p>
            </div>
        </div> 
        <div class="deadline__ill">
            <img  src="illustrations/MindBlowing.png"/>
        </div>     
    </div>
    <div class="on_course_you_can">
        <div class="on_course_you_can_box__text">
            <p class="on_course_you_can__text">На курсе ты <span class="colortext">сможешь</span></p>
        </div>
        <div class="on_course_you_can__all_blocks">
            <div class="first_line_blocks">
                <div class="block">
                    <img class="block__ill_1f" src="illustrations/1finger.svg"/>
                    <p class="block__info_1f">Понять, что нужно делать, а что делать не стоит.</p>
                </div>
                <div class="block">
                    <img class="block__ill_2f" src="illustrations/2fingers.svg"/>
                    <p class="block__info_2f">Перестать себя искусственно ограничивать.</p>
                </div>
                <div class="block">
                    <img class="block__ill_3f" src="illustrations/3fingers.svg"/>
                    <p class="block__info_3f">Определить сильные стороны <br>и начать использовать слабые.</p>
                </div>
            </div>
            <div class="second_line_blocks">
                <div class="block">
                    <img class="block__ill_4f" src="illustrations/4fingers.svg"/>
                    <p class="block__info_4f">Научиться достигать любой цели <br>в 3 понятных шага.</p>
                </div>
                <div class="block">
                    <img class="block__ill_5f" src="illustrations/5fingers.svg"/>
                    <p class="block__info_5f">Сотрудничать эффективно<br> и с правильными людьми.</p>
                </div>
                <div class="block">
                    <img class="block__ill_6f" src="illustrations/6fingers.svg"/>
                    <p class="block__info_6f">Оптимизировать общение с клиентами и проведение совещаний.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'form.php' ?>
  </main>
    <footer class="footer">
        <img class="footer__logo" src="illustrations/logo2.svg">
    </footer>
</body>