function event() {
    let addBtn = document.getElementsByClassName("addBtn");
    // let returnBtn = document.getElementById("returnBtn");
    for ( i = 0; i < addBtn.length; i++) {
        addBtn[i].addEventListener("click", function(e){
            e.preventDefault();
            let pageSelect = document.getElementById("first");
            pageSelect.classList.toggle('hide');
            let pageSelect2 = document.getElementById("second");
            pageSelect2.classList.toggle('hide');
        });
    }
    

    // retunrbtn.addEventListener("click", function(e){
    //     e.preventDefault();
    //     let pageSelect2 = document.getElementById("second");
    //     pageSelect2.classList.toggle('hide');
    //
    //
    //
    // });
}
event();
