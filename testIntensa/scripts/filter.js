let filterCity = document.querySelector("#filter-city");
let arrCity = document.querySelectorAll(".city");

filterCity.addEventListener('change', function(){
    console.log(filterCity.value)
    for(let city of arrCity){
        if(filterCity.value == "Город"){
            city.parentElement.classList.remove('inappropriate');
            city.parentElement.classList.add('suitable');
        }
        else if(city.textContent !== filterCity.value){
            city.parentElement.classList.add('inappropriate');
        }else if(city.textContent == filterCity.value){
            city.parentElement.classList.remove('inappropriate');
            city.parentElement.classList.add('suitable');
        }
   }
})

