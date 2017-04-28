function validateForm()
{
 
 var x=document.forms["form1"]["firstname"];
 if (x.value=="")
   {
  alert("Please enter the First name.");
  x.focus();
  return false;
   }
 
 else if(x.value.length>20)
   {
   alert("First name cannot be greater than 20 characters.");
  x.value="";
  x.focus();
  return false;
   }
 else if ((!namepattern.test(x.value)))
   {
  alert("First name should contain only alphabets.");
  x.value="";
  x.focus();
  return false;
   }

 x=document.forms["form1"]["lastname"];
 if(x.value=="")
   {
  alert("Please enter the Last name.");
  x.focus();
  return false;
 } 
  else if(x.value.length>20)
   {
  alert("Last name cannot be greater than 20 characters.");
  x.value="";
  x.focus();
  return false;
 }
 else if (!namepattern.test(x.value))
   {
    alert("Last name should contain only alphabets.");
  x.value="";
  x.focus();
  return false;
 }

 if((document.form1.gender[0].checked==false)&&(document.form1.gender[1].checked==false))
 {
  document.form1.gender[0].focus();
  alert("Please select a gender.");
  return false;
 }
 var dd=document.form1.dd.value;
 var mmm=document.form1.mmm.value;
 var yyyy=document.form1.yyyy.value;
 if(!validdate(dd,mmm,yyyy))
 {
  return false;
 }
  
 x= document.getElementById("address");
 if(x.value==null || x.value=="" )
 {
  alert("Please enter the Address.");
  x.value="";
  x.focus();
  return false;
 }
 else if(x.value.length<20)
   {
  alert("Address should be greater than 20 characters.");
  x.value="";
  x.focus();
  return false;
 }

 x=document.form1.contctno;
 if(x.value=="")
 {
  alert("Please enter the Contact number.");
  x.value="";
  x.focus();
  return false;
 }
 else if(isNaN(x.value))
 {
  alert("Contact number should contain only digits.");
  x.value="";
  x.focus();
  return false;
 }
 else if(x.value.length!=10)
 {
  alert("Contact number should contain only 10 digits.(Mobile number)");
  x.value="";
  x.focus();
  return false;
 }
 else if(!phonepattern.test(x.value))
 {
  alert("Invalid Contact number.");
  x.value="";
  x.focus();
  return false;
 }

 x=document.form1.email;
 if(!emailpattern.test(x.value))
 {
  alert("Invalid email id.");
  x.value="";
  x.focus();
  return false;
 }

 if(confirm("Do you want to submit the form?"))
{
alert("Registration Form Submitted Successfully.");
}
else
return false;

}
function validdate(dd,mm,yyyy)
 {
  var dateobj = new Date(yyyy, mm, dd);
  var datecurrent= new Date();
  if((dateobj.getMonth()!=mm)||(dateobj.getDate()!=dd)||(dateobj.getFullYear()!=yyyy)||(dateobj>datecurrent))
  {
   alert("Please select a valid date.");
   return false;
  }
  return true;
 }
 
 function confirmreset()
 {
  return confirm("Do you want to reset the form?");
 }
