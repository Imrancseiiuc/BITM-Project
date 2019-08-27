/* For Product Promotion Countdown */
const second = 1000,
  minute = second * 60,
  hour = minute * 60,
  day = hour * 24;

let countDown = new Date("May 30, 2019 03:00:00").getTime(),
  x = setInterval(function() {
    let now = new Date().getTime(),
      distance = countDown - now;

    (document.getElementById("showDays").innerText = Math.floor(
      distance / day
    )),
      (document.getElementById("showHours").innerText = Math.floor(
        (distance % day) / hour
      )),
      (document.getElementById("showMinutes").innerText = Math.floor(
        (distance % hour) / minute
      )),
      (document.getElementById("showSeconds").innerText = Math.floor(
        (distance % minute) / second
      ));

    //do something later when date is reached
    //if (distance < 0) {
    //  clearInterval(x);
    //  'IT'S MY BIRTHDAY!;
    //}
  }, second);

/*script for cart*/
$(document).ready(function() {
    var cartBtn = document.getElementById("miniCart");
    var cartBox = document.getElementById("cartBox");
    var cartBoxHide = $(cartBox).hide();
    $(cartBtn).on("click", function () {
        $(cartBox).toggle("slow");
    });
    $("#cartClose").on("click", function () {
        $(cartBox).hide();
    });

})
