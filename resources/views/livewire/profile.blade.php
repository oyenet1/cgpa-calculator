 <div class="p-5 rounded bg-white container-fluid" style="margin-top: 20px!important">
     <div class="row justify-content-between">
         <div class="col-md-8">
             <form wire:submit.prevent="submit" class="row">
                 <div class="col-md-6 pr-1">
                     <div class="form-group">
                         <label for="" class="mb-0 p-0 noto-400"></label>
                         <input type="text" name="" id="" class="form-control" placeholder="">
                         @error('record')
                             <small id="helpId" class="text-danger m-0 font-weight-bold"> {{ $message }} </small>
                         @enderror
                     </div>
                 </div>
                 <div class="col-md-6 pr-1">
                     <div class="form-group">
                         <label for="" class="mb-0 p-0 noto-400"></label>
                         <input type="text" name="" id="" class="form-control" placeholder="">
                         @error('record')
                             <small id="helpId" class="text-danger m-0 font-weight-bold"> {{ $message }} </small>
                         @enderror
                     </div>
                 </div>
                 <div class="col-md-6 pr-1">
                     <div class="form-group">
                         <label for="" class="mb-0 p-0 noto-400"></label>
                         <input type="text" wire:model="faculty" id="faculty" class="form-control"
                             placeholder="Enter Faculty">
                         @error('faculty')
                             <small id="helpId" class="text-danger m-0 font-weight-bold"> {{ $message }} </small>
                         @enderror
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="" class="mb-0 p-0 noto-400"></label>
                         <input type="text" name="" id="" class="form-control" placeholder="">
                         @error('record')
                             <small id="helpId" class="text-danger m-0 font-weight-bold"> {{ $message }} </small>
                         @enderror
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
