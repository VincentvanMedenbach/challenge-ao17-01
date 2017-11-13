var Rotator = document.getElementById("Rotator");
var CurrentNumber = 1;
var NotClicked = true;

function left() {
    NotClicked = false;
    CurrentNumber++;
    Checker();
    console.log(Rotator);
    Rotator.src = "img/jobs-photo" + CurrentNumber + ".jpg";

};

function right() {
    NotClicked = false;
    CurrentNumber--;
    Checker();
    Rotator.src = "img/jobs-photo" + CurrentNumber + ".jpg";
    console.log("TEST");
};

function Checker() {
    if (CurrentNumber > 4) {
        CurrentNumber = 1;
    }
    if (CurrentNumber < 1) {
        CurrentNumber = 4;
    }

}

window.onload = Loader();

function Loader() {

    var a = 0;                               //Resets timer
    window.setInterval(movement, 1000);        //Sets correct speed to move at

    //Movement loop
    function movement() {
        if (NotClicked == true) {
            CurrentNumber++;
            Checker();
            Rotator.src = "img/jobs-photo" + CurrentNumber + ".jpg";
            console.log("its running");
        }
    }
}

