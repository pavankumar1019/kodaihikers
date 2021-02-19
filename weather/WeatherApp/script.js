let loc = document.getElementById("location");
let tempIcon = document.getElementById("temp-icon")
let tempValue = document.getElementById("temp-value");
let tempUnit = document.getElementById("temp-unit");
let climate = document.getElementById("climate");
let iconFile; 

window.addEventListener("load", () => {
  let long;
  let lat;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      long = position.coords.longitude;
      lat = position.coords.latitude;
 
      const api = `https://api.openweathermap.org/data/2.5/weather?lat=10.2381136&lon=77.48918219999996&appid=2b86e74fb5be73f5b02b0298b2b622fa`;
      fetch(api)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          console.log(data);
          const { name } = data;
          const { feels_like, temp, temp_max, temp_min } = data.main;
          const { id, icon, main } = data.weather[0];
          tempValue.textContent = Math.round(feels_like - 273);
          loc.textContent = name;
          climate.textContent = main;
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
          }
          console.log(
            Math.round(temp - 273),
            Math.round(temp_max - 273),
            Math.round(temp_min - 273)
          );
          console.log(name);
        });
    });
  }
});
