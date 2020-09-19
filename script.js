console.log("welcome to the control kitty");
// var i=3;
// let addBtn = document.getElementById('addBtn');
// addBtn.addEventListener("click", (e)=> {
//     e.preventDefault();
//     console.log("You clicked the add new person");
//     let addNew = document.getElementById("New").innerHTML=`<div class="form-group"><label for="exampleFormControlInput1">Person ${i}</label>
//     <input type="text" class="form-control" id="exampleFormControlInput1" name="Person${i}" placeholder="Jill" required></div>`;
    
//     i++;
// });


let addBtn = document.getElementById('addBtn');
var i=3;
addBtn.addEventListener("click", (e)=> {
    e.preventDefault();
    console.log("You clicked the add new person");
    // let addNew = document.getElementById("addNew");
    var tag = document.createElement("div");
   tag.innerHTML=`<div class="form-group">
   <label for="exampleFormControlInput1">Person ${i}</label>
   <input type="text" class="form-control" name="Person${i}" id="exampleFormControlInput1" placeholder="Jill">
    </div>`;
    
    var element = document.getElementById("New");
    element.appendChild(tag);
    i++;
});