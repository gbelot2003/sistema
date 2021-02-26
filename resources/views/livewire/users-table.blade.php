<div>
    <div class="flex flex-col max-w-full overflow-x-hidden shadow-md m-2">
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 bg-white p-6 space-y-2 md:space-y-0">
            <div class="relative sm:col-span-2 md:col-span-3 lg:col-span-2">
                <input 
                    wire:model.lazy="search" 
                    type="text" 
                    class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-800 shadow-sm rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                    placeholder="   Search ..." />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="5 0 24 24" stroke="currentColor" class="absolute left-3 bottom-3 h-4 w-4 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
            </div>

            <div class="">
                <select wire:model="orderBy" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-800 shadow-sm rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm">
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="created_at">Sign Up Date</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>

            <div class="">
                <select wire:model="orderAsc" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-800 shadow-sm rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" id="grid-state">
                    <option value="1">Ascending</option>
                    <option value="0">Descending</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>

            <div class="">
                <select wire:model="perPage" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-800 shadow-sm rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" id="grid-state">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <button class="bg-indigo-800 text-white text-xs font-semibold py-2 rounded-md border-0">Add Schedule</button>
        </div>
        <table class="overflow-x-auto w-full bg-white">
            <thead class="bg-blue-100 border-b border-gray-300">
                <tr>
                    <th class="p-4 text-left text-sm font-medium text-gray-500">ID</th>
                    <th class="p-4 text-left text-sm font-medium text-gray-500">Name</th>
                    <th class="p-4 text-left text-sm font-medium text-gray-500">Email</th>
                    <th class="p-4 text-left text-sm font-medium text-gray-500">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="p-4 whitespace-nowrap">{{ $user->id }}</td>
                        <td class="p-4 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="p-4 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="p-4 whitespace-nowrap">{{ $user->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2">
            {!! $users->links() !!}
        </div>
        
    </div>
</div>