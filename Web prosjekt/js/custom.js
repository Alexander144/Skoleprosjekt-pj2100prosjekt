$(document).ready(function () {
  //lager en variabel og setter til å være alle html objektene med klassen .rom
  var rooms = $('.room');
  //sjekker om det finnes rom og kjører igjennom funskjonen
  if (rooms.length > 0) {
    //Trykker på klassen rooms og rad så kjører funksjonen, dette er fordi du skal bare kunne trykke på den engang  når den ikke active
    rooms.on('click', '.rad', function () {
      //This er objekte du trykker på, closest er den nærmeste med klassen .room og har klassen booked så retunerer den false som vil si at undermenyen ikke kommer opp
      if ($(this).closest('.room').hasClass('booked')) {
        return false;
      }
      //Hvis du trykker på objekte og nærmeste objekte og legger til klassen active i klassen room
      $(this).closest('.room').addClass('active');
    });
      //Når du trykker på cancel så fjerner du klassen active fra klassen .room
    rooms.on('click', '.cancel', function () {
      $(this).closest('.room').removeClass('active');
    });
      //Each går igjennom alle .booking-form.
    $('.booking-form').each(function () {
      var form = $(this);
      //Når du trykker på submit så sender alle verdier for skjema verdiene til update.php
      form.on('submit', function (e) {
        //Dette hindrer nettleserer å gjøre uønsket handlinger
        e.preventDefault();
        //Lager variabler og setter inn ting i variablene  for valgte klasse
        var roomNumber = form.find('.room-number').val(),
            name = form.find('.user').val(),
            date = form.find('.date').val(),
            timeStart = form.find('.time-start').val(),
            timeEnd = form.find('.time-end').val();
            //Kobler seg opp til update.php
        $.ajax({
          url: 'bin/update.php',
          //Sender data av alle variablene
          data: {
            roomNumber: roomNumber,
            name: name,
            date: date,
            timeStart: timeStart,
            timeEnd: timeEnd
          },
          //Bruker metoden post, hvis post klarer å sende data refresher den siden
          method: 'POST',
          success: function () {
            location.reload();
          }
        });
      });
    });
  }

});

function setStyle(id,style,value)
{
  id.style[style] = value;
}
function opacity(el,opacity)
{
  setStyle(el,"filter:","alpha(opacity="+opacity+")");
  setStyle(el,"-moz-opacity",opacity/100);
  setStyle(el,"-khtml-opacity",opacity/100);
  setStyle(el,"opacity",opacity/100);
}

