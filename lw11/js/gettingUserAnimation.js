window.addEventListener('DOMContentLoaded', () => {
    const result = document.getElementById("result");
    const target = document.getElementById("btn");
  
    target.addEventListener("click", getSurvey);
  
    async function getSurvey() {
        let response = await fetch('getSurveys.php');
        if (response.ok) {
            let json = await response.json();
            if (Object.keys(json).length === 0) {
                const notFound = document.createElement('p');
                notFound.innerHTML = 'Сохранённых пользователей нет';
                notFound.classList.add('not-found-text')
                result.appendChild(notFound);
            }
            for (let i = 0; i < Object.keys(json).length; i++) {
  
                const div = document.createElement('div');
                result.appendChild(div);
                div.classList.add('survey');
  
                const img = document.createElement('img');
                img.src  = '../img/avatar.svg'
                img.alt = 'icon'
                div.appendChild(img)
                img.classList.add('survey__image');
  
                const name = document.createElement('p');
                name.innerHTML = json[i]["name"];
                name.classList.add('survey__text')
                div.appendChild(name);
  
                const email = document.createElement('p');
                email.innerHTML = json[i]["email"];
                email.classList.add('survey__text')
                div.appendChild(email);
  
                const activity = document.createElement('p');
                activity.innerHTML = json[i]["activity"];
                activity.classList.add('survey__text')
                div.appendChild(activity);
  
                const agreement = document.createElement('p');
                agreement.innerHTML = json[i]["agreement"];
                agreement.classList.add('survey__text')
                div.appendChild(agreement);
            }
        }
        target.removeEventListener("click", getSurvey);
    }
  });