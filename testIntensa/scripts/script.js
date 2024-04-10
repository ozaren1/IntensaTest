
let inpName = document.querySelector('#name');
let inpEmail = document.querySelector('#email');
let inpNumber = document.querySelector('#number');
let submit = document.querySelector('.submit');
let check1,check2,check3;


function valid(elem, check){
    if(check){
        elem.classList.add("valid");
        elem.classList.remove("invalid");
    }else{
        elem.classList.remove("valid");
        elem.classList.add("invalid");
        submit.classList.add("disabled");
        submit.disabled = true;
    }
}
function checked(){
    if(check1 && check2 && check3){
        submit.classList.remove("disabled");
        submit.disabled = false;
    }else{
        submit.classList.add("disabled");
        submit.disabled = true;
    }
}
inpName.addEventListener('input', function(){
    let value = this.value;
    check1 = /^([А-ЯA-Z]|[А-ЯA-Z][\x27а-яa-z]{1,}|[А-ЯA-Z][\x27а-яa-z]{1,}\-([А-ЯA-Z][\x27а-яa-z]{1,}|(оглы)|(кызы)))\040[А-ЯA-Z][\x27а-яa-z]{1,}(\040[А-ЯA-Z][\x27а-яa-z]{1,})?$/.test(value);
    valid(inpName, check1);
    checked()
})

inpEmail.addEventListener('input', function(){
    let value = this.value;
    check2 = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu.test(value);
    valid(inpEmail, check2);
    checked()
})

inpNumber.addEventListener('input', function(){
    let value = this.value;
    check3 = /^[\d\+][\d\(\)\ -]{4,14}\d$/.test(value);
    valid(inpNumber, check3);
    checked()
})









  