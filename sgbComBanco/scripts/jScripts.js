
function exibeDataHora(div){

   var data = new Date();
   
   // obtem o dia, mes e ano
   dia = data.getDate();
   mes = data.getMonth() + 1;
   ano = data.getFullYear();
   
   //obtem as horas, minutos e segundos
   horas = data.getHours();
   minutos = data.getMinutes();
   segundos = data.getSeconds();
   
   //converte as horas, minutos e segundos para string
   str_horas = new String(horas);
   str_minutos = new String(minutos);
   str_segundos = new String(segundos);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_horas.length < 2)
      str_horas = 0 + str_horas;
   if (str_minutos.length < 2)
      str_minutos = 0 + str_minutos;
   if (str_segundos.length < 2)
      str_segundos = 0 + str_segundos;
   
   //converte o dia e o mes para string
   str_dia = new String(dia);
   str_mes = new String(mes);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_dia.length < 2) 
      str_dia = 0 + str_dia;
   if (str_mes.length < 2) 
      str_mes = 0 + str_mes;
   
   switch(str_mes){
       case '01':
           str_mes = "janeiro";
           break;
       case '02':
           str_mes = "fevereiro";
           break;
       case '03':
           str_mes = "março";
           break;
       case '04':
           str_mes = "abril";
           break;
       case '05':
           str_mes = "maio";
           break;
       case '06':
           str_mes = "junho";
           break;
       case '07':
           str_mes = "julho";
           break;
       case '08':
           str_mes = "agosto";
           break;
       case '09':
           str_mes = "setembro";
           break;
       case '010':
           str_mes = "outubro";
           break;
       case '011':
           str_mes = "novembro";
           break;
       case '012':
           str_mes = "dezembro";
           break;
   }
   //cria a string que sera exibida na div
   data = 'Paracatu, ' + str_dia + ' de ' + str_mes + ' de ' + ano + ' - ' + str_horas + ':' + str_minutos + ':' + str_segundos;
   
   //exibe a string na div
   document.getElementById(div).innerHTML = data;
   
   //executa a funcao com intervalo de 1 segundo
   setTimeout("exibeDataHora('hora')", 1000);
   
}

// FORMULÁRIO ENVIAR
function Enviar() {

    var nome = document.getElementById("nomeid");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }
}
