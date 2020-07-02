function sendRequest(url,method,data){
    $.ajax({
        url :url,
        method:method,
        data:data,
        success:function(response){
            
            var result =  JSON.parse(response);
           console.log(result);
            if(result.status == "Success"){
                alert('Saved data successfully')
                location.reload();
            }
        }
        })



}

$("#submit").click(function(){
var id = $("#id").val();
var name = $("#name").val();

var obj = {
    "name":name,
};
if(id!=""){
    obj.id = id
}


sendRequest('MasterUser/mergeRole.php','POST',obj);
})

$("#addRole").click(function(){
$("#myModal").modal('show');


})
$("a[data-role=editRole]").click(function(){

var id = $(this).attr("data-id");

$.ajax({
    url :"MasterUser/getRole.php?id="+id,
    method:'GET',
    success:function(response){
        var data = JSON.parse(response);
       console.log('data',data);
        $("#id").val(data.Id);
        $("#name").val(data.Name);
       
        $("#myModal").modal('toggle');
    }
    })



})

$("a[data-role=deleteRole]").click(function(){

if(confirm("are you sure to delete this account?")){
    var id = $(this).attr("data-id");

    $.ajax({
        url :"MasterUser/deleteRole.php?id="+id,
        method:'GET',
        success:function(response){
            var result =  JSON.parse(response);
            if(result.status == "Success"){
                alert('Delete data successfully')
                location.reload();
            }
        }
        })
    
}



})