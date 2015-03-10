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
