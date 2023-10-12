<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pre-Service Listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                    @endif
                <form method = "POST" action="{{ route('customerappointment-store') }}">
                        @csrf
                    <div class="flex-items-center"><label for="First Name">First Name</label>
                    <div>
                    <input type="text" name="xfirstName" value="{{old('xfirstName')}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Middle Name">Middle Name</label>
                    <div>
                    <input type="text" name="xmiddleName" value="{{old('xmiddleName')}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Last Name">Last Name</label>
                    <div>
                    <input type="text" name="xlastName" value="{{old('xlastName')}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Appointment Purpose">Appointment Purpose</label>
                    <div>
                    <input type="text" name="xappointmentpurpose" value="{{old('xappointmentpurpose')}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Appointment Type">Appointment Type</label>
                    <div> 
                    <input type="text" name="xappointmenttype" value="{{old('xappointmenttype')}}"/>
                    </div>
</div>
                                   
             <button type ="submit"> Submit Info </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>