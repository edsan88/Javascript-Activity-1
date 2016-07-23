var students = { "MIT" : [
{ "name" : "Reymar", "gender" : "Male" ,"id" : "1"},
{ "name" : "Cindy", "gender" : "Female" ,"id" : "2"},
{ "name" : "Kevin", "gender" : "Male" ,"id" : "3"},
{ "name" : "Dan", "gender" : "Male" ,"id" : "4"},
{ "name" : "Ed", "gender" : "Male" ,"id" : "5"},
{ "name" : "Glester", "gender" : "Male" ,"id" : "6"},
{ "name" : "Jeffrey", "gender" : "Male" ,"id" : "7"}
]
} 

var htmlStudents = "<thead><tr><td>Name</td><td>Gender</td><td>Action</td></tr></thead>";
htmlStudents+="<tbody>";
for(i=0;i<students.MIT.length;i++)
{
//htmlStudents+="<td>";
htmlStudents+="<tr>";
htmlStudents+="<td>"+ students.MIT[i].name+"</td><td>"+ students.MIT[i].gender +"</td>";
htmlStudents+="<td><button id= '"+ students.MIT[i].id +"' type=button class=btn btn-default data-toggle=modal data-target=#myModal>Default</button></td>";
htmlStudents+="</tr>"
//htmlStudents+="<tr><td><b>Price</b></td><td width=50>"+ students.MIT[i].gender +"</td></tr>";
//htmlStudents+="</table>";
//htmlStudents+="</td>";
}
htmlStudents += "</tbody>";

var _table2 = document.getElementById('myTable2');
_table2.innerHTML = htmlStudents;

