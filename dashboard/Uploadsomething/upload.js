

$('#uploadblog').click(function(e){
	e.preventDefault()

	const author = $.trim($('#author').val())
	const time = $.trim($('#time').val())
	const date = $.trim($('#date').val())
	const blogcontent  = $.trim($('#content').val())
	const titleblog = $.trim($('#blogTitle').val())

	if (author === '' || time ===null ||  date === null || blogcontent === ''|| titleblog === '' ) {
			const  errorDiv = document.createElement('div');
			errorDiv.className = 'notification errorDiv  has-background-warning has-text-semibold is-small mt-5';
			errorDiv.innerHTML = "please input something"
			const colums = document.querySelector('.for');
			const shift =  document.querySelector('.span');
			colums.insertBefore(errorDiv, shift)
	}else {
		$.ajax({
			url:'http://localhost/blog.com/Database/uploadblog/blogupload.php',
			method:'POST',
			global:false,
			datatype:'string',
			data:{
				author:author,
				time:time,
				blogcontent:blogcontent,
				titleblog:titleblog,
				date:date
			},
			beforeSend:function(){
				$('.spinner').html("<img src='../Uploadsomething/image/wheel.gif'/> <h2>  Uploading  Your Blog </h2>");
				$('.spinner').delay(10000).fadeOut(2000);
			},
			success:function(data){
				$('.final').hide().delay(12000).fadeIn('slow')
				$('.final').html(data)
				console.log(data)
			}







		})
	}	
})



