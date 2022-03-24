

$('#uploadstory').click(function(e){
	e.preventDefault()

	
	const time = $.trim($('#times').val())
	const date = $.trim($('#dates').val())
	const storycontent  = $.trim($('#storycontent').val())
	const storytitle = $.trim($('#storytitles').val())

	if ( time ===null ||  date === null || storycontent === ''|| storytitle === '' ) {
			const  errorDiv = document.createElement('div');
			errorDiv.className = 'notification errorDiv  has-background-warning has-text-semibold is-small mt-5';
			errorDiv.innerHTML = "please input something"
			const colums = document.querySelector('.fors');
			const shift =  document.querySelector('.spans');
			colums.insertBefore(errorDiv, shift)
	}else {
		$.ajax({
			url:'http://localhost/blog.com/Database/uploadblog/storyupload.php',
			method:'POST',
			global:false,
			datatype:'string',
			data:{
				// author:author,
				time:time,
				storycontent:storycontent,
				storytitle:storytitle,
				date:date
			},
			beforeSend:function(){
				$('.spins').html("<img src='../Uploadsomething/image/wheel.gif'/> <h2>  Uploading  Your Story content </h2>");
				$('.spins').delay(10000).fadeOut(2000);
			},
			success:function(data){
				$('.story').hide().delay(12000).fadeIn('slow')
				$('.story').html(data)
				console.log(data)
			}







		})
	}	
})