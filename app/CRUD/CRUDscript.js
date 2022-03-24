let id="no";
//localStorage.clear();
window.onload=function(){selectData();}

function manageData() {
    document.getElementById('msg').innerHTML="";
    let fname=document.getElementById('fname').value;
    let lname=document.getElementById('lname').value;
    let age=document.getElementById('age').value;
    let gender=document.getElementById('gender').value;
    
    if(fname=='' && age=='' && gender=='') {
        document.getElementById('msg').innerHTML="Please enter your First Name, Age and Gender.";
    }
    else if(fname=='') {
        document.getElementById('msg').innerHTML="Please enter your First Name.";
    }
    else if(fname!='' && age=='') {
        document.getElementById('msg').innerHTML="Please enter your Age.";
    }
    else if(fname!='' && (age<=1 || age>=100)){
        document.getElementById('msg').innerHTML="Please enter valid Age.";
    }
    else if(fname!='' && age!='' && gender=='') {
        document.getElementById('msg').innerHTML="Please enter your Gender.";
    }
    else {
        if(id=='no'){
            getData();
            arr.push({fname, lname, age, gender});
            localStorage.setItem("localData", JSON.stringify(arr));
            alert("Record Added Successfully");
        }
        else {
            getData();
            arr[id].fname=fname;
            arr[id].lname=lname;
            arr[id].age=age;
            arr[id].gender=gender;
            localStorage.setItem("localData", JSON.stringify(arr));
            alert("Record Updated Successfully");
        }
        

        document.getElementById('fname').value = 
        document.getElementById('lname').value =
        document.getElementById('age').value =
        document.getElementById('gender').value = '';
        selectData();
        
    }
}
var arr = new Array();
function getData() {
    var str=localStorage.getItem("localData");
    if(str!=null) {
        arr=JSON.parse(str);
    }
}

function selectData() {
    getData();
    var tbl=document.getElementById("root");
    tbl.innerHTML="";
    for(i=0;i<arr.length;i++) {
        var r=tbl.insertRow();
        var cell1=r.insertCell();
        var cell2=r.insertCell();
        var cell3=r.insertCell();
        var cell4=r.insertCell();
        var cell5=r.insertCell();
        var cell6=r.insertCell();
        cell1.innerHTML=i+1;
        cell2.innerHTML=arr[i].fname;
        cell3.innerHTML=arr[i].lname;
        cell4.innerHTML=arr[i].age;
        cell5.innerHTML=arr[i].gender;
        cell6.innerHTML=`<button id="edit" onclick='editData(this,`+i+`)'>Edit</button> <button id="delete" onclick='deleteData(`+i+`)'>Delete</button>`;
    }
}

function editData(td, index) {
    id=index;
    getData();
    selectRow = td.parentElement.parentElement;
    document.getElementById('fname').value = selectRow.cells[1].innerHTML;
    document.getElementById('lname').value = selectRow.cells[2].innerHTML;
    document.getElementById('age').value = selectRow.cells[3].innerHTML;
    document.getElementById('gender').value = selectRow.cells[4].innerHTML;
}

function deleteData(index) {
    getData();
    if(confirm('Are you sure you want to delete the record?')) {
        arr.splice(index, 1);
        localStorage.setItem("localData", JSON.stringify(arr));
    }
    selectData();
}