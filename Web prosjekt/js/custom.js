$(document).ready(function () {
  //lager en variabel og setter til å være alle html objektene med klassen .rom
  var rooms = $('.room');
  //sjekker om det finnes rom og kjører igjennom funskjonen
  if (rooms.length > 0) {
    //Den sjekker om det finnes 4 knapper som er dissable(booked). Hvis så gir den rooms klassen full og blir rød
    $.each(rooms, function () {
      if ($(this).find('.book:disabled').length == 4) {
        $(this).addClass('full');
      }
    });

    //Trykker på klassen rooms og rad så kjører funksjonen, dette er fordi du skal bare kunne trykke på den engang  når den ikke active
      rooms.on('click', '.rad', function () {
      //This er objekte du trykker på, closest er den nærmeste med klassen .room og har klassen booked så retunerer den false som vil si at undermenyen ikke kommer opp
      if ($(this).closest('.room').hasClass('booked')) {
          return false;
      }
      //sjekker om klassen er active, hvis den er så kan du trykke på .room klassen og fjernet klassen
      if($(this).closest('.room').hasClass('active')){ 
        $(this).closest('.room').removeClass('active');
      }
        else{
      //Hvis du trykker på objekte og nærmeste objekte og legger til klassen active i klassen room
      $(this).closest('.room').addClass('active');
    }
    });
      //Each går igjennom alle .booking-form.
    $('.booking-form .period .book').each(function () {
      var button = $(this);
      //Når du trykker på submit så sender alle verdier for skjema verdiene til update.php
      button.on('click', function (e) {
        //Dette hindrer nettleserer å gjøre uønsket handlinger
        e.preventDefault();

        //Lager variabler og setter inn ting i variablene  for valgte klasse
        var roomNumber = button.attr("data-roomNumber"),
            time = button.attr("data-time"),
            date = button.attr('data-date');
            console.log(roomNumber,time,date);
            //Kobler seg opp til update.php
        $.ajax({
          url: 'bin/update.php',
          //Sender data av alle variablene
          data: {
            roomNumber: roomNumber,
            date: date,
            time: time,
          },  
          //Bruker metoden post, hvis post klarer å sende data refresher den siden
          method: 'POST',
          success: function (data) {
            location.reload();
          }
        });
      });
    });
  }
  //sjekker om dayselectoren forandrer seg og gjør funksjonen submit
$('.dayselector').on('change', function () {
  $(this).submit();
});
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

