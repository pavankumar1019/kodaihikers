<script>
        $(document).ready(function(){
            $('#upload_carousels').on('click', function() {
                console.log("test");
            var file_data = $('.uploadimg').prop('files')[0];   
            var form_data = new FormData();
           
            $(".loder").css("visibility", "visible");
            
            $("#upload_carousels").attr("disabled", "disabled");
            var ext = $('.uploadimg').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['png','jpg','jpeg']) == -1)   {
                alert("only jpg and png images allowed");
                $(".loder").css("visibility", "hidden");
            
                return;
            }  
            var picsize = (file_data.size);
            console.log(picsize); /*in byte*/
            if(picsize > 2097152) /* 2mb*/
                {
                    alert("Image allowd less than 2 mb");
                    $(".loder").css("visibility", "hidden");
                    return;
                }
            form_data.append('file', file_data);   
            form_data.append('id', $('#id').val());   
            $.ajax({
                url: './upload_carousels/upload.php', /*point to server-side PHP script */
                dataType: 'text',  /* what to expect back from the PHP script, if anything*/
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                      	
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
                       $(".loder").css("visibility", "hidden");
                       $("#err").css("visibility", "hidden");
					}
					
				}
             });
        });
        })
        
        </script>