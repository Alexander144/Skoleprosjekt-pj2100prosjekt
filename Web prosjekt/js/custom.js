$(document).ready(function(){
  $("#rom_ledig1").click(function(){
    $("#bestill_rom1").show("1000");
  });
});

$(document).ready(function(){
  $("#rom1_btn1").click(function(){
    $("#rom_ledig1").addClass("rom_opptatt");
    $("#bestill_rom1").hide("1000");
  });
});

$(document).ready(function(){
  $("#rom1_btn2").click(function(){
    $("#bestill_rom1").hide("1000");
  });
});

$(document).ready(function() {
  $('#rom1_nytid').keyup(function() {
   $('#rom1_tid').val($(this).val());
   $('#rom1_tid').html($(this).val());
    var dato;
   dato = $(this).val();
   calendar(dato);
 });
});

$(document).ready(function() {
  $('#rom1_navn').keyup(function() {
   $('#rom1_status').val($(this).val());
   $('#rom1_status').html("Opptatt ( " + $(this).val() + " )");
 });
});

$(document).ready(function(){
  $("#rom_ledig2").click(function(){
    $("#bestill_rom2").show("1000");
  });
});

$(document).ready(function(){
  $("#rom2_btn1").click(function(){
    $("#rom_ledig2").addClass("rom_opptatt");
    $("#bestill_rom2").hide("1000");
  });
});

$(document).ready(function(){
  $("#rom2_btn2").click(function(){
    $("#bestill_rom2").hide("1000");
  });
});

$(document).ready(function() {
  $('#rom2_nytid').keyup(function() {
   $('#rom2_tid').val($(this).val());
   $('#rom2_tid').html($(this).val());
 });
});

$(document).ready(function() {
  $('#rom2_navn').keyup(function() {
   $('#rom2_status').val($(this).val());
   $('#rom2_status').html("Opptatt ( " + $(this).val() + " )");
 });
});

$(document).ready(function(){
  $("#rom_ledig3").click(function(){
    $("#bestill_rom3").show("1000");
  });
});

$(document).ready(function(){
  $("#rom3_btn1").click(function(){
    $("#rom_ledig3").addClass("rom_opptatt");
    $("#bestill_rom3").hide("1000");
  });
});

$(document).ready(function(){
  $("#rom3_btn2").click(function(){
    $("#bestill_rom3").hide("1000");
  });
});

$(document).ready(function() {
  $('#rom3_nytid').keyup(function() {
   $('#rom3_tid').val($(this).val());
   $('#rom3_tid').html($(this).val());
 });
});

$(document).ready(function() {
  $('#rom3_navn').keyup(function() {
   $('#rom3_status').val($(this).val());
   $('#rom3_status').html("Opptatt ( " + $(this).val() + " )");
 });
});

$(document).ready(function(){
  $("#rom_ledig4").click(function(){
    $("#bestill_rom4").show("1000");
  });
});

$(document).ready(function(){
  $("#rom4_btn1").click(function(){
    $("#rom_ledig4").addClass("rom_opptatt");
    $("#bestill_rom4").hide("1000");
  });
});

$(document).ready(function(){
  $("#rom4_btn2").click(function(){
    $("#bestill_rom4").hide("1000");
  });
});

$(document).ready(function() {
  $('#rom4_nytid').keyup(function() {
   $('#rom4_tid').val($(this).val());
   $('#rom4_tid').html($(this).val());
 });
});

$(document).ready(function() {
  $('#rom4_navn').keyup(function() {
   $('#rom4_status').val($(this).val());
   $('#rom4_status').html("Opptatt ( " + $(this).val() + " )");
 });
});

$(document).ready(function(){
  $("#rom_ledig5").click(function(){
    $("#bestill_rom5").show("1000");
  });
});

$(document).ready(function(){
  $("#rom5_btn1").click(function(){
    $("#rom_ledig5").addClass("rom_opptatt");
    $("#bestill_rom5").hide("1000");
  });
});

$(document).ready(function(){
  $("#rom5_btn2").click(function(){
    $("#bestill_rom5").hide("1000");
  });
});

$(document).ready(function() {
  $('#rom5_nytid').keyup(function() {
   $('#rom5_tid').val($(this).val());
   $('#rom5_tid').html($(this).val());
 });
});

$(document).ready(function() {
  $('#rom5_navn').keyup(function() {
   $('#rom5_status').val($(this).val());
   $('#rom5_status').html("Opptatt ( " + $(this).val() + " )");
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
function calendar(dato)
{
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth();
  var year = date.getYear();
  document.write(dato);

        /*if(year<=200)
        {
                year += 1900;
        }
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        days_in_month = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
        if(year%4 == 0 && year!=1900)
        {
                days_in_month[1]=29;
        }
        total = days_in_month[month];
        var date_today = day+' '+months[month]+' '+year;
        beg_j = date;
        beg_j.setDate(1);
        if(beg_j.getDate()==2)
        {
                beg_j=setDate(0);
        }
        beg_j = beg_j.getDay();
        document.write('<table class="cal_calendar" onload="opacity(document.getElementById(\'cal_body\'),20);"><tbody id="cal_body"><tr><th colspan="7">'+date_today+'</th></tr>');
        document.write('<tr class="cal_d_weeks"><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>');
        week = 0;
        for(i=1;i<=beg_j;i++)
        {
                document.write('<td class="cal_days_bef_aft">'+(days_in_month[month-1]-beg_j+i)+'</td>');
                week++;
        }
        for(i=1;i<=total;i++)
        {
                if(week==0)
                {
                        document.write('<tr>');
                }
                if(day==i)
                {
                        document.write('<td class="cal_today">'+i+'</td>');
                }
                else
                {
                        document.write('<td>'+i+'</td>');
                }
                week++;
                if(week==7)
                {
                        document.write('</tr>');
                        week=0;
                }
        }
        for(i=1;week!=0;i++)
        {
                document.write('<td class="cal_days_bef_aft">'+i+'</td>');
                week++;
                if(week==7)
                {
                        document.write('</tr>');
                        week=0;
                }
        }
        document.write('</tbody></table>');
        opacity(document.getElementById('cal_body'),70);
        return true;
        */ 
      }
