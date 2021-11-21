<div class="form-group " data-toggle="collapse" data-target="#demo" >
  <label for="usr" class="lop">LEAVE A REPLY</label>
  <input type="text" class="form-control form-control-lg" id="usr0">
</div>

<div id="demo" class="collapse qt">
			Fill in your details below or click an icon to log in:
			<div class="form-group">
				 
				  <input   type="text" placeholder="Email(Reqiured)" class="form-control qt" id="usr1">
				</div>
				<div class="form-group">
				 
				  <input  type="text" placeholder="Name(required)"  class="form-control qt" id="usr2">
				</div>
				<div class="form-group">
				 
				  <input  type="text" placeholder="Website"  class="form-control qt" id="usr3">
				</div>
				<button type="button" id="but" class="btn btn-danger ko">POST COMMENT</button>
</div>
<script>
	$(document).ready(function(){
		$('#but').click(function(){
			var comment=$('#usr0').val();
			var email=$('#usr1').val();
			var name=$('#usr2').val();
			var website=$('#usr3').val();
			console.log(comment);
			console.log(email);
			console.log(name);
			console.log(website);
			
			var data={'T_comment':comment,'T_email':email,'T_name':name,'T_website':website}
			console.log(data);
			$.ajax({
					type:'POST',
					url:'',
					data:data,
					success:function(res){
						//console.log(res);
					}
			});
		});
		
	});
	
</script>