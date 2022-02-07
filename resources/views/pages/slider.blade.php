@foreach ($featured_masterclasses as $featured_masterclass)            
              <x-slider component 
                :name="$featured_masterclass->name"
                :date="$featured_masterclass->date"
                :time="$featured_masterclass->time"
                :vacants="$featured_masterclass->vacants"
                :image="$featured_masterclass->image"
                :id="$featured_masterclass->id"
              />
              
@endforeach