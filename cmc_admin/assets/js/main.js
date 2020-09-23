const chartOptions = {
    maintainAspectRatio: false,
    legend: {
        display: false,
    },
    tooltips: {
        enabled: false,
    },
    elements: {
        point: {
            radius: 0
        },
    },
    scales: {
        xAxes: [{
            gridLines: false,
            scaleLabel: false,
            ticks: {
                display: false
            }
        }],
        yAxes: [{
            gridLines: false,
            scaleLabel: false,
            ticks: {
                display: false,
                suggestedMin: 0,
                suggestedMax: 10
            }
        }]
    }
};


var strings = [];
strings.push(
  ""
);

var htmlContent='';
var textAreaContent='';
$(document).ready(function(){
	strings.forEach(element => htmlContent += "<li>"+element+"</li>");
	$("#display").html(htmlContent);
	var i=1;
	strings.forEach(function(element){ 
  	if(strings.length==i)
  		textAreaContent += "•"+ element;
    else
    	textAreaContent += "•"+ element+"\n";
    i++;
  });
  $("#banner-message").val(textAreaContent);  
})

$("#display").click(function(){
	$(this).css("display","none");
  $("#banner-message").css("display","");
  var currentText= $("#banner-message").val();
  $("#banner-message").val(currentText);
	$("#banner-message").focus();
});

$("#banner-message").blur(function(){
 var currentText=$("#banner-message").val();
 var plainText=currentText.replace(/•/g, "")
 var splitText=plainText.split("\n");
 console.log(splitText);
 	htmlContent='';
	splitText.forEach(element => htmlContent += "<li>"+element+"</li>");
	$("#display").html(htmlContent);
  
	$(this).css("display","none");
  $("#display").css("display","");
})

$("#banner-message").keyup(function(e) {
   var code = e.keyCode ? e.keyCode : e.which;
   if (code == 13) {  
   			var text=$(this).val();
        text+="•";
        $(this).val(text);
     }
   });