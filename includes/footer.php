		
	
	<!-- Main Jquery -->
	<script src="js/main.js"></script>
<script>
$(".logout").click(function(){
  $(".dropdown-menu").toggleClass("show");
});
	$.validator.addMethod("laxEmail", function(value, element) {
		if(value)
		{	
			if(value.indexOf("@")>0){
				var res = value.split("@");
				if(res[1].indexOf(".")>0){
					var res1=res[1].split(".");
					if(res1.length<=2){
						if(res1[1].length==3)	
						{	
							return this.optional( element ) ||  /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/.test( value );
						}
						else
						{
							return false;
						}							
					}
					else if(res1.length==3){
						if(res1[1].length==2 && res1[2].length==2)
						{	
							return this.optional( element ) ||  /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test( value );
						}	
						else
						{
							return false;
						}
					}
					else{
						return false;
					}
					}else{
					return false;
				}
				}else{
				return false;
			}
		}
		else
		{
			return true;
		}				
	}, 'Please enter a valid email address.');
</script>
</body>
</html>