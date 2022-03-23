
$('.btn').click(function(e){
	e.preventDefault();
	


	const email = $.trim( $('#email').val() );
	const password  =  $.trim( $('#password').val()  );

	


	if(  email === "" ||password === ""){
		const  errorDiv = document.createElement('div');
		errorDiv.className = 'notification errorDiv  has-background-warning has-text-semibold is-small mt-5';
		errorDiv.innerHTML = "please input something"

		const colums = document.querySelector('.for');
		const shift =  document.querySelector('.span');

		colums.insertBefore(errorDiv, shift)

	}else{


		$.ajax({


			url:"http://localhost/blog.com/Database/store/login.php",
			
			method:'POST',
			global: false,

			data:{
				email:email,
				password:password
			},
			async:true,
		

			beforeSend:function(){
				$('.spinner').html("<img src='../image/fade.gif'/> Please wait");
				$('.spinner').delay(10000).fadeOut(2000);
			},
			success:function(data){
				$('.final').hide().delay(12000).fadeIn('slow')
				$('.final').html(data)
				const body = $('body')
				console.log(data)
				setTimeout(function(){

           				location.reload(data);
           				// window.location.replace("http://localhost/blog.com/userpage/login/loginuser.php");
      			}, 16000); 
			},
		
	
			datatype:'string',
			
	


		})
		
	}

})








$('.ext').click(function(){
	$.ajax({
		url:"https://od-api-demo.oxforddictionaries.com:443/api/v1/domains/{source_domains_language}/{target_domains_language}",
		method:'GET',
		success:function(data){
			console.log(data)
		},
		dataType:'string'
	})
})