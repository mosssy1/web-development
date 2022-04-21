<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
</head>    
<body>
    <div class="welcome">
        <div class="form_ill">
            <img src="illustrations/Welcome.png" >
        </div>    
        <div class="enroll_on_course_form">
            <p>Записаться на курс</p>
        </div>
        <div class="form">
            <input class="form__name" type="text" placeholder="Ваше имя" ></input>
            <input class="form__email" type="email" placeholder="Email"></input>
            <select class="form__work" placeholder="Деятельность">
                <option class="activity" selected disabled hidden>Деятельность</option>
                <option class="programmer">Программист</option>
                <option class="designer">Дизайнер</option>
                <option class="marketer">Маркетолог</option>
            </select>
        </div>    
        <div class="permission">
            <input class="permission__check" type="checkbox">
                <label class="permission__check_text" for="checkbox">Согласен получать информационные материалы о старте курса</label>
            </input>
        </div>   
        <button class="enroll_form">
            <p>Записаться на курс</p>
        </button>
    </div>
</body>
</html>