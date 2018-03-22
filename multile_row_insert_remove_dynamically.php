<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<!-- Edit Terms Conditon section  -->
	<?php $i = 1; $sl = 0; $tech_flag = 1; $gen_flag = 1; $misc_flag =1; ?>
	<div class="col-md-12">	
		<h4><u>Technical Terms & Conditions</u></h4>											
		@foreach($terms_conditions as $key => $tc)
			@if($tc->tc_type == 1)
				<div class="row tech_list tech_list{{ ++$sl }}">
					<div class="col-md-12">
						<div class="col-md-1">
							<div class="form-group">
								<label for="tech_tc" class="sn tech_tc_sn tech_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?> </label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="hidden" name="tc_id[]" value="{{ $tc->id }}">
								<input type="hidden" name="type[]" value="1">
								<textarea name="tc[]" id="tech_tc" class="form-control" rows="3">{{ $tc->tc }}</textarea>
				            </div>
						</div>
						@if($tech_flag > 1)
							<div class="col-md-1">
								<div class="form-group">
				                    <a id="delete_tech_tc_{{ $sl }}" class ="deltc btn btn-danger" style="cursor:pointer;" onclick="delete_tech_tc({{ $sl }})">Remove</a>
				                </div>
							</div>
						@endif
					</div>
				</div>
				<?php $tech_flag++; ?>
			@endif
		@endforeach
		@if($tc_tech == 0) <!-- If Technical Part is empty   -->
			<div class="row tech_list tech_list{{ ++$sl }}">
				<div class="col-md-12">	
					<div class="col-md-1">
						<div class="form-group">
							<label for="tech_tc" class="sn tech_tc_sn tech_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?></label>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="hidden" name="type[]" value="1">
							<textarea name="tc[]" id="tech_tc" class="form-control" rows="3"></textarea>
			            </div>
					</div>
				</div>	
			</div>
		@endif
		@if($tc_tech == ($tech_flag-1)) <!-- Add more part  -->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group text-right">
		                <a class="add_more_technical_tc btn btn-primary" style="cursor:pointer;" id="{{ $sl }}" onclick="add_tech_tc()">Add More</a>
		            </div>				
				</div>
			</div>	
			<input type="hidden" name="tech" id="tech" value="{{ $sl }}"/>
		@endif
	</div>
	<div class="col-md-12">	
		<h4><u>General Terms & Conditions</u></h4>											
		@foreach($terms_conditions as $key => $tc)
			@if($tc->tc_type == 2)
				<div class="row general_list general_list{{ ++$sl }}">
					<div class="col-md-12">
						<div class="col-md-1">
							<div class="form-group">
								<label for="gen_tc" class="sn gen_tc_sn gen_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?> </label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="hidden" name="tc_id[]" value="{{ $tc->id }}">
								<input type="hidden" name="type[]" value="2">
								<textarea name="tc[]" id="gen_tc" class="form-control" rows="3">{{ $tc->tc }}</textarea>
				            </div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
			                    <a id="delete_general_tc_{{ $sl }}" class ="deltc btn btn-danger" style="cursor:pointer;" onclick="delete_general_tc({{ $sl }})">Remove</a>
			                </div>
						</div>
						
					</div>
				</div>
				<?php $gen_flag++; ?>
			@endif
		@endforeach
		@if($tc_gen == 0)
			<div class="row general_list general_list{{ ++$sl }}">
				<div class="col-md-12">
					<div class="col-md-1">
						<div class="form-group">
							<label for="gen_tc" class="sn gen_tc_sn gen_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?> </label>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="hidden" name="type[]" value="2">
							<textarea name="tc[]" id="gen_tc" class="form-control" rows="3"></textarea>
			            </div>
					</div>
					<div class="col-md-1">
						<div class="form-group">
		                    <a id="delete_general_tc_{{ $sl }}" class ="deltc btn btn-danger" style="cursor:pointer;" onclick="delete_general_tc({{ $sl }})">Remove</a>
		                </div>
					</div>	
				</div>
			</div>
		@endif
		@if($tc_gen == ($gen_flag-1))
			<div class="row">
				<div class="col-md-12">
					<div class="form-group text-right">
		                <a class="add_more_general_tc btn btn-primary" style="cursor:pointer;" id="{{ $sl }}" onclick="add_general_tc()">Add More</a>
		            </div>				
				</div>
			</div>	
			<input type="hidden" name="general" id="general" value="{{ $sl }}"/>
		@endif
	</div>
	<div class="col-md-12">	
		<h4><u>Miscellaneous Terms & Conditions</u></h4>
		@foreach($terms_conditions as $key => $tc)
			@if($tc->tc_type == 3)
				<div class="row miscellaneous_list miscellaneous_list{{ ++$sl }}">
					<div class="col-md-12">
						<div class="col-md-1">
							<div class="form-group">
								<label for="misc_tc" class="sn misc_tc_sn misc_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?> </label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="hidden" name="tc_id[]" value="{{ $tc->id }}">
								<input type="hidden" name="type[]" value="3">
								<textarea name="tc[]" id="misc_tc" class="form-control" rows="3">{{ $tc->tc }}</textarea>
				            </div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
			                    <a id="delete_miscellaneous_tc_{{ $sl }}" class ="deltc btn btn-danger" style="cursor:pointer; " onclick="delete_miscellaneous_tc({{ $sl }})">Remove</a>
			                </div>
						</div>
					</div>
				</div>
				<?php $misc_flag++; ?>	
			@endif
		@endforeach				
		@if($tc_misc == 0)
			<div class="row miscellaneous_list miscellaneous_list{{ ++$sl }}">
				<div class="col-md-12">
					<div class="col-md-1">
						<div class="form-group">
							<label for="misc_tc" class="sn misc_tc_sn misc_tc_sn_{{ $sl }}">Clause <?php echo $sl; ?> </label>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="hidden" name="type[]" value="3">
							<textarea name="tc[]" id="misc_tc" class="form-control" rows="3"></textarea>
			            </div>
					</div>
					<div class="col-md-1">
						<div class="form-group">
		                    <a id="delete_miscellaneous_tc_{{ $sl }}" class ="deltc btn btn-danger" style="cursor:pointer;" onclick="delete_miscellaneous_tc({{ $sl }})">Remove</a>
		                </div>
					</div>	
				</div>
			</div>
		@endif
		@if($tc_misc == ($misc_flag-1))
			<div class="row">
				<div class="col-md-12">
					<div class="form-group text-right">
		                <a class="add_more_miscellaneous_tc btn btn-primary" style="cursor:pointer;" id="{{ $sl }}" onclick="add_miscellaneous_tc()">Add More</a>
		            </div>				
				</div>
			</div>	
			<input type="hidden" name="miscellaneous" id="miscellaneous" value="{{ $sl }}"/>
		@endif
	</div>
		<script>	

		/*More add Technical*/
	    function add_tech_tc() {
	        var i = parseInt($("a.add_more_technical_tc").attr("id"));
	        var i_add = i + 1;
	        var technical_tc = '<div class="row tech_list tech_list'+i_add+'"  style="display:none;">';
	            technical_tc += '<div class="col-md-12">';
	            technical_tc += '<div class="col-md-1">';
	                technical_tc += '<div class="form-group">';
	                    technical_tc += '<label for="tech_tc" class="sn">Clause '+i_add+'</label>';
	                technical_tc += '</div>';
				technical_tc += '</div>';
				technical_tc += '<div class="col-md-10">';
					technical_tc += '<div class="form-group">';
						technical_tc += '<input type="hidden" name="tc_id[]" value="">';
						technical_tc += '<input type="hidden" name="type[]" value="1">';
						technical_tc += '<textarea name="tc[]" id="tech_tc" class="form-control" rows="3"></textarea>';
		            technical_tc += '</div>';
				technical_tc += '</div>';

	            technical_tc += '<div class="col-md-1">';
	                technical_tc += '<div class="form-group">';
	                    technical_tc += '<a id="delete_tech_tc_'+i_add+'" class ="deltc btn btn-danger" style="cursor:pointer;" onclick="delete_tech_tc('+i_add+')">Remove</a>';
	                    technical_tc += '</div>';
	                technical_tc += '</div>';
	            technical_tc += '</div>';
	            technical_tc += '</div>';
				
	            $("#tech").val(i_add);
	            $("a.add_more_technical_tc").attr("id",i_add);
	            $('div.tech_list').last().after(technical_tc);
	            $('div.tech_list'+i_add).slideToggle();

	            var i = parseInt($("a.add_more_general_tc").attr("id"));
	        	$("a.add_more_general_tc").attr("id",i+1);

	        	var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	        	$("a.add_more_miscellaneous_tc").attr("id",i+1);

	            setTimeout(function(){
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					$('.general_list').each(function(key, val){
						var text_label =$(this).find('.sn').text();
						var div_no =text_label.split(' ')[1];
						$(this).removeClass();
						$(this).addClass("row general_list general_list"+div_no);
					});
					
		            setTimeout(function(){
			            $('.miscellaneous_list').each(function(key, val){
							var text_label =$(this).find('.sn').text();
							var div_no =text_label.split(' ')[1];
							$(this).removeClass();
							$(this).addClass("row miscellaneous_list miscellaneous_list"+div_no);
						});
					},500);
					
		            var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);
	    }

	    function delete_tech_tc(n) {
	        $("div.tech_list"+n).slideToggle(function(){
	            $(this).remove();
	        });
	        
	        var i = parseInt($("a.add_more_technical_tc").attr("id"));
	        $("a.add_more_technical_tc").attr("id",i-1);

	        var i = parseInt($("a.add_more_general_tc").attr("id"));
	    	$("a.add_more_general_tc").attr("id",i-1);

	    	var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	    	$("a.add_more_miscellaneous_tc").attr("id",i-1);


			setTimeout(function(){
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					$('.tech_list').each(function(key, val){
						var text_label =$(this).find('.sn').text();
						var div_no =text_label.split(' ')[1];
						$(this).removeClass();
						$(this).addClass("row tech_list tech_list"+div_no);
					});
					
					$('.general_list').each(function(key, val){
						var text_label =$(this).find('.sn').text();
						var div_no =text_label.split(' ')[1];
						$(this).removeClass();
						$(this).addClass("row general_list general_list"+div_no);
					});
					
		            setTimeout(function(){
			            $('.miscellaneous_list').each(function(key, val){
							var text_label =$(this).find('.sn').text();
							var div_no =text_label.split(' ')[1];
							$(this).removeClass();
							$(this).addClass("row miscellaneous_list miscellaneous_list"+div_no);
						});
					},500);

					
		            var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);

			
	    }

	    /*More add General*/
	    function add_general_tc() {
	    	var len = $('.gen_tc_sn').length;
	        var i = parseInt($("a.add_more_general_tc").attr("id"));
	        var i_add = i + 1;
	        var general_tc = '<div class="row general_list general_list'+i_add+'"  style="display:none;">';
	            general_tc += '<div class="col-md-12">';
	            general_tc += '<div class="col-md-1">';
	                general_tc += '<div class="form-group">';
	                    general_tc += '<label for="gen_tc" class="sn gen_tc_sn gen_tc_sn_'+len+'">Clause '+i_add+' </label>';
	                general_tc += '</div>';
				general_tc += '</div>';
				general_tc += '<div class="col-md-10">';
					general_tc += '<div class="form-group">';
						general_tc += '<input type="hidden" name="tc_id[]" value="">';
						general_tc += '<input type="hidden" name="type[]" value="2">';
						general_tc += '<textarea name="tc[]" id="gen_tc" class="form-control" rows="3"></textarea>';
		            general_tc += '</div>';
				general_tc += '</div>';

	            general_tc += '<div class="col-md-1">';
	                general_tc += '<div class="form-group">';
	                    general_tc += '<a id="delete_general_tc_'+i_add+'" class ="deltc btn btn-danger" style="cursor:pointer;"  onclick="delete_general_tc('+i_add+')">Remove</a>';
	                    general_tc += '</div>';
	                general_tc += '</div>';
	            general_tc += '</div>';
	            general_tc += '</div>';

	            $("#general").val(i_add);
	            $("a.add_more_general_tc").attr("id",i_add);
	            $('div.general_list').last().after(general_tc);
	            $('div.general_list'+i_add).slideToggle();
	            
	            var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	        	$("a.add_more_miscellaneous_tc").attr("id",i+1);


				setTimeout(function(){
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					setTimeout(function(){
			            $('.miscellaneous_list').each(function(key, val){
							var text_label =$(this).find('.sn').text();
							var div_no =text_label.split(' ')[1];
							$(this).removeClass();
							$(this).addClass("row miscellaneous_list miscellaneous_list"+div_no);
						});
					},500);

					var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);
	            
	    }
	        
	    function delete_general_tc(n) {
	        $("div.general_list"+n).slideToggle(function(){
	            $(this).remove();
	        });

	        var i = parseInt($("a.add_more_general_tc").attr("id"));
	        $("a.add_more_general_tc").attr("id",i-1);

	        var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	        $("a.add_more_miscellaneous_tc").attr("id",i-1);


	        
			setTimeout(function(){
					
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					$('.general_list').each(function(key, val){
						var text_label =$(this).find('.sn').text();
						var div_no =text_label.split(' ')[1];
						$(this).removeClass();
						$(this).addClass("row general_list general_list"+div_no);
					});
					
		            setTimeout(function(){
			            $('.miscellaneous_list').each(function(key, val){
							var text_label =$(this).find('.sn').text();
							var div_no =text_label.split(' ')[1];
							$(this).removeClass();
							$(this).addClass("row miscellaneous_list miscellaneous_list"+div_no);
						});
					},500);

					
		            var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);
	    }

	    /*More add General*/
	    function add_miscellaneous_tc() {
	    	var len = $('.misc_tc_sn').length;
	        var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	        var i_add = i + 1;
	        var miscellaneous_tc = '<div class="row miscellaneous_list miscellaneous_list'+i_add+'"  style="display:none;">';
	            miscellaneous_tc += '<div class="col-md-12">';
	            miscellaneous_tc += '<div class="col-md-1">';
	                miscellaneous_tc += '<div class="form-group">';
	                    miscellaneous_tc += '<label for="misc_tc" class="sn misc_tc_sn misc_tc_sn_'+len+'">Clause '+i_add+'</label>';
	                miscellaneous_tc += '</div>';
				miscellaneous_tc += '</div>';
				miscellaneous_tc += '<div class="col-md-10">';
					miscellaneous_tc += '<div class="form-group">';
						miscellaneous_tc += '<input type="hidden" name="tc_id[]" value="">';
						miscellaneous_tc += '<input type="hidden" name="type[]" value="3">';
						miscellaneous_tc += '<textarea name="tc[]" id="misc_tc" class="form-control" rows="3"></textarea>';
		            miscellaneous_tc += '</div>';
				miscellaneous_tc += '</div>';

	            miscellaneous_tc += '<div class="col-md-1">';
	                miscellaneous_tc += '<div class="form-group">';
	                    miscellaneous_tc += '<a id="delete_miscellaneous_tc_'+i_add+'" class ="deltc btn btn-danger" style="cursor:pointer;"  onclick="delete_miscellaneous_tc('+i_add+')">Remove</a>';
	                    miscellaneous_tc += '</div>';
	                miscellaneous_tc += '</div>';
	            miscellaneous_tc += '</div>';
	            miscellaneous_tc += '</div>';

	            $("#miscellaneous").val(i_add);
	            $("a.add_more_miscellaneous_tc").attr("id",i_add);
	            $('div.miscellaneous_list').last().after(miscellaneous_tc);
	            $('div.miscellaneous_list'+i_add).slideToggle();

	            setTimeout(function(){
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);
	            
	    }
	        
	    function delete_miscellaneous_tc(n) {
	        $("div.miscellaneous_list"+n).slideToggle(function(){
	            $(this).remove();
	        });
	        
	        var i = parseInt($("a.add_more_miscellaneous_tc").attr("id"));
	        $("a.add_more_miscellaneous_tc").attr("id",i-1);


	        setTimeout(function(){
					var sn =1, text_label=0, onclick_function ='', a_id =''; 
					$('.sn').each(function(key, val){
						//var text_label =$(this).text().split(' ')[1];
						$(this).html('Clause ' +sn);
						sn += 1;
					});

					$('.miscellaneous_list').each(function(key, val){
							var text_label =$(this).find('.sn').text();
							var div_no =text_label.split(' ')[1];
							$(this).removeClass();
							$(this).addClass("row miscellaneous_list miscellaneous_list"+div_no);
						});

					var dtc =2; 
					$('.deltc').each(function(key, val){
						var str =$(this).attr('id');
						var text_del = str.substring(0, str.lastIndexOf("_"));
						//alert(text_del);
						$(this).removeAttr('id onclick');
						$(this).attr({'id':text_del+'_'+dtc, 'onclick': text_del+'('+dtc+')'});
						dtc += 1;
					});

	            },500);

	    }

	</script>

</body>
</html>
