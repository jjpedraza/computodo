body {
font-family: sans-serif; font-size: 100%;
margin: 0px;
padding: 0px;
text-align: center;
background-image: url("company/wallpaper.jpg");
background-repeat: none;
background-size: cover;
}
table {
border-collapse: separate;
border-spacing:  0px;
}
#web {
width: 80%;
background-color: transparent;
margin: auto;
}
#top_content {
width: 100%; height: 80px; background-color: ;
text-align: left; display:inline-block;
vertical-align: top;}
#top_content table {background-color:white;}
#logo
{ background-color:#003366; height:80px;
}
#logo img {width:90%; }
#top_content td {vertical-align: middle;}
#top_content a
{
background-color: transparent;
display: block;
height: 30px;
color: white;
}
#top_content a img {width:32px;}
.unselect
{
background-color:#7D7D7D;
border-width:0px;
text-align: center;
}
.unselect:hover
{
background-color:#8D8D8D;
-webkit-transition:all 1s ease;
-moz-transition:all 1s ease;
-o-transition:all 1s ease;
transition:all 1s ease;
}
.select
{
background-color:#FF6600;
border-width:0px;
text-align: center;
}
#pc{display: inline-block; }
#movil{display: none;}
h1 {
font-size: 18px; padding-bottom:15px; padding-top: 8px;
padding-left: 20px; padding-right: 20px;
margin-left: -18px;
color: black;
width: 95%;
text-align: center;
}
#cotizar
{
width: 150px;
background-color: #E6FFCC;
padding: 10px;
padding-top:-20px;
}
#cotizar div {width: 100%; padding-bottom: 4px;}
#cotizar label {font-size: 12px; color: black;}
#cotizar input[type="text"], #cotizar input[type="mail"], #cotizar select
{
width: 100%;
height: 20px;
text-transform: uppercase;
border-color: #D2F7A3; border-width: 1px; border-style: solid;
background-color: #A9E96B;
color:#5C9914; font-weight: bold;
padding: 2px;
}
#cotizar textarea
{
width: 100%;
height: 100px;
}
#cotizar input[type="submit"]
{
border-color: #5DCE30; border-width: 1px; border-style: solid;
background-color: #0BA212;
color: white; font-weight: bold;
padding: 10px;
}
#cotizar input[type="submit"]:hover{background-color: #5DCE30;}
#cotizar img {width: 100%;}
#cotizar_movil
{
width: 100%;
text-align: center;
background-color: #E6FFCC;
padding: 0px;
padding-top:0px;
}
#cotizar_movil div {width: 100%; padding-bottom: 4px;}
#cotizar_movil label {font-size: 12px; color: black;}
#cotizar_movil input[type="text"], #cotizar_movil input[type="mail"], #cotizar_movil select
{
width: 90%;
height: 30px;
text-transform: uppercase;
border-color: #D2F7A3; border-width: 1px; border-style: solid;
background-color: #A9E96B;
color:#5C9914; font-weight: bold;
padding: 4px;
font-size: 18px;
}
#cotizar_movil textarea
{
width: 90%;
height: 100px;
}
#cotizar_movil input[type="submit"]
{
border-color: #5DCE30; border-width: 1px; border-style: solid;
background-color: #0BA212;
color: white; font-weight: bold;
font-size: 20px;
padding: 10px;
}
#cotizar_movil input[type="submit"]:hover{background-color: #5DCE30;}
#cotizar_movil img {width: 100%}
#slider {width: 100%; background-color: white; }
#slider img {width: 100%;}
#centro {
background-color: white;
font-weight: bold;
font-size: 14px;
}
#centro img {
width: 15%;
margin-left: 10px;
vertical-align: middle;
margin-top: 4px;
}
#footer
{ background-color:#003366;
vertical-align: top;
}
#footer p {color: white; display: inline-block; font-size: 14px;}
#footer iframe { width: 97%; height: 150px; display: inline-block;
margin-top: 3px;
}
#footer_movil
{ background-color:#003366;
vertical-align: top;
}
#footer_movil p {color: white; display: inline-block; font-size: 14px;
padding: 4px;}
#footer_movil iframe { width: 97%; height: 250px; display: inline-block;
margin-top: 3px;
}
#productos {}
#productos article { width: 120px; display: inline-block; font-size: 12px;
padding: 8px;
margin-top: 10px;}
#productos img {width: 100%;}
#servicios {}
#servicios article { width: 200px; display: inline-block; font-size: 12px;
padding: 8px;
margin-top: 10px;}
#servicios img {width: 100%;}
td {vertical-align: top;}
@media only screen and (max-width: 800px) {
#web {width: 100%;}
}
@media only screen and (max-width: 500px) {
#web {width: 100%; }
#pc{display: none;}
#cotizar{display: none;}
#movil{display: inline-block;}
#table_logo {width:80px;}	/*debe igualar al width del logo*/
#logo
{ background-color:#003366; height:80px;
}
#logo img {width:50%; }#table_search {width: auto;}
}