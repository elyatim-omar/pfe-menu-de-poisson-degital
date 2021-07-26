$(document).ready(function(){
var FormersList;
function getall(){
    $(".FormersList").html("");
    $.ajax({
        url:"api/getProduct.php",
        method:"GET",
        success:function(data){
            FormersList = JSON.parse(data);
            for (var i = 0; i < FormersList.length; i++){
               $(".FormersList").append(`<tr> 
               <td>${FormersList[i]["nom"]}</td>
               <td>${FormersList[i]["Lastname"]}</td>
            
               

             </button></td>
             <input type="hidden" class="idtd"></input>
               
               </tr>`)
            }
        }
    })
  }
  getall()

  // Add a Former to database
$(".submit").click(function() {
    var Fname = $(".Firstname").val();
    var Lname = $(".Lastname").val();
  
  
    $.ajax({
      url:"api/addProduct.php",
      method:"POST",
      data:{
        Firstname :Fname,
        Lastname :Lname,
       
      },
      success:function(data) {
      getall();
    }
  })
})

//update-btn-on-click
$("body").on("click",".FormersList .update-btn",function() {
    $(".edit-form").show();
    var index = $(this).parents("tr").index();
    $(".edit-form .Firstname").val(FormersList[index]["Firstname"]);
    $(".edit-form .Lastname").val(FormersList[index]["Lastname"]);
    $(".edit-form .Matricule").val(FormersList[index]["Matricule"]);
    $(".edit-form .Email").val(FormersList[index]["Email"]);
    $(".edit-form .sid").val(FormersList[index]["id"]);
  });
  
  // save-Former-database
  $(".save-former").click(function() {
    var Fname = $(".edit-form .Firstname").val();
    var Lname = $(".edit-form .Lastname").val();
    var Matricule = $(".edit-form .Matricule").val();
    var Email = $(".edit-form .Email").val();
    var Id = $(".edit-form .sid").val();
    console.log(Fname,Lname,Matricule,Email,Id)
  

    //send to php file via ajax
    $.ajax({
      url:"api/updateProduct.php",
      method:"POST",
      data:{
        id : Id,
        Firstname :Fname,
        Lastname :Lname,
        Matricule :Matricule,
        Email :Email
      },
          success:function(data) {
            console.log(data)
          getall();
        }
    })
  })

// Delete a Former to database
$("body").on("click",".btn-danger",function(){
    var index = $(this).parents("tr").index();
    $(".FormersList .idtd").val(FormersList[index]["id"]);
    console.log(FormersList)
    var FormerId = $(".FormersList .idtd").val();
    console.log(FormerId)

    $.ajax({
        url:"api/deleteProduct.php",
        method:"POST",
        data:{
            id :FormerId
        },
        success:function(data){
            $(this).parent().remove();
            getall();
        }
    })
})
$(".save-former").click(function(){
  $("#exampleModalCenter2").modal('hide');
});
$(".submit").click(function(){
  $("#exampleModalCenter").modal('hide');
});

})