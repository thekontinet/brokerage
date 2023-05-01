<x-app-layout>
    <section class="max-w-xl p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow mt-md-0 dark:bg-gray-800 dark:border-gray-700">
        <header class="flex items-center justify-between mt-4 mb-8">
            <h4 class="text-lg font-medium">Edit User Info</h4>
            <form action="{{route('admin.users.destroy', $user)}}" method="POST" onsubmit="return confirm('This action will delete the user account. Are you sure of this ?')">
                @csrf
                @method('DELETE')
                <x-jet-button>Trash Profile</x-jet-button>
            </form>
        </header>
        <form action="{{route('admin.users.update', $user)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="name" name="name" id="name" value="{{old('name', $user->name)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" required>
                <x-jet-input-error for='name'/>
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" value="{{old('email', $user->email)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                <x-jet-input-error for='email'/>
            </div>

            <div class="mb-4">
                <label for="ignore_kyc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ignore KYC</label>
                <select id="ignore_kyc" name="ignore_kyc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Choose</option>
                    <option value="" {{$user->ignore_kyc ? '' : 'selected'}}>No</option>
                    <option value="1" {{$user->ignore_kyc ? 'selected' : ''}}>Yes</option>
                </select>
                <x-jet-input-error for='ignore_kyc'/>
            </div>

            <div class="flex items-center justify-between">
                <x-jet-button>Update Profile</x-jet-button>
                <x-jet-button class="bg-slate-50 hover:bg-slate-200 text-slate-800 border-slate-800" href="{{route('admin.users.index')}}">Go back</x-jet-button>
            </div>
        </form>
    </section>

</x-app-layout>
