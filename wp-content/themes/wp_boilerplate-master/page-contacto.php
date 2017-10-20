<?php get_header() ?>
	<div class="col-md-4 col-md-offset-4 espacio">
		<?php echo do_shortcode( '[contact-form-7 id="255" title="contact"]' ); ?>
	</div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-xs-12 col-md-offset-3">
            	<h3>Need help calculating your purchase </h3>
              <div class="form-group">
                  <label for="peso">Ingrese valor Peso</label>
                  <input type="number" class="form-control" id="peso_input" placeholder="ingrese valor peso clp">
                  <button type="button" class="btn btn-default" id="btn_peso">Convertir</button>
              </div>
               <div class="form-group">
                  <label for="dolar">Ingrese valor Dolar</label>
                  <input type="number" class="form-control" id="dolar_input" placeholder="ingrese valor peso dolar">
                  <button type="button" class="btn btn-default" id="btn_dolar">Convertir</button>
              </div>
             
                
          </div>
        </div>
      </div>  
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="app.js"></script>
<script>
	$(document).ready(function(){
	var json = 0
	$.ajax({
		    	url:"http://mindicador.cl/api",  
		    	type:"GET",  
		    	dataType:"json",  
		    	success:function(data) {
		    		json = data
		      		$('#dolar').text(json.dolar.valor.toFixed(2)); 
		      		$('#euro').text(json.euro.valor.toFixed(2)); 
		      		$('#utm').text(json.utm.valor.toFixed(2)); 
		      		$('#uf').text(json.uf.valor.toFixed(2)); 
		      		
		    	}
		  	});

	$('#btn_peso').on('click', function(event){
						$('#dolar_input').val($('#peso_input').val() / json.dolar.valor)
						$('#euro_input').val($('#peso_input').val() / json.euro.valor)

					});

			$('#btn_dolar').on('click', function(event){
						$('#peso_input').val($('#dolar_input').val() * json.dolar.valor)
					});


});
</script>
	           <div class="row">
	           	<div class="col-md-4 col-md-offset-4 espacio">
	                <h3>Escoge tu tienda más cercana</h3>
	                <select class="form-control" id="city">
	                  <option value="drugstore">Drugstore</option>
	                  <option value="costanera">Costanera Center</option>
	                  <option value="casa">Casa Costanera</option>
	                </select>
	            </div>
	            <div class="col-md-8 col-md-offset-2 espacio">

	                <div id="map"></div>
	            </div>
	            
	        </div>
	    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script>
      var map;
      var coords = {
        'drugstore' : {lat:-33.4226128,lng:-70.6136923},
        'costanera' : {lat:-33.417989,lng:-70.6085788},
        'casa' : {lat:-33.3982713,lng:-70.6002519}
      }


      function initMap() {
        
        map = new google.maps.Map(document.getElementById('map'), {
          center: coords['drugstore'],
          zoom: 17
        });

        var marker = new google.maps.Marker({
              position: coords['drugstore'],
              map: map,
              title: 'Hello World!'
        });
      }


      $('#city').on('change',function(event){

            var _coords = coords[$(this).val()] 
            
            map.setCenter(_coords)
            
            var marker = new google.maps.Marker({
                  position: _coords,
                  map: map,
                  title: 'Hello World2!'
            });
      })
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXXUrfiYqLVYQrxtg08rYTgmJ5A1oGAEo&callback=initMap"
    async defer></script>
		


<?php get_footer() ?>