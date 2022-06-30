<x-header />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap-4/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap-4/js/bootstrap.bundle.min.js')}}"></script>

    <title>Create</title>
</head>
<body>
    <x-auth-card>
        <h3>Enter user details</h3><br>

        <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
            
        @if (session()->has('status'))
            <div style="text-align: center; color: #009688">
                <h5>{{session('status')}}</h5>
            </div>
        @endif

        <form method="POST" action="{{ route('create') }}">
            @csrf

            <div class="form-row">
                <div class="col">
                    <x-label for="firstname" :value="__('Firstname')" />
                    <x-input type="text" class="form-control" name="firstname" id="firstname" :value="old('firstname')" required autofocus />
                    <span class="text-red-600">@error('firstname'){{$message}}@enderror</span>
                </div>
                <div class="col">
                    <x-label for="lastname" :value="__('Lastname')" />
                    <x-input type="text" class="form-control" name="lastname" id="lastname" :value="old('lastname')" />
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        <span class="text-red-600">@error('email'){{$message}}@enderror</span> 
                    </div>
                    <div class="form-group col">
                        <x-label for="mobile" :value="__('Mobile')" />
                        <x-input id="mobile" class="form-control" type="tel" name="mobile" :value="old('mobile')" required />
                        <span class="text-red-600">@error('mobile'){{$message}}@enderror</span>  
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="gender" :value="__('Gender')" />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="male" name="gender" value="Male" @if(old('gender') == 'Male') checked @endif required>Male
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" name="gender" value="Female" @if(old('gender') == 'Female') checked @endif>Female
                        </div>
                        <span class="text-red-600">@error('gender'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col">
                        <x-label for="dob" :value="__('DOB')" />
                        <x-input id="dob" class="form-control-inline block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
                        <span class="text-red-600">@error('dob'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                <span class="text-red-600">@error('address'){{$message}}@enderror</span>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <x-label for="city" :value="__('City')" />
                        <x-input type="text" class="form-control" name="city" id="city" :value="old('city')" required />
                        <span class="text-red-600">@error('city'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-md-4">
                        <x-label for="state" :value="__('State')" />
                        <x-input type="text" class="form-control" name="state" id="state" :value="old('state')" required />
                        <span class="text-red-600">@error('state'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-md-3">
                        <x-label for="zip" :value="__('Zip')" />
                        <x-input type="text" class="form-control" name="zip" id="zip" :value="old('zip')" required />
                        <span class="text-red-600">@error('zip'){{$message}}@enderror</span>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="qual" :value="__('Highest qualification')" />
                        <select class="form-select-inline block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            id="qualification" name="qualification">
                            <option value="{{NULL}}" @if(old('qualification') == '{{NULL}}') selected @endif>Select</option>
                            <option value="SSC/Matriculation" @if(old('qualification') == 'SSC/Matriculation') selected @endif>SSC/Matriculation</option>
                            <option value="Intermediate" @if(old('qualification') == 'Intermediate') selected @endif>Intermediate</option>
                            <option value="Graduation" @if(old('qualification') == 'Graduation') selected @endif>Graduation</option>
                            <option value="Post graduation" @if(old('qualification') == 'Post graduation') selected @endif>Post graduation</option>
                        </select>    
                    </div>
                    <div class="form-group col">
                        <x-label for="professiom" :value="__('Profession')" />
                        <x-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="bg-secondary inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" 
                href="/create">Clear</a>

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</body>
</html>