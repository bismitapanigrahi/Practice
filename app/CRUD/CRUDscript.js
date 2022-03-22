let id="";
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
    else if(fname!='' && age!='' && gender=='') {
        document.getElementById('msg').innerHTML="Please enter your Gender.";
    }
    else {
        getData();
        arr.push({fname, lname, age, gender});
        localStorage.setItem("localData", JSON.stringify(arr));
        /*if(id=='') {
            let arr=getData();
            if(arr==null) {
                let data=[fname, lname, age, gender];
                localStorage.setItem('crud', JSON.stringify(data));
            } else {
                arr.push(fname, lname, age, gender);
                localStorage.setItem('crud', JSON.stringify(arr));
            }
            
            
        } else {

        }*/
        document.getElementById('fname').value = 
        document.getElementById('lname').value =
        document.getElementById('age').value =
        document.getElementById('gender').value = '';
        alert("Records added successfully");
        window.location.reload();
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
    for(i=0;i<arr.length;i++) {
        var r=tbl.insertRow();
        var cell1=r.insertCell();
        var cell2=r.insertCell();
        var cell3=r.insertCell();
        var cell4=r.insertCell();
        var cell5=r.insertCell();
        cell1.innerHTML=i+1;
        cell2.innerHTML=arr[i].fname+" "+arr[i].lname;
        cell3.innerHTML=arr[i].age;
        cell4.innerHTML=arr[i].gender;
        cell5.innerHTML="<button>Edit</button><button><a href='javascript:void(0)' onclick='deleteData(i)'>Delete</a></button>";
    }
    /*let arr=getData();
    if(arr!=null) {
        let html='';
        let sno=1;
        for(let k in arr) {
            html=html+`<tr><td>${sno}</td><td>${arr[k]}</td></tr>`;
            sno++;
        }
        document.getElementById('root').innerHTML=html;
    }*/
}

function editData() {

}

function deleteData(rid) {
    getData();
    /*arr.splice(rid, 1);
    localStorage.setItem("localData", JSON.stringify(arr));
    selectData();*/
}
/*
function getData() {
    let arr=JSON.parse(localStorage.getItem('crud'));
    return arr;
}*/