$(document).ready(function() {
 


  $("#Actualizar").click( function () {
    var currentdate = new Date(); 
    var hora=currentdate.getHours();
      if (hora<10)hora="0"+hora;
    var minutos=currentdate.getMinutes();
      if (minutos<10)minutos="0"+minutos;    
    var segundos=currentdate.getSeconds();
      if (segundos<10)segundos="0"+segundos;

    var hora_total=hora+":"+minutos+":"+segundos;

    var año=currentdate.getFullYear();
    var mes=currentdate.getMonth();
      if(mes==0)mes="enero";
      if(mes==1)mes="febrero";
      if(mes==2)mes="marzo";
      if(mes==3)mes="abril";
      if(mes==4)mes="mayo";
      if(mes==5)mes="junio";
      if(mes==6)mes="julio";
      if(mes==7)mes="agosto";
      if(mes==8)mes="septiembre";
      if(mes==9)mes="octubre";
      if(mes==10)mes="noviembre";
      if(mes==11)mes="diciembre";
    var dia=currentdate.getDate();
    var dia_semana=currentdate.getDay();
      if(dia_semana==0)dia_semana="Domingo";
      if(dia_semana==1)dia_semana="Lunes";
      if(dia_semana==2)dia_semana="Martes";
      if(dia_semana==3)dia_semana="Miércoles";
      if(dia_semana==4)dia_semana="Jueves";
      if(dia_semana==5)dia_semana="Viernes";
      if(dia_semana==6)dia_semana="Sábado";

    var dia_total=dia_semana+", "+dia+" de "+mes+" de "+año;

    document.getElementById("reloj").innerHTML=hora_total;
    document.getElementById("dia").innerHTML=dia_total;

  });

  $("#boton-mostrar-ocultar").click( function () {

    var x = document.getElementById("mostrar-ocultar");
    if (x.style.display === "none") 
    {
        x.style.display = "block";
        
        $("#Actualizar").trigger( "click" );
    } 
    else 
    {
        x.style.display = "none";
    }  

  });


});