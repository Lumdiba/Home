const pInfo = document.querySelectorAll('.pInfo');
const imgP = document.querySelectorAll('.imgP');
const btns = document.querySelectorAll('.btns');
const buy = document.querySelectorAll('.buy');
const input = document.querySelectorAll('.buy a input');

fetch('fetchProducts.php').then(res => {
    return res.json();
}).then(res => {
    let i=0;
    res.forEach(row => {
        
        pInfo[i].firstElementChild.innerHTML = row.pname;
        pInfo[i].lastElementChild.innerHTML += row.pprice;
        imgP[i].firstElementChild.setAttribute('src', `images/${row.pimage}`);
        buy[i].firstElementChild.lastElementChild.setAttribute('value', row.pid);
        i++;     
        
        if(i>pInfo.length){
            return;
        }
    })
  
})


let pw = document.getElementById('pw');
let toggle = document.getElementById('togglePassword');

            toggle.addEventListener('click', () =>{
                if(pw.type === 'password'){
                    pw.type = 'text';
                    toggle.className = "ri-eye-fill";
                }
                else{
                    pw.type = 'password';
                    toggle.className = "ri-eye-off-fill";
                }
            })

let mobval = document.getElementById('mobno');
let mobErr = document.getElementById('mobErr');

mobval.addEventListener('change', ()=>{
    if(mobval.value.length < 10 || mobval.value.length > 10){
        mobErr.innerHTML = "Phone number invalid!";
    }
    else{
        mobErr.innerHTML = "";
    }
})

let cpw = document.getElementById('cpw');
let passErr = document.getElementById('passErr');

pw.addEventListener('change', ()=>{
    if(pw.value.length < 8 || pw.value.search(/[A-Z]/) == -1 || pw.value.search(/[a-z]/) == -1 || pw.value.search(/[0-9]/) == -1){
        
        if(pw.value.length < 8){
            passErr.innerHTML = "Password should be greater than 8 characters!";
        }
        else{
            passErr.innerHTML = "Suggesting atleast 1 uppercase, 1 lowercase and 1 number";
        }
    }
    else{
        passErr.innerHTML = "";
    }
})



