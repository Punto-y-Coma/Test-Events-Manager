<x-slider />

@foreach ($featuredMasterclasses as $featuredMasterclass)            
              <x-slider component 
                :name="$featuredMasterclass->name"
                :date="$featuredMasterclass->date"
                :vacants="$featuredMasterclass->vacants"
                :image="$featuredMasterclass->image"
              />
              
@endforeach