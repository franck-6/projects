@extends('layouts.app')

@section('content')

 <section id="search_proj">
	      		<div class="container">
	        		<div class="row">
	          			<div class="span12">
								<h4 style="	text-align:center;border-bottom: 1px solid #297295;font-weight: 600;">Resultado de su busqueda</h4>
								@if(!$buildings->isEmpty())

									@if($opportunity == 1)

										@foreach($buildings as $building)

										@if($building->available > 0)

											<div>										
												<li style="list-style:none;" class="leads item-thumbs span3 design" data-id="id-0" data-type="web">
					                        		<img style="border-radius: 2%;" src="/storage/{{$building->image}}" alt="{{$building->name}}" title="{{$building->name}}">
					                        		<a id="{{$building->id}}" title="{{$building->name}}"><h5>{{$building->name}}</h5></a>  
					                    		</li>			                    				                    		
											</div>
										<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										    <h3 id="myModalLabel">Complete información de contacto adicional</h3>
										  </div>
										  <div class="modal-body">
										    <p><form action="/data" method="post" role="form" class="contactForm" >
										    	{{ csrf_field() }}
										    	<input type="hidden" id="identificador" name="identificador" value="{{$building->id}}">
										    	<div class="custom-control custom-radio leads-check">										    		
			                                      <input type="text" id="nyp" name="nyp" id="q1-a" placeholder="Nombre y Apellido" ="" class="custom-control-input">
			                                    </div>
			                                   <div class="custom-control custom-radio leads-check">										    		
			                                      <input type="text" id="telefono" name="telefono" id="q1-a" placeholder="Teléfono" class="custom-control-input">
			                                    </div>
			                                    <div class="custom-control custom-radio leads-check">										    		
			                                      <input type="text" id="mail" name="mail" id="q1-a" placeholder="Mail" class="custom-control-input">
			                                    </div>
			                                    <div class="modal-footer">
										    <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
											    	<button type="submit" class="btn btn-primary">Enviar</button>
											  </div>
										    </form></p>
										  </div>
										  
										</div>

										
										@else

										<h5 style="margin-bottom: 100px;">No se encuentran viviendas disponibles pero podes contactarte con nosotros para notificarte ante novedades</h5>
										<button type="submit" class="btn btn-primary"><a style="color:white;" href="/contact">CONTACTO</a></button>

										@endif

										@endforeach



									@else

										@foreach($buildings as $building)
										<div>
											<a href="/building/{{$building->id}}" title="{{$building->name}}">									
												<li style="list-style:none;"class="item-thumbs span3 design" data-id="id-0" data-type="web">
					                        		<img style="border-radius: 2%;" src="/storage/{{$building->image}}" alt="{{$building->name}}" title="{{$building->name}}">
					                        		<h5>{{$building->name}}</h5>  
					                    		</li>
					                    	</a>				                    				                    		
										</div>									
										@endforeach

									@endif

								@else
								
									<h5 style="margin-bottom: 100px;">No se encontraron resultados acordes a su busqueda</h5>	

								@endif
						</div>
					</div>
				</div>
</section>		
@endsection
@section("jsfooter")
   
<script>
$(document).ready(function(){
$(".leads").click(function(){

	$('#myModal').modal(options)
});
});

</script>
@append