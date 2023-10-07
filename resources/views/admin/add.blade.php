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
                 <div class="flex-items-center"><label for="Contact Number">Address</label>
                    <div> 
                    <input type="text" name="xcontactNumber" value="{{old('xcontactNumber')}}"/>
                    </div>
</div>
               <div class="flex-items-center"><label for="gender">Type Of Service</label>
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
                       <div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Type Of Service">Type Of Service</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>
<div class="flex-items-center"><label for="Email">Email</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{old('xyear')}}"/>
                    </div>
</div>

             <button type ="submit"> Submit Info </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>