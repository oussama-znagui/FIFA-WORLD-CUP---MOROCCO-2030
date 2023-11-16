// let btn = document.getElementById('ff');
// console.log(btn);

// btn.forEach(function (ele) {

//     ele.addEventListener("click", function (event) {
//         event.preventDefault()

//         grpoupes = document.querySelectorAll(".groupes");
//         grpoupes.style.display = 'none';
//     })
// });


let btnSubmit = document.getElementById('btnSubmit');

btnSubmit.addEventListener("click", function (event) {
    event.preventDefault()

    grpoupes = document.querySelectorAll(".groupes");
    grpoupes.style.display = 'none';
})
