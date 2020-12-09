
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2">Fecha inicial
            <div class="form-group">           
             <input wire:model.lazy="fecha_ini" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Haz click">
           </div>
         </div>
    
        <div class="col-sm-12 col-md-2 col-lg-2 text-left">
           <div class="form-group">Fecha final
      <input wire:model.lazy="fecha_fin" 
            wire:keydown.enter="render" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Haz click">
           </div>
       </div>
    </div>
        
  