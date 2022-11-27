//Function expression to select elements
const selectElement = (s) => document.querySelector(s);
//Function open the menu on click
selectElement('.open').addEventListener('click', ()=> {
    selectElement('.nav-list').classList.add('active');
})
//Function close the menu on click
selectElement('.close').addEventListener('click', ()=> {
    selectElement('.nav-list').classList.remove('active');
})