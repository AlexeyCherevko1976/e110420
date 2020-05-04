function application(){
	this.currentUser=0; // Чисто для примера
	var curapp=this;
}

application.prototype.displaySignup=function(){
	//$("#msg").html("displayMsg() Workes!");
    $.ajax({
        type: "POST",
        //dataType:"json",
        url: "view/page2Signup.php",
        data: {}
    }).done(function( result )
        {
            $("#signup").html(result);
        });
}
application.prototype.displayData1=function(){
	
}
app=new application();
//alert("sldlslslsl");