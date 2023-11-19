let btn = document.getElementById('btnSubmit');
console.log(btn);

btn.forEach(function (ele) {

    ele.addEventListener("click", function (event) {
        event.preventDefault()


        var reauest = fetch('POST', "htttps")


        grpoupes = document.querySelectorAll(".groupes");
        grpoupes.style.display = 'none';
    })
});


