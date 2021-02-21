const api = {
  key: "2b86e74fb5be73f5b02b0298b2b622fa",
  base: "https://api.openweathermap.org/data/2.5/"
}
let tempIcon = document.getElementById("temp-icon");
let colo = document.getElementById("home_content");
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
    tempIcon.src = './icons/storm.svg' ;
  }
  else if (id<350){
    tempIcon.src = './icons/drizzle.svg' ;
  }
  else if (id<550){
    tempIcon.src = './icons/rain.svg' ;
  }
  else if (id<650){
    tempIcon.src = './icons/snow.svg' ;
  }
  else if (id<800){
    tempIcon.src = './icons/atmosphere.svg' ;
  }
  else if (id===800){
    tempIcon.src = './icons/sun.svg' ;
  }
  else if(id>800){
    tempIcon.src = './icons/clouds.svg' ;
    colo.style.backgroundColor = 'rgb(2,0,36)';
    colo.style.backgroundColor = 'linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,66,121,0.48783263305322133) 27%, rgba(0,212,255,0.711922268907563) 100%)';
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