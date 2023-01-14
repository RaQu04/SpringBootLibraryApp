function get_name(){
    var temp = document.getElementById("search").value;
    
}  

function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

// $('#submit').click(function() {
//     $.ajax({
//         url: 'skrypt_book.php',
//         type: 'POST',
//         data: {
//             tytul:$("#tutul").val(),
//             autor: $("#autor").val(),
//             wydawca: $("#wydawca").val(),
//             kategoria: $("#kategoria").val(),
//             rok_wydania: $("#rok_wydania").val()
//         },
//         success: function(msg) {
//             alert('Correct');
//         },
//         error: function(msg){
//             alert('Error')
//         }       
//     });
// });