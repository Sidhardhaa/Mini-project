
function validate()
      {
         
         if( document.myForm.Area.value == "" )
         {
            alert( "Please provide your area in acres!/ దయచేసి మీ ప్రాంతం అందించండి " );
            
            return false;
         }
		 
		  if( document.myForm.state.value == "దయచేసి రాష్ట్రాన్ని ఎంచుకోండి" || document.myForm.state.value == "Select state")
         {
            alert( "Please provide your state!/ దయచేసి రాష్ట్రాన్ని ఎంచుకోండి" );
            return false;
         }
		 if( document.myForm.season.value == "సీజన్ ఎంచుకోండి" || document.myForm.season.value == "Select season")
         {
            alert( "Please provide your season!/ దయచేసి సీజన్ ఎంచుకోండి" );
            return false;
         }
		 if( document.myForm.crop.value == "దయచేసి మీ పంట ఎంచుకోండి" || document.myForm.crop.value == "select your crop")
         {
            alert( "Please provide your crop!/ దయచేసి మీ పంట ఎంచుకోండి" );
            return false;
         }
         return( true );
	 }
function selecting()
{
var x=document.getElementById("language").value;

if(x=="telugu")
telugu();
if(x=="english")
english();

function telugu()
{
//alert("hello");	
var x = document.getElementById("season");
var y= document.getElementById("state");
var z=document.getElementById("crop");
var a=document.getElementById("tcrop");
var b=document.getElementById("soil");
var options = ["సీజన్ ఎంచుకోండి","ఖరీఫ్", "రబీ","'జాద్"];
var options1=["దయచేసి రాష్ట్రాన్ని ఎంచుకోండి "," అండమాన్ నికోబార్ దీవులు","ఆంధ్ర ప్రదేశ్","అరుణాచల్ ప్రదేశ్","అస్సాం","బీహార్","చండీగఢ్","ఛత్తీస్గఢ్","దాద్రా మరియు నగర్ హవేలి","డామన్ మరియు డయ్యు","ఢిల్లీ","గోవా","గుజరాత్","హర్యానా","హిమాచల్ ప్రదేశ్","జమ్మూ కాశ్మీర్","జార్ఖండ్","కర్ణాటక","కేరళ","లక్షద్వీప్","మధ్యప్రదేశ్","మహారాష్ట్ర","మణిపూర్","మేఘాలయ","మిజోరం","నాగాలాండ్","ఒరిస్సా","పాన్డిచర్రీ","పంజాబ్","రాజస్థాన్","సిక్కిం","తమిళనాడు","తెలంగాణ","త్రిపుర","ఉత్తరాంచల్","ఉత్తర ప్రదేశ్","పశ్చిమ బెంగాల్"];
var options2=["దయచేసి మీ పంట ఎంచుకోండి" , "వరి ఫైన్" , "గోధుమ" , "జొన్నలు (హైబ్రిడ్)" , "జొన్నలు (మల్దంది)" , "సజ్జ" , "రాగి", "మొక్కజొన్న" , " బార్లీ" , "గ్రామ" , "మసుర" , "ఆర్హర్" , "మూంగ్" ,"మినపప్పు" , "చెరుకుగడ" ," కాటన్F-414 / H-777" , "కాటన్ హెచ్ 4 750" , "వేరుశనగ" ,"  జ్యూట్ (TD-5)" , "రాప్ విత్తన / ఆవాల" , "సన్ఫ్లవర్" , "సోయాబీన్ (బ్లాక్)" , "సోయాబీన్ (పసుపు)" , "కుసుంభ" , " టొరీ", "కొబ్బరి కురిడీ (మిల్లింగ్)" , "కొబ్బరి కురిడీ బంతుల్లో","అవి నువ్వులు"," నైజీర్ సీడ్"];
var sid=[" పంట","వాణిజ్య పంట","ఆహార పంట"];
var pap=["మట్టి","ఎరుపు నేల","నల్ల మట్టి","పొడి నేల"];
//y=x.length;*/

i=0;
while(x.length>0)
{
x.remove(i);
}
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	x.add(el);
}
j=0;
while(y.length>0)
{
y.remove(j);
}
for(var j = 0; j < options1.length; j++) {
    var opt = options1[j];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	y.add(el);
}
k=0;
while(z.length>0)
{
z.remove(k);
}
for(var k = 0; k < options2.length; k++) {
	
    var opt = options2[k];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	z.add(el);
}

u=0;
while(a.length>0)
{
a.remove(u);
}
for(var u=0;u<sid.length;u++) {
	//alert("hello");
    var opt = sid[u];
    var el=document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	a.add(el);
}
v=0;
while(b.length>0)
{
b.remove(v);
}
for(var v = 0; v < pap.length; v++) {
	//alert("hello");
    var opt = pap[v];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	b.add(el);
}

}




function english()
{
var x = document.getElementById("season"); 
var y= document.getElementById("state");
var z=document.getElementById("crop");
var a=document.getElementById("tcrop");
var b=document.getElementById("soil");

var options = ["Select season","Kharif", "Rabi","Zaid"];
var options1=["Select state","Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Pondicherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttaranchal","Uttar Pradesh","West Bengal"];
var options2=["select your crop","Paddy (Fine)","Wheat ","Jowar (Hybrid)","Jowar (Maldandi)","Bajra","Ragi","Maize","Barley ","Gram","Masur","Arhar","Moong","Urad ","Sugarcane","Cotton F-414/H-777","Cotton H-4 750","Groundnut","Jute(TD-5) ","Rapeseed/ mustard","Sunflower","Soyabean (Black)","Soyabean (Yellow)","Safflower","Toria ","Copra (milling)","Copra balls","Sesamum ","Niger seed "];
var options3=["Select type","Commercila crop","Food crop"];
var options5=["Kind of soil","Red soil","Black soil","Dry soil"];
//y=x.length;

i=0;
while(x.length>0)
{
x.remove(i);
}
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	x.add(el);
}
j=0;
while(y.length>0)
{
y.remove(j);
}
for(var j = 0; j < options1.length; j++) {
    var opt = options1[j];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	y.add(el);
}
k=0;
while(z.length>0)
{
z.remove(k);
}
for(var k = 0; k < options2.length; k++) {
    var opt = options2[k];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	z.add(el);
}
u=0;
while(a.length>0)
{
a.remove(u);
}
for(var u = 0; u < options3.length; u++) {
    var opt = options3[u];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	a.add(el);
}
v=0;
while(b.length>0)
{
b.remove(v);
}
for(var v = 0; v < options5.length; v++) {
    var opt = options5[v];
    var el = document.createElement("option");
   // el.textContent = opt;
    //el.value = opt;
    //x.appendChild(el);
	el.text=opt;
	b.add(el);
}
}

}