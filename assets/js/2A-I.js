document.writeln("<h1>Javascript BuiltIn Objects</h1>")
document.writeln("<h3>Variables Declarations</h3>")
document.writeln("<br>")
var firstName = 'Samdharsi';
document.writeln("<br>")
document.writeln(firstName);

var lastName = 'Kumar';
document.writeln("<br>")
document.writeln(lastName);

var age1 = 20;
document.writeln("<br>")
document.writeln(age1);

var fullAge = true;
document.writeln("<br>")
document.writeln(fullAge);

document.writeln("<br><h3>Mathematical Operations with variables</h3>")
var now = 2018;
var age = prompt('Enter your age');
var birthYear = now - age;
// 2018 - 20 = 1998

document.writeln('<br>Your Birth year is '+ birthYear);

var ageShridhar = 28;
var ageSuresh = 28;

ageShridhar = ageSuresh = (3 + 5) * 4 - 4;
// ageShridhar = ageSuresh= 28;

ageShridhar++;
ageSuresh *= 2;

document.writeln("<br>"+ageShridhar);
document.writeln("<br>"+ageSuresh);

document.writeln("<br>if, if else with variables ")
document.writeln("<br>")
var country = prompt("Enter Country Name");
var weather;
var food;
var currency;

if(country === 'India')
{
  weather = 'Moderate';
  food = 'filling';
  currency = 'Rupee';
}

if(country === 'France')
{
  weather = 'nice';
  food = 'stunning, but hardly ever vegetarian';
  currency = 'funny, small and colourful';
}

if(country === 'Germany')
{
  weather = 'average';
  food = 'wurst thing ever';
  currency = 'funny, small and colourful';
}
document.writeln("<br>")
document.writeln(country +' has '+weather+' Weather food is ' + food + ' and the currency is ' + currency);

document.writeln("<br>")
document.writeln("<br><h3>Switch Case with variables </h3>")

var weekday = prompt('Which weekday do you want?');

switch (weekday) {
  case '1':
  document.writeln('weekday is a Monday..!');
  break;
  case '2':
  document.writeln('weekday is a Tuesday..!');
  break;
  case '3':
  document.writeln('weekday is a Wednesday..!');
  break;
  case '4':
  document.writeln('weekday is a Thursday..!');
  break;
  case '5':
  document.writeln('weekday is a Friday..!');
  break;
  case '6':
  document.writeln('weekday is a Saturday..!');
  break;
  case '7':
  document.writeln('weekday is a Sunday..!');
  break;
  default:
  document.writeln('Enter Proper Weekday..!');
  break;
}

document.writeln('<h3><br>Javascript Array and Iteration Demo</h3>');

var Array1 = ['Shridhar', 'Kamble', 1990, 'Teacher', false];

document.writeln("<br>"+Array1);

Array1.push('Mumbai'); // Add element at the end of array
document.writeln("<br>"+Array1);
Array1.unshift('Mr.'); // Add element at the beginning of the array
document.writeln("<br>"+Array1);
Array1.pop(); // Delete last element of the array
document.writeln("<br>"+Array1);
Array1.shift(); // Delete first element of the array
document.writeln("<br>"+Array1);
document.writeln("<br>"+Array1.indexOf('Kamble'));


document.writeln("<br><h3>Display Array Elements</h3>")
var names = [
  'Shridhar',
  'Suresh',
  'Ramesh',
  'Kiran',
  'Sudhir'
];

document.writeln('Display Array')

for (var i = 0; i<names.length; i++)
{
  document.writeln("<br>"+names[i]);
}

document.writeln("<br><h3>Table of Input Number Using ul tag</h3>")

var num=prompt('Enter the Input Number')
document.writeln("<ul>")
for(i = 1; i <= 10; i++)
document.writeln("<li>"+ num + " X " + i + " = " + num*i)
document.writeln("</ul>")

document.writeln("<br><h3>Break Demo</h3>")
for (i = 0; i <= 5; i++)
{
  document.writeln("<br>"+i);
  if (i === 3)
  {
    break;
  }
}

document.writeln("<br><h3>continue Demo</h3>")
for (i = 0; i <= 5; i++)
{
  if (i === 3)
  {
    continue;
  }

  document.writeln("<br>"+i);
}

document.writeln("<br>");
document.writeln("<br>Date Demo in Javascript");
document.writeln("<br>");

var x= new Date();
document.write('Todays Date is:' +''+x);
window.alert('Todays Date is:' +''+x);
var a=x.getDate();
var b=x.getTime();
var c=x.getTimezoneOffset();
var d=x.getDay();
var e=x.getMonth();
var f=x.getYear();
var g=x.getSeconds();
var h=x.getMinutes();
var i1=x.getHours();
document.writeln("<br>Date:"+a);
document.writeln("<br>Time:"+b);
document.writeln("<br>Time Zone:"+c);
document.writeln("<br>Day:"+d);
document.writeln("<br>Month:"+e);
document.writeln("<br>Year:"+f);
document.writeln("<br>Seconds:"+g);
document.writeln("<br>Minutes:"+h);
document.writeln("<br>Hours:"+i1);
