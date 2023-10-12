<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pre-Service Listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="background-color:red">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                    @endif
                <form method = "POST">
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
                       <div class="flex-items-center"><label for="Middle Name">Last Name</label>
                    <div>
                    <input type="text" name="xlastName" value="{{old('xlastName')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Contact Number">Contact Number</label>
                    <div> 
                    <input type="text" name="xcontactNumber" value="{{old('xcontactNumber')}}"/>
                    </div>
</div>
                 <div class="flex-items-center"><label for="Address">Address</label>
                    <div> 
                    <input type="text" name="xaddress" value="{{old('xaddress')}}"/>
                    </div>
</div>
               <div class="flex-items-center"><label for="Type Of Service">Type Of Service</label>
                    <div>
                    <select name="xtypeofservice">
                        <option value="Reformatting">Reformatting</option>
                        <option value="Replacement">Replacement</option>
                        <option value="Virus Removal">Virus Removal</option>
                        <option value="Computer Network Troubleshooting">Computer Network Troubleshooting</option>
                        <option value="Upgrade Hardware">Upgrade Hardware</option>
</select>
                    </div>
</div>
<div class="flex-items-center"><label for="Maintenance Required">Maintenance Required</label>
                    <div>
                    <select name="xmaintenancerequired">
                        <option value="Scheduled Maintenance">Scheduled Maintenance</option>
                        <option value="Preventive Maintenance">Preventive Maintenance</option>
                        <option value="Full Maintenance">Full Maintenance</option>
    
</select>
                    </div>
</div>
             <div class="flex-items-center"><label for="Problem Encountered">Problem Encountered</label>
                    <div>
                    <input type="text" name="xproblemencountered" value="{{old('xproblemencountered')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Customer Password">Customer Password</label>
                    <div>
                    <input type="text" name="xcustomerpassword" value="{{old('xcustomerpassword')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Assigned Staff">Assigned Staff</label>
                    <div>
                    <select name="xassignedstaff">
                        <option value="Scheduled Maintenance">Scheduled Maintenance</option>
                        <option value="Preventive Maintenance">Preventive Maintenance</option>
                        <option value="Full Maintenance">Full Maintenance</option>
    
</select>
                    </div>
</div>
             <button type ="submit"> Submit Info </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>