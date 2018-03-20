<html>
</head>
  <link rel="stylesheet" href="style.css">
</head>
<body onload="startup()">
<div id="div1">
</div>
<div id="div2">
</div>
<div id="div3">
<img src="a.png" height="100%" width="100%">
</div>
<div id="div4">
<h3>

महत्वपूर्ण जानकारी
<p>
-नए वोटर कार्ड बनाने वाले लोग या वोटर कार्ड में जानकारी संपादित करना चाहते हैं,
 एक अभियान उनके लिए सरकार स्कूल कोटा में 26/08/2017 को संगठित किया जाएगा।
</p>
<p>
-वित्तीय सहायता प्राप्त करने वाले सभी किसानों को पंचायत में पंजीकरण कराएं।
 या किसानों ने भी अमर किसान एपीपी में पंजीकरण करा सकता है</p>
<p>
-MR.RAM उसके खेत में काम करने में कुछ लोगों को मदद करता है।
 संपर्क करें-8695864465
</p>
<p>
-25/08/2017 से NEREGA योजना गांव में सड़क निर्माण के लिए शुरू होगा। </p>
</h3>
</div>
<script>
function startup(){
divone();
divtwo();
}
var x=1, y=4;
function divone(){
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div1").innerHTML = this.responseText;
            }
        };
if(x==5)
{
x=1;
}
        xmlhttp.open("GET", "doc1.php?q="+x, false);
        xmlhttp.send();
        if(x<=y)
        {
         x++;
         setTimeout(divone,4000);
        }
}
var x2=1, y2=3;
function divtwo(){
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div2").innerHTML = this.responseText;
            }
        };
if(x2==4)
{
x2=1;
}
        xmlhttp.open("GET", "doc2.php?q="+x2,false);
        xmlhttp.send();
        if(x2<=y2)
        {
         x2++;
         setTimeout(divtwo,6000);
        }
}  
</script>
</body>
</html>