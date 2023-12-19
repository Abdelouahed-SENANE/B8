
// Side Bar Actions 
const sideBar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('toggle');
toggleBtn.addEventListener('click' , ()=>{
    if (sideBar.classList.contains('open')) {
        sideBar.classList.add('close');
        sideBar.classList.remove('open');
    }else {
        sideBar.classList.remove('close');
        sideBar.classList.add('open');
    }
})