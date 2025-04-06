
var arr=[
  {name:"petals of roses", image:"https://plus.unsplash.com/premium_photo-1673427872188-caccc9a3d4f5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"},
  {name:"Animals of town", image:"https://images.unsplash.com/photo-1589656966895-2f33e7653819?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"},
  {name:"The crowd of city", image:"https://images.unsplash.com/photo-1484353371297-d8cfd2895020?q=80&w=879&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"},
  {name:"fruit of planet", image:"https://images.unsplash.com/photo-1619566636858-adf3ef46400b?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"},
  {name:"orange peeled", image:"https://plus.unsplash.com/premium_photo-1693266286749-420cfcea5f96?q=80&w=388&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"},
  {name:"web design", image:"https://images.unsplash.com/photo-1559028012-481c04fa702d?q=80&w=1036&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"}
]




function showTheCards(){
  var clutter = "";
  arr.forEach(function(obj){
      clutter += `<div class="box">
      <img class="cursor-pointer" src="${obj.image}" alt="image">
      <div class="caption">Lorem ipsum </div>
  </div>`;
  })

  document.querySelector(".container")
  .innerHTML = clutter;
}

function handleSearchFunctionality(){
  var input = document.querySelector("#searchinput");
  

  input
  .addEventListener("focus", function(){
      document.querySelector(".overlay").style.display = "block";
  })

  input
  .addEventListener("blur", function(){
      document.querySelector(".overlay").style.display = "none";
  })

  input
  .addEventListener("input", function(){
      const filteredArray = arr.filter(obj => obj.name.toLowerCase().startsWith(input.value));
      var clutter = "";
      filteredArray.forEach(function(obj){
          clutter += `<div class="res flex px-8 py-3">
          <i class="ri-search-line font-semibold mr-5"></i>
          <h3 class="font-semibold">${obj.name}</h3>
      </div>`
      })
  document.querySelector(".searchdata").style.display = "block";
      document.querySelector(".searchdata").innerHTML = clutter;
  })
}

handleSearchFunctionality();
showTheCards();