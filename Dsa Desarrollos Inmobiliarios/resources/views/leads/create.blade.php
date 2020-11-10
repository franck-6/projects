@extends('layouts.app')

@section('content')


 <section id="search_proj">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                                <h4 style=" text-align:center;border-bottom: 1px solid #297295;font-weight: 600;">¿Como podemos ayudarte?</h4>
                                <form action="/send_opportunity" method="post" role="form" class="contactForm">
                                {{ csrf_field() }}                               
                                <div style="margin-bottom: 2%;">
                                    <h4>¿Que estas buscando?</h4>                                    
                                   <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio0" name="customRadio0" id="q1-a" value="1" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">Monoambiente</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio0" name="customRadio0" id="q1-b" value="3" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">1 Dormitorio</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio0" name="customRadio0" id="q1-c" value="2" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">2 Dormitorios</label>
                                    </div>
                                </div>
                                <div style="margin-bottom: 2%;">
                                    <h4>¿En que estado?</h4>
                                   <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio1" name="customRadio1" id="q2-a"  value="1" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">Terminado</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio1" name="customRadio1" id="q2-b" value="3" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">Proximo a entregarse</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio1" name="customRadio1" id="q2-c" value="2" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">En construcción</label>
                                    </div>
                                </div>
                                <div style="margin-bottom: 2%;">
                                    <h4>¿Cuanto podes pagar de anticipo?</h4>
                                   <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio2" name="customRadio2" id="q3-a"  value="{{$parameters->advencedpayment_firstoption}} a {{$parameters->advancedpayment_secondoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1"> De ${{$parameters->advencedpayment_firstoption}} a ${{$parameters->advancedpayment_secondoption}}</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio2" name="customRadio2" id="q3-b" value="{{$parameters->advancedpayment_secondoption}} a {{$parameters->advancedpayment_thirdoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">De ${{$parameters->advancedpayment_secondoption}} a ${{$parameters->advancedpayment_thirdoption}}</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio2" name="customRadio2" id="q3-c" value="De 0 a {{$parameters->advancedpayment_thirdoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">Más de ${{$parameters->advancedpayment_thirdoption}}</label>
                                    </div>
                                </div>
                                <div style="margin-bottom: 4%;">
                                    <h4>¿Cuanto podes pagar como cuota?</h4>
                                   <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio3" name="customRadio3" id="q4-a"  value="{{$parameters->feemonth_firstoption}} a {{$parameters->feemonth_secondoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">De ${{$parameters->feemonth_firstoption}} a ${{$parameters->feemonth_secondoption}}</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio3" name="customRadio3" id="q4-b"  value="{{$parameters->feemonth_secondoption}} a {{$parameters->feemonth_thirdoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">De ${{$parameters->feemonth_secondoption}} a ${{$parameters->feemonth_thirdoption}}</label>
                                    </div>
                                    <div class="custom-control custom-radio leads-check">
                                      <input type="radio" id="customRadio3" name="customRadio3" id="q4-c" value="De 0 a {{$parameters->feemonth_thirdoption}}" class="custom-control-input input-custom">
                                      <label class="custom-control-label ledas-check-label margin-text" for="customRadio1">Más de ${{$parameters->feemonth_thirdoption}}</label>
                                    </div>
                                </div>
                               <button type="submit" class="btn btn-primary">Buscar</button>
                           </form>
                        </div>
                    </div>
                </div>
           
@endsection
