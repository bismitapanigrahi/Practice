<x-header />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <x-auth-card>
        <h3>Edit details</h3><br>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
        @if (session()->has('status'))
            <div style="text-align: center; color: #009688">
                <h5>{{session('status')}}</h5>
            </div>
        @endif

        <form method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col">
                    <x-label for="firstname" :value="__('Firstname')" />
                    <x-input type="text" class="form-control" name="firstname" id="firstname" :value="old('firstname', $member->firstname)" required />
                </div>
                <div class="col">
                    <x-label for="lastname" :value="__('Lastname')" />
                    <x-input type="text" class="form-control" name="lastname" id="lastname" :value="old('lastname', $member->lastname)" />
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $member->email)" required />
                    </div>
                    <div class="form-group col">
                        <x-label for="mobile" :value="__('Mobile')" />
                        <x-input id="mobile" class="form-control" type="tel" name="mobile" :value="old('mobile', $member->phno)" required />
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="gender" :value="__('Gender')" />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="male" name="gender" required value="Male" @if($member->gender == 'Male') checked @endif>Male
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" name="gender" value="Female" @if($member->gender == 'Female') checked @endif>Female
                        </div>
                    </div>
                    <div class="form-group col">
                        <x-label for="dob" :value="__('DOB')" />
                        <x-input id="dob" class="form-control-inline block mt-1 w-full" type="date" name="dob" :value="old('dob', $member->dob)" required />
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $member->address)" required />
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <x-label for="city" :value="__('City')" />
                        <x-input type="text" class="form-control" name="city" id="city" :value="old('city', $member->city)" required />
                    </div>
                    <div class="form-group col-md-4">
                        <x-label for="state" :value="__('State')" />
                        <x-input type="text" class="form-control" name="state" id="state" :value="old('state', $member->state)" required />
                    </div>
                    <div class="form-group col-md-3">
                        <x-label for="zip" :value="__('Zip')" />
                        <x-input type="text" class="form-control" name="zip" id="zip" :value="old('zip', $member->zip)" required />
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="form-row">
                    <div class="form-group col">
                        <x-label for="qual" :value="__('Highest qualification')" />
                        <select class="form-select-inline block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            id="qualification" name="qualification">
                            <option value="{{NULL}}" @if('{{NULL}}' == $member->qualification) selected @endif>Select</option>
                                <option value="SSC/Matriculation" @if('SSC/Matriculation' == $member->qualification) selected @endif>SSC/Matriculation</option>
                                <option value="Intermediate" @if('Intermediate' == $member->qualification) selected @endif>Intermediate</option>
                                <option value="Graduation" @if('Graduation' == $member->qualification) selected @endif>Graduation</option>
                                <option value="Post graduation" @if('Post graduation' == $member->qualification) selected @endif>Post graduation</option>
                        </select>    
                    </div>
                    <div class="form-group col">
                        <x-label for="professiom" :value="__('Profession')" />
                        <x-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession', $member->profession)" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</body>
</html>