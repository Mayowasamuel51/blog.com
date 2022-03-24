$('.transfer-btn').click(function(e){
	e.preventDefault()

	const email = $.trim( $('.email').val() )
	const note = $.trim(  $('.note').val()  )

	// console.log(email)
	// console.log(note)
	if (email === '' || note === '') {
		const  errorDiv = document.createElement('div');
			errorDiv.className = 'notification errorDiv  has-background-warning has-text-semibold is-small mt-5';
			errorDiv.innerHTML = "please input something"
			const colums = document.querySelector('.con');
			const shift =  document.querySelector('.shower');
			colums.insertBefore(errorDiv, shift)
	}else{

		$.ajax({
			url:'http://localhost/blog.com/Database/message/messagesend.php',
			method:'POST',
			global:false,
		
			
			data:{
				email:email,
				note:note
			},
			async:true,

			beforeSend:function(){
				$('.spining').html("<img src='Ventilation.gif'/> <h2> Sending Message  </h2>");
				$('.spining').delay(10000).fadeOut(2000);
			},
			success:function(data){
				$('.s').hide().delay(12000).fadeIn('slow')
				$('.s').html(data)
				console.log(data)
				setTimeout(function(){

           				location.reload(data);
           				// window.location.replace("http://localhost/blog.com/userpage/login/loginuser.php");
      			}, 16000); 
				
			},
			datatype:'string'

			
		})
	}

});


