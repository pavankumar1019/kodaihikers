const api = {
  key: "2b86e74fb5be73f5b02b0298b2b622fa",
  base: "https://api.openweathermap.org/data/2.5/"
}
let tempIcon = document.getElementById("temp-icon");
window.addEventListener("load", () => {
  fetch(`${api.base}weather?q=kodaikanal&units=metric&APPID=${api.key}`)
    .then(weather => {
      return weather.json();
    }).then(displayResults);
function displayResults (weather) {
  let city = document.querySelector('.location .city');
  city.innerText = `${weather.name}, ${weather.sys.country}`;

  let now = new Date();
  let date = document.querySelector('.location .date');
  date.innerText = dateBuilder(now);

  let temp = document.querySelector('.current .temp');
  temp.innerHTML = `${Math.round(weather.main.temp)}<span>°c</span>`;

  let weather_el = document.querySelector('.current .weather');
  weather_el.innerText = weather.weather[0].main;
  const { id, icon, main } = weather.weather[0];
  if (id<250){
    tempIcon.src = '../images/kodai_logo.png' ;
  }
  else if (id<350){
    tempIcon.src = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685));' ;
  }
  else if (id<550){
    tempIcon.src = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685));' ;
  }
  else if (id<650){
    tempIcon.src = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685));' ;
  }
  else if (id<800){
    tempIcon.src = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685));' ;
  }
  else if (id===800){
    tempIcon.src = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685))' ;
  }
  else if(id>800){
    tempIcon.style.backgroundImage = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(38, 0, 255, 0.685))';
  }

  let hilow = document.querySelector('.hi-low');
  hilow.innerText = `${Math.round(weather.main.temp_min)}°c / ${Math.round(weather.main.temp_max)}°c`;
}

function dateBuilder (d) {
  let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

  let day = days[d.getDay()];
  let date = d.getDate();
  let month = months[d.getMonth()];
  let year = d.getFullYear();

  return `${day} ${date} ${month} ${year}`;
}
});