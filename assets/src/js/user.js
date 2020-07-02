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
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    
    var obj = {
        "username":username,
        "email" :email,
        "password":password
    };
    if(id!=""){
        obj.id = id
    }
    
    
    sendRequest('MasterUser/mergeUser.php','POST',obj);
})

$("#add").click(function(){
    $("#myModal").modal('show');
  
    
})
$("a[data-role=edit]").click(function(){
  
    var id = $(this).attr("data-id");
    
    $.ajax({
        url :"MasterUser/getUser.php?id="+id,
        method:'GET',
        success:function(response){
            var data = JSON.parse(response);
           console.log('data',data);
            $("#id").val(data.Id);
            $("#username").val(data.Username);
            $("#password").val(data.Password);
            $("#email").val(data.Email);

            $("#myModal").modal('toggle');
        }
        })
    
    

})

$("a[data-role=delete]").click(function(){
  
    if(confirm("are you sure to delete this account?")){
        var id = $(this).attr("data-id");
    
        $.ajax({
            url :"MasterUser/deleteUser.php?id="+id,
            method:'GET',
            success:function(response){
                var result =  JSON.parse(response);
                if(result.status == "Success"){
                    alert('Saved data successfully')
                    location.reload();
                }
            }
            })
        
    }
    
    

})